-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 01:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reflection`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `portrait_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `name`, `portrait_url`) VALUES
(1, 'Rob George', 'img\\articles\\authors\\rob-george.webp'),
(2, 'Jake Tuley', 'img\\articles\\authors\\jake-tuley.webp'),
(3, 'Netmatters Ltd.', 'img\\articles\\authors\\netmatters.webp'),
(4, 'Jasmin Rusted', 'img\\articles\\authors\\jasmin-rusted.webp');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `consent` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `date_published` date NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `copy` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `category` enum('news','careers') NOT NULL,
  `color` varchar(7) NOT NULL DEFAULT '#2A6EC6'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `author_id`, `date_published`, `image_url`, `title`, `copy`, `url`, `category`, `color`) VALUES
(2, 1, '2022-02-10', 'img\\articles\\posts\\trainee-it-technician.webp', 'Trainee IT Technician', 'Salary Range National Minimum Wage Hours 40 hours per week, Monday – Friday Location Wymondham, Gorl...', 'now_hiring.php', 'careers', '#2A6EC6'),
(3, 2, '2022-02-09', 'img\\articles\\posts\\streamlined-customer-engagement.webp', 'Streamlined Customer Engagement with Salesfor...', 'Taking your store online is a big jump for anyone, whether you’re launching your new retail idea or...', 'customer_engagment.php', 'news', '#566C88'),
(4, 3, '2022-02-07', 'img\\articles\\posts\\january-notables-2022.webp', 'January Notables 2022', 'At the very start of the year, it\'s always a pleasure to see our team members make an impact from th...', 'historic_notables.php', 'news', '#2A6EC6'),
(5, 4, '2022-02-17', 'img\\articles\\posts\\why-social-media.webp', 'Why Social Media Marketing is Valuable', 'At Netmatters we are a fully rounded digital agency – with a well-developed digital marketing depart...', 'whySocialMedia.php', 'news', '#26AB5F');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `foreign key authors authors_id` (`author_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `foreign key authors authors_id` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
