-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 07 2023 г., 18:19
-- Версия сервера: 10.4.19-MariaDB
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `orda`
--

-- --------------------------------------------------------

--
-- Структура таблицы `lib_city`
--

CREATE TABLE `lib_city` (
  `id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `edited_user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=1489 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lib_city`
--

INSERT INTO `lib_city` (`id`, `country_id`, `name`, `edited_user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(92, 40, 'Алматы', 5, '2020-08-20 11:10:57', '2020-08-20 11:10:57', NULL),
(93, 40, 'Шымкент', 5, '2020-08-20 11:11:28', '2020-08-20 11:11:28', NULL),
(94, 40, 'Акмолинская область', 5, '2020-08-20 11:11:50', '2020-08-20 11:11:50', NULL),
(95, 40, 'Актюбинская область', 5, '2020-08-20 11:12:10', '2020-08-20 11:12:10', NULL),
(96, 40, 'Алматинская область', 5, '2020-08-20 11:12:25', '2020-08-20 11:12:25', NULL),
(97, 40, 'Атырауская область', 5, '2020-08-20 11:12:37', '2020-08-20 11:12:37', NULL),
(98, 40, 'Западно-Казахстанская область', 5, '2020-08-20 11:12:53', '2020-08-20 11:12:53', NULL),
(99, 40, 'Жамбылская область', 5, '2020-08-20 11:13:12', '2020-08-20 11:13:12', NULL),
(100, 40, 'Костанайская область', 5, '2020-08-20 11:13:35', '2020-08-20 11:13:35', NULL),
(101, 40, 'Кызылординская область', 5, '2020-08-20 11:21:58', '2020-08-20 11:21:58', NULL),
(102, 40, 'Мангистауская область', 5, '2020-08-20 11:22:10', '2020-08-20 11:22:10', NULL),
(103, 40, 'Павлодарская область', 5, '2020-08-20 11:22:24', '2020-08-20 11:22:24', NULL),
(104, 40, 'Северо-Казахстанская область', 5, '2020-08-20 11:22:38', '2020-08-20 11:22:38', NULL),
(105, 40, 'Туркестанская область', 5, '2020-08-20 11:22:53', '2020-08-20 11:22:53', NULL),
(106, 40, 'Восточно-Казахстанская область', 5, '2020-08-20 11:23:03', '2020-08-20 11:23:03', NULL),
(107, 40, 'Нур-Султан', 6, '2020-08-27 11:17:35', '2020-08-27 11:17:35', NULL),
(108, 40, 'Карагандинская область', 6, '2020-08-28 04:03:56', '2020-08-28 04:03:56', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
