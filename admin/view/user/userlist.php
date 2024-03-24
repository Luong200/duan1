<div class="main-content ">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">List thành viên </h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                                <li class="inline-flex items-center">
                                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        Homepage
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="#" class="ml-1 text-sm font-medium text-gray-500 hover:text-gray-900 md:ml-2 dark:text-gray-100 dark:hover:text-white">Thành Viên</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div> 
                </div>

                <div class=" dark:bg-zinc-800 dark:border-zinc-600">
                            
                           <a href="index.php?pg=adduser"><button type="button" class=" btn text-white bg-green-500 border-green-500 hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">Add</button></a> 

                            <div class="card-body relative overflow-x-auto">
                                <table id="example" class="table w-full pt-4 text-gray-700 dark:text-zinc-100">
                                    <thead>
                                        <tr>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600">UserName</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Mật khẩu</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Họ Tên</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Email</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Điện thoại</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Role</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    <?php
                    foreach ($userlist as $user) {
                        extract($user);
                    ?>
                        <tr>
                            <td class="p-4 pr-8 border border-t-0 border-gray-50 dark:border-zinc-600"><?php echo $username?></td>
                            <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600"><?php echo $password?></td>
                            <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600"><?php echo $hoten?></td>
                            <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600"><?php echo $email?></td>
                            <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600"><?php echo $dienthoai?></td>
                            <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600"><?php echo $role=="0" ? "Người dùng" :"ADMIN"?></td>
                            <td>
                                <a href="index.php?pg=suatk&id=<?php echo $id?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                <a href="index.php?pg=delete_user&id=<?php echo $id?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>    
                    </tbody>
                                    
                                </table>

                            </div>
                        </div>
               

            </div>
        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>

        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>