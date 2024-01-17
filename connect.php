<?php 
$servername = "localhost";
$database = "sekiro";
$username = "root";
$password = "";
return mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
?>