-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2019 at 03:46 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `read_it`
--

CREATE TABLE `read_it` (
  `id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `descriptions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `read_it`
--

INSERT INTO `read_it` (`id`, `book_name`, `author`, `descriptions`) VALUES
(12, 'The Prince', 'NiccolÃ² Machiavelli', 'First book on Political Realism. '),
(13, 'Don Quixote', 'Miguel de Cervantes', 'The story of an old fool.'),
(14, 'As I Lay Dying', 'William Faulkner', 'Life becoming clear when you take the time and observe people.'),
(15, 'Animal Farm', 'George Orwell', '&quot;All animals are equal, but some animals are more equal than others.&quot;'),
(16, 'One Piece', 'Eiichiro Oda', 'The GREATEST manga to ever exist!'),
(17, 'Bleach', 'Tite Kubo', 'The anime started off good with a trash ending.'),
(28, 'One-Punch Man', 'ONE', 'A new manga but it\'s great!'),
(29, 'Roots Of American Order', 'Russell Kirk', 'It was heavy.'),
(30, 'Republic', 'Plato', 'Hard to follow at times.'),
(32, 'Days of Rage', 'Bryan Burrough', 'A very good book on Black Panther insight!');

-- --------------------------------------------------------

--
-- Table structure for table `wish_to_read`
--

CREATE TABLE `wish_to_read` (
  `id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `descriptions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wish_to_read`
--

INSERT INTO `wish_to_read` (`id`, `book_name`, `author`, `descriptions`) VALUES
(1, 'The Strange Case of Dr. Jekyll and Mr. Hyde', '', ''),
(2, 'Harry Potter and the Deathly Hallows', '', ''),
(5, 'A Clash of Kings', 'George R. R. Martin', 'I like fantasy murderous plotlines.'),
(6, 'Democracy in America', 'Alexis de Tocqueville', 'I have it at home and need to read it'),
(7, 'The Art of Happiness (Penguin Classics)', 'Epicurus', 'I\'m a fan of Stoicism.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `read_it`
--
ALTER TABLE `read_it`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wish_to_read`
--
ALTER TABLE `wish_to_read`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `read_it`
--
ALTER TABLE `read_it`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `wish_to_read`
--
ALTER TABLE `wish_to_read`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
