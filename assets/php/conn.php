<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user-aztech";

    $conn = new mysqli($host, $username, $password, $dbname);
    if($conn->connect_error) {
        die("connect error: " . $conn->connect_error);
    }
?>