-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 02:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_laptop`
--

CREATE TABLE `data_laptop` (
  `id_laptop` int(4) NOT NULL,
  `nama_laptop` varchar(256) NOT NULL,
  `harga_laptop` varchar(64) NOT NULL,
  `ram_laptop` varchar(64) NOT NULL,
  `penyimpanan_laptop` varchar(64) NOT NULL,
  `processor_laptop` varchar(64) NOT NULL,
  `uk_layar_laptop` varchar(64) NOT NULL,
  `res_layar_laptop` varchar(64) NOT NULL,
  `gpu_laptop` varchar(64) NOT NULL,
  `refresh_rate_laptop` varchar(64) NOT NULL,
  `panel_layar_laptop` varchar(64) NOT NULL,
  `berat_laptop` varchar(64) NOT NULL,
  `harga_angka` varchar(64) NOT NULL,
  `ram_angka` varchar(64) NOT NULL,
  `penyimpanan_angka` varchar(64) NOT NULL,
  `processor_angka` varchar(64) NOT NULL,
  `uk_layar_angka` varchar(64) NOT NULL,
  `res_layar_angka` varchar(64) NOT NULL,
  `gpu_angka` varchar(64) NOT NULL,
  `refresh_rate_angka` varchar(64) NOT NULL,
  `panel_layar_angka` varchar(64) NOT NULL,
  `berat_angka` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_laptop`
--

INSERT INTO `data_laptop` (`id_laptop`, `nama_laptop`, `harga_laptop`, `ram_laptop`, `penyimpanan_laptop`, `processor_laptop`, `uk_layar_laptop`, `res_layar_laptop`, `gpu_laptop`, `refresh_rate_laptop`, `panel_layar_laptop`, `berat_laptop`, `harga_angka`, `ram_angka`, `penyimpanan_angka`, `processor_angka`, `uk_layar_angka`, `res_layar_angka`, `gpu_angka`, `refresh_rate_angka`, `panel_layar_angka`, `berat_angka`) VALUES
(1, 'Asus Vivobook A416MAO', '5399000', '8', '512', 'Intel Celeron N4020', '14', 'FHD', 'Intel UHD Graphics 600', '60', 'IPS', '1.6', '2', '4', '4', '2', '5', '5', '3', '5', '2', '5'),
(2, 'Asus TUF F15 FX506HC', '11870000', '16', '512', 'Intel Core i5-11400H', '15.6', 'FHD', 'NVIDIA GeForce RTX 3050', '144', 'IPS', '2.2', '3', '5', '4', '4', '4', '5', '5', '5', '2', '3'),
(3, 'Asus Zenbook 14X M1403QA', '11000000', '16', '512', 'AMD Ryzen 7 5800H', '14', 'WUXGA', 'AMD Radeon Vega 7 Graphics', '60', 'IPS', '1.6', '3', '5', '4', '4', '5', '4', '3', '5', '2', '5'),
(4, 'Asus TUF Dash F15 (2022) FX517ZC', '17275000', '16', '512', 'Intel Core i5-12450H', '15.6', 'FHD', 'NVIDIA GeForce RTX 3050', '144', 'IPS', '2', '4', '5', '4', '4', '4', '5', '5', '5', '2', '5'),
(5, 'Asus ExpertBook P1412CEA', '7999000', '8', '512', 'Intel Core i3-1115G4', '14', 'FHD', 'Intel UHD Graphics', '60', 'IPS', '1.5', '5', '4', '4', '3', '5', '5', '3', '5', '2', '5'),
(6, 'Asus Vivobook 14 A1404', '6499000', '8', '512', 'Intel Core i7-1355U', '14', 'FHD', 'Intel Iris Xe Graphics', '60', 'IPS', '1.4', '5', '4', '4', '5', '5', '5', '4', '5', '2', '5'),
(7, 'Asus Vivobook 14X M1403', '7999000', '8', '512', 'AMD Ryzen™ 5 5600H Mobile', '14', 'WUXGA', 'AMD Radeon™ Vega 7 Graphics', '60', 'IPS', '1.6', '5', '4', '4', '4', '5', '4', '3', '5', '2', '5'),
(8, 'Asus Vivobook Go 14 E1404F', '7499000', '8', '512', 'AMD Ryzen 5 7520U', '14', 'FHD', 'AMD Radeon™ Graphics', '60', 'IPS', '1.38', '5', '4', '4', '4', '5', '5', '3', '5', '2', '5'),
(9, 'Asus Vivobook 13 Slate OLED T3300KA', '12400000', '8', '256', 'Intel Pentium Silver N6000', '13.3', 'FHD', 'Intel UHD Graphics', '60', 'OLED', '0.78', '3', '4', '3', '1', '3', '5', '3', '5', '2', '3'),
(10, 'Asus ROG Strix G15 G513RC', '17810000', '16', '512', 'AMD Ryzen 7 6800H', '15.6', 'FHD', 'NVIDIA GeForce RTX 3050', '144', 'IPS', '2.1', '4', '5', '4', '4', '4', '5', '5', '5', '3', '4'),
(11, 'Asus Vivobook Go 14 Flip TP1400KA', '7499000', '8', '512', 'Intel N4500 Processor', '14', 'FHD', 'Intel UHD Graphics', '60', 'IPS', '1.5', '5', '4', '4', '4', '5', '5', '3', '5', '2', '5'),
(12, 'Asus VivoBook 14 A416', '9399000', '4', '512', 'Intel Core i5-1135G7', '14', 'FHD', 'NVIDIA® GeForce® MX330', '60', 'IPS', '1.6', '5', '3', '4', '4', '5', '5', '5', '5', '2', '5'),
(13, 'Asus Vivobook Go 15 OLED E1504', '6799000', '8', '256', 'AMD Ryzen™ 3 7320U', '15.6', 'FHD', 'AMD Radeon™ Graphics', '60', 'OLED', '1.63', '5', '4', '3', '4', '4', '5', '3', '5', '3', '5'),
(14, 'Asus TUF Gaming A15 FA506NF', '11749000', '16', '512', 'AMD Ryzen™ 5 7535HS', '15.6', 'FHD', 'NVIDIA® GeForce RTX™ 2050', '144', 'IPS', '2.30', '3', '5', '4', '4', '4', '5', '5', '5', '2', '4'),
(15, 'Asus Vivobook 15 (A1502)', '7999000', '4', '512', 'Intel Core i3-1215U', '15.6', 'FHD', 'Intel® UHD Graphics', '60', 'IPS', '1.7', '5', '3', '4', '3', '4', '5', '5', '5', '2', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_laptop`
--
ALTER TABLE `data_laptop`
  ADD PRIMARY KEY (`id_laptop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
