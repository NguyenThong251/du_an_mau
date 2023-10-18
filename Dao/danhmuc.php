<?php
// require_once 'pdo.php';

// /**
//  * Thêm loại mới
//  * @param String $ten_danhmuc là tên loại
//  * @throws PDOException lỗi thêm mới
//  */
// function danhmuc_insert($ten_danhmuc){
//     $sql = "INSERT INTO danhmuc(ten_danhmuc) VALUES(?)";
//     pdo_execute($sql, $ten_danhmuc);
// }
// /**
//  * Cập nhật tên loại
//  * @param int $ma_danhmuc là mã loại cần cập nhật
//  * @param String $ten_danhmuc là tên loại mới
//  * @throws PDOException lỗi cập nhật
//  */
// function danhmuc_update($ma_danhmuc, $ten_danhmuc){
//     $sql = "UPDATE danhmuc SET ten_danhmuc=? WHERE ma_danhmuc=?";
//     pdo_execute($sql, $ten_danhmuc, $ma_danhmuc);
// }
// /**
//  * Xóa một hoặc nhiều loại
//  * @param mix $ma_danhmuc là mã loại hoặc mảng mã loại
//  * @throws PDOException lỗi xóa
//  */
// function danhmuc_delete($ma_danhmuc){
//     $sql = "DELETE FROM danhmuc WHERE ma_danhmuc=?";
//     if(is_array($ma_danhmuc)){
//         foreach ($ma_danhmuc as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_danhmuc);
//     }
// }
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function danhmuc_select_all(){
    $sql = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
    return pdo_query($sql);
}
function get_name_dm($id_danhmuc){
    $sql = "SELECT ten FROM danhmuc WHERE id_danhmuc=?";
    $kq = pdo_query_one($sql, $id_danhmuc);
    return $kq["ten"];
}
function get_danhmuc_id($id_dm) {
    $sql = "SELECT * FROM danhmuc WHERE id_danhmuc = ?";
    return pdo_query_one($sql, $id_dm);
}
function set_danhmuc($id_dm, $ten, $mo_ta){
    $sql = "UPDATE danhmuc SET ten = ?, mo_ta = ? WHERE id_danhmuc = ?";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute([$ten, $mo_ta, $id_dm]);
}
//delete
// function detele_catalog($id){
//     $sql = "DELETE FROM danhmuc WHERE id_danhmuc=".$id;
//   $dssp =get_product_all($id);
//   if(count($dssp)>0){
//     $tb = "Danh mục nay hiện có ".count($dssp)." sản phẩm bạn không được phép xóa!";
//   } else {
//     $conn = pdo_get_connection();
//     $conn->exec($sql);
//     $tb = "Xóa thành công ";
//   }
//     return $tb;
//   } 
function delete_catalog($id) {
    $conn = pdo_get_connection();
    $dssp = get_products_by_catalog($id);
    
    if (count($dssp) > 0) {
        return "Danh mục này hiện có " . count($dssp) . " sản phẩm và không thể xóa.";
    }

    $sql = "DELETE FROM danhmuc WHERE id_danhmuc = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt->execute([$id])) {
        return "Xóa thành công";
    } else {
        return "Xóa thất bại";
    }
}

function get_products_by_catalog($id) {
    $sql = "SELECT * FROM san_pham WHERE id_danhmuc = ?";
    return pdo_query($sql, $id);
}
function add_catalog($ten,$mota){
 $sql = "INSERT INTO danhmuc (ten, mo_ta) VALUES (?, ?)";
 pdo_execute ($sql,$ten,$mota);
};



// function get_name_dm(){
//     $sql = "SELECT ten FROM danhmuc ";
//     return pdo_query($sql);
// }
function show_dm($dsdm){
    $html_dsdm = '';
foreach ($dsdm as $dm) {
    extract($dm);
    $link="index.php?pg=sanpham&iddm=".$id_danhmuc;
    $html_dsdm .= '<a
    class="store-body-left-list unlink fz-1 text-dark" href="'.$link.'">'.$ten.'</a>';
}
return  $html_dsdm;
}
// /**
//  * Truy vấn một loại theo mã
//  * @param int $ma_danhmuc là mã loại cần truy vấn
//  * @return array mảng chứa thông tin của một loại
//  * @throws PDOException lỗi truy vấn
//  */
// function danhmuc_select_by_id($ma_danhmuc){
//     $sql = "SELECT * FROM danhmuc WHERE ma_danhmuc=?";
//     return pdo_query_one($sql, $ma_danhmuc);
// }
// /**
//  * Kiểm tra sự tồn tại của một loại
//  * @param int $ma_danhmuc là mã loại cần kiểm tra
//  * @return boolean có tồn tại hay không
//  * @throws PDOException lỗi truy vấn
//  */
// function danhmuc_exist($ma_danhmuc){
//     $sql = "SELECT count(*) FROM danhmuc WHERE ma_danhmuc=?";
//     return pdo_query_value($sql, $ma_danhmuc) > 0;
// }