-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2023 г., 16:58
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Housemuuu`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL,
  `products_info` varchar(50) NOT NULL,
  `cost` int NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int NOT NULL,
  `year` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `year`, `category`, `image`) VALUES
(1, 'Скрипка', 20000, '2023-05-24 09:23:00', 'Смычковые', '1'),
(2, 'Гитара', 45000, '2023-05-24 09:23:00', 'Струнные', '2'),
(3, 'гитара', 15000, '2023-05-24 10:34:11', 'Струнные', '3'),
(4, 'Скрипка', 15000, '2023-05-24 10:34:11', 'Смычковые', '5'),
(5, 'Электро гитара', 30000, '2023-05-24 10:35:35', 'Струнные', '11'),
(6, 'Синтезатор', 25000, '2023-05-24 10:35:35', 'Клавишные', '6');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `patronymic` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `patronymic`, `login`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin@com', 'admin22'),
(2, '1', '1', '1', '1', '1@com', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
