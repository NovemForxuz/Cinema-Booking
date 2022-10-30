
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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

INSERT INTO `ticketorders` (`id`, `booking_id`, `title`, `movie_id`, `email`, `phone`, `seat`, `dayofweek`, `timing`, `nameCustomer`, `payment`) VALUES
(1, 1635698451, 'Avatar: The Way Of Water', 2, 'tammy999@gmail.com', '98223451', 16, '2-Nov-2022', '1300', 'Tammy', 'visa'),
(2, 1635698451, 'Avatar: The Way Of Water', 2, 'tammy999@gmail.com', '98223451', 17, '2-Nov-2022', '1300', 'Tammy', 'visa');

