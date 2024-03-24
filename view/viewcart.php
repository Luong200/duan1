<?php
$html_cart = '';
$i = 0;
foreach ($_SESSION['giohang'] as $key => $sp) {
    extract($sp);
    $tt = (int)$price * (int)$soluong;
    $xoasp = '<a href="index.php?pg=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a>';


    $html_cart .= ' <tr class="cart_single">
                                    <td class="product-remove">
                                      ' . $idpro . '
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="#!">
                                            <img width="57" height="70" src="' . IMG_PATH_USER . $img . '"
                                                 class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="#!"  />
                                        </a>
                                    </td>
                                    <td class="product-name" data-title="Product">
                                        <a href="#!">' . $name;
    $name_varible = isset($name_varible) && !empty($name_varible) ? '(' . $name_varible . ')' : '';
    $html_cart .= $name_varible . '</a> </td>

                                    <td class="product-price" data-title="Price">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>' . number_format($price) . 'VND</span>
                                    </td>
                                    
                                                                 <td><button type="button" onclick="giam(this,' . $i . ')">  - </button> <span>' . $soluong . ' </span><button  type="button"  onclick="tang(this,' . $i . ')"> + </button></td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>' . number_format($price * $soluong) . ' VND</span>
                                    </td>
                                    
                                    <td class="product-subtotal" data-title="Total">
                              ' . $xoasp . '
                                    </td>
                                </tr>';
    $i += 1;
}
?>

<main>

    <!-- breadcrumb start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="radios-breadcrumb breadcrumbs">
                <ul class="list-unstyled d-flex align-items-center">
                    <li class="radiosbcrumb-item radiosbcrumb-begin">
                        <a href="index.html"><span>Home</span></a>
                    </li>
                    <li class="radiosbcrumb-item radiosbcrumb-end">
                        <span>Cart</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- start cart-section -->
    <section class="cart-section woocommerce-cart pb-80">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="woocommerce">
                        <form action="/" method="post">
                            <table class="shop_table shop_table_responsive cart">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">STT</th>
                                    <th class="product-thumbnail">Hình Ảnh</th>
                                    <th class="product-name"> Tên sản phẩm</th>
                                    <th class="product-price"> Đơn giá</th>
                                    <th class="product-quantity"> Số lượng</th>
                                    <th class="product-subtotal"> Thành tiền</th>
                                    <th class="product-remove">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?= $html_cart ?>


                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="coupon">
                                            <label for="coupon_code">Vocher:</label>
                                            <form action="index.php?pg=viewcart&voucher=1" method="post">
                                                <input type="hidden" name="tongdonhang" value="<?= $tongdonhang ?>">
                                                <input type="text" name="mavoucher" class="input-text" id="coupon_code"
                                                       value="" placeholder="Nhập voucher"/>
                                                <button class="thm-btn thm-btn__2 br-0 no-icon" type="submit">
                                                            <span class="btn-wrap">
                                                                <span>Apply Coupon</span>
                                                                <span>Apply Coupon</span>
                                                            </span>
                                                </button>
                                            </form>

                                        </div>

                                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="918724a9c2"/>
                                        <input type="hidden" name="_wp_http_referer" value="/wp/?page_id=5"/>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>

                        <div class="cart-collaterals">
                            <div class="cart_totals calculated_shipping">
                                <h2>Tổng số giỏ hàng</h2>
                                <table class="shop_table shop_table_responsive">
                                    <tr class="order-total">
                                        <th>Tổng thanh toán</th>
                                        <td data-title="Total"><strong><span
                                                        class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol"></span> <?= number_format($thanhtoan) ?> VND  </span></strong>
                                        </td>
                                    </tr>
                                </table>

                                <div class="wc-proceed-to-checkout">
                                    <a href="index.php?pg=bill"
                                       class="checkout-button thm-btn thm-btn__2 no-icon br-0 alt wc-forward">
                                                <span class="btn-wrap">
                                                    <span>Đặt Hàng</span>
                                                    <span>Đặt Hàng</span>
                                                </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart-section -->

</main>


<script>
    function tang(x, i) {
        // thay doi so luong truc tiep voi DOM HTML
        var cha = x.parentElement;
        var soluongcu = cha.children[1];
        var soluongmoi = parseInt(soluongcu.innerText) + 1;
        soluongcu.innerText = soluongmoi;
        window.location.href = "index.php?pg=increase&idcart=" + i;
        // alert(soluongcu);
        //goi ham cap nhat session

    }

    function giam(x, i) {
        // thay doi so luong truc tiep voi DOM HTML
        var cha = x.parentElement;
        var soluongcu = cha.children[1];
        if (parseInt(soluongcu.innerText) > 1) {
            var soluongmoi = parseInt(soluongcu.innerText) - 1;
            soluongcu.innerText = soluongmoi;
            window.location.href = "index.php?pg=decrease&idcart=" + i;
        } else {
            alert("Số lượng tối thiểu là 1 ");
        }


        // alert(soluongcu);
        //goi ham cap nhat session

    }
</script>