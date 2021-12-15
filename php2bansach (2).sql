-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 03:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php2bansach`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luann`
--

CREATE TABLE `binh_luann` (
  `ma_bl` int(11) NOT NULL,
  `noi_dung` varchar(2000) NOT NULL,
  `ma_hh` int(11) DEFAULT NULL,
  `ma_kh` int(11) DEFAULT NULL,
  `ngay_bl` datetime NOT NULL,
  `an_hien` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(50) DEFAULT NULL,
  `don_gia` float DEFAULT NULL,
  `giam_gia` float DEFAULT NULL,
  `Hinh` varchar(255) DEFAULT NULL,
  `ngay_nhap` datetime DEFAULT NULL,
  `mo_ta` text DEFAULT NULL,
  `dac_biet` tinyint(1) DEFAULT NULL,
  `so_luot_xem` int(11) NOT NULL DEFAULT 0,
  `ma_loai` int(11) DEFAULT NULL,
  `an_hien` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `Hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loai`, `an_hien`) VALUES
(24, '4', 4, 4, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.audio_book/0/0/0/30.jpg?v=1&w=140&h=205', '0000-00-00 00:00:00', '4', 0, 0, 15, 0),
(25, 'ccccc', 213, 21, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.audio_book/0/0/0/30.jpg?v=1&w=140&h=205', '0000-00-00 00:00:00', 'w', 3, 0, 6, 1),
(26, 'iPhone XS Max m1', 213, 21, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.audio_book/0/0/0/30.jpg?v=1&w=140&h=205', '0000-00-00 00:00:00', 'w', 0, 0, 6, 1),
(40, 'Thay đổi cuộc sống với nhân số học', 100000, 12, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/30228.jpg?v=1&w=200&h=292', '0000-00-00 00:00:00', '123', 3, 0, 17, 0),
(53, 'GIÚP CON NÓI “KHÔNG” VỚI ĐƯỜNG', 119200, 0, 'https://newshop.vn/public/uploads/products/43947/sach-giup-con-noi-khong-voi-duong-1.jpg', NULL, 'Giúp Con Nói “Không” Với Đường - Cuốn sách sẽ mang đến cho các bậc phụ huynh những hướng dẫn cụ thể và những sự thật kinh ngạc về đường, tác động của đường đến với cơ thể và trí óc trẻ, chỉ ra những tiến bộ có thể thấy rõ rệt như trí nhớ được tăng cường, khả năng học tập và sức đề kháng khi chúng ta cắt giảm đường.', 2, 0, 93, NULL),
(54, 'ASTÉRIX - ASTÉRIX LÀM LÍNH LA MÃ', 72000, 0, 'https://newshop.vn/public/uploads/products/44146/sach-asterix-asterix-lam-linh-la-ma.jpg', NULL, 'Astérix - Astérix Làm Lính La Mã - Obélix đem lòng cảm mến nàng Falbala xinh đẹp. Mối tương tư vừa mới chớm nở đã nhanh chóng lụi tàn vì nàng đã có hôn ước. Nhưng rồi tai họa bất chợt đổ xuống khi Tragicomix – vị hôn phu của Falbala, bị chính quyền La Mã ép tòng quân.', 1, 0, 6, NULL),
(55, 'VUI VẺ ĐẾN TRƯỜNG - CHO TRẺ SẮP ĐI HỌC', 107100, NULL, 'https://newshop.vn/public/uploads/products/42780/sach-vui-ve-den-truong-cho-tre-sap-di-hoc.jpg', NULL, 'Vui Vẻ Đến Trường - Cho Trẻ Sắp Đi Học - Là một sê-ri sách rất phổ cập ở Đức, được hầu như mọi trẻ em Đức biết đến và yêu thích, hộp sách nhỏ xinh này chính là một “giáo trình” nhỏ hỗ trợ các em sắp vào lớp 1.', 0, 0, 93, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `Tongtien` float NOT NULL,
  `Ngaymua` date NOT NULL,
  `trangthai` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id_hoadon`, `id_khachhang`, `Tongtien`, `Ngaymua`, `trangthai`) VALUES
(58, 1, 213, '0000-00-00', 2),
(114, 1, 100643, '0000-00-00', 1),
(116, 64, 217, '0000-00-00', 0),
(133, 1, 107100, '2021-12-08', 1),
(134, 1, 107100, '2021-12-08', 2),
(137, 1, 179100, '2021-12-08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hoadonchitiet`
--

CREATE TABLE `hoadonchitiet` (
  `STT` int(11) NOT NULL,
  `SoHD` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoadonchitiet`
--

INSERT INTO `hoadonchitiet` (`STT`, `SoHD`, `MaSP`, `SoLuong`, `DonGia`) VALUES
(14, 58, 26, 1, 213),
(168, 114, 26, 3, 639),
(169, 114, 40, 1, 100000),
(170, 114, 24, 1, 4),
(174, 116, 24, 1, 4),
(175, 116, 26, 1, 213),
(186, 133, 55, 1, 107100),
(187, 134, 55, 1, 107100),
(190, 137, 55, 1, 107100),
(191, 137, 54, 1, 72000);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `kich_hoat` tinyint(1) DEFAULT 1,
  `hinh` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `vai_tro` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `username`, `mat_khau`, `ho_ten`, `kich_hoat`, `hinh`, `email`, `vai_tro`) VALUES
(1, 'admin', '1', 'Trần Trọng Nghĩa', 1, 'NGhia.jpg', 'nghiattps13085@fpt.edu.vn', 1),
(4, 'fptst9602', '123', 'Võ Như', 0, '0', 'Nhupgai@gmail.com', 0),
(7, 'trongnghia', '1123', 'Trần Trọng Nghĩa', 0, '0', 'nghiattps13085@gmail.com', 0),
(56, 'admin2', '123', 'Tran Trong Nghia', 1, NULL, 'ifngloveme@gmail.com', 1),
(64, 'nghia', '1', 'Nghĩa cu to', 1, NULL, 'ifngloveme@gmail.com', 0),
(69, 'test', '123', 'test', 1, NULL, 'test@gmail.com', 0),
(70, 'okee', '123', 'okeeee', 1, NULL, 'nghia@gmail.com', 0),
(71, 'tesst', '123', 'tesst', 1, NULL, 'tesst@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loai_hang`
--

CREATE TABLE `loai_hang` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loai_hang`
--

INSERT INTO `loai_hang` (`ma_loai`, `ten_loai`) VALUES
(6, 'Kinh dị'),
(15, 'Kinh doanh'),
(17, 'Ngôn tình'),
(86, 'Chính trị – pháp luật'),
(87, 'Khoa học công nghệ – Kinh tế'),
(88, 'Văn học nghệ thuật'),
(89, 'Văn hóa xã hội – Lịch sử'),
(90, 'Giáo trình'),
(91, 'Truyện, tiểu thuyết'),
(92, 'Tâm lý, tâm linh, tôn giáo'),
(93, 'Thiếu nhi');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_02_033516_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('025c2d01-7a6a-4b10-9b31-1c6ee57ed844', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"t\\u00e2m l\\u00fd\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 04:13:34', '2021-12-02 04:13:34', '2021-12-02 04:13:34'),
('0496aa0e-e1a9-4871-aa55-91415de00223', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"123\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 03:47:03', '2021-12-02 03:47:03', '2021-12-02 03:47:03'),
('06e2b43d-9990-4f0c-b993-423cf406fcea', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"1234\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 03:36:10', '2021-12-02 03:20:14', '2021-12-02 03:36:10'),
('0c7eb0a3-6c6a-416f-b593-590fe05cc753', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"oke\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 03:18:26', '2021-12-02 03:18:25', '2021-12-02 03:18:26'),
('0ef6a8dc-af57-4324-9ecb-440dceb52375', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"123\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 03:36:10', '2021-12-02 03:20:11', '2021-12-02 03:36:10'),
('14919bcb-b306-44af-b497-f8c85f03c79f', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"1234\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 00:44:04', '2021-12-02 00:44:04', '2021-12-02 00:44:04'),
('16431e36-080e-4df7-aa2d-65e2594989e6', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"1244\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 03:49:17', '2021-12-02 03:49:17', '2021-12-02 03:49:17'),
('19c68a01-a98c-4aa7-b009-85ed828da7e4', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"Truy\\u1ec7n, ti\\u1ec3u thuy\\u1ebft\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-04 21:53:24', '2021-12-04 21:53:24', '2021-12-04 21:53:24'),
('260e174a-4e8d-4a04-8fc4-466d7f0c1b2c', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"V\\u0103n h\\u1ecdc ngh\\u1ec7 thu\\u1eadt\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-04 21:53:02', '2021-12-04 21:53:02', '2021-12-04 21:53:02'),
('33ea5869-bd36-4ee8-8c74-3391c9f3011c', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"Nghia Tran\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 03:36:16', '2021-12-02 03:36:16', '2021-12-02 03:36:16'),
('3e24b158-d000-4789-bb52-ea4deb72e9e8', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"23\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 03:36:10', '2021-12-02 03:24:28', '2021-12-02 03:36:10'),
('5d5c2198-3cf3-4ec9-bab1-05e448ddefdc', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"oke\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 03:50:08', '2021-12-02 03:50:07', '2021-12-02 03:50:08'),
('6652407d-dfe1-45d0-bfa6-02e28dc93431', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"123\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 03:36:10', '2021-12-02 03:32:03', '2021-12-02 03:36:10'),
('72f47cb2-45b5-448d-9a87-e51bfe051aef', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"12314\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 03:10:59', '2021-12-02 03:10:59', '2021-12-02 03:10:59'),
('871f6167-fe6c-402e-8974-69713016ae29', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"123\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 03:43:52', '2021-12-02 03:43:52', '2021-12-02 03:43:52'),
('a4410e93-e11b-4795-adbf-4520e60b76a9', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"okee\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 03:52:03', '2021-12-02 03:52:03', '2021-12-02 03:52:03'),
('a6c13e52-32a0-439e-ac75-4bdc1a1a2703', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"123\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 03:48:47', '2021-12-02 03:48:47', '2021-12-02 03:48:47'),
('a82865d3-8b64-4877-a5b0-30a2fddc3cee', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"cc\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 00:46:10', '2021-12-02 00:46:10', '2021-12-02 00:46:10'),
('a898f368-fdbd-425c-99c1-0fde822b52f5', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"V\\u0103n h\\u00f3a x\\u00e3 h\\u1ed9i \\u2013 L\\u1ecbch s\\u1eed\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-04 21:53:11', '2021-12-04 21:53:11', '2021-12-04 21:53:11'),
('c10f03de-9854-456f-9f42-13d8300eb198', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"Gi\\u00e1o tr\\u00ecnh\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-04 21:53:18', '2021-12-04 21:53:18', '2021-12-04 21:53:18'),
('cfc5daf9-d7bf-4fae-a0c6-09461e33a49e', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"Ch\\u00ednh tr\\u1ecb \\u2013 ph\\u00e1p lu\\u1eadt\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-04 21:52:45', '2021-12-04 21:52:45', '2021-12-04 21:52:45'),
('d24b5e69-065b-468b-b228-cb91af18a437', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"oke\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-04 21:37:58', '2021-12-04 21:37:58', '2021-12-04 21:37:58'),
('d905c736-08a3-4f48-b9e2-981af500ea4c', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"213\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 03:45:12', '2021-12-02 03:45:12', '2021-12-02 03:45:12'),
('e7b00e42-b59c-4c3e-a20d-3140c79111ed', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"9_Tran Trong Nghia\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 03:36:23', '2021-12-02 03:36:22', '2021-12-02 03:36:23'),
('e8a83dc6-168f-4e33-95a0-094b7d3f9e95', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"22\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 03:53:32', '2021-12-02 03:53:32', '2021-12-02 03:53:32'),
('ea510ce4-efd2-44e6-b4a8-3e42e4f0f1c1', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"Khoa h\\u1ecdc c\\u00f4ng ngh\\u1ec7 \\u2013 Kinh t\\u1ebf\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-04 21:52:55', '2021-12-04 21:52:54', '2021-12-04 21:52:55'),
('fe92a7e3-c320-4a40-8f93-8a709d335a44', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"Thi\\u1ebfu nhi\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-04 21:53:59', '2021-12-04 21:53:59', '2021-12-04 21:53:59'),
('feda9dc3-ef53-4150-a6b7-5a437c9e0295', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"123\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-02 03:36:10', '2021-12-02 03:27:15', '2021-12-02 03:36:10'),
('ff7ce7d2-0b75-416f-b601-b874b8f8c45d', 'App\\Notifications\\thongbao', 'App\\Models\\User', 1, '{\"name\":\"T\\u00e2m l\\u00fd, t\\u00e2m linh, t\\u00f4n gi\\u00e1o\",\"action\":\"lo\\u1ea1i h\\u00e0ng\"}', '2021-12-04 21:53:30', '2021-12-04 21:53:30', '2021-12-04 21:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Trần Trọng Nghĩa', 'ifngloveme@gmail.com', NULL, '12345678qq', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luann`
--
ALTER TABLE `binh_luann`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `fk_bl2_kh` (`ma_kh`),
  ADD KEY `fk_bl2_hh` (`ma_hh`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `fk_hh_lh` (`ma_loai`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoadon`),
  ADD KEY `id_khachhang` (`id_khachhang`) USING BTREE;

--
-- Indexes for table `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD PRIMARY KEY (`STT`),
  ADD KEY `SoHD` (`SoHD`) USING BTREE,
  ADD KEY `MaSP` (`MaSP`) USING BTREE;

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Indexes for table `loai_hang`
--
ALTER TABLE `loai_hang`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luann`
--
ALTER TABLE `binh_luann`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `loai_hang`
--
ALTER TABLE `loai_hang`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luann`
--
ALTER TABLE `binh_luann`
  ADD CONSTRAINT `fk_bl2_hh` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `fk_bl2_kh` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Constraints for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `fk_hh_lh` FOREIGN KEY (`ma_loai`) REFERENCES `loai_hang` (`ma_loai`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Constraints for table `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD CONSTRAINT `hoadonchitiet_ibfk_1` FOREIGN KEY (`SoHD`) REFERENCES `hoadon` (`id_hoadon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoadonchitiet_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `hang_hoa` (`ma_hh`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
