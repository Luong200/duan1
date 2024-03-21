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
                <form class="addPro" action="index.php?pg=update_danhmuc" method="post">
                    
                    <div class="form-group">
                        <label for="name">Tên danh muc:</label>
                        <input type="text" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" name="name" id="name" value="<?php if(isset($name)&&($name!="")) echo $name;?>">
                    </div>
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>" >
                    <div class="form-group">
                        <input type="submit" name="capnhat" value="Cập nhật">
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