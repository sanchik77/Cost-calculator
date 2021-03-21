-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 03 2020 г., 22:28
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `warehouse_kh`
--

-- --------------------------------------------------------

--
-- Структура таблицы `order_warehouse`
--

CREATE TABLE `order_warehouse` (
  `id_order` int(11) NOT NULL,
  `cell_type` varchar(100) NOT NULL,
  `cell_volume` varchar(100) NOT NULL,
  `cell_size` varchar(100) NOT NULL,
  `price_per_month` varchar(100) NOT NULL,
  `storage_period` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_warehouse`
--

INSERT INTO `order_warehouse` (`id_order`, `cell_type`, `cell_volume`, `cell_size`, `price_per_month`, `storage_period`, `name`, `number`, `email`) VALUES
(1, 'Обычная ячейка', '1м²', '1.4 x 0.7 x 1.1', '450', '30', 'Александр', '0977162612', 'sandrik5232@gmail.com'),
(2, 'Обычная ячейка', '1м²', '1.4 x 0.7 x 1.1', '450', '30', '123', '123', 'sandrik5232@gmail.com'),
(3, 'Обычная ячейка', '1м²', '1.4 x 0.7 x 1.1', '450', '30', 'Александр', '0977162612', 'sandrik5232@gmail.com'),
(4, 'Обычная ячейка', '3м²', '1.3 x 3 x 2.7', '1350', '30', 'Александр', '0977162612', 'sandrik5232@gmail.com'),
(5, 'Обычная ячейка', '1м²', '1.4 x 0.7 x 1.1', '450', '30', 'Александр', '0977162612', 'sandrik5232@gmail.com'),
(6, 'Обычная ячейка', '3м²', '1.3 x 3 x 2.7', '1350', '30', 'Александр', '0977162612', 'sandrik5232@gmail.com'),
(7, 'Обычная ячейка', '3м²', '1.3 x 3 x 2.7', '1350', '30', 'Александр', '0977162612', 'sandrik5232@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `users_warehouse`
--

CREATE TABLE `users_warehouse` (
  `id_user` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `number` varchar(100) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_warehouse`
--

INSERT INTO `users_warehouse` (`id_user`, `full_name`, `email`, `number`, `login`, `password`) VALUES
(1, '123fsdfsdfsdf', 'sandrik5232@gmail.com', '0977162612', '123', '202cb962ac59075b964b07152d234b70');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `order_warehouse`
--
ALTER TABLE `order_warehouse`
  ADD PRIMARY KEY (`id_order`);

--
-- Индексы таблицы `users_warehouse`
--
ALTER TABLE `users_warehouse`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `order_warehouse`
--
ALTER TABLE `order_warehouse`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users_warehouse`
--
ALTER TABLE `users_warehouse`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
