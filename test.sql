-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 01:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `Type`) VALUES
(6, 'admin1', '$2y$10$feXMxVjdZXZxKVl30W413eI9SVE705kQqdQFU5aKQMApRhkQiaKCG', 'Senior'),
(7, 'admin2', '$2y$10$Zt25UXmQHX.o4XsJnYj/LeT5Qjvmo6WEhvyqkexWMKMwGSc301bjO', 'Senior');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `NIC` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Age` int(100) NOT NULL,
  `Gender` text NOT NULL,
  `Govt_RegNo` varchar(15) NOT NULL,
  `areaofexpertise` text NOT NULL,
  `qualification` text NOT NULL,
  `placeofwork` text NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `district` varchar(50) NOT NULL,
  `approval` int(2) NOT NULL,
  `authFile` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `Fname`, `Lname`, `NIC`, `Email`, `Password`, `Age`, `Gender`, `Govt_RegNo`, `areaofexpertise`, `qualification`, `placeofwork`, `phonenumber`, `Address`, `district`, `approval`, `authFile`) VALUES
(4, 'Wenuja', 'Jayasinghe', '20000021479', 'doctor.main@gmail.com', '$2y$10$s6dLokCQCBLibTEwpokOROr/0GLug8spbYwkDulYJlLd1BF/MVevS', 57, 'Male', 'G0003', 'Cardiology', 'MD in Cardiology', 'Durdans', 752249211, 'Lily Avenue Wellawatte', 'Colombo', 1, ''),
(5, 'Abhiram', 'Rathnayake', '20000021478', 'doctor.2@gmail.com', '$2y$10$3R5iYovNSH.bD3PNjKLBwubyx6P.JDtMxZNF7gHyvFOVxP/RrsS8S', 22, 'Male', 'G0004', 'Dermatology', 'MD in Dermatalogy', 'Nawaloka', 752249222, 'Robert Gunawardane Mawatha', 'Colombo', 1, ''),
(6, 'Wenuja', 'Jayasinghe', '200219610276', 'iqi@gmail.com', '$2y$10$wkiKRJ4.nQsopgkDOmkgIeECpv4WflSR/Yzp4CbsyjxaZx42Qku0e', 22, 'Male', 'G0005', 'Cardiology', 'Doctorate', 'Kings Hospital', 772780559, 'Kadwatha Road, Dehiwala', 'Dehiwala', 1, ''),
(9, 'ram', 'kapoor', '20000021475', 'ram@gmail.com', '$2y$10$fUQUmT.fHBkW08/FwX8DTu7cIxpyZ/JzcBtCIoFGQCz6DzlJMak4a', 21, 'Female', 'G0007', 'ENT', 'Doctorate', 'Nawaloka', 112362824, 'Robert Gunawa Mawatha', 'Dehiwala', 1, ''),
(10, 'Maan', 'Faheem', '200219610258', 'maan.faheem@gmail.com', '$2y$10$KzQmG//6tByk22nv8x2c1O..SBfyKzSTcc8nF..3aNL/zRl2jegwu', 50, 'Male', 'G0008', ' Neurology', 'Doctorate', 'Royal Hospital', 775792355, 'dehiwala,kalubowila', 'Gampaha', 1, ''),
(11, 'Maan', 'Faheem', '200219610256', 'maan.faheem@gmail.comm', '$2y$10$KqVhiPvpNlgsHItCLjacXOiIDJ.gbziYvSRbAwKT0zBXluhIQuTgW', 50, 'Male', 'G0009', ' Neurology', 'Doctorate', 'Royal Hospital', 775792355, 'dehiwala,kalubowila', 'Gampaha', 0, 'D:\\Xampp\\tmp\\php5E0.tmp'),
(13, 'thishok', 'varatharasan', '20000026999', 'thishok@gmail.com', '$2y$10$Ro3yyJNUxcxZ89E1depQXezdEiQov2G831jsQ4kE5RUa0qZK/Ip.K', 16, 'Female', 'G0002', 'Physician', 'Doctorate', 'Nawaloka', 771221136, 'Arethusaram lane, Wellawatte', 'Gampaha', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-01-23-170141', 'App\\Database\\Migrations\\User', 'default', 'App', 1642958420, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) UNSIGNED NOT NULL,
  `fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Gender` text NOT NULL,
  `Address` text NOT NULL,
  `NIC` varchar(15) NOT NULL,
  `district` text NOT NULL,
  `phonenumber` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `Lname`, `Email`, `pwd`, `age`, `Title`, `Gender`, `Address`, `NIC`, `district`, `phonenumber`) VALUES
(10, 'patient', 'one', 'patientone@gmail.com', '$2y$10$zgZP1ZNxc3ZHjd6pR3tc4.SDitVWUhfSJdTeXoNMx9C9cTTrInle2', 24, 'mr', '', '33a,Lily avenue,', '200003001626', 'colombo', 775121163),
(11, 'patient', 'two', 'patienttwo@gmail.com', '$2y$10$.Q2AkKJAJwJq6Nri7LzMMutJT5IJdEH1/6iFok1aNdNOm9kwpKsSS', 25, 'mrs', '', '33B,Lily avenue,', '200003001627', 'colombo-05', 777764444),
(23, 'Muhammad', 'Khaleel', 'muhammad.khaleel@gmail.com', '$2y$10$VLzs.8H1Dqi69Fs3QBb6DetJ/PoXUjF5L2fIcTEeJrM24x0ncY7QG', 21, 'Mr', '', 'kalubowila,Dehiwala', '200219610269', 'Dehiwala ', 775792352),
(29, 'patient', 'three', 'patientthree@gmail.com', '$2y$10$8.i.DfxPLRYjy3kb/pZZqOt0BOAyseZp1d.ZEoiYABEviGk60kKqC', 23, '', 'Female', 'Arethusa lane, Wellawatte', '200219610999', 'Dehiwala', 775621369);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
