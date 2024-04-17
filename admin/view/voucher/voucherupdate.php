<?php 
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="main-content">
<div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">
                <h3 class="title-page">
                    Cập nhật danh muc
                </h3>
        <div class="box500">              
                <form class="addPro" action="index.php?pg=update_voucher" method="post">

                    <div class="form-group">
                        <label for="name" >Nội dung giảm giá:</label>
                        <input type="text" value="<?=($name!="")? $name : '';?>"  class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" name="name" id="name" placeholder="Nhập tên danh mục...">
                    </div>

                    <div class="form-group">
                        <label for="name" >Mã giảm giá:</label>
                        <input type="text" value="<?=($code!="")? $code : '';?>"  class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" name="code" id="name" placeholder="Mã giảm giá..">
                    </div>


                    <div class="form-group">
                        <label for="name" >Số % muốn giảm:</label>
                        <input type="text"  value="<?=($sale_off!="")? $sale_off : '';?>" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" name="sale_off" id="name" placeholder="Nhập số % cần giảm...">
                    </div>
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>" >
                    <div class="form-group">
                        <input type="submit" name="capnhat" value="Cập nhật" class="btn bg-violet-500 border-transparent text-white font-medium w-28 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50">
                        <!-- <button type="submit" name="capnhat" class="btn btn-primary">Cập nhật danh muc</button> -->
                    </div>
                    
                    <?php
                        if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
                    ?>
                </form>
        </div>
</div> 
</div>
</div>