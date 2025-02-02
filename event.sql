-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2025 at 04:54 PM
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
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `type` enum('image','video') NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `type`, `path`) VALUES
(1, 'video', 'videos/video1.mp4'),
(2, 'image', 'images/robot.jpg'),
(3, 'image', 'images/slide4.jpg'),
(4, 'image', 'images/ox.jpg'),
(5, 'image', 'images/hack.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`) VALUES
(1, 'University Launches New Robotics Lab', 'Our college has officially opened a state-of-the-art Robotics Lab equipped with the latest technology for research and experimentation. This facility will provide students and faculty with the resources to explore advancements in robotics, automation, and artificial intelligence. The lab will host workshops, guest lectures, and hands-on projects to enhance learning and innovation.', 'images/robot.jpg'),
(2, 'Student Team Wins International Hackathon', 'A team of our students has triumphed at the Global Tech Hackathon held in San Francisco, winning first place for their innovative app that promotes energy conservation. The app uses smart technology to help users monitor and reduce their energy consumption in real-time. This victory showcases the talent and creativity of our students in applying technology for sustainable solutions.', 'images/hack.jpg'),
(3, 'Innovative AI Research Project Launched by Computer Science Students', 'The project, aptly named “AI for Tomorrow,” was kicked off with a launch event attended by faculty, industry experts, and fellow students. The team demonstrated a prototype of their AI model, which utilizes machine learning techniques to analyze large datasets and provide actionable insights.', 'images/ai.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id`, `date`, `title`, `description`) VALUES
(1, 'January 16, 2025', 'World Economic Forum Annual Meeting', 'Leaders from business, government, and civil society convene in Davos to discuss pressing global issues, including economic growth, climate change, and technological advancements. The forum promotes collaboration and innovative solutions for a sustainable future.'),
(2, 'April 18, 2025', 'International Women\'s Day in STEM (Global)', 'Celebrated worldwide, this day focuses on the achievements of women in science, technology, engineering, and mathematics (STEM). Events include webinars, workshops, and networking sessions designed to inspire and empower women to pursue careers in technical fields.'),
(3, 'April 17, 2025', 'International Conference on Emerging Technologies in Engineering (Cairo, Egypt)', 'This conference will gather industry experts, researchers, and students to discuss the latest innovations and trends in engineering technologies. Topics will range from artificial intelligence and robotics to sustainable engineering practices.'),
(4, 'June 7, 2025', 'International Conference on Renewable Energy and Sustainability (Lisbon, Portugal)', 'Focused on the latest developments in renewable energy technologies, this conference will address sustainability challenges and innovations. Participants will explore topics such as solar, wind, and bioenergy, with an emphasis on integrating new technologies into existing systems.'),
(5, 'December 20, 2024', 'Smart India Hackathon', 'Two teams from JIS Group qualified into SIH Grand Finale.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
