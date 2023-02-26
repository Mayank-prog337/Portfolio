-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 04:35 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `compdetails`
--

CREATE TABLE `compdetails` (
  `id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compdetails`
--

INSERT INTO `compdetails` (`id`, `company`, `Link`) VALUES
(1, 'Logicdart', 'www.logicdart.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Mayank Prakash', 'mayank.prakash@seamlesstomorrow.com', 'hello', 'jj');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `pre` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `icon`, `pre`, `post`, `title`) VALUES
(1, 'bi-emoji-smile', 0, 1, 'Work Experience(Years)'),
(2, 'bi-emoji-smile', 0, 10, 'Skills'),
(3, 'bi-emoji-smile', 0, 5, 'Projects'),
(4, 'bi-emoji-smile', 0, 6, 'Qualification-UG/PG(Years)'),
(5, 'bi-emoji-smile', 0, 10, 'Certifications');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `text`) VALUES
(1, 'bx bxl-dribbble', 'Web Apps/ Websites', 'Provide best Serives to clients.');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `icon`, `title`, `color`) VALUES
(1, 'ri-store-line', 'C+C++', '#18d26e'),
(2, 'ri-bar-chart-box-line', 'HTML,CSS,BOOTSTRAP,JS', '#18d26e'),
(3, 'ri-calendar-todo-line', 'JAVA', '#18d26e'),
(4, 'ri-file-list-3-line', 'PHP/MY-Sql', '#18d26e');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `quote` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `quote`, `name`, `title`) VALUES
(1, 'Great to work with Mayank, good guy with good knowledge skills.', 'Rajat Chauhan', 'Founder, SystemEclipse'),
(2, 'Love the way he responds to the query and always care about the need of the client.', 'Vinod Tamrakar', 'Founder, BakeOFun'),
(3, 'Great Guy. Had a good experience with him, delivered the project within time.', 'Satish Jain', 'Director, CTSU'),
(4, 'Awesome, had potential to take care of work and his ethics for work is too good.', 'Lata Prasad', 'Lecturer, BDHS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `youtube` text NOT NULL,
  `linkedin` text NOT NULL,
  `github` text NOT NULL,
  `slogan` text NOT NULL,
  `dob` date NOT NULL,
  `age` varchar(100) NOT NULL,
  `website` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `city` text NOT NULL,
  `degree` varchar(255) NOT NULL,
  `freelance` int(11) NOT NULL,
  `certification` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `title`, `place`, `facebook`, `twitter`, `instagram`, `youtube`, `linkedin`, `github`, `slogan`, `dob`, `age`, `website`, `phone`, `city`, `degree`, `freelance`, `certification`, `address`) VALUES
(1, 'Mayank Prakash', 'mayankprakash', 'mayank.prakash@seamlesstomorrow.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Frontend Developer', 'Raipur, India', 'www.facebook.com', 'www.twitter.com', 'instagram.com', 'www.youtube.com', 'www.linkedin.com', 'www.github.com', 'Work For Logics', '1997-10-10', '24', '#', '123456789', 'Raipur', 'BCA, MCA', 0, 'PHP-MYsql, Django with Python', 'Rawatpura Colony, Bhatagaon, Raipur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compdetails`
--
ALTER TABLE `compdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
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
-- AUTO_INCREMENT for table `compdetails`
--
ALTER TABLE `compdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
