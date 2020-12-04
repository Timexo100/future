-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 04 2020 г., 11:42
-- Версия сервера: 5.7.31
-- Версия PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `future_database`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `userName` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `date`, `userName`, `text`) VALUES
(0, '2020-12-04 12:54:07', 'Савва', 'Спасибо за Ваше тестовое задание. Оно, действительно, изумительное.'),
(9, '2020-12-04 13:32:42', 'Евдоким', 'Если включить мозги, то все элементарно Ватсон!'),
(29, '2020-12-04 14:29:32', 'Тимур', 'Отличная работа! :)');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
