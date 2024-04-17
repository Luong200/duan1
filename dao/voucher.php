<?php
require_once 'pdo.php';

function voucher_all(){
    $sql = "SELECT * FROM voucher ORDER BY id DESC";
    return pdo_query($sql);
}


function  voucher_add($name,$code,$sale_off){
    $sql = "INSERT INTO voucher(name,code,sale_off) VALUES(?,?,?)";
    pdo_execute($sql, $name,$code,$sale_off);
}


function loadone_voucher($id) {
    $sql="SELECT *FROM voucher WHERE id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}


function update_voucher($id,$name,$code,$sale_off){
    $sql = "UPDATE voucher SET name='$name', code='$code', sale_off=$sale_off WHERE id=$id";
    pdo_execute($sql);
}


function delete_voucher($id)
{
    $sql = "DELETE FROM voucher WHERE id=?";
    return pdo_execute($sql, $id);
}

function loadone_saleOff($code) {
    $sql="SELECT sale_off FROM voucher WHERE code='".$code ."'";
    return pdo_query_one($sql);
}