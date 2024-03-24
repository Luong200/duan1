<!-- breadcrumb start -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="radios-breadcrumb breadcrumbs">
            <ul class="list-unstyled d-flex align-items-center">
                <li class="radiosbcrumb-item radiosbcrumb-begin">
                    <a href="index.html"><span>Home</span></a>
                </li>
                <li class="radiosbcrumb-item radiosbcrumb-end">
                    <span>Product Detail</span>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<!-- start shop-single-section -->
<section class="shop-single-section pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="product-single-wrap mb-30">
                    <div class="product_details_img ">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="pl_thumb">
                                    <img src="./uploads/<?php echo $spchitiet['img'] ?>" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6 product-details-col">
                <div class="product-details">
                    <h2><?php echo $spchitiet['name'] ?></h2>

                    <div class="price">
                        <span class="current"><?php echo $spchitiet['price'] ?></span>

                    </div>



                    <div class="thb-product-meta-before mt-20">
                        <div class="product_meta">
                            <span class="posted_in">Categories: <a href="#!">Samsung</a>, <a href="#!">Apple</a>, <a href="#!">Huawei</a></span>



                        </div>
                    </div>

                    <div class="product-option">
                            <div class="product-row">
                                <div>
                                    <input class="product-count" type="text" value="1" name="product-count">
                                </div>
                                <div class="add-to-cart-btn">
                                    <form action="index.php?pg=addcart" method="post">
                                        <input type="hidden" name="idpro" value="<?php echo $spchitiet['id'] ?>">
                                        <input type="hidden" name="name" value="<?php echo $spchitiet['name'] ?>">
                                        <input type="hidden" name="img" value="<?php echo $spchitiet['img'] ?>">
                                        <input type="hidden" name="price" value="<?php echo $spchitiet['price'] ?>">
                                        <input type="hidden" name="mota" value="<?php echo $spchitiet['mota'] ?>">
                                        <input type="hidden" name="soluong" value="1">
                                        <div class="btn_dathang" >  <button class="thm-btn thm-btn__2 no-icon" name="addcart" type="submit">
                                        <span class="btn-wrap">
                                            <span>Shop Now</span>
                                            <span>Shop Now</span>
                                        </span>
                                            </button></div>
                                    </form>
                                </div>
                            </div>
                    </div>


                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col col-xs-12">
                <div class="single-product-info">
                    <!-- Nav tabs -->
                    <div class="tablist">
                        <ul class="nav nav-tabs" id="pills-tab" role="tablist">
                            <li><button class="active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#tb-01">Product Details</button></li>
                            <li><button  id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#tb-03">Review (09)</button></li>
                        </ul>
                    </div>

                    <!-- Tab panes -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="tb-01">
                            <p><?php echo $spchitiet['mota'] ?></p>
                        </div>
                        <div class="tab-pane fade" id="tb-03" >
            <iframe src="view/binhluan.php?idpro=<?=$id?>" frameborder="0" width="100%" height="300px"></iframe>
        </div>

                    </div>
                </div>
            </div>
        </div> <!-- end row -->

        <div class="row">
            <div class="col col-xs-12">
                <div class="realted-porduct">
                    <h3>Related product</h3>
                    <div class="shop-area">
                        <ul class="products clearfix">
                            <?php foreach ($dssp_lienquan as $item) {
                            ?>
                                <li class="product">
                                    <div class="product-holder">
                                        <a href="shop-single.html"><img src="./uploads/<?php echo $item['img'] ?>" alt="" class="h-75"></a>

                                    </div>
                                    <div class="product-info">
                                    <h4><a href="index.php?pg=sanphamchitiet&id=<?php echo $item['id']?>"><?php echo $item['name'] ?></a> </h4>
                                        <span class="product__available">Available: <span>334</span></span>
                                        <div class="product__progress progress color-primary">
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="product__price"><span class="new"><?php echo $item['price'] ?></span></h4>
                                        <p class="product-description"><?php echo $item['mota'] ?> </p>
                                    </div>
                                </li>
                            <?php
                            } ?>


                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- end of container -->
</section>
<!-- end of shop-single-section -->