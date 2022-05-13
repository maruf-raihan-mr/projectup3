<?php
    session_start();

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "tms";
    
    $conn = mysqli_connect($server, $username, $password, $database);
?>