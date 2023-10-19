<?php
// require_once 'pdo.php';

function bill_insert_id($ma_donhang,$id_user,$ten_NN,$dia_chi_NN,$sdt_NN,$ten_ND,$dia_chi_ND,$email_ND,$sdt_ND,$ship,$voucher,$tongthanhtoan,$pttt)
{
    $sql = "INSERT INTO don_hang(ma_donhang,id_user,ten_NN,dia_chi_NN,sdt_NN,ten_ND,dia_chi_ND,email_ND,sdt_ND,ship,voucher,tongthanhtoan,pttt) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
    return pdo_execute_id($sql,$ma_donhang,$id_user,$ten_NN,$dia_chi_NN,$sdt_NN,$ten_ND,$dia_chi_ND,$email_ND,$sdt_ND,$ship,$voucher,$tongthanhtoan,$pttt);
    
}
function bill_insert_all()
{
    $sql = "SELECT * FROM don_hang ORDER BY id_don_hang DESC";
    return pdo_query($sql);
    
}