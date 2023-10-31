-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Okt 2023 pada 15.56
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
('1n9acgbv86kbikghglluuq22abv4j3fe', '127.0.0.1', 1698763705, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383736333730353b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('1ug2vios0b4r6ar6vv0gilqti9t9q7o6', '127.0.0.1', 1698764011, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383736343031313b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('c8emp7vhg6t9q55lsh84ohmklh60baj3', '127.0.0.1', 1698762943, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383736323934333b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('h5jho7hpo48pt7paaberl1rpgi8pps6n', '127.0.0.1', 1698763387, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383736333338373b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('l7k210ss8a6ohqmjqfo3k7ivi66ejstb', '127.0.0.1', 1698764173, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639383736343031313b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b);

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
(1, 'Self-Care untuk Mahasiswa: Jangan Lupakan Diri Sendiri!', '1.jpg', 'Admin Sienna', '<p>Halo, teman-teman mahasiswa! Kita semua tahu bahwa hidup sebagai mahasiswa bisa jadi keren, penuh petualangan, dan seru. Kehidupan mahasiswa sering kali dianggap sebagai periode yang penuh dengan kegembiraan, tantangan, dan pertumbuhan pribadi. Namun, di balik semua itu, kenyataannya bisa jadi sangat berat. Tuntutan akademik yang tinggi, tekanan sosial, dan tugas sehari-hari sering membuat mahasiswa merasa tegang, stres, bahkan terlalu terbebani. Tapi, jangan lupa satu hal penting, yaitu mengutamakan diri sendiri melalui&nbsp;<em>self-care</em>. Ini bukan soal egois atau lebay, tapi cara penting buat bikin hidup kita makin enjoy dan produktif.</p><p><em>Self-care</em>&nbsp;adalah praktik perawatan diri yang bertujuan untuk meningkatkan kesejahteraan fisik, mental, dan emosional seseorang. Ini bukanlah sesuatu yang egois atau bermaksud menghindari tanggung jawab, melainkan cara untuk memastikan bahwa kita berada dalam kondisi terbaik untuk menghadapi tugas-tugas dan tantangan yang ada di depan. Kenapa self-care begitu penting dalam kehidupan mahasiswa?</p><p><strong>1. Hidup Tanpa Stres Itu Asyik!</strong></p><p>Siapa yang suka stres? Pasti nggak ada yang suka! Tapi, sebagai mahasiswa, stres bisa nempel terus kayak lem. Mahasiswa seringkali dihadapkan pada tingkat stres yang tinggi, baik karena tenggat waktu tugas, ujian, atau tekanan sosial. Nah,&nbsp;<em>self-care</em>&nbsp;bisa jadi senjata andalan buat melawan stres. Coba deh meditasi, yoga, atau bahkan sekedar nge-relax sejenak. Ini bukan cuma buat bikin kita lebih chill, tapi juga bikin kita lebih siap ngadepin tugas-tugas berat.</p><p><strong>2. Energi dan Produktivitas Tinggi</strong></p><p>Dengan&nbsp;<em>self-care</em>, kita bisa ngejaga energi dan produktivitas kita tetap on fire! Makin produktif, kita bisa ngerjain tugas-tugas dengan lebih baik, dan nggak perlu ngerasa lelah berlebihan. Ini artinya, kita bisa lebih enjoy ngerjain proyek-proyek besar dan nggak berasa kayak zombie berjalan.</p><p><strong>3. Sayangi Badanmu!</strong></p><p>Nggak hanya otak yang perlu diurus, badan juga harus diperhatiin. Makan yang sehat dan berolahraga itu penting, guys. Badan yang sehat bisa bikin kita tetap bersemangat dan siap menghadapi segala tantangan di kampus. Jadi, jangan cuma mikirin buku doang, mikirin tubuh kita juga penting! Kesehatan fisik yang baik dapat membantumu menjaga stamina yang diperlukan untuk menjalani jadwal yang padat sebagai mahasiswa.</p><p><strong>4. Cari Keseimbangan Mental</strong></p><p>Nggak cuma badan, kesehatan mental kita juga harus dijaga.&nbsp;<em>Self-care</em>&nbsp;bisa bantu kita banget dalam hal ini. Cobain deh meditasi atau ngobrol sama teman atau konselor kalau lagi berasa down adalah bagian dari self-care yang bisa membantu mengatasi masalah mental seperti kecemasan dan depresi. Keseimbangan mental itu kunci buat menjaga kebahagiaan dan kualitas hidup kita.</p><p><strong>5. Kualitas Hidup yang Makin Oke</strong></p><p><em>Self-care</em>&nbsp;juga tentang meluangkan waktu buat ngelakuin hal-hal yang kita suka. Main-main sama teman, ngikutin hobi, atau sekedar tiduran nyaman itu penting! Kita harus bahagia dalam hidup ini, dan&nbsp;<em>self-care</em>&nbsp;bisa bantu kita mencapai itu. Merawat diri secara mental dan emosional akan membawa kebahagiaan dan meningkatkan kualitas hidupmu secara keseluruhan.</p><p><strong>6. Keterampilan Buat Masa Depan</strong></p><p>Praktik&nbsp;<em>self-care</em>&nbsp;juga mengajarkan kita manajemen waktu yang baik. Ini bukan cuma buat sekarang, tapi juga buat masa depan kita. Dengan manajemen waktu yang oke, kita bisa sukses di kampus dan juga di karier kita nanti. Ini akan membantumu mengembangkan keterampilan-keterampilan yang sangat berharga dalam mengelola kehidupanmu, yang akan berguna tidak hanya selama masa kuliah tetapi juga dalam karier dan kehidupan pribadimu setelah lulus.</p><p><strong>7. Lebih Asik dalam Hubungan</strong></p><p>Ketika kita merawat diri sendiri, kita bisa lebih baik dalam menjaga hubungan sosial kita. Kita bisa lebih baik dalam mendengarkan teman-teman, memberikan dukungan, dan menjalin hubungan yang sehat. Ini penting banget!</p><p><br></p><p>Intinya,&nbsp;<em>self-care</em>&nbsp;itu penting banget buat kita, para mahasiswa keren. Jadi, jangan ragu buat luangin waktu buat diri sendiri. Itu adalah investasi buat masa depan kita. Setiap orang berbeda, dan apa yang dibutuhkan untuk satu orang belum tentu cocok untuk orang lain. Penting juga untuk tidak merasa bersalah karena meluangkan waktu untuk diri sendiri. Merawat diri sendiri adalah investasi dalam kesejahteraan jangka panjangmu. Jadi, jangan lupa, jadi diri sendiri dan&nbsp;<em>self-care&nbsp;</em>itu adalah hal yang sangat keren!&nbsp;????????</p><p class=\"ql-align-center\"><br></p><p><br></p>', '2023-10-31 12:36:25'),
(2, 'Menghadapi Stres Mahasiswa: Menuju Keseimbangan Hidup yang Asyik', '2.jpg', 'Admin Sienna', '<p>Hai, teman-teman mahasiswa! Gimana nih kabarnya? Pasti lagi sibuk ngejar cita-cita, kan? Tapi, jangan lupakan juga bahwa hidup mahasiswa nggak selalu tentang pesta dan kebebasan. Ada satu kata yang sering mampir dalam hidup kita: STRES. Yup, ini dia, artikel populer kita tentang bagaimana menghadapi stres mahasiswa yang kadang bikin pusing kepala!</p><p>1.&nbsp;<strong>Tuntutannya Berat</strong></p><p>Penting banget buat kita, anak muda, untuk sadar kalau hidup mahasiswa bisa jadi kayak roller coaster. Tugas, ujian, dan presentasi, semuanya datang bersamaan, kayak tsunami! Jangan terlalu keras sama diri sendiri. Ingat, belajar itu perlahan-lahan, bukan sprint. Ngga perlu ngejar nilai A++ terus, yang penting paham materinya.</p><p>2.&nbsp;<strong>Pentingnya Self-Care</strong></p><p>Jangan lupakan diri sendiri dalam perjuanganmu meraih mimpi. Cobain luangkan waktu untuk diri sendiri. Jalan-jalan, nongkrong bareng teman-teman, atau bahkan bermalas-malasan sambil nonton Netflix bisa jadi obat mujarab. Yang penting, jangan biarkan hidup hanya tentang kuliah dan tugas!</p><p>3.&nbsp;<strong>Cari Teman Curhat</strong></p><p>Punya teman yang bisa diandalkan untuk diajak ngobrol tentang stres itu penting banget. Ketika merasa tertekan, teman-teman bisa jadi tempat yang nyaman untuk curhat. Dengerin juga masalah mereka, kadang sharing itu bikin pikiran kita lebih ringan.</p><p>4.&nbsp;<strong>Manajemen Waktu yang Bijak</strong></p><p>Manajemen waktu adalah kunci sukses dalam menghadapi stres. Bikin jadwal yang baik, sisihkan waktu untuk belajar, tidur yang cukup, dan jangan lupa waktu untuk bersenang-senang. Kalau kita bisa mengatur waktu dengan baik, hidup jadi lebih terstruktur dan stres pun bisa teratasi.</p><p>5.&nbsp;<strong>Berbicara dengan Dosen atau Konselor</strong></p><p>Kalau stresnya udah berat banget dan merasa nggak bisa lagi ditangani sendiri, jangan ragu buat cari bantuan. Dosen atau konselor kampus biasanya ada untuk membantu kita. Mereka bisa memberikan saran atau bimbingan yang kita butuhkan.</p><p>6.&nbsp;<strong>Jangan Terlalu Sosial Media-an</strong></p><p>Sosial media itu bisa jadi teman atau musuh dalam menghadapi stres. Jangan terlalu fokus sama dunia maya dan bandingin hidup kita sama orang lain. Kita punya perjalanan kita sendiri, yang penting adalah berkembang seiring waktu.</p><p>7.&nbsp;<strong>Istirahat yang Cukup</strong></p><p>Tidur adalah obat mujarab untuk stres. Pastikan kita tidur yang cukup, minimal 7-8 jam sehari. Ketika tidur, otak kita bisa istirahat dan memproses segala informasi yang kita dapatkan sepanjang hari.</p><p>8.&nbsp;<strong>Mengenali Tanda-tanda Stres</strong></p><p>Penting banget buat kita kenali tanda-tanda stres pada diri kita sendiri. Apakah mulai sering marah-marah, kesulitan tidur, atau merasa cemas? Kalau iya, jangan abaikan itu. Segera ambil tindakan untuk mengatasinya.</p><p>Jadi, teman-teman, stres mahasiswa emang gak bisa dihindari sepenuhnya, tapi kita bisa menghadapinya dengan lebih baik. Ingat, hidup ini tentang perjalanan, bukan hanya tujuan. Jadi nikmatin setiap momen, jangan lupa tersenyum, dan selalu berusaha yang terbaik! You got this!&nbsp;????????</p><p><br></p>', '2023-10-31 12:34:54'),
(3, 'Jaga Jiwamu: Petualangan Bersama Literasi Kesehatan Mental', '01.png', 'Admin Sienna', '<p>Kesehatan mental bukan lagi hal yang tabu untuk dibicarakan, terutama di kalangan anak muda. Hari ini, kita akan menjelajahi dunia literasi kesehatan mental dan mengapa hal ini sangat penting untuk generasi kita.</p><p><strong>Apa Itu Li</strong></p><p>Kesehatan mental bukan lagi hal yang tabu untuk dibicarakan, terutama di kalangan anak muda. Hari ini, kita akan menjelajahi dunia literasi kesehatan mental dan mengapa hal ini sangat penting untuk generasi kita.</p><p><strong>Apa Itu Li</strong></p><p>Kesehatan mental bukan lagi hal yang tabu untuk dibicarakan, terutama di kalangan anak muda. Hari ini, kita akan menjelajahi dunia literasi kesehatan mental dan mengapa hal ini sangat penting untuk generasi kita.</p><p><strong>Apa Itu Li</strong></p><p>Kesehatan mental bukan lagi hal yang tabu untuk dibicarakan, terutama di kalangan anak muda. Hari ini, kita akan menjelajahi dunia literasi kesehatan mental dan mengapa hal ini sangat penting untuk generasi kita.</p><p><strong>Apa Itu Li</strong></p><p>Kesehatan mental bukan lagi hal yang tabu untuk dibicarakan, terutama di kalangan anak muda. Hari ini, kita akan menjelajahi dunia literasi kesehatan mental dan mengapa hal ini sangat penting untuk generasi kita.</p><p><strong>Apa Itu Li</strong>Kesehatan mental bukan lagi hal yang tabu untuk dibicarakan, terutama di kalangan anak muda. Hari ini, kita akan menjelajahi dunia literasi kesehatan mental dan mengapa hal ini sangat penting untuk generasi kita.</p><p><strong>Apa Itu Li</strong>Kesehatan mental bukan lagi hal yang tabu untuk dibicarakan, terutama di kalangan anak muda. Hari ini, kita akan menjelajahi dunia literasi kesehatan mental dan mengapa hal ini sangat penting untuk generasi kita.</p><p><strong>Apa Itu Li</strong>Kesehatan mental bukan lagi hal yang tabu untuk dibicarakan, terutama di kalangan anak muda. Hari ini, kita akan menjelajahi dunia literasi kesehatan mental dan mengapa hal ini sangat penting untuk generasi kita.</p><p><strong>Apa Itu Li</strong></p>', '2023-10-31 12:33:06');

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
(6, 'ASas', 'agung@gmail.com', '2023-10-05', 'LAKI-LAKI', 1, 1, 2, 1, 1, 1, 2, 1, 3, 2, 3, 1, 1, 1, '2023-10-31 14:31:24');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_kuisioner`
--
ALTER TABLE `tbl_kuisioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_sesi_bibliotherapy`
--
ALTER TABLE `tbl_sesi_bibliotherapy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
