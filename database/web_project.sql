-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 07:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `a_id` int(11) NOT NULL,
  `a_title` text NOT NULL,
  `a_desc` text NOT NULL,
  `a_smallimg` text NOT NULL,
  `a_bigimg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`a_id`, `a_title`, `a_desc`, `a_smallimg`, `a_bigimg`) VALUES
(1, 'We Help Students To Pass Test & Get A License On The First Try', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet  Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet', '8261about.jpg', '4467about.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'dhiraj@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment_list`
--

CREATE TABLE `appoinment_list` (
  `a_id` int(11) NOT NULL,
  `a_name` text NOT NULL,
  `a_email` text NOT NULL,
  `a_course` text NOT NULL,
  `a_cartype` text NOT NULL,
  `a_message` text NOT NULL,
  `adate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinment_list`
--

INSERT INTO `appoinment_list` (`a_id`, `a_name`, `a_email`, `a_course`, `a_cartype`, `a_message`, `adate`) VALUES
(1, 'Dhiraj', 'dhiraj@gmail.com', 'Traning', 'Modern', 'any', '2022-06-20'),
(4, 'Dhiraj Phatake', 'dhiraj@gmail.com', 'Learning', 'Thar', 'zfxc', '2022-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `aw_details`
--

CREATE TABLE `aw_details` (
  `aw_id` int(11) NOT NULL,
  `aw_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aw_details`
--

INSERT INTO `aw_details` (`aw_id`, `aw_title`) VALUES
(1, 'Fully Licensed'),
(2, 'Online Tracking'),
(3, 'Afordable Fee'),
(4, 'Best Trainers');

-- --------------------------------------------------------

--
-- Table structure for table `client_say`
--

CREATE TABLE `client_say` (
  `cs_id` int(11) NOT NULL,
  `client_name` text NOT NULL,
  `client_position` text NOT NULL,
  `client_message` text NOT NULL,
  `client_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_say`
--

INSERT INTO `client_say` (`cs_id`, `client_name`, `client_position`, `client_message`, `client_img`) VALUES
(1, 'client_name', 'client_position', 'client_message', '8865client.jpg'),
(2, 'Vishal', 'Analyst', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit praesentium qui recusandae illum tenetur! Labore accusamus ipsa asperiores optio ipsam!', '6146client.jpg'),
(3, 'Miss', 'Developer', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea id sint assumenda laborum, nesciunt enim facere magnam commodi aliquid! Possimus earum maxime explicabo harum repellendus incidunt soluta nam consectetur officiis.', '6606client.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_data`
--

CREATE TABLE `contact_data` (
  `c_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `cdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_data`
--

INSERT INTO `contact_data` (`c_id`, `name`, `email`, `subject`, `message`, `cdate`) VALUES
(3, 'Dhiraj ', 'dhirajphatake185@gmail.com', 'anything', 'none', '2022-06-19'),
(8, 'Vishal', 'vishal@gmail.com', 'Analyst', 'Data Analyst', '2022-06-19'),
(9, 'Anish', 'anish@gmail.com', 'Learner', 'none', '2022-06-21'),
(10, 'Yash', 'yash@gmail.com', 'Driving', 'i want to drive BMW', '2022-10-04'),
(11, 'Abhishek', 'abhi@gmail.com', 'Driving', 'I want to drive ENOVA', '2022-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `c_id` int(11) NOT NULL,
  `c_address` text NOT NULL,
  `c_timing` text NOT NULL,
  `c_mobile` varchar(10) NOT NULL,
  `c_email` text NOT NULL,
  `f_Link` text NOT NULL,
  `i_Link` text NOT NULL,
  `t_Link` text NOT NULL,
  `y_Link` text NOT NULL,
  `c_map` text NOT NULL,
  `l_Link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`c_id`, `c_address`, `c_timing`, `c_mobile`, `c_email`, `f_Link`, `i_Link`, `t_Link`, `y_Link`, `c_map`, `l_Link`) VALUES
(1, 'Ahmednagar, Maharashtra', 'Mon - Fri : 09.00 AM - 09.00 PM', '7709552232', 'phatkedhiraj2001@gmail.com', '#', '#', '#', '#', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120638.06452284344!2d74.67263276780102!3d19.110309156839836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcb05d46788921%3A0x6677e92c1a5181b6!2sAhmednagar%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1655558030292!5m2!1sen!2sin', '#');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_id` int(11) NOT NULL,
  `c_title` text NOT NULL,
  `c_desc` text NOT NULL,
  `c_price` text NOT NULL,
  `c_type` text NOT NULL,
  `c_duration` text NOT NULL,
  `c_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `c_title`, `c_desc`, `c_price`, `c_type`, `c_duration`, `c_img`) VALUES
(3, 'Automatic Car Lessons', 'Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos', '$99', 'Beginner', '3 Week', '9561course.jpg'),
(5, 'Highway Driving Lesson', 'Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos', '$499', 'Intermediate', '6 Week', '6547course.jpg'),
(6, 'International Driving', 'Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos', '$999', 'Advance', '9 Week', '7382course.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `f_id` int(11) NOT NULL,
  `f_title` text NOT NULL,
  `f_desc` text NOT NULL,
  `f_smallimg` text NOT NULL,
  `f_bigimg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`f_id`, `f_title`, `f_desc`, `f_smallimg`, `f_bigimg`) VALUES
(1, 'Best Driving Training Agency In Your City', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet', '3733features.jpg', '5867features.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fw_details`
--

CREATE TABLE `fw_details` (
  `fw_id` int(11) NOT NULL,
  `fw_title` text NOT NULL,
  `fw_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fw_details`
--

INSERT INTO `fw_details` (`fw_id`, `fw_title`, `fw_desc`) VALUES
(1, 'Get Fully Licensed', 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos'),
(2, 'Online Tracking', 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos'),
(3, 'Afordable Fee', 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos'),
(4, 'Best Trainers', 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `mobile`, `address`, `password`) VALUES
(1, 'dhiraj', 'admin@gmail.com', '9370058101', 'newasa', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_img` text NOT NULL,
  `slider_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_img`, `slider_title`) VALUES
(1, '7406slider.jpg', 'Learn To Drive With Confidence'),
(2, '376slider.jpg', 'Safe Driving Is Our Top Priority');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `team_name` text NOT NULL,
  `team_position` text NOT NULL,
  `f_link` text NOT NULL,
  `t_link` text NOT NULL,
  `i_link` text NOT NULL,
  `team_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `team_position`, `f_link`, `t_link`, `i_link`, `team_img`) VALUES
(14, 'Dhiraj', 'Farmer..', '#', '#', '#', '5485team.png'),
(15, 'Rushi b', 'Developer', '#', '#', '#', '1261team.png'),
(16, 'Kishor', 'Tester..', '#', '#', '#', '2683team.jfif'),
(17, 'Abhishek', 'Java Developer..', '#', '#', '#', '3725team.png');

-- --------------------------------------------------------

--
-- Table structure for table `why_us`
--

CREATE TABLE `why_us` (
  `wu_id` int(11) NOT NULL,
  `wu_title` text NOT NULL,
  `wu_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `why_us`
--

INSERT INTO `why_us` (`wu_id`, `wu_title`, `wu_desc`) VALUES
(1, 'Easy Driving Learn', 'Clita erat ipsum lorem sit sed stet duo justo erat amet'),
(2, 'National Instructor', 'Clita erat ipsum lorem sit sed stet duo justo erat amet'),
(3, 'Get licence', 'Clita erat ipsum lorem sit sed stet duo justo erat amet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoinment_list`
--
ALTER TABLE `appoinment_list`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `aw_details`
--
ALTER TABLE `aw_details`
  ADD PRIMARY KEY (`aw_id`);

--
-- Indexes for table `client_say`
--
ALTER TABLE `client_say`
  ADD PRIMARY KEY (`cs_id`);

--
-- Indexes for table `contact_data`
--
ALTER TABLE `contact_data`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `fw_details`
--
ALTER TABLE `fw_details`
  ADD PRIMARY KEY (`fw_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `why_us`
--
ALTER TABLE `why_us`
  ADD PRIMARY KEY (`wu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appoinment_list`
--
ALTER TABLE `appoinment_list`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aw_details`
--
ALTER TABLE `aw_details`
  MODIFY `aw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client_say`
--
ALTER TABLE `client_say`
  MODIFY `cs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_data`
--
ALTER TABLE `contact_data`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fw_details`
--
ALTER TABLE `fw_details`
  MODIFY `fw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `why_us`
--
ALTER TABLE `why_us`
  MODIFY `wu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
