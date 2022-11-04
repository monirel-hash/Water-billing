<?php

    include('config.php'); 

    // sql to delete a record
    $sql = "DELETE FROM Clients";

        if ($conn->query($sql) === TRUE) {
        echo "Data deleted successfully";
        header("location:Clients.php");
        } else {
        echo "Error deleting data: " . $conn->error;
        }

        $conn->close();
?>