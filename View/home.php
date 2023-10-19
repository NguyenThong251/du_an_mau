<?php 

//product_new
$html_product_new = show_product($product_new);
//product_sale
$html_product_sale=show_product($product_sale);
//product_view
$html_product_view=show_product($product_view);


?>

<div class="header_title container-fluid bg-dark">
    <div class="header_title-content container py-3">
        <div class="header_title-text d-flex justify-content-center align-item-center fz-1 text-white fw-200">SEE BETTER
            THAN YESTERDAY - ANNA LOVE YOU!</div>
    </div>
</div>
<section class="slider">
    <div class="slider-imgage container-fuild"><img class="img-cover" src="./View/layout/images/slide1.png" alt="">
        <form class="slider-search d-flex gap-3" action="" method="">
            <input class="w-20 border-dark rounded-3 text-dark fz-1 fw-500 px-2" type="text" name="keywork"
                placeholder="Tìm kiếm sản phẩm">
            <input class="btn button-app" name="search" type="submit" value="Tìm kiếm">
        </form>
    </div>
</section>
<section class="banner pt-3">
    <div class="container">
        <div class="row">
            <div class="banner-left col position-relative">
                <div class="banner-left_img rounded-10"><img class="rounded-10 img-cover"
                        src="./View/layout/images/silde4.jpg" alt="alt"></div>
                <button class="banner-left_button position-absolute btn fw-800 fz-14 text-white">CHỌN KÍNH NGAY</button>
            </div>
            <div class="banner-right col">
                <div class="row banner-right_body">
                    <div class="col banner-right_img rounded-10"><img class="img-cover103 rounded-10"
                            src="./View/layout/images/silde7.jpg" alt=""></div>
                    <div class="col banner-right_img rounded-10"><img class="img-cover103 rounded-10"
                            src="./View/layout/images/silde7.jpg" alt=""></div>
                    <div class="banner-right_icon">
                        <ion-icon class="fz-3 bg-dark-50 rounded-circle" name="chevron-back-circle-outline"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-sale container py-5">
    <div class="section-sale-header d-flex justify-content-between bg-primary rounded-top">
        <div class="section-sale-header-left py-3 px-3">
            <h3 class="section-sale-title fw-700">SĂN FLASH SALE</h3><span class="section-sale-content fz-1">Hàng trăm
                sản phẩm bắt trend mới nhất</span>
        </div>
        <div class="section-sale-header-right"></div>
    </div>
    <div class="section-sale-body bg-primary-50 rounded-bottom">
        <div class="section-product row py-5 px-5 row-cols-4">
            <?=$html_product_sale?>

        </div>
    </div>
    <div class="section-sale-arrow d-flex justify-content-between mx-3">
        <ion-icon class="section-sale-arrow_icon fz-3 bg-dark-50 rounded-circle" name="chevron-back-circle-outline">
        </ion-icon>
        <ion-icon class="section-sale-arrow_icon fz-3 bg-dark-50 rounded-circle" name="chevron-forward-circle-outline">
        </ion-icon>
    </div>
</section>
<section class="hot">
    <div class="hotProduct container rounded-top">
        <div class="hotProduct-main container">
            <div class="hotProduct-header py-3 d-flex justify-content-between">
                <div class="hotProduct-header-text d-flex flex-column gap-1"><span
                        class="hotProduct-header-title fw-400 fz-1 text-white">HOT TREND</span>
                    <h3 class="hotProduct-header-content fw-700">HÀNG MỚI LÊN KỆ </h3>
                </div>
                <div class="hotProduct-header-option d-flex align-items-center">
                    <ul class="nav gap-3">
                        <li class="nav-item"><a
                                class="nav-link text-white fz-1 hotProduct-header-option-link hotProduct-header-option--active"
                                href="#">Gọng kính </a></li>
                        <li class="nav-item"><a class="nav-link text-white fz-1 hotProduct-header-option-link "
                                href="#">Mắt kính</a></li>
                        <li class="nav-item"><a class="nav-link text-white fz-1 hotProduct-header-option-link"
                                href="#">Kính râm </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="hotProduct-body container bg-primary-50">
        <div class="hotProduct-dody-main row px-5 py-5 row-cols-4">
            <?=$html_product_new?>

        </div>
    </div>
    </div>
    <div class="hotProduct-footer py5 flex-center py-3"><a href="http://">
            <button class="btn text-white fw-500 fz-1 bg-dark px-4 hotProduct-footer-btn">XEM TẤT CẢ </button></a></div>
</section>
<section class="section-sale container py-5">
    <div class="section-sale-header d-flex justify-content-between bg-primary rounded-top">
        <div class="section-sale-header-left py-3 px-3">
            <h3 class="section-sale-title fw-700">NHIỀU LƯỢT XEM</h3><span class="section-sale-content fz-1">Hàng trăm
                sản phẩm nhiều lượt xem nhất</span>
        </div>
        <div class="section-sale-header-right"></div>
    </div>
    <div class="section-sale-body bg-primary-50 rounded-bottom">
        <div class="section-product row py-5 px-5 row-cols-4">
            <?=$html_product_view?>

        </div>
    </div>
    <div class="section-sale-arrow d-flex justify-content-between mx-3">
        <ion-icon class="section-sale-arrow_icon fz-3 bg-dark-50 rounded-circle" name="chevron-back-circle-outline">
        </ion-icon>
        <ion-icon class="section-sale-arrow_icon fz-3 bg-dark-50 rounded-circle" name="chevron-forward-circle-outline">
        </ion-icon>
    </div>
</section>
<section class="glassFind container py-5">
    <div class="glassFind-header">
        <div class="glassFind-header-content d-flex flex-column gap-1"><span
                class="glassFind-header-title fw-400 fz-1 text-dark">CHỌN KÍNH ONLINE</span>
            <h3 class="glassFind-header-content fw-700 text-dark">TÌM KÍNH PHÙ HỢP</h3>
        </div>
    </div>
    <div class="glassFind-body d-flex py-3 row">
        <div class="glassFind-body-left col">
            <div class="glassFind-body-img rounded-5"><img class="rounded-5 img-h411"
                    src="./View/layout/images/find-1.jpg" alt="alt"></div>
        </div>
        <div class="glassFind-body-right col">
            <div class="glassFind-body-right-content p-5 d-flex flex-column">
                <div class="glassFind-body-right-icon flex-center"><img
                        class="img-cover20 p-3 rounded-circle bg-primary-50" src="./View/layout/images/logo_kinh2.svg"
                        alt="alt">
                </div>
                <h3 class="glassFind-body-right-title text-dark color-primary fz-16 fw-700 flex-center">Kích thước khung
                </h3><span class="glassFind-body-right-text text-dark fz-1 text-center lh-base">Chọn Kích thước khung
                    phù hợp nhất để giúp dễ dàng vừa vặn, thoải mái và tiện lợi cho bạn.</span>
                <div class="glassFind-body-right-link flex-center gap-2"><span
                        class="glassFind-body-right-link-text fz-1 text-dark fw-500">Cách đo kích thước khung hình của
                        bạn</span><a class="unlink" href="#">
                        <ion-icon class="text-dark fz-16" name="arrow-forward-outline"> </ion-icon>
                    </a></div>
            </div>
        </div>
    </div>
    <div class="glassFind-body d-flex py-3 row">
        <div class="glassFind-body-right col">
            <div class="glassFind-body-right-content p-5 d-flex flex-column">
                <div class="glassFind-body-right-icon flex-center"><img
                        class="img-cover20 p-3 rounded-circle bg-primary-50" src="./View/layout/images/icon_kinh.svg"
                        alt="alt">
                </div>
                <h3 class="glassFind-body-right-title text-dark color-primary fz-16 fw-700 flex-center">Kích thước khung
                </h3><span class="glassFind-body-right-text text-dark fz-1 text-center lh-base">Chọn Kích thước khung
                    phù hợp nhất để giúp dễ dàng vừa vặn, thoải mái và tiện lợi cho bạn.</span>
                <div class="glassFind-body-right-link flex-center gap-2"><span
                        class="glassFind-body-right-link-text fz-1 text-dark fw-500">Cách đo kích thước khung hình của
                        bạn</span><a class="unlink" href="#">
                        <ion-icon class="text-dark fz-16" name="arrow-forward-outline"> </ion-icon>
                    </a></div>
            </div>
        </div>
        <div class="glassFind-body-left col">
            <div class="glassFind-body-img rounded-5"><img class="rounded-5 img-h411"
                    src="./View/layout/images/find-2.jpg" alt="alt"></div>
        </div>
    </div>
</section>
<section class="findMap container">
    <div class="findMap-header d-flex justify-content-between align-item-center">
        <div class="findMap-header-left d-flex flex-column gap-1"><span class="fw-400 fz-1 text-dark">ĐỊA ĐIỂM</span>
            <h3 class="fw-700 text-dark">HỆ THỐNG CỬA HÀNG</h3>
        </div>
        <div class="findMap-header-right"><a href="http://">
                <button class="btn text-white fw-500 fz-1 bg-dark px-4 findMap-footer-btn">Tìm kiếm cơ sở </button></a>
        </div>
    </div>
    <div class="findMap-body">
        <div class="row findMap-body-main">
            <div class="col-8 findMap-body-left"><img class="col-8 findMap-body-img img-600"
                    src="./View/layout/images/store-1.jpg" alt=""></div>
            <div class="col-4 findMap-body-right"> <img class="col-8 findMap-body-img img-600"
                    src="./View/layout/images/store-2.jpg" alt=""></div>
        </div>
    </div>
</section>
<section class="customer container py-5">
    <div class="customer-header d-flex justify-content-between align-item-center">
        <div class="customer-header-left d-flex flex-column gap-1"><span class="fw-400 fz-1 text-dark">TÌNH THƯƠNG MẾN
                THƯƠNG</span>
            <h3 class="fw-700 text-dark">KHÁCH HÀNG THÂN YÊU</h3>
        </div>
    </div>
    <div class="customer-body pt-3">
        <div class="row customer-body-main">
            <div class="col-md-4">
                <div class="card"><img class="card-img-top" src="./View/layout/images/person-1" alt="alt" />
                    <div class="card-body">
                        <h5 class="fw-600 color-primary text-center card-title fz-16">Ny cua phucs</h5>
                        <p class="card-text fz-12 text-dark text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptatibus commodi
                            voluptate quas, vitae eius maiores quam tempora, velit molestias, temporibus incidunt eos
                            laudantium repudiandae unde quos culpa praesentium sed!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card"><img class="card-img-top" src="./View/layout/images/person-1" alt="alt" />
                    <div class="card-body">
                        <h5 class="fw-600 color-primary text-center card-title fz-16">ThOng dep trai nhat vu tru</h5>
                        <p class="card-text fz-12 text-dark text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, soluta! Dicta perferendis
                            error voluptate molestias sed assumenda totam omnis tempora voluptatem autem, in blanditiis
                            itaque amet magnam eius ipsam magni!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card"><img class="card-img-top" src="./View/layout/images/person-1" alt="alt" />
                    <div class="card-body">
                        <h5 class="fw-600 color-primary text-center card-title fz-16">Phucs Ray</h5>
                        <p class="card-text fz-12 text-dark text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum voluptate voluptas quam
                            ratione reprehenderit doloribus consequatur, esse quos itaque inventore sequi tempora ipsum
                            debitis. Ad, distinctio quidem! Dignissimos, expedita modi!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="question container">
    <div class="question-header d-flex justify-content-between align-item-center">
        <div class="question-header-left d-flex flex-column gap-1"><span class="fw-400 fz-1 text-dark">HỎI ĐÁP </span>
            <h3 class="fw-700 text-dark">KHÁCH HÀNG THÂN YÊU</h3>
        </div>
    </div>
    <div class="question-body pt-3">
        <div class="row question-body-main">
            <div class="col-sm-6 question-body-Item pt-3">
                <details class="p-2 rounded border-dark">
                    <summary class="text-dark fz-12 fw-500">Cận thị có tự giảm không ?</summary>
                    <p class="text-dark fz-1 fw-400 pt-2">Mức độ tối màu của thấu kính không ảnh hưởng đến tác dụng bảo
                        vệ mắt khỏi tia cực tím. Thay vào đó, khả năng này được xác định bằng công nghệ sản xuất thấu
                        kính hoặc loại polyme nhựa của thấu kính nhé bạn ơi</p>
                </details>
            </div>
            <div class="col-sm-6 question-body-Item pt-3">
                <details class="p-2 rounded border-dark">
                    <summary class="text-dark fz-12 fw-500">Cho em xin chi phí đo mắt bên mình nhé ?</summary>
                    <p class="text-dark fz-1 fw-400 pt-2">Mức độ tối màu của thấu kính không ảnh hưởng đến tác dụng bảo
                        vệ mắt khỏi tia cực tím. Thay vào đó, khả năng này được xác định bằng công nghệ sản xuất thấu
                        kính hoặc loại polyme nhựa của thấu kính nhé bạn ơi</p>
                </details>
            </div>
            <div class="col-sm-6 question-body-Item pt-3">
                <details class="p-2 rounded border-dark">
                    <summary class="text-dark fz-12 fw-500">Vừa loạn vừa cận có cắt tròng đổi màu được không ?</summary>
                    <p class="text-dark fz-1 fw-400 pt-2">Mức độ tối màu của thấu kính không ảnh hưởng đến tác dụng bảo
                        vệ mắt khỏi tia cực tím. Thay vào đó, khả năng này được xác định bằng công nghệ sản xuất thấu
                        kính hoặc loại polyme nhựa của thấu kính nhé bạn ơi</p>
                </details>
            </div>
            <div class="col-sm-6 question-body-Item pt-3">
                <details class="p-2 rounded border-dark">
                    <summary class="text-dark fz-12 fw-500">Màu của kính râm có ảnh hưởng tới chống tia cực tím không ?
                    </summary>
                    <p class="text-dark fz-1 fw-400 pt-2">Mức độ tối màu của thấu kính không ảnh hưởng đến tác dụng bảo
                        vệ mắt khỏi tia cực tím. Thay vào đó, khả năng này được xác định bằng công nghệ sản xuất thấu
                        kính hoặc loại polyme nhựa của thấu kính nhé bạn ơi</p>
                </details>
            </div>
        </div>
    </div>
</section>