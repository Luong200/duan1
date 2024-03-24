<?php
require_once 'pdo.php';

function varible_insert($id, $color, $size,$price)
{
    $sql = "INSERT INTO product_variants(product_id, color, size,price) VALUES (?,?,?,?)";
    return pdo_execute($sql,$id, $color, $size,$price);
}


function loadAll_varible($id) {
    $sql="SELECT *FROM product_variants WHERE product_id=".$id;
    return pdo_query($sql);
}


function varible_delete($id)
{
    $sql = "DELETE FROM product_variants WHERE  product_id=?";
    pdo_execute($sql, $id);
}