<?php //server.php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register_db";

    //Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Check Connection
    if (!$conn) {
        die("Connection failed เชื่อมต่อล้มเหลว" . mysqli_connect_error());
    } 
?>
