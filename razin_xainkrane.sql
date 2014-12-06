-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2012 at 09:48 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `razin_xainkrane`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `headline` text NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `headline`, `body`) VALUES
(1, 1, 'Launching own project', 'With every ones great wishes i am going to launch my new website in about 7 days. So everyone get ready for a great blash and it will be a great moment for all of you..............live ROCK.'),
(2, 1, 'Interface completed', 'I have just completed the Interface for my website now you guys will be able to see it and it will be very easy for you guys to use..........live ROCK.'),
(3, 1, 'completed database', 'Just completed the database for testing a bit confused how to manage the database core classes...........btw be tension free...........live ROCK.'),
(4, 2, 'Not that good', 'ami mone korsilam tui er theke onek valo kaj korte parbi but she ashar gure bali tore niya amar onek shopno chilo kintu shey shopno tui dhulay mishay dili....'),
(5, 3, 'Motamuti valoi', 'Na thik ase motamuti valoi hoise jai hok chalai ja amar ghum ashtase ami ghumaite gelam.'),
(6, 1, 'Blog insertion', 'Completed the entire coding for writing a blog and inserting into the database ...........also solved the silly problem of showing a distinct number of blogs in the home page.'),
(7, 7, 'sumon pendrive', 'RECYLER'),
(8, 1, 'Domain', 'Succesfully completed the domain registration................the site will be uploaded very soon...........Live ROCK.'),
(10, 1, 'After changing write_blog', 'Just successfully changed the write_blog from output........but a bit confused whether it will work or not...........Live ROCK.'),
(11, 7, 'Dhongsho', 'Hai hai razin tui eida ki banaisos, amare to hall dekhaili ar koili koto ki add korbi tor website e kintu eida tui ki banaisos...............ami shash hoiya gelam...............'),
(12, 5, 'Ekmot', 'Khalid er shathe ami ekmot razin tui amader ijjot dhulay mishaiya dili tore amra onek protivaban mone korsilam ei tor protiva............tui asholei ekta murkho..........amar shathe class korar kono joggotai tor nai.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'tanvirrazin', 'razin', 'tanvirrazin@gmail.com'),
(2, 'shamir_shakir', 'shamir', 'dewsworld@gmail.com'),
(5, 'Saadman', 'sad', 'saadman@gmail.com'),
(6, 'arif_saiket', 'arif', 'arif051@gmail.com'),
(7, 'khalid', 'mahdi', 'khaleedhassan37@yahoo.com');
