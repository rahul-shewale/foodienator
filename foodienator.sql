-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 08:43 AM
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
-- Table structure for table `dishesh`
--

CREATE TABLE `dishesh` (
  `d_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dishesh`
--

INSERT INTO `dishesh` (`d_id`, `r_id`, `name`, `about`, `price`, `img`) VALUES
(1, 1, 'Royal Paratha', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores ea cum placeat in quaerat qui consectetur consequatur!', 120, 'paratha.jpg'),
(2, 1, 'Royal Biryani', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores ea cum placeat in quaerat qui consectetur consequatur!', 150, 'biryani.jpeg'),
(3, 2, 'Corn Pizza', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores ea cum placeat in quaerat qui consectetur consequatur!', 120, 'pizza.jpg'),
(4, 2, 'Burger', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores ea cum placeat in quaerat qui consectetur consequatur!', 90, 'burger.jpg'),
(5, 3, 'Sammy Sosa', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores ea cum placeat in quaerat qui consectetur consequatur!', 88, 'Sammy_Sosa.jpg'),
(6, 4, 'Manchow Soup', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore modi velit, unde iste accusantium rem voluptatem!', 89, 'Manchow_Soup.jpeg'),
(7, 4, 'Peri Peri chicken-satay', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore modi velit, unde iste accusantium rem voluptatem!', 120, 'Peri_Peri_chicken-satay.jpg'),
(8, 3, 'Grilled Tofu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore modi velit, unde iste accusantium rem voluptatem!', 110, 'Grilled_Tofu.jpeg');

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
(1, 'rahul', 'Rahul', 'Shewale', 'rshewale@gmail.com', '9011153678', '$2y$10$8NLoWN03P/tv/Fq.zX12ueWHs.fXJccWiiy1dClQCmtkVqWMW7fRO', 'Room No 5,Praktan apartment ,Mahatma nagar, Nashik, Maharashtra.'),
(8, 'nitin', 'nitin', 'raje', 'nitin@gmail.com', '9874563214', '$2y$10$6MbBWJT5Aik/Th2SCO5kB.l6PeT618Han2MiI6ic2TMxhDpMYNW2u', 'Mahiravani, Nashik.'),
(15, 'rohit', 'rohit', 'jha', 'rohit@gmail.com', '9823454178', '$2y$10$MpmRa3e57BHs8s95qT/oQO1ie1MVJ5M.yifNJKZ4IaklTVF55BhRm', 'sailela apt, jatra hotel, adgaon road, nashik');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `o_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` float NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `success-date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`o_id`, `u_id`, `d_id`, `d_name`, `quantity`, `price`, `status`, `date`, `success-date`) VALUES
(7, 8, 4, 'Burger', 1, 90, 'in process', '2021-03-14 21:05:57', '2021-03-15 09:05:08'),
(8, 8, 6, 'Manchow Soup', 1, 89, 'closed', '2021-03-14 21:05:57', '2021-03-15 09:05:16'),
(10, 1, 2, 'Royal Biryani', 1, 150, 'closed', '2021-03-15 08:43:45', '2021-03-15 09:07:18'),
(11, 1, 8, 'Grilled Tofu', 1, 110, 'closed', '2021-03-15 08:45:00', '2021-03-15 09:07:13'),
(13, 15, 4, 'Burger', 2, 180, 'closed', '2021-03-17 07:44:42', '2021-03-17 06:46:33'),
(14, 15, 2, 'Royal Biryani', 1, 150, 'in process', '2021-03-17 07:44:42', '2021-03-17 06:46:39'),
(15, 15, 3, 'Corn Pizza', 1, 120, NULL, '2021-03-17 07:44:42', '2021-03-17 02:14:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `dishesh`
--
ALTER TABLE `dishesh`
  ADD PRIMARY KEY (`d_id`);

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
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dishesh`
--
ALTER TABLE `dishesh`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
