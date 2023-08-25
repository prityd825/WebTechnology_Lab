-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2023 at 08:23 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab2`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_name`, `city`) VALUES
('', ''),
('', ''),
('abc', 'dhaka'),
('abd', 'dhaka'),
('sonali bank', 'dhaka'),
('sonali bank', 'noakhali'),
('sonali bank', 'noakhali'),
('kkkkkk', 'noakhali'),
('abc', 'noakhali');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `person_name` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`person_name`, `street`, `city`) VALUES
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('prity', 'school road', ''),
('prity', 'school road', 'dhaka'),
('riya', 'Dhaka', 'dhaka'),
('bithy', 'maijee', 'noakhali'),
('rafi', 'maijee', 'noakhali'),
('smith', 'green road', 'chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `manages`
--

CREATE TABLE `manages` (
  `person_name` varchar(255) NOT NULL,
  `manager_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manages`
--

INSERT INTO `manages` (`person_name`, `manager_name`) VALUES
('0', ''),
('0', ''),
('0', ''),
('keya', 'bornitaaa'),
('bithy', 'bornita'),
('mina', 'mita'),
('tariq', 'zahid');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `person_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `salary` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`person_name`, `company_name`, `salary`) VALUES
('aaa', 'Small bank Corportion', 900),
('ab', 'kkkkkk', 2147483647),
('bina', 'Small bank Corportion', 9000000),
('bithy', 'Small bank Corportion', 9000000),
('bornita', 'abc', 67890),
('dina', 'Sonali Bank LTD', 123),
('etu', 'sonali bank', 67890),
('mamun', 'abc', 2147483647),
('prity', 'abc', 12345),
('priya', 'abc', 67890),
('raju', 'iit LTD', 100000000),
('tahsin', 'Small Bank Corporation', 100000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`person_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
