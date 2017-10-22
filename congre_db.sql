-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2017 at 06:36 PM
-- Server version: 5.7.17
-- PHP Version: 7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `congre_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `ar_title` varchar(255) DEFAULT NULL,
  `ar_text` text,
  `author` varchar(25) DEFAULT NULL,
  `ar_path` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `ar_title`, `ar_text`, `author`, `ar_path`) VALUES
(8, 'Hello Test', '<h1>This is a Test</h1>hDJKLJKLSDJ AJKDLASDJ KLADJKLASDJK AL jkdsajkl dsaklas dajlkasjdaksldj&nbsp;<br>', NULL, NULL),
(9, 'Hello Test dshjajhja hdaj Title Edited', '<h1>hhgewhjs this Text is Edited by Uns</h1>hjksdha hadj hadhkajd hakdh kashdkas&nbsp;<br>', NULL, NULL),
(11, 'Hello Test ArrayTest', '<h1><span class=\"wysiwyg-color-red\">Would ArrayTestNull work ?</span><br></h1>I am not sure !! but probably yes !<span class=\"wysiwyg-color-red\"><br></span>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `commite`
--

CREATE TABLE `commite` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commite`
--

INSERT INTO `commite` (`id`, `nom`, `country`, `university`, `type`) VALUES
(1, 'Ahmad Said', 'Maroc', 'University Cadi Ayyad', 2),
(2, 'Ahmad Ahmad', 'Maroc', 'University Cadi Ayyad', 2),
(3, 'Oussama Belkass', 'Tunis', 'University of Tunis', 2),
(4, 'K.Bendiab', 'Maroc', 'University of Maroc', 2),
(5, 'H.Amraoui', 'Maroc', 'FSTG', 1),
(6, 'F.Benkhalti', 'Maroc', 'FSTG', 1),
(7, 'D.Hsissou', 'Maroc', 'FSTG', 1),
(8, 'N.Zehhar', 'Maroc', 'FSTG', 1),
(9, 'R.Nmila ', 'Maroc', 'FSTG', 1),
(10, 'D.Hsissou', 'Maroc', 'University Cadi Ayyad', 2),
(11, 'F.Benkhalti', 'Maroc', 'University Cadi Ayyad', 2),
(12, 'A.Alaoui', 'Maroc', 'Abdelmaled Essaidi', 2),
(14, 'Mamakoda Mamakoda', 'Afganistan', 'Holulu Universite', 2);

-- --------------------------------------------------------

--
-- Table structure for table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `theme` varchar(255) DEFAULT NULL,
  `titre` text,
  `country` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `hashed_password` text,
  `quest` varchar(255) DEFAULT NULL,
  `resp` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `hashed_password`, `quest`, `resp`) VALUES
(11, 'admin3', '$2y$10$L2WxvctWcPenr/bn.IqqEOVvaNVmJ2qGcEMqKqrPGLPcMTNANtAry', 'Combien des heures vous dormez ?', '8h'),
(2, 'admin', '$2y$10$QdOkA3I8It8lguvXbe3PxOgf4SSIYaDqZpmMHuLrVWIUozGlE0SXa', 'Quelle votre ami d\'enfance?', 'moi'),
(10, 'admin 2', '$2y$10$LHSwCEWHTxG1.GyaNNgH9eNe0D1W9lJU6U2tfn9WFz1VV22vSVyPG', 'A quelle annee vous avez votre premier telephone ?', 'test reponse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commite`
--
ALTER TABLE `commite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `commite`
--
ALTER TABLE `commite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
