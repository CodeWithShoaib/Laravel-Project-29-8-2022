-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 04:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linoor`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `headingone` text DEFAULT NULL,
  `headingtwo` text DEFAULT NULL,
  `contentone` text DEFAULT NULL,
  `headingthree` text DEFAULT NULL,
  `contenttwo` text DEFAULT NULL,
  `headingfour` text DEFAULT NULL,
  `contentthree` text DEFAULT NULL,
  `headingfive` text DEFAULT NULL,
  `headingsix` text DEFAULT NULL,
  `headingseven` text DEFAULT NULL,
  `contentfour` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `bg_one` text DEFAULT NULL,
  `bg_two` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `headingone`, `headingtwo`, `contentone`, `headingthree`, `contenttwo`, `headingfour`, `contentthree`, `headingfive`, `headingsix`, `headingseven`, `contentfour`, `image`, `bg_one`, `bg_two`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT Two', 'MAKE WEBSITES WITHOUT TOUCHING THE CODING', 'We are committed to providing our customers with exceptional service while offering our employees the best training. There are many variations of passages of lorem ipsum is simply free text available in the market, but the majority have suffered time. one', 'FREE CONSULTATION', 'Lorem ipsum is not dolor sit amet, consectetur notted. one', 'BEST TEAM MEMBERS', 'Lorem ipsum is not dolor sit amet, consectetur notted.', 'MEET THE EXPERT TEAM', 'GREAT THINGS IN BUSINESS ARE NEVER DONE BY ONE PERSON. THEY’RE DONE BY A TEAM OF PEOPLE', 'WHAT OUR CUSTOMERS ARETALKING ABOUT one', 'There are many variations of passages of Lorem Ipsum available,but the majority have suffered alteration in some form, by injectedhumour, or randomised', '1661953499.jpg', '1661954084.jpg', '1661954092.jpg', '2022-08-28 22:24:39', '2022-08-31 08:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  `heading` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `content`, `heading`, `created_at`, `updated_at`) VALUES
(2, '1661780037.jpg', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsu', 'DELIVERING THE BEST DIGITAL MARKETING', '2022-08-29 08:31:48', '2022-08-29 08:33:57'),
(3, '1661780195.jpg', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum.', 'INTRODUCING THE LATEST LINOOR FEATURES', '2022-08-29 08:36:35', '2022-08-29 08:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `office_heading` text DEFAULT NULL,
  `message_heading` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `title`, `image`, `office_heading`, `message_heading`, `created_at`, `updated_at`) VALUES
(1, 'Contact us', '1662125997.jpg', 'heading', 'heading', '2022-09-01 13:29:07', '2022-09-02 08:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `c_feedbacks`
--

CREATE TABLE `c_feedbacks` (
  `id` int(11) NOT NULL,
  `titleone` text DEFAULT NULL,
  `titletwo` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_feedbacks`
--

INSERT INTO `c_feedbacks` (`id`, `titleone`, `titletwo`, `content`, `image`, `created_at`, `updated_at`) VALUES
(7, 'Mike hardson', 'There are many varia', 'There are many variations of passages of lorem ipsum available but the                                     majority have suffered alteration in some form, by injected humour, or randomised                                     words which don\'t look even slightly believable.', '1661715438.jpg', '2022-08-28 14:37:18', '2022-08-28 15:08:51'),
(9, 'Sarah albert', 'There are many varia', 'There are many variations of passages of lorem ipsum available but the                                     majority have suffered alteration in some form, by injected humour, or randomised                                     words which don\'t look even slightly believable.', '1661716569.jpg', '2022-08-28 14:40:25', '2022-08-28 14:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `content` text DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `Flink` text DEFAULT NULL,
  `Tlink` text DEFAULT NULL,
  `Plink` text DEFAULT NULL,
  `pagelinkone` text DEFAULT NULL,
  `pagelinktwo` text DEFAULT NULL,
  `pagelinkthree` text DEFAULT NULL,
  `pagelinkfour` text DEFAULT NULL,
  `pagelinkfive` text DEFAULT NULL,
  `support` text DEFAULT NULL,
  `termsofuse` text DEFAULT NULL,
  `privacypolicy` text DEFAULT NULL,
  `help` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `signup` text DEFAULT NULL,
  `copyright` text DEFAULT NULL,
  `explore` text DEFAULT NULL,
  `contactH` text DEFAULT NULL,
  `subscribeH` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `content`, `logo`, `Flink`, `Tlink`, `Plink`, `pagelinkone`, `pagelinktwo`, `pagelinkthree`, `pagelinkfour`, `pagelinkfive`, `support`, `termsofuse`, `privacypolicy`, `help`, `address`, `phone`, `email`, `signup`, `copyright`, `explore`, `contactH`, `subscribeH`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to our web design agency. Lorem ipsum simply free text dolor sited amet cons cing elit.', '1662124275.png', 'www.facebook.com', 'www.twitter.com', 'https://www.pinterest.com/', 'About', 'Meet Our Team', 'Our Portfolio', 'Latest News', 'Contact', 'Support', 'Terms Of Use', 'Privacy Policy', 'Help', '66 Broklyn Street, New YorkUnited States of America', '666 888 000', 'needhelp@linoor.com', 'Sign up for our latest news & articles. We won’t give you spam mails.', '&copy; Copyright 2022 by Layerdrops.com', 'EXPLORE', 'CONTACT', 'SUBSCRIBE', '2022-09-02 12:49:12', '2022-09-02 08:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `navone` text DEFAULT NULL,
  `navtwo` text DEFAULT NULL,
  `navthree` text DEFAULT NULL,
  `navfour` text DEFAULT NULL,
  `navfive` text DEFAULT NULL,
  `navsix` text DEFAULT NULL,
  `navseven` text DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `navone`, `navtwo`, `navthree`, `navfour`, `navfive`, `navsix`, `navseven`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'HOME', 'ABOUT US', 'SERVICES', 'PORTFOLIO', 'SHOP', 'BLOG', 'CONTACT', '1661648128.png', '2022-08-27 18:42:52', '2022-08-27 19:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `bg_one` text DEFAULT NULL,
  `headingone` text DEFAULT NULL,
  `headingtwo` text DEFAULT NULL,
  `bg_two` text DEFAULT NULL,
  `bg_three` text DEFAULT NULL,
  `countingone` text DEFAULT NULL,
  `countingtwo` text DEFAULT NULL,
  `countingthree` text DEFAULT NULL,
  `countingfour` text DEFAULT NULL,
  `headingthree` text DEFAULT NULL,
  `text_one` text DEFAULT NULL,
  `headingfour` text DEFAULT NULL,
  `text_two` text DEFAULT NULL,
  `headingfive` text DEFAULT NULL,
  `text_three` text DEFAULT NULL,
  `headingsix` text DEFAULT NULL,
  `text_four` text DEFAULT NULL,
  `headingseven` text DEFAULT NULL,
  `headingeight` text DEFAULT NULL,
  `headingnine` text DEFAULT NULL,
  `headingten` text DEFAULT NULL,
  `text_five` text DEFAULT NULL,
  `text_six` text DEFAULT NULL,
  `headingeleven` text DEFAULT NULL,
  `text_seven` text DEFAULT NULL,
  `text_eight` text DEFAULT NULL,
  `headingtwel` text DEFAULT NULL,
  `bg_four` text DEFAULT NULL,
  `headingthirteen` text DEFAULT NULL,
  `headingfourteen` text DEFAULT NULL,
  `headingfifteen` text DEFAULT NULL,
  `heading_sixteen` text DEFAULT NULL,
  `headingseventeen` text DEFAULT NULL,
  `headingeighteen` text DEFAULT NULL,
  `bg_five` text DEFAULT NULL,
  `headingnineteen` text DEFAULT NULL,
  `bg_six` text DEFAULT NULL,
  `heafingTwenty` text DEFAULT NULL,
  `imageone` text DEFAULT NULL,
  `imagetwo` text DEFAULT NULL,
  `imagethree` text DEFAULT NULL,
  `imagefour` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `bg_one`, `headingone`, `headingtwo`, `bg_two`, `bg_three`, `countingone`, `countingtwo`, `countingthree`, `countingfour`, `headingthree`, `text_one`, `headingfour`, `text_two`, `headingfive`, `text_three`, `headingsix`, `text_four`, `headingseven`, `headingeight`, `headingnine`, `headingten`, `text_five`, `text_six`, `headingeleven`, `text_seven`, `text_eight`, `headingtwel`, `bg_four`, `headingthirteen`, `headingfourteen`, `headingfifteen`, `heading_sixteen`, `headingseventeen`, `headingeighteen`, `bg_five`, `headingnineteen`, `bg_six`, `heafingTwenty`, `imageone`, `imagetwo`, `imagethree`, `imagefour`, `created_at`, `updated_at`) VALUES
(1, '1661951074.jpg', 'welcome to Linoor agency', 'Smart Web Design Agency', '1661951298.jpg', '1661951379.jpg', 'Projects Completed', 'Active clients', 'cups of coffee', 'happy clients', 'LET’S CREATE SOMETHING together', 'There are many variations of passages of Lorem Ipsum available, but                                the majority have suffered alteration in some form, by injected humour, or randomised.', 'MAKE WEBSITES WITHOUT TOUCHING the CODing', 'We are committed to providing our customers with exceptional                                    service while offering our employees the best training. There are many variations of                                    passages of lorem ipsum is simply free text available in the market, but the                                    majority have suffered time.', 'Free Consultation', 'Lorem ipsum is not dolor sit amet, consectetur notted.', 'Best team members', 'Lorem ipsum is not dolor sit amet, consectetur notted.', 'Our work showcase', 'See Why you should choose linoor', 'We think differently', 'did High quality projects', 'Lorem Ipsum nibh vel velit auctor aliquet. Aenean sollic                                            tudin, lorem is simply free text quis bibendum.', 'Lorem Ipsum nibh vel velit auctor aliquet. Aenean sollic                                            tudin, lorem is simply free text quis bibendum.', 'super expert team members', 'Lorem Ipsum nibh vel velit auctor aliquet. Aenean sollic                                            tudin, lorem is simply free text quis bibendum.', 'Lorem Ipsum is simply proin gravida nibh vel velit auctor aliquet.                                    Aenean sollicitudin, lorem is simply free text quis bibendum.', 'Customer feedbacks', '1661952308.jpg', 'Grow With Community & Experience Endless Possibilities', 'latest technology', 'amazing free support', 'quick services', 'our Values & Strategy', 'Latest news & articles', '1661952532.jpg', 'BUILD a BETTER WEBSITE ALOT QUICKER WITH linoor', '1661952532.jpg', 'We provide our customers with exceptional service', '1661703407.jpg', '1661703446.jpg', '1661703459.jpg', '1661703434.jpg', '2022-08-28 03:36:10', '2022-08-31 08:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `price` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `image`, `price`, `created_at`, `updated_at`) VALUES
(2, 'CLASSIC CHAIR', '1661776987.jpg', '$33.00', '2022-08-29 07:43:07', '2022-08-29 07:43:07'),
(3, 'COMFY CHAIR', '1661777029.jpg', '$44.00', '2022-08-29 07:43:49', '2022-08-29 07:43:49'),
(4, 'BOSS CHAIR', '1661777079.jpg', '$58.00', '2022-08-29 07:44:39', '2022-08-29 07:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `number` text DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(3, 'BASIC RULES OF RUNNING WEB AGENCY BUSINESS', 'Lorem ipsum is simply free text used by copytyping refreshing.', '1661720071.jpg', '2022-08-28 15:53:44', '2022-08-28 15:54:31'),
(4, 'BASIC RULES OF RUNNING WEB AGENCY BUSINESS', 'Lorem ipsum is simply free text used by copytyping refreshing.', '1661721122.jpg', '2022-08-28 16:12:02', '2022-08-28 16:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `newslette`
--

CREATE TABLE `newslette` (
  `id` int(11) NOT NULL,
  `newsletter` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newslette`
--

INSERT INTO `newslette` (`id`, `newsletter`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '2022-09-01 07:38:02', '2022-09-01 07:38:02'),
(2, 'ali@gmail.com', '2022-09-01 07:38:51', '2022-09-01 07:38:51'),
(3, 'shoaib@gmail.com', '2022-09-05 08:42:14', '2022-09-05 08:42:14'),
(5, 'admin@gmail.com', '2022-09-05 08:42:43', '2022-09-05 08:42:43'),
(6, 'admin@gmail.com', '2022-09-05 08:45:22', '2022-09-05 08:45:22'),
(7, 'testing@gmail.com', '2022-09-05 08:45:37', '2022-09-05 08:45:37'),
(8, 'geo@gmail.com', '2022-09-05 08:45:53', '2022-09-05 08:45:53'),
(9, 'shop@gmail.com', '2022-09-05 08:46:04', '2022-09-05 08:46:04'),
(10, 'blog@gmail.com', '2022-09-05 08:46:19', '2022-09-05 08:46:19'),
(11, 'admin@gmail.com', '2022-09-05 08:47:36', '2022-09-05 08:47:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$kCjXUm.lG3Rl9mV9tTL1q.3oGE0JIecKuXLV3.g0Q5by7Fp7122pe', '2022-09-04 20:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `heading` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `heading`, `created_at`, `updated_at`) VALUES
(1, 'PORTFOLIO', '2022-08-29 02:08:42', '2022-08-28 21:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `heading` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `heading`, `created_at`, `updated_at`) VALUES
(1, 'PRODUCT', '2022-08-29 11:46:12', '2022-08-29 06:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `headingone` text DEFAULT NULL,
  `headingtwo` text DEFAULT NULL,
  `contentone` text DEFAULT NULL,
  `headingthree` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `bg_one` text DEFAULT NULL,
  `contenttwo` text DEFAULT NULL,
  `contentthree` text DEFAULT NULL,
  `firstQuility` text DEFAULT NULL,
  `secondQuility` text DEFAULT NULL,
  `thirdQuility` text DEFAULT NULL,
  `FourthQuility` text DEFAULT NULL,
  `headingfour` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `headingone`, `headingtwo`, `contentone`, `headingthree`, `image`, `bg_one`, `contenttwo`, `contentthree`, `firstQuility`, `secondQuility`, `thirdQuility`, `FourthQuility`, `headingfour`, `created_at`, `updated_at`) VALUES
(1, 'SERVICES', 'WE SHAPE THE PERFECT SOLUTIONS', 'We are committed to providing our customers with exceptional service while offering our employees the best training.', 'WE WORK WITH INDUSTRIES', '1661737508.jpg', '1661956737.jpg', 'There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', 'Self-contained, state-of-the-art time clock', 'Scalability of up to 500 employees per time clock', 'The ability to connect up to 32 time clocks', 'Employee self-enrollment', 'WE’RE READY TO BRING BIGGER& STRONGER PROJECTS', '2022-08-29 01:27:33', '2022-08-31 09:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `showcase`
--

CREATE TABLE `showcase` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showcase`
--

INSERT INTO `showcase` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Graphic', 'Fimlor Experience', '1661722779.jpg', '2022-08-28 16:36:44', '2022-08-28 16:53:17'),
(3, 'Graphic', 'Fimlor Experience', '1661722924.jpg', '2022-08-28 16:42:04', '2022-08-28 16:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `post` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `Pinterest` text DEFAULT NULL,
  `Instagram` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `image`, `name`, `post`, `facebook`, `twitter`, `Pinterest`, `Instagram`, `created_at`, `updated_at`) VALUES
(2, '1661731662.jpg', 'DAVID COOPER', 'CO FOUNDER', 'www.facebook.com', 'www.twitter.com', 'https://www.pinterest.com/', 'www.instegram.com', '2022-08-28 19:07:42', '2022-08-29 00:07:42'),
(3, '1661731719.jpg', 'Reena Scot', 'Seo Specialist', 'www.facebook.com', 'www.twitter.com', 'https://www.pinterest.com/', 'www.instegram.com', '2022-08-28 19:08:39', '2022-08-29 00:08:39'),
(4, '1661731788.jpg', 'Hashir', 'Web Developer', 'www.facebook.com', 'www.twitter.com', 'https://www.pinterest.com/', 'www.instegram.com', '2022-08-28 19:09:48', '2022-08-29 00:09:48'),
(5, '1661731855.jpg', 'Aysha', 'Web Designer', 'www.facebook.com', 'www.twitter.com', 'https://www.pinterest.com/', 'www.instegram.com', '2022-08-28 19:10:55', '2022-08-29 00:10:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$27wr8dlymPPJZUzCFe8T/ONZ/AwjyiYiF0xQ71D2UAI8HwQXuIqG6', NULL, '2022-08-26 04:30:38', '2022-08-26 04:30:38'),
(2, 'admin', 'admin123@gmail.com', NULL, '$2y$10$Arf3TUabr6c4.AiZF6BQw..p48EOqFJMwPOtEjLXbBSJWMQUvCo1.', NULL, '2022-09-04 20:18:53', '2022-09-04 20:18:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_feedbacks`
--
ALTER TABLE `c_feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslette`
--
ALTER TABLE `newslette`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showcase`
--
ALTER TABLE `showcase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c_feedbacks`
--
ALTER TABLE `c_feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newslette`
--
ALTER TABLE `newslette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `showcase`
--
ALTER TABLE `showcase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
