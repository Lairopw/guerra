-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2022 at 06:24 PM
-- Server version: 8.0.30-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guerra`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `token` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `pseudo`, `email`, `password`, `ip`, `registration_date`, `token`) VALUES
(1, 'Lairopw', 'vincent.voisin@epita.fr', '$2y$12$5XHg9RW7T.FK9Uu84L4u/Ot7TxVCaUrbPAhd4A8fFAsohhJTTFTgC', '::1', '2022-10-13 23:20:40', '65482a628286b51b299ea6059f47cba6a47d38b97da66b1eaef00120eaeaf482808deae960f42905a18a2d1e3e7b9e790d4c1c1cdca949a4a9734bbd342d9bf3');

-- --------------------------------------------------------

--
-- Table structure for table `players_stats`
--

CREATE TABLE `players_stats` (
  `player_id` int NOT NULL,
  `x_coord` int NOT NULL,
  `y_coord` int NOT NULL,
  `color` varchar(10) NOT NULL,
  `crea_indu` double NOT NULL DEFAULT '0',
  `centrale` double DEFAULT '0',
  `canon` double NOT NULL DEFAULT '0',
  `troupe_offensive` double NOT NULL DEFAULT '0',
  `troupe_logistique` double NOT NULL DEFAULT '0',
  `industrie` double NOT NULL DEFAULT '500',
  `energie` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `players_stats`
--

INSERT INTO `players_stats` (`player_id`, `x_coord`, `y_coord`, `color`, `crea_indu`, `centrale`, `canon`, `troupe_offensive`, `troupe_logistique`, `industrie`, `energie`) VALUES
(1, 354, 79, '#6cdbd9', 0, 0, 0, 0, 0, 500, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
