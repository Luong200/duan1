<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themesbrand.com/minia-tailwindcss/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2023 16:17:11 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Lương </title>
        <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta
          content="Tailwind Admin & Dashboard Template"
          name="description"
        />
        <meta content="" name="Themesbrand" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../layout/assets/images/favicon.ico" />


        <link href="../layout/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="../layout/assets/css/icons.css" />
        <link rel="stylesheet" href="../layout/assets/css/tailwind.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <!-- color picker css -->


    <!-- datepicker css -->
    <link rel="stylesheet" href="../layout/assets/libs/flatpickr/flatpickr.min.css">


    </head>
    
    <body data-mode="light" data-sidebar-size="lg">


    <!-- leftbar-tab-menu -->
    <nav class="border-b border-slate-100 dark:bg-zinc-800 print:hidden flex items-center fixed top-0 right-0 left-0 bg-white z-10 dark:border-zinc-700">

        <div class="flex items-center justify-between w-full">
            <div class="topbar-brand flex items-center">
                <div class="navbar-brand  flex items-center justify-between shrink px-5 h-[70px] border-r bg-slate-50 border-r-gray-50 dark:border-zinc-700 dark:bg-zinc-800">
                    <a href="#" class="flex items-center font-bold text-lg  dark:text-white">
                        <img src="../layout/assets/images/logo-sm.svg" alt="" class="mr-2 inline-block mt-1 h-6" />
                        <span class="hidden xl:block">Minia</span>
                    </a>
                </div>
                <button type="button" class="text-gray-600 dark:text-white h-[70px] -ml-10 mr-6 vertical-menu-btn" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <form class="app-search hidden xl:block px-5">
                    <div class="relative inline-block">
                        <input type="text" class="bg-gray-50/30 dark:bg-zinc-700/50 border-0 rounded focus:ring-0 placeholder:text-sm px-4 dark:placeholder:text-gray-200 dark:text-gray-100 dark:border-zinc-700 " placeholder="Search...">
                        <button class="py-1.5 px-2.5 text-white bg-violet-500 inline-block absolute right-1 top-1 rounded shadow shadow-violet-100 dark:shadow-gray-900" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                    </div>
                </form>
            </div>
            <div class="flex items-center">

                <div>
                    <div class="dropdown relative sm:hidden block">
                        <button type="button" class="text-xl px-4 h-[70px] text-gray-600 dark:text-gray-100 dropdown-toggle" data-dropdown-toggle="navNotifications">
                            <i data-feather="search" class="h-5 w-5"></i>
                        </button>
                    
                        <div class="dropdown-menu absolute px-4 -left-36 top-0 mx-4 w-72 z-50 hidden list-none border border-gray-50 rounded bg-white shadow dark:bg-zinc-800 dark:border-zinc-600 dark:text-gray-300" id="navNotifications">
                            <form class="py-3 dropdown-item" aria-labelledby="navNotifications">
                                <div class="form-group m-0">
                                    <div class="flex w-full">
                                        <input type="text" class="border-gray-100 dark:border-zinc-600 dark:text-zinc-100 w-fit" placeholder="Search ..." aria-label="Search Result">
                                        <button class="btn btn-primary border-l-0 rounded-l-none bg-violet-500 border-transparent text-white" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div>
                    <div class="dropdown relative mr-4">
                        <button type="button" class="flex items-center px-4 py-5 border-x border-gray-50 bg-gray-50/30 dropdown-toggle dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img class="h-8 w-8 rounded-full xl:mr-2" src="../layout/assets/images/users/avatar-1.jpg" alt="Header Avatar">
                            <span class="fw-medium hidden xl:block">Admin</span>
                            <i class="mdi mdi-chevron-down align-bottom hidden xl:block"></i>
                        </button>
                        <div class="dropdown-menu absolute top-0 -left-3 z-50 hidden w-40 list-none rounded bg-white shadow dark:bg-zinc-800" id="profile/log">
                            <div class="border border-gray-50 dark:border-zinc-600" aria-labelledby="navNotifications">
                                
                                <div class="dropdown-item dark:text-gray-100">
                                    <a class="px-3 py-2 hover:bg-gray-50/50/30 block dark:hover:bg-zinc-700/50" href="../index.php">
                                        <i class="mdi mdi-lock text-16 align-middle mr-1"></i> Home Client
                                    </a>
                                </div>
                                <hr class="border-gray-100 dark:border-gray-700">
                                <div class="dropdown-item dark:text-gray-100">
                                    <a class="p-3 hover:bg-gray-50/50/30 block dark:hover:bg-zinc-700/50" href="index.php?pg=logout">
                                        <i class="mdi mdi-logout text-16 align-middle mr-1"></i> Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

            <div class="hidden">
                <div class="fixed inset-0 bg-black/40 transition-opacity z-40"></div>
                <div class="h-screen z-50 bg-white fixed w-80 right-0" data-simplebar>
                    <div class="flex items-center p-4 border-b border-gray-100">
                        <h5 class="m-0 mr-2">Theme Customizer</h5>
                        <a href="javascript:void(0);" class="h-6 w-6 text-center bg-gray-700 ml-auto rounded-full" >
                            <i class="mdi mdi-close text-15 align-middle text-white leading-relaxed"></i>
                        </a>
                    </div>
                    <div class="p-4">
                        <h6 class="mb-3">Layout</h6>
                        <div class="flex gap-4">
                            <div>
                                <input class="focus:ring-0" checked type="radio" name="layout" id="layout-vertical" value="vertical">
                                <label class="align-middle" for="layout-vertical">Vertical</label>
                            </div>
                            <div>
                                <input class="focus:ring-0" type="radio" name="layout" id="layout-horizontal" value="horizontal">
                                <label class="align-middle" for="layout-horizontal">Horizontal</label>
                            </div>
                        </div>

                        <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>
                        <div class="flex gap-4">
                            <div>
                                <input class="focus:ring-0" checked type="radio" name="layout-mode" id="layout-mode-light" value="light">
                                <label class="form-check-label" for="layout-mode-light">Light</label>
                            </div>
                            <div>
                                <input class="focus:ring-0" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
                                <label class="form-check-label" for="layout-mode-dark">Dark</label>
                            </div>
                        </div>

                        <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                        <div class="flex gap-4">
                            <div>
                                <input class="focus:ring-0" checked type="radio" name="layout-width" id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                                <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                            </div>
                            <div>
                                <input class="focus:ring-0" type="radio" name="layout-width" id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                                <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                            </div>
                        </div>

                        <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>
                        <div class="flex gap-4">
                            <div>
                                <input class="focus:ring-0" checked type="radio" name="layout-position" id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                                <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                            </div>
                            <div>
                                <input class="focus:ring-0" checked type="radio" name="layout-position" id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                                <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                            </div>
                        </div>

                        <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>
                        <div class="flex gap-4">
                            <div>
                                <input class="focus:ring-0" checked type="radio" name="topbar-color" id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                                <label class="form-check-label" for="topbar-color-light">Light</label>
                            </div>
                            <div>
                                <input class="focus:ring-0" type="radio" name="topbar-color" id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                                <label class="form-check-label" for="topbar-color-dark">Dark</label>
                            </div>
                        </div>

                        <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                        <div class="space-y-1">
                            <div class="form-check sidebar-setting">
                                <input class="focus:ring-0" checked type="radio" name="sidebar-size" id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                                <label class="form-check-label" for="sidebar-size-default">Default</label>
                            </div>
                            <div class="form-check sidebar-setting">
                                <input class="focus:ring-0" type="radio" name="sidebar-size" id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                                <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                            </div>
                            <div class="form-check sidebar-setting">
                                <input class="focus:ring-0" type="radio" name="sidebar-size" id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                                <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                            </div>
                        </div>

                        <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>
                        <div class="space-y-1">
                            <div class="form-check sidebar-setting">
                                <input class="focus:ring-0" checked type="radio" name="sidebar-color" id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                                <label class="form-check-label" for="sidebar-color-light">Light</label>
                            </div>
                            <div class="form-check sidebar-setting">
                                <input class="focus:ring-0" type="radio" name="sidebar-color" id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                                <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                            </div>
                            <div class="form-check sidebar-setting">
                                <input class="focus:ring-0" type="radio" name="sidebar-color" id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                                <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                            </div>
                        </div>

                        <h6 class="mt-4 mb-3 pt-2">Direction</h6>
                        <div class="space-y-1">
                            <div>
                                <input class="focus:ring-0" checked type="radio" name="layout-direction" id="layout-direction-ltr" value="ltr">
                                <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                            </div>
                            <div>
                                <input class="focus:ring-0" type="radio" name="layout-direction" id="layout-direction-rtl" value="rtl">
                                <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu fixed left-0 bottom-0 top-16 h-screen border-r bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700 z-10">
    
        <div data-simplebar class="h-full">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-heading px-4 py-3.5 text-xs font-medium text-gray-500 cursor-default" data-key="t-menu">Menu</li>

                    <li>
                        <a href="index.php" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="home"></i>
                            <span data-key="t-dashboard"> Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="index.php?pg=listbill" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="grid"></i>
                            <span data-key="t-apps"> Quản lý đơn hàng</span>
                        </a>
                        <!-- <ul>
                            <li>
                                <a href="app-calendar.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Calendar</a>
                            </li>
                           
                        </ul> -->
                    </li>


                    <li>
                        <a href="index.php?pg=danhmuclist" aria-expanded="false"  class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="users"></i>
                            <span data-key="t-auth">Quản lý danh mục</span>
                        </a>
                        <!-- <ul>
                            <li>
                                <a href="login.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Login</a>
                            </li>
                            
                        </ul> -->
                    </li>

                     <li>
                        <a href="index.php?pg=sanphamlist" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="briefcase"></i><span data-key="t-pages">Quản lý sản phẩm</span>
                        </a>
                        <!-- <ul>
                            <li>
                                <a href="starter.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Starter Page</a>
                            </li>
                           
                        </ul> -->
                    </li>
                    <li>
                        <a href="index.php?pg=userlist" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="briefcase"></i><span data-key="t-pages">Quản lý thành viên</span>
                        </a>
                        <!-- <ul>
                            <li>
                                <a href="starter.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Starter Page</a>
                            </li>
                           
                        </ul> -->
                    </li>

                    <li>
                        <a href="index.php?pg=binhluan" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="briefcase"></i><span data-key="t-pages">Quản lý bình luận</span>
                        </a>
                        <!-- <ul>
                            <li>
                                <a href="starter.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Starter Page</a>
                            </li>

                        </ul> -->
                    </li>


                   

                   

                </ul>

               
            </div>
            <!-- Sidebar -->
        </div>
    </div>

    
                    <!-- <li>
                        <a href="index.php"><i class="fa-solid fa-house ico-side"></i>Dashboards</a>
                    </li>
                    <li>
                        <a href="index.php?pg=listbill"><i class="fa-solid fa-cart-shopping ico-side"></i>Quản kí đơn hàng</a>
                    </li>
                    <li>
                        <a href="index.php?pg=danhmuclist"><i class="fa-solid fa-folder-open ico-side"></i>Quản lí danh muc</a>
                    </li>
                    <li>
                        <a href="index.php?pg=sanphamlist"><i class="fa-solid fa-mug-hot ico-side"></i>Quản lí sản phẩm</a>
                    </li>
                    <li>
                        <a href="index.php?pg=userlist"><i class="fa-solid fa-user ico-side"></i>Quản lí thành viên</a>
                    </li>
                </ul>
            </nav> -->