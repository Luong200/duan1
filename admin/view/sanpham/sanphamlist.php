<?php
    $html_sanphamlist=showsp_admin($sanphamlist);
?>

<div class="main-content">
          <h3 class="title-page">Sản phẩm</h3>
          <div class="d-flex justify-content-end">
            <a href="index.php?pg=addproduct" class="btn btn-primary mb-2">Thêm sản phẩm</a>
          </div>
          <table id="example" class="table table-striped" style="width: 100%">
            <thead>
              <tr>
                <th>STT</th>
                <th>Hình</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá</th>
                <th>Lượt xem</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody>
              <?=$html_sanphamlist;?>
            </tbody>
            <tfoot>
              
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script>
      new DataTable("#example");
    </script>