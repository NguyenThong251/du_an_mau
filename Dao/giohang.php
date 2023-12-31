<?php 
//insert giohang 
function cart_insert($id_sp,$soluong,$ten,$hinh,$gia,$tong_tien,$id_don_hang)
{
    $sql = "INSERT INTO gio_hang(id_sp,so_luong,ten,hinh,gia,tong_tien,id_don_hang) VALUES (?,?,?,?,?,?,?)";
   return pdo_execute_id($sql,$id_sp,$soluong,$ten,$hinh,$gia,$tong_tien,$id_don_hang);
}

function view_cart(){
    $html_cart = '';
    foreach ($_SESSION["giohang"] as $sp) {
    extract($sp);
    $gia_thuc = (Int)$gia * (Int)$soluong ; 
    $html_cart .= '
       <div class="viewCart-product row py-3 text-dark fz-1 flex-center position-relative">
       <div class="col viewCar-img flex-center"><img class="img-cover"
               src="./View/layout/images/'.$hinh.'" alt="" /></div>
       <div class="col viewCar-name flex-center"><span>'.$ten.'</span></div>
       <div class="col viewCar-price flex-center"><span>'.$gia.'</span><span>₫</span></div>
       <div class="col viewCar-quatity flex-center">

               <input class="section-detail-primary-right-ship-number text-dark fz-1 border-0 w-30" 
       type="number" name="" max="10" min="1" value="'.$soluong.'" data-id="'.$soluid_spong.'" />

       </div>
       <div class="col viewCar-total flex-center"><span>'.$gia_thuc.'</span><span>₫</span></div>
       <div class="viewCart-iconDelete position-absolute top-0 end-0 pointer">
           <ion-icon class="text-danger bg-white p-2 rounded-circle" name="trash-outline"> </ion-icon>
       </div>
    </div>';
    }
    return $html_cart;
};
function get_tongdonhang(){
    $tong = 0; // Khởi tạo $tong là một số nguyên 0
    foreach ($_SESSION["giohang"] as $sp) {
        extract($sp);
        $gia_thuc = (int)$gia * (int)$soluong; 
        $tong += $gia_thuc;
    }
    return $tong;
}
?>