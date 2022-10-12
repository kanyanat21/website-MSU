-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 11, 2022 at 09:55 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msu`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `phone`, `comment`) VALUES
(1, 'kanyanat nanta', '62010912542@msu.ac.th', '966916592', 'hi kanyanat'),
(4, 'ปณิธาน เอกปณิพาณพงค์', 'panithan@gmail.com', '0994729555', 'บทความนี้จะเป็นการสอนการเชื่อมต่อ database เบื้องต้นด้วยภาษา php\r\nสำหรับน้องๆที่กำลังทำโปรเจคจบ กำลัง งง กับcodeไม่รู้จะเริ่มยังไงดี\r\nหรือใครทำกำลังมองหาคำอธิบายอยู่ ฟังเพื่อนอธิบายแล้วก็ไม่เข้าใจสักที '),
(5, 'kanyanat nanta', '62010912542@msu.ac.th', '0966916592', 'คือการสร้างตัวแปรที่ชื่อว่า dbName โดยตัวแปรนี้จะเก็บข้อความคำว่า cartoon (ตรงนี้คือ ชื่อของ database เรานะคับ ไม่ใช่ชื่อ table นะคับ) (set ค่าเตรียมไว้ใช้เฉยๆ ยังไม่เชื่อมต่อนะ)');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `msg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `url` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `url`) VALUES
(1, 'คณะมนุษยศาสตร์และสังคมศาสตร์', 'http://www.human.msu.ac.th/'),
(2, 'คณะศึกษาศาสตร์', 'http://edu.msu.ac.th/TH/'),
(3, 'คณะการบัญชีและการจัดการ', 'http://www.acc.msu.ac.th/'),
(4, 'คณะศิลปกรรมศาสตร์และวัฒนธรรมศาสตร์', 'https://fineart.msu.ac.th/'),
(5, 'คณะการท่องเที่ยวและการโรงแรม', 'https://thm.msu.ac.th/'),
(6, 'วิทยาลัยการเมืองการปกครอง', 'http://www.copag.msu.ac.th/'),
(7, 'วิทยาลัยดุริยางคศิลป์', 'https://music.msu.ac.th/'),
(8, 'คณะนิติศาสตร์', 'https://laws.msu.ac.th/'),
(9, 'คณะพยาบาลศาสตร์', 'https://nu.msu.ac.th/main/'),
(10, 'คณะเภสัชศาสตร์', 'http://pharmacy.msu.ac.th/'),
(11, 'คณะสาธารณสุขศาสตร์', 'https://publichealth.msu.ac.th/'),
(12, 'คณะแพทยศาสตร์', 'https://med.msu.ac.th/web/'),
(13, 'คณะสัตวแพทยศาสตร์', 'http://vet.msu.ac.th/'),
(14, 'คณะวิทยาศาสตร์', 'https://science.msu.ac.th/'),
(15, 'คณะเทคโนโลยี', 'https://techno.msu.ac.th/'),
(16, 'คณะวิศวกรรมศาสตร์', 'https://eng.msu.ac.th/'),
(17, 'คณะสถาปัตยกรรมศาสตร์-ผังเมือง-นฤมิตศิลป์', 'http://www.arch.msu.ac.th/'),
(18, 'คณะสิ่งแวดล้อมและทรัพยากรศาสตร์', 'http://www.env.msu.ac.th/'),
(19, 'คณะวิทยาการสารสนเทศ', 'https://it.msu.ac.th/home/'),
(20, 'สถาบันวิจัยวลัยรุกขเวช', 'http://www.walai.msu.ac.th/');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `filename`, `p_name`) VALUES
(1, 'thumb.jpg', 'msu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`) VALUES
(3, 'ปาณิศา สุประกา', '62010912507@msu.ac.th', '12345678', '0820472851'),
(4, 'ปาณิศา สุประกา', '62010912507@msu.ac.th', '12345678', '0820472851'),
(6, 'manuasanan nanta', 'manuasanan@gmail.com', '12345678', '0820471234'),
(7, 'kanyanat nanta', '62010912542@msu.ac.th', '12345678', '0966916592'),
(8, 'kanyanat nanta02', 'kanyanat@msu.ac.th', '12345678', '0966916502'),
(9, 'kanyanat nanta03', '62010912542@msu.ac.th', '12345678', '0966916592'),
(10, 'k n', 'kn@msu.ac.th', '11111111', '0966916592');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
