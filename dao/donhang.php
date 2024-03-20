<?php
require_once 'pdo.php';

function bill_insert_id($madh,$iduser,$nguoidat_ten,$nguoidat_email,$nguoidat_tell,$nguoidat_diachi,$ngaydathang, $nguoinhan_ten, $nguoinhan_diachi, $nguoinhan_tel, $total, $ship, $voucher, $tongthanhtoan,$pttt){
    $sql = "INSERT INTO bill(madh,iduser,nguoidat_ten,nguoidat_email, nguoidat_tell, nguoidat_diachi,ngaydathang,nguoinhan_ten,nguoinhan_diachi,nguoinhan_tel,total, ship, voucher,tongthanhtoan,pttt) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    
    return pdo_execute_id($sql,$madh,$iduser,$nguoidat_ten,$nguoidat_email,$nguoidat_tell,$nguoidat_diachi,$ngaydathang, $nguoinhan_ten, $nguoinhan_diachi, $nguoinhan_tel, $total, $ship, $voucher, $tongthanhtoan,$pttt);
}

function loadall_cart_count($idbill){
    $sql="select *from cart where idbill=".$idbill;
    $bill=pdo_query($sql);
    return sizeof($bill);
}
function loadall_bill()
{
    $sql ="SELECT * FROM bill order by id desc";
    $listbill=pdo_query($sql);
    return $listbill;
}

function detail_bill($id)
{
    $sql ="SELECT * FROM bill WHERE id = '$id'";
    $listbill=pdo_query_one($sql);
    return $listbill;
}

function update_bill($id,$bill_status,$pttt)
{
    $sql ="UPDATE bill SET bill_status = '$bill_status',pttt = '$pttt' WHERE id = '$id'";
    pdo_execute($sql);
}
function loadall_bill_lichsu($iduser) {
    $sql="SELECT *FROM bill WHERE iduser=".$iduser;
    $listbill=pdo_query_one($sql);
    return $listbill;
    ;
}

