<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css.css">
    <title>Home - New</title>
</head>
<body>
    <?php
    require_once "Head.php";
    require_once "Nav.php";
    ?>

<div class="p">
    <div class="phead">
    <h5>Clients List</h5>
        <a rel="facebox" href="addclient.php">
            <button type="button" class="btn btn-primary btn-xs">Add Client</button>
        </a>
        <a href="delClients.php">
            <button type="button" class="btn btn-danger btn-xs">Delete all</button>
        </a>
    </div>

    <div class="pbody">
        <?php
        
            $sql = "SELECT * FROM Clients";
            $result = $conn->query($sql);
            //SELECT `ID_User`, `Name`, `Pass`, `Mail` FROM `Users` WHERE 1
            //INSERT INTO `Clients` (`ID_Client`, `Firstname`, `Lastname`, `Address`, `No`, `Phone`) VALUES ('1', 'mohamed', 'el', 'av taza ', '22', '0698211331');
            echo"
            <table class='mytable table table-bordered'>
                <thead><tr>
                    <th>ID_Client</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Address</th>
                    <th>No</th>
                    <th>Phone</th>
                    <th>edit</th>
                    </tr></thead>
                ";
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    $id = $row['ID_Client'];
                    $name = $row['Firstname'];
                echo "<form method='post'><tr class=''>
                    <td>".$row['ID_Client']."</td>
                    <td>".$row['Firstname']."</td>
                    <th>".$row['Lastname']."</th>
                    <td>".$row['Address']."</td>
                    <td>".$row['No']."</td>
                    <td>".$row['Phone']."</td>
                    <td>".'<a href="Updateclient.php?id='.$id.'"><input type="button" value="Edit" class="btn btn-success btn-sm"></a><a>
                    <input type="submit" name="del" value="Delet" class="btn btn-danger btn-sm"></a>'."</td></form>
                ";
            }
        }

        if(isset($_POST['del'])){
            $del = "DELETE FROM Clients WHERE ID_User='$id'";

            if ($conn->query($del) === TRUE) {
                echo "<p>Client: $name Deleted successfully</p>";
            } else {
                echo "Error: ".$del."<br>".$conn->error;
            }
        }
            
        ?>
    </div>
</div>

<body>
</html>