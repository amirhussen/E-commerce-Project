<?php 
    
    $db_host = "localhost";
    $db_user = "root";
    $pass = "";
    $db= "alhaj";

    // Create connection
    $conn = new mysqli($db_host, $db_user, $pass, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully";
?>
