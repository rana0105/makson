-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2018 at 05:00 AM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nknewsco_makson`
--

-- --------------------------------------------------------

--
-- Table structure for table `areports`
--

CREATE TABLE `areports` (
  `id` int(10) UNSIGNED NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areports`
--

INSERT INTO `areports` (`id`, `company`, `year`, `title`, `file`, `created_at`, `updated_at`) VALUES
(3, '0', '2018', 'Why do we use it? sdsds', 'areport/tIXI9NfQnMWn24OBPlo6npxLlq14mVYdatIyxW7M.pdf', '2018-04-09 22:47:43', '2018-04-09 22:47:43'),
(4, '1', '2017', 'jQuery: table pagination', 'areport/EQTgcjE0DSBgIQsMnv8kFL5TEhBMB7WfkythkoYR.pdf', '2018-04-10 00:34:28', '2018-04-10 00:34:28'),
(8, '0', '2017', 'sdsds', 'areport/FXlaaYe46OLuEfgRw70xMajQNzCK7MBXlCAtVtRo.pdf', '2018-04-20 04:07:12', '2018-04-20 04:07:12'),
(9, '1', '2018', 'Health News for Managed Care Organizations', 'areport/4D0DMuVKAwYOwjKFgQ0t0T3ZTvcA6Dssl4IIuIXf.pdf', '2018-04-20 04:09:14', '2018-04-20 04:09:14'),
(10, '0', '2018', 'Lorem Ipsum, you need to be sure', 'areport/IEu4O4V9DEoyKqnO2KXaQoZsfN8I03XXaMj7ZaDs.pdf', '2018-04-20 04:09:38', '2018-04-20 04:09:38'),
(11, '1', '2017', 'Health News for Managed Care Organizations', 'areport/PjOLDxIS9HVejfdsGV0JteL80xLSnP4IRG9qzTPi.pdf', '2018-04-20 04:09:56', '2018-04-20 04:09:56');

-- --------------------------------------------------------

--
-- Table structure for table `autoids`
--

CREATE TABLE `autoids` (
  `id` int(10) UNSIGNED NOT NULL,
  `autoid` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bulletins`
--

CREATE TABLE `bulletins` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bulletins`
--

INSERT INTO `bulletins` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, 'International Business Machine Corporation 135.72 +0.38 +0.28%', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2018-04-08 00:13:13', '2018-04-19 05:30:36'),
(3, 'Microsoft Corporation 135.72 +0.38 +0.28%', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '2018-04-10 20:54:19', '2018-04-19 05:29:49'),
(4, 'Apple Inc 135.72 +0.38 +0.28%', 'In a dramatic turn of events, two factions of demonstrators,', '2018-04-10 20:55:06', '2018-04-19 05:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `clienteles`
--

CREATE TABLE `clienteles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clienteles`
--

INSERT INTO `clienteles` (`id`, `title`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Image2', 'clientele/tpqb9tlrFN5L7hckG6L8kqXTvG06IeJnX3LjnSqn.png', '2018-04-08 23:11:23', '2018-04-17 01:37:26'),
(2, 'Image15', 'clientele/FDUouLqQ7GyuMPjakd0pF811W8LYO5jXbzE9YFwx.png', '2018-04-10 21:41:24', '2018-04-17 01:41:27'),
(3, 'Image14', 'clientele/yFs5FyYu3pLUNwxfdVUcB4OoRa8JZigJMn5G60qy.png', '2018-04-10 21:41:45', '2018-04-17 01:41:13'),
(4, 'Image13', 'clientele/GaCwVRjYK6zXxEaJVXRhKfuVIPTiAi92vyUSbMMe.png', '2018-04-10 21:42:01', '2018-04-17 01:40:54'),
(5, 'Image12', 'clientele/RpuTFm4YKQgG08LQPMrghAgPMbk9hGMvaI6WUGZQ.png', '2018-04-10 21:42:16', '2018-04-17 01:40:36'),
(6, 'Image11', 'clientele/nThFyjIwkjgqzlTEyf2XBL7CLjDdm7Bgj398NqLl.png', '2018-04-10 21:42:31', '2018-04-17 01:40:10'),
(7, 'Image10', 'clientele/nHFutnv8fLYkUGaz8IcgHfWwNDPD2dJVmBKOpT6q.png', '2018-04-10 21:42:47', '2018-04-17 01:39:48'),
(8, 'Image9', 'clientele/Dj03XS3DIOJbqO3QHiJdPehdBHmLaIypRhAHefXw.png', '2018-04-10 21:42:58', '2018-04-17 01:39:32'),
(9, 'Image8', 'clientele/udsOXSzjdIkqpQfxQZjYZIUs0iy2HAdlDknLDDdv.png', '2018-04-10 21:43:10', '2018-04-17 01:39:11'),
(10, 'Image7', 'clientele/uozKvDf8UmeziF5N5JRdI4Z5v441pVgqTeP9os7l.png', '2018-04-10 21:43:20', '2018-04-17 01:38:54'),
(11, 'Image6', 'clientele/K9CsXvmAprlvOpLEUyDDfdheAQ9geOGXNQaYywjy.png', '2018-04-10 21:43:32', '2018-04-17 01:38:36'),
(12, 'Image5', 'clientele/jbdkwY70FCrsvdi2pCYTaXDFSuJdiJak3VECCx2N.png', '2018-04-10 21:43:43', '2018-04-17 01:38:16'),
(13, 'Image4', 'clientele/91Wuh9qnUW832dU329zNFVdhSH1R9iff3rS3koqN.png', '2018-04-10 21:43:58', '2018-04-17 01:37:57'),
(14, 'Image3', 'clientele/UhwOhRwwWxqOegrj0aS9nLMPIey9Vu9DSymAfGsn.png', '2018-04-10 21:44:10', '2018-04-17 01:37:41'),
(15, 'Image1', 'clientele/ZWWYrfxce3ErCJA4me0BFeAtilLnSWwCtUZFnDWS.png', '2018-04-10 21:44:27', '2018-04-17 01:37:04'),
(16, 'Image16', 'clientele/ZG8CYNvQFhQnmFUNHQrkdtMkk2burcUQdiTYl6qM.png', '2018-04-11 22:12:36', '2018-04-17 01:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `concerns`
--

CREATE TABLE `concerns` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `on_hover_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `concerns`
--

INSERT INTO `concerns` (`id`, `name`, `description`, `logo`, `on_hover_logo`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Maksons Spinning Mills Limited', 'Maksons Spinning Mills Limited', 'concern/lqR0NQcmun8eNbg2IhpFZfUQi8FGUsp4peLkksil.png', 'concern/v546BJ25lTm73GE9Ar6CdjhDeH1uHYyHXOkUxBPX.png', 'concern/v6JoypMPOtBQzA9UWPlcX5We57326BLCBSGjRJou.jpeg', '2018-04-10 21:12:19', '2018-04-12 02:37:11'),
(2, 'Metro Spinning Mills Limited', 'Metro Spinning Mills Limited', 'concern/ZpN9mZT67meBuSXHYlX0jlckIJVqVDmfi1bgA8wa.png', 'concern/LLcfCecgffxFlJWvlKnd9UtDMeoXsGA5W0DfaSrw.png', 'concern/tGtwTCID0ExnLMfyqSvb0fYEqb9QVTZSWbL6oGEH.jpeg', '2018-04-10 21:15:20', '2018-04-12 02:38:14'),
(3, 'Maksons Textile Limited', 'Maksons Textile Limited', 'concern/IhrQRHnG4VwqQMBIdOcpo6bgIaYiLi6N8nyFW0kB.png', 'concern/FkcdrlfuabpiTV3HYVkvRCjOhtO87jAnzjzulvnK.png', 'concern/fNIDyXV1a4TVoO0irsZCOZo802bXiy6neRQ50cqo.jpeg', '2018-04-10 21:16:04', '2018-04-23 21:49:24'),
(6, 'Makcot International', 'Makcot International', 'concern/6hfMgdZKM2S1P3iL9bFknL6Q6NbQ3DtKScG9qbuO.png', 'concern/8l1QqdueTphmVNSmO6FxITbVzYPmKuWBSNbeSh3c.png', 'concern/CSJ2nFFGQADvW0PjgJPZB6IaO9sFPWTGl7qxOzoL.jpeg', '2018-04-12 02:44:59', '2018-04-23 21:50:05'),
(7, 'La-muni Apparels Limited', 'La-muni Apparels Limited', 'concern/00fnY2axMIqgIlkMKaeFanGGQYYYxhUA1Ti3c1Xm.png', 'concern/2e19FmVAynXuKvuWCYfQMsHdd6j9FaNQILlWC2Nl.png', 'concern/UHRm3Cuikk9mz9DUCu2O0mOBha8BIxCBR6ybmmG6.jpeg', '2018-04-23 21:51:01', '2018-04-23 21:51:01'),
(8, 'Mak Sourcing Limited', 'Mak Sourcing Limited', 'concern/AAPXpx6nvglImyQZ5BV6R38vEMHKwGMTGWGju24q.png', 'concern/Hp06zBjap3tk0KVb6cHVNOq1L2Gnr3IyBCbvqV3F.png', 'concern/KH9FYYi4j7gaXVcnm1qlmJCGRBdBuoJxmUrBWtmc.jpeg', '2018-04-23 21:52:15', '2018-04-23 21:52:15'),
(9, 'Maksons Properties & Development Limited', 'Maksons Properties & Development Limited', 'concern/6SrBa8q42tZ40Ob4JvlIOXoNDiAvvJsgpYXYoN3Q.png', 'concern/g9JsxBJyjtWZEALWx15dCH76TtJD8p49wuuDouRt.png', 'concern/p1rZwYdLsJIajdRppKLf628pWSTD69CuSTgf7HDY.jpeg', '2018-04-23 21:53:07', '2018-04-23 21:53:07'),
(10, 'Maksons Logistic Ltd', 'Maksons Logistic Ltd', 'concern/3KDGg7uDKACCWFwXXQJknAExF065YasTWrjNoYzy.png', 'concern/7MiXxZ9hScFCaBoczHs54wQjjDlWZWBHIry97cYr.png', 'concern/P5hg9foiVynq5DGH51UCStldFQ1vVqFl9HzhzSgN.jpeg', '2018-04-23 21:54:21', '2018-04-23 21:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `cstatuses`
--

CREATE TABLE `cstatuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cstatuses`
--

INSERT INTO `cstatuses` (`id`, `company`, `year`, `title`, `file`, `created_at`, `updated_at`) VALUES
(1, '1', '2017', 'Where can I get some?', 'cstatus/yeKZSajjANK4fM6q6yWZyNuUx1FM5EdMJkvMnWS8.pdf', '2018-04-09 22:50:21', '2018-04-09 22:50:21'),
(2, '0', '2018', 'Health News for Managed Care Organizations', 'cstatus/ANc69ds3MZJuEDCerYlz74xRopPfCNyCCmU6Vujh.pdf', '2018-04-10 00:35:01', '2018-04-10 00:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `dreports`
--

CREATE TABLE `dreports` (
  `id` int(10) UNSIGNED NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dreports`
--

INSERT INTO `dreports` (`id`, `company`, `year`, `title`, `file`, `created_at`, `updated_at`) VALUES
(1, '0', '2018', 'Why do we use it?', 'dreport/dSLGHK5W2uwGoioLlB6TLknhnoOw19bo0liX3eJu.pdf', '2018-04-18 23:58:32', '2018-04-18 23:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `jobposts`
--

CREATE TABLE `jobposts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobposts`
--

INSERT INTO `jobposts` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Why do we use it?', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', '2018-04-09 23:24:11', '2018-04-11 23:32:13');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quiz_point` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_point` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_point` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_04_30_014352_create_permission_tables', 1),
(4, '2018_02_01_065318_create_members_table', 1),
(5, '2018_02_01_100632_create_sessions_table', 1),
(6, '2018_02_02_082151_create_autoids_table', 1),
(7, '2018_02_20_170207_create_user_activations_table', 2),
(8, '2018_04_08_025613_create_sliders_table', 3),
(9, '2018_04_08_054144_create_bulletins_table', 4),
(10, '2018_04_08_062052_create_concerns_table', 5),
(11, '2018_04_09_042742_create_clienteles_table', 6),
(12, '2018_04_10_022347_create_areports_table', 7),
(13, '2018_04_10_022358_create_qreports_table', 7),
(14, '2018_04_10_022434_create_cstatuses_table', 7),
(15, '2018_04_10_022912_create_jobposts_table', 7),
(16, '2018_04_19_054345_create_dreports_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qreports`
--

CREATE TABLE `qreports` (
  `id` int(10) UNSIGNED NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qreports`
--

INSERT INTO `qreports` (`id`, `company`, `year`, `title`, `file`, `created_at`, `updated_at`) VALUES
(1, '1', '2017', 'Why do we use it?', 'qreport/nDTW5WUKLkh0wx5x36ZUz3kRrxpkgRg5PFNRhrJl.pdf', '2018-04-09 22:36:38', '2018-04-09 22:36:38'),
(2, '0', '2018', 'VueTables (Version 1) Client-Side Demo', 'qreport/sxsENQRjpJlnouxWA2JnOYRuiCssc6LibTCCTU7E.pdf', '2018-04-10 00:35:47', '2018-04-10 00:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('EqVnoPbjLA6XLcU0NnuXjNkTCBfAjULzbbUy2GOm', NULL, '103.49.170.100', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV0RZeGdwTVBJRGZqNnREUGhmQWlVUnlscEdFZFBiaEE1M0JmUlJaYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9tYWtzb25zLm5rbmV3czI0LmNvbS9oaXN0b3J5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1524541451),
('J5nehG0q1LSl7NIZAnP4g9JXMjv4Q966QC4mstS3', 1, '103.49.170.100', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUWIxaHZ0S2ZRdGs5NVBmWkVTbjNuZXZTN3JDa1g0MFl5cnl1ZmlkdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9tYWtzb25zLm5rbmV3czI0LmNvbS9jb25jZXJuIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1524542061),
('RdX0GOMgjAHGWF1DDZDOKIAeNxXPKuTvwVwOreZW', NULL, '103.78.163.191', 'Microsoft Office Word/16.11.311 (Mac OS/10.11.6; Desktop; en-US; NonAppStore; Apple/iMac14,2)', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiOExoSHAzeW1zTEhKVXdhdWhrVDVPdFNycjdLVThXbE1rS284MHNOTCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1524544363),
('sGPliOAjnC70SstqChTe8U4uM6zzsUncErCWWcCy', NULL, '103.78.163.191', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36 OPR/52.0.2871.64', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSTJ1RmluZkR1YmI5dkhNMG1WTUJhYTFXT2JYNmN5MW9IbGdXY2ZXTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9tYWtzb25zLm5rbmV3czI0LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1524544364),
('uCS3OQKKd0rSDbt1CjLusvjjNo9q9NscQD2YS6p5', NULL, '103.49.170.100', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN2ttUnBpc1RCeXJvcjJzYTF0VWg3czZmSEdENnYxMnBUZk1HNVF5UiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9tYWtzb25zLm5rbmV3czI0LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1524544086);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Maintaining ethical business', '<h2>Maintaining<br><span>ethical business</span></h2>', 'slider/9L3ObNxKyjI8DqTCyRhHVtJ8PCKM5TPbKiYacAjV.jpeg', '2018-04-10 02:49:10', '2018-04-19 03:38:46'),
(2, 'Smart clothing everyday living', '<h2>Smart clothing<br><span>Everyday living</span></h2>', 'slider/xSQrmTRmJ7CDTZ2BV7SDVWAkWb90g9VJ6I5HgIDp.jpeg', '2018-04-10 02:51:23', '2018-04-19 03:38:19'),
(3, 'Train at the speed of life', '<h2>Train at <span>the speed </span> <br>of life</h2>', 'slider/vNThFW6G82nhyv4blOulrBH0WJuWFUx7FJQZKero.jpeg', '2018-04-10 02:52:28', '2018-04-19 03:37:34'),
(4, 'Providing world class quality products', '<h2>Providing world class<br><span></span><span>quality</span> products</h2>', 'slider/ELwNVVkDriqclNypmvsQDxYgvVXq7kVLzgx1XPZh.jpeg', '2018-04-10 02:53:35', '2018-04-19 03:35:54'),
(5, 'Specialized in quality combed and carded knit yarn', '<h2>Specialized in producing<br><span>different types of best quality</span><br>100% cotton & blended yarn</h2>', 'slider/ANrD9SjFvSoMZtPeEhQ9gsW6TOOgtlvfqZsoPSqR.jpeg', '2018-04-10 02:55:58', '2018-04-19 04:23:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_activated` tinyint(4) NOT NULL DEFAULT '0',
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_activated`, `link`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Morshed Khan Rana', 'admin@admin.com', '$2y$10$yKyfVpqljl4NRocjc4ClHOAgHpP0MzSuQLwE3yCEE68XsX3ByHLoa', 0, 'VJKRZT3eNANkqpufneFe4ewqloNee4', 'msZP7uSnll27MilH4j4xZOuar7Jz0hr2sNMYUZScHDueNaTMbtcDYsfua3hD', '2018-04-04 23:57:37', '2018-04-09 20:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_activations`
--

CREATE TABLE `user_activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areports`
--
ALTER TABLE `areports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `autoids`
--
ALTER TABLE `autoids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bulletins`
--
ALTER TABLE `bulletins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clienteles`
--
ALTER TABLE `clienteles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concerns`
--
ALTER TABLE `concerns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cstatuses`
--
ALTER TABLE `cstatuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dreports`
--
ALTER TABLE `dreports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobposts`
--
ALTER TABLE `jobposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_phone_unique` (`phone`),
  ADD UNIQUE KEY `members_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qreports`
--
ALTER TABLE `qreports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_activations`
--
ALTER TABLE `user_activations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_activations_user_id_index` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areports`
--
ALTER TABLE `areports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `autoids`
--
ALTER TABLE `autoids`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bulletins`
--
ALTER TABLE `bulletins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clienteles`
--
ALTER TABLE `clienteles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `concerns`
--
ALTER TABLE `concerns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cstatuses`
--
ALTER TABLE `cstatuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dreports`
--
ALTER TABLE `dreports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobposts`
--
ALTER TABLE `jobposts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qreports`
--
ALTER TABLE `qreports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_activations`
--
ALTER TABLE `user_activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_activations`
--
ALTER TABLE `user_activations`
  ADD CONSTRAINT `user_activations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
