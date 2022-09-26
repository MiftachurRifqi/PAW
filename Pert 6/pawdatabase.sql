-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table pawpert5.tbl_mhs
CREATE TABLE IF NOT EXISTS `tbl_mhs` (
  `id_mhs` int(11) DEFAULT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `nama_mhs` varchar(50) DEFAULT NULL,
  `alamat_mhs` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pawpert5.tbl_mhs: ~4 rows (approximately)
/*!40000 ALTER TABLE `tbl_mhs` DISABLE KEYS */;
INSERT INTO `tbl_mhs` (`id_mhs`, `id_prodi`, `nama_mhs`, `alamat_mhs`) VALUES
	(1, 1, 'Miftachur Rifqi', 'Lamongan'),
	(2, 1, 'Husain', 'Kediri'),
	(3, 2, 'Mochammad', 'Probolinggo'),
	(4, 2, 'Rifqi', 'Gresik');
/*!40000 ALTER TABLE `tbl_mhs` ENABLE KEYS */;

-- Dumping structure for table pawpert5.tbl_prodi
CREATE TABLE IF NOT EXISTS `tbl_prodi` (
  `id_prodi` int(11) DEFAULT NULL,
  `nama_prodi` varchar(50) DEFAULT NULL,
  `ket_prodi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pawpert5.tbl_prodi: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_prodi` DISABLE KEYS */;
INSERT INTO `tbl_prodi` (`id_prodi`, `nama_prodi`, `ket_prodi`) VALUES
	(1, 'Teknik Informatika', 'Aktif'),
	(2, 'Sistem Informasi', 'Aktif');
/*!40000 ALTER TABLE `tbl_prodi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
