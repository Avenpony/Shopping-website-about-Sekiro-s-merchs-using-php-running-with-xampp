<section class="latest-product spad">
<div class="container">
        <!-- <div class="col-lg-4 col-md-6">
            <div class="latest-product__text">
                <h4>Latest Products</h4>
                <div class="latest-product__slider owl-carousel">
                    <div class="latest-prdouct__slider__item">
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="img/latest-product/lp-1.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="img/latest-product/lp-2.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="img/latest-product/lp-3.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                    </div>
                    <div class="latest-prdouct__slider__item">
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="img/latest-product/lp-1.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="img/latest-product/lp-2.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="img/latest-product/lp-3.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title2">
                    <h2>Latest Product</h2>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <?php $products = mysqli_query($conn, "SELECT * FROM products ORDER BY ID DESC");
            $count1 = 0;
            while($row_pro = mysqli_fetch_array($products)) { ?>
            <?php if($count1==12) break; ?>
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
            <?php $count1 += 1; ?>
            <?php } ?>
        </div>
        <!-- <div class="col-lg-4 col-md-6">
            <div class="latest-product__text">
                <h4>Review Products</h4>
                <div class="latest-product__slider owl-carousel">
                    <div class="latest-prdouct__slider__item">
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="img/latest-product/lp-1.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="img/latest-product/lp-2.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="img/latest-product/lp-3.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                    </div>
                    <div class="latest-prdouct__slider__item">
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="img/latest-product/lp-1.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="img/latest-product/lp-2.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="img/latest-product/lp-3.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
</div>
</section>