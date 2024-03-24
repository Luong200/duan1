<?php
    if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
      extract($_SESSION['s_user']);
      $userinfo=get_user($id);
      $_SESSION['s_user']=$userinfo;
      extract($userinfo);
    }
?>
<h1 class="my-2">THÔNG TIN ĐĂNG KÝ ĐÃ ĐƯỢC CẬP NHẬT</h1><br>
<div class="container px-5 pb-5">
    <table class="table">
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Tên đăng nhập</td>
            <td>      <?=$username?></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Email</td>
            <td> <?=$email?></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td >Địa chỉ</td>
            <td><?=$diachi?></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td >Điện thoại</td>
            <td><?=$dienthoai?></td>
        </tr>
        </tbody>
    </table>
</div>


