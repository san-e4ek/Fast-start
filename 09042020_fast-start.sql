-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Апр 09 2020 г., 21:46
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `09042020_fast-start`
--
CREATE DATABASE IF NOT EXISTS `09042020_fast-start` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `09042020_fast-start`;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `message`) VALUES
(1, 'asd', 'asd@asd', ''),
(2, 'asd', 'asd@asd', ''),
(3, 'asd', 'asd@asd', ''),
(4, 'asd', 'asd@asd', ''),
(5, 'asd', 'asd@asd', 'ыфвв'),
(6, 'asd', 'asd@asd', 'ыфвв'),
(7, 'asd', 'asd@asd', 'dsafdf');

-- --------------------------------------------------------

--
-- Структура таблицы `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `requests`
--

INSERT INTO `requests` (`id`, `name`, `email`) VALUES
(1, 'asd', 'asd@asd'),
(2, 'asd', 'asd@asd'),
(3, 'asd', 'asd@asd'),
(4, 'asd', 'asd@asd'),
(5, 'asd', 'asd@asd'),
(6, 'asd', 'asd@asd'),
(7, 'asd', 'asd@asd'),
(8, 'asd', 'asd@asd'),
(9, 'asd', 'asd@asd'),
(10, 'asd', 'asd@asd'),
(11, 'asd', 'asd@asd'),
(12, 'asd', 'asd@asd'),
(13, 'asd', 'asd@asd'),
(14, 'asd', 'asd@asd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
