<?php $conn = require('connect.php'); 
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $add_cart = mysqli_query($conn, "INSERT INTO cart(ID,Name,Image,Price) SELECT ID,Name,Image,Price FROM products WHERE ID='$id'");

    header("Location:http://localhost/Sekiro/shoping-cart.php");
} else $id = '';
$cart = mysqli_query($conn, "SELECT * FROM products WHERE ID='$id'");
$row_cart = mysqli_fetch_assoc($cart);
$get_coupon_from_cart = mysqli_query($conn, "SELECT Coupons FROM cart");
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
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->
    <?php require('header.php'); ?>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <?php $cat = mysqli_query($conn, "SELECT categories FROM texts");
                            while($row_cat = mysqli_fetch_array($cat)) { ?>
                                <li><a href="shop-grid.php?id=<?php echo $row_cat['categories'] ?>#cat"><?php echo $row_cat['categories'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do you need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 0767.333.624</h5>
                                <span>Support when we can</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/longsekiro.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <a href="#">Shopping Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <form action="update.php" name="cart" method="POST">
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>SubTotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $show_cart = mysqli_query($conn, "SELECT * FROM cart");
                                while($row_cart = mysqli_fetch_array($show_cart)) { ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/product/<?php echo $row_cart['Image'] ?>" alt="">
                                        <h5><?php echo $row_cart['Name'] ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        $<?php echo $row_cart['Price'] ?>
                                        <input type="hidden" id="1<?php echo $row_cart['ID'] ?>" value="<?php echo $row_cart['Price'] ?>">
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <!-- Sometimes it works and sometimes it doesn't -->
                                                <input type="number" id="2<?php echo $row_cart['ID'] ?>" name="<?php echo $row_cart['ID'] ?>" value="<?php echo $row_cart['Quantity'] ?>" onchange="SubTotal(<?php echo $row_cart['ID'] ?>)" onchange="reload()" min=1 max =100>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total" id="c<?php echo $row_cart['ID'] ?>">
                                    </td>
                                    <script>
                                        function SubTotal(cartid) {
                                        //var id = cartid;
                                        var price = document.getElementById('1'+cartid).value;
                                        var quantity = document.getElementById('2'+cartid).value;
                                        //var subtotal2 = price*q;
                                        var subtotal = price*quantity;
                                        //var subtotal = document.getElementById('1').value;
                                        document.getElementById('c'+cartid).innerHTML='$' + Math.round(subtotal * 100) / 100;
                                        //document.getElementById('c'+cartid).innerHTML= Math.round(subtotal * 100) / 100;
                                        //alert('subtotal'+cartid);
                                        //alert(total);
                                        //total -= subtotal2;
                                        //total += subtotal;
                                        //alert(total);
                                        //q = document.getElementById('2'+cartid).value;
                                        //window.location = "http://localhost:8080/Sekiro/shoping-cart.php";
                                        }
                                        SubTotal(<?php echo $row_cart['ID'] ?>);
                                        //document.getElementById('ctotal').innerHTML='$'+ Math.round(total * 100) / 100;
                                    </script>
                                    <td class="shoping__cart__item__close">
                                    <button type="submit" name="delete<?php echo $row_cart['ID'] ?>" class="delete" value ="1">
                                    <span class="icon_close"></span></button>
                                    </td>
                                </tr>
                                <?php } ?>
                                <!-- <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/cart/cart-2.jpg" alt="">
                                        <h5>Fresh Garden Vegetable</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        $39.00
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        $39.99
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <button type = submit name="conti" class="primary-btn cart-btn continue">CONTINUE SHOPPING</button>
                        <button type="submit" name="upcart" id="updatecart" class="primary-btn cart-btn cart-btn-right" value ="1"><span class="icon_loading"></span>
                            Upadate Cart</button>
                    </div>
                </div>

                <!-- Update Cart script -->
                <script> //Update button follows your mouse scroll, kinda cool
                    let upcart = document.getElementById("updatecart");
                    window.onscroll = function() {scrollFunction()};
                    function scrollFunction() {
                        upcart.style.display = "block";
                    }
                    
                    //The codes below are almost useless and just for testng

                    // var subtotal = document.getElementByName('csubtotal');
                    // function SubTotal() {
                    //     var price = document.getElementById('1<?php //echo $row_cart['ID'] ?>').value;
                    //     var quantity = document.getElementById('2<?php //echo $row_cart['ID'] ?>').value;
                    //     var subtotal = price*quantity;
                        //var subtotal = document.getElementById('1').value;
                        //document.getElementById('csubtotal').innerHTML=subtotal;
                        //alert(subtotal);
                    //}
                </script>
    </form>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="coupon.php" method="POST">
                                <input type="text" placeholder="Enter your coupon code" id="co" name="coupon" size="40"
                                style="text-transform:uppercase" maxlength="10"> 
                                <button type="submit" name="apply" class="site-btn">APPLY COUPON</button> <br></br>
                                <button type="submit" name="remove" class="site-btn">REMOVE COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <?php $show_cart2 = mysqli_query($conn, "SELECT SUM(Total) as sum FROM cart");
                        $row_cart2 = mysqli_fetch_array($show_cart2)?>
                        <ul>
                            <!-- <li>Subtotal <span>$454.98</span></li> -->
                            <?php $c = mysqli_fetch_assoc($get_coupon_from_cart) ?>
                            <li>Coupons <span><?php echo $c['Coupons'] ?>%</span></li>
                            <li>Total <span>$<?php echo ($row_cart2['sum']*((100+$c['Coupons'])/100)) ?></span></li>
                        </ul>
                        <a href="checkout.php" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
                <script>
                </script>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

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