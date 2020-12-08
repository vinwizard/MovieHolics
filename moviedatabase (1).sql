-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2020 at 07:30 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `MovieID` int(11) NOT NULL AUTO_INCREMENT,
  `MovieName` varchar(200) NOT NULL,
  `Genre` varchar(200) NOT NULL,
  `Director` varchar(200) NOT NULL,
  `Writer` varchar(200) NOT NULL,
  `Cast` varchar(500) NOT NULL,
  `IMDB Rating` float NOT NULL,
  `Description` varchar(1024) DEFAULT NULL,
  `UserRatings` float DEFAULT NULL,
  `Link` varchar(1024) NOT NULL,
  PRIMARY KEY (`MovieID`),
  KEY `MovieID` (`MovieID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`MovieID`, `MovieName`, `Genre`, `Director`, `Writer`, `Cast`, `IMDB Rating`, `Description`, `UserRatings`, `Link`) VALUES
(1, 'Pulp Fiction', 'Action', 'Quentin Tarantino', 'Quentin Tarantino, Roger Avary', 'John Travolta, Uma Thurman, Samuel L. Jackson', 8.8, 'Vincent Vega (John Travolta) and Jules Winnfield (Samuel L. Jackson) are hitmen with a penchant for philosophical discussions. In this ultra-hip, multi-strand crime movie, their storyline is interwoven with those of their boss, gangster Marsellus Wallace (Ving Rhames) ; his actress wife, Mia (Uma Thurman) ; struggling boxer Butch Coolidge (Bruce Willis) ; master fixer Winston Wolfe (Harvey Keitel) and a nervous pair of armed robbers, \"Pumpkin\" (Tim Roth) and \"Honey Bunny\" (Amanda Plummer).', NULL, 'https://youtube.com/embed/s7EdQ4FqbhY'),
(2, 'Kill Bill: Vol. 1 (2003)', 'Action', 'Quentin Tarantino', 'Quentin Tarantino', 'Uma Thurman, David Carradine, Daryl Hannah', 8.1, 'A former assassin, known simply as The Bride (Uma Thurman), wakes from a coma four years after her jealous ex-lover Bill (David Carradine) attempts to murder her on her wedding day. Fueled by an insatiable desire for revenge, she vows to get even with every person who contributed to the loss of her unborn child, her entire wedding party, and four years of her life. After devising a hit list, The Bride sets off on her quest, enduring unspeakable injury and unscrupulous enemies.', NULL, 'https://youtube.com/embed/7kSuas6mRpk'),
(3, 'Your Name ', 'Romance', 'Makoto Shinkai', 'Makoto Shinkai', 'Ryûnosuke Kamiki, Mone Kamishiraishi, Ryô Narita', 8.4, 'Two teenagers share a profound, magical connection upon discovering they are swapping bodies. But things become even more complicated when the boy and girl decide to meet in person..', NULL, 'https://youtube.com/embed/s0wTdCQoc2k'),
(4, 'La La Land', 'Romance', 'Damien Chazelle', 'Damien Chazelle', ' Ryan Gosling, Emma Stone, Rosemarie DeWitt', 8, 'Sebastian (Ryan Gosling) and Mia (Emma Stone) are drawn together by their common desire to do what they love. But as success mounts they are faced with decisions that begin to fray the fragile fabric of their love affair, and the dreams they worked so hard to maintain in each other threaten to rip them apart.', NULL, 'https://youtube.com/embed/0pdqf4P9MB8'),
(5, 'Fight Club', 'Thriller', 'David Fincher', 'Jim Ulsh, Chuck Palahniuk', ' Brad Pitt, Edward Norton, Meat Loaf', 8.8, 'A depressed man (Edward Norton) suffering from insomnia meets a strange soap salesman named Tyler Durden (Brad Pitt) and soon finds himself living in his squalid house after his perfect apartment is destroyed. The two bored men form an underground club with strict rules and fight other men who are fed up with their mundane lives. Their perfect partnership frays when Marla (Helena Bonham Carter), a fellow support group crasher, attracts Tyler\'s attention.', NULL, 'https://youtube.com/embed/qtRKdVHc-cE'),
(6, 'The Silence of the Lambs', 'Thriller', 'Jonathan Demme', 'Thomas Harris, Ted Tally ', 'Jodie Foster, Anthony Hopkins, Lawrence A. Bonney', 8.6, 'Jodie Foster stars as Clarice Starling, a top student at the FBI\'s training academy. Jack Crawford (Scott Glenn) wants Clarice to interview Dr. Hannibal Lecter (Anthony Hopkins), a brilliant psychiatrist who is also a violent psychopath, serving life behind bars for various acts of murder and cannibalism. Crawford believes that Lecter may have insight into a case and that Starling, as an attractive young woman, may be just the bait to draw him out.', NULL, 'https://youtube.com/embed/W6Mm8Sbe__o'),
(7, 'The Shawshank Redemption', 'Drama', ' Frank Darabont', ' Frank Darabont', ' Tim Robbins, Morgan Freeman, Bob Gunton', 9.3, 'Andy Dufresne (Tim Robbins) is sentenced to two consecutive life terms in prison for the murders of his wife and her lover and is sentenced to a tough prison. However, only Andy knows he didn\'t commit the crimes. While there, he forms a friendship with Red (Morgan Freeman), experiences brutality of prison life, adapts, helps the warden, etc., all in 19 years.', NULL, 'https://youtube.com/embed/NmzuHjWmXOc'),
(8, 'Parasite', 'Drama', 'Bong Joon Ho', 'Bong Joon Ho', 'Song Kang-Ho, Sun-kyun Lee, Yeo-jeong Jo', 8.6, 'Greed and class discrimination threaten the newly formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.', NULL, 'https://youtube.com/embed/SEUXfv87Wpk'),
(9, 'The Shining', 'Horror', 'Stanley Kubrick', 'Stanley Kubrick', 'Jack Nicholson, Shelley Duvall, Danny Lloyd', 8.4, 'Jack Torrance (Jack Nicholson) becomes winter caretaker at the isolated Overlook Hotel in Colorado, hoping to cure his writer\'s block. He settles in along with his wife, Wendy (Shelley Duvall), and his son, Danny (Danny Lloyd), who is plagued by psychic premonitions. As Jack\'s writing goes nowhere and Danny\'s visions become more disturbing, Jack discovers the hotel\'s dark secrets and begins to unravel into a homicidal maniac hell-bent on terrorizing his family.', NULL, 'https://youtube.com/embed/CMbI7DmLCNI'),
(10, 'Tumbbad', 'Horror', 'Rahi Anil Barve, Anand Gandhi', 'Mitesh Shah, Adesh Prasad', 'Sohum Shah, Jyoti Malshe, Anita Date', 8.3, 'When a family builds a shrine for Hastar, a monster who is never to be worshipped, and attempts to get their hands on his cursed wealth, they face catastrophic consequences.', NULL, 'https://youtube.com/embed/sN75MPxgvX8'),
(11, 'The GodFather', 'Crime', ' Francis Ford Coppola', ' Francis Ford Coppola', ' Marlon Brando, Al Pacino, James Caan', 9.2, 'Widely regarded as one of the greatest films of all time, this mob drama, based on Mario Puzo\'s novel of the same name, focuses on the powerful Italian-American crime family of Don Vito Corleone (Marlon Brando). When the don\'s youngest son, Michael (Al Pacino), reluctantly joins the Mafia, he becomes involved in the inevitable cycle of violence and betrayal. Although Michael tries to maintain a normal relationship with his wife, Kay (Diane Keaton), he is drawn deeper into the family business.', NULL, 'https://youtube.com/embed/CWoQlDlyQj4'),
(12, 'The Irishman', 'Crime', 'Martin Scorsese', 'Steven Zaillian', 'Robert De Niro, Al Pacino, Joe Pesci', 7.9, 'In the 1950s, truck driver Frank Sheeran gets involved with Russell Bufalino and his Pennsylvania crime family. As Sheeran climbs the ranks to become a top hit man, he also goes to work for Jimmy Hoffa -- a powerful Teamster tied to organized crime.', NULL, 'https://youtube.com/embed/WHXxVmeGQUc');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `ReviewID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `MovieID` int(11) NOT NULL,
  `User_Ratings` float DEFAULT NULL,
  `Review` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`ReviewID`),
  KEY `UserID` (`UserID`),
  KEY `MovieID` (`MovieID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`ReviewID`, `UserID`, `MovieID`, `User_Ratings`, `Review`) VALUES
(1, 1, 1, 4, 'Very Entertaining.'),
(2, 2, 4, 3, 'Interesting'),
(3, 1, 1, 2.5, 'Violent'),
(4, 2, 1, 4.5, 'Love the blood'),
(5, 4, 4, 4, 'Entertaining'),
(6, 3, 5, 4, 'Good action'),
(7, 5, 1, 2.5, 'Hard for Children to see'),
(15, 1, 1, 2.5, 'sucks'),
(16, 1, 1, 1, 'this is fucking bad');

--
-- Triggers `reviews`
--
DROP TRIGGER IF EXISTS `Complaints`;
DELIMITER $$
CREATE TRIGGER `Complaints` BEFORE INSERT ON `reviews` FOR EACH ROW update users
set Complaints=Complaints+1
where (UserId = new.UserID) AND (new.Review LIKE '%stfu%' OR new.Review LIKE '%idiot%' OR new.Review LIKE '%dumb%' OR new.Review LIKE '%stupid%' OR new.Review LIKE '%uck%')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `reviewss`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `reviewss`;
CREATE TABLE IF NOT EXISTS `reviewss` (
`Name` varchar(100)
,`Comments` varchar(1024)
,`MovieID` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UserId` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `UName` varchar(100) NOT NULL,
  `UPass` varchar(100) NOT NULL,
  `DOB` date DEFAULT NULL,
  `Complaints` int(11) DEFAULT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `Name`, `Email`, `UName`, `UPass`, `DOB`, `Complaints`) VALUES
(1, 'Vinay Nair', 'vinay@example.com', 'vinwizard', 'greatness', '2020-12-16', 2),
(2, 'Rutwij Patil', 'rutwij@example.com', 'rutwins', 'greatness', '2020-12-07', 0),
(3, 'Ojas Telwane', 'ojas@example.com', 'ojya', 'greatness', '2020-12-30', 0),
(4, 'Sorabh', 'sorabh@exampl.com', 'zorb', 'greatness', '2020-12-17', 0),
(5, 'Well', 'well@example.com', 'well', 'great', '2020-12-25', 0),
(6, 'Shreyas Nair', 'shrey@example.com', 'shreyas', 'great', '2020-12-15', 0),
(7, 'Hrushikesh Patil', 'hrushi@example.com', 'hrushi', 'great', '2020-12-12', 0);

-- --------------------------------------------------------

--
-- Structure for view `reviewss`
--
DROP TABLE IF EXISTS `reviewss`;

DROP VIEW IF EXISTS `reviewss`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reviewss`  AS  select `u`.`UName` AS `Name`,`r`.`Review` AS `Comments`,`m`.`MovieID` AS `MovieID` from ((`users` `u` join `reviews` `r` on((`u`.`UserId` = `r`.`UserID`))) join `movies` `m` on((`r`.`MovieID` = `m`.`MovieID`))) WITH LOCAL CHECK OPTION ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `Movie` FOREIGN KEY (`MovieID`) REFERENCES `movies` (`MovieID`),
  ADD CONSTRAINT `User` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
