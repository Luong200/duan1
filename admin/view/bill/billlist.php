<div class="main-content">
                <h3 class="title-page">
                    Danh sách đơn hàng
                </h3>
                <!-- <div class="d-flex justify-content-end">
                    <a href="index.php?pg=listbill" class="btn btn-primary mb-2">Thêm đơn hàng</a>
                </div> -->
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
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
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
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
                            <td><?php echo $bill_status=="0" ? "Đơn hàng mới" : ($bill_status=="1" ? "Đang xử lí" : ($bill_status=="2" ? "Đang giao hàng" : "Hoàn tất" ))?></td>
                            <td><?php echo $pttt=="0" ? "Thanh Toán khi nhận hàng" : ($pttt=="1" ? "Chuyển khoản" : "Thanh Toán  online" )?></td>
                            <td>
                                <a href="index.php?pg=update_bill&id=<?php echo $id?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                        </tr>
                        <?php
                    }
                    ?>    
                    </tbody>
                    <tfoot>
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
                            <th>Thao tác</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script>
        new DataTable('#example');
    </script>

<?php
    if(!empty($_SESSION['status_message']) && $_SESSION['status_message'] == 1){
        echo "<script>alert('Cập nhật thành công')</script>";
        unset($_SESSION['status_message']);
    }
?>