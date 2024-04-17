<?php
require_once 'pdo.php';

function reviews_all(){
    $sql = "SELECT r.id, r.content, r.rating, r.create_at, u.hoten AS user_name, b.madh
FROM reviews r
JOIN user u ON r.id_user = u.id
JOIN bill b ON r.id_bill = b.id";
    return pdo_query($sql);
}


function  reviews_add($id_user,$id_bill,$content,$rating){
    $sql = "INSERT INTO reviews( id_user,id_bill,content,rating) VALUES(?,?,?,?)";
    pdo_execute($sql, $id_user,$id_bill,$content,$rating);
}





function delete_reviews($id)
{
    $sql = "DELETE FROM reviews WHERE id=?";
    return pdo_execute($sql, $id);
}
