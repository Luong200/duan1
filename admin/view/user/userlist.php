<div class="main-content">
                <h3 class="title-page">
                    Thành viên
                </h3>
                <div class="d-flex justify-content-end">
                    <a href="index.php?pg=adduser" class="btn btn-primary mb-2">Thêm thành viên</a>
                </div>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Họ Tên</th>
                            <th>Email</th>
                            <th>Điện Thoại</th>
                            <th>Role</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($userlist as $user) {
                        extract($user);
                    ?>
                        <tr>
                            <td><?php echo $username?></td>
                            <td><?php echo $password?></td>
                            <td><?php echo $hoten?></td>
                            <td><?php echo $email?></td>
                            <td><?php echo $dienthoai?></td>
                            <td><?php echo $role=="0" ? "Người dùng" :"ADMIN"?></td>
                            <td>
                                <a href="index.php?pg=update_user&id=<?php echo $id?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                <a href="index.php?pg=delete_user&id=<?php echo $id?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>    
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Họ Tên</th>
                            <th>Email</th>
                            <th>Điện Thoại</th>
                            <th>Địa chỉ</th>
                            <th>Role</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script>
        new DataTable('#example');
    </script>