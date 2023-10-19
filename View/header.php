<?php 
 if (isset($_SESSION['s_user']) && (count($_SESSION['s_user'])>0)){
    extract($_SESSION['s_user']);
    $html_account = '<a href="index.php?pg=account">
    <ion-icon class="text-dark fz-16 header-icon_item" name="person-circle-outline"></ion-icon>
</a>
<a href="index.php?pg=logout">
    <ion-icon class="text-dark fz-16 header-icon_item" name="log-out-outline"></ion-icon>
</a>';

 }
 else{
  $html_account = '<a href="index.php?pg=dangnhap">
                            <ion-icon class="text-dark fz-16 header-icon_item" name="person-circle-outline"></ion-icon>
                    </a>';
 }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./View/layout/assets/css/app.css">

    <title>index</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="./View/layout/assets/js/jquery.js"> -->
</head>

<body>
    <header class="container-fluid header">
        <div class="header-main container">
            <div class="row py-2 d-flex">
                <div class="header-logo col"><img src="./View/layout/images/logo-anna.svg" alt=""></div>
                <nav class="navbar navbar-expand-sm col-8">
                    <div class="collapse navbar-collapse justify-content-center align-items-center gap-2"
                        id="collapsibleNavbar">
                        <ul class="navbar-nav"></ul>
                        <li class="nav-item list-style-none"><a class="nav-link fz-08 text-dark fw-600"
                                href="index.php">TRANG
                                CHỦ </a></li>
                        <li class="nav-item list-style-none"><a class="nav-link fz-08 text-dark fw-600"
                                href="index.php?pg=gioithieu">VỀ ANNA
                            </a></li>
                        <li class="nav-item dropdown list-style-none"><a
                                class="nav-link fz-08 text-dark fw-600 dropdown-toggle" href="index.php?pg=sanpham"
                                role="button" data-bs-toggle="dropdown">SẢN PHẨM </a>
                            <ul class="dropdown-menu">
                                <li class="list-style-none"><a class="dropdown-item" href="index.php?pg=sanpham">Gọng
                                        kính </a></li>
                                <li class="list-style-none"><a class="dropdown-item" href="index.php?pg=sanpham">Kính áp
                                        tròng</a></li>
                                <li class="list-style-none"><a class="dropdown-item" href="index.php?pg=sanpham">Gọng
                                        kính trẻ em </a></li>
                                <li class="list-style-none"><a class="dropdown-item" href="index.php?pg=sanpham">Tròng
                                        kính </a></li>
                                <li class="list-style-none"><a class="dropdown-item" href="index.php?pg=sanpham">Kính
                                        râm </a></li>
                            </ul>
                        </li>
                        <li class="nav-item list-style-none"><a class="nav-link fz-08 text-dark fw-600" href="#">STORE
                            </a></li>
                        <li class="nav-item list-style-none"><a class="nav-link fz-08 text-dark fw-600" href="#">BLOG
                            </a></li>
                        <li class="nav-item list-style-none"><a class="nav-link fz-08 text-dark fw-600" href="#">HÀNH
                                TRÌNH TỰ TẾ </a></li>
                    </div>
                </nav>
                <div class="header-right col-3 d-flex align-items-center justify-content-end">
                    <div class="header-icon d-flex gap-2 align-items-center">
                        <form class="header-search d-flex gap-3" action="index.php?pg=sanpham" method="post">
                            <input class=" border-dark rounded-3 text-dark fz-1 fw-500 px-2" type="text" name="keywork"
                                placeholder="Tìm kiếm sản phẩm">
                            <input class="button-app border-0 px-1 rounded-3 " name="search" type="submit"
                                value="Tìm kiếm">
                        </form>
                        <!-- <ion-icon class="text-dark fz-16 header-icon_item" name="search-outline"></ion-icon> -->
                        <a href="index.php?pg=giohang" id="boxcart" class="header-icon_item position-relative boxcart">
                            <ion-icon class="text-dark fz-16 " name="cart-outline"></ion-icon>
                            <span class="sl-sp position-absolute text-dark fz-08"></span>
                        </a>
                        <?=$html_account?>
                        <!-- <a href="index.php?pg=dangnhap">
                            <ion-icon class="text-dark fz-16 header-icon_item" name="person-circle-outline"></ion-icon>
                        </a>
                        <a href="index.php?pg=dangnhap">
                            <ion-icon class="text-dark fz-16 header-icon_item" name="log-out-outline"></ion-icon>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </header>