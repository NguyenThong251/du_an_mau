<?php 
$html_dsdm = show_dm($dsdm);
extract($spchitiet);
$html_product_lienquan = show_product($splienquan);
?>


<div class="header_title container-fluid bg-dark">
    <div class="header_title-content container py-3">
        <div class="header_title-text d-flex justify-content-center align-item-center fz-1 text-white fw-200">SEE BETTER
            THAN YESTERDAY - ANNA LOVE YOU!</div>
    </div>
</div>
<section class="header-list container py-5 d-flex gap-2 align-items-center"><a class="text-dark fz-1 fw-600 unlink"
        href="">Trang chủ </a>
    <div class="list d-flex gap-2 align-items-center">
        <ion-icon class="color-primary" name="ellipse-sharp"></ion-icon><a class="text-dark fz-1 fw-600 unlink"
            href="">Sản phẩm </a>
    </div>
    <div class="list d-flex gap-2 align-items-center">
        <ion-icon class="color-primary" name="ellipse-sharp"></ion-icon><a class="text-dark fz-1 fw-600 unlink"
            href="">Gọng kính</a>
    </div>
</section>
<section class="section-detail-primary container">
    <div class="section-detail-primary-body row">
        <div class="section-detail-primary-left col"> <img class="section-detail-primary-img img-25"
                src="./View/layout/images/<?=$hinh?>" alt=""></div>
        <div class="section-detail-primary-right col border-bottom">
            <div class="section-detail-primary-right-content d-flex gap-3 flex-column">
                <h3 class="section-detail-primary-right-name text-dark"><?=$ten_sp?> </h3>
                <div class="section-detail-primary-right-price fz-2"> <span
                        class="section-detail-primary-right-priceOld text-danger fw-500"><span><?=$giam_gia?></span> ₫
                    </span>
                    <del class="section-detail-primary-right-pricenew text-dark-80"> <span><?=$gia?></span>₫</del>
                </div>
                <div class="codeProduct text-dark fz-1"> <span>Mã sản phẩm:</span><span><?=$ma_sp?></span></div>
                <div class="codeMaterial text-dark fz-1"> <span>Chất liệu:</span><span>Titantium</span></div>
                <div class="codeColor text-dark fz-1"> <span>Màu sắc:</span><span>Nâu xanh, đen trắng, hồng, nâu, trắng
                        hồng, xanh hồng, xanh sữa, ghi cam, đen hồng, ghi hồng.</span></div>
                <div class="section-detail-primary-right-ship d-flex align-items-center gap-2"><img
                        class="section-detail-primary-right-ship-icon img-05" src="./View/layout/images/delivery.png"
                        alt=""><span class="section-detail-primary-right-ship-text text-dark fz-1"> Miễn phí giao hàng
                        từ 500k ( vận
                        chuyển 3 - 5 ngày )</span></div>

                <form action="index.php?pg=addcart" method="post">
                    <input type="hidden" name="id_sp" value="'.$id_sp.'">
                    <input type="hidden" name="ten" value="<?=$ten_sp?>">
                    <input type="hidden" name="gia" value="<?=$gia?>">
                    <input type="hidden" name="hinh" value="<?=$hinh?>">
                    <div class="section-detail-primary-right-quatity d-flex align-items-center pb-3 gap-2"><span
                            class="text-dark fz-1"> Số lượng</span>
                        <input class="section-detail-primary-right-ship-number text-dark w-5  fz-1 border-0"
                            type="number" name="soluong" value="1" min="1" max="10">
                    </div>
                    <div class="section-detail-primary-right-footer">
                        <div class="section-detail-primary-right-footer-icon d-flex align-items-center gap-2">
                            <ion-icon class="text-dark fz-16 border border-secondary p-1 rounded-3 pointer"
                                name="heart-outline"></ion-icon>
                            <button name="addcart" class="btn button-app">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<section class="section-detail-secondary container py-5">
    <div class="section-detail-secondary-body row">
        <div class="section-detail-secondary-left col">
            <div class="row row-cols-5"><img class="col" src="./View/layout/images/product-1.jpg" alt="alt"><img
                    class="col" src="./View/layout/images/product-2.jpg" alt="alt"><img class="col"
                    src="./View/layout/images/product-3.jpg" alt="alt">
            </div>
        </div>
        <div class="section-detail-secondary-right col">
            <div class="row-cols-3 row">
                <div class="col section-detail-secondary-right-Items">
                    <div class="col section-detail-secondary-right-Item text-dark d-flex flex-column gap-2">
                        <div class="section-detail-secondary-right-Item-title d-flex align-items-center gap-2">
                            <ion-icon class="fz-2 fw-600" name="cube-outline"></ion-icon><span class="fz-08 fw-600">Bảo
                                hành trọn đời</span>
                        </div>
                        <div class="section-detail-secondary-right-Item-content fz-08 lh-base"> <span>Bảo hành ốc vít
                                rơi ra, gọng lệch, gọng kênh vênh, lỏng chật, rơi ve đệm mũi trọn đời.</span></div>
                    </div>
                </div>
                <div class="col section-detail-secondary-right-Items">
                    <div class="col section-detail-secondary-right-Item text-dark d-flex flex-column gap-2">
                        <div class="section-detail-secondary-right-Item-title d-flex align-items-center gap-2">
                            <ion-icon class="fz-2 fw-600" name="chatbox-ellipses-outline"></ion-icon><span
                                class="fz-08 fw-600">Giao hàng tận nơi</span>
                        </div>
                        <div class="section-detail-secondary-right-Item-content fz-08 lh-base"> <span>Giao hàng tận nơi,
                                được kiểm tra hàng trước khi thanh toán</span></div>
                    </div>
                </div>
                <div class="col section-detail-secondary-right-Items">
                    <div class="col section-detail-secondary-right-Item text-dark d-flex flex-column gap-2">
                        <div class="section-detail-secondary-right-Item-title d-flex align-items-center gap-2">
                            <ion-icon class="fz-2 fw-600" name="gift-outline"></ion-icon><span class="fz-08 fw-600">Đổi
                                trả dễ dàng</span>
                        </div>
                        <div class="section-detail-secondary-right-Item-content fz-08 lh-base"> <span>Bảo hành 1 đổi 1
                                khi có lỗi của nhà sản xuất, lỗi do đo mắt sai (trong 10 ngày đầu), hỗ trợ giảm 50% nếu
                                đổi gọng mới</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-detail-third container">
    <div class="row row-cols-2">
        <div class="section-detail-third-left">
            <div class="section-detail-third-left-navList fz-1 d-flex gap-3 fw-600"><a
                    class="unlink py-2 pointer text-dark activeList" href="">Thông tin</a><a
                    class="unlink py-2 pointer text-dark" href="">Chính sách vận chuyển </a><a
                    class="unlink py-2 pointer text-dark" href="">Chính sách đổi trả</a></div>
            <div class="section-detail-third-left-content fz-08 text-dark d-flex flex-column gap-2 pt-5">
                <p>Chịu trách nhiệm sản phẩm: Công Ty TNHH Dịch vụ và Thương mại Anna Việt Nam</p><span>Cảnh báo: Bảo
                    quản trong hộp kính</span><span>Hướng dẫn sử dụng:</span><span>+ Tháo kính bằng 2 tay</span><span>+
                    Không bỏ kính vào cốp xe hoặc những nơi có nhiệt độ cao làm biến dạng kính.</span><span>+ Không bỏ
                    kính vào túi sách nếu không có hộp kính, vật dụng nhọn như chìa khóa sẽ làm xước kính</span><span>.+
                    Không rửa kính lau kính bằng các chất có tính tẩy rửa mạnh làm bong tróc lớp váng phủ</span>
            </div>
        </div>
        <div class="section-detail-third-right"> <img src="./View/layout/images/img-pr-2.png" alt=""></div>
    </div>
</section>
<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-start align-items-center"><img
                                class="rounded-circle shadow-1-strong me-3 img-04" src="./View/layout/images/th2.jpg"
                                alt="avatar">
                            <div>
                                <h6 class="fw-bold text-primary mb-1 text-dark">Hoàng Thông</h6>
                                <p class="text-muted small mb-0">Shared publicly - Jan 2020</p>
                            </div>
                        </div>
                        <p class="mt-3 mb-4 pb-2 fz-8 text-dark lh-base"> Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="small d-flex justify-content-start"><a
                                class="d-flex align-items-center me-3 unlink gap-2 text-dark" href="#!">
                                <ion-icon class="fz-1" name="heart-outline"></ion-icon>
                                <p class="mb-0 fz-1">Yêu thích</p>
                            </a><a class="d-flex align-items-center me-3 unlink gap-2 text-dark" href="#!">
                                <ion-icon class="fz-1" name="chatbox-ellipses-outline"></ion-icon>
                                <p class="mb-0 fz-1">Comment</p>
                            </a><a class="d-flex align-items-center me-3 unlink gap-2 text-dark" href="#!">
                                <ion-icon class="fz-1" name="share-outline"></ion-icon>
                                <p class="mb-0 fz-1"> Share</p>
                            </a></div>
                    </div>
                    <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                        <div class="d-flex flex-start w-100"><img class="rounded-circle shadow-1-strong me-3 img-03"
                                src="./View/layout/images/th2.jpg" alt="avatar">
                            <div class="form-outline w-100">
                                <textarea class="form-control" id="textAreaExample" rows="4"
                                    style="background: #fff;"></textarea>
                                <label class="form-label" for="textAreaExample">Message</label>
                            </div>
                        </div>
                        <div class="float-end mt-2 pt-1">
                            <button class="btn button-app btn-sm" type="button">Post comment</button>
                            <button class="btn button-app-outline btn-sm" type="button">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-product-hot container py-3">
    <div class="section-product-hot-title">
        <h3 class="section-product-hot-title-content text-dark fw-600">SẢN PHẨM LIÊN QUAN</h3>
    </div>
    <div class="section-product-hot row py-3 row-cols-5">
        <?=$html_product_lienquan?>
    </div>
</section>
<section class="section-product-new container py-3">
    <div class="section-product-new-title">
        <h3 class="section-product-new-title-content text-dark fw-600">SẢN PHẨM MỚI NHẤT</h3>
    </div>
    <div class="section-product-new row py-3">
        <div class="col-4 section-product-new-img"><img class="img-cover rounded-10"
                src="./View/layout/images/img-pr.jpg" alt="alt"></div>
        <div class="section-product-item col py-3"><a class="unlink" href="#">
                <div class="card border-white rounded-3 position-relative"><img class="card-img-top img-fluid"
                        src="./View/layout/images/product-1.jpg" alt="alt" />
                    <div class="card-body d-flex flex-column gap-2">
                        <h3 class="fz-1 text-dark fw-600 mb-0">GK - CK87</h3>
                        <div class="card-price d-flex gap-2">
                            <del class="card-price-old text-dark-80 fz-08">380.000</del>
                            <del class="text-dark-80 fz-08">đ</del>
                            <div class="card-price-new text-dark fz-08">280.000</div><span
                                class="text-dark fz-08">đ</span>
                        </div>
                        <div class="card-view d-flex gap-2">
                            <ion-icon class="card-view-icon text-dark fz-08" name="eye-outline"></ion-icon>
                            <div class="card-view-text fz-08 text-dark">40000</div><span
                                class="text-dark fz-08">view</span>
                        </div>
                    </div><a class="d-flex justify-content-end" href="#">
                        <button class="btn-cart p-2 bg-primary border-raac">
                            <ion-icon class="text-white fz-1" name="cart"></ion-icon>
                        </button></a>
                    <div class="sticker-sale position-absolute top-0 start-0 px-3 py-2 border-raac bg-danger fw-500">
                        <span>SALE </span>
                    </div>
                </div>
            </a></div>
        <div class="section-product-item col py-3"><a class="unlink" href="#">
                <div class="card border-white rounded-3 position-relative"><img class="card-img-top img-fluid"
                        src="./View/layout/images/product-1.jpg" alt="alt" />
                    <div class="card-body d-flex flex-column gap-2">
                        <h3 class="fz-1 text-dark fw-600 mb-0">GK - CK87</h3>
                        <div class="card-price d-flex gap-2">
                            <del class="card-price-old text-dark-80 fz-08">380.000</del>
                            <del class="text-dark-80 fz-08">đ</del>
                            <div class="card-price-new text-dark fz-08">280.000</div><span
                                class="text-dark fz-08">đ</span>
                        </div>
                        <div class="card-view d-flex gap-2">
                            <ion-icon class="card-view-icon text-dark fz-08" name="eye-outline"></ion-icon>
                            <div class="card-view-text fz-08 text-dark">40000</div><span
                                class="text-dark fz-08">view</span>
                        </div>
                    </div><a class="d-flex justify-content-end" href="#">
                        <button class="btn-cart p-2 bg-primary border-raac">
                            <ion-icon class="text-white fz-1" name="cart"></ion-icon>
                        </button></a>
                    <div class="sticker-sale position-absolute top-0 start-0 px-3 py-2 border-raac bg-danger fw-500">
                        <span>SALE </span>
                    </div>
                </div>
            </a></div>
        <div class="section-product-item col py-3"><a class="unlink" href="#">
                <div class="card border-white rounded-3 position-relative"><img class="card-img-top img-fluid"
                        src="./View/layout/images/product-1.jpg" alt="alt" />
                    <div class="card-body d-flex flex-column gap-2">
                        <h3 class="fz-1 text-dark fw-600 mb-0">GK - CK87</h3>
                        <div class="card-price d-flex gap-2">
                            <del class="card-price-old text-dark-80 fz-08">380.000</del>
                            <del class="text-dark-80 fz-08">đ</del>
                            <div class="card-price-new text-dark fz-08">280.000</div><span
                                class="text-dark fz-08">đ</span>
                        </div>
                        <div class="card-view d-flex gap-2">
                            <ion-icon class="card-view-icon text-dark fz-08" name="eye-outline"></ion-icon>
                            <div class="card-view-text fz-08 text-dark">40000</div><span
                                class="text-dark fz-08">view</span>
                        </div>
                    </div><a class="d-flex justify-content-end" href="#">
                        <button class="btn-cart p-2 bg-primary border-raac">
                            <ion-icon class="text-white fz-1" name="cart"></ion-icon>
                        </button></a>
                    <div class="sticker-sale position-absolute top-0 start-0 px-3 py-2 border-raac bg-danger fw-500">
                        <span>SALE </span>
                    </div>
                </div>
            </a></div>
    </div>
</section>