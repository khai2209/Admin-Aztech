<?php
    require "conn.php";
    $sid = $_GET['sid'];

    $delete = "DELETE from account WHERE uid = $sid";
    mysqli_query($conn, $delete);
    echo "Successfully deleted";

    if(mysqli_query($conn, $delete)){
        header("Location: ../../index.php");
    }
?>