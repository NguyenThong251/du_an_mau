-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2023 lúc 06:50 PM
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
(1, 'Mắt kính', 'Sản phẩm thiết yếu trong lĩnh vực thị trường thời trang và chăm sóc sức khỏe mắt'),
(2, 'Gọng Kính ', 'Phần quan trọng của phụ kiện thời trang, giúp tạo nên diện mạo cá nhân và độc đáo cho người sử dụng.'),
(3, 'Kính áp tròng', ''),
(4, 'Tròng kính', '');

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
(1, 27, 'annashop27-103408-16102023', '', '', 0, '', 'ht01252004@gmail.com', 'tttt', 'ht01252004@gmail.com', '0868412519', 0, 0, 0, 555, 1),
(2, 28, 'annashop28-103622-16102023', '', '', 0, '', 'lang', 'tttt', 'vietnamtour0@gmail.com', '0868412519', 0, 0, 0, 555, 1),
(3, 29, 'annashop29-103700-16102023', '', '', 0, '', 'ht01252004@gmail.com', 'tttt', 'ht01252004@gmail.com', '0868412519', 0, 0, 0, 555, 1),
(4, 30, 'annashop30-103817-16102023', '', '', 0, '', 'khong', 'xfdg', 'thongnhps28514@fpt.edu', '345345', 0, 0, 0, 555, 1),
(5, 31, 'annashop31-104212-16102023', '', '', 0, '', 'thongnh', 'xfdg', 'admin@gmail.com', '0868412519', 0, 0, 0, 555, 1),
(6, 32, 'annashop32-105136-16102023', '', '', 0, '', 'thongnh', 'tttt', 'ht01252004@gmail.com', '0868412519', 0, 0, 0, 555, 1),
(7, 33, 'annashop33-105632-16102023', '', '', 0, '', 'thongnh', 'tttt', 'ht01252004@gmail.com', '0868412519', 0, 0, 0, 555, 1),
(8, 34, 'annashop34-110401-16102023', '', '', 0, '', 'skt', 'tttt', 'ht01252004@gmail.com', '0868412519', 0, 0, 0, 555, 1),
(9, 35, 'annashop35-111339-16102023', '', '', 0, '', 'tt', 'tttt', 'ht01252004@gmail.com', '0868412519', 0, 0, 0, 555, 1),
(10, 36, 'annashop36-111428-16102023', '', '', 0, '', 'ht01252004@gmail.com', 'ghh', 'ht01252004@gmail.com', '0868412519', 0, 0, 0, 555, 1),
(11, 37, 'annashop37-111553-16102023', '', '', 0, '', 'ht01252004@gmail.com', 'tttt', 'ht01252004@gmail.com', '0868412519', 0, 0, 0, 555, 1),
(12, 38, 'annashop38-111630-16102023', '', '', 0, '', 'ht01252004@gmail.com', 'tttt', 'ht01252004@gmail.com', '0868412519', 0, 0, 0, 555, 1),
(13, 39, 'annashop39-111916-16102023', '', '', 0, '', 'ht01252004@gmail.com', 'tttt', 'ht01252004@gmail.com', '0868412519', 0, 0, 0, 555, 1),
(14, 40, 'annashop40-112120-16102023', '', '', 0, '', 'thongnh', 'tttt', 'ht01252004@gmail.com', '0868412519', 0, 0, 0, 1110, 1),
(15, 41, 'annashop41-112154-16102023', '', '', 0, '', 'ht01252004@gmail.com', 'tttt', 'ht01252004@gmail.com', '0868412519', 0, 0, 0, 1110, 1),
(16, 42, 'annashop42-112906-16102023', '', '', 0, '', 'thongnh', 'tttt', 'ht01252004@gmail.com', '0868412519', 0, 0, 0, 1110, 1),
(17, 43, 'annashop43-113714-16102023', '', '', 0, '', 'ht01252004@gmail.com', 'tttt', 'ht01252004@gmail.com', '0868412519', 0, 0, 0, 900, 1);

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
(8, 'Áp tròng 1', 900.00, 165.00, 'aptrong1.png', '2023-10-12 12:34:30', '', 10, 50, 'Aptrong1', '', 1, 3);

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
(1, '', '', 'ht01252004@gmail.com', '', '', '1cc39ffd758234422e1f75beadfc5fb2', '', 0, 'thongnh'),
(2, '', NULL, 'ht01252004@gmail.com', NULL, '', 'b59c67bf196a4758191e42f76670ceba', '', 0, 'thongnh'),
(3, '', NULL, 'ht01252004@gmail.com', NULL, '', '202cb962ac59075b964b07152d234b70', '', 0, '123'),
(4, 'Hoàng thông', NULL, 'vietnamtour0@gmail.com', NULL, '', '123', '', 0, 'thongnh'),
(5, '', '', 'datphan@gmail.com', '', '', '123456', '', 0, 'datphan99'),
(10, '', NULL, '', NULL, '', 'admin123', '', 1, 'admin123'),
(11, 'thongnh', '423', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest423'),
(12, 'thongnh', '111111', 'ht01252004@gmail.com', 'xfdg', '', '123456', '', 0, 'guest856'),
(13, 'thongnh', '111111', 'ht01252004@gmail.com', 'xfdg', '', '123456', '', 0, 'guest886'),
(14, 'thongnh', '111111', 'ht01252004@gmail.com', 'xfdg', '', '123456', '', 0, 'guest477'),
(15, 'thongnh', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest575'),
(16, 'thongnh', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest851'),
(17, 'thongnh', '0868412519', 'ht01252004@gmail.com', 'ádws', '', '123456', '', 0, 'guest254'),
(18, 'thongnh', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest667'),
(19, 'thongnh', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest706'),
(20, 'thongnh', '0868412519', 'vietnamtour0@gmail.com', 'xfdg', '', '123456', '', 0, 'guest649'),
(21, 'thongnh', '0868412519', 'nguyentrongphuc03@gmail.com', 'gfdgfdg', '', '123456', '', 0, 'guest341'),
(22, 'thongnh', '0868412519', 'thongnhps28514@fpt.edu', 'cc', '', '123456', '', 0, 'guest755'),
(23, 'ht', '345345', 'vietnamtour0@gmail.com', 'xfdg', '', '123456', '', 0, 'guest76'),
(24, 'ht01252004@gmail.com', '0868412519', 'vietnamtour0@gmail.com', 'xfdg', '', '123456', '', 0, 'guest91'),
(25, 'ht01252004@gmail.com', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest858'),
(26, 'ht01252004@gmail.com', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest939'),
(27, 'ht01252004@gmail.com', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest426'),
(28, 'lang', '0868412519', 'vietnamtour0@gmail.com', 'tttt', '', '123456', '', 0, 'guest515'),
(29, 'ht01252004@gmail.com', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest883'),
(30, 'khong', '345345', 'thongnhps28514@fpt.edu', 'xfdg', '', '123456', '', 0, 'guest794'),
(31, 'thongnh', '0868412519', 'admin@gmail.com', 'xfdg', '', '123456', '', 0, 'guest704'),
(32, 'thongnh', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest984'),
(33, 'thongnh', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest931'),
(34, 'skt', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest519'),
(35, 'tt', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest837'),
(36, 'ht01252004@gmail.com', '0868412519', 'ht01252004@gmail.com', 'ghh', '', '123456', '', 0, 'guest272'),
(37, 'ht01252004@gmail.com', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest506'),
(38, 'ht01252004@gmail.com', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest642'),
(39, 'ht01252004@gmail.com', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest218'),
(40, 'thongnh', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest922'),
(41, 'ht01252004@gmail.com', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest583'),
(42, 'thongnh', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest350'),
(43, 'ht01252004@gmail.com', '0868412519', 'ht01252004@gmail.com', 'tttt', '', '123456', '', 0, 'guest395');

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
  MODIFY `id_danhmuc` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_don_hang` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id_cart` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

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
  ADD CONSTRAINT `fk_giohang_sanpham` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`),
  ADD CONSTRAINT `fk_giohang_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
