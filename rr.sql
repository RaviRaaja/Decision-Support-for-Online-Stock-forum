-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2015 at 02:39 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rr`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
`cid` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mailid` varchar(30) NOT NULL,
  `website` varchar(30) NOT NULL,
  `cmnt` varchar(400) NOT NULL,
  `fback` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cid`, `name`, `mailid`, `website`, `cmnt`, `fback`) VALUES
(1, 'ganesh', 'ganesh@gmail.com', 'www.ganesh.com', 'excellent product go for this product....', 'positive'),
(2, 'Ravi Raaja', 'ravi@gmail.com', 'www.ravi.com', 'good to go for it', 'positive'),
(3, 'valliappan', 'valips@gmail.com', 'www.ganeshvalli.com', 'Bad one', ''),
(4, 'new', 'new@gmail.com', 'na', 'new idea good going', 'positive');

-- --------------------------------------------------------

--
-- Table structure for table `garc_entry`
--

CREATE TABLE IF NOT EXISTS `garc_entry` (
`gid` int(5) NOT NULL,
  `garc_value` int(3) NOT NULL,
  `ENTRY_DATE_TIME` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garc_entry`
--

INSERT INTO `garc_entry` (`gid`, `garc_value`, `ENTRY_DATE_TIME`) VALUES
(1, 10, '0000-00-00 00:00:00'),
(2, 15, '0000-00-00 00:00:00'),
(3, 18, '0000-00-00 00:00:00'),
(4, 15, '0000-00-00 00:00:00'),
(5, 83, '2015-03-08 12:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`lid` int(5) NOT NULL,
  `uname` varchar(40) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `uname`, `pass`) VALUES
(1, 'Ganesh', 'admin'),
(2, 'Ravi', 'admin'),
(3, 'valliappan', 'admin'),
(4, 'masu', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `n_words`
--

CREATE TABLE IF NOT EXISTS `n_words` (
`nid` int(100) NOT NULL,
  `nword` varchar(26) NOT NULL,
  `nvalue` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `n_words`
--

INSERT INTO `n_words` (`nid`, `nword`, `nvalue`) VALUES
(1, 'worst', 2),
(2, 'bad', 2),
(3, 'sad', 2),
(4, 'not', 2);

-- --------------------------------------------------------

--
-- Table structure for table `p_words`
--

CREATE TABLE IF NOT EXISTS `p_words` (
`pid` int(100) NOT NULL,
  `pwords` varchar(26) NOT NULL,
  `pvalue` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_words`
--

INSERT INTO `p_words` (`pid`, `pwords`, `pvalue`) VALUES
(1, 'good', 2),
(2, 'best', 2),
(3, 'better', 2),
(4, 'excellent', 2);

-- --------------------------------------------------------

--
-- Table structure for table `reviewpercent`
--

CREATE TABLE IF NOT EXISTS `reviewpercent` (
`rpid` int(3) NOT NULL,
  `positivepercent` varchar(30) NOT NULL,
  `negativepercent` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewpercent`
--

INSERT INTO `reviewpercent` (`rpid`, `positivepercent`, `negativepercent`) VALUES
(1, '100', '0'),
(4, '100', '0'),
(5, '66.666666666667', '0'),
(6, '75', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `garc_entry`
--
ALTER TABLE `garc_entry`
 ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`lid`), ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `n_words`
--
ALTER TABLE `n_words`
 ADD PRIMARY KEY (`nid`), ADD UNIQUE KEY `nword` (`nword`);

--
-- Indexes for table `p_words`
--
ALTER TABLE `p_words`
 ADD PRIMARY KEY (`pid`), ADD UNIQUE KEY `pwords` (`pwords`);

--
-- Indexes for table `reviewpercent`
--
ALTER TABLE `reviewpercent`
 ADD PRIMARY KEY (`rpid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `cid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `garc_entry`
--
ALTER TABLE `garc_entry`
MODIFY `gid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `lid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `n_words`
--
ALTER TABLE `n_words`
MODIFY `nid` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `p_words`
--
ALTER TABLE `p_words`
MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `reviewpercent`
--
ALTER TABLE `reviewpercent`
MODIFY `rpid` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
