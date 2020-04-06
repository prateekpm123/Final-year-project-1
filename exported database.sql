-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 06:02 PM
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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `Form Number` varchar(6) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Version Number` int(3) NOT NULL,
  `Date` date NOT NULL,
  `Q1` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q2` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q3` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q4` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q5` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q6` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q7` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q8` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q9` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q10` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q11` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q12` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q13` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q14` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q15` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q16` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q17` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q18` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q19` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q20` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q21` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q22` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q23` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q24` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q25` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q26` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q27` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q28` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q29` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q30` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q31` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q32` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q33` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q34` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q35` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q36` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q37` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q38` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q39` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q40` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q41` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q42` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q43` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q44` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q45` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q46` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q47` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q48` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q49` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q50` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q51` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q52` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q53` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q54` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q55` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q56` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q57` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q58` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q59` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Q60` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`Form Number`, `Version Number`, `Date`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`, `Q18`, `Q19`, `Q20`, `Q21`, `Q22`, `Q23`, `Q24`, `Q25`, `Q26`, `Q27`, `Q28`, `Q29`, `Q30`, `Q31`, `Q32`, `Q33`, `Q34`, `Q35`, `Q36`, `Q37`, `Q38`, `Q39`, `Q40`, `Q41`, `Q42`, `Q43`, `Q44`, `Q45`, `Q46`, `Q47`, `Q48`, `Q49`, `Q50`, `Q51`, `Q52`, `Q53`, `Q54`, `Q55`, `Q56`, `Q57`, `Q58`, `Q59`, `Q60`) VALUES
('Form1A', 1, '2020-03-03', 'Courses taught by you in this academic year have good balance between theory and its applications.', 'The objectives of syllabus aer well defined.', 'All the books mentioned in syllabus are available in library and in enough numbers.', 'Practical mentioned in syllabus are proper and high standard.', 'Institute has givenfreedom and support for implementing new techniques in teaching and learning process.', 'College regularly sends you for various workshops and STTP for keeping always updates with latest technologies.', 'College has given you freedom for implementing advanced techniques in accessing the students.', 'Administration section of the college is teacher friendly.', 'Canteen facility is satisfactory.', 'Campus is clean and its regular maintenance is done.', 'Campus is ecofriendly.', 'What is your name 12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_answers`
--

CREATE TABLE `teachers_answers` (
  `teach_id` int(30) NOT NULL,
  `teach_name` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `Form Number` varchar(6) COLLATE utf8_bin NOT NULL,
  `Version Number` int(3) NOT NULL,
  `Date` date NOT NULL,
  `Q1` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q2` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q3` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q4` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q5` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q6` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q7` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q8` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q9` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q10` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q11` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q12` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q13` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q14` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q15` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q16` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q17` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q18` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q19` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q20` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q21` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q22` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q23` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q24` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q25` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q26` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q27` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q28` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q29` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q30` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q31` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q32` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q33` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q34` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q35` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q36` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q37` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q38` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q39` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q40` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q41` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q42` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q43` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q44` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q45` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q46` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q47` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q48` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q49` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q50` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q51` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q52` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q53` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q54` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q55` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q56` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q57` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q58` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q59` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q60` varchar(300) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `teachers_answers`
--

INSERT INTO `teachers_answers` (`teach_id`, `teach_name`, `Form Number`, `Version Number`, `Date`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`, `Q18`, `Q19`, `Q20`, `Q21`, `Q22`, `Q23`, `Q24`, `Q25`, `Q26`, `Q27`, `Q28`, `Q29`, `Q30`, `Q31`, `Q32`, `Q33`, `Q34`, `Q35`, `Q36`, `Q37`, `Q38`, `Q39`, `Q40`, `Q41`, `Q42`, `Q43`, `Q44`, `Q45`, `Q46`, `Q47`, `Q48`, `Q49`, `Q50`, `Q51`, `Q52`, `Q53`, `Q54`, `Q55`, `Q56`, `Q57`, `Q58`, `Q59`, `Q60`) VALUES
(1, NULL, '', 0, '0000-00-00', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, NULL, '', 0, '0000-00-00', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, NULL, '', 0, '0000-00-00', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, NULL, '', 0, '0000-00-00', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, NULL, '', 0, '0000-00-00', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, NULL, '', 0, '0000-00-00', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, NULL, '', 0, '0000-00-00', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, NULL, '', 0, '0000-00-00', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, NULL, '', 0, '0000-00-00', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, NULL, '', 0, '0000-00-00', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, NULL, '', 0, '0000-00-00', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, NULL, '', 0, '0000-00-00', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, NULL, '', 0, '0000-00-00', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, NULL, '', 0, '0000-00-00', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, NULL, '', 0, '0000-00-00', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, NULL, '', 0, '0000-00-00', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, NULL, '', 0, '0000-00-00', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, NULL, '', 0, '0000-00-00', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, NULL, '', 0, '0000-00-00', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, NULL, '', 0, '0000-00-00', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`Version Number`);

--
-- Indexes for table `teachers_answers`
--
ALTER TABLE `teachers_answers`
  ADD PRIMARY KEY (`teach_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `Version Number` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teachers_answers`
--
ALTER TABLE `teachers_answers`
  MODIFY `teach_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE `teacher_event_ans` (
  `teach_id` int(30) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Q1` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q2` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q3` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q4` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q5` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q6` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q7` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q8` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q9` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q10` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q11` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q12` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q13` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q14` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q15` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q16` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q17` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q18` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q19` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q20` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q21` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q22` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q23` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q24` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q25` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q26` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q27` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q28` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q29` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q30` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q31` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q32` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q33` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q34` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q35` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q36` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q37` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q38` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q39` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q40` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q41` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q42` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q43` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q44` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q45` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q46` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q47` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q48` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q49` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q50` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q51` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q52` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q53` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q54` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q55` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q56` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q57` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q58` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q59` varchar(300) COLLATE utf8_bin NOT NULL,
  `Q60` varchar(300) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
