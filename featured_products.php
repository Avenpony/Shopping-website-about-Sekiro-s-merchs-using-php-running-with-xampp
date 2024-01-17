<?php $conn = require('connect.php'); ?>
<section class="featured spad">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title">
                <h1>Featured Product</h1>
            </div>
            <!-- <div class="featured__controls">
                <ul>
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".oranges">Oranges</li>
                    <li data-filter=".fresh-meat">Fresh Meat</li>
                    <li data-filter=".vegetables">Vegetables</li>
                    <li data-filter=".fastfood">Fastfood</li>
                </ul>
            </div> -->
        </div>
    </div>
    <div class="row featured__filter">
        <?php $products = mysqli_query($conn, "SELECT * FROM products WHERE ID IN (1,2,3,4,5,6,7,8)");
        $count = 0;
        while($row_pro = mysqli_fetch_array($products)) { ?>
        <?php if($count==8) break; ?>
        <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
            <div class="featured__item">
                <div class="featured__item__pic set-bg" data-setbg="img/product/<?php echo $row_pro['Image'] ?>">
                    <ul class="featured__item__pic__hover">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="shop-details.php?id=<?php echo $row_pro['ID'] ?>"><i class="fa fa-file"></i></a></li>
                        <li><a href="shoping-cart.php?id=<?php echo $row_pro['ID'] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="featured__item__text">
                    <h6><a href="#"><?php echo $row_pro['Name'] ?></a></h6>
                    <h5>$<?php echo $row_pro['Price'] ?></h5>
                </div>
            </div>
        </div>
        <?php $count += 1; ?>
        <?php } ?>
        <!-- <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
            <div class="featured__item">
                <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-2.jpg">
                    <ul class="featured__item__pic__hover">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="featured__item__text">
                    <h6><a href="#">Crab Pool Security</a></h6>
                    <h5>$30.00</h5>
                </div>
            </div>
        </div> -->
    </div>
</div>
</section>