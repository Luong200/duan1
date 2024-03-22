<div class="main-content ">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">List đơn hàng </h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                                <li class="inline-flex items-center">
                                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        Homepage
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="#" class="ml-1 text-sm font-medium text-gray-500 hover:text-gray-900 md:ml-2 dark:text-gray-100 dark:hover:text-white">Thành Viên</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div> 
                </div>

                <div class=" dark:bg-zinc-800 dark:border-zinc-600">
                            

                            <div class="card-body relative overflow-x-auto">
                                <table id="datatable-buttons" class="table w-full pt-4 text-gray-700 dark:text-zinc-100">
                                    <thead>
                                        <tr>
                                        
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600">Mã đơn hàng</th>
                                             <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">ID người dùng</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Tên người đặt</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Email người đặt</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Điện thoại</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Địa chỉ người đặt</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Số tiền</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Tình trạng đơn hàng</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Phương thức thanh toán</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Hành động</th>
                                        </tr>
                                    </thead> 
                                 
                    <tbody>
                    <?php
                    foreach ($listbill as $bill) {
                       extract($bill);
                    //    $countsp= loadall_cart_count($bill["id"]);
                    ?>
                        <tr>
                            <td class="p-4 pr-8 border border-t-0 border-gray-50 dark:border-zinc-600" ><?php echo $madh?></td>
                            <td  class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600"><?php echo $iduser?></td>
                            <td  class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600"><?php echo $nguoidat_ten?></td>
                            <td  class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600"><?php echo $nguoidat_email?></td>
                            <td  class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600"><?php echo $nguoidat_tell?></td>
                            <td  class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600"><?php echo $nguoidat_diachi?></td>                          
                            <td  class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600"><?php echo $tongthanhtoan?></td>
                            <td  class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600"><?php echo $bill_status=="0" ? "Đơn hàng mới" : ($bill_status=="1" ? "Đang xử lí" : ($bill_status=="2" ? "Đang giao hàng" : "Hoàn tất" ))?></td>
                            <td  class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600"><?php echo $pttt=="0" ? "Thanh Toán khi nhận hàng" : ($pttt=="1" ? "Chuyển khoản" : "Thanh Toán  online" )?></td>
                            <td>
                                <a href="index.php?pg=update_bill&id=<?php echo $id?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                        </tr>
                        <?php
                    }
                    ?>    
                    </tbody>
                                    
                                </table>

                            </div>
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