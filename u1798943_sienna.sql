-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 04:20 AM
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
('20qnom51cjt6n86ja9jkbd2i7dvk4ghb', '127.0.0.1', 1697749157, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734393135373b),
('314hgkrrjrqkk81n757vr6fcdl0f5ors', '127.0.0.1', 1696956272, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935363237323b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('56frk2k6jfuk5pdbl0g5ub9f6aet6f6f', '127.0.0.1', 1697765370, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373736353337303b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('5j7f621g1204cc94sfvml73ej1vk2i91', '127.0.0.1', 1696953361, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935333336313b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('66n6glu3g7qs0duvufcm3ecbaedfdbb2', '127.0.0.1', 1696954199, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935343139393b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('6eplallf9r6ni9uhua06869bi9d1uelh', '127.0.0.1', 1696951890, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935313839303b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('6ii2qfepsbninua2g9f07vb396ajoh0n', '127.0.0.1', 1697748813, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734383831333b),
('7n4gvf14vu1rrr3998u8l9qn2u2q05rg', '127.0.0.1', 1697750768, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373735303736383b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('7utsoh5omk4lcctbqk5bumv9fd7qik0g', '127.0.0.1', 1696950711, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935303731313b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('86u7soqu5f53hpbkphge5ml4eg966k3a', '127.0.0.1', 1697766612, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373736363631323b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('8gr9gj2v61b41heuv0b66ptqpa9ematb', '127.0.0.1', 1697745709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734353730393b),
('9ajmsns8l8evh4apksg1hmb4ru6ctuv9', '127.0.0.1', 1697762181, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373736323138313b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('9bi0807brgo6qad59flpc9hmsaokoim8', '127.0.0.1', 1697765673, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373736353637333b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('a87vtb86cu196a5j6q2uu4bpckpu37qc', '127.0.0.1', 1697748156, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734383135363b),
('ba97n7svr0dns3q0t92j196vpp9h84f8', '127.0.0.1', 1696953886, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935333838363b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('bmkd52kabnbv709dkqir72uj6iprm2lg', '127.0.0.1', 1697747105, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734373130353b),
('df5v29kmlg2vt23g6e8b3dnek20ankh0', '127.0.0.1', 1697765988, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373736353938383b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('dqq2a821u0v09rjclghvdv21vrpmudkk', '127.0.0.1', 1697746073, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734363037333b),
('dt4qol9jmomrrn6dml5f47f39tfm502q', '127.0.0.1', 1696955962, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935353936323b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('eja98g4q5bbolhrknnmokrc3dvtkr4ug', '127.0.0.1', 1697768067, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373736383036373b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('ek3ii7e4u3rc2fdc16et1j1r5dqpp5f9', '127.0.0.1', 1697768350, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373736383036373b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('et1r6ndmci3nidksmt3lpn5a8i6n65l3', '127.0.0.1', 1697764814, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373736343831343b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('ffbp5r7cc06e14eerkp17523ltj2uous', '127.0.0.1', 1696955649, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935353634393b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('g16icraa94ibudv1j39rv6sd5grgm1cg', '127.0.0.1', 1696982683, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363938323638333b),
('h0h805dcptaddt9iq61euki2hjd6d25t', '127.0.0.1', 1696954517, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935343531373b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('ibkvmp1s99jdcikuam9rk3ppaphgcuhb', '127.0.0.1', 1697751410, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373735313431303b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('ith94o5ki5ahbt310th083hkko7jpslf', '127.0.0.1', 1697768151, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373736383135313b),
('iu8enf3kmbor76r6l8jiugbpcptja832', '127.0.0.1', 1696954838, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935343833383b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('k4ac0noue82lscrtl1rq003dteqeprhi', '127.0.0.1', 1696956576, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935363537363b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('k60skv0i3hn4k4bnepsclpk3rgonko32', '127.0.0.1', 1697747838, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734373833383b),
('k8qi33ob5a5kjvshmmnj754smstdv142', '127.0.0.1', 1697746448, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734363434383b),
('l4hucepillo33opnl3hd1115v6p8sf0j', '127.0.0.1', 1697764070, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373736343037303b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('m348j9pn7fju0h805tvqsv7l6pfqph0g', '127.0.0.1', 1697751410, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373735313431303b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('magvjtcju82nd0m6753f55tlsn57um6d', '127.0.0.1', 1697763268, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373736333236383b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('nedlf7259etaf8m2rmb5q6huftd7kg9g', '127.0.0.1', 1697746754, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734363735343b),
('o1jn864n2jjdvcj6mnv8no8nef9mqgkl', '127.0.0.1', 1696951088, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935313038383b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('o2817blgtrivgvikik8d16j9jm3rgjnl', '127.0.0.1', 1697762482, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373736323438323b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('o6fig6qebr08u0j4a62cv9qrgjgvrlfe', '127.0.0.1', 1697749490, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734393439303b),
('oodih25irgumnlmgutht6i8073p8pihq', '127.0.0.1', 1697745378, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734353337383b),
('org4dq4ssqsg37480o416fvg1tiuouib', '127.0.0.1', 1697764430, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373736343433303b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('plnprd85nc43oak6fanea02331gj74p6', '127.0.0.1', 1697749943, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734393934333b),
('rg9n8n335rnclelnnprjboq6kjejn814', '127.0.0.1', 1697745001, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734353030313b),
('rhnn9i71t7cpgn0nkgvc7c50uu22noue', '127.0.0.1', 1696952199, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639363935323139393b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('sc7qrd98i8o241i5fdqco40e762uu10o', '127.0.0.1', 1697747410, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734373431303b),
('ssn1adqks4lfgigm608sdgu8gu2g7jvu', '127.0.0.1', 1697761821, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373736313832313b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('tcp2171g6ul2uvtn7kobea0perc5qip4', '127.0.0.1', 1697750444, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373735303434343b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('u53f6ffriaeq3drbds648db7f2oql3tt', '127.0.0.1', 1697748458, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734383435383b),
('v8b0urc2tculg9sc4cgcdvout24tl6h4', '127.0.0.1', 1697746607, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734363630373b),
('vntko91upbd9183k8gt43smmi8gdfddm', '127.0.0.1', 1697763639, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373736333633393b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6e616d617c733a31303a22416775732053616c696d223b6e6f5f68707c733a393a22303839383938393839223b6c6576656c7c733a353a2261646d696e223b69647c733a313a2231223b),
('vqtemah0mivgph77n9rtuqhqp085ggdi', '127.0.0.1', 1697744634, 0x5f5f63695f6c6173745f726567656e65726174657c693a313639373734343633343b);

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
(2, 'Great at Work', 'Robert Galbraith', 'book2.jpg', 'Ini Deskripsi', '2023-10-19 21:00:28'),
(3, 'Melangkah', 'Robert Galbraith', 'book3.jpg', 'Ini Deskripsi', '2023-10-04 20:01:20'),
(4, 'Atomic Habits', 'Robert Galbraith', 'book4.jpg', 'Ini Deskripsi', '2023-10-04 20:01:24'),
(5, 'Atomic Habits3', 'Robert Galbraith3', 'book5.jpg', 'Ini Deskripsi3', '2023-10-19 21:00:40'),
(24, 'agus', 'salim', 'book6.jpg', '<p>asdasdasd123</p>', '2023-10-19 21:00:48');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peserta`
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
-- Dumping data for table `tbl_peserta`
--

INSERT INTO `tbl_peserta` (`id`, `id_tbl_sesi_bibliotherapy`, `judul_sesi`, `nama`, `nik`, `fakultas`, `jurusan`, `email`, `handphone`, `date_created`) VALUES
(3, 3, 'Atomic Habits', 'Agus Salim', '567', 'Teknik', 'D3 Elektronika', 'agus@gmail.com', '087654667', '2023-10-20 01:20:06'),
(4, 4, 'Makan Bersamau', 'Agus', 'asdasd', 'asdasd', 'asdasd', 'andi@abc.co.id', 'asdasd', '2023-10-20 02:16:30'),
(5, 4, 'Makan Bersamau', 'Agus Salim', '121212121', 'Ilmu Pendidikan', 'Bimbingan dan Konseling', 'agus@gmail.com', '08778765675', '2023-10-20 02:17:23'),
(6, 4, 'Makan Bersamau', 'Budi', '324234234', 'Ilmu Pendidikan', 'Bimbingan dan Konseling', 'budi@gmail.com', '45345345', '2023-10-20 02:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sesi_bibliotherapy`
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
-- Dumping data for table `tbl_sesi_bibliotherapy`
--

INSERT INTO `tbl_sesi_bibliotherapy` (`id`, `judul_sesi`, `tanggal_acara`, `jam_acara`, `tempat`, `cover`, `deskripsi`, `date_created`) VALUES
(3, 'Atomic Habits', '2023-10-20', '10:00 WIB', 'Ruangan Meeting FIP UM', 'book6.jpg', 'Ini merupakan sesi therapy yang akan di adakan di UM, Mengenal lebih jauh apa itu sesi bibliotherapy', '2023-10-20 00:51:53'),
(4, 'Makan Bersamau', '2023-10-26', '10:30 WIB', 'Lapangan Rektorat UM', 'book5.jpg', '<p>Ini merupakan acara kumpul makan bersama.</p><p>semua member harus hadir.</p>', '2023-10-20 01:18:53');

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
-- Indexes for table `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sesi_bibliotherapy`
--
ALTER TABLE `tbl_sesi_bibliotherapy`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_sesi_bibliotherapy`
--
ALTER TABLE `tbl_sesi_bibliotherapy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
