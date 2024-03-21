<?php
    
?>
<div class="main-content">
<div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">
                <h3 class="title-page">
                    Danh mục
                </h3>
                <div class="d-flex justify-content-end">
                    <a href="index.php?pg=danhmucadd" ><button type="button" class=" btn text-white bg-green-500 border-green-500 hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600 my-2">Thêm danh mục</button></a>
                </div>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                       
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600">Mã loại</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Tên danh mục</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Hành động</th>
                                            
                                      
                                                     
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            $suadm="index.php?pg=suadm&id=".$id;
                            $xoadm="index.php?pg=danhmuc_delete&id=".$id;
                            echo '<tr>
                                    <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">#'.$id.'</td>
                                    <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">'.$name.'</td>
                                    <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                        <a href="'.$suadm.'" class="btn btn-warning"><ilass="fa-solid fa-pen-to-square"></ilass=> Sửa</a>
                                        <a href="'.$xoadm.'" class="btn btn-danger"><iclass="fa-solid fa-trash"></iclass=> Xóa</a>
                                    </td>
                                </tr>';
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Mã loại</th>
                            <th>Tên danh muc</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script>
        new DataTable('#example');
    </script>