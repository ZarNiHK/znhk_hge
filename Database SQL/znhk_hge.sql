-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 16, 2022 at 01:45 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `znhk_hge`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `user_id`, `question`, `answer`) VALUES
(6, 24, 'What are Kettlebells?               ', 'From Wikipedia, the free encyclopedia:\r\nâ€œThe kettlebell or girya (Russian: Ã£Ã¨Ã°Ã¿) is a traditional Russian cast-iron weight looking somewhat like a cannonball with a handleâ€â€¦..â€Kettlebell workouts are intended to increase strength, endurance, agility and balance, challenging both the muscular and cardiovascular system with dynamic, total-body movementsâ€                   '),
(7, 23, 'What are the differences between weight plates?', 'Weight plate selection is usually based on user preference and price. Commercial options include Tri Grip, (easier to handle) Rubber Coated and plain cast Metal. All of these are extremely durable. Calibrated plates are used for competition. Their weight is very accurate, (to within 5gms) and they tend to be very expensive due to this. Weights stocked by Gymwarehouse display their mass in both Kg and Lb.\r\nSome domestic options are available which are sand or water filled. These tend to be bulky and very disappointing.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `images`) VALUES
(3, 'A17 Pulldown Machine', 160, '                                                        Weight machine with a seat and brace for the thighs.                                        ', 'pulldown.jpg'),
(4, 'HyperExtension Bench', 49, 'A compact, easy to use piece of gym equipment with the ability to improve posture and increase lower back strength.', 'hyperbench.jpg'),
(5, '12kg KettleBell', 15, 'Used for exercise and weight training. Weigh 12kg.', 'kettlebell.jpg'),
(6, 'Lijiujia 2022', 290, 'Black, White Color. Lijiujia treadmill are versatile pieces of equipment that are placed in homes as well as gyms and fitness centers. They are basic but indispensable. ', 'tm1.webp'),
(7, '10kg Gym Hexagon', 25, 'A short bar with weights on either side which people use for physical exercise to strengthen their arm and shoulder muscles.', 'db1.webp'),
(8, 'Sporzon Iron Plate', 83, 'Cast Iron Weight Plates', 'p1.jpg'),
(9, 'Annzoe', 110, 'Rechargeable electric chain saw, light and portable, long battery life, no damage to the bark. Lightweight body, small size, can be held with one hand, long time holding and not tired hands.', 'op1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `surname`, `email`, `password`) VALUES
(22, 'Zar', 'Ni', 'zarni@gmail.com', 'zarni'),
(23, 'Kyaw', 'Kyaw', 'kyawkyaw@gmail.com', 'kyawkyaw'),
(24, 'Yu', 'Yu', 'yuyu@gmail.com', 'yuyu'),
(25, 'zar', 'nihk', 'zarnihk@gmail.com', 'zarnihk'),
(26, 'john', 'john', 'john@gmail.com', 'john');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
