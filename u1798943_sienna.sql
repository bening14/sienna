-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 11:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1798943_sienna`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0kepdva8chlphtfu9vb8nnh3mg9d23i1', '127.0.0.1', 1696955226, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935353232363b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('0so1kt2lsnb2jp4r24cigibmi68ttre1', '127.0.0.1', 1696956719, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935363537363b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('314hgkrrjrqkk81n757vr6fcdl0f5ors', '127.0.0.1', 1696956272, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935363237323b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('5j7f621g1204cc94sfvml73ej1vk2i91', '127.0.0.1', 1696953361, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935333336313b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('66n6glu3g7qs0duvufcm3ecbaedfdbb2', '127.0.0.1', 1696954199, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935343139393b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('6eplallf9r6ni9uhua06869bi9d1uelh', '127.0.0.1', 1696951890, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935313839303b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('7utsoh5omk4lcctbqk5bumv9fd7qik0g', '127.0.0.1', 1696950711, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935303731313b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('ba97n7svr0dns3q0t92j196vpp9h84f8', '127.0.0.1', 1696953886, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935333838363b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('dt4qol9jmomrrn6dml5f47f39tfm502q', '127.0.0.1', 1696955962, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935353936323b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('ffbp5r7cc06e14eerkp17523ltj2uous', '127.0.0.1', 1696955649, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935353634393b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('g16icraa94ibudv1j39rv6sd5grgm1cg', '127.0.0.1', 1696982683, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363938323638333b),
('h0h805dcptaddt9iq61euki2hjd6d25t', '127.0.0.1', 1696954517, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935343531373b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('iu8enf3kmbor76r6l8jiugbpcptja832', '127.0.0.1', 1696954838, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935343833383b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('k4ac0noue82lscrtl1rq003dteqeprhi', '127.0.0.1', 1696956576, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935363537363b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('o1jn864n2jjdvcj6mnv8no8nef9mqgkl', '127.0.0.1', 1696951088, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935313038383b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('rhnn9i71t7cpgn0nkgvc7c50uu22noue', '127.0.0.1', 1696952199, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935323139393b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b);

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE `mst_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL,
  `is_active` varchar(2) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`id`, `nama`, `password`, `no_hp`, `email`, `level`, `is_active`, `date_created`) VALUES
(1, 'Agus Salim', '$2y$10$8tN3o.zKMkX5QyKu0wNvtOi5PWyJxWIaH/V9yNJNmA0k/EPRdb.aa', '089898989', 'admin@gmail.com', 'admin', '1', '2023-09-20 07:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `reg_email`
--

CREATE TABLE `reg_email` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `uniq` varchar(128) NOT NULL,
  `aktivitas` varchar(15) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_email`
--

INSERT INTO `reg_email` (`id`, `email`, `uniq`, `aktivitas`, `date_created`) VALUES
(2, 'agus_salim_83@yahoo.co.id', '$2y$10$FOfMbooZCMj.LgLjlvjlSOAFrND8b3pCq9IwI0IpyngAru.kWhjEu', 'registrasi', '2023-09-16 12:22:01'),
(3, 'agus_salim_83@yahoo.co.id', '$2y$10$v5vRCn4sdlst5kLnw2vHCOOyc2JanOBuxKHQOmCje5LNLTXNa5nSu', 'reset password', '2023-09-16 12:39:12');

-- --------------------------------------------------------

--
-- Table structure for table `set_email`
--

CREATE TABLE `set_email` (
  `id` int(11) NOT NULL,
  `host` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `secure` varchar(30) NOT NULL,
  `port` varchar(10) NOT NULL,
  `emailfrom` varchar(128) NOT NULL,
  `nama_pengirim` varchar(128) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `set_email`
--

INSERT INTO `set_email` (`id`, `host`, `username`, `password`, `secure`, `port`, `emailfrom`, `nama_pengirim`, `date_created`) VALUES
(1, 'tls://mail.sosiometri.id', 'no-reply@sosiometri.id', 'M@lang345', 'tls', '587', 'no-reply@sosiometri.id', 'no-reply@sosiometri.id', '2023-09-16 10:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `cover` varchar(256) NOT NULL,
  `posting_oleh` varchar(256) NOT NULL,
  `uraian` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `judul`, `cover`, `posting_oleh`, `uraian`, `date_created`) VALUES
(1, 'Menghadapi Stress Mahasiswa', '1.jpg', 'Admin Sienna', 'Hai, teman-teman mahasiswa! Gimana nih kabarnya? Pasti lagi sibuk ngejar cita-cita, kan? Tapi, jangan lupakan juga bahwa hidup mahasiswa nggak selalu tentang pesta dan kebebasan. Ada satu kata yang sering mampir dalam hidup kita: STRES...', '2023-10-05 02:46:25'),
(2, 'Jangan Lupakan Diri Sendiri!', '2.jpg', 'Admin Sienna', 'Halo, teman-teman mahasiswa! Kita semua tahu bahwa hidup sebagai mahasiswa bisa jadi keren, penuh petualangan, dan seru. Kehidupan mahasiswa sering kali dianggap sebagai periode yang penuh dengan kegembiraan... ', '2023-10-05 02:46:28'),
(3, 'Jaga Jiwamu: Petualangan Bersama Literasi Kesehatan Mental', '3.jpg', 'Admin Sienna', 'Kesehatan mental bukan lagi hal yang tabu untuk dibicarakan, terutama di kalangan anak muda. Hari ini, kita akan menjelajahi dunia literasi kesehatan mental dan mengapa hal ini sangat penting ...', '2023-10-05 02:46:33'),
(11, 'Jaga Jiwamu: Petualangan Bersama Literasi Kesehatan Mental', '3.jpg', 'Admin Sienna', 'Kesehatan mental bukan lagi hal yang tabu untuk dibicarakan, terutama di kalangan anak muda. Hari ini, kita akan menjelajahi dunia literasi kesehatan mental dan mengapa hal ini sangat penting ...', '2023-10-05 02:46:33'),
(12, 'Jaga Jiwamu: Petualangan Bersama Literasi Kesehatan Mental', '3.jpg', 'Admin Sienna', 'Kesehatan mental bukan lagi hal yang tabu untuk dibicarakan, terutama di kalangan anak muda. Hari ini, kita akan menjelajahi dunia literasi kesehatan mental dan mengapa hal ini sangat penting ...', '2023-10-05 02:46:33'),
(13, 'Jaga Jiwamu: Petualangan Bersama Literasi Kesehatan Mental', '3.jpg', 'Admin Sienna', 'Kesehatan mental bukan lagi hal yang tabu untuk dibicarakan, terutama di kalangan anak muda. Hari ini, kita akan menjelajahi dunia literasi kesehatan mental dan mengapa hal ini sangat penting ...', '2023-10-05 02:46:33'),
(14, 'Jaga Jiwamu: Petualangan Bersama Literasi Kesehatan Mental', '3.jpg', 'Admin Sienna', 'Kesehatan mental bukan lagi hal yang tabu untuk dibicarakan, terutama di kalangan anak muda. Hari ini, kita akan menjelajahi dunia literasi kesehatan mental dan mengapa hal ini sangat penting ...', '2023-10-05 02:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`id`, `judul_buku`, `penulis`, `cover`, `deskripsi`, `date_created`) VALUES
(1, 'The Ink Black Hearth', 'Robert Galbraith', 'book1.jpg', 'Ini Deskripsi', '2023-10-04 20:01:12'),
(2, 'Great at Work', 'Robert Galbraith', 'aqua11.jpg', 'Ini Deskripsi', '2023-10-05 02:08:38'),
(3, 'Melangkah', 'Robert Galbraith', 'book3.jpg', 'Ini Deskripsi', '2023-10-04 20:01:20'),
(4, 'Atomic Habits', 'Robert Galbraith', 'book4.jpg', 'Ini Deskripsi', '2023-10-04 20:01:24'),
(5, 'Atomic Habits3', 'Robert Galbraith3', 'asa.jpg', 'Ini Deskripsi3', '2023-10-04 21:08:01'),
(24, 'agus', 'salim', 'aqua15.jpg', '<p>asdasdasd123</p>', '2023-10-10 12:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konselor`
--

CREATE TABLE `tbl_konselor` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) DEFAULT NULL,
  `profesi` varchar(100) DEFAULT NULL,
  `gambar` varchar(256) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_konselor`
--

INSERT INTO `tbl_konselor` (`id`, `nama`, `profesi`, `gambar`, `date_created`) VALUES
(1, 'Agus Salim', 'Konselor', 'default.png', '2023-10-05 01:22:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_email`
--
ALTER TABLE `reg_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `set_email`
--
ALTER TABLE `set_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_konselor`
--
ALTER TABLE `tbl_konselor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reg_email`
--
ALTER TABLE `reg_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `set_email`
--
ALTER TABLE `set_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_konselor`
--
ALTER TABLE `tbl_konselor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
