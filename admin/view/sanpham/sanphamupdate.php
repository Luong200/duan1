<?php
   
    if(is_array($sp)&&(count($sp)>0)){
        extract($sp);
        $idupdate=$id;
        $imgpath=IMG_PATH_ADMIN.$img;
        if(is_file($imgpath)){
            $img='<img src="'.$imgpath.'" width="80px"';
        }else{
            $img="";
        }
    }
    $html_danhmuclist=showdm_admin($danhmuclist,$iddm);
?>
<link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<div class="main-content ">
<div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">
                <h3 class="title-page">
                    Cập nhật sản phẩm
                </h3>
                
                <form class="addPro" action="index.php?pg=updateproduct" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh sản phẩm</label>
                        <div class="custom-file">
                            <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                            <?=$img?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên sản phẩm:</label>
                        <input type="text" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" name="name" value="<?=($name!="")? $name : '';?>" id="name" placeholder="Nhập tên sả phẩm">
                    </div>
                    <div class="form-group">
                        <label for="categories">Danh mục:</label>
                        <select class="dark:bg-zinc-800 dark:border-zinc-700 w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:text-zinc-100/60" name="iddm" aria-label="Default select example">
                            <option selected>Chọn danh mục</option>
                            <?=$html_danhmuclist;?>
                            
                          </select>
                    </div>
                    <div class="form-group" <?php  echo count($colorsData) > 0 ?  'hidden' : ''; ?>>
                        <label for="price">Giá gốc:</label>
                        <div class="input-group mb-3">
                            <input type="text" name="price" value="<?=($price>0)? $price : '';?>" id="price" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" placeholder="Nhập giá gốc">
                        </div>
                    </div>
                    <div class="form-group"  <?php  echo count($colorsData) > 0 ?  'hidden' : ''; ?>>
                        <label for="price_sale">Giá khuyến mãi:</label>
                        <div class="input-group mb-3">
                            <input type="text" name="price_sale" id="price_sale" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60"
                                placeholder="Giá khuyến mãi">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Màu sắc</label>
                        <input name='color' class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" value='<?php foreach ($colorsData as $value){ echo $value . ",";  }?>' autofocus>
                    </div>
                    <div class="form-group">
                        <label>Kích cỡ</label>
                        <input name='size' class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" value='<?php foreach ($sizesData as $value){ echo $value . ",";  }?>' autofocus>
                    </div>

                    <div class="form-group id_prices"  <?php  echo count($colorsData) > 0 ? '' : 'hidden'; ?>>
                        <label>Giá tiền biến thể</label>
                        <input name='prices' class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" value=' <?php foreach ($pricesData as $value){ echo $value . ",";  }?>' autofocus>
                    </div>
                    <div class="form-group">
                        <label>Mô tả ngắn</label>
                        <textarea class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" name="mota" rows="3"
                            placeholder="Nhập 1 đoạn mô tả ngắn về sản phẩm" style="height: 78px;"><?=$mota?></textarea>
                    </div>
                    <!-- <div class="form-group">
                        <label>Mô tả chi tiết</label>
                        <textarea class="form-control" name="detail" rows="3"
                            placeholder="Nhập 1 đoạn mô tả ngắn về sản phẩm" style="height: 78px;"></textarea>
                    </div> -->
                    <div class="form-group mb-4">
                        <input type="hidden" name="id" value="<?=$idupdate?>">
                        <button type="submit" name="updateproduct" class="btn bg-violet-500 border-transparent text-white font-medium w-28 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50">Cập nhật sản phẩm</button>
                    </div>
                </form>
            </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
<script>
    var input = document.querySelector('input[name=color]');
    var inputsize = document.querySelector('input[name=size]');
    var inputprices= document.querySelector('input[name=prices]');
    var inputid_prices= document.querySelector('.id_prices');
    var inputid_price= document.querySelector('.id_price');
    const hadleInput = new Tagify(input)
    const hadlesize =  new Tagify(inputsize)
    new Tagify(inputprices)
    hadleInput.on('add', function(e){
        inputid_prices.hidden=false;
        inputid_price.hidden=true;
    });
    console.log(hadleInput);

    hadleInput.on('remove', function(e){
        if(e.detail.index === 0){
            inputid_prices.hidden=true;
            inputid_price.hidden=false;
        }
    });

</script>