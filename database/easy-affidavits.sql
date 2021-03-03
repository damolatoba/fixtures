-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 05:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easy-affidavits`
--

-- --------------------------------------------------------

--
-- Table structure for table `affidavits`
--

CREATE TABLE `affidavits` (
  `id` bigint(225) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `status` int(10) NOT NULL,
  `category_id` int(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `affidavits`
--

INSERT INTO `affidavits` (`id`, `name`, `description`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(7, 'stage check', 'description', 0, 2, '2020-08-19 01:10:23', '2020-08-19 01:10:23'),
(8, 'check two na him edit', 'description', 0, 2, '2020-08-19 01:14:03', '2020-08-19 01:14:03'),
(9, 'check two na him edit', 'description', 0, 2, '2020-08-19 01:31:44', '2020-08-19 01:31:44'),
(10, 'late check', 'description', 0, 1, '2020-08-19 01:34:04', '2020-08-19 01:34:04'),
(11, 'stage check', 'description', 0, 2, '2020-08-19 01:34:58', '2020-08-19 01:34:58'),
(12, 'check two na him edit', 'description', 0, 1, '2020-08-19 01:37:57', '2020-08-19 01:37:57'),
(13, 'check two na him edit', 'description', 0, 1, '2020-08-19 01:44:44', '2020-08-19 01:44:44'),
(14, 'check two na him edit', 'description', 0, 1, '2020-08-19 02:03:00', '2020-08-19 02:03:00'),
(15, 'check two na him edit', 'description', 0, 1, '2020-08-19 02:33:19', '2020-08-19 02:33:19'),
(16, 'stage check', 'description', 0, 1, '2020-08-19 03:21:48', '2020-08-19 03:21:48'),
(17, 'stage check', 'description', 0, 3, '2020-08-19 03:23:36', '2020-08-19 03:23:36'),
(18, 'the tag check edit', 'description', 0, 3, '2020-08-19 03:27:06', '2020-08-19 03:27:06'),
(19, 'late check', 'description', 0, 3, '2020-08-19 03:59:53', '2020-08-19 03:59:53'),
(20, 'late check', 'description', 0, 3, '2020-08-19 06:21:40', '2020-08-19 06:21:40'),
(21, 'vg4v5tv5', 'description', 0, 1, '2020-08-19 06:26:03', '2020-08-19 06:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `affidavit_category`
--

CREATE TABLE `affidavit_category` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `affidavit_category`
--

INSERT INTO `affidavit_category` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Personal', 'description', '2020-08-15 05:30:42', '2020-08-15 05:30:42'),
(2, 'Report', 'description', '2020-08-15 05:31:43', '2020-08-15 05:31:43'),
(3, 'late check', 'description', '2020-08-19 03:22:52', '2020-08-19 03:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `affidavit_formpair`
--

CREATE TABLE `affidavit_formpair` (
  `id` int(100) NOT NULL,
  `affidavit_id` int(100) NOT NULL,
  `form_id` bigint(225) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `affidavit_formpair`
--

INSERT INTO `affidavit_formpair` (`id`, `affidavit_id`, `form_id`, `created_at`, `updated_at`) VALUES
(1, 15, 2, '2020-08-19 03:19:25', '2020-08-19 03:19:25'),
(2, 15, 3, '2020-08-19 03:21:29', '2020-08-19 03:21:29'),
(3, 16, 4, '2020-08-19 03:22:01', '2020-08-19 03:22:01'),
(4, 17, 5, '2020-08-19 03:23:49', '2020-08-19 03:23:49'),
(5, 18, 6, '2020-08-19 03:34:43', '2020-08-19 03:34:43'),
(6, 18, 7, '2020-08-19 03:53:21', '2020-08-19 03:53:21'),
(7, 20, 8, '2020-08-19 06:22:10', '2020-08-19 06:22:10'),
(8, 21, 9, '2020-08-19 06:26:15', '2020-08-19 06:26:15');

-- --------------------------------------------------------

--
-- Table structure for table `affidavit_forms`
--

CREATE TABLE `affidavit_forms` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `affidavit_forms`
--

INSERT INTO `affidavit_forms` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'vsdfrvasgetvge', 'dvsf grrgrsegverse', '2020-08-19 03:19:25', '2020-08-19 03:19:25'),
(3, 'gervget55tvw gererer4v4v', 'wwct55tv5353t53v5', '2020-08-19 03:21:29', '2020-08-19 03:21:29'),
(4, 'gvggeerev455', 'h 6664g6yy6', '2020-08-19 03:22:01', '2020-08-19 03:22:01'),
(5, 'stage check4r4c', 'ex2er2x', '2020-08-19 03:23:49', '2020-08-19 03:23:49'),
(6, 'stage check', 'cffeedewefvgwt5t', '2020-08-19 03:34:43', '2020-08-19 03:34:43'),
(7, 'tvrtferegfdgffgdfdf', 'xvsfgrsgrdsf', '2020-08-19 03:53:21', '2020-08-19 03:53:21'),
(8, 'h8ii8givt77kit7tt', 'vykykvuyuuk7ryjrcu6', '2020-08-19 06:22:10', '2020-08-19 06:22:10'),
(9, 'hbrrbyrythryhryrhyh', 'evtervyrrtbyryhytyyjt', '2020-08-19 06:26:15', '2020-08-19 06:26:15');

-- --------------------------------------------------------

--
-- Table structure for table `courts`
--

CREATE TABLE `courts` (
  `id` int(100) NOT NULL,
  `state_id` int(100) NOT NULL,
  `lga_id` int(100) NOT NULL,
  `court_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `field_options`
--

CREATE TABLE `field_options` (
  `id` bigint(255) NOT NULL,
  `field_id` bigint(225) NOT NULL,
  `options` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `form_fields`
--

CREATE TABLE `form_fields` (
  `id` bigint(255) NOT NULL,
  `question` text NOT NULL,
  `field_type` int(10) NOT NULL,
  `form_id` int(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lga`
--

CREATE TABLE `lga` (
  `id` int(100) NOT NULL,
  `state_id` int(100) NOT NULL,
  `lga_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lga`
--

INSERT INTO `lga` (`id`, `state_id`, `lga_name`) VALUES
(1, 29, 'Aba North'),
(2, 29, 'Aba South'),
(3, 29, 'Arochukwu'),
(4, 29, 'Bende'),
(5, 29, 'Ikawuno'),
(6, 29, 'Ikwuano'),
(7, 29, 'Isiala-Ngwa North'),
(8, 29, 'Isiala-Ngwa South'),
(9, 29, 'Isuikwuato'),
(10, 29, 'Umu Nneochi'),
(11, 29, 'Obi Ngwa'),
(12, 29, 'Obioma Ngwa'),
(13, 29, 'Ohafia'),
(14, 29, 'Ohaozara'),
(15, 29, 'Osisioma'),
(16, 29, 'Ugwunagbo'),
(17, 29, 'Ukwa West'),
(18, 29, 'Ukwa East'),
(19, 29, 'Umuahia North'),
(20, 29, 'Umuahia South'),
(21, 30, 'Demsa'),
(22, 30, 'Fufore'),
(23, 30, 'Ganye'),
(24, 30, 'Girei'),
(25, 30, 'Gombi'),
(26, 30, 'Guyuk'),
(27, 30, 'Hong'),
(28, 30, 'Jada'),
(29, 30, 'Lamurde'),
(30, 30, 'Madagali'),
(31, 30, 'Maiha'),
(32, 30, 'Mayo-Belwa'),
(33, 30, 'Michika'),
(34, 30, 'Mubi-North'),
(35, 30, 'Mubi-South'),
(36, 30, 'Numan'),
(37, 30, 'Shelleng'),
(38, 30, 'Song'),
(39, 30, 'Toungo'),
(40, 30, 'Yola North'),
(41, 30, 'Yola South'),
(42, 31, 'Abak'),
(43, 31, 'Eastern-Obolo'),
(44, 31, 'Eket'),
(45, 31, 'Esit-Eket'),
(46, 31, 'Essien-Udim'),
(47, 31, 'Etim-Ekpo'),
(48, 31, 'Etinan'),
(49, 31, 'Ibeno'),
(50, 31, 'Ibesikpo-Asutan'),
(51, 31, 'Ibiono-Ibom'),
(52, 31, 'Ika'),
(53, 31, 'Ikono'),
(54, 31, 'Ikot-Abasi'),
(55, 31, 'Ikot-Ekpene'),
(56, 31, 'Ini'),
(57, 31, 'Itu'),
(58, 31, 'Mbo'),
(59, 31, 'Mkpat-Enin'),
(60, 31, 'Nsit-Atai'),
(61, 31, 'Nsit-Ibom'),
(62, 31, 'Nsit-Ubium'),
(63, 31, 'Obot-Akara'),
(64, 31, 'Okobo'),
(65, 31, 'Onna'),
(66, 31, 'Oron'),
(67, 31, 'Oruk Anam'),
(68, 31, 'Udung-Uko'),
(69, 31, 'Ukanafun'),
(70, 31, 'Urue-Offong/Oruko'),
(71, 31, 'Uruan'),
(72, 31, 'Uyo'),
(73, 32, 'Aguata'),
(74, 32, 'Anambra East'),
(75, 32, 'Anambra West'),
(76, 32, 'Anaocha'),
(77, 32, 'Awka North'),
(78, 32, 'Awka South'),
(79, 32, 'Ayamelum'),
(80, 32, 'Dunukofia'),
(81, 32, 'Ekwusigo'),
(82, 32, 'Idemili-North'),
(83, 32, 'Idemili-South'),
(84, 32, 'Ihiala'),
(85, 32, 'Njikoka'),
(86, 32, 'Nnewi-North'),
(87, 32, 'Nnewi-South'),
(88, 32, 'Ogbaru'),
(89, 32, 'Onitsha-North'),
(90, 32, 'Onitsha-South'),
(91, 32, 'Orumba-North'),
(92, 32, 'Orumba-South'),
(93, 33, 'Alkaleri'),
(94, 33, 'Bauchi'),
(95, 33, 'Bogoro'),
(96, 33, 'Damban'),
(97, 33, 'Darazo'),
(98, 33, 'Dass'),
(99, 33, 'Gamawa'),
(100, 33, 'Ganjuwa'),
(101, 33, 'Giade'),
(102, 33, 'ItasGadau'),
(103, 33, 'Jama\'Are'),
(104, 33, 'Katagum'),
(105, 33, 'Kirfi'),
(106, 33, 'Misau'),
(107, 33, 'Ningi'),
(108, 33, 'Shira'),
(109, 33, 'Tafawa-Balewa'),
(110, 33, 'Toro'),
(111, 33, 'Warji'),
(112, 33, 'Zaki'),
(113, 35, 'Ado'),
(114, 35, 'Agatu'),
(115, 35, 'Apa'),
(116, 35, 'Buruku'),
(117, 35, 'Gboko'),
(118, 35, 'Guma'),
(119, 35, 'Gwer-East'),
(120, 35, 'Gwer-West'),
(121, 35, 'Katsina-Ala'),
(122, 35, 'Konshisha'),
(123, 35, 'Kwande'),
(124, 35, 'Logo'),
(125, 35, 'Makurdi'),
(126, 35, 'Ogbadibo'),
(127, 35, 'Ohimini'),
(128, 35, 'Oju'),
(129, 35, 'Okpokwu'),
(130, 35, 'Otukpo'),
(131, 35, 'Tarka'),
(132, 35, 'Ukum'),
(133, 35, 'Ushongo'),
(134, 35, 'Vandeikya'),
(135, 36, 'Abadam'),
(136, 36, 'Askira-Uba'),
(137, 36, 'Bama'),
(138, 36, 'Bayo'),
(139, 36, 'Biu'),
(140, 36, 'Chibok'),
(141, 36, 'Damboa'),
(142, 36, 'Dikwa'),
(143, 36, 'Gubio'),
(144, 36, 'Guzamala'),
(145, 36, 'Gwoza'),
(146, 36, 'Hawul'),
(147, 36, 'Jere'),
(148, 36, 'Kaga'),
(149, 36, 'KalaBalge'),
(150, 36, 'Konduga'),
(151, 36, 'Kukawa'),
(152, 36, 'Kwaya-Kusar'),
(153, 36, 'Mafa'),
(154, 36, 'Magumeri'),
(155, 36, 'Maiduguri'),
(156, 36, 'Marte'),
(157, 36, 'Mobbar'),
(158, 36, 'Monguno'),
(159, 36, 'Ngala'),
(160, 36, 'Nganzai'),
(161, 36, 'Shani'),
(162, 34, 'Brass'),
(163, 34, 'Ekeremor'),
(164, 34, 'KolokumaOpokuma'),
(165, 34, 'Nembe'),
(166, 34, 'Ogbia'),
(167, 34, 'Sagbama'),
(168, 34, 'Southern-Ijaw'),
(169, 34, 'Yenagoa'),
(170, 37, 'Abi'),
(171, 37, 'Akamkpa'),
(172, 37, 'Akpabuyo'),
(173, 37, 'Bakassi'),
(174, 37, 'Bekwarra'),
(175, 37, 'Biase'),
(176, 37, 'Boki'),
(177, 37, 'Calabar-Municipal'),
(178, 37, 'Calabar-South'),
(179, 37, 'Etung'),
(180, 37, 'Ikom'),
(181, 37, 'Obanliku'),
(182, 37, 'Obubra'),
(183, 37, 'Obudu'),
(184, 37, 'Odukpani'),
(185, 37, 'Ogoja'),
(186, 37, 'Yakurr'),
(187, 37, 'Yala'),
(188, 38, 'Aniocha North'),
(189, 38, 'Aniocha-North'),
(190, 38, 'Aniocha-South'),
(191, 38, 'Bomadi'),
(192, 38, 'Burutu'),
(193, 38, 'Ethiope-East'),
(194, 38, 'Ethiope-West'),
(195, 38, 'Ika-North-East'),
(196, 38, 'Ika-South'),
(197, 38, 'Isoko-North'),
(198, 38, 'Isoko-South'),
(199, 38, 'Ndokwa-East'),
(200, 38, 'Ndokwa-West'),
(201, 38, 'Okpe'),
(202, 38, 'Oshimili-North'),
(203, 38, 'Oshimili-South'),
(204, 38, 'Patani'),
(205, 38, 'Sapele'),
(206, 38, 'Udu'),
(207, 38, 'Ughelli-North'),
(208, 38, 'Ughelli-South'),
(209, 38, 'Ukwuani'),
(210, 38, 'Uvwie'),
(211, 38, 'Warri South-West'),
(212, 38, 'Warri North'),
(213, 38, 'Warri South'),
(214, 39, 'Abakaliki'),
(215, 39, 'Afikpo-North'),
(216, 39, 'Afikpo South (Edda)'),
(217, 39, 'Ebonyi'),
(218, 39, 'Ezza-North'),
(219, 39, 'Ezza-South'),
(220, 39, 'Ikwo'),
(221, 39, 'Ishielu'),
(222, 39, 'Ivo'),
(223, 39, 'Izzi'),
(224, 39, 'Ohaukwu'),
(225, 39, 'Onicha'),
(226, 40, 'Akoko Edo'),
(227, 40, 'Egor'),
(228, 40, 'Esan-Central'),
(229, 40, 'Esan-North-East'),
(230, 40, 'Esan-South-East'),
(231, 40, 'Esan-West'),
(232, 40, 'Etsako-Central'),
(233, 40, 'Etsako-East'),
(234, 40, 'Etsako-West'),
(235, 40, 'Igueben'),
(236, 40, 'Ikpoba-Okha'),
(237, 40, 'Oredo'),
(238, 40, 'Orhionmwon'),
(239, 40, 'Ovia-North-East'),
(240, 40, 'Ovia-South-West'),
(241, 40, 'Owan East'),
(242, 40, 'Owan-West'),
(243, 40, 'Uhunmwonde'),
(244, 41, 'Ado-Ekiti'),
(245, 41, 'Efon'),
(246, 41, 'Ekiti-East'),
(247, 41, 'Ekiti-South-West'),
(248, 41, 'Ekiti-West'),
(249, 41, 'Emure'),
(250, 41, 'Gbonyin'),
(251, 41, 'Ido-Osi'),
(252, 41, 'Ijero'),
(253, 41, 'Ikere'),
(254, 41, 'Ikole'),
(255, 41, 'Ilejemeje'),
(256, 41, 'IrepodunIfelodun'),
(257, 41, 'Ise-Orun'),
(258, 41, 'Moba'),
(259, 41, 'Oye'),
(260, 42, 'Aninri'),
(261, 42, 'Awgu'),
(262, 42, 'Enugu-East'),
(263, 42, 'Enugu-North'),
(264, 42, 'Enugu-South'),
(265, 42, 'Ezeagu'),
(266, 42, 'Igbo-Etiti'),
(267, 42, 'Igbo-Eze-North'),
(268, 42, 'Igbo-Eze-South'),
(269, 42, 'Isi-Uzo'),
(270, 42, 'Nkanu-East'),
(271, 42, 'Nkanu-West'),
(272, 42, 'Nsukka'),
(273, 42, 'Oji-River'),
(274, 42, 'Udenu'),
(275, 42, 'Udi'),
(276, 42, 'Uzo-Uwani'),
(277, 43, 'Abuja'),
(278, 43, 'Kwali'),
(279, 43, 'Kuje'),
(280, 43, 'Gwagwalada'),
(281, 43, 'Bwari'),
(282, 43, 'Abaji'),
(283, 44, 'Akko'),
(284, 44, 'Balanga'),
(285, 44, 'Billiri'),
(286, 44, 'Dukku'),
(287, 44, 'Funakaye'),
(288, 44, 'Gombe'),
(289, 44, 'Kaltungo'),
(290, 44, 'Kwami'),
(291, 44, 'Nafada'),
(292, 44, 'Shongom'),
(293, 44, 'YamaltuDeba'),
(294, 45, 'Aboh-Mbaise'),
(295, 45, 'Ahiazu-Mbaise'),
(296, 45, 'Ehime-Mbano'),
(297, 45, 'Ezinihitte'),
(298, 45, 'Ideato-North'),
(299, 45, 'Ideato-South'),
(300, 45, 'IhitteUboma'),
(301, 45, 'Ikeduru'),
(302, 45, 'Isiala-Mbano'),
(303, 45, 'Isu'),
(304, 45, 'Mbaitoli'),
(305, 45, 'Ngor-Okpala'),
(306, 45, 'Njaba'),
(307, 45, 'Nkwerre'),
(308, 45, 'Nwangele'),
(309, 45, 'Obowo'),
(310, 45, 'Oguta'),
(311, 45, 'Ohaji-Egbema'),
(312, 45, 'Okigwe'),
(313, 45, 'Onuimo'),
(314, 45, 'Orlu'),
(315, 45, 'Orsu'),
(316, 45, 'Oru-East'),
(317, 45, 'Oru-West'),
(318, 45, 'Owerri-Municipal'),
(319, 45, 'Owerri-North'),
(320, 45, 'Owerri-West'),
(321, 46, 'Auyo'),
(322, 46, 'Babura'),
(323, 46, 'Biriniwa'),
(324, 46, 'Birnin-Kudu'),
(325, 46, 'Buji'),
(326, 46, 'Dutse'),
(327, 46, 'Gagarawa'),
(328, 46, 'Garki'),
(329, 46, 'Gumel'),
(330, 46, 'Guri'),
(331, 46, 'Gwaram'),
(332, 46, 'Gwiwa'),
(333, 46, 'Hadejia'),
(334, 46, 'Jahun'),
(335, 46, 'Kafin-Hausa'),
(336, 46, 'Kaugama'),
(337, 46, 'Kazaure'),
(338, 46, 'Kiri kasama'),
(339, 46, 'Maigatari'),
(340, 46, 'Malam Madori'),
(341, 46, 'Miga'),
(342, 46, 'Ringim'),
(343, 46, 'Roni'),
(344, 46, 'Sule-Tankarkar'),
(345, 46, 'Taura'),
(346, 46, 'Yankwashi'),
(347, 47, 'Birnin-Gwari'),
(348, 47, 'Chikun'),
(349, 47, 'Giwa'),
(350, 47, 'Igabi'),
(351, 47, 'Ikara'),
(352, 47, 'Jaba'),
(353, 47, 'Jema\'A'),
(354, 47, 'Kachia'),
(355, 47, 'Kaduna-North'),
(356, 47, 'Kaduna-South'),
(357, 47, 'Kagarko'),
(358, 47, 'Kajuru'),
(359, 47, 'Kaura'),
(360, 47, 'Kauru'),
(361, 47, 'Kubau'),
(362, 47, 'Kudan'),
(363, 47, 'Lere'),
(364, 47, 'Makarfi'),
(365, 47, 'Sabon-Gari'),
(366, 47, 'Sanga'),
(367, 47, 'Soba'),
(368, 47, 'Zangon-Kataf'),
(369, 47, 'Zaria'),
(370, 48, 'Ajingi'),
(371, 48, 'Albasu'),
(372, 48, 'Bagwai'),
(373, 48, 'Bebeji'),
(374, 48, 'Bichi'),
(375, 48, 'Bunkure'),
(376, 48, 'Dala'),
(377, 48, 'Dambatta'),
(378, 48, 'Dawakin-Kudu'),
(379, 48, 'Dawakin-Tofa'),
(380, 48, 'Doguwa'),
(381, 48, 'Fagge'),
(382, 48, 'Gabasawa'),
(383, 48, 'Garko'),
(384, 48, 'Garun-Mallam'),
(385, 48, 'Gaya'),
(386, 48, 'Gezawa'),
(387, 48, 'Gwale'),
(388, 48, 'Gwarzo'),
(389, 48, 'Kabo'),
(390, 48, 'Kano-Municipal'),
(391, 48, 'Karaye'),
(392, 48, 'Kibiya'),
(393, 48, 'Kiru'),
(394, 48, 'Kumbotso'),
(395, 48, 'Kunchi'),
(396, 48, 'Kura'),
(397, 48, 'Madobi'),
(398, 48, 'Makoda'),
(399, 48, 'Minjibir'),
(400, 48, 'Nasarawa'),
(401, 48, 'Rano'),
(402, 48, 'Rimin-Gado'),
(403, 48, 'Rogo'),
(404, 48, 'Shanono'),
(405, 48, 'Sumaila'),
(406, 48, 'Takai'),
(407, 48, 'Tarauni'),
(408, 48, 'Tofa'),
(409, 48, 'Tsanyawa'),
(410, 48, 'Tudun-Wada'),
(411, 48, 'Ungogo'),
(412, 48, 'Warawa'),
(413, 48, 'Wudil'),
(414, 49, 'Bakori'),
(415, 49, 'Batagarawa'),
(416, 49, 'Batsari'),
(417, 49, 'Baure'),
(418, 49, 'Bindawa'),
(419, 49, 'Charanchi'),
(420, 49, 'Dan-Musa'),
(421, 49, 'Dandume'),
(422, 49, 'Danja'),
(423, 49, 'Daura'),
(424, 49, 'Dutsi'),
(425, 49, 'Dutsin-Ma'),
(426, 49, 'Faskari'),
(427, 49, 'Funtua'),
(428, 49, 'Ingawa'),
(429, 49, 'Jibia'),
(430, 49, 'Kafur'),
(431, 49, 'Kaita'),
(432, 49, 'Kankara'),
(433, 49, 'Kankia'),
(434, 49, 'Katsina'),
(435, 49, 'Kurfi'),
(436, 49, 'Kusada'),
(437, 49, 'Mai-Adua'),
(438, 49, 'Malumfashi'),
(439, 49, 'Mani'),
(440, 49, 'Mashi'),
(441, 49, 'Matazu'),
(442, 49, 'Musawa'),
(443, 49, 'Rimi'),
(444, 49, 'Sabuwa'),
(445, 49, 'Safana'),
(446, 49, 'Sandamu'),
(447, 49, 'Zango'),
(448, 50, 'Aleiro'),
(449, 50, 'Arewa-Dandi'),
(450, 50, 'Argungu'),
(451, 50, 'Augie'),
(452, 50, 'Bagudo'),
(453, 50, 'Birnin-Kebbi'),
(454, 50, 'Bunza'),
(455, 50, 'Dandi'),
(456, 50, 'Fakai'),
(457, 50, 'Gwandu'),
(458, 50, 'Jega'),
(459, 50, 'Kalgo'),
(460, 50, 'Koko-Besse'),
(461, 50, 'Maiyama'),
(462, 50, 'Ngaski'),
(463, 50, 'Sakaba'),
(464, 50, 'Shanga'),
(465, 50, 'Suru'),
(466, 50, 'Wasagu/Danko'),
(467, 50, 'Yauri'),
(468, 50, 'Zuru'),
(469, 51, 'Adavi'),
(470, 51, 'Ajaokuta'),
(471, 51, 'Ankpa'),
(472, 51, 'Dekina'),
(473, 51, 'Ibaji'),
(474, 51, 'Idah'),
(475, 51, 'Igalamela-Odolu'),
(476, 51, 'Ijumu'),
(477, 51, 'KabbaBunu'),
(478, 51, 'Kogi'),
(479, 51, 'Lokoja'),
(480, 51, 'Mopa-Muro'),
(481, 51, 'Ofu'),
(482, 51, 'OgoriMagongo'),
(483, 51, 'Okehi'),
(484, 51, 'Okene'),
(485, 51, 'Olamaboro'),
(486, 51, 'Omala'),
(487, 51, 'Oyi'),
(488, 51, 'Yagba-East'),
(489, 51, 'Yagba-West'),
(490, 52, 'Asa'),
(491, 52, 'Baruten'),
(492, 52, 'Edu'),
(493, 52, 'Ekiti (Araromi/Opin)'),
(494, 52, 'Ilorin-East'),
(495, 52, 'Ilorin-South'),
(496, 52, 'Ilorin-West'),
(497, 52, 'Isin'),
(498, 52, 'Kaiama'),
(499, 52, 'Moro'),
(500, 52, 'Offa'),
(501, 52, 'Oke-Ero'),
(502, 52, 'Oyun'),
(503, 52, 'Pategi'),
(504, 53, 'Agege'),
(505, 53, 'Ajeromi-Ifelodun'),
(506, 53, 'Alimosho'),
(507, 53, 'Amuwo-Odofin'),
(508, 53, 'Apapa'),
(509, 53, 'Badagry'),
(510, 53, 'Epe'),
(511, 53, 'Eti-Osa'),
(512, 53, 'Ibeju-Lekki'),
(513, 53, 'Ifako-Ijaiye'),
(514, 53, 'Ikeja'),
(515, 53, 'Ikorodu'),
(516, 53, 'Kosofe'),
(517, 53, 'Lagos-Island'),
(518, 53, 'Lagos-Mainland'),
(519, 53, 'Mushin'),
(520, 53, 'Ojo'),
(521, 53, 'Oshodi-Isolo'),
(522, 53, 'Shomolu'),
(523, 53, 'Surulere'),
(524, 53, 'Yewa-South'),
(525, 54, 'Akwanga'),
(526, 54, 'Awe'),
(527, 54, 'Doma'),
(528, 54, 'Karu'),
(529, 54, 'Keana'),
(530, 54, 'Keffi'),
(531, 54, 'Kokona'),
(532, 54, 'Lafia'),
(533, 54, 'Nasarawa'),
(534, 54, 'Nasarawa-Eggon'),
(535, 54, 'Obi'),
(536, 54, 'Wamba'),
(537, 54, 'Toto'),
(538, 55, 'Agaie'),
(539, 55, 'Agwara'),
(540, 55, 'Bida'),
(541, 55, 'Borgu'),
(542, 55, 'Bosso'),
(543, 55, 'Chanchaga'),
(544, 55, 'Edati'),
(545, 55, 'Gbako'),
(546, 55, 'Gurara'),
(547, 55, 'Katcha'),
(548, 55, 'Kontagora'),
(549, 55, 'Lapai'),
(550, 55, 'Lavun'),
(551, 55, 'Magama'),
(552, 55, 'Mariga'),
(553, 55, 'Mashegu'),
(554, 55, 'Mokwa'),
(555, 55, 'Moya'),
(556, 55, 'Paikoro'),
(557, 55, 'Rafi'),
(558, 55, 'Rijau'),
(559, 55, 'Shiroro'),
(560, 55, 'Suleja'),
(561, 55, 'Tafa'),
(562, 55, 'Wushishi'),
(563, 56, 'Abeokuta-North'),
(564, 56, 'Abeokuta-South'),
(565, 56, 'Ado-OdoOta'),
(566, 56, 'Ewekoro'),
(567, 56, 'Ifo'),
(568, 56, 'Ijebu-East'),
(569, 56, 'Ijebu-North'),
(570, 56, 'Ijebu-North-East'),
(571, 56, 'Ijebu-Ode'),
(572, 56, 'Ikenne'),
(573, 56, 'Imeko-Afon'),
(574, 56, 'Ipokia'),
(575, 56, 'Obafemi-Owode'),
(576, 56, 'Odeda'),
(577, 56, 'Odogbolu'),
(578, 56, 'Ogun-Waterside'),
(579, 56, 'Remo-North'),
(580, 56, 'Shagamu'),
(581, 56, 'Yewa North'),
(582, 57, 'Akoko North-East'),
(583, 57, 'Akoko North-West'),
(584, 57, 'Akoko South-West'),
(585, 57, 'Akoko South-East'),
(586, 57, 'Akure-North'),
(587, 57, 'Akure-South'),
(588, 57, 'Ese-Odo'),
(589, 57, 'Idanre'),
(590, 57, 'Ifedore'),
(591, 57, 'Ilaje'),
(592, 57, 'Ile-Oluji-Okeigbo'),
(593, 57, 'Irele'),
(594, 57, 'Odigbo'),
(595, 57, 'Okitipupa'),
(596, 57, 'Ondo West'),
(597, 57, 'Ondo-East'),
(598, 57, 'Ose'),
(599, 57, 'Owo'),
(600, 58, 'Atakumosa West'),
(601, 58, 'Atakumosa East'),
(602, 58, 'Ayedaade'),
(603, 58, 'Ayedire'),
(604, 58, 'Boluwaduro'),
(605, 58, 'Boripe'),
(606, 58, 'Ede South'),
(607, 58, 'Ede North'),
(608, 58, 'Egbedore'),
(609, 58, 'Ejigbo'),
(610, 58, 'Ife North'),
(611, 58, 'Ife South'),
(612, 58, 'Ife-Central'),
(613, 58, 'Ife-East'),
(614, 58, 'Ifelodun'),
(615, 58, 'Ila'),
(616, 58, 'Ilesa-East'),
(617, 58, 'Ilesa-West'),
(618, 58, 'Irepodun'),
(619, 58, 'Irewole'),
(620, 58, 'Isokan'),
(621, 58, 'Iwo'),
(622, 58, 'Obokun'),
(623, 58, 'Odo-Otin'),
(624, 58, 'Ola Oluwa'),
(625, 58, 'Olorunda'),
(626, 58, 'Oriade'),
(627, 58, 'Orolu'),
(628, 58, 'Osogbo'),
(629, 59, 'Afijio'),
(630, 59, 'Akinyele'),
(631, 59, 'Atiba'),
(632, 59, 'Atisbo'),
(633, 59, 'Egbeda'),
(634, 59, 'Ibadan North'),
(635, 59, 'Ibadan North-East'),
(636, 59, 'Ibadan North-West'),
(637, 59, 'Ibadan South-East'),
(638, 59, 'Ibadan South-West'),
(639, 59, 'Ibarapa-Central'),
(640, 59, 'Ibarapa-East'),
(641, 59, 'Ibarapa-North'),
(642, 59, 'Ido'),
(643, 59, 'Ifedayo'),
(644, 59, 'Irepo'),
(645, 59, 'Iseyin'),
(646, 59, 'Itesiwaju'),
(647, 59, 'Iwajowa'),
(648, 59, 'Kajola'),
(649, 59, 'Lagelu'),
(650, 59, 'Ogo-Oluwa'),
(651, 59, 'Ogbomosho-North'),
(652, 59, 'Ogbomosho-South'),
(653, 59, 'Olorunsogo'),
(654, 59, 'Oluyole'),
(655, 59, 'Ona-Ara'),
(656, 59, 'Orelope'),
(657, 59, 'Ori-Ire'),
(658, 59, 'Oyo-West'),
(659, 59, 'Oyo-East'),
(660, 59, 'Saki-East'),
(661, 59, 'Saki-West'),
(662, 59, 'Surulere'),
(663, 60, 'Barkin-Ladi'),
(664, 60, 'Bassa'),
(665, 60, 'Bokkos'),
(666, 60, 'Jos-East'),
(667, 60, 'Jos-North'),
(668, 60, 'Jos-South'),
(669, 60, 'Kanam'),
(670, 60, 'Kanke'),
(671, 60, 'Langtang-North'),
(672, 60, 'Langtang-South'),
(673, 60, 'Mangu'),
(674, 60, 'Mikang'),
(675, 60, 'Pankshin'),
(676, 60, 'Qua\'an Pan'),
(677, 60, 'Riyom'),
(678, 60, 'Shendam'),
(679, 60, 'Wase'),
(680, 61, 'AbuaOdual'),
(681, 61, 'Ahoada-East'),
(682, 61, 'Ahoada-West'),
(683, 61, 'Akuku Toru'),
(684, 61, 'Andoni'),
(685, 61, 'Asari-Toru'),
(686, 61, 'Bonny'),
(687, 61, 'Degema'),
(688, 61, 'Eleme'),
(689, 61, 'Emuoha'),
(690, 61, 'Etche'),
(691, 61, 'Gokana'),
(692, 61, 'Ikwerre'),
(693, 61, 'Khana'),
(694, 61, 'ObioAkpor'),
(695, 61, 'Ogba-Egbema-Ndoni'),
(696, 61, 'OgbaEgbemaNdoni'),
(697, 61, 'OguBolo'),
(698, 61, 'Okrika'),
(699, 61, 'Omuma'),
(700, 61, 'OpoboNkoro'),
(701, 61, 'Oyigbo'),
(702, 61, 'Port-Harcourt'),
(703, 61, 'Tai'),
(704, 62, 'Binji'),
(705, 62, 'Bodinga'),
(706, 62, 'Dange-Shuni'),
(707, 62, 'Gada'),
(708, 62, 'Goronyo'),
(709, 62, 'Gudu'),
(710, 62, 'Gwadabawa'),
(711, 62, 'Illela'),
(712, 62, 'Kebbe'),
(713, 62, 'Kware'),
(714, 62, 'Rabah'),
(715, 62, 'Sabon Birni'),
(716, 62, 'Shagari'),
(717, 62, 'Silame'),
(718, 62, 'Sokoto-North'),
(719, 62, 'Sokoto-South'),
(720, 62, 'Tambuwal'),
(721, 62, 'Tangaza'),
(722, 62, 'Tureta'),
(723, 62, 'Wamako'),
(724, 62, 'Wurno'),
(725, 62, 'Yabo'),
(726, 63, 'Ardo-Kola'),
(727, 63, 'Bali'),
(728, 63, 'Donga'),
(729, 63, 'Gashaka'),
(730, 63, 'Gassol'),
(731, 63, 'Ibi'),
(732, 63, 'Jalingo'),
(733, 63, 'Karim-Lamido'),
(734, 63, 'Kurmi'),
(735, 63, 'Lau'),
(736, 63, 'Sardauna'),
(737, 63, 'Takum'),
(738, 63, 'Ussa'),
(739, 63, 'Wukari'),
(740, 63, 'Yorro'),
(741, 63, 'Zing'),
(742, 64, 'Bade'),
(743, 64, 'Bursari'),
(744, 64, 'Damaturu'),
(745, 64, 'Fika'),
(746, 64, 'Fune'),
(747, 64, 'Geidam'),
(748, 64, 'Gujba'),
(749, 64, 'Gulani'),
(750, 64, 'Jakusko'),
(751, 64, 'Karasuwa'),
(752, 64, 'Machina'),
(753, 64, 'Nangere'),
(754, 64, 'Nguru'),
(755, 64, 'Potiskum'),
(756, 64, 'Tarmuwa'),
(757, 64, 'Yunusari'),
(758, 64, 'Yusufari'),
(759, 65, 'Anka'),
(760, 65, 'Bakura'),
(761, 65, 'Birnin Magaji/Kiyaw'),
(762, 65, 'Bukkuyum'),
(763, 65, 'Bungudu'),
(764, 65, 'Gummi'),
(765, 65, 'Gusau'),
(766, 65, 'Isa'),
(767, 65, 'Kaura-Namoda'),
(768, 65, 'Kiyawa'),
(769, 65, 'Maradun'),
(770, 65, 'Maru'),
(771, 65, 'Shinkafi'),
(772, 65, 'Talata-Mafara'),
(773, 65, 'Tsafe'),
(774, 65, 'Zurmi');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(100) NOT NULL,
  `state_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_name`) VALUES
(29, 'Abia'),
(30, 'Adamawa'),
(31, 'Akwa Ibom'),
(32, 'Anambra'),
(33, 'Bauchi'),
(34, 'Bayelsa'),
(35, 'Benue'),
(36, 'Borno'),
(37, 'Cross River'),
(38, 'Delta'),
(39, 'Ebonyi'),
(40, 'Edo'),
(41, 'Ekiti'),
(42, 'Enugu'),
(43, 'Federal Capital Teritory'),
(44, 'Gombe'),
(45, 'Imo'),
(46, 'Jigawa'),
(47, 'Kaduna'),
(48, 'Kano'),
(49, 'Katsina'),
(50, 'Kebbi'),
(51, 'Kogi'),
(52, 'Kwara'),
(53, 'Lagos'),
(54, 'Nasarawa'),
(55, 'Niger'),
(56, 'Ogun'),
(57, 'Ondo'),
(58, 'Osun'),
(59, 'Oyo'),
(60, 'Plateau'),
(61, 'Rivers'),
(62, 'Sokoto'),
(63, 'Taraba'),
(64, 'Yobe'),
(65, 'Zamfara');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(200) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `DoB` date NOT NULL,
  `resident_state_id` int(100) NOT NULL,
  `resident_lga_id` int(100) NOT NULL,
  `mode_of_ID` varchar(100) NOT NULL,
  `id_image_name` varchar(100) NOT NULL,
  `court_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_type` int(10) NOT NULL,
  `activation_status` int(10) NOT NULL,
  `suspension_status` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `sex`, `mobile`, `email`, `DoB`, `resident_state_id`, `resident_lga_id`, `mode_of_ID`, `id_image_name`, `court_id`, `username`, `password`, `account_type`, `activation_status`, `suspension_status`, `created_at`, `updated_at`) VALUES
(2, 'Oyindamola damilola Oloruntoba', '1', 8067691234, 'admin@admin', '2020-07-17', 1, 1, 'Drivers Licence', 'Sample-Affidavit-Of-Loss-Document.pdf', 2, 'fabowale', '$2y$10$NgbmCzb3Mr94Qyfyp/U/8ukq..ONpvmBwq8I8kum.MRRc/ywR/toa', 1, 0, 0, '2020-07-10 02:49:05', '2020-07-10 02:49:05'),
(3, 'Oyindamola damilola Oloruntoba', '1', 8067691234, 'admin1@admin1', '2020-08-27', 1, 2, 'NIN', 'logo.jpeg', 2, 'admin01', '$2y$10$4FnQVvkI93/sH4tZGreRyeYt6VlFFuxmI5N6.ME5jPY7CCNQJmlgG', 1, 0, 0, '2020-08-08 08:19:44', '2020-08-08 08:19:44'),
(4, 'Oyindamola damilola Oloruntoba', '2', 8067691234, 'admin12@admin12', '2020-07-28', 1, 4, 'NIN', 'last-payment.jpeg', 2, 'admin02', '$2y$10$FZ0O8vkEZlfdl6l1pQ26NeAq11im4/2TaB8dUdyx3XqoMCByRZUfa', 2, 0, 0, '2020-08-08 11:15:38', '2020-08-08 11:15:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affidavits`
--
ALTER TABLE `affidavits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affidavit_category`
--
ALTER TABLE `affidavit_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affidavit_formpair`
--
ALTER TABLE `affidavit_formpair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affidavit_forms`
--
ALTER TABLE `affidavit_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courts`
--
ALTER TABLE `courts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `field_options`
--
ALTER TABLE `field_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_fields`
--
ALTER TABLE `form_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lga`
--
ALTER TABLE `lga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affidavits`
--
ALTER TABLE `affidavits`
  MODIFY `id` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `affidavit_category`
--
ALTER TABLE `affidavit_category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `affidavit_formpair`
--
ALTER TABLE `affidavit_formpair`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `affidavit_forms`
--
ALTER TABLE `affidavit_forms`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courts`
--
ALTER TABLE `courts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `field_options`
--
ALTER TABLE `field_options`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_fields`
--
ALTER TABLE `form_fields`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lga`
--
ALTER TABLE `lga`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=775;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
