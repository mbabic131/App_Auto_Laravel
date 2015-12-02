-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2015 at 08:32 PM
-- Server version: 10.0.21-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Auto_Laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `autis`
--

CREATE TABLE `autis` (
  `id` int(10) UNSIGNED NOT NULL,
  `Naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Tip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `JM` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Potrosnja` double(8,2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `autis`
--

INSERT INTO `Autis` (`id`, `Naziv`, `Tip`, `JM`, `Potrosnja`, `updated_at`, `created_at`) VALUES
(1, 'Tesla Motors Model S', 'Electric', 'kwh/100 km', 18.18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Volkswagen e-Golf', 'Electric', 'kwh/100 km', 12.70, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Toyota Prius', 'Hybrid', 'l/100 km', 3.90, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Audi A6', 'Gasoline', 'l/100 km', 5.90, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Honda Civic', 'Gasoline', 'l/100 km', 5.40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Volkswagen Golf', 'Diesel', 'l/100 km', 3.80, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'BMW 5 Series', 'Diesel', 'l/100 km', 5.60, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `energentis`
--

CREATE TABLE `energentis` (
  `id` int(10) UNSIGNED NOT NULL,
  `Pogon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `JM` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Cijena` double(8,2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `energentis`
--

INSERT INTO `Energentis` (`id`, `Pogon`, `JM`, `Cijena`, `updated_at`, `created_at`) VALUES
(3, 'Gasoline', '$/L', 1.35, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Diesel', '$/L', 1.24, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Electric', '$/KWH', 0.14, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Hybrid', '$/L', 1.35, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_06_25_193402_create_auti', 1),
('2015_06_25_234500_create_energenti', 1),
('2015_06_28_190259_create_spremljeno', 1);

-- --------------------------------------------------------

--
-- Table structure for table `spremljenos`
--

CREATE TABLE `spremljenos` (
  `id` int(10) UNSIGNED NOT NULL,
  `Automobil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Pogon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Broj_kmh` int(11) NOT NULL,
  `Ukupni_troskovi` double(8,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autis`
--
ALTER TABLE `autis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `energentis`
--
ALTER TABLE `energentis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spremljenos`
--
ALTER TABLE `spremljenos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autis`
--
ALTER TABLE `autis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `energentis`
--
ALTER TABLE `energentis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `spremljenos`
--
ALTER TABLE `spremljenos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;