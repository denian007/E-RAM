-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 03:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_ram2`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pabrik`
--

CREATE TABLE `daftar_pabrik` (
  `id` int(11) NOT NULL,
  `nm_pabrik_singkat` varchar(250) NOT NULL,
  `nm_full_pabrik` varchar(250) NOT NULL,
  `alamat_pabrik` text NOT NULL,
  `manager_pabrik` text NOT NULL,
  `uang_jalan` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_pabrik`
--

INSERT INTO `daftar_pabrik` (`id`, `nm_pabrik_singkat`, `nm_full_pabrik`, `alamat_pabrik`, `manager_pabrik`, `uang_jalan`) VALUES
(1, 'BSL', 'Bangun Sinar Lestari', 'Jl. Teuku Umar No 230 Desa Nama Desa Kec Simpang Kiri Kota subulussalam', 'Ali Bata', '250000'),
(2, 'SSN', 'Samudra Sawit Nabati', 'Desa Singgersing Kec. Sultan Daulat Kota Subulussalam', 'Ali Basah', '0'),
(3, 'PLB2', 'c', 'cc', 'Jinggo Manurung', '0'),
(4, 'GSS', 'd', 'dd', 'Senoaji', '0'),
(5, 'BDA', 'e', 'ee', 'Suparno', '0'),
(6, 'ATAK', 'f', 'ff', 'Agung', '0'),
(7, 'SSM', 'g', 'gg', 'Dono', '0');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `hal` text NOT NULL,
  `pesan` text NOT NULL,
  `time_stamp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `username`, `hal`, `pesan`, `time_stamp`) VALUES
(1, 'admin', 'login', 'admin masuk ke aplikasi', '2023-04-11 14:50:14'),
(2, 'admin', 'logout', 'admin Logout dari Aplikasi', '2023-04-11 14:51:22'),
(3, 'user', 'login', 'user masuk ke aplikasi', '2023-04-11 14:51:42'),
(4, 'user', 'Update', 'user berhasil update data suplayer Deni Anugrah', '2023-04-11 14:58:03'),
(5, 'admin', 'login', 'admin masuk ke aplikasi', '2023-04-11 15:01:21'),
(6, 'admin', 'Update', 'admin berhasil update otoritas user', '2023-04-11 15:01:29'),
(7, 'user', 'Hapus Suplayer', 'user Berhasil Menghapus Suplayer  dengan nama ', '2023-04-11 15:02:22'),
(8, 'user', 'Tambah agen', 'user Berhasil tambah Suplayer agen dengan nama  Deni', '2023-04-11 15:02:47'),
(9, 'admin', 'Update', 'admin berhasil update otoritas user', '2023-04-11 15:03:59'),
(10, 'admin', 'login', 'admin masuk ke aplikasi', '2023-04-11 18:53:20'),
(11, 'admin', 'Tambah Transaksi', 'admin Berhasil tambah transaksi', '2023-04-11 18:53:44'),
(12, 'admin', 'Tambah Transaksi', 'admin Berhasil tambah transaksi', '2023-04-11 18:54:05'),
(13, 'admin', 'Tambah Transaksi', 'admin Berhasil tambah transaksi', '2023-04-11 18:54:20'),
(14, 'admin', 'Tambah Transaksi', 'admin Berhasil tambah transaksi', '2023-04-11 19:01:31'),
(15, 'admin', 'Hapus', 'admin Berhasil Menghapus Transaksi ', '2023-04-11 19:20:19'),
(16, 'admin', 'Hapus', 'admin Berhasil Menghapus Transaksi ', '2023-04-11 19:21:55'),
(17, 'admin', 'Hapus', 'admin Berhasil Menghapus Transaksi ', '2023-04-11 19:23:50'),
(18, 'admin', 'Update', 'admin berhasil update data buah keluar', '2023-04-11 19:41:36'),
(19, 'admin', 'Update', 'admin berhasil update data buah keluar', '2023-04-11 19:48:06'),
(20, 'admin', 'Update', 'admin berhasil update data pabrik', '2023-04-11 19:50:20'),
(21, 'admin', 'Update', 'admin berhasil update data pabrik', '2023-04-11 19:50:30'),
(22, 'admin', 'Update', 'admin berhasil update data pabrik', '2023-04-11 19:51:09'),
(23, 'admin', 'Update', 'admin berhasil update data pabrik', '2023-04-11 19:51:45'),
(24, 'admin', 'Update', 'admin berhasil update data driver', '2023-04-11 20:06:35'),
(25, 'admin', 'Update', 'admin berhasil update data driver', '2023-04-11 20:06:52'),
(26, 'admin', 'Update', 'admin berhasil update data driver', '2023-04-11 20:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `ta_buah_keluar`
--

CREATE TABLE `ta_buah_keluar` (
  `id` int(11) NOT NULL,
  `register` varchar(100) NOT NULL,
  `pabrik_tujuan` varchar(200) NOT NULL,
  `pabrik_tujuan2` varchar(250) NOT NULL,
  `alamat_pabrik` varchar(100) NOT NULL,
  `tbg_kosong` varchar(50) NOT NULL,
  `tbg_mobil_buah` varchar(50) NOT NULL,
  `tbg_buah` varchar(50) NOT NULL,
  `berat_buah` varchar(10) NOT NULL,
  `rata_rata_buah` varchar(10) NOT NULL,
  `plat` varchar(10) NOT NULL,
  `nm_sopir` varchar(200) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `nm_pengirim` varchar(200) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jenis2` varchar(100) NOT NULL,
  `uang_jalan` varchar(20) NOT NULL,
  `netto_pabrik` varchar(10) NOT NULL DEFAULT '0',
  `untung_kg` varchar(10) NOT NULL DEFAULT '0',
  `time_stamp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ta_buah_keluar`
--

INSERT INTO `ta_buah_keluar` (`id`, `register`, `pabrik_tujuan`, `pabrik_tujuan2`, `alamat_pabrik`, `tbg_kosong`, `tbg_mobil_buah`, `tbg_buah`, `berat_buah`, `rata_rata_buah`, `plat`, `nm_sopir`, `hp`, `nm_pengirim`, `tanggal`, `jenis2`, `uang_jalan`, `netto_pabrik`, `untung_kg`, `time_stamp`) VALUES
(1, 'REG1', 'BSL - ', 'Bangun Sinar Lestari', 'Jl. Teuku Umar No 230 Desa Nama Desa Kec Simpang Kiri Kota subulussalam', '4000', '12430', '8430', '20', '621', 'BL 1234 IB', 'Deni Anugrah', '082360957575', 'Nuri', '2023-04-11', 'tbs', '250000', '8460', '30', '2023-04-11 19:47:59');

-- --------------------------------------------------------

--
-- Table structure for table `ta_driver`
--

CREATE TABLE `ta_driver` (
  `id` int(11) NOT NULL,
  `nm_driver` varchar(250) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `nm_mobil` varchar(200) NOT NULL,
  `plat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ta_driver`
--

INSERT INTO `ta_driver` (`id`, `nm_driver`, `hp`, `alamat`, `nm_mobil`, `plat`) VALUES
(1, 'Andi Margono', '08', 'Desa Lae Simolap', 'Canter 125 HD', 'BL 1234 IB');

-- --------------------------------------------------------

--
-- Table structure for table `ta_otoritas`
--

CREATE TABLE `ta_otoritas` (
  `id` int(11) NOT NULL,
  `nm_otoritas` varchar(100) NOT NULL,
  `otoritas1` varchar(100) NOT NULL,
  `otoritas2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ta_otoritas`
--

INSERT INTO `ta_otoritas` (`id`, `nm_otoritas`, `otoritas1`, `otoritas2`) VALUES
(1, 'Enable', '', ''),
(2, 'Disable', 'disabled', 'readonly');

-- --------------------------------------------------------

--
-- Table structure for table `ta_ramp`
--

CREATE TABLE `ta_ramp` (
  `id` int(11) NOT NULL,
  `nm_ram` text NOT NULL,
  `alamat` text NOT NULL,
  `harga_agen` varchar(6) NOT NULL,
  `harga_petani` varchar(6) NOT NULL,
  `persen_agen` varchar(3) NOT NULL,
  `persen_petani` varchar(3) NOT NULL,
  `harga_brd_agen` varchar(20) NOT NULL,
  `harga_brd_petani` varchar(20) NOT NULL,
  `persen_brd_agen` varchar(3) NOT NULL,
  `persen_brd_petani` varchar(3) NOT NULL,
  `kontak` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ta_ramp`
--

INSERT INTO `ta_ramp` (`id`, `nm_ram`, `alamat`, `harga_agen`, `harga_petani`, `persen_agen`, `persen_petani`, `harga_brd_agen`, `harga_brd_petani`, `persen_brd_agen`, `persen_brd_petani`, `kontak`) VALUES
(1, 'SARDAM', 'Dusun Persatuan UPT XXI Kav. 179 Lae Simolap Kec. Sultan Daulat - SUBULUSSALAM', '2150', '2100', '2.5', '3', '2550', '2500', '0', '0', '082360957575');

-- --------------------------------------------------------

--
-- Table structure for table `ta_saldo`
--

CREATE TABLE `ta_saldo` (
  `id` int(11) NOT NULL,
  `nm_penyetor` varchar(200) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `d_k` varchar(1) NOT NULL,
  `time_stamp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ta_saldo`
--

INSERT INTO `ta_saldo` (`id`, `nm_penyetor`, `jumlah`, `tanggal`, `d_k`, `time_stamp`) VALUES
(5, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ta_suplayer`
--

CREATE TABLE `ta_suplayer` (
  `id` int(11) NOT NULL,
  `nm_suplayer` varchar(250) NOT NULL,
  `hp` varchar(14) NOT NULL,
  `alamat` text NOT NULL,
  `panjar_tbs` varchar(50) NOT NULL DEFAULT '0',
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ta_suplayer`
--

INSERT INTO `ta_suplayer` (`id`, `nm_suplayer`, `hp`, `alamat`, `panjar_tbs`, `jenis`) VALUES
(11, 'Mariono', '082289668406', 'Dusun Persatuan Lae Simolap ', '3500000', 'petani'),
(12, 'Lokkot Brutu', '081537468773', 'Dusun Persatuan Lae Simolap ', '0', 'petani'),
(13, 'Ratna Juwita ', '082277048893', 'Dusun Persatuan Lae Simolap ', '800000', 'petani'),
(15, 'Deni', '08', 'Cipar pari timur', '0', 'agen');

-- --------------------------------------------------------

--
-- Table structure for table `ta_transaksi`
--

CREATE TABLE `ta_transaksi` (
  `id` int(11) NOT NULL,
  `nm_suplayer` varchar(250) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `tbg_masuk` varchar(50) NOT NULL,
  `tbg_keluar` varchar(50) NOT NULL,
  `tbg_kotor` varchar(50) NOT NULL,
  `ptg_persen` varchar(50) NOT NULL,
  `ptg_kg` varchar(50) NOT NULL,
  `ptg_persen2` varchar(50) NOT NULL,
  `ptg_kg2` varchar(50) NOT NULL,
  `tbg_bersih` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `ptg_hutang` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `jenis2` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `time_stamp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ta_transaksi`
--

INSERT INTO `ta_transaksi` (`id`, `nm_suplayer`, `hp`, `tbg_masuk`, `tbg_keluar`, `tbg_kotor`, `ptg_persen`, `ptg_kg`, `ptg_persen2`, `ptg_kg2`, `tbg_bersih`, `harga`, `ptg_hutang`, `jumlah`, `ket`, `jenis`, `jenis2`, `tanggal`, `time_stamp`) VALUES
(23, 'Deni', '08', '4300', '1330', '2970', '2.5', '75', '0', '', '2895', '2150', '0', '6224250', '', 'agen', 'tbs', '2023-04-11', '2023-04-11 18:53:44'),
(24, 'Mariono', '082289668406', '2750', '1340', '1410', '3', '42', '0', '', '1368', '2100', '0', '2872800', '', 'petani', 'tbs', '2023-04-11', '2023-04-11 18:54:05'),
(25, 'Deni', '08', '350', '0', '350', '0', '0', '0', '', '350', '2550', '0', '892500', '', 'agen', 'brd', '2023-04-11', '2023-04-11 18:54:20'),
(26, 'Mariono', '082289668406', '150', '0', '150', '0', '0', '0', '', '150', '2500', '0', '375000', '', 'petani', 'brd', '2023-04-11', '2023-04-11 19:01:31');

-- --------------------------------------------------------

--
-- Table structure for table `ta_user`
--

CREATE TABLE `ta_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `nama` text NOT NULL,
  `nm_otoritas` varchar(100) NOT NULL,
  `otoritas1` varchar(100) NOT NULL,
  `otoritas2` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ta_user`
--

INSERT INTO `ta_user` (`id`, `username`, `password`, `level`, `nama`, `nm_otoritas`, `otoritas1`, `otoritas2`, `status`) VALUES
(1, 'admin', '1234', 'admin', 'Administrator', 'Enable', '', '', 'on'),
(2, 'user', '1234', 'user', 'user', 'Disable', 'disabled', 'readonly', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_pabrik`
--
ALTER TABLE `daftar_pabrik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ta_buah_keluar`
--
ALTER TABLE `ta_buah_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ta_driver`
--
ALTER TABLE `ta_driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ta_otoritas`
--
ALTER TABLE `ta_otoritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ta_ramp`
--
ALTER TABLE `ta_ramp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ta_saldo`
--
ALTER TABLE `ta_saldo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ta_suplayer`
--
ALTER TABLE `ta_suplayer`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `ta_transaksi`
--
ALTER TABLE `ta_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ta_user`
--
ALTER TABLE `ta_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_pabrik`
--
ALTER TABLE `daftar_pabrik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ta_buah_keluar`
--
ALTER TABLE `ta_buah_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ta_driver`
--
ALTER TABLE `ta_driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ta_otoritas`
--
ALTER TABLE `ta_otoritas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ta_ramp`
--
ALTER TABLE `ta_ramp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ta_saldo`
--
ALTER TABLE `ta_saldo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ta_suplayer`
--
ALTER TABLE `ta_suplayer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ta_transaksi`
--
ALTER TABLE `ta_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ta_user`
--
ALTER TABLE `ta_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
