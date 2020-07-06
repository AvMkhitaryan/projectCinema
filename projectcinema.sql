-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 06 2020 г., 09:52
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
-- Структура таблицы `buy`
--

CREATE TABLE `buy` (
  `id` int(11) NOT NULL,
  `communication_id` int(11) NOT NULL,
  `chair_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `buy`
--

INSERT INTO `buy` (`id`, `communication_id`, `chair_number`) VALUES
(1, 2, '10'),
(2, 2, '15'),
(3, 2, '16'),
(4, 2, '27'),
(5, 2, '34'),
(6, 2, '23'),
(7, 2, '24'),
(8, 2, '28');

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
-- Структура таблицы `communication`
--

CREATE TABLE `communication` (
  `id` int(11) NOT NULL,
  `cinemas_id` int(11) NOT NULL,
  `movies_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `communication`
--

INSERT INTO `communication` (`id`, `cinemas_id`, `movies_id`, `time_id`) VALUES
(1, 2, 3, 5),
(2, 2, 2, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `time_count` varchar(255) NOT NULL,
  `relese_year` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `movie_info` varchar(255) NOT NULL,
  `reting_in_world` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `movies`
--

INSERT INTO `movies` (`id`, `name`, `img`, `time_count`, `relese_year`, `genre`, `movie_info`, `reting_in_world`) VALUES
(1, 'Lost Bullet', 'lost_bullet.jpg', '2:45:00', '2020', 'Triller', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto consectetur ducimus, est ex excepturi hic libero nihil non, nulla pariatur quidem quis quisquam, repellendus repudiandae sapiente temporibus vero. Possimus. lorem   Lorem ipsum ', '92'),
(2, 'Joker', 'joker.jpg', '2:18:00', '2020', 'Fantasi', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid, consequatur delectus eaque quidem velit veritatis. Assumenda exercitationem id nobis reiciendis rem tempore, voluptatum? Dicta eius ipsum minima reiciendis sapiente?\r\nLorem ipsum dol', '71'),
(3, 'Bed Boys 2', 'bad_boys.jpg', '2:33:00', '2019', 'Action', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid, consequatur delectus eaque quidem velit veritatis. Assumenda exercitationem id nobis reiciendis rem tempore, voluptatum? Dicta eius ipsum minima reiciendis sapiente?\r\nLorem ipsum dol', '88'),
(4, 'Man On The Moon', 'Man_on_the_moon.jpg', '1:55:50', '2018', 'Historical', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid, consequatur delectus eaque quidem velit veritatis. Assumenda exercitationem id nobis reiciendis rem tempore, voluptatum? Dicta eius ipsum minima reiciendis sapiente?\r\nLorem ipsum dol', '55');

-- --------------------------------------------------------

--
-- Структура таблицы `time`
--

CREATE TABLE `time` (
  `id` int(11) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `time`
--

INSERT INTO `time` (`id`, `start`, `end`) VALUES
(1, '2020-07-01 14:00', '2020-07-01 16:00'),
(2, '2020-07-01 17:00', '2020-07-01 19:00'),
(3, '2020-07-01 20:00', '2020-07-01 22:00'),
(4, '2020-07-02 12:00', '2020-07-02 14:00'),
(5, '2020-07-02 15:00', '2020-07-02 17:00'),
(6, '2020-07-02 18:00', '2020-07-02 20:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `communication_id` (`communication_id`);

--
-- Индексы таблицы `cinemas`
--
ALTER TABLE `cinemas`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `communication`
--
ALTER TABLE `communication`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cinemas_id` (`cinemas_id`),
  ADD KEY `movies_id` (`movies_id`),
  ADD KEY `time_id` (`time_id`);

--
-- Индексы таблицы `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `cinemas`
--
ALTER TABLE `cinemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `communication`
--
ALTER TABLE `communication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `time`
--
ALTER TABLE `time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `buy`
--
ALTER TABLE `buy`
  ADD CONSTRAINT `buy_ibfk_1` FOREIGN KEY (`communication_id`) REFERENCES `communication` (`id`);

--
-- Ограничения внешнего ключа таблицы `communication`
--
ALTER TABLE `communication`
  ADD CONSTRAINT `communication_ibfk_1` FOREIGN KEY (`time_id`) REFERENCES `time` (`id`),
  ADD CONSTRAINT `communication_ibfk_2` FOREIGN KEY (`movies_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `communication_ibfk_3` FOREIGN KEY (`cinemas_id`) REFERENCES `cinemas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
