-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 10:48 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
`Form Number` varchar(6) COLLATE utf8_bin NOT NULL,
`Version Number` int(2) NOT NULL,
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
`Q60` varchar(300) COLLATE utf8_bin NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`Form Number`, `Version Number`, `Date`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`,
`Q10`) VALUES
('Form1A', 1, '2020-03-03', 'What is your name?', 'What is your name?', 'What is your name?', 'What is your name?',
'What is your name?', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;