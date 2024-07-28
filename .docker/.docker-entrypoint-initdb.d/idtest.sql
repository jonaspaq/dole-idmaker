-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2018 at 01:07 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `personID` int(11) NOT NULL,
  `generatedID` varchar(50) NOT NULL,
  `firstName` varchar(32) NOT NULL,
  `middleName` varchar(32) NOT NULL,
  `lastName` varchar(32) NOT NULL,
  `nameSuffix` varchar(10) NOT NULL,
  `school` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `designation` varchar(32) NOT NULL,
  `emFirstName` varchar(32) NOT NULL,
  `emMidName` varchar(15) NOT NULL,
  `emLastName` varchar(32) NOT NULL,
  `emAddress` varchar(100) NOT NULL,
  `emContact` varchar(50) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`personID`, `generatedID`, `firstName`, `middleName`, `lastName`, `nameSuffix`, `school`, `address`, `contact`, `designation`, `emFirstName`, `emMidName`, `emLastName`, `emAddress`, `emContact`, `file`) VALUES
(8, '', 'Romulo', 'Dumagid', 'Balikutan', '', 'University of Harvard in Cebu', 'Banawa Jones Colon, Cebu City', '09991788866', 'Employee', 'Akong ', '', 'Mama', 'Balay sa Amoa', '099292929929', '54488-Boy.jpg'),
(9, '', 'Hannah', 'Nancy', 'Montana', '', 'University De La Salle Ateneo', 'Mambaling Pardo Basak, Lapulapu City', '092212345689', 'Janitor', 'Another', '', 'Mother', 'In the house', '099292929929', '67096-Girl.jpg'),
(17, '', 'Mae', 'Estor', 'Chua', 'Jr. ', 'University of Harvard in Cebu', 'Banawa Jones Colon, Cebu City, Phillippines 6000', '09228268653', 'IT - SECTION', 'Annabelle', 'Ungo', 'Conjuring', 'Banawa Jones Colon, Cebu City, Phillippines 600000000000000000000000000000 000000000000000000000000 ', '09123712377', '35103-DownyJr..jpg'),
(18, '', 'John Daryl', 'Nilles', 'Alquizalas', '', 'Cebu Technological University', 'Nivel Hills, Lahug, Cebu City', '09967971370', 'MALSU', 'Elvira', 'Montemayor', 'Alquizalas', 'Japitan, Barili, Cebu', '09351727508', '88007-daryl.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`personID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `personID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
