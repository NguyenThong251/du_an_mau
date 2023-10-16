<div class="header_title container-fluid bg-dark">
    <div class="header_title-content container py-3">
        <div class="header_title-text d-flex justify-content-center align-item-center fz-1 text-white fw-200">SEE BETTER
            THAN YESTERDAY - ANNA LOVE YOU!</div>
    </div>
</div>
<form action="index.php?pg=donhang_confirm" method="post">
    <section class="payment container">
        <div class="payment-body row py-5">
            <div class="payment-left col text-dark">
                <h3 class="payment-left-title fz-16 fw-600">THANH TOÁN </h3>
                <div class="row fw-500">
                    <div class="col-md-12 pt-3">
                        <label class="form-label fz-1" for="username">Họ và tên </label>
                        <input class="form-control" type="text" name="username" id="username"
                            placeholder="Nhập họ tên của bạn">
                    </div>
                    <div class=" col-md-12 pt-3">
                        <label class="form-label fz-1" for="sdt">Số điện thoại </label>
                        <input class="form-control" type="text" name="sdt" id="sdt"
                            placeholder="Nhập số điện thoại của bạn">
                    </div>
                    <div class="col-md-12 pt-3">
                        <label class="form-label fz-1" for="diachi">Địa chỉ</label>
                        <input class="form-control" type="text" name="diachi" id="diachi"
                            placeholder="Nhập địa chỉ của bạn">
                    </div>
                    <div class="col-md-12 pt-3">
                        <label class="form-label fz-1" for="email">Email</label>
                        <input class="form-control" type="text" name="email" id="email"
                            placeholder="Nhập email của bạn">
                    </div>
                    <div class="col-md-12 pt-3">
                        <label class="form-label fz-1" for="note">Ghi chú</label>
                        <textarea class="form-control" type="text" name="" id="note" placeholder="Ghi chú "></textarea>
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col fw-500">
                        <div id="receiver-form-1" class="hidden-form">
                            <h3 class="fz-16 fw-600">Người nhận </h3>
                            <div class="form-group ">
                                <label class="fz-1  py-3" for="name-1">Họ và tên:</label>
                                <input type="text py-3" class="form-control" id="name-1" name="username_NN"
                                    placeholder="Họ và tên">
                            </div>
                            <div class="form-group ">
                                <label class="fz-1  py-3" for="address-1">Địa chỉ:</label>
                                <input type="text py-3" class="form-control" name="diachi_NN" id="address-1"
                                    placeholder="Địa chỉ">
                            </div>
                            <div class="form-group ">
                                <label class="fz-1  py-3" for="address-1">Số điện thoại:</label>
                                <input type="text py-3" class="form-control" name="sdt_NN" id="address-1"
                                    placeholder="Số điện thoại">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="payment-right col bg-dark-50 rounded-5">
                <div class="payment-right-body p-5"> <span class="payment-right-title fz-12 text-dark fw-600">Nhập mã
                        giảm
                        giá
                        <div class="qr-code row pt-3 d-flex justify-content-between">
                            <div class="col-md-8">
                                <input class="form-control" type="text">
                            </div>
                            <div class="col-md-4 d-flex justify-content-end">
                                <button class="btn button-app-outline">Áp dụng </button>
                            </div>
                        </div>
                    </span>
                    <div class="payment-right-text d-flex fw-500 justify-content-between py-3 fz-1 text-dark"><span>Sản
                            phẩm
                        </span><span>Thành tiền </span></div>
                    <div class="payment-right-product row d-flex justify-content-between align-items-center">
                        <div class="payment-right-productLeft col-8 fz-08 fw-400 text-dark">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="payment-right-productLeft-img col-4"><img class="col img-cover"
                                        src="./View/layout/images/product-1.jpg" alt="alt"></div><span
                                    class="payment-right-productLeft-name col-6">GK-550CN040 </span><span
                                    class="payment-right-productLeft-quality col-2">x1 </span>
                            </div>
                        </div>
                        <div class="payment-right-productRight col-4"><span
                                class="payment-right-productRight d-flex justify-content-end align-items-center fz-08 fw-400 text-dark">495,000đ</span>
                        </div>
                    </div>
                    <div
                        class="payment-right-text d-flex fw-500 justify-content-between py-5 fz-1 text-dark border-bottom">
                        <span>Tạm tính </span><span class="color-primary fw-600">495.000đ</span>
                    </div>
                    <div class="payment-right-text d-flex fw-500 justify-content-between py-5 fz-1 text-dark"><span>Tổng
                            cộng</span><span class="color-primary fw-600">495.000đ</span></div>
                </div>
            </div>
        </div>

    </section>
    <section class="payment-footer container">
        <div class="row">
            <div class="col"> </div>
            <div class="col text-dark d-flex flex-column gap-3"><span class="text-dark fz-1">Phương thức thanh toán
                </span>
                <div class="payment-option fz-08 d-flex gap-2">
                    <!-- <ion-icon name="ellipse"></ion-icon> -->
                    <input type="radio" name="pttt" value="1" checked id="">
                    <span>Trả tiền khi nhân hàng</span>
                </div>
                <div class="payment-option fz-08 d-flex gap-2">
                    <!-- <ion-icon name="ellipse"></ion-icon> -->
                    <input type="radio" name="pttt" value="2" id="">
                    <span>Thanh toán qua ví điện tử</span>
                </div>
                <div class="payment-option fz-08 d-flex gap-2">
                    <!-- <ion-icon name="ellipse"></ion-icon> -->
                    <input type="radio" name="pttt" value="3" id="">
                    <span>Chuyển khoản</span>
                </div>
                <div class="payment-option fz-08 d-flex gap-2">
                    <!-- <ion-icon name="ellipse"></ion-icon> -->
                    <input type="radio" name="pttt" value="4" id="">
                    <span>Thanh toán online</span>
                </div>
                <div class="payment-footer-content fz-1"> <span class="lh-base">Thông tin cá nhân của bạn sẽ được sử
                        dụng để
                        xử lý đơn hàng và cho các mục đích cụ thể khác đã được mô tả trong </span><a href="">chính sách
                        riêng tư</a>của chúng tôi.</div>
                <div class="payment-footer-button"> </div>
                <button type="submit" name="dathang" class="btn button-secondary">Đặt hàng ngay</button>
            </div>
        </div>
    </section>
</form>