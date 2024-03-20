<?php
require_once 'pdo.php';

// /**
//  * Thêm loại mới
//  * @param String $name là tên loại
//  * @throws PDOException lỗi thêm mới
//  */
function danhmuc_insert($name){
    $sql = "INSERT INTO danhmuc(name) VALUES(?)";
    pdo_execute($sql, $name);
}

function loadone_danhmuc($id) {
    $sql="SELECT *FROM danhmuc WHERE id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$name){
    $sql="UPDATE danhmuc SET name='$name' WHERE id=".$id;
    pdo_execute($sql);
}
// function delete_danhmuc($id){
//     $sql="DELETE FROM danhmuc WHERE id=".$id;
//     pdo_execute($sql);
// }
function delete_danhmuc($id)
{
    $sql = "DELETE FROM danhmuc WHERE id=?";
    return pdo_execute($sql, $id);
}
// /**
//  * Cập nhật tên loại
//  * @param int $ma_danhmuc là mã loại cần cập nhật
//  * @param String $name là tên loại mới
//  * @throws PDOException lỗi cập nhật
//  */
// function danhmuc_update($ma_danhmuc, $ten_danhmuc){
//     $sql = "UPDATE danhmuc SET ten_danhmuc=? WHERE ma_danhmuc=?";
//     pdo_execute($sql, $ten_danhmuc, $ma_danhmuc);
// }
// /**
//  * Xóa một hoặc nhiều loại
//  * @param mix $ma_danhmuc là mã loại hoặc mảng mã loại
//  * @throws PDOException lỗi xóa
//  */
// function danhmuc_delete($ma_danhmuc){
//     $sql = "DELETE FROM danhmuc WHERE ma_danhmuc=?";
//     if(is_array($ma_danhmuc)){
//         foreach ($ma_danhmuc as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_danhmuc);
//     }
// }
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function loadall_danhmuc(){
    $sql ="SELECT * FROM danhmuc order by id desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function danhmuc_all(){
    $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
    return pdo_query($sql);
}
function showdm($dsdm){
    $html_dm='';
    foreach ($dsdm as $dm) {
        extract($dm);
        $link='index.php?pg=sanpham&iddm='.$id;
        $html_dm.='<a href="'.$link.'">'.$name.'</a>';
    }
    return $html_dm;
}
function get_name_dm($id){
    $sql = "SELECT name FROM danhmuc where id=".$id;
    $kq= pdo_query_one($sql);
    return $kq["name"];
}
/////////////////////
/////////////ADMIN/
function showdm_admin($dsdm,$iddm){
    $html_dm='';
    foreach ($dsdm as $dm) {
        extract($dm);
        if($id==$iddm) {
            $se="selected";
        } else{
            $se="";
        } 
        $link='index.php?pg=sanpham&iddm='.$id;
        $html_dm.='<option value="'.$id.'" '.$se.'>'.$name.'</option> ';
    }
    return $html_dm;
}



// /**
//  * Truy vấn một loại theo mã
//  * @param int $ma_danhmuc là mã loại cần truy vấn
//  * @return array mảng chứa thông tin của một loại
//  * @throws PDOException lỗi truy vấn
//  */
// function danhmuc_select_by_id($ma_danhmuc){
//     $sql = "SELECT * FROM danhmuc WHERE ma_danhmuc=?";
//     return pdo_query_one($sql, $ma_danhmuc);
// }
// /**
//  * Kiểm tra sự tồn tại của một loại
//  * @param int $ma_danhmuc là mã loại cần kiểm tra
//  * @return boolean có tồn tại hay không
//  * @throws PDOException lỗi truy vấn
//  */
// function danhmuc_exist($ma_danhmuc){
//     $sql = "SELECT count(*) FROM danhmuc WHERE ma_danhmuc=?";
//     return pdo_query_value($sql, $ma_danhmuc) > 0;
// }