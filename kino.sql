-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 01:20 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kino`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `user_pass` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `user_images` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`, `user_images`) VALUES
(1, 'admin@kino.com', 'admin123', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `customer_name` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `customer_pass` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `customer_email` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `customer_username` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_name`, `customer_pass`, `customer_email`, `customer_username`) VALUES
(25, '::1', 'test', 'test', 'test@test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `filmovi`
--

CREATE TABLE `filmovi` (
  `filmovi_id` int(11) NOT NULL,
  `filmovi_ime` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `filmovi_sadrzaj` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `filmovi_ocjena` int(11) NOT NULL,
  `filmovi_slika` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `filmovi_redatelj` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `filmovi_glumci` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `filmovi_datum_o` date NOT NULL,
  `filmovi_datum_p` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `filmovi_trajanje` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `filmovi_zanr` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filmovi`
--

INSERT INTO `filmovi` (`filmovi_id`, `filmovi_ime`, `filmovi_sadrzaj`, `filmovi_ocjena`, `filmovi_slika`, `filmovi_redatelj`, `filmovi_glumci`, `filmovi_datum_o`, `filmovi_datum_p`, `filmovi_trajanje`, `filmovi_zanr`) VALUES
(16, 'Brzi i Å¾estoki 8', ' ds', 0, 'brziizestoki.jpg', 'as', 'as', '2018-05-10', '12.12.2018', '125', 'Akcija');

-- --------------------------------------------------------

--
-- Table structure for table `rezervacije`
--

CREATE TABLE `rezervacije` (
  `rezervacije_id` int(11) NOT NULL,
  `filmovi_id` varchar(200) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `filmovi_datum_p` varchar(200) NOT NULL,
  `filmovi_datum_r` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `filmovi`
--
ALTER TABLE `filmovi`
  ADD PRIMARY KEY (`filmovi_id`);

--
-- Indexes for table `rezervacije`
--
ALTER TABLE `rezervacije`
  ADD PRIMARY KEY (`rezervacije_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `filmovi`
--
ALTER TABLE `filmovi`
  MODIFY `filmovi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rezervacije`
--
ALTER TABLE `rezervacije`
  MODIFY `rezervacije_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
