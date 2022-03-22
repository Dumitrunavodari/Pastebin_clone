-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 09:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paste_bin`
--

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

CREATE TABLE `texts` (
  `ID` int(10) NOT NULL,
  `textNumber` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `myText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`ID`, `textNumber`, `title`, `myText`) VALUES
(9, 1, 'proba01', 'asljdhv adljh jl whd v.awhjv lwhbf'),
(10, 2, 'title_x', 'proba'),
(45, 3, 'LJSSHC ', 'newtext'),
(45, 4, 'LJSSHC ', 'newtext'),
(45, 5, 'fAF', 'newtext'),
(45, 6, 'sb', 'dafb ad '),
(45, 7, '', 'VBc\r\n\r\nDSB'),
(45, 8, 'AFs', 'as\r\nbl ;l c;\r\nzxlc ;\r\nl '),
(45, 9, 'adG', 'CLJUWUBCLK\r\nN IWWHBV'),
(45, 10, 'DSDG', 'zdnhgha fxggn'),
(45, 11, 'wjkdfh', 'akjshv klasd \r\nihbdfk'),
(45, 12, 'afdh', ' df ad'),
(45, 13, 'agsdv', 'LDSHSC '),
(45, 14, 'cACHJ', 'aivhhB'),
(45, 15, 'titlu test', 'text test \r\nkasudvf'),
(46, 16, 'test1 titlu', 'ljshb dvjljcs \r\nslsjc hbsl'),
(48, 17, 'Titlul 1', 'skdhhv lsjdhbdv\r\nhBSDDVljshbv'),
(48, 18, 'titlu 2', 'slidlbvlsh l\r\nslh \r\nk asdsgv'),
(52, 19, 'Titlu 1', 'LJVHbisaibv\r\navbibv\r\n'),
(52, 20, 'ddhvb', 'libviscijn sjsj\r\nuosauyb1254'),
(54, 21, 'titlu 1', 'xjbjncvx;lbjn\r\nldjfb098'),
(54, 22, 'Titlu2', 'dsjnsiog\r\njdshgb'),
(56, 23, 'u9h9h', 'jzcn cizxn \r\ni hhdb '),
(56, 24, 'pisfibns', 'pofv ofn b\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `surname`, `firstName`, `email`, `password`) VALUES
(9, 'Dumitru', '', 'User4@juwbhg.rt', 'adhadgdadlih'),
(10, 'Dumitru', 'Florin', 'User@jhab.co', '$2y$10$/BUJ4LAPFwK34v63OAMdSuCOQ0VgonNrsblEIUcAG1tYy.oIxPSRy'),
(13, 'Dumitru', 'Florin', 'User98@yeybf.60', '$2y$10$LJjW4wZ8d82o36PLYxUy.ePU3UgtI3DC6uH2okbgFURT3ZuKgzpjG'),
(44, 'Dumitru', 'Florin', 'User645@ksjggh', '$2y$10$DpSXMWlbOUbXALr8eWK3/u3JPBcvAwZzf9cxwi6o2f4GztA1vwKd2'),
(45, 'Dumitru', 'Florin', 'florin@florin.ro', '$2y$10$.Q4W7S9naat2tKilTHkNeOfOJ0yTWExuMYQ.oELngds1i7z/7gF5a'),
(46, 'Dumitru1', 'Florin1', 'florin1@florin.ro', '$2y$10$4jSTTp0v3Avzn8DyRTh/Yuve5OjE.wceVmqL9X1TjOjNwhkjaoPKS'),
(48, 'Dumitru2', 'Florin2', 'florin2@florin.ro', '$2y$10$Vvh.vKLGxSyX0uk4xZ4tDeTuYI0FpiBZ2w05f9DLr4psnDTE2Fq2y'),
(50, 'Dumitru3', 'Florin3', 'florin3@florin.ro', '$2y$10$2BYxxU3hI7zBDAxhD4tNIOPO/jshcBYQXJ9Wpfcb/ZJdzjbde/zD2'),
(52, 'Dumitru4', 'Florin4', 'florin4@florin.ro', '$2y$10$xPjT4zWVFvqJKaAbUDoNoe53TUCF3yMIDVKky.oHeU.hYOwbgTdQ.'),
(54, 'Dumitru5', 'Florin5', 'florin5@florin.ro', '$2y$10$UhdgOKsjoaRxMzWTjlZH4OJfNbJtVggzx/CRCeSv2ObNyLDdmF27u'),
(56, 'Dumitru6', 'Florin6', 'florin6@florin.ro', '$2y$10$YmwLyoF/nsjzsDJHitS2Ge05CzxREJSyGTFHAeprcOKbY/hRLbfFq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`textNumber`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD UNIQUE KEY `email_3` (`email`),
  ADD UNIQUE KEY `email_4` (`email`),
  ADD UNIQUE KEY `email_5` (`email`);
ALTER TABLE `users` ADD FULLTEXT KEY `surname` (`surname`,`firstName`,`email`,`password`);
ALTER TABLE `users` ADD FULLTEXT KEY `surname_2` (`surname`,`firstName`,`email`,`password`);
ALTER TABLE `users` ADD FULLTEXT KEY `password` (`password`);
ALTER TABLE `users` ADD FULLTEXT KEY `surname_3` (`surname`,`firstName`,`password`);
ALTER TABLE `users` ADD FULLTEXT KEY `surname_4` (`surname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `texts`
--
ALTER TABLE `texts`
  MODIFY `textNumber` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `texts`
--
ALTER TABLE `texts`
  ADD CONSTRAINT `texts_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
