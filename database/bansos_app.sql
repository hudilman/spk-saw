-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 17 Agu 2023 pada 13.41
-- Versi server: 5.7.40
-- Versi PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bansos_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agent`
--

DROP TABLE IF EXISTS `agent`;
CREATE TABLE IF NOT EXISTS `agent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(60) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `regency` varchar(30) NOT NULL,
  `village` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `token_agent` varchar(50) NOT NULL,
  `token_project` varchar(60) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agent`
--

INSERT INTO `agent` (`id`, `nik`, `name`, `email`, `username`, `date_of_birth`, `gender`, `regency`, `village`, `address`, `token_agent`, `token_project`, `datetime`) VALUES
(5, '4434434', 'testing', 'admin@admin.com', '232322', '2023-07-19', 'male', 'serua', 'bulak', 'test', 'f53dc4e744b524e364198192b062547f', 'bb3f80d71b45840165bc7dda700c4309', '2023-07-19 15:21:31'),
(7, '909090', 'algi', 'admin@admin.com', '80910921', '2023-07-30', 'female', 'asdsad', 'asdsad', 'sadasda', '97f6901b04266c1734aed73fcd91c908', 'bb3f80d71b45840165bc7dda700c4309', '2023-07-30 15:30:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `benefisiery`
--

DROP TABLE IF EXISTS `benefisiery`;
CREATE TABLE IF NOT EXISTS `benefisiery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(60) NOT NULL,
  `token_project` varchar(60) NOT NULL,
  `token_resident` varchar(60) NOT NULL,
  `token_disbursement` varchar(60) NOT NULL,
  `amount` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `benefisiery`
--

INSERT INTO `benefisiery` (`id`, `nik`, `token_project`, `token_resident`, `token_disbursement`, `amount`) VALUES
(1, '00716080', 'bb3f80d71b45840165bc7dda700c4309', 'c7fd49f26aab15379e3e0011bbd59207', '8bbf857ce45f59c98e9467fae9d6390f', '41.7'),
(2, '000800216', 'bb3f80d71b45840165bc7dda700c4309', 'c8428b8e0699029dd2786c069a7ce18f', '8b651ffaaf3716bf2d295695501dd870', '21.7'),
(3, '0242938', 'bb3f80d71b45840165bc7dda700c4309', 'e3aff6e27d1ee1cc9575bc2ae1e2fe95', '97092ed5248289c72ad84e73155d902e', '21.7'),
(4, '00302391', 'bb3f80d71b45840165bc7dda700c4309', '965109f87cf5413f2357ef47e5fd434b', '9b11f73005ddf8e9faa835f4a91b2ba3', '16.7'),
(5, '000751152', 'bb3f80d71b45840165bc7dda700c4309', 'd0d52b119e77d42c434864cd61270d8d', '4e39635a0d7310e7934ba999924773b0', '21.7'),
(6, '00725640', 'bb3f80d71b45840165bc7dda700c4309', 'a3c40ffbdc178e53f887b77795d5f1bf', 'bcbb5f826e18aeac687b0fe88672c3dc', '21.7'),
(7, '0122365', 'bb3f80d71b45840165bc7dda700c4309', 'ed45f1af4d4af47c9549c157fae391ea', 'bd03c86850e6768fd66fb9481bc22cfa', '36.7'),
(8, '0732062', 'bb3f80d71b45840165bc7dda700c4309', 'c6a3172e605e376d418c07eea8ca2261', 'b12bec607d11098cf3034ecbd274ede1', '21.7'),
(9, '00708022', 'bb3f80d71b45840165bc7dda700c4309', '2ca0a829124f7a4e4fbd86352e0fbd2e', '4a106256d7898bc53fd99ba32f20a88d', '21.7'),
(10, '000751601', 'bb3f80d71b45840165bc7dda700c4309', '0a1d7fe55a02a9a8dc28ac22ce55c38a', '7e30e2493925bdc3447ca3000cd8c9b7', '121.7'),
(11, '000646200', 'bb3f80d71b45840165bc7dda700c4309', 'ba62c91ec725100cfebcd723cea5d97c', '81c127129fe53abd19bb53df75b20c91', '21.7'),
(12, '000170179', 'bb3f80d71b45840165bc7dda700c4309', 'fe5ad504ae58d6c4bee96ed41eaac616', '68dd48c15cb96573ece07f2053c0eb0d', '16.7'),
(13, '0371236', 'bb3f80d71b45840165bc7dda700c4309', '9753aa39c79cbbb600f38be1b2672bbf', '1bec4fbfbea9af7bb6c47d0ba97ff9f3', '81.7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bind_resident_and_project`
--

DROP TABLE IF EXISTS `bind_resident_and_project`;
CREATE TABLE IF NOT EXISTS `bind_resident_and_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(60) NOT NULL,
  `token_project` varchar(60) NOT NULL,
  `token_resident` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bind_resident_and_project`
--

INSERT INTO `bind_resident_and_project` (`id`, `nik`, `token_project`, `token_resident`) VALUES
(72, '0371236', 'bb3f80d71b45840165bc7dda700c4309', '9753aa39c79cbbb600f38be1b2672bbf'),
(79, '101010101', 'bb3f80d71b45840165bc7dda700c4309', '672ead4a74d90d1096acff08e5100ab3'),
(60, '00716080', 'bb3f80d71b45840165bc7dda700c4309', 'c7fd49f26aab15379e3e0011bbd59207'),
(61, '000800216', 'bb3f80d71b45840165bc7dda700c4309', 'c8428b8e0699029dd2786c069a7ce18f'),
(62, '0242938', 'bb3f80d71b45840165bc7dda700c4309', 'e3aff6e27d1ee1cc9575bc2ae1e2fe95'),
(63, '00302391', 'bb3f80d71b45840165bc7dda700c4309', '965109f87cf5413f2357ef47e5fd434b'),
(64, '000751152', 'bb3f80d71b45840165bc7dda700c4309', 'd0d52b119e77d42c434864cd61270d8d'),
(65, '00725640', 'bb3f80d71b45840165bc7dda700c4309', 'a3c40ffbdc178e53f887b77795d5f1bf'),
(66, '0122365', 'bb3f80d71b45840165bc7dda700c4309', 'ed45f1af4d4af47c9549c157fae391ea'),
(67, '0732062', 'bb3f80d71b45840165bc7dda700c4309', 'c6a3172e605e376d418c07eea8ca2261'),
(68, '00708022', 'bb3f80d71b45840165bc7dda700c4309', '2ca0a829124f7a4e4fbd86352e0fbd2e'),
(69, '000751601', 'bb3f80d71b45840165bc7dda700c4309', '0a1d7fe55a02a9a8dc28ac22ce55c38a'),
(70, '000646200', 'bb3f80d71b45840165bc7dda700c4309', 'ba62c91ec725100cfebcd723cea5d97c'),
(71, '000170179', 'bb3f80d71b45840165bc7dda700c4309', 'fe5ad504ae58d6c4bee96ed41eaac616');

-- --------------------------------------------------------

--
-- Struktur dari tabel `disbursement`
--

DROP TABLE IF EXISTS `disbursement`;
CREATE TABLE IF NOT EXISTS `disbursement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(60) NOT NULL,
  `regency` varchar(60) NOT NULL,
  `village` varchar(60) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `desc_disbursement` text NOT NULL,
  `token_disbursement` varchar(60) NOT NULL,
  `token_project` varchar(60) NOT NULL,
  `token_upload_disbursement` varchar(60) NOT NULL,
  `upload_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `disbursement`
--

INSERT INTO `disbursement` (`id`, `nik`, `username`, `name`, `regency`, `village`, `amount`, `desc_disbursement`, `token_disbursement`, `token_project`, `token_upload_disbursement`, `upload_date`) VALUES
(1, '00716080', '67075722717', 'Abelita A. Goncalves Ximenes', 'Bobonaro', 'Aidabaleten', '41.7', 'BDMJF  Aidabaleten Marsu 2023', '8bbf857ce45f59c98e9467fae9d6390f', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(2, '000800216', '67076722159', 'Adelia dos Santos', 'Bobonaro', 'Aidabaleten', '21.7', 'BDMJF  Aidabaleten Marsu 2023', '8b651ffaaf3716bf2d295695501dd870', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(3, '0242938', '67076099215', 'Adelia Tavares', 'Bobonaro', 'Aidabaleten', '21.7', 'BDMJF  Aidabaleten Marsu 2023', '97092ed5248289c72ad84e73155d902e', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(4, '00302391', '67078337400', 'Adelina Soares', 'Bobonaro', 'Aidabaleten', '16.7', 'BDMJF  Aidabaleten Marsu 2023', '9b11f73005ddf8e9faa835f4a91b2ba3', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(5, '000751152', '67075503920', 'Adriana Bete', 'Bobonaro', 'Aidabaleten', '21.7', 'BDMJF  Aidabaleten Marsu 2023', '4e39635a0d7310e7934ba999924773b0', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(6, '00725640', '67076235874', 'Adriana Celeste Amaral', 'Bobonaro', 'Aidabaleten', '21.7', 'BDMJF  Aidabaleten Marsu 2023', 'bcbb5f826e18aeac687b0fe88672c3dc', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(7, '0122365', '67076655116', 'Adriana Martins', 'Bobonaro', 'Aidabaleten', '36.7', 'BDMJF  Aidabaleten Marsu 2023', 'bd03c86850e6768fd66fb9481bc22cfa', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(8, '0732062', '67076773651', 'Agueda Gusmao', 'Bobonaro', 'Aidabaleten', '21.7', 'BDMJF  Aidabaleten Marsu 2023', 'b12bec607d11098cf3034ecbd274ede1', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(9, '00708022', '67076699091', 'Agueda Pires', 'Bobonaro', 'Aidabaleten', '21.7', 'BDMJF  Aidabaleten Marsu 2023', '4a106256d7898bc53fd99ba32f20a88d', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(10, '000751601', '67075491501', 'Aguida da Costa', 'Bobonaro', 'Aidabaleten', '121.7', 'BDMJF  Aidabaleten Marsu 2023', '7e30e2493925bdc3447ca3000cd8c9b7', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(11, '000646200', '67076450219', 'Aguida de Jesus da Costa', 'Bobonaro', 'Aidabaleten', '21.7', 'BDMJF  Aidabaleten Marsu 2023', '81c127129fe53abd19bb53df75b20c91', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(12, '000170179', '67076505169', 'Aguida Pires', 'Bobonaro', 'Aidabaleten', '16.7', 'BDMJF  Aidabaleten Marsu 2023', '68dd48c15cb96573ece07f2053c0eb0d', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(13, '0371236', '67075717397', 'Agusta Belina Fontes', 'Bobonaro', 'Aidabaleten', '81.7', 'BDMJF  Aidabaleten Marsu 2023', '1bec4fbfbea9af7bb6c47d0ba97ff9f3', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `disbursement_file_log`
--

DROP TABLE IF EXISTS `disbursement_file_log`;
CREATE TABLE IF NOT EXISTS `disbursement_file_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(50) NOT NULL,
  `total_record` int(11) NOT NULL,
  `total_amount` varchar(50) NOT NULL,
  `token_upload_disbursement` varchar(60) NOT NULL,
  `upload_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `disbursement_file_log`
--

INSERT INTO `disbursement_file_log` (`id`, `filename`, `total_record`, `total_amount`, `token_upload_disbursement`, `upload_date`) VALUES
(1, 'example-disbursement (2).xlsx', 13, '467.1', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `disbursement_log`
--

DROP TABLE IF EXISTS `disbursement_log`;
CREATE TABLE IF NOT EXISTS `disbursement_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(60) NOT NULL,
  `regency` varchar(60) NOT NULL,
  `village` varchar(60) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `desc_disbursement` text NOT NULL,
  `token_disbursement` varchar(60) NOT NULL,
  `token_project` varchar(60) NOT NULL,
  `token_upload_disbursement` varchar(60) NOT NULL,
  `upload_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `disbursement_log`
--

INSERT INTO `disbursement_log` (`id`, `nik`, `username`, `name`, `regency`, `village`, `amount`, `desc_disbursement`, `token_disbursement`, `token_project`, `token_upload_disbursement`, `upload_date`) VALUES
(1, '00716080', '67075722717', 'Abelita A. Goncalves Ximenes', 'Bobonaro', 'Aidabaleten', '41.7', 'BDMJF  Aidabaleten Marsu 2023', '8bbf857ce45f59c98e9467fae9d6390f', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(2, '000800216', '67076722159', 'Adelia dos Santos', 'Bobonaro', 'Aidabaleten', '21.7', 'BDMJF  Aidabaleten Marsu 2023', '8b651ffaaf3716bf2d295695501dd870', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(3, '0242938', '67076099215', 'Adelia Tavares', 'Bobonaro', 'Aidabaleten', '21.7', 'BDMJF  Aidabaleten Marsu 2023', '97092ed5248289c72ad84e73155d902e', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(4, '00302391', '67078337400', 'Adelina Soares', 'Bobonaro', 'Aidabaleten', '16.7', 'BDMJF  Aidabaleten Marsu 2023', '9b11f73005ddf8e9faa835f4a91b2ba3', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(5, '000751152', '67075503920', 'Adriana Bete', 'Bobonaro', 'Aidabaleten', '21.7', 'BDMJF  Aidabaleten Marsu 2023', '4e39635a0d7310e7934ba999924773b0', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(6, '00725640', '67076235874', 'Adriana Celeste Amaral', 'Bobonaro', 'Aidabaleten', '21.7', 'BDMJF  Aidabaleten Marsu 2023', 'bcbb5f826e18aeac687b0fe88672c3dc', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(7, '0122365', '67076655116', 'Adriana Martins', 'Bobonaro', 'Aidabaleten', '36.7', 'BDMJF  Aidabaleten Marsu 2023', 'bd03c86850e6768fd66fb9481bc22cfa', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(8, '0732062', '67076773651', 'Agueda Gusmao', 'Bobonaro', 'Aidabaleten', '21.7', 'BDMJF  Aidabaleten Marsu 2023', 'b12bec607d11098cf3034ecbd274ede1', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(9, '00708022', '67076699091', 'Agueda Pires', 'Bobonaro', 'Aidabaleten', '21.7', 'BDMJF  Aidabaleten Marsu 2023', '4a106256d7898bc53fd99ba32f20a88d', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(10, '000751601', '67075491501', 'Aguida da Costa', 'Bobonaro', 'Aidabaleten', '121.7', 'BDMJF  Aidabaleten Marsu 2023', '7e30e2493925bdc3447ca3000cd8c9b7', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(11, '000646200', '67076450219', 'Aguida de Jesus da Costa', 'Bobonaro', 'Aidabaleten', '21.7', 'BDMJF  Aidabaleten Marsu 2023', '81c127129fe53abd19bb53df75b20c91', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(12, '000170179', '67076505169', 'Aguida Pires', 'Bobonaro', 'Aidabaleten', '16.7', 'BDMJF  Aidabaleten Marsu 2023', '68dd48c15cb96573ece07f2053c0eb0d', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34'),
(13, '0371236', '67075717397', 'Agusta Belina Fontes', 'Bobonaro', 'Aidabaleten', '81.7', 'BDMJF  Aidabaleten Marsu 2023', '1bec4fbfbea9af7bb6c47d0ba97ff9f3', 'bb3f80d71b45840165bc7dda700c4309', 'a4b5f4f77d69986d16fa3a799af03a14', '2023-08-15 09:33:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partner`
--

DROP TABLE IF EXISTS `partner`;
CREATE TABLE IF NOT EXISTS `partner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token_project` varchar(60) NOT NULL,
  `token_partner` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `partner`
--

INSERT INTO `partner` (`id`, `token_project`, `token_partner`) VALUES
(4, '7d469b8f6771911a5945c0c52146d7a3', '43d646e08fbbc9905e6a8dff2e3ab90e'),
(3, '7d469b8f6771911a5945c0c52146d7a3', 'ff67f4f68c24b86780d65cecc23a4352'),
(5, '6edc11e7a7c585977fc4ab3e52634782', '43d646e08fbbc9905e6a8dff2e3ab90e'),
(6, 'bb3f80d71b45840165bc7dda700c4309', 'ff67f4f68c24b86780d65cecc23a4352'),
(7, 'bb3f80d71b45840165bc7dda700c4309', 'df700fe74fad637141382f908a8b6144'),
(8, 'f5db87747da98b5c8b30c8391a6cae53', '43d646e08fbbc9905e6a8dff2e3ab90e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token_project` varchar(60) NOT NULL,
  `token_resident` varchar(60) NOT NULL,
  `token_agent` varchar(60) DEFAULT NULL,
  `token_payment` varchar(60) NOT NULL,
  `amount` int(11) NOT NULL,
  `status_payment` enum('waiting','failed','success') NOT NULL,
  `description_paid` text,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`id`, `token_project`, `token_resident`, `token_agent`, `token_payment`, `amount`, `status_payment`, `description_paid`, `created_at`) VALUES
(4, 'bb3f80d71b45840165bc7dda700c4309', '9753aa39c79cbbb600f38be1b2672bbf', '97f6901b04266c1734aed73fcd91c908', 'af9d75a13663646d327157cc779ac27a', 200, 'success', 'ini testing', '2023-08-02 04:29:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment_temp`
--

DROP TABLE IF EXISTS `payment_temp`;
CREATE TABLE IF NOT EXISTS `payment_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(20) NOT NULL,
  `token_project` varchar(60) NOT NULL,
  `token_resident` varchar(60) NOT NULL,
  `token_payment` varchar(60) NOT NULL,
  `token_agent` varchar(60) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `code_otp` int(11) DEFAULT NULL,
  `pin_or_biometrics` varchar(60) DEFAULT NULL,
  `status_payment` enum('waiting','failed','success') NOT NULL,
  `description_paid` text,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `payment_temp`
--

INSERT INTO `payment_temp` (`id`, `phone`, `token_project`, `token_resident`, `token_payment`, `token_agent`, `amount`, `code_otp`, `pin_or_biometrics`, `status_payment`, `description_paid`, `created_at`) VALUES
(13, '3423423432', '8d98a287539585037086b13d8989219a', '156b988069e901e1a611adf45cf571cb', 'af9d75a13663646d327157cc779ac27a', '97f6901b04266c1734aed73fcd91c908', 200, 92090, '831986', 'success', 'ini testing', '2023-08-02 04:29:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_project` varchar(50) NOT NULL,
  `partner` text NOT NULL,
  `token_project` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id`, `name_project`, `partner`, `token_project`, `created_at`, `updated_at`) VALUES
(7, 'BANSOS 1', 'PT NET COM,Ministerio da Solidariedade Social e Inclusao', 'bb3f80d71b45840165bc7dda700c4309', '2023-08-09 03:11:41', '2023-08-09 03:12:52'),
(8, 'BANSOS 2', 'JAYA JAYA', 'f5db87747da98b5c8b30c8391a6cae53', '2023-08-09 05:38:57', '2023-08-09 05:38:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resident`
--

DROP TABLE IF EXISTS `resident`;
CREATE TABLE IF NOT EXISTS `resident` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `regency` varchar(30) NOT NULL,
  `village` varchar(30) NOT NULL,
  `pin` int(11) NOT NULL,
  `biometric` varchar(60) DEFAULT NULL,
  `token_resident` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `resident`
--

INSERT INTO `resident` (`id`, `nik`, `username`, `name`, `date_of_birth`, `gender`, `regency`, `village`, `pin`, `biometric`, `token_resident`, `datetime`) VALUES
(62, '101010101', '670898989', 'Rio de Janeiro', '1995-08-09', 'male', 'Dili', 'Comoro', 123456, NULL, '672ead4a74d90d1096acff08e5100ab3', '2023-08-15 04:29:41'),
(58, '0371236', '67075717397', 'Agusta Belina Fontes', '1995-08-09', 'male', 'Bobonaro', 'Aidabaleten', 123456, NULL, '9753aa39c79cbbb600f38be1b2672bbf', '2023-08-13 09:42:42'),
(55, '000751601', '67075491501', 'Aguida da Costa', '1995-08-09', 'male', 'Bobonaro', 'Aidabaleten', 123456, NULL, '0a1d7fe55a02a9a8dc28ac22ce55c38a', '2023-08-13 09:42:42'),
(57, '000170179', '67076505169', 'Aguida Pires', '1995-08-09', 'male', 'Bobonaro', 'Aidabaleten', 123456, NULL, 'fe5ad504ae58d6c4bee96ed41eaac616', '2023-08-13 09:42:42'),
(56, '000646200', '67076450219', 'Aguida de Jesus da Costa', '1995-08-09', 'female', 'Bobonaro', 'Aidabaleten', 123456, NULL, 'ba62c91ec725100cfebcd723cea5d97c', '2023-08-13 09:42:42'),
(54, '00708022', '67076699091', 'Agueda Pires', '1995-08-09', 'female', 'Bobonaro', 'Aidabaleten', 123456, NULL, '2ca0a829124f7a4e4fbd86352e0fbd2e', '2023-08-13 09:42:42'),
(53, '0732062', '67076773651', 'Agueda Gusmao', '1995-08-09', 'male', 'Bobonaro', 'Aidabaleten', 123456, NULL, 'c6a3172e605e376d418c07eea8ca2261', '2023-08-13 09:42:42'),
(51, '00725640', '67076235874', 'Adriana Celeste Amaral', '1995-08-09', 'male', 'Bobonaro', 'Aidabaleten', 123456, NULL, 'a3c40ffbdc178e53f887b77795d5f1bf', '2023-08-13 09:42:42'),
(52, '0122365', '67076655116', 'Adriana Martins', '1995-08-09', 'female', 'Bobonaro', 'Aidabaleten', 123456, NULL, 'ed45f1af4d4af47c9549c157fae391ea', '2023-08-13 09:42:42'),
(50, '000751152', '67075503920', 'Adriana Bete', '1995-08-09', 'male', 'Bobonaro', 'Aidabaleten', 123456, NULL, 'd0d52b119e77d42c434864cd61270d8d', '2023-08-13 09:42:42'),
(46, '00716080', '67075722717', 'Abelita A. Goncalves Ximenes', '1995-08-09', 'male', 'Bobonaro', 'Aidabaleten', 123456, NULL, 'c7fd49f26aab15379e3e0011bbd59207', '2023-08-13 09:42:42'),
(49, '00302391', '67078337400', 'Adelina Soares', '1995-08-09', 'female', 'Bobonaro', 'Aidabaleten', 123456, NULL, '965109f87cf5413f2357ef47e5fd434b', '2023-08-13 09:42:42'),
(48, '0242938', '67076099215', 'Adelia Tavares', '1995-08-09', 'male', 'Bobonaro', 'Aidabaleten', 123456, NULL, 'e3aff6e27d1ee1cc9575bc2ae1e2fe95', '2023-08-13 09:42:42'),
(47, '000800216', '67076722159', 'Adelia dos Santos', '1995-08-09', 'female', 'Bobonaro', 'Aidabaleten', 123456, NULL, 'c8428b8e0699029dd2786c069a7ce18f', '2023-08-13 09:42:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL,
  `role` enum('admin','agent','user','partner') NOT NULL DEFAULT 'agent',
  `stat` enum('active','disabled') NOT NULL DEFAULT 'active',
  `logo` text,
  `created_at` datetime NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `token_agent` varchar(60) DEFAULT NULL,
  `token_resident` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `phone` (`phone`),
  KEY `pass` (`pass`),
  KEY `token` (`token`),
  KEY `created_at` (`created_at`),
  KEY `stat` (`stat`),
  KEY `role` (`role`),
  KEY `last_login` (`last_login`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `phone`, `pass`, `token`, `role`, `stat`, `logo`, `created_at`, `last_login`, `token_agent`, `token_resident`) VALUES
(5, 'Admin', 'Admin', '67073000061', 'e10adc3949ba59abbe56e057f20f883e', 'a039f442ee8dbd0ae909d4f0ac7d38e2', 'admin', 'active', '67073000061_e3afed0047b08059d0fada10f400c1e5_20230813013144.png', '2023-07-07 07:44:11', '2023-08-17 13:18:15', NULL, NULL),
(12, 'PT NET COM', NULL, '445566777', '7f2ababa423061c509f4923dd04b6cf1', 'ff67f4f68c24b86780d65cecc23a4352', 'partner', 'active', '445566777_8bbc96cbe022a9751ae875a4b505e6e2_20230718062339.png', '2023-07-18 06:23:39', '2023-08-15 09:44:41', NULL, NULL),
(13, 'JAYA JAYA', 'JAYA_JAYA', '7776544', '838a0f47fde16c96aaa4247912523922', '43d646e08fbbc9905e6a8dff2e3ab90e', 'partner', 'active', '7776544_a16feefb869b1b0bbaa97d3f2caaddc3_20230719144914.jpg', '2023-07-19 14:49:14', '2023-08-02 03:53:33', NULL, NULL),
(14, 'testing', NULL, '232322', '7f2ababa423061c509f4923dd04b6cf1', 'f53dc4e744b524e364198192b062547f', 'agent', 'active', NULL, '2023-07-19 15:21:31', '2023-08-09 02:54:45', 'f53dc4e744b524e364198192b062547f', NULL),
(16, 'algi', 'algi', '80910921', '7f2ababa423061c509f4923dd04b6cf1', '97f6901b04266c1734aed73fcd91c908', 'agent', 'active', NULL, '2023-07-30 15:30:06', '2023-08-17 13:18:00', '97f6901b04266c1734aed73fcd91c908', NULL),
(21, 'Ministerio da Solidariedade Social e Inclusao', 'Ministerio_da_Solidariedade_Social_e_Inclusao', '67073000000', 'e10adc3949ba59abbe56e057f20f883e', 'df700fe74fad637141382f908a8b6144', 'partner', 'active', '67073000000_d43c59ec462b8ce7e4fd37326a5f5e10_20230803153106.jpg', '2023-08-03 15:31:06', '2023-08-03 08:44:45', NULL, NULL),
(115, 'Abelita A. Goncalves Ximenes', NULL, '67075722717', 'e10adc3949ba59abbe56e057f20f883e', '67a3b57cb755946ba13b3656571f685d', 'user', 'active', NULL, '2023-08-13 09:42:42', '2023-08-17 13:37:29', NULL, 'c7fd49f26aab15379e3e0011bbd59207'),
(116, 'Adelia dos Santos', NULL, '67076722159', 'e10adc3949ba59abbe56e057f20f883e', 'd40ebe259ab6e7f81c1c65677a2af2bd', 'user', 'active', NULL, '2023-08-13 09:42:42', NULL, NULL, 'c8428b8e0699029dd2786c069a7ce18f'),
(117, 'Adelia Tavares', NULL, '67076099215', 'e10adc3949ba59abbe56e057f20f883e', 'cc72879acc07f0261d5787be7e3b76d0', 'user', 'active', NULL, '2023-08-13 09:42:42', NULL, NULL, 'e3aff6e27d1ee1cc9575bc2ae1e2fe95'),
(118, 'Adelina Soares', NULL, '67078337400', 'e10adc3949ba59abbe56e057f20f883e', '8fa39cb029e46fbd97c150bd03bf8a9b', 'user', 'active', NULL, '2023-08-13 09:42:42', NULL, NULL, '965109f87cf5413f2357ef47e5fd434b'),
(119, 'Adriana Bete', NULL, '67075503920', 'e10adc3949ba59abbe56e057f20f883e', '0d1bd3f8ae9e301fbd667e89d8415067', 'user', 'active', NULL, '2023-08-13 09:42:42', NULL, NULL, 'd0d52b119e77d42c434864cd61270d8d'),
(120, 'Adriana Celeste Amaral', NULL, '67076235874', 'e10adc3949ba59abbe56e057f20f883e', 'f38b0b6e128c5fadcc64c5997eca4c4b', 'user', 'active', NULL, '2023-08-13 09:42:42', NULL, NULL, 'a3c40ffbdc178e53f887b77795d5f1bf'),
(121, 'Adriana Martins', NULL, '67076655116', 'e10adc3949ba59abbe56e057f20f883e', '1384189bd6b9499922d2bc2e0af38b00', 'user', 'active', NULL, '2023-08-13 09:42:42', NULL, NULL, 'ed45f1af4d4af47c9549c157fae391ea'),
(122, 'Agueda Gusmao', NULL, '67076773651', 'e10adc3949ba59abbe56e057f20f883e', 'e37c93988a9bf894a34af944ce95705e', 'user', 'active', NULL, '2023-08-13 09:42:42', NULL, NULL, 'c6a3172e605e376d418c07eea8ca2261'),
(123, 'Agueda Pires', NULL, '67076699091', 'e10adc3949ba59abbe56e057f20f883e', '924cabf15b17247285ae59fecc03fccc', 'user', 'active', NULL, '2023-08-13 09:42:42', NULL, NULL, '2ca0a829124f7a4e4fbd86352e0fbd2e'),
(124, 'Aguida da Costa', NULL, '67075491501', 'e10adc3949ba59abbe56e057f20f883e', 'b46f696834f71dc0886e9afc97cb4e58', 'user', 'active', NULL, '2023-08-13 09:42:42', NULL, NULL, '0a1d7fe55a02a9a8dc28ac22ce55c38a'),
(125, 'Aguida de Jesus da Costa', NULL, '67076450219', 'e10adc3949ba59abbe56e057f20f883e', '69d7114025b6f4a82f7e94e14369c0a5', 'user', 'active', NULL, '2023-08-13 09:42:42', NULL, NULL, 'ba62c91ec725100cfebcd723cea5d97c'),
(126, 'Aguida Pires', NULL, '67076505169', 'e10adc3949ba59abbe56e057f20f883e', '0d1f53bd9cae8671f683896a2c4eeb2a', 'user', 'active', NULL, '2023-08-13 09:42:42', NULL, NULL, 'fe5ad504ae58d6c4bee96ed41eaac616'),
(127, 'Agusta Belina Fontes', NULL, '67075717397', 'e10adc3949ba59abbe56e057f20f883e', '4975125d6da8d2bf4084495fd203ce0f', 'user', 'active', NULL, '2023-08-13 09:42:42', NULL, NULL, '9753aa39c79cbbb600f38be1b2672bbf'),
(129, 'indonet', 'indonet', '767667676', '21c94f92bf914a61a20e1f704c2ea7c7', '8726bd7b61f98e35829834e200f2b2a5', 'partner', 'disabled', '767667676_21c94f92bf914a61a20e1f704c2ea7c7_20230814143850.png', '2023-08-14 14:38:50', '2023-08-14 14:38:59', NULL, NULL),
(132, 'Rio de Janeiro', NULL, '670898989', 'e10adc3949ba59abbe56e057f20f883e', '49bde7fddd2c2e262060d004465f1acc', 'user', 'active', NULL, '2023-08-15 04:29:41', NULL, NULL, '672ead4a74d90d1096acff08e5100ab3'),
(133, 'testing dulu adsasdasda', 'testing', 'testing', 'c1f3991cc2f8d57d7edce853d21bf9bf', 'd4046b24baf13136ddd5eecf8ead6ebc', 'partner', 'disabled', '_fe0da9353196ce4d5ef94c02012e907c_20230817124402.png', '2023-08-17 12:44:02', NULL, NULL, NULL),
(134, 'testing dulu', 'testing', 'testing', '7f2ababa423061c509f4923dd04b6cf1', '0e6e04a237eb9a3625061e1bf3c9c75d', 'partner', 'active', '_fe0da9353196ce4d5ef94c02012e907c_20230817125214.png', '2023-08-17 12:52:14', '2023-08-17 12:52:30', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
