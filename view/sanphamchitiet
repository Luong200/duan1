<?php
    $html_dm=showdm($dsdm);
    $html_sp_lienquan=showsp($dssp_lienquan);
    extract($spchitiet);
?>
<div class="containerfull">
        <h4><div class="bgbanner" style="color: brown; font-size:larger">SẢN PHẨM CHI TIẾT</div></h4>
    </div>

    <section class="containerfull">
        <div class="container">
            <div class="boxleft mr2pt menutrai">
                <h1>DANH MỤC</h1><br><br>
                <?=$html_dm?>
            </div>
            <div class="boxright">
                <h1>SẢN PHẨM CHI TIẾT</h1><br>
                <div class="containerfull mr30">
                    <div class="col6 imgchitiet">
                        <img src="layout/images/<?=$img?>" alt="" >
                    </div>
                    <div class="col6 textchitiet">
                        <h2><?=$name?></h2>
                        <h3 style="color: red;font-size:20px;">Giá: <?=$price?> VNĐ</h3>
                        <h4>Mô tả: <?=$mota?></h4>
                        <form action="index.php?pg=addcart" method="post">
                            <input type="hidden" name="name" value="<?=$name?>">
                            <input type="hidden" name="img" value="<?=$img?>">
                            <input type="hidden" name="price" value="<?=$price?>">
                            SỐ LƯỢNG: <input class="sl" type="number" name="soluong" id="" min="1" value="1" max="10"> <br>
                            <div class="btn_dathang" style="text-align: center; margin-top:20px;"><button  type="submit" name="addcart" >Đặt hàng</button></div>
                        </form>
                    </div>

                </div>
                <hr>
                <h1>SẢN PHẨM LIÊN QUAN</h1>
                <div class="containerfull mr30">
                    <?=$html_sp_lienquan;?>
                    <!-- <div class="box25 mr15 mb">
                        <div class="best"></div>
                        <img src="layout/layout/images/sp1.webp" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div>
                    <div class="box25 mr15 mb">
                        <img src="layout/images/sp2.webp" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div>
                    <div class="box25 mr15 mb">
                        <img src="layout/images/sp3.webp" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div>
                    <div class="box25 mr15 mb">
                        <img src="layout/images/sp4.webp" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div> -->
                    
                </div>
            </div>


        </div>
    </section>
