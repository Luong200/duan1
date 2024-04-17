<?php

?>
<!-- breadcrumb start -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="radios-breadcrumb breadcrumbs">
            <ul class="list-unstyled d-flex align-items-center">
                <li class="radiosbcrumb-item radiosbcrumb-begin">
                    <a href="index.html"><span>Home</span></a>
                </li>
                <li class="radiosbcrumb-item radiosbcrumb-end">
                    <span>Shop</span>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
<section class="shop-section pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="shop-area clearfix">
                    <div class="woocommerce-content-wrap">
                        <div class="woocommerce-toolbar-top">
                            <p class="woocommerce-result-count">Showing 1–12 of 70 results</p>
                            <div class="products-sizes">
                                <a href="#!" class="grid-4">
                                    <div class="grid-draw">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="grid-draw">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="grid-draw">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <a href="#!" class="grid-3 active">
                                    <div class="grid-draw">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="grid-draw">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="grid-draw">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <a href="#!" class="list-view">
                                    <div class="grid-draw-line">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="grid-draw-line">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="grid-draw-line">
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                            </div>
                            <form class="woocommerce-ordering" method="get">
                                <select name="orderby" class="orderby">
                                    <option value="menu_order" selected='selected'>Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                                <input type="hidden" name="post_type" value="product" />
                            </form>
                        </div>
                        <div class="woocommerce-content-inner">
                            <ul class="products three-column clearfix">
                                <?php foreach ($dssp as $item) {
                                //  print_r($item);
                                //  die();
                                ?>
                                    <li class="product">
                                        <div class="product-holder">
                                            <a href="index.php?pg=sanphamchitiet&id=<?php echo $item['id']?>"><img src="./uploads/<?php echo $item['img'] ?>" class="h-75" alt=""></a>

                                        </div>
                                        <div class="product-info">

                                            <h2 class="product__title"><a href="index.php?pg=sanphamchitiet&id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></h2>
                                            <span class="product__available">Số lượng: <span><?php echo $item['soluong']?></span></span>
                                            <div class="product__progress progress color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h4 class="product__price"><span class="new"><?php echo $item['price'] == 0 ? number_format($item['gia_thap_nhat'])  . ' VND' . "-" . number_format($item['gia_cao_nhat']) . ' VND' : number_format($item['price'] ) . ' VND'  ?></span></h4>
                                            <p class="product-description"><?php echo $item['mota'] ?> </p>
                                        </div>
                                    </li>
                                <?php } ?>


                            </ul>
                        </div>
                        <div class="pagination_wrap pt-20">
                            <ul>
                                <li><a href="index.php?pg=sanpham&page=1<?php if($iddm > 0){ echo "&iddm=".$iddm;} ?>">&laquo;</a></li> <!-- Điều hướng đến trang đầu tiên -->
                                <?php
                                // Số trang được tính dựa trên tổng số sản phẩm và số sản phẩm trên mỗi trang
                                $totalPages = ceil($totalRecords / $perPage);

                                // Hiển thị liên kết cho từng trang
                                for ($i = 1; $i <= $totalPages; $i++) {
                                    // Kiểm tra xem trang hiện tại là trang nào, nếu là trang đó, thêm class "active"
                                    $activeClass = ($currentPage == $i) ? "class='active'" : "";
                                    echo "<li $activeClass><a href='index.php?pg=sanpham&page=$i";
                                    if($iddm > 0){
                                        echo "&iddm=".$iddm;
                                    }
                                    echo "'>$i</a></li>";
                                }
                                ?>
                                <li><a href="index.php?pg=sanpham&page=<?php echo $totalPages; ?><?php if($iddm > 0){ echo "&iddm=".$iddm;} ?>">&raquo;</a></li> <!-- Điều hướng đến trang cuối cùng -->
                            </ul>
                        </div>
                    </div>
                    <div class="shop-sidebar">
                        <div class="widget">
                            <h2 class="widget__title">
                                <span>Search</span>
                            </h2>
                            <form class="widget__search" action="#">
                                <input type="text" placeholder="Search...">
                                <button><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget widget_price_filter">
                            <h2 class="widget__title">
                                <span>Thời gian</span>
                            </h2>
                            <form action="index.php?pg=timkiem" method="post" >
                                <div class="d-flex">
                                    <input type="date" class="form-control" name="startTime" id="amount">
                                    <input type="date" class="form-control" name="timeEnd" id="amount">
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button name="timkiem" class="mt-2" type="submit">filter</button>
                                </div>

                            </form>
                        </div>

                        <div class="widget">
                            <h2 class="widget__title">
                                <span>Category</span>
                            </h2>
                            <ul class="widget__category">
                            <?php foreach($dsdm as $item){
                            ?>
                                <li><a href="index.php?pg=sanpham&iddm=<?php echo $item['id'] ?>"><?php echo $item['name'] ?><i class="far fa-chevron-right"></i></a></li>
                            <?php
                            } ?>
                                
                            </ul>
                        </div>
                        <div class="widget">
                            <div class="widget__add">
                                <div class="content">
                                    <span>Trending</span>
                                    <h3>2021 <span>Laptop</span> <br> Collection</h3>
                                    <a class="thm-btn no-icon" href="#!">
                                        <span class="btn-wrap">
                                            <span>Buy Now</span>
                                            <span>Buy Now</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="image">
                                    <img class="add_img" src="assets/img/product/img_177.png" alt="">
                                    <img class="add_shape" src="assets/img/shape/add_shape.png" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>