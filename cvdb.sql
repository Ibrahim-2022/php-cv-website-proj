-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 27, 2022 at 11:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `hours_number` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `institution` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `hours_number`, `start`, `end`, `institution`, `url`, `file`, `notes`) VALUES
(22, 'Network Management Admin	', 50, '2022-01-01', '2022-06-01', 'coding traning center	', 'http://www.alazhar.edu.ps', 'uploads/Capture.PNG', 'A network administrator is responsible for keeping an organization’s computer network up-to-date and operating as intended'),
(23, 'Freelancer', 30, '2021-05-01', '2022-05-01', 'AL-Azhar university', 'http://www.alazhar.ps', 'uploads/Capture (1).PNG', 'A freelancer is an independent laborer who earns wages on a per-job or per-task basis, typically for short-term work. '),
(24, 'web development', 200, '2022-01-01', '2023-01-01', 'Udemy', 'https://www.udemy.com/', 'uploads/intro.png', 'A broad selection of courses\r\nChoose from 185,000 online video courses with new additions published every month'),
(25, 'Requirement Engineering', 100, '2022-05-26', '2023-05-01', 'International Business Machines (IBM) ', 'https://www.coursera.org', 'uploads/object.png', 'A broad selection of courses\r\nChoose from 185,000 online video courses with new additions published every month'),
(26, 'Software Design', 120, '2022-01-09', '2023-11-10', 'Google', 'https://www.google.com', 'uploads/chart.PNG', 'Software design is a process to transform user requirements into some suitable form, which helps the programmer in software coding and implementation.'),
(27, 'Quality assurance (QA)', 70, '2022-06-11', '2023-10-20', 'Microsoft', 'https://microsoft.com/', 'uploads/chart.png', 'Quality assurance (QA) is a way of preventing mistakes and defects in manufactured products and avoiding problems when delivering products or services to customers'),
(29, 'Quality assurance (QA)', 70, '2022-06-11', '2023-10-20', 'Microsoft', 'https://microsoft.com/', 'uploads/intro.png', 'Quality assurance (QA) is a way of preventing mistakes and defects in manufactured products and avoiding problems when delivering products or services to customers');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `experience_id` int(11) NOT NULL,
  `excperience_category` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `excperience_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `institution` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`experience_id`, `excperience_category`, `excperience_title`, `start`, `end`, `institution`, `description`) VALUES
(1, 'mobile development', 'api developer', '2021-05-03', '2022-06-17', 'coding training center', 'Jeremiah Lee Cohick, software engineer at Fitbit with a penchant for user experience, frames API experience in the broader developer experience (DX) field. DX encompasses many aspects of the relationship between programmers and the platform they are developing for, such as trust, education, tools, and platform usability. Specifically, he describes API experience as the UX of APIs, which ends up being a critical part of the development cycle phase dedicated to writing code.'),
(2, 'Web development', 'Frontend developer', '2019-05-09', '2021-03-10', 'Code Academy', 'Frontend developers are professionals who are responsible for effectively implementing visual components on a website. They perform front-end development tasks like website designing, appearance, navigation, buttons.\r\n\r\nThe main objective of designing any website is to ensure that users can see the relevant information in a format that is easy to read. But this simple goal is complicated to implement as visitors use various types of devices with different screen sizes and resolutions. They also need to ensure that the website opens correctly in various browsers and different operating systems (cross-platform). This forces the Front-end developer to test their design on multiple permutations of OS, Browser, and Devices, making their job difficult. '),
(3, 'Web development', 'Backend developer', '2021-04-10', '2022-09-10', 'Code camp', 'In web development, a back-end developer is responsible for building and maintaining the back end of a website or web application. The back end consists of all components a typical user does not interact with — this includes databases, servers, application logic, and APIs. Back-end developers create this infrastructure and work to ensure these components function properly.'),
(4, 'Web Development ', 'Freelancer', '2022-04-01', '2022-12-09', 'Upwork platform', 'A freelancer is an individual who earns money on a per-job or per-task basis, usually for short-term work. A freelancer is not an employee of a firm and may therefore be at liberty to complete different jobs concurrently by various individuals or firms unless contractually committed to working exclusively until a particular project is completed.\r\nA freelancer tends to work in the creative, skilled, or service sector, such as in film, art, design, editing, copywriting, proofreading, media, marketing, music, acting, journalism, video editing and production, illustration, tourism, consulting, website development, computer programming, event planning, photography, language translation, tutoring, catering, and many more.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `nationality` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `birth_place` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `experience` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `image`, `gender`, `birth_date`, `nationality`, `birth_place`, `job`, `experience`) VALUES
(1, 'Ibrahim Mohammed Alashqar', 'images/profile.jpg', 'Male', '2002-01-09', 'Palestinian', 'Gaza', 'Software Engineer', '3 years'),
(2, 'Asem Sabri Abu-nada', 'images/profile2.jpg', 'Male', '2001-05-23', 'Egyptian', 'Alexandria', 'Accountant', '2 years');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`experience_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
