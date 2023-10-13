<?php
    session_start();
    ob_start();
    if (!isset($_SESSION["giohang"])) {
        $_SESSION["giohang"]=[];
    }
include "Dao/pdo.php";
include "Dao/sanpham.php";
include "Dao/giohang.php";
include "Dao/danhmuc.php";
include "Dao/user.php";
include "View/header.php";
$product_new = get_product_new(8);
$product_sale = get_product_sale(4);
$product_view = get_product_view(4);
if (!isset($_GET['pg'])) {
    include "View/home.php";
}
else {
    switch ($_GET['pg']) {
        case 'sanpham':
            // echo var_dump(get_name_dm());
            $dsdm=danhmuc_select_all();
            $keywork ="";
            $title_page ="";
            if(!isset($_GET['iddm'])){
                $iddm = 0;   
            }else{
                $iddm = $_GET['iddm'];
                $title_page =get_name_dm($iddm);
            }
            // Check search true/ false
            if (isset($_POST['search'])&&($_POST['search'])) {
                $keywork = $_POST["keywork"];
                $title_page = " Kết quả tìm kiếm với từ khóa: " .$keywork;
            } 
            $dssp=get_product_by_iddm($keywork,$iddm,12);
           include "View/sanpham.php";
            break;
        case 'sanphamchitiet':
            if(isset($_GET['idpro'])){
                $id_sp =$_GET['idpro'];
                $spchitiet=get_sp_by_id($id_sp);
                $dsdm=danhmuc_select_all();
                $iddm= $spchitiet['id_danhmuc'];
                $splienquan=get_product_lienquan($iddm,$id_sp,5);
                include "View/chitietsp.php";
            }else{
                include "View/home.php";
            }
            break;
        case 'addcart':
            if (isset($_POST['addcart'])) {
                $ten = $_POST['ten'];
                $id_sp = $_POST['id_sp'];
                $hinh = $_POST['hinh'];
                $soluong = $_POST['soluong'];
                $gia = $_POST['gia'];
                $sp = ["id_sp" => $id_sp, "ten" => $ten, "hinh" => $hinh, "soluong" => $soluong, "gia" => $gia];
                array_push($_SESSION["giohang"],$sp);

                header('location: index.php?pg=giohang');
            }
            break;
        case 'giohang':
            if(isset($_GET['delAll'])&&($_GET['delAll'])==1) {
                unset($_SESSION["giohang"]);
                header('location: index.php?pg=giohang');
            } else {
                if (isset($_SESSION["giohang"])) {
                    $tongdonhang=get_tongdonhang();
                }
                $giatrivoucher=0;
                if(isset($_GET['voucher'])&&($_GET['voucher']==1)) {
                    $tongdonhang=$_POST['tongdonhang'];
                    $mavoucher=$_POST['mavoucher'];
                    // so sanh db để lấy giá tri về
                    $giatrivoucher=10;
                }
                $thanhtoan=$tongdonhang - $giatrivoucher;
                include "View/giohang.php";
            }
           
            break;
            //dangky
        case 'dangky':
           include "View/dangky.php";
            break;
            //adduser
        case 'adduser':
            //main
            if (isset($_POST['dangky'])&&($_POST['dangky'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                //xử lí
                user_insert($username, $password, $email);
            }

            //main
           include "View/dangnhap.php";
            break;
            //updateUser
        case 'updateuser':
            //main
            if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $sdt = $_POST['sdt'];
                $address = $_POST['address'];
                $id = $_POST['id_user'];
                $vaitro =0;
                //xử lí
                user_update($username, $password, $email, $sdt,$address,$vaitro,$id);
                //chạy về kết quả
                include "View/account_cf.php";
            }

            //main
            break;
            //logout
        case 'logout':
            if (isset($_SESSION['s_user']) && (count($_SESSION['s_user'])>0)){
                unset($_SESSION['s_user']);
            }
            header('location:index.php');
            break;
            //dangnhap
        case 'dangnhap':
           include "View/dangnhap.php";
            break;
            //login
        case 'login':
            //input
            if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];  
            
            //xử lí
            $kq=checkuser($username,$password);
            if (is_array($kq) && (count($kq))) {
                $_SESSION['s_user']=$kq;
                header('location:index.php');
            } else {
                $tb='Tài khoản không tồn tại hoặc thông tin đăng nhập sai';
                $_SESSION['tb_dangnhap']=$tb;   
                header('location:index.php?pg=dangnhap');
            }
        }
            break;
            //account
        case 'account':
            if (isset($_SESSION['s_user']) && (count($_SESSION['s_user'])>0)){
                include "View/account.php";
            }
            break;
        case 'gioithieu':
           include "View/gioithieu.php";
            break;
        default:
        include "View/home.php";
            break;
    }
}

include "View/footer.php";

?>