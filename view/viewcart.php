<?php
    $html_cart='';
    $i=0;
    foreach ($_SESSION['giohang'] as $key => $sp) {
        extract($sp);
        $tt=(Int)$price*(Int)$soluong;
        $xoasp='<a href="index.php?pg=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a>';
        $html_cart.='
                <tr>
                    <td>'.$idpro.'</td>
                    <td><img src="'.IMG_PATH_USER.$img.'" alt="" style="width:100px; height:120px;" ></td>
                    <td>'.$name.'</td>
                    <td>'.$price.'</td>
                    <td><a onclick="giam(this)">  << </a> <span>'.$soluong.' </span><a onclick="tang(this)"> >> </a></td>
                    <td>'.$tt.'</td>
                    <td>'.$xoasp.'</td>
                </tr>
                        ';
        $i+=1;
    }
?>

<div class="containerfull">
        <h4><div class="bgbanner" style="color: brown; font-size:larger">GIỎ HÀNG</div></h4>
    </div>

    <section class="containerfull">
        <div class="container">
            <div class="col9 viewcart">
                <h2>ĐƠN HÀNG</h2>
            <table>
                <tr>
                    <th>STT</th>
                    <th>Hình</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
                <?=$html_cart?>
            </table>
            <a href="index.php?pg=viewcart&del=1"> XÓA TẤT CẢ ĐƠN HÀNG</a>
            <a href="index.php?pg=sanpham" style="margin-left: 20px;">TIẾP TỤC ĐẶT HÀNG</a>
        </div>

        <div class="col3">
            <h2>ĐƠN HÀNG</h2>
            <div class="total">
                <h3>Tổng: <?=$tongdonhang?> VNĐ</h3>
            </div>
            <div class="coupon">
                <form action="index.php?pg=viewcart&voucher=1" method="post">
                    <input type="hidden" name="tongdonhang" value="<?=$tongdonhang?>">
                    <input type="text" name="mavoucher" placeholder="Nhập voucher">
                    <button type="submit">Áp Mã Voucher</button>
                </form>
                
            </div>
            <div class="total">
                <h3>Tổng thanh toán: <?=$thanhtoan?>  VNĐ</h3>
            </div>
            <a href="index.php?pg=bill">
                <button>Đặt hàng</button>
            </a>
            
        </div>


        </div>
    </section>
<script>
    function tang(x){
        // thay doi so luong truc tiep voi DOM HTML
        var cha = x.parentElement;
        var soluongcu=cha.children[1];
        var soluongmoi=parseInt(soluongcu.innerText)+1;
        soluongcu.innerText=soluongmoi;

        // alert(soluongcu);
        //goi ham cap nhat session
        
    }
    function giam(x){
        // thay doi so luong truc tiep voi DOM HTML
        var cha = x.parentElement;
        var soluongcu=cha.children[1];
        if(parseInt(soluongcu.innerText)>1){
            var soluongmoi=parseInt(soluongcu.innerText)-1;
            soluongcu.innerText=soluongmoi;
        }else{
            alert("Số lượng tối thiểu là 1 ");
        }
        

        // alert(soluongcu);
        //goi ham cap nhat session
        
    }
</script>