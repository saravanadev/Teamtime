-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2017 at 11:05 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `togettou_robel`
--

-- --------------------------------------------------------

--
-- Table structure for table `groupname`
--

CREATE TABLE IF NOT EXISTS `groupname` (
`id` int(11) NOT NULL,
  `group_name` varchar(45) DEFAULT NULL,
  `dis` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `groupname`
--

INSERT INTO `groupname` (`id`, `group_name`, `dis`) VALUES
(1, 'name', 'name '),
(8, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`id` int(11) NOT NULL,
  `sen_id` varchar(54) DEFAULT NULL,
  `rec_id` varchar(45) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `sen_id`, `rec_id`, `message`) VALUES
(1, '1', '4', 'name'),
(13, '', '', 'name');

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE IF NOT EXISTS `name` (
`id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `name`
--

INSERT INTO `name` (`id`, `name`, `fname`, `username`, `email`, `password`) VALUES
(2, 'dink', 'mam', 'mom', 'mmm', '4a8a08f09d37b73795649038408b5f33'),
(11, 'me', 'me', 'me', 'me', 'c6f057b86584942e415435ffb1fa93d4');

-- --------------------------------------------------------

--
-- Table structure for table `pic`
--

CREATE TABLE IF NOT EXISTS `pic` (
`id` int(11) NOT NULL,
  `image_path` varchar(200) DEFAULT NULL,
  `submission_date` date DEFAULT NULL,
  `profile_id` varchar(40) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `pic`
--

INSERT INTO `pic` (`id`, `image_path`, `submission_date`, `profile_id`) VALUES
(14, 'images/06-09-2016-1473134511.png', '2016-09-06', '5'),
(22, 'images/04-11-2016-1478268494.jpeg', '2016-11-04', '10');

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE IF NOT EXISTS `share` (
`id` int(11) NOT NULL,
  `profile_id` varchar(34) DEFAULT NULL,
  `group_id` varchar(45) DEFAULT NULL,
  `post` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `share`
--

INSERT INTO `share` (`id`, `profile_id`, `group_id`, `post`) VALUES
(1, '4', '1', 'hello this is test');

-- --------------------------------------------------------

--
-- Table structure for table `team_pic`
--

CREATE TABLE IF NOT EXISTS `team_pic` (
`id` int(11) NOT NULL,
  `image_path` varchar(200) DEFAULT NULL,
  `submission_date` date DEFAULT NULL,
  `profile_id` varchar(45) DEFAULT NULL,
  `group_id` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groupname`
--
ALTER TABLE `groupname`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `name`
--
ALTER TABLE `name`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pic`
--
ALTER TABLE `pic`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `share`
--
ALTER TABLE `share`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_pic`
--
ALTER TABLE `team_pic`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groupname`
--
ALTER TABLE `groupname`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `name`
--
ALTER TABLE `name`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pic`
--
ALTER TABLE `pic`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `share`
--
ALTER TABLE `share`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `team_pic`
--
ALTER TABLE `team_pic`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
