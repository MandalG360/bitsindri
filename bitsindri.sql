-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 08:56 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitsindri`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `acmt_id` int(11) NOT NULL,
  `file` varchar(50) NOT NULL,
  `usr_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`acmt_id`, `file`, `usr_id`) VALUES
(2, '01032021171044.jpg', 1),
(3, '01032021171057.jpg', 1),
(4, '01032021171104.jpg', 1),
(5, '01032021171111.jpg', 1),
(6, '01032021171117.jpg', 1),
(7, '01032021171124.jpg', 1),
(8, '01032021171131.jpg', 1),
(9, '01032021171137.jpg', 1),
(10, '01032021171143.jpg', 1),
(11, '01032021171150.jpg', 1),
(12, '01032021171156.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `name`) VALUES
(1, 'Chemical'),
(2, 'Civil'),
(3, 'Computer Science'),
(4, 'Electrical'),
(5, 'Electronics & Communication'),
(6, 'Information Technology'),
(7, 'Mechanical'),
(8, 'Metallurgy'),
(9, 'Mining'),
(10, 'Production'),
(11, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `desn_id` int(3) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`desn_id`, `type`) VALUES
(1, 'Operator'),
(2, 'Student'),
(3, 'Assistant Professor'),
(4, 'Professor'),
(5, 'Professor & HOD');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `glr_id` int(11) NOT NULL,
  `file` varchar(50) NOT NULL,
  `usr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`glr_id`, `file`, `usr_id`) VALUES
(3, '02032021234903.jpg', 1),
(4, '02032021234910.jpg', 1),
(5, '02032021234915.jpg', 1),
(6, '02032021234921.jpg', 1),
(7, '02032021234927.jpg', 1),
(8, '02032021234931.jpg', 1),
(9, '02032021234937.jpg', 1),
(10, '02032021234944.jpg', 1),
(11, '02032021234949.jpg', 1),
(12, '02032021234954.jpg', 1),
(13, '02032021235014.jpg', 1),
(14, '02032021235021.jpg', 1),
(15, '02032021235029.jpg', 1),
(16, '02032021235036.jpg', 1),
(17, '02032021235043.jpg', 1),
(18, '02032021235051.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `name`, `email`, `subject`, `msg`, `created`) VALUES
(1, 'ashish', '666kmandal@gmail.com', 'test', 'msg here', '2021-03-09 15:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `link` varchar(300) DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL,
  `start_date_time` timestamp NULL DEFAULT NULL,
  `end_date_time` timestamp NULL DEFAULT NULL,
  `usr_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `msg`, `link`, `file`, `start_date_time`, `end_date_time`, `usr_id`, `created`, `updated`) VALUES
(17, 'One Week e-Faculty Development Program In Association With TEQIP-III On “Advances In Manufacturing” (AIM-2021) From June 15-19,2021- Posted on 5-6-2021One Week e-Faculty Development Program In Association With TEQIP-III On “Advances In Manufacturing” (AIM-2021) From June 15-19,2021.', 'https://bitsindri.ac.in/docs/One%20Week-e-FDP.pdf', NULL, '2021-06-09 18:30:00', '2021-07-31 04:47:00', 1, '2021-06-10 04:48:24', '2021-06-10 04:48:24'),
(18, 'Notice for filling B.Tech 1st sem Exam form session 2020-21 (JUT, Ranchi)-Posted on 28-5-2021Notice for filling B.Tech 1st sem Exam form session 2020-21 (JUT, Ranchi)', 'https://bitsindri.ac.in/docs/Notice%20for%20filling%20B.Tech%201st%20sem%20Exam%20form%20session%202020-21%20(JUT,%20Ranchi).pdf', NULL, '2021-06-09 18:30:00', '2021-07-31 05:44:00', 1, '2021-06-10 04:49:53', '2021-06-10 05:44:27'),
(19, 'JUT- Instructions For Students (Students-SOP) - Posted 28-4-2021JUT- Instructions For Students (Students-SOP)', 'https://bitsindri.ac.in/docs/Students-SOP.pdf', NULL, '2021-06-08 18:30:00', '2021-07-29 04:50:00', 1, '2021-06-10 04:50:48', '2021-06-10 04:50:48'),
(20, 'Registration Number allotted to Lateral Entry for session 2020-21 (Posted on 28-4-2021)Registration Number allotted to Lateral Entry for session 2020-21', 'https://bitsindri.ac.in/docs/Letter%20No.%20531%20%20%20Date%2024.04.2021%20encl%20B.I.T.%20Sindri%20Reg.%202020.pdf', NULL, '2021-06-09 18:30:00', '2021-07-31 05:00:00', 1, '2021-06-10 05:00:39', '2021-06-10 05:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE `placement` (
  `placement_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `ctc` float NOT NULL,
  `batch` varchar(15) NOT NULL,
  `selection_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `placement`
--

INSERT INTO `placement` (`placement_id`, `c_name`, `name`, `image`, `branch`, `ctc`, `batch`, `selection_date`) VALUES
(2, 'TCS', 'Sanjeev', '09062021221644.jpg', '6', 3.6, '2K18', '2021-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sdr_id` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `heading` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `usr_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sdr_id`, `file`, `heading`, `description`, `usr_id`) VALUES
(6, '09062021215141.jpg', 'Admin Block', 'BIT Sindri was established in 1949', 1),
(7, '10062021103237.jpg', 'BIT Sindri', 'IMPROVEMENT OF STUDENT LEARNING & GRADUATES EMPLOYABILITY- 20th July 2019', 1),
(8, '10062021103424.jpg', '', 'Aerial View Of BIT Sindri', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_contact`
--

CREATE TABLE `teacher_contact` (
  `tchr_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `desn_fk` int(3) NOT NULL,
  `dept_fk` int(3) NOT NULL,
  `usr_fk` int(6) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_contact`
--

INSERT INTO `teacher_contact` (`tchr_id`, `name`, `mob`, `email`, `desn_fk`, `dept_fk`, `usr_fk`, `created`, `updated`) VALUES
(1, 'Dr. Md F Ansari', '9934394179', 'hod.it@bitsindri.ac.in', 5, 6, 1, '2021-03-09 17:08:03', '2021-03-09 17:08:03'),
(2, 'Dr. D K Singh', '9431445854', 'director@bitsindri.ac.in', 4, 6, 1, '2021-03-09 18:25:01', '2021-03-09 18:25:01'),
(3, ' Dr. S C Dutta ', '9431379679', 'scdutta@bitsindri.ac.in', 3, 6, 1, '2021-03-09 18:31:15', '2021-03-09 18:31:15'),
(4, 'Prof. Parbati Mahanto', '9470978517', 'pmahanto.it@bitsindri.ac.in', 3, 6, 1, '2021-03-09 18:32:00', '2021-03-09 18:32:00'),
(5, 'Prof. Rajiv Ranjan', '9507420028', 'rajivranjan.it@bitsindri.ac.in', 3, 6, 1, '2021-03-09 18:32:53', '2021-03-09 18:32:53'),
(6, 'Dr. Amit Kumar Gupta', '9835785852', 'hod.che@bitsindri.ac.in', 5, 1, 1, '2021-03-09 18:34:13', '2021-03-09 18:34:13'),
(7, 'Dr. Amar Kumar', '9334281501', 'akumar.che@bitsindri.ac.in', 3, 1, 1, '2021-03-09 18:34:51', '2021-03-10 05:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `usr_id` int(11) NOT NULL,
  `desn_fk` int(3) NOT NULL,
  `dept_fk` int(3) DEFAULT 0,
  `name` varchar(30) NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usr_id`, `desn_fk`, `dept_fk`, `name`, `mobile`, `email`, `password`, `updated`, `created`) VALUES
(1, 1, 11, 'Ashish Kumar Mandal', '8228972907', '666kmandal@gmail.com', '829bc05e9555023e3c988c5637fec5b2', '2021-02-26 19:24:30', '2021-02-26 19:24:30'),
(2, 2, 6, 'Ashish Kumar', '9155035586', 'abc@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2021-02-26 19:26:00', '2021-02-26 19:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(150) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `title`, `link`, `updated`, `created`) VALUES
(4, 'bit', 'https://youtu.be/7wQ9V7mBY0o', '2021-06-07 10:45:03', '2021-06-07 10:45:03'),
(5, 'my pc video', '1.mp4', '2021-06-08 11:41:18', '2021-06-08 11:41:18'),
(6, 'youtube video', 'https://www.youtube.com/watch?v=P0P_Sfju0-Q', '2021-06-08 11:44:13', '2021-06-08 11:44:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`acmt_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`desn_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`glr_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `placement`
--
ALTER TABLE `placement`
  ADD PRIMARY KEY (`placement_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sdr_id`);

--
-- Indexes for table `teacher_contact`
--
ALTER TABLE `teacher_contact`
  ADD PRIMARY KEY (`tchr_id`),
  ADD KEY `desn_fk` (`desn_fk`),
  ADD KEY `dept_fk` (`dept_fk`),
  ADD KEY `usr_id` (`usr_fk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usr_id`),
  ADD KEY `desn_fk` (`desn_fk`),
  ADD KEY `dept_fk` (`dept_fk`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `acmt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `desn_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `glr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `placement`
--
ALTER TABLE `placement`
  MODIFY `placement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sdr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teacher_contact`
--
ALTER TABLE `teacher_contact`
  MODIFY `tchr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `teacher_contact`
--
ALTER TABLE `teacher_contact`
  ADD CONSTRAINT `teacher_contact_ibfk_1` FOREIGN KEY (`desn_fk`) REFERENCES `designation` (`desn_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_contact_ibfk_2` FOREIGN KEY (`dept_fk`) REFERENCES `department` (`dept_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_contact_ibfk_3` FOREIGN KEY (`usr_fk`) REFERENCES `user` (`usr_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`dept_fk`) REFERENCES `department` (`dept_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`desn_fk`) REFERENCES `designation` (`desn_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
