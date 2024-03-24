<?php
    if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
      extract($_SESSION['s_user']);
    }
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
                        <span>My Account</span>
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
                        <h2 class="account__title">Thông Tin</h2>
                        <form action="index.php?pg=updateuser" method="post">
                            <div class="account__input-field">
                                <div class="col-25">
                                    <label for="username">Tên đăng nhập</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="username" value="<?=$username?>" name="username" placeholder="Nhập tên đi">
                                </div>
                            </div>
                            <div class="account__input-field">
                                <div class="col-25">
                                    <label for="password">Mật khẩu</label>
                                </div>
                                <div class="col-75">
                                    <input type="password" id="password" value="<?=$password?>" name="password" placeholder="Nhập mật khẩu..">
                                </div>
                            </div>

                            <div class="account__input-field">
                                <div class="col-25">
                                    <label for="email">Email</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="email" value="<?=$email?>" name="email" placeholder="Nhập email..">
                                </div>
                            </div>


                            <div class="account__input-field">
                                <div class="col-25">
                                    <label for="email">Địa chỉ</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="diachi" value="<?=$diachi?>" name="diachi" placeholder="Nhập địa chỉ..">
                                </div>
                            </div>

                            <div class="account__input-field">
                                <div class="col-25">
                                    <label for="email">Điện thoại</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="dienthoai" value="<?=$dienthoai?>" name="dienthoai" placeholder="Nhập số điện thoại..">
                                </div>
                            </div>
                            <div class="account__btn">
                                <input type="hidden" name="id" value="<?=$id?>">
                                <input type="submit" class="thm-btn thm-btn__2 border-0"  name="capnhat" value="Cập nhật">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- account end -->

</main>




