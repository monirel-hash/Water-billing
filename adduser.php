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
        <h5>Add New User :</h5>
    </div>
    <div class="pbody">
        <form method="post" action="">
            <table class="table">
                <tr>
                    <td>Name :</td>
                    <td><input type="text" name="Name" placeholder="Name"></td>
                </tr>
                <tr>
                    <td>Pass :</td>
                    <td><input type="text" name="Pass" placeholder="Pass"></td>
                </tr>
                <tr>
                    <td>Mail :</td>
                    <td><input type="text" name="Mail" placeholder="Mail"></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="btn btn-success" style="width:200px;" type="submit" name="add" value="add"></td>
                </tr>
            </table>
        </form>
    </div>
<?php
    //INSERT INTO `Users`(`ID_User`, `Name`, `Pass`, `Mail`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')

    if(isset($_POST['add'])){
        $Name = $_POST['Name'];
        $Pass = $_POST['Pass'];
        $Mail = $_POST['Mail'];

        $sql = "INSERT INTO Users(Name, Pass, Mail) VALUES('$Name','$Pass','$Mail')";

        if ($conn->query($sql) === TRUE) {
            echo "User Add successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }
    ?>