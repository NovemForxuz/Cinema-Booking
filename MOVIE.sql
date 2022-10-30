-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 01, 2021 at 01:05 AM
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
-- Table structure for table `MOVIE`
--

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

--
-- Dumping data for table `MOVIE`
--

INSERT INTO `MOVIE` (`movie_id`, `movie_name`, `duration`, `language`, `genre`, `distributor`, `release_date`, `synopsis`, `image_dir`, `rating`, `cast`, `director`) VALUES
(1, '007 No Time to Die', 112, 'ENG', 'Thriller', 'CSR', '2021-10-05', 'In No Time To Die, Bond has left active service and is enjoying a tranquil life in Jamaica. His peace is short-lived when his old friend Felix Leiter from the CIA turns up asking for help. The mission to rescue a kidnapped scientist turns out to be far more treacherous than expected, leading Bond onto the trail of a mysterious villain armed with dangerous new technology.', 'posters_small\\007.jpg', 'M16 - some violence', 'Daniel Craig, Rami Malek, Lea Seydoux, Lashana Lynch, Ben Whishaw, Naomie Harris', 'Cary Joji Fukunaga'),
(2, 'Venom: Let There Be Carnage', 126, 'ENG', 'Action', 'SPR', '2021-10-14', 'Tom Hardy returns to the big screen as the lethal protector Venom, one of MARVEL''s greatest and most complex characters. Directed by Andy Serkis, the film also stars Michelle Williams, Naomie Harris and Woody Harrelson, in the role of the villain Cletus Kasady/Carnage.', 'posters_small\\carnage.webp', 'M18 - gore and violence', 'Tom Hardy, Michelle Williams, Naomie Harris, Reid Scott, Stephen Graham, Woody Harrelson', 'Andy Serkis'),
(3, 'Dune', 132, 'ENG', 'Sci-Fi', 'WB', '2021-09-16', 'A mythic and emotionally charged hero''s journey, Dune tells the story of Paul Atreides, a brilliant and gifted young man born into a great destiny beyond his understanding, who must travel to the most dangerous planet in the universe to ensure the future of his family and his people. As malevolent forces explode into conflict over the planet''s exclusive supply of the most precious resource in existence-a commodity capable of unlocking humanity''s greatest potential-only those who can conquer their fear will survive.', 'posters_small\\dune.webp', 'PG - coarse language', 'Timothee Chalamet, Rebecca Ferguson, Oscar Isaac, Josh Brolin, Stellan Skarsgard, Dave Bautista', 'Denis Villeneuve'),
(4, 'The Mandalorian', 102, 'ENG', 'Sci-Fi', 'DPD', '2021-09-01', 'The travels of a lone bounty hunter in the outer reaches of the galaxy, far from the authority of the New Republic. After the stories of Jango and Boba Fett, another warrior emerges in the Star Wars universe. The Mandalorian is set after the fall of the Empire and before the emergence of the First Order.', 'posters_small\\mandalorian.jpg', 'G', 'Pedro Pascal, Gina Carano, Giancarlo Esposito', 'Jon Favreau'),
(5, 'ShangChi and The Legend of Ten Rings', 112, 'ENG', 'Action', 'WDS', '2021-09-01', 'Marvel Studios: Shang-Chi and The Legend of The Ten Rings stars Simu Liu as Shang-Chi, who must confront the past he thought he left behind when he is drawn into the web of the mysterious Ten Rings organization. The film also stars Tony Leung as Wenwu, Awkwafina as Shang-Chi''s friend Katy and Michelle Yeoh as Jiang Nan, as well as Fala Chen, Meng''er Zhang, Florian Munteanu and Ronny Chieng.', 'posters_small\\shangchi_small.webp', 'PG - mild violence', 'Simu Liu, Tony Leung, Awkwafina, Michelle Yeoh, Fala Chen, Meng''er Zhang, Florian Munteanu, Ronny Chieng', 'Destin Daniel Cretton'),
(6, 'Antlers', 112, 'ENG', 'Horror', 'WDS', '2021-10-28', '"ANTLERS contains several sequences with flashing lights that may affect those who are susceptible to photosensitive epilepsy or have other photosensitivities."<br>\r\n\r\nA small-town Oregon teacher and her brother, the local sheriff, become entwined with a young student harboring a dangerous secret with frightening consequences.', 'posters_small\\antlers.jpg', 'M16 - blood and gore', 'Keri Russell, Jeremy T. Thomas, Jesse Plemons, Graham Greene', 'Scott Cooper'),
(7, 'Late Night Ride', 126, 'CHI', 'Horror', 'GVP', '2021-10-28', 'A group of social media influencers, led by Nat, decides to explore a haunted road and nearby cycling park, in an attempt to gain more viewers for their channel. Nat purposely breaks some taboo in the hopes of capturing paranormal activities and ends up being haunted. What will happen to her? Jie lost his wife in a car accident and his son, Josh, has not spoken since. The father and son end up on a late-night bus ride where all dark secrets will be unveiled. Min is a private hire driver who works day and night to earn money for her father''s medical bills. Sinister happenings started to occur when she is on the roads and she needs to figure out why before the situation gets out of control.', 'posters_small\\Late Night Ride.jpg', 'M18 - violence', 'Lina Ng, Andie Chen, Jayley Woo', 'Koh Chong Wu'),
(8, 'Tokyo Revengers', 121, 'JAP', 'Thriller', 'SJR', '2021-11-14', 'This is my life''s revenge! A down-and-out youth stands up to power to save the only girl he has ever loved.\n Takemichi Hanagaki leads a dead-end life in a run-down apartment while working part-time at a job for a\n younger manager who treats him like an idiot. Then one day, he learns that a girl he used to date during\n his hooligan days in middle school, Hinata Tachibana, and her brother, Naoto, have been murdered by the\n Kanto area''s most villainous hoodlums, Tokyo Manji. The very next day, Takemichi is standing on a train\n platform when he is suddenly pushed onto the tracks. But instead of dying, Takemichi is transported ten\n years into the past where he is reunited with Hinata''s younger brother, Naoto. "10 years from now, Hinata\n and you will be killed" he tells Naoto, thus altering the future. Hinata still doesn''t survive, but Naoto\n does, becoming a police detective. Returning to the present day, Takemichi recruits Naoto''s help in returning\n to the past to crush Tokyo Manji and save his Hinata''s life once and for all. All Takemichi needs to do to\n travel through time is to shake hands with Naoto in either the present or the past. But to save Hinata and\n break free from a life of running away, Takemichi must take on Kanto''s most powerful syndicate, the Tokyo\n Manji gang!', 'posters_small\\tokyorevengers.webp', 'PG - coarse language', 'Takumi Kitamura, Yuki Yamada, Yosuke Sugino, Mio Imada, Nobuyuki Suzuki, Gordon Maeda, Hiroya Shimizu, Hayato Isomura, Shotaro Mamiya, Ryo Yoshizawa', 'Tsutomu Hanabusa'),
(9, 'Ron''s Gone Wrong', 107, 'ENG', 'Animation', 'WDS', '2021-10-21', 'The story of Barney, an awkward middle-schooler and Ron, his new walking, talking, digitally-connected device. Ron''s malfunctions set against the backdrop of the social media age launch them on a journey to learn about true friendship.', 'posters_small\\ron_small.webp', 'G', 'Zach Galifianakis, Jack Dylan Grazer, Olivia Colman, Ed Helms, Justice Smith, >Rob Delaney', 'Sarah Smith, Jean-Philippe Vine, Octavio E. Rodriguez'),
(10, 'Cloudy Mountain', 115, 'CHI', 'Action', 'GVP', '2021-10-21', 'Hong Yizhou, the acting chief engineer of the Yunjiang Tunnel Project, felt abnormal geological activity due to a tunnel flooding accident and went into the mountain to repair the sensor. He asked his girlfriend Lu Xiaojin to pick up his father Lao Hong who came to visit the project and visit him. Suddenly the station where Lao Hong stayed collapsed and Lao Hong plunged into the ground to save people. Yizhou quickly went to the rescue. Lao Hong used his skills as a railroad soldier and led the survivors to escape. He ran into Yizhou on the way out, but they had a lot of contradictions because of their different ideas. The hole where Yizhou came in was buried, and the new escape exit was blocked by the water. Yizhou was afraid of water because his mother died from drowning, so Lao Hong went into the water to search. When Lao Hong was exhausted and his consciousness was about to become blurred, Yizhou finally overcame the mental barrier and saved his father. And they also let go of their past. After they returned to the ground, Yizhou learned that the landslide was threatening the safety of the town nearby. So the China Railway Construction''s manager Ding Yajun decided to explode the tunnel to project the town. Yizhou found an ideal solution to save the town and also keep the tunnel by dropping explosives in a high-risk crack. Lao Hong assisted Yizhou regardless of the danger, and finally succeeded. However, Lao Hong died, and was left in this land ever since......', 'posters_small\\cloudyMountain.jpg', 'PG - mild violence', 'Zhu Yilong, Huang Zhizhong, Chen Shu, Jiao Junyan', 'Li Jun');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
