-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31 Jan 2017 pada 04.04
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `madina`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jual`
--

CREATE TABLE IF NOT EXISTS `t_jual` (
  `kd_jual` varchar(3) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `id_pemesan` varchar(3) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jual`
--

INSERT INTO `t_jual` (`kd_jual`, `id_pemesan`, `tgl`) VALUES
('J01', 'P01', '2015-01-06'),
('J02', 'P02', '2015-01-20'),
('J03', 'P03', '2015-02-04'),
('J04', 'P04', '2015-02-09'),
('J05', 'P05', '2015-03-12'),
('J06', 'P06', '2015-03-23'),
('J07', 'P07', '2015-03-18'),
('J08', 'P08', '2015-03-14'),
('J09', 'P09', '2015-04-05'),
('J10', 'P10', '2015-04-09'),
('J11', 'P11', '2015-04-15'),
('J12', 'P12', '2015-04-27'),
('J13', 'P14', '2015-05-18'),
('J14', 'P13', '2015-05-28'),
('J15', 'P15', '2015-06-04'),
('J16', 'P16', '2015-06-13'),
('J17', 'P17', '2015-07-01'),
('J18', 'P18', '2015-07-10'),
('J19', 'P19', '2015-08-11'),
('J20', 'P20', '2015-08-18'),
('J21', 'P21', '2015-09-03'),
('J22', 'P22', '2015-09-22'),
('J23', 'P23', '2015-10-05'),
('J24', 'P24', '2015-10-13'),
('J25', 'P25', '2015-10-24'),
('J26', 'P26', '2015-11-02'),
('J27', 'P27', '2015-11-12'),
('J28', 'P28', '2015-11-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kavling`
--

CREATE TABLE IF NOT EXISTS `t_kavling` (
  `kd_kavling` varchar(4) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `kd_tipe` varchar(3) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `luas` int(3) NOT NULL,
  `lebih` int(3) NOT NULL,
  `by_lebih` int(8) NOT NULL,
  `keterangan` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kavling`
--

INSERT INTO `t_kavling` (`kd_kavling`, `kd_tipe`, `luas`, `lebih`, `by_lebih`, `keterangan`, `status`) VALUES
('115A', 'T05', 228, 20, 500009, 'Sangat strategis', 0),
('115B', 'T07', 228, 15, 500000, 'Sangat strategis', 0),
('115J', 'T07', 228, 115, 500000, 'Sangat strategis', 0),
('115K', 'T07', 228, 15, 500000, 'Sangat strategis', 0),
('160A', 'T08', 240, 20, 500000, 'Sangat strategis', 0),
('160B', 'T08', 240, 15, 500000, 'Sangat strategis', 0),
('160C', 'T08', 240, 15, 500000, 'Sangat strategis', 0),
('160D', 'T08', 240, 15, 500000, 'Sangat strategis', 0),
('160E', 'T08', 240, 15, 500000, 'Sangat strategis', 0),
('160F', 'T08', 240, 15, 500000, 'Sangat strategis', 0),
('160G', 'T08', 240, 15, 500000, 'Sangat strategis', 0),
('36A', 'T01', 120, 20, 500000, 'Sangat strategis', 0),
('36B', 'T01', 120, 15, 500000, 'Sangat strategis', 0),
('36C', 'T01', 120, 15, 500000, 'Sangat strategis', 0),
('36D', 'T01', 120, 15, 500000, 'Sangat strategis', 0),
('36E', 'T01', 120, 15, 500000, 'Sangat strategis', 0),
('36F', 'T01', 120, 15, 500000, 'Sangat strategis', 0),
('36G', 'T01', 120, 15, 500000, 'Sangat strategis', 1),
('36H', 'T01', 120, 15, 500000, 'Sangat strategis', 0),
('36J', 'T01', 120, 15, 500000, 'Sangat strategis', 0),
('36K', 'T01', 120, 15, 500000, 'Sangat strategis', 0),
('36L', 'T01', 120, 15, 500000, 'Sangat strategis', 0),
('36M', 'T01', 120, 15, 500000, 'Sangat strategis', 0),
('36N', 'T01', 120, 15, 500000, 'Sangat strategis', 0),
('36W', 'T01', 120, 15, 500000, 'Sangat strategis', 0),
('36X', 'T01', 120, 15, 500000, 'Sangat strategis', 0),
('36Y', 'T01', 120, 15, 500000, 'Sangat strategis', 0),
('45B', 'T03', 140, 15, 500000, 'Sangat strategis', 0),
('45E', 'T03', 140, 20, 500000, 'Sangat strategis', 0),
('45J', 'T03', 140, 20, 500000, 'Sangat strategis', 0),
('45K', 'T03', 140, 15, 500000, 'Sangat strategis', 0),
('55A', 'T04', 160, 15, 500000, 'Sangat strategis', 0),
('55B', 'T04', 160, 15, 500000, 'Sangat strategis', 0),
('66A', 'T05', 180, 15, 500000, 'Sangat strategis', 0),
('66C', 'T05', 180, 15, 500000, 'Sangat strategis', 0),
('66E', 'T05', 180, 15, 500000, 'Sangat strategis', 0),
('78A', 'T06', 190, 15, 500000, 'Sangat strategis', 0),
('78B', 'T06', 190, 15, 500000, 'Sangat strategis', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_konstruksi`
--

CREATE TABLE IF NOT EXISTS `t_konstruksi` (
  `kd_konstruksi` varchar(2) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `kegiatan` varchar(20) NOT NULL,
  `jw` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_konstruksi`
--

INSERT INTO `t_konstruksi` (`kd_konstruksi`, `kegiatan`, `jw`) VALUES
('12', 'Pembuatan Gorong-gor', 3),
('13', 'Pembuatan Sumur', 4),
('14', 'Pembuatan Jalan', 4),
('15', 'Etalasi Listrik', 3),
('16', 'Pemasangan Ring Besi', 3),
('17', 'Pemasangan Tandon Ai', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_masuk`
--

CREATE TABLE IF NOT EXISTS `t_masuk` (
  `uname` varchar(8) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `pasw` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_masuk`
--

INSERT INTO `t_masuk` (`uname`, `pasw`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pegawai`
--

CREATE TABLE IF NOT EXISTS `t_pegawai` (
  `id_pegawai` varchar(3) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jns_kel` varchar(6) NOT NULL,
  `tp_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `status` varchar(15) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_pegawai`
--

INSERT INTO `t_pegawai` (`id_pegawai`, `nama`, `jns_kel`, `tp_lahir`, `tgl_lahir`, `alamat`, `status`, `telp`, `foto`) VALUES
('W11', 'Muhammad Sodikin', 'Pria', 'Buntok, Kalteng', '1985-10-05', 'Jl. Beruntung Sei Sipai No.20', 'Tetap', '085292771188', 'Roman.jpg'),
('W12', 'Rendi Prayoga', 'Pria', 'Banjarmasin', '1981-03-10', 'Jl. Balitan 4 No.10', 'Freelance', '081952893083', 'Rendi Prayoga.jpg'),
('W13', 'Dewi Permata', 'Wanita', 'Rantau', '1992-10-07', 'Jl.Pelita Raya Gg.Rimbawan No. 18', 'Tetap', '085386605901', 'Dewi Permata.jpg'),
('W14', 'Haryadi Fauzan', 'Pria', 'Banjarmasin', '1986-03-23', 'Jl. Soetoyo S Komp.Pahlawan', 'Tetap', '085751222226', 'Yohanes.jpg'),
('W15', 'Rosyid Eka Priadi', 'Pria', 'Bandung', '1986-12-01', 'Jl.Tanjung Rema Darussalam', 'Freelance', '082358637863', 'Rosyid Eka Priadi.jpg'),
('W16', 'Ahmad Jazir Burhan', 'Pria', 'Lamongan', '1980-12-16', 'Kompe Eka Paksi depan rumah makan subur', 'Tetap', '082358896907', 'Ahmad Jazir Burhan.jpg'),
('W17', 'Tri Mardi Saputra', 'Pria', 'Kotabaru', '1980-09-06', 'jl. Kihajar Dewantara Gg.Melati I', 'Freelance', '082255645609', 'Deri Atmaja.jpg'),
('W18', 'Erik Cahyono ', 'Pria', 'Malang', '1990-11-19', 'Komplek wengga trikora No.35', 'Tetap', '081253542387', 'Erik Cahyono.jpg'),
('W19', 'Rani Ningrum', 'Wanita', 'Banjarbaru', '1988-04-26', 'Jl. Intan Sari 2 No.10', 'Tetap', '082150282504', 'Tiara kumalasari.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pemesan`
--

CREATE TABLE IF NOT EXISTS `t_pemesan` (
  `id_pemesan` varchar(3) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `kd_kavling` varchar(4) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jns_kel` varchar(6) NOT NULL,
  `tp_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `status` varchar(11) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `bank` varchar(7) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `app` tinyint(1) NOT NULL,
  `jual` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_pemesan`
--

INSERT INTO `t_pemesan` (`id_pemesan`, `kd_kavling`, `nama`, `nik`, `jns_kel`, `tp_lahir`, `tgl_lahir`, `alamat`, `status`, `pekerjaan`, `telp`, `bank`, `foto`, `app`, `jual`) VALUES
('P01', '36A', 'Hendra Santoso', '6204060310920004', 'Pria', 'Banjarbaru', '1981-10-03', 'Jl.Karang Jawa Rt 01 Banjarbaru Utara', 'Kawin', 'Swasta', '085252899833', 'BRI', 'BRI1.jpg', 1, 1),
('P02', '36B', 'Ryan Hidayat', '6301031704930004', 'Pria', 'Batu licin', '1979-04-15', 'Jl. Raya Transmigrasi Rt 001 Rw 004', 'Kawin', 'Swasta', '081952757562', 'BCA', 'BANK BCA.jpg', 1, 1),
('P03', '45J', 'Sari Latifah', '6372066604920001', 'Wanita', 'Banjarbaru', '1982-10-02', 'Jl.Intan Sari no.10 Banjarbaru', 'Kawin', 'Swasta', '082150252504', 'BCA', 'Bank BCA2.jpg', 1, 1),
('P04', '45K', 'Randy Kurnia', '6301032904930004', 'Pria', 'Barabai', '1979-01-02', 'Jl. A.Yani Gg.Berkat Banjarbaru Selatan', 'Kawin', 'PNS', '085248846455', 'BCA', 'bANK BCA3.gif', 1, 1),
('P05', '45R', 'Abdul Sani', '6309081910900001', 'Pria', 'Banjarbaru', '1983-05-19', 'Jl. Kali Negara rt 21 Karang Intan', 'Kawin', 'Wiraswasta', '085251499441', 'BNI', 'BNI2.jpg', 1, 1),
('P06', '36E', 'H.Syarkawi', '6301102104930001', 'Pria', 'Banjarmasin', '1975-12-23', 'Jl.Jaro Rt 006 Rw 001 Tanjung', 'Kawin', 'PNS', '085332242997', 'Mandiri', 'Mandiri2.jpg', 1, 1),
('P07', '55B', 'Siti Khadijah', '6006345743560001', 'Wanita', 'Amuntai', '1981-12-07', 'Jl. Komplek Bel Raya Sei Ulin', 'Kawin', 'Wiraswasta', '085333224297', 'BRI', 'BRI1.jpg', 1, 1),
('P08', '66A', 'M.Zainudin MZ', '6302060501920000', 'Pria', 'Banjarmasin', '1980-01-07', 'Jl. Raya Transmigrasi Gg. Bina Murni Rt 18 Rw 02', 'Kawin', 'PNS', '081952757562', 'BRI', 'BRI1.jpg', 1, 1),
('P09', '36M', 'Wahyudi Tri', '6301032904930004', 'Pria', 'Banjarmasin', '1983-05-07', 'Komplek Husada borneo Banjarbaru', 'Kawin', 'Wiraswasta', '087816555530', 'BNI', 'Rek.BNI.jpg', 1, 1),
('P10', '36N', 'Terry Agustina', '6301031715931003', 'Wanita', 'Banjarmasin', '1987-06-23', 'Jl. Gotong royong No.11 Rt 003 Banjarbaru', 'Kawin', 'Swasta', '085349433777', 'Mandiri', 'Rek.Mandiri.jpg', 1, 1),
('P11', '160G', 'Cindy Pricilla', '6401032904950005', 'Wanita', 'Martapura', '1981-01-03', 'Jl.Intan Sari 2 No.01 Rt 18 Rw 02 Banjarbaru', 'Kawin', 'PNS', '085252997676', 'BCA', 'BANK BCA.jpg', 1, 1),
('P12', '45E', 'Hayatus Salihin', '6308020606920008', 'Pria', 'Barabai', '1979-08-19', 'jl. Banua Kepayang Rt 20 Rw 01 Pantai hambawang', 'Kawin', 'Wiraswasta', '089691527892', 'BCA', 'Bank BCA2.jpg', 1, 1),
('P13', '36Y', 'Fauziah', '6301102104930001', 'Wanita', 'Banjarbaru', '1982-06-17', 'jl. Pendidikan 1 No. 01 Rt. 05 Rw 03', 'Kawin', 'Swasta', '081250131032', 'BCA', 'bANK BCA3.gif', 1, 1),
('P14', '45B', 'Yeni Handayani', '6301102104930002', 'Wanita', 'Amuntai', '1980-02-19', 'jl.seroja rt 006 rw 004 Palampitan', 'Kawin', 'Swasta', '081252453312', 'Mandiri', 'Mandiri.jpg', 1, 1),
('P15', '115J', 'Akbar Numawi', '6308030706910008', 'Pria', 'Banjarmasin', '1980-08-05', 'jl. A.Yani Km 34,5 Gg.Sudorejo No.25', 'Kawin', 'PNS', '081252453323', 'BCA', 'BANK BCA.jpg', 1, 1),
('P16', '115A', 'Anwar Fahrezi', '6204060210820005', 'Pria', 'Anjir', '1982-03-10', 'Jl.Panglima Batur Gg.Purnama No.12 Banjarbaru', 'Kawin', 'PNS', '081257341032', 'BCA', 'Bank BCA2.jpg', 1, 1),
('P17', '78B', 'Karentisca Agradiani', '6308030706910008', 'Wanita', 'Malang', '1979-05-28', 'Jl.Panglima Batur Gg.Sempurna No.19', 'Kawin', 'PNS', '085345737307', 'BRI', 'BRI1.jpg', 1, 1),
('P18', '115K', 'Jenni Tania', '6301032904930004', 'Wanita', 'Bandung', '1989-03-13', 'Jl. Haji Indar Gg.Pematang Fungsi No.11', 'Kawin', 'Swasta', '087816765533', 'BCA', 'BANK BCA.jpg', 1, 1),
('P19', '160F', 'Yunus Apriadi', '6372066604920001', 'Pria', 'Martapura', '1978-07-07', 'Jl.Sungai Tabuk Gg.Ibunda Pal 6', 'Kawin', 'Swasta', '085251277748', 'BCA', 'Bank BCA2.jpg', 1, 1),
('P20', '45H', 'Mamah Halimah', '3201275507850011', 'Wanita', 'Bogor', '1976-06-16', 'Kp.Babakan Rt 001 Rw 004 Caringin', 'Kawin', 'Pedagang', '085249501604', 'BCA', 'bANK BCA3.gif', 1, 1),
('P21', '36L', 'Ridwan Hidayat', '0947120849038697', 'Pria', 'Bogor', '1983-07-13', 'Jl.Rimbai Bojong Rt 07 Rw 11', 'Kawin', 'Lain-lain', '085249127102', 'BCA', 'Bank BCA2.jpg', 1, 1),
('P22', '36X', 'Ridha Taqobalallah', '3372032503850004', 'Pria', 'Surakarta', '1985-03-25', 'Jl.A.Yani Km 18 Gg.Rimbawan No. 10', 'Kawin', 'Swasta', '087814511646', 'BNI', 'Bank Bni1.jpg', 1, 1),
('P23', '36C', 'Ahyat', '6309080706910008', 'Pria', 'Surabaya', '1987-12-16', 'Dukun Kupang 20/17 Rt 005 Rw 002', 'Belum Kawin', 'Swasta', '082150844123', 'Mandiri', 'Rek.Mandiri.jpg', 1, 1),
('P24', '66C', 'Marinus Mendpora', '6204060220950001', 'Pria', 'Nias', '1975-12-25', 'Jl. Hilidudo Dusun II Hilihambawa', 'Duda', 'Lain-lain', '082354268111', 'BCA', 'Bank Bca1.jpg', 1, 1),
('P25', '36W', 'R.R Sri Wahyuni', '6301031805730114', 'Wanita', 'Bnajrmasin', '1977-08-04', 'Jl. Vetran Gg.Kuripan No.10 Rt 03 Rw 03', 'Kawin', 'Pedagang', '082157104343', 'BRI', 'Bank Bri2.jpg', 1, 1),
('P26', '36K', 'Harmiati', '3502017410670002', 'Wanita', 'Banjarmasin', '1987-07-01', 'Jl.Pasar Lama Gg.Abadi No.21 Rt 01 Rw 04', 'Kawin', 'Swasta', '085348521358', 'BCA', 'Bank Bca31.gif', 1, 1),
('P27', '66E', 'Doddy Nursyah Putra', '6301032703921005', 'Pria', 'Banjarbaru', '1978-05-28', 'Jl. Kelapa Gading No. 35', 'Kawin', 'Swasta', '085652238272', 'BCA', 'Bank Bca2.jpg', 1, 1),
('P28', '36D', 'Edis Nilvia Roziah', '6006355543650002', 'Wanita', 'Pengaron', '1990-04-30', 'Jl. Babakan Sadang Gg.Rumbia No.18', 'Belum Kawin', 'Swasta', '082351900056', 'BCA', 'Bank Bca1.jpg', 1, 1),
('P29', '36G', 'Abdi Syukur', '6301032905930204', 'Pria', 'Martapura', '1977-03-18', 'Jl.Pekauman Hulu No.20 Rt 03 Rw 06', 'Kawin', 'PNS', '0852552311389', 'BCA', 'Bank Bca2.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_tipe`
--

CREATE TABLE IF NOT EXISTS `t_tipe` (
  `kd_tipe` varchar(3) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `tipe` varchar(7) NOT NULL,
  `hr_jual` int(9) NOT NULL,
  `dp` int(8) NOT NULL,
  `kpr` int(9) NOT NULL,
  `jk_waktu` varchar(2) NOT NULL,
  `dinding` varchar(40) NOT NULL,
  `lantai` varchar(40) NOT NULL,
  `atap` varchar(40) NOT NULL,
  `plafon` varchar(40) NOT NULL,
  `pintu` varchar(40) NOT NULL,
  `wc` varchar(40) NOT NULL,
  `listrik` varchar(4) NOT NULL,
  `air` varchar(40) NOT NULL,
  `struktur` varchar(40) NOT NULL,
  `pondasi` varchar(40) NOT NULL,
  `carport` varchar(40) NOT NULL,
  `jalan` varchar(40) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_tipe`
--

INSERT INTO `t_tipe` (`kd_tipe`, `tipe`, `hr_jual`, `dp`, `kpr`, `jk_waktu`, `dinding`, `lantai`, `atap`, `plafon`, `pintu`, `wc`, `listrik`, `air`, `struktur`, `pondasi`, `carport`, `jalan`, `keterangan`, `gambar`) VALUES
('T01', '36/120', 115000000, 12000000, 103000000, '10', 'Batako, Plester, Cat', 'keramik', 'Genteng Metal, Rangka Baja Ringan', 'Gypsum Board, List', 'Kayu Panel', 'Dinding lantai keramik, Closed jongkok', '900', 'Sumur Gali', 'Beton Bertulang', 'Batu Gunung, Finishing Cat JOTUN', 'Rabat Beton', 'Cor Ready Mix, Paving, Lebar 12 Meter', 'Minimalis, Cocok untuk anda yang sudah berkeluarga.', 'Rumah Type 36.jpg'),
('T03', '45/140', 185000000, 19000000, 166000000, '10', 'Batako, Plester, Cat', 'Keramik', 'Genteng Metal, Rangka Baja Ringan', 'Gypsum Board, List', 'Kayu Panel', 'Dinding lantai keramik, Closed jongkok', '900', 'Sumur Gali', 'Beton Bertulang', 'Batu Bata, Finishing Cat JOTUN', 'Rabat Beton', 'Cor Ready Mix, Paving, Lebar 12 Meter', 'Minimalis, cocok untuk anda yang sudah berkeluarga.', 'Rumah Type 45.jpg'),
('T04', '55/160', 225000000, 23000000, 202000000, '10', 'Batako, Plester, Cat', 'Keramik', 'Genteng Metal, Rangka Baja Ringan', 'Gypsum Board, List', 'Kayu Panel', 'Dinding lantai keramik, Closed jongkok', '900', 'Sumur Gali', 'Beton Bertulang', 'Batu Bata, Finishing Cat JOTUN', 'Rabat Beton', 'Cor Ready Mix, Paving, Lebar 12 Meter', 'Minimalis, cocok untuk anda yang sudah berkeluarga.', 'Rumah Type 55.jpg'),
('T05', '66/180', 550000000, 60000000, 490000000, '10', 'Batako, Plester, Cat', 'Keramik', 'Rangka Baja Ringan, Penutup Genteng M-Cl', 'Gypsum Board, List', 'Kayu Panel', 'Dinding lantai keramik, Closed jongkok', '1300', 'Sumur Gali', 'Beton Bertulang', 'Batu Bata, Finishing Cat JOTUN', 'Rabat Beton', 'Cor Ready Mix, Paving, Lebar 12 Meter', 'Lumayan Mewah, cocok untuk keluarga Anda. Dapatkan Segera.', 'Rumah Type 66.jpg'),
('T06', '78/190', 610000000, 65000000, 545000000, '15', 'Batako, Beton bertulang, Plester, Cat', 'Milan Keramik 50 x 50', 'Rangka Baja Ringan, Penutup Genteng M-Cl', 'Gypsum Board, Hollow', 'Kayu Panel', 'Dinding lantai keramik, Closed jongkok', '1300', 'Sumur Gali', 'Beton Bertulang', 'Batu Bata, Finishing Cat JOTUN', 'Rabat Beton', 'Cor Ready Mix, Paving, Lebar 12 Meter', 'Sangat cocok untuk keluarga Anda', 'Rumah Type 78.jpg'),
('T07', '115/228', 790000000, 80000000, 835000000, '15', 'Batako, Beton bertulang, Plester, Cat', 'Milan Keramik 50 x 50', 'Rangka Baja Ringan, Penutup Genteng M-Cl', 'Gypsum Board, Hollow', 'Kayu Panel', 'Dinding lantai keramik, Closed jongkok', '1300', 'Sumur Gali', 'Beton Bertulang', 'Batu Bata, Finishing Cat JOTUN', 'Rabat Beton', 'Cor Ready Mix, Paving, Lebar 12 Meter', 'Sangata cocok untuk keluarga Anda', 'Rumah Type 115.jpg'),
('T08', '160/240', 930000000, 95000000, 835000000, '15', 'Batako, Beton bertulang, Plester, Cat', 'Milan Keramik 50 x 50', 'Rangka Baja Ringan, Penutup Genteng M-Cl', 'Gypsum Board, Hollow', 'Kayu Panel', 'Dinding lantai keramik, Closed Duduk', '1300', 'Sumur Gali', 'Beton Bertulang', 'Batu Bata, Finishing Cat JOTUN', 'Rabat Beton', 'Cor Ready Mix, Paving, Lebar 12 Meter', 'Sangat cocok untuk Keluarga Anda. Dapatkan Segera.', 'Rumah Type 160.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_tukang`
--

CREATE TABLE IF NOT EXISTS `t_tukang` (
  `kd_tukang` varchar(2) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `jumlah` tinyint(2) NOT NULL,
  `jm_kerja` tinyint(1) NOT NULL,
  `biaya` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_tukang`
--

INSERT INTO `t_tukang` (`kd_tukang`, `pekerjaan`, `jumlah`, `jm_kerja`, `biaya`) VALUES
('02', 'Tukang Batu', 4, 7, 100000),
('03', 'Kenek', 2, 7, 80000),
('04', 'Tukang Kayu', 5, 7, 110000),
('05', 'Tukang Cat', 4, 7, 100000),
('06', 'Kepala Tukang', 1, 7, 130000),
('07', 'Tukang Instalasi Listrik', 2, 2, 150000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_jual`
--
ALTER TABLE `t_jual`
 ADD PRIMARY KEY (`kd_jual`), ADD KEY `kd_pemesan` (`id_pemesan`);

--
-- Indexes for table `t_kavling`
--
ALTER TABLE `t_kavling`
 ADD PRIMARY KEY (`kd_kavling`), ADD KEY `kd_tipe` (`kd_tipe`);

--
-- Indexes for table `t_konstruksi`
--
ALTER TABLE `t_konstruksi`
 ADD PRIMARY KEY (`kd_konstruksi`);

--
-- Indexes for table `t_pegawai`
--
ALTER TABLE `t_pegawai`
 ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `t_pemesan`
--
ALTER TABLE `t_pemesan`
 ADD PRIMARY KEY (`id_pemesan`), ADD KEY `kd_kavling` (`kd_kavling`);

--
-- Indexes for table `t_tipe`
--
ALTER TABLE `t_tipe`
 ADD PRIMARY KEY (`kd_tipe`);

--
-- Indexes for table `t_tukang`
--
ALTER TABLE `t_tukang`
 ADD PRIMARY KEY (`kd_tukang`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_jual`
--
ALTER TABLE `t_jual`
ADD CONSTRAINT `t_jual_ibfk_2` FOREIGN KEY (`id_pemesan`) REFERENCES `t_pemesan` (`id_pemesan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_kavling`
--
ALTER TABLE `t_kavling`
ADD CONSTRAINT `t_kavling_ibfk_1` FOREIGN KEY (`kd_tipe`) REFERENCES `t_tipe` (`kd_tipe`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
