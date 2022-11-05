


CREATE TABLE IF NOT EXISTS `AVAILABILITY` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) NOT NULL,
  `dayofweek` varchar(20) NOT NULL,
  `timing` varchar(20) NOT NULL,
  `seatcode` int(2) NOT NULL,
  `bookingstatus` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;




