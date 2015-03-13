-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Mar 2015 pada 14.47
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `karbon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_user`
--

CREATE TABLE IF NOT EXISTS `akun_user` (
  `nia` varchar(9) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(9) NOT NULL,
  `password` varchar(8) NOT NULL,
  PRIMARY KEY (`nia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_karbon`
--

CREATE TABLE IF NOT EXISTS `data_karbon` (
  `id_karbon` varchar(7) NOT NULL,
  `tinggi_pohon` float NOT NULL,
  `diameter_pohon` float NOT NULL,
  `sudut` float NOT NULL,
  `jarak_pengamat` float NOT NULL,
  `tinggi_pengamat` float NOT NULL,
  `hasil_perhitungan` float NOT NULL,
  `nia` varchar(9) NOT NULL,
  `id_pohon` int(11) NOT NULL,
  PRIMARY KEY (`id_karbon`),
  KEY `id_karbon` (`id_karbon`),
  KEY `id_karbon_2` (`id_karbon`),
  KEY `id_karbon_3` (`id_karbon`),
  KEY `id_karbon_4` (`id_karbon`),
  KEY `nia` (`nia`),
  KEY `id_pohon` (`id_pohon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pohon`
--

CREATE TABLE IF NOT EXISTS `pohon` (
  `id_pohon` int(11) NOT NULL,
  `nama_pohon` varchar(30) NOT NULL,
  `letak_pohon` varchar(50) NOT NULL,
  `berat_jenis` float NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_pohon` blob NOT NULL,
  PRIMARY KEY (`id_pohon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_karbon`
--
ALTER TABLE `data_karbon`
  ADD CONSTRAINT `data_karbon_ibfk_2` FOREIGN KEY (`id_pohon`) REFERENCES `pohon` (`id_pohon`),
  ADD CONSTRAINT `data_karbon_ibfk_1` FOREIGN KEY (`nia`) REFERENCES `akun_user` (`nia`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
