-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2023 lúc 12:17 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `anna`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id_cmt` int(9) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_cmt` varchar(50) NOT NULL,
  `ho_ten` varchar(100) NOT NULL,
  `id_user` int(9) NOT NULL,
  `id_sp` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id_cmt`, `noi_dung`, `ngay_cmt`, `ho_ten`, `id_user`, `id_sp`) VALUES
(5, 'rửaerwer', '18:34:53 16/10/2023', '', 4, 4),
(6, 'hi local\r\n', '18:42:36 16/10/2023', 'Hoàng thông', 4, 4),
(7, '', '18:46:56 16/10/2023', 'Hoàng thông', 4, 4),
(8, 'lỗi vcl\r\n', '18:49:59 16/10/2023', 'Hoàng thông', 4, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(9) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `id_sp` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(9) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `mo_ta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `ten`, `mo_ta`) VALUES
(1, 'Mắt kính', ''),
(2, 'Gọng Kính ', 'Phần quan trọng của phụ kiện thời trang, giúp tạo nên diện mạo cá nhân và độc đáo cho người sử dụng.'),
(3, 'Kính áp tròng', 'test update 1'),
(4, 'Tròng kính', 'test update 2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id_don_hang` int(9) NOT NULL,
  `id_user` int(9) NOT NULL,
  `ma_donhang` varchar(100) NOT NULL,
  `ten_NN` varchar(300) DEFAULT NULL,
  `dia_chi_NN` varchar(300) DEFAULT NULL,
  `sdt_NN` int(100) DEFAULT NULL,
  `ma_KH` varchar(100) NOT NULL,
  `ten_ND` varchar(300) NOT NULL,
  `dia_chi_ND` varchar(300) NOT NULL,
  `email_ND` varchar(100) NOT NULL,
  `sdt_ND` varchar(300) NOT NULL,
  `ship` int(6) NOT NULL DEFAULT 0,
  `voucher` int(6) NOT NULL DEFAULT 0,
  `total` int(6) NOT NULL,
  `tongthanhtoan` int(9) NOT NULL,
  `pttt` tinyint(1) NOT NULL COMMENT '0: COD; 1:Thanh toán online; 3: Chuyển khoản'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`id_don_hang`, `id_user`, `ma_donhang`, `ten_NN`, `dia_chi_NN`, `sdt_NN`, `ma_KH`, `ten_ND`, `dia_chi_ND`, `email_ND`, `sdt_ND`, `ship`, `voucher`, `total`, `tongthanhtoan`, `pttt`) VALUES
(46, 75, 'annashop75-214246-19102023', '', '', 0, '', '123', '123', '123', '123', 0, 0, 0, 1110, 1),
(53, 82, 'annashop82-215748-19102023', '', '', 0, '', '', '', '', '', 0, 0, 0, 600, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id_cart` int(9) NOT NULL,
  `so_luong` int(100) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `hinh` varchar(300) NOT NULL,
  `gia` double(10,2) NOT NULL DEFAULT 0.00,
  `tong_tien` double(10,2) NOT NULL DEFAULT 0.00,
  `ngay_dat_hang` datetime NOT NULL,
  `id_don_hang` int(9) NOT NULL,
  `id_sp` int(9) NOT NULL,
  `id_user` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gio_hang`
--

INSERT INTO `gio_hang` (`id_cart`, `so_luong`, `ten`, `hinh`, `gia`, `tong_tien`, `ngay_dat_hang`, `id_don_hang`, `id_sp`, `id_user`) VALUES
(40, 1, 'Gọng kính 4', 'gongkinh4.png', 600.00, 600.00, '0000-00-00 00:00:00', 53, 4, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sp` int(9) NOT NULL,
  `ten_sp` varchar(50) NOT NULL,
  `gia` double(10,2) NOT NULL DEFAULT 0.00,
  `giam_gia` double(10,2) NOT NULL DEFAULT 0.00,
  `hinh` varchar(300) NOT NULL,
  `ngay_nhap` datetime NOT NULL,
  `mo_ta` text NOT NULL,
  `sale` int(100) NOT NULL,
  `so_luot_xem` int(100) NOT NULL,
  `ma_sp` varchar(50) NOT NULL,
  `chi_tiet` text NOT NULL,
  `new` tinyint(1) NOT NULL,
  `id_danhmuc` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `ten_sp`, `gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `sale`, `so_luot_xem`, `ma_sp`, `chi_tiet`, `new`, `id_danhmuc`) VALUES
(1, 'Gọng kính 1', 500.00, 450.00, 'gongkinh1.png', '2023-10-05 21:52:13', '', 10, 100, 'gongkinh1 ', '', 1, 2),
(2, 'Gọng kính 2', 450.00, 300.00, 'gongkinh2.png', '2023-10-05 21:58:13', '', 10, 150, 'gongkinh2', '', 1, 2),
(3, 'Gọng kính 3', 300.00, 250.00, 'gongkinh3.png', '2023-10-05 22:00:36', '', 15, 50, 'gongkinh3', '', 1, 2),
(4, 'Gọng kính 4', 600.00, 350.00, 'gongkinh4.png', '2023-10-05 22:05:13', '', 20, 150, 'gongkinh4', '', 1, 2),
(5, 'Gọng kính 5', 400.00, 300.00, 'gongkinh5.jpg', '2023-10-05 22:06:19', '', 10, 150, 'gongkinh5', '', 1, 2),
(6, 'Tròng kính 1', 555.00, 450.00, 'trongkinh1.jpg', '2023-10-12 12:28:49', '', 20, 100, 'trongkinh1', '', 1, 4),
(7, 'Tròng kính 2', 455.00, 355.00, 'trongkinh2.jpg', '2023-10-12 12:33:14', '', 20, 150, 'tronhkinh2', '', 0, 4),
(8, 'Áp tròng 1', 900.00, 165.00, 'aptrong1.png', '2023-10-12 12:34:30', '', 10, 50, 'Aptrong1', '', 1, 3),
(10, 'Mắt kính 9', 100.00, 90.00, 'gongkinh8.jpg', '0000-00-00 00:00:00', 'hey local', 100, 100, '', '', 1, 1),
(11, 'Mắt kính 10', 850.00, 800.00, 'gongkinh9.jpg', '0000-00-00 00:00:00', 'hey local', 100, 122, '', '', 0, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(9) NOT NULL,
  `ho_ten` varchar(100) NOT NULL,
  `sdt` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `dia_chi` varchar(300) DEFAULT NULL,
  `hinh` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ma_kh` varchar(100) NOT NULL,
  `vai_tro` tinyint(1) NOT NULL DEFAULT 0,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `ho_ten`, `sdt`, `email`, `dia_chi`, `hinh`, `password`, `ma_kh`, `vai_tro`, `username`) VALUES
(4, 'Hoàng thông', NULL, 'vietnamtour0@gmail.com', NULL, '', '123', '', 0, 'thongnh'),
(11, 'thongnh', '423', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest423'),
(12, 'thongnh', '111111', 'ht01252004@gmail.com', 'xfdg', '', '123456', '', 0, 'guest856'),
(13, 'thongnh', '111111', 'ht01252004@gmail.com', 'xfdg', '', '123456', '', 0, 'guest886'),
(14, 'thongnh', '111111', 'ht01252004@gmail.com', 'xfdg', '', '123456', '', 0, 'guest477'),
(15, 'thongnh', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest575'),
(35, 'tt', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest837'),
(36, 'ht01252004@gmail.com', '0868412519', 'ht01252004@gmail.com', 'ghh', '', '123456', '', 0, 'guest272'),
(37, 'ht01252004@gmail.com', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest506'),
(38, 'ht01252004@gmail.com', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest642'),
(39, 'ht01252004@gmail.com', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest218');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id_cmt`),
  ADD KEY `fk_binhluan_sanpham` (`id_sp`),
  ADD KEY `fk_binhluan_user` (`id_user`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`),
  ADD KEY `fk_brand_sanpham` (`id_sp`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_don_hang`),
  ADD KEY `fk_bill_user` (`id_user`);

--
-- Chỉ mục cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `fk_giohang_sanpham` (`id_sp`),
  ADD KEY `fk_giohang_user` (`id_user`),
  ADD KEY `fk_giohang_donhang` (`id_don_hang`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `fk_sanpham_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_cmt` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_don_hang` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id_cart` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `fk_binhluan_sanpham` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`),
  ADD CONSTRAINT `fk_binhluan_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `fk_brand_sanpham` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`);

--
-- Các ràng buộc cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `fk_bill_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `fk_giohang_donhang` FOREIGN KEY (`id_don_hang`) REFERENCES `don_hang` (`id_don_hang`),
  ADD CONSTRAINT `fk_giohang_sanpham` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
