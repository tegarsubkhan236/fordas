-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 01:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fordas`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_donatur`
--

CREATE TABLE `detail_donatur` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_donatur`
--

INSERT INTO `detail_donatur` (`id`, `user_id`, `name`, `gender`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 7, 'donatur', 'L', 'donatur', '123123123', '2021-01-17', '2021-01-17'),
(2, 10, 'wirawantw', 'L', 'jl. dipatiukur', '131312313', '2021-01-18', '2021-01-18'),
(3, 11, 'cancan aja', 'L', 'Jl.Dipatiukur no 138', '082321024328', '2021-01-24', '2021-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id` int(11) NOT NULL,
  `proposal_id` int(11) DEFAULT NULL,
  `total_donasi` int(11) DEFAULT NULL,
  `bukti_transfer` varchar(200) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `detail_donatur_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id`, `proposal_id`, `total_donasi`, `bukti_transfer`, `keterangan`, `detail_donatur_id`, `status`, `created_at`, `updated_at`) VALUES
(4, 1, 1000000, 'BslNs0lt_400x400.png', 'semangat', 1, 2, '2021-01-23', '2021-01-24'),
(5, 1, 6000, '1.png', 'basss', 1, 2, '2021-01-23', '2021-01-23'),
(6, 1, 6767, 'a.png', 'hfdhf', 1, 1, '2021-01-24', '2021-01-27'),
(7, 6, 1500000, 'BslNs0lt_400x400.png', 'bantuan', 3, 1, '2021-01-26', '2021-01-26'),
(8, 6, 2000000, 'activity diagram donasi.jpg', 'bantuan', 1, 2, '2021-01-27', '2021-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2021_01_15_160407_create_detail_donatur_table', 1),
(2, '2021_01_15_160407_create_failed_jobs_table', 1),
(3, '2021_01_15_160407_create_password_resets_table', 1),
(4, '2021_01_15_160407_create_proposal_donatur_table', 1),
(5, '2021_01_15_160407_create_proposal_kategori_table', 1),
(6, '2021_01_15_160407_create_proposal_table', 1),
(7, '2021_01_15_160407_create_users_table', 1),
(8, '2021_01_15_160407_create_wilayah_das_table', 1),
(9, '2021_01_15_160407_create_wilayah_table', 1),
(10, '2021_01_15_160409_add_foreign_keys_to_proposal_donatur_table', 1),
(11, '2021_01_15_160409_add_foreign_keys_to_proposal_table', 1),
(12, '2021_01_15_160409_add_foreign_keys_to_users_table', 1),
(13, '2021_01_15_160409_add_foreign_keys_to_wilayah_das_table', 1),
(14, '2021_01_23_154856_create_detail_donatur_table', 0),
(15, '2021_01_23_154856_create_donasi_table', 0),
(16, '2021_01_23_154856_create_failed_jobs_table', 0),
(17, '2021_01_23_154856_create_password_resets_table', 0),
(18, '2021_01_23_154856_create_proposal_table', 0),
(19, '2021_01_23_154856_create_proposal_donatur_table', 0),
(20, '2021_01_23_154856_create_proposal_kategori_table', 0),
(21, '2021_01_23_154856_create_users_table', 0),
(22, '2021_01_23_154856_create_wilayah_table', 0),
(23, '2021_01_23_154856_create_wilayah_das_table', 0),
(24, '2021_01_23_154858_add_foreign_keys_to_detail_donatur_table', 0),
(25, '2021_01_23_154858_add_foreign_keys_to_donasi_table', 0),
(26, '2021_01_23_154858_add_foreign_keys_to_proposal_table', 0),
(27, '2021_01_23_154858_add_foreign_keys_to_proposal_donatur_table', 0),
(28, '2021_01_23_154858_add_foreign_keys_to_users_table', 0),
(29, '2021_01_23_154858_add_foreign_keys_to_wilayah_das_table', 0),
(30, '2021_01_27_022451_create_detail_donatur_table', 0),
(31, '2021_01_27_022451_create_donasi_table', 0),
(32, '2021_01_27_022451_create_failed_jobs_table', 0),
(33, '2021_01_27_022451_create_password_resets_table', 0),
(34, '2021_01_27_022451_create_proposal_table', 0),
(35, '2021_01_27_022451_create_proposal_donatur_table', 0),
(36, '2021_01_27_022451_create_proposal_kategori_table', 0),
(37, '2021_01_27_022451_create_users_table', 0),
(38, '2021_01_27_022451_create_wilayah_table', 0),
(39, '2021_01_27_022451_create_wilayah_das_table', 0),
(40, '2021_01_27_022453_add_foreign_keys_to_detail_donatur_table', 0),
(41, '2021_01_27_022453_add_foreign_keys_to_donasi_table', 0),
(42, '2021_01_27_022453_add_foreign_keys_to_proposal_table', 0),
(43, '2021_01_27_022453_add_foreign_keys_to_proposal_donatur_table', 0),
(44, '2021_01_27_022453_add_foreign_keys_to_users_table', 0),
(45, '2021_01_27_022453_add_foreign_keys_to_wilayah_das_table', 0);

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
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `tempat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latar_belakang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maksud_tujuan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peserta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `narasumber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bahasan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `visibility` tinyint(1) NOT NULL,
  `donate` tinyint(1) DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `files` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id`, `created_by`, `judul`, `tgl`, `waktu`, `tempat`, `latar_belakang`, `maksud_tujuan`, `peserta`, `narasumber`, `bahasan`, `kategori_id`, `status`, `visibility`, `donate`, `keterangan`, `created_at`, `updated_at`, `files`) VALUES
(1, 1, 'test', '2021-10-11', '09:21:00', 'test', '<p>test</p>', '<p>test</p>', '<p>test</p>', '<p>test</p>', '<p>test</p>', 1, 2, 1, 1, NULL, '2021-01-17', '2021-01-26', NULL),
(2, 1, 'FORUM KOORDINASI DAS CISADANE', '2021-01-15', '18:27:00', 'Universitas Nusa Bangsa', '<p style=\"text-align: justify; \">Fenomena kerusakan lingkungan yang semakin meningkat menjadi peringatan bagi semua pihak\r\nuntuk lebih peduli terhadap lingkungan di sekitarnya. Daya dukung lingkungan yang menurun menjadi\r\nfactor penting yang harus segera diatasi. Daya dukung lingkungan sangat berhubungan dengan kondisi\r\nekosistem daerah aliran sungai (DAS). DAS yang baik akan memberikan efek positif terhadap\r\nlingkungan, demikian juga sebaliknya.\r\nPengelolaan DAS tidak terlepas dari banyaknya konflik antar pihak yang berkepentingan.\r\nPemanfaatan sumberdaya alam seringkali disalah gunakan demi memuluskan ambisi pihak-pihak\r\ntertentu dalam mengeksploitasi alam secara berlebihan. Kondisi demikian diperparah dengan issu ego\r\nsektoral yang sampai saat ini belum teratasi.\r\nMengingat setiap bagian dari bumi terbagi habis ke dalam DAS dan sub DAS maka tidaklah\r\nberlebihan jika setiap kegiatan pengelolaan lingkungan hendaknya berbasis pada wilayah DAS.\r\nPengelolaan lingkungan berbasis pada wilayah administrasi semata berbuah pada semakin\r\nmeruncingnya ego sektoral.&nbsp;<br></p>', '<p style=\"text-align: justify; \">Forum DAS adalah suatu wadah bagi semua pihak terkait dalam wilayah DAS. Forum DAS menjadi\r\njembatan untuk menemukan solusi bersama atas permasalahan lingkungan global. Dalam rangka\r\nmemperkuat organisasi, Forum DAS Cisadane berkepentingan untuk melakukan konsolidasi internal\r\npengurus. Konsolidasi merupakan bagian yang utuh bagi terciptanya suasan Forum yang kondusif\r\nsehingga mampu memberikan efek positif bagi kegiatan pengelolaan DAS Cisadane.<br></p>', '<p style=\"text-align: justify; \">Peserta terdiri dari pengurus Forum DAS Cisadane, Perguruan Tinggi, Lembaga Swadaya\r\nMasyarakat, Budayawan, serta berbagai pihak terkait (terlampir)&nbsp;<br></p>', '<p style=\"text-align: justify; \">Narasumber acara terdiri dari Ketua Forum DAS Cisadane<br></p>', '<p style=\"text-align: justify; \">Agenda kegiatan berupa penguatan organisasi Forum DAS Cisadane. Adapun hal-hal yang\r\ndibahas dalam kegiatan tersebut adalah :\r\n</p><p style=\"text-align: justify; \">1. Penguatan dan konsolidasi kelembagaan Fordas Cisadane\r\n</p><p style=\"text-align: justify; \">2. Sosialisasi Fordas Cisadane\r\n</p><p style=\"text-align: justify; \">3. Pembahasan program kerja tahun anggaran 2019<br></p>', 1, 2, 1, 0, NULL, '2021-01-22', '2021-01-26', NULL),
(3, 2, 'FORUM KOORDINASI DAS CISADANE', '2019-09-24', '12:00:00', 'Universitas Nusa Bangsa', '<p style=\"text-align: justify; \">Fenomena kerusakan lingkungan yang semakin meningkat menjadi peringatan bagi semua pihak\r\nuntuk lebih peduli terhadap lingkungan di sekitarnya. Daya dukung lingkungan yang menurun menjadi\r\nfactor penting yang harus segera diatasi. Daya dukung lingkungan sangat berhubungan dengan kondisi\r\nekosistem daerah aliran sungai (DAS). DAS yang baik akan memberikan efek positif terhadap\r\nlingkungan, demikian juga sebaliknya.\r\nPengelolaan DAS tidak terlepas dari banyaknya konflik antar pihak yang berkepentingan.\r\nPemanfaatan sumberdaya alam seringkali disalah gunakan demi memuluskan ambisi pihak-pihak\r\ntertentu dalam mengeksploitasi alam secara berlebihan. Kondisi demikian diperparah dengan issu ego\r\nsektoral yang sampai saat ini belum teratasi.\r\nMengingat setiap bagian dari bumi terbagi habis ke dalam DAS dan sub DAS maka tidaklah\r\nberlebihan jika setiap kegiatan pengelolaan lingkungan hendaknya berbasis pada wilayah DAS.\r\nPengelolaan lingkungan berbasis pada wilayah administrasi semata berbuah pada semakin\r\nmeruncingnya ego sektoral.<br></p>', '<p style=\"text-align: justify; \">Forum DAS adalah suatu wadah bagi semua pihak terkait dalam wilayah DAS. Forum DAS menjadi\r\njembatan untuk menemukan solusi bersama atas permasalahan lingkungan global. Dalam rangka\r\nmemperkuat organisasi, Forum DAS Cisadane berkepentingan untuk melakukan konsolidasi internal\r\npengurus. Konsolidasi merupakan bagian yang utuh bagi terciptanya suasan Forum yang kondusif\r\nsehingga mampu memberikan efek positif bagi kegiatan pengelolaan DAS Cisadane.&nbsp;<br></p>', '<p style=\"text-align: justify; \">Peserta terdiri dari pengurus Forum DAS Cisadane, Perguruan Tinggi, Lembaga Swadaya\r\nMasyarakat, Budayawan, serta berbagai pihak terkait (terlampir)<br></p>', '<p style=\"text-align: justify; \">Narasumber acara terdiri dari Ketua Forum DAS Cisadane<br></p>', '<p style=\"text-align: justify; \">Agenda kegiatan berupa penguatan organisasi Forum DAS Cisadane. Adapun hal-hal yang\r\ndibahas dalam kegiatan tersebut adalah :\r\n</p><p style=\"text-align: justify; \">1. Penguatan dan konsolidasi kelembagaan Fordas Cisadane\r\n</p><p style=\"text-align: justify; \">2. Sosialisasi Fordas Cisadane\r\n</p><p style=\"text-align: justify; \">3. Pembahasan program kerja tahun anggaran 2019<br></p>', 1, 1, 1, 0, 'proposal dikonfirmasi', '2021-01-18', '2021-01-18', NULL),
(4, 2, 'FORUM KOORDINASI DAS CISADANE 2', '2021-01-18', '12:00:00', 'Tasik', '<p>abcde</p>', '<p>abcde<br></p>', '<p>abcde<br></p>', '<p>abcde<br></p>', '<p>abcde<br></p>', 1, 2, 1, 0, 'di tolak', '2021-01-18', '2021-01-18', NULL),
(5, 1, 'FORUM KOORDINASI DAS CISADANE', '2021-01-22', '19:19:00', 'Universitas Nusa Bangsa', '<p style=\"text-align: justify; \">Fenomena kerusakan lingkungan yang semakin meningkat menjadi peringatan bagi semua pihak\r\nuntuk lebih peduli terhadap lingkungan di sekitarnya. Daya dukung lingkungan yang menurun menjadi\r\nfactor penting yang harus segera diatasi. Daya dukung lingkungan sangat berhubungan dengan kondisi\r\nekosistem daerah aliran sungai (DAS). DAS yang baik akan memberikan efek positif terhadap\r\nlingkungan, demikian juga sebaliknya.\r\nPengelolaan DAS tidak terlepas dari banyaknya konflik antar pihak yang berkepentingan.\r\nPemanfaatan sumberdaya alam seringkali disalah gunakan demi memuluskan ambisi pihak-pihak\r\ntertentu dalam mengeksploitasi alam secara berlebihan. Kondisi demikian diperparah dengan issu ego\r\nsektoral yang sampai saat ini belum teratasi.\r\nMengingat setiap bagian dari bumi terbagi habis ke dalam DAS dan sub DAS maka tidaklah\r\nberlebihan jika setiap kegiatan pengelolaan lingkungan hendaknya berbasis pada wilayah DAS.\r\nPengelolaan lingkungan berbasis pada wilayah administrasi semata berbuah pada semakin\r\nmeruncingnya ego sektoral.&nbsp;<br></p>', '<p style=\"text-align: justify; \">Forum DAS adalah suatu wadah bagi semua pihak terkait dalam wilayah DAS. Forum DAS menjadi\r\njembatan untuk menemukan solusi bersama atas permasalahan lingkungan global. Dalam rangka\r\nmemperkuat organisasi, Forum DAS Cisadane berkepentingan untuk melakukan konsolidasi internal\r\npengurus. Konsolidasi merupakan bagian yang utuh bagi terciptanya suasan Forum yang kondusif\r\nsehingga mampu memberikan efek positif bagi kegiatan pengelolaan DAS Cisadane.<br></p>', '<p style=\"text-align: justify; \">Peserta terdiri dari pengurus Forum DAS Cisadane, Perguruan Tinggi, Lembaga Swadaya\r\nMasyarakat, Budayawan, serta berbagai pihak terkait (terlampir)&nbsp;<br></p>', '<p style=\"text-align: justify; \">Narasumber acara terdiri dari Ketua Forum DAS Cisadane<br></p>', '<p style=\"text-align: justify; \">Agenda kegiatan berupa penguatan organisasi Forum DAS Cisadane. Adapun hal-hal yang\r\ndibahas dalam kegiatan tersebut adalah :\r\n</p><p style=\"text-align: justify; \">1. Penguatan dan konsolidasi kelembagaan Fordas Cisadane\r\n</p><p style=\"text-align: justify; \">2. Sosialisasi Fordas Cisadane\r\n</p><p style=\"text-align: justify; \">3. Pembahasan program kerja tahun anggaran 2019<br></p>', 1, 2, 1, 0, NULL, '2021-01-22', '2021-01-26', NULL),
(6, 17, 'Bahan Persiapan Koordinasi Permasalahan Banjir', '2020-04-06', '10:00:00', 'Sukajaya', '<p><span style=\"font-family: &quot;Times New Roman&quot;;\">Banjir merupakan suatu masalah yang sampai saat masih perlu adanya\r\npenanganan khusus dari berbagai pihak, baik dari pemerintah maupun\r\nmasyarakat. Banjir bukan masalah yang ringan.</span></p><p><span style=\"font-family: &quot;Times New Roman&quot;;\">Banjir dapat terjadi akibat naiknya permukaan air lantaran curah hujan\r\nyang diatas normal, perubahan suhu, tanggul/ bendungan yang bobol,\r\npencairan salju yang cepat, terhambatnya aliran air di tempat lain. Sedikitnya ada lima faktor penting penyebab banjir di Indonesia yaitu\r\nfaktor hujan, faktor hancurnya retensi Daerah Aliran Sungai (DAS), faktor\r\nkesalahan perencanaan pembangunan alur sungai, faktor pendangkalan sungai, faktor kesalahan tata wilayah dan pembangunan sarana dan prasarana, dan faktor terjadinya longsor dari tanah pegunungan.</span><br></p>', '<p><span style=\"font-family: &quot;Times New Roman&quot;;\">Maksud dari penelitian ini adalah untuk mengkaji sejauh mana masyarakat Sukajaya peduli dan siap dalam menghadapi bencana longsor serta upaya-upaya apa saja yang sudah dilakukan pemerintah terhadap Sukajaya dalam\r\nmenanggulangi bencana longsor.</span></p><p><span style=\"font-family: &quot;Times New Roman&quot;;\">Tujuan penelitian ini adalah untuk mengetahui tingkat kesiapsiagaan masyarakat\r\ndi Sukajaya dan menganalisis upaya apa saja yang dapat dilakukan untuk\r\nmeningkatkan kesiapsiagaan masyarakat di Sukajaya, baik oleh masyarakat\r\nitu sendiri ataupun pemerintah.</span><span style=\"font-family: &quot;Times New Roman&quot;;\"><br></span><br></p>', '<p>Sekretaris Jendral Kementerian KLHK , organisasi Forum DAS Ciujung, dan lainnya dengan masyarakat</p>', '<p><span style=\"font-family: &quot;Times New Roman&quot;;\">Narasumber acara terdiri dari Ketua Forum DAS Ciujung</span><br></p>', '<p><span style=\"font-size: 1rem; font-family: &quot;Times New Roman&quot;;\">Agenda kegiatan berupa penguatan organisasi Forum DAS Ciujung. Adapun hal-hal yang\r\ndibahas dalam kegiatan tersebut adalah :</span><span style=\"font-family: &quot;Times New Roman&quot;;\">﻿</span></p><p><span style=\"font-family: &quot;Times New Roman&quot;;\">Mengetahui tingkat kesiapsiagaan masyarakat dalam menghadapi bencana banjir.</span></p><p><span style=\"font-family: &quot;Times New Roman&quot;;\">Sosialisasi Fordas Ciujung.</span><br></p>', 2, 1, 1, 1, 'Laksanakan', '2021-01-26', '2021-01-26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `proposal_detail`
--

CREATE TABLE `proposal_detail` (
  `id` int(11) NOT NULL,
  `proposal_id` int(11) NOT NULL,
  `aktifitas` text NOT NULL,
  `detail_aktifitas` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proposal_detail`
--

INSERT INTO `proposal_detail` (`id`, `proposal_id`, `aktifitas`, `detail_aktifitas`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, '[\"1611737490.png\",\"1611737490.png\",\"1611737490.png\",\"1611737490.png\",\"1611737490.png\"]', NULL, NULL, '2021-01-27', '2021-01-27'),
(2, 6, '[\"1611737600.png\",\"1611737600.png\",\"1611737600.png\",\"1611737600.png\",\"1611737600.png\"]', NULL, NULL, '2021-01-27', '2021-01-27'),
(3, 6, '[\"1611737675.png\",\"1611737675.png\",\"1611737675.jpeg\",\"1611737675.png\",\"1611737675.png\"]', '<p>sadiqwd<br></p>', NULL, '2021-01-27', '2021-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `proposal_donatur`
--

CREATE TABLE `proposal_donatur` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `bukti` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `total_donasi` double NOT NULL,
  `proposal_id` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proposal_kategori`
--

CREATE TABLE `proposal_kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposal_kategori`
--

INSERT INTO `proposal_kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Rapat', '2021-01-17', '2021-01-17'),
(2, 'Bencana alam', '2021-01-18', '2021-01-18'),
(3, 'Kerusakan lingkungan', '2021-01-18', '2021-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `das_id` int(11) DEFAULT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `das_id`, `level`, `status`, `created_at`, `updated_at`) VALUES
(1, 'super', 'super', NULL, 1, 1, NULL, NULL),
(2, 'ketua_forum', 'ketua_forum', NULL, 2, 1, NULL, NULL),
(3, 'sekre_forum', 'sekre_forum', NULL, 3, 1, NULL, NULL),
(4, 'korwil_dago', 'korwil_dago', 1, 4, 1, NULL, NULL),
(7, 'donatur', 'donatur', NULL, 5, 1, '2021-01-17 06:01:09', '2021-01-17 06:01:09'),
(8, 'korwil_DAS CISADANE', '12345', 2, 4, 1, NULL, NULL),
(9, 'korwil_DAS TASIK', '12345', 3, 4, 1, NULL, NULL),
(10, 'wirawan', '12345', NULL, 5, 1, '2021-01-17 23:17:32', '2021-01-17 23:17:32'),
(11, 'cancan', 'cancan', NULL, 5, 1, '2021-01-24 09:34:25', '2021-01-24 09:34:25'),
(12, 'korwil_DAS CIDAMAR', '12345', 4, 4, 1, NULL, NULL),
(13, 'korwil_DAS CIKANDANG', '12345', 5, 4, 1, NULL, NULL),
(14, 'korwil_DAS CILAKI', '12345', 6, 4, 1, NULL, NULL),
(15, 'korwil_DAS CILAYU', '12345', 7, 4, 1, NULL, NULL),
(16, 'korwil_DAS CIPANDAK', '12345', 8, 4, 1, NULL, NULL),
(17, 'korwil_DAS CISADEA', '12345', 9, 4, 1, NULL, NULL),
(18, 'korwil_DAS CITARUM', '12345', 10, 4, 1, NULL, NULL),
(19, 'korwil_DAS CIMANUK', '12345', 11, 4, 1, NULL, NULL),
(20, 'korwil_DAS CIBAREO', '12345', 12, 4, 1, NULL, NULL),
(21, 'korwil_DAS CIDURIAN', '12345', 13, 4, 1, NULL, NULL),
(22, 'korwil_DAS CILIWUNG', '12345', 14, 4, 1, NULL, NULL),
(23, 'korwil_DAS CIMANCEURI', '12345', 15, 4, 1, NULL, NULL),
(24, 'korwil_DAS CIMANDIRI', '12345', 16, 4, 1, NULL, NULL),
(25, 'korwil_DAS CIUJUNG', '12345', 17, 4, 1, NULL, NULL),
(26, 'korwil_DAS KALI ANGKE PESANGGRAHAN', '12345', 18, 4, 1, NULL, NULL),
(27, 'korwil_DAS KALI BEKASI', '12345', 19, 4, 1, NULL, NULL),
(28, 'korwil_DAS KALI KRUKUT', '12345', 20, 4, 1, NULL, NULL),
(29, 'korwil_DAS KALI SUNTER', '12345', 21, 4, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'KABUPATEN BANDUNG', NULL, '2021-01-26'),
(2, 'KABUPATEN BOGOR', NULL, '2021-01-26'),
(3, 'KOTA BANDUNG', NULL, '2021-01-26');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah_das`
--

CREATE TABLE `wilayah_das` (
  `id` int(11) NOT NULL,
  `wilayah_id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wilayah_das`
--

INSERT INTO `wilayah_das` (`id`, `wilayah_id`, `nama`) VALUES
(1, 1, 'DAS CIBUNI'),
(2, 2, 'DAS CISADANE'),
(3, 3, 'DAS CITARUM'),
(4, 1, 'DAS CIDAMAR'),
(5, 1, 'DAS CIKANDANG'),
(6, 1, 'DAS CILAKI'),
(7, 1, 'DAS CILAYU'),
(8, 1, 'DAS CIPANDAK'),
(9, 1, 'DAS CISADEA'),
(10, 1, 'DAS CITARUM'),
(11, 1, 'DAS CIMANUK'),
(12, 2, 'DAS CIBAREO'),
(13, 2, 'DAS CIDURIAN'),
(14, 2, 'DAS CILIWUNG'),
(15, 2, 'DAS CIMANCEURI'),
(16, 2, 'DAS CIMANDIRI'),
(17, 2, 'DAS CIUJUNG'),
(18, 2, 'DAS KALI ANGKE PESANGGRAHAN'),
(19, 2, 'DAS KALI BEKASI'),
(20, 2, 'DAS KALI KRUKUT'),
(21, 2, 'DAS KALI SUNTER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_donatur`
--
ALTER TABLE `detail_donatur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proposal_id` (`proposal_id`),
  ADD KEY `detail_donatur_id` (`detail_donatur_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `proposal_detail`
--
ALTER TABLE `proposal_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proposal_id` (`proposal_id`);

--
-- Indexes for table `proposal_donatur`
--
ALTER TABLE `proposal_donatur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `proposal_id` (`proposal_id`);

--
-- Indexes for table `proposal_kategori`
--
ALTER TABLE `proposal_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `das_id` (`das_id`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wilayah_das`
--
ALTER TABLE `wilayah_das`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wilayah_id` (`wilayah_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_donatur`
--
ALTER TABLE `detail_donatur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `proposal_detail`
--
ALTER TABLE `proposal_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proposal_donatur`
--
ALTER TABLE `proposal_donatur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proposal_kategori`
--
ALTER TABLE `proposal_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wilayah_das`
--
ALTER TABLE `wilayah_das`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_donatur`
--
ALTER TABLE `detail_donatur`
  ADD CONSTRAINT `detail_donatur_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donasi`
--
ALTER TABLE `donasi`
  ADD CONSTRAINT `donasi_ibfk_1` FOREIGN KEY (`proposal_id`) REFERENCES `proposal` (`id`),
  ADD CONSTRAINT `donasi_ibfk_2` FOREIGN KEY (`detail_donatur_id`) REFERENCES `detail_donatur` (`id`);

--
-- Constraints for table `proposal`
--
ALTER TABLE `proposal`
  ADD CONSTRAINT `proposal_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `proposal_kategori` (`id`),
  ADD CONSTRAINT `proposal_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `wilayah_das` (`id`);

--
-- Constraints for table `proposal_detail`
--
ALTER TABLE `proposal_detail`
  ADD CONSTRAINT `proposal_detail_ibfk_1` FOREIGN KEY (`proposal_id`) REFERENCES `proposal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proposal_donatur`
--
ALTER TABLE `proposal_donatur`
  ADD CONSTRAINT `proposal_donatur_ibfk_1` FOREIGN KEY (`proposal_id`) REFERENCES `proposal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proposal_donatur_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`das_id`) REFERENCES `wilayah_das` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wilayah_das`
--
ALTER TABLE `wilayah_das`
  ADD CONSTRAINT `wilayah_das_ibfk_1` FOREIGN KEY (`wilayah_id`) REFERENCES `wilayah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
