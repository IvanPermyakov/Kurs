-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 28 2020 г., 14:15
-- Версия сервера: 5.6.43
-- Версия PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `register`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `text`) VALUES
(1, 'Обучающий курс по созданию 3D анимации', '9.jpg', 'Также от наша компания производит обучающии курсы по анимации'),
(3, 'Мультфильмы на заказ', '10.jpg', 'Этот мультфильм был заказан институтом биологии, для наглядного показа плохой экологической ситуации в России'),
(4, 'Рекламные мультфильмы', '12.jpg', 'Данный рекламный ролик заказал молочный комбинат Майкопский для рекламы по телевизору'),
(5, '3-D АНИМАЦИЯ', '14.jpg', 'Заказ поступил от мужчины который собирался сделать предложение своей девушке'),
(6, 'Корпоративний мультфильм для Ingate', '11.jpg', 'В сентябре 2015 года холдингу Ingate исполнилось 15 лет. Они заказали в нашей студии создание корпоративного мультфильма, который увидели все сотрудники этой огранизации. Мы сдали работу в срок, заказчик остался доволен.'),
(7, 'Художественные курсы', '17.jpg', 'А еще у нас проходят мастер классы по рисованию');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `pass`) VALUES
(37, '1010ivan2001@gmail.com', 'Иван', 'Asdfg123*'),
(38, 'PermyakovIvan@gmail.com', 'Пермяков Иван', 'QWERTqwert123*/');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
