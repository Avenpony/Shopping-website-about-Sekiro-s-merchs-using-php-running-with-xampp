<?php
    $conn = require('connect.php');
    if(isset($_GET['id']) && !empty($_GET['id'])) {
        $update = mysqli_query($conn, "UPDATE cart SET Quantity=Quantity+1 WHERE ID='$id'");
    }
?>