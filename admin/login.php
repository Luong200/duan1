<?php
session_start();
include "../dao/pdo.php";
include "../dao/user.php";
if (isset($_POST["login"])) {
    $uname = $_POST["uname"];
    $psw = $_POST["psw"];
    $user = checkuser($uname, $psw);
    if (isset($user) && (is_array($user)) && (count($user) > 0)) {
        extract($user);
        if ($role == 1) {
            $_SESSION['s_user'] = $user;
            header('location: index.php');
        } else {
            $tb = "Tài khoản này không có quyền truy cập trang quản trị";
        }
    } else {
        $tb = "Tài khoản này không tồn tại. Hãy nhập lại!";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../layout/assets/images/favicon.ico" />


    <link rel="stylesheet" href="../layout/assets/css/icons.css" />
    <link rel="stylesheet" href="../layout/assets/css/tailwind.css" />
    <style>
        /* body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;} */
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="h-screen md:overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-12 ">
                <div class="col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3 relative z-50">
                    <div class="w-full bg-white xl:p-12 p-10 dark:bg-zinc-800">
                        <div class="flex h-[90vh] flex-col">
                            <div class=" mx-auto">
                                <a href="index.html" class="">
                                    <img src="../layout/assets/images/logo-sm.svg" alt="" class="h-8 inline"> <span class="text-xl align-middle font-medium ml-2 dark:text-white">Minia</span>
                                </a>
                            </div>

                            <div class="my-auto">
                                <div class="text-center">
                                    <h5 class="text-gray-600 dark:text-gray-100">Welcome Back !</h5>
                                    <p class="text-gray-500 dark:text-zinc-100/60 mt-1">Sign in to continue to Minia.</p>
                                </div>

                                <form class="mt-4 pt-2" action="login.php" method="post">
                                    <div class="mb-4">
                                        <label class="text-gray-600 dark:text-gray-100 font-medium mb-2 block">Username</label>
                                        <input type="text" name="uname" class="w-full rounded placeholder:text-sm py-2 border-gray-100 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100 dark:placeholder:text-zinc-100/60" id="username" placeholder="Enter username">
                                    </div>
                                    <div class="mb-3">
                                        <div class="flex">
                                            <div class="flex-grow-1">
                                                <label class="text-gray-600 dark:text-gray-100 font-medium mb-2 block">Password</label>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="text-gray-500 dark:text-zinc-100">Forgot password?</a>
                                            </div>
                                        </div>

                                        <div class="flex">
                                            <input type="password" name="psw" class="w-full rounded rounded-r-none placeholder:text-sm py-2 border-gray-100 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100 dark:placeholder:text-zinc-100/60" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                            <button class=" bg-gray-200 px-4 rounded rounded-l-none dark:border dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                        <?php
                                        if (isset($tb) && ($tb != "")) {
                                            echo "<h3 style='color:red'>" . $tb . "</h3>";
                                        }
                                        ?>
                                    </div>
                                    <div class="row mb-6">


                                    </div>
                                    <div class="mb-3">
                                        <button name="login" class="btn border-transparent bg-violet-500 w-full py-2.5 text-white w-100 waves-effect waves-light shadow-md shadow-violet-200 dark:shadow-zinc-600" type="submit">Log In</button>
                                    </div>
                                </form>

                                
                            </div>


                            
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-7 lg:col-span-8 xl:col-span-9">
                    <div class="h-screen bg-cover relative p-5 bg-[url('../images/auth-bg.jpg')]">
                        <div class="absolute inset-0 bg-violet-500/90"></div>

                        <ul class="bg-bubbles absolute top-0 left-0 w-full h-full overflow-hidden animate-square">
                            <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[10%] "></li>
                            <li class="h-28 w-28 rounded-3xl bg-white/10 absolute left-[20%]"></li>
                            <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                            <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[40%]"></li>
                            <li class="h-24 w-24 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                            <li class="h-32 w-32 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                            <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[32%]"></li>
                            <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[55%]"></li>
                            <li class="h-12 w-12 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                            <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[90%]"></li>
                        </ul>

                        <div class="grid grid-cols-12 content-center h-screen">
                            <div class="col-span-8 col-start-3 ">
                                <div id="carouselExampleIndicators" class="carousel slide relative" data-bs-ride="carousel">
                                    <div class="carousel-indicators absolute right-0 -bottom-10 left-0 flex justify-start gap-2">
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="h-3 w-3 rounded-full bg-white active" aria-current="true" aria-label="Slide 1"></button>

                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="h-3 w-3 rounded-full bg-white/30" aria-label="Slide 2"></button>

                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class="h-3 w-3 rounded-full bg-white/30"></button>
                                    </div>
                                    <div class="carousel-inner relative w-full overflow-hidden">
                                        <div class="carousel-item active ">
                                            <i class="bx bxs-quote-alt-left text-green-600 text-5xl"></i>
                                            <h3 class="mt-4 text-white text-22">“I feel confident imposing change on myself. It's a lot more progressing fun than looking back. That's why I ultricies enim at malesuada nibh diam on tortor neaded to throw curve balls.”</h3>
                                            <div class="flex mt-6 pt-4">
                                                <img src="../layout/assets/images/users/avatar-1.jpg" class="h-12 w-12 rounded-full" alt="...">
                                                <div class="flex-1 ml-3 mb-4">
                                                    <h5 class="font-size-18 text-white">Ilse R. Eaton</h5>
                                                    <p class="mb-0 text-white/50">Manager
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item float-left w-full">
                                        </div>
                                        <div class="carousel-item float-left w-full">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../layout/assets/libs/%40popperjs/core/umd/popper.min.js"></script>
    <script src="../layout/assets/libs/feather-icons/feather.min.js"></script>
    <script src="../layout/assets/libs/metismenujs/metismenujs.min.js"></script>
    <script src="../layout/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../layout/assets/libs/feather-icons/feather.min.js"></script>

    <script src="../layout/assets/js/app.js"></script>
</body>

</html>