-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 28 2018 г., 09:14
-- Версия сервера: 5.6.38
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hld`
--

-- --------------------------------------------------------

--
-- Структура таблицы `agency`
--

CREATE TABLE `agency` (
  `id` int(11) NOT NULL,
  `intro` text NOT NULL,
  `about` text NOT NULL,
  `dir_about` text NOT NULL,
  `dir_web` text NOT NULL,
  `dir_brand` text NOT NULL,
  `dir_help` text NOT NULL,
  `case_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agency`
--

INSERT INTO `agency` (`id`, `intro`, `about`, `dir_about`, `dir_web`, `dir_brand`, `dir_help`, `case_about`) VALUES
(1, 'Запуск и поддержка бизнеса в digital-среде', 'Наша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть. \r\n<br><br>\r\nЛюбим работать над проектами корпоративного класса, электронной коммерции, а также не упускаем из виду интернет-сервисы и порталы.', 'Разрабатываем, запускаем, сопровождаем и продвигаем всё то, что можно продвинуть, сопроводить и разработать', 'Аналитика,Прототипирование,Дизайн интерфейса,Front-end и back-end разработка, жека иди в пизду', 'Исследования,Визуальная идентификация,Полигирафический дизайн', 'SMM,Контекстная реклама,Техническая поддержка', 'Каждый выполненный нами проект — это чья-то уникальная история, в написании которой нельзя работать по шаблону. Поэтому мы всегда находим новые и эффективные решения при разработке и запуске очередного сервиса.');

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `vk` varchar(255) NOT NULL,
  `props` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `location`, `address`, `telephone`, `email`, `instagram`, `vk`, `props`) VALUES
(1, 'Республика Алтай, Горно-Алтайск', 'ул. Чорос-Гуркина, дом 39/8,\r\nвторой этаж, офис 203', '8 (38822) 2-04-03', 'info@hypelab.ru', 'https://www.instagram.com/hypelab.digital/?hl=ru', 'https://vk.com/hypelabdigital', 'ООО “ХАЙПЛЭБ”\r\nОГРН: 1170400004158\r\nИНН 0400005490 / КПП 040001001\r\nР/С: 40702810210000179578\r\nК/С: 30101810145250000974\r\nБИК: 044525974\r\nАО «ТИНЬКОФФ БАНК»');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `agency`
--
ALTER TABLE `agency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
