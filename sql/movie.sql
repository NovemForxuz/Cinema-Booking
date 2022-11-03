

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `MOVIE` (
  `movie_id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_name` varchar(50) NOT NULL,
  `duration` int(3) NOT NULL COMMENT 'mins',
  `language` varchar(3) NOT NULL COMMENT 'ENG / CHI/  HIN / MAL',
  `genre` varchar(50) NOT NULL,
  `distributor` varchar(10) NOT NULL,
  `release_date` date NOT NULL,
  `synopsis` varchar(10000) NOT NULL,
  `image_dir` varchar(500) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `cast` varchar(500) NOT NULL,
  `director` varchar(200) NOT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;


-- table `MOVIE` data


INSERT INTO `MOVIE` (`movie_id`, `movie_name`, `duration`, `language`, `genre`, `distributor`, `release_date`, `synopsis`, `image_dir`, `rating`, `cast`, `director`) VALUES
(1, 'Black Panther: Wakanda Forever', 161, 'ENG', 'Action', 'Walts Disney', '2022-11-02', 'Queen Ramonda, Shuri, M Baku, Okoye and the Dora Milaje fight to protect their nation from intervening world powers in the wake of King T Challa death. As the Wakandans strive to embrace their next chapter, the heroes must band together with Nakia and Everett Ross to forge a new path for their beloved kingdom.', 'posters_small\\wakanda-forever.jpg', 'PG13', 'Lupita Nyongo , Danai Gurira , Angela Bassett, Winston Duke, Letitia Wright , Florence Kasumba', 'Ryan Coogler'),
(2, 'Avatar: The Way Of Water', 165, 'ENG', 'Fantasy', '20th Century Studios', '2022-10-28', 'Set more than a decade after the events of the first film, "Avatar: The Way of Water" begins to tell the story of the Sully family (Jake, Neytiri, and their kids), the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive, and the tragedies they endure.', 'posters_small\\7avatar2021.png', 'PG13', 'Vin Diesel, Kate Winslet, Zoe Saldana, Stephen Lang, Sam Worthington, Sigourney Weaver', 'James Cameron'),
(3, 'The Menu', 106, 'ENG', 'Black Comedy', 'WB', '2022-10-24', 'A couple (Anya Taylor-Joy and Nicholas Hoult) travels to a coastal island to eat at an exclusive restaurant where the chef (Ralph Fiennes) has prepared a lavish menu, with some shocking surprises.', 'posters_small\\the-menu.jpg', 'M18', 'Nicholas Hoult, Ralph Fiennes, Anya Taylor Joy', 'Mark Mylod'),
(4, 'Elvis', 159, 'ENG', 'Musical', 'Warner Bros', '2022-10-15', 'Whilst on a mission to transform the mainstream rock and roll culture of the USA, singer Elvis Presley uses his fame to highlight racism within the country', 'posters_small\\Elvis-poster.png', 'M18', 'Austin Butler, Tom Hanks, Helen Thomson, Richard Roxburgh, Olivia DeJonge', 'Baz Luhrmann'),
(5, 'Black Adam', 125, 'ENG', 'Action', 'Warner Bros', '2022-10-20', 'Nearly 5,000 years after he was bestowed with the almighty powers of the Egyptian gods - and imprisoned just as quickly - Black Adam is freed from his earthly tomb, ready to unleash his unique form of justice on the modern world.', 'posters_small\\Black-Adam-Poster.webp', 'PG13', 'Dwayne Johnson, Aldis Hodge, Pierce Brosnan, Noah Centineo, Sarah Shahi, Marwan Kenzari, Quintessa Swindell, Bodhi Sabongui', 'Jaume Collet-Serra'),
(6, 'Everything Everywhere All At Once', 140, 'Eng', 'Adventure/Sci-fi', 'A24', '2022-10-10', 'A Chinese immigrant gets unwillingly embroiled in an epic adventure where she must connect different versions of herself in the parallel universe to stop someone who intends to harm the multiverse.', 'posters_small\\Everything-Everywhere-All-At-Once.png', 'M18- Some Homosexual Content and Sexual References', 'Michelle Yeoh, Ke Huy Quan, Stephanie Hsu, Jenny Slate, Harry Shum Jr., James Hong, Jamie Lee Curtis', 'Daniel Kwan, Daniel Scheinert');


