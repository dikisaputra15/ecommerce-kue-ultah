-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 08:18 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `banner_id` int(10) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `gambar`, `status`) VALUES
(1, 'f1.jpg', 'on'),
(4, 'f3.jpg', 'on'),
(5, 'f2.jpg', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id_karyawan` int(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `no_telp` int(14) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `no_telp`, `alamat`, `email`, `jabatan`, `status`) VALUES
(1, 'Sulhi', 74373737, 'walantaka cigoong', 'coysulhi@gmail.com', 'cheff', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(10) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `status`) VALUES
(1, 'Katalog', 'on'),
(2, 'design', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `kirim`
--

CREATE TABLE IF NOT EXISTS `kirim` (
  `id_kirim` int(10) NOT NULL,
  `id_pesanan` int(10) NOT NULL,
  `id_karyawan` int(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kirim`
--

INSERT INTO `kirim` (`id_kirim`, `id_pesanan`, `id_karyawan`, `status`) VALUES
(1, 15, 1, 'Di Kirim');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_pembayaran`
--

CREATE TABLE IF NOT EXISTS `konfirmasi_pembayaran` (
  `konfirmasi_id` int(10) NOT NULL,
  `id_pesanan` int(10) NOT NULL,
  `no_rek` varchar(25) NOT NULL,
  `nama_account` varchar(30) NOT NULL,
  `tgl_transfer` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi_pembayaran`
--

INSERT INTO `konfirmasi_pembayaran` (`konfirmasi_id`, `id_pesanan`, `no_rek`, `nama_account`, `tgl_transfer`) VALUES
(1, 0, '970866543', 'sueb', '2018-08-10'),
(2, 0, '12432432', 'kokom', '2018-08-10'),
(3, 0, '9886754', 'keke', '2018-08-10'),
(4, 0, '2545', 'azki', '2018-08-10'),
(5, 14, '7654343', 'kokok', '2018-08-10'),
(6, 15, '76654321234', 'diki', '2018-08-11'),
(7, 16, '5664329876', 'dikdik', '2018-08-19'),
(8, 17, '890787', 'sul sul', '2018-08-19'),
(9, 19, '534534', 'sul', '2018-08-20'),
(10, 20, '6356357', 'dik', '2018-08-20'),
(11, 21, '87865', 'jati', '2018-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_pesanan`
--

CREATE TABLE IF NOT EXISTS `konfirmasi_pesanan` (
  `id_konfirmasi_p` int(10) NOT NULL,
  `id_pesanan` int(10) NOT NULL,
  `id_karyawan` int(10) NOT NULL,
  `lama_pesanan` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi_pesanan`
--

INSERT INTO `konfirmasi_pesanan` (`id_konfirmasi_p`, `id_pesanan`, `id_karyawan`, `lama_pesanan`) VALUES
(1, 15, 1, '2 jam');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id_kota` int(10) NOT NULL,
  `nama_kota` varchar(50) NOT NULL,
  `tarif` int(10) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`, `tarif`, `status`) VALUES
(1, 'serang', 5000, 'on'),
(3, 'cilegon', 10000, 'on'),
(4, 'pandeglang', 8000, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `kue`
--

CREATE TABLE IF NOT EXISTS `kue` (
  `id_kue` int(10) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `nama_kue` varchar(70) NOT NULL,
  `spesifikasi` text NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `harga` int(10) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kue`
--

INSERT INTO `kue` (`id_kue`, `id_kategori`, `nama_kue`, `spesifikasi`, `gambar`, `harga`, `status`) VALUES
(1, 1, 'double chocolate cake', '<p>baru coy lihat aja</p>', 'promo2.jpg', 235000, 'on'),
(2, 1, 'american chocolate cake', '<p>di edit oleh admin</p>', 'promo1.jpg', 210000, 'on'),
(3, 1, 'red velvet cake', '<p>ada yang masukin admin</p>', 'promo3.jpg', 235000, 'on'),
(4, 1, 'praline cake', '<p>admin yang masukin</p>', 'promo4.jpg', 245000, 'on'),
(5, 1, 'summer fruit cake', '<p>admin yang masukin</p>', 'promo5.jpg', 230000, 'on'),
(6, 1, 'Tiramisu cake', '<p>admin yang masukin</p>', 'promo6.jpg', 230000, 'on'),
(7, 1, 'opera cake', '<p>admin yang masukin</p>', 'promo7.jpg', 225000, 'on'),
(8, 1, 'green tea cake', '<p>admin yang masukin</p>', 'promo9.jpg', 225000, 'on'),
(9, 1, 'Triple Cake', '<p>admin yang masukin</p>', 'promo10.jpg', 225000, 'on'),
(10, 1, 'Black Forest Cake', '<p>admin yang masukin</p>', 'promo11.jpg', 210000, 'on'),
(11, 2, 'American Chocolate 20x20', '<p>admin yang masukin</p>', 'americacoklatwhole.jpg', 168000, 'on'),
(12, 2, 'American Chocolate 30x30', '<p>admin yang masukin</p>', 'americacoklat30x30.jpg', 300000, 'on'),
(13, 2, 'American Chocolate 30x40', '<p>admin yang masukin</p>', 'americacoklat30x40.jpg', 400000, 'on'),
(14, 2, 'Banchokispie 20x20', '<p>admin yang masukin</p>', 'banchokispiwhole.jpg', 168000, 'on'),
(15, 2, 'Banchokispie 30x30', '<p>admin yang masukin</p>', 'banchokispi30x30.jpg', 300000, 'on'),
(16, 2, 'Banchokispie 30x40', '<p>admin yang masukin</p>', 'banchokispi30x40.jpg', 400000, 'on'),
(17, 2, 'Black forest 20x20', '<p>admin yang masukin</p>', 'blackforestwhole.jpg', 168000, 'on'),
(18, 2, 'Black forest 30x30', '<p>admin yang masukin</p>', 'blackforest30x30.jpg', 300000, 'on'),
(19, 2, 'Black forest 30x40', '<p>admin yang masukin</p>', 'blackforest30x40.jpg', 400000, 'on'),
(20, 2, 'Black & white chocolate 20x20', '<p>admin yang masukin</p>', 'blackwhitewhole.jpg', 192500, 'on'),
(21, 2, 'Black & white chocolate 30x30', '<p>admin yang masukin</p>', 'blackwhite30x30.jpg', 350000, 'on'),
(22, 2, 'Black & white chocolate 30x40', '<p>admin yang masukin</p>', 'blackwhite30x40.jpg', 450000, 'on'),
(23, 2, 'Cassava Cake 20x20', '<p>admin yang masukin</p>', 'cassavacakewhole.jpg', 168000, 'on'),
(24, 2, 'Cassava Cake 30x30', '<p>admin yang masukin</p>', 'cassavacake30x30.jpg', 300000, 'on'),
(25, 2, 'Cassava Cake 30x40', '<p>admin yang masukin</p>', 'cassavacake30x40.jpg', 400000, 'on'),
(26, 2, 'Dark cherry cheese 20x20', '<p>admin yang masukin</p>', 'darkcherywhole.jpg', 192500, 'on'),
(27, 2, 'Dark cherry cheese 30x30', '<p>admin yang masukin</p>', 'darkchery30x30.jpg', 350000, 'on'),
(28, 2, 'Dark cherry cheese 30x40', '<p>admin yang masukin</p>', 'darkchery30x40.jpg', 450000, 'on'),
(29, 2, 'Double Chocolate (A) 20x20', '<p>admin yang masukin</p>', 'dobelcoklatAwhole.jpg', 192500, 'on'),
(30, 2, 'Double Chocolate (A) 30x30', '<p>admin yang masukin</p>', 'dobelcoklatA30x30.jpg', 350000, 'on'),
(31, 2, 'Double Chocolate (A) 30x40', '<p>admin yang masukin</p>', 'dobelcoklatA30x40.jpg', 450000, 'on'),
(32, 2, 'Passion Chocolate 20x20', '<p>admin yang masukin</p>', 'passiencoklatwhole.jpg', 192500, 'on'),
(33, 2, 'Passion Chocolate 30x30', '<p>admin yang masukin</p>', 'passiencoklat30x30.jpg', 350000, 'on'),
(34, 2, 'Passion Chocolate 30x40', '<p>admin yang masukin</p>', 'passiencoklat30x40.jpg', 450000, 'on'),
(35, 2, 'Pudding Cake 20x20', '<p>admin yang masukin</p>', 'puddingcakewhole.jpg', 168000, 'on'),
(36, 2, 'Pudding Cake 30x30', '<p>admin yang masukin</p>', 'puddingcake30x30.jpg', 300000, 'on'),
(37, 2, 'Pudding Cake 30x40', '<p>admin yang masukin</p>', 'puddingcake30x40.jpg', 400000, 'on'),
(38, 2, 'Raspberry Layers Cake 20x20', '<p>admin yang masukin</p>', 'raspberrywhole.jpg', 192500, 'on'),
(39, 2, 'Raspberry Layers Cake 30x30', '<p>admin yang masukin</p>', 'raspberry30x30.jpg', 350000, 'on'),
(40, 2, 'Raspberry Layers Cake 30x40', '<p>admin yang masukin</p>', 'raspberry30x40.jpg', 450000, 'on'),
(41, 2, 'Strawberry Cheese Cake 20x20', '<p>admin yang masukin</p>', 'strawberrychessewhole.jpg', 192500, 'on'),
(42, 2, 'Strawberry Cheese Cake 30x30', '<p>admin yang masukin</p>', 'strawberrychesse30x30.jpg', 350000, 'on'),
(43, 2, 'Strawberry Cheese Cake 30x40', '<p>admin yang masukin</p>', 'strawberrychesse30x40.jpg', 450000, 'on'),
(44, 2, 'Summer Fruit Cake 20x20', '<p>admin yang masukin</p>', 'summerfruitwhole.jpg', 192500, 'on'),
(45, 2, 'Summer Fruit Cake 30x30', '<p>admin yang masukin</p>', 'summerfruit30x30.jpg', 350000, 'on'),
(46, 2, 'Summer Fruit Cake 30x40', '<p>admin yang masukin</p>', 'summerfruit30x40.jpg', 450000, 'on'),
(47, 2, 'Tiramisu 20x20', '<p>admin yang masukin</p>', 'tiramisuwhole.jpg', 168000, 'on'),
(48, 2, 'Tiramisu 30x30', '<p>admin yang masukin</p>', 'tiramisu30x30.jpg', 300000, 'on'),
(49, 2, 'Tiramisu 30x40', '<p>admin yang masukin</p>', 'tiramisu30x40.jpg', 400000, 'on'),
(50, 2, 'Tiramisu (A) 20x20', '<p>admin yang masukin</p>', 'tiramisuAwhole.jpg', 192500, 'on'),
(51, 2, 'Tiramisu (A) 30x30', '<p>admin yang masukin</p>', 'tiramisuA30x30.jpg', 350000, 'on'),
(52, 2, 'Tiramisu (A) 30x40', '<p>admin yang masukin</p>', 'tiramisuA30x40.jpg', 450000, 'on'),
(53, 2, 'Tiramisu (B) 20x20', '<p>admin yang masukin</p>', 'tiramisuBwhole.jpg', 192500, 'on'),
(54, 2, 'Tiramisu (B) 30x30', '<p>admin yang masukin</p>', 'tiramisuB30x30.jpg', 350000, 'on'),
(55, 2, 'Tiramisu (B) 30x40', '<p>admin yang masukin</p>', 'tiramisuB30x40.jpg', 450000, 'on'),
(56, 2, 'Triple Cake 20x20', '<p>admin yang masukin</p>', 'triplecakewhole.jpg', 168000, 'on'),
(57, 2, 'Triple Cake 20x20', '<p>admin yang masukin</p>', 'triplecakewhole.jpg', 168000, 'on'),
(58, 2, 'Triple Cake 30x30', '<p>admin yang masukin</p>', 'triplecake30x30.jpg', 300000, 'on'),
(59, 2, 'Triple Cake 30x40', '<p>admin yang masukin</p>', 'triplecake30x40.jpg', 400000, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
  `id_pesanan` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `id_kota` int(10) NOT NULL,
  `nama_penerima` varchar(30) NOT NULL,
  `no_telp` int(14) NOT NULL,
  `alamat` text NOT NULL,
  `catatan` text NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `status` tinyint(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `user_id`, `id_kota`, `nama_penerima`, `no_telp`, `alamat`, `catatan`, `tgl_pemesanan`, `status`) VALUES
(1, 7, 1, 'kondil', 8218564, 'lorong baru', '', '2018-08-09', 0),
(2, 7, 4, 'rizal', 9876544, 'uruguay', '', '2018-08-09', 0),
(3, 7, 3, 'aliando', 2147483647, 'curug', '', '2018-08-09', 0),
(4, 7, 4, 'alexa', 2147483647, 'bandung', '', '2018-08-09', 0),
(5, 7, 3, 'kiki', 8766543, 'serang', '', '2018-08-09', 0),
(6, 7, 1, 'gozali', 89767, 'kampung kembang', '', '2018-08-10', 0),
(7, 10, 3, 'ari', 64575685, 'bandung', '', '2018-08-10', 0),
(8, 10, 1, 'ergi', 6798066, 'cimuncang', '', '2018-08-10', 0),
(9, 10, 1, 'arga', 4262626, 'cijantung', '', '2018-08-10', 0),
(10, 10, 1, 'sueb', 2147483647, 'tj harapan', '', '2018-08-10', 0),
(11, 10, 1, 'kokom', 5252141, 'serang timur', '', '2018-08-10', 0),
(12, 10, 1, 'keke', 989786543, 'curug', '', '2018-08-10', 0),
(13, 10, 1, 'azki', 97655432, 'curug serang', '', '2018-08-10', 3),
(14, 10, 1, 'kokok', 2446778, 'sari asih', '', '2018-08-10', 2),
(15, 1, 1, 'diki', 9876543, 'curug', '', '2018-08-11', 2),
(16, 1, 3, 'aldo bareto', 8766543, 'jl ciwaru raya', '<p>tambah coklat nya jadi dua kali lipat, warna ganti dengan warna pink</p>', '2018-08-19', 1),
(17, 7, 1, 'hidayat', 98765432, 'cigoong', '<p>tambah lilin</p>', '0000-00-00', 1),
(18, 7, 1, 'solok', 907865454, 'cigoong masjid', '<p>cukup</p>', '0000-00-00', 0),
(19, 1, 1, 'marpuah', 36565, 'nangka bugang', '<p>-</p>', '2018-08-20', 1),
(20, 1, 1, 'nanang', 4536564, 'kp limpar', '<p>tambah keju yang banyak</p>', '2018-08-20', 1),
(21, 1, 4, 'jati', 7986654, 'pandean', '<p>tt</p>', '2018-09-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_detail`
--

CREATE TABLE IF NOT EXISTS `pesanan_detail` (
  `id_pesanan` int(10) NOT NULL,
  `id_kue` int(10) NOT NULL,
  `qty` tinyint(3) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan_detail`
--

INSERT INTO `pesanan_detail` (`id_pesanan`, `id_kue`, `qty`, `harga`) VALUES
(2, 2, 0, 210000),
(3, 8, 1, 225000),
(4, 3, 1, 235000),
(5, 10, 1, 210000),
(6, 7, 1, 225000),
(7, 4, 1, 245000),
(8, 6, 1, 230000),
(9, 4, 1, 245000),
(10, 1, 1, 235000),
(11, 6, 1, 230000),
(12, 5, 1, 230000),
(13, 3, 1, 235000),
(14, 9, 1, 225000),
(15, 7, 1, 225000),
(16, 13, 1, 400000),
(17, 25, 1, 400000),
(18, 3, 1, 235000),
(19, 5, 1, 230000),
(20, 1, 1, 235000),
(21, 9, 1, 225000);

-- --------------------------------------------------------

--
-- Table structure for table `shout_box`
--

CREATE TABLE IF NOT EXISTS `shout_box` (
  `id` int(11) NOT NULL,
  `user` varchar(60) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shout_box`
--

INSERT INTO `shout_box` (`id`, `user`, `message`, `date_time`, `ip_address`) VALUES
(1, 'diki', 'itu berapa gan', '2018-07-10 15:26:24', '::1'),
(2, 'agan', '100000 gan', '2018-07-11 01:32:24', '::1'),
(3, 'sulhi', 'gan coklat berapa', '2018-07-11 13:14:11', '::1'),
(4, 'agan', '60000', '2018-07-11 13:15:03', '::1'),
(5, 'dono', 'alamat dimana??', '2018-07-25 15:38:23', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` enum('pembeli','admin') NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama_lengkap`, `email`, `no_telp`, `username`, `password`, `level`, `status`) VALUES
(1, 'diki saputra', 'diki@gmail.com', '08987881597', 'diki', '43b93443937ea642a9a43e77fd5d8f77', 'pembeli', 'on'),
(2, 'admin', 'admin@gmail.com', '08987881597', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'on'),
(4, 'yesa', 'dikisaputra396@gmail.com', '08987881597', 'yesa', '10db7e8adb50118875b3e26311c7b962', 'pembeli', 'on'),
(5, 'peja sanjaya', 'dikimista@gmail.com', '08987881597', 'peja', '55260b963931530149f22423414a5848', 'pembeli', 'on'),
(6, 'ifan tri suligar ', 'dikitak@gmail.com', '0987422222', 'ifan', 'edbb968ec5ae3f6f62f93b28b8089a3e', 'pembeli', 'on'),
(7, 'sulhi', 'coyi@gmail.com', '66456456', 'sulhi', '32d534eb845cc86188bcc279c8a73f22', 'pembeli', 'on'),
(8, 'tri satya', 'dikimistak@gmail.com', '0987422222', 'tri', 'd2cfe69af2d64330670e08efb2c86df7', 'pembeli', 'on'),
(9, 'hidayat', 'coysulhi@gmail.com', '78767', 'sulhi', '32d534eb845cc86188bcc279c8a73f22', 'pembeli', 'on'),
(10, 'riazki', 'riazkidikianugrah@gmail.com', '7982738', 'riazki', '6bde5ba43cc7385141b62d23e183ffa1', 'pembeli', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kirim`
--
ALTER TABLE `kirim`
  ADD PRIMARY KEY (`id_kirim`);

--
-- Indexes for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD PRIMARY KEY (`konfirmasi_id`);

--
-- Indexes for table `konfirmasi_pesanan`
--
ALTER TABLE `konfirmasi_pesanan`
  ADD PRIMARY KEY (`id_konfirmasi_p`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `kue`
--
ALTER TABLE `kue`
  ADD PRIMARY KEY (`id_kue`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `shout_box`
--
ALTER TABLE `shout_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kirim`
--
ALTER TABLE `kirim`
  MODIFY `id_kirim` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  MODIFY `konfirmasi_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `konfirmasi_pesanan`
--
ALTER TABLE `konfirmasi_pesanan`
  MODIFY `id_konfirmasi_p` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kue`
--
ALTER TABLE `kue`
  MODIFY `id_kue` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `shout_box`
--
ALTER TABLE `shout_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
