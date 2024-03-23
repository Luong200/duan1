<?php
require_once 'pdo.php';
//Them san pham
function sanpham_insert($name, $img, $price, $mota, $iddm)
{
    $sql = "INSERT INTO sanpham(name, img, price,mota, iddm) VALUES (?,?,?,?,?)";
    pdo_execute($sql, $name, $img, $price, $mota, $iddm);
}

function sanpham_update($name, $img, $price, $mota, $iddm, $id)
{
    if ($img != "") {
        $sql = "UPDATE sanpham SET name=?,img=?, price=?,mota=?,iddm=? WHERE id=?";
        pdo_execute($sql, $name, $img, $price, $mota, $iddm, $id);
    } else {
        $sql = "UPDATE sanpham SET name=?, price=?,mota=?,iddm=? WHERE id=?";
        pdo_execute($sql, $name, $price, $mota, $iddm, $id);
    }
}

//xoa san pham
function sanpham_delete($id)
{
    $sql = "DELETE FROM sanpham WHERE  id=?";
    // if(is_array($ma_hh)){
    //     foreach ($ma_hh as $ma) {
    //         pdo_execute($sql, $ma);
    //     }
    // }
    // else{
    pdo_execute($sql, $id);
    // }
}

function get_dssp_new($limi)
{
    $sql = "SELECT * FROM sanpham ORDER BY id DESC limit " . $limi;
    return pdo_query($sql);
}

function get_dssp_best($limi)
{
    $sql = "SELECT * FROM sanpham WHERE bestseller=1 ORDER BY id DESC limit " . $limi;
    return pdo_query($sql);
}

function get_dssp_view($limi)
{
    $sql = "SELECT * FROM sanpham ORDER BY view DESC limit " . $limi;
    return pdo_query($sql);
}

function get_cate_view()
{
    $sql = "SELECT * FROM danhmuc";
    return pdo_query($sql);
}

function get_dssp($kyw, $iddm, $limi)
{
    $sql = "SELECT * FROM sanpham WHERE 1";
    if ($iddm > 0) {
        $sql .= " AND iddm=" . $iddm;
    }
    if ($kyw != "") {
        $sql .= " AND name like '%" . $kyw . "%'";
    }
    $sql .= " ORDER BY id DESC limit " . $limi;
    return pdo_query($sql);
}

function get_sanphamchitiet($id)
{
    $sql = "SELECT * FROM sanpham WHERE id=?";
    return pdo_query_one($sql, $id);
}

function get_img($id)
{
    $sql = "SELECT img FROM sanpham WHERE id=?";
    $getimg = pdo_query_one($sql, $id);
    return $getimg['img'];
}

function get_dssp_lienquan($iddm, $id)
{
    $sql = "SELECT * FROM sanpham WHERE iddm=? AND id = ? ORDER BY id DESC " ;
    return pdo_query($sql, $iddm, $id);
}

function get_iddm($id)
{
    $sql = "SELECT iddm FROM sanpham where id=?";
    return pdo_query_value($sql, $id);

}

function showsp($dssp)
{
    $html_dssp = '';
    foreach ($dssp as $sp) {
        extract($sp);

        $html_dssp .= '    <div class="rd-product__slide-item"><div class="product__item">
                                    <div class="product__img text-center pos-rel">
                                        <a href="index.php?pg=sanphamchitiet&id=' . $id . '"><img src="' . IMG_PATH_USER . $img . '" alt=""></a>
                                    </div>
                                    <div class="product__content">
                                        <div class="product__review ul_li_center">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span>(126) Review</span>
                                        </div>
                                        <h2 class="product__title"><a href="shop-single.html">Ninja Compact Smoothie & Food Processing Blender</a></h2>
                                        <h4 class="product__price"><span class="new"> ' . number_format($price) . ' VND</span></h4>
                                    </div>
                                    <ul class="product__action">
                                         <li>
                                                                    <form action="index.php?pg=addcart" method="post">
                                <input type="hidden" name="idpro" value="' . $id . '">
                                <input type="hidden" name="name" value="' . $name . '">
                                <input type="hidden" name="img" value="' . $img . '">
                                <input type="hidden" name="price" value="' . $price . '">
                                <input type="hidden" name="mota" value="' . $mota . '">
                                <input type="hidden" name="soluong" value="1">
                                <div class="btn_dathang" style="text-align: center; margin-top:20px;"><button type="submit" name="addcart" ><i class="far fa-shopping-basket"></i></button></div>
                            </form>
                                    </ul>
                                    <span class="badge-skew">New</span>
                                </div> </div>';
//        $html_dssp.='<div class="box25 mr15">
//                            '.$best.'
//                            <a href="index.php?pg=sanphamchitiet&id='.$id.'">
//                                <img src="'.IMG_PATH_USER.$img.'" alt="'.$name.'">
//                            </a>
//
//                            <span class="price">Giá bán: '.$price.' VNĐ</span>
//                            <h2>'.$name.'</h2>
//                            <form action="index.php?pg=addcart" method="post">
//                                <input type="hidden" name="idpro" value="'.$id.'">
//                                <input type="hidden" name="name" value="'.$name.'">
//                                <input type="hidden" name="img" value="'.$img.'">
//                                <input type="hidden" name="price" value="'.$price.'">
//                                <input type="hidden" name="mota" value="'.$mota.'">
//                                <input type="hidden" name="soluong" value="1">
//                                <div class="btn_dathang" style="text-align: center; margin-top:20px;"><button type="submit" name="addcart" >Đặt hàng</button></div>
//                            </form>
//
//                        </div>';
    }
    return $html_dssp;
}


function showspCategories($dssp)
{
    $html_dssp = '';
    foreach ($dssp as $sp) {
        extract($sp);

        $html_dssp .= '<div class="col-lg-4">
                        <div class="product-cat__item mt-50">
                            <div class="product-cat__images">
                                <div class="tab-content" id="fc-myTabContent">
                                    <div class="tab-pane fade show active" id="fc-home" role="tabpanel" aria-labelledby="fc-home-tab">
                                        <div class="product-cat__img">
                                            <a href="index.php?pg=sanphamchitiet&id='.$id.'"><img src="' . IMG_PATH_USER . $img . '" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="fc-profile" role="tabpanel" aria-labelledby="fc-profile-tab">
                                        <div class="product-cat__img">
                                            <a href="index.php?pg=sanphamchitiet&id='.$id.'">><img src="' . IMG_PATH_USER . $img . '" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="fc-contact" role="tabpanel" aria-labelledby="fc-contact-tab">
                                        <div class="product-cat__img">
                                            <a href="index.php?pg=sanphamchitiet&id='.$id.'">><img src="' . IMG_PATH_USER . $img . '"alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cat__content">
                                <h3 class="title">'.$name.'</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#!">'.$mota.'</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>';
//        $html_dssp.='<div class="box25 mr15">
//                            '.$best.'
//                            <a href="index.php?pg=sanphamchitiet&id='.$id.'">
//                                <img src="'.IMG_PATH_USER.$img.'" alt="'.$name.'">
//                            </a>
//
//                            <span class="price">Giá bán: '.$price.' VNĐ</span>
//                            <h2>'.$name.'</h2>
//                            <form action="index.php?pg=addcart" method="post">
//                                <input type="hidden" name="idpro" value="'.$id.'">
//                                <input type="hidden" name="name" value="'.$name.'">
//                                <input type="hidden" name="img" value="'.$img.'">
//                                <input type="hidden" name="price" value="'.$price.'">
//                                <input type="hidden" name="mota" value="'.$mota.'">
//                                <input type="hidden" name="soluong" value="1">
//                                <div class="btn_dathang" style="text-align: center; margin-top:20px;"><button type="submit" name="addcart" >Đặt hàng</button></div>
//                            </form>
//
//                        </div>';
    }
    return $html_dssp;
}

function showcategory($dscate)
{
    $html_dssp = '';
    foreach ($dscate as $sp) {
        extract($sp);
        $html_dssp .= ' <li><a href="#!"><img src="layout/assets/img/icon/cat_04.svg" alt="">' . $name . '</a></li>';
    }
    return $html_dssp;
}
function showcategoryHeader($dscate)
{
    $html_dssp = '';
    foreach ($dscate as $sp) {
        extract($sp);
        $html_dssp .= ' <Option><a href="#!"><img src="layout/assets/img/icon/cat_04.svg" alt="">' . $name . '</a></Option>';
    }
    return $html_dssp;
}
///////////////////////// ÂDMIN//////////
function showsp_admin($dssp)
{
    $i = 1;
    $html_dssp = '';
    foreach ($dssp as $sp) {
        extract($sp);
        if ($bestseller == 1) {
            $best = '<div class="best"></div>';
        } else {
            $best = '';
        }
        $html_dssp .= '<tr>
                        <td>' . $i . '</td>
                        <td><img src="' . IMG_PATH_ADMIN . $img . '" alt="' . $name . '" width="80"/></td>
                        <td>' . $name . '</td>
                        <td>' . $price . 'VNĐ</td>
                        <td>' . $view . '</td>
                        
                        <td>
                        <a href="index.php?pg=sanphamupdate&id=' . $id . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                        <a href="index.php?pg=sanphamdelete&id=' . $id . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                        </td>
                    </tr> ';
        $i++;
    }
    return $html_dssp;
}

// function hang_hoa_select_by_id($ma_hh){
//     $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_one($sql, $ma_hh);
// }

// function hang_hoa_exist($ma_hh){
//     $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_value($sql, $ma_hh) > 0;
// }

// function hang_hoa_tang_so_luot_xem($ma_hh){
//     $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
//     pdo_execute($sql, $ma_hh);
// }

// function hang_hoa_select_top10(){
//     $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
//     return pdo_query($sql);
// }

// function hang_hoa_select_dac_biet(){
//     $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
//     return pdo_query($sql);
// }

// function hang_hoa_select_by_loai($ma_loai){
//     $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
//     return pdo_query($sql, $ma_loai);
// }

// function hang_hoa_select_keyword($keyword){
//     $sql = "SELECT * FROM hang_hoa hh "
//             . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
//             . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
//     return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
// }

// function hang_hoa_select_page(){
//     if(!isset($_SESSION['page_no'])){
//         $_SESSION['page_no'] = 0;
//     }
//     if(!isset($_SESSION['page_count'])){
//         $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
//         $_SESSION['page_count'] = ceil($row_count/10.0);
//     }
//     if(exist_param("page_no")){
//         $_SESSION['page_no'] = $_REQUEST['page_no'];
//     }
//     if($_SESSION['page_no'] < 0){
//         $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
//     }
//     if($_SESSION['page_no'] >= $_SESSION['page_count']){
//         $_SESSION['page_no'] = 0;
//     }
//     $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT ".$_SESSION['page_no'].", 10";
//     return pdo_query($sql);
// }