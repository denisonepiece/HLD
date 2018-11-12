-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 12 2018 г., 19:06
-- Версия сервера: 5.6.32-78.0-log
-- Версия PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vh166482_hld`
--
CREATE DATABASE IF NOT EXISTS `vh166482_hld` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `vh166482_hld`;

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
(1, 'Запуск<br> и поддержка бизнеса в digital-среде', 'Наша команда состоит из толково мыслящих молодых мозгов, создающая практичные интернет-решения, за которые не приходиться краснеть. \r\n<br><br>\r\nЛюбим работать над проектами корпоративного класса, электронной коммерции, а также не упускаем из виду интернет-сервисы и порталы.', 'Разрабатываем, запускаем, сопровождаем и продвигаем всё то, что можно продвинуть, сопроводить и разработать', 'Аналитика,Прототипирование,Дизайн интерфейса,Front-end и back-end разработка', 'Исследования,Визуальная идентификация,Полигирафический дизайн', 'SMM,Контекстная реклама,Техническая поддержка', 'Каждый выполненный нами проект — это чья-то уникальная история, в написании которой нельзя работать по шаблону. Поэтому мы всегда находим новые и эффективные решения при разработке и запуске очередного сервиса.');

-- --------------------------------------------------------

--
-- Структура таблицы `brif`
--

CREATE TABLE `brif` (
  `id` int(11) NOT NULL,
  `site` tinyint(1) NOT NULL,
  `design` tinyint(1) NOT NULL,
  `smm` tinyint(1) NOT NULL,
  `ads` tinyint(1) NOT NULL,
  `tech_sup` tinyint(1) NOT NULL,
  `about` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `company` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brif`
--

INSERT INTO `brif` (`id`, `site`, `design`, `smm`, `ads`, `tech_sup`, `about`, `name`, `telephone`, `company`, `email`) VALUES
(19, 1, 1, 0, 0, 0, 'ewqeqw', 'ewqeqw', 'ewqeqw', 'ewqeqw', 'ewqeqw'),
(20, 1, 1, 1, 1, 1, 'eqwewqeeqw', 'ewqeqw', 'eqweqwe', 'ewqeqw', 'eqweqweqwewq'),
(21, 1, 1, 1, 1, 1, 'gfhfgh', 'hgfhgf', 'hgfhf', 'hgfhf', 'hgfhfhf'),
(22, 1, 1, 1, 0, 0, 'sdfsd', 'fdsfsd', 'fdsfds', 'fds', 'fsdfs');

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
(1, 'Республика Алтай, Горно-Алтайск', 'ул. Чорос-Гуркина, дом 39/8,второй этаж, офис 203', '+7 388-22<span> 2-04-03 </span>', 'info@hypelab.ru', 'https://www.instagram.com/hypelab.digital/?hl=ru', 'https://vk.com/hypelabdigital', 'ООО “ХАЙПЛЭБ”,\r\nОГРН: 1170400004158,\r\nИНН 0400005490 / КПП 040001001,\r\nР/С: 40702810210000179578,\r\nК/С: 30101810145250000974,\r\nБИК: 044525974,\r\nАО «ТИНЬКОФФ БАНК»');

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
  `description` text NOT NULL,
  `color` varchar(255) NOT NULL,
  `theme` varchar(10) DEFAULT NULL,
  `text_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `profile`
--

INSERT INTO `profile` (`id`, `article`, `logo`, `task`, `type_service_id`, `link`, `image`, `view_case_id`, `on_index`, `description`, `color`, `theme`, `text_color`) VALUES
(1, 'Инжиниринговый центр', 'eng-logo-case.png', 'Разработка корпоративного сайта для государственной организации', 1, 'engineering-ra.ru', 'fon-slider.jpg', 3, 'y', 'Разработка корпоративного сайта для гос. организации', '#f8f5ff', 'light', '#000');

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `site_about` text NOT NULL,
  `site_what` text NOT NULL,
  `design_about` text NOT NULL,
  `design_what` text NOT NULL,
  `sup_about` text NOT NULL,
  `sup_what_ads` text NOT NULL,
  `sup_what_smm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `service`
--

INSERT INTO `service` (`id`, `site_about`, `site_what`, `design_about`, `design_what`, `sup_about`, `sup_what_ads`, `sup_what_smm`) VALUES
(1, 'Любим работать над проектами корпоративного класса, электронной коммерции, а также не упускаем из виду интернет-сервисы и порталы.', 'Презентационные сайты, Корпоративные сайты, Интернет-сервисы и порталы, Осуществляем поддержку', 'Создаем привлекающую внимание фирменную идентификацию, стратегии для запуска и продвижения брендов.', 'Логотипы, Фирменный стиль, Готовим дизайн-гайдлайны', 'Создаем привлекающую внимание фирменную идентификацию, стратегии для запуска и продвижения брендов.', 'Анализируем нишу,Проводим аудит сайта,Управляем ставками,Работаем с семантическим ядром,Оцениваем эффективность', 'Настраиваем таргетивную рекламу,Ведем группы в социальных сетях,Оформляем группы в социальных сетях');

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
  `ten` text NOT NULL,
  `eleven` text NOT NULL,
  `twelve` text NOT NULL,
  `thirteen` text NOT NULL,
  `fourteen` text NOT NULL,
  `fifteen` text NOT NULL,
  `sixteen` text NOT NULL,
  `seventeen` text NOT NULL,
  `eighteen` text NOT NULL,
  `nineteen` text NOT NULL,
  `twenty` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `another` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `view_case`
--

INSERT INTO `view_case` (`id`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`, `sixteen`, `seventeen`, `eighteen`, `nineteen`, `twenty`, `name`, `another`) VALUES
(3, '<section class=\"section section-v1\" id=\"case-block-v1\" style=\"background-color:#f8f5ff; color:#000 ;\">\r\n        <div class=\"container-fluid\">\r\n            <div class=\"row\">\r\n                <div class=\"col-md-7 col-sm col-xs\">\r\n                    <p class=\"p-style p-v1\"></br></br>Не так давно, Минэкономразвития РФ запустило проект по созданию региональных инжиниринговых центров. РЦИ призваны сформировать сетевую инфраструктуру инжиниринга, способствующую адаптации научных разработок для промышленного производства, коммерциализации технологий и знаний.</br></br>\r\n                    </p>\r\n<br><br>\r\n<p class=\"p-style p-v1\">Там, где становление новых организаций, там и разработка интернет-решений для таковых. И для одного из центров, а именно для регионального центра инжиниринга Республики Алтай, нашей команде выпала возможность разработать корпоративный сайт, в первую очередь, наиболее лаконично отображающий основные цели и задачи организации, посредством ненагруженного интерфейса и аккуратно структурированной информации.</p>\r\n                </div>\r\n            </div>\r\n        </div>\r\n</section>', '<section class=\"section case-video\" id=\"case-block-v5\">\r\n    <div id=\"portfolio-player\" class=\"js-player\" data-plyr-provider=\"vimeo\" data-plyr-embed-id=\"300220252\"></div>\r\n</section>\r\n', '<section class=\"section case-img-v1\" id=\"case-block-v4\">\r\n    <img src=\"img/content/portfolio/Engineering-02.jpg\">\r\n</section>\r\n\r\n<section class=\"section section-v1\" id=\"case-block-v1\" style=\"background-color:; color: ;\">\r\n        <div class=\"container-fluid\">\r\n            <div class=\"row\">\r\n                <div class=\"col-md-7 col-sm col-xs\">\r\n                    <p class=\"p-style p-v1\"></br></br></br>Разработка началась с прототипирования каждой отдельной страницы, каждый блок был структурирован и помещен в нужное место.</br></br></br>\r\n                    </p>\r\n                </div>\r\n            </div>\r\n        </div>\r\n</section>', '<section class=\"section case-img-v1\" id=\"case-block-v4\">\r\n    <img src=\"img/content/portfolio/Engineering-03.jpg\">\r\n</section>\r\n          ', '<section class=\"section section-v1\" id=\"case-block-v1\" style=\"background-color:#f8f5ff; color: ;\">\r\n        <div class=\"container-fluid\">\r\n            <div class=\"row\">\r\n                <div class=\"col-md-7 col-sm col-xs\">\r\n                    <p class=\"p-style p-v1\"></br>Стартовая страница включает в себя наиболее важные разделы сайта, поэтому пользователь может интуитивно найти всю необходимую информацию.  </br>\r\n                    </p>\r\n                </div>\r\n            </div>\r\n        </div>\r\n</section>', '', '<section class=\"section case-img-v1\" id=\"case-block-v4\">\r\n    <img src=\"img/content/portfolio/Engineering-05.jpg\">\r\n</section>', '<section class=\"section case-img-v1\" id=\"case-block-v4\">\r\n    <img src=\"img/content/portfolio/Engineering-06.jpg\">\r\n</section>\r\n          ', '<section class=\"section section-v1\" id=\"case-block-v1\" style=\"background-color:#f8f5ff; color: ;\">\r\n        <div class=\"container-fluid\">\r\n            <div class=\"row\">\r\n                <div class=\"col-md-7 col-sm col-xs\">\r\n                    <p class=\"p-style p-v1\"></br>Внутренние страницы представлены в общем, чистом и серьезном стиле. Основная цель этой работы заключалась в создании интерфейса с большим удобством и функциональностью, как подобает сайтам государственного значения.  </br>\r\n                    </p>\r\n                </div>\r\n            </div>\r\n        </div>\r\n</section>', '<section class=\"section case-img-v1\" id=\"case-block-v4\">\r\n    <img src=\"img/content/portfolio/Engineering-07.jpg\">\r\n</section>\r\n          ', '<section class=\"section section-v1\" id=\"case-block-v1\" style=\"background-color:#f8f5ff; color: ;\">\r\n        <div class=\"container-fluid\">\r\n            <div class=\"row\">\r\n                <div class=\"col-md-7 col-sm col-xs\">\r\n                    <p class=\"p-style p-v1\"></br>Для удобства мобильных пользователей все страницы сайта адаптированы для просмотра на смартфонах и планшетах.</br>\r\n                    </p>\r\n                </div>\r\n            </div>\r\n        </div>\r\n</section>', '<section class=\"section case-img-v1\" id=\"case-block-v4\">\r\n    <img src=\"img/content/portfolio/Engineering-08.jpg\">\r\n</section>\r\n          ', '<section class=\"section case-img-v1\" id=\"case-block-v4\">\r\n    <img src=\"img/content/portfolio/Engineering-09.jpg\">\r\n</section>\r\n          ', '<section class=\"section case-img-v1\" id=\"case-block-v4\">\r\n    <img src=\"img/content/portfolio/Engineering-10.jpg\">\r\n</section>\r\n          ', '<section class=\"section case-img-v1\" id=\"case-block-v4\">\r\n    <img src=\"img/content/portfolio/Engineering-11.jpg\">\r\n</section>\r\n          ', '', '', '', '', '', 'Инжиниринг', '1, 2, 3');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `brif`
--
ALTER TABLE `brif`
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
-- Индексы таблицы `service`
--
ALTER TABLE `service`
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
-- AUTO_INCREMENT для таблицы `brif`
--
ALTER TABLE `brif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `service`
--
ALTER TABLE `service`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
