-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 04:24 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scholarship`
--

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_details`
--

CREATE TABLE IF NOT EXISTS `scholarship_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `scholarship_type` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `local_university` varchar(255) NOT NULL,
  `other_university` varchar(255) NOT NULL,
  `other_university_country` varchar(255) NOT NULL,
  `student_id` varchar(255) DEFAULT NULL,
  `course_of_study` varchar(255) DEFAULT NULL,
  `expected_degree` varchar(255) DEFAULT NULL,
  `university_address` longtext,
  `scholarship_award_letter` varchar(255) DEFAULT NULL,
  `university_admission_letter` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `university_contact_name` varchar(255) DEFAULT NULL,
  `university_contact_position` varchar(255) NOT NULL,
  `university_contact_phone` varchar(255) DEFAULT NULL,
  `university_contact_email` varchar(255) DEFAULT NULL,
  `currency_type` varchar(255) NOT NULL,
  `total_tuition` varchar(255) NOT NULL,
  `total_paid` varchar(255) NOT NULL,
  `total_due` varchar(255) NOT NULL,
  `evidence_of_payment` text,
  `stipend_paid` varchar(255) NOT NULL,
  `university_bank_name` varchar(255) DEFAULT NULL,
  `university_account_name` varchar(255) DEFAULT NULL,
  `university_account_number` varchar(255) DEFAULT NULL,
  `swift_code` varchar(255) DEFAULT NULL,
  `iban_number` varchar(255) DEFAULT NULL,
  `personal_bank_name` varchar(255) DEFAULT NULL,
  `personal_account_name` varchar(255) DEFAULT NULL,
  `personal_account_number` varchar(255) DEFAULT NULL,
  `attestation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `scholarship_details`
--

INSERT INTO `scholarship_details` (`id`, `email`, `scholarship_type`, `country`, `university`, `local_university`, `other_university`, `other_university_country`, `student_id`, `course_of_study`, `expected_degree`, `university_address`, `scholarship_award_letter`, `university_admission_letter`, `start_date`, `end_date`, `university_contact_name`, `university_contact_position`, `university_contact_phone`, `university_contact_email`, `currency_type`, `total_tuition`, `total_paid`, `total_due`, `evidence_of_payment`, `stipend_paid`, `university_bank_name`, `university_account_name`, `university_account_number`, `swift_code`, `iban_number`, `personal_bank_name`, `personal_account_name`, `personal_account_number`, `attestation`) VALUES
(1, 'ben2416@live.com', 'International', 'Other', 'Other', '', 'University of Malta', 'Guiness Malt Production', '1234', 'computer engineering', 'MSc', 'fsdfasdf', 'ben2416_scholarship_award_letter.png', 'ben2416_university_admission_letter.png', '2017-03-18', '2017-03-18', 'ms amina mohammed', 'Customer Care', '28349238749', 'uni@sf.com', 'USD', '5000000', '2250000', '2750000', 'ben2416_evidence_of_payment_0.png,ben2416_evidence_of_payment_1.png', '20 months', 'Middlesex Microfinance Bank', 'University of Middlesex', '23479123847', '4234', '74293874', 'Swiss Bank', 'Ben Simon', '13241234', 'Attested');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `clearpass` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `phone`, `sex`, `clearpass`, `password`, `passport`, `address`, `datetime`) VALUES
(1, 'Benedict', 'Onabe', 'ben2416@live.com', '07035484893', 'Male', '79yAYVoe', 'eb0253591cd7341d32e0993217ee82369e489bac', 'ben2416.png', '2 Garba Nadama Close,\r\nApo Legislative Quarters,\r\nZone E, Abuja', '2017-03-18 12:46:26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
