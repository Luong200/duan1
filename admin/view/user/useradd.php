<div class="main-content">
                <h3 class="title-page">
                    Thêm Tài Khoản
                </h3>
                
                <form class="addPro" action="index.php?pg=adduser" method="POST">
                    
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" class="form-control" name="username" id="Username" >
                        
                        
                    </div>
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" class="form-control" name="password" id="password" >
                        
                    </div>
                    <div class="form-group">
                        <label for="name">Họ tên</label>
                        <input type="text" class="form-control" name="hoten" id="hoten" >
                    </div>
                    <div class="form-group">
                        <label for="name">Địa chỉ</label>
                        <input type="text" class="form-control" name="diachi" id="diachi" >
                    </div>
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" class="form-control" name="email" id="email" >
                        
                    </div>
                    <div class="form-group">
                        <label for="name">Điện thoại</label>
                        <input type="text" class="form-control" name="dienthoai" id="diachi" >
                    </div>
                    <div class="form-group">
                        <label for="name">Vai trò</label>
                        <input type="number" class="form-control" name="role" id="role" >
                    </div>
                    
                    
                    <div class="form-group">
                    <input type="submit" name="themmoi" value="Thêm Mới Tài Khoản">
                    <!-- <button type="submit" name="themmoi" class="btn btn-primary">Thêm mới tài khoản</button> -->
                    </div>
                </form>
            </div>

            <script>
                new DataTable('#example');
            </script>