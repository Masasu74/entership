-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 19, 2023 at 09:15 PM
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
-- Database: `Stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `Furniture`
--

CREATE TABLE `Furniture` (
  `FurnitureId` int(11) NOT NULL,
  `FurnitureName` varchar(30) NOT NULL,
  `FurnitureOwnerName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Furniture`
--

INSERT INTO `Furniture` (`FurnitureId`, `FurnitureName`, `FurnitureOwnerName`) VALUES
(1, 'Imbaho', 'Denis'),
(5, 'Urubaho', 'Yves');

-- --------------------------------------------------------

--
-- Table structure for table `Import`
--

CREATE TABLE `Import` (
  `FurnitureId` int(11) DEFAULT NULL,
  `ImportDate` date DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Import`
--

INSERT INTO `Import` (`FurnitureId`, `ImportDate`, `Quantity`) VALUES
(1, '2023-03-02', 10),
(5, '2023-03-24', 10);

-- --------------------------------------------------------

--
-- Table structure for table `Manager`
--

CREATE TABLE `Manager` (
  `ManagerId` int(11) NOT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `Pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Manager`
--

INSERT INTO `Manager` (`ManagerId`, `Username`, `Pass`) VALUES
(1, 'Salomon', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Furniture`
--
ALTER TABLE `Furniture`
  ADD PRIMARY KEY (`FurnitureId`);

--
-- Indexes for table `Import`
--
ALTER TABLE `Import`
  ADD KEY `FurnitureId` (`FurnitureId`);

--
-- Indexes for table `Manager`
--
ALTER TABLE `Manager`
  ADD PRIMARY KEY (`ManagerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Furniture`
--
ALTER TABLE `Furniture`
  MODIFY `FurnitureId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Import`
--
ALTER TABLE `Import`
  ADD CONSTRAINT `import_ibfk_1` FOREIGN KEY (`FurnitureId`) REFERENCES `Furniture` (`FurnitureId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
