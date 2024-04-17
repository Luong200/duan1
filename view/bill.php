
<?php

////////////////
    if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
      extract($_SESSION['s_user']);
      $userinfo=get_user($id);
      $_SESSION['s_user']=$userinfo;
      extract($userinfo);
    }
    else{
        $hoten="";
        $diachi="";
        $email="";
        $dienthoai="";
        $id="";
    }
//////////////////
$html_cart='';
    $tong=0;
    foreach ($_SESSION['giohang'] as $sp) {
        extract($sp);
        $tt=(Int)$price*(Int)$soluong;
        $tong+=$tt;
        $tong = $tong -$_SESSION['sale_off_order'];
        $html_cart.='
                <tr>                   
                    <td><img src="'.IMG_PATH_USER.$img.'" alt="" style="width:100px; height:120px;" ></td>
                    <td>'.$name.'</td>
                    <td>'.number_format($price).'</td>
                    <td>'.$soluong.'</td>
                    <td>'.number_format($tt).' (VNĐ)</td>
                          
                </tr>
                
                        ';
        ;
    }   
?>



    <section class="containerfull">
        <div class="container">
            <form action="index.php?pg=billsubmit" method="post">
                <div class="col9 viewcart">
                    <div class="ttdathang">
                        <h2>Thông tin người đặt hàng</h2>
                        <input type="hidden" name="id_user" value="<?=$id  ?>">
                        <label for="hoten"><b>Họ và tên</b></label>
                        <input type="text" placeholder="Nhập họ tên đầy đủ" value="<?=$hoten?>"  name="hoten" id="hoten" >
                    
                        <label for="diachi"><b>Địa chỉ</b></label>
                        <input type="text" placeholder="Nhập địa chỉ" value="<?=$diachi?>"  name="diachi" id="diachi" >
                    
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Nhập email" value="<?=$email?>"  name="email" id="email" >

                        <label for="dienthoai"><b>Điện thoại</b></label>
                        <input type="text" placeholder="Nhập điện thoại" value="<?=$dienthoai?>"  name="dienthoai" id="dienthoai" >
                    </div>
                    <?php
                    if(isset($_GET['error'])){
                        echo "<div class='error alert-danger my-4'>Vui lòng nhập đầy đủ thông tin</div>";
                    }
                    ?>
                    
                </div>
                <?php 
                
                //     foreach ($_SESSION['giohang'] as $sp) {
                //         extract($sp);
                                
                // ?>
                <div class="col9 viewcart">
                <h2>THÔNG TIN ĐƠN HÀNG</h2>
                    <table>
                        <tr>
                            <th>Hình</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>                                       
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            
                        </tr>
                        
                        <?=$html_cart?>
                        <tr>
                            <td colspan="4">TỔNG THÀNH TIỀN</td>
                            <td><?=$tong?> VNĐ</td>  
                        </tr>
                    </table>
                    
                    <!-- <div class="total">
                        <div class="boxcart">
                        <h3><li><strong> <?=$name ." X ". $soluong ?> </strong></li></h3>
                                              
                        
                        </div>
                    </div> -->
                    
                    <div class="coupon">
                        <form action="index.php?pg=viewcart&voucher=1" method="post">
                            <input type="hidden" name="tongdonhang" value="<?=$tongdonhang?>">
                            <!-- <input type="text" name="mavoucher" placeholder="Nhập voucher">
                            <button type="submit">Áp Mã Voucher</button> -->
                        </form>
                        
                    </div>
                    <!-- <div class="pttt"> -->
                        <!-- <div class="boxcart"> -->
                        <h3>Phương thức thanh toán: </h3>
                        <input type="radio" name="pttt" value="0" id="" checked> Thanh toán khi nhận hàng<br>
                        <input type="radio" name="pttt" value="1" id=""> Chuyển khoản<br>
                        <input type="radio" name="pttt" value="2" id=""> Thanh toán online<br>
                        <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class="total">
                        <div class="boxcart bggray">
                            <h3>Tổng thanh toán: <?=$tongthanhtoan?> VNĐ </h3>
                        </div>
                    </div>
                    /-->
<!--                    <a href="index.php?pg=bil_configm">-->
<!--                        <button>Đặt hàng</button>-->
<!--                    </a>-->

                    <input type="submit"  value="ĐỒNG Ý ĐẶT HÀNG" name="billsubmit">
                </div>
            </form>

        </div>
    </section>

    <script>
        var ttnhanhang=document.getElementById("ttnhanhang");
        ttnhanhang.style.display="none";
        function showttnhanhang(){
            if(ttnhanhang.style.display=="none"){
                ttnhanhang.style.display="block";
            }else{
                ttnhanhang.style.display="none";
            }
        }
        

    </script>