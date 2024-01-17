<?php
    $conn = require('connect.php');
    $coupon_name = $_POST['coupon'];
    if(isset($_POST['apply'])) {
    $get_coupon = mysqli_query($conn, "SELECT * FROM coupons WHERE NameC = '$coupon_name'");
    if(mysqli_num_rows($get_coupon) != 0) {
        $row_coupon = mysqli_fetch_assoc($get_coupon);
        $coupon = $row_coupon['Discount'];
        $update_coupon = mysqli_query($conn, "UPDATE cart SET Coupons = '$coupon'");
        //echo 1;
        //echo $row_coupon['NameC'];
        header("Location:http://localhost/Sekiro/shoping-cart.php");
    }
}
    if(isset($_POST['remove'])) {
        $update_coupon = mysqli_query($conn, "UPDATE cart SET Coupons = '0'");
        header("Location:http://localhost/Sekiro/shoping-cart.php");
    }
    header("Location:http://localhost/Sekiro/shoping-cart.php");
?>