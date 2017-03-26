-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2017 at 04:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `title` varchar(250) NOT NULL,
  `genre` varchar(250) NOT NULL,
  `author` varchar(250) NOT NULL,
  `year` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`title`, `genre`, `author`, `year`, `price`) VALUES
('A Human Element book 1', 'Thriller', 'Donna Gallanti', 2012, 150),
('A Human Element book 2', 'Thriller', 'Donna Galanti', 2013, 150),
('A Walk to Remember', 'Romance', 'Nicholas Sparks', 1999, 150),
('Angels and Demons', 'Thriller', 'Dan Brown', 2000, 150),
('Ellon Musk', 'Biography', 'Ashley Vance', 2015, 150),
('Gone Girl', 'Thriller', 'Gillian Flyn', 2012, 150),
('Hidden Figures', 'Biography', 'Margot Lee Shetterly', 2016, 150),
('If Tomorrow Comes', 'Drama', 'Sydney Sheldon', 1985, 150),
('Long Walk to Freedom', 'Biography', 'Nelson Mandela', 1994, 150),
('Pope Francis Untying the Knots', 'Biography', 'Paul Vallely', 2013, 150),
('Pride and Prejudice', 'Romance', 'Jane Austen', 1813, 150),
('Romeo and Juliet', 'Romance', 'William Shakespear', 1597, 150),
('Seventh Plague', 'Drama', 'James Rollins', 2016, 150),
('Stay Close', 'Drama', 'Harlan Coben', 2000, 150),
('The Gift', 'Drama', 'James Patterson', 2010, 150),
('The Notebook', 'ROmance', 'Nicholas Sparks', 1996, 150);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `role` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`role`, `username`, `email`, `password`) VALUES
('', 'Doe', 'john@example.com', ''),
('', '', '', '$2y$10$vF4mq8fNy9Rj.0aAwG20..CDflUZzvUze9J5wxcuiMdgLiokTmU8.'),
('', '', '', '$2y$10$XVqzjLv.Zwgmab8hUFt9uOaTQkYTohQqLT7ldOfVA863g3xik0oKS'),
('', '', '', '$2y$10$iVJaOH4AS38LEBu/qhvu7.eiFhvTuIda2yk3KAY1T4cyHyb4Iulty'),
('', '', '', '$2y$10$kHXTy1/SxtqonSRxT8HOT.vRjVq3xnH88kjkB7Wu5n4EI/so8mxWS'),
('', '', '', '$2y$10$8161PRyhNHeBsscekvcgmOLLIrdF3cofdcFwUeSoH3o3nhYb7x.P2'),
('', '', '', '$2y$10$Ij.xoI0CqcS5u/palNbiwOz15ZSjxAxvVU1Y215DdlST.JHixZC7G'),
('', '', '', '$2y$10$JtjaepGZw6ZCFPFHF4kKa.htQyfKlMTbTIM7cVKtn.FyrqlIcCsv6'),
('', '', '', '$2y$10$/1H3wgAE6BYI78X3Sa2/tefPpM1HE8U/VKKH.CY0OTp/TNgxDUrTm'),
('', '', '', '$2y$10$OEfD62lAbRJzADMnIcfHHuPVZp07PKLaqaBWa1NH7ay/dqDWPaeVK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`title`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
