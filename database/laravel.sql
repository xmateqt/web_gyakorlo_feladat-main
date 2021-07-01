-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 01, 2021 at 03:29 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

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
(5, '2021_03_24_160137_create_real_estate_table', 1),
(6, '2021_06_30_105806_create_real_estate_types_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `real_estate`
--

CREATE TABLE `real_estate` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_uri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `real_estate`
--

INSERT INTO `real_estate` (`id`, `name`, `description`, `address`, `img_uri`, `price`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'KENDYLEND frissítve', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Gödreszentmartón Szilágyi Erzsébet fasor 13.', '/images/Critical_Real_Estate_Photography_Mistakes_You_Cant_Afford_to_Make_1625138975.jpg', 97000000, 'House', NULL, '2021-07-01 10:22:55', '2021-07-01 09:29:35'),
(2, 'diktator', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de limprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.', 'Újmohács Kossuth Lajos u. 69.', '/images/diktator.PNG', 197000000, 'House', NULL, '2021-07-01 10:22:55', NULL),
(3, 'elnoki update', 'Lorem Ipsum adalah text contoh digunakan didalam industri pencetakan dan typesetting. Lorem Ipsum telah menjadi text contoh semenjak tahun ke 1500an, apabila pencetak yang kurang terkenal mengambil sebuah galeri cetak dan merobakanya menjadi satu buku spesimen. Ia telah bertahan bukan hanya selama lima kurun, tetapi telah melonjak ke era typesetting elektronik, dengan tiada perubahan ketara.', 'Rákóczitelep Király u. 93.', '/images/elnoki.PNG', 23456297420, 'Válasszon típust', NULL, '2021-07-01 10:22:55', '2021-07-01 08:47:57'),
(4, 'generalis', 'Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text seit 1500, als ein unbekannter Schriftsteller eine Hand voll Wörter nahm und diese durcheinander warf um ein Musterbuch zu erstellen. Es hat nicht nur 5 Jahrhunderte überlebt, sondern auch in Spruch in die elektronische Schriftbearbeitung geschafft (bemerke, nahezu unverändert).', 'Csorba Apor Péter u. 16.', '/images/generalis.PNG', 2345629742, 'Apartment', NULL, '2021-07-01 10:22:55', NULL),
(5, 'pinkyboy', 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assemblò per preparare un testo campione. È sopravvissuto non solo a più di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzialmente inalterato.', 'Parádsavár Izabella u. 54.', '/images/pinkyboy.PNG', 2345629742, 'House', NULL, '2021-07-01 10:22:55', NULL),
(6, 'zoldfulu', 'A Lorem Ipsum egy egyszerû szövegrészlete, szövegutánzata a betûszedõ és nyomdaiparnak. A Lorem Ipsum az 1500-as évek óta standard szövegrészletként szolgált az iparban; mikor egy ismeretlen nyomdász összeállította a betûkészletét és egy példa-könyvet vagy szöveget nyomott papírra, ezt használta. Nem csak 5 évszázadot élt túl, de az elektronikus betûkészleteknél is változatlanul megmaradt. ', 'Fenékpuszta Erzsébet tér 67.', '/images/zoldfulu.PNG', 2345629742, 'Hut', NULL, '2021-07-01 10:22:55', NULL),
(7, 'Képteszt', 'képteszt', '5000, Képfeltöltés utca 2', '/images/Critical_Real_Estate_Photography_Mistakes_You_Cant_Afford_to_Make_1625135033.jpg', 14500000, 'Terraced House', '2021-07-01 08:28:03', '2021-07-01 10:23:53', '2021-07-01 08:28:03'),
(9, 'Üres kép teszt', 'üres kép teszt ingatlan', '5999. Mucsaröcsöge, Abszol út 26.', '/images/noimage.png', 14500000, 'Penthouse', NULL, '2021-07-01 10:28:29', '2021-07-01 08:28:29'),
(10, 'Új menő ingatlan a városközpontban', 'Új menő ingatlan a városközpontban - de tényleg', '5999. Mucsaröcsöge, Abszol út 26.', '/images/photo-1582407947304-fd86f028f716_1625136448.jpg', 145044444, 'Flat', NULL, '2021-07-01 10:47:28', '2021-07-01 10:56:06'),
(11, 'valid teszt', 'Valid teszt', '5999. Mucsaröcsöge, Abszol út 26.', '/images/noimage.png', 14500000, 'Terraced House', '2021-07-01 10:59:19', '2021-07-01 10:39:35', '2021-07-01 10:59:19'),
(13, 'Kacsalábon forgó palota', 'Túl az óperenciás tengeren is túl', 'Túl az óperencián 632.', '/images/timthumb_1625144556.jpg', 666555822, 'Terraced House', NULL, '2021-07-01 11:02:36', '2021-07-01 11:02:54'),
(14, 'Penthouse Balatonon', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', 'Balatonföldvár, Képzeletbeli utca 26., 3334.', '/images/25_1625145001.jpg', 6969669969, 'Penthouse', NULL, '2021-07-01 11:10:01', '2021-07-01 11:10:01'),
(15, 'Balatoni nyaraló saját stéggel', 'Balatoni nyaraló saját stéggel és minőségi leírással.', 'Siófok 4500., Siófok utca 6/s', '/images/303983846_1625145113.jpg', 145000300, 'Flat', NULL, '2021-07-01 11:11:53', '2021-07-01 11:19:25');

-- --------------------------------------------------------

--
-- Table structure for table `real_estate_types`
--

CREATE TABLE `real_estate_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `real_estate_types`
--

INSERT INTO `real_estate_types` (`id`, `name`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'House', 'Családi ház', NULL, '2021-07-01 10:22:55', NULL),
(2, 'Semi-Detached House', 'Ikerház', NULL, '2021-07-01 10:22:55', NULL),
(3, 'Terraced House', 'Sorház', NULL, '2021-07-01 10:22:55', NULL),
(4, 'Flat', 'Lakás', NULL, '2021-07-01 10:22:55', NULL),
(5, 'Penthouse', 'Penthouse', NULL, '2021-07-01 10:22:55', NULL),
(6, 'Garage', 'Garázs', NULL, '2021-07-01 10:22:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `real_estate`
--
ALTER TABLE `real_estate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `real_estate_types`
--
ALTER TABLE `real_estate_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `real_estate`
--
ALTER TABLE `real_estate`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `real_estate_types`
--
ALTER TABLE `real_estate_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
