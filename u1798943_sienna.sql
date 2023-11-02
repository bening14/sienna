-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2023 pada 16.04
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
('1g9t4mcscd4dspkhq5ch74lrchgqao1r', '127.0.0.1', 1698934625, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933343435383b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('1n9acgbv86kbikghglluuq22abv4j3fe', '127.0.0.1', 1698763705, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383736333730353b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('1ug2vios0b4r6ar6vv0gilqti9t9q7o6', '127.0.0.1', 1698764011, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383736343031313b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('28rkt03u0580lu5d4d90mr8t25gvqb38', '127.0.0.1', 1698928657, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383932383635373b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('36g4vbbm88dcp128a4dgt5jb57lbun4k', '127.0.0.1', 1698937351, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933373335313b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('5a77oc54il2kjh10pmj24ad60shepqq3', '127.0.0.1', 1698930130, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933303133303b),
('5eukcum11144k039khu824gtt4293noe', '127.0.0.1', 1698935324, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933353332343b),
('65ku6lvs4rsf5q6gic9e65nn9trdandh', '127.0.0.1', 1698934889, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933343635363b),
('6hfdlfegsd4vj2fk0a7d4nus3ucf8hv2', '127.0.0.1', 1698930056, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933303035363b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('73ro02prm0j5e1so3i0ed2gvp5lpr78b', '127.0.0.1', 1698931414, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933313431343b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('7hibd2l7sjdgclcevtb5cs6bnv06u20n', '127.0.0.1', 1698930413, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933303431333b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('7q4acnc0dbmdi1s0andb3v2juhuauomu', '127.0.0.1', 1698931734, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933313733343b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('7q71rn44b7932vt324damsap09mur0c6', '127.0.0.1', 1698937126, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933373132363b),
('9lbl25iuns4hn36th1od53ju80vq4h3u', '127.0.0.1', 1698934090, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933343039303b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('a0sfgblauqoe34q52sn5stvv4bet2kgg', '127.0.0.1', 1698937029, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933373032393b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('c8emp7vhg6t9q55lsh84ohmklh60baj3', '127.0.0.1', 1698762943, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383736323934333b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('dclhg99tj42qbeik0f99ahlkmrrct15o', '127.0.0.1', 1698930760, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933303736303b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('dpiishe1027jc75mo168iid7m1ud6heu', '127.0.0.1', 1698937412, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933373335313b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('h5jho7hpo48pt7paaberl1rpgi8pps6n', '127.0.0.1', 1698763387, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383736333338373b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('hjlp4atue5b1egs9daq17sm047gclaqh', '127.0.0.1', 1698933113, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933333131333b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('k8kcv0orkbjps4rdpgb3f5q9i80gg0a7', '127.0.0.1', 1698931105, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933313130353b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('l7k210ss8a6ohqmjqfo3k7ivi66ejstb', '127.0.0.1', 1698764301, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383736343031313b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('lqopms8gtu94p1qd42v7gsud1cfkh9ib', '127.0.0.1', 1698935952, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933353935323b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('nroe259mnsnm43g4uij1rjq6g0bfau4c', '127.0.0.1', 1698929428, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383932393432383b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('q0gnaq6ap8nh0p2ra94rsheid5kgsm3c', '127.0.0.1', 1698933421, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933333432313b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('q66phsu4n76fj5e68q74udb9ne919ic5', '127.0.0.1', 1698929754, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383932393735343b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('r90tjvqro4gbtm3s6runuh0b0b9h26ik', '192.168.0.6', 1698935459, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933353435393b6d6573736167657c733a39363a223c64697620636c6173733d22616c65727420616c6572742d64616e6765722220726f6c653d22616c657274223e0d0a20202020202020202020202053696c61686b616e206c6f67696e207465726c6562696820646168756c75213c2f6469763e223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226e6577223b7d),
('s0dnuq9dvsuhh8j4fo7c5vohsmp33agc', '192.168.0.6', 1698936240, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933363230323b),
('t49h0hjjvpobs3dak93c2h4flipl8opj', '127.0.0.1', 1698933744, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933333734343b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('tlkam8srtknng0dohdru979gtsn0t3mg', '127.0.0.1', 1698936338, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933363333383b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('uhcpf7tddibf06ktie2ddg4jcn1s687i', '192.168.0.6', 1698936202, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933363230323b),
('vfvh004snqjtcmev6o5hi82kpjc0b2uh', '127.0.0.1', 1698936715, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933363731353b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('vqnoll3mr523nu8lsuf7i2hono3lcak5', '127.0.0.1', 1698934458, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383933343435383b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('vsqg7ouas8npadsbostv2q04ajh17961', '127.0.0.1', 1698929084, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383932393038343b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b);

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
(15, 'Ini judul Artikel', 'kesehatanmental.jpeg', 'Agus Salim', '<p>Kecanggihan teknologi memberi kemudahan bagi setiap manusia. Khususnya dalam hal penyebaran informasi. Orang dengan sangat cepat dapat bertukar pesan, bahkan dalam hitungan detik pesan sudah langsung terkirim. Apakah fenomena tersebut berpengaruh terhadap tingkat kesabaran seseorang?</p><p><br></p><p>Melatih kesabaran di masa lampau</p><p><br></p><p>Sedikit bercerita. Dulu, membutuhkan waktu sekitar satu minggu bahkan bisa lebih untuk bertukar pesan via telegram. Rasanya sudah biasa hal semacam itu di kalangan masyarakat klasik. Hari demi hari terlewati dengan rasa rindu yang semakin menggebu. Ini berlaku jika pesan tersebut ditujukan kepada orang yang spesial. Seperti halnya pasangan, orang tua, anak, kerabat, sahabat, atau teman.</p><p><br></p><p>Selain itu, pengiriman dokumen penting juga berlaku demikian. Butuh waktu cukup lama agar dokumen tersebut dapat sampai ke tujuan. Bahkan tidak jarang, ada dokumen atau surat yang rusak hingga hilang. Maklum lah, waktu itu belum ada sistem ekspedisi yang tertata seperti saat ini.</p><p><br></p><p>Tapi sekarang? Semua serba cepat. Hanya butuh hitungan detik pesan dapat terkirim. Ungkapan rindu semakin memiliki banyak variasi untuk mengeskpresikannya. Ada trouble jaringan sebentar saja, semua merasa panik seakan dunia ikut berhenti. Melihat tanda kirim pesan berbentuk jam yang artinya menunggu pesan terkirim saja rasanya sudah sukar tidak karuan. Karena terbiasa cepat, akhirnya sulit menerima keterlambatan. Hingga berujung pada sikap tidak sabaran. Saya tegaskan lagi, Apa benar semua itu berpengaruh terhadap tingkat kesabaran seseorang?</p><p><br></p><p>Budaya mengantri dapat melatih kesabaran seseorang</p><p><br></p><p>Dulu, anak-anak hingga orang dewasa memilki kebiasaan mengantri jika ingin membeli atau mendapatkan sesuatu di ruang publik. Mulai dari berdesakan hingga rela panas-panasan jika kondisinya memang demikian. Mau tidak mau, mereka harus mengantri untuk mendapatkan layanan. Meskipun demikian, namun mengantri memiliki manfaat yang cukup besar bagi kecerdasan emosional seseorang.</p><p><br></p><p>Dengan mengantri, seseorang dapat meningkatkan interaksi sosial. Karena dalam proses mengantri seseorang akan memulai percakapan dengan orang lain yang sama-sama sedang mengantri. Selain itu, mengantri juga dapat meningkatkan kesehatan mental seseorang loh. Umumnya, seseorang akan merasa puas dan bangga jika sudah menyelesaikan antrian dan mendapatkan layanan. Ini sangat bagus untuk aspek psikologis seseorang. Ia akan lebih menghargai suatu capaian karena telah melewati proses yang cukup panjang.</p><p><br></p><p><br></p><p>Langkah Konkret PT Gunbuster Nickel dalam Menjaga Semangat dan Keselamatan Kerja Karyawan</p><p>Kompasiana.com</p><p>Recommended by</p><p><br></p><p>Mengantri juga memiliki nilai kesetaraan. Tidak peduli siapa dan apa jabatannya, karena mengantri berpijak pada urutan kedatangan. Ini salah satu konsep adil. Dan yang terpenting, dengan mengantri seseorang akan terlatih untuk bersikap sabar.</p><p><br></p><p>Tapi sekarang?&nbsp;Budaya mengantri sudah mulai langka di masyarakat. Selain perilaku saling berebut antrian, ada juga faktor kecanggihan teknologi yang mulai mengurangi kegiatan mengantri di ruang publik. Misalnya, dalam proses jual beli yang sudah beralih dalam transaksi virtual. Sehingga mengurangi kerumunan dan antrian di toko, warung, hingga pasar. Tidak hanya itu, fitur layanan publik sudah beralih kepada sistem digital. Hingga tidak perlu lagi bersusah payah mengantri.</p><p><br></p><p><br></p><p><br></p><p>Konten ini telah tayang di Kompasiana.com dengan judul \"Apa Benar Kecanggihan Teknologi Membuat Orang Sulit untuk Bersabar?\", Klik untuk baca:</p><p>https://www.kompasiana.com/sitinisrofah6513/65431ea1ee794a5acf6b0b62/apa-benar-kecanggihan-teknologi-membuat-orang-sulit-untuk-bersabar</p><p><br></p><p>Kreator: Siti Nisrofah</p><p><br></p><p><br></p><p><br></p><p>Kompasiana adalah platform blog. Konten ini menjadi tanggung jawab bloger dan tidak mewakili pandangan redaksi Kompas.</p><p><br></p><p>Tulis opini Anda seputar isu terkini di Kompasiana.com</p>', '2023-11-02 12:37:31');

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
(1, 'The Ink Black Hearth', 'Robert Galbraith', 'book1.jpg', 'Buku \"Berdamai dengan Diri Sendiri\" karya Muthia Sayekti memberikan wawasan yang mendalam tentang pentingnya memelihara hubungan positif dengan diri sendiri sebagai fondasi kesehatan mental yang baik. Melalui penuturan yang hangat dan empatik, Muthia Sayekti membimbing pembaca untuk mengenal dan menerima diri sendiri, sebuah langkah krusial dalam menciptakan ketenangan batin dan mengurangi stres. Buku ini menyajikan perspektif yang menyegarkan tentang bagaimana kita dapat mengatasi kritik diri dan mengubahnya menjadi penerimaan diri, yang pada akhirnya memperkuat kesejahteraan mental kita.<br><br>Selain itu, buku ini juga menekankan pentingnya memiliki kesadaran diri dan keberanian untuk menghadapi ketakutan serta keraguan diri, aspek-aspek yang seringkali menjadi penghalang dalam mencapai kesehatan mental. Desain buku yang estetik dan susunan kata-kata yang penuh perhatian membuat pembaca merasa terhubung dan dimengerti, menciptakan ruang aman untuk refleksi diri. \"Berdamai dengan Diri Sendiri\" bukan hanya buku panduan semata, melainkan juga teman yang memberi dukungan dan kekuatan untuk siapa saja yang sedang berjuang dengan diri mereka sendiri, menjadikannya bacaan yang berharga bagi mereka yang berupaya meningkatkan kesehatan mental mereka.', '2023-11-02 13:57:43'),
(2, 'Great at Work', 'Robert Galbraith', 'book2.jpg', 'Buku \"Berdamai dengan Diri Sendiri\" karya Muthia Sayekti memberikan wawasan yang mendalam tentang pentingnya memelihara hubungan positif dengan diri sendiri sebagai fondasi kesehatan mental yang baik. Melalui penuturan yang hangat dan empatik, Muthia Sayekti membimbing pembaca untuk mengenal dan menerima diri sendiri, sebuah langkah krusial dalam menciptakan ketenangan batin dan mengurangi stres. Buku ini menyajikan perspektif yang menyegarkan tentang bagaimana kita dapat mengatasi kritik diri dan mengubahnya menjadi penerimaan diri, yang pada akhirnya memperkuat kesejahteraan mental kita.<br><br>Selain itu, buku ini juga menekankan pentingnya memiliki kesadaran diri dan keberanian untuk menghadapi ketakutan serta keraguan diri, aspek-aspek yang seringkali menjadi penghalang dalam mencapai kesehatan mental. Desain buku yang estetik dan susunan kata-kata yang penuh perhatian membuat pembaca merasa terhubung dan dimengerti, menciptakan ruang aman untuk refleksi diri. \"Berdamai dengan Diri Sendiri\" bukan hanya buku panduan semata, melainkan juga teman yang memberi dukungan dan kekuatan untuk siapa saja yang sedang berjuang dengan diri mereka sendiri, menjadikannya bacaan yang berharga bagi mereka yang berupaya meningkatkan kesehatan mental mereka.', '2023-11-02 13:57:46'),
(3, 'Melangkah', 'Robert Galbraith', 'book3.jpg', 'Buku \"Berdamai dengan Diri Sendiri\" karya Muthia Sayekti memberikan wawasan yang mendalam tentang pentingnya memelihara hubungan positif dengan diri sendiri sebagai fondasi kesehatan mental yang baik. Melalui penuturan yang hangat dan empatik, Muthia Sayekti membimbing pembaca untuk mengenal dan menerima diri sendiri, sebuah langkah krusial dalam menciptakan ketenangan batin dan mengurangi stres. Buku ini menyajikan perspektif yang menyegarkan tentang bagaimana kita dapat mengatasi kritik diri dan mengubahnya menjadi penerimaan diri, yang pada akhirnya memperkuat kesejahteraan mental kita.<br><br>Selain itu, buku ini juga menekankan pentingnya memiliki kesadaran diri dan keberanian untuk menghadapi ketakutan serta keraguan diri, aspek-aspek yang seringkali menjadi penghalang dalam mencapai kesehatan mental. Desain buku yang estetik dan susunan kata-kata yang penuh perhatian membuat pembaca merasa terhubung dan dimengerti, menciptakan ruang aman untuk refleksi diri. \"Berdamai dengan Diri Sendiri\" bukan hanya buku panduan semata, melainkan juga teman yang memberi dukungan dan kekuatan untuk siapa saja yang sedang berjuang dengan diri mereka sendiri, menjadikannya bacaan yang berharga bagi mereka yang berupaya meningkatkan kesehatan mental mereka.', '2023-11-02 13:57:46'),
(4, 'Atomic Habits', 'Robert Galbraith', 'book4.jpg', 'Buku \"Berdamai dengan Diri Sendiri\" karya Muthia Sayekti memberikan wawasan yang mendalam tentang pentingnya memelihara hubungan positif dengan diri sendiri sebagai fondasi kesehatan mental yang baik. Melalui penuturan yang hangat dan empatik, Muthia Sayekti membimbing pembaca untuk mengenal dan menerima diri sendiri, sebuah langkah krusial dalam menciptakan ketenangan batin dan mengurangi stres. Buku ini menyajikan perspektif yang menyegarkan tentang bagaimana kita dapat mengatasi kritik diri dan mengubahnya menjadi penerimaan diri, yang pada akhirnya memperkuat kesejahteraan mental kita.<br><br>Selain itu, buku ini juga menekankan pentingnya memiliki kesadaran diri dan keberanian untuk menghadapi ketakutan serta keraguan diri, aspek-aspek yang seringkali menjadi penghalang dalam mencapai kesehatan mental. Desain buku yang estetik dan susunan kata-kata yang penuh perhatian membuat pembaca merasa terhubung dan dimengerti, menciptakan ruang aman untuk refleksi diri. \"Berdamai dengan Diri Sendiri\" bukan hanya buku panduan semata, melainkan juga teman yang memberi dukungan dan kekuatan untuk siapa saja yang sedang berjuang dengan diri mereka sendiri, menjadikannya bacaan yang berharga bagi mereka yang berupaya meningkatkan kesehatan mental mereka.', '2023-11-02 13:57:47'),
(5, 'Atomic Habits3', 'Robert Galbraith3', 'book5.jpg', 'Buku \"Berdamai dengan Diri Sendiri\" karya Muthia Sayekti memberikan wawasan yang mendalam tentang pentingnya memelihara hubungan positif dengan diri sendiri sebagai fondasi kesehatan mental yang baik. Melalui penuturan yang hangat dan empatik, Muthia Sayekti membimbing pembaca untuk mengenal dan menerima diri sendiri, sebuah langkah krusial dalam menciptakan ketenangan batin dan mengurangi stres. Buku ini menyajikan perspektif yang menyegarkan tentang bagaimana kita dapat mengatasi kritik diri dan mengubahnya menjadi penerimaan diri, yang pada akhirnya memperkuat kesejahteraan mental kita.<br><br>Selain itu, buku ini juga menekankan pentingnya memiliki kesadaran diri dan keberanian untuk menghadapi ketakutan serta keraguan diri, aspek-aspek yang seringkali menjadi penghalang dalam mencapai kesehatan mental. Desain buku yang estetik dan susunan kata-kata yang penuh perhatian membuat pembaca merasa terhubung dan dimengerti, menciptakan ruang aman untuk refleksi diri. \"Berdamai dengan Diri Sendiri\" bukan hanya buku panduan semata, melainkan juga teman yang memberi dukungan dan kekuatan untuk siapa saja yang sedang berjuang dengan diri mereka sendiri, menjadikannya bacaan yang berharga bagi mereka yang berupaya meningkatkan kesehatan mental mereka.', '2023-11-02 13:57:48'),
(24, 'agus', 'salim', 'book6.jpg', 'Buku \"Berdamai dengan Diri Sendiri\" karya Muthia Sayekti memberikan wawasan yang mendalam tentang pentingnya memelihara hubungan positif dengan diri sendiri sebagai fondasi kesehatan mental yang baik. Melalui penuturan yang hangat dan empatik, Muthia Sayekti membimbing pembaca untuk mengenal dan menerima diri sendiri, sebuah langkah krusial dalam menciptakan ketenangan batin dan mengurangi stres. Buku ini menyajikan perspektif yang menyegarkan tentang bagaimana kita dapat mengatasi kritik diri dan mengubahnya menjadi penerimaan diri, yang pada akhirnya memperkuat kesejahteraan mental kita.<br><br>Selain itu, buku ini juga menekankan pentingnya memiliki kesadaran diri dan keberanian untuk menghadapi ketakutan serta keraguan diri, aspek-aspek yang seringkali menjadi penghalang dalam mencapai kesehatan mental. Desain buku yang estetik dan susunan kata-kata yang penuh perhatian membuat pembaca merasa terhubung dan dimengerti, menciptakan ruang aman untuk refleksi diri. \"Berdamai dengan Diri Sendiri\" bukan hanya buku panduan semata, melainkan juga teman yang memberi dukungan dan kekuatan untuk siapa saja yang sedang berjuang dengan diri mereka sendiri, menjadikannya bacaan yang berharga bagi mereka yang berupaya meningkatkan kesehatan mental mereka.', '2023-11-02 13:57:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id` int(11) NOT NULL,
  `id_tbl_book` int(11) NOT NULL DEFAULT 0,
  `judul_buku` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `fakultas` varchar(128) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `komentar` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id`, `id_tbl_book`, `judul_buku`, `nama`, `fakultas`, `jurusan`, `komentar`, `date_created`) VALUES
(1, 24, 'asdsa', 'Laily', 'FIP', 'Bimbingan dan Konseling', 'Buku ini benar-benar memberi dampak positif pada pandangan saya terhadap diri sendiri dan kehidupan. Penulis dengan mahir menyampaikan pesan tentang pentingnya menerima diri sendiri, lengkap dengan segala kekurangan dan ketidaksempurnaan. Gaya bahasanya yang hangat dan penuh empati membuat saya merasa seperti sedang berbicara dengan seorang teman dekat, dan desain buku yang estetik menambah kenyamanan dalam membaca. Meski topiknya cukup berat, Muthia Sayekti berhasil menyajikannya dengan cara yang mudah dicerna, membuat saya terinspirasi untuk memulai perjalanan berdamai dengan diri sendiri. Ini adalah buku yang saya rekomendasikan bagi siapa saja yang ingin memperdalam pemahaman tentang diri sendiri dan mencari kedamaian batin.', '2023-11-02 14:46:14'),
(2, 24, 'asd', 'Agus', 'Teknik', 'Sistem Informasi', 'Buku ini benar-benar memberi dampak positif pada pandangan saya terhadap diri sendiri dan kehidupan. Penulis dengan mahir menyampaikan pesan tentang pentingnya menerima diri sendiri, lengkap dengan segala kekurangan dan ketidaksempurnaan. Gaya bahasanya yang hangat dan penuh empati membuat saya merasa seperti sedang berbicara dengan seorang teman dekat, dan desain buku yang estetik menambah kenyamanan dalam membaca. Meski topiknya cukup berat, Muthia Sayekti berhasil menyajikannya dengan cara yang mudah dicerna, membuat saya terinspirasi untuk memulai perjalanan berdamai dengan diri sendiri. Ini adalah buku yang saya rekomendasikan bagi siapa saja yang ingin memperdalam pemahaman tentang diri sendiri dan mencari kedamaian batin.', '2023-11-02 14:46:13');

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
(1, 'Dr. Hetti Rahmawati, S. Psi., M.Si.', 'Psikologi / Kepala Pusat PBK3', 'Untitled_design_(3).png', '2023-10-31 12:45:03'),
(4, 'Dr. Khairul Bariyyah, S.Pd., M.Pd..Kons', 'Bimbingan dan Konseling', 'Untitled_design_(4).png', '2023-10-31 12:49:38'),
(5, 'Dr. Zamroni, s.Pd., M.Pd', 'Bimbingan dan Konseling', 'Untitled_design_(9).png', '2023-10-31 13:14:09'),
(6, 'Raissa Dwifandra Putri, S.K.M, M.Si.', 'Psikologi', 'Untitled_design_(8).png', '2023-10-31 13:03:17'),
(7, 'Laila Indra Lestari, S.Psi, M.A.', 'Psikologi', '5.png', '2023-10-31 13:09:16'),
(8, 'Dwi Nikmah Puspitasari, S.Psi., M.Psi.', 'Psikologi', '7.png', '2023-10-31 13:10:03'),
(9, 'Dewi Fatmasari Edy, S.Psi., M.A', 'Psikologi', '6.png', '2023-10-31 13:12:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kuisioner`
--

CREATE TABLE `tbl_kuisioner` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `q1` int(11) NOT NULL DEFAULT 0,
  `q2` int(11) NOT NULL DEFAULT 0,
  `q3` int(11) NOT NULL DEFAULT 0,
  `q4` int(11) NOT NULL DEFAULT 0,
  `q5` int(11) NOT NULL DEFAULT 0,
  `q6` int(11) NOT NULL DEFAULT 0,
  `q7` int(11) NOT NULL DEFAULT 0,
  `q8` int(11) NOT NULL DEFAULT 0,
  `q9` int(11) NOT NULL DEFAULT 0,
  `q10` int(11) NOT NULL DEFAULT 0,
  `q11` int(11) NOT NULL DEFAULT 0,
  `q12` int(11) NOT NULL DEFAULT 0,
  `q13` int(11) NOT NULL DEFAULT 0,
  `q14` int(11) NOT NULL DEFAULT 0,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kuisioner`
--

INSERT INTO `tbl_kuisioner` (`id`, `nama`, `email`, `tanggal_lahir`, `jenis_kelamin`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `date_created`) VALUES
(6, 'ASas', 'agung@gmail.com', '2023-10-05', 'LAKI-LAKI', 1, 1, 2, 1, 1, 1, 2, 1, 3, 2, 3, 1, 1, 1, '2023-10-31 14:31:24'),
(8, 'Bariyyah', 'bariyyah@gmail.com', '2023-11-03', 'LAKI-LAKI', 1, 2, 3, 3, 3, 2, 2, 4, 4, 6, 2, 5, 1, 3, '2023-11-02 13:16:25'),
(9, 'bariyyah', 'bariyyah@gmail.com', '2023-08-10', 'LAKI-LAKI', 1, 2, 2, 3, 3, 3, 2, 1, 1, 1, 1, 1, 1, 1, '2023-11-02 14:34:38');

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
(3, 3, 'Atomic Habits', 'Agus Salim', '567', 'Teknik', 'D3 Elektronika', 'agus@gmail.com', '087654667', '2023-10-20 01:20:06'),
(4, 4, 'Makan Bersamau', 'Agus', 'asdasd', 'asdasd', 'asdasd', 'andi@abc.co.id', 'asdasd', '2023-10-20 02:16:30'),
(5, 4, 'Makan Bersamau', 'Agus Salim', '121212121', 'Ilmu Pendidikan', 'Bimbingan dan Konseling', 'agus@gmail.com', '08778765675', '2023-10-20 02:17:23'),
(6, 4, 'Makan Bersamau', 'Budi', '324234234', 'Ilmu Pendidikan', 'Bimbingan dan Konseling', 'budi@gmail.com', '45345345', '2023-10-20 02:19:10'),
(7, 4, 'Makan Bersamau', 'sad', 'asdsadsad', 'asdsad', 'asdsad', 'agung@gmail.com', 'asdsad', '2023-10-31 12:03:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_request_buku`
--

CREATE TABLE `tbl_request_buku` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `fakultas` varchar(128) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `id_tbl_book` int(11) NOT NULL DEFAULT 0,
  `judul_buku` varchar(128) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_request_buku`
--

INSERT INTO `tbl_request_buku` (`id`, `nama`, `fakultas`, `jurusan`, `email`, `id_tbl_book`, `judul_buku`, `date_created`) VALUES
(1, 'Agus Salim', 'Teknik', 'Sistem Informasi', 'agus@gmail.com', 24, 'Belajar PHP', '2023-11-02 13:49:36'),
(2, 'Agus Salim', 'Teknik', 'Sistem Informasi', 'agus@gmail.com', 24, 'Belajar PHP', '2023-11-02 13:49:36'),
(3, 'Agus Salim', 'Teknik Industri', 'Teknik sadsad', 'agus@salim.com', 0, '', '2023-11-02 14:08:30'),
(5, 'Agus Salim', 'Teknik', 'D3 Teknik Elektronika', 'agus_salim_83@yahoo.co.id', 0, 'agus', '2023-11-02 14:23:25'),
(6, 'Agus Salim', 'Teknik', 'D3 Teknik Elektronika', 'asdsad@asdsad.com', 24, 'agus', '2023-11-02 14:23:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sesi_bibliotherapy`
--

CREATE TABLE `tbl_sesi_bibliotherapy` (
  `id` int(11) NOT NULL,
  `judul_sesi` varchar(255) NOT NULL,
  `tanggal_acara` date NOT NULL,
  `jam_acara` varchar(50) NOT NULL DEFAULT '',
  `tempat` varchar(128) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_sesi_bibliotherapy`
--

INSERT INTO `tbl_sesi_bibliotherapy` (`id`, `judul_sesi`, `tanggal_acara`, `jam_acara`, `tempat`, `cover`, `deskripsi`, `date_created`) VALUES
(3, 'Atomic Habits', '2023-10-20', '10:00 WIB', 'Ruangan Meeting FIP UM', 'book6.jpg', 'Ini merupakan sesi therapy yang akan di adakan di UM, Mengenal lebih jauh apa itu sesi bibliotherapy', '2023-10-20 00:51:53'),
(4, 'Makan Bersamau', '2023-10-26', '10:30 WIB', 'Lapangan Rektorat UM', 'book5.jpg', '<p>Ini merupakan acara kumpul makan bersama.</p><p>semua member harus hadir.</p>', '2023-10-20 01:18:53');

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
-- Indeks untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_konselor`
--
ALTER TABLE `tbl_konselor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kuisioner`
--
ALTER TABLE `tbl_kuisioner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_request_buku`
--
ALTER TABLE `tbl_request_buku`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_konselor`
--
ALTER TABLE `tbl_konselor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_kuisioner`
--
ALTER TABLE `tbl_kuisioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_request_buku`
--
ALTER TABLE `tbl_request_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_sesi_bibliotherapy`
--
ALTER TABLE `tbl_sesi_bibliotherapy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
