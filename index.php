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
    <title>Login - New</title>
</head>
<body>
    
<?php 
include('config.php'); 
session_start();

if(isset($_POST['login'])){
$uname=$_POST['user'];
$password=$_POST['pass'];

//SELECT `ID_User`, `Name`, `Pass`, `Mail` FROM `Users` WHERE 1
$sql = "select * from Users where Name='$uname'  AND Pass='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    while( $row=$result->fetch_assoc()) {    
        $_SESSION["name"]=$row['Name'];

        header("location:home.php");

    }
}else{
    echo"<h2 style='color:white;'>UserName Or PassWord Failed!</h2>";
}
}

?>
    <div class="container">
        <div class="log" style="width: 300px">
        <h2 style="color:white;">Sign In :</h2>
        <form action="" method="post">
            <input type="text" name="user" placeholder="User :"><br>
            <input type="password" name="pass" placeholder="PassWord :"><br>
            <a href="#">PassWord Recovery!</a><br>
            <input type="submit" name="login" value="Login" class="btn btn-success">
        </form>
        </div>
    </div>

</body>
</html>