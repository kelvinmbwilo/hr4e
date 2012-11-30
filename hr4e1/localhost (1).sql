-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2012 at 10:08 PM
-- Server version: 5.5.28
-- PHP Version: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `education`
--
CREATE DATABASE `education` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `education`;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `occupation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `secret_question` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `secret_answer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `priviledge` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`email`, `first_name`, `middle_name`, `last_name`, `phone_number`, `adress`, `region`, `district`, `occupation`, `date_of_birth`, `password`, `secret_question`, `secret_answer`, `priviledge`) VALUES
('@email', 'First Name', 'MiddleName', 'Last Name', 'Phone Number', 'Postal Addres', 'Region', 'District', 'Occupation', '0000-00-00', 'Password', 'Secret Question', 'Secret Answer', 'Occupation'),
('1', 'kelvin', 'kelvin', 'kelvin', 'kelvin', 'kelvin', 'kelvin', 'kelvin', 'kelvin', '2012-11-13', 'kelvin', 'kelvin', 'kelvin', 'kelvin'),
('First Name', '@email', '@email', '@email', '@email', '@email', '@email', '@email', '@email', '0000-00-00', '@email', '@email', '@email', '@email'),
('gmail', 'jujdskjkd', 'jjdsjj', 'jjdskj', 'jjjjj', '56466', 'Rukwa', 'Sumbawanga Rural', 'jkjsksd', '2012-11-14', 'j', '', 'Secret Answer', 'jkjsksd'),
('jij', 'judk', 'jjk', 'jbjk', 'jijl', 'hugugj', 'Mbeya', 'Kyela', 'jbjbj', '2012-11-20', 'k', 'What is your favorite teachers name', 'khhkl', 'jbjbj'),
('kelvinmbwilo@gmail.com', 'kelvin', 'kulwa', 'mbwilo', '0714402444', '789', 'Manyara', 'Babati', 'RMO', '1990-10-04', 'kevdom', 'what is your parents name', 'mbwilo', 'RMO'),
('yahoo', 'amani', 'Yunge', 'Yahya', '546474884', '54', 'Kilimanjaro', 'Moshi Rural', 'jhfjhdjf', '0000-00-00', 'a', 'What is your favorite teachers name', 'justo', 'jhfjhdjf');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `school_no` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `school_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ownership` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subjects` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`school_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_no`, `school_name`, `district`, `region`, `adress`, `ownership`, `subjects`, `phone_number`) VALUES
('1893', 'majimaji', 'Mlele', 'Katavi', 'box 6475', 'Private', 'Mathematics,Geography,Physics,Biology,English,Addition Math,', '0938492'),
('jhjjj', 'jhuhkj', 'Nanyumbu', 'Mtwara', 'uhuhioh', 'Private', 'subjects', 'bhuhihi');

-- --------------------------------------------------------

--
-- Table structure for table `school_teachers`
--

CREATE TABLE IF NOT EXISTS `school_teachers` (
  `school_no` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `headmaster` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `secondmaster` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `academic` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `displine` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`school_no`,`year`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `ssn` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone_no` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `school_no` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `education_level` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admission_date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `salary_grade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `next_of_kin` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ssn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `subject_name` int(100) NOT NULL,
  PRIMARY KEY (`subject_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `ssn` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `school_no` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `education_level` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admission_date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `salary_grade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `social_security_fund` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `next_of_kin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ssn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ssn`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `phone_number`, `email`, `adress`, `department`, `subject`, `photo`, `school_no`, `district`, `region`, `education_level`, `admission_date`, `salary_grade`, `social_security_fund`, `next_of_kin`, `marital_status`) VALUES
('dk', 'First Name', 'Middle Name', 'Last Name', '2012-11-06', 'Phone Number', 'Email', 'Address', '', 'Physics,Chemistry,', 'photo', 'School', '', '', '', '2012-11-14', 'Salary Grade', 'Social Security Fund', 'Next Of Kin', ''),
('gffgh', 'First Name', 'Middle Name', 'Last Name', '2012-11-21', 'Phone Number', 'Email', 'Address', '', 'Kiswahili,Mathematics,Geography,', 'photo', 'School', 'Kinondoni', 'Dar es Saalam', 'Diploma', '2012-11-08', 'Salary Grade', 'Social Security Fund', 'Next Of Kin', 'Married'),
('jhk', 'hjkk', 'Middle Name', 'Last Name', '2012-11-01', 'Phone Number', 'Email', 'Address', 'Department', 'English,Addition Math,', 'photo', 'School', 'Musoma Urban', 'Mara', 'Degree', '2012-11-15', 'Salary Grade', 'Social Security Fund', 'Next Of Kin', 'Devorced'),
('keivoo', 'First Name', 'Middle Name', 'Last Name', '1970-01-01', 'Phone Number', 'Email', 'Address', 'Arts', 'Mathematics,Geography,', 'photo', '', 'Ilala', 'Dar es Saalam', 'Diploma', '2012-11-07', 'Salary Grade', 'Social Security Fund', 'Next Of Kin', 'Single'),
('SSN', 'First Name', 'Middle Name', 'Last Name', '2012-11-14', '0', 'Email', 'Address', '', 'Physics,Chemistry,', 'photo', 'School', '', '', '', '2012-11-14', 'Salary Grade', 'Social Security Fund', 'Next Of Kin', '');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_cv`
--

CREATE TABLE IF NOT EXISTS `teachers_cv` (
  `ssn` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `primary_school` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `primary_time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `olevel_school` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `olevel_time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `advance_school` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `advance_time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `university` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `university_time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `university_award` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ssn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teachers_cv`
--

INSERT INTO `teachers_cv` (`ssn`, `primary_school`, `primary_time`, `olevel_school`, `olevel_time`, `advance_school`, `advance_time`, `university`, `university_time`, `university_award`) VALUES
('keivoo', 'Primary School', 'Primary Time(1990-1996)', 'Olevel School', 'O-level Time(1990-1994)', 'Advance Level School', 'A-Level Time(1990-1992)', 'University', 'University-Time(1990-1993)', 'Professional Award');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE IF NOT EXISTS `transfer` (
  `transfer_id` int(11) NOT NULL AUTO_INCREMENT,
  `ssn` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `from` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `to` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `transfer_date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`transfer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
