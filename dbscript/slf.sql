-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2018 at 11:01 AM
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
-- Table structure for table `lodge`
--

CREATE TABLE `lodge` (
  `id` int(8) NOT NULL,
  `lodge_id` varchar(12) NOT NULL,
  `lodge_name` varchar(30) NOT NULL,
  `lodge_img` varchar(30) NOT NULL,
  `type_of` varchar(70) NOT NULL,
  `user_id` varchar(12) NOT NULL,
  `state` varchar(20) NOT NULL,
  `lga` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `price` int(8) NOT NULL,
  `purchased` tinyint(1) NOT NULL,
  `meta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lodge`
--

INSERT INTO `lodge` (`id`, `lodge_id`, `lodge_name`, `lodge_img`, `type_of`, `user_id`, `state`, `lga`, `address`, `price`, `purchased`, `meta`) VALUES
(1, 'uasDf2098', 'Bet Lodge', 'bg1.jpg', '', '123ayyyy', 'abia', '0', '3 saviours str', 40, 1, 'Beautiful House');

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
  `picture` varchar(17) NOT NULL DEFAULT 'default.jpg',
  `role` varchar(10) NOT NULL,
  `user_ip` varchar(20) NOT NULL,
  `validated` varchar(7) NOT NULL DEFAULT 'false',
  `reg_time` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `firstname`, `lastname`, `email`, `gender`, `phone`, `address`, `password`, `picture`, `role`, `user_ip`, `validated`, `reg_time`) VALUES
(1, '123ayyyy', 'ezim', 'chukwuebuka', 'zicomighty@gmail.com', 'male', '070329438777', '3 saviours str', '688981fe5042d9d30fd1ed0c8473a8ed1f782281', '', 'admin', '', 'true', 0),
(11, '7EGhcM9061', 'amaka', 'james', 'zicomighty3@gmail.com', 'female', '09802920101', 'abia', '474ba67bdb289c6263b36dfd8a7bed6c85b04943', '7EGhcM9061.jpg', 'user', '::1', '', 1517469061),
(12, 'Yp76H27853', 'zico', 'bliss', 'zicomighteye@gmail.com', 'male', '0292028220', 'imo', '688981fe5042d9d30fd1ed0c8473a8ed1f782281', '', 'user', '::1', 'false', 1517607853),
(13, '4xz8b20974', 'ezim', 'chinedu', 'ezimchinedu@gmail.com', 'male', '0808929202820', 'abia', '79ec072e0e48791aeeedd8d5b2d7a3881e4dfd68', 'default.jpg', 'user', '::1', 'false', 1517610974),
(14, '6rYwht8627', '', '', 'zicomightyhgfhg@gmail.com', 'male', '12332444', 'rwrrwrwr', '688981fe5042d9d30fd1ed0c8473a8ed1f782281', 'default.jpg', 'user', '::1', 'false', 1517618627),
(15, 'TISlz82195', 'chris', 'jericho', 'chrisjerico@yahoo.com', 'male', '0803247834', 'sokoto', '688981fe5042d9d30fd1ed0c8473a8ed1f782281', 'default.jpg', 'user', '127.0.0.1', 'false', 1517712195),
(16, 'OQ0FSm6031', 'bvbv', 'hvhbv&#39;', 'zicomighty47@gmail.com', 'female', '77', 'hghuhuhi', '688981fe5042d9d30fd1ed0c8473a8ed1f782281', 'default.jpg', 'user', '127.0.0.1', 'false', 1517716031),
(17, 'gqhO4K8093', 'anita', 'orji', 'anitaorji@yahoo.com', 'female', '08039423822', 'abia', 'd56c82a0ab1c536999c31ae5e2c0dab85f47a331', 'default.jpg', 'user', '::1', 'false', 1517778093),
(18, 'BDNmE93339', 'joe', 'west', 'joe@gmail.com', 'male', '09043423', 'imo', '16a9a54ddf4259952e3c118c763138e83693d7fd', 'default.jpg', 'user', '127.0.0.1', 'false', 1517793339);

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
-- Indexes for table `lodge`
--
ALTER TABLE `lodge`
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
-- AUTO_INCREMENT for table `lodge`
--
ALTER TABLE `lodge`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `site_temp`
--
ALTER TABLE `site_temp`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
