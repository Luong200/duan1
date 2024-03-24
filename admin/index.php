<?php
session_start();
ob_start();
if (isset($_SESSION['s_user']) && (is_array($_SESSION['s_user'])) && (count($_SESSION['s_user']) > 0) && ($_SESSION['s_user']['role'] == 1)) {
    $admin = $_SESSION['s_user'];
} else {
    header('location: login.php');
}
?>
<!-- <h1>Bạn đang đăng nhập vào trang Admin: <?= $admin["username"] ?> </h1> -->
<?php
include "../dao/global.php";
include "../dao/pdo.php";
include "../dao/danhmuc.php";
include "../dao/sanpham.php";
include "../dao/product_variants.php";
include "../dao/donhang.php";
include "../dao/binh-luan.php";

include "../dao/user.php";


include "view/header.php";
if (isset($_GET["pg"])) {
    $pg = $_GET["pg"];
    switch ($pg) {
        ///DANH MUC
        case 'danhmucadd':
            if (isset($_POST['btnadd'])) {
                $name = $_POST['name'];
                if (!empty($name)) {
                    danhmuc_insert($name);
                    $tb = "<script>alert('Đã thêm danh mục thành công!')</script>";
                } else {
                    $tb = "<script>alert('Vui lòng nhập tên danh mục!')</script>";
                }


            }
            // $sanphamlist=get_dssp_new(100);
            include "view/danhmuc/danhmucadd.php";
            break;
        case 'danhmuclist':
            $listdanhmuc = loadall_danhmuc();
            include "view/danhmuc/danhmuclist.php";
            break;
        case 'danhmuc_delete':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $id = $_GET['id'];
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "view/danhmuc/danhmuclist.php";
            break;
        case 'suadm':
            if (isset($_GET['id'])) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "view/danhmuc/danhmucupdate.php";
            break;
        case 'update_danhmuc':
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $name = $_POST['name'];
                $id = $_POST['id'];
                if (!empty($name) && !empty($id)) {
                    update_danhmuc($id, $name);
                    $thongbao = "<script>alert('Đã cập nhật danh mục thành công!')</script>";
                } else {
                    $thongbao = "<script>alert('Vui lòng nhập tên danh mục!')</script>";
                }
            }

            $listdanhmuc = loadall_danhmuc();
            include "view/danhmuc/danhmuclist.php";
            break;
        ///SAN PHAM
        case 'sanphamlist':
            $sanphamlist = get_dssp_new(100);
            include "view/sanpham/sanphamlist.php";
            break;
        case 'updateproduct':
            //kiem tra va lay du lieu
            if (isset($_POST['updateproduct'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $iddm = $_POST['iddm'];
                $id = $_POST['id'];
                $color = $_POST['color'];
                $size = $_POST['size'];
                $prices = $_POST['prices'];
                $soluong = $_POST['soluong'];

                $img = time() . '_' . basename($_FILES["img"]["name"]);

                           if(!empty($name) && !empty($mota) && !empty($iddm)  ) {

                               if ($img != "") {
                                   //upload anh
                                   $target_file = IMG_PATH_ADMIN . $img;
                                   move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                               } else {
                                   $img = "";
                               }
                               if(!empty($size) && !empty($color) && !empty($prices)){
                                      sanpham_update($name, $img, 0, $mota, $iddm, $id,$soluong);
                                      varible_delete($id);
                                      $colors = json_decode($color);
                                      $size = json_decode($size);
                                      $prices = json_decode($prices);
                                      $priceIndex = 0;
                                      if(count($prices) == count($colors) * count($size)) {
                                          foreach ($colors as $color) {
                                              $color = $color->value;
                                              foreach ($size as $s) {
                                                  $s = $s->value;
                                                  $price = $prices[$priceIndex]->value;
                                                  varible_insert($id, $color, $s,$price);
                                                  $priceIndex++;
                                              }
                                          }
                                      }else {
                                          echo "<script>alert('Bạn cần xem lại giá tiền biến thể có đủ hoặc thừa không ?')</script>";
                                      }
                                  }else {
                                      sanpham_update($name, $img, $price, $mota, $iddm, $id,$soluong);
                                  }

                               //Insert into

                           }

                //Upload file
                $sanphamlist = get_dssp_new(100);
                include "view/sanpham/sanphamlist.php";

            }else {
                $sanphamlist = get_dssp_new(100);
                include "view/sanpham/sanphamlist.php";
            }
            break;
        case 'sanphamupdate':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $sp = get_sanphamchitiet($id);
                $colorsData =  [];
                $sizesData =  [];
                $pricesData =  [];
                if(!empty(loadAll_varible($id))){
                    $allVarible = loadAll_varible(($id));
                    foreach ($allVarible as $item) {
                        if (!empty($item['color']) && !empty($item['size'])) {
                            $colorsData[] = $item['color'];
                            $sizesData[] = $item['size'];
                        }

                        if( !empty($item['price'])){
                            $pricesData[] = $item['price'];
                        }
                    }
                }
                $colorsData = array_values(array_unique($colorsData));
                $sizesData = array_values(array_unique($sizesData));
            }
            //Tro ve trang danh sach san pham
            $danhmuclist = danhmuc_all();
            include "view/sanpham/sanphamupdate.php";
            break;
        case 'sanphamdelete':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $img = IMG_PATH_ADMIN . get_img($id);
                if (is_file($img)) {
                    unlink($img);
                }
                try {
                    sanpham_delete($id);
                    varible_delete($id);
                } catch (\Throwable $th) {
                    //thow $th;
                    echo "<h3 style='color:red;text-align:center'>Sản phẩm đã có trong giỏ hàng! Không thể xóa</h3>";
                }

                // sanpham_delete($id);
            }
            //Tro ve trang danh sach san pham
            $sanphamlist = get_dssp_new(100);
            include "view/sanpham/sanphamlist.php";
            break;
        case 'sanphamlist':
            $danhmuclist = danhmuc_all();
            include "view/sanpham/sanphamadd.php";
            break;
        case 'addproduct':
            if (isset($_POST['addproduct'])) {
                //Lấy dữ liệu
                $name = $_POST['name'];
                $price = $_POST['price'];
                $color = $_POST['color'];
                $size = $_POST['size'];
                $prices = $_POST['prices'];
                $mota = $_POST['mota'];
                $soluong = $_POST['soluong'];
                $iddm = $_POST['iddm'] == 0 ? '' : $_POST['iddm'];
                $img = time() . '_' . basename($_FILES["img"]["name"]);
                if(!empty($name) && !empty($price) && !empty($mota) && !empty($iddm)  && !empty($img) && !empty($soluong) ) {
                    if(!empty($size) && !empty($color) && !empty($prices)){
                        $id = sanpham_insert($name, $img, 0, $mota, $iddm,$soluong);
                        $colors = json_decode($color);
                        $size = json_decode($size);
                        $prices = json_decode($prices);
                        $priceIndex = 0;
                        if(count($prices) == count($colors) * count($size)) {
                        foreach ($colors as $color) {
                            $color = $color->value;
                            foreach ($size as $s) {
                                $s = $s->value;
                                $price = $prices[$priceIndex]->value;
                                varible_insert($id, $color, $s,$price);
                                $priceIndex++;
                            }
                        }
                        }else {
                            echo "<script>alert('Bạn cần xem lại giá tiền biến thể có đủ hoặc thừa không ?')</script>";
                        }

                    }else {
                        $id = sanpham_insert($name, $img, $price, $mota, $iddm,$soluong);
                    }
                    //Insert into


                    $target_file = IMG_PATH_ADMIN . $img;
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                    $sanphamlist = get_dssp_new(100);
                    include "view/sanpham/sanphamlist.php";
                }else {
                    echo "<script>alert('Vui lòng nhập đầy đủ thông tin!')</script>";
                    $danhmuclist = danhmuc_all();
                    include "view/sanpham/sanphamadd.php";
                }
                //Tro ve trang danh sach san pham

            } else {
                $danhmuclist = danhmuc_all();
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
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {

                $username = $_POST["username"];
                $password = $_POST["password"];
                $hoten = $_POST["hoten"];
                $diachi = $_POST["diachi"];
                $email = $_POST["email"];
                $dienthoai = $_POST["dienthoai"];
                $role = $_POST["role"];
                if(!empty($username) && !empty($password) && !empty($hoten) && !empty($diachi) && !empty($email) && !empty($dienthoai)) {
                    insert_themtaikhoan($username, $password, $hoten, $diachi, $email, $dienthoai, $role);
                    header('location: index.php?pg=userlist');
                    // insert into database
                }else {
                    echo "<script>alert('Vui lòng nhập đầy đủ thông tin!')</script>";
                }


            }

            include('./view/user/useradd.php');
            break;
        case 'logout':
            if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
                unset($_SESSION['s_user']);
                unset($_SESSION['giohang']);
            }
            header('location: ../index.php');
            break;
        case 'delete_user':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $id = $_GET['id'];
                $all  = findBill($id);
                if(empty($all)){
                    delete_user($_GET['id']);
                    echo "<script>alert('Xóa Thành công')</script>";
                }else {
                    echo "<script>alert('Không thể xóa tài khoản này!Vì đang có data ở bảng khác')</script>";
                }

            }
            $userlist = getall_user();
            include('./view/user/userlist.php');
            break;
        case 'suatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $taikhoan = loadone_user($_GET['id']);
            }
            echo 1;
            include "./view/user/userupdate.php";
            break;
        case 'update_user':
            if (isset($_POST["capnhat"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                $hoten = $_POST["hoten"];
                $diachi = $_POST["diachi"];
                $email = $_POST["email"];
                $dienthoai = $_POST["dienthoai"];
                $role = $_POST["role"];
                $id = $_POST["id"];
                user_update($username, $password, $email, $diachi, $dienthoai, $role, $id);
                // $thongbao="Cập nhật thành công";
            }

            $userlist = getall_user();
            include "./view/user/userlist.php";
            break;
//////////////////////////END USER//////////////////////////////////    
//////////////////////////Bill/////////////////////////////
            case 'binhluan': 
                $listbinhluan = binhluan_all();
                // print_r($listbinhluan);
                // die();
                include "./view/binhluan/binhluanlist.php";
                break;
            case 'binhluan_delete':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    $id = $_GET['id'];
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan = binhluan_all();
                include "./view/binhluan/binhluanlist.php";
                break;
        case 'listbill':
            $listbill = loadall_bill();
            include "./view/bill/billlist.php";
            break;
        case 'update_bill':
            if (!empty($_GET['id'])) {
                $id = $_GET['id'];
                $billDetail = detail_bill($id);

                if (isset($_POST['updateStatus'])) {
                    $bill_status = $_POST['bill_status'];
                    $pttt = $_POST['pttt'];
                    update_bill($id, $bill_status, $pttt);
                    $_SESSION['status_message'] = 1;
                    header('Location:index.php?pg=listbill');
                }

//                    print_r($billDetail);
//                    die();
                include "./view/bill/billDetail.php";
            } else {
                header('Location:index.php?pg=listbill');
            }

            break;
        default:
            include "view/home.php";
    }
} else {
    include "view/home.php";
}


include "view/footer.php";
?>
