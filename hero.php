<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All Categories</span>
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
                <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                    <div class="hero__text">
                        <!-- <span>FRUIT FRESH</span>
                        <h2>Vegetable <br />100% Organic</h2>
                        <p>Free Pickup and Delivery Available</p> -->
                        <a href="shop-grid.php" class="primary-btn2">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>