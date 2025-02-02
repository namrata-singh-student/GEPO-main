-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2025 at 05:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pi`
--

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `sl` int(11) NOT NULL,
  `title` text NOT NULL DEFAULT 'Title - N.A.',
  `description` text NOT NULL DEFAULT 'Description - N.A.',
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`sl`, `title`, `description`, `image`) VALUES
(1, 'Study Abroad Programs', 'Our Study Abroad Programs offer students an enriching opportunity to experience education in an international context. These programs are designed to foster global perspectives, enhance language skills, and promote cultural exchange, allowing students to broaden their horizons while earning academic credit. Come and join our partner universities all over the world such as ', 'images/OIP.jpeg'),
(2, 'Faculty & Research Exchange', 'Our Faculty & Research Exchange program is designed to foster collaboration and innovation in academic research and teaching methodologies across institutions worldwide. This initiative promotes the sharing of knowledge, expertise, and best practices, enhancing the educational experience for both faculty members and students in all our partner universities such as', 'images/faculty.jpg'),
(3, 'Short-term Study Tours', 'Embark on an unforgettable journey with our Short-Term Study Tours, where education meets adventure! Designed for curious minds eager to explore new cultures, these immersive programs offer a unique blend of academic enrichment and hands-on experiences that will leave you inspired.', 'images/679a91ce0ab01_Educational-Tours.png'),
(4, 'Internships and Work Placements', 'Our Internships & Work Placements program is designed to bridge the gap between academic learning and real-world experience. This initiative provides students with the chance to gain invaluable hands-on experience in their chosen fields while developing essential professional skills.', 'images/slide4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `u_map`
--

CREATE TABLE `u_map` (
  `id` int(11) NOT NULL,
  `location_lat` decimal(10,8) NOT NULL,
  `location_lng` decimal(11,8) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `u_map`
--

INSERT INTO `u_map` (`id`, `location_lat`, `location_lng`, `title`, `description`, `images`) VALUES
(1, 1.29660000, 103.77640000, 'National University of Singapore (NUS)', 'It is our partner university in Singapore', 'images/nus.jpg'),
(2, 35.71210000, 139.76190000, 'University of Tokyo', 'University of Tokyo is recognized for its significant contributions to education and research, comprising 10 faculties and 15 graduate schools. It serves approximately 30,000 students, including around 2,100 international students, and offers programs in various disciplines. Notably, it provides undergraduate courses entirely in English, such as the International Program on Japan in East Asia and the Global Science Course.', 'images/ut.jpg'),
(3, 51.75480000, -1.25400000, 'University of Oxford, United Kingdom', 'Comprising 44 colleges and halls, Oxford operates without a central campus; instead, its facilities are spread throughout the city. Each college functions as a self-governing institution, providing tutorial teaching and fostering unique traditions. The university has a diverse student body of approximately 22,000, with around 40% being international students.', 'images/ox.jpg'),
(5, 37.42823000, -122.16886100, 'Stanford University', 'Stanford is renowned for its rigorous academic programs, with nearly 40 departments and a diverse student body of over 16,000 students. The university has produced numerous notable alumni, including 83 Nobel Prize winners and many influential leaders in various fields. Its commitment to research and education continues to make it a significant contributor to advancements in science, technology, and the humanities.', 'images/stan1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `u_map`
--
ALTER TABLE `u_map`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `u_map`
--
ALTER TABLE `u_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
