<?php 


//product_new
$html_product_new = show_product($product_new);
//product_sale
$html_product_sale=show_product($product_sale);
//product_view
$html_product_view=show_product($product_view);



if ($title_page!="") $title = $title_page; 
else $title = "Sản phẩm";

$html_dsdm = show_dm($dsdm);
$html_product_list = show_product($dssp);

?>
<div class="header_title container-fluid bg-dark">
    <div class="header_title-content container py-3">
        <div class="header_title-text d-flex justify-content-center align-item-center fz-1 text-white fw-200">SEE BETTER
            THAN YESTERDAY - ANNA LOVE YOU!</div>
    </div>
</div>
<div class="bannerTitle container-fuild" style="background-image: url(./View/layout/images/banner_title.jpg);">
    <div class="bannerTitle-content container pt-18 pb-3 d-flex flex-column gap-2">
        <h3 class="bannerTitle-content-title fw-700 fz-3">SẢN PHẨM</h3>
        <div class="bannerTitle-content-list d-flex gap-2 fz-12"><span class="bannerTitle-content-list-main">Trang
                chủ</span>
            <div class="bannerTitle-content-list-secon d-flex align-items-center gap-2">
                <ion-icon class="color-primary" name="ellipse"></ion-icon><span
                    class="bannerTitle-content-list-secon">Sản phẩm </span>
            </div>
        </div>
    </div>
</div>
<div class="store-body container pt-5">
    <div class="store-body-title">
        <h3 class="store-body-title_Content flex-center text-dark"><?=$title?></h3>
    </div>
    <div class="store-body-main row">
        <div class="store-body-left col-2">
            <div class="store-body-left-main text-dark ps-3">
                <div class="store-body-left-content d-flex flex-column gap-2 py-2"><span
                        class="store-body-left-title fz-12 fw-600">Sản phẩm</span>
                    <?=$html_dsdm;?>
                    <!-- <a
                        class="store-body-left-list unlink fz-1 text-dark" href="http://">Gọng Kính</a><a
                        class="store-body-left-list unlink fz-1 text-dark" href="http://">Kính áp tròng</a><a
                        class="store-body-left-list unlink fz-1 text-dark" href="http://">Gọng Kính</a><a
                        class="store-body-left-list unlink fz-1 text-dark" href="http://">Gọng Kính</a><a
                        class="store-body-left-list unlink fz-1 text-dark" href="http://"></a> -->
                </div>
                <div class="store-body-left-content d-flex flex-column gap-2"><span
                        class="store-body-left-title fz-12 fw-600">Chất liệu</span><a
                        class="store-body-left-list unlink fz-1 text-dark" href="http://">Acetate</a><a
                        class="store-body-left-list unlink fz-1 text-dark" href="http://">Kim loại</a><a
                        class="store-body-left-list unlink fz-1 text-dark" href="http://">Nhựa</a><a
                        class="store-body-left-list unlink fz-1 text-dark" href="http://">Nhựa Dẻo</a><a
                        class="store-body-left-list unlink fz-1 text-dark" href="http://"></a></div>
                <div class="store-body-left-content d-flex flex-column gap-2"><span
                        class="store-body-left-title fz-12 fw-600">Thương hiệu</span><a
                        class="store-body-left-list unlink fz-1 text-dark" href="http://">Chemi</a><a
                        class="store-body-left-list unlink fz-1 text-dark" href="http://">Elements</a><a
                        class="store-body-left-list unlink fz-1 text-dark" href="http://">Essilor</a><a
                        class="store-body-left-list unlink fz-1 text-dark" href="http://">Hoga</a><a
                        class="store-body-left-list unlink fz-1 text-dark" href="http://"></a></div>
            </div>
        </div>
        <div class="store-body-right col-10">
            <div class="row row-cols-4">
                <?=$html_product_list?>
            </div>
        </div>
    </div>
</div>
<section class="section-product-hot container py-3">
    <div class="section-product-hot-title">
        <h3 class="section-product-hot-title-content text-dark fw-600">SẢN PHẨM NỔI BẬT</h3>
    </div>
    <div class="section-product-hot row py-3 row-cols-5">
        <?=$html_product_view?>
    </div>
</section>
<section class="section-product-new container py-3">
    <div class="section-product-new-title">
        <h3 class="section-product-new-title-content text-dark fw-600">SẢN PHẨM MỚI NHẤT</h3>
    </div>
    <div class="section-product-new row py-3">
        <div class="col-4 section-product-new-img"><img class="img-cover rounded-10"
                src="./View/layout/images/img-pr.jpg" alt="alt"></div>
        <?=$html_product_sale?>



    </div>
</section>