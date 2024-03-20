<?php 
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="main-content">
                <h3 class="title-page">
                    Cập nhật danh muc
                </h3>
        <div class="box500">              
                <form class="addPro" action="index.php?pg=update_danhmuc" method="post">
                    
                    <div class="form-group">
                        <label for="name">Tên danh muc:</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?php if(isset($name)&&($name!="")) echo $name;?>">
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