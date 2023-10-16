<?php
require_once 'pdo.php';


function user_insert($username, $password, $email)
{
    $sql = "INSERT INTO user(username,password,email) VALUES (?, ?, ?)";
    pdo_execute($sql, $username, $password, $email);
}
function user_insert_id($password, $ten_ND, $username, $sdt_ND, $dia_chi_ND, $email_ND)
{
    $sql = "INSERT INTO user(password, ho_ten, username, sdt, dia_chi, email) VALUES (?, ?, ?, ?, ?, ?)";
    return pdo_execute_id($sql,$password, $ten_ND, $username, $sdt_ND, $dia_chi_ND, $email_ND);
}

//lấy về id mới nhất sau khi insert
// function user_insert_id($username, $password, $hoten, $diachi, $email, $dienthoai)
// {
//     $sql = "INSERT INTO user (username,password,hoten,diachi,email,dienthoai) VALUES (?,?,?,?,?,?)";
//     return  pdo_execute_id($sql, $username, $password, $hoten, $diachi, $email, $dienthoai);
// }

function checkuser($username, $password)
{
    $sql = "SELECT * FROM user WHERE username=? and password=?";
    return pdo_query_one($sql, $username, $password);
    // if (is_array($kq) && (count($kq))) {
    //     return $kq["id_user"];
    // } else {
    //     return 0;
    // }
}

function  user_update($username, $password, $email, $sdt,$address,$vaitro,$id){
    $sql = "UPDATE user SET username=?,password=?,email=?,sdt=?,dia_chi=?,vai_tro=? WHERE id_user=?";
    pdo_execute($sql,$username, $password, $email, $sdt,$address,$vaitro,$id);
}

function get_user($id)
{
    $sql = "SELECT * FROM user WHERE id_user=?";
    return  pdo_query_one($sql, $id);
}





// function userinsert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro)
// {
//     $sql = "INSERT INTO user(ma_kh, mat_khau, ho_ten, email, hinh, kich_hoat, vai_tro) VALUES (?, ?, ?, ?, ?, ?, ?)";
//     pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat == 1, $vai_tro == 1);
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