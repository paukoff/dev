-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 17 2014 г., 13:05
-- Версия сервера: 5.6.17-log
-- Версия PHP: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bettings`
--

CREATE TABLE IF NOT EXISTS `bettings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11),
  `sport` int(3) NOT NULL,
  `chemp_name` varchar(255) NOT NULL,
  `team1` varchar(255) NOT NULL,
  `team2` varchar(255) NOT NULL,
  `in_bets` varchar(255) NOT NULL,
  `coeff` decimal(5,2) NOT NULL,
  `class_bet` int(2) NOT NULL,
  `date` datetime NOT NULL,
  `descript` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `bettings_fk1` (`user_id`),
  KEY `FK_bettings_sports` (`sport`),
  KEY `FK_bettings_class_bet` (`class_bet`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `bettings`
--

INSERT INTO `bettings` (`id`, `user_id`, `sport`, `chemp_name`, `team1`, `team2`, `in_bets`, `coeff`, `class_bet`, `date`, `descript`) VALUES
(9, 1, 1, 'Ukraine', 'Metallist', 'Dynamo K', 'П1', '1.90', 3, '2014-06-10 02:44:28', 'text'),
(11, 2, 2, 'Ролан Гаррос', 'Федерер', 'Янукович', 'П2', '229.99', 1, '2014-06-11 00:02:50', 'лол'),
(12, 2, 2, 'Ролан Гаррос', 'Федерер', 'Янукович', 'П2', '339.99', 2, '2014-06-11 00:02:50', 'лол');

-- --------------------------------------------------------

--
-- Структура таблицы `class_bet`
--

CREATE TABLE IF NOT EXISTS `class_bet` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `class_bet` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `class_bet`
--

INSERT INTO `class_bet` (`id`, `class_bet`) VALUES
(1, 'free'),
(2, 'standart'),
(3, 'premium');

-- --------------------------------------------------------

--
-- Структура таблицы `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `pay_system` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payments_fk1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `payment_system`
--

CREATE TABLE IF NOT EXISTS `payment_system` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `sport` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payment_system_fk1` (`sport`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) DEFAULT NULL,
  `class_name` varchar(255) DEFAULT NULL,
  `pay_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `sports`
--

CREATE TABLE IF NOT EXISTS `sports` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `sports_name` varchar(255),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `sports`
--

INSERT INTO `sports` (`id`, `sports_name`) VALUES
(1, 'Футбол'),
(2, 'Теннис'),
(3, 'Хоккей');

-- --------------------------------------------------------

--
-- Структура таблицы `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_user_id` int(11),
  `to_user_id` int(11),
  `count_tr` decimal(6,2),
  `destination` int(11),
  `date` timestamp NULL DEFAULT NULL,
  `descript` text,
  `role` int(2),
  PRIMARY KEY (`id`),
  KEY `transaction_fk1` (`from_user_id`),
  KEY `transaction_fk2` (`to_user_id`),
  KEY `transaction_fk3` (`destination`),
  KEY `transaction_fk4` (`role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nikname` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `count_bet` int(11) NOT NULL DEFAULT '0',
  `win_bet` int(11) NOT NULL DEFAULT '0',
  `loose_bet` int(11) NOT NULL DEFAULT '0',
  `return_bet` int(11) NOT NULL DEFAULT '0',
  `rate` int(11) NOT NULL DEFAULT '0',
  `balance` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nikname` (`nikname`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=66 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `nikname`, `phone`, `password`, `count_bet`, `win_bet`, `loose_bet`, `return_bet`, `rate`, `balance`) VALUES
(1, 'holfza', 380996577889, 'd8578edf8458ce06fbc5bb76a58c5ca4', 0, 0, 0, 0, 0, 0),
(2, 'better', 380505555555, '123456', 0, 0, 0, 0, 0, 0),
(3, 'master', 380676556565, '123123', 0, 0, 0, 0, 0, 0),
(63, 'sdfsdf', 0, '$1$UD/.NO4.$OGMAmicUMnxBtWefYae9X1', 0, 0, 0, 0, 0, 0),
(64, 'igsend', 987687698, '$1$f35.6H/.$wytZe/lzCzmSL8MfBOFjv.', 0, 0, 0, 0, 0, 0),
(65, 'fdhgh', 4566456546, '$1$qO4.ry3.$84c83MKfb7mVvaQCxhS3y0', 0, 0, 0, 0, 0, 0);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `bettings`
--
ALTER TABLE `bettings`
  ADD CONSTRAINT `bettings_fk1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_bettings_class_bet` FOREIGN KEY (`class_bet`) REFERENCES `class_bet` (`id`),
  ADD CONSTRAINT `FK_bettings_sports` FOREIGN KEY (`sport`) REFERENCES `sports` (`id`);

--
-- Ограничения внешнего ключа таблицы `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_fk1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `payment_system`
--
ALTER TABLE `payment_system`
  ADD CONSTRAINT `payment_system_fk1` FOREIGN KEY (`sport`) REFERENCES `sports` (`id`);

--
-- Ограничения внешнего ключа таблицы `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_fk1` FOREIGN KEY (`from_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transaction_fk2` FOREIGN KEY (`to_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transaction_fk3` FOREIGN KEY (`destination`) REFERENCES `bettings` (`id`),
  ADD CONSTRAINT `transaction_fk4` FOREIGN KEY (`role`) REFERENCES `role` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
