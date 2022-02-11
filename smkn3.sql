-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2022 pada 15.04
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkn3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) DEFAULT NULL,
  `kompetensi` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `judul`, `tanggal`, `waktu_mulai`, `waktu_selesai`, `deskripsi`, `lokasi`, `role`, `kompetensi`, `created_at`, `updated_at`) VALUES
(3, 'Pembagian Laptop', '2022-02-09', '14:22:00', '16:00:00', 'Cuman bagi bagi laptop', 'Bogor', 0, 3, '2022-02-09 07:49:08', '2022-02-09 07:49:08'),
(4, 'Pengambilan Kartu Teknik', '2022-02-09', '14:22:00', '16:22:00', 'Pengambilan Kartu Teknik', 'Bogor', 1, 3, '2022-02-09 07:49:49', '2022-02-09 07:49:49'),
(5, 'Libero dolor odit do', '1995-09-19', '05:08:00', '00:28:00', 'Fugiat amet tempore', 'Dolorem qui est fug', 0, 4, '2022-02-09 19:15:33', '2022-02-09 19:15:33'),
(6, 'Et molestiae adipisi', '1992-06-28', '14:07:00', '13:12:00', 'Incididunt totam deb', 'Aspernatur modi aut', 1, 6, '2022-02-09 19:15:45', '2022-02-09 19:15:45'),
(7, 'Kegiatan maulid nabi', '1998-01-12', '15:23:00', '01:10:00', 'Enim esse deleniti', 'Voluptatibus volupta', 0, 3, '2022-02-09 19:16:01', '2022-02-11 00:53:15'),
(8, 'Pengambilan kartu tkj', '2022-02-10', '15:29:00', '15:35:00', 'Ambil kartu tkj', 'LAB TKJ 1', 1, 3, '2022-02-10 01:30:11', '2022-02-10 01:30:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompetensi` int(11) DEFAULT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id`, `judul`, `kompetensi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'top-banner', 3, '1644470440-Desain tanpa judul (6).png', '2022-02-09 08:56:50', '2022-02-09 22:20:40'),
(2, 'top-banner', 3, '1644469722-TERANG.png', '2022-02-09 20:02:10', '2022-02-09 22:08:42'),
(3, 'top-banner', 4, '1644469999-baca. belajar. tahu..png', '2022-02-09 22:13:19', '2022-02-09 22:13:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` bigint(20) UNSIGNED NOT NULL,
  `kompetensi` int(11) DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `content`, `categories`, `kompetensi`, `gambar`, `created_at`, `updated_at`) VALUES
(5, 'Ketua dan wakil OSIS SMKN 3 BOGOR', '<div>\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non atque ipsam neque, numquam maxime facilis mollitia et dolores fugiat impedit nulla molestiae eveniet inventore debitis odio molestias, voluptatibus, deserunt dolore eaque sequi? Nam modi illo laboriosam aspernatur corrupti velit repudiandae beatae, temporibus corporis ipsum pariatur, incidunt vel doloribus, aliquid iste?\r\n<div>\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non atque ipsam neque, numquam maxime facilis mollitia et dolores fugiat impedit nulla moles</div>\r\n<div>&nbsp;</div>\r\n<div>tiae eveniet inventore debitis odio molestias, voluptatibus, deserunt dolore eaque sequi? Nam modi illo laboriosam aspernatur corrupti velit repudiandae beatae, temporibus corporis ipsum pariatur, incidunt vel doloribus, aliquid iste?</div>\r\n</div>\r\n</div>\r\n</div>', 10, 3, '1644459135-Web capture_9-2-2022_22838_profilosiskepati3.carrd.co.jpeg', '2022-02-09 19:12:15', '2022-02-11 00:47:13'),
(6, 'Karya terbaru jurusan Tata Busana', '<div>\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non atque ipsam neque, numquam maxime facilis mollitia et dolores fugiat impedit nulla molestiae eveniet inventore debitis odio molestias, voluptatibus, deserunt dolore eaque sequi? Nam modi illo laboriosam aspernatur corrupti velit repudiandae beatae, temporibus corporis ipsum pariatur, incidunt vel doloribus, aliquid iste?\r\n<div>\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non atque ipsam neque, numquam maxime facilis mollitia et dolores fugiat impedit nulla moles</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>tiae eveniet inventore debitis odio molestias, voluptatibus, deserunt dolore eaque sequi? Nam modi illo laboriosam aspernatur corrupti velit repudiandae beatae, temporibus corporis ipsum pariatur, incidunt vel doloribus, aliquid iste?</div>\r\n</div>\r\n</div>\r\n</div>', 9, 3, '1644565756-b2-removebg-preview.png', '2022-02-09 19:15:02', '2022-02-11 00:49:29'),
(7, 'Jurusan TKJ', '<div>\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non atque ipsam neque, numquam maxime facilis mollitia et dolores fugiat impedit nulla molestiae eveniet inventore debitis odio molestias, voluptatibus, deserunt dolore eaque sequi? Nam modi illo laboriosam aspernatur corrupti velit repudiandae beatae, temporibus corporis ipsum pariatur, incidunt vel doloribus, aliquid iste?\r\n<div>\r\n<div>Lorem ipsum dolor sit amet conse</div>\r\n<div>&nbsp;</div>\r\n<div>ctetur adipisicing elit. Non atque ipsam neque, numquam maxime facilis mollitia et dolores fugiat impedit nulla molestiae eveniet inventore debitis odio molestias, voluptatibus, deserunt dolore eaque sequi? Nam modi illo laboriosam aspernatur corrupti velit repudiandae beatae, temporibus corporis ipsum pariatur, incidunt vel doloribus, aliquid iste?</div>\r\n</div>\r\n</div>\r\n</div>', 9, 3, '1644565434-IMG_1679.JPG', '2022-02-11 00:43:54', '2022-02-11 00:44:39'),
(8, 'SMKN 3 KOTA BOGOR Mengadakan LDKS 2021', '<div>\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non atque ipsam neque, numquam maxime facilis mollitia et dolores fugiat impedit nulla molestiae eveniet inventore debitis odio molestias, voluptatibus, deserunt dolore eaque sequi? Nam modi illo laboriosam aspernatur corrupti velit repudiandae beatae, temporibus corporis ipsum pariatur, incidunt vel doloribus, aliquid iste?\r\n<div>\r\n<div>Lorem ipsum dolor</div>\r\n<div>&nbsp;</div>\r\n<div>sit amet consectetur adipisicing elit. Non atque ipsam neque, numquam maxime facilis mollitia et dolores fugiat impedit nulla molestiae eveniet inventore debitis odio molestias, voluptatibus, deserunt dolore eaque sequi? Nam modi illo laboriosam aspernatur corrupti velit repudiandae beatae, temporibus corporis ipsum pariatur, incidunt vel doloribus, aliquid iste?</div>\r\n</div>\r\n</div>\r\n</div>', 9, 3, '1644565560-ldks1.jpg', '2022-02-11 00:46:00', '2022-02-11 00:46:00'),
(9, 'Apa itu jurusan Kuliner?', '<div>\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptate nostrum mollitia sunt. Sed cum sint, minus architecto delectus in neque nisi esse deserunt qui enim amet fugit reprehenderit, inventore veritatis. Ullam eaque quas nisi odio, re</div>\r\n<div>&nbsp;</div>\r\n<div>m laudantium voluptatum repellendus numquam optio sint dolor, officia illum magni nostrum, unde quaerat? Suscipit consequuntur dolorem illo tempore quaerat porro commodi, asperiores temporibus. Quidem vel odit natus provident quas blanditiis eligendi amet obcaecati!</div>\r\n<div>\r\n<div>\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptate nostrum mollitia sunt. Sed cum sint, minus architecto delectus in neque nisi esse deserunt qui enim</div>\r\n<div>&nbsp;</div>\r\n<div>amet fugit reprehenderit, inventore veritatis. Ullam eaque quas nisi odio, rem laudantium voluptatum repellendus numquam optio sint dolor, officia illum magni nostrum, unde quaerat? Suscipit consequuntur dolorem illo tempore quaerat porro commodi, asperiores temporibus. Quidem vel odit natus provident quas blanditiis eligendi amet obcaecati!</div>\r\n</div>\r\n</div>\r\n</div>', 10, 5, '1644587853-WhatsApp Image 2021-12-24 at 14.53.21 (1).jpeg', '2022-02-11 06:57:33', '2022-02-11 06:57:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(9, 'Biasa', '2022-02-09 07:30:14', '2022-02-09 07:30:14'),
(10, 'Sedang', '2022-02-09 07:30:22', '2022-02-11 06:52:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstrakurikuler`
--

CREATE TABLE `ekstrakurikuler` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembina` bigint(20) UNSIGNED NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ekstrakurikuler`
--

INSERT INTO `ekstrakurikuler` (`id`, `nama`, `jadwal`, `pembina`, `thumb`, `created_at`, `updated_at`) VALUES
(4, 'Pramuka', 'kamis & jumat', 3, '1644566251-WhatsApp Image 2022-02-11 at 11.46.42.jpeg', '2022-02-11 00:57:31', '2022-02-11 00:57:31'),
(5, 'Paskibra', 'senin & jumat', 3, '1644566809-🌈🌈.jfif', '2022-02-11 01:06:49', '2022-02-11 01:06:49'),
(6, 'Rohis', 'rabu, kamis & jumat', 3, '1644567012-alq.jpg', '2022-02-11 01:10:12', '2022-02-11 01:10:12'),
(7, 'PMR', 'Senin', 3, '1644567068-PMR.jfif', '2022-02-11 01:11:08', '2022-02-11 01:11:08'),
(8, 'Pencak Silat', 'Rabu', 3, '1644567184-ncak.jpg', '2022-02-11 01:13:04', '2022-02-11 01:13:04'),
(9, 'Taekwondo', 'Kamis', 3, '1644567264-tak.jpg', '2022-02-11 01:14:24', '2022-02-11 01:14:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `album_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompetensi` int(11) DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `album_name`, `kompetensi`, `image`, `created_at`, `updated_at`) VALUES
(17, 'Album Kuliner', 5, '[\"1644562796WhatsApp Image 2021-12-24 at 14.53.19.jpeg\",\"1644562796WhatsApp Image 2021-12-24 at 14.53.20 (1).jpeg\",\"1644562796WhatsApp Image 2021-12-24 at 14.53.20 copy.jpg\",\"1644562796WhatsApp Image 2021-12-24 at 14.53.20.jpeg\",\"1644562796WhatsApp Image 2021-12-24 at 14.53.21 (1).jpeg\",\"1644562796WhatsApp Image 2021-12-24 at 14.53.21 (2).jpeg\",\"1644562796WhatsApp Image 2021-12-24 at 14.53.21.jpeg\",\"1644562796WhatsApp Image 2021-12-24 at 14.53.22 (1).jpeg\",\"1644562796WhatsApp Image 2021-12-24 at 14.53.22.jpeg\",\"1644562796WhatsApp Image 2021-12-24 at 14.53.23 (1).jpeg\",\"1644562796WhatsApp Image 2021-12-24 at 14.53.23.jpeg\",\"1644562796WhatsApp Image 2021-12-24 at 14.53.24 (1).jpeg\",\"1644562796WhatsApp Image 2021-12-24 at 14.53.24.jpeg\",\"1644562796WhatsApp Image 2021-12-24 at 14.53.25 (1).jpeg\",\"1644562796WhatsApp Image 2021-12-24 at 14.53.25.jpeg\"]', '2022-02-10 23:59:56', '2022-02-11 00:01:48'),
(19, 'Album Perhotelan', 7, '[\"1644563264IMG_3989.JPG\",\"1644563264IMG_3995.JPG\",\"1644563264IMG_4008.JPG\",\"1644563264IMG_4009.JPG\",\"1644563264IMG_4032.JPG\",\"1644563264IMG_4050.JPG\",\"1644563264IMG_4053.JPG\",\"1644563264IMG_4056.JPG\",\"1644563397IMG_0060.JPG\",\"1644563397IMG_0098.JPG\",\"1644563397IMG_0112.JPG\",\"1644563397IMG_0114.JPG\",\"1644563397IMG_0124.JPG\",\"1644563397IMG_0138.JPG\"]', '2022-02-11 00:07:44', '2022-02-11 00:09:57'),
(20, 'Album Tata Busana', 4, '[\"1644563817b2.jpg\",\"1644563817b2-removebg-preview.png\",\"1644563817cempal.jpg\",\"1644563817Daster copy.jpg\",\"1644563817Daster.jpg\",\"1644563817Daster-removebg-preview.png\",\"1644563817fototas.jpg\",\"1644563817fototas-removebg-preview__1_-removebg-preview.png\",\"1644563817IMG_3849.JPG\",\"1644563817IMG_3849-removebg-preview.png\",\"1644563817IMG_3851.JPG\",\"1644563817IMG_3853.JPG\"]', '2022-02-11 00:16:57', '2022-02-11 00:19:41'),
(21, 'Album Tata Kecantikan', 6, '[\"1644564095IMG_3818 copy.jpg\",\"1644564095IMG_3818.JPG\",\"1644564095IMG_3820.JPG\",\"1644564095IMG_3824.JPG\",\"1644564095IMG_3827.JPG\",\"1644564095IMG_3827-removebg-preview.png\",\"1644564095IMG_3828.JPG\",\"1644564095IMG_3829.JPG\",\"1644564095IMG_3829-removebg-preview.png\",\"1644564095IMG_3838.JPG\",\"1644564095pewarnaan artistik.jpg\"]', '2022-02-11 00:21:35', '2022-02-11 01:18:10'),
(22, 'Album TKJ', NULL, '[\"1644564460IMG_1633.JPG\",\"1644564460IMG_1651.JPG\",\"1644564460IMG_1677.JPG\",\"1644564460IMG_1679.JPG\",\"1644564460IMG_1681.JPG\",\"1644564460IMG_1750.JPG\",\"1644564460IMG_1762.JPG\",\"1644564460IMG_1766.JPG\"]', '2022-02-11 00:27:40', '2022-02-11 00:27:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman_statis`
--

CREATE TABLE `halaman_statis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `halaman_statis`
--

INSERT INTO `halaman_statis` (`id`, `title`, `seo_title`, `content`, `created_at`, `updated_at`) VALUES
(2, 'Cara memasak', 'cara-memasak', '<p>ANSAN GREENERS FC</p>', '2022-02-09 22:59:41', '2022-02-09 22:59:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kompetensi_keahlians`
--

CREATE TABLE `kompetensi_keahlians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kaprog_id` bigint(20) UNSIGNED NOT NULL,
  `sambutan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kompetensi_keahlians`
--

INSERT INTO `kompetensi_keahlians` (`id`, `nama`, `kaprog_id`, `sambutan`, `slug`, `tentang`, `thumb`, `created_at`, `updated_at`) VALUES
(3, 'TKJ', 3, '<p>HAIII Selamat datang di TKJ</p>', 'tkj', '<p>TKJ adalah gatau</p>', '1644416445-TKJ-760x490.jpg', '2022-02-09 07:20:45', '2022-02-11 00:35:50'),
(4, 'Tata Busana', 3, '<p>Tata Busana</p>', 'tata_busana', '<p>Tata Busana</p>', '1644564861-b2-removebg-preview.png', '2022-02-09 07:52:13', '2022-02-11 00:34:21'),
(5, 'Kuliner', 3, '<p>Tata Boga</p>', 'Kuliner', '<p>Tata Boga</p>', '1644564596-WhatsApp Image 2021-12-24 at 14.53.23.jpeg', '2022-02-09 07:52:44', '2022-02-11 00:29:56'),
(6, 'Tata Kecantikan', 3, '<p>Perhotelan</p>', 'tata-kencantikan', '<p>Perhotelan</p>', '1644564937-IMG_3815.jpg', '2022-02-09 07:54:03', '2022-02-11 00:35:37'),
(7, 'Perhotelan', 3, '<p>Perhotelana</p>', 'Perhotelan', '<p>Perhotelana</p>', '1644564821-IMG_4008.jpg', '2022-02-09 22:33:54', '2022-02-11 00:33:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `link`
--

CREATE TABLE `link` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `link`
--

INSERT INTO `link` (`id`, `nama`, `link`, `created_at`, `updated_at`) VALUES
(2, 'alamat', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15854.041768026766!2d106.8065119!3d-6.5832888!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x15ae2b0a1aa5a4d9!2sSMKN%203%20Kota%20Bogor!5e0!3m2!1sid!2sid!4v1644417211116!5m2!1sid!2sid', '2022-02-09 07:34:04', '2022-02-09 07:34:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maps`
--

CREATE TABLE `maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `embed_maps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `maps`
--

INSERT INTO `maps` (`id`, `nama`, `embed_maps`, `created_at`, `updated_at`) VALUES
(2, 'alamat', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15854.041768026766!2d106.8065119!3d-6.5832888!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x15ae2b0a1aa5a4d9!2sSMKN%203%20Kota%20Bogor!5e0!3m2!1sid!2sid!4v1644417211116!5m2!1sid!2sid', '2022-02-09 08:54:15', '2022-02-09 08:54:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_06_035722_create_slider_table', 1),
(6, '2022_01_06_035752_create_banner_table', 1),
(7, '2022_01_06_035758_create_link_table', 1),
(8, '2022_01_06_035803_create_maps_table', 1),
(9, '2022_01_06_035815_create_agenda_table', 1),
(10, '2022_01_06_035818_create_categories_table', 1),
(11, '2022_01_06_035820_create_berita_table', 1),
(12, '2022_01_06_035903_create_halaman_statis_table', 1),
(13, '2022_01_06_040028_create_produk_table', 1),
(14, '2022_01_06_040045_create_blog_table', 1),
(15, '2022_01_06_040054_create_staff_table', 1),
(16, '2022_01_18_065119_create_video_table', 2),
(17, '2022_01_18_065225_create_gallery_table', 2),
(18, '2022_02_07_033606_create_kompetensi_keahlians_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id`, `judul`, `gambar`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Slider 1', '1644420098-269881238_630426841605761_1468948712392793547_n.jpg', '-', '2022-02-09 08:21:38', '2022-02-09 08:21:38'),
(6, 'slider', '1644562592-IMG_1233.JPG', 'lorem', '2022-02-10 23:56:32', '2022-02-10 23:56:32'),
(7, 'slider 2', '1644562613-IMG_1208.JPG', 'lorem', '2022-02-10 23:56:53', '2022-02-10 23:56:53'),
(8, 'slider 3', '1644567910-IMG_1340 (1).jpg', 'Guru', '2022-02-11 01:25:10', '2022-02-11 01:25:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id`, `nama`, `jabatan`, `foto`, `nip`, `urutan`, `created_at`, `updated_at`) VALUES
(3, 'Gunnar Gunaidi', 'Kepala Sekolah', '1644553537-_MG_8393.JPG', '111222333', 1, '2022-02-09 07:16:11', '2022-02-10 21:25:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `permission` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `permission`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Destiny Frye', 'quqykyzocy@mailinator.com', NULL, NULL, NULL, '$2y$10$Ilpz5fDwfmvNR2yEaqv9xe3taRfmvkzOSYDjoTp7WwPj9bxECEmN.', NULL, '2022-02-09 06:36:37', '2022-02-09 06:36:37'),
(2, 'admin', 'admin@gmail.com', NULL, NULL, 0, '$2y$10$xc/kYky58qFzmxUHT3VVcOwKa4mDl9A8kDcaGayaEPqW4xhoQgL..', NULL, '2022-02-09 19:09:09', '2022-02-09 19:09:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id`, `nama`, `video`, `created_at`, `updated_at`) VALUES
(4, 'Perhotelan', 'https://www.youtube.com/embed/BzDG5LpjZPA', '2022-02-11 01:20:32', '2022-02-11 01:20:32');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `berita_categories_foreign` (`categories`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ekstrakurikuler_pembina_foreign` (`pembina`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `halaman_statis`
--
ALTER TABLE `halaman_statis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kompetensi_keahlians`
--
ALTER TABLE `kompetensi_keahlians`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `halaman_statis`
--
ALTER TABLE `halaman_statis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kompetensi_keahlians`
--
ALTER TABLE `kompetensi_keahlians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `link`
--
ALTER TABLE `link`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `maps`
--
ALTER TABLE `maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_categories_foreign` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
