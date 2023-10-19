-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2023 pada 00.03
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

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
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0kepdva8chlphtfu9vb8nnh3mg9d23i1', '127.0.0.1', 1696955226, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935353232363b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('0so1kt2lsnb2jp4r24cigibmi68ttre1', '127.0.0.1', 1696956719, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935363537363b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('20qnom51cjt6n86ja9jkbd2i7dvk4ghb', '127.0.0.1', 1697749157, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734393135373b),
('314hgkrrjrqkk81n757vr6fcdl0f5ors', '127.0.0.1', 1696956272, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935363237323b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('5j7f621g1204cc94sfvml73ej1vk2i91', '127.0.0.1', 1696953361, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935333336313b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('66n6glu3g7qs0duvufcm3ecbaedfdbb2', '127.0.0.1', 1696954199, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935343139393b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('6eplallf9r6ni9uhua06869bi9d1uelh', '127.0.0.1', 1696951890, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935313839303b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('6ii2qfepsbninua2g9f07vb396ajoh0n', '127.0.0.1', 1697748813, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734383831333b),
('7n4gvf14vu1rrr3998u8l9qn2u2q05rg', '127.0.0.1', 1697750768, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373735303736383b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('7utsoh5omk4lcctbqk5bumv9fd7qik0g', '127.0.0.1', 1696950711, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935303731313b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('8gr9gj2v61b41heuv0b66ptqpa9ematb', '127.0.0.1', 1697745709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734353730393b),
('a87vtb86cu196a5j6q2uu4bpckpu37qc', '127.0.0.1', 1697748156, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734383135363b),
('ba97n7svr0dns3q0t92j196vpp9h84f8', '127.0.0.1', 1696953886, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935333838363b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('bmkd52kabnbv709dkqir72uj6iprm2lg', '127.0.0.1', 1697747105, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734373130353b),
('dqq2a821u0v09rjclghvdv21vrpmudkk', '127.0.0.1', 1697746073, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734363037333b),
('dt4qol9jmomrrn6dml5f47f39tfm502q', '127.0.0.1', 1696955962, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935353936323b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('ffbp5r7cc06e14eerkp17523ltj2uous', '127.0.0.1', 1696955649, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935353634393b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('g16icraa94ibudv1j39rv6sd5grgm1cg', '127.0.0.1', 1696982683, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363938323638333b),
('h0h805dcptaddt9iq61euki2hjd6d25t', '127.0.0.1', 1696954517, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935343531373b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('ibkvmp1s99jdcikuam9rk3ppaphgcuhb', '127.0.0.1', 1697751410, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373735313431303b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('iu8enf3kmbor76r6l8jiugbpcptja832', '127.0.0.1', 1696954838, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935343833383b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('k4ac0noue82lscrtl1rq003dteqeprhi', '127.0.0.1', 1696956576, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935363537363b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('k60skv0i3hn4k4bnepsclpk3rgonko32', '127.0.0.1', 1697747838, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734373833383b),
('k8qi33ob5a5kjvshmmnj754smstdv142', '127.0.0.1', 1697746448, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734363434383b),
('m348j9pn7fju0h805tvqsv7l6pfqph0g', '127.0.0.1', 1697751410, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373735313431303b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('nedlf7259etaf8m2rmb5q6huftd7kg9g', '127.0.0.1', 1697746754, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734363735343b),
('o1jn864n2jjdvcj6mnv8no8nef9mqgkl', '127.0.0.1', 1696951088, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935313038383b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('o6fig6qebr08u0j4a62cv9qrgjgvrlfe', '127.0.0.1', 1697749490, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734393439303b),
('oodih25irgumnlmgutht6i8073p8pihq', '127.0.0.1', 1697745378, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734353337383b),
('plnprd85nc43oak6fanea02331gj74p6', '127.0.0.1', 1697749943, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734393934333b),
('rg9n8n335rnclelnnprjboq6kjejn814', '127.0.0.1', 1697745001, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734353030313b),
('rhnn9i71t7cpgn0nkgvc7c50uu22noue', '127.0.0.1', 1696952199, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935323139393b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('sc7qrd98i8o241i5fdqco40e762uu10o', '127.0.0.1', 1697747410, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734373431303b),
('tcp2171g6ul2uvtn7kobea0perc5qip4', '127.0.0.1', 1697750444, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373735303434343b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('u53f6ffriaeq3drbds648db7f2oql3tt', '127.0.0.1', 1697748458, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734383435383b),
('v8b0urc2tculg9sc4cgcdvout24tl6h4', '127.0.0.1', 1697746607, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734363630373b),
('vqtemah0mivgph77n9rtuqhqp085ggdi', '127.0.0.1', 1697744634, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734343633343b);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_user`
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
-- Dumping data untuk tabel `mst_user`
--

INSERT INTO `mst_user` (`id`, `nama`, `password`, `no_hp`, `email`, `level`, `is_active`, `date_created`) VALUES
(1, 'Agus Salim', '$2y$10$8tN3o.zKMkX5QyKu0wNvtOi5PWyJxWIaH/V9yNJNmA0k/EPRdb.aa', '089898989', 'admin@gmail.com', 'admin', '1', '2023-09-20 07:01:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reg_email`
--

CREATE TABLE `reg_email` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `uniq` varchar(128) NOT NULL,
  `aktivitas` varchar(15) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reg_email`
--

INSERT INTO `reg_email` (`id`, `email`, `uniq`, `aktivitas`, `date_created`) VALUES
(2, 'agus_salim_83@yahoo.co.id', '$2y$10$FOfMbooZCMj.LgLjlvjlSOAFrND8b3pCq9IwI0IpyngAru.kWhjEu', 'registrasi', '2023-09-16 12:22:01'),
(3, 'agus_salim_83@yahoo.co.id', '$2y$10$v5vRCn4sdlst5kLnw2vHCOOyc2JanOBuxKHQOmCje5LNLTXNa5nSu', 'reset password', '2023-09-16 12:39:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `set_email`
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
-- Dumping data untuk tabel `set_email`
--

INSERT INTO `set_email` (`id`, `host`, `username`, `password`, `secure`, `port`, `emailfrom`, `nama_pengirim`, `date_created`) VALUES
(1, 'tls://mail.sosiometri.id', 'no-reply@sosiometri.id', 'M@lang345', 'tls', '587', 'no-reply@sosiometri.id', 'no-reply@sosiometri.id', '2023-09-16 10:50:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
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
-- Dumping data untuk tabel `tbl_artikel`
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
-- Struktur dari tabel `tbl_book`
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
-- Dumping data untuk tabel `tbl_book`
--

INSERT INTO `tbl_book` (`id`, `judul_buku`, `penulis`, `cover`, `deskripsi`, `date_created`) VALUES
(1, 'The Ink Black Hearth', 'Robert Galbraith', 'book1.jpg', 'Ini Deskripsi', '2023-10-04 20:01:12'),
(2, 'Great at Work', 'Robert Galbraith', 'book2.jpg', 'Ini Deskripsi', '2023-10-19 21:00:28'),
(3, 'Melangkah', 'Robert Galbraith', 'book3.jpg', 'Ini Deskripsi', '2023-10-04 20:01:20'),
(4, 'Atomic Habits', 'Robert Galbraith', 'book4.jpg', 'Ini Deskripsi', '2023-10-04 20:01:24'),
(5, 'Atomic Habits3', 'Robert Galbraith3', 'book5.jpg', 'Ini Deskripsi3', '2023-10-19 21:00:40'),
(24, 'agus', 'salim', 'book6.jpg', '<p>asdasdasd123</p>', '2023-10-19 21:00:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konselor`
--

CREATE TABLE `tbl_konselor` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) DEFAULT NULL,
  `profesi` varchar(100) DEFAULT NULL,
  `gambar` varchar(256) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_konselor`
--

INSERT INTO `tbl_konselor` (`id`, `nama`, `profesi`, `gambar`, `date_created`) VALUES
(1, 'Agus Salim', 'Konselor', 'default.png', '2023-10-05 01:22:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peserta`
--

CREATE TABLE `tbl_peserta` (
  `id` int(11) NOT NULL,
  `id_tbl_sesi_bibliotherapy` int(11) NOT NULL DEFAULT 0,
  `judul_sesi` varchar(255) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `fakultas` varchar(128) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `handphone` varchar(128) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_peserta`
--

INSERT INTO `tbl_peserta` (`id`, `id_tbl_sesi_bibliotherapy`, `judul_sesi`, `nama`, `nik`, `fakultas`, `jurusan`, `email`, `handphone`, `date_created`) VALUES
(1, 1, 'Atomic Habits', 'Agus Salim', '123', 'Teknik', 'Teknik Informatika', 'agus@gmail.com', '087654321', '2023-10-19 22:03:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sesi_bibliotherapy`
--

CREATE TABLE `tbl_sesi_bibliotherapy` (
  `id` int(11) NOT NULL,
  `judul_sesi` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL,
  `tempat` varchar(128) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_sesi_bibliotherapy`
--

INSERT INTO `tbl_sesi_bibliotherapy` (`id`, `judul_sesi`, `waktu`, `tempat`, `cover`, `date_created`) VALUES
(1, 'Atomic Habits', '2023-10-20 05:00:46', 'Gedung Aula', 'book6.jpg', '2023-10-19 22:01:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indeks untuk tabel `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reg_email`
--
ALTER TABLE `reg_email`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `set_email`
--
ALTER TABLE `set_email`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_konselor`
--
ALTER TABLE `tbl_konselor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_sesi_bibliotherapy`
--
ALTER TABLE `tbl_sesi_bibliotherapy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `reg_email`
--
ALTER TABLE `reg_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `set_email`
--
ALTER TABLE `set_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tbl_konselor`
--
ALTER TABLE `tbl_konselor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_sesi_bibliotherapy`
--
ALTER TABLE `tbl_sesi_bibliotherapy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
