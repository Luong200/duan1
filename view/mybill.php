<div class="containerfull">
        <div class="bgbanner">MY ACCOUNT</div>
    </div>

    <section class="containerfull">
        <div class="container">
            <div class="boxleft mr2pt menutrai">
                <h1>DÀNH CHO BẠN</h1><br><br>
                <a href="index.php?pg=mybill">Lịch sử mua hàng</a>
                <a href="index.php">Thoát hệ thống</a>
            </div>
            <div class="boxright">
                <h1>LỊCH SỬ MUA HÀNG</h1><br>
                <div class="containerfull mr30">
                <table>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>ID người dùng</th>
                            <th>Tên người đặt</th>
                            <th>Email người đặt</th>
                            <th>Điện Thoại người đặt</th>
                            <th>Địa chỉ người đặt</th>   
                            <th>Tổng thanh toán</th>
                            <th>Tình trạng đơn hàng</th>
                            <th>Phương thức thanh toán</th>                           
                           
                        </tr>               
                <?php 
                   foreach ($listbill as $bill) {
                    extract($bill);
                 //    $countsp= loadall_cart_count($bill["id"]);
                 ?>
                     <tr>
                         <td><?php echo $madh?></td>
                         <td><?php echo $iduser?></td>
                         <td><?php echo $nguoidat_ten?></td>
                         <td><?php echo $nguoidat_email?></td>
                         <td><?php echo $nguoidat_tell?></td>
                         <td><?php echo $nguoidat_diachi?></td>                          
                         <td><?php echo $tongthanhtoan?></td>
                         <td><?php echo $bill_status=="0" ? "Đơn hàng mới" : "Đang giao"?></td>
                         <td><?php echo $pttt=="0" ? "Chuyển khoản" : "Trả tiền khi nhận hàng"?></td>                         
                     </tr>
                     <?php
                 }
                 ?> 
                    
                </table>   
                </div>
            </div>


        </div>
    </section>