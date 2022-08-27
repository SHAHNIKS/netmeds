-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 12:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmeds`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `model` varchar(64) NOT NULL,
  `sku` varchar(64) NOT NULL,
  `quantity` int(4) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `price` decimal(15,2) NOT NULL DEFAULT 0.00,
  `date_available` date NOT NULL DEFAULT current_timestamp(),
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` varchar(12) NOT NULL DEFAULT current_timestamp(),
  `date_modified` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `model`, `sku`, `quantity`, `image`, `price`, `date_available`, `sort_order`, `status`, `date_added`, `date_modified`) VALUES
(1, 'Covid-19 Test', 'Covid Kit', 5, 'covid-19.webp', '4500.00', '2022-08-27', 1, 1, '', ''),
(2, 'Eye Test - Vision Express', 'eye', 500, 'eye.jpg', '49.00', '2022-08-27', 2, 1, '', ''),
(3, 'Yttrium Therapy', 'Yttrium Therapy', 500, 'ytt.jpg', '17500.00', '2022-08-27', 0, 1, 'current_time', ''),
(4, 'X Ray Wrist Lateral View', 'X Ray Wrist Lateral View', 1000, 'xray.jpg', '120.00', '2022-08-27', 0, 1, 'current_time', ''),
(5, 'X Ray Whole Spine Lateral View', 'X Ray Whole Spine Lateral View', 500, 'x.jpg', '180.00', '2022-08-27', 0, 1, 'current_time', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_description`
--

CREATE TABLE `product_description` (
  `product_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `tag` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_description`
--

INSERT INTO `product_description` (`product_id`, `language_id`, `slug`, `name`, `description`, `tag`, `meta_title`, `meta_description`, `meta_keyword`) VALUES
(1, 1, 'covid-19-kit', 'Covid-19 Test', 'Covid test by metropolis', 'Covid-19 Test', 'Covid-19 Test', 'Covid-19 Test by metropolis', 'Covid-19 Test'),
(2, 1, 'eye_test', 'Eye Test - Vision Express', 'Eye Test - Vision Express', 'Eye Test - Vision Express', 'Eye Test - Vision Express', 'Eye Test - Vision Express', 'Eye Test - Vision Express'),
(3, 1, 'yttrium-therapy', 'Yttrium Therapy', 'Yttrium Therapy', 'Yttrium Therapy', 'Yttrium Therapy', 'Yttrium Therapy', 'Yttrium Therapy'),
(4, 1, 'X Ray Wrist Lateral View', 'X Ray Wrist Lateral View', 'X Ray Wrist Lateral View', 'X Ray Wrist Lateral View', 'X Ray Wrist Lateral View', 'X Ray Wrist Lateral View', 'X Ray Wrist Lateral View'),
(5, 1, 'X Ray Whole Spine Lateral View', 'X Ray Whole Spine Lateral View', 'X Ray Whole Spine Lateral View', 'X Ray Whole Spine Lateral View', 'X Ray Whole Spine Lateral View', 'X Ray Whole Spine Lateral View', 'X Ray Whole Spine Lateral View');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `image`) VALUES
(1, 1, 'covid-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_session`
--

CREATE TABLE `tbl_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(150) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `nama_user`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', '644d20715088394f1b9e31097fc1ca383a838b5b', '2022-08-27 04:14:16', '2022-08-27 04:14:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_description`
--
ALTER TABLE `product_description`
  ADD PRIMARY KEY (`product_id`,`language_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
