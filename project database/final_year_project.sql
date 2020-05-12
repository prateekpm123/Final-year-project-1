-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 05:53 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_year_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `Admin_name` varchar(255) NOT NULL,
  `Admin_First_name` varchar(255) NOT NULL,
  `Admin_Middle_name` varchar(255) NOT NULL,
  `Admin_Last_name` varchar(255) NOT NULL,
  `Admin_Address` varchar(1055) NOT NULL,
  `Phone_no` int(15) NOT NULL,
  `Aemail` varchar(255) NOT NULL,
  `A_password` varchar(255) NOT NULL,
  `A_repassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `Admin_name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `A_repassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `Admin_name`, `Password`, `A_repassword`) VALUES
(123, 'Aniket', 'singh', 'singh');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `q_no` int(11) NOT NULL,
  `ans_id` int(15) NOT NULL,
  `Adate` date NOT NULL DEFAULT current_timestamp(),
  `Answers` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `user_id`, `q_no`, `ans_id`, `Adate`, `Answers`) VALUES
(1, 1, 1, 1, '0000-00-00', ''),
(1, 1, 2, 2, '0000-00-00', ''),
(1, 1, 3, 3, '0000-00-00', ''),
(1, 1, 4, 4, '0000-00-00', ''),
(1, 1, 5, 5, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `form_details`
--

CREATE TABLE `form_details` (
  `admin_id` int(11) NOT NULL,
  `id` int(15) NOT NULL,
  `form_id` varchar(255) NOT NULL,
  `form_name` varchar(255) NOT NULL,
  `form_version` int(11) NOT NULL,
  `form_date` date NOT NULL DEFAULT current_timestamp(),
  `access_levels` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_details`
--

INSERT INTO `form_details` (`admin_id`, `id`, `form_id`, `form_name`, `form_version`, `form_date`, `access_levels`) VALUES
(123, 1, '', 'Teachers review on infrastructure', 0, '2020-04-29', ''),
(123, 2, '', '', 0, '2020-05-02', ''),
(123, 3, '', '', 0, '2020-05-02', ''),
(123, 4, '', '', 0, '2020-05-02', ''),
(123, 5, '', 'aasdfs', 0, '2020-05-02', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `admin_id` int(11) NOT NULL,
  `Admin_name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`admin_id`, `Admin_name`, `Password`) VALUES
(123, 'Aniket', 'singh');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `q_no` int(15) NOT NULL,
  `Qdate` date NOT NULL DEFAULT current_timestamp(),
  `Questions` varchar(255) NOT NULL,
  `Option1` varchar(255) NOT NULL,
  `Option2` varchar(255) NOT NULL,
  `Option3` varchar(255) NOT NULL,
  `Option4` varchar(255) NOT NULL,
  `Option5` varchar(255) NOT NULL,
  `Option6` varchar(255) NOT NULL,
  `Option7` varchar(255) NOT NULL,
  `Option8` varchar(255) NOT NULL,
  `Option9` varchar(255) NOT NULL,
  `Option10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `q_no`, `Qdate`, `Questions`, `Option1`, `Option2`, `Option3`, `Option4`, `Option5`, `Option6`, `Option7`, `Option8`, `Option9`, `Option10`) VALUES
(1, 1, '2020-05-02', 'what is the thought process', 'let see now', 'not now', '', '', '', '', '', '', '', ''),
(1, 2, '2020-05-02', 'What are your thoughts on college infrastructure', 'Is okay', 'Needs to be improved', '', '', '', '', '', '', '', ''),
(1, 3, '2020-05-02', 'What are you thoughts on college faculty', '', '', '', '', '', '', '', '', '', ''),
(1, 4, '2020-05-02', 'al;skdjl;ksaj', 'sadfas', 'jal;ksdjf', 'asdgfdsg', 'dsgdsgf', 'dsfgdsg', '', '', '', '', ''),
(1, 5, '2020-05-02', 'What is your name ?', '', '', '', '', '', '', '', '', '', ''),
(1, 6, '2020-05-02', 'dfgdsgfs', '', '', '', '', '', '', '', '', '', ''),
(1, 7, '2020-05-03', 'dfghdh', 'dfgh', 'dfg', 'asdaf', 'asdf', '', '', '', '', '', ''),
(1, 8, '2020-05-03', 'asdfasfs', '', '', '', '', '', '', '', '', '', ''),
(1, 9, '2020-05-03', 'asdfsadf', '', '', '', '', '', '', '', '', '', ''),
(1, 10, '2020-05-03', 'asfasfsaf', 'asdfsa', 'dsfgdsgf', '', '', '', '', '', '', '', ''),
(1, 12, '2020-05-03', 'vbnmbnbm', '', '', '', '', '', '', '', '', '', ''),
(1, 13, '2020-05-03', 'fghjfghj', 'fgjhkj nmbnbm ', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(15) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Middle_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Address` varchar(1055) NOT NULL,
  `Phone_no` int(15) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `Role`, `First_name`, `Middle_name`, `Last_name`, `Address`, `Phone_no`, `Email`) VALUES
(1, 'Student', 'Raj', 'Raj', 'Raj', 'none', 12231212, 'raj@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ans_id`),
  ADD KEY `q_no` (`q_no`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `form_details`
--
ALTER TABLE `form_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_no`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_no` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`id`) REFERENCES `form_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answers_ibfk_3` FOREIGN KEY (`q_no`) REFERENCES `questions` (`q_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form_details`
--
ALTER TABLE `form_details`
  ADD CONSTRAINT `form_details_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `login` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`id`) REFERENCES `form_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
