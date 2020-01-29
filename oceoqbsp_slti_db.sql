-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 29, 2020 at 12:08 AM
-- Server version: 10.1.43-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oceoqbsp_slti_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(7) NOT NULL,
  `staff_id` int(7) NOT NULL,
  `course_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `staff_id`, `course_code`, `comments`) VALUES
(1, 1, 'GL101', 'Glory!! My leadership skills are at another level'),
(2, 2, 'GL101', '7 star leader');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `level_code` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `course_code` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `course_title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `course_instructor` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `level_code`, `course_code`, `course_title`, `course_instructor`) VALUES
(1, 'GL1', 'GL101', 'The Leadership Definition', 'Deaconess Anita Tom '),
(2, 'GL1', 'GL102', 'Lead Function Analysis: Guidance ', 'Pastor Sammy Jerry'),
(3, 'GL1', 'GL103', 'Lead Function Analysis: Control ', 'Pastor Ayo'),
(6, 'GL1', 'GL104', 'Lead Function Analysis: Directing  ', 'Pastor Sammy Moses'),
(7, 'GL1', 'GL105', 'A critical look at the role of higher intelligence or superior knowledge', 'Pastor Sammy Moses'),
(8, 'GL1', 'GL106', 'Leadership As A Natural Instinct  ', 'Pastor Sammy Moses'),
(9, 'GL1', 'GL107', 'The Why And How Of Leadership Development', 'Pastor Sammy Moses'),
(10, 'GL1', 'GL108 ', 'The Leadership Playground ', 'Deacon Paul Samuel'),
(13, 'GL1', 'GL109', 'A Call to Action!', 'Pastor Joy Efe'),
(14, 'GL1', 'GL110', 'Activities Logbook/Transitioning to the next Level', 'Pastor Sammy John'),
(15, 'LL1', 'LL101 ', 'Introduction To 360 Degree Leadership', 'Pastor Edafe Onome'),
(16, 'LL1', 'LL102 ', '360 Degree Leadership: Influencing Yourself Part 1', 'Pastor Kenneth Niyi'),
(17, 'LL1', 'LL103 ', '360 Degree Leadership: Influencing Yourself Part 2', 'Pastor Maxwell Johnson'),
(18, 'LL1', 'LL104 ', '360 Degree Leadership: Influencing Your Superiors Part 1', 'Pastor Matthew Samuel'),
(19, 'LL1 ', 'LL105 ', '360 Degree Leadership: Influencing Your Superiors Part 2', 'Pastor Tayo Yemi'),
(20, 'LL1', 'LL106 ', '360 Degree Leadership: Influencing Your Peers Or Team Members Part 1', 'Pastor Precious Jerry'),
(21, 'LL1', 'LL107 ', '360 Degree Leadership: Influencing Your Peers Or Team Members Part 2', 'Pastor Sammy John'),
(22, 'LL1', 'LL108 ', '360 Degree Leadership: Influencing Down Part 1', 'Pastor Edafe Onome'),
(23, 'LL1', 'LL109', '360 Degree Leadership: Influencing Down  Part 2', 'Pastor Kenneth Niyi'),
(24, 'LL1', 'LL110', 'Activities Logbook/Transitioning To Level 2', 'Pastor Maxwell Johnson'),
(25, 'LL2', 'LL201', 'Being A Leader Versus Having A Leadership Title', 'Pastor Matthew Samuel'),
(26, 'LL2', 'LL202', 'The Leader Makes The Position ', 'Pastor Tayo Yemi'),
(27, 'LL2', 'LL203', 'Goal Focus', 'Pastor Precious Jerry'),
(28, 'LL2', 'LL204', 'The Leader Brand: Making The Right Impression', 'Pastor Wealth Chuks'),
(29, 'LL2', 'LL205', 'Clear Communication And Accurate Language ', 'Pastor Favour Blessing'),
(30, 'LL2', 'LL206', 'Conflict Management ', 'Pastor Wealth Chuks'),
(31, 'LL2', 'LL207', 'Time Management ', 'Pastor Favour Blessing'),
(32, 'LL2', 'LL208', 'The Art Of Delegation ', 'Pastor Emeka Boldman'),
(33, 'LL2', 'LL209', 'The Science Of Prioritization ', 'Pastor Runor Jesica'),
(34, 'LL2', 'LL210', 'Activities Logbook/Transitioning To Level 3', 'Pastor Yemi Stephen'),
(35, 'LL3', 'LL301', 'Focus Shift: From Position To Relationship  Part 1', 'Pastor Paul Nelson'),
(36, 'LL3', 'LL302', 'Focus Shift: From Position To Relationship  Part 2', 'Deaconess Joy Uche'),
(37, 'LL3', 'LL303', 'Building Relationships With Subordinates Part 1', 'Pastor Niyi Gbofu'),
(38, 'LL3', 'LL304', 'Building Relationships With Subordinates Part 2', 'Pastor Thompson'),
(39, 'LL3', 'LL305 ', 'Listen, Learn And Lead Part 1', 'Pastor Samuel Tom'),
(40, 'LL3', 'LL306 ', 'Listen, Learn And Lead Part 2 ', 'Pastor Mercy Mark'),
(41, 'LL3', 'LL307 ', 'The Collaborative Leader Part 1', 'Pastor Maxwell'),
(42, 'LL3', 'LL308 ', 'The Collaborative Leader Part 2', 'Pastor Kenneth John'),
(43, 'LL3', 'LL309 ', 'Optimizing The Use Of Relationships For Results', 'Deacon Paul Kepe'),
(44, 'LL3', 'LL310 ', 'Activities Logbook/Transitioning To Level 4', 'Mentor Name'),
(45, 'LL4', 'LL401', 'The Credibility Of Leadership Based On Results', 'Pastor Marvelous '),
(46, 'LL4', 'LL402', 'The Successful Leader Part 1 ', 'Deacon John'),
(47, 'LL4', 'LL403', 'The Successful Leader Part 2', 'Pastor Timothy'),
(48, 'LL4', 'LL404', 'Lead By Example: I Have Been Successful, Follow Me! Part 1', 'Pastor Blessing James'),
(49, 'LL4', 'LL405', 'Lead By Example I Have Been Successful, Follow Me! Part 2', 'Pastor Precious Bolder'),
(50, 'LL4', 'LL406', 'Create Momentum Using Successes Part 1', 'Pastor Mercy Ben'),
(51, 'LL4', 'LL407', 'Create Momentum Using Successes Part 2', 'Deacon Wisdom James'),
(52, 'LL4', 'LL408', 'The Law Of Attraction Part 1', 'Pastor Yunus'),
(53, 'LL4', 'LL409', 'The Law Of Attraction Part 2 ', 'Pastor James'),
(54, 'LL4', 'LL410', 'Activities Logbook/Transitioning To Level 5', 'Mentor Name'),
(55, 'LL5', 'LL501', 'Compounding Organizational Results Multiplying Value In Other', 'Pastor Buso'),
(56, 'LL5', 'LL502 ', 'An Eye For Recruitment And Positioning Part 1', 'Deacon Elderson'),
(57, 'LL5', 'LL503', 'An Eye For Recruitment And Positioning Part 2', 'Pastor Oke'),
(58, 'LL5', 'LL504 ', 'The Leader Coach Part 1', 'Pastor Tuoyo'),
(59, 'LL5', 'LL505 ', 'The Leader Coach Part 2', 'Pastor Jackson'),
(60, 'LL5', 'LL506 ', 'The Leader Mentor Part 1', 'Deaconess Paul'),
(61, 'LL5', 'LL507 ', 'The Leader Mentor Part 2', 'Deacon John Sam'),
(62, 'LL5', 'LL508 ', 'The Leader Trainer/Equipper Part 1', 'Pastor Daniel'),
(63, 'LL5', 'LL509 ', 'The Leader Trainer/Equipper Part 2', 'Pastor Peter'),
(64, 'LL5', 'LL510 ', 'Activities Logbook/Transitioning To Level 6', 'Mentor Name'),
(65, 'LL6', 'LL601', 'Creating A Legacy Of Leadership Part 1', 'Pastor Wisdom'),
(66, 'LL6', 'LL602', 'Creating A Legacy Of Leadership Part 2', 'Pastor Yemi '),
(67, 'LL6', 'LL603', 'Building The Next Generation Of Level 5 Leaders Part 1', 'Pastor Tayo'),
(68, 'LL6', 'LL604', 'Building The Next Generation Of Level 5 Leaders - Part 2', 'Pastor Max');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `level_id` int(11) NOT NULL,
  `level_code` int(11) NOT NULL,
  `level_title` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(7) NOT NULL,
  `sender_staff_id` int(7) NOT NULL,
  `receiver_staff_id` int(7) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(7) NOT NULL,
  `receiver_staff_id` int(7) NOT NULL,
  `notification` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `reply_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `replies` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(7) NOT NULL,
  `title` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `dept` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `rank` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `level_code` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `last_course_viewed` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `passport` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `title`, `first_name`, `last_name`, `email`, `dept`, `rank`, `level_code`, `last_course_viewed`, `password`, `passport`, `country`, `city`) VALUES
(1, 'Deaconness', 'Esther', 'Ose', 'esther@loveworld.com', 'OHOA', 'Supervisory Staff', 'LL2', 'GL101', '111', 'png', 'Nigeria', 'Lagos'),
(2, 'Pastor', 'Matthew', 'Efe', 'matthew@loveworld360.com', 'OCEO', 'Supervisory Staff', 'LL2', 'GL101', '111', 'jpg', 'Nigeria', 'Lagos'),
(3, 'Deaconness', 'Felicia', 'Oke', 'oke@gm.com', 'OFTP', 'Supervisory Staff', 'LL2', 'GL101', '111', 'jpg', 'Nigeria', 'Lagos'),
(4, 'Sister', 'Hillary ', 'Ode', 'odeadiya@gmail.com', 'OCEO', 'Non Management', 'LL1', 'GL101', 'hillary1', 'png', 'Nigeria', 'Lagos'),
(5, 'Pastor', 'Edna', 'Oharisi', 'oharisi@loveworld360.com', 'OCEO', 'Executive Management', 'LL6', 'GL101', '1111', 'jpg', 'Nigeria', 'Lagos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
