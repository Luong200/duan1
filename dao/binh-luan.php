<?php
    
    function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan){
        $sql = "insert into binhluan(noidung, iduser, idpro, ngaybinhluan) values ('$noidung','$iduser','$idpro','$ngaybinhluan')";
        pdo_execute($sql);
    }

    function loadall_binhluan($idpro){
        $sql = "SELECT bl.*, u.hoten AS ten_nguoidung
                FROM binhluan bl
                LEFT JOIN user u ON bl.iduser = u.id
                WHERE 1";
        if($idpro > 0) {
            $sql .= " AND bl.idpro = '".$idpro."'";
        }
        $sql .= " ORDER BY bl.id DESC";
        $listbl = pdo_query($sql);
        return $listbl;
    }
    

function loadone_binhluan($idBl){
    $sql="select * from binhluan where id=".$idBl;
    $bl=pdo_query_one($sql);
    return $bl ;
}

function updatebl($id,$noidung){
    $sql="update binhluan set noidung='".$noidung."' where id=".$id;
    pdo_execute($sql);
}


function delete_binhluan($id){
    $sql = "DELETE FROM  binhluan WHERE id=".$id;
    pdo_execute($sql);
}
function binhluan_all(){
    $sql = "SELECT u.hoten, b.iduser, b.noidung, b.ngaybinhluan, b.id,b.ngaybinhluan, sp.name AS ten_sanpham
            FROM user u
            INNER JOIN binhluan b ON u.id = b.iduser
            INNER JOIN sanpham sp ON b.idpro = sp.id";
            
    return pdo_query($sql);
}

function binhluan_user(){
    $sql= "SELECT u.username, b.iduser 
    FROM user u
    INNER JOIN binhluan b ON u.id = b.iduser";
    return pdo_query($sql);
}