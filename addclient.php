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
        <h5>Add New client :</h5>
    </div>
    <div class="pbody">
        <form method="post" action="">
            <table class="table">
                <tr>
                    <td>Firstname :</td>
                    <td><input type="text" name="FName" placeholder="Firstname"></td>
                </tr>
                <tr>
                    <td>Lastname :</td>
                    <td><input type="text" name="LName" placeholder="Lastname"></td>
                </tr>
                <tr>
                    <td>Address :</td>
                    <td><input type="text" name="Adress" placeholder="Address"></td>
                </tr>
                <tr>
                    <td>No :</td>
                    <td><input type="number" name="No" placeholder="No"></td>
                </tr>
                <tr>
                    <td>Phone :</td>
                    <td><input type="text" name="Phone" placeholder="Phone"></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="btn btn-success" style="width:200px;" type="submit" name="add" value="add"></td>
                </tr>
            </table>
        </form>
    </div>
<?php
    //INSERT INTO `Clients` (`ID_Client`, `Firstname`, `Lastname`, `Address`, `No`, `Phone`) VALUES ('1', 'mohamed', 'el', 'av taza ', '22', '0698211331');
    if(isset($_POST['add'])){
        $FName = $_POST['FName'];
        $LName = $_POST['LName'];
        $Adress = $_POST['Adress'];
        $No = $_POST['No'];
        $Phone = $_POST['Phone'];

        $sql = "INSERT INTO Clients(Firstname, Lastname, Address, No, Phone) VALUES('$FName','$LName','$Adress','$No','$Phone')";

        if ($conn->query($sql) === TRUE) {
            echo "Client Add successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }
    ?>