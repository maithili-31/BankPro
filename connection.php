<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "bank";
    $conn = mysqli_connect($servername,$username,$password,$db);
    
    if (!$conn) {
        die("Connection Error!" .mysqli_connect_error());
    }
?>