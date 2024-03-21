<div class="main-content">
    <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">
    <h3 class="title-page">
        Cập nhật đơn hàng <?php echo $billDetail['madh']; ?>
    </h3>

<!--    --><?php //print_r($billDetail['bill_status']);die(); ?>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Trạng thái đơn hàng</label>
        <select class="form-select" aria-label="Default select example" name="bill_status">
            <option value="0" <?php echo $billDetail['bill_status'] == 0 ? 'selected' : '' ;?>>Đơn hàng mới</option>
            <option value="1"  <?php echo $billDetail['bill_status'] == 1 ? 'selected' : '' ;?>>Đang xử lí</option>
            <option value="2"  <?php echo $billDetail['bill_status'] == 2 ? 'selected' : '' ;?>>Đang Giao Hàng</option>
            <option value="3"  <?php echo $billDetail['bill_status'] == 3 ? 'selected' : '' ;?>>Hoàn Tất</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phương thức thanh toán</label>
        <div class="mt-3">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pttt" id="inlineRadio1" value="0" <?php echo $billDetail['pttt'] == 0 ? 'checked' : '' ;?>>
                <label class="form-check-label" for="inlineRadio1">Trả tiền khi nhận hàng</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pttt" id="inlineRadio2" value="1" <?php echo $billDetail['pttt'] == 1 ? 'checked' : '' ;?>>
                <label class="form-check-label" for="inlineRadio2">Chuyển khoản</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pttt" id="inlineRadio2" value="2" <?php echo $billDetail['pttt'] == 2 ? 'checked' : '';?>>
                <label class="form-check-label" for="inlineRadio2">Thanh Toán online</label>
            </div>
        </div>
        </div>

        <button type="submit" name="updateStatus" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
</div>
       