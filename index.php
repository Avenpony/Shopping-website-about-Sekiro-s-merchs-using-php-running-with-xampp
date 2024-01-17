<?php
    $conn = require('connect.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sekiro Fanpage</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <!-- Font bellow didn't work as expected -->
    <!-- <style>@font-face { font-family: Minion_Pro_Regular; src: url('minion_pro_regular-webfont.woff2'); }
    * { font-family: Minion_Pro_Regular;}</style> -->

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to the top"><span class="fa fa-angle-up"></span></button>

    <script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
    </script>
    <!-- Page Loading thingy -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin (Above Cat) -->
    <?php require('header.php'); ?>
    <!-- Header Section End -->

    <!-- Categories and Big image Section Begin -->
    <?php require('hero.php'); ?>
    <!--  Categories and Big image Section End -->

    <!-- Silder thingy Section Begin -->
    <?php require('slider.php'); ?>
    <!-- Slider thingy Section End -->

    <!-- Featured Section Begin -->
    <?php require('featured_products.php'); ?>
    <!-- Featured Section End -->

    <!-- Useless Banner Begin -->
    <?php require('banner.php'); ?>
    <!-- Useless Banner End -->

    <!-- Products Section Begin -->
    <?php require('products.php'); ?>
    <!-- Products Section End -->

    <!-- I don't know what to do with this Section Begin -->
    <?php require('guides.php'); ?>
    <!-- I don't know what to do with this Section End -->

    <!-- Footer Section Begin -->
    <?php require('footer.php'); ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>