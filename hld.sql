-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 29 2018 г., 10:52
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
(1, 'Запуск и поддержка бизнеса в digital-среде', 'Наша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть. \r\n<br><br>\r\nЛюбим работать над проектами корпоративного класса, электронной коммерции, а также не упускаем из виду интернет-сервисы и порталы.', 'Разрабатываем, запускаем, сопровождаем и продвигаем всё то, что можно продвинуть, сопроводить и разработать', 'Аналитика,Прототипирование,Дизайн интерфейса,Front-end и back-end разработка', 'Исследования,Визуальная идентификация,Полигирафический дизайн', 'SMM,Контекстная реклама,Техническая поддержка', 'Каждый выполненный нами проект — это чья-то уникальная история, в написании которой нельзя работать по шаблону. Поэтому мы всегда находим новые и эффективные решения при разработке и запуске очередного сервиса.');

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
-- Структура таблицы `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `article` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `task` varchar(255) NOT NULL,
  `type_service_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `view_case_id` int(11) NOT NULL,
  `on_index` varchar(10) DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `profile`
--

INSERT INTO `profile` (`id`, `article`, `logo`, `task`, `type_service_id`, `link`, `image`, `view_case_id`, `on_index`, `description`) VALUES
(1, 'Кондитерская \"Тортодельня\"', 'tort.jpg', 'Разработать фирменный стиль и сайт-конструктор компании', 2, 'tortodelna.ru', 'tort.jpg', 1, 'y', 'Здесь будет описание данного кейса!!!!');

-- --------------------------------------------------------

--
-- Структура таблицы `type_service`
--

CREATE TABLE `type_service` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `type_service`
--

INSERT INTO `type_service` (`id`, `type`) VALUES
(1, 'Разработка сайта'),
(2, 'Запуск бренда'),
(3, 'Дизайн'),
(4, 'Поддержка и развитие');

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
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`) VALUES
(1, 'father', '$2y$13$F6xTDToSA0vrDF.TvXkrKul9lVlZCYORUau92D14WOthuWspfrRgm', 'jBqtJxvc0fMH5o5cpOuwc6N3CyRoBItd');

-- --------------------------------------------------------

--
-- Структура таблицы `view_case`
--

CREATE TABLE `view_case` (
  `id` int(11) NOT NULL,
  `one` text NOT NULL,
  `two` text NOT NULL,
  `three` text NOT NULL,
  `four` text NOT NULL,
  `five` text NOT NULL,
  `six` text NOT NULL,
  `seven` text NOT NULL,
  `eight` text NOT NULL,
  `nine` text NOT NULL,
  `ten` text NOT NULL
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
-- Индексы таблицы `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `type_service`
--
ALTER TABLE `type_service`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `view_case`
--
ALTER TABLE `view_case`
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
-- AUTO_INCREMENT для таблицы `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `type_service`
--
ALTER TABLE `type_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `view_case`
--
ALTER TABLE `view_case`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
