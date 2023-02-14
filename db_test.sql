-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 02:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_department`
--

CREATE TABLE `table_department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_department`
--

INSERT INTO `table_department` (`id`, `department_name`) VALUES
(1, 'Information Technology'),
(2, 'Accounting');

-- --------------------------------------------------------

--
-- Table structure for table `table_inventory`
--

CREATE TABLE `table_inventory` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `device` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_inventory`
--

INSERT INTO `table_inventory` (`id`, `user_name`, `device`, `date`, `department_id`) VALUES
(7, 'Lebron James', 'HP Black Laptop', '2023-02-14', 1),
(13, 'Dwane Wade', 'HP Blue Laptop', '2023-02-14', 1),
(17, 'Kyrie Irving', 'HP White Laptop', '2023-02-14', 1),
(18, 'Danny Green', 'HP Green Laptop', '2023-02-14', 1),
(21, 'Stephene Curry', 'HP Pink Laptop', '2023-02-14', 2),
(22, 'Klay Thompson', 'HP Pink Laptop', '2023-02-14', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_department`
--
ALTER TABLE `table_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_inventory`
--
ALTER TABLE `table_inventory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_department`
--
ALTER TABLE `table_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_inventory`
--
ALTER TABLE `table_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
