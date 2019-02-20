-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 20 2019 г., 11:17
-- Версия сервера: 5.5.53
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `catalog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `author`
--

INSERT INTO `author` (`id`, `name`) VALUES
(1, 'Rowling'),
(2, 'Shekspir'),
(3, 'Bulgakov'),
(4, 'Kovi'),
(5, 'qwe'),
(6, 'qwe');

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` char(50) CHARACTER SET utf8 NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `name`, `date`) VALUES
(1, 'Master and Margarita', '0000-00-00 00:00:00'),
(2, 'Gamlet', '0000-00-00 00:00:00'),
(3, '', '0000-00-00 00:00:00'),
(4, '', '0000-00-00 00:00:00'),
(12, '', '0000-00-00 00:00:00'),
(13, '', '0000-00-00 00:00:00'),
(14, '', '0000-00-00 00:00:00'),
(15, '', '0000-00-00 00:00:00'),
(16, '', '0000-00-00 00:00:00'),
(17, '', '0000-00-00 00:00:00'),
(18, '', '0000-00-00 00:00:00'),
(19, '', '0000-00-00 00:00:00'),
(20, '', '0000-00-00 00:00:00'),
(21, '', '0000-00-00 00:00:00'),
(22, '', '0000-00-00 00:00:00'),
(23, '', '0000-00-00 00:00:00'),
(24, '', '0000-00-00 00:00:00'),
(25, '', '0000-00-00 00:00:00'),
(26, '', '0000-00-00 00:00:00'),
(27, '', '0000-00-00 00:00:00'),
(28, '', '0000-00-00 00:00:00'),
(29, '', '0000-00-00 00:00:00'),
(30, '', '0000-00-00 00:00:00'),
(31, '', '0000-00-00 00:00:00'),
(32, '', '0000-00-00 00:00:00'),
(33, '', '0000-00-00 00:00:00'),
(34, '', '0000-00-00 00:00:00'),
(35, '', '0000-00-00 00:00:00'),
(36, '', '0000-00-00 00:00:00'),
(37, '', '0000-00-00 00:00:00'),
(38, '', '0000-00-00 00:00:00'),
(39, '', '0000-00-00 00:00:00'),
(40, '', '0000-00-00 00:00:00'),
(41, '', '0000-00-00 00:00:00'),
(42, '', '0000-00-00 00:00:00'),
(43, '', '0000-00-00 00:00:00'),
(44, '', '0000-00-00 00:00:00'),
(45, '', '0000-00-00 00:00:00'),
(46, '', '0000-00-00 00:00:00'),
(47, '', '0000-00-00 00:00:00'),
(48, '', '0000-00-00 00:00:00'),
(49, '', '0000-00-00 00:00:00'),
(50, '', '0000-00-00 00:00:00'),
(51, '', '0000-00-00 00:00:00'),
(52, '', '0000-00-00 00:00:00'),
(53, '', '0000-00-00 00:00:00'),
(54, '', '0000-00-00 00:00:00'),
(55, '', '0000-00-00 00:00:00'),
(56, '', '0000-00-00 00:00:00'),
(57, '', '0000-00-00 00:00:00'),
(58, '', '0000-00-00 00:00:00'),
(59, '', '0000-00-00 00:00:00'),
(60, '', '0000-00-00 00:00:00'),
(61, '', '0000-00-00 00:00:00'),
(62, '', '0000-00-00 00:00:00'),
(63, '', '0000-00-00 00:00:00'),
(64, '', '0000-00-00 00:00:00'),
(65, '', '0000-00-00 00:00:00'),
(66, '', '0000-00-00 00:00:00'),
(67, '', '0000-00-00 00:00:00'),
(68, '', '0000-00-00 00:00:00'),
(69, '', '0000-00-00 00:00:00'),
(70, '', '0000-00-00 00:00:00'),
(71, '', '0000-00-00 00:00:00'),
(72, '', '0000-00-00 00:00:00'),
(73, '', '0000-00-00 00:00:00'),
(74, '', '0000-00-00 00:00:00'),
(75, '', '0000-00-00 00:00:00'),
(76, '', '0000-00-00 00:00:00'),
(77, '', '0000-00-00 00:00:00'),
(78, '', '0000-00-00 00:00:00'),
(79, '', '0000-00-00 00:00:00'),
(80, '', '0000-00-00 00:00:00'),
(81, '', '0000-00-00 00:00:00'),
(82, '', '0000-00-00 00:00:00'),
(83, '', '0000-00-00 00:00:00'),
(84, '', '0000-00-00 00:00:00'),
(85, '', '0000-00-00 00:00:00'),
(86, '', '0000-00-00 00:00:00'),
(87, '', '0000-00-00 00:00:00'),
(88, '', '0000-00-00 00:00:00'),
(89, 'qwe', '0000-00-00 00:00:00'),
(90, 'qwe', '0000-00-00 00:00:00'),
(91, 'qwe', '0000-00-00 00:00:00'),
(92, 'qwe', '0000-00-00 00:00:00'),
(93, 'qwe', '0000-00-00 00:00:00'),
(94, 'qwe', '0000-00-00 00:00:00'),
(95, 'qwe', '0000-00-00 00:00:00'),
(96, 'qwe', '0000-00-00 00:00:00'),
(97, 'qwe', '0000-00-00 00:00:00'),
(98, 'qwe', '0000-00-00 00:00:00'),
(99, 'qwe', '0000-00-00 00:00:00'),
(100, 'qwe', '0000-00-00 00:00:00'),
(101, 'qwe', '0000-00-00 00:00:00'),
(102, 'qwe', '0000-00-00 00:00:00'),
(103, 'qwe', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `books_relations`
--

CREATE TABLE `books_relations` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `publish_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books_relations`
--

INSERT INTO `books_relations` (`id`, `book_id`, `author_id`, `publish_id`, `category_id`) VALUES
(1, 1, 2, 1, 4),
(2, 1, 1, 2, 2),
(3, 104, 6, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `book_images`
--

CREATE TABLE `book_images` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `image_url` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `book_images`
--

INSERT INTO `book_images` (`id`, `book_id`, `image_url`) VALUES
(1, 1, 'qwe1233333'),
(2, 1, 'qweqweqwe2'),
(3, 89, 'rosetrue.jpg'),
(4, 90, 'rosetrue.jpg'),
(5, 97, 'agro.png'),
(6, 97, 'rose.jpg'),
(7, 97, 'rosetrue.jpg'),
(8, 98, 'rosetrue.jpg'),
(9, 99, 'agro.png'),
(10, 99, 'rose.jpg'),
(11, 99, 'rosetrue.jpg'),
(12, 100, 'agro.png'),
(13, 100, 'rose.jpg'),
(14, 100, 'rosetrue.jpg'),
(15, 101, 'agro.png'),
(16, 101, 'rose.jpg'),
(17, 101, 'rosetrue.jpg'),
(18, 102, 'agro.png'),
(19, 102, 'rose.jpg'),
(20, 102, 'rosetrue.jpg'),
(21, 103, 'agro.png'),
(22, 103, 'rose.jpg'),
(23, 103, 'rosetrue.jpg'),
(24, 104, 'agro.png'),
(25, 104, 'rose.jpg'),
(26, 104, 'rosetrue.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `hierarchy` int(11) NOT NULL,
  `name` char(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `hierarchy`, `name`) VALUES
(1, 0, 'History'),
(2, 0, 'Programming'),
(3, 1, 'World'),
(4, 1, 'Middle ages'),
(5, 4, 'Country'),
(6, 5, 'Ukraine'),
(7, 5, 'USA'),
(8, 2, 'qwe');

-- --------------------------------------------------------

--
-- Структура таблицы `publish_house`
--

CREATE TABLE `publish_house` (
  `id` int(11) NOT NULL,
  `name` char(50) CHARACTER SET utf8 NOT NULL,
  `phone` char(25) NOT NULL,
  `address` char(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `publish_house`
--

INSERT INTO `publish_house` (`id`, `name`, `phone`, `address`) VALUES
(1, 'Kiev pub', '380000000', 'Kiev Kirova st. 15'),
(2, 'Dnipro pub', '380506245656', 'Dnipro Kirova st. 15');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `books_relations`
--
ALTER TABLE `books_relations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `publish_id` (`publish_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `book_images`
--
ALTER TABLE `book_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `publish_house`
--
ALTER TABLE `publish_house`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT для таблицы `books_relations`
--
ALTER TABLE `books_relations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `book_images`
--
ALTER TABLE `book_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `publish_house`
--
ALTER TABLE `publish_house`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
