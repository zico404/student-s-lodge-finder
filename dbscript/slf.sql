-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2018 at 12:46 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slf`
--

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` int(7) NOT NULL,
  `browser` varchar(20) DEFAULT NULL,
  `location` varchar(20) NOT NULL,
  `ip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id`, `browser`, `location`, `ip`) VALUES
(7, NULL, '', '::1'),
(8, NULL, '', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(8) NOT NULL,
  `typeof` varchar(20) NOT NULL,
  `item_id` varchar(12) NOT NULL,
  `user_id` varchar(12) NOT NULL,
  `like_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `typeof`, `item_id`, `user_id`, `like_amount`) VALUES
(6, 'lodge', '0nzgkZ2410', '123ayyyy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lodge`
--

CREATE TABLE `lodge` (
  `id` int(8) NOT NULL,
  `lodge_id` varchar(12) NOT NULL,
  `lodge_name` varchar(30) NOT NULL,
  `lodge_img` varchar(100) NOT NULL,
  `type_of` varchar(70) NOT NULL,
  `user_id` varchar(12) NOT NULL,
  `user_role` varchar(10) NOT NULL DEFAULT 'user',
  `school` varchar(20) NOT NULL,
  `lga` varchar(30) NOT NULL,
  `meta` varchar(200) NOT NULL,
  `upload_time` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lodge`
--

INSERT INTO `lodge` (`id`, `lodge_id`, `lodge_name`, `lodge_img`, `type_of`, `user_id`, `user_role`, `school`, `lga`, `meta`, `upload_time`) VALUES
(21, 'FsehJH8714', 'dfff', '56292f_4b701296d2574f54b22357cbcb9f4bb2.jpg', '1room', 'Yp76H27853', 'user', 'abia', 'dre', 'ry5y5y5', 1520668714),
(22, 'SHixvM9985', 'st. michael lodge', '102701709-472995504.530x298.jpg', '1room', 'Yp76H27853', 'user', 'abia', 'Aba North', 'ghthtt', 1520669985),
(23, '0nzgkZ2410', 'azikiwe lodge', 'Screenshot-2018-1-31 Miss Ultimate Universe.png', 'selfcon', '123ayyyy', 'admin', 'anambra', 'nnewi', 'this is a very beautiful lodge', 1520672410),
(24, '3ICONK4565', 'twelve lodge', 'contact-us-professional-site-web-designer-ch-1.jpg', '1room', '123ayyyy', 'admin', 'imo', 'owerri', 'beautiful', 1520674565),
(25, 'PNIlBm8850', 'otueke lodge', '21682140-fdi-foreign-direct-investment-concept.jpg', 'selfcon', 'Yp76H27853', 'user', 'delta', 'iwoke', 'has a big room', 1520738850),
(26, 'BeA2qV6658', 'zicomighty lodge', 'FDI.jpg', '1room', 'Yp76H27853', 'user', 'abia_poly', '', 'hello world', 1520936658),
(27, 'QLbRVX7890', 'abam lodge', 'NDdrone.png', '1room', 'Yp76H27853', 'user', 'abia poly', '', 'holla', 1520977890);

-- --------------------------------------------------------

--
-- Table structure for table `lodge_meta`
--

CREATE TABLE `lodge_meta` (
  `id` int(6) NOT NULL,
  `lodge_id` varchar(20) NOT NULL,
  `views` int(6) NOT NULL DEFAULT '0',
  `light` varchar(3) NOT NULL,
  `within_school` varchar(3) NOT NULL,
  `near_school` varchar(3) NOT NULL,
  `water` varchar(3) NOT NULL,
  `approved` int(2) NOT NULL DEFAULT '0',
  `available` int(2) NOT NULL DEFAULT '1',
  `price` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lodge_meta`
--

INSERT INTO `lodge_meta` (`id`, `lodge_id`, `views`, `light`, `within_school`, `near_school`, `water`, `approved`, `available`, `price`) VALUES
(2, 'SHixvM9985', 0, 'on', 'on', '', 'on', 1, 1, 20000),
(3, '0nzgkZ2410', 0, 'on', '', 'on', '', 0, 1, 55000),
(4, '3ICONK4565', 0, 'on', '', 'on', 'on', 0, 1, 30000),
(5, 'PNIlBm8850', 0, 'on', '', 'on', 'on', 0, 1, 40000),
(6, 'BeA2qV6658', 0, 'on', '', 'on', 'on', 0, 1, 40000),
(7, 'QLbRVX7890', 0, 'on', '', 'on', 'on', 0, 1, 33000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(7) NOT NULL,
  `order_id` varchar(12) NOT NULL,
  `user_id` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_mate`
--

CREATE TABLE `room_mate` (
  `id` int(6) NOT NULL,
  `user_id` int(12) NOT NULL,
  `school` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `site_temp`
--

CREATE TABLE `site_temp` (
  `id` int(4) NOT NULL,
  `header_doctype` varchar(400) NOT NULL,
  `main_header` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_temp`
--

INSERT INTO `site_temp` (`id`, `header_doctype`, `main_header`) VALUES
(1, '', '<header>\r\n		<nav>\r\n		\r\n		<div class=\"nav-wrapper purple darken-4\">\r\n			\r\n			<a class=\"button-collapse right\" data-activates=\"mobile-menu\"><i class=\"ion-android-menu\"></i></a>\r\n			<a style=\"margin-left: 20px\" class=\"brand-logo left\"><img src=\"img/logo.jpg\" class=\"circle\" width=\"70\" height=\"70\"></a>\r\n\r\n<form class=\"center\">\r\n        <div class=\"input-field\">\r\n          <input id=\"search\" type=\"search\" required>\r\n          <label class=\"label-icon\" for=\"search\"><i class=\"material-icons\">search</i></label>\r\n          <i class=\"material-icons\">close</i>\r\n        </div>\r\n      </form>\r\n\r\n			<ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">\r\n				\r\n				<li class=\"active\"><a href=\"#\"><i class=\"left ion-android-home\" style=\"font-size: 17px\"></i>Home</a></li>\r\n				<li><a href=\"#\">link1</a></li>\r\n				<li><a class=\"dropdown-button\" data-activates=\"dropdown1\" href=\"#\">Dropdown<i style=\"font-size: 12px\" class=\"right ion-arrow-down-b\"></i></a></li>\r\n				<li><a href=\"#\">link3</a></li>\r\n\r\n			</ul>\r\n\r\n			<!-- Mobile Menu -->\r\n\r\n			<ul id=\"mobile-menu\" class=\"side-nav\">\r\n				\r\n\r\n				<li><a href=\"#\">One</a></li>\r\n				<li><a href=\"#\">Two</a></li>\r\n				<li class=\"divider\"></li>\r\n				<li><a href=\"#\">Three</a></li>\r\n\r\n			</ul>\r\n\r\n			<!-- Dropdown Content -->\r\n\r\n\r\n			<ul id=\"dropdown1\" class=\"dropdown-content\">\r\n				\r\n\r\n				<li><a class=\"purple-text text-darken-4\" href=\"#\">One</a></li>\r\n				<li><a class=\"purple-text text-darken-4\" href=\"#\">Two</a></li>\r\n				<li class=\"divider\"></li>\r\n				<li><a class=\"purple-text text-darken-4\" href=\"#\">Three</a></li>\r\n\r\n			</ul>\r\n\r\n		</div>\r\n\r\n	</nav>\r\n	\r\n\r\n	</header>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(7) NOT NULL,
  `uid` varchar(12) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `password` varchar(70) NOT NULL,
  `picture` varchar(17) NOT NULL DEFAULT 'default.png',
  `role` varchar(10) NOT NULL,
  `user_ip` varchar(20) NOT NULL,
  `validated` varchar(7) NOT NULL DEFAULT 'false',
  `reg_time` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `firstname`, `lastname`, `email`, `gender`, `phone`, `address`, `password`, `picture`, `role`, `user_ip`, `validated`, `reg_time`) VALUES
(1, '123ayyyy', 'ezim', 'chukwuebuka', 'zicomighty@gmail.com', 'male', '070329438777', '3 saviours str', '688981fe5042d9d30fd1ed0c8473a8ed1f782281', 'default.png', 'admin', '', 'true', 0),
(12, 'Yp76H27853', 'zico', 'bliss', 'zicomighteye@gmail.com', 'male', '0292028220', 'imo', '688981fe5042d9d30fd1ed0c8473a8ed1f782281', 'default.png', 'user', '::1', 'false', 1517607853);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(10) NOT NULL,
  `uid` varchar(12) NOT NULL,
  `log_time` int(20) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `location` varchar(70) NOT NULL,
  `browser` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lodge`
--
ALTER TABLE `lodge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lodge_meta`
--
ALTER TABLE `lodge_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_temp`
--
ALTER TABLE `site_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lodge`
--
ALTER TABLE `lodge`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `lodge_meta`
--
ALTER TABLE `lodge_meta`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_temp`
--
ALTER TABLE `site_temp`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
