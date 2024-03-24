  <!-- Left Sidebar End -->
  <div class="main-content ">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Dashboard</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                                <li class="inline-flex items-center">
                                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="#" class="ml-1 text-sm font-medium text-gray-500 hover:text-gray-900 md:ml-2 dark:text-gray-100 dark:hover:text-white">Add Người dùng</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="card-body">
                                        <div>
                                            <h5 class="text-sm text-gray-700 dark:text-gray-100"><i class="mdi mdi-arrow-right text-violet-500 mr-1"></i> Điền form</h5>
                                            
                                            <form class="mt-6" class="addPro" action="index.php?pg=adduser" method="POST">
                                                <div class="grid grid-cols-12 mb-4">
                                                    <label for="horizontal-firstname-input" class="col-span-12 lg:col-span-3 font-medium text-gray-700 dark:text-zinc-100">First name</label>
                                                    <div class="col-span-12 lg:col-span-9">
                                                        <input type="text" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" id="horizontal-firstname-input" placeholder="Enter your First Name">
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-12 mb-4">
                                                    <label for="horizontal-email-input" class="col-span-12 lg:col-span-3 font-medium text-gray-700 dark:text-zinc-100">UserName</label>
                                                    <div class="col-span-12 lg:col-span-9">
                                                        <input type="text" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" id="horizontal-email-input" name="username" placeholder="Enter your username">
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-12 mb-4">
                                                    <label for="horizontal-password-input" class="col-span-12 lg:col-span-3 font-medium text-gray-700 dark:text-zinc-100">Password</label>
                                                    <div class="col-span-12 lg:col-span-9">
                                                        <input type="password" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" name="password" id="password" placeholder="Enter your password">
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-12 mb-4">
                                                    <label for="horizontal-email-input" class="col-span-12 lg:col-span-3 font-medium text-gray-700 dark:text-zinc-100">Họ tên</label>
                                                    <div class="col-span-12 lg:col-span-9">
                                                        <input type="text" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" name="hoten" id="hoten" >
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-12 mb-4">
                                                    <label for="horizontal-email-input" class="col-span-12 lg:col-span-3 font-medium text-gray-700 dark:text-zinc-100">Địa chỉ</label>
                                                    <div class="col-span-12 lg:col-span-9">
                                                        <input type="text" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" name="diachi" id="diachi" >
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-12 mb-4">
                                                    <label for="horizontal-email-input" class="col-span-12 lg:col-span-3 font-medium text-gray-700 dark:text-zinc-100">Email</label>
                                                    <div class="col-span-12 lg:col-span-9">

                                                        <input type="email" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60"  name="email" id="email" >
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-12 mb-4">
                                                    <label for="horizontal-email-input" class="col-span-12 lg:col-span-3 font-medium text-gray-700 dark:text-zinc-100">Điện thoại</label>
                                                    <div class="col-span-12 lg:col-span-9">
                                                        <input type="text" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" name="dienthoai" id="diachi" >
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-12 mb-4">
                                                    <label for="horizontal-email-input" class="col-span-12 lg:col-span-3 font-medium text-gray-700 dark:text-zinc-100">Vai trò</label>
                                                    <div class="col-span-12 lg:col-span-9">
                                                        <select class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60"  name="role" aria-label="Default select example">
                                                            <option value="0" selected>Người dùng</option>
                                                            <option value="1">Admin</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-12 justify-content-end">
                                                    <div class="col-span-12 lg:col-span-9">
                                                        
    
                                                        <div class="mt-6">
                                                            <button type="submit" class="btn bg-violet-500 border-transparent text-white font-medium hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50" name="themmoi" value="Thêm Mới Tài Khoản">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        
                                    </div>

            </div>
        </div>



            <script>
                new DataTable('#example');
            </script>