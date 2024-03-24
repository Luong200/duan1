<?php
    $html_danhmuclist=showdm_admin_no_select($danhmuclist);
?>
<link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<div class="main-content">
<div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">
                <h3 class="title-page">
                    Thêm sản phẩm
                </h3>
                
                <form class="addPro" action="index.php?pg=addproduct" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh sản phẩm</label>
                        <div class="custom-file">
                            <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên sản phẩm:</label>
                        <input type="text" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" name="name" id="name" placeholder="Nhập tên sả phẩm">
                    </div>
                    <div class="form-group">
                        <label for="categories">Danh mục:</label>
                        <select class="dark:bg-zinc-800 dark:border-zinc-700 w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:text-zinc-100/60" name="iddm" aria-label="Default select example">
                            <option value="0" selected>Chọn danh mục</option>
                            <?=$html_danhmuclist;?>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Số lượng:</label>
                        <div class="input-group mb-3">
                            <input type="text" name="soluong" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" placeholder="Nhập số lượng">
                        </div>
                    </div>
                    <div class="form-group id_price">
                        <label for="price">Giá gốc:</label>
                        <div class="input-group mb-3">
                            <input type="text" name="price" id="price" class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" placeholder="Nhập giá gốc">
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label for="price_sale">Giá khuyến mãi:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" name="price_sale" id="price_sale" class="form-control"
                                placeholder="Giá khuyến mãi">
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label>Màu sắc</label>
                        <input name='color' class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" value='' autofocus>
                    </div>
                    <div class="form-group">
                        <label>Kích cỡ</label>
                        <input name='size' class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" value='' autofocus>
                    </div>

                    <div class="form-group id_prices" hidden>
                        <label>Giá tiền biến thể</label>
                        <input name='prices' class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" value='' autofocus>
                    </div>

                    <div class="form-group">
                        <label>Mô tả ngắn</label>
                        <textarea class="w-full py-1.5 placeholder:text-sm border-gray-100 rounded dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/60" name="mota" rows="3">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="addproduct" class="btn bg-violet-500 border-transparent text-white font-medium w-28 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50">Thêm sản phẩm</button>
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

