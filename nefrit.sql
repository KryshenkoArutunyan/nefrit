-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 01 2018 г., 10:24
-- Версия сервера: 10.1.31-MariaDB
-- Версия PHP: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nefrit`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` int(5) NOT NULL,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
(1, 'anuta', '1111');

-- --------------------------------------------------------

--
-- Структура таблицы `katalog`
--

CREATE TABLE `katalog` (
  `id_k` int(5) NOT NULL,
  `article` varchar(30) CHARACTER SET utf8 NOT NULL,
  `price` int(30) NOT NULL,
  `foto` text COLLATE utf8_bin NOT NULL,
  `id_pk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `katalog`
--

INSERT INTO `katalog` (`id_k`, `article`, `price`, `foto`, `id_pk`) VALUES
(1, 'K845 ', 30000, 'G:\\nefrit\\images\\katalog\\845k.jpg', 1),
(2, 'K978 ', 20000, 'G:\\nefrit\\images\\katalog\\978k.jpg\r\n', 1),
(3, 'K963 ', 30000, 'G:\\nefrit\\images\\katalog\\963k.jpg\r\n', 1),
(4, 'K974', 45000, 'G:\\nefrit\\images\\katalog\\974k.jpg\r\n', 1),
(5, 'B435 ', 20000, 'G:\\nefrit\\images\\katalog\\435b.jpg\r\n', 2),
(6, 'B340 ', 15000, 'G:\\nefrit\\images\\katalog\\340b.jpg\r\n', 2),
(7, 'B657', 30000, 'G:\\nefrit\\images\\katalog\\657b.jpg\r\n', 2),
(8, 'B432 ', 9000, 'G:\\nefrit\\images\\katalog\\432b.jpg\r\n', 2),
(9, 'P961 ', 35000, 'G:\\nefrit\\images\\katalog\\961p.jpg\r\n', 3),
(10, 'P833 ', 32000, 'G:\\nefrit\\images\\katalog\\833p.jpg\r\n', 3),
(11, 'P970 ', 25000, 'G:\\nefrit\\images\\katalog\\970p.jpg\r\n', 3),
(12, 'P978 ', 30000, 'G:\\nefrit\\images\\katalog\\978p.jpg\r\n', 3),
(13, 'S320 ', 12000, 'G:\\nefrit\\images\\katalog\\320s.jpg\r\n', 4),
(14, 'S412 ', 8000, 'G:\\nefrit\\images\\katalog\\412s.jpg\r\n', 4),
(15, 'S513 ', 10000, 'G:\\nefrit\\images\\katalog\\513s.jpg\r\n', 4),
(16, 'S734', 20000, 'G:\\nefrit\\images\\katalog\\734s.jpg\r\n', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `pkat`
--

CREATE TABLE `pkat` (
  `id_pk` int(5) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `pkat`
--

INSERT INTO `pkat` (`id_pk`, `name`) VALUES
(1, 'Кольца'),
(2, 'Браслеты'),
(3, 'Подвески'),
(4, 'Серьги');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `fio` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `phone` text COLLATE utf8_bin NOT NULL,
  `message` varchar(100) COLLATE utf8_bin NOT NULL,
  `id_ot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`fio`, `email`, `phone`, `message`, `id_ot`) VALUES
('fgh', 'sdfgh', '2345t', 'asfdgvbnm', 1),
('adsasd', 'sd', 'sdfsdf', 'sdf', 2),
('Fhe', 'fdsfdsf34', '32433535235', 'hfgg', 3),
('Арутюнян Анаида', 'missanaida@yandex.ru', '948359593495', 'Мне нравится ваш сайт)', 4);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id_k`),
  ADD KEY `id_pk` (`id_pk`),
  ADD KEY `id_pk_2` (`id_pk`),
  ADD KEY `id_pk_3` (`id_pk`);

--
-- Индексы таблицы `pkat`
--
ALTER TABLE `pkat`
  ADD PRIMARY KEY (`id_pk`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id_ot`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id_k` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id_ot` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `katalog`
--
ALTER TABLE `katalog`
  ADD CONSTRAINT `katalog_ibfk_1` FOREIGN KEY (`id_pk`) REFERENCES `pkat` (`id_pk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
