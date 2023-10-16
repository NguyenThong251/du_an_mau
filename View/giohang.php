<?php
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
           type="number" name="" value="'.$soluong.'" />
   </div>
   <div class="col viewCar-total flex-center"><span>'.$gia_thuc.'</span><span>₫</span></div>
   <div class="viewCart-iconDelete position-absolute top-0 end-0 pointer">
       <ion-icon class="text-danger bg-white p-2 rounded-circle" name="trash-outline"> </ion-icon>
   </div>
</div>';
}
?>
<div class="header_title container-fluid bg-dark">
    <div class="header_title-content container py-3">
        <div class="header_title-text d-flex justify-content-center align-item-center fz-1 text-white fw-200">SEE BETTER
            THAN YESTERDAY - ANNA LOVE YOU!</div>
    </div>
</div>
<section class="viewCart-body container">
    <div class="viewCart-body-main row row-cols-2 py-5">
        <div class="viewCart-body-left col-8">
            <div class="viewCart-body-left-header row fz-1 text-dark fw-600 py-3">
                <div class="col-5"><span>Thông tin sản phẩm </span></div>
                <div class="col flex-center"><span>Giá </span></div>
                <div class="col flex-center"><span>Số lượng </span></div>
                <div class="col flex-center"><span>Tổng cộng</span></div>
            </div>
            <div class="viewCart-body-left-main border-top border-bottom">
                <?=$html_cart?>
            </div>
            <div class="viewCart-body-left-footer py-3 d-flex gap-2">
                <a class="btn button-secondary" href="">Tiếp tục mua hàng</a>
                <a class="btn button-secondary" href="index.php?pg=giohang&delAll=1">Xóa tất cả sản phẩm </a>
            </div>
        </div>
        <div class="viewCart-body-right col-4">
            <div class="viewCart-body-right-header border-bottom"> <span
                    class="viewCart-body-right-title fz-1 text-dark fw-600 py-3 flex-center">Thông tin thanh toán
                </span></div>
            <div class="viewCart-body-right-total_1 py-5 border-bottom d-flex gap-2"><span
                    class="text-dark fz-1 fw-500">Tạm tính:</span><span
                    class="text-dark fz-1 fw-500"><?=$tongdonhang?>đ</span>
            </div>
            <form class="form-voucher d-flex pt-4 gap-3" action="index.php?pg=giohang&voucher=1" method="post">
                <input type="hidden" name="tongdonhang" value="<?=$tongdonhang?>">

                <input class=" border-dark rounded-3 text-dark fz-1 fw-500 px-2" type="text" name="mavoucher"
                    placeholder="Nhập mã giảm giá">
                <button class="button-app border-0 px-1 rounded-3" type="submit">Áp dụng </button>
            </form>
            <div class="viewCart-body-right-total_2 py-5 d-flex gap-2"><span class="text-dark fz-1 fw-600">Tổng
                    cộng:</span><span class="text-dark fz-1 fw-600"><?=$thanhtoan?></span></div>
            <div class="viewCart-body-right-footer py-3 d-flex gap-2"><a class="btn button-secondary"
                    href="index.php?pg=donhang">Tiến hành
                    thanh toán</a></div>
            <div class="payment d-flex flex-column gap-3 py-3"><span class="flex-center text-dark fw-600 fz-1">Chúng tôi
                    chấp nhận thanh toán </span>
                <div class="payment-icon d-flex gap-2 flex-center"> <img src="./View/layout/images/visa-1.png"
                        alt=""><img src="./View/layout/images/visa-2.png" alt=""><img
                        src="./View/layout/images/visa-3.png" alt=""><img src="./View/layout/images/visa-4.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>