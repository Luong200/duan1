<?php
    
?>

<main>

    <!-- breadcrumb start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="radios-breadcrumb breadcrumbs">
                <ul class="list-unstyled d-flex align-items-center">
                    <li class="radiosbcrumb-item radiosbcrumb-begin">
                        <a href="index.html"><span>Home</span></a>
                    </li>
                    <li class="radiosbcrumb-item radiosbcrumb-end">
                        <span>Account</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- account start -->
    <section class="account pb-90">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-lg-12 mt-30">
                    <div class="account__wrap pl-60">
                        <h2 class="account__title">ĐĂNG NHẬP</h2>
                        <?php
                        if(isset($_SESSION['tb_dangnhap'])&&($_SESSION['tb_dangnhap']!="")){
                            echo $_SESSION['tb_dangnhap'];
                            unset($_SESSION['tb_dangnhap']);
                        }
                        ?>
                        <form action="index.php?pg=login" method="post">
                            <div class="account__input-field">
                                <input type="text" id="username" name="username" placeholder="Username...">
                                <?php echo !empty($error['username']) ? '<span  style="color:red"> ' . $error['username'] . '</span>' : ""  ?>
                            </div>
                            <div class="account__input-field">
                                <input type="password" id="password" name="password" placeholder="Password...">
                                <?php echo !empty($error['password']) ? '<span style="color:red">' . $error['password'] . '</span>' : ""  ?>
                            </div>
                            <div class="account__btn">
                                <input type="submit" class="thm-btn thm-btn__2 border-0" name="dangnhap" value="Đăng nhập">
                                <?php echo !empty($loginError) ? '<span style="color:red">' . $loginError . '</span>' : ""  ?>

                            </div>
                        </form>

                        <p class="text-sm text-center">
                            Bạn chưa có tài khoản? <a class="hover:underline" href="index.php?act=dangky">Hãy tạo ngay!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- account end -->

</main>

