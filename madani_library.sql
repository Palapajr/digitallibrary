-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 01:50 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madani_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id_book` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `tgl_penetapan` date NOT NULL,
  `edoc` varchar(100) NOT NULL,
  `created_user` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_user` int(11) NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_book`, `nama`, `jenis`, `tgl_penetapan`, `edoc`, `created_user`, `created_date`, `updated_user`, `updated_date`) VALUES
(1, 'buku cerita kita', 'kenangan', '2021-05-24', 'kenangan.pdf', 1, '2021-05-24 13:27:40', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id_sitebook` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `kategori` varchar(254) NOT NULL,
  `keterangan` varchar(800) NOT NULL,
  `link` varchar(254) NOT NULL,
  `created_user` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_user` int(11) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id_sitebook`, `nama`, `kategori`, `keterangan`, `link`, `created_user`, `created_date`, `updated_user`, `updated_date`) VALUES
(1, 'Handbrake', 'Editing ', 'situs tempat ', 'https://qwords.com/blog/cara-menggunakan-handbrake/', 1, '2021-06-18 09:38:30', 0, '2021-06-21 03:31:44'),
(4, 'Otakudesu', 'Streaming Anime', 'bagus', 'https://otakudesu.moe/', 0, '2021-06-18 09:39:59', 0, '2021-06-18 09:39:59'),
(6, 'Localhost okee', 'database', 'agsoigasdig ', 'http://localhost/phpmyadmin/index.php', 0, '2021-06-18 09:33:07', 0, '2021-06-18 09:30:44'),
(7, 'mantul okeee', 'bg ', 'okeee abg qu', 'yes.com', 0, '2021-06-18 09:42:01', 0, '2021-06-18 09:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `level` int(2) NOT NULL,
  `foto` varchar(254) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_active` int(2) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `jk`, `level`, `foto`, `username`, `password`, `is_active`, `create_at`) VALUES
(1, 'Qumfa anzir', 'Laki-laki', 1, '', 'QUMFA ANZIR', '8cb2237d0679ca88db6464eac60da96345513964', 1, '2021-06-30 13:46:52'),
(2, 'qumfa anzir user', 'Laki-laki', 2, '', 'USER', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, '2021-06-30 13:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nip` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `wrong_pass` int(11) NOT NULL,
  `last_login` datetime NOT NULL,
  `blokir` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id_sitebook`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id_sitebook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
