<?php
    session_start();
    ob_start();
    if(isset($_SESSION['s_user'])&&(is_array($_SESSION['s_user']))&&(count($_SESSION['s_user'])>0)){
        $admin=$_SESSION['s_user'];
    }else{
        header('location: login.php');
    }
?>
<!-- <h1>Bạn đang đăng nhập vào trang Admin: <?=$admin["username"]?> </h1> -->
<?php
    include "../dao/global.php";
    include "../dao/pdo.php";
    include "../dao/danhmuc.php";
    include "../dao/sanpham.php";
    include "../dao/donhang.php";
    include "../dao/user.php";

    include "view/header.php";
    if(isset($_GET["pg"])){
        $pg=$_GET["pg"];
        switch($pg){
            ///DANH MUC
            case 'danhmucadd':
                if(isset($_POST['btnadd'])){
                    $name=$_POST['name'];
                    danhmuc_insert($name);
                    $tb="Đã thêm danh mục thành công!";
                    
                }
                // $sanphamlist=get_dssp_new(100);
                include "view/danhmuc/danhmucadd.php";
                break;
            case 'danhmuclist':
                $listdanhmuc=loadall_danhmuc();
                include "view/danhmuc/danhmuclist.php";
                break;
            case 'danhmuc_delete':
                if(isset($_GET['id'])&&($_GET['id'])>0){
                    $id = $_GET['id'];
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "view/danhmuc/danhmuclist.php";
                break;
            case 'suadm':
                if(isset($_GET['id'])){
                    $dm=loadone_danhmuc($_GET['id']);
                }
                
                include "view/danhmuc/danhmucupdate.php";
                break;
            case 'update_danhmuc':
                if(isset($_POST["capnhat"])&&($_POST["capnhat"])){
                    $name=$_POST['name'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$name);
                    $thongbao="Cập nhật thành công";
                }
    
                $listdanhmuc=loadall_danhmuc();
                include "view/danhmuc/danhmuclist.php";
                break;
            ///SAN PHAM
            case 'sanphamlist':
                $sanphamlist=get_dssp_new(100);
                include "view/sanpham/sanphamlist.php";
                break;
            case 'updateproduct':
                //kiem tra va lay du lieu
                if(isset($_POST['updateproduct'])){
                    $name=$_POST['name'];
                    $price=$_POST['price'];
                    $mota=$_POST['mota'];
                    $iddm=$_POST['iddm'];
                    $id=$_POST['id'];

                    $img=$_FILES['img']['name'];
                    if($img!=""){
                        //upload anh
                    $target_file=IMG_PATH_ADMIN.$img;
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                    }else{
                        $img="";
                    }
                    //Insert into
                    sanpham_update($name, $img, $price,$mota, $iddm,$id);
                    //Upload file
                    
                }

                //show dssp
                $sanphamlist=get_dssp_new(100);
                include "view/sanpham/sanphamlist.php";
                break;
            case 'sanphamupdate':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                   $sp= get_sanphamchitiet($id);
                    
                    
                    
                }
                //Tro ve trang danh sach san pham
                $danhmuclist=danhmuc_all();
                include "view/sanpham/sanphamupdate.php";
                break;
            case 'sanphamdelete':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    $img=IMG_PATH_ADMIN.get_img($id);
                    if(is_file($img)){
                        unlink($img);
                    }
                    try{
                        sanpham_delete($id);
                    }catch(\Throwable $th){
                        //thow $th;
                        echo "<h3 style='color:red;text-align:center'>Sản phẩm đã có trong giỏ hàng! Không thể xóa</h3>";
                    }
                    
                    // sanpham_delete($id);
                }
                //Tro ve trang danh sach san pham
                $sanphamlist=get_dssp_new(100);
                include "view/sanpham/sanphamlist.php";
                break;
            case 'sanphamlist':
                $danhmuclist=danhmuc_all();
                include "view/sanpham/sanphamadd.php";
                break;
            case 'addproduct':
                if(isset($_POST['addproduct'])){
                    //Lấy dữ liệu
                    $name=$_POST['name'];
                    $price=$_POST['price'];
                    $mota=$_POST['mota'];
                    $iddm=$_POST['iddm'];
                    $img=$_FILES['img']['name'];
                    //Insert into
                    sanpham_insert($name, $img, $price,$mota, $iddm);
                    //Upload file
                    $target_file=IMG_PATH_ADMIN.$img;
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

                    //Tro ve trang danh sach san pham
                    $sanphamlist=get_dssp_new(100);
                    include "view/sanpham/sanphamlist.php";
                }else{
                    $danhmuclist=danhmuc_all();
                    include "view/sanpham/sanphamadd.php";
                }
                break;
            // case 'donhanglist':
            //     $danhmuclist=danhmuc_all();
            //     include "view/sanphamadd.php";
            //     break;
////////////////////////////USER/////////////////////////////////////
                case 'userlist':
                    $userlist = getall_user();
                    include('./view/user/userlist.php');
                    break;
                case 'adduser':
                    //xac dinh gia tri input
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        
                        $username=$_POST["username"];
                        $password=$_POST["password"];
                        $hoten=$_POST["hoten"];
                        $diachi=$_POST["diachi"];
                        $email=$_POST["email"];
                        $dienthoai=$_POST["dienthoai"];
                        $role=$_POST["role"];
                           
                            // insert into database
                        insert_themtaikhoan($username,$password,$hoten,$diachi,$email,$dienthoai,$role);
                        header('location: index.php?pg=userlist');
                        }
                    
                    include('./view/user/useradd.php');
                    break;
                case 'delete_user':
                    if(isset($_GET['id'])&&($_GET['id'])>0){
                    $id = $_GET['id'];
                    delete_user($_GET['id']);
                    }
                    $userlist = getall_user();
                    include('./view/user/userlist.php');
                    break;
                case 'suatk':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $user=loadone_user($_GET['id']);
                    }
                    $userlist = getall_user();
                    include "./view/user/userupdate.php";
                    break;
                case 'update_user':
                    if(isset($_POST["capnhat"])&&($_POST["capnhat"])){
                        $username=$_POST["username"];
                        $password=$_POST["password"];
                        $hoten=$_POST["hoten"];
                        $diachi=$_POST["diachi"];
                        $email=$_POST["email"];
                        $dienthoai=$_POST["dienthoai"];
                        $role=$_POST["role"];
                        user_update($username,$password,$email,$diachi,$dienthoai,$role,$id);
                        // $thongbao="Cập nhật thành công";
                    }
        
                    $userlist = getall_user();
                    include "./view/user/userlist.php";
                    break;
//////////////////////////END USER//////////////////////////////////    
//////////////////////////Bill/////////////////////////////
                case 'listbill':
                    $listbill=loadall_bill();
                    include "./view/bill/billlist.php";
                    break;
            case 'update_bill':
                if(!empty($_GET['id'])){
                    $id = $_GET['id'];
                    $billDetail=detail_bill($id);

                    if(isset($_POST['updateStatus'])){
                        $bill_status = $_POST['bill_status'];
                        $pttt = $_POST['pttt'];
                        update_bill($id,$bill_status,$pttt);
                        $_SESSION['status_message'] = 1;
                        header('Location:index.php?pg=listbill');
                    }

//                    print_r($billDetail);
//                    die();
                    include "./view/bill/billDetail.php";
                }else {
                    header('Location:index.php?pg=listbill');
                }

                break;
            default: 
            include "view/home.php";
        }
    }else{
        include "view/home.php";
    }
    

    include "view/footer.php";
?>
