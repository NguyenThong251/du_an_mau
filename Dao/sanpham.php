<?php
require_once 'pdo.php';

// function hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, dac_biet, so_luot_xem, ngay_nhap, mo_ta) VALUES (?,?,?,?,?,?,?,?,?)";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta);
// }

// function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "UPDATE hang_hoa SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ma_loai=?,dac_biet=?,so_luot_xem=?,ngay_nhap=?,mo_ta=? WHERE ma_hh=?";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);
// }

// function hang_hoa_delete($ma_hh){
//     $sql = "DELETE FROM hang_hoa WHERE  ma_hh=?";
//     if(is_array($ma_hh)){
//         foreach ($ma_hh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_hh);
//     }
// }

function get_product_all(){
    $sql = "SELECT * FROM san_pham";
    return pdo_query($sql);
}
function get_product_new($limi){
    $sql = "SELECT * FROM san_pham WHERE new = 1 ORDER BY id_sp ASC LIMIT ".$limi;
    return pdo_query($sql);
}
function get_product_sale($limi){
    $sql = "SELECT * FROM san_pham WHERE sale > 10   ORDER BY id_sp ASC LIMIT ".$limi;
    return pdo_query($sql);
}
function get_product_view($limi){
    $sql = "SELECT * FROM san_pham   WHERE so_luot_xem > 50   ORDER BY id_sp ASC LIMIT  ".$limi;
    return pdo_query($sql);
}
function get_product_lienquan($id_danhmuc,$id_sp,$limi){
    $sql = "SELECT * FROM san_pham  WHERE id_danhmuc=? AND id_sp<>?   ORDER BY id_sp ASC LIMIT  ".$limi;
    return pdo_query($sql,$id_danhmuc,$id_sp);
}
function get_product_by_iddm($keywork,$id_danhmuc, $limit){
    $sql = "SELECT * FROM san_pham  WHERE 1";
    if($id_danhmuc > 0){
        $sql .= " AND id_danhmuc=" . $id_danhmuc;
    }
    if ($keywork!="") {
        $sql .= " AND ten_sp like '%".$keywork."%'";
    }
    $sql .= " ORDER BY id_danhmuc DESC LIMIT " . $limit;
    return pdo_query($sql);
}
//product
function show_product($dssp){
    $html_dssp='';
foreach ($dssp as $sp) {
    extract($sp);
    if ($sale > 10) {
        $item_sale = '<div
        class="sticker-sale position-absolute top-0 start-0 px-3 py-2 border-raac bg-danger fw-500">
        <span>SALE </span>
    </div>';
    } else {
        $item_sale ='';
    }
    $link="index.php?pg=sanphamchitiet&idpro=".$id_sp;
    $html_dssp.=' <div class="section-product-item col py-3"><a class="unlink" href="">
    <div class="card border-white rounded-3 position-relative"><a href="'.$link.'"><img class="card-img-top img-fluid"
            src="./View/layout/images/'.$hinh.'" alt="alt" /> </a>
        <div class="card-body d-flex flex-column gap-2">
            <h3 class="fz-1 text-dark fw-600 mb-0">'.$ten_sp.'</h3>
            <div class="card-price d-flex gap-2">
                <del class="card-price-old text-dark-80 fz-08">'.$gia.'</del>
                <del class="text-dark-80 fz-08">đ</del>
                <div class="card-price-new text-dark fz-08">'.$giam_gia.'</div><span
                    class="text-dark fz-08">đ</span>
            </div>
            <div class="card-view d-flex gap-2">
                <ion-icon class="card-view-icon text-dark fz-08" name="eye-outline"></ion-icon>
                <div class="card-view-text fz-08 text-dark">'.$so_luot_xem.'</div><span
                    class="text-dark fz-08">view</span>
            </div>
            <form action="index.php?pg=addcart" method="post">
            <input type="hidden" name="id_sp" value="'.$id_sp.'">
            <input type="hidden" name="ten" value="'.$ten_sp.'">
            <input type="hidden" name="gia" value="'.$gia.'">
            <input type="hidden" name="hinh" value="'.$hinh.'">
            <div class="card-quatity d-flex gap-2"><span class="card-quantity-content text-dark fz-08">Số lượng</span>
            <input class="w-200 border-0" type="number" name="soluong" value="1" min="1" max="10"/>
            </div>
        
        <div class="d-flex justify-content-end" href="#">
            <button name="addcart" class="btn-cart p-2 bg-primary border-raac">
                <ion-icon class="text-white fz-1" name="cart"></ion-icon>
            </button></div>
        </form>
</div>
        '.$item_sale.'
    </div>
</a></div>';
}
return $html_dssp;
}
function get_sp_by_id($id_sp){
    $sql = "SELECT * FROM san_pham WHERE id_sp=?";
    return pdo_query_one($sql, $id_sp);
}

// function hang_hoa_exist($ma_hh){
//     $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_value($sql, $ma_hh) > 0;
// }

// function hang_hoa_tang_so_luot_xem($ma_hh){
//     $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
//     pdo_execute($sql, $ma_hh);
// }

// function hang_hoa_select_top10(){
//     $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
//     return pdo_query($sql);
// }

// function hang_hoa_select_dac_biet(){
//     $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
//     return pdo_query($sql);
// }

// function hang_hoa_select_by_loai($ma_loai){
//     $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
//     return pdo_query($sql, $ma_loai);
// }

// function hang_hoa_select_keyword($keyword){
//     $sql = "SELECT * FROM hang_hoa hh "
//             . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
//             . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
//     return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
// }

// function hang_hoa_select_page(){
//     if(!isset($_SESSION['page_no'])){
//         $_SESSION['page_no'] = 0;
//     }
//     if(!isset($_SESSION['page_count'])){
//         $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
//         $_SESSION['page_count'] = ceil($row_count/10.0);
//     }
//     if(exist_param("page_no")){
//         $_SESSION['page_no'] = $_REQUEST['page_no'];
//     }
//     if($_SESSION['page_no'] < 0){
//         $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
//     }
//     if($_SESSION['page_no'] >= $_SESSION['page_count']){
//         $_SESSION['page_no'] = 0;
//     }
//     $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT ".$_SESSION['page_no'].", 10";
//     return pdo_query($sql);
// }