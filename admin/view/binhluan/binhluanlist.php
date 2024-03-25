<?php
    
?>
<div class="main-content">
<div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">
                <h3 class="title-page">
                    Bình luận 
                </h3>
                
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                       
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600">Mã bình luận</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Nội dung</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Tên sản phẩm</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Tên người dùng</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Thời gian</th>

                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Hành động</th>
                                            
                                      
                                                     
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listbinhluan as $binhluan) {
                            extract($binhluan);
                            
                            $xoadm="index.php?pg=binhluan_delete&id=".$id;
                            echo '<tr>
                                    <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">#'.$id.'</td>
                                    <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">'.$noidung.'</td>
                                    <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">'.$ten_sanpham.'</td>

                                    <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">'.$hoten.'</td>
                                    <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">'.$ngaybinhluan.'</td>

                                    <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                        <a href="'.$xoadm.'" class="btn btn-danger"><iclass="fa-solid fa-trash"></iclass=> Xóa</a>
                                    </td>
                                </tr>';
                        }
                        ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
    <script src="assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
