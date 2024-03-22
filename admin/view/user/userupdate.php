<?php 
    if(is_array($taikhoan)){
        extract($taikhoan);
    }
?>
<div class="main-content">
<div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">
                <h3 class="title-page">
                    Cập Nhật Tài Khoản
                </h3>
                
                <form class="addPro" action="index.php?pg=update_user" method="POST">
                    
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" value="<?=$username?>" name="username" id="Username" >              
                        
                    </div>
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" value="<?=$password?>" name="password" id="password" >
                        
                    </div>
                    <div class="form-group">
                        <label for="name">Họ tên</label>
                        <input type="text" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" value="<?=$hoten?>" name="hoten" id="hoten" >
                    </div>
                    <div class="form-group">
                        <label for="name">Địa chỉ</label>
                        <input type="text" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" value="<?=$diachi?>" name="diachi" id="diachi" >
                    </div>
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" value="<?=$email?>" name="email" id="email" >
                        
                    </div>
                    <div class="form-group">
                        <label for="name">Điện thoại</label>
                        <input type="text" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" value="<?=$dienthoai?>" name="dienthoai" id="diachi" >
                    </div>
                    <div class="form-group">
                        <label for="name">Role</label>
                        <input type="number" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" value="<?=$role?>" name="role" id="role" >
                    </div>
                    
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>" >
                    <div class="form-group">
                        <input type="submit" name="capnhat" value="Cập nhật tài khoản">
                        <!-- <button type="submit" name="capnhat" class="btn btn-primary">Cập nhật tài khoản</button> -->
                    </div>
                </form>
            </div>
</div>
</div>
            <script>
                new DataTable('#example');
            </script>