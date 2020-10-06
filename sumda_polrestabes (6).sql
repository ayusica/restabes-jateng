-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 11:43 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sumda_polrestabes`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagian`
--

CREATE TABLE `bagian` (
  `id_bagian` int(11) NOT NULL,
  `nama_bagian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagian`
--

INSERT INTO `bagian` (`id_bagian`, `nama_bagian`) VALUES
(1, 'PIMPINAN'),
(2, 'SIUM'),
(3, 'SIKEU'),
(4, 'SIPROPAM'),
(5, 'SIWAS'),
(6, 'BAGSUMDA'),
(7, 'BAGREN'),
(8, 'BAGOPS'),
(9, 'SATRESNARKOBA'),
(10, 'SATRESKRIM'),
(11, 'SATINTELKAM'),
(12, 'SENTRA PELAYANAN KEPOLISIAN TERPADU'),
(13, 'SATTAHTI'),
(14, 'SATLANTAS'),
(15, 'SATSABHARA'),
(16, 'SATBINMAS'),
(17, 'SATPOLAIR'),
(18, 'SATPAMOBVIT'),
(19, 'SITIPOL'),
(20, 'UNIT PROVOS'),
(21, 'SIKUM'),
(22, 'SIHUMAS'),
(23, 'UNIT INTELKAM'),
(24, 'UNIT RESKRIM'),
(25, 'UNIT BINMAS'),
(26, 'UNIT SABHARA'),
(27, 'UNIT LANTAS'),
(28, 'UNIT POLAIR');

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id_instansi` int(11) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id_instansi`, `nama_instansi`, `alamat`, `foto`) VALUES
(1, 'Polrestabes Semarang', 'Jalan DR. Sutomo No.19, Barusari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50245', '7253b2941a035cdd1928807a7be2ff94.jpg'),
(2, 'Polsek Semarang Utara', 'Jalan Letjen Suprapto 45, Purwodinatan, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50137', 'polsek_semarangutara.jpg'),
(3, 'Polsek Semarang Selatan', 'Jalan Lamper Tengah, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50196', 'polsek_semarangselatan.jpg'),
(4, 'Polsek Semarang Barat', 'Jalan Ronggolawe Sel., Gisikdrono, Kec. Semarang Bar., Kota Semarang, Jawa Tengah 50149', 'polsek_semarangbarat.jpg'),
(5, 'Polsek Genuk', 'Jalan Kaligawe Raya No.KM. 6, Trimulyo, Genuksari, Kec. Genuk, Kabupaten Demak, Jawa Tengah 50118', 'polsek_genuk.jpg'),
(6, 'Polsek Pedurungan', 'Jalan Majapahit No.448, Pedurungan Tengah, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50192', '28074c434e1b9284700dc628edf7c048.jpg'),
(7, 'Polsek Gayamsari', 'Jalan Slamet Riyadi, Gayamsari, Kec. Gayamsari, Kota Semarang, Jawa Tengah 50248', 'polsek_gayamsari.jpg'),
(8, 'Polsek Gunungpati', 'Jalan Manyaran Semarang, Sadeng, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50222', 'polsek_gunungpati.jpg'),
(9, 'Polsek Gajah Mungkur', 'Jalan Sultan Agung No.103, Gajahmungkur, Kec. Gajahmungkur, Kota Semarang, Jawa Tengah 50232', 'polsek_gajahmungkur.jpg'),
(10, 'Polsek Banyumanik', 'Jalan Nusa Indah, Srondol Wetan, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50263', 'polsek_banyumanik.jpg'),
(11, 'Polsek Ngaliyan', 'Jalan Prof. Dr. Hamka., Ngaliyan, Kec. Ngaliyan, Kota Semarang, Jawa Tengah 50181', '0855bc1bb746b0a6e621037a78b00a9c.jpg'),
(12, 'Polsek Mijen', 'Jalan RM Hadi Soebeno Sosrowardoyo  Raya No.126, Wonolopo, Kec. Mijen, Kota Semarang, Jawa Tengah 50215', 'polsek_mijen.jpg'),
(13, 'Polsek Tugu', 'Jalan Walisongo No.4, Jrakah, Kec. Tugu, Kota Semarang, Jawa Tengah 50185', 'polsek_tugu.jpg'),
(14, 'Polsek Tembalang', 'Jalan Imam Soeparto No.50, Bulusan, Kec. Tembalang, Kota Semarang, Jawa Tengah 50277', 'polsek_tembalang.jpg'),
(15, 'Polsek Semarang Tengah', 'Jalan Brumbungan II No.42, Brumbungan, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50135', 'polsek_semarangtengah.jpg'),
(16, 'Polsek Semarang Timur', 'Jalan Dr. Cipto 66, Sarirejo, Kec. Semarang Timur, Kota Semarang, Jawa Tengah 50124', 'a81fa73c6e73b44f7a00b3158d0f8c49.png'),
(17, 'Polsek Candisari', 'Jalan Dr. Wahidin No.45, Candi, Kec. Candisari, Kota Semarang, Jawa Tengah 50253', 'polsek_candisari.PNG'),
(18, 'Polsek KPPP Tanjung Mas', 'Tanjung Mas, Kec. Semarang Utara, Kota Semarang, Jawa Tengah 50174', '8f1c13000c243da6b6e5a7af85d4ae68.png');

-- --------------------------------------------------------

--
-- Table structure for table `personel`
--

CREATE TABLE `personel` (
  `nama` varchar(255) NOT NULL,
  `nrp` bigint(20) NOT NULL,
  `pkt` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` enum('ISLAM','KRISTEN','KATOLIK','HINDU','BUDDHA','KHONGHUCU') DEFAULT NULL,
  `suku` varchar(255) DEFAULT NULL,
  `tmt_jab` date DEFAULT NULL,
  `id_bagian` int(11) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `id_instansi` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `level` enum('kabag','kaurmin','kasium','personel') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personel`
--

INSERT INTO `personel` (`nama`, `nrp`, `pkt`, `jabatan`, `tempat`, `tgl_lahir`, `agama`, `suku`, `tmt_jab`, `id_bagian`, `pass`, `id_instansi`, `gambar`, `level`) VALUES
('Yessi Auzy Amanda', 322587, 'BRIPKA', 'ADMINISTRASI', 'WELERI', '1995-12-08', 'ISLAM', 'JAWA', '2020-01-01', 5, '72ccedd4a301d0d1bc9c9af08df96d51', 1, 'default.png', 'personel'),
('Fahdnul Gerard', 2071845, 'BRIPKA', 'ADMINISTRASI', 'WONOSOBO', '1995-11-06', 'ISLAM', 'JAWA', '2020-01-01', 18, 'ff62a1084487088ddbc8d5293abbddf2', 1, 'default.png', 'personel'),
('Rian Fakhrul Oktafiyanti', 2165780, 'BRIPKA', 'ADMINISTRASI', 'PEKALONGAN', '1987-08-15', 'ISLAM', 'JAWA', '2020-01-01', 10, '63798f074dd6dc4086d8f33b921f13ea', 1, 'default.png', 'personel'),
('Delia Indrayakti', 3537222, 'BRIPDA', 'ADMINISTRASI', 'WONOSOBO', '1989-03-09', 'ISLAM', 'JAWA', '2020-01-01', 8, 'eec08cdc7e4b7bd2faa4d6f0238bb18f', 1, 'default.png', 'personel'),
('Bony Ogie Monica', 3659456, 'BRIPKA', 'ADMINISTRASI', 'LOMBOK', '1995-05-01', 'ISLAM', 'SASAK', '2020-01-01', 10, '354f67020ba50c641a9b634f9782631b', 1, 'default.png', 'personel'),
('Fandy Pambudi', 4297861, 'BRIPKA', 'ADMINISTRASI', 'BANYUMAS', '1998-03-22', 'ISLAM', 'JAWA', '2020-01-01', 9, 'fe44bce7231776a49e8140a01d564c2a', 1, 'default.png', 'personel'),
('Banni Banni Syafjulianti', 6028997, 'BRIPDA', 'ADMINISTRASI', 'PEMALANG', '1995-11-09', 'ISLAM', 'JAWA', '2020-01-01', 11, '3cbb0b6bd06863447b3dbd477d1838cb', 1, 'default.png', 'personel'),
('Jenifer Hamada', 8713204, 'BRIPKA', 'ADMINISTRASI', 'KENDAL', '1995-01-30', 'ISLAM', 'JAWA', '2020-01-01', 8, 'f71e58e0a7ae67fed881b3a960b29bae', 1, 'default.png', 'personel'),
('Deyuri Hanindita Fajriah', 8764484, 'BRIPDA', 'ADMINISTRASI', 'WONOGIRI', '1992-08-08', 'ISLAM', 'JAWA', '2020-01-01', 7, '449b2286fc0c9dda1a267d951f4fe684', 1, 'default.png', 'personel'),
('Aliriza Chairinnisa', 9182719, 'BRIPDA', 'ADMINISTRASI', 'BREBES', '1997-02-11', 'ISLAM', 'JAWA', '2020-01-01', 15, '4ad014037a6d5a8fb746953fd2eccf47', 1, 'default.png', 'personel'),
('Fitria W', 10307695, 'AKP', 'ADMINISTRASI', 'WONOGIRI', '1987-07-07', 'ISLAM', 'JAWA', '2020-01-01', 11, 'f35a4928715e36c56271c7d9b3ea1bd7', 1, 'default.png', 'personel'),
('ADESTA AULIA TAMIMI', 11120008, 'BRIPTU', 'ADMINISTRASI', 'SEMARANG', '1996-11-26', 'ISLAM', 'JAWA', '2020-01-01', 24, '681c233769fb7a67cf45e30a556ba044', 5, 'default.png', 'personel'),
('IKA NINDYAS RANITADEWI', 11130036, 'BRIPDA', 'ADMINISTRASI', 'MADURA', '2000-11-04', 'ISLAM', 'MADURA', '2020-01-01', 22, 'd3971ae9c29cb0606e92c0bb082de272', 9, 'default.png', 'personel'),
('IGLAS ER SUGIAR', 11130042, 'BRIPDA', 'ADMINISTRASI', 'PEKALONGAN', '1999-04-08', 'ISLAM', 'JAWA', '2020-01-01', 22, '216be86f45921dfb8b04a4acddf49fde', 9, 'default.png', 'personel'),
('Juno Melinda', 11538925, 'BRIPKA', 'ADMINISTRASI', 'WONOGIRI', '1998-08-30', 'ISLAM', 'JAWA', '2020-01-01', 18, '36ae3895ec2813d42edfe12dd850e03a', 1, 'default.png', 'personel'),
('ANIS NURAINI', 12120003, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1999-06-25', 'ISLAM', 'JAWA', '2020-01-01', 22, 'ee04b4504c077763b31c9186cbdc1a1b', 10, 'default.png', 'personel'),
('MURNIATI', 12121212, 'KOMPOL', 'ADMINISTRASI', 'SEMARANG', '1999-02-10', 'KRISTEN', 'BUGIS', '2020-02-01', 3, 'd9eff2de5a0e0e46efad7ba4ef2e8706', 1, 'default.png', 'personel'),
('AGUNG DWI PRASETYO', 12130041, 'AKP', 'KAPOLSEK SEMARANG SELATAN', 'PEKALONGAN', '1996-08-20', 'ISLAM', 'JAWA', '2020-01-01', 1, '7d698684a9eb241d0e3f39e6c45a01e9', 3, 'default.png', 'personel'),
('BOGGY ARDRIANSYAH', 12130049, 'KOMPOL', 'ADMINISTRASI', 'PEKALONGAN', '1997-01-12', 'ISLAM', 'JAWA', '2020-01-01', 2, 'f53a76955711f50a27066ff0ccf96cc4', 1, 'default.png', 'personel'),
('INTAN AYUDHANI', 12130072, 'BRIPDA', 'ADMINISTRASI', 'BENGKULU', '1997-07-08', 'ISLAM', 'BUGIS', '2020-01-01', 20, '37a39ba1f7454436a0a6dccf51ab4d3c', 13, 'default.png', 'personel'),
('CAHAYA ILAHI', 12140045, 'KOMPOL', 'ADMINISTRASI', 'MADURA', '1997-02-05', 'ISLAM', 'MADURA', '2020-01-01', 2, '15dda222d348836b4ec6646ee603c054', 1, 'default.png', 'personel'),
('AFIYAH RATNA HASTUTI', 12140060, 'BRIPTU', 'ADMINISTRASI', 'BEKASI', '1999-10-28', 'ISLAM', 'BETAWI', '2020-01-01', 23, 'ac2cc8c0eccf24e13135741e9d640cd3', 3, 'default.png', 'personel'),
('ADHITYA NUGRAHA T', 12140106, 'BRIPTU', 'KAPOLSEK GENUK', 'WONOGIRI', '1997-03-05', 'ISLAM', 'JAWA', '2020-01-01', 1, 'b317c746fe918a226936abb7d31682ac', 5, 'default.png', 'personel'),
('ANDI SURANA', 12312312, 'KOMPOL', 'ADMINISTRASI', 'PEKALONGAN', '1999-02-19', 'ISLAM', 'JAWA', '2020-02-01', 2, 'e7db8ecf653c696480a1f5e6a7ddac20', 1, 'default.png', 'personel'),
('Admin SIUM Polsek Genuk', 12350118, NULL, 'Kasium Polsek Genuk', NULL, NULL, NULL, NULL, NULL, 2, '21232f297a57a5a743894a0e4a801fc3', 5, 'default.png', 'kasium'),
('ADMIN SIUM POLSEK SEMARANG TIMUR', 12350124, 'KOMPOL', 'ADMINISTRATOR SIUM POOLSEK SEMARANG TIMUR POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1978-02-04', 'ISLAM', 'JAWA', '2020-01-01', 2, '21232f297a57a5a743894a0e4a801fc3', 16, 'default.png', 'kasium'),
('ADMIN SIUM POLSEK SEMARANG TENGAH', 12350135, 'KOMPOL', 'ADMINISTRATOR SIUM POLSEK SEMARANG TENGAH POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1992-01-04', 'ISLAM', 'JAWA', '2020-01-01', 2, '21232f297a57a5a743894a0e4a801fc3', 15, 'default.png', 'kasium'),
('Admin SIUM Polsek Semarang Utara', 12350137, 'kompol', 'Kasium Polsek Semarang Utara', 'SEMARANG', '1993-02-02', 'ISLAM', 'JAWA', '2020-02-17', 2, '21232f297a57a5a743894a0e4a801fc3', 2, 'default.png', 'kasium'),
('Admin Sium Polsek Semarang Barat', 12350149, NULL, 'Kasium Polsek Semarang Barat', NULL, NULL, NULL, NULL, NULL, 2, '21232f297a57a5a743894a0e4a801fc3', 4, 'default.png', 'kasium'),
('ADMIN SIUM POLSEK TANJUNG MAS', 12350174, 'KOMPOL', 'ADMINISTRATOR SIUM POLSEK TANJUNG MAS POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1992-01-10', 'KRISTEN', 'JAWA', '2020-01-01', 2, '21232f297a57a5a743894a0e4a801fc3', 18, 'default.png', 'kasium'),
('ADMIN SIUM POLSEK NGALIYAN', 12350181, 'KOMPOL', 'ADMINISTRATOR SIUM POLSEK NGALIYAN POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1991-01-03', 'ISLAM', 'JAWA', '2020-01-01', 2, '21232f297a57a5a743894a0e4a801fc3', 11, 'default.png', 'kasium'),
('ADMIN SIUM POLSEK TUGU', 12350185, 'KOMPOL', 'ADMIN SIUM POLSEK TUGU POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1992-02-02', 'ISLAM', 'JAWA', '2020-01-01', 2, '21232f297a57a5a743894a0e4a801fc3', 13, 'default.png', 'kasium'),
('Admin Sium Polsek Pedurungan', 12350192, NULL, 'Kasium Polsek Pedurungan', NULL, NULL, NULL, NULL, NULL, 2, '21232f297a57a5a743894a0e4a801fc3', 6, 'default.png', 'kasium'),
('Admin SIUM Polsek Semarang Selatan', 12350196, NULL, 'Kasium Polsek Semarang Selatan', NULL, NULL, NULL, NULL, NULL, 2, '21232f297a57a5a743894a0e4a801fc3', 3, 'default.png', 'kasium'),
('ADMIN SIUM POLSEK MIJEN', 12350215, 'KOMPOL', 'ADMINISTRATOR SIUM POLSEK MIJEN POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1990-02-17', 'ISLAM', 'JAWA', '2020-01-01', 2, '21232f297a57a5a743894a0e4a801fc3', 12, 'default.png', 'kasium'),
('ADMIN SIUM POLSEK GUNUNG PATI', 12350222, 'KOMPOL', 'ADMINISTRATOR SIUM POLSEK GUNUNG PATI POLRESTABES SEMARANG POLDA JATENG', 'DEMAK', '1980-06-02', 'KRISTEN', 'JAWA', '2020-01-01', 2, '21232f297a57a5a743894a0e4a801fc3', 8, 'default.png', 'kasium'),
('ADMIN SIUM POLSEK GAJAHMUNGKUR', 12350232, 'KOMPOL', 'ADMINISTRATOR SIUM POLSEK GAJAKMUNGKUR POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1993-02-02', 'ISLAM', 'JAWA', '2020-01-01', 2, '21232f297a57a5a743894a0e4a801fc3', 9, 'default.png', 'kasium'),
('ADMIN POLSEK GAYAMSARi', 12350248, 'KOMPOL', 'KASIUM POLSEK GAYAMSARI', 'SEMARANG', '1993-02-02', 'ISLAM', 'JAWA', '2020-01-01', 2, '21232f297a57a5a743894a0e4a801fc3', 7, 'cd6943b097e84c0d4a2131c5b853c8c6.jpg', 'kasium'),
('ADMIN SIUM POLSEK CANDISARI', 12350253, 'KOMPOL', 'ADMINISTRATOR SIUM POLSEK CANDISARI POLRESTABES SEMARANG POLDA JATENG', 'KENDAL', '1967-01-02', 'BUDDHA', 'BALI', '2020-01-01', 2, '21232f297a57a5a743894a0e4a801fc3', 17, 'default.png', 'kasium'),
('ADMIN SIUM POLSEK BANYUMANIK', 12350263, 'KOMPOL', 'ADMINISTRATOR SIUM POLSEK BANYUMANIK POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1990-02-17', 'ISLAM', 'JAWA', '2020-01-01', 2, '21232f297a57a5a743894a0e4a801fc3', 10, 'default.png', 'kasium'),
('ADMIN SIUM POLSEK TEMBALANG', 12350277, 'KOMPOL', 'ADMINISTRATOR SIUM POLSEK TEMBALANG POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1987-01-03', 'KATOLIK', 'JAWA', '2020-01-01', 2, '21232f297a57a5a743894a0e4a801fc3', 14, 'default.png', 'kasium'),
('Annisa Zakia', 12386359, 'AKP', 'ADMINISTRASI', 'WONOSOBO', '1996-05-02', 'ISLAM', 'JAWA', '2020-01-01', 15, '4e8c93d341b39e70a00ad65cc01f78fa', 1, 'default.png', 'personel'),
('ADILLA EKA AFRIANI', 13120003, 'BRIPTU', 'ADMINISTRASI', 'BUMIAYU', '1996-09-21', 'ISLAM', 'JAWA', '2020-01-01', 21, '5e293e1ce807ac0002b3d26ce3ff5f78', 3, 'default.png', 'personel'),
('EGY ADHA PUTRA', 13120005, 'BRIPKA', 'ADMINISTRASI', 'BUMIAYU', '1998-04-27', 'ISLAM', 'JAWA', '2020-01-01', 9, 'f446ee8275b24452e0bfc8dcfe274063', 1, 'default.png', 'personel'),
('ANNIDA DINI KAMILA', 13120012, 'BRIPKA', 'ADMINISTRASI', 'BREBES', '1998-09-12', 'ISLAM', 'JAWA', '2020-01-01', 23, 'd9ca213aa97c29d8600d4f9dcd1f72f8', 15, 'default.png', 'personel'),
('ANNISA AMALIA FITHRI', 13120030, 'BRIPKA', 'ADMINISTRASI', 'KENDAL', '1996-09-25', 'ISLAM', 'JAWA', '2020-01-01', 12, 'fa1e2b000dd5c2f01c7e02fa00e5c42c', 15, 'default.png', 'personel'),
('APRIL LANI', 13120059, 'BRIPDA', 'ADMINISTRASI', 'TEGAL', '1997-12-26', 'ISLAM', 'JAWA', '2020-01-01', 21, '6451734dea7111c082653abe0a4c2a6a', 16, 'default.png', 'personel'),
('ANNISA WIJAYANTI', 13130080, 'BRIPDA', 'ADMINISTRASI', 'PEKALONGAN', '2000-11-13', 'ISLAM', 'JAWA', '2020-01-01', 21, 'ae23c45c4cfd17afb09b02db6730a04d', 16, 'default.png', 'personel'),
('A MAGNALIA MORENA RUTH KEYASA', 13130091, 'BRIPTU', 'ADMINISTRASI', 'PEKALONGAN', '1998-02-25', 'ISLAM', 'JAWA', '2020-01-01', 21, '581e852178bc67c88c6effd2ecc4355f', 2, 'default.png', 'personel'),
('ATIKA PUTRI WIDIA A', 13130093, 'BRIPKA', 'ADMINISTRASI', 'PEKALONGAN', '1997-06-14', 'ISLAM', 'JAWA', '2020-01-01', 24, 'b7c4dc831d8e2656b318cbea26d2dedb', 14, 'default.png', 'personel'),
('ASTRI MEI ASTUTI', 13130114, 'BRIPKA', 'ADMINISTRASI', 'BREBES', '1999-05-01', 'ISLAM', 'JAWA', '2020-01-01', 12, '00af8c6188e84b17fcbca03b051fc9ac', 17, 'default.png', 'personel'),
('CAHYA ADI BINTORO', 13130117, 'BRIPKA', 'ADMINISTRASI', 'JAKARTA', '1998-03-20', 'ISLAM', 'JAWA', '2020-01-01', 2, '9be99ebab8e5cb0dcb7c4fa2a0a81d8c', 1, 'default.png', 'personel'),
('INA SUSANTI', 13130129, 'BRIPDA', 'ADMINISTRASI', 'YOGYAKARTA', '2000-07-11', 'ISLAM', 'JAWA', '2020-01-01', 2, 'e7b08c579f9ace647ae66f9f24580748', 9, 'default.png', 'personel'),
('ANGGIT PUTRI UTAMI', 13140090, 'BRIPKA', 'ADMINISTRASI', 'TEGAL', '1999-02-12', 'ISLAM', 'JAWA', '2020-01-01', 25, 'c91015d6984d82a9b6284f7deb704260', 10, 'default.png', 'personel'),
('IIN INDARTININGSIH', 13140110, 'BRIPDA', 'ADMINISTRASI', 'PEMALANG', '2000-06-08', 'ISLAM', 'JAWA', '2020-01-01', 25, '515c402aec4bab473f208745c9f31936', 9, 'default.png', 'personel'),
('ANNISA DINAH NURBAITY', 13140133, 'BRIPKA', 'KAPOLSEK SEMARANG TENGAH', 'PEKALONGAN', '1996-04-08', 'ISLAM', 'JAWA', '2020-01-01', 1, '604cbddf236d706f2da121161e992e8f', 15, 'default.png', 'personel'),
('MUCHLIS NUR HUDA', 14060053, 'AIPTU', 'ADMINISTRASI', 'PURWAKARTA', '1998-04-18', 'ISLAM', 'JAWA', '2020-01-01', 3, '1bb60ece9223b0dfc23c80d6cccb639f', 1, 'default.png', 'personel'),
('AHMAD FIKRI', 14060073, 'BRIPTU', 'ADMINISTRASI', 'WONOSOBO', '1996-10-28', 'ISLAM', 'JAWA', '2020-01-01', 8, '2126243de2daed1fc9f4cb8db19ee405', 1, 'default.png', 'personel'),
('ANIS SEPTIYANI', 14120002, 'BRIPKA', 'KAPOLSEK NGALIYAN', 'KUDUS', '1996-07-22', 'ISLAM', 'JAWA', '2020-01-01', 1, '168d1702e08163e5beb75394153d0ebf', 11, 'default.png', 'personel'),
('ANNISA KHAIRA MA\'ADI', 14120006, 'BRIPDA', 'ADMINISTRASI', 'TEMANGGUNG', '1996-10-15', 'ISLAM', 'JAWA', '2020-01-01', 24, '41399d0b788f28c890aa9ca36eccfabe', 16, 'default.png', 'personel'),
('EKA DESY PURNAMASARI', 14120009, 'BRIPKA', 'ADMINISTRASI', 'PURWOKERTO', '1998-06-01', 'ISLAM', 'JAWA', '2020-01-01', 9, '09d73c756e94a90f153ba5fe50b1dd09', 1, 'default.png', 'personel'),
('ANANDITA MEGA KUMALA', 14120012, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '2000-05-07', 'ISLAM', 'JAWA', '2020-01-01', 22, 'c6a5ef4ab81ef72c7aa0da999ee3537d', 10, 'default.png', 'personel'),
('A\'ISYAH AULIA FIRDAUSYA', 14120016, 'IPTU', 'ADMINISTRASI', 'PEMALANG', '1998-05-29', 'ISLAM', 'JAWA', '2020-01-01', 22, '39a1a7f5c5eb0df18f4bfdf42fb510d9', 2, 'default.png', 'personel'),
('ARINI DWI PURNAMASARI', 14120021, 'BRIPKA', 'ADMINISTRASI', 'BENGKULU', '1999-04-03', 'ISLAM', 'JAWA', '2020-01-01', 20, '1fb4b68f17d14a4be45aa6f9f511bec2', 17, 'default.png', 'personel'),
('ETI SAPRIANI', 14120022, 'BRIGADIR', 'ADMINISTRASI', 'SEMARANG', '1999-12-30', 'ISLAM', 'JAWA', '2020-01-01', 10, '68c5b3802136df3a73da7e2f900fdab6', 1, 'default.png', 'personel'),
('EDNITA ANDROGINI TITISGATI', 14120028, 'AKP', 'ADMINISTRASI', 'KUDUS', '1996-09-20', 'ISLAM', 'JAWA', '2020-01-01', 9, 'e201a0ee2eac2d7a4f54434aba9f031e', 1, 'default.png', 'personel'),
('ANA KHOIRUN NISA', 14120030, 'BRIPKA', 'ADMINISTRASI', 'PEMALANG', '1999-02-18', 'ISLAM', 'JAWA', '2020-01-01', 12, '1864a6329b6e950958fe501d9d558187', 10, 'default.png', 'personel'),
('ANISSA AFRILIANI', 14120033, 'BRIPKA', 'ADMINISTRASI', 'BENGKULU', '1996-09-13', 'ISLAM', 'JAWA', '2020-01-01', 23, 'b44706bcd4048fc24c9d4787caa8dee9', 15, 'default.png', 'personel'),
('AGNES KALPITA FURI', 14120035, 'BRIPTU', 'ADMINISTRASI', 'TEGAL', '2000-08-30', 'ISLAM', 'JAWA', '2020-01-01', 2, '88ea211a7ba9276b7e440f25ad1b0232', 3, 'default.png', 'personel'),
('ASWINDYA FARIH DALILA', 14120037, 'BRIPKA', 'KAPOLSEK CANDISARI', 'KENDAL', '2000-05-14', 'ISLAM', 'JAWA', '2020-01-01', 1, '1798e03a717b35757e688146f4f03db4', 17, 'default.png', 'personel'),
('BRIAN ADAVIANTA', 14120040, 'KOMPOL', 'ADMINISTRASI', 'SEMARANG', '1999-01-31', 'KRISTEN', 'JAWA', '2020-01-01', 2, '8097d0fd9567be39bbd5c4d104a9b7a2', 1, 'default.png', 'personel'),
('ANIQ NAILIL MUNA', 14120045, 'BRIPKA', 'ADMINISTRASI', 'PEMALANG', '1998-08-30', 'ISLAM', 'JAWA', '2020-01-01', 21, 'a2cd78a57b01c8538dd2f0273161add1', 10, 'default.png', 'personel'),
('INTAN PUJI LESTARI', 14120052, 'BRIPKA', 'ADMINISTRASI', 'LOMBOK', '1998-01-18', 'ISLAM', 'SASAK', '2020-01-01', 21, 'a8905a63e9b035d835310af76d58287c', 13, 'default.png', 'personel'),
('IKHDA KHAMIDAH', 14120058, 'BRIPDA', 'ADMINISTRASI', 'YOGYAKARTA', '1998-08-11', 'ISLAM', 'JAWA', '2020-01-01', 12, 'c5e61d7e5b37ab83a7a82301683f1072', 9, 'default.png', 'personel'),
('APRILIANI SUNADIR MANSOBEN', 14120063, 'BRIPDA', 'ADMINISTRASI', 'TEMANGGUNG', '1997-11-19', 'ISLAM', 'JAWA', '2020-01-01', 22, '639e3d239ef9bbd008f4357a9007a269', 16, 'default.png', 'personel'),
('AUDREY MUTIARA SETYA A', 14121001, 'BRIPKA', 'ADMINISTRASI', 'TEMANGGUNG', '2000-07-26', 'ISLAM', 'JAWA', '2020-01-01', 23, 'a46f35f6f3d397e90bd3b67ce218e919', 14, 'default.png', 'personel'),
('INMAS KUSUMAWATI', 14121028, 'BRIPDA', 'ADMINISTRASI', 'WONOSOBO', '1998-10-14', 'ISLAM', 'JAWA', '2020-01-01', 24, '60be14bdea6a805050857d4c5af83a0c', 13, 'default.png', 'personel'),
('ATIKA RAHMA', 14121040, 'BRIPKA', 'ADMINISTRASI', 'PEMALANG', '1997-01-30', 'ISLAM', 'JAWA', '2020-01-01', 22, '191d3f4fd1b64fc6d4d6bbc65b91731f', 14, 'default.png', 'personel'),
('AJENG LARASATI', 14130072, 'BRIPTU', 'ADMINISTRASI', 'KUDUS', '2000-07-31', 'ISLAM', 'JAWA', '2020-01-01', 25, 'abb23ff13675eed797e6a5e3ffc03df5', 8, 'default.png', 'personel'),
('ALFREDA SHABRINA W', 14130088, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '2000-06-28', 'ISLAM', 'JAWA', '2020-01-01', 23, 'd8957641568ae24ae5e5b79984b9ab10', 11, 'default.png', 'personel'),
('ARINI CITRA DEWI', 14130111, 'BRIPDA', 'ADMINISTRASI', 'JEPARA', '2000-03-21', 'ISLAM', 'JAWA', '2020-01-01', 25, '09bb109569392af445bdccbca0f8dd52', 17, 'default.png', 'personel'),
('IRENE NUCIFERA PUSPITADEWI', 14140084, 'AKP', 'KAPOLSEK TUGU', 'TEGAL', '2000-10-03', 'ISLAM', 'JAWA', '2020-01-01', 1, 'd576dbebabad3b3a223e6c6bce7a571d', 13, 'default.png', 'personel'),
('ETNA VIANITA', 14140094, 'BRIPTU', 'ADMINISTRASI', 'DEMAK', '1999-03-21', 'ISLAM', 'JAWA', '2020-01-01', 10, '6e8f5f78ea819ca5e1484574cf2a057a', 1, 'default.png', 'personel'),
('ADITYA PERDANA PUTRA', 15060007, 'BRIPKA', 'ADMINISTRASI', 'TENGGARONG', '1998-02-18', 'ISLAM', 'BUGIS', '2020-01-01', 7, '413043e48e6e81ced8b4e99d3105d15c', 1, 'default.png', 'personel'),
('ZEMANICA ARASDAYANI BR SITEPU', 15060013, 'AKP', 'ADMINISTRASI', 'SALATIGA', '1998-11-16', 'ISLAM', 'JAWA', '2020-01-01', 5, 'e5f52626ecae8a742a192d5d8bb8eb1f', 1, 'default.png', 'personel'),
('MUHAMAD MASIDUR RISKY', 15060035, 'KOMPOL', 'ADMINISTRASI', 'WONOSOBO', '2000-01-06', 'ISLAM', 'JAWA', '2020-01-01', 3, '88f1984b02ea58ff4ea728c38dbd362d', 1, 'default.png', 'personel'),
('AJI MULYONO', 15060057, 'AKP', 'ADMINISTRASI', 'JAKARTA', '1997-05-01', 'ISLAM', 'BETAWI', '2020-01-01', 8, 'bbccb8e678507943a95de54566c510cc', 1, 'default.png', 'personel'),
('ZULFAN MUSAFA', 15060060, 'BRIPKA', 'ADMINISTRASI', 'BALI', '1996-01-31', 'ISLAM', 'BALI', '2020-01-01', 5, '81e7c0cca9592e5e9575beaa51dbe1c5', 1, 'default.png', 'personel'),
('ZIDNY FAKHRURROZI AKHMAD', 15060071, 'AKP', 'ADMINISTRASI', 'YOGYAKARTA', '1998-03-31', 'ISLAM', 'JAWA', '2020-01-01', 5, 'bf30ac42cb05db5fd22b0bbf33164a4f', 1, 'default.png', 'personel'),
('ADNIN ALMIRA', 15060081, 'BRIPKA', 'ADMINISTRASI', 'LAMPUNG', '1996-03-13', 'ISLAM', 'LAMPUNG', '2020-01-01', 7, '1c9e1fe9c7f565e2cd9b4e56a62e13ab', 1, 'default.png', 'personel'),
('ZOLA APRILIA', 15060089, 'AKP', 'ADMINISTRASI', 'SEMARANG', '1997-06-09', 'ISLAM', 'JAWA', '2020-01-01', 5, '2399bb3ea2202af54aebf0d506d95de1', 1, 'default.png', 'personel'),
('YOSA WAHYUDI', 15060101, 'KOMPOL', 'ADMINISTRASI', 'PEMALANG', '1999-04-12', 'ISLAM', 'JAWA', '2020-01-01', 4, '1a181125d9129c2fb8773984ba6066d8', 1, 'default.png', 'personel'),
('ACHMI SHINTA AYUNINGSIH', 15060106, 'BRIPKA', 'ADMINISTRASI', 'TANGERANG', '1996-03-29', 'ISLAM', 'BETAWI', '2020-01-01', 7, '2a6ed923eaf9100d5942fed118374aae', 1, 'default.png', 'personel'),
('AJENG PANGESTUTI', 15060108, 'AKP', 'ADMINISTRASI', 'SEMARANG', '1996-10-06', 'ISLAM', 'JAWA', '2020-01-01', 8, '3581a2213f0ad7915e31252bff66ff38', 1, 'default.png', 'personel'),
('YUNITA SARI PRASTIKA', 15060109, 'AKP', 'ADMINISTRASI', 'BREBES', '1999-05-06', 'ISLAM', 'JAWA', '2020-01-01', 4, 'c105a391d7dba27943af9a7211eebb42', 1, 'default.png', 'personel'),
('MUHAMMAD ABDUL HAYYI', 15060112, 'KOMPOL', 'ADMINISTRASI', 'WONOGIRI', '1997-08-08', 'ISLAM', 'JAWA', '2020-01-01', 3, 'fa36a51e52ba13e7781c310b679c2f06', 1, 'default.png', 'personel'),
('ALMUTHYA AHSIN', 15100141, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1996-03-25', 'ISLAM', 'JAWA', '2020-01-01', 22, '9f872fd6cd14f20baabb7e6104f18cbb', 11, 'default.png', 'personel'),
('CAHYO AJI HARYANTO', 15120001, 'BRIGADIR', 'ADMINISTRASI', 'SEMARANG', '1997-08-24', 'ISLAM', 'JAWA', '2020-01-01', 2, 'ab8deb91935a61e32d0f8a5f1707e5b1', 1, 'default.png', 'personel'),
('ANNE AZKIYA NURSYA\'BANI', 15120007, 'BRIPKA', 'ADMINISTRASI', 'BREBES', '2000-07-05', 'ISLAM', 'JAWA', '2020-01-01', 24, 'bdd12e6f0a40de0ba57b4d6230e7d1ed', 15, 'default.png', 'personel'),
('IDA KRISTIANA', 15120008, 'BRIPKA', 'ADMINISTRASI', 'BREBES', '2000-02-17', 'ISLAM', 'JAWA', '2020-01-01', 2, '05f55aefef0749a4e2e74317b3949599', 13, 'default.png', 'personel'),
('ANENDA KUSUMANING TYAS', 15120014, 'BRIPKA', 'ADMINISTRASI', 'BEKASI', '2000-05-14', 'ISLAM', 'JAWA', '2020-01-01', 23, '9f8a738fb0d4dbf357937f112d7ddfa5', 10, 'default.png', 'personel'),
('AUDYLIA NOERDANI', 15120017, 'BRIPKA', 'ADMINISTRASI', 'MADURA', '1997-11-01', 'ISLAM', 'JAWA', '2020-01-01', 22, 'd25364bc68dc962b0e0b080def8bb14e', 14, 'default.png', 'personel'),
('ARIANA ENDRINIKAPOULOS', 15120021, 'BRIPDA', 'ADMINISTRASI', 'KUDUS', '1998-12-08', 'ISLAM', 'JAWA', '2020-01-01', 23, 'ec9e2623da7c0703e32a8d2c040039fd', 16, 'default.png', 'personel'),
('ALFIA NUR VIDIARTI', 15120055, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '2000-07-28', 'ISLAM', 'JAWA', '2020-01-01', 25, '43563967f8a14ca15bbf1f3e9c85eead', 11, 'default.png', 'personel'),
('ANNAFI\' BILQIS TUFFAHATI', 15120056, 'BRIPKA', 'ADMINISTRASI', 'TEGAL', '1996-03-09', 'ISLAM', 'JAWA', '2020-01-01', 25, '3dfe8fa60360f9264bbf9d3bb2cc03fd', 15, 'default.png', 'personel'),
('INTAN AMBARWATI', 15120069, 'BRIPDA', 'ADMINISTRASI', 'JEPARA', '1999-09-21', 'ISLAM', 'JAWA', '2020-01-01', 23, '30f0739f5fa3868fa01cc53108dad583', 13, 'default.png', 'personel'),
('IRA MULYANI', 15120070, 'BRIPKA', 'ADMINISTRASI', 'DEMAK', '1999-01-16', 'ISLAM', 'JAWA', '2020-01-01', 24, 'c59b9cd578e58804a275004b79dbf6d1', 13, 'default.png', 'personel'),
('AIDA FITRI NAZILLAH', 15120072, 'BRIPTU', 'ADMINISTRASI', 'KUDUS', '1998-08-15', 'ISLAM', 'JAWA', '2020-01-01', 22, '96cb986f9813a6edda203143d1d0e7be', 8, 'default.png', 'personel'),
('INAS FATIN ANINDIBA', 15130078, 'AKP', 'KAPOLSEK GAJAHMUNGKUR', 'KUDUS', '1999-10-07', 'ISLAM', 'JAWA', '2020-01-01', 1, '27b2b2dd89072f7c71df4a5891ee6bf6', 9, 'default.png', 'personel'),
('DWI RAMDHANU ASRIADI', 15130084, 'BRIPTU', 'ADMINISTRASI', 'SEMARANG', '1996-08-28', 'ISLAM', 'JAWA', '2020-01-01', 9, '3682b4e0ebd526ee52db65a82f31072e', 1, 'default.png', 'personel'),
('ANANDA ANIS SAPUTRI', 15130091, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1997-05-01', 'ISLAM', 'JAWA', '2020-01-01', 12, 'd34f5f640c415c8812bd907b93f25259', 10, 'default.png', 'personel'),
('ALFAIMA WIJAYANTI', 15130108, 'BRIPKA', 'ADMINISTRASI', 'PEMALANG', '1996-09-13', 'ISLAM', 'JAWA', '2020-01-01', 21, '06437d328455ff9b8730542280d308f8', 8, 'default.png', 'personel'),
('AMALIA RIHADATUL \'AISY', 15130112, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1997-04-14', 'ISLAM', 'JAWA', '2020-01-01', 22, '53069c7fc2c09c5829333663a159cada', 11, 'default.png', 'personel'),
('AFIFAH NUR`AINI', 15130119, 'BRIPKA', 'ADMINISTRASI', 'PEMALANG', '1999-12-24', 'ISLAM', 'JAWA', '2020-01-01', 25, 'dcdcde242a5c30f1563ffe9690e3cab5', 3, 'default.png', 'personel'),
('ALVIA WAHYU ARVENA', 15130131, 'BRIPKA', 'ADMINISTRASI', 'TEGAL', '1998-08-11', 'ISLAM', 'JAWA', '2020-01-01', 24, 'cf649ea2539ad23b3b5a33fbb1ee75a1', 11, 'default.png', 'personel'),
('Satrya Ayuriza', 15133213, 'BRIPDA', 'ADMINISTRASI', 'PEMALANG', '1990-08-10', 'ISLAM', 'JAWA', '2020-01-01', 13, '63924b3c6a67bc528d6a82a9b8175f8a', 1, 'default.png', 'personel'),
('Edwin Yulianti', 15138857, 'BRIPKA', 'ADMINISTRASI', 'BREBES', '1998-03-27', 'ISLAM', 'JAWA', '2020-01-01', 7, '88dfa59f55e681b0eaa71343e02678aa', 1, 'default.png', 'personel'),
('ARLYN NABILA HANDAYANI', 15140094, 'BRIPKA', 'ADMINISTRASI', 'LOMBOK', '1999-10-17', 'ISLAM', 'SASAK', '2020-01-01', 23, 'fe2ceb63cf71456e5cc67bc1c8c15471', 17, 'default.png', 'personel'),
('AMALIA', 15140133, 'BRIPKA', 'ADMINISTRASI', 'PEKALONGAN', '2000-01-17', 'ISLAM', 'JAWA', '2020-01-01', 2, '9b1094bad190836cce095f318baf079f', 11, 'default.png', 'personel'),
('Ferdiansyah Ningsih', 15893364, 'BRIPKA', 'ADMINISTRASI', 'BREBES', '1991-05-08', 'ISLAM', 'JAWA', '2020-01-01', 8, 'd6e491830c1c1b923eafd05e50a78dcb', 1, 'default.png', 'personel'),
('MUFFIDA AMALIA PRIMADANI', 16060010, 'IPDA', 'ADMINISTRASI', 'BUMIAYU', '1997-10-26', 'ISLAM', 'JAWA', '2020-01-01', 3, 'ee4f4fca8d23cc7231c3e25ae5da05f5', 1, 'default.png', 'personel'),
('YUSRIL INSAN KAMIL', 16060011, 'AKP', 'ADMINISTRASI', 'TEGAL', '1998-09-05', 'ISLAM', 'JAWA', '2020-01-01', 5, '88bac9162441cbb06d5add15f3ef4b3a', 1, 'default.png', 'personel'),
('MUHAMMAD FIKRI SHOLAHUDDIN', 16060021, 'KOMPOL', 'ADMINISTRASI', 'SURABAYA', '1997-06-06', 'ISLAM', 'JAWA', '2020-01-01', 4, 'f1c0c856ad01e0225831f362c1833a46', 1, 'default.png', 'personel'),
('MILADIYAH NUR', 16060023, 'KOMPOL', 'ADMINISTRASI', 'BANDUNG', '1997-11-08', 'ISLAM', 'SUNDA', '2020-01-01', 2, 'e38813cdd0cdaff835dc1100e5694c6d', 1, 'default.png', 'personel'),
('AGUS SATRIO PRABOWO', 16060026, 'KOMPOL', 'ADMINISTRASI', 'PEMALANG', '1997-09-02', 'ISLAM', 'JAWA', '2020-01-01', 8, 'bfbf1735e1aa59e3d2e786d35c8bd6d6', 1, 'default.png', 'personel'),
('YUNIRMAN', 16060042, 'AKP', 'ADMINISTRASI', 'KUDUS', '2000-02-01', 'ISLAM', 'JAWA', '2020-01-01', 4, '7c59f7732e455a20230d5c2c714448dc', 1, 'default.png', 'personel'),
('MOHAMMAD DOOHAN WARDANA', 16060047, 'BRIPTU', 'ADMINISTRASI', 'PURWOREJO', '2000-08-26', 'ISLAM', 'JAWA', '2020-01-01', 3, '7b1a5726047d4fc69bcf049b2aa0998d', 1, 'default.png', 'personel'),
('AFIFAH WULANDARI', 16060050, 'KOMPOL', 'ADMINISTRASI', 'KUDUS', '1996-10-15', 'ISLAM', 'JAWA', '2020-01-01', 7, '8f8f389d069eae2e2289c472be58d630', 1, 'default.png', 'personel'),
('MITHA SAFIRA', 16060054, 'BRIPTU', 'ADMINISTRASI', 'DEMAK', '1997-08-15', 'ISLAM', 'JAWA', '2020-01-01', 2, '907145250947d42f5be9523679ef7e46', 1, 'default.png', 'personel'),
('MILA ANGGA LILA', 16060061, 'BRIPKA', 'ADMINISTRASI', 'BATANG', '1997-11-22', 'ISLAM', 'JAWA', '2020-01-01', 2, '81c318aa2168dc512fc6899e3a94db31', 1, 'default.png', 'personel'),
('ACHMAD FAUZY', 16060065, 'BRIPKA', 'ADMINISTRASI', 'BEKASI', '1999-02-27', 'ISLAM', 'BETAWI', '2020-01-01', 5, 'c62021bbde82728debdec74fe943e701', 1, 'default.png', 'personel'),
('ZULFIKAR KUS RIZKY IRIANSYAH', 16060105, 'BRIPKA', 'ADMINISTRASI', 'JAKARTA', '1998-07-24', 'ISLAM', 'BETAWI', '2020-01-01', 5, '461a957c33f5f1ef5ecafafec91b9d32', 1, 'default.png', 'personel'),
('AHMAD AGAM FERADANA', 16060108, 'AKP', 'ADMINISTRASI', 'KENDAL', '1998-08-14', 'ISLAM', 'JAWA', '2020-01-01', 8, '6571bad3230b46f130767c2c64fa8af4', 1, 'default.png', 'personel'),
('YOLA ROSA NANDA', 16060112, 'AKP', 'ADMINISTRASI', 'TEGAL', '1997-08-25', 'ISLAM', 'JAWA', '2020-01-01', 4, 'ea03eeb2ba419cf277b92083ca219998', 1, 'default.png', 'personel'),
('AJI KARTIKO NUGROHO', 16060113, 'KOMPOL', 'ADMINISTRASI', 'BEKASI', '1999-11-30', 'ISLAM', 'BETAWI', '2020-01-01', 8, 'b2c7b62842f908acef8d141508dd61c6', 1, 'default.png', 'personel'),
('ZAHRA FIRDAUSY IMANI', 16060115, 'AKP', 'ADMINISTRASI', 'KENDAL', '1997-09-19', 'ISLAM', 'JAWA', '2020-01-01', 5, 'e0e29ae0007a1add467ff666d96237e4', 1, 'default.png', 'personel'),
('MUHAMMAD FARRAS FEBRIAN', 16060120, 'KOMPOL', 'ADMINISTRASI', 'WONOSOBO', '1996-05-14', 'ISLAM', 'JAWA', '2020-01-01', 4, 'ccdec8ecd5a19bb9b2698c29ceca6e36', 1, 'default.png', 'personel'),
('AJENG PUTRI ANGGRAINI', 16060131, 'BRIPTU', 'ADMINISTRASI', 'SERANG', '1998-05-05', 'ISLAM', 'BETAWI', '2020-01-01', 8, '46f4ebf6fcb3b472f122dc3e8eb5006c', 1, 'default.png', 'personel'),
('ABRAHAM KAYEP KAEY', 16100144, 'BRIPKA', 'ADMINISTRASI', 'TEGAL', '1997-03-07', 'ISLAM', 'JAWA', '2020-01-01', 23, 'ae348f2926bb85db1f47fea9d1e68c43', 2, 'default.png', 'personel'),
('IKA NANDA AYUNINGTYAS', 16120003, 'BRIPDA', 'ADMINISTRASI', 'TEMANGGUNG', '2000-04-01', 'ISLAM', 'JAWA', '2020-01-01', 23, '0ebca3b4c48c5f23b25094f954c2cb9c', 9, 'default.png', 'personel'),
('AHYAITAL ARFANI', 16120004, 'BRIPTU', 'ADMINISTRASI', 'SEMARANG', '2000-12-18', 'ISLAM', 'JAWA', '2020-01-01', 12, '8ab09279c0702aea1bd00c8ae8c876c3', 8, 'default.png', 'personel'),
('AULA RAHMADI AGARA', 16120008, 'BRIPDA', 'ADMINISTRASI', 'YOGYAKARTA', '2000-11-08', 'ISLAM', 'JAWA', '2020-01-01', 12, 'aa42c80d9392c472d768b4254f82b87e', 14, 'default.png', 'personel'),
('HAYATUN AZNI', 16120014, 'AIPTU', 'ADMINISTRASI', 'PURWOREJO', '1998-05-06', 'ISLAM', 'JAWA', '2020-01-01', 23, '4d97b5a0a7101993ebb18d11cb23554d', 6, 'default.png', 'personel'),
('AFIKA NUR FEBRIANA HABIBAH', 16120018, 'BRIPTU', 'ADMINISTRASI', 'SEMARANG', '1996-08-03', 'ISLAM', 'JAWA', '2020-01-01', 22, 'a631db6169b91d25c466711734e0c23f', 3, 'default.png', 'personel'),
('ADILA FAUZIAH', 16120021, 'BRIPKA', 'ADMINISTRASI', 'WONOSOBO', '1996-10-27', 'ISLAM', 'JAWA', '2020-01-01', 21, '4797b932eb0ae561c46d0d8272420273', 3, 'default.png', 'personel'),
(' ASQYA RAHMADANI PRATIWI', 16120024, 'BRIPKA', 'ADMINISTRASI', 'TEGAL', '2000-12-19', 'ISLAM', 'JAWA', '2020-01-01', 22, 'dab59718c59f6c1ff46c40022dc84313', 17, 'default.png', 'personel'),
('EKA FITRIYANA', 16120025, 'BRIGADIR', 'ADMINISTRASI', 'PURWOREJO', '1998-08-27', 'ISLAM', 'JAWA', '2020-01-01', 9, 'd4e85ed6ee847e27fe5a6ac709681167', 1, 'default.png', 'personel'),
('ANINDITA PUTRI LEKSONO', 16120028, 'BRIPKA', 'ADMINISTRASI', 'PEKALONGAN', '1997-11-25', 'ISLAM', 'JAWA', '2020-01-01', 20, '10e5ee1369aba0db0a94de7998c7d8da', 10, 'default.png', 'personel'),
('INTAN SEPNA FIDIASARI', 16120053, 'BRIPKA', 'ADMINISTRASI', 'BREBES', '1996-06-28', 'ISLAM', 'JAWA', '2020-01-01', 25, '99ee4567bcc863b5d4db4a373cea023f', 13, 'default.png', 'personel'),
('DYAH NUR ISNAINI', 16130065, 'AKP', 'ADMINISTRASI', 'BALI', '2000-05-24', 'ISLAM', 'BALI', '2020-01-01', 9, '5e368495d42904c16146feb6f9eeae09', 1, 'default.png', 'personel'),
('ADELIA NABILLA EKA PUTRI', 16130069, 'BRIPKA', 'ADMINISTRASI', 'PEMALANG', '1998-07-13', 'ISLAM', 'JAWA', '2020-01-01', 21, '8fcb47ac9d147c68ce9808b734c52c79', 5, 'default.png', 'personel'),
('IKA DIAH MAULIDA', 16130078, 'BRIPDA', 'ADMINISTRASI', 'TEGAL', '1999-01-12', 'ISLAM', 'JAWA', '2020-01-01', 24, 'e78f35c433fd0fec73f32b2f1cadc577', 9, 'default.png', 'personel'),
('ANNISA HANANINGTYAS', 16130079, 'BRIPDA', 'ADMINISTRASI', 'TEGAL', '1999-01-07', 'ISLAM', 'JAWA', '2020-01-01', 25, '3021e4b25be605449f3d963e92a4dc44', 16, 'default.png', 'personel'),
('AFIFAH PANDAN WANGI', 16130082, 'BRIPTU', 'ADMINISTRASI', 'SEMARANG', '1999-05-18', 'ISLAM', 'JAWA', '2020-01-01', 24, '5d44f1ead572e0b77d30394fb2e0d903', 3, 'default.png', 'personel'),
('AMY FEBRIANI HARTONO', 16130098, 'AKP', 'KAPOLSEK BANYUMANIK', 'KUDUS', '1999-03-21', 'ISLAM', 'JAWA', '2020-01-01', 1, '327041875691d326e061b6d17a2772a4', 10, 'default.png', 'personel'),
('INTAN RATNA SARI', 16130100, 'BRIPKA', 'ADMINISTRASI', 'TEGAL', '1998-08-23', 'ISLAM', 'JAWA', '2020-01-01', 22, '81e576fda111c61962bcfc19f0b081f3', 13, 'default.png', 'personel'),
('AMELIA DINAH ARIANI', 16130102, 'BRIPKA', 'ADMINISTRASI', 'KUDUS', '2000-09-22', 'ISLAM', 'JAWA', '2020-01-01', 12, 'aa3ff81ad247553e82d9479be7be1f08', 11, 'default.png', 'personel'),
('ILMA NURUL HAYATI', 16130107, 'BRIPDA', 'ADMINISTRASI', 'SALATIGA', '1998-02-02', 'ISLAM', 'JAWA', '2020-01-01', 20, '184e5c8426d7127ac8790df49e143901', 9, 'default.png', 'personel'),
('ANISA NUR HARYANI', 16130112, 'BRIPKA', 'ADMINISTRASI', 'KUDUS', '1998-01-25', 'ISLAM', 'JAWA', '2020-01-01', 21, '32fe860f3e3dbbcf456e5d2c7fffd8e3', 15, 'default.png', 'personel'),
('BUNGA JELITA', 16130114, 'AKP', 'ADMINISTRASI', 'BALIKPAPAN', '1998-01-02', 'ISLAM', 'DAYAK', '2020-01-01', 2, '344a055a211c5d1317b4f30d6b0e99c0', 1, 'default.png', 'personel'),
('ASTRIANA MARTA BATUBARA', 16130128, 'BRIPKA', 'ADMINISTRASI', 'BREBES', '1999-09-29', 'ISLAM', 'JAWA', '2020-01-01', 2, '66634e75ac402d250fa32a696ce18339', 17, 'default.png', 'personel'),
('ADIRA ZAHRA', 16130130, 'BRIPTU', 'ADMINISTRASI', 'SEMARANG', '1998-04-25', 'ISLAM', 'JAWA', '2020-01-01', 23, 'ec1203e638ef671b2fb47fc527cc7c2a', 3, 'default.png', 'personel'),
('AHMAD FARID NAUFAL', 16140058, 'BRIPTU', 'KAPOLSEK GUNUNGPATI', 'PEMALANG', '2000-06-19', 'ISLAM', 'JAWA', '2020-01-01', 1, '04c757fba5bdb0663c7324d0d779c667', 8, 'default.png', 'personel'),
('ANTONIUS FERRY MARCELLINO MART', 16140064, 'BRIPDA', 'ADMINISTRASI', 'PEMALANG', '1998-01-28', 'ISLAM', 'JAWA', '2020-01-01', 20, 'ccf8d0567c014927c450e22ec346e1b9', 16, 'default.png', 'personel'),
('ADHELIA IMANIANTI', 16140083, 'BRIPKA', 'ADMINISTRASI', 'KENDAL', '1997-08-12', 'ISLAM', 'JAWA', '2020-01-01', 25, '7129d08c1d066b7eab797896ab93afb0', 5, 'default.png', 'personel'),
('HELENA RAHMARANI PUTRI', 16140092, 'KOMPOL ', 'ADMINISTRASI', 'WONOGIRI', '1996-07-09', 'ISLAM', 'JAWA', '2020-01-01', 22, '7f26d32694a22c69528d1313be94fe6a', 6, 'default.png', 'personel'),
('IRA ROZA MILINDA', 16140094, 'BRIPKA', 'ADMINISTRASI', 'LOMBOK', '1997-02-14', 'ISLAM', 'SASAK', '2020-01-01', 23, '27a2ce523f2bb45a8f8d834c4b6aa9b3', 13, 'default.png', 'personel'),
('ARIE RUFAIDAH', 16140096, 'BRIPDA', 'KAPOLSEK SEMARANG TIMUR', 'KUDUS', '1996-07-10', 'ISLAM', 'JAWA', '2020-01-01', 1, '1ac0da848ef743294a4e81662be524a1', 16, 'default.png', 'personel'),
('IMELDA TIYANING PUTRI', 16140121, 'BRIPDA', 'ADMINISTRASI', 'SALATIGA', '1998-10-31', 'ISLAM', 'JAWA', '2020-01-01', 21, '44f6f8e24f033bf4460037b6fc87c824', 9, 'default.png', 'personel'),
('AMIRA HUWAIDA', 16140126, 'BRIPKA', 'ADMINISTRASI', 'DEMAK', '1998-12-17', 'ISLAM', 'JAWA', '2020-01-01', 2, '040f3e93f9f7e68a98e8b84f1f793b61', 11, 'default.png', 'personel'),
('ANGGIA BERLIAN BUNTARLAN', 16140129, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1997-08-17', 'ISLAM', 'JAWA', '2020-01-01', 24, 'b2dd6add101e90f6571a76af7b5235de', 10, 'default.png', 'personel'),
('ZETHA HAYUNING PRAMESTI', 17060009, 'AKP', 'ADMINISTRASI', 'SURAKARTA', '1998-11-27', 'ISLAM', 'JAWA', '2020-01-01', 5, '48d8810e6d2bd92172fa2eacad388b53', 1, 'default.png', 'personel'),
('MOCHAMAD ALDY PRATAMA', 17060027, 'BRIPTU', 'ADMINISTRASI', 'KUDUS', '1996-02-15', 'ISLAM', 'JAWA', '2020-01-01', 3, '741b45ca130dab37e65b7e1bb52ceb65', 1, 'default.png', 'personel'),
('ZARA ARYANTI JUANA', 17060042, 'AKP', 'ADMINISTRASI', 'SEMARANG', '1999-01-10', 'ISLAM', 'JAWA', '2020-01-01', 5, '671d88afbef880acb96efff6310ab8d8', 1, 'default.png', 'personel'),
('DIANA AGUSTIN', 17060050, 'BRIPTU', 'ADMINISTRASI', 'SEMARANG', '1994-06-15', 'ISLAM', 'JAWA', '2020-07-01', 8, '0453d5257321056194feabc0b4a9867d', 1, 'default.png', 'personel'),
('MUHAMMAD ALFI PURBIYANTO', 17060055, 'KOMPOL', 'ADMINISTRASI', 'TEMANGGUNG', '1997-09-02', 'ISLAM', 'JAWA', '2020-01-01', 3, '7e1ba312edd9b624f3bcc7bff49316c5', 1, 'default.png', 'personel'),
('MOHAMMAD LUQYANA ROMYZ', 17060057, 'AIPTU', 'ADMINISTRASI', 'PURWOKERTO', '1999-11-29', 'ISLAM', 'JAWA', '2020-01-01', 3, 'f4dee7a92da8257231b41fc61a0936e3', 1, 'default.png', 'personel'),
('AFINDA APRIKA NINGRUM', 17060074, 'AKP', 'ADMINISTRASI', 'SEMARANG', '1996-04-22', 'ISLAM', 'JAWA', '2020-01-01', 7, '8f35095461ce18d58e7574d7fc2f5ccc', 1, 'default.png', 'personel'),
('ADITYA NAUVALDI DZAKIANTO', 17060079, 'BRIPKA', 'ADMINISTRASI', 'TEMANGGUNG', '2000-02-19', 'ISLAM', 'JAWA', '2020-01-01', 7, 'a5ce971599aa7685a7e664dd9c0e2e55', 1, 'default.png', 'personel'),
('MUHAMMAD CHAIDIR AL GHIFFARI', 17060086, 'KOMPOL', 'ADMINISTRASI', 'KUDUS', '2000-10-25', 'ISLAM', 'JAWA', '2020-01-01', 4, 'ecadc757f6e6d751c0239a7f86da518c', 1, 'default.png', 'personel'),
('AGATHA OLIVIA WIDYA PRASANTI', 17060089, 'BRIPTU', 'ADMINISTRASI', 'PEKALONGAN', '1999-03-05', 'ISLAM', 'JAWA', '2020-01-01', 8, '34ceb9cce3e1d590b4fce42889ec1deb', 1, 'default.png', 'personel'),
('MUHAMMAD AZKA SAFRI ANNANDHIF', 17060097, 'KOMPOL', 'ADMINISTRASI', 'DEMAK', '2000-12-08', 'ISLAM', 'JAWA', '2020-01-01', 3, '5723611e1eb9bdf64fb0af882471ef31', 1, 'default.png', 'personel'),
('MITA DEWI KUSUMASTUTI', 17060100, 'AKP', 'ADMINISTRASI', 'SURABAYA', '1998-11-15', 'ISLAM', 'JAWA', '2020-01-01', 2, '558a121ab6cf9362a78dd096c2b25f43', 1, 'default.png', 'personel'),
('MUHAMAD DEDDY MAHA DIKKA', 17060104, 'KOMPOL', 'ADMINISTRASI', 'BANYUMAS', '1997-05-23', 'ISLAM', 'JAWA', '2020-01-01', 3, 'cf394f0a9f24bd597d8416d34b746840', 1, 'default.png', 'personel'),
('AFFAN AFIA HANIF', 17060112, 'BRIPKA', 'ADMINISTRASI', 'DEMAK', '2000-01-21', 'ISLAM', 'JAWA', '2020-01-01', 7, 'fbcd3da2878182ef7a29f8ea13d5690d', 1, 'default.png', 'personel'),
('MUHAMMAD HANIF FAISAL', 17060114, 'KOMPOL', 'ADMINISTRASI', 'PEKALONGAN', '1997-03-27', 'ISLAM', 'JAWA', '2020-01-01', 4, '9810ce6ebe3176284217b39c50b10096', 1, 'default.png', 'personel'),
('AHNAF FAIZ PRATAMA', 17060126, 'KOMPOL', 'ADMINISTRASI', 'WONOGIRI', '1997-02-05', 'ISLAM', 'JAWA', '2020-01-01', 8, 'be690698e09c4086c6d0e61b85c57776', 1, 'default.png', 'personel'),
('ADHA AXEL ARIEF FANNY', 17060149, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1999-02-03', 'ISLAM', 'JAWA', '2020-01-01', 7, '6623e9ad38603268c4d022b0cf5795b2', 1, 'default.png', 'personel'),
('MUHAMMAD HAIDAR ABIYYA', 17060152, 'KOMPOL', 'ADMINISTRASI', 'SEMARANG', '1999-01-07', 'ISLAM', 'JAWA', '2020-01-01', 4, '905f1692061d9bba80af8615293462f3', 1, 'default.png', 'personel'),
('MUHAMMAD DZIKRI ZAKI', 17060153, 'KOMPOL', 'ADMINISTRASI', 'TEMANGGUNG', '1997-10-16', 'ISLAM', 'JAWA', '2020-01-01', 4, '4af1a73932612dfa49d51645141c8f11', 1, 'default.png', 'personel'),
('ADINDA CITRA SURYANINGTYAS', 17060163, 'BRIPKA', 'ADMINISTRASI', 'KUDUS', '1999-07-02', 'ISLAM', 'JAWA', '2020-01-01', 7, 'ccabd1c3a6f2d90d7fb5e9ac053929df', 1, 'default.png', 'personel'),
('Fahmi Widihastuti', 17067400, 'BRIPDA', 'ADMINISTRASI', 'SEMARANG', '1997-10-24', 'ISLAM', 'JAWA', '2020-01-01', 12, 'c4e7db0721c1048379be0ffe879bec1a', 1, 'default.png', 'personel'),
('AFIFA AYU MUFIDA', 17111123, 'BRIPTU', 'ADMINISTRASI', 'KUDUS', '1999-08-18', 'ISLAM', 'JAWA', '2020-01-01', 22, '4de6cd9e68cb03666c366997a74f7324', 3, 'default.png', 'personel'),
('CAVINA AINURISKA ', 17120003, 'BRIPKA', 'ADMINISTRASI', 'TEGAL', '1998-12-28', 'ISLAM', 'JAWA', '2020-01-01', 2, 'b6d0137d2cd0b57485feb09c4873504f', 2, 'default.png', 'personel'),
('EKA SEPTI KURNIASIH', 17120004, 'AKP', 'ADMINISTRASI', 'PEMALANG', '1999-01-10', 'ISLAM', 'JAWA', '2020-01-01', 21, 'f3aacefe993eac2d16e8294a8b88db5d', 7, 'default.png', 'personel'),
('TRISMA', 17120005, 'BRIPKA', 'ADMINISTRASI', 'BREBES', '1998-11-03', 'ISLAM', 'JAWA', '2020-01-01', 20, '03bbf00704b82e24623d16808e031560', 2, 'default.png', 'personel'),
('ANNISA DWI FADZILAH', 17120007, 'BRIPKA', 'ADMINISTRASI', 'PEMALANG', '1999-10-10', 'ISLAM', 'JAWA', '2020-01-01', 12, '6a34b319a0abcc34fc97738df8c34e83', 16, 'default.png', 'personel'),
('LATIFAH MUTIA SARI ', 17120008, 'IPTU', 'ADMINISTRASI', 'SEMARANG', '1999-03-30', 'ISLAM', 'JAWA', '2020-01-01', 22, '5f06a69d45ae7f2c6b5c9082a509d525', 7, 'default.png', 'personel'),
('SHALCHA FATIMAH', 17120009, 'IPDA', 'ADMINISTRASI', 'PATI', '1997-01-30', 'ISLAM', 'JAWA', '2020-01-01', 24, '713cea3687706e12148e5393d555d54a', 7, 'default.png', 'personel'),
('MUHAMMAD KAFABIHI DZUNURAIN', 17120011, 'AKP', 'ADMINISTRASI', 'DEMAK', '1999-04-02', 'ISLAM', 'JAWA', '2020-01-01', 21, 'def22a7c2737daf3afa9656eea6d0eb9', 6, 'default.png', 'personel'),
('YOLANDA SHEILA NABILA', 17120014, 'BRIPKA', 'ADMINISTRASI', 'JAKARTA', '1999-01-05', 'ISLAM', 'BETAWI', '2020-01-01', 20, '2d9c5a128f52e1a6320eeef12ae64dd9', 6, 'default.png', 'personel'),
('GEA AGATA ', 17120015, 'BRIPTU', 'ADMINISTRASI', 'KUDUS', '1996-12-05', 'ISLAM', 'JAWA', '2020-01-01', 21, '569c6bafb1d4d3b710b5344fcfd9ceee', 7, 'default.png', 'personel'),
('AMALIA WIDYANINGRUM', 17120016, 'KOMPOL ', 'ADMINISTRASI', 'SEMARANG', '1997-12-23', 'ISLAM', 'JAWA', '2020-01-01', 2, '40035add3b4fb0c843321e1c7a65a23a', 6, 'default.png', 'personel'),
('RIZKI FEBRIANNO', 17120017, 'AKP', 'KAPOLSEK GAYAMSARI', 'JEPARA', '1998-07-06', 'ISLAM', 'JAWA', '2020-01-01', 1, '8ab1b9122a49f4ef3a075603245ecb39', 7, 'default.png', 'personel'),
('ROSMI HARTINI', 17120018, 'BRIPKA', 'ADMINISTRASI', 'LOMBOK', '1997-06-19', 'ISLAM', 'SASAK', '2020-01-01', 2, '09525f62e25dc8d62d28d64917fc9153', 2, 'default.png', 'personel'),
('DESTHA PUSPITASARI', 17120019, 'BRIPKA', 'ADMINISTRASI', 'KLATEN', '2000-03-09', 'ISLAM', 'JAWA', '2020-01-01', 20, '7e5a164acac28f080c707a3fb2579030', 7, 'default.png', 'personel'),
('DWI ARIF PANGESTU AJI', 17120022, 'BRIPKA', 'ADMINISTRASI', 'KENDAL', '1998-05-05', 'ISLAM', 'JAWA', '2020-01-01', 24, '6bc4c140daae5ec5567fa262b9ae526e', 2, 'default.png', 'personel'),
('EKA YULIA NINGSIH', 17120023, 'BRIPTU', 'ADMINISTRASI', 'SEMARANG', '1998-05-15', 'ISLAM', 'JAWA', '2020-01-01', 9, '6ff3bf96685741a853bcb2dc16da56aa', 1, 'default.png', 'personel'),
('DWI WAHYU SANTOSO', 17120024, 'KOMPOL', 'ADMINISTRASI', 'SERANG', '1996-01-09', 'ISLAM', 'JAWA', '2020-01-01', 9, '9648bb8c60d265cf4e580c294dc4ebcc', 1, 'default.png', 'personel'),
('FITRIYANA', 17120026, 'BRIPKA', 'ADMINISTRASI', 'BOYOLALI', '1996-11-24', 'ISLAM', 'JAWA', '2020-01-01', 25, '6e1bd4d341aee9085bacbb01f5fcb93a', 6, 'default.png', 'personel'),
('SITI RUKOYAH', 17120029, 'BRIPKA', 'ADMINISTRASI', 'KUDUS', '1999-10-06', 'ISLAM', 'JAWA', '2020-01-01', 22, '4a8f730de3481ce92ddff36f31e8d4cf', 7, 'default.png', 'personel'),
('NUR IZATI', 17120030, 'BRIPTU', 'ADMINISTRASI', 'SEMARANG', '2000-05-03', 'ISLAM', 'PADANG', '2020-01-01', 12, '2ac102482104ae6dcd14c9705c3a1b17', 6, 'default.png', 'personel'),
('NURUL CHAKIMAH MUTHAROH', 17120032, 'BRIPKA', 'ADMINISTRASI', 'BENGKULU', '2000-11-21', 'ISLAM', 'BUGIS', '2020-01-01', 20, '8f573d3ab001780e8af2768dede99635', 2, 'default.png', 'personel'),
('ERWIN FERNANDA', 17120033, 'BRIPKA', 'ADMINISTRASI', 'KUDUS', '1997-08-23', 'ISLAM', 'JAWA', '2020-01-01', 10, '7f98ebfc4134d09d47c1cdab96c33aca', 1, 'default.png', 'personel'),
('TITANIA PRAMESTI DEWI ', 17120106, 'IPDA', 'KAPOLSEK SEMARANG BARAT', 'SEMARANG', '1999-06-22', 'ISLAM', 'JAWA', '2020-01-01', 1, '5f21908a3330115b1fa67ad45c0253b2', 4, 'default.png', 'personel'),
('NINA EKA MARLIANA', 17120123, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1997-06-14', 'ISLAM', 'JAWA', '2020-01-01', 12, '51c9b316ee32e1ef9530e3bbd0f92d29', 4, 'default.png', 'personel'),
('RIZKIA AMI JESIA', 17120127, 'IPTU', 'ADMINISTRASI', 'KENDAL', '1998-10-22', 'ISLAM', 'JAWA', '2020-01-01', 21, '9a5f9f3e9baf46bb66ba881190260c6f', 4, 'default.png', 'personel'),
('ANISA QURROTUL AIN ALMUJADIDAH', 17121001, 'IPDA', 'ADMINISTRASI', 'SEMARANG', '2000-01-10', 'ISLAM', 'JAWA', '2020-01-01', 2, '714bd4c750b2d35751786e808796bd1b', 4, 'default.png', 'personel'),
('GIZCHA ROFINA', 17121002, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1999-02-17', 'ISLAM', 'JAWA', '2020-01-01', 22, 'caf4e0c8490db026d7b1ca3953a8cfbe', 4, 'default.png', 'personel'),
('ATIK MUNAWAROH', 17121013, 'IPDA', 'ADMINISTRASI', 'SEMARANG', '1996-07-07', 'ISLAM', 'JAWA', '2020-01-01', 22, 'a85da849bc4d95dc301ff659de527874', 4, 'default.png', 'personel'),
('ANITA F RUMAPEA', 17121014, 'BRIPKA', 'ADMINISTRASI', 'LOMBOK', '2000-04-16', 'ISLAM', 'SASAK', '2020-01-01', 22, 'f8399afbc987262fa7e74c8aeaa00048', 15, 'default.png', 'personel'),
('UMMI LAILA SALAMAH', 17121020, 'AIPTU', 'ADMINISTRASI', 'PEKALONGAN', '1999-01-08', 'ISLAM', 'JAWA', '2020-01-01', 25, '00d87953120d04117cfb68cd33141273', 4, 'default.png', 'personel'),
('ATUN ALISA HANDAYANI', 17121024, 'BRIPKA', 'ADMINISTRASI', 'TEGAL', '1997-04-23', 'ISLAM', 'JAWA', '2020-01-01', 23, 'ba7db0d16310aa18aae0c136ae429bc1', 14, 'default.png', 'personel'),
('CHASANATUL MAELANI', 17121025, 'AKP', 'ADMINISTRASI', 'PURWOREJO', '1998-03-18', 'ISLAM', 'JAWA', '2020-01-01', 22, 'c73532c95025fbd7b1a681e4006e398b', 4, 'default.png', 'personel'),
('AMALIA EKA AGUSTINA', 17121026, 'BRIPKA', 'ADMINISTRASI', 'PEMALANG', '1996-05-02', 'ISLAM', 'JAWA', '2020-01-01', 23, '00c565dcd8a3fac9d6969e4c5a0b462d', 11, 'default.png', 'personel'),
('ADZRO\'UL AKIFAH', 17121118, 'BRIPKA', 'ADMINISTRASI', 'DEMAK', '2000-12-13', 'ISLAM', 'JAWA', '2020-01-01', 20, '687845a116408d850cdd54f560309ce6', 3, 'default.png', 'personel'),
('AGITA DIANINGSIH', 17121122, 'BRIPTU', 'ADMINISTRASI', 'SEMARANG', '1998-10-02', 'ISLAM', 'JAWA', '2020-01-01', 20, 'cca2c6b944f55d668c9af90b17ad5938', 3, 'default.png', 'personel'),
('MUHAMMAD JUNIADI', 17130033, 'BRIPTU', 'KAPOLSEK PEDURUNGAN', 'BEKASI', '1999-09-12', 'ISLAM', 'BETAWI', '2020-01-01', 1, '752933504026c93349af2ee6cb41fa39', 6, 'default.png', 'personel'),
('FIRLIYANA DESARI ', 17130034, 'BRIPKA', 'ADMINISTRASI', 'WONOSOBO', '1999-12-31', 'ISLAM', 'JAWA', '2020-01-01', 23, '1ff0b75647ce5594bf0fbe84b88edb60', 7, 'default.png', 'personel'),
('ZEA SYAKIRA BISSAJIDA', 17130035, 'IPDA', 'ADMINISTRASI', 'TEMANGGUNG', '1999-04-04', 'ISLAM', 'JAWA', '2020-01-01', 24, '9874b63c8891d52afff220acf3b8d7bf', 6, 'default.png', 'personel'),
('ANINDYA PRADNYA PARAMARTA', 17130037, 'AIPTU', 'ADMINISTRASI', 'BEKASI', '2000-03-16', 'ISLAM', 'BETAWI', '2020-01-01', 2, 'e5af6348efd4bd27ae235dff0d4d9981', 6, 'default.png', 'personel'),
('MUHAMMAD AL FAUZI', 17130038, 'AIPTU', 'ADMINISTRASI', 'SEMARANG', '2000-05-21', 'ISLAM', 'JAWA', '2020-01-01', 23, 'e195f30d106d5a67cd67795137afce22', 7, 'default.png', 'personel'),
('CITRA RESTI PAMULIA', 17130040, 'BRIPKA', 'ADMINISTRASI', 'PEMALANG', '2000-06-29', 'ISLAM', 'JAWA', '2020-01-01', 20, '0a5490bc12a78f8cc01122ce8e24cd1d', 7, 'default.png', 'personel'),
('ADINDA DJASMIN SETYO PUTRI', 17130054, 'BRIPKA', 'ADMINISTRASI', 'BANYUMAS', '2000-08-19', 'ISLAM', 'JAWA', '2020-01-01', 25, '60bdc6e7db6127bed345883f09dc1be2', 3, 'default.png', 'personel'),
('ANTYANA DWI PRATIWI', 17130061, 'IPTU', 'ADMINISTRASI', 'BONTANG', '1999-06-06', 'ISLAM', 'BUGIS', '2020-01-01', 25, '8897030491af4deaa0da7255553f3c78', 7, 'default.png', 'personel'),
('ANISAH SEPTIANI MUTHIA', 17130063, 'BRIPKA', 'ADMINISTRASI', 'JEPARA', '1999-01-31', 'ISLAM', 'JAWA', '2020-01-01', 22, '86d3ff6f1240fabee3658b8091e253fa', 15, 'default.png', 'personel'),
('ARIFATUL ULYA HASNAWATI', 17130064, 'BRIPDA', 'ADMINISTRASI', 'WONOSOBO', '1996-01-15', 'ISLAM', 'JAWA', '2020-01-01', 24, '2689d5937136827ec6a8f15086dcaf94', 17, 'default.png', 'personel'),
('ADINDA SAFITRI', 17130065, 'BRIPKA', 'ADMINISTRASI', 'TEGAL', '1999-02-28', 'ISLAM', 'JAWA', '2020-01-01', 22, '24f76cbafbd36b86bdd938481982cf0c', 3, 'default.png', 'personel'),
('ADANI LADIBA PANDIA', 17130066, 'BRIPKA', 'KAPOLSEK SEMARANG UTARA', 'TEMANGGUNG', '1999-03-12', 'ISLAM', 'JAWA', '2020-01-01', 1, '5ace05844ec0318672fa389b85625a8c', 2, 'default.png', 'personel'),
('ANISA GITA AYU SEKARINI', 17130077, 'BRIPKA', 'ADMINISTRASI', 'KUDUS', '2000-12-08', 'ISLAM', 'JAWA', '2020-01-01', 21, 'ed85853766387242035afaa5c5ef8130', 15, 'default.png', 'personel'),
('ILHAM ALFISINA NOOR SYAHDHANI', 17130086, 'BRIPDA', 'KAPOLSEK TEMBALANG', 'KENDAL', '1996-01-22', 'ISLAM', 'JAWA', '2020-01-01', 1, '528fe2c5872f04ff92fe8c90b13e3ec8', 14, 'default.png', 'personel'),
('ANISA RAHMAWATI', 17130088, 'BRIPKA', 'ADMINISTRASI', 'WONOSOBO', '2000-01-20', 'ISLAM', 'JAWA', '2020-01-01', 20, '5dbc56d8d476f0f10d79772bbef2a485', 15, 'default.png', 'personel'),
('HENY EVIANA SEMBIRING', 17130093, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1997-02-18', 'ISLAM', 'JAWA', '2020-01-01', 2, '439239444b6b9a57fae2712e74043844', 13, 'default.png', 'personel'),
('ANNISA WALIYYAM MURSYIDA', 17130095, 'BRIPDA', 'ADMINISTRASI', 'MADURA', '2000-08-02', 'ISLAM', 'MADURA', '2020-01-01', 22, '3415237b1c9e34a4760d0c7d404e32e3', 16, 'default.png', 'personel'),
('MUHAMMAD AL FAUZAN', 17130136, 'IPTU', 'ADMINISTRASI', 'SEMARANG', '2000-07-09', 'ISLAM', 'JAWA', '2020-01-01', 20, '3cc3e0de43bf7323fd1b13e9d5b1b96a', 4, 'default.png', 'personel'),
('SEKAR ARUM WIDYADHANA', 17130141, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1998-03-13', 'ISLAM', 'JAWA', '2020-01-01', 23, 'e1a0f2b1abb8ec918224b204ed5e860f', 4, 'default.png', 'personel'),
('AINAN VIHA TUSAMMA SALSABILA', 17130175, 'BRIPTU', 'ADMINISTRASI', 'KENDAL', '1997-07-20', 'ISLAM', 'JAWA', '2020-01-01', 23, '48b00d25427fd90c82ba5bd037046aff', 8, 'default.png', 'personel'),
('ADINDA MEVYA PUTRI', 17140005, 'BRIPDA', 'ADMINISTRASI', 'PEMALANG', '1996-01-09', 'ISLAM', 'JAWA', '2020-01-01', 24, '160e0faa2c4647babcc6d7aca09bd31f', 3, 'default.png', 'personel'),
('ADDINA ZULFAA QALISTA', 17140016, 'BRIPTU', 'ADMINISTRASI', 'MADURA', '1999-03-06', 'ISLAM', 'MADURA', '2020-01-01', 20, '10cd2231aa710e0f6a9133c98412fc1c', 5, 'default.png', 'personel'),
('ARDINI RIDHANILA', 17140017, 'BRIPDA', 'ADMINISTRASI', 'DEMAK', '1999-03-05', 'ISLAM', 'JAWA', '2020-01-01', 22, '33a08938de2582e923cca9c73633bcab', 16, 'default.png', 'personel'),
('AULIA NASTITI DARAJATI', 17140024, 'BRIPDA', 'ADMINISTRASI', 'SALATIGA', '1999-04-11', 'ISLAM', 'JAWA', '2020-01-01', 2, '9804fdd5c5524e76f746d7eafc734d4e', 14, 'default.png', 'personel'),
('DYAH PROBO SANTY', 17140034, 'BRIPTU', 'ADMINISTRASI', 'TANGERANG', '1999-02-12', 'ISLAM', 'BETAWI', '2020-01-01', 9, '7678bde9875bc181b06997c58f6f0fb9', 1, 'default.png', 'personel'),
('ALMA ALYSA AZZAHRA', 17140122, 'BRIPKA', 'ADMINISTRASI', 'BEKASI', '1998-03-06', 'ISLAM', 'JAWA', '2020-01-01', 23, '2f8ac277b92334cb9a3556e20573f99b', 11, 'default.png', 'personel'),
('AININDA RACHMAWATI', 17141106, 'BRIPTU', 'ADMINISTRASI', 'KENDAL', '2000-05-14', 'ISLAM', 'JAWA', '2020-01-01', 20, 'b8f5f5f6dd5547be5ad228de082282a3', 8, 'default.png', 'personel'),
('AISKA ZHAFIRA ALAMSYAH', 17142306, 'BRIPTU', 'ADMINISTRASI', 'DEMAK', '2000-03-01', 'ISLAM', 'JAWA', '2020-01-01', 24, '77550776560d39d2abe9030bcd2ad047', 8, 'default.png', 'personel'),
('Fitri Paramitha', 17183346, 'BRIPKA', 'ADMINISTRASI', 'TEGAL', '1995-03-09', 'ISLAM', 'JAWA', '2020-01-01', 13, 'd120c74fa270615e7d98a3a0a7794923', 1, 'default.png', 'personel'),
('Novia Hasaniy', 18909772, 'AKP', 'ADMINISTRASI', 'WELERI', '1992-11-14', 'ISLAM', 'JAWA', '2020-01-01', 4, '3fef331daa4a56d316d03571e42a5e5c', 1, 'default.png', 'personel'),
('ESA FITRI AMALIA ', 19209231, 'BRIPKA', 'ADMINISTRASI', 'BREBES', '1997-01-24', 'ISLAM', 'JAWA', '2020-01-01', 25, '618a94ae616c1995617e96bd47f118c6', 2, 'default.png', 'personel'),
('Desca Sabrina', 19508079, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1988-09-17', 'ISLAM', 'JAWA', '2020-01-01', 15, 'b3e5a89c537762764c5d73dfb2884113', 1, 'default.png', 'personel'),
('Ossi Marvina', 20985320, 'BRIPDA', 'ADMINISTRASI', 'KENDAL', '1995-11-30', 'ISLAM', 'JAWA', '2020-01-01', 18, 'd62dc4c6a76410b4c74399757c9198ae', 1, 'default.png', 'personel'),
('Imelda Viniatry Andriana', 22001489, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1987-09-13', 'ISLAM', 'JAWA', '2020-01-01', 5, '52306a5aa09baea28e51e1c5be736810', 1, 'default.png', 'personel'),
('Hizrian Apriyani', 23793787, 'BRIPDA', 'ADMINISTRASI', 'JEPARA', '1997-10-22', 'ISLAM', 'JAWA', '2020-01-01', 3, 'e9fd82a3418804b451c839d2b51c7118', 1, 'default.png', 'personel'),
('Dian Pangestu', 23839288, 'BRIPKA', 'ADMINISTRASI', 'WELERI', '1995-07-03', 'ISLAM', 'JAWA', '2020-01-01', 4, '5c7e0dbb44795299c15e1c8bc7e47b07', 1, 'default.png', 'personel'),
('MUHAMMAD ALI SYAHDAN', 23883281, 'BRIPDA', 'AJUN DUA POLSEK GAYAMSARI', 'DEMAK', '1987-06-08', 'ISLAM', 'JAWA', '2020-01-01', 20, '228af0c699d4b9b050a2c42c483b4313', 7, 'default.png', 'personel'),
('ANIDA HANDINI TAN', 24567654, 'AKP', 'AJUN PERWIRA POLSEK GAYAMSARI', 'WONOSOBO', '1985-07-24', 'KHONGHUCU', 'JAWA', '0000-00-00', 20, 'b9d994d079093b2696d85c3d2bf6fa99', 7, 'default.png', 'personel'),
('Mark Paramadina', 24794285, 'BRIPKA', 'ADMINISTRASI', 'BUMIAYU', '1990-04-28', 'ISLAM', 'JAWA', '2020-01-01', 8, '744028f60e03f0e365476cf9956150c4', 1, 'default.png', 'personel');
INSERT INTO `personel` (`nama`, `nrp`, `pkt`, `jabatan`, `tempat`, `tgl_lahir`, `agama`, `suku`, `tmt_jab`, `id_bagian`, `pass`, `id_instansi`, `gambar`, `level`) VALUES
('Romario Prihatiwi', 25033712, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1987-02-06', 'ISLAM', 'JAWA', '2020-01-01', 9, '4043523dc54e56313950a06498ec77b6', 1, 'default.png', 'personel'),
('Priyohadi Rezky Afwika', 25637732, 'BRIPKA', 'ADMINISTRASI', 'KENDAL', '1996-01-15', 'ISLAM', 'JAWA', '2020-01-01', 14, '27f7b828ec158d9e0c335a9aa46d3df9', 1, 'default.png', 'personel'),
('Monica Sukosulistiowani', 26119860, 'BRIPKA', 'ADMINISTRASI', 'WONOGIRI', '1993-08-14', 'ISLAM', 'JAWA', '2020-01-01', 4, 'f9f04bc724bc23df42c64a0555eb38bf', 1, 'default.png', 'personel'),
('Irmalia Agtrivia', 27383308, 'AKP', 'ADMINISTRASI', 'KENDAL', '1988-10-05', 'ISLAM', 'JAWA', '2020-01-01', 3, '41ae753b95a0cc38f60b6b711a74f91e', 1, 'default.png', 'personel'),
('Zianira Yuniara', 27755778, 'BRIPKA', 'ADMINISTRASI', 'KENDAL', '1990-07-19', 'ISLAM', 'JAWA', '2020-01-01', 2, 'd85c9cf76fc6c7eab8dc58b661ad7092', 1, 'default.png', 'personel'),
('Eskavia Indriani', 29179982, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1987-06-23', 'ISLAM', 'JAWA', '2020-01-01', 18, 'c6741d1f6de2143756446a07866cc3ea', 1, 'default.png', 'personel'),
('Lady Syahrani', 32322142, 'KOMPOL', 'ADMINISTRASI BAGIAN ', 'SEMARANG', '1992-06-01', 'KRISTEN', 'BATAK', '2020-01-01', 14, 'e3bd10f3f755002ca34cdd53da83c51e', 1, 'default.png', 'personel'),
('Farizi Utami', 32594172, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1996-08-28', 'ISLAM', 'JAWA', '2020-01-01', 13, 'ed7f91f15e02ab719f74452c67f626c5', 1, 'default.png', 'personel'),
('Annis Anisa', 33040441, 'AKP', 'ADMINISTRASI', 'BREBES', '1988-10-20', 'ISLAM', 'JAWA', '2020-01-01', 14, '2ae9e4d3ac19659cb19dd774123bcd54', 1, 'default.png', 'personel'),
('Revo Wulandari', 33931331, 'BRIPKA', 'ADMINISTRASI', 'TEGAL', '1990-01-31', 'ISLAM', 'JAWA', '2020-01-01', 7, 'c14dedbcb6852873c8d9720cfb8e8cff', 1, 'default.png', 'personel'),
('Luna Elleonora', 33935528, 'BRIPKA', 'ADMINISTRASI', 'LOMBOK', '1987-09-28', 'ISLAM', 'JAWA', '2020-01-01', 9, 'aa6e2897132297b7d9829e316839b172', 1, 'default.png', 'personel'),
('Fathina Raka', 34153644, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1999-03-22', 'ISLAM', 'JAWA', '2020-01-01', 4, '5ad21c400f0973a479fea646be89fa8b', 1, 'default.png', 'personel'),
('ILHAM HAMDI, S.H', 34521213, 'KOMPOL', 'AJUN PERWIRA UTAMA POLSEK GAYAMSARI', 'SEMARANG', '1998-06-17', 'KATOLIK', 'JAWA', '2020-01-01', 23, '0a1af9262364f8a24cf7cb05ce45fa58', 7, 'default.png', 'personel'),
('Firas Resa', 36132283, 'BRIPDA', 'ADMINISTRASI', 'PEKALONGAN', '1994-02-18', 'ISLAM', 'JAWA', '2020-01-01', 2, 'ecbc6d36e0646343ad8ac9da6b76fd22', 1, 'default.png', 'personel'),
('Dimas Niroha', 36248428, 'BRIPKA', 'ADMINISTRASI', 'WONOGIRI', '1993-03-09', 'ISLAM', 'JAWA', '2020-01-01', 2, 'b8bc49befeb714f7419a66f66c11ea19', 1, 'default.png', 'personel'),
('MOCHAMMAD ILHAM EKO PRASETIO', 36604910, 'BRIPKA', 'ADMINISTRASI', 'PEMALANG', '1999-08-19', 'ISLAM', 'JAWA', '2020-01-01', 10, 'b75ee8ccdd226c68f9a7cc5af5a8a3ab', 1, 'default.png', 'personel'),
('MIKAEL ABIMANYU PUTRA PAMUNGKAS', 36605020, 'BRIGADIR', 'ADMINISTRASI', 'PEMALANG', '1998-05-20', 'KRISTEN', 'JAWA', '2020-01-01', 10, 'c78aa2d375ed4c4fe6ee5ce288b96d1f', 1, 'default.png', 'personel'),
('MUHAMMAD BAGUS NUGROHO', 36605073, 'BRIPTU', 'ADMINISTRASI', 'SEMARANG', '1998-12-21', 'ISLAM', 'JAWA', '2020-01-01', 10, '16d1373ea89d0d0312957d61e9c81d95', 1, 'default.png', 'personel'),
('MUHAMMAD FAHRUS SHOBIR AL FARIH', 36605423, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1997-08-01', 'ISLAM', 'JAWA', '2020-01-01', 10, 'b3ae1da76022264b223390b03a14eafe', 1, 'default.png', 'personel'),
('MIKE CINTYA NINGRUM', 36605759, 'BRIPTU', 'ADMINISTRASI', 'TEGAL', '2000-01-19', 'ISLAM', 'JAWA', '2020-01-01', 10, '2b162b1a8c02e3f87b8463c8f9097917', 1, 'default.png', 'personel'),
('MUHAMMAD FIKRI ABDUL JALIL', 36606496, 'BRIGADIR', 'ADMINISTRASI', 'LAMPUNG', '1998-09-25', 'ISLAM', 'LAMPUNG', '2020-01-01', 10, '89e2182e1b862710f10e6832688c32f6', 1, 'default.png', 'personel'),
('MEDINA DWI ANGGRAENI', 36606711, 'BRIPKA', 'ADMINISTRASI', 'PEKALONGAN', '1999-03-21', 'ISLAM', 'JAWA', '2020-01-01', 10, '24180a62c7c35c84dffd6df4d484d731', 1, 'default.png', 'personel'),
('MOHAMAD DANA MAULANA', 36606714, 'BRIGADIR', 'ADMINISTRASI', 'KENDAL', '2000-01-04', 'ISLAM', 'JAWA', '2020-01-01', 10, '14c47e1fd7a492414999a8b5c5967e13', 1, 'default.png', 'personel'),
('Anindyanti Onnara', 38311097, 'BRIPKA', 'ADMINISTRASI', 'WONOSOBO', '1997-07-30', 'ISLAM', 'JAWA', '2020-01-01', 12, 'bf8bb58f81e3f7b74303a56d04027c8e', 1, 'default.png', 'personel'),
('SURAJ SIGH', 38921873, 'BRIPTU', 'ADMINISTRASI BAGIAN ', 'BALI', '1995-01-18', 'HINDU', 'BALI', '2020-01-01', 24, 'b75b5ddc5f884fab5c91b4c21afe2203', 7, 'default.png', 'personel'),
('Triska Rahmah Cahyadi', 39554326, 'BRIPKA', 'ADMINISTRASI', 'KENDAL', '1992-09-28', 'ISLAM', 'JAWA', '2020-01-01', 5, '94d8cb54494db3e6876a8d2a731e4946', 1, 'default.png', 'personel'),
('Bunga Shabrina Gerard', 40713404, 'BRIPKA', 'ADMINISTRASI', 'WONOGIRI', '1993-10-19', 'ISLAM', 'JAWA', '2020-01-01', 16, 'c2839ec44b2749a28b81d765933adcec', 1, 'default.png', 'personel'),
('Eni Chairinaya Claudia', 41890427, 'BRIPKA', 'ADMINISTRASI', 'WONOSOBO', '1998-12-13', 'ISLAM', 'JAWA', '2020-01-01', 11, 'c8265950c072125ae9ecf2b8b14423dc', 1, 'default.png', 'personel'),
('Fajri Kevin Satrio', 43663865, 'BRIPDA', 'ADMINISTRASI', 'TEGAL', '1991-05-04', 'ISLAM', 'JAWA', '2020-01-01', 5, '9d66da4c7095eddf21a400486cd85226', 1, 'default.png', 'personel'),
('Ajeng Kartika', 44622348, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1995-03-21', 'ISLAM', 'JAWA', '2020-01-01', 18, '430c0ec50bcb66e5419a22570688ac10', 1, 'default.png', 'personel'),
('Tea Tanjung', 45918671, 'BRIPKA', 'ADMINISTRASI', 'LOMBOK', '1994-12-14', 'ISLAM', 'JAWA', '2020-01-01', 12, 'b8fc4c501e462fd74604f5eeee917a9c', 1, 'default.png', 'personel'),
('Fildzah Utami', 48768226, 'BRIPKA', 'ADMINISTRASI', 'BREBES', '1995-02-26', 'ISLAM', 'JAWA', '2020-01-01', 11, '055a9dfe1aa2992a2e4b3bf7d8c54014', 1, 'default.png', 'personel'),
('Indra Widyasmoro', 50297930, 'BRIPKA', 'ADMINISTRASI', 'TEGAL', '1990-09-25', 'ISLAM', 'JAWA', '2020-01-01', 8, '76584427f04dbccf1a52416ee2e40c74', 1, 'default.png', 'personel'),
('Irani Siliwangi', 51140620, 'BRIPDA', 'ADMINISTRASI', 'JEPARA', '1991-04-16', 'ISLAM', 'JAWA', '2020-01-01', 2, 'ed85a7098f3565062e0b64051f55bb5f', 1, 'default.png', 'personel'),
('Wahyu Cahyadi', 51171639, 'BRIPKA', 'ADMINISTRASI', 'BATANG', '1990-01-31', 'ISLAM', 'JAWA', '2020-01-01', 3, '05d710cc396be62488708ae63523b7c6', 1, 'default.png', 'personel'),
('Esra Rudiatin', 51982809, 'BRIPKA', 'ADMINISTRASI', 'BREBES', '1988-01-25', 'ISLAM', 'JAWA', '2020-01-01', 15, '4fd5438c6b3dc6726193d1186e2df3c6', 1, 'default.png', 'personel'),
('Ovienov Finkha Rahman', 55344095, 'BRIPKA', 'ADMINISTRASI', 'WELERI', '1994-11-26', 'ISLAM', 'JAWA', '2020-01-01', 3, 'ea4be47ba419354d5937f7413b3aad4d', 1, 'default.png', 'personel'),
('Ariyadi Hakim', 55805594, 'BRIPKA', 'ADMINISTRASI', 'TEGAL', '1994-05-03', 'ISLAM', 'JAWA', '2020-01-01', 11, 'a54fce76ae6114c3609f381019bc1e31', 1, 'default.png', 'personel'),
('Imroatun Mayasopha', 58339746, 'BRIPKA', 'ADMINISTRASI', 'TEGAL', '1995-12-18', 'ISLAM', 'JAWA', '2020-01-01', 10, '1f6e05d6a67121c331bdf6904b7995fb', 1, 'default.png', 'personel'),
('Alvina Rumanti', 58927357, 'BRIPKA', 'ADMINISTRASI', 'BREBES', '1993-10-27', 'ISLAM', 'JAWA', '2020-01-01', 14, '7a3a9fd436d36ab6394f2fd68589c89f', 1, 'default.png', 'personel'),
('Tifany Hamdan', 60027951, 'BRIPDA', 'ADMINISTRASI', 'WONOSOBO', '1987-08-13', 'ISLAM', 'JAWA', '2020-01-01', 3, '5efc7ad8cd93c533c49ea8464c21c76d', 1, 'default.png', 'personel'),
('Andhika Pradana', 61936382, 'BRIPDA', 'ADMINISTRASI', 'BENGKULU', '1999-01-21', 'ISLAM', 'BUGIS', '2020-01-01', 4, 'f49ea57bee9c0bc44ad3a87bc4150f49', 1, 'default.png', 'personel'),
('DULMANAN', 62020713, 'IPDA', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1962-02-20', 'ISLAM', 'JAWA', '2020-01-01', 6, 'baf986875c16fa62933e4179c42858ae', 1, 'default.png', 'personel'),
('SUWARTI', 62060159, 'AIPTU', 'BAMIN 12 BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 3 )', 'SEMARANG', '1962-06-01', 'ISLAM', 'JAWA', '2020-01-01', 6, 'a52e975a3bfffe4b9785a7332291eea1', 1, 'default.png', 'personel'),
('BUDI IRIAWAN', 62080270, 'KOMPOL', 'ANALIS KEBIJAKAN PERTAMA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (DALAM RANGKA BEROBAT)', 'SEMARANG', '1962-08-02', 'ISLAM', 'JAWA', '2020-01-01', 6, 'e57a671bf9c1e830a14a74953ba6294d', 1, 'default.png', 'personel'),
('BUDI NUGROHO', 62080644, 'AIPTU', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (DALAM RANGKA BEROBAT)', 'SEMARANG', '1962-08-06', 'ISLAM', 'JAWA', '2020-01-01', 6, '533e648426722789a75a89ad3ece0152', 1, 'default.png', 'personel'),
('SUKRISYANTO', 63050357, 'AIPTU', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1963-05-03', 'ISLAM', 'JAWA', '2020-01-01', 6, '10e62ca77be0e39e0791ec5e2da5eb98', 1, 'default.png', 'personel'),
('MUKIT, S.H.,M.H.', 63050459, 'KOMPOL', 'KASIWAS POLRESTABES SEMARANG POLDA JATENG', '', '0000-00-00', 'ISLAM', '', '2019-01-01', 5, '415c452aee38ddaaded79dfa74b263d3', 1, 'default.png', 'personel'),
('BAMBANG TRI CAHYONO', 63050651, 'AIPTU', 'BHAYANGKARA ADMINISTRASI PELAKSANA LANJUTAN BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (SAKIT)', 'SEMARANG', '1963-05-06', 'ISLAM', 'JAWA', '2020-01-01', 6, 'dd8a74dc1634ad7cae97fd47991ae57a', 1, 'default.png', 'personel'),
('YUDHI PRIANTONO', 63120136, 'KOMPOL', 'KASUBBAGSARPRAS BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1963-12-01', 'ISLAM', 'JAWA', '2020-01-01', 6, 'e9c445006f2a2adf578b8c4dcf49852c', 1, 'default.png', 'personel'),
('TRI HANDARI M.', 63120200, 'KOMPOL', 'KASIUM POLRESTABES SEMARANG POLDA JATENG', '', '0000-00-00', '', '', '2019-01-01', 2, '27cff279bb3be784ed1a8e22cced068a', 1, 'default.png', 'personel'),
('HERU SUGONDO', 64110086, 'AIPTU', 'BHAYANGKARA ADMINISTRASI PELAKSANA LANJUTAN BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1964-11-10', 'ISLAM', 'JAWA', '2020-01-01', 6, 'aa9ff19298fb64fe886b323e437b4404', 1, 'default.png', 'personel'),
('LESTARI MURTIANI', 65080068, 'AIPTU', 'BHAYANGKARA ADMINISTRASI PELAKSANA LANJUTAN BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (SAKIT)', 'SEMARANG', '1965-08-01', 'ISLAM', 'JAWA', '2020-01-01', 6, 'd3e885abffe05a48613d3595efad86d6', 1, 'default.png', 'personel'),
('TURYADI', 65080518, 'AIPTU', 'BHAYANGKARA ADMINISTRASI PELAKSANA LANJUTAN BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (DALAM RANGKA BEROBAT)', 'SEMARANG', '1965-08-05', 'ISLAM', 'JAWA', '2020-01-01', 6, '530c8da5911274f20476e702aa6136ae', 1, 'default.png', 'personel'),
('SUTARNO', 65120210, 'AIPTU', 'BHAYANGKARA ADMINISTRASI PELAKSANA LANJUTAN BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (SAKIT)', 'SEMARANG', '1965-12-02', 'ISLAM', 'JAWA', '2020-01-01', 6, '4bbe76e761d29555e7aa2653cc81a063', 1, 'default.png', 'personel'),
('Chitra Adha', 65465330, 'BRIPDA', 'ADMINISTRASI', 'WELERI', '1998-09-03', 'ISLAM', 'JAWA', '2020-01-01', 9, '0296b2441018dfad6462121a9e7859df', 1, 'default.png', 'personel'),
('INDRO LUKITO, S.K.M.', 66100023, 'IPTU', 'PS. KAUR 3 SUBBAGPERS BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1966-10-01', 'ISLAM', 'JAWA', '2020-01-01', 6, 'dc93bdbc8eba78a8c1afa1ae431422d8', 1, 'default.png', 'personel'),
('Ferani Zahlia', 66177660, 'BRIPKA', 'ADMINISTRASI', 'WELERI', '1998-09-10', 'ISLAM', 'JAWA', '2020-01-01', 9, 'c6346809e090b9aa877444bd965face9', 1, 'default.png', 'personel'),
('Arrum Adhitama', 66544665, 'BRIPDA', 'ADMINISTRASI', 'TEGAL', '1996-04-05', 'ISLAM', 'JAWA', '2020-01-01', 14, '3683b64fa0ad7f3a60902b98855408e2', 1, 'default.png', 'personel'),
('Alvino Dicky Varensia', 66630763, 'BRIPDA', 'ADMINISTRASI', 'WONOSOBO', '1987-09-04', 'ISLAM', 'JAWA', '2020-01-01', 2, '8bdd1dbad5cfd12b2c888c59c76268e4', 1, 'default.png', 'personel'),
('Andi Al-fathan', 66659768, 'BRIPKA', 'ADMINISTRASI', 'DEMAK', '1989-06-14', 'ISLAM', 'JAWA', '2020-01-01', 9, '47c6e35203abc0418852e32cd435b5ff', 1, 'default.png', 'personel'),
('SARDOYO, S.H., M.H.', 67050101, 'AKP', 'KAUR 2 SUBBAGSARPRAS BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1967-05-01', 'ISLAM', 'JAWA', '2020-01-01', 6, '7eeebcfc4bf25367d2d027757fe90e23', 1, 'default.png', 'personel'),
('SITI NOERHAYATI', 67060140, 'AIPTU', 'BHAYANGKARA ADMINISTRASI PELAKSANA LANJUTAN BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (BKO PRIMKOPPOL)', 'SEMARANG', '1967-06-01', 'ISLAM', 'JAWA', '2020-01-01', 6, 'dc7d9a1fbe25628bf51aac64f78ef298', 1, 'default.png', 'personel'),
('Taufik Mutiara', 67146045, 'BRIPKA', 'ADMINISTRASI', 'KENDAL', '1990-06-22', 'ISLAM', 'JAWA', '2020-01-01', 16, '7d2c2be18c09e25ad4392eced8df0754', 1, 'default.png', 'personel'),
('Jamilah Alim', 67477925, 'BRIPKA', 'ADMINISTRASI', 'KENDAL', '1998-12-06', 'ISLAM', 'JAWA', '2020-01-01', 2, '7f23b8bf894e76dd63fdc147e36c02e9', 1, 'default.png', 'personel'),
(' Yenny Rahayu', 67624177, 'BRIPKA', 'ADMINISTRASI', 'KENDAL', '1997-05-20', 'ISLAM', 'JAWA', '2020-01-01', 7, '773a1afcc2c2a36136122b483ac1b0ab', 1, 'default.png', 'personel'),
('Pandu Widyatmo', 68012678, 'BRIPKA', 'ADMINISTRASI', 'PEMALANG', '1992-02-16', 'ISLAM', 'JAWA', '2020-01-01', 7, '7b4182462e61a5ab227a135da54bde76', 1, 'default.png', 'personel'),
('SRI PADMINATUN, S.H., M.H.', 68120292, 'AKP', 'KAUR 2 SUBBAGKUM BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1968-12-02', 'ISLAM', 'JAWA', '2020-01-01', 6, '316a0085a7d286a4f7bafcd1a77635dc', 1, 'default.png', 'personel'),
('SARMINA, S.H.', 68120402, 'AKP', 'BHAYANGKARA ADMINISTRASI PENYELIA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (DALAM RANGKA MENJALANI PUTUSAN KKEP)', 'SEMARANG', '1968-12-04', 'ISLAM', 'JAWA', '2020-01-01', 6, '25db62f604421a87d7e4922979e958ec', 1, 'default.png', 'personel'),
('SULASNO, S.Pd', 69050538, 'AKBP', 'KABAG SUMDA POLRESTABES SEMARANG POLDA JATENG', 'DEMAK', '1969-05-08', 'ISLAM', 'JAWA', '2018-10-31', 6, '1a50ef14d0d75cd795860935ee0918af', 1, 'default.png', 'kabag'),
('UMBAR WIJAYA, S.H.', 69120036, 'AKP', 'KASIPROPAM POLRESTABES SEMARANG POLDA JATENG', '', '0000-00-00', 'ISLAM', '', '2019-01-01', 4, 'a9e5319fdd05b898fdac4d34fc34c4f3', 1, 'default.png', 'personel'),
('BENNY HARTAWAN, S.H., M.H.', 70090017, 'KOMPOL', 'KASUBBAGKUM BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1970-09-01', 'ISLAM', 'JAWA', '2020-01-01', 6, 'e7b4a161c57637aa6173966bdf147d90', 1, 'default.png', 'personel'),
('Avicenna Ardhi', 70182258, 'BRIPKA', 'ADMINISTRASI', 'LOMBOK', '1997-03-26', 'ISLAM', 'SASAK', '2020-01-01', 5, '43888d8b4baec6b73ebc50280b852c03', 1, 'default.png', 'personel'),
('NUR KHOLIS', 71030217, 'BRIPKA', 'BHAYANGKARA OPERASIONAL PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (SUBBAG SARPRAS)', 'SEMARANG', '1971-03-02', 'ISLAM', 'JAWA', '2020-01-01', 6, 'ef64d1ae306f16ba29ddd6f24a4120b2', 1, 'default.png', 'personel'),
('Dhanu Syaibatul Azzad', 71045650, 'BRIPKA', 'ADMINISTRASI', 'WELERI', '1991-01-08', 'ISLAM', 'JAWA', '2020-01-01', 15, '98cff08279f86f95364197d1096b133e', 1, 'default.png', 'personel'),
('AGUS WITO', 72080373, 'AIPTU', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1972-08-03', 'ISLAM', 'JAWA', '2020-01-01', 6, 'd41d8cd98f00b204e9800998ecf8427e', 1, 'default.png', 'personel'),
('AGUS YATMONO', 72080685, 'AIPTU', 'BHAYANGKARA ADMINISTRASI PELAKSANA LANJUTAN BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 2 SUBBAGPERS)', 'SEMARANG', '1972-08-06', 'ISLAM', 'JAWA', '2020-01-01', 6, '1edd17f4ea64e38853e0e514f4b89a88', 1, 'default.png', 'personel'),
('PRASETYO DWI YATMOKO', 72100286, 'AIPTU', 'BHAYANGKARA ADMINISTRASI PELAKSANA LANJUTAN BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (DALAM RANGKA BEROBAT)', 'SEMARANG', '1972-10-02', 'ISLAM', 'JAWA', '2020-01-01', 6, 'c170285b14ae8cf57ed2d2d0ac74ac6d', 1, 'default.png', 'personel'),
('Mustafid Bintang Qurniawan', 72306893, 'BRIPKA', 'ADMINISTRASI', 'PURWOKERTO', '1997-03-07', 'ISLAM', 'JAWA', '2020-01-01', 10, 'fc5d227233d38789e0d5e4244d3e0417', 1, 'default.png', 'personel'),
('ROSYID SETYAWAN', 73040463, 'AIPDA', 'BHAYANGKARA ADMINISTRASI PELAKSANA LANJUTAN BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1973-04-04', 'ISLAM', 'JAWA', '2020-01-01', 6, 'e176160f757a5fad33199a059f88cef3', 1, 'default.png', 'personel'),
('NAYIR', 73070029, 'AIPTU', 'PS. PAUR 1 SUBBAGPERS BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1973-07-10', 'ISLAM', 'JAWA', '2020-01-01', 6, '191c7b76f2f9399b2ce0bd773262c0cd', 1, 'default.png', 'personel'),
('ENRIKO S. SILALAHI, S.I.K', 73120643, 'AKBP', 'WAKAPOLRESTABES SEMARANG POLDA JATENG', '', '0000-00-00', '', 'BATAK', '0000-00-00', 1, '22e3f26282e7fc6b98c6d0de71c0fbf7', 1, 'default.png', 'personel'),
('Dicky Zahlia', 73293063, 'BRIPDA', 'ADMINISTRASI', 'WONOSOBO', '1998-06-09', 'ISLAM', 'JAWA', '2020-01-01', 18, '88702a0e81b62b235e12864ad2af6fea', 1, 'default.png', 'personel'),
('Azhar Fadholi', 74103477, 'BRIPKA', 'ADMINISTRASI', 'PEKALONGAN', '1991-02-03', 'ISLAM', 'JAWA', '2020-01-01', 5, 'd3173da6b4b6827efd39ea231506e28c', 1, 'default.png', 'personel'),
('DODI SERSIYANTO', 75030317, 'AIPTU', 'BHAYANGKARA OPERASIONAL PELAKSANA LANJUTAN BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1975-03-03', 'ISLAM', 'JAWA', '2020-01-01', 6, 'f6ead59856bc9a8cb2538056a2da2bb6', 1, 'default.png', 'personel'),
('RIJU NOVA IRAWAN', 75110582, 'AIPTU', 'PS. PAUR SUBBAGSARPRAS BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1975-11-05', 'ISLAM', 'JAWA', '2020-01-01', 6, '3237b0aacc7ef0d2852c33700517054c', 1, 'default.png', 'personel'),
('ANI ARYANINGSIH', 76090647, 'AIPTU', 'BAMIN 5 BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (SUBBAG HUKUM)', 'SEMARANG', '1976-09-06', 'ISLAM', 'JAWA', '2020-01-01', 6, '4ced3701f85bb0501bbfb91743b367ec', 1, 'default.png', 'personel'),
('Syahrul Fundrika', 77263104, 'BRIPKA', 'ADMINISTRASI', 'WELERI', '1993-12-19', 'ISLAM', 'JAWA', '2020-01-01', 18, '69825b230ebbf463e85fb4badba0baee', 1, 'default.png', 'personel'),
('ANJAR HARYONO KUSUMO', 77311213, 'BRIGADIR', 'PENGDA II', 'SEMARANG', '1977-12-18', 'ISLAM', 'JAWA', '2020-01-01', 21, 'bfc954f7b2bc7c2caa8ac9c3236eaf8a', 7, 'default.png', 'personel'),
('Andika Husein', 77590106, 'BRIPKA', 'ADMINISTRASI', 'KENDAL', '1997-08-20', 'ISLAM', 'JAWA', '2020-01-01', 15, '03ffaab0f32f3d0689780c087afb7551', 1, 'default.png', 'personel'),
('Nelly Abelardo', 77715984, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1999-03-19', 'ISLAM', 'JAWA', '2020-01-01', 13, '2c727f194f2bc9881d21e15f3cacca27', 1, 'default.png', 'personel'),
('SUWARGI', 78020103, 'AIPDA', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (SUBBAG SARPRAS)', 'SEMARANG', '1978-02-01', 'ISLAM', 'JAWA', '2020-01-01', 6, '18a219d90d5fe94ca69d44cd600122c1', 1, 'default.png', 'personel'),
('NUR ROHIM, S.H.', 78020426, 'BRIPKA', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 1 SUBBAGPERS)', 'SEMARANG', '1978-02-04', 'ISLAM', 'JAWA', '2020-01-01', 6, '31480685859f2e2af996c91865ee6de8', 1, 'default.png', 'personel'),
('Puspa Ariefandi', 78614575, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1992-02-27', 'ISLAM', 'JAWA', '2020-01-01', 16, '4c9c88fb22db18592a29f13d2a80ec24', 1, 'default.png', 'personel'),
('Hudzaifah Hamdi', 79564450, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1990-04-08', 'ISLAM', 'JAWA', '2020-01-01', 14, 'b62d87989ce59dd272e22b99b6610483', 1, 'default.png', 'personel'),
('SIGIT TRI HARYANTO', 80100989, 'BRIPKA', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 3 SUBBAGPERS)', 'SEMARANG', '1980-10-09', 'ISLAM', 'JAWA', '2020-01-01', 6, '0636e995f2b17b63c86add0c88612c51', 1, 'default.png', 'personel'),
('Sigit Larascaesara', 80109480, 'BRIPKA', 'ADMINISTRASI', 'JEPARA', '1988-08-21', 'ISLAM', 'JAWA', '2020-01-01', 14, '48838959e1fac76bbe0e8ff5edfd14b7', 1, 'default.png', 'personel'),
('Hizkia Ridanty', 80191679, 'BRIPKA', 'ADMINISTRASI', 'WELERI', '1990-08-17', 'ISLAM', 'JAWA', '2020-01-01', 16, 'f4eb5db88db93822c5eb4a0666ecd5ef', 1, 'default.png', 'personel'),
('Givan Isham', 80248959, 'BRIPDA', 'ADMINISTRASI', 'WONOSOBO', '1992-09-29', 'ISLAM', 'JAWA', '2020-01-01', 3, 'c4b0a7791f5b1e096ff79531cbcc7159', 1, 'default.png', 'personel'),
('GUNTUR GAMAYANTO', 81050431, 'AIPDA', 'BHAYANGKARA ADMINISTRASI PELAKSANA LANJUTAN BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (DALAM RANGKA BEROBAT)', 'SEMARANG', '1981-05-04', 'ISLAM', 'JAWA', '2020-01-01', 6, 'a00ff7b64bf7103921dee1c137d02b3b', 1, 'default.png', 'personel'),
('LIA NATHALIA SABINA ROMPAS', 81060622, 'AIPDA', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 3 SUBBAGPERS)', 'SEMARANG', '1981-06-06', 'ISLAM', 'JAWA', '2020-01-01', 6, 'ed7190721f18efbf6433b3af8a17534f', 1, 'default.png', 'personel'),
('YOSEPH RENDYA C.', 81080333, 'BRIPKA', 'BHAYANGKARA OPERASIONAL PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG ( (DALAM RANGKA BEROBAT))', 'SEMARANG', '1981-08-03', 'ISLAM', 'JAWA', '2020-01-01', 6, '18914aee9f78223e8d82e145981ea977', 1, 'default.png', 'personel'),
('TRI DANU SATRIO', 81090417, 'BRIPKA', 'BAMIN 1 BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 1 SUBBAGPERS)', 'SEMARANG', '1981-09-04', 'ISLAM', 'JAWA', '2020-01-01', 6, '0a336fc3cf4d3d80a0456632ab53ad56', 1, 'default.png', 'personel'),
('SISTIAWAN', 81100180, 'BRIGADIR', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (BARU)', 'SEMARANG', '1981-10-01', 'ISLAM', 'JAWA', '2020-01-01', 6, '749992ad0010254d72ddbfc1fabcd370', 1, 'default.png', 'personel'),
('MASRO\'I DWI EFENDI, S.H.', 81100431, 'AIPDA', 'BAMIN 10 BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 2 SUBBAGPERS)', 'SEMARANG', '1981-10-04', 'ISLAM', 'JAWA', '2020-01-01', 6, '61dda1c075963433f8b860d4e758010b', 1, 'default.png', 'personel'),
('ARIF HADI SUPATMO, Skm, M.H.', 81121121, 'AIPDA', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 3 SUBBAGPERS)', 'SEMARANG', '1981-12-11', 'ISLAM', 'JAWA', '2020-01-01', 6, '804995ed3773c4da66b0495314ceae62', 1, 'default.png', 'personel'),
('Fadillah Ulfa', 81333079, 'AKP', 'ADMINISTRASI', 'WELERI', '1998-08-30', 'ISLAM', 'JAWA', '2020-01-01', 10, 'bc1da9f7bc93bc61564eef62a60413d4', 1, 'default.png', 'personel'),
('Eka Dimas Mustika', 81675914, 'BRIPDA', 'ADMINISTRASI', 'SEMARANG', '1991-07-24', 'ISLAM', 'JAWA', '2020-01-01', 14, '6a852db6ef087e524ce7c38688a7a033', 1, 'default.png', 'personel'),
('ACHMAD DARMAWAN, A.Md.', 82051561, 'BRIPKA', 'BHAYANGKARA OPERASIONAL PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 3 SUBBAGPERS)', 'SEMARANG', '1982-05-15', 'ISLAM', 'JAWA', '2020-01-01', 6, '2b9825cdf01b7c87e5c8a76f7bbb0a61', 1, 'default.png', 'personel'),
('MUJIONO, S.H.', 82081420, 'BRIPKA', 'BHAYANGKARA OPERASIONAL PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (SUBBAG HUKUM)', 'SEMARANG', '1982-08-14', 'ISLAM', 'JAWA', '2020-01-01', 6, '341d16476ed4d3441a3b91d9b7567fcb', 1, 'default.png', 'personel'),
('Reynard Ariefandi', 82335942, 'AKP', 'ADMINISTRASI', 'TEGAL', '1988-03-04', 'ISLAM', 'JAWA', '2020-01-01', 11, '06a3d9727b14af1fcd2ccf9b79641ea3', 1, 'default.png', 'personel'),
('Dee Maulana', 82808122, 'BRIPKA', 'ADMINISTRASI', 'KENDAL', '1997-08-18', 'ISLAM', 'JAWA', '2020-01-01', 13, '964e951253817b1a4fc8f5c7c7287370', 1, 'default.png', 'personel'),
('GINANJAR PRIHATNO RINALDI, S.H.', 83040260, 'AIPDA', 'BHAYANGKARA OPERASIONAL PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (SUBBAG HUKUM)', 'SEMARANG', '1983-04-02', 'ISLAM', 'JAWA', '2020-01-01', 6, '2d42bafa78ccac16e127eb43e2b9bcf0', 1, 'default.png', 'personel'),
('AGUNG APRIYADI', 83040913, 'BRIPKA', 'BHAYANGKARA OPERASIONAL PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (SUBBAG SARPRAS)', 'SEMARANG', '1983-04-09', 'ISLAM', 'JAWA', '2020-01-01', 6, 'edf6e15e7a279453ec1b0ac2147ce3d4', 1, 'default.png', 'personel'),
('HANJAR AJI NALENDRA, S.Kom.', 83091353, 'BRIPKA', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA POLRESTABES SEMARANG POLDA JATENG (SUBBAG SARPRAS)', 'SEMARANG', '1983-09-15', 'ISLAM', 'JAWA', '2020-01-01', 6, '4647ee8edbd63d7b97e0e5a3622cd59d', 1, 'default.png', 'personel'),
('GUNTUR TEGUH DWI LUKITO SAKTI, A.Md', 84021462, 'BRIPKA', 'BHAYANGKARA OPERASIONAL PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 3 SUBBAGPERS)', 'SEMARANG', '1984-02-14', 'ISLAM', 'JAWA', '2020-01-01', 6, 'a1d0d869f2a3f22518f1ec38c3035d3a', 1, 'default.png', 'personel'),
('JONED SUGENG KURNIAWAN, S.H.', 84091214, 'BRIPKA', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1984-09-12', 'ISLAM', 'JAWA', '2020-01-01', 6, '022bc65efba633639c5c0021612bd9ce', 1, 'default.png', 'personel'),
('Amanda Aprilicia', 84700337, 'BRIPKA', 'ADMINISTRASI', 'TEGAL', '1989-06-10', 'ISLAM', 'JAWA', '2020-01-01', 18, 'b94df9ef93ac6fd46185f6ad1741c453', 1, 'default.png', 'personel'),
('Adinda Kurniansyah', 84876648, 'AKP', 'ADMINISTRASI', 'TEGAL', '1989-03-03', 'ISLAM', 'JAWA', '2020-01-01', 14, '4d8887237f28ce1a28b3153f2cfd7f14', 1, 'default.png', 'personel'),
('YANUAR AGUNG PRASETYO', 85011034, 'BRIPKA', 'BAMIN 2 BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 1 SUBBAGPERS)', 'SEMARANG', '1985-01-10', 'ISLAM', 'JAWA', '2020-01-01', 6, 'd3eb2141dc1f98af5151dad82b31d6cf', 1, 'default.png', 'personel'),
('SUSILO, S.H.', 85070988, 'BRIPKA', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (PENUGASAN SBG PAMWAL WAKIL GUBERNUR JATENG)', 'SEMARANG', '1985-07-09', 'ISLAM', 'JAWA', '2020-01-01', 6, '40e8c3e88c79cdacfc05fb848cfdc653', 1, 'default.png', 'personel'),
('AGUS ADHA PRASETYA, S.H.', 85100640, 'BRIGADIR', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1985-10-06', 'ISLAM', 'JAWA', '2020-01-01', 6, '1bec948ec3f13c16d2a4b79c353343d0', 1, 'default.png', 'personel'),
('DWI WAHYU PRAJOKO', 85100641, 'BRIGADIR', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA POLRESTABES SEMARANG POLDA JATENG (DALAM RANGKA BEROBAT)', 'SEMARANG', '1985-10-06', 'ISLAM', 'JAWA', '2020-01-01', 6, '8631c8964736ad2a7deb6347d44bde00', 1, 'default.png', 'personel'),
('LEONARDUS ANDRE KRISTIADI, S.H.', 85120527, 'BRIPKA', 'BHAYANGKARA OPERASIONAL PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (SUBBAG HUKUM)', 'SEMARANG', '1985-12-05', 'ISLAM', 'JAWA', '2020-01-01', 6, 'ab95b3a8fd86c6d5c424740893ff4403', 1, 'default.png', 'personel'),
('Fikri Kusumawardhani', 85513968, 'BRIPKA', 'ADMINISTRASI', 'WELERI', '1990-03-09', 'ISLAM', 'JAWA', '2020-01-01', 18, '2a6067874cd7cf67c93dd83b65c4b525', 1, 'default.png', 'personel'),
('SUSANTO, S.H.', 86060292, 'BRIPKA', 'BAMIN 7 BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1986-06-02', 'ISLAM', 'JAWA', '2020-01-01', 6, 'ef349f31e43c00a11e1063584fd941ba', 1, 'default.png', 'personel'),
('SAPTIANING DYAH AYU AJENG INTANI, S.Psi, M.Si.', 86060314, 'IPDA', 'BHAYANGKARA ADMINISTRASI PENYELIA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (DALAM RANGKA PENUGASAN PBB)', 'SEMARANG', '1986-06-03', 'ISLAM', 'JAWA', '2020-01-01', 6, '1de8c8daf65228f337a5fe7d43d8abf6', 1, 'default.png', 'personel'),
('YUDHI SIDIQ KURNIAWAN, S.E.', 87100150, 'BRIPKA', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 2 SUBBAGPERS)', 'SEMARANG', '1987-10-01', 'ISLAM', 'JAWA', '2020-01-01', 6, 'a75f412c2472c27e764dd7e5c2a25062', 1, 'default.png', 'personel'),
('SUPRIYANTI, S.H.', 87100438, 'BRIGADIR', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1987-10-04', 'ISLAM', 'JAWA', '2020-01-01', 6, '16104dbf049bf63da68b40854c562ab5', 1, 'default.png', 'personel'),
('ARDI ARYA SAMUDRA', 87121310, 'BRIPTU', 'ADMINISTRASI ', 'TEGAL', '1987-06-19', 'KRISTEN', 'JAWA', '2020-01-01', 20, '6377c055a7036aab07a1958bd832f0dd', 7, 'default.png', 'personel'),
('ARINI SUKMA WIJAYANTI', 87263821, 'KOMPOL', 'KASAT RESKRIM', 'DEMAK', '1993-02-18', 'KATOLIK', 'JAWA', '2020-01-01', 24, '880c02a725c95fc26369670d8ca0f8ef', 7, 'default.png', 'personel'),
('Dwira Gibran', 87673804, 'BRIPKA', 'ADMINISTRASI', 'SEMARANG', '1989-02-12', 'ISLAM', 'JAWA', '2020-01-01', 12, 'd303249a1f2e9c942a8a2c2074c8bab4', 1, 'default.png', 'personel'),
('Reza I Prayogi', 87990444, 'BRIPDA', 'ADMINISTRASI', 'PEKALONGAN', '1989-08-15', 'ISLAM', 'JAWA', '2020-01-01', 12, '64a7fc055a10e73547d3baa9f6f78e00', 1, 'default.png', 'personel'),
('FEBRINA LUSIANI, S.Psi.', 88020260, 'BRIGADIR', 'BHAYANGKARA OPERASIONAL PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 1 SUBBAGPERS)', 'SEMARANG', '1988-02-02', 'ISLAM', 'JAWA', '2020-01-01', 6, 'bc8c7953fd5326b8c82081459d922b01', 1, 'default.png', 'personel'),
('Ratih Mawarni', 88985517, 'BRIPKA', 'ADMINISTRASI', 'KENDAL', '1991-04-18', 'ISLAM', 'JAWA', '2020-01-01', 7, 'f977f883321be379bbda69adaf368b5b', 1, 'default.png', 'personel'),
('FAHMI FACHRURROZI', 90050113, 'BRIGADIR', 'BAMIN 8 BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 1 SUBBAGPERS)', 'SEMARANG', '1990-05-01', 'ISLAM', 'JAWA', '2020-01-01', 6, 'e7a124438f007958f62eb018963317a0', 1, 'default.png', 'personel'),
('RICO ADI NUGROHO, S.H., M.M.', 90050116, 'BRIGADIR', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1990-05-01', 'ISLAM', 'JAWA', '2020-01-01', 6, '638bbf5bbb013c6bce775739d82046ba', 1, 'default.png', 'personel'),
('Mia Latifani', 90067043, 'AKP', 'ADMINISTRASI', 'SEMARANG', '1996-06-14', 'ISLAM', 'JAWA', '2020-01-01', 16, 'dde5a233f6ca052ae7682dfc5463d7fb', 1, 'default.png', 'personel'),
('Alika Utomo', 90968151, 'BRIPDA', 'ADMINISTRASI', 'SEMARANG', '1990-09-23', 'ISLAM', 'JAWA', '2020-01-01', 15, 'ee5ee7d34dc0cf465078985ae093f39f', 1, 'default.png', 'personel'),
('RAHAYU WIDYANINGSIH', 92080845, 'BRIPTU', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (SUBBAG HUKUM)', 'SEMARANG', '1992-08-08', 'ISLAM', 'JAWA', '2020-01-01', 6, 'cc18bb0a5491fa318e1f857b9e726297', 1, 'default.png', 'personel'),
('Syahid Fachrully', 93026504, 'BRIPKA', 'ADMINISTRASI', 'TEGAL', '1993-06-22', 'ISLAM', 'JAWA', '2020-01-01', 16, '61c695217de7432ced3988ac06b88a0c', 1, 'default.png', 'personel'),
('RONALD AGRA PRATAMA', 93030556, 'BRIPTU', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (DALAM RANGKA BEROBAT)', 'SEMARANG', '1993-03-05', 'ISLAM', 'JAWA', '2020-01-01', 6, '208a3d96427daeb5de84c0fb45faa4c6', 1, 'default.png', 'personel'),
('LILIS NITA MARSIANA, A.Md.KEB.', 93030928, 'BRIPTU', 'BAMIN 4 BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 3 SUBBAG PERS)', 'SEMARANG', '1993-03-09', 'ISLAM', 'JAWA', '2020-01-01', 6, 'f0abab10510cc36f3cef40203c3060ce', 1, 'default.png', 'personel'),
('Praditia Aziz', 93946041, 'BRIPDA', 'ADMINISTRASI', 'PEKALONGAN', '1995-06-11', 'ISLAM', 'JAWA', '2020-01-01', 4, '8890e094f9b8b135e02643662eff55d7', 1, 'default.png', 'personel'),
('Syahdian Fudhail', 94021923, 'BRIPDA', 'ADMINISTRASI', 'SEMARANG', '1996-11-04', 'ISLAM', 'JAWA', '2020-01-01', 4, '7a29289441afa5e656287cd9fbc9fb36', 1, 'default.png', 'personel'),
('ANITA\' AZMI ULINNUHA', 94061146, 'BRIPTU', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1994-06-11', 'ISLAM', 'JAWA', '2020-01-01', 6, '257c302f01f87904d682335496ab2b24', 1, 'default.png', 'personel'),
('IHDA RIZQIANI', 94100643, 'BRIPTU', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (URMIN)', 'SEMARANG', '1994-10-06', 'ISLAM', 'JAWA', '2020-01-01', 6, 'c3e06d629f4221b948bd2aa2d5e2816a', 1, 'default.png', 'personel'),
('Mustofa Wicaksono', 94741656, 'BRIPKA', 'ADMINISTRASI', 'WONOGIRI', '1990-05-04', 'ISLAM', 'JAWA', '2020-01-01', 2, '844b91ff7c0b9bf49c0ac2d712a3795e', 1, 'default.png', 'personel'),
('ERNAWATI', 95030713, 'BRIPTU', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1995-03-07', 'ISLAM', 'JAWA', '2020-01-01', 6, 'a121361f7a2df3b5848f0dc86bfad428', 1, 'default.png', 'personel'),
('Olga Herdani', 95633532, 'BRIPDA', 'ADMINISTRASI', 'WONOGIRI', '1997-03-10', 'ISLAM', 'JAWA', '2020-01-01', 10, 'a9f36fda267eefccb99d4c88693c02a7', 1, 'default.png', 'personel'),
('ANNISA PRAMUDITA DANASTRI, S.S.', 96040299, 'BRIPTU', 'BAMIN 9 BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1996-04-02', 'ISLAM', 'JAWA', '2020-01-01', 6, 'd4d7296671ee383089a5bc30f38bfbfb', 1, 'default.png', 'personel'),
('ANISA RAHMAWATI', 96050946, 'BRIPDA', 'BAMIN 6 BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1996-05-09', 'ISLAM', 'JAWA', '2020-01-01', 6, '22c2f84814e485dcb079704622d9d378', 1, 'default.png', 'personel'),
('NIA RESTYANINGTIAS', 96070092, 'BRIPTU', 'BAMIN 3 BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1996-07-01', 'ISLAM', 'JAWA', '2020-01-01', 6, '41f2ce07a94277ce88c00df28be91f0c', 1, 'default.png', 'personel'),
('Syena Manar', 96891912, 'BRIPKA', 'ADMINISTRASI', 'WELERI', '1989-10-16', 'ISLAM', 'JAWA', '2020-01-01', 8, 'bd34e1d38cfbcf6e2d015d444460fc50', 1, 'default.png', 'personel'),
('Sutrisno Julianto', 97062103, 'BRIPKA', 'ADMINISTRASI', 'BREBES', '1992-01-01', 'ISLAM', 'JAWA', '2020-01-01', 12, 'b60a60aa8fb21ab34ee9b702ea521a50', 1, 'default.png', 'personel'),
('Tasya Islam', 98241794, 'BRIPDA', 'ADMINISTRASI', 'LOMBOK', '1990-11-08', 'ISLAM', 'JAWA', '2020-01-01', 13, '13aa5142cb2bca638bfcd4a9b3d1f0d6', 1, 'default.png', 'personel'),
('SISCA AYU FEBRIANTI', 99022525, 'PENATA ', 'KAURMIN', 'PEKALONGAN', '1999-02-25', 'ISLAM', 'JAWA', '2020-01-01', 6, '46f8dbbe100038a4f63ab295b8f85cc5', 1, '8370e7235aa55f7815f41907baa7c6f7.jpg', 'kaurmin'),
('SISCA AYU FEBRIANTI', 213141412, 'BRIPTU', 'KAURMIN', 'PEKALONGAN', '2000-02-07', 'ISLAM', 'JAWA', '2020-07-01', 6, '6542e778ed7a7d100de5089b1d91e1d9', 1, 'default.png', 'personel'),
('ANTON SUMARNA', 1431212121, 'KOMPOL', 'ADMINISTRASI', 'PEKALONGAN', '1999-02-19', 'ISLAM', 'JAWA', '2020-02-01', 22, '0b5bebdc7b1ba6b6e131e81355eb5967', 7, 'default.png', 'personel'),
('ANDARA', 2133121212, 'KOMPOL', 'ADMINISTRASI', 'SEMARANG', '1999-02-10', 'KRISTEN', 'BUGIS', '2020-02-01', 23, '14a30007ce35fcc3fddc485ad4e03466', 7, 'default.png', 'personel'),
('WAHYONO', 196206092006041003, 'PENGATUR I', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (BKO PRIMKOPPOL)', 'SEMARANG', '1962-06-09', 'ISLAM', 'JAWA', '2020-01-01', 6, 'b40a1ca295cfbf466059388cbd342c27', 1, 'default.png', 'personel'),
('JOKO SUSANTYO', 196211282006041001, 'PENGATUR I', 'BANUM 4 BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 2 SUBBAGPERS)', 'SEMARANG', '1962-11-28', 'ISLAM', 'JAWA', '2020-01-01', 6, '3fb08ba997f19bbbd72a123602c3e0d1', 1, 'default.png', 'personel'),
('ISNO SUGIYANTO', 196212101998031004, 'PENGATUR I', 'BHAYANGKARA ADMINISTRASI PELAKSANA LANJUTAN BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (PRIMKOPPOL)', 'SEMARANG', '1962-12-10', 'ISLAM', 'JAWA', '2020-01-01', 6, 'f64762afb99536f5fc90e2e3c7ba6a7a', 1, 'default.png', 'personel'),
('SUPARNO', 196304101990031005, 'PENGATUR', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 1 SUBBAGPERS)', 'SEMARANG', '1963-04-10', 'ISLAM', 'JAWA', '2020-01-01', 6, '83596ebb63401a5aa826fcf8c194fded', 1, 'default.png', 'personel'),
('IMAM SANTOSA', 196305061989031006, 'PENATA I', 'KAUR 1 SUBBAGSARPRAS BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1963-05-06', 'ISLAM', 'JAWA', '2020-01-01', 6, 'c8ce0acdf54c4e57eb4e185f5c0bf452', 1, 'default.png', 'personel'),
('SATINEM', 196307051991032004, 'PENATA', 'PAUR SUBBAGKUM BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1963-07-05', 'ISLAM', 'JAWA', '2020-01-01', 6, 'cf2b8902aa74ae3f2c7bcd5277ebe303', 1, 'default.png', 'personel'),
('SRI PUJIATI, S.H.', 196311101990032004, 'PENATA I', 'KAURMIN BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1963-11-10', 'ISLAM', 'JAWA', '2020-01-01', 6, 'e23914f4b836fafdb61bec0a32c04a03', 1, 'default.png', 'kaurmin'),
('SRI SUHARYANTI, S.Pd.', 196506212014122002, 'PENGDA I', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 1 SUBBAGPERS)', 'SEMARANG', '1965-06-21', 'ISLAM', 'JAWA', '2020-01-01', 6, 'bb9615216415a2d938ec34a63650aee6', 1, 'default.png', 'personel'),
('SITI ASMAROH', 196510021988032001, 'PENATA', 'PAMIN BAGSUMDA POLRESTABES SEMARANG POLDA JATENG', 'SEMARANG', '1965-10-02', 'ISLAM', 'JAWA', '2020-01-01', 6, 'bedb0074207c3953a83805d44470893a', 1, 'default.png', 'personel'),
('ADI PRASETYO', 196610262014121001, 'PENGDA I', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 1 SUBBAGPERS)', 'SEMARANG', '1966-10-26', 'ISLAM', 'JAWA', '2020-01-01', 6, '450cca57fc3bf0ffa3399e08b00c49e5', 1, 'default.png', 'personel'),
('MOCH TONI ARIFUDIN, A.Md.', 196611041989031003, 'PENATA', 'BHAYANGKARA ADMINISTRASI PENYELIA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (DALAM RANGKA BEROBAT)', 'SEMARANG', '1966-11-04', 'ISLAM', 'JAWA', '2020-01-01', 6, '95ced099b4f742dae66d819c50f1b965', 1, 'default.png', 'personel'),
('YUSTINA SUDARMI', 196611072007012002, 'PENGATUR', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (BKO PRIMKOPPOL)', 'SEMARANG', '1966-11-07', 'ISLAM', 'JAWA', '2020-01-01', 6, '877e3d050dea229308397eeee4144675', 1, 'default.png', 'personel'),
('ANIKE ANDRIANI, S.Pd.', 196809092014122002, 'PENGDA I', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (URMIN)', 'SEMARANG', '1968-09-09', 'ISLAM', 'JAWA', '2020-01-01', 6, '5a3351774abbf443889ec5167c58a693', 1, 'default.png', 'personel'),
('SUGIRIN', 197204232014121004, 'JURMUD I', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 1 SUBBAGPERS)', 'SEMARANG', '1972-04-23', 'ISLAM', 'JAWA', '2020-01-01', 6, '1774bec655d242c9878b31cad6589039', 1, 'default.png', 'personel'),
('ENDANG LISTYAWATI', 197405222009102001, 'PENGATUR', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (BKO PRIMKOPPOL)', 'SEMARANG', '1974-05-22', 'ISLAM', 'JAWA', '2020-01-01', 6, '20982971ee06dd0548eaf94557788b53', 1, 'default.png', 'personel'),
('NANIEK SETYANINGRUM', 197407052007012004, 'PENGATUR', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 1 SUBBAGPERS)', 'SEMARANG', '1974-07-05', 'ISLAM', 'JAWA', '2020-01-01', 6, '7419f1b7b8ebbe546d0ceb3a070fef0c', 1, 'default.png', 'personel'),
('HARTINI', 197407292007102001, 'PENGATUR', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 3 SUBBAGPERS)', 'SEMARANG', '1974-07-29', 'ISLAM', 'JAWA', '2020-01-01', 6, 'dd80516eb0fbba197b292ca224b6f566', 1, 'default.png', 'personel'),
('SUPRIYATI', 197412072007102001, 'PENGATUR', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 3 SUBBAGPERS)', 'SEMARANG', '1974-12-07', 'ISLAM', 'JAWA', '2020-01-01', 6, 'd1c260a96101ac59ea5af127ff55a7a5', 1, 'default.png', 'personel'),
('MURTI DHAMAYANTI', 197512032014122001, 'PENGDA I', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (BKO PRIMKOPPOL)', 'SEMARANG', '1975-12-03', 'ISLAM', 'JAWA', '2020-01-01', 6, 'fdf2311e445204efdb454c45eb8e39b8', 1, 'default.png', 'personel'),
('HARITOPO', 197610152008101001, 'PENGDA', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 1 SUBBAGPERS)', 'SEMARANG', '1976-10-15', 'ISLAM', 'JAWA', '2020-01-01', 6, '38433c0dfe95b986cdec1429eb57dd12', 1, 'default.png', 'personel'),
('PURWATI, A.Md.', 197707042007012025, 'PENGATUR', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 3 SUBBAGPERS)', 'SEMARANG', '1977-07-04', 'ISLAM', 'JAWA', '2020-01-01', 6, '771ec5b4b56dcea85ab2920d8a634b1b', 1, 'default.png', 'personel'),
('RIASARI, A.Md.', 197707232014122005, 'PENGATUR I', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 1 SUBBAGPERS)', 'SEMARANG', '1977-07-23', 'ISLAM', 'JAWA', '2020-01-01', 6, 'efd004c4258fda4824d707b9ee0abe2b', 1, 'default.png', 'personel'),
('WARTINI, A.P.', 197806142005012006, 'PENGATUR I', 'BHAYANGKARA ADMINISTRASI PELAKSANA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 3 SUBBAGPERS)', 'SEMARANG', '1978-06-14', 'ISLAM', 'JAWA', '2020-01-01', 6, 'fa62533fb32ea4161fb7d633d77724ec', 1, 'default.png', 'personel'),
('SUTARI', 197806282008101001, 'JURU', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (SUBBAG SARPRAS)', 'SEMARANG', '1978-06-28', 'ISLAM', 'JAWA', '2020-01-01', 6, 'a3860d5720e201557897101030a744f0', 1, 'default.png', 'personel'),
('ARSHINTA KRISNA KEMALA, A.Md.', 198012062006042008, 'PENGATUR I', 'BANUM 1 BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (URMIN)', 'SEMARANG', '1980-12-06', 'ISLAM', 'JAWA', '2020-01-01', 6, '5beb3d99823270f5543d4849f1fbe4ff', 1, 'default.png', 'personel'),
('ARDITA SETIAWAN', 198111302009101002, 'PENGATUR', 'BANUM 2 BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 1 SUBBAGPERS)', 'SEMARANG', '1981-11-30', 'ISLAM', 'JAWA', '2020-01-01', 6, 'da0479dea24e75af05c8b6da24c9557b', 1, 'default.png', 'personel'),
('FAJARINA BUDIARTI', 198212242014122001, 'PENGDA I', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (BKO PRIMKPPOL)', 'SEMARANG', '1982-12-22', 'ISLAM', 'JAWA', '2020-01-01', 6, 'dbf321a8efea057aa0eeb22452d0e5d5', 1, 'default.png', 'personel'),
('RIBUT SRI WAHYUNI', 198302282014122006, 'PENGDA I', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 1 SUBBAGPERS)', 'SEMARANG', '1983-02-28', 'ISLAM', 'JAWA', '2020-01-01', 6, '9c95e4302d7a7ae1a84cc4957b9c75bc', 1, 'default.png', 'personel'),
('ANDI ARIMANSYAH', 198302282014122008, 'BRIPTU', 'INTELIJEN KEAMANAN ', 'SEMARANG', '0000-00-00', 'ISLAM', 'JAWA', '1998-02-25', 23, '73cb6f174f3b3cce0745707708b77adf', 7, 'default.png', 'personel'),
('HERNANTO EKA PIPITARDI', 198305172009101001, 'PENGATUR', 'BANUM 3 BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (SUBBAG SARPRAS)', 'SEMARANG', '1983-05-17', 'ISLAM', 'JAWA', '2020-01-01', 6, 'a05da13d8efa5c3725469406dda5d21b', 1, 'default.png', 'personel'),
('PARYONO', 198308082008101001, 'PENGDA', 'BHAYANGKARA ADMINISTRASI PELAKSANA PEMULA BIDANG SUMDA BAGSUMDA POLRESTABES SEMARANG POLDA JATENG (UR 3 SUBBAGPERS)', 'SEMARANG', '1983-08-08', 'ISLAM', 'JAWA', '2020-01-01', 6, 'dac8eae4d2e95f52e7594aa2487f19ad', 1, 'default.png', 'personel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`id_bagian`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `personel`
--
ALTER TABLE `personel`
  ADD PRIMARY KEY (`nrp`),
  ADD KEY `id_bagian` (`id_bagian`),
  ADD KEY `id_instansi` (`id_instansi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bagian`
--
ALTER TABLE `bagian`
  MODIFY `id_bagian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_instansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `personel`
--
ALTER TABLE `personel`
  ADD CONSTRAINT `personel_ibfk_2` FOREIGN KEY (`id_bagian`) REFERENCES `bagian` (`id_bagian`),
  ADD CONSTRAINT `personel_ibfk_3` FOREIGN KEY (`id_instansi`) REFERENCES `instansi` (`id_instansi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
