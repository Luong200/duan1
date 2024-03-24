<?php
require_once 'pdo.php';
///////admin
function getall_user()
{
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}
function delete_user($id){
    $sql="DELETE FROM user WHERE id=".$id;
    pdo_execute($sql);
}

function findBill($id){
    $sqlBill="SELECT * FROM bill WHERE iduser =".$id;
    return pdo_query($sqlBill);
}



function loadone_user($id) {
    $sql="SELECT * FROM user WHERE id=".$id;
    $tk=pdo_query_one($sql);
    return $tk;
}
/////////
function user_insert($username, $password, $email){
    $sql = "INSERT INTO user(username, password, email) VALUES (?, ?, ?)";
    pdo_execute($sql, $username, $password, $email);
}
function insert_themtaikhoan($username,$password,$hoten,$diachi,$email,$dienthoai,$role){
    $sql="INSERT INTO user(username,password,hoten,diachi,email,dienthoai,role) values ('$username','$password','$hoten','$diachi','$email','$dienthoai','$role')";
    pdo_execute($sql);
}
function user_insert_id($username,$password,$hoten,$diachi, $email, $dienthoai){
    $sql = "INSERT INTO user(username,password,hoten,diachi, email, dienthoai) VALUES (?,?,?,?,?,?)";
    
    return pdo_execute_id($sql,$username,$password,$hoten,$diachi, $email, $dienthoai);
}
function user_update($username,$password,$email,$diachi,$dienthoai,$role,$id){
    $sql = "UPDATE user SET username=?,password=?,email=?,diachi=?,dienthoai=?,role=? WHERE id=?";
    pdo_execute($sql,$username,$password,$email,$diachi,$dienthoai,$role,$id);    
}
function checkuser($username,$password){
    $sql="SELECT * from user where username=? and password=?";
    return pdo_query_one($sql, $username,$password);
    // $kq= pdo_query_one($sql, $username,$password);
    // if(is_array($kq)&&(count($kq))){
    //     return $kq["id"];
    // }else{
    //     return 0;
    // }
}
function get_user($id){
    $sql="SELECT * from user where id=? ";
    return pdo_query_one($sql, $id);
}
/// đăng ký phía khách hàng

function checksignup_client($email)
{
    $sql = "SELECT * FROM user WHERE email=?";
    $user = pdo_query_one($sql, $email);
    return $user;
}

function checklogin_client($username, $password)
{
    $sql = 'SELECT * FROM user WHERE username=? AND password=? ';
    $user =  pdo_query_one($sql, $username, $password);
    return $user;
}


// function user_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
//     $sql = "INSERT INTO user(ma_kh, mat_khau, ho_ten, email, hinh, kich_hoat, vai_tro) VALUES (?, ?, ?, ?, ?, ?, ?)";
//     pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==1, $vai_tro==1);
// }

// function user_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
//     $sql = "UPDATE user SET mat_khau=?,ho_ten=?,email=?,hinh=?,kich_hoat=?,vai_tro=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==1, $vai_tro==1, $ma_kh);
// }

// function user_delete($ma_kh){
//     $sql = "DELETE FROM user  WHERE ma_kh=?";
//     if(is_array($ma_kh)){
//         foreach ($ma_kh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_kh);
//     }
// }

// function user_select_all(){
//     $sql = "SELECT * FROM user";
//     return pdo_query($sql);
// }

// function user_select_by_id($ma_kh){
//     $sql = "SELECT * FROM user WHERE ma_kh=?";
//     return pdo_query_one($sql, $ma_kh);
// }

// function user_exist($ma_kh){
//     $sql = "SELECT count(*) FROM user WHERE $ma_kh=?";
//     return pdo_query_value($sql, $ma_kh) > 0;
// }

// function user_select_by_role($vai_tro){
//     $sql = "SELECT * FROM user WHERE vai_tro=?";
//     return pdo_query($sql, $vai_tro);
// }

// function user_change_password($ma_kh, $mat_khau_moi){
//     $sql = "UPDATE user SET mat_khau=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau_moi, $ma_kh);
// }