<?php
session_start();
ob_start();
include_once"../Dao/pdo.php";
include_once"../Dao/danhmuc.php";
include_once"../Dao/sanpham.php";
include_once"../Dao/binhluan.php";
include_once"../Dao/user.php";
include_once"../Dao/donhang.php";
include_once"../View/global.php";
if (isset($_SESSION['s_user'])&&(is_array($_SESSION['s_user']))&&(count($_SESSION['s_user'])>0)) {
    $admin =$_SESSION['s_user'];
}else{
    header("Location: login.php");
}
include_once "public/admin_header.php";

if (isset($_GET['pg'])) {
    switch ($_GET['pg']) {
        case 'dashboard':
            include_once "public/admin_dashboard.php";
        break;
        case 'danhmuc':
            $danhmuc_list = danhmuc_select_all();
            include_once "public/admin_danhmuc.php";
            break;
        case 'updatedm':
            if (isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc']>0)) {
                $id_dm = $_GET['id_danhmuc'];
                $id=get_danhmuc_id($id_dm);
                include_once "public/updatedm.php";
                } else {
                include_once "public/admin_404.php";
                    
                }
        break;
        case 'update':
            if (isset($_POST['btn-update'])&&($_POST['btn-update'])) {
            
                $id_dm=$_POST['id_danhmuc'];
                $ten=$_POST['ten'];
                $mo_ta=$_POST['mo_ta'];
                set_danhmuc($id_dm,$ten,$mo_ta);
                $danhmuc_list = danhmuc_select_all();
                include_once "public/admin_danhmuc.php";
                
            }
            break;
            case 'delcatalog':
                $tb = ""; 
                if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
                    $id = $_GET['id_danhmuc'];
                    $tb =  delete_catalog($id);
                         
                }
                // Load danh muc data
                 $danhmuc_list = danhmuc_select_all();
                 include_once "public/admin_danhmuc.php";
                break; 
            case 'add_danhmuc':
                //lay data
                if (isset($_POST['btn-add'])&&($_POST['btn-add'])) {
                    $ten=$_POST['ten'];
                    $mo_ta=$_POST['mo_ta'];
                add_catalog($ten,$mo_ta);
                }
                //load lại
                $danhmuc_list = danhmuc_select_all();
                header("Location: index.php?pg=danhmuc");

            case 'sanpham':

                $danhmuc_list = danhmuc_select_all();
                $sanpham_list = get_product_all();
                    include_once "public/admin_sanpham.php";
                break; 
            case 'updatesp':
                if (isset($_GET['id_sp'])&&($_GET['id_sp']>0)) {
                    $id_sp=$_GET['id_sp'];
                    $danhmuc_list = danhmuc_select_all();
                    $sanpham_one = get_sp_by_id($id_sp);
                    
                    include_once "public/updatesp.php";
                }else{
                    include_once "public/admin_404.php";}
                break; 
                //////////////////////
                case 'updateproduct_done':
                
                    if (isset($_POST['btn-update'])&&($_POST['btn-update'])){
                        $id_danhmuc=$_POST['id_danhmuc'];
                        $ten_sp=$_POST['ten_sp'];
                        $gia=$_POST['gia'];
                        $giam_gia=$_POST['giam_gia'];
                        $sale=$_POST['sale'];
                        $new=$_POST['new'];
                        $so_luot_xem=$_POST['so_luot_xem'];
                        $mo_ta=$_POST['mo_ta'];
                        $id_sp=$_POST['id_sp'];
                        $hinh=$_FILES['hinh']['name'];
                        if ($hinh!="") {
                        //lay hinh
                          //upload leen host
                          $target_file = "../".PATH_IMG. basename($_FILES["hinh"]["name"]);
                          move_uploaded_file($hinh, $target_file);  
                          //xoa hinh cu tren host
                          $hinh_old="../".PATH_IMG.$_POST['hinh_old'];
                          if (file_exists($hinh_old)) unlink($hinh_old); 
                      }
                        //update vo database
                        update_sanpham($hinh, $id_danhmuc, $ten_sp, $gia, $giam_gia, $sale, $new, $so_luot_xem, $mo_ta, $id_sp);
                      
                    }
                    $sanpham_list = get_product_all();
                    $danhmuc_list = danhmuc_select_all();
                //   header (' location: index.php?pg=product');
                    include_once "public/admin_sanpham.php";
                    break;    
                //////////////////////
            case 'delsp':
                if (isset($_GET['id_sp'])&&($_GET['id_sp']>0)) {
                    $id_sp=$_GET['id_sp'];
                    $ten_file_hinh = "../" . PATH_IMG. get_ten_file_hinh($id_sp);
                        if (file_exists( $ten_file_hinh)) {
                            unlink( $ten_file_hinh);
                        }
                       $tb = delete_sanpham($id_sp);
                }
                $danhmuc_list = danhmuc_select_all();
                $sanpham_list = get_product_all();
                    include_once "public/admin_sanpham.php";
                break; 
                case 'add_sanpham':
                    if (isset($_POST['btn-add'])&&($_POST['btn-add'])) {
                        $id_danhmuc=$_POST['id_danhmuc'];
                        $ten_sp=$_POST['ten_sp'];
                        $gia=$_POST['gia'];
                        $giam_gia=$_POST['giam_gia'];
                        $sale=$_POST['sale'];
                        $new=$_POST['new'];
                        $so_luot_xem=$_POST['so_luot_xem'];
                        $mo_ta=$_POST['mo_ta'];
                        $hinh=$_FILES['hinh']['name'];
                        if ($hinh!="") {
                            //upload leen host
                            $target_file = "../".PATH_IMG. basename($_FILES["hinh"]["name"]);
                            move_uploaded_file($hinh, $target_file);  
                        } 
                    add_sanpham($hinh,$id_danhmuc,$ten_sp,$gia,$giam_gia,$sale,$new,$so_luot_xem,$mo_ta);
                    }
                $danhmuc_list = danhmuc_select_all();
                $sanpham_list = get_product_all();
                    include_once "public/admin_sanpham.php";
                break; 
                case 'donhang':
                    $bill_list =bill_insert_all();
                    // $danhmuc_list = danhmuc_select_all();
                    // $sanpham_list = get_product_all();
                        include_once "public/admin_donhang.php";
                    break; 
                case 'user':
                    $user_list = get_user_all();
                    // $danhmuc_list = danhmuc_select_all();
                    // $sanpham_list = get_product_all();
                        include_once "public/admin_user.php";
                    break; 
                    case 'binhluan':
                        $binhluan_list = binhluan_select_all();
                        // $danhmuc_list = danhmuc_select_all();
                        // $sanpham_list = get_product_all();
                            include_once "public/admin_cmt.php";
                        break; 
        default:
            include_once "public/admin_dashboard.php";
            break;
    }
} else {
    include_once "public/admin_dashboard.php";
}

include_once "public/admin_footer.php";
?>