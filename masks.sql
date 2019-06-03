-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2018 at 02:33 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mia`
--

-- --------------------------------------------------------

--
-- Table structure for table `masks`
--

CREATE TABLE `masks` (
  `Mask_Id` varchar(20) NOT NULL,
  `Type` int(1) NOT NULL,
  `Demand` enum('STNSE','FGM','VSH','') NOT NULL,
  `Price` int(2) NOT NULL,
  `path` text NOT NULL,
  `tekst` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masks`
--

INSERT INTO `masks` (`Mask_Id`, `Type`, `Demand`, `Price`, `path`, `tekst`) VALUES
('Lavender', 2, 'VSH', 20, 'images/Lavender.jpg', 'This lavender hair mask will condition your hair and give it a lovely shine and volume. The lavender repairs damage and adds a relaxing scent which makes the entire experience more enjoyable.'),
('Moringa', 2, 'FGM', 26, 'images/Moringa.jpg', 'This moringa hair mask is a great deep conditioner and it makes your hair grow faster. The moringa mask will also moisturize the damaged hair and add a relaxing scent.\r\n'),
('Rhassoul', 2, 'STNSE', 34, 'images/Rhassoul.jpg', 'If your active lifestyle is hard on your hair, this rhassoul hair mask will make it stronger. This velvety mask is made to revitalize your split ends, leaving your hair really soft. \r\n\r\n\r\n'),
('Rose', 1, 'VSH', 40, 'images/Rose.jpg', 'This rose hair mask will condition your hair and give it a lovely shine and volume. The rose repairs damage and adds a relaxing scent which makes the entire experience more enjoyable.'),
('Sea', 1, 'FGM', 32, 'images/Sea.jpg', 'This sea hair mask will condition your hair and make it grow faster. The sea mask will also moisturize tje damaged hair and add a relaxing scent.'),
('Turmeric', 1, 'STNSE', 43, 'images/Turmeric.jpg', 'This turmeric hair mask can help to benefit your hair in several ways. It will make your hair really strong and revitalize your split ends, leaving your hair really soft');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masks`
--
ALTER TABLE `masks`
  ADD PRIMARY KEY (`Mask_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
