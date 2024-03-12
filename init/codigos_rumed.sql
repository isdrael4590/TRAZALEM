-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Mar 12, 2024 at 04:12 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trazalem_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `coderumeds`
--

CREATE TABLE `coderumeds` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `coderumed_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_coderumed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `join_date_coderumed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detalls` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coderumeds`
--

INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(1,1,'V1','ABRE-BOCA + CAJA DE FRESAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(2,1,'V2','ADAPTADOR DE MICROS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(3,1,'V3','ADAPTADORES DE MESA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(4,1,'V4','ADAPTADORES DE UROLOGIA (3)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(5,1,'V5','ADAPTADORES EN Y (LITOVIU)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(6,1,'V6','ADSON BRAUN','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(7,1,'V7','AGUJA DE BERRES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(8,1,'V8','AGUJA DE PUNCIÓN','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(9,1,'V9','AJUSTA ALAMBRE','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(10,1,'V10','ALLIS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(11,1,'V11','AMIGDALAS N° 1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(12,1,'V12','AMIGDALAS N° 2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(13,1,'V13','ANESTESIA RAQUIDEA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(14,1,'V14','APENDICE N°1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(15,1,'V15','APENDICE N°2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(16,1,'V16','ARGOLLAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(17,1,'V17','ARTROPLASTIA DE RODILLA N° 1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(18,1,'V18','ARTROPLASTIA DE RODILLA N° 2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(19,1,'V19','ASEPSIAS CON VASO /COPA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(20,1,'V20','AUTOESTATICO DE KISHNER','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(21,1,'V21','AUTOESTATICO DE T/O','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(22,1,'V22','AUXILIAR DE RINOPLASTIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(23,1,'V23','BABCOCK','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(24,1,'V24','BANDEJA DE CLIPS ANEURISMA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(25,1,'V25','BANDEJA OFTALMOLOGIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(26,1,'V26','BASICO MAYOR N°1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(27,1,'V27','BASICO MAYOR N°2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(28,1,'V28','BASICO MAYOR N°3','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(29,1,'V29','BENIQUES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(30,1,'V30','BLEFAROSTATO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(31,1,'V31','BRONCOSCOPIO ADULTO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(32,1,'V32','BRONCOSCOPIO INFANTIL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(33,1,'V33','C. MAYOR INFANTIL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(34,1,'V34','C. MENOR INFANTIL N°1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(35,1,'V35','C. MENOR INFANTIL N°2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(36,1,'V36','C. VASCULAR 35 PZ','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(37,1,'V37','CABEZAL DE N/C','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(38,1,'V38','CABLES ELECTRO LAP','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(39,1,'V39','CABLES NEGROS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(40,1,'V40','CADERA N°1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(41,1,'V41','CADERA N°2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(42,1,'V42','CAJA DE PLACAS Y TORNILLOS DE BIOMAT + INSTRUMENTAL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(43,1,'V43','CAJA GRANDE DE TORNILLOS Y PLACAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(44,1,'V44','CANULA DE SUCCION/IRRIGACIÓN','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(45,1,'V45','CANULAS DE SUCCION','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(46,1,'V46','CANULAS DE SUCCION','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(47,1,'V47','CASTAÑEDA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(48,1,'V48','CEDAZO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(49,1,'V49','CESAREA N°1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(50,1,'V50','CESAREA N°2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(51,1,'V51','CESAREA N°3','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(52,1,'V52','CHAROL 1-2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(53,1,'V53','CHAROL 3-4','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(54,1,'V54','CINTA METRICA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(55,1,'V55','CIRCUNSICION','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(56,1,'V56','CIRUGIA CORONARIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(57,1,'V57','CISTICAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(58,1,'V58','CISTOSCOPIO ADULTO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(59,1,'V59','CISTOSCOPIO INFANTIL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(60,1,'V60','CLIPIADORA  DORADA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(61,1,'V61','CLIPIADORA (LILA)  HEMOLOCK','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(62,1,'V62','CLIPIADORA CLIPS TITANIO 10mm','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(63,1,'V63','CLIPIADORA DOBLE PERFIL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(64,1,'V64','COAGULADOR DE PLASMA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(65,1,'V65','COLUMNA N/C','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(66,1,'V66','COMPAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(67,1,'V67','COMPAS DE CRUTCHFIELD','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(68,1,'V68','COMPAZ','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(69,1,'V69','COMPLEMENTARIO DE LARINGOSCOPIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(70,1,'V70','COMPLEMENTARIO DE TABIQUE','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(71,1,'V71','CONDUCTORES DE SONDA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(72,1,'V72','CONECTORES DE BOMBA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(73,1,'V73','CONFORMA DE CAMARA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(74,1,'V74','COPA DE CEMENTO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(75,1,'V75','CORTA ALAMBRE GRANDE  (TONTON)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(76,1,'V76','CORTA ALAMBRE KHISNER','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(77,1,'V77','CRANEO DE EMERGENCIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(78,1,'V78','CRANEO ELECTIVA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(79,1,'V79','CRANEOTOMO LIMVATEC','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(80,1,'V80','CRANEOTOMO MIDAS REX','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(81,1,'V81','CRANEOTOMO SYNTHES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(82,1,'V82','CROSHET','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(83,1,'V83','CUCHARAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(84,1,'V84','CUCHILLO URETROTOMIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(85,1,'V85','CURACION','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(86,1,'V86','CURETAJE N° 1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(87,1,'V87','CURETAJE N° 2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(88,1,'V88','CURETAJE N° 3','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(89,1,'V89','CURETAJE N° 4','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(90,1,'V90','CURETAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(91,1,'V91','DAVIERES DE ROTULA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(92,1,'V92','DEAVERES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(93,1,'V93','DECOLADORES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(94,1,'V94','DERMATOMO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(95,1,'V95','DESPERIOSTIZADOR','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(96,1,'V96','DESTORNILADORES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(97,1,'V97','DESTORNILADORES TRIMED (2,0)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(98,1,'V98','DIAGNOSTICO N° 1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(99,1,'V99','DIAGNOSTICO N° 2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(100,1,'V100','DIAGNOSTICO N° 3','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(101,1,'V101','DILATADORES  RECTALES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(102,1,'V102','DILATADORES DE GUYO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(103,1,'V103','DILATADORES DE VALVULA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(104,1,'V104','DILATADORES METALICOS CON OLIVA 4 PZ','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(105,1,'V105','DISTRACTOR DE TOBILLO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(106,1,'V106','DOBLADOR DE PLACAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(107,1,'V107','DOBLE ESPATULA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(108,1,'V108','DOPPLER VASCULAR','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(109,1,'V109','ELEVADOR DE GIGLES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(110,1,'V110','ELEVADOR ESPINAL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(111,1,'V111','ELEVADOR MALAR','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(112,1,'V112','EMBOLECTOMIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(113,1,'V113','EMPUJA NUDOS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(114,1,'V114','ENDOCISTICA LAP.','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(115,1,'V115','ENDOVASCULAR','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(116,1,'V116','EQ DACRIO 16PZ','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(117,1,'V117','EQ DE CHALAZION','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(118,1,'V118','EQ DE CORNEA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(119,1,'V119','EQ DE ESTRABISMO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(120,1,'V120','EQ DE FACO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(121,1,'V121','EQ DE PARPADOS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(122,1,'V122','EQ DE VIAS LAFRIMALES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(123,1,'V123','EQ DE VITRECTOMIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(124,1,'V124','EQ ENUCLEACION 13PZ','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(125,1,'V125','EQ EXTRACAPSULAR','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(126,1,'V126','EQ LENTE  2PZ','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(127,1,'V127','EQ LENTE ARTIZAN 2PZ','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(128,1,'V128','EQ. 3.5 MINIFRAGMENTOS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(129,1,'V129','EQ. ASPIRADOR ULTRASONICO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(130,1,'V130','EQ. COLUMNA N° 1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(131,1,'V131','EQ. COLUMNA N° 2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(132,1,'V132','EQ. COMPLEMENTARIO DE OIDO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(133,1,'V133','EQ. CORAZON “A”','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(134,1,'V134','EQ. DE ATROSCOPIA ATRHEX  N° 1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(135,1,'V135','EQ. DE ATROSCOPIA ATRHEX  N° 2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(136,1,'V136','EQ. DE CIERRE DE PARED','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(137,1,'V137','EQ. DE ENDOSCOPIA NASAL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(138,1,'V138','EQ. DE ESTERIOTAXIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(139,1,'V139','EQ. DE LAPAROSCOPIA URO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(140,1,'V140','EQ. DE LARINGOSCOPIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(141,1,'V141','EQ. DE MEÑISCOS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(142,1,'V142','EQ. DE NARIZ N°1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(143,1,'V143','EQ. DE NARIZ N°2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(144,1,'V144','EQ. DE OIDO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(145,1,'V145','EQ. DE PROCEDIMIENTOS N° 1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(146,1,'V146','EQ. DE PROCEDIMIENTOS N° 2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(147,1,'V147','EQ. DE PROCEDIMIENTOS N° 3','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(148,1,'V148','EQ. DE PROCTOLOGIA N°1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(149,1,'V149','EQ. DE PROCTOLOGIA N°2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(150,1,'V150','EQ. DE PROCTOLOGIA N°3','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(151,1,'V151','EQ. DE PROCTOLOGIA N°4','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(152,1,'V152','EQ. DE TUMORES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(153,1,'V153','EQ. DE VALVULA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(154,1,'V154','EQ. DE VANDA TVT N°1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(155,1,'V155','EQ. DE VANDA TVT N°2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(156,1,'V156','EQ. DE VANDA TVT N°3','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(157,1,'V157','EQ. DE VESICULA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(158,1,'V158','EQ. FRESADO DE OIDO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(159,1,'V159','EQ. GASPAR','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(160,1,'V160','EQ. GASTROSTOMIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(161,1,'V161','EQ. LAPAROSCOPIA STORZ  N° 1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(162,1,'V162','EQ. LAPAROSCOPIA STORZ  N° 2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(163,1,'V163','EQ. LAPAROSCOPIA STORZ  N° 3','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(164,1,'V164','EQ. LAPAROSCOPIA STORZ  N° 4','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(165,1,'V165','EQ. LAPAROSCOPIA STORZ  N° 5','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(166,1,'V166','EQ. LAPAROSCOPIA STORZ  N° 6','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(167,1,'V167','EQ. LAPAROSCOPIA STORZ BARIATRICA N°1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(168,1,'V168','EQ. LAPAROSCOPIA STORZ BARIATRICA N°2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(169,1,'V169','EQ. MOOR DE CADERA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(170,1,'V170','EQ. PERCUTANEO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(171,1,'V171','ESCOPLOS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(172,1,'V172','ESCOPLOS ( 7 ) MAXILOPLASTICA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(173,1,'V173','ESCORFINAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(174,1,'V174','ESOFAGOSCOPIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(175,1,'V175','ESPATULA DE DIALISIS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(176,1,'V176','ESPATULA LAP. URO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(177,1,'V177','ESPECULO VAGINAL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(178,1,'V178','ESPECULO VAGINAL PEQ','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(179,1,'V179','ESTILETES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(180,1,'V180','ESTRIBO DE KISHNER','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(181,1,'V181','ESTRIBO DE STEINMANN','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(182,1,'V182','EVACUADOR DE ELLIK','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(183,1,'V183','EXAMEN GINECOLOGICO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(184,1,'V184','EXTRACTORA DE VESÍCULA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(185,1,'V185','FLEBOESTRACTOR','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(186,1,'V186','FORCEPS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(187,1,'V187','FUKUDA 2 PZ','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(188,1,'V188','GANCHO DE ESTRABISMO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(189,1,'V189','GANCHO DE PIEL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(190,1,'V190','GUBIA Y CIZALLA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(191,1,'V191','HALO CRANEAL  BODEGA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(192,1,'V192','HARRINGTON','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(193,1,'V193','HERNIA N°1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(194,1,'V194','HERNIA N°2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(195,1,'V195','HERNIA N°3','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(196,1,'V196','HISTERECTOMIA N°1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(197,1,'V197','HISTERECTOMIA N°2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(198,1,'V198','HISTEROSCOPIO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(199,1,'V199','HOOK LAP. URO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(200,1,'V200','IMPACTOR DE GRAPAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(201,1,'V201','INS. MINI-PEQ FRAGMENTOS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(202,1,'V202','INST LAPAROSCOPIA 1 -2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(203,1,'V203','INST LAPAROSCOPIA 3-4','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(204,1,'V204','INST LAPAROSCOPIA 5 - 6','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(205,1,'V205','INST. BLOQUEO CLAVO UNIVERSAL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(206,1,'V206','INST. DE MAXILOFACIAL  VERTICALES 19PZ','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(207,1,'V207','INST. DE MAXILOFACIAL 17 PZ','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(208,1,'V208','INST. DE MAXILOFACIAL SAGITAL 19PZ','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(209,1,'V209','INST. INSERCION CLAVO UINIVERSAL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(210,1,'V210','INTESTINALES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(211,1,'V211','INYECTOR DE LENTE','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(212,1,'V212','JACOBS CON LLAVE','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(213,1,'V213','JARRAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(214,1,'V214','JUEGO DE PZ LAPAROSC.CX BARIATRICA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(215,1,'V215','KELLYS RECTAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(216,1,'V216','KOCHER','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(217,1,'V217','LAHEY','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(218,1,'V218','LAPAROSCOPIA INFANTIL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(219,1,'V219','LAPAROTOMIA N°1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(220,1,'V220','LAPAROTOMIA N°2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(221,1,'V221','LAPAROTOMIA N°3','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(222,1,'V222','LAPAROTOMIA N°4','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(223,1,'V223','LAPAROTOMIA N°5','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(224,1,'V224','LAPAROTOMIA N°6','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(225,1,'V225','LAPAROTOMIA PEDIATRICA N°1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(226,1,'V226','LAPAROTOMIA PEDIATRICA N°2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(227,1,'V227','LEGRAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(228,1,'V228','LIGADURA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(229,1,'V229','LITOTRIPTOR','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(230,1,'V230','MAMOPLASTIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(231,1,'V231','MANGO DE BISTURI','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(232,1,'V232','MANGO DE BISTURI LAP.','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(233,1,'V233','MANGO DE LAMPARA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(234,1,'V234','MANIPULADOR UTERINO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(235,1,'V235','MANO N° 1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(236,1,'V236','MANO N° 2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(237,1,'V237','MANO N° 3','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(238,1,'V238','MANO N° 4','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(239,1,'V239','MANOPLA/ SOPORTE  DE MANO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(240,1,'V240','MARTILLOS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(241,1,'V241','MAXILOPLASTIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(242,1,'V242','MESA DE MANO (PLASTICA)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(243,1,'V243','MICRO PINZAS BAYONETAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(244,1,'V244','MICROCIRUGIA PEDIATRICA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(245,1,'V245','MICROCIRUGIA PLASTICA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(246,1,'V246','MICROCIRUGIA T/O N° 1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(247,1,'V247','MICROCIRUGIA T/O N° 2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(248,1,'V248','MICROCIRUGIA VASCULAR N°1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(249,1,'V249','MICROCIRUGIA VASCULAR N°2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(250,1,'V250','MICROFRACTURADORES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(251,1,'V251','MICRO-NERVIOS PERIFERICOS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(252,1,'V252','MICRONEUROCIRUGIA DISECTORES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(253,1,'V253','MICRONEUROCIRUGIA TIJERAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(254,1,'V254','MORDAZA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(255,1,'V255','MOSQUITOS CURVOS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(256,1,'V256','NEFROSCOPIO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(257,1,'V257','OPTICA DE CADERA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(258,1,'V258','OPTICA DE CX GENERAL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(259,1,'V259','OPTICA DE RODILLA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(260,1,'V260','OPTICA DE TOBILLO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(261,1,'V261','OPTICA ENDOSCOPIA NASAL  Y DOC.','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(262,1,'V262','OPTICA NUEVA DE  0° CX GENERAL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(263,1,'V263','OPTICA NUEVA DE  30°','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(264,1,'V264','OPTICA UROLOGIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(265,1,'V265','OPTICAY NISSEN 30°','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(266,1,'V266','OSTEOSINTESIS N°1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(267,1,'V267','OSTEOSINTESIS N°2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(268,1,'V268','OSTEOSINTESIS N°3','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(269,1,'V269','OSTEOSINTESIS N°4','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(270,1,'V270','OTOSCOPIO NEGRO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(271,1,'V271','PALAS PARA DESFIBRILADOR','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(272,1,'V272','PARTOS N° 1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(273,1,'V273','PARTOS N° 2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(274,1,'V274','PARTOS N° 3','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(275,1,'V275','PARTOS N° 4','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(276,1,'V276','PARTOS N° 5','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(277,1,'V277','PASADOR DE HILO LAP.','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(278,1,'V278','PASADORES DE ALAMBRE','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(279,1,'V279','PASADORES DE VANDA TVT (AGUJAS HELICOIDALES)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(280,1,'V280','PEDICULO RENAL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(281,1,'V281','PELADOR Y CORTADOR  DE LASER','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(282,1,'V282','PEQUEÑAS ARTICULACIONES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(283,1,'V283','PEQUEÑOS FRAGMENTOS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(284,1,'V284','PERFORADOR SYNTHES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(285,1,'V285','PERILLAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(286,1,'V286','PIEZA DE MANO MAXILOFACIAL + LLAVE','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(287,1,'V287','PIEZAS DE MANO PARA FRESAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(288,1,'V288','PIEZAS DE MANO PARA SIERRAS SYNTHES (TRAUMAMED)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(289,1,'V289','PINZA DE BOLA LAP.','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(290,1,'V290','PINZA PARA MARCAR','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(291,1,'V291','PINZAS DE DISCO (paquete de 3)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(292,1,'V292','PINZAS DE UROLOGIA LAP ( DOSLEY)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(293,1,'V293','PINZAS KERRISON (paquete de 5)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(294,1,'V294','PLASTIA  N° 1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(295,1,'V295','PLASTIA  N° 2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(296,1,'V296','PLASTIA  N° 3','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(297,1,'V297','PLASTIA  N° A','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(298,1,'V298','PLASTIA  N° B','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(299,1,'V299','PLASTIA  N° C','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(300,1,'V300','PLASTIA DE EMERGENCIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(301,1,'V301','PLASTICA N°1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(302,1,'V302','PLASTICA N°2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(303,1,'V303','PLASTICA N°3','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(304,1,'V304','PLAYOS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(305,1,'V305','PLAYOS DE PRESION','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(306,1,'V306','PORTA AGUJAS CX BARIATRICA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(307,1,'V307','PORTA AGUJAS ETHICON UROLOGIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(308,1,'V308','PORTA AGUJAS NISSEN','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(309,1,'V309','PROCTOLOGIA INFANTIL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(310,1,'V310','PROSTATECTOMIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(311,1,'V311','PROTECTORES DE MICROS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(312,1,'V312','PUENTE DE UROLOGIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(313,1,'V313','PUNTA DE VITRECTOMIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(314,1,'V314','PUNTAS CUADRADAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(315,1,'V315','PUNTAS PATA DE CABRA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(316,1,'V316','PZ BIPOLAR+CABLE','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(317,1,'V317','PZ BIPOLAR+CABLE OPT','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(318,1,'V318','PZ DE ARTROSCOPIA  (PAQUETE DE 4 PZS)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(319,1,'V319','PZ DE CATARATA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(320,1,'V320','PZ DE COLANGIOGRAFIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(321,1,'V321','PZ DE NEFRECTOMIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(322,1,'V322','PZ DE VITRECTOMIA 4PZ +COCODRILO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(323,1,'V323','PZ RECUPERADORA  DE SUTURA  (PESCA HILOS)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(324,1,'V324','PZ TRIDENTE','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(325,1,'V325','PZ. ARO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(326,1,'V326','PZ. BABCOCK LAP.','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(327,1,'V327','PZ. BABY TISCHLER (BIOPSIA)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(328,1,'V328','PZ. COCODRILO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(329,1,'V329','PZ. CUERPO EXTRAÑO ORL.','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(330,1,'V330','PZ. DE CAMPO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(331,1,'V331','PZ. DE CORTE','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(332,1,'V332','PZ. DE PROSTATA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(333,1,'V333','PZ. GINE','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(334,1,'V334','PZ. LARGAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(335,1,'V335','PZ. TISCHLER (BIOPSIA)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(336,1,'V336','RALLADOR','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(337,1,'V337','REDUCCION INCRUENTA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(338,1,'V338','RESECTOSCOPIO F CONTINUO N°1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(339,1,'V339','RESECTOSCOPIO F CONTINUO N°2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(340,1,'V340','RETRACTOR DE URO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(341,1,'V341','RETRACTORES ABDOMINALES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(342,1,'V342','REVISION DE GINECOLOGIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(343,1,'V343','RINOPLASTIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(344,1,'V344','ROCHESTER','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(345,1,'V345','SACAGRAPAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(346,1,'V346','SACA-GRAPAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(347,1,'V347','SEMILUNA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(348,1,'V348','SENMILLER','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(349,1,'V349','SEP DE GELPI','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(350,1,'V350','SEP. BALFOUR','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(351,1,'V351','SEP. BENNETT','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(352,1,'V352','SEP. COLUMNA (7PZ)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(353,1,'V353','SEP. COLUMNA TITANIO  (34PZ)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(354,1,'V354','SEP. DE COLUMNA LARGOS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(355,1,'V355','SEP. DE COLUMNA SCOVILLE','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(356,1,'V356','SEP. DE FINOCHIETO Y ESTERNON','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(357,1,'V357','SEP. DE MAMA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(358,1,'V358','SEP. DE ROCHARD','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(359,1,'V359','SEP. DE VENA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(360,1,'V360','SEP. FARABEU','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(361,1,'V361','SEP. HOFFMAN','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(362,1,'V362','SEP. SULLIVAN','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(363,1,'V363','SEP. TAYLOR','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(364,1,'V364','SEP. WEITLANER','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(365,1,'V365','SEP. WOLMAN','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(366,1,'V366','SEP.ESPINAL N/C','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(367,1,'V367','SEPARADOR DE LEYLA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(368,1,'V368','SEPARADOR DE RAIZ','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(369,1,'V369','SEPARADOR EN "S" (2PZ)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(370,1,'V370','SEPARADOR RICHARDSON','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(371,1,'V371','SET DE AGUJAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(372,1,'V372','SET DE SUCCION/IRRIGACIÓN (4PZ)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(373,1,'V373','SET.  TREPANO ESTEREOTAXICO CAJA N ° 3','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(374,1,'V374','SETS. DE IEQ. CLIPS ANEURISMA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(375,1,'V375','SHAVER DE NEUROCIRUGIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(376,1,'V376','SHAVER ERGO ARTROSCOPIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(377,1,'V377','SIERRA DE ESTERNON','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(378,1,'V378','SIERRA DE GIGLES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(379,1,'V379','SIERRA DE MAXILOFACIAL + LLAVE','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(380,1,'V380','SIERRA STRYKER','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(381,1,'V381','SIERRA Y PERFORADOR COMPAC DRIVE','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(382,1,'V382','SIERRAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(383,1,'V383','SINUSITIS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(384,1,'V384','SISTEMA DE SEPARADORES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(385,1,'V385','SONDA ACANALADA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(386,1,'V386','SUBDURAL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(387,1,'V387','TABIQUE N° 1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(388,1,'V388','TABIQUE N° 2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(389,1,'V389','TENOTOMOS (2 PZS)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(390,1,'V390','TIJERA BIPOLAR NEGRA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(391,1,'V391','TIJERA DE ALAMBRE','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(392,1,'V392','TIJERA IRIS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(393,1,'V393','TIJERA STEVENS CURVA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(394,1,'V394','TIJERA STEVENS RECTA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(395,1,'V395','TIJERAS DE SALA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(396,1,'V396','TIROIDES','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(397,1,'V397','TORACOSCOPIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(398,1,'V398','TORAX ADULTO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(399,1,'V399','TORAX INFANTIL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(400,1,'V400','TRANSESFENOIDAL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(401,1,'V401','TRANSPLANTE RENAL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(402,1,'V402','TRAQUEOSTOMIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(403,1,'V403','TREPANO DE HUDSON','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(404,1,'V404','TROCAR DE UROLOGIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(405,1,'V405','URETEROSCOPIO FLEXIBLE STORZ caja ploma','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(406,1,'V406','URETEROSCOPIO RIGIDO wolf  storz','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(407,1,'V407','URETEROSCOPIO SEMI RIGIDO  storz','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(408,1,'V408','URETROTOMO R. WOLF','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(409,1,'V409','VALVA DE PESO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(410,1,'V410','VALVAS GINECOLOGICAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(411,1,'V411','VARICES N° 1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(412,1,'V412','VARICES N° 2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(413,1,'V413','VARICES N° 3','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(414,1,'V414','VASCULAR ABDOMINAL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(415,1,'V415','VASCULAR PERIFERICO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(416,1,'V416','VIA CENTRAL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(417,1,'V417','VIA SUBCLAVIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(418,1,'V418','VRT. M. INFERIOR','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(419,1,'V419','BATA + TOALLA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(420,1,'V420','COMPLEMENTARIO DE CADERA N°1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(421,1,'V421','COMPLEMENTARIO DE CADERA N°2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(422,1,'V422','MAXILO-ONCOLOGICA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(423,1,'V423','INJERTO OSEO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(424,1,'V424','EQ. LEFORT ORTOG. VERTICAL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(425,1,'V425','TRAUMA  FACIAL MANDIBULAR','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(426,1,'V426','ORTOGMATICA SAGITAL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(427,1,'V427','EQ. DE ORBITA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(428,1,'V428','PLASTIA GENERAL N°1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(429,1,'V429','PLASTIA GENERAL N°2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(430,1,'V430','PLASTIA  N° 5','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(431,1,'V431','DERMATOMO BRAUN/ SOUTTEL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(432,1,'V432','MALLADOR BRAUN','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(433,1,'V433','PINZA CUCHARA POSPARTO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(434,1,'V434','PINZAS SE DISCO COLUMNA CERVICAL (14)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(435,1,'V435','SEPARADOR DE CLOWARD','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(436,1,'V436','CURETAS DE NEUROCIRUGIA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(437,1,'V437','ESFERAS DE NEURONAVEGADOR','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(438,1,'V438','COMPLEMENTARIO DE  COLUMNA N°  1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(439,1,'V439','COMPLEMENTARIO DE  COLUMNA N°  2','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(440,1,'V440','OPTICA DE MUÑECA','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(441,1,'V441','OPTICA DE TUNEL CARPIANO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(442,1,'V442','INSTRUMENTAL DE PEQUEÑOS FRAGMENTOS PARA TORNILLOS CANULADO 20 PZ','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(443,1,'V443','TORNILLOS CANULADOS MANO INTERFALANGE (2,25 - 3,0)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(444,1,'V444','INSTRUMENTAL PARA TORNILLOS CANULADOS 6,0','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(445,1,'V445','TORNILLOS CANULADOS 6.0','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(446,1,'V446','EQ. KUNCHER HE-1','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(447,1,'V447','EQUIPO DISTAL - OLECRANEON 2,7 /2,9 / 3,5','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(448,1,'V448','EQUIPO DE CLAVICULA - HUMERO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(449,1,'V449','GUIAS FEMORALES  (4PIEZAS)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(450,1,'V450','PERFORADOR MANUAL ( HE-1 )','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(451,1,'V451','SISTEMA PARA MANO/PIE  MINIFRAGMENTOS 2,0/1,3/1,5 BLOQUEO-CORTICAL','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(452,1,'V452','SISTEMA PARA OLECRANEON','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(453,1,'V453','CLAVICULA 3,5 - 2,7','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(454,1,'V454','SISTEMA PARA TOBILLO A Y B','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(455,1,'V455','SISTEMA PARA MUÑECA  MIEMBRO SUPERIOR B  (3,2 - 2,3)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(456,1,'V456','SISTEMA PARA PIE DELANTERO','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(457,1,'V457','SISTEMA DE TORNILLOS CANULADOS GRANDES COMPRESION (5,5 - 7,3)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(458,1,'V458','COPA SUBTALAR  (ARTRODESIS SUBASTRAGALINA)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(459,1,'V459','ACORTAMIENTO CUBITAL 23 PIEZAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(460,1,'V460','EQ. PERONE / CLAVOS TENS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(461,1,'V461','SET COMPLETO INSTRUMENTAL L.C.A 61 PIEZAS','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(462,1,'V462','EQUIPO PARA CIRUGIA DE MANGUITO ROTADOR (3PAQUETES)','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(463,1,'V463','MAXILOFACIAL 32 piezas','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(464,1,'ANGIO1','Asepsia 8 pinzas','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(465,1,'ANGIO2','Semiluna','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(466,1,'ANGIO3','Pocillo','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(467,1,'ANGIO4','Eq. Plastia 21 piezas','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(468,1,'ANGIO5','Porta aguja','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(469,1,'ANGIO6','Eq. Plastia 25 piezas','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(470,1,'ANGIO7','Mangas','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(471,1,'ANGIO8','Manga de Electro','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(472,1,'URO1','Beniquez x 6','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(473,1,'URO2','Beniquez x 10','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(474,1,'URO3','Beniquez x 11','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(475,1,'URO4','Semiluna','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(476,1,'URO5','Bandeja con tapa','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(477,1,'URO6','Bandeja pequeña','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(478,1,'URO7','Eq. Vasectomía 13 + bandeja','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(479,1,'URO8','Ed. Plastia 8 piezas','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(480,1,'DER1','Eq. Exeresis','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(481,1,'DER2','Eq. Uñas','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(482,1,'DER3','Eq. Biopsia','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(483,1,'DER4','Eq. Curación','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(484,1,'DER5','Eq. Retiro de puntos','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(485,1,'DER6','Cureta','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(486,1,'TRAU1','Pinza Mosquito','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(487,1,'TRAU2','Playo','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(488,1,'TRAU3','Semiluna','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(489,1,'TRAU4','Eq. Curación','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(490,1,'PROC1','Pinza Aro','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(491,1,'PROC2','Eq. Curación 2 piezas','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(492,1,'PF1','Espéculo','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(493,1,'PF2','Pinza Nova','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(494,1,'PF3','Pinza Aro','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(495,1,'PF4','Eq. Inserción','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(496,1,'PF5','Tijera','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(497,1,'PF6','Eq. Biopsia','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(498,1,'PF7','Lavacara','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(499,1,'PF8','Pinza Kelly','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(500,1,'CXP1','Rinoscopia','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(501,1,'CXP2','Eq. Sutura','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(502,1,'CXV1','Equipo de Curación','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(503,1,'CXV2','Pinza Mosquito','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(504,1,'GE1','Frasco','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(505,1,'GE2','Tapa ley ton','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(506,1,'GE3','Tubo ley ton','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(507,1,'GE4','Pipeta','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(508,1,'ODON1','Carpul','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(509,1,'ODON2','Kit Odontologico','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(510,1,'ODON3','Contrangulo','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(511,1,'ODON4','Copa','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(512,1,'ODON5','Cureta','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(513,1,'ODON6','Dejes','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(514,1,'ODON7','Destornillador','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(515,1,'ODON8','Elevador recto','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(516,1,'ODON9','Eq Operatorio 5 piezas','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(517,1,'ODON10','Eq. Conexión','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(518,1,'ODON11','Eq. de 15 pinzas','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(519,1,'ODON12','Eq. Diagnóstico 3 piezas','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(520,1,'ODON13','Eq. Operatorio 4 pinzas','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(521,1,'ODON14','Eq. Operatorio 5 piezas','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(522,1,'ODON15','Eq. Operatorio 7 piezas','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(523,1,'ODON16','Eq. Quirúrgico','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(524,1,'ODON17','Eq. Retiro de puntos','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(525,1,'ODON18','Cucharilla','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(526,1,'ODON19','Espejo','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(527,1,'ODON20','Fórceps inferior','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(528,1,'ODON21','Fórceps superior','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(529,1,'ODON22','Fresa','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(530,1,'ODON23','Fresero','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(531,1,'ODON24','Horquilla','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(532,1,'ODON25','Tornillos x 2 und','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(533,1,'ODON26','Lima','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(534,1,'ODON27','Pocillo','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(535,1,'ODON28','Gancho','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(536,1,'ODON29','Succión','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(537,1,'ODON30','Winter','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(538,1,'ODON31','Regla','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(539,1,'ODON32','Punta Cavitron','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(540,1,'ODON33','Perforadora','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(541,1,'ODON34','Arco','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(542,1,'ODON35','Block','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(543,1,'ODON36','Abreboca','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(544,1,'ODON37','Saca Corona','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(545,1,'ODON38','Espatula','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(546,1,'ODON39','Porta Clamp','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(547,1,'ODON40','Grapas','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(548,1,'GINE1','Pinza Aro','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(549,1,'GINE2','Equipo de inserción','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(550,1,'ONCO1','Biopsia 15 pinzas','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(551,1,'ONCO2','Eq. Curación','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(552,1,'ACU1','Campo de Lumbar','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(553,1,'ACU2','Campo de Rodilla','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(554,1,'COFT1','Campo de ojo','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(555,1,'COFT2','Semiluna','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(556,1,'COFT3','Pocillo metálico','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(557,1,'COFT4','Eq. Pterigio','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(558,1,'COFT5','Tapas para Microscopio','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(559,1,'COFT6','Funda para Microscopio','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(560,1,'NEFRO1','Bata','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(561,1,'NEFRO2','Campo de ojo','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(562,1,'NEFRO3','Cambio de línea','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(563,1,'NEFRO4','Eq. Sutura','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(564,1,'NEFRO5','Manga de electro','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(565,1,'NEFRO6','Campo doble','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(566,1,'CI1','Bata - PISO Nro. 4','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(567,1,'CI2','Campo de ojo - PISO Nro. 4','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(568,1,'CI3','Vía central lencería - PISO Nro. 4','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(569,1,'CI4','Eq. Sutura - PISO Nro. 4','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(570,1,'CI5','Eq. Curación - PISO Nro. 4','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(571,1,'CI6','Eq. Traqueotomía - PISO Nro. 4','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(572,1,'CI7','Pinza Aro - PISO Nro. 4','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(573,1,'CI8','Pinza Maguil - PISO Nro. 4','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(574,1,'CI9','Campo Simple - PISO Nro. 4','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(575,1,'HX1','Eq. Curación - PISO Nro. 5','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(576,1,'HX2','Campo de ojo - PISO Nro. 5','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(577,1,'HX3','Bata - PISO Nro. 5','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(578,1,'HX4','Eq. Curación - PISO Nro. 8','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(579,1,'HX5','Eq. Curación - PISO Nro. 9','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(580,1,'HX6','NPT - PISO Nro. 11','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(581,1,'HX7','Ropa para Hemocultivo - PISO Nro. 11','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(582,1,'HX8','Espéculo - PISO Nro. 12','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(583,1,'HX9','Porta esponja - PISO Nro. 12','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(584,1,'HX10','Pinza de Aminoréis - PISO Nro. 12','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(585,1,'HX11','Pinza Aro - PISO Nro. 12','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(586,1,'HX12','NPT - PISO Nro. 12','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(587,1,'E1','Bata + Toalla','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(588,1,'E2','Vía central','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(589,1,'E3','Campo de ojo','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(590,1,'E4','Semiluna','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(591,1,'E5','Eq. Curación','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(592,1,'E6','Eq. Sutura','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(593,1,'E7','Pinza Anatómica','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(594,1,'E8','Campo mediano','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(595,1,'E9','Pinza Porta Esponja','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(596,1,'E10','Pinza Maguil','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(597,1,'ECO1','Campo de  Ojo','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(598,1,'ECO2','Bata','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(599,1,'ECO3','Funda de electro','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(600,1,'NEO1','Semiluna','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(601,1,'NEO2','Perilla','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(602,1,'NEO3','Lavacara','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(603,1,'NEO4','Eq. Umbilical','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(604,1,'NEO5','Eq. Sutura','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(605,1,'NEO6','Vía Central','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(606,1,'NEO7','NPT','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(607,1,'NEO8','Pinza Anatómica','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(608,1,'NEO9','Torunda','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(609,1,'CDE1','Eq. Curación S/B','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(610,1,'CDE2','Eq. Sutura','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(611,1,'CDE3','Eq. Inserción','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(612,1,'CDE4','Espéculo','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(613,1,'CDE5','Lavacara','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(614,1,'CDE6','Jarra','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(615,1,'CDE7','Media sabana','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(616,1,'CDE8','Ropa de partos','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(617,1,'CDE9','Recién Nacidos','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(618,1,'CDE10','Básico de Ropa','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(619,1,'CDE11','Básico de Cistoscopia','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(620,1,'CDE12','Básico de Oftalmología','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(621,1,'CDE13','Campos de ojo de Sop.','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(622,1,'CDE14','Campos de ojo de Oft.','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(623,1,'CDE15','Campos de Instrumental','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(624,1,'CDE16','Campo mediano','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(625,1,'CDE17','Blusa','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(626,1,'CDE18','Bolsillo','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(627,1,'CDE19','Funda de electro','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(628,1,'CDE20','Básico de nariz','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(629,1,'CDE21','Funda mayo','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(630,1,'CDE22','Poncho de ginecología','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(631,1,'CDE23','Poncho abierto','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(632,1,'CDE24','Poncho de neurocirugía','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(633,1,'CDE25','Básico de Ganz','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(634,1,'CDE26','Punción lumbar','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(635,1,'CDE27','Material blanco','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(636,1,'CDE28','Eq. Curación C/B','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(637,1,'CDE29','Mangas','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');
INSERT INTO `coderumeds` (`id`, `user_id`, `coderumed_id`, `name_coderumed`, `join_date_coderumed`, `category`, `area`, `detalls`, `created_at`, `updated_at`) VALUES
(638,1,'CDE30','Poncho de Otologia','Tue, Mar 12, 2024 11:12 AM','Añademe','Añademe','Añademe','2024-03-12 11:12:12','2024-03-12 11:12:12');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `coderumeds`
--
ALTER TABLE `coderumeds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coderumeds_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coderumeds`
--
ALTER TABLE `coderumeds`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coderumeds`
--
/*ALTER TABLE `coderumeds`
  ADD CONSTRAINT `coderumeds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE; */ /*TODO: Chequear si es necesario*/
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

