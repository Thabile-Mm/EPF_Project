-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 03:41 AM
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
-- Database: `epf_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldata`
--

CREATE TABLE `tbldata` (
  `userID` int(10) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `date_of_birth` date NOT NULL,
  `file_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbldata`
--

INSERT INTO `tbldata` (`userID`, `first_name`, `last_name`, `date_of_birth`, `file_path`) VALUES
(1, 'names', 'names', '0000-00-00', '.xlsx'),
(2, 'names', 'names', '0000-00-00', '.xlsx'),
(3, 'names', 'names', '0000-00-00', '.xlsx'),
(4, 'names', 'names', '0000-00-00', '.xlsx'),
(5, 'names', 'names', '0000-00-00', 'C:xampp	mpphp5AC1.tmp.xlsx'),
(6, 'names', 'names', '0000-00-00', 'Document/data.xlsx.xlsx'),
(7, 'names', 'names', '0000-00-00', 'Document/data.xlsx'),
(8, 'names', 'names', '0000-00-00', 'Document/data.xlsx'),
(9, 'names', 'names', '0000-00-00', 'Document/data.xlsx'),
(10, ' dd', 'ddd', '2023-02-09', 'Document/data.xlsx'),
(11, ' dd', 'ddd', '2023-02-09', 'Document/data.xlsx'),
(12, ' dd', 'ddd', '2023-02-15', 'Document/data.xlsx'),
(13, ' ss', 'ss', '2023-02-01', 'Document/data.xlsx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldata`
--
ALTER TABLE `tbldata`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbldata`
--
ALTER TABLE `tbldata`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
