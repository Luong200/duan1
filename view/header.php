<?php
    if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
        extract($_SESSION['s_user']);
        $html_account='<a href="index.php?pg=myaccount">'.$username.'</a>
        <a href="index.php?pg=logout">Thoát</a>';

    }else{
        $html_account='<a href="index.php?pg=dangky">ĐĂNG KÝ</a>
        <a href="index.php?pg=dangnhap">ĐĂNG NHẬP</a>';
    }
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="     
    crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Perfume</title>
    <link rel="stylesheet" href="layout/css/style.css">
</head>

<body>
    <div class="containerfull padd20">
        <div class="container">
            <div class="logo col2"><a href="index.php"><img src="layout/images/logo.png" height="50" alt=""></a></div>
            <div class="menu col8">
                <div class="col3">
                    <form action="index.php?pg=sanpham" method="post">
                        <div class="seach_ten"><input type="text" name="kyw" id="" placeholder="Nhap tu khoa tim kiem"></div>
                        <i><input type="submit" name="timkiem"></i>
                    </form>
                </div>
                <div class="col9">
                    <a href="index.php">TRANG CHỦ</a>
                    <!-- <a href="index.php?pg=gioithieu">GIỚI THIỆU</a> -->
                    <a href="index.php?pg=sanpham">SẢN PHẨM</a>
                    <a href="index.php?pg=viewcart"><i class='fas fa-briefcase' style='font-size:36px; color:red'></i>GIỎ HÀNG</a>
                    <!-- <a href="#"><i class="fa-solid fa-cart-shopping fa-beat" style="color: #a46f13;"></i></a> -->
                    <!-- <a href="index.php?pg=dichvu">DỊCH VỤ</a> -->
                    <!-- <a href="index.php?pg=lienhe">LIÊN HỆ</a> -->
                    <!-- <a href="index.php?pg=dangky">ĐĂNG KÝ</a>
                    <a href="index.php?pg=dangnhap">ĐĂNG NHẬP</a> -->
                    <?=$html_account;?>
                </div>
                
                
            </div>
        </div>
    </div>