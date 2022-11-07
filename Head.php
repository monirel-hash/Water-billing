
<div class="log">
    <div class="head">
        <div>
            <h1 class="logo">Amendis System</h1>
        </div>
    <?php 
    include('config.php'); 
    session_start();
    echo"Welcome Dear, " .$_SESSION["name"];

    ?>