-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 18 2020 г., 19:11
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `projectcinema`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chair`
--

CREATE TABLE `chair` (
  `id` int(11) NOT NULL,
  `id_cinems` int(11) NOT NULL,
  `id_movies` int(11) NOT NULL,
  `id_impressions` int(11) NOT NULL,
  `buy_chair` varchar(255) NOT NULL,
  `chair_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chair`
--

INSERT INTO `chair` (`id`, `id_cinems`, `id_movies`, `id_impressions`, `buy_chair`, `chair_number`) VALUES
(1, 1, 3, 20, 'buy', 25),
(2, 1, 1, 2, 'buy', 26),
(3, 1, 1, 6, 'buy', 24),
(4, 2, 2, 8, 'buy', 15),
(5, 1, 3, 22, 'buy', 23),
(6, 1, 3, 24, 'buy', 29),
(7, 1, 3, 28, 'buy', 10),
(8, 1, 3, 28, 'buy', 19),
(9, 1, 3, 17, 'buy', 7),
(10, 2, 2, 1, 'buy', 16),
(11, 2, 2, 1, 'buy', 22),
(12, 1, 3, 28, 'buy', 36),
(13, 2, 2, 8, 'buy', 16),
(14, 2, 2, 1, 'buy', 36),
(15, 2, 2, 9, 'buy', 24),
(16, 1, 1, 2, 'buy', 28),
(17, 2, 2, 1, 'buy', 25),
(18, 2, 2, 8, 'buy', 27),
(19, 3, 5, 31, 'buy', 27),
(20, 1, 1, 6, 'buy', 28),
(21, 1, 1, 5, 'buy', 17),
(22, 2, 2, 8, 'buy', 28),
(23, 2, 2, 7, 'buy', 28),
(24, 2, 2, 7, 'buy', 27),
(25, 2, 2, 7, 'buy', 14),
(26, 2, 2, 7, 'buy', 34),
(27, 2, 2, 8, 'buy', 20),
(28, 2, 2, 7, 'buy', 39),
(29, 2, 2, 9, 'buy', 27),
(30, 2, 2, 9, 'buy', 23);

-- --------------------------------------------------------

--
-- Структура таблицы `cinemas`
--

CREATE TABLE `cinemas` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `des_info` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cinemas`
--

INSERT INTO `cinemas` (`id`, `name`, `img`, `des_info`, `address`, `phone`) VALUES
(1, 'FIVE STARS', '5stars.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam, at atque cum dignissimos eum excepturi hic, nemo nisi perferendis possimus quasi, quisquam ratione sunt suscipit tenetur vel vitae voluptatem?', ' Bol\'shoy Ovchinnikovskiy Pereulok, 16, Moscow, Russia,', '+7 495 510-28-88'),
(2, 'Reel Cinemas', 'reel-cinemas-logo.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolores doloribus rem. Aut autem dicta enim eveniet,', 'Level 2, The Dubai Mall - Dubai', '+971 800 382246255'),
(3, 'Cinema Star', 'cinemastar.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi assumenda commodi ipsum quam. Doloribus excepturi id molestias nostrum officiis quos rerum saepe suscipit? Debitis eaque, ex. Consectetur corporis porro voluptas?Lorem ipsum dolor sit amet, c', '2nd floor, 3 Tsitsernakaberd Hwy, Yerevan 0082', '060 755555');

-- --------------------------------------------------------

--
-- Структура таблицы `cinemaswallpers`
--

CREATE TABLE `cinemaswallpers` (
  `id` int(11) NOT NULL,
  `cinemas_id` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cinemaswallpers`
--

INSERT INTO `cinemaswallpers` (`id`, `cinemas_id`, `img`, `text`) VALUES
(1, 1, '5stars1.jpg', 'Big Hall'),
(2, 1, '5stars2.jpg', 'Corporativ Hall'),
(3, 1, '5stars3.jpg', 'Two Campsle Hall'),
(4, 2, 'rellCinemas1.jpg', 'Big Hall'),
(5, 2, 'rellCinemas2.jpg', 'Camplse Hall'),
(10, 2, 'rellCinemas3.jpg', 'Vip Hall'),
(11, 3, 'cinemastar1.jpg', 'Hall'),
(12, 3, 'cinemastar2.jpg', 'Corporativ Holl for Cinema Star'),
(13, 3, 'cinemastar3.jpg', 'Counpol Hall');

-- --------------------------------------------------------

--
-- Структура таблицы `impressions`
--

CREATE TABLE `impressions` (
  `id` int(11) NOT NULL,
  `mov_id` int(11) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `impressions`
--

INSERT INTO `impressions` (`id`, `mov_id`, `start`, `end`) VALUES
(1, 2, '2020-06-20 15:00', '2020-06-20 17:00'),
(2, 1, '2020-06-18 19:00', '2020-06-18 21:00'),
(3, 3, '2020-06-19 16:00', '2020-06-19 19:00'),
(4, 2, '2020-06-19 15:30', '2020-06-19 18:30'),
(5, 1, '2020-06-20 14:00', '2020-06-20 17:00'),
(6, 1, '2020-06-17 18:30', '2020-06-17 20:30'),
(7, 2, '2020-06-18 14:00', '2020-06-18 16:00'),
(8, 2, '2020-06-18 18:00', '2020-06-18 20:00'),
(9, 2, '2020-06-18 21:00', '2020-06-18 23:00'),
(10, 2, '2020-06-19 21:00', '2020-06-19 23:00'),
(11, 2, '2020-06-19 14:00', '2020-06-19 16:00'),
(12, 2, '2020-06-19 18:00', '2020-06-19 20:00'),
(13, 3, '2020-06-18 12:00', '2020-06-18 14:00'),
(14, 3, '2020-06-18 15:00', '2020-06-18 17:00'),
(15, 3, '2020-06-18 18:00', '2020-06-18 20:00'),
(16, 3, '2020-06-18 20:30', '2020-06-18 22:30'),
(17, 3, '2020-06-19 12:00', '2020-06-19 14:00'),
(18, 3, '2020-06-19 14:30', '2020-06-19 16:30'),
(20, 3, '2020-06-19 17:00', '2020-06-19 19:00'),
(21, 3, '2020-06-19 19:30', '2020-06-19 21:00'),
(22, 3, '2020-06-19 21:30', '2020-06-19 23:00'),
(23, 3, '2020-06-20 12:30', '2020-06-20 14:00'),
(24, 3, '2020-06-20 14:30', '2020-06-20 16:00'),
(25, 3, '2020-06-20 16:30', '2020-06-20 18:00'),
(28, 3, '2020-06-20 17:30', '2020-06-20 19:00'),
(29, 3, '2020-06-25 17:30', '2020-06-26 20:00'),
(30, 3, '2020-06-25 21:30', '2020-06-26 23:00'),
(31, 5, '2020-06-22 17:30', '2020-06-22 19:30'),
(32, 5, '2020-06-22 20:30', '2020-06-22 22:30');

-- --------------------------------------------------------

--
-- Структура таблицы `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `cimes_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `Time_count` varchar(255) NOT NULL,
  `release_year` varchar(255) NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `movie_info` varchar(255) NOT NULL,
  `reting_in_world` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `movies`
--

INSERT INTO `movies` (`id`, `cimes_id`, `name`, `img`, `Time_count`, `release_year`, `Genre`, `movie_info`, `reting_in_world`) VALUES
(1, 1, 'TENET', 'TENET.jpg', '1:15:25', '2020', 'Triller', 'Principal photography, involving a crew of 250 people, began in May 2019 and took place in seven countries — Denmark, Estonia, India, Italy, Norway, the United Kingdom, and United States. Filming in Estonia happened in June and July, with the Linnahall, P', '77'),
(2, 2, 'Black Panther', 'Black_Panther.jpg', '2:11:11', '2018', 'Fantasi', 'Black Panther is a 2018 American superhero film based on the Marvel Comics character of the same name. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is the 18th film in the Marvel Cinematic Universe (MCU). The film ', '88'),
(3, 1, 'Woman', 'Woman.jpg', '1:50:22', '2017', 'Fantasi', 'Princess Diana of an all-female Amazonian race rescues US pilot Steve. Upon learning of a war, she ventures into the world of men to stop Ares, the god of war, from destroying mankind.', '55'),
(5, 3, 'The Martian\r\n', 'The_martian.jpg', '1:45:33', '2017', 'fantasi', 'The Martian is a 2015 science fiction film directed by Ridley Scott and starring Matt Damon. The Martian, a 2011 novel by Andy Weir, served as the screenplay adapted by Drew Goddard. The film depicts an astronaut\'s (Matt Damon) lone struggle to survive on', '85');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `chair`
--
ALTER TABLE `chair`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cinems` (`id_cinems`),
  ADD KEY `id_movies` (`id_movies`),
  ADD KEY `id_impressions` (`id_impressions`);

--
-- Индексы таблицы `cinemas`
--
ALTER TABLE `cinemas`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cinemaswallpers`
--
ALTER TABLE `cinemaswallpers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cinemas_id` (`cinemas_id`),
  ADD KEY `cinemas_id_2` (`cinemas_id`),
  ADD KEY `cinemas_id_3` (`cinemas_id`);

--
-- Индексы таблицы `impressions`
--
ALTER TABLE `impressions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mov_id` (`mov_id`);

--
-- Индексы таблицы `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cimes_id` (`cimes_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `chair`
--
ALTER TABLE `chair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `cinemas`
--
ALTER TABLE `cinemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `cinemaswallpers`
--
ALTER TABLE `cinemaswallpers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `impressions`
--
ALTER TABLE `impressions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `chair`
--
ALTER TABLE `chair`
  ADD CONSTRAINT `chair_ibfk_1` FOREIGN KEY (`id_cinems`) REFERENCES `cinemas` (`id`),
  ADD CONSTRAINT `chair_ibfk_2` FOREIGN KEY (`id_movies`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `chair_ibfk_3` FOREIGN KEY (`id_impressions`) REFERENCES `impressions` (`id`);

--
-- Ограничения внешнего ключа таблицы `cinemaswallpers`
--
ALTER TABLE `cinemaswallpers`
  ADD CONSTRAINT `cinemaswallpers_ibfk_1` FOREIGN KEY (`cinemas_id`) REFERENCES `cinemas` (`id`);

--
-- Ограничения внешнего ключа таблицы `impressions`
--
ALTER TABLE `impressions`
  ADD CONSTRAINT `impressions_ibfk_1` FOREIGN KEY (`mov_id`) REFERENCES `movies` (`id`);

--
-- Ограничения внешнего ключа таблицы `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`cimes_id`) REFERENCES `cinemas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
