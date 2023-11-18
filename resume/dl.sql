-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 22, 2023 at 07:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `adminid` int(11) NOT NULL,
  `aemail` varchar(255) COLLATE utf8_bin NOT NULL,
  `apassword` varchar(255) COLLATE utf8_bin NOT NULL,
  `usertype` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`adminid`, `aemail`, `apassword`, `usertype`) VALUES
(1, 'admin@gmail.com', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `applyjob`
--

CREATE TABLE `applyjob` (
  `aid` int(11) NOT NULL,
  `aname` varchar(255) COLLATE utf8_bin NOT NULL,
  `askills` varchar(255) COLLATE utf8_bin NOT NULL,
  `aexperience` varchar(255) COLLATE utf8_bin NOT NULL,
  `aeducation` varchar(255) COLLATE utf8_bin NOT NULL,
  `aemail` varchar(255) COLLATE utf8_bin NOT NULL,
  `anum` int(20) NOT NULL,
  `acity` varchar(255) COLLATE utf8_bin NOT NULL,
  `aimage` text COLLATE utf8_bin NOT NULL,
  `aresume` text COLLATE utf8_bin NOT NULL,
  `cemail` varchar(255) COLLATE utf8_bin NOT NULL,
  `recemail` varchar(255) COLLATE utf8_bin NOT NULL,
  `jobid` int(11) NOT NULL,
  `jobname` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `applyjob`
--

INSERT INTO `applyjob` (`aid`, `aname`, `askills`, `aexperience`, `aeducation`, `aemail`, `anum`, `acity`, `aimage`, `aresume`, `cemail`, `recemail`, `jobid`, `jobname`) VALUES
(22, 'jawad ahmed', 'c++, c', 'computer science/ exposys', 'degree', 'jaw@gmail.com', 2147483647, 'mumbai', 'peb.jpg', '', 'jaw@gmail.com', 'usaid@gmail.com', 2, 'Technical'),
(23, 'abc', 'html', '3 years', 'be', 'abc@gmail.com', 123456789, 'bangalore', 'boy.jpg', '946584.jpg', 'abc@gmail.com', 'usaid@gmail.com', 4, 'backend'),
(43, 'jawad ahmed', 'c++, c', 'computer science/ exposys', 'degree', 'jaw@gmail.com', 2147483647, 'mumbai', '', '', 'jaw@gmail.com', 'qaz@gmail.com', 7, 'software engineer'),
(44, 'jawad ahmed', 'c++, c', 'computer science/ exposys', 'degree', 'jaw@gmail.com', 2147483647, 'mumbai', '', 'icons8-company-64.png', 'jaw@gmail.com', 'mmm@gmail.com', 10, 'software engineer'),
(49, 'jawad ahmed', 'c++, c', 'computer science/ exposys', 'degree', 'jaw@gmail.com', 2147483647, 'mumbai', 'peb.jpg', 'pexels-toni-cuenca-572487.jpg', 'jaw@gmail.com', 'qaz@gmail.com', 8, 'software'),
(54, 'jawad ahmed', 'c++, c', 'computer science/ exposys', 'degree', 'jaw@gmail.com', 2147483647, 'mumbai', 'peb.jpg', '', 'jaw@gmail.com', 'qaz@gmail.com', 9, 'abc'),
(56, 'jawad ahmed', 'c++, c', 'computer science/ exposys', 'degree', 'jaw@gmail.com', 2147483647, 'mumbai', 'pexels-min-an-1353938.jpg', 'Diagram.png', 'jaw@gmail.com', 'usaid@gmail.com', 2, 'Technical'),
(57, 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 0, 'aaaaaaaaaaaaaaaa', '', 'Block03.png', 'jaw@gmail.com', 'jaw@gmail.com', 0, '<br />\r\n<b>Warning</b>:  Undefined variable $jobname in <b>C:xampphtdocsjob-listing-mastercandidateapplyjob.php</b> on line <b>114</b><br />\r\n'),
(62, 'jawad ahmed', 'c++, c, css, php, mongodb', 'computer science, exposys internships in digital marketing and frontend development/ backend only basic', 'B. Tech', 'jaw@gmail.com', 2147483647, 'mumbai', '', '', 'jaw@gmail.com', 'usaid@gmail.com', 2, 'Technical'),
(63, 'jawad ahmed', 'c++, c, css, php, mongodb', 'computer science, exposys internships in digital marketing and frontend development/ backend only basic', 'B. Tech', 'jaw@gmail.com', 2147483647, 'mumbai', '', '', 'jaw@gmail.com', 'usaid@gmail.com', 2, 'Technical'),
(64, 'jawad ahmed', 'c++, c, css, php, mongodb', 'computer science, exposys internships in digital marketing and frontend development/ backend only basic', 'B. Tech', 'jaw@gmail.com', 2147483647, 'mumbai', '', '', 'jaw@gmail.com', 'usaid@gmail.com', 2, 'Technical'),
(65, 'jawad ahmed', 'c++, c, css, php, mongodb', 'computer science, exposys internships in digital marketing and frontend development/ backend only basic', 'B. Tech', 'jaw@gmail.com', 2147483647, 'mumbai', '', '', 'jaw@gmail.com', 'usaid@gmail.com', 2, 'Technical'),
(66, 'jawad usaid ahmed', 'c++, c, css, php, mongodb, python', 'computer science, graduated from exposys Labs internships in digital marketing and frontend development/ backend only basic', 'B. Tech/BE', 'jaw@gmail.com', 2147483647, 'Bangalore', '', 'vl.png', 'jaw@gmail.com', '<br />\r\n<b>Warning</b>:  Undefined variable $recemail in <b>C:xampphtdocsjob-listing-mastercandidateapplyjob.php</b> on line <b>116</b><br />\r\n', 0, '<br />\r\n<b>Warning</b>:  Undefined variable $jobname in <b>C:xampphtdocsjob-listing-mastercandidateapplyjob.php</b> on line <b>117</b><br />\r\n'),
(67, 'jawad usaid ahmed', 'c++, c, css, php, mongodb, python', 'computer science, graduated from exposys Labs internships in digital marketing and frontend development/ backend only basic', 'B. Tech/BE', 'jaw@gmail.com', 2147483647, 'Bangalore', '', 'vl.png', 'jaw@gmail.com', '<br />\r\n<b>Warning</b>:  Undefined variable $recemail in <b>C:xampphtdocsjob-listing-mastercandidateapplyjob.php</b> on line <b>116</b><br />\r\n', 0, '<br />\r\n<b>Warning</b>:  Undefined variable $jobname in <b>C:xampphtdocsjob-listing-mastercandidateapplyjob.php</b> on line <b>117</b><br />\r\n'),
(68, 'jawad usaid ahmed', 'c++, c, css, php, mongodb, python', 'computer science, graduated from exposys Labs internships in digital marketing and frontend development/ backend only basic', 'B. Tech/BE', 'jaw@gmail.com', 2147483647, 'Bangalore', '', 'vl.png', 'jaw@gmail.com', '<br />\r\n<b>Warning</b>:  Undefined variable $recemail in <b>C:xampphtdocsjob-listing-mastercandidateapplyjob.php</b> on line <b>116</b><br />\r\n', 0, '<br />\r\n<b>Warning</b>:  Undefined variable $jobname in <b>C:xampphtdocsjob-listing-mastercandidateapplyjob.php</b> on line <b>117</b><br />\r\n'),
(69, 'jawad ahmed', 'c++, c, css, php, mongodb', 'computer science, exposys internships in digital marketing and frontend development/ backend only basic', 'B. Tech', 'jaw@gmail.com', 2147483647, 'mumbai', '', '', 'jaw@gmail.com', '<br />\r\n<b>Warning</b>:  Undefined variable $recemail in <b>C:xampphtdocsjob-listing-mastercandidateapplyjob.php</b> on line <b>118</b><br />\r\n', 0, '<br />\r\n<b>Warning</b>:  Undefined variable $jobname in <b>C:xampphtdocsjob-listing-mastercandidateapplyjob.php</b> on line <b>119</b><br />\r\n'),
(70, 'jawad ahmed', 'c++, c, css, php, mongodb', 'computer science, exposys internships in digital marketing and frontend development/ backend only basic', 'B. Tech', 'jaw@gmail.com', 2147483647, 'mumbai', '', '', 'jaw@gmail.com', '<br />\r\n<b>Warning</b>:  Undefined variable $recemail in <b>C:xampphtdocsjob-listing-mastercandidateapplyjob.php</b> on line <b>118</b><br />\r\n', 0, '<br />\r\n<b>Warning</b>:  Undefined variable $jobname in <b>C:xampphtdocsjob-listing-mastercandidateapplyjob.php</b> on line <b>119</b><br />\r\n'),
(71, 'jawad ahmed', 'c++, c, css, php, mongodb', 'computer science, exposys internships in digital marketing and frontend development/ backend only basic', 'B. Tech', 'jaw@gmail.com', 2147483647, 'mumbai', '', '', 'jaw@gmail.com', '<br />\r\n<b>Warning</b>:  Undefined variable $recemail in <b>C:xampphtdocsjob-listing-mastercandidateapplyjob.php</b> on line <b>118</b><br />\r\n', 0, '<br />\r\n<b>Warning</b>:  Undefined variable $jobname in <b>C:xampphtdocsjob-listing-mastercandidateapplyjob.php</b> on line <b>119</b><br />\r\n'),
(72, 'jawad ahmed', 'c++, c, css, php, mongodb', 'computer science, exposys internships in digital marketing and frontend development/ backend only basic', 'B. Tech', 'jaw@gmail.com', 2147483647, 'mumbai', '', '', 'jaw@gmail.com', '<br />\r\n<b>Warning</b>:  Undefined variable $recemail in <b>C:xampphtdocsjob-listing-mastercandidateapplyjob.php</b> on line <b>118</b><br />\r\n', 0, '<br />\r\n<b>Warning</b>:  Undefined variable $jobname in <b>C:xampphtdocsjob-listing-mastercandidateapplyjob.php</b> on line <b>119</b><br />\r\n'),
(73, 'jawad ahmed', 'c++, c, css, php, mongodb', 'computer science, exposys internships in digital marketing and frontend development/ backend only basic', 'B. Tech', 'jaw@gmail.com', 2147483647, 'mumbai', '', '', 'jaw@gmail.com', '<br />\r\n<b>Warning</b>:  Undefined variable $recemail in <b>C:xampphtdocsjob-listing-mastercandidateapplyjob.php</b> on line <b>118</b><br />\r\n', 0, '<br />\r\n<b>Warning</b>:  Undefined variable $jobname in <b>C:xampphtdocsjob-listing-mastercandidateapplyjob.php</b> on line <b>119</b><br />\r\n'),
(74, 'jawad ahmed', 'c++, c, css, php, mongodb', 'computer science, exposys internships in digital marketing and frontend development/ backend only basic', 'B. Tech', 'jaw@gmail.com', 2147483647, 'mumbai', '', '', 'jaw@gmail.com', '<br />\r\n<b>Warning</b>:  Undefined variable $recemail in <b>C:xampphtdocsjob-listing-mastercandidateapplyjob.php</b> on line <b>118</b><br />\r\n', 0, '<br />\r\n<b>Warning</b>:  Undefined variable $jobname in <b>C:xampphtdocsjob-listing-mastercandidateapplyjob.php</b> on line <b>119</b><br />\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) COLLATE utf8_bin NOT NULL,
  `cemail` varchar(255) COLLATE utf8_bin NOT NULL,
  `cpassword` varchar(255) COLLATE utf8_bin NOT NULL,
  `cnum` int(20) NOT NULL,
  `cimage` text COLLATE utf8_bin NOT NULL,
  `usertype` varchar(255) COLLATE utf8_bin NOT NULL,
  `caddress` varchar(255) COLLATE utf8_bin NOT NULL,
  `ceducation` varchar(255) COLLATE utf8_bin NOT NULL,
  `cskills` varchar(255) COLLATE utf8_bin NOT NULL,
  `cexperience` varchar(255) COLLATE utf8_bin NOT NULL,
  `ccity` varchar(255) COLLATE utf8_bin NOT NULL,
  `cresume` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`cid`, `cname`, `cemail`, `cpassword`, `cnum`, `cimage`, `usertype`, `caddress`, `ceducation`, `cskills`, `cexperience`, `ccity`, `cresume`) VALUES
(1, 'jawad ahmed', 'jaw@gmail.com', 'qwe123', 2147483647, 'pexels-jonas-mohamadi-1427288.jpg', 'candidate', 'basava nagar', 'B. Tech', 'c++, c, css, php, mongodb', 'computer science, exposys internships in digital marketing and frontend development/ backend only basic', 'mumbai', 'JAVA & J2EE (SJBIT) [10IS753]-NOTES.pdf'),
(3, 'yousuf ahmed', 'abc@gmail.com', 'abc123', 123456789, 'boy.jpg', 'candidate', 'gm road', 'be', 'html, mern stack developer', '3 years of experience in google company, and 5years of experienc in wisdon pvt limited for project manager', 'bangalore', ''),
(17, 'ubc', 'ubc@gmail.com', 'abcd123', 2147483647, '', 'candidate', 'yadanagar', 'be', 'java', '1years', 'mumbai', ''),
(18, 'qwe', 'qwe@gmail.com', 'abcd123', 2147483647, '', 'candidate', 'kushak ag', 'btech', 'python', 'freshers', 'pune', ''),
(19, 'dell', 'dell123@gmail.com', 'dell123', 1298496598, '', 'candidate', 'nagar palya', 'mcom', 'c sharp', '2 yrs', 'calicut', ''),
(21, 'zzzz', 'z@gmail.com', 'zzz123', 1234567890, '', 'candidate', '', '', '', '', '', ''),
(23, 'ddd', 'D@gmail.com', 'd123', 1234567890, '', 'candidate', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `canrating`
--

CREATE TABLE `canrating` (
  `ratingId` int(11) NOT NULL,
  `jobId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `rating` int(20) NOT NULL,
  `review` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `canrating`
--

INSERT INTO `canrating` (`ratingId`, `jobId`, `userId`, `rating`, `review`) VALUES
(34, 0, 1, 3, 'dddd'),
(35, 0, 1, 3, 'dddd'),
(36, 0, 1, 3, 'dddd'),
(37, 0, 1, 3, 'dddd'),
(38, 0, 1, 3, 'dddd'),
(39, 0, 1, 3, 'hello'),
(40, 0, 1, 3, 'dd'),
(41, 0, 1, 3, 'dd'),
(42, 0, 1, 3, 'dd'),
(43, 0, 1, 3, 'dd'),
(44, 0, 1, 3, 'dd'),
(45, 0, 1, 3, 'dddd'),
(46, 0, 1, 3, 'dddd'),
(47, 0, 1, 3, 'dddd'),
(48, 0, 1, 3, 'rrrrrr');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jid` int(11) NOT NULL,
  `jTitle` varchar(255) COLLATE utf8_bin NOT NULL,
  `jOpenings` int(20) NOT NULL,
  `jLocation` varchar(255) COLLATE utf8_bin NOT NULL,
  `jSalary` varchar(255) COLLATE utf8_bin NOT NULL,
  `jDescription` varchar(255) COLLATE utf8_bin NOT NULL,
  `jCompany` varchar(255) COLLATE utf8_bin NOT NULL,
  `jImage` text COLLATE utf8_bin NOT NULL,
  `jSkills` varchar(255) COLLATE utf8_bin NOT NULL,
  `posted` varchar(255) COLLATE utf8_bin NOT NULL,
  `jBrief` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jid`, `jTitle`, `jOpenings`, `jLocation`, `jSalary`, `jDescription`, `jCompany`, `jImage`, `jSkills`, `posted`, `jBrief`) VALUES
(2, 'Technical', 20, 'bangalore', '10000 - 40000', 'work in business analysis, technical support, need good communication skills and excelllent in programming                                                                        ', 'microsoft', 'google.png', 'Python, MongoDB', 'usaid@gmail.com', ''),
(4, 'backend', 70, 'mumbai', '10000 - 90000', 'business analysis, good communication skills                                                all in vain for the only thing you have suffered enough', 'solution pvt lmt', 'instagram.png', 'mysql', 'usaid@gmail.com', ''),
(6, 'full stack', 20, 'pune', '30000', 'work on both frontend and backend design well enough lorem imsum on lorem ipsum on to both.                               ', 'vlaunchu pvt', 'profile.png', 'html, java, mysql', 'usaid@gmail.com', ''),
(7, 'software engineer', 100, 'delhi', '10000 - 40000', 'work in job testing talk and communcate great directory on won on self to take care ', 'mocro', '', 'c, c++', 'qaz@gmail.com', ''),
(8, 'software', 30, 'delhi', '10000 - 40000', 'work on software testing won to talk lorem ipsum self care self declare to won\'t make', 'ideas', '', 'english, hindi', 'qaz@gmail.com', ''),
(9, 'abc', 50, 'pune', '1000 - 20000', 'abcdefg work very lorem ipsum seemles suffereingsemlesfly onto work hard enough', 'qwerty', '', 'zew', 'qaz@gmail.com', ''),
(10, 'software engineer', 20, 'bangalore', '10000 - 40000', 'work as a software engineer on software have on one thing to test this very calmfully mind to take care of it once you do the testing and azure cloud related field .', 'amazon', 'amazon.png', 'python', 'mmm@gmail.com', ''),
(22, 'aaaaaa', 122, 'aaaaa', '45', 'aaaaa', 'aaaaa@v.com', 'icons8-company-64.png', 'aaaaaa', 'usaid@gmail.com', 'aaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `mid` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `cemail` varchar(255) COLLATE utf8_bin NOT NULL,
  `messages` varchar(1000) COLLATE utf8_bin NOT NULL,
  `jobid` int(11) NOT NULL,
  `jobname` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`mid`, `email`, `cemail`, `messages`, `jobid`, `jobname`) VALUES
(11, 'usaid@gmail.com', 'jaw@gmail.com', 'Dear abc, your Job application has been processed and you got selected in our company thank you', 0, 'backend'),
(12, 'usaid@gmail.com', 'abc@gmail.com', 'Dear abc, kajfklj', 0, 'backend');

-- --------------------------------------------------------

--
-- Table structure for table `recruiter`
--

CREATE TABLE `recruiter` (
  `rid` int(11) NOT NULL,
  `rname` varchar(255) COLLATE utf8_bin NOT NULL,
  `remail` varchar(255) COLLATE utf8_bin NOT NULL,
  `rpassword` varchar(255) COLLATE utf8_bin NOT NULL,
  `rnum` int(20) NOT NULL,
  `rimage` text COLLATE utf8_bin NOT NULL,
  `usertype` varchar(255) COLLATE utf8_bin NOT NULL,
  `raddress` varchar(255) COLLATE utf8_bin NOT NULL,
  `reducation` varchar(255) COLLATE utf8_bin NOT NULL,
  `rskills` varchar(255) COLLATE utf8_bin NOT NULL,
  `rexperience` varchar(255) COLLATE utf8_bin NOT NULL,
  `rcity` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `recruiter`
--

INSERT INTO `recruiter` (`rid`, `rname`, `remail`, `rpassword`, `rnum`, `rimage`, `usertype`, `raddress`, `reducation`, `rskills`, `rexperience`, `rcity`) VALUES
(2, 'usaidahmed', 'usaid123@gmail.com', 'asd', 1234567890, '', 'recruiter', '', '', '', '', ''),
(4, 'Usaid ahmed', 'usaid@gmail.com', 'qwe', 93435678, 'businessman.png', 'recruiter', 'mg road', 'B com', 'recruiting and managing employee', 'HR, Salesforce', 'Pune'),
(7, 'qaz', 'qaz@gmail.com', 'qaz123', 2345678, 'qaz.jpg', 'recruiter', '', '', '', '', ''),
(8, 'qwe', 'mmm@gmail.com', 'mmm123', 1234567, 'b9a4728e52319ea939038d95506d01cd.jpg', 'recruiter', '', 'B com', 'recruiting and managing employee', 'HR', 'Pune'),
(9, 'asdfg', 'tera@gmail.com', 'abcd123', 2147483647, 'pexels-jonas-mohamadi-1427288.jpg', 'recruiter', 'bangalore', 'be', 'html', '3 years', 'karnataka'),
(11, 'a', 'a', 'a', 0, '', 'recruiter', '', '', '', '', ''),
(13, 'yy', 'y@gmail.com', 'y123', 2147483647, '', 'recruiter', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `applyjob`
--
ALTER TABLE `applyjob`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `canrating`
--
ALTER TABLE `canrating`
  ADD PRIMARY KEY (`ratingId`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `recruiter`
--
ALTER TABLE `recruiter`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin1`
--
ALTER TABLE `admin1`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applyjob`
--
ALTER TABLE `applyjob`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `canrating`
--
ALTER TABLE `canrating`
  MODIFY `ratingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `recruiter`
--
ALTER TABLE `recruiter`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
