-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 27 2022 г., 23:10
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pizza`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `type` varchar(70) NOT NULL,
  `size` varchar(70) NOT NULL,
  `sauce` varchar(70) NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- ССЫЛКИ ТАБЛИЦЫ `orders`:
--

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `type`, `size`, `sauce`, `price`, `created_at`) VALUES
(1, 'Гавайская', '26', 'Барбекю', 27.70, '2022-01-28 00:53:45'),
(2, 'Деревенская', '21', 'Сырный', 20.50, '2022-01-28 00:54:40'),
(3, 'Деревенская', '45', 'Кисло-сладкий', 28.40, '2022-01-28 00:56:58');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size_21` double(8,2) NOT NULL,
  `size_26` double(8,2) NOT NULL,
  `size_31` double(8,2) NOT NULL,
  `size_45` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- ССЫЛКИ ТАБЛИЦЫ `products`:
--

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `size_21`, `size_26`, `size_31`, `size_45`) VALUES
(1, 'Пепперони', 22.00, 24.00, 26.00, 30.00),
(2, 'Деревенская', 20.00, 22.00, 24.00, 28.00),
(3, 'Гавайская', 25.00, 27.00, 29.00, 33.00),
(4, 'Грибная', 22.00, 24.00, 26.00, 30.00);

-- --------------------------------------------------------

--
-- Структура таблицы `sauce`
--

CREATE TABLE IF NOT EXISTS `sauce` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- ССЫЛКИ ТАБЛИЦЫ `sauce`:
--

--
-- Дамп данных таблицы `sauce`
--

INSERT INTO `sauce` (`id`, `name`, `price`) VALUES
(1, 'Сырный', 0.50),
(2, 'Кисло-сладкий', 0.40),
(3, 'Чесночный', 0.60),
(4, 'Барбекю', 0.70);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
