<?php
    
?>
<div class="main-content">
                <h3 class="title-page">
                    Danh mục
                </h3>
                <div class="d-flex justify-content-end">
                    <a href="index.php?pg=danhmucadd" class="btn btn-primary mb-2">Thêm danh mục</a>
                </div>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Mã loại</th>
                            <th>Tên danh muc</th> 
                            <th>Thao tác</th>                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            $suadm="index.php?pg=suadm&id=".$id;
                            $xoadm="index.php?pg=danhmuc_delete&id=".$id;
                            echo '<tr>
                                    <td>#'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>
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