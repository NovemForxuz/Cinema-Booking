-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 01, 2021 at 01:06 AM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `f32ee`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticketorders`
--

CREATE TABLE IF NOT EXISTS `ticketorders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `booking_id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `seat` int(5) NOT NULL,
  `dayofweek` varchar(20) NOT NULL,
  `timing` varchar(20) NOT NULL,
  `nameCustomer` varchar(100) NOT NULL,
  `payment` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `ticketorders`
--

INSERT INTO `ticketorders` (`id`, `booking_id`, `title`, `movie_id`, `email`, `phone`, `seat`, `dayofweek`, `timing`, `nameCustomer`, `payment`) VALUES
(1, 1635698451, '007 No Time to Die', 1, 'cronous999@hotmail.com', '96462991', 16, '14-Dec-2021', '1000', 'sam heng', 'visa'),
(2, 1635698451, '007 No Time to Die', 1, 'cronous999@hotmail.com', '96462991', 17, '14-Dec-2021', '1000', 'sam heng', 'visa'),
(3, 1635698451, '007 No Time to Die', 1, 'cronous999@hotmail.com', '96462991', 22, '14-Dec-2021', '1000', 'sam heng', 'visa'),
(4, 1635698451, '007 No Time to Die', 1, 'cronous999@hotmail.com', '96462991', 23, '14-Dec-2021', '1000', 'sam heng', 'visa'),
(5, 1635698479, 'ShangChi and The Legend of Ten Rings', 5, 'skyscraper960@gmail.com', '96462994', 20, '14-Dec-2021', '1000', 'Heng Seng En', 'visa'),
(6, 1635698479, 'ShangChi and The Legend of Ten Rings', 5, 'skyscraper960@gmail.com', '96462994', 21, '14-Dec-2021', '1000', 'Heng Seng En', 'visa'),
(7, 1635698501, 'Venom: Let There Be Carnage', 2, 'sengen96@gmail.com', '96462991', 18, '14-Dec-2021', '1600', 'agnes tan', 'visa'),
(8, 1635698546, 'Dune', 3, 'asdf@gmai.com', '12345678', 8, '14-Dec-2021', '1800', 'ben tan', 'visa'),
(9, 1635698546, 'Dune', 3, 'asdf@gmai.com', '12345678', 9, '14-Dec-2021', '1800', 'ben tan', 'visa'),
(10, 1635698576, 'Tokyo Revengers', 8, 'cronous999@hotmail.com', '96462991', 14, '14-Dec-2021', '1800', 'Heng Seng En', 'visa'),
(11, 1635698576, 'Tokyo Revengers', 8, 'cronous999@hotmail.com', '96462991', 15, '14-Dec-2021', '1800', 'Heng Seng En', 'visa'),
(12, 1635698576, 'Tokyo Revengers', 8, 'cronous999@hotmail.com', '96462991', 20, '14-Dec-2021', '1800', 'Heng Seng En', 'visa'),
(13, 1635698576, 'Tokyo Revengers', 8, 'cronous999@hotmail.com', '96462991', 21, '14-Dec-2021', '1800', 'Heng Seng En', 'visa'),
(14, 1635698645, 'Venom: Let There Be Carnage', 2, 'kenji@gmail.com', '12345678', 20, '15-Dec-2021', '1600', 'kenji', 'visa'),
(15, 1635698679, 'Venom: Let There Be Carnage', 2, 'ragul@hotmail.com', '91223366', 21, '16-Dec-2021', '2000', 'Ragul', 'master'),
(16, 1635698716, '007 No Time to Die', 1, 'karintan@hotmail.com', '87654321', 12, '15-Dec-2021', '1400', 'karin tan', 'visa'),
(17, 1635698716, '007 No Time to Die', 1, 'karintan@hotmail.com', '87654321', 13, '15-Dec-2021', '1400', 'karin tan', 'visa'),
(18, 1635698726, 'Venom: Let There Be Carnage', 2, 'cronous999@hotmail.com', '96462991', 14, '14-Dec-2021', '1400', 'sam heng', 'visa'),
(19, 1635698726, 'Venom: Let There Be Carnage', 2, 'cronous999@hotmail.com', '96462991', 20, '14-Dec-2021', '1400', 'sam heng', 'visa'),
(20, 1635698739, 'Dune', 3, 'sengen96@gmail.com', '96462991', 14, '14-Dec-2021', '1400', 'Seng En Heng', 'visa'),
(21, 1635698755, 'ShangChi and The Legend of Ten Rings', 5, 'cronous999@hotmail.com', '96462991', 8, '15-Dec-2021', '1400', 'Heng Seng En', 'visa'),
(22, 1635698755, 'ShangChi and The Legend of Ten Rings', 5, 'cronous999@hotmail.com', '96462991', 20, '15-Dec-2021', '1400', 'Heng Seng En', 'visa'),
(23, 1635698766, 'Dune', 3, 'skyscraper960@gmail.com', '96462994', 15, '14-Dec-2021', '1800', 'Heng Seng En', 'visa'),
(24, 1635698766, 'Dune', 3, 'skyscraper960@gmail.com', '96462994', 20, '14-Dec-2021', '1800', 'Heng Seng En', 'visa'),
(25, 1635698778, 'ShangChi and The Legend of Ten Rings', 5, 'cronous999@hotmail.com', '96462991', 14, '14-Dec-2021', '1600', 'sam heng', 'visa'),
(26, 1635698778, 'ShangChi and The Legend of Ten Rings', 5, 'cronous999@hotmail.com', '96462991', 15, '14-Dec-2021', '1600', 'sam heng', 'visa'),
(27, 1635698812, 'Dune', 3, 'sengen96@gmail.com', '96462991', 8, '15-Dec-2021', '1600', 'Seng En Heng', 'visa'),
(28, 1635698812, 'Dune', 3, 'sengen96@gmail.com', '96462991', 9, '15-Dec-2021', '1600', 'Seng En Heng', 'visa'),
(29, 1635698812, 'Dune', 3, 'sengen96@gmail.com', '96462991', 14, '15-Dec-2021', '1600', 'Seng En Heng', 'visa'),
(30, 1635698812, 'Dune', 3, 'sengen96@gmail.com', '96462991', 15, '15-Dec-2021', '1600', 'Seng En Heng', 'visa'),
(31, 1635698812, 'Dune', 3, 'sengen96@gmail.com', '96462991', 20, '15-Dec-2021', '1600', 'Seng En Heng', 'visa'),
(32, 1635698812, 'Dune', 3, 'sengen96@gmail.com', '96462991', 21, '15-Dec-2021', '1600', 'Seng En Heng', 'visa'),
(33, 1635699527, '007 No Time to Die', 1, 'cronous999@hotmail.com', '96462991', 20, '14-Dec-2021', '1000', 'sam heng', 'visa'),
(34, 1635699527, '007 No Time to Die', 1, 'cronous999@hotmail.com', '96462991', 21, '14-Dec-2021', '1000', 'sam heng', 'visa'),
(35, 1635700077, 'Venom: Let There Be Carnage', 2, 'cronous999@hotmail.com', '96462991', 15, '14-Dec-2021', '1400', 'Heng Seng En', 'visa'),
(36, 1635700077, 'Venom: Let There Be Carnage', 2, 'cronous999@hotmail.com', '96462991', 21, '14-Dec-2021', '1400', 'Heng Seng En', 'visa'),
(37, 1635700270, '007 No Time to Die', 1, 'sengen96@gmail.com', '96462991', 22, '14-Dec-2021', '1400', 'Seng En Heng', 'visa'),
(38, 1635700270, '007 No Time to Die', 1, 'sengen96@gmail.com', '96462991', 23, '14-Dec-2021', '1400', 'Seng En Heng', 'visa'),
(39, 1635703397, '007 No Time to Die', 1, 'sengen96@gmail.com', '96462991', 20, '14-Dec-2021', '1400', 'Seng En Heng', 'visa'),
(40, 1635703397, '007 No Time to Die', 1, 'sengen96@gmail.com', '96462991', 21, '14-Dec-2021', '1400', 'Seng En Heng', 'visa'),
(41, 1635703448, '007 No Time to Die', 1, 'skyscraper960@gmail.com', '96462994', 14, '14-Dec-2021', '1600', 'Heng Seng En', 'visa'),
(42, 1635703448, '007 No Time to Die', 1, 'skyscraper960@gmail.com', '96462994', 15, '14-Dec-2021', '1600', 'Heng Seng En', 'visa'),
(43, 1635703763, 'Tokyo Revengers', 8, 'cronous999@hotmail.com', '96462991', 14, '15-Dec-2021', '1800', 'Heng Seng En', 'master'),
(44, 1635703763, 'Tokyo Revengers', 8, 'cronous999@hotmail.com', '96462991', 15, '15-Dec-2021', '1800', 'Heng Seng En', 'master'),
(45, 1635703763, 'Tokyo Revengers', 8, 'cronous999@hotmail.com', '96462991', 20, '15-Dec-2021', '1800', 'Heng Seng En', 'master'),
(46, 1635703763, 'Tokyo Revengers', 8, 'cronous999@hotmail.com', '96462991', 21, '15-Dec-2021', '1800', 'Heng Seng En', 'master'),
(47, 1635704023, 'Dune', 3, 'cronous999@hotmail.com', '96462991', 18, '16-Dec-2021', '1600', 'Heng Seng En', 'paypal'),
(48, 1635704658, 'Venom: Let There Be Carnage', 2, 'cronous999@hotmail.com', '96462991', 8, '14-Dec-2021', '1400', 'sam heng', 'visa'),
(49, 1635704658, 'Venom: Let There Be Carnage', 2, 'cronous999@hotmail.com', '96462991', 9, '14-Dec-2021', '1400', 'sam heng', 'visa'),
(50, 1635704700, '007 No Time to Die', 1, 'sengen96@gmail.com', '96462991', 14, '14-Dec-2021', '1400', 'Seng En Heng', 'visa'),
(51, 1635704700, '007 No Time to Die', 1, 'sengen96@gmail.com', '96462991', 15, '14-Dec-2021', '1400', 'Seng En Heng', 'visa'),
(52, 1635704760, 'Tokyo Revengers', 8, 'skyscraper960@gmail.com', '96462994', 18, '15-Dec-2021', '1800', 'Heng Seng En', 'visa'),
(53, 1635704760, 'Tokyo Revengers', 8, 'skyscraper960@gmail.com', '96462994', 19, '15-Dec-2021', '1800', 'Heng Seng En', 'visa'),
(54, 1635704810, 'Dune', 3, 'cronous999@hotmail.com', '12345678', 20, '15-Dec-2021', '2000', 'Heng Seng En', 'visa'),
(55, 1635704810, 'Dune', 3, 'cronous999@hotmail.com', '12345678', 21, '15-Dec-2021', '2000', 'Heng Seng En', 'visa'),
(56, 1635704866, 'Venom: Let There Be Carnage', 2, 'sengen96@gmail.com', '96462991', 20, '14-Dec-2021', '1600', 'Seng En Heng', 'visa'),
(57, 1635704866, 'Venom: Let There Be Carnage', 2, 'sengen96@gmail.com', '96462991', 21, '14-Dec-2021', '1600', 'Seng En Heng', 'visa'),
(58, 1635705070, 'Dune', 3, 'skyscraper960@gmail.com', '96462994', 14, '14-Dec-2021', '1000', 'Heng Seng En', 'visa'),
(59, 1635705070, 'Dune', 3, 'skyscraper960@gmail.com', '96462994', 20, '14-Dec-2021', '1000', 'Heng Seng En', 'visa'),
(60, 1635705282, 'Venom: Let There Be Carnage', 2, 'sengen96@gmail.com', '96462991', 13, '14-Dec-2021', '', 'Seng En Heng', 'visa'),
(61, 1635705282, 'Venom: Let There Be Carnage', 2, 'sengen96@gmail.com', '96462991', 19, '14-Dec-2021', '', 'Seng En Heng', 'visa'),
(62, 1635705377, '007 No Time to Die', 1, 'sengen96@gmail.com', '96462991', 6, '14-Dec-2021', '', 'Seng En Heng', 'visa'),
(63, 1635705377, '007 No Time to Die', 1, 'sengen96@gmail.com', '96462991', 7, '14-Dec-2021', '', 'Seng En Heng', 'visa'),
(64, 1635705402, '007 No Time to Die', 1, 'sengen96@gmail.com', '96462991', 6, '14-Dec-2021', '', 'Seng En Heng', 'visa'),
(65, 1635705402, '007 No Time to Die', 1, 'sengen96@gmail.com', '96462991', 7, '14-Dec-2021', '', 'Seng En Heng', 'visa'),
(66, 1635705630, '007 No Time to Die', 1, 'sengen96@gmail.com', '96462991', 14, '14-Dec-2021', '', 'Seng En Heng', 'visa'),
(67, 1635705630, '007 No Time to Die', 1, 'sengen96@gmail.com', '96462991', 15, '14-Dec-2021', '', 'Seng En Heng', 'visa'),
(68, 1635705866, 'Venom: Let There Be Carnage', 2, 'sengenh96@gmail.com', '9646299', 14, '14-Dec-2021', '', 'Heng Seng En', 'visa'),
(69, 1635705866, 'Venom: Let There Be Carnage', 2, 'sengenh96@gmail.com', '9646299', 15, '14-Dec-2021', '', 'Heng Seng En', 'visa'),
(70, 1635705915, 'ShangChi and The Legend of Ten Rings', 5, 'cronous999@hotmail.com', '96462991', 20, '14-Dec-2021', '', 'Heng Seng En', 'visa'),
(71, 1635705915, 'ShangChi and The Legend of Ten Rings', 5, 'cronous999@hotmail.com', '96462991', 21, '14-Dec-2021', '', 'Heng Seng En', 'visa'),
(72, 1635706029, 'Tokyo Revengers', 8, 'skyscraper960@gmail.com', '96462994', 8, '14-Dec-2021', '', 'Heng Seng En', 'visa'),
(73, 1635706029, 'Tokyo Revengers', 8, 'skyscraper960@gmail.com', '96462994', 9, '14-Dec-2021', '', 'Heng Seng En', 'visa'),
(74, 1635706094, 'Venom: Let There Be Carnage', 2, 'skyscraper960@gmail.com', '96462994', 14, '14-Dec-2021', '', 'Heng Seng En', 'visa'),
(75, 1635706094, 'Venom: Let There Be Carnage', 2, 'skyscraper960@gmail.com', '96462994', 15, '14-Dec-2021', '', 'Heng Seng En', 'visa'),
(76, 1635706205, '007 No Time to Die', 1, 'cronous999@hotmail.com', '96462991', 20, '14-Dec-2021', '', 'sam heng', 'master'),
(77, 1635706205, '007 No Time to Die', 1, 'cronous999@hotmail.com', '96462991', 21, '14-Dec-2021', '', 'sam heng', 'master'),
(78, 1635706359, '007 No Time to Die', 1, 'cronous999@hotmail.com', '96462991', 9, '14-Dec-2021', '', 'sam heng', 'visa'),
(79, 1635706359, '007 No Time to Die', 1, 'cronous999@hotmail.com', '96462991', 20, '14-Dec-2021', '', 'sam heng', 'visa'),
(80, 1635706546, 'Venom: Let There Be Carnage', 2, 'sengen96@gmail.com', '96462991', 14, '14-Dec-2021', '', 'Seng En Heng', 'visa'),
(81, 1635706546, 'Venom: Let There Be Carnage', 2, 'sengen96@gmail.com', '96462991', 15, '14-Dec-2021', '', 'Seng En Heng', 'visa'),
(82, 1635706784, 'Venom: Let There Be Carnage', 2, 'sengenh96@gmail.com', '96462991', 18, '14-Dec-2021', '', 'Heng Seng En', 'visa'),
(83, 1635706885, 'Venom: Let There Be Carnage', 2, 'sengen96@gmail.com', '96462991', 15, '14-Dec-2021', '', 'Seng En Heng', 'visa'),
(84, 1635706885, 'Venom: Let There Be Carnage', 2, 'sengen96@gmail.com', '96462991', 22, '14-Dec-2021', '', 'Seng En Heng', 'visa'),
(85, 1635706934, 'ShangChi and The Legend of Ten Rings', 5, 'skyscraper960@gmail.com', '96462994', 22, '14-Dec-2021', '', 'Heng Seng En', 'visa'),
(86, 1635707490, 'Tokyo Revengers', 8, 'cronous999@hotmail.com', '96462991', 14, '14-Dec-2021', '', 'Heng Seng En', 'paypal'),
(87, 1635707490, 'Tokyo Revengers', 8, 'cronous999@hotmail.com', '96462991', 15, '14-Dec-2021', '', 'Heng Seng En', 'paypal'),
(88, 1635707490, 'Tokyo Revengers', 8, 'cronous999@hotmail.com', '96462991', 20, '14-Dec-2021', '', 'Heng Seng En', 'paypal'),
(89, 1635707490, 'Tokyo Revengers', 8, 'cronous999@hotmail.com', '96462991', 21, '14-Dec-2021', '', 'Heng Seng En', 'paypal'),
(90, 1635728206, 'Venom: Let There Be Carnage', 2, 'sengen96@gmail.com', '96462991', 12, '14-Dec-2021', '', 'Seng En Heng', 'visa'),
(91, 1635728206, 'Venom: Let There Be Carnage', 2, 'sengen96@gmail.com', '96462991', 13, '14-Dec-2021', '', 'Seng En Heng', 'visa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
