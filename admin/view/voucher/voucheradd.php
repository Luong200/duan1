<div class="main-content">
<div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">
                <h3 class="title-page">
                    Thêm mã giảm giá
                </h3>
        <div class="box500">              
                <form class="addPro" action="index.php?pg=voucheradd" method="POST">
                    
                    <div class="form-group">
                        <label for="name" >Nội dung giảm giá:</label>
                        <input type="text"  class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" name="name" id="name" placeholder="Nhập tên danh mục...">
                    </div>

                    <div class="form-group">
                        <label for="name" >Mã giảm giá:</label>
                        <input type="text"  class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" name="code" id="name" placeholder="Mã giảm giá..">
                    </div>


                    <div class="form-group">
                        <label for="name" >Số % muốn giảm:</label>
                        <input type="text"  class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" name="sale_off" id="name" placeholder="Nhập số % cần giảm...">
                    </div>
                    
                    <div class="form-group mt-6">
                        <button type="submit" name="btnadd" class="btn bg-violet-500 border-transparent text-white font-medium w-28 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50">Thêm</button>
                    </div>
                    <?php
                        if(isset($tb)&&($tb!="")){
                            echo $tb;
                        }
                    ?>
                </form>
        </div>
</div> 
</div>
</div>