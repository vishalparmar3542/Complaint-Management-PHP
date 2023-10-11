-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 03:44 PM
-- Server version: 8.1.0
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `position` varchar(20) DEFAULT NULL,
  `profileURL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `position`, `profileURL`) VALUES
(1, 'wantedbear007', 'admin', 'Lead Developer', 'https://bhanupratap-singh.vercel.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fbhanupratap.c3f0ef2d.png&w=1920&q=75'),
(2, 'vishal', 'admin', 'Support Developer', 'https://media.licdn.com/dms/image/D4D03AQEDAhgJKkVawA/profile-displayphoto-shrink_800_800/0/1688495623624?e=1702512000&v=beta&t=sTv4RrlMAfYds9-xeepn65__US1E0bj5cbIdjWQlm78');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int NOT NULL,
  `name` varchar(15) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `uniqueId` varchar(10) DEFAULT NULL,
  `status` int DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `name`, `contact`, `email`, `title`, `description`, `uniqueId`, `status`, `remarks`) VALUES
(2, 'Amit Sharma', '9876543210', 'amit@example.com', 'Billing Issue', 'I was charged incorrectly for my last purchase.', 'ABCD1234', 1, 'Investigating'),
(3, 'Priya Patel', '9876543211', 'priya@example.com', 'Product Quality', 'The product I received is of poor quality and doesn\'t work as expected.', 'EFGH5678', 1, 'Pending'),
(4, 'Rajesh Kumar', '9876543212', 'rajesh@example.com', 'Shipping Delay', 'My order has been delayed for more than a week.', 'IJKL9012', 1, 'Investigating'),
(5, 'Neha Verma', '9876543213', 'neha@example.com', 'Product Missing', 'One of the items in my order is missing from the delivery.', 'MNOP3456', 1, 'Investigating'),
(6, 'Ankur Gupta', '9876543214', 'ankur@example.com', 'Defective Product', 'The product I received is damaged and unusable.', 'QRST7890', 1, 'Pending'),
(7, 'Pooja Singh', '9876543215', 'pooja@example.com', 'Late Delivery', 'My order has not been delivered even though it was scheduled for today.', 'UVWX1234', 1, 'Investigating'),
(8, 'Rahul Singh', '9876543216', 'rahul@example.com', 'Wrong Product', 'I received a completely different product from what I ordered.', 'YZAB5678', 2, 'Pending'),
(9, 'Shreya Pandey', '9876543217', 'shreya@example.com', 'Refund Request', 'I would like to request a refund for my recent purchase.', 'CDEF9012', 1, 'Processing'),
(11, 'Nisha Gupta', '9876543219', 'nisha@example.com', 'Product Quality', 'The quality of the product is not up to the mark as advertised.', 'KLMN7890', 1, 'Investigating'),
(12, 'Vikram Sharma', '9876543220', 'vikram@example.com', 'Delayed Refund', 'I requested a refund, but it\'s taking too long to process.', 'OPQR1234', 1, 'Processing'),
(14, 'Arun Singh', '9876543222', 'arun@example.com', 'Website Error', 'I encountered an error while trying to place an order on your website.', 'WXYZ9012', 1, 'Investigating'),
(15, 'Kavita Patel', '9876543223', 'kavita@example.com', 'Late Response', 'I sent an email with a query, but I haven\'t received a response yet.', 'ABCD2345', 1, 'Pending'),
(16, 'Rajat Gupta', '9876543224', 'rajat@example.com', 'Faulty Electronics', 'The electronic device I purchased is malfunctioning.', 'EFGH3456', 1, 'Investigating'),
(17, 'Suman Kumar', '9876543225', 'suman@example.com', 'Wrong Size', 'The clothing I ordered is not the size I specified.', 'IJKL4567', 1, 'Pending'),
(18, 'Adyut', '9131987420', 'kumaradyut@gmail.com', 'Watch problem', 'My watch stopped working after water damage.', 'EKC67', 1, 'hot hai'),
(19, 'Vishal .', '7876170032', 'vishalparmar3542@gmail.com', 'Accenture package ', 'I am not getting what I deserve in accenture. LOL', 'DAO99', 1, 'LOL aaukat me'),
(20, 'Vishal .', '7876170032', 'vishalparmar3542@gmail.com', 'Accenture package ', 'I am not getting what I deserve in accenture. LOL', '1A8MX', 2, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
