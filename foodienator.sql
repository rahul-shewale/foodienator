-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 09:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodienator`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `email`, `date`) VALUES
(1, 'admin', '$2y$10$mI/hpZ59vGgjs/lPTQWLJu.I82O93AEJ3gwFycAjuibOjAGi9dcTm', 'admin123@gmail.com', '2021-02-26 16:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `name`, `email`, `phone`, `address`, `created`, `modified`, `status`) VALUES
(1, 'nitin', 'nitin@gmail.com', '6363636363', 'Sandip hostel , Mahiravani, Nashik', '2021-03-10 03:47:56', '2021-03-10 03:47:56', '1'),
(2, 'nitin', 'nitin@gmail.com', '6363636363', 'Sandip hostel , Mahiravani, Nashik', '2021-03-10 03:50:26', '2021-03-10 03:50:26', '1'),
(3, 'nitin', 'nitin@gmail.com', '6363636363', 'Sandip hostel , Mahiravani, Nashik', '2021-03-10 03:52:32', '2021-03-10 03:52:32', '1'),
(4, 'nitin', 'nitin@gmail.com', '6363636363', 'Sandip hostel , Mahiravani, Nashik', '2021-03-10 04:26:15', '2021-03-10 04:26:15', '1'),
(5, 'nitin', 'nitin@gmail.com', '6363636363', 'Sandip hostel , Mahiravani, Nashik', '2021-03-10 13:11:12', '2021-03-10 13:11:12', '1'),
(6, 'nitin', 'nitin@gmail.com', '6363636363', 'Sandip hostel , Mahiravani, Nashik', '2021-03-10 13:49:48', '2021-03-10 13:49:48', '1'),
(7, 'nitin', 'nitin@gmail.com', '6363636363', 'Sandip hostel , Mahiravani, Nashik', '2021-03-10 13:49:58', '2021-03-10 13:49:58', '1');

-- --------------------------------------------------------

--
-- Table structure for table `dishesh`
--

CREATE TABLE `dishesh` (
  `d_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `img` text NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dishesh`
--

INSERT INTO `dishesh` (`d_id`, `r_id`, `name`, `about`, `price`, `img`, `status`) VALUES
(1, 1, 'Royal Paratha', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores ea cum placeat in quaerat qui consectetur consequatur!', 120, 'paratha.jpg', '1'),
(2, 1, 'Royal Biryani', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores ea cum placeat in quaerat qui consectetur consequatur!', 150, 'biryani.jpeg', '1'),
(3, 2, 'Corn Pizza', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores ea cum placeat in quaerat qui consectetur consequatur!', 120, 'pizza.jpg', '1'),
(4, 2, 'Burger', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores ea cum placeat in quaerat qui consectetur consequatur!', 90, 'burger.jpg', '1'),
(5, 3, 'Sammy Sosa', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores ea cum placeat in quaerat qui consectetur consequatur!', 88, 'Sammy_Sosa.jpg', '1'),
(6, 4, 'Manchow Soup', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore modi velit, unde iste accusantium rem voluptatem!', 89, 'Manchow_Soup.jpeg', '1'),
(7, 4, 'Peri Peri chicken-satay', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore modi velit, unde iste accusantium rem voluptatem!', 120, 'Peri_Peri_chicken-satay.jpg', '1'),
(8, 3, 'Grilled Tofu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore modi velit, unde iste accusantium rem voluptatem!', 110, 'Grilled_Tofu.jpeg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `grand_total` float NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `c_id`, `grand_total`, `created`, `modified`, `status`) VALUES
(1, 1, 120, '2021-03-10 03:47:56', '2021-03-10 03:47:56', '1'),
(2, 2, 89, '2021-03-10 03:50:26', '2021-03-10 03:50:26', '1'),
(3, 3, 120, '2021-03-10 03:52:33', '2021-03-10 03:52:33', '1'),
(4, 4, 150, '2021-03-10 04:26:15', '2021-03-10 04:26:15', '1'),
(5, 5, 110, '2021-03-10 13:11:12', '2021-03-10 13:11:12', '1'),
(6, 6, 308, '2021-03-10 13:49:48', '2021-03-10 13:49:48', '1'),
(7, 7, 110, '2021-03-10 13:49:58', '2021-03-10 13:49:58', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  `sub_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `o_id`, `d_id`, `quantity`, `sub_total`) VALUES
(1, 1, 7, 1, 120),
(2, 2, 6, 1, 89),
(3, 3, 7, 1, 120),
(4, 4, 2, 1, 150),
(5, 5, 8, 1, 110),
(6, 6, 8, 2, 220),
(7, 6, 5, 1, 88),
(8, 7, 8, 1, 110);

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` text NOT NULL,
  `remarkdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `r_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `o_hr` varchar(255) NOT NULL,
  `c_hr` varchar(255) NOT NULL,
  `o_days` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`r_id`, `c_id`, `name`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `img`) VALUES
(1, 1, 'Royal Darbar', 'royaldar@gmail.com', '1-555-555-5555', 'royaldarbar.com', '10am', '7pm', 'mon-sat', 'Ostwal, Mahatma nagar, Nashik', 'darbar.jpeg'),
(2, 2, 'Pizzeria', 'pizzeria@gmail.com', '1-567-567-8888', 'pizzeria.com', '10am', '7pm', '24hr-x7', 'Mumbai naka, Dwarka, Nashik', 'pizzeria.jpeg'),
(3, 3, 'Woodside Inn', 'woodside@gmail.com', '1-333-222-7474', 'woodside.com', '9am', '8pm', 'mon-fri', 'Lorem ipsum , Nashik.', 'Juno.jpeg'),
(4, 3, 'Hakkasan', 'hakkasan@gmail.com', '1-222-333-7878', 'hakkasan.com', '10am', '7pm', 'mon-sat', 'College road, CCM, Nashik.', 'Hakkasan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `res_category`
--

CREATE TABLE `res_category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`) VALUES
(1, 'Indian'),
(2, 'Italian'),
(3, 'Continental'),
(4, 'Chinese');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`) VALUES
(1, 'rahul', 'Rahul', 'Shewale', 'rshewale@gmail.com', '9011153678', '$2y$10$l.ULzN6r7PapKkFllj12QO6ZKAo437IbmUBZ7ke4yTm3WnWtdJQkW', 'Room No 4,Praktan apartment ,Mahatma nagar, Nashik, Maharashtra.'),
(4, 'nitin', 'nitin', 'shewale', 'nitin@gmail.com', '9874561235', '$2y$10$9K/GoI2auZk/qzG7YHZhX.YkTH.qrVsN.Kim/0Utlu8DiovIsajCO', 'Sandip hostel , Mahiravani, Nashik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `dishesh`
--
ALTER TABLE `dishesh`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `res_category`
--
ALTER TABLE `res_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dishesh`
--
ALTER TABLE `dishesh`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `res_category`
--
ALTER TABLE `res_category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
