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

-- Dumping structure for table tugaspert4.fakultas
CREATE TABLE IF NOT EXISTS `fakultas` (
  `id_fakultas` int(11) DEFAULT NULL,
  `Nama_fakultas` varchar(20) DEFAULT NULL,
  `ket` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tugaspert4.fakultas: ~7 rows (approximately)
/*!40000 ALTER TABLE `fakultas` DISABLE KEYS */;
INSERT INTO `fakultas` (`id_fakultas`, `Nama_fakultas`, `ket`) VALUES
	(1, 'Fakultas Hukum', 'aktif'),
	(2, 'Fakultas Pertanian', 'aktif'),
	(3, 'Fakultas Ekonomi', 'aktif'),
	(4, 'Fakultas Teknik', 'aktif'),
	(5, 'FISIB', 'aktif'),
	(6, 'FIP', 'aktif'),
	(7, 'FKIs', 'aktif');
/*!40000 ALTER TABLE `fakultas` ENABLE KEYS */;

-- Dumping structure for table tugaspert4.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id_mhs` int(11) DEFAULT NULL,
  `id_fakultas` int(11) DEFAULT NULL,
  `NRP` varchar(20) DEFAULT NULL,
  `Nama_mhs` varchar(50) DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tugaspert4.mahasiswa: ~4 rows (approximately)
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` (`id_mhs`, `id_fakultas`, `NRP`, `Nama_mhs`, `Alamat`) VALUES
	(1, 4, '210411100125', 'Moch. Miftachur Rifqi Al Husain', 'Lamongan'),
	(2, 5, '210411100093', 'Anandhari Alfitho Deanova', 'Jombang'),
	(4, 3, '210411100046', 'Roy Suwanda', 'Ponorogo'),
	(5, 1, '210411100227', 'Agus Muhammad Al Hasib', 'Gresik');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
