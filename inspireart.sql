-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 12:09 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inspireart`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Graphic Design'),
(2, 'Programming And Tech'),
(3, 'Digital Marketing'),
(4, 'Music And Audio'),
(5, 'Bussiness'),
(6, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `gig`
--

CREATE TABLE `gig` (
  `id` int(10) NOT NULL,
  `art_name` varchar(50) NOT NULL,
  `about` varchar(255) NOT NULL,
  `category` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gig`
--

INSERT INTO `gig` (`id`, `art_name`, `about`, `category`, `img`, `price`, `email`, `mobile_number`) VALUES
(25, 'surendra', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi aliquam quidem nisi aut. Modi quidem autem earum quia! Quaerat necessitatibus officiis nihil expedita hic assumenda nulla quia et quas facere?Lorem ipsum dolor sit, amet consectetur adipis', 2, 'Screenshot (37).png', 1500, 'surendra05@gmail.com', '5656555144'),
(26, 'surendra', 'vjdbnvndbnv', 1, 'dashboard_footer.png', 4111, 'surendra05@gmail.com', '5656555144'),
(27, 'jayesh', 'Hello Change', 3, 'Screenshot (39).png', 111, 'joy@gmail.com', '7573258969'),
(28, 'tech pintu', 'Hi i am technical', 3, 'Screenshot (18).png', 12000, 'techpintu@gmail.com', '5656555144'),
(32, 'nitin', 'My name is Nitin gulabani ANd i am.. changeddddd', 1, 'Screenshot (38).png', 10000, 'nitingulabani5@gmail.com', '9875585858'),
(56, 'jayesh', 'Hello m ckdmvnmv dfnvfv fnvkf fnv knmf fb f kfdvnmklfmvkbv fbnkf k nfkl kfmnbiof gfkmbfk mod kdfmbkfm', 3, 'Screenshot (21).png', 1487, 'joy@gmail.com', '7573258969'),
(57, 'jayesh', 'vomgvmfmbm vklnkltbk bkl kb bm;l ', 6, 'Screenshot (19).png', 14777, 'joy@gmail.com', '7573258969'),
(58, 'jayesh', 'Hello Hello Hello Heloo ndbc jdv didv dknvdsnvjsdv hdfsivhidrhvioernkivherwk  burfe rgv ', 3, 'Screenshot (37).png', 2000, 'joy@gmail.com', '7573258969'),
(59, 'jayesh', 'Hello Hello Hello Heloo ndbc jdv didv dknvdsnvjsdv hdfsivhidrhvioernkivherwk  burfe rgv ', 3, 'Screenshot (37).png', 2000, 'joy@gmail.com', '7573258969'),
(60, 'jayesh', 'Hello Hello Hello Heloo ndbc jdv didv dknvdsnvjsdv hdfsivhidrhvioernkivherwk  burfe rgv ', 3, 'Screenshot (37).png', 2000, 'joy@gmail.com', '7573258969');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `number` varchar(10) NOT NULL,
  `role` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `email`, `username`, `password`, `number`, `role`) VALUES
(1, 'harshwadhwani718@gmail.com', 'Harsh Wadhwani', 'admin1234', '7573058693', 1),
(3, 'surendra05@gmail.com', 'surendra', 'surendra1234', '5656555144', 0),
(6, 'manan02@gmail.com', 'manan', 'hello', '7578958696', 0),
(7, 'nitingulabani70@gmail.com', 'nitin', 'nitin1234', '8875585858', 0),
(8, 'joy@gmail.com', 'jayesh', 'joy123', '7573258969', 0),
(9, 'techpintu@gmail.com', 'tech pintu', 'tech123', '5656555144', 0),
(10, 'nitingulabani5@gmail.com', 'nitin', 'nitin1234', '8347094296', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `gig`
--
ALTER TABLE `gig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gig`
--
ALTER TABLE `gig`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
