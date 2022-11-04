<?php

    include('config.php'); 

    // sql to delete a record
    $sql = "DELETE FROM Users";

        if ($conn->query($sql) === TRUE) {
        echo "Data deleted successfully";
        header("location:Users.php");
        } else {
        echo "Error deleting data: " . $conn->error;
        }

        $conn->close();
?>