-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 04:52 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `szinesemberek`
--

-- --------------------------------------------------------

--
-- Table structure for table `emberek`
--

CREATE TABLE `emberek` (
  `id` int(11) NOT NULL,
  `nev` varchar(100) NOT NULL,
  `kor` int(11) NOT NULL,
  `hallgato` tinyint(1) NOT NULL,
  `dolgozik` tinyint(1) NOT NULL,
  `nem` varchar(1) NOT NULL,
  `szin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emberek`
--

INSERT INTO `emberek` (`id`, `nev`, `kor`, `hallgato`, `dolgozik`, `nem`, `szin`) VALUES
(1, 'Tibi', 41, 1, 1, 'F', 'blue'),
(3, 'Kata', 23, 1, 0, 'N', 'orange'),
(4, 'Ã‰vi', 34, 0, 1, 'N', 'yellow'),
(5, 'Petra', 32, 1, 0, 'N', 'green');

-- --------------------------------------------------------

--
-- Table structure for table `szinek`
--

CREATE TABLE `szinek` (
  `id` int(11) NOT NULL,
  `nev` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `szinek`
--

INSERT INTO `szinek` (`id`, `nev`) VALUES
(1, 'red'),
(2, 'blue'),
(3, 'yellow'),
(4, 'green'),
(5, 'orange');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emberek`
--
ALTER TABLE `emberek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `szinek`
--
ALTER TABLE `szinek`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emberek`
--
ALTER TABLE `emberek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `szinek`
--
ALTER TABLE `szinek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
