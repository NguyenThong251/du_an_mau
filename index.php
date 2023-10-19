<?php
    session_start();
    ob_start();
    if (!isset($_SESSION["giohang"])) {
        $_SESSION["giohang"]=[];
    }
include "Dao/pdo.php";
include "Dao/sanpham.php";  
include "Dao/donhang.php";
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
                    $tong_tien = (int)$soluong * (int)$gia;
                    
                    // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
                    $product_exists = false;
                    
                    foreach ($_SESSION["giohang"] as &$sp) {
                        if ($sp['id_sp'] == $id_sp) {
                            // Sản phẩm đã tồn tại, cộng số lượng và cập nhật tổng tiền
                            $sp['soluong'] += $soluong;
                            $sp['tong_tien'] += $tong_tien;
                            $product_exists = true;
                            break;
                        }
                    }
                    
                    // Nếu sản phẩm không tồn tại trong giỏ hàng, thêm sản phẩm mới vào giỏ hàng
                    if (!$product_exists) {
                        $sp = ["id_sp" => $id_sp, "ten" => $ten, "hinh" => $hinh, "soluong" => $soluong, "gia" => $gia, "tong_tien" => $tong_tien];
                        $_SESSION["giohang"][] = $sp;
                    }
                    
                    header('location: index.php?pg=giohang');
                }
                break;
            
        case 'giohang':
            // Tăng số lượng của sản phẩm trùng lặp
            if (isset($_GET['add-sl'])) {
                $add_sl = $_GET['add-sl'];
                if (!empty($add_sl)) {
                    foreach ($_SESSION['giohang'] as $key => $value) {
                        if ($value['id_sp'] == $add_sl) {
                            $_SESSION['giohang'][$key]['soluong'] += 1;
                            header('Location: index.php?pg=giohang');
                        }
                    }
                }
            }
            // giảm số lượng
            if (isset($_GET['del-sl'])){
                foreach ($_SESSION['giohang'] as $key => $value) {
                  if ($value['id_sp'] == $_GET['del-sl']) {
                    if ($value['soluong'] > 1) {
                      $_SESSION['giohang'][$key]['soluong'] -= 1;
                    } else {
                        unset($_SESSION["giohang"]);

                    }
                    header('Location: index.php?pg=giohang');
                  }
                }
              }
              // gio hang trống 
              if (empty($_SESSION['giohang'])) {
                $tb_giohangtrong ="<img class='img-cover' src='./View/layout/images/cartety.jpg' alt=''>";
               
            }
      // xóa tất cả
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
                if ($_SESSION['trang']=="sanphamchitiet") {
                    header('location:index.php?pg=sanphamchitiet&idpro='.$_SESSION['id_sp'].'#binhluan');
                }else{
                    header('location:index.php');

                }
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
        case 'donhang':
            // if (isset($_POST['dathang'])) {
            //     $ten_ND = $_POST['username'];
            //     $sdt_ND = $_POST['sdt'];
            //     $dia_chi_ND = $_POST['diachi'];
            //     $email_ND = $_POST['email'];
            //     $ten_NN = $_POST['username_NN'];
            //     $dia_chi_NN = $_POST['diachi_NN'];
            //     $sdt_NN = $_POST['sdt_NN'];
            //     $pttt =$_POST['pttt'];
            //     // insert user new
            //     $username="guest".rand(1,999);
            //     $password="123456";
            //     $id_user = user_insert_id($password, $ten_ND, $username, $sdt_ND, $dia_chi_ND, $email_ND);
            //     //tao don hang
            //     $ma_donhang="annashop".$id_user."-".date("His-dmY");
            //     $total = get_tongdonhang();
            //     $ship = 0;
            //     if (isset($_SESSION['mavoucher'])) {
            //         $voucher = $_SESSION['mavoucher'];
            //     }else{
            //         $voucher =0;
            //     }
            //     $tongthanhtoan =($total -$voucher) +$ship;
            //     // $tongdonhang =$total +$ship;
            //     $id_don_hang=bill_insert_id($ma_donhang,$id_user,$ten_NN,$dia_chi_NN,$sdt_NN,$ten_ND,$dia_chi_ND,$email_ND,$sdt_ND,$ship,$voucher,$tongthanhtoan,$pttt);
            //     // var_dump($id_don_hang);
            //     // insert giỏ hàng từ session vào tbale cart 
            //         foreach ($_SESSION["giohang"] as $sp) {
            //             extract($sp);
            //            $cart_insert = cart_insert($id_sp,$soluong,$ten,$hinh,$gia,$tong_tien,$id_don_hang);
            //            var_dump($cart_insert);
            //         }
            //         $_SESSION['giohang'] = Null;
            //         // $_SESSION['giohang'] = [];
            //     // chuyen trang thanh cong
            // }
            
            include "View/donhang.php";
            break;
        case 'donhang_confirm':
            if (isset($_POST['dathang'])) {
                $ten_ND = $_POST['username'];
                $sdt_ND = $_POST['sdt'];
                $dia_chi_ND = $_POST['diachi'];
                $email_ND = $_POST['email'];
                $ten_NN = $_POST['username_NN'];
                $dia_chi_NN = $_POST['diachi_NN'];
                $sdt_NN = $_POST['sdt_NN'];
                $pttt =$_POST['pttt'];
                // insert user new
                $username="guest".rand(1,999);
                $password="123456";
                $id_user = user_insert_id($password, $ten_ND, $username, $sdt_ND, $dia_chi_ND, $email_ND);
                //tao don hang
                $ma_donhang="annashop".$id_user."-".date("His-dmY");
                $total = get_tongdonhang();
                $ship = 0;
                if (isset($_SESSION['mavoucher'])) {
                    $voucher = $_SESSION['mavoucher'];
                }else{
                    $voucher =0;
                }
                $tongthanhtoan =($total -$voucher) +$ship;
                // $tongdonhang =$total +$ship;
                $id_don_hang=bill_insert_id($ma_donhang,$id_user,$ten_NN,$dia_chi_NN,$sdt_NN,$ten_ND,$dia_chi_ND,$email_ND,$sdt_ND,$ship,$voucher,$tongthanhtoan,$pttt);
                // var_dump($id_don_hang);
                // insert giỏ hàng từ session vào tbale cart 
                    foreach ($_SESSION["giohang"] as $sp) {
                        extract($sp);
                       $cart_insert = cart_insert($id_sp,$soluong,$ten,$hinh,$gia,$tong_tien,$id_don_hang);
                    //    var_dump($cart_insert);
                    }
                    // $_SESSION['giohang'];
                    $_SESSION['giohang'] = Null;
                    // if (isset($_SESSION["giohang"])) {
                    //     unset($_SESSION["giohang"]);
                    // }
                    // unset($_SESSION['giohang'] );
                    // $_SESSION['giohang'] = [];
                // chuyen trang thanh cong
            }
           include "View/donhang_cofirm.php";
            break;
            case 'order':
                // Xóa nội dung giỏ hàng từ phiên làm việc
                unset($_SESSION['giohang']);
                
                // Chuyển hướng người dùng về trang chủ
                header('Location: index.php');
                exit; // Kết thúc quá trình xử lý
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