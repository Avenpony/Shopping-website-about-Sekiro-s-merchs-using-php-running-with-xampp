<?php
    $conn = require('connect.php');
    // if(isset($_POST['submit']))
    // {

    // }
    $check_cart = mysqli_query($conn, "SELECT * FROM cart");
    if(isset($_POST['conti']))
    {
        while($row_cart2 = mysqli_fetch_array($check_cart)) { 
        $id = $row_cart2['ID'];
        $q = $_POST[$id];
        $update = mysqli_query($conn, "UPDATE cart SET Quantity = $q WHERE ID=$id");
        }
        header("Location:http://localhost/Sekiro/index.php");
    }
    if(isset($_POST['upcart']))
    {
        while($row_cart2 = mysqli_fetch_array($check_cart)) { 
        $id = $row_cart2['ID'];
        $q = $_POST[$id];
        $update = mysqli_query($conn, "UPDATE cart SET Quantity = $q WHERE ID=$id");
        }
        header("Location:http://localhost/Sekiro/shoping-cart.php");
    }

    while($row_cart2 = mysqli_fetch_array($check_cart)) {
    $id = $row_cart2['ID'];
    if(isset($_POST['delete'.$id])) {
        $update = mysqli_query($conn, "DELETE FROM cart WHERE ID=$id");
        header("Location:http://localhost/Sekiro/shoping-cart.php");
    }
    }
?>