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

    <?php
    //getting id from url
        $USER_ID = $_GET['id'];

    //selecting data associated with this particular id
        $result = mysqli_query($conn, "SELECT * FROM Users WHERE ID_User=$USER_ID");

        while($res = mysqli_fetch_array($result))
        {
            $name = $res['Name'];
            $pass = $res['Pass'];
            $mail = $res['Mail'];
        }
    ?>
<div class="p">
    <div class="phead">
        <h5>Update User :</h5>
    </div>
    <div class="pbody">
        <form method="post" action="">
            <table class="table">
                <tr>
                    <td>Name :</td>
                    <td><input type="text" name="Name" value="<?php echo $name ;?>"></td>
                </tr>
                <tr>
                    <td>Pass :</td>
                    <td><input type="text" name="Pass" value="<?php echo $pass ;?>"></td>
                </tr>
                <tr>
                    <td>Mail :</td>
                    <td><input type="text" name="Mail" value="<?php echo $mail ;?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="btn btn-success" style="width:200px;" type="submit" name="update" value="Update">
                    <a href="Users.php" class="btn btn-danger" style="width:200px;" type="submit" name="return" >Return</a></td>
                </tr>
            </table>
        </form>
    </div>
<?php
    //INSERT INTO `Users`(`ID_User`, `Name`, `Pass`, `Mail`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')

    if(isset($_POST['update'])){
        $Name = $_POST['Name'];
        $Pass = $_POST['Pass'];
        $Mail = $_POST['Mail'];
        //UPDATE products SET
        //        $result = mysqli_query($mysqli, "UPDATE products SET name='$name', qty='$qty', price='$price' WHERE id=$id");
        $sql = "UPDATE Users SET Name='$Name' , Pass='$Pass', Mail='$Mail' WHERE ID_User=$USER_ID";

        if ($conn->query($sql) === TRUE) {
            echo "User Updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }
    ?>