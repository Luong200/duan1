<?php
    
?>
<div class="containerfull">
        <div class="bgbanner">ĐĂNG NHẬP</div>
    </div>

    <section class="containerfull">
        <div class="container">
            <div class="boxleft mr2pt menutrai">
                <h1>DANH CHO BẠN</h1><br><br>
                <a href="">Cập nhật thông tin</a>
                <a href="">Lịch sử mua hàng</a>
                <a href="">Thoát</a>
            </div>
            <div class="boxright">
                <h1>ĐĂNG NHẬP</h1><br>
                <div class="containerfull mr30">
                <h2 style="color:red">
                  <?php
                           if(isset($_SESSION['tb_dangnhap'])&&($_SESSION['tb_dangnhap']!="")){
                              echo $_SESSION['tb_dangnhap'];
                              unset($_SESSION['tb_dangnhap']);
                           } 
                           
                  ?>
                  </h2>
                    <form action="index.php?pg=login" method="post">
                            <div class="row">
                                <div class="col-25">
                                    <label for="username">Tên đăng nhập</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="username" name="username" placeholder="Username...">
                                    <?php echo !empty($error['username']) ? '<span  style="color:red"> ' . $error['username'] . '</span>' : ""  ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="lname">Mật khẩu</label>
                                </div>
                                <div class="col-75">
                                    <input type="password" id="password" name="password" placeholder="Password...">
                                    <?php echo !empty($error['password']) ? '<span style="color:red">' . $error['password'] . '</span>' : ""  ?>
                                </div>
                            </div>
                            
                            
                            <br>
                            <div class="row">
                                <input type="submit" name="dangnhap" value="Đăng nhập">
                                <?php echo !empty($loginError) ? '<span style="color:red">' . $loginError . '</span>' : ""  ?>
                            </div>
                        </form>
                        <p class="text-sm text-center">
                            Bạn chưa có tài khoản? <a class="hover:underline" href="index.php?act=dangky">Hãy tạo ngay!</a>
                        </p>
                </div>
            </div>


        </div>
    </section>