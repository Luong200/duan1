<?php
//inser vao table cart
function cart_insert($idpro, $price, $name, $img, $soluong, $thanhtien,$idbill,$id_variants){
    $sql = "INSERT INTO cart(idpro, price, name , img,soluong,thanhtien,idbill,id_variants) VALUES (?, ?, ?, ?, ?, ?, ?,?)";
    pdo_execute($sql, $idpro, $price, $name, $img, $soluong, $thanhtien,$idbill,$id_variants);
}
    function viewcart(){
        $html_cart='';
        $i=1;
        foreach ($_SESSION['giohang'] as $sp) {
            extract($sp);
            $tt=(Int)$price*(Int)$soluong;
            $html_cart.='
                        <div class="total">
                            <div class="boxcart">
                            <li>'.$name.' x  '.$soluong.'</li>
                            
                            <h3>Tổng: '.$tongdonhang.' </h3>
                            </div>
                        </div>
                        <div class="pttt">
                            <div class="boxcart">
                            <h3>Phương thức thanh toán: </h3>
                            <input type="radio" name="pttt" value="1" id="" checked> Tiền mặt<br>
                            <input type="radio" name="pttt" value="2" id=""> Ví điện tử<br>
                            <input type="radio" name="pttt" value="3" id=""> Chuyển khoản<br>
                            <input type="radio" name="pttt" value="4" id=""> Thanh toán online<br>
                            </div>
                        </div>
                        <div class="coupon">
                            <form action="index.php?pg=viewcart&voucher=1" method="post">
                                <input type="hidden" name="tongdonhang" value="<?=$tongdonhang?>">
                                <input type="text" name="mavoucher" placeholder="Nhập voucher">
                                <button type="submit">Áp Mã Voucher</button>
                            </form>
                            
                        </div>
                        <div class="total">
                            <div class="boxcart bggray">
                                <h3>Tổng thanh toán: '.$thanhtoan.' </h3>
                            </div>
                        </div>
                    
                            ';
            $i++;
        }
        return $html_cart;
    }
    function get_tongdonhang(){
        $tong=0;
        
        foreach ($_SESSION['giohang'] as $sp) {
            extract($sp);
            $tt=(Int)$price*(Int)$soluong;
            $tong+=$tt;
        }
        return $tong;
    }
?>
<!-- // <tr>
                    //     <td>'.$i.'</td>
                    //     <td><img src="layout/images/'.$img.'" alt="" style="width:100px; height:120px;" ></td>
                    //     <td>'.$name.'</td>
                    //     <td>'.$price.'</td>
                    //     <td>'.$soluong.'</td>
                    //     <td>'.$tt.'</td>
                    //     <td><a href="#">Xóa</a></td>
                    // </tr> -->