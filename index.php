<?php
    session_start();
    // ob_start(); khởi tạo đối tượng (header ...)
    ob_start();
    if(!isset($_SESSION["giohang"])){
        $_SESSION["giohang"]=[];
    }

    // nhúng kết nối csdl
    include "dao/pdo.php";
    include "dao/global.php";
    include "dao/user.php";
    include "dao/danhmuc.php";
    include "dao/voucher.php";
    include "dao/reviews.php";
    include "dao/sanpham.php";
    include "dao/product_variants.php";
    include "dao/giohang.php";
    include "dao/donhang.php";

    //data dành cho trang chủ
    $dssp_new=get_dssp_new(4);
    $dssp_best=get_dssp_best(2);
    $dssp_view=get_dssp_view(8);
    $dscategory_view=get_cate_view();
    include "view/header.php";


    if(!isset($_GET['pg'])){


        include "view/home.php";
    }else{
        switch ($_GET['pg']) {
            case 'sanpham':
                $dsdm = danhmuc_all();
                $kyw = "";
                $titlepage = "";
                $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Xác định trang hiện tại, mặc định là trang 1
                $perPage = 10; // Số sản phẩm hiển thị trên mỗi trang
                $start = ($currentPage - 1) * $perPage; // Vị trí bắt đầu lấy dữ liệu từ cơ sở dữ liệu
                if (!isset($_GET['iddm'])) {
                    $iddm = 0;
                } else {
                    $iddm = $_GET['iddm'];
                    $titlepage = get_name_dm($iddm);
                }

                $totalRecords = count_records($kyw, $iddm)[0]['total_records']; // Tổng số sản phẩm
                if (isset($_GET['filter'])) {
                    $filter = $_GET['filter'];
                }

                // Kiểm tra xem có phải là yêu cầu tìm kiếm không
                if (isset($_POST["timkiem"]) && ($_POST["timkiem"])) {
                    $kyw = $_POST["kyw"];
                    $titlepage = "Kết quả tìm kiếm với từ khóa: <span>" . $kyw . "</span>";
                }

                // Lấy dữ liệu sản phẩm dựa trên từ khóa, ID danh mục và vị trí bắt đầu
                $dssp = get_dssp($kyw, $iddm, $start, $perPage);

                // Tính tổng số trang dựa trên số lượng sản phẩm và số sản phẩm trên mỗi trang
                $totalPages = ceil($totalRecords / $perPage);

                include "view/sanpham.php"; // Bao gồm giao diện hiển thị sản phẩm
                break;
            case 'timkiem':
                $dsdm=danhmuc_all();

                $kyw="";
                $titlepage="";
                if(!isset($_GET['iddm'])){
                    $iddm=0;

                }else{
                    $iddm=$_GET['iddm'];
                    $titlepage=get_name_dm($iddm);
                }
                if (isset($_GET['filter'])) {
                    $filter = $_GET['filter'];
                }
                if(isset($_POST["timkiem"])){

                    $startTime = $_POST["startTime"];
                    $endTime = $_POST["timeEnd"];

                    $dssp=search($startTime,$endTime);
                }
                include "view/sanpham.php";
                break;
            case 'sanphamchitiet':
                $dsdm=danhmuc_all();
                if(isset($_GET["id"])&&($_GET["id"])>0){
                    $id=$_GET["id"];
                    $iddm=get_iddm($id);
                    $dssp_lienquan=get_dssp_lienquan($iddm, $id);
                    $spchitiet=get_sanphamchitiet($id);
                    $spchitiet=get_sanphamchitiet($id);
                    $danhmuc = get_cate_view_one($iddm);
                    $colorsData =  [];
                    $sizesData =  [];
                    $pricesData =  [];
                    $varibleAll = loadAll_varible($id);


                    include "view/sanphamchitiet.php";
                }else{
                    include "view/home.php";
                }

                break;
            case 'addcart':
                if(isset($_POST["addcart"])){
                    $idpro=$_POST["idpro"];
                    $name=$_POST["name"];
                    $img=$_POST["img"];
                    $price=$_POST["price"];
                    $soluong=$_POST["soluong"];
                    $idVarible=$_POST["varible"];
                    $nameVarible=$_POST["nameVarible"];
                    $thanhtien=(int)$soluong * (int)$price;
                    $existingProductKey = -1;
                    foreach ($_SESSION["giohang"] as $key => $product) {
                        if ($product["idpro"] == $idpro) {
                            $existingProductKey = $key;
                            break;
                        }
                    }

                    if ($existingProductKey !== -1) {
                        // Nếu sản phẩm đã tồn tại, tăng số lượng
                        $_SESSION["giohang"][$existingProductKey]["soluong"] += $soluong;
                        $_SESSION["giohang"][$existingProductKey]["thanhtien"] += $thanhtien;
                    } else {
                        // Nếu sản phẩm chưa tồn tại, thêm mới vào giỏ hàng
                        $sp = array("idpro" => $idpro, "name" => $name, "img" => $img, "price" => $price, "soluong" => $soluong, "thanhtien" => $thanhtien,"id_variants" => $idVarible,'name_varible' =>$nameVarible );
                        array_push($_SESSION["giohang"], $sp);
                    }

                    // echo var_dump($_SESSION["giohang"]);
                    header('location: index.php?pg=viewcart');
                }
                // include "view/gioithieu.php";
                break;

            case 'reviews':
                if(isset($_POST["submitReviews"]) && isset($_SESSION['s_user'])){
                    $idbill=$_POST['idpro'];
                    $rating=$_POST['rating'];
                    $noidung=$_POST['noidung'];
                    $idUser=$_SESSION['s_user']['id'];

                    if (!empty($idbill) && !empty($rating)&& !empty($noidung) && !empty($idUser)){
                        reviews_add($idUser,$idbill,$noidung,$rating);
                        update_status($idbill,4);
                        echo "<script>
                            alert('Chúc mừng bạn đã đánh giá thành công,Bạn sẽ được chuyển về trang lịch sử mua hàng')
                            setTimeout(function(){
                                window.location.href = 'index.php?pg=mybill';
                            },1000)
                            </script>";
                    }else {
                        echo "<script>alert('Vui lòng nhập đủ thông tin')</script>";
                    }
                    //so sach voi database de lay gia trij ve
                }
                include "view/reviews.php";
                break;
            case 'viewcart':
             
                if(isset($_GET['del'])&&($_GET['del'])==1){
                    unset($_SESSION["giohang"]);
                    unset($_SESSION["sale_off_order"]);
                    // Hoacwj dungf $_SESSION["giohang"]=[];
                    header('location: index.php');
                }else{
                    if(isset($_SESSION["giohang"])){
                        $tongdonhang=get_tongdonhang();
                    }
                    $giatrivoucher=0;
                    $maVoucher = '';
                    if(isset($_GET["voucher"])&&($_GET["voucher"])==1 && !empty($_POST['mavoucher'])){
                        $tongdonhang=$_POST['tongdonhang'] ?? 0;
                        $maVoucher=$_POST['mavoucher'] ?? '';
                        //so sach voi database de lay gia trij ve
                        $giatrivoucher=loadone_saleOff($maVoucher)['sale_off'] / 100;
                    }
                    $_SESSION["sale_off_order"] = $tongdonhang * $giatrivoucher ?? 0;
                    $thanhtoan=$tongdonhang- $_SESSION["sale_off_order"];
                    include "view/viewcart.php";
                }
                
                break;
            case 'delcart':
                if(isset($_GET['idcart'])){
                    unset($_SESSION["giohang"][$_GET['idcart']]);
                }else{
                    $_SESSION["giohang"]=[];
                }
                header('Location: index.php?pg=viewcart');
                break;

            case 'increase' :
                if(isset($_GET['idcart'])){
                    $_SESSION["giohang"][$_GET['idcart']]["soluong"]++;
                    $_SESSION["giohang"][$_GET['idcart']]["thanhtien"]=$_SESSION["giohang"][$_GET['idcart']]["soluong"]*$_SESSION["giohang"][$_GET['idcart']]["price"];
                }else{
                    $_SESSION["giohang"]=[];
                }
                header('Location: index.php?pg=viewcart');
                break;
            case 'decrease':
                if(isset($_GET['idcart'])){
                    $_SESSION["giohang"][$_GET['idcart']]["soluong"]--;
                    $_SESSION["giohang"][$_GET['idcart']]["thanhtien"]=$_SESSION["giohang"][$_GET['idcart']]["soluong"]*$_SESSION["giohang"][$_GET['idcart']]["price"];
                }else{
                    $_SESSION["giohang"]=[];
                }
                header('Location: index.php?pg=viewcart');
                break;
            case 'bill':
                include "view/bill.php";
                break;
            case 'billsubmit':
                if(isset($_POST["billsubmit"])){
                    $hoten=$_POST["hoten"];
                    $diachi=$_POST["diachi"];
                    $email=$_POST["email"];
                    $dienthoai=$_POST["dienthoai"];
                    $nguoinhan_ten='';
                    $nguoinhan_diachi='';
                    $nguoinhan_tel='';
                    $pttt=$_POST["pttt"];
                    if(!empty($hoten) && !empty($diachi) && !empty($email) && !empty($dienthoai) && !empty($_POST['id_user']) ){
                    
                        $ngaydathang=date('h:i:sa d/m/Y');
                        // inser user moi
                        $username="guest".rand(1,999);
                        $password="123456";
                        $iduser=$_POST["id_user"];
                        //Tao don hang
                        $madh="Darcy".$iduser."-".date("His-dmY");
                        $total=get_tongdonhang();
                        $ship=0;

                        if(isset($_SESSION['sale_off_order'])){
                            $voucher=$_SESSION['sale_off_order'];
                        }else{
                            $voucher=0;
                        }

                        $tongthanhtoan=($total - $voucher) + $ship;
                        //tao bill
                        $idbill=bill_insert_id($madh,$iduser,$hoten,$email,$dienthoai,$diachi, $nguoinhan_ten, $nguoinhan_diachi, $nguoinhan_tel, $total, $ship, $voucher, $tongthanhtoan,$pttt);
                        // insert gio hang từ session từ table cart
                        foreach ($_SESSION['giohang'] as $sp) {
                            extract($sp);
                            cart_insert($idpro, $price, $name, $img,  $soluong, $thanhtien,$idbill,$id_variants);
                        }
                        ///xóa sesion
                        $_SESSION['giohang']=[];
                        include "view/bill_configm.php";
                    }else {
                        if(!empty($hoten) && !empty($diachi) && !empty($email) && !empty($dienthoai)){
                            $ngaydathang=date('h:i:sa d/m/Y');
                            // inser user moi
                            $username="guest".rand(1,999);
                            $password="123456";
                            // echo $username . "," .$password. "," .$hoten. "," .$diachi. "," .$email. "," .$dienthoai;
                            // die();
                            $iduser=user_insert_id($username,$password,$hoten,$diachi, $email, $dienthoai);
                            //Tao don hang
                            $madh="Darcy".$iduser."-".date("His-dmY");
                            $total=get_tongdonhang();
                            $ship=0;
    
                            if(isset($_SESSION['giatrivoucher'])){
                                $voucher=$_SESSION["giatrivoucher"];
                            }else{
                                $voucher=0;
                            }
    
                            $tongthanhtoan=($total - $voucher) + $ship;
                            //tao bill
                            $idbill=bill_insert_id($madh,$iduser,$hoten,$email,$dienthoai,$diachi, $nguoinhan_ten, $nguoinhan_diachi, $nguoinhan_tel, $total, $ship, $voucher, $tongthanhtoan,$pttt);
                            // insert gio hang từ session từ table cart
                            foreach ($_SESSION['giohang'] as $sp) {
                                extract($sp);
                                cart_insert($idpro, $price, $name, $img,  $soluong, $thanhtien,$idbill,$id_variants);
                            }
                            ///xóa sesion
                            $_SESSION['giohang']=[];
                            include "view/bill_configm.php";
                        }else {
                        $error="Vui lòng nhập đầy đủ thông tin!";
                        header("location: index.php?pg=bill&error=$error");
                    }

                    }

                    
                    // include "view/donhang_configm.php";
                }

                break;
//////////////////////DANG KY, DANG NHAP/////////////////                
            case 'login':
                // input
                if(isset($_POST["dangnhap"])&&($_POST["dangnhap"])){
                    $username=$_POST["username"];
                    $password=$_POST["password"];
                //     $error = array();

                //     if (empty($username)) {
                //         $error['username'] = 'Trường này là bắt buộc!';
                //     }
                //     if (strlen($password) < 6) {
                //         $error['password'] = 'Mật khẩu phải có độ dài ít nhất 6 ký tự';
                //     }
                //     $user = checklogin_client($username, $password);

                //     if (is_array($user)) {
                //         $_SESSION['user'] = $user;
                //         header('location: index.php');
                //     } else {
                //         $login_error = "Tên đăng nhập hoặc mật khẩu không hợp lệ!";
                //     }
                // }
                // include('./view/dangnhap.php');
                // break;
                    //xl: kiem tra
                    $kq=checkuser($username,$password);
                    if(is_array($kq)&&(count($kq))){
                        $_SESSION['s_user']=$kq;
                        header('location: index.php');
                    }else{
                        $tb="Tài khoản không tồn tại hoặc thông tin đăng nhập sai! ";
                        $_SESSION['tb_dangnhap']=$tb;
                        header('location: index.php?pg=dangnhap');
                    }


                    //out
                }
                // header('location: index.php');
                // include "view/home.php";
                break;
            
            case 'dangnhap':
                
                include "view/dangnhap.php";
                break;
            case 'myaccount':
                if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
                    
                    include "view/myaccount.php";
                }
                
                break;
            case 'logout':
                if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
                    unset($_SESSION['s_user']);
                    unset($_SESSION['giohang']);
                }
                header('location: index.php');
                break;
            case 'dangky':
                
                include('view/dangky.php');
                break;
            case 'adduser':
                //xac dinh gia tri input
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $username=$_POST["username"];
                    $password=$_POST["password"];
                    $email=$_POST["email"];
                    $error = array();

                    if (empty($username)) {
                        $error['username'] = 'Trường này là bắt buộc!';
                    }

                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $error['email'] = 'Địa chỉ email không hợp lệ';
                    }

                    $user = checksignup_client($email);
                    if (is_array($user)) {
                        $error['email'] = 'Email đã tồn tại';
                    }
                    if (strlen($password) < 6) {
                        $error['password'] = 'Mật khẩu phải có độ dài ít nhất 6 ký tự';
                    }

                    if (empty($error)) {
                        // insert into database
                        user_insert($username, $password, $email);
                        header('location: index.php?act=dangnhap');
                    }
                }
                include('./view/dangky.php');
                break;
                // //Xu ly
                // user_insert($username, $password, $email);
                // }
                // include "view/dangnhap.php";
                // break;
            case 'updateuser':
                // xác định giá trị input
                if(isset($_POST["capnhat"])&&($_POST["capnhat"])){
                    $username=$_POST["username"];
                    $password=$_POST["password"];
                    $email=$_POST["email"];
                    $diachi=$_POST["diachi"];
                    $dienthoai=$_POST["dienthoai"];
                    $id=$_POST["id"];
                    $role=0;
                    // xử lý
                    user_update($username,$password,$email,$diachi,$dienthoai,$role,$id);
                    include "view/myaccount_confirm.php";
                }

                // 
                
                break;
            

            case 'mybill':
                $listbill=loadall_bill($_SESSION['s_user']['id']);
                include "view/mybill.php";
                break;
            // case 'billsubmit':
            //     if(isset($_POST['billsubmit'])){
                    
            //     }
            //     break;
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            
            default:
                
                include "view/home.php";
                break;
        }
    }
    

    include "view/footer.php";

?>