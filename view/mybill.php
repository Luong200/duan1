    <section class="containerfull">
        <div class="container">
            <div class="boxright my-2">
                <h1>LỊCH SỬ MUA HÀNG</h1><br>
                <div class="containerfull mr30">
                <table class="table">
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
                            <th>Hành động</th>

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
                         <td><?php echo number_format($tongthanhtoan) ?>đ</td>
                         <td><?php echo $bill_status=="0" ? "Chờ kiểm duyệt" : ( $bill_status=="1" ? "đã kiểm duyệt" : ( $bill_status=="2" ? "Đang Giao Hàng" :  ( $bill_status=="3" ? "đã giao hàng" : "Đã đánh giá") ) ) ?></td>
                         <td><?php echo $pttt=="0" ? "Chuyển khoản" : "Trả tiền khi nhận hàng"?></td>                         
                         <td><?php if ($bill_status=="3"){ ?>
                                 <button onclick="window.location.href='index.php?pg=reviews&id=<?php echo $id ?>'"  class="btn btn-primary">Đánh giá</button>
                             <?php } ?>
                         </td>
                     </tr>
                     <?php
                 }
                 ?> 
                    
                </table>   
                </div>
            </div>


        </div>
    </section>