-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 10:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fees_informationsytem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_administrator`
--

CREATE TABLE `tbl_administrator` (
  `adm_ID` int(50) NOT NULL,
  `adm_FName` varchar(50) NOT NULL,
  `adm_LName` varchar(50) NOT NULL,
  `Adm_UName` varchar(50) NOT NULL,
  `Adm_Password` varchar(8) NOT NULL,
  `Adm_UpdateDate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_administrator`
--

INSERT INTO `tbl_administrator` (`adm_ID`, `adm_FName`, `adm_LName`, `Adm_UName`, `Adm_Password`, `Adm_UpdateDate`) VALUES
(1, 'Joline', 'Pierre', 'Joline', 'Joline10', '2022-06-21 22:15:55.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

CREATE TABLE `tbl_class` (
  `class_ID` int(50) NOT NULL,
  `class_Name` varchar(50) NOT NULL,
  `class_DateCreated` datetime(6) NOT NULL,
  `class_UpdateDate` datetime(6) NOT NULL,
  `Term_ID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `stud_ID` int(50) NOT NULL,
  `stud_FName` varchar(50) NOT NULL,
  `stud_LName` varchar(50) NOT NULL,
  `stud_DateofBirth` int(50) NOT NULL,
  `stud_Gender` varchar(10) NOT NULL,
  `stud_ParentName` varchar(50) NOT NULL,
  `stud_ParentContact` varchar(50) NOT NULL,
  `stud_ParentEmail` varchar(50) NOT NULL,
  `stud_Address` varchar(50) NOT NULL,
  `stud_RegDate` datetime(6) NOT NULL,
  `stud_Password` varchar(8) NOT NULL,
  `stud_UpdateDate` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `stud_AdmissionNumber` int(6) NOT NULL,
  `class_ID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_term`
--

CREATE TABLE `tbl_term` (
  `term_ID` int(50) NOT NULL,
  `term_Number` int(2) NOT NULL,
  `price_PerTerm` int(50) NOT NULL,
  `term_BeginDate` datetime(6) NOT NULL,
  `term_EndDate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_administrator`
--
ALTER TABLE `tbl_administrator`
  ADD PRIMARY KEY (`adm_ID`);

--
-- Indexes for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`class_ID`),
  ADD KEY `Term_ID` (`Term_ID`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`stud_ID`),
  ADD UNIQUE KEY `stud_AdmissionNumber` (`stud_AdmissionNumber`),
  ADD KEY `class_ID` (`class_ID`);

--
-- Indexes for table `tbl_term`
--
ALTER TABLE `tbl_term`
  ADD PRIMARY KEY (`term_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_administrator`
--
ALTER TABLE `tbl_administrator`
  MODIFY `adm_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `class_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `stud_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_term`
--
ALTER TABLE `tbl_term`
  MODIFY `term_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD CONSTRAINT `tbl_class_ibfk_1` FOREIGN KEY (`Term_ID`) REFERENCES `tbl_term` (`term_ID`);

--
-- Constraints for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD CONSTRAINT `tbl_student_ibfk_1` FOREIGN KEY (`class_ID`) REFERENCES `tbl_class` (`class_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
