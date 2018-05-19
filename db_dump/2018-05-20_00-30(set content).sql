-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 20 2018 г., 00:28
-- Версия сервера: 5.7.20-log
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vedmedycya_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `title` json NOT NULL,
  `short_description` json NOT NULL,
  `description` json NOT NULL,
  `attributes` json NOT NULL,
  `imgs` json NOT NULL,
  `files` json NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL,
  `meta_title` json NOT NULL,
  `meta_description` json NOT NULL,
  `meta_keywords` json NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `article_id`, `type`, `name`, `title`, `short_description`, `description`, `attributes`, `imgs`, `files`, `priority`, `date`, `meta_title`, `meta_description`, `meta_keywords`, `active`, `created_at`, `updated_at`, `img`) VALUES
(1, 1, 0, '', '', '{\"ru\": \"\", \"ua\": \"Мережа готелів \\\"Велика Ведиедиця\\\" в Яремче та Буковелі\"}', '{\"ru\": \"\", \"ua\": \"<p>Короткий опис готелів</p>\\r\\n\"}', '{\"ru\": \"\", \"ua\": \"\"}', '{\"slogan\": {\"ru\": \"\", \"ua\": \"\"}}', '[{\"min\": \"upload/articles/1/min/bg.png\", \"full\": \"upload/articles/1/full/bg.png\"}, {\"min\": \"upload/articles/1/min/dropdown-1.jpg\", \"full\": \"upload/articles/1/full/dropdown-1.jpg\"}, {\"min\": \"upload/articles/1/min/dropdown-2.jpg\", \"full\": \"upload/articles/1/full/dropdown-2.jpg\"}]', 'null', 0, '1970-01-01 00:00:00', '{\"ru\": \"\", \"ua\": \"META Title\"}', '{\"ru\": \"\", \"ua\": \"\"}', '{\"ru\": \"\", \"ua\": \"\"}', 1, '2018-05-10 21:23:31', '2018-05-17 18:22:51', ''),
(2, 2, 0, 'mark', '', '{\"ua\": \"Котедж у Марка\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"price\": \"100\", \"discount\": \"\", \"location\": \"{\\\"title\\\":{\\\"ua\\\":\\\"\\\\u042f\\\\u0440\\\\u0435\\\\u043c\\\\u0447\\\\u0435\\\"}}\", \"hotel_photo\": \"upload/articles/2/img/2-5af6dc057b0f8.jpg\", \"marketing_dash\": \"{\\\"status\\\":\\\"1\\\",\\\"title\\\":{\\\"ua\\\":\\\"\\\\u0437\\\\u0430\\\\u043b\\\\u0438\\\\u0448\\\\u0438\\\\u043b\\\\u043e\\\\u0441\\\\u044f \\\\u0442\\\\u0440\\\\u0438 \\\\u043d\\\\u043e\\\\u043c\\\\u0435\\\\u0440\\\\u0442\\\"}}\"}', '[]', 'null', 0, '2018-05-12 01:41:09', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 01:37:29', '2018-05-14 16:21:39', ''),
(3, 3, 0, '', '', '{\"ua\": \"Більше ніж 999 відгуків\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"advantage_img\": \"upload/articles/3/img/3-5af6db5a50266.png\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 14:57:50', '2018-05-12 15:17:30', ''),
(4, 3, 0, '', '', '{\"ua\": \"Рейтинг на booking.com\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"advantage_img\": \"upload/articles/4/img/4-5af6db3cb032b.png\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 14:58:36', '2018-05-12 15:17:00', 'upload/articles/4/main/4-1526126316.png'),
(5, 3, 0, '', '', '{\"ua\": \"Розваги для дітей\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"advantage_img\": \"upload/articles/5/img/5-5af6db4b12c6a.png\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 14:59:00', '2018-05-12 15:17:15', 'upload/articles/5/main/5-1526126340.png'),
(7, 4, 0, '', '', '{\"ua\": \"facebook\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"social_img\": \"upload/articles/7/img/7-5af6ed76ccd3c.png\", \"social_link\": \"https://www.facebook.com/\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:34:46', '2018-05-12 16:34:46', ''),
(8, 4, 0, '', '', '{\"ua\": \"Instagram\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"social_img\": \"upload/articles/8/img/8-5af6ed9fad2e5.png\", \"social_link\": \"https://www.instagram.com/\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:35:27', '2018-05-12 16:35:27', ''),
(9, 4, 0, '', '', '{\"ua\": \"Youtube\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"social_img\": \"upload/articles/9/img/9-5af6edcff3124.png\", \"social_link\": \"https://www.youtube.com/\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:36:15', '2018-05-12 16:36:16', ''),
(10, 5, 0, '', '', '{\"ua\": \"Правило 1\"}', '{\"ua\": \"<p>Опис правила</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"rule_img\": \"upload/articles/10/img/10-5af6eef8e1b6d.png\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:41:12', '2018-05-12 16:41:13', ''),
(11, 5, 0, '', '', '{\"ua\": \"Правило 2\"}', '{\"ua\": \"<p>Опис правила</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"rule_img\": \"upload/articles/11/img/11-5af6ef081d1c7.png\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:41:28', '2018-05-12 16:41:28', ''),
(12, 5, 0, '', '', '{\"ua\": \"Правило 3\"}', '{\"ua\": \"<p>Опис правила</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"rule_img\": \"upload/articles/12/img/12-5af6ef1521cc0.png\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:41:41', '2018-05-12 16:41:41', ''),
(13, 6, 0, '', '', '{\"ua\": \"Слайд 1\"}', '{\"ua\": \"<p>Ваш ідеальний відпочинок чекає вас тут</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"slide_img\": \"upload/articles/13/img/13-5af6f07e8f88e.jpg\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:47:42', '2018-05-12 16:50:46', ''),
(14, 6, 0, '', '', '{\"ua\": \"Слайд 2\"}', '{\"ua\": \"<p>Велика ведмедиця</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"slide_img\": \"upload/articles/14/img/14-5af6f0a0bebf0.jpg\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:48:16', '2018-05-12 16:48:16', ''),
(15, 6, 0, '', '', '{\"ua\": \"Слайд 3\"}', '{\"ua\": \"<p>У марка</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"slide_img\": \"upload/articles/15/img/15-5af6f0aed28d4.jpg\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:48:30', '2018-05-12 16:48:30', ''),
(16, 7, 2, '', '', '{\"ua\": \"Прогулянка Карпатами\"}', '{\"ua\": \"<p>Опис прогулянки</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"marketing_img\": \"upload/articles/16/img/16-5af6f322da63f.jpg\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:58:58', '2018-05-12 16:58:58', ''),
(17, 7, 18, '', '', '{\"ua\": \"Катання на лижах\"}', '{\"ua\": \"<p>Опис катання на лижах</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"marketing_img\": \"upload/articles/17/img/17-5af6f35322f17.jpg\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:59:47', '2018-05-12 17:05:20', ''),
(18, 2, 0, 'vedmegyi-dvir', '', '{\"ru\": \"Медвежий двор\", \"ua\": \"Готель Ведмежий Двір\"}', '{\"ru\": \"\", \"ua\": \"\"}', '{\"ru\": \"\", \"ua\": \"\"}', '{\"price\": \"300\", \"discount\": \"20\", \"location\": \"{\\\"ua\\\":\\\"\\\\u0411\\\\u0443\\\\u043a\\\\u043e\\\\u0432\\\\u0435\\\\u043b\\\\u044c\\\",\\\"ru\\\":\\\"\\\\u0411\\\\u0443\\\\u043a\\\\u043e\\\\u0432\\\\u0435\\\\u043b\\\\u044c\\\"}\", \"marketing\": \"{\\\"ua\\\":\\\"\\\\u0437\\\\u0430\\\\u043b\\\\u0438\\\\u0448\\\\u0438\\\\u043b\\\\u043e\\\\u0441\\\\u044f \\\\u0442\\\\u0440\\\\u0438 \\\\u043d\\\\u043e\\\\u043c\\\\u0435\\\\u0440\\\\u0438\\\",\\\"ru\\\":\\\"\\\\u043e\\\\u0441\\\\u0442\\\\u0430\\\\u043b\\\\u043e\\\\u0441\\\\u044c \\\\u0442\\\\u0440\\\\u0438 \\\\u043d\\\\u043e\\\\u043c\\\\u0435\\\\u0440\\\\u0430\\\"}\", \"hotel_photo\": \"upload/articles/18/img/18-5af6f3edd7a07.jpg\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ru\": \"\", \"ua\": \"\"}', '{\"ru\": \"\", \"ua\": \"\"}', '{\"ru\": \"\", \"ua\": \"\"}', 1, '2018-05-12 17:02:21', '2018-05-17 18:34:40', ''),
(19, 2, 0, 'velyka-vedmedycya', '', '{\"ua\": \"Готель Велика Ведмедиця\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"price\": \"400\", \"discount\": \"\", \" location\": \"{\\\"ua\\\":\\\"\\\\u042f\\\\u0440\\\\u0435\\\\u043c\\\\u0447\\\\u0435\\\"}\", \"hotel_photo\": \"upload/articles/19/img/19-5af6f480827db.jpg\", \"marketing_dash\": \"{\\\"ua\\\":\\\"\\\"}\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 17:04:48', '2018-05-12 17:04:48', ''),
(20, 7, 19, '', '', '{\"ua\": \"Катання на конях\"}', '{\"ua\": \"<p>Опис</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"marketing_img\": \"upload/articles/20/img/20-5af6f547d6f20.jpg\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 17:08:07', '2018-05-12 17:08:07', ''),
(21, 7, 2, '', '', '{\"ua\": \"Катання на конях\"}', '{\"ua\": \"<p>Опис</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"marketing_img\": \"upload/articles/21/img/21-5af6f555f3fdc.jpg\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 17:08:21', '2018-05-12 17:08:22', ''),
(22, 7, 2, '', '', '{\"ua\": \"Катання на квадроциклах\"}', '{\"ua\": \"<p>Опис</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"marketing_img\": \"upload/articles/22/img/22-5af6f567b2f05.jpg\", \"show_main_page\": \"1\"}', '[{\"min\": \"upload/articles/22/min/img-1.png\", \"full\": \"upload/articles/22/full/img-1.png\"}, {\"min\": \"upload/articles/22/min/img-2.png\", \"full\": \"upload/articles/22/full/img-2.png\"}]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 17:08:39', '2018-05-14 13:26:34', ''),
(23, 7, 19, '', '', '{\"ua\": \"Катання на квадроциклах\"}', '{\"ua\": \"<p>Опис</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"marketing_img\": \"upload/articles/23/img/23-5af6f57388b67.jpg\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 17:08:51', '2018-05-12 17:08:51', ''),
(77, 8, 18, '', '', '{\"ua\": \"Напівлюкс із каміном\"}', '{\"ua\": \"\"}', '{\"ua\": \"<p>Двухместный номер полулюкс 1-й категории с дополнительными спальными местами на раскладном диване. Стоимость дополнительных мест зависит от возрастной категории лиц.&nbsp;<strong>Номер в отеле</strong>&nbsp;- №10 (28 м.кв., вид с номера на внутренний двор).&nbsp;<strong>Комплектация номера:</strong>&nbsp;двуспальная кровать, двуспальный диван, спутниковое ТВ, холодильная камера, электрочайник (чай / кофе бесплатно), санузел (душевая, туалет, умывальник, гигиенический набор, фен, полотенца).</p>\\r\\n\"}', '{\"tv\": \"1\", \"pool\": \"0\", \"safe\": \"0\", \"wifi\": \"1\", \"coffe\": \"0\", \"kettle\": \"1\", \" fridge\": \"0\", \"kitchen\": \"0\", \"parking\": \"0\", \" Jacuzzi\": \"0\", \" bathroom\": \"1\", \"breakfast\": \"1\", \"fireplace\": \"0\", \"title_img\": \"{\\\"ua\\\":\\\"\\\\u041a\\\\u0456\\\\u043c\\\\u043d\\\\u0430\\\\u0442\\\\u0430 \\\\u043d\\\\u0430\\\\u043f\\\\u0456\\\\u0432\\\\u043b\\\\u044e\\\\u043a\\\\u0441\\\"}\", \" surcharge\": \"100\", \"base_price\": \"4500\", \"hair_dryer\": \"1\", \"discount_room\": \"5\", \"equipment_room\": \"{\\\"ua\\\":\\\"<ul>\\\\r\\\\n\\\\t<li>\\\\u0414\\\\u0432\\\\u043e\\\\u043a\\\\u0456\\\\u043c\\\\u043d\\\\u0430\\\\u0442\\\\u043d\\\\u0438\\\\u0439 \\\\u0434\\\\u0432\\\\u043e\\\\u0440\\\\u0456\\\\u0432\\\\u043d\\\\u0435\\\\u0432\\\\u0438\\\\u0439 \\\\u043d\\\\u043e\\\\u043c\\\\u0435\\\\u0440<\\\\/li>\\\\r\\\\n\\\\t<li>\\\\u041f\\\\u0440\\\\u0438\\\\u0445\\\\u043e\\\\u0436\\\\u0430 \\\\u0437 \\\\u043f\\\\u0440\\\\u043e\\\\u0441\\\\u0442\\\\u043e\\\\u0440\\\\u043e\\\\u044e \\\\u0448\\\\u0430\\\\u0444\\\\u043e\\\\u044e \\\\u0434\\\\u043b\\\\u044f \\\\u043e\\\\u0434\\\\u044f\\\\u0433\\\\u0443<\\\\/li>\\\\r\\\\n\\\\t<li>\\\\u0412\\\\u0456\\\\u0442\\\\u0430\\\\u043b\\\\u044c\\\\u043d\\\\u044f<\\\\/li>\\\\r\\\\n\\\\t<li>\\\\u0417\\\\u043e\\\\u043d\\\\u0430 \\\\u0432\\\\u0456\\\\u0434\\\\u043f\\\\u043e\\\\u0447\\\\u0438\\\\u043d\\\\u043a\\\\u0443 \\\\u0437\\\\u0456 \\\\u0441\\\\u0442\\\\u043e\\\\u043b\\\\u0438\\\\u043a\\\\u043e\\\\u043c \\\\u0456 \\\\u0434\\\\u0432\\\\u043e\\\\u043c\\\\u0430 \\\\u043a\\\\u0440\\\\u0456\\\\u0441\\\\u043b\\\\u0430\\\\u043c\\\\u0438<\\\\/li>\\\\r\\\\n\\\\t<li>\\\\u0412\\\\u043b\\\\u0430\\\\u0441\\\\u043d\\\\u0430 \\\\u043a\\\\u0443\\\\u0445\\\\u043d\\\\u044f, \\\\u043e\\\\u0431\\\\u043b\\\\u0430\\\\u0434\\\\u043d\\\\u0430\\\\u043d\\\\u0430 \\\\u043c\\\\u0435\\\\u0431\\\\u043b\\\\u044f\\\\u043c\\\\u0438, \\\\u0440\\\\u0430\\\\u043a\\\\u043e\\\\u0432\\\\u0438\\\\u043d\\\\u043e\\\\u044e \\\\u0442\\\\u0430 \\\\u043d\\\\u0430\\\\u0431\\\\u043e\\\\u0440\\\\u043e\\\\u043c \\\\u043f\\\\u043e\\\\u0441\\\\u0443\\\\u0434\\\\u0443<\\\\/li>\\\\r\\\\n\\\\t<li>1 \\\\u0432\\\\u0435\\\\u043b\\\\u0438\\\\u043a\\\\u0435 \\\\u0434\\\\u0432\\\\u043e\\\\u0441\\\\u043f\\\\u0430\\\\u043b\\\\u044c\\\\u043d\\\\u0435 \\\\u043b\\\\u0456\\\\u0436\\\\u043a\\\\u043e \\\\u0456 \\\\u0440\\\\u043e\\\\u0437\\\\u043a\\\\u043b\\\\u0430\\\\u0434\\\\u043d\\\\u0438\\\\u0439 \\\\u0434\\\\u0438\\\\u0432\\\\u0430\\\\u043d<\\\\/li>\\\\r\\\\n\\\\t<li>\\\\u041f\\\\u0440\\\\u0438\\\\u043b\\\\u0456\\\\u0436\\\\u043a\\\\u043e\\\\u0432\\\\u0456 \\\\u0442\\\\u0443\\\\u043c\\\\u0431\\\\u0438<\\\\/li>\\\\r\\\\n\\\\t<li>\\\\u0422\\\\u0435\\\\u043b\\\\u0435\\\\u0432\\\\u0456\\\\u0437\\\\u043e\\\\u0440<\\\\/li>\\\\r\\\\n\\\\t<li>\\\\u0421\\\\u0430\\\\u043d\\\\u0432\\\\u0443\\\\u0437\\\\u043e\\\\u043b \\\\u0437 \\\\u0434\\\\u0443\\\\u0448\\\\u043e\\\\u0432\\\\u043e\\\\u044e \\\\u043a\\\\u0430\\\\u0431\\\\u0456\\\\u043d\\\\u043e\\\\u044e<\\\\/li>\\\\r\\\\n<\\\\/ul>\\\\r\\\\n\\\"}\", \"сhildren_room\": \"0\", \"max_count_guests\": \"4\", \"ski_storage_room\": \"1\", \"base_count_ guests\": \"2\", \"bowl_ski_equipment\": \"0\"}', '[{\"min\": \"upload/articles/77/min/1.jpg\", \"full\": \"upload/articles/77/full/1.jpg\"}, {\"min\": \"upload/articles/77/min/2.jpg\", \"full\": \"upload/articles/77/full/2.jpg\"}, {\"min\": \"upload/articles/77/min/3.jpg\", \"full\": \"upload/articles/77/full/3.jpg\"}]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-17 18:45:52', '2018-05-17 18:48:48', ''),
(78, 8, 2, '', '', '{\"ua\": \"Апартаменти у Марка\"}', '{\"ua\": \"<p>Короткий опис</p>\\r\\n\"}', '{\"ua\": \"<p>Опис</p>\\r\\n\"}', '{\"tv\": \"1\", \"pool\": \"0\", \"safe\": \"0\", \"wifi\": \"1\", \"coffe\": \"0\", \"kettle\": \"0\", \" fridge\": \"0\", \"kitchen\": \"1\", \"parking\": \"1\", \" Jacuzzi\": \"0\", \" bathroom\": \"1\", \"breakfast\": \"0\", \"fireplace\": \"0\", \"title_img\": \"{\\\"ua\\\":\\\"\\\\u041d\\\\u0430\\\\u043f\\\\u0438\\\\u0441 \\\\u043d\\\\u0430 \\\\u0444\\\\u043e\\\\u0442\\\\u043e\\\"}\", \" surcharge\": \"500\", \"base_price\": \"10000\", \"hair_dryer\": \"1\", \"discount_room\": \"\", \"equipment_room\": \"{\\\"ua\\\":\\\"<p>\\\\u0446\\\\u0435\\\\u0443\\\\u043a\\\\u0446\\\\u0435\\\\u0443<\\\\/p>\\\\r\\\\n\\\\r\\\\n<p>\\\\u0443\\\\u0446\\\\u0443\\\\u0446\\\\u0443<\\\\/p>\\\\r\\\\n\\\\r\\\\n<p>\\\\u0446\\\\u0443<\\\\/p>\\\\r\\\\n\\\\r\\\\n<p>\\\\u0446\\\\u0443<\\\\/p>\\\\r\\\\n\\\\r\\\\n<p>\\\\u0446\\\\u0443<\\\\/p>\\\\r\\\\n\\\\r\\\\n<p>\\\\u0446\\\\u0443\\\\u0446<\\\\/p>\\\\r\\\\n\\\\r\\\\n<p>\\\\u0443<\\\\/p>\\\\r\\\\n\\\"}\", \"сhildren_room\": \"0\", \"max_count_guests\": \"10\", \"ski_storage_room\": \"1\", \"base_count_ guests\": \"4\", \"bowl_ski_equipment\": \"0\"}', '[{\"min\": \"upload/articles/78/min/dpx_0622.jpg\", \"full\": \"upload/articles/78/full/dpx_0622.jpg\"}, {\"min\": \"upload/articles/78/min/dpx_0625.jpg\", \"full\": \"upload/articles/78/full/dpx_0625.jpg\"}, {\"min\": \"upload/articles/78/min/dpx_0628.jpg\", \"full\": \"upload/articles/78/full/dpx_0628.jpg\"}, {\"min\": \"upload/articles/78/min/dpx_0631.jpg\", \"full\": \"upload/articles/78/full/dpx_0631.jpg\"}]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-17 18:52:46', '2018-05-17 19:00:50', ''),
(79, 9, 18, '', '', '{\"ua\": \"Контакти готелю Ведмежий Двір\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"map\": \"test\", \"email\": \"hotel@example.com\", \"address\": \"{\\\"ua\\\":\\\"\\\\u0423\\\\u043a\\\\u0440\\\\u0430\\\\u0457\\\\u043d\\\\u0430, \\\\u0406\\\\u0432\\\\u0430\\\\u043d\\\\u043e\\\\u0444\\\\u0440\\\\u0430\\\\u043d\\\\u043a\\\\u0456\\\\u0432\\\\u0441\\\\u044c\\\\u043a\\\\u0430 \\\\u043e\\\\u0431\\\\u043b\\\\u0430\\\\u0441\\\\u0442\\\\u044c,\\\\u041f\\\\u043e\\\\u043b\\\\u044f\\\\u043d\\\\u0438\\\\u0446\\\\u044f 1\\\"}\", \"air_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0406\\\\u0432\\\\u0430\\\\u043d\\\\u043e-\\\\u0424\\\\u0440\\\\u0430\\\\u043d\\\\u043a\\\\u0456\\\\u0432\\\\u0441\\\\u044c\\\\u043a<\\\\/p>\\\\r\\\\n\\\"}\", \"bus_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0407\\\\u0445\\\\u0430\\\\u0442\\\\u0438 \\\\u0434\\\\u043e \\\\u0411\\\\u0443\\\\u043a\\\\u043e\\\\u0432\\\\u0435\\\\u043b\\\\u044e<\\\\/p>\\\\r\\\\n\\\"}\", \"car_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0422\\\\u0440\\\\u0430\\\\u0441\\\\u0430 \\\\u042f\\\\u0440\\\\u0435\\\\u043c\\\\u0447\\\\u0435-\\\\u0412\\\\u043e\\\\u0440\\\\u043e\\\\u0445\\\\u0442\\\\u0430<\\\\/p>\\\\r\\\\n\\\"}\", \"train_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0441\\\\u0442\\\\u0430\\\\u043d\\\\u0446\\\\u0456\\\\u044f \\\\u042f\\\\u0440\\\\u0435\\\\u043c\\\\u0447\\\\u0435<\\\\/p>\\\\r\\\\n\\\"}\", \" reception_tel1\": \"+3 (093) 124-56-78\", \" reception_tel2\": \"+3 (093) 124-56-79\", \"restaurant_tel1\": \"+3 (093) 124-56-76\", \"restaurant_tel2\": \"+3 (093) 124-56-75\", \"reservation_tel1\": \"+3 (093) 124-56-74\", \"reservation_tel2\": \"+3 (093) 124-56-74\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:10:42', '2018-05-19 23:14:03', ''),
(80, 9, 19, '', '', '{\"ua\": \"Контакти готелю Велика Ведмедиця\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"map\": \"test\", \"email\": \"hotel@example.com\", \"address\": \"{\\\"ua\\\":\\\"\\\\u0423\\\\u043a\\\\u0440\\\\u0430\\\\u0457\\\\u043d\\\\u0430, \\\\u0406\\\\u0432\\\\u0430\\\\u043d\\\\u043e\\\\u0444\\\\u0440\\\\u0430\\\\u043d\\\\u043a\\\\u0456\\\\u0432\\\\u0441\\\\u044c\\\\u043a\\\\u0430 \\\\u043e\\\\u0431\\\\u043b\\\\u0430\\\\u0441\\\\u0442\\\\u044c,\\\\u041f\\\\u043e\\\\u043b\\\\u044f\\\\u043d\\\\u0438\\\\u0446\\\\u044f 1\\\"}\", \"air_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0406\\\\u0432\\\\u0430\\\\u043d\\\\u043e-\\\\u0424\\\\u0440\\\\u0430\\\\u043d\\\\u043a\\\\u0456\\\\u0432\\\\u0441\\\\u044c\\\\u043a<\\\\/p>\\\\r\\\\n\\\"}\", \"bus_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0407\\\\u0445\\\\u0430\\\\u0442\\\\u0438 \\\\u0434\\\\u043e \\\\u0411\\\\u0443\\\\u043a\\\\u043e\\\\u0432\\\\u0435\\\\u043b\\\\u044e<\\\\/p>\\\\r\\\\n\\\"}\", \"car_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0422\\\\u0440\\\\u0430\\\\u0441\\\\u0430 \\\\u042f\\\\u0440\\\\u0435\\\\u043c\\\\u0447\\\\u0435-\\\\u0412\\\\u043e\\\\u0440\\\\u043e\\\\u0445\\\\u0442\\\\u0430<\\\\/p>\\\\r\\\\n\\\"}\", \"train_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0441\\\\u0442\\\\u0430\\\\u043d\\\\u0446\\\\u0456\\\\u044f \\\\u042f\\\\u0440\\\\u0435\\\\u043c\\\\u0447\\\\u0435<\\\\/p>\\\\r\\\\n\\\"}\", \" reception_tel1\": \"+3 (093) 124-56-78\", \" reception_tel2\": \"+3 (093) 124-56-79\", \"restaurant_tel1\": \"+3 (093) 124-56-76\", \"restaurant_tel2\": \"+3 (093) 124-56-75\", \"reservation_tel1\": \"+3 (093) 124-56-74\", \"reservation_tel2\": \"+3 (093) 124-56-74\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:10:53', '2018-05-19 23:14:34', ''),
(81, 9, 2, '', '', '{\"ua\": \"Контакти готелю У Марка\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"map\": \"test\", \"email\": \"hotel@example.com\", \"address\": \"{\\\"ua\\\":\\\"\\\\u0423\\\\u043a\\\\u0440\\\\u0430\\\\u0457\\\\u043d\\\\u0430, \\\\u0406\\\\u0432\\\\u0430\\\\u043d\\\\u043e-\\\\u0424\\\\u0440\\\\u0430\\\\u043d\\\\u043a\\\\u0456\\\\u0432\\\\u0441\\\\u044c\\\\u043a\\\\u0430 \\\\u043e\\\\u0431\\\\u043b\\\\u0430\\\\u0441\\\\u0442\\\\u044c,\\\\u041f\\\\u043e\\\\u043b\\\\u044f\\\\u043d\\\\u0438\\\\u0446\\\\u044f 1\\\"}\", \"air_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0406\\\\u0432\\\\u0430\\\\u043d\\\\u043e-\\\\u0424\\\\u0440\\\\u0430\\\\u043d\\\\u043a\\\\u0456\\\\u0432\\\\u0441\\\\u044c\\\\u043a<\\\\/p>\\\\r\\\\n\\\"}\", \"bus_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0407\\\\u0445\\\\u0430\\\\u0442\\\\u0438 \\\\u0434\\\\u043e \\\\u0411\\\\u0443\\\\u043a\\\\u043e\\\\u0432\\\\u0435\\\\u043b\\\\u044e<\\\\/p>\\\\r\\\\n\\\"}\", \"car_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0422\\\\u0440\\\\u0430\\\\u0441\\\\u0430 \\\\u042f\\\\u0440\\\\u0435\\\\u043c\\\\u0447\\\\u0435-\\\\u0412\\\\u043e\\\\u0440\\\\u043e\\\\u0445\\\\u0442\\\\u0430<\\\\/p>\\\\r\\\\n\\\"}\", \"train_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0441\\\\u0442\\\\u0430\\\\u043d\\\\u0446\\\\u0456\\\\u044f \\\\u042f\\\\u0440\\\\u0435\\\\u043c\\\\u0447\\\\u0435<\\\\/p>\\\\r\\\\n\\\"}\", \" reception_tel1\": \"+3 (093) 124-56-78\", \" reception_tel2\": \"+3 (093) 124-56-79\", \"restaurant_tel1\": \"+3 (093) 124-56-76\", \"restaurant_tel2\": \"+3 (093) 124-56-75\", \"reservation_tel1\": \"+3 (093) 124-56-74\", \"reservation_tel2\": \"+3 (093) 124-56-74\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:11:01', '2018-05-19 23:14:57', ''),
(82, 10, 18, '', '', '{\"ua\": \"Прогулянка Карпатами\"}', '{\"ua\": \"<p>прогулянка з гарними краєвидами</p>\\r\\n\"}', '{\"ua\": \"<p>Опис прогулянки</p>\\r\\n\"}', '{\"price\": \"50\", \"img_pay_service\": \"upload/articles/82/img/82-5b0089c58ccfc.jpg\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:32:05', '2018-05-19 23:32:05', ''),
(83, 10, 2, '', '', '{\"ua\": \"Гаряча Бочка\"}', '{\"ua\": \"<p>Гаряча Бочка короткий опис</p>\\r\\n\"}', '{\"ua\": \"<p>Гаряча Бочка опис</p>\\r\\n\"}', '{\"price\": \"200\", \"img_pay_service\": \"upload/articles/83/img/83-5b0089f55cce9.jpg\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:32:53', '2018-05-19 23:32:53', ''),
(84, 10, 19, '', '', '{\"ua\": \"Масаж\"}', '{\"ua\": \"<p>Масаж короткий опис</p>\\r\\n\"}', '{\"ua\": \"<p>Масаж опис</p>\\r\\n\"}', '{\"price\": \"100\", \"img_pay_service\": \"upload/articles/84/img/84-5b008a1fd7ec2.jpg\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:33:35', '2018-05-19 23:33:35', ''),
(85, 10, 18, '', '', '{\"ua\": \"Прогулянка на квадроциклах\"}', '{\"ua\": \"<p>Прогулянка на квадроциклах короткий опис</p>\\r\\n\"}', '{\"ua\": \"<p>Прогулянка на квадроциклах опис</p>\\r\\n\"}', '{\"price\": \"1000\", \"img_pay_service\": \"upload/articles/85/img/85-5b008a4dea71b.jpg\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:34:21', '2018-05-19 23:34:21', ''),
(86, 11, 2, '', '', '{\"ua\": \"Проживання в готельних номерах\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"img_fservice\": null}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:35:34', '2018-05-19 23:35:34', ''),
(87, 11, 2, '', '', '{\"ua\": \"Сніданки\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"img_fservice\": \"upload/articles/87/img/87-5b008abb8b03c.png\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:36:11', '2018-05-19 23:36:11', ''),
(88, 11, 18, '', '', '{\"ua\": \"Автостоянка\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"img_fservice\": \"upload/articles/88/img/88-5b008accb8969.png\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:36:28', '2018-05-19 23:36:28', ''),
(89, 11, 19, '', '', '{\"ua\": \"Користування басейном\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"img_fservice\": \"upload/articles/89/img/89-5b008ae185de1.png\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:36:49', '2018-05-19 23:42:33', ''),
(90, 13, 18, '', '', '{\"ua\": \"Бронювання Нового року зі знижкою -15%\"}', '{\"ua\": \"\"}', '{\"ua\": \"<p>Опис&nbsp;Бронювання Нового року зі знижкою -15%</p>\\r\\n\"}', '{\"link\": \"\", \"img_discount\": \"upload/articles/90/img/90-5b0090fe5426d.png\", \"discount_tel1\": \"3 (093) 123-56-67\", \"discount_tel2\": \"\", \"marketing_dush\": \"{\\\"ua\\\":\\\"\\\\u0437\\\\u0430\\\\u043b\\\\u0438\\\\u0448\\\\u0438\\\\u043b\\\\u043e\\\\u0441\\\\u044f 2 \\\\u043d\\\\u043e\\\\u043c\\\\u0435\\\\u0440\\\\u0438\\\"}\"}', '[]', 'null', 0, '2018-05-26 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-20 00:00:06', '2018-05-20 00:02:54', ''),
(91, 13, 18, '', '', '{\"ua\": \"Бронювання  до Різдва зі знижкою -15%\"}', '{\"ua\": \"\"}', '{\"ua\": \"<p>Опис&nbsp;Бронювання &nbsp;до Різдва зі знижкою -15%</p>\\r\\n\"}', '{\"link\": \"\", \"img_discount\": \"upload/articles/91/img/91-5b009109df3a3.jpg\", \"discount_tel1\": \"3 (093) 123-56-67\", \"discount_tel2\": \"\", \"marketing_dush\": \"{\\\"ua\\\":\\\"\\\\u0437\\\\u0430\\\\u043b\\\\u0438\\\\u0448\\\\u0438\\\\u043b\\\\u043e\\\\u0441\\\\u044f 5 \\\\u043d\\\\u043e\\\\u043c\\\\u0435\\\\u0440\\\\u0438\\\"}\"}', '[]', 'null', 0, '2018-05-26 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-20 00:00:49', '2018-05-20 00:03:05', ''),
(92, 13, 19, '', '', '{\"ua\": \"Бронювання  до травневих свят -10%\"}', '{\"ua\": \"\"}', '{\"ua\": \"<p>Опис&nbsp;Бронювання &nbsp;до травневих свят -10%</p>\\r\\n\"}', '{\"link\": \"\", \"discount_tel1\": \"3 (093) 123-56-67\", \"discount_tel2\": \"\", \"marketing_dush\": \"{\\\"ua\\\":\\\"\\\\u0437\\\\u0430\\\\u043b\\\\u0438\\\\u0448\\\\u0438\\\\u043b\\\\u043e\\\\u0441\\\\u044f 1 \\\\u043d\\\\u043e\\\\u043c\\\\u0435\\\\u0440\\\"}\"}', 'null', 'null', 0, '2018-05-26 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-20 00:01:27', '2018-05-20 00:01:27', '');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `article_parent` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` json NOT NULL,
  `short_description` json NOT NULL,
  `description` json NOT NULL,
  `imgs` json NOT NULL,
  `fields` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` json NOT NULL,
  `meta_description` json NOT NULL,
  `meta_keywords` json NOT NULL,
  `date` datetime NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `priority` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `article_parent`, `link`, `title`, `short_description`, `description`, `imgs`, `fields`, `meta_title`, `meta_description`, `meta_keywords`, `date`, `active`, `priority`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 'main', '{\"ua\": \"Головна\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"short_description\",\"active\",\"meta_title\",\"meta_description\",\"meta_keywords\"],\"attributes\":{\"slogan\":{\"publick_name\":\"Слоган\",\"type\":\"textarea-no-wysiwyg\",\"lang_active\":true,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '2018-05-11 23:59:33', 1, 0, '2018-05-10 21:13:01', '2018-05-12 01:04:26'),
(2, 0, 0, 'hotels', '{\"ru\": \"Отели\", \"ua\": \"Готелі\"}', '{\"ru\": \"\", \"ua\": \"\"}', '{\"ru\": \"\", \"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"type\",\"priority\",\"active\",\"meta_title\",\"meta_description\",\"meta_keywords\"],\"attributes\":{\"price\":{\"publick_name\":\"Ціна\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"discount\":{\"publick_name\":\"Знижка\",\"type\":\"input\",\"lang_active\":false,\"active\":true},\"hotel_photo\":{\"publick_name\":\"Фото готелю\",\"type\":\"files\",\"lang_active\":false,\"active\":false},\"location\":{\"publick_name\":\"Місцерозташування\",\"type\":\"input\",\"lang_active\":true,\"active\":false},\"marketing\":{\"publick_name\":\"Маркетингова плашка\",\"type\":\"input\",\"lang_active\":true,\"active\":false}}}', '{\"ru\": \"\", \"ua\": \"\"}', '{\"ru\": \"\", \"ua\": \"\"}', '{\"ru\": \"\", \"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-12 01:32:17', '2018-05-17 13:34:37'),
(3, 0, 0, 'advantages', '{\"ua\": \"Чому обирають саме нас?\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"priority\",\"active\"],\"attributes\":{\"advantage_img\":{\"publick_name\":\"Картинка\",\"type\":\"files\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-12 14:56:24', '2018-05-14 13:24:45'),
(4, 0, 0, 'social', '{\"ua\": \"Соціальні мережі\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 'null', '{\"base\":[\"title\",\"priority\",\"active\"],\"attributes\":{\"social_link\":{\"publick_name\":\"Ссилка на мережу\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"social_img\":{\"publick_name\":\"Картинка\",\"type\":\"files\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-12 16:32:56', '2018-05-12 16:32:56'),
(5, 0, 0, 'rules', '{\"ua\": \"Правила\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 'null', '{\"base\":[\"title\",\"short_description\",\"priority\",\"active\"],\"attributes\":{\"rule_img\":{\"publick_name\":\"Картинка\",\"type\":\"files\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-12 16:39:51', '2018-05-12 16:39:51'),
(6, 0, 0, 'slides', '{\"ua\": \"Слайдер\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 'null', '{\"base\":[\"title\",\"short_description\",\"priority\",\"active\"],\"attributes\":{\"slide_img\":{\"publick_name\":\"Картинка\",\"type\":\"files\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-12 16:46:43', '2018-05-12 16:46:43'),
(7, 2, 0, 'marketings', '{\"ua\": \"Більше ніж відпочинок\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"short_description\",\"priority\",\"active\",\"article_parent\"],\"attributes\":{\"marketing_img\":{\"publick_name\":\"Картинка\",\"type\":\"files\",\"lang_active\":false,\"active\":false},\"show_main_page\":{\"publick_name\":\"Відображення на Головній сторінці\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-12 16:55:12', '2018-05-14 13:25:34'),
(8, 2, 0, 'rooms', '{\"ua\": \"Номери\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"short_description\",\"description\",\"gallery\",\"priority\",\"active\",\"article_parent\",\"meta_title\",\"meta_description\",\"meta_keywords\"],\"attributes\":{\"equipment_room\":{\"publick_name\":\"Комплектація номеру\",\"type\":\"textarea\",\"lang_active\":true,\"active\":false},\"title_img\":{\"publick_name\":\"Напис на фото\",\"type\":\"input\",\"lang_active\":true,\"active\":false},\"wifi\":{\"publick_name\":\"Wifi\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"hair_dryer\":{\"publick_name\":\"Фен\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"tv\":{\"publick_name\":\"ТВ\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\" bathroom\":{\"publick_name\":\"Санвузол\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\" fridge\":{\"publick_name\":\"Холодильник\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"kettle\":{\"publick_name\":\"Електрочайник\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"safe\":{\"publick_name\":\"Сейф\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"fireplace\":{\"publick_name\":\"Камін\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"kitchen\":{\"publick_name\":\"Повноцінна кухня\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\" Jacuzzi\":{\"publick_name\":\"Джакузі\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"breakfast\":{\"publick_name\":\"Сніданок\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"parking\":{\"publick_name\":\"Парковка\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"pool\":{\"publick_name\":\"Басейн\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"coffe\":{\"publick_name\":\"Кава та чай\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"сhildren_room\":{\"publick_name\":\"Дитяча кімната\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"ski_storage_room\":{\"publick_name\":\"Кімната зберігання лиж\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"bowl_ski_equipment\":{\"publick_name\":\"Cушка лижнього спорядження\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"base_price\":{\"publick_name\":\"Базова ціна\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"base_count_ guests\":{\"publick_name\":\"Базова кількість гостей\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"max_count_guests\":{\"publick_name\":\"Максимальна кількість гостей\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\" surcharge\":{\"publick_name\":\"Доплата за додаткове місце\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"discount_room\":{\"publick_name\":\"Знижка\",\"type\":\"input\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-17 15:52:40', '2018-05-17 18:46:58'),
(9, 2, 0, 'contacts', '{\"ua\": \"Контакти\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 'null', '{\"base\":[\"title\",\"active\",\"article_parent\",\"meta_title\",\"meta_description\",\"meta_keywords\"],\"attributes\":{\"bus_way\":{\"publick_name\":\"Шлях автобусом\",\"type\":\"textarea\",\"lang_active\":true,\"active\":false},\"car_way\":{\"publick_name\":\"Шлях машиною\",\"type\":\"textarea\",\"lang_active\":true,\"active\":false},\"air_way\":{\"publick_name\":\"Шлях літаком\",\"type\":\"textarea\",\"lang_active\":true,\"active\":false},\"train_way\":{\"publick_name\":\"Шлях потягом\",\"type\":\"textarea\",\"lang_active\":true,\"active\":false},\"map\":{\"publick_name\":\"Карта розташування\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\" reception_tel1\":{\"publick_name\":\"Телефон рецепції №1\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\" reception_tel2\":{\"publick_name\":\"Телефон рецепції №2\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"email\":{\"publick_name\":\"Email \",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"restaurant_tel1\":{\"publick_name\":\"Телефон ресторану №1\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"restaurant_tel2\":{\"publick_name\":\"Телефон ресторану №2\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"reservation_tel1\":{\"publick_name\":\"Телефон бронювання номерів №1\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"reservation_tel2\":{\"publick_name\":\"Телефон бронювання номерів №2\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"address\":{\"publick_name\":\"Адреса\",\"type\":\"input\",\"lang_active\":true,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-19 22:42:56', '2018-05-19 22:42:56'),
(10, 2, 0, 'paid-services', '{\"ua\": \"Послуги за додаткову плату\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"short_description\",\"description\",\"priority\",\"active\",\"article_parent\",\"meta_title\",\"meta_description\",\"meta_keywords\"],\"attributes\":{\"price\":{\"publick_name\":\"Ціна \",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"img_pay_service\":{\"publick_name\":\"Картинка\",\"type\":\"files\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-19 23:23:19', '2018-05-19 23:26:16'),
(11, 2, 0, 'free-services', '{\"ua\": \"Послуги включені у вартість\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"priority\",\"active\",\"article_parent\"],\"attributes\":{\"img_fservice\":{\"publick_name\":\"Картинка\",\"type\":\"files\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-19 23:25:27', '2018-05-19 23:42:15'),
(12, 2, 0, 'reviews', '{\"ua\": \"Відгуки\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"description\",\"date\",\"priority\",\"active\",\"article_parent\"],\"attributes\":{\"author\":{\"publick_name\":\"Автор\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"source\":{\"publick_name\":\"Джерело\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"is_cleanness\":{\"publick_name\":\"Чистота\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"is_сosiness\":{\"publick_name\":\"Затишок\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"is_location\":{\"publick_name\":\"Розташування\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"is_food\":{\"publick_name\":\"Смачна кухня\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"is_wifi\":{\"publick_name\":\"Wifi\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"is_price_quality\":{\"publick_name\":\"Ціна-якісь\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"is_family_hotel\":{\"publick_name\":\"Сімейний готель\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"is_rest_children\":{\"publick_name\":\"Для відпочинку з дітьми\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"is_young\":{\"publick_name\":\"Для молодих пар\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"is_polite\":{\"publick_name\":\"Ввічливий персонал\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"cleanness\":{\"publick_name\":\"Чистота\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"сosiness\":{\"publick_name\":\"Затишок\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"location\":{\"publick_name\":\"Розташування\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"food\":{\"publick_name\":\"Смачна кухня\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"wifi\":{\"publick_name\":\"Wifi\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"price_quality\":{\"publick_name\":\"Ціна-якісь\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"family_hotel\":{\"publick_name\":\"Сімейний готель\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"rest_children\":{\"publick_name\":\"Для відпочинку з дітьми\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"young\":{\"publick_name\":\"Для молодих пар\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"polite\":{\"publick_name\":\"Ввічливий персонал\",\"type\":\"input\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-19 23:47:39', '2018-05-20 00:21:23'),
(13, 2, 0, 'discounts', '{\"ua\": \"Акції\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"description\",\"date\",\"priority\",\"active\",\"article_parent\"],\"attributes\":{\"discount_tel1\":{\"publick_name\":\"Телефон №1\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"discount_tel2\":{\"publick_name\":\"Телефон №1\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"link\":{\"publick_name\":\"Ссилка\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"marketing_dush\":{\"publick_name\":\"Маркетингова плашка\",\"type\":\"input\",\"lang_active\":true,\"active\":false},\"img_discount\":{\"publick_name\":\"Картинка\",\"type\":\"files\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-19 23:56:46', '2018-05-20 00:02:03');

-- --------------------------------------------------------

--
-- Структура таблицы `langs`
--

CREATE TABLE `langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `langs`
--

INSERT INTO `langs` (`id`, `lang`, `country`, `img`, `priority`, `active`, `created_at`, `updated_at`) VALUES
(1, 'ua', 'Україна', 'upload/langs/ua/ua-1526552036.jpg', 0, 1, '2018-05-10 17:33:56', '2018-05-17 10:13:56'),
(2, 'ru', 'Росія', 'upload/langs/ru/ru-1525973687.png', 0, 0, '2018-05-10 17:34:47', '2018-05-17 15:35:04'),
(3, 'en', 'Англія', 'upload/langs/en/en-1526563872.jpeg', 0, 0, '2018-05-10 17:35:20', '2018-05-17 13:31:12'),
(4, 'pl', 'Польща', 'upload/langs/pl/pl-1526552082.jpg', 0, 0, '2018-05-10 19:53:47', '2018-05-17 10:14:42');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_09_14_124503_create_articles_table', 1),
('2016_09_14_124813_create_categories_table', 1),
('2016_09_14_124942_create_langs_table', 1),
('2016_10_06_124518_create_texts_table', 1),
('2016_11_04_094627_create_comments_table', 1),
('2016_12_26_140118_change_text_table_soft', 1),
('2017_01_02_155628_create_orders_table', 1),
('2017_02_06_120655_create_settings_table', 2),
('2017_02_13_144141_add_parent_id_categories', 3),
('2017_02_13_174128_add_article_id', 4),
('2017_02_13_174631_add_article_id', 5),
('2017_02_14_110847_add_article_parrent_category', 6),
('2017_02_14_111446_add_article_parrent_category', 7),
('2017_02_24_163342_add_field_img', 8),
('2018_05_10_200538_article2', 9),
('2018_05_10_201901_create_article', 10),
('2018_05_10_202300_create_category', 11),
('2018_05_10_202325_create_text', 11),
('2018_05_10_202355_create_langs', 11),
('2018_05_10_202424_create_settings', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('webdesignstudio@gmail.com', 'fbde7c2090b1432792a7b0caee4dcfa185c155d6cc24beff39508ff5271224ba', '2017-02-06 14:40:36'),
('webtestingstudio@gmail.com', '15867680a325958597265f2e3a94c3458cb5068d8357bd8f7eccc82e196d167a', '2018-05-11 13:02:17'),
('raun@i.ua', 'e98ebdff6cf59a8dd40d0df9ae72f3c8d307c8163beca051a5c400e26420e0c0', '2018-05-11 14:44:46'),
('vor.ser87@gmail.com', 'f2c80c2158a182526b4def4af98cacd751788d288fb5c6dad5a2f37d412a3577', '2018-05-11 15:24:27');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `texts`
--

CREATE TABLE `texts` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(11) NOT NULL DEFAULT '0',
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` json NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `lang_active` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `texts`
--

INSERT INTO `texts` (`id`, `page_id`, `name`, `type`, `title`, `description`, `priority`, `lang_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 'tel_1', 'input', 'телефон 1', '{\"ua\": \"+38 (097) 514 4702\"}', 0, 0, '2018-05-12 20:34:10', '2018-05-12 20:34:10', NULL),
(2, 0, 'tel_2', 'input', 'телефон 2', '{\"ua\": \"+38 (097) 514 4700\"}', 0, 0, '2018-05-12 20:39:24', '2018-05-12 20:39:24', NULL),
(3, 0, 'email', 'input', 'Email', '{\"ua\": \"hotel@vedmedycya.com.ua\"}', 0, 1, '2018-05-12 20:40:17', '2018-05-13 15:08:38', NULL),
(4, 0, 'address', 'input', 'Адреса', '{\"ua\": \"Україна, м.Яремче, вул.Вітовського 5А\"}', 0, 1, '2018-05-12 20:41:44', '2018-05-12 21:17:16', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'admin', 'hotel@vedmedycya.com.ua', '$2y$10$DjLl51axgKx40JHLEuj.1OnOeX4Y57DkQVAeR3vGwq2kRUSZM7boK', '09Twa9KnkYCYaG6rCTXIVdvsM4QVgJILvdNY8KfdzIhEtj5jkUcfVoXxOjZx', '2017-08-23 16:32:04', '2018-05-11 15:29:36'),
(8, 'root', 'webtestingstudio@gmail.com', '$2y$10$wAiitX7gHFd80LOncnIlAO2MuTO8xkLnrybtelpOpRaS0yeVcCsAu', 'SyFS9ZUKsGpJYtXitdDX6pf1Tx2fRWcIPj1ayigDOzvljgbVzM19kUUbINfZ', '2017-08-23 16:58:54', '2018-05-11 15:28:56');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `langs`
--
ALTER TABLE `langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `texts`
--
ALTER TABLE `texts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
