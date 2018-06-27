-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 27 2018 г., 13:26
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
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `subdomain` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `article_id`, `type`, `name`, `title`, `short_description`, `description`, `attributes`, `imgs`, `files`, `priority`, `date`, `meta_title`, `meta_description`, `meta_keywords`, `active`, `created_at`, `updated_at`, `img`, `subdomain`) VALUES
(1, 1, 0, '', '', '{\"ua\": \"Мережа готелів \\\"Велика Ведиедиця\\\" \"}', '{\"ua\": \"<p>в Яремче та Буковелі</p>\\r\\n\"}', '{\"ua\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>\\r\\n\"}', '{\"slogan\": \"{\\\"ua\\\":\\\"<p>\\\\u0432\\\\u0456\\\\u0434\\\\u0432\\\\u0456\\\\u0434\\\\u0430\\\\u043b\\\\u0438 \\\\u043d\\\\u0430\\\\u0448 \\\\u0433\\\\u043e\\\\u0442\\\\u0435\\\\u043b\\\\u044c\\\\u043d\\\\u0438\\\\u0439 \\\\u043a\\\\u043e\\\\u043c\\\\u043f\\\\u043b\\\\u0435\\\\u043a\\\\u0441 \\\\u0437\\\\u0430 6 \\\\u0440\\\\u043e\\\\u043a\\\\u0456\\\\u0432<\\\\/p>\\\\r\\\\n\\\"}\", \"location\": \"в Яремче та Буковелі\"}', '[{\"min\": \"upload/articles/1/min/bg.png\", \"full\": \"upload/articles/1/full/bg.png\"}, {\"min\": \"upload/articles/1/min/dropdown-1.jpg\", \"full\": \"upload/articles/1/full/dropdown-1.jpg\"}, {\"min\": \"upload/articles/1/min/dropdown-2.jpg\", \"full\": \"upload/articles/1/full/dropdown-2.jpg\"}]', 'null', 0, '1970-01-01 00:00:00', '{\"ua\": \"META Title\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-10 21:23:31', '2018-06-11 16:17:58', '', NULL),
(2, 2, 0, 'mark', '', '{\"ua\": \"У Марка\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"price\": \"100\", \"discount\": \"2\", \"location\": \"{\\\"ua\\\":\\\"\\\\u042f\\\\u0440\\\\u0435\\\\u043c\\\\u0447\\\\u0435\\\"}\", \"marketing\": \"{\\\"ua\\\":\\\"\\\\u0437\\\\u0430\\\\u043b\\\\u0438\\\\u0448\\\\u0438\\\\u043b\\\\u043e\\\\u0441\\\\u044f 3 \\\\u043d\\\\u043e\\\\u043c\\\\u0435\\\\u0440\\\\u0438\\\"}\", \"type_build\": \"{\\\"ua\\\":\\\"\\\\u041a\\\\u043e\\\\u0442\\\\u0435\\\\u0434\\\\u0436\\\"}\", \"hotel_photo\": \"upload/articles/2/img/2-5b1692fae7174.JPG\"}', '[]', 'null', 5, '2018-05-12 01:41:09', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 01:37:29', '2018-06-10 13:29:39', '', 'yaremche'),
(3, 3, 19, '', '', '{\"ua\": \"басейн<br>з підігрівом\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"bb-pool features-icon\\\"></i>\", \"show_main_page\": \"1\"}', '[]', 'null', 10, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 14:57:50', '2018-06-14 17:06:16', '', NULL),
(4, 3, 19, '', '', '{\"ua\": \"рейтинг на<br>booking.com\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"<p class=\\\"booking-icon\\\">9.1</p>\", \"show_main_page\": \"1\"}', '[]', 'null', 8, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 14:58:36', '2018-06-14 20:14:48', 'upload/articles/4/main/4-1526126316.png', NULL),
(5, 3, 19, '', '', '{\"ua\": \"розваги<br>для дітей\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"bb-toy-thin features-icon\\\"></i>\", \"show_main_page\": \"1\"}', '[]', 'null', 9, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 14:59:00', '2018-06-14 20:14:23', 'upload/articles/5/main/5-1526126340.png', NULL),
(7, 4, 0, '', '', '{\"ua\": \"facebook\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"fab fa-facebook-f fa-2x\\\"></i>\", \"social_link\": \"https://www.facebook.com/VelykaVedmedycya/\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:34:46', '2018-06-05 18:01:33', '', NULL),
(8, 4, 0, '', '', '{\"ua\": \"Instagram\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"fab fa-instagram fa-2x\\\"></i>\", \"social_link\": \"https://www.instagram.com/vedmedycya.hotel/\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:35:27', '2018-06-05 18:01:57', '', NULL),
(9, 4, 0, '', '', '{\"ua\": \"Youtube\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"fab fa-youtube fa-2x\\\"></i>\", \"social_link\": \"https://www.youtube.com/channel/UCkrzJLOkxeOfSNXaceEweMg\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:36:15', '2018-06-05 18:02:25', '', NULL),
(10, 5, 0, '', '', '{\"ua\": \"Заселення\"}', '{\"ua\": \"<p>Опис правила</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"far fa-clock text-orange rules-icon\\\"></i>\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:41:12', '2018-06-14 22:14:07', '', NULL),
(11, 5, 0, '', '', '{\"ua\": \"Куріння\"}', '{\"ua\": \"<p>Опис правила</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"fas fa-smoking text-orange rules-icon \\\"></i>\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:41:28', '2018-06-14 22:14:33', '', NULL),
(12, 5, 0, '', '', '{\"ua\": \"Скасування\"}', '{\"ua\": \"<p>Опис правила</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"fas fa-ban text-orange rules-icon\\\"></i>\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:41:41', '2018-06-14 22:25:52', '', NULL),
(13, 6, 18, '', '', '{\"ua\": \"Слайд 1\"}', '{\"ua\": \"<p>ВАШ ІДЕАЛЬНИЙ ВІДПОЧИНОК<br />\\r\\nЧЕКАЄ ВАС ТУТ</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"slide_img\": \"upload/articles/13/img/13-5b1bd790af76a.jpg\", \"show_main_page\": \"1\"}', '[]', 'null', 10, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:47:42', '2018-06-12 12:46:04', '', NULL),
(14, 6, 19, '', '', '{\"ua\": \"Слайд 2\"}', '{\"ua\": \"<p>СПРАВЖНІЙ ЕКО-ГОТЕЛЬ<br />\\r\\nЧЕКАЄ ВАС ТУТ</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"slide_img\": \"upload/articles/14/img/14-5b1bd7ca7085b.jpg\", \"show_main_page\": \"0\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:48:16', '2018-06-11 17:53:32', '', NULL),
(15, 6, 19, '', '', '{\"ua\": \"Слайд 3\"}', '{\"ua\": \"<p>СПАРАВЖНІЙ ЕКО-ГОТЕЛЬ</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"slide_img\": \"upload/articles/15/img/15-5b1bd7f112b3d.jpg\", \"show_main_page\": \"1\"}', '[]', 'null', 10, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:48:30', '2018-06-12 00:26:42', '', NULL),
(16, 7, 18, '', '', '{\"ua\": \"Прогулянка Карпатами\"}', '{\"ua\": \"<p>Опис прогулянки</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"marketing_img\": \"upload/articles/16/img/16-5b1d1e01e4e3e.jpg\", \"show_main_page\": \"1\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:58:58', '2018-06-13 16:48:06', '', NULL),
(17, 7, 18, '', '', '{\"ua\": \"Катання на лижах\"}', '{\"ua\": \"<p>Опис катання на лижах</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"marketing_img\": \"upload/articles/17/img/17-5af6f35322f17.jpg\", \"show_main_page\": \"1\"}', '[]', 'null', 10, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 16:59:47', '2018-06-13 12:38:03', '', NULL),
(18, 2, 0, 'vedmegyi-dvir', '', '{\"ua\": \"Ведмежий Двір\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"map\": \"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d386950.6511603643!2d-73.70231446529533!3d40.738882125234106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNueva+York!5e0!3m2!1ses-419!2sus!4v1445032011908\\\" width=\\\"100%\\\" height=\\\"400\\\" frameborder=\\\"0\\\" class=\\\"border-0\\\" allowfullscreen\", \"price\": \"300\", \"discount\": \"20\", \"location\": \"{\\\"ua\\\":\\\"\\\\u0411\\\\u0443\\\\u043a\\\\u043e\\\\u0432\\\\u0435\\\\u043b\\\\u044c\\\"}\", \"marketing\": \"{\\\"ua\\\":\\\"\\\\u0437\\\\u0430\\\\u043b\\\\u0438\\\\u0448\\\\u0438\\\\u043b\\\\u043e\\\\u0441\\\\u044f 3 \\\\u043d\\\\u043e\\\\u043c\\\\u0435\\\\u0440\\\\u0438\\\"}\", \"type_build\": \"{\\\"ua\\\":\\\"\\\\u0413\\\\u043e\\\\u0442\\\\u0435\\\\u043b\\\\u044c\\\"}\", \"hotel_photo\": \"upload/articles/18/img/18-5b16934674147.jpg\"}', '[]', 'null', 7, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 17:02:21', '2018-06-15 12:12:36', '', 'bukovel'),
(19, 2, 0, 'velyka-vedmedycya', '', '{\"ua\": \"Велика Ведмедиця\"}', '{\"ua\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"map\": \"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d386950.6511603643!2d-73.70231446529533!3d40.738882125234106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNueva+York!5e0!3m2!1ses-419!2sus!4v1445032011908\\\" width=\\\"100%\\\" height=\\\"400\\\" frameborder=\\\"0\\\" class=\\\"border-0\\\" allowfullscreen\", \"price\": \"400\", \"discount\": \"\", \"location\": \"{\\\"ua\\\":\\\"\\\\u042f\\\\u0440\\\\u0435\\\\u043c\\\\u0447\\\\u0435\\\"}\", \"marketing\": \"{\\\"ua\\\":\\\"\\\"}\", \"type_build\": \"{\\\"ua\\\":\\\"\\\\u0413\\\\u043e\\\\u0442\\\\u0435\\\\u043b\\\\u044c \\\"}\", \"hotel_photo\": \"upload/articles/19/img/19-5b16936426a76.JPG\"}', '[]', 'null', 4, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 17:04:48', '2018-06-15 12:13:15', '', 'yaremche'),
(20, 7, 19, '', '', '{\"ua\": \"Катання на конях\"}', '{\"ua\": \"<p>Опис</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"marketing_img\": \"upload/articles/20/img/20-5af6f547d6f20.jpg\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 17:08:07', '2018-05-12 17:08:07', '', NULL),
(21, 7, 19, '', '', '{\"ua\": \"Катання на конях\"}', '{\"ua\": \"<p>Опис</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"marketing_img\": \"upload/articles/21/img/21-5af6f555f3fdc.jpg\", \"show_main_page\": \"0\"}', '[{\"min\": \"upload/articles/21/min/img-2(1).png\", \"full\": \"upload/articles/21/full/img-2(1).png\"}, {\"min\": \"upload/articles/21/min/img-2.png\", \"full\": \"upload/articles/21/full/img-2.png\"}]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 17:08:21', '2018-06-13 16:48:25', '', NULL),
(22, 7, 19, '', '', '{\"ua\": \"Катання на квадроциклах\"}', '{\"ua\": \"<p>Опис</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"marketing_img\": \"upload/articles/22/img/22-5af6f567b2f05.jpg\", \"show_main_page\": \"1\"}', '[{\"min\": \"upload/articles/22/min/img-1.png\", \"full\": \"upload/articles/22/full/img-1.png\"}, {\"min\": \"upload/articles/22/min/img-2.png\", \"full\": \"upload/articles/22/full/img-2.png\"}]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 17:08:39', '2018-06-13 16:47:49', '', NULL),
(23, 7, 19, '', '', '{\"ua\": \"Катання на квадроциклах\"}', '{\"ua\": \"<p>Опис</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"marketing_img\": \"upload/articles/23/img/23-5af6f57388b67.jpg\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-12 17:08:51', '2018-05-12 17:08:51', '', NULL),
(77, 8, 18, '', '', '{\"ua\": \"Напівлюкс із каміном\"}', '{\"ua\": \"\"}', '{\"ua\": \"<p>Двухместный номер полулюкс 1-й категории с дополнительными спальными местами на раскладном диване. Стоимость дополнительных мест зависит от возрастной категории лиц.&nbsp;<strong>Номер в отеле</strong>&nbsp;- №10 (28 м.кв., вид с номера на внутренний двор).&nbsp;<strong>Комплектация номера:</strong>&nbsp;двуспальная кровать, двуспальный диван, спутниковое ТВ, холодильная камера, электрочайник (чай / кофе бесплатно), санузел (душевая, туалет, умывальник, гигиенический набор, фен, полотенца).</p>\\r\\n\"}', '{\"tv\": \"1\", \"pool\": \"0\", \"safe\": \"0\", \"wifi\": \"1\", \"coffe\": \"0\", \"fridge\": \"0\", \"kettle\": \"1\", \"Jacuzzi\": \"0\", \"kitchen\": \"0\", \"parking\": \"0\", \"bathroom\": \"0\", \"breakfast\": \"1\", \"fireplace\": \"0\", \"surcharge\": \"\", \"title_img\": \"{\\\"ua\\\":\\\"\\\\u041a\\\\u0456\\\\u043c\\\\u043d\\\\u0430\\\\u0442\\\\u0430 \\\\u043d\\\\u0430\\\\u043f\\\\u0456\\\\u0432\\\\u043b\\\\u044e\\\\u043a\\\\u0441\\\"}\", \"base_price\": \"4500\", \"hair_dryer\": \"1\", \"room_photo\": \"upload/articles/77/img/77-5b211aeef2f61.jpg\", \"discount_room\": \"5\", \"equipment_room\": \"{\\\"ua\\\":\\\"<ul>\\\\r\\\\n\\\\t<li>\\\\u0414\\\\u0432\\\\u043e\\\\u043a\\\\u0456\\\\u043c\\\\u043d\\\\u0430\\\\u0442\\\\u043d\\\\u0438\\\\u0439 \\\\u0434\\\\u0432\\\\u043e\\\\u0440\\\\u0456\\\\u0432\\\\u043d\\\\u0435\\\\u0432\\\\u0438\\\\u0439 \\\\u043d\\\\u043e\\\\u043c\\\\u0435\\\\u0440<\\\\/li>\\\\r\\\\n\\\\t<li>\\\\u041f\\\\u0440\\\\u0438\\\\u0445\\\\u043e\\\\u0436\\\\u0430 \\\\u0437 \\\\u043f\\\\u0440\\\\u043e\\\\u0441\\\\u0442\\\\u043e\\\\u0440\\\\u043e\\\\u044e \\\\u0448\\\\u0430\\\\u0444\\\\u043e\\\\u044e \\\\u0434\\\\u043b\\\\u044f \\\\u043e\\\\u0434\\\\u044f\\\\u0433\\\\u0443<\\\\/li>\\\\r\\\\n\\\\t<li>\\\\u0412\\\\u0456\\\\u0442\\\\u0430\\\\u043b\\\\u044c\\\\u043d\\\\u044f<\\\\/li>\\\\r\\\\n\\\\t<li>\\\\u0417\\\\u043e\\\\u043d\\\\u0430 \\\\u0432\\\\u0456\\\\u0434\\\\u043f\\\\u043e\\\\u0447\\\\u0438\\\\u043d\\\\u043a\\\\u0443 \\\\u0437\\\\u0456 \\\\u0441\\\\u0442\\\\u043e\\\\u043b\\\\u0438\\\\u043a\\\\u043e\\\\u043c \\\\u0456 \\\\u0434\\\\u0432\\\\u043e\\\\u043c\\\\u0430 \\\\u043a\\\\u0440\\\\u0456\\\\u0441\\\\u043b\\\\u0430\\\\u043c\\\\u0438<\\\\/li>\\\\r\\\\n\\\\t<li>\\\\u0412\\\\u043b\\\\u0430\\\\u0441\\\\u043d\\\\u0430 \\\\u043a\\\\u0443\\\\u0445\\\\u043d\\\\u044f, \\\\u043e\\\\u0431\\\\u043b\\\\u0430\\\\u0434\\\\u043d\\\\u0430\\\\u043d\\\\u0430 \\\\u043c\\\\u0435\\\\u0431\\\\u043b\\\\u044f\\\\u043c\\\\u0438, \\\\u0440\\\\u0430\\\\u043a\\\\u043e\\\\u0432\\\\u0438\\\\u043d\\\\u043e\\\\u044e \\\\u0442\\\\u0430 \\\\u043d\\\\u0430\\\\u0431\\\\u043e\\\\u0440\\\\u043e\\\\u043c \\\\u043f\\\\u043e\\\\u0441\\\\u0443\\\\u0434\\\\u0443<\\\\/li>\\\\r\\\\n\\\\t<li>1 \\\\u0432\\\\u0435\\\\u043b\\\\u0438\\\\u043a\\\\u0435 \\\\u0434\\\\u0432\\\\u043e\\\\u0441\\\\u043f\\\\u0430\\\\u043b\\\\u044c\\\\u043d\\\\u0435 \\\\u043b\\\\u0456\\\\u0436\\\\u043a\\\\u043e \\\\u0456 \\\\u0440\\\\u043e\\\\u0437\\\\u043a\\\\u043b\\\\u0430\\\\u0434\\\\u043d\\\\u0438\\\\u0439 \\\\u0434\\\\u0438\\\\u0432\\\\u0430\\\\u043d<\\\\/li>\\\\r\\\\n\\\\t<li>\\\\u041f\\\\u0440\\\\u0438\\\\u043b\\\\u0456\\\\u0436\\\\u043a\\\\u043e\\\\u0432\\\\u0456 \\\\u0442\\\\u0443\\\\u043c\\\\u0431\\\\u0438<\\\\/li>\\\\r\\\\n\\\\t<li>\\\\u0422\\\\u0435\\\\u043b\\\\u0435\\\\u0432\\\\u0456\\\\u0437\\\\u043e\\\\u0440<\\\\/li>\\\\r\\\\n\\\\t<li>\\\\u0421\\\\u0430\\\\u043d\\\\u0432\\\\u0443\\\\u0437\\\\u043e\\\\u043b \\\\u0437 \\\\u0434\\\\u0443\\\\u0448\\\\u043e\\\\u0432\\\\u043e\\\\u044e \\\\u043a\\\\u0430\\\\u0431\\\\u0456\\\\u043d\\\\u043e\\\\u044e<\\\\/li>\\\\r\\\\n<\\\\/ul>\\\\r\\\\n\\\"}\", \"сhildren_room\": \"0\", \"show_hotel_page\": \"1\", \"max_count_guests\": \"4\", \"ski_storage_room\": \"1\", \"base_count_ guests\": \"2\", \"bowl_ski_equipment\": \"0\"}', '[{\"min\": \"upload/articles/77/min/1.jpg\", \"full\": \"upload/articles/77/full/1.jpg\"}, {\"min\": \"upload/articles/77/min/2.jpg\", \"full\": \"upload/articles/77/full/2.jpg\"}, {\"min\": \"upload/articles/77/min/3.jpg\", \"full\": \"upload/articles/77/full/3.jpg\"}]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-17 18:45:52', '2018-06-15 10:53:26', '', NULL),
(78, 8, 2, '', '', '{\"ua\": \"Апартаменти у Марка\"}', '{\"ua\": \"<p>Короткий опис</p>\\r\\n\"}', '{\"ua\": \"<p>Опис</p>\\r\\n\"}', '{\"tv\": \"1\", \"pool\": \"0\", \"safe\": \"0\", \"wifi\": \"1\", \"coffe\": \"0\", \"fridge\": \"0\", \"kettle\": \"0\", \"Jacuzzi\": \"0\", \"kitchen\": \"1\", \"parking\": \"1\", \"bathroom\": \"0\", \"breakfast\": \"0\", \"fireplace\": \"0\", \"surcharge\": \"\", \"title_img\": \"{\\\"ua\\\":\\\"\\\\u041d\\\\u0430\\\\u043f\\\\u0438\\\\u0441 \\\\u043d\\\\u0430 \\\\u0444\\\\u043e\\\\u0442\\\\u043e\\\"}\", \"base_price\": \"10000\", \"hair_dryer\": \"1\", \"room_photo\": \"upload/articles/78/img/78-5b1fdabe534d5.jpg\", \"discount_room\": \"10\", \"equipment_room\": \"{\\\"ua\\\":\\\"<p>\\\\u0446\\\\u0435\\\\u0443\\\\u043a\\\\u0446\\\\u0435\\\\u0443<\\\\/p>\\\\r\\\\n\\\\r\\\\n<p>\\\\u0443\\\\u0446\\\\u0443\\\\u0446\\\\u0443<\\\\/p>\\\\r\\\\n\\\\r\\\\n<p>\\\\u0446\\\\u0443<\\\\/p>\\\\r\\\\n\\\\r\\\\n<p>\\\\u0446\\\\u0443<\\\\/p>\\\\r\\\\n\\\\r\\\\n<p>\\\\u0446\\\\u0443<\\\\/p>\\\\r\\\\n\\\\r\\\\n<p>\\\\u0446\\\\u0443\\\\u0446<\\\\/p>\\\\r\\\\n\\\\r\\\\n<p>\\\\u0443<\\\\/p>\\\\r\\\\n\\\"}\", \"сhildren_room\": \"0\", \"show_hotel_page\": \"1\", \"max_count_guests\": \"10\", \"ski_storage_room\": \"1\", \"base_count_ guests\": \"4\", \"bowl_ski_equipment\": \"0\"}', '[{\"min\": \"upload/articles/78/min/familyresort.jpg\", \"full\": \"upload/articles/78/full/familyresort.jpg\"}, {\"min\": \"upload/articles/78/min/idealrelax.jpg\", \"full\": \"upload/articles/78/full/idealrelax.jpg\"}, {\"min\": \"upload/articles/78/min/owncotedge.jpg\", \"full\": \"upload/articles/78/full/owncotedge.jpg\"}]', 'null', 1, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-17 18:52:46', '2018-06-15 10:52:46', '', NULL),
(79, 9, 18, '', '', '{\"ua\": \"Контакти готелю Ведмежий Двір\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"map\": \"test\", \"email\": \"hotel@example.com\", \"address\": \"{\\\"ua\\\":\\\"\\\\u0423\\\\u043a\\\\u0440\\\\u0430\\\\u0457\\\\u043d\\\\u0430, \\\\u0406\\\\u0432\\\\u0430\\\\u043d\\\\u043e\\\\u0444\\\\u0440\\\\u0430\\\\u043d\\\\u043a\\\\u0456\\\\u0432\\\\u0441\\\\u044c\\\\u043a\\\\u0430 \\\\u043e\\\\u0431\\\\u043b\\\\u0430\\\\u0441\\\\u0442\\\\u044c,\\\\u041f\\\\u043e\\\\u043b\\\\u044f\\\\u043d\\\\u0438\\\\u0446\\\\u044f 1\\\"}\", \"air_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0406\\\\u0432\\\\u0430\\\\u043d\\\\u043e-\\\\u0424\\\\u0440\\\\u0430\\\\u043d\\\\u043a\\\\u0456\\\\u0432\\\\u0441\\\\u044c\\\\u043a<\\\\/p>\\\\r\\\\n\\\"}\", \"bus_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0407\\\\u0445\\\\u0430\\\\u0442\\\\u0438 \\\\u0434\\\\u043e \\\\u0411\\\\u0443\\\\u043a\\\\u043e\\\\u0432\\\\u0435\\\\u043b\\\\u044e<\\\\/p>\\\\r\\\\n\\\"}\", \"car_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0422\\\\u0440\\\\u0430\\\\u0441\\\\u0430 \\\\u042f\\\\u0440\\\\u0435\\\\u043c\\\\u0447\\\\u0435-\\\\u0412\\\\u043e\\\\u0440\\\\u043e\\\\u0445\\\\u0442\\\\u0430<\\\\/p>\\\\r\\\\n\\\"}\", \"train_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0441\\\\u0442\\\\u0430\\\\u043d\\\\u0446\\\\u0456\\\\u044f \\\\u042f\\\\u0440\\\\u0435\\\\u043c\\\\u0447\\\\u0435<\\\\/p>\\\\r\\\\n\\\"}\", \" reception_tel1\": \"+3 (093) 124-56-78\", \" reception_tel2\": \"+3 (093) 124-56-79\", \"restaurant_tel1\": \"+3 (093) 124-56-76\", \"restaurant_tel2\": \"+3 (093) 124-56-75\", \"reservation_tel1\": \"+3 (093) 124-56-74\", \"reservation_tel2\": \"+3 (093) 124-56-74\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:10:42', '2018-05-19 23:14:03', '', NULL),
(80, 9, 19, '', '', '{\"ua\": \"Контакти готелю Велика Ведмедиця\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"map\": \"test\", \"email\": \"hotel@example.com\", \"address\": \"{\\\"ua\\\":\\\"\\\\u0423\\\\u043a\\\\u0440\\\\u0430\\\\u0457\\\\u043d\\\\u0430, \\\\u0406\\\\u0432\\\\u0430\\\\u043d\\\\u043e\\\\u0444\\\\u0440\\\\u0430\\\\u043d\\\\u043a\\\\u0456\\\\u0432\\\\u0441\\\\u044c\\\\u043a\\\\u0430 \\\\u043e\\\\u0431\\\\u043b\\\\u0430\\\\u0441\\\\u0442\\\\u044c,\\\\u041f\\\\u043e\\\\u043b\\\\u044f\\\\u043d\\\\u0438\\\\u0446\\\\u044f 1\\\"}\", \"air_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0406\\\\u0432\\\\u0430\\\\u043d\\\\u043e-\\\\u0424\\\\u0440\\\\u0430\\\\u043d\\\\u043a\\\\u0456\\\\u0432\\\\u0441\\\\u044c\\\\u043a<\\\\/p>\\\\r\\\\n\\\"}\", \"bus_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0407\\\\u0445\\\\u0430\\\\u0442\\\\u0438 \\\\u0434\\\\u043e \\\\u0411\\\\u0443\\\\u043a\\\\u043e\\\\u0432\\\\u0435\\\\u043b\\\\u044e<\\\\/p>\\\\r\\\\n\\\"}\", \"car_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0422\\\\u0440\\\\u0430\\\\u0441\\\\u0430 \\\\u042f\\\\u0440\\\\u0435\\\\u043c\\\\u0447\\\\u0435-\\\\u0412\\\\u043e\\\\u0440\\\\u043e\\\\u0445\\\\u0442\\\\u0430<\\\\/p>\\\\r\\\\n\\\"}\", \"train_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0441\\\\u0442\\\\u0430\\\\u043d\\\\u0446\\\\u0456\\\\u044f \\\\u042f\\\\u0440\\\\u0435\\\\u043c\\\\u0447\\\\u0435<\\\\/p>\\\\r\\\\n\\\"}\", \" reception_tel1\": \"+3 (093) 124-56-78\", \" reception_tel2\": \"+3 (093) 124-56-79\", \"restaurant_tel1\": \"+3 (093) 124-56-76\", \"restaurant_tel2\": \"+3 (093) 124-56-75\", \"reservation_tel1\": \"+3 (093) 124-56-74\", \"reservation_tel2\": \"+3 (093) 124-56-74\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:10:53', '2018-05-19 23:14:34', '', NULL),
(81, 9, 2, '', '', '{\"ua\": \"Контакти готелю У Марка\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"map\": \"test\", \"email\": \"hotel@example.com\", \"address\": \"{\\\"ua\\\":\\\"\\\\u0423\\\\u043a\\\\u0440\\\\u0430\\\\u0457\\\\u043d\\\\u0430, \\\\u0406\\\\u0432\\\\u0430\\\\u043d\\\\u043e-\\\\u0424\\\\u0440\\\\u0430\\\\u043d\\\\u043a\\\\u0456\\\\u0432\\\\u0441\\\\u044c\\\\u043a\\\\u0430 \\\\u043e\\\\u0431\\\\u043b\\\\u0430\\\\u0441\\\\u0442\\\\u044c,\\\\u041f\\\\u043e\\\\u043b\\\\u044f\\\\u043d\\\\u0438\\\\u0446\\\\u044f 1\\\"}\", \"air_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0406\\\\u0432\\\\u0430\\\\u043d\\\\u043e-\\\\u0424\\\\u0440\\\\u0430\\\\u043d\\\\u043a\\\\u0456\\\\u0432\\\\u0441\\\\u044c\\\\u043a<\\\\/p>\\\\r\\\\n\\\"}\", \"bus_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0407\\\\u0445\\\\u0430\\\\u0442\\\\u0438 \\\\u0434\\\\u043e \\\\u0411\\\\u0443\\\\u043a\\\\u043e\\\\u0432\\\\u0435\\\\u043b\\\\u044e<\\\\/p>\\\\r\\\\n\\\"}\", \"car_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0422\\\\u0440\\\\u0430\\\\u0441\\\\u0430 \\\\u042f\\\\u0440\\\\u0435\\\\u043c\\\\u0447\\\\u0435-\\\\u0412\\\\u043e\\\\u0440\\\\u043e\\\\u0445\\\\u0442\\\\u0430<\\\\/p>\\\\r\\\\n\\\"}\", \"train_way\": \"{\\\"ua\\\":\\\"<p>\\\\u0441\\\\u0442\\\\u0430\\\\u043d\\\\u0446\\\\u0456\\\\u044f \\\\u042f\\\\u0440\\\\u0435\\\\u043c\\\\u0447\\\\u0435<\\\\/p>\\\\r\\\\n\\\"}\", \" reception_tel1\": \"+3 (093) 124-56-78\", \" reception_tel2\": \"+3 (093) 124-56-79\", \"restaurant_tel1\": \"+3 (093) 124-56-76\", \"restaurant_tel2\": \"+3 (093) 124-56-75\", \"reservation_tel1\": \"+3 (093) 124-56-74\", \"reservation_tel2\": \"+3 (093) 124-56-74\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:11:01', '2018-05-19 23:14:57', '', NULL),
(82, 10, 18, '', '', '{\"ua\": \"Прогулянка Карпатами\"}', '{\"ua\": \"<p>прогулянка з гарними краєвидами</p>\\r\\n\"}', '{\"ua\": \"<p>Опис прогулянки</p>\\r\\n\"}', '{\"price\": \"50\", \"img_pay_service\": \"upload/articles/82/img/82-5b0089c58ccfc.jpg\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:32:05', '2018-05-19 23:32:05', '', NULL),
(83, 10, 2, '', '', '{\"ua\": \"Гаряча Бочка\"}', '{\"ua\": \"<p>Гаряча Бочка короткий опис</p>\\r\\n\"}', '{\"ua\": \"<p>Гаряча Бочка опис</p>\\r\\n\"}', '{\"price\": \"200\", \"img_pay_service\": \"upload/articles/83/img/83-5b0089f55cce9.jpg\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:32:53', '2018-05-19 23:32:53', '', NULL),
(84, 10, 19, '', '', '{\"ua\": \"Масаж\"}', '{\"ua\": \"<p>Масаж короткий опис</p>\\r\\n\"}', '{\"ua\": \"<p>Масаж опис</p>\\r\\n\"}', '{\"price\": \"100\", \"img_pay_service\": \"upload/articles/84/img/84-5b008a1fd7ec2.jpg\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:33:35', '2018-05-19 23:33:35', '', NULL),
(85, 10, 18, '', '', '{\"ua\": \"Прогулянка на квадроциклах\"}', '{\"ua\": \"<p>Прогулянка на квадроциклах короткий опис</p>\\r\\n\"}', '{\"ua\": \"<p>Прогулянка на квадроциклах опис</p>\\r\\n\"}', '{\"price\": \"1000\", \"img_pay_service\": \"upload/articles/85/img/85-5b008a4dea71b.jpg\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:34:21', '2018-05-19 23:34:21', '', NULL),
(86, 11, 19, '', '', '{\"ua\": \"Проживання в готельних номерах\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"\"}', '[]', 'null', 10, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:35:34', '2018-06-13 18:37:06', '', NULL),
(87, 11, 19, '', '', '{\"ua\": \"Безкоштовні сніданки\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"bb-breakfast fa-5x\\\"></i>\"}', '[]', 'null', 9, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:36:11', '2018-06-13 18:37:18', '', NULL),
(88, 11, 18, '', '', '{\"ua\": \"Автостоянка\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"img_fservice\": \"upload/articles/88/img/88-5b008accb8969.png\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:36:28', '2018-05-19 23:36:28', '', NULL),
(89, 11, 19, '', '', '{\"ua\": \"Користування басейном\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"bb-pool fa-5x\\\"></i>\"}', '[]', 'null', 6, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-19 23:36:49', '2018-06-13 18:41:11', '', NULL),
(90, 13, 18, '', '', '{\"ua\": \"Бронювання Нового року зі знижкою -15%\"}', '{\"ua\": \"\"}', '{\"ua\": \"<p>Опис&nbsp;Бронювання Нового року зі знижкою -15%</p>\\r\\n\"}', '{\"link\": \"\", \"img_discount\": \"upload/articles/90/img/90-5b0090fe5426d.png\", \"discount_tel1\": \"3 (093) 123-56-67\", \"discount_tel2\": \"\", \"marketing_dush\": \"{\\\"ua\\\":\\\"\\\\u0437\\\\u0430\\\\u043b\\\\u0438\\\\u0448\\\\u0438\\\\u043b\\\\u043e\\\\u0441\\\\u044f 2 \\\\u043d\\\\u043e\\\\u043c\\\\u0435\\\\u0440\\\\u0438\\\"}\"}', '[]', 'null', 0, '2018-05-26 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-20 00:00:06', '2018-05-20 00:02:54', '', NULL),
(91, 13, 18, '', '', '{\"ua\": \"Бронювання  до Різдва зі знижкою -15%\"}', '{\"ua\": \"\"}', '{\"ua\": \"<p>Опис&nbsp;Бронювання &nbsp;до Різдва зі знижкою -15%</p>\\r\\n\"}', '{\"link\": \"\", \"img_discount\": \"upload/articles/91/img/91-5b009109df3a3.jpg\", \"discount_tel1\": \"3 (093) 123-56-67\", \"discount_tel2\": \"\", \"marketing_dush\": \"{\\\"ua\\\":\\\"\\\\u0437\\\\u0430\\\\u043b\\\\u0438\\\\u0448\\\\u0438\\\\u043b\\\\u043e\\\\u0441\\\\u044f 5 \\\\u043d\\\\u043e\\\\u043c\\\\u0435\\\\u0440\\\\u0438\\\"}\"}', '[]', 'null', 0, '2018-05-26 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-20 00:00:49', '2018-05-20 00:03:05', '', NULL),
(92, 13, 19, '', '', '{\"ua\": \"Бронювання  до травневих свят -10%\"}', '{\"ua\": \"\"}', '{\"ua\": \"<p>Опис&nbsp;Бронювання &nbsp;до травневих свят -10%</p>\\r\\n\"}', '{\"link\": \"\", \"discount_tel1\": \"3 (093) 123-56-67\", \"discount_tel2\": \"\", \"marketing_dush\": \"{\\\"ua\\\":\\\"\\\\u0437\\\\u0430\\\\u043b\\\\u0438\\\\u0448\\\\u0438\\\\u043b\\\\u043e\\\\u0441\\\\u044f 1 \\\\u043d\\\\u043e\\\\u043c\\\\u0435\\\\u0440\\\"}\"}', 'null', 'null', 0, '2018-05-26 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-20 00:01:27', '2018-05-20 00:01:27', '', NULL),
(95, 12, 18, '', '', '{\"ua\": \"Ведмежий двір\"}', '{\"ua\": \"\"}', '{\"ua\": \"<p>Відпочив супер. Раджу!</p>\\r\\n\"}', '{\"food\": \"\", \"name\": \"Андрій\", \"wifi\": \"\", \"young\": \"\", \"polite\": \"\", \"source\": \"Facebook\", \"surname\": \"Сидоров\", \"location\": \"4\", \"cleanness\": \"5\", \"сosiness\": \"5\", \"visit_date\": \"05/15/2018 - 05/22/2018\", \"family_hotel\": \"\", \"profile_foto\": \"upload/articles/95/img/95-5b1d4843e11db.jpg\", \"price_quality\": \"\", \"rest_children\": \"\", \"answer_reviews\": \"\", \"photo_1_review\": null, \"photo_2_review\": null, \"photo_3_review\": null, \"photo_4_review\": null, \"photo_5_review\": null, \"photo_6_review\": null, \"photo_7_review\": null, \"photo_8_review\": null, \"photo_9_review\": null, \"photo_10_review\": null, \"date_create_review\": \"12-06-2018\", \"date_answer_reviews\": \"\"}', '[]', 'null', 0, '2018-01-01 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-22 23:13:41', '2018-06-15 16:11:17', '', NULL),
(96, 14, 0, '', '', '{\"ua\": \"Сторінка з відкуками\"}', '{\"ua\": \"<p>Більше 100000 людей відвідали велику ведмедицю</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"is_food\": \"1\", \"is_wifi\": \"0\", \"is_young\": \"0\", \"is_polite\": \"0\", \"is_location\": \"1\", \"is_cleanness\": \"1\", \"is_сosiness\": \"1\", \"is_family_hotel\": \"0\", \"is_price_quality\": \"0\", \"is_rest_children\": \"0\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-22 23:23:42', '2018-06-15 16:34:02', '', NULL),
(97, 12, 0, '', '', '{\"ua\": \"Тест\"}', '{\"ua\": \"\"}', '{\"ua\": \"<p>Lorem&nbsp;LoremLorem&nbsp;Lorem&nbsp;LoremLorem&nbsp;LoremLorem&nbsp;Lorem&nbsp;Lorem&nbsp;LoremLoremLoremLoremLoremLoremLorem&nbsp; &nbsp; &nbsp;LoremLoremLoremLoremLorem&nbsp;LoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLorem</p>\\r\\n\"}', '{\"food\": \"\", \"name\": \"\", \"wifi\": \"\", \"young\": \"\", \"polite\": \"\", \"source\": \"\", \"surname\": \"\", \"location\": \"\", \"cleanness\": \"\", \"сosiness\": \"\", \"visit_date\": \"\", \"family_hotel\": \"\", \"profile_foto\": null, \"price_quality\": \"\", \"rest_children\": \"\", \"answer_reviews\": \"\", \"photo_1_review\": \"upload/articles/97/img/97-5b067f90d0afe.jpg\", \"photo_2_review\": \"upload/articles/97/img/97-5b067f46ce9dc.jpg\", \"photo_3_review\": \"upload/articles/97/img/97-5b067f46cf45c.jpg\", \"photo_4_review\": null, \"photo_5_review\": null, \"photo_6_review\": null, \"photo_7_review\": null, \"photo_8_review\": null, \"photo_9_review\": null, \"photo_10_review\": null, \"date_create_review\": \"16-05-2018\", \"date_answer_reviews\": \"22-05-2018\"}', '[]', 'null', 0, '1970-01-01 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-05-22 23:45:33', '2018-06-26 20:49:33', '', NULL),
(98, 15, 0, '', '', '{\"ua\": \"viber\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"fab fa-viber fa-lg\\\"></i>\", \"icon_footer\": \"<i class=\\\"fab fa-viber text-white mr-1\\\"></i>\", \"icon_mobile\": \"<i class=\\\"fab fa-viber fa-2x color-viber\\\"></i>\", \"messenger_link\": \"viber://add?number=38067111111\"}', '[]', 'null', 3, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-04 16:53:21', '2018-06-09 19:23:28', '', NULL),
(99, 15, 0, '', '', '{\"ua\": \"whatsapp\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"fab fa-whatsapp fa-lg mx-3\\\"></i>\", \"icon_footer\": \"<i class=\\\"fab fa-whatsapp text-white mr-1\\\"></i>\", \"icon_mobile\": \"<i class=\\\"fab fa-whatsapp fa-2x mx-4 color-whatsapp\\\"></i>\", \"messenger_link\": \"whatsapp://add?number=38067111111\"}', '[]', 'null', 2, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-04 16:53:56', '2018-06-09 19:23:41', '', NULL),
(100, 15, 0, '', '', '{\"ua\": \"telegram\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"fab fa-telegram-plane fa-lg\\\"></i>\", \"icon_footer\": \"<i class=\\\"fab fa-telegram-plane text-white\\\"></i>\", \"icon_mobile\": \"<i class=\\\"fab fa-telegram-plane fa-2x color-telegram\\\"></i>\", \"messenger_link\": \"whatsapp://add?number=38067111111\"}', '[]', 'null', 1, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-04 16:54:52', '2018-06-09 19:23:12', '', NULL),
(101, 2, 0, 'dream_house', '', '{\"ua\": \"Dream house\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"map\": \"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d386950.6511603643!2d-73.70231446529533!3d40.738882125234106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNueva+York!5e0!3m2!1ses-419!2sus!4v1445032011908\\\" width=\\\"100%\\\" height=\\\"400\\\" frameborder=\\\"0\\\" class=\\\"border-0\\\" allowfullscreen\", \"price\": \"500\", \"discount\": \"\", \"location\": \"{\\\"ua\\\":\\\"\\\\u042f\\\\u0440\\\\u0435\\\\u043c\\\\u0447\\\\u0435\\\"}\", \"marketing\": \"{\\\"ua\\\":\\\"\\\"}\", \"type_build\": \"{\\\"ua\\\":\\\"\\\\u0415\\\\u043b\\\\u0456\\\\u0442\\\\u043d\\\\u0438\\\\u0439 \\\\u043a\\\\u043e\\\\u0442\\\\u0435\\\\u0434\\\\u0436\\\"}\", \"hotel_photo\": \"upload/articles/101/img/101-5b1699bd82f04.jpg\"}', '[]', 'null', 3, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-05 17:10:05', '2018-06-15 12:12:24', '', 'yaremche'),
(102, 2, 0, 'white_house', '', '{\"ua\": \"White house\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"map\": \"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d386950.6511603643!2d-73.70231446529533!3d40.738882125234106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNueva+York!5e0!3m2!1ses-419!2sus!4v1445032011908\\\" width=\\\"100%\\\" height=\\\"400\\\" frameborder=\\\"0\\\" class=\\\"border-0\\\" allowfullscreen\", \"price\": \"1000\", \"discount\": \"5\", \"location\": \"{\\\"ua\\\":\\\"\\\\u0411\\\\u0443\\\\u043a\\\\u043e\\\\u0432\\\\u0435\\\\u043b\\\\u044c\\\"}\", \"marketing\": \"{\\\"ua\\\":\\\"\\\"}\", \"type_build\": \"{\\\"ua\\\":\\\"\\\\u0415\\\\u043b\\\\u0456\\\\u0442\\\\u043d\\\\u0438\\\\u0439 \\\\u043a\\\\u043e\\\\u0442\\\\u0435\\\\u0434\\\\u0436\\\"}\", \"hotel_photo\": \"upload/articles/102/img/102-5b1cee5d0d245.jpg\"}', '[]', 'null', 6, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-05 17:12:31', '2018-06-15 12:13:01', '', 'bukovel'),
(103, 8, 101, '', '', '{\"ua\": \"Апартаменти Dream house\"}', '{\"ua\": \"<p>У ціну усіх номерів включені безкоштовні сніданок, чай, кава та проживання дітей віком до 5 років (для номерів з місткістю від двох людей)</p>\\r\\n\"}', '{\"ua\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>\\r\\n\"}', '{\"tv\": \"1\", \"pool\": \"0\", \"safe\": \"1\", \"wifi\": \"1\", \"coffe\": \"1\", \"fridge\": \"1\", \"kettle\": \"1\", \"Jacuzzi\": \"0\", \"kitchen\": \"1\", \"parking\": \"1\", \"bathroom\": \"0\", \"breakfast\": \"1\", \"fireplace\": \"1\", \"marketing\": \"{\\\"ua\\\":\\\"\\\\u0437\\\\u0430\\\\u043b\\\\u0438\\\\u0448\\\\u0438\\\\u043b\\\\u043e\\\\u0441\\\\u044f 1 \\\\u043d\\\\u043e\\\\u043c\\\\u0435\\\\u0440\\\"}\", \"surcharge\": \"400\", \"title_img\": \"{\\\"ua\\\":\\\"\\\\u0410\\\\u043f\\\\u0430\\\\u0440\\\\u0442\\\\u0430\\\\u043c\\\\u0435\\\\u043d\\\\u0442\\\\u0438 \\\"}\", \"base_price\": \"15000\", \"hair_dryer\": \"1\", \"room_photo\": \"upload/articles/103/img/103-5b1fde9987d03.jpg\", \"discount_room\": \"3\", \"equipment_room\": \"{\\\"ua\\\":\\\"<div class=\\\\\\\"col-md-4 col-6\\\\\\\">\\\\r\\\\n<p>Lorem ipsum<\\\\/p>\\\\r\\\\n<\\\\/div>\\\\r\\\\n\\\\r\\\\n<div class=\\\\\\\"col-md-4 col-6\\\\\\\">\\\\r\\\\n<p>Lorem ipsum<\\\\/p>\\\\r\\\\n<\\\\/div>\\\\r\\\\n\\\\r\\\\n<div class=\\\\\\\"col-md-4 col-6\\\\\\\">\\\\r\\\\n<p>Lorem ipsum<\\\\/p>\\\\r\\\\n<\\\\/div>\\\\r\\\\n\\\\r\\\\n<div class=\\\\\\\"col-md-4 col-6\\\\\\\">\\\\r\\\\n<p>Lorem ipsum<\\\\/p>\\\\r\\\\n<\\\\/div>\\\\r\\\\n\\\\r\\\\n<div class=\\\\\\\"col-md-4 col-6\\\\\\\">\\\\r\\\\n<p>Lorem ipsum<\\\\/p>\\\\r\\\\n<\\\\/div>\\\\r\\\\n\\\\r\\\\n<div class=\\\\\\\"col-md-4 col-6\\\\\\\">\\\\r\\\\n<p>Lorem ipsum<\\\\/p>\\\\r\\\\n<\\\\/div>\\\\r\\\\n\\\\r\\\\n<div class=\\\\\\\"col-md-4 col-6\\\\\\\">\\\\r\\\\n<p>Lorem ipsum<\\\\/p>\\\\r\\\\n<\\\\/div>\\\\r\\\\n\\\\r\\\\n<div class=\\\\\\\"col-md-4 col-6\\\\\\\">\\\\r\\\\n<p>Lorem ipsum<\\\\/p>\\\\r\\\\n<\\\\/div>\\\\r\\\\n\\\\r\\\\n<div class=\\\\\\\"col-md-4 col-6\\\\\\\">\\\\r\\\\n<p>Lorem ipsum<\\\\/p>\\\\r\\\\n<\\\\/div>\\\\r\\\\n\\\"}\", \"сhildren_room\": \"0\", \"show_hotel_page\": \"1\", \"max_count_guests\": \"12\", \"ski_storage_room\": \"0\", \"base_count_ guests\": \"5\", \"bowl_ski_equipment\": \"0\", \"surcharge_children\": \"250\"}', '[{\"min\": \"upload/articles/103/min/ecohotel.jpg\", \"full\": \"upload/articles/103/full/ecohotel.jpg\"}, {\"min\": \"upload/articles/103/min/familyresort.jpg\", \"full\": \"upload/articles/103/full/familyresort.jpg\"}, {\"min\": \"upload/articles/103/min/idealrelax.jpg\", \"full\": \"upload/articles/103/full/idealrelax.jpg\"}]', 'null', 6, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-06 23:13:45', '2018-06-27 13:25:05', '', NULL),
(104, 8, 102, '', '', '{\"ua\": \"Апартаменти White house\"}', '{\"ua\": \"\"}', '{\"ua\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>\\r\\n\"}', '{\"tv\": \"1\", \"pool\": \"0\", \"safe\": \"0\", \"wifi\": \"1\", \"coffe\": \"1\", \"fridge\": \"0\", \"kettle\": \"1\", \"Jacuzzi\": \"0\", \"kitchen\": \"0\", \"parking\": \"0\", \"bathroom\": \"0\", \"breakfast\": \"0\", \"fireplace\": \"0\", \"surcharge\": \"\", \"title_img\": \"{\\\"ua\\\":\\\"\\\\u0410\\\\u043f\\\\u0430\\\\u0440\\\\u0442\\\\u0430\\\\u043c\\\\u0435\\\\u043d\\\\u0442\\\\u0438 \\\"}\", \"base_price\": \"400\", \"hair_dryer\": \"1\", \"room_photo\": \"upload/articles/104/img/104-5b211b0c00a66.jpg\", \"discount_room\": \"\", \"equipment_room\": \"{\\\"ua\\\":\\\"\\\"}\", \"сhildren_room\": \"0\", \"show_hotel_page\": \"1\", \"max_count_guests\": \"\", \"ski_storage_room\": \"0\", \"base_count_ guests\": \"\", \"bowl_ski_equipment\": \"1\"}', '[{\"min\": \"upload/articles/104/min/owncotedge.jpg\", \"full\": \"upload/articles/104/full/owncotedge.jpg\"}, {\"min\": \"upload/articles/104/min/pool.jpg\", \"full\": \"upload/articles/104/full/pool.jpg\"}, {\"min\": \"upload/articles/104/min/search.jpg\", \"full\": \"upload/articles/104/full/search.jpg\"}]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-06 23:14:20', '2018-06-15 10:53:44', '', NULL),
(105, 6, 18, '', '', '{\"ua\": \"Слайд 4\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"slide_img\": \"upload/articles/105/img/105-5b1eb8b269750.jpg\", \"show_main_page\": \"0\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-11 21:00:18', '2018-06-11 21:00:18', '', NULL),
(106, 6, 18, '', '', '{\"ua\": \"Слайд 5\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"slide_img\": \"upload/articles/106/img/106-5b1eb8dd86062.jpg\", \"show_main_page\": \"0\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-11 21:01:01', '2018-06-11 21:01:18', '', NULL),
(107, 8, 19, '', '', '{\"ua\": \"Напівлюкс із каміном\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"tv\": \"0\", \"pool\": \"0\", \"safe\": \"0\", \"wifi\": \"0\", \"coffe\": \"0\", \"fridge\": \"0\", \"kettle\": \"0\", \"Jacuzzi\": \"0\", \"kitchen\": \"0\", \"parking\": \"0\", \"bathroom\": \"0\", \"breakfast\": \"0\", \"fireplace\": \"0\", \"marketing\": \"{\\\"ua\\\":\\\"\\\"}\", \"surcharge\": \"\", \"title_img\": \"{\\\"ua\\\":\\\"\\\"}\", \"base_price\": \"1000\", \"hair_dryer\": \"0\", \"room_photo\": \"upload/articles/107/img/107-5b1fda95622e2.jpg\", \"discount_room\": \"\", \"equipment_room\": \"{\\\"ua\\\":\\\"\\\"}\", \"сhildren_room\": \"0\", \"show_hotel_page\": \"1\", \"max_count_guests\": \"\", \"ski_storage_room\": \"0\", \"base_count_ guests\": \"\", \"bowl_ski_equipment\": \"0\"}', '[]', 'null', 8, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-11 21:13:48', '2018-06-16 00:53:25', '', NULL),
(108, 8, 19, '', '', '{\"ua\": \"Люкс\"}', '{\"ua\": \"<p>Короткий опис</p>\\r\\n\"}', '{\"ua\": \"<p>Опис</p>\\r\\n\"}', '{\"tv\": \"1\", \"pool\": \"0\", \"safe\": \"0\", \"wifi\": \"1\", \"coffe\": \"1\", \"fridge\": \"0\", \"kettle\": \"0\", \"Jacuzzi\": \"0\", \"kitchen\": \"0\", \"parking\": \"0\", \"bathroom\": \"0\", \"breakfast\": \"0\", \"fireplace\": \"1\", \"surcharge\": \"\", \"title_img\": \"{\\\"ua\\\":\\\"\\\"}\", \"base_price\": \"1500\", \"hair_dryer\": \"1\", \"room_photo\": \"upload/articles/108/img/108-5b202ec28bf9d.jpg\", \"discount_room\": \"\", \"equipment_room\": \"{\\\"ua\\\":\\\"\\\"}\", \"сhildren_room\": \"0\", \"show_hotel_page\": \"1\", \"max_count_guests\": \"8\", \"ski_storage_room\": \"0\", \"base_count_ guests\": \"2\", \"bowl_ski_equipment\": \"1\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-12 23:36:18', '2018-06-15 10:53:58', '', NULL),
(109, 8, 18, '', '', '{\"ua\": \"Люкс з каміном\"}', '{\"ua\": \"<p>Короткий опис</p>\\r\\n\"}', '{\"ua\": \"<p>Опис</p>\\r\\n\"}', '{\"tv\": \"1\", \"pool\": \"0\", \"safe\": \"0\", \"wifi\": \"1\", \"coffe\": \"1\", \"fridge\": \"0\", \"kettle\": \"0\", \"Jacuzzi\": \"0\", \"kitchen\": \"0\", \"parking\": \"0\", \"bathroom\": \"0\", \"breakfast\": \"0\", \"fireplace\": \"1\", \"marketing\": \"{\\\"ua\\\":\\\"\\\"}\", \"surcharge\": \"\", \"title_img\": \"{\\\"ua\\\":\\\"\\\"}\", \"base_price\": \"1500\", \"hair_dryer\": \"1\", \"room_photo\": \"upload/articles/109/img/109-5b202ee5a06dc.jpg\", \"discount_room\": \"\", \"equipment_room\": \"{\\\"ua\\\":\\\"\\\"}\", \"сhildren_room\": \"0\", \"show_hotel_page\": \"0\", \"max_count_guests\": \"10\", \"ski_storage_room\": \"0\", \"base_count_ guests\": \"3\", \"bowl_ski_equipment\": \"1\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-12 23:36:53', '2018-06-15 23:32:31', '', NULL),
(110, 8, 19, '', '', '{\"ua\": \"Люкс з каміном з балконом\"}', '{\"ua\": \"<p>Короткий опис</p>\\r\\n\"}', '{\"ua\": \"<p>Опис</p>\\r\\n\"}', '{\"tv\": \"1\", \"pool\": \"0\", \"safe\": \"0\", \"wifi\": \"1\", \"coffe\": \"1\", \"fridge\": \"0\", \"kettle\": \"0\", \"Jacuzzi\": \"0\", \"kitchen\": \"0\", \"parking\": \"0\", \"bathroom\": \"0\", \"breakfast\": \"0\", \"fireplace\": \"1\", \"surcharge\": \"\", \"title_img\": \"{\\\"ua\\\":\\\"\\\"}\", \"base_price\": \"1500\", \"hair_dryer\": \"1\", \"room_photo\": \"upload/articles/110/img/110-5b202f00ea5bd.jpg\", \"discount_room\": \"\", \"equipment_room\": \"{\\\"ua\\\":\\\"\\\"}\", \"сhildren_room\": \"0\", \"show_hotel_page\": \"1\", \"max_count_guests\": \"10\", \"ski_storage_room\": \"0\", \"base_count_ guests\": \"3\", \"bowl_ski_equipment\": \"1\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-12 23:37:20', '2018-06-15 10:54:29', '', NULL),
(111, 3, 19, '', '', '{\"ua\": \"8 хвилин<br>до центру\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"bb-few-minutes features-icon\\\"></i>\", \"show_main_page\": \"0\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-13 16:08:32', '2018-06-13 16:08:32', '', NULL),
(112, 3, 19, '', '', '{\"ua\": \"затишок<br>та комфорт\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"bb-chair features-icon\\\"></i>\", \"show_main_page\": \"0\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-13 16:08:56', '2018-06-14 21:01:20', '', NULL),
(113, 3, 19, '', '', '{\"ua\": \"діти до 5<br>безкоштовно\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"bb-children features-icon\\\"></i>\", \"show_main_page\": \"1\"}', '[]', 'null', 4, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-13 16:09:15', '2018-06-14 21:00:56', '', NULL),
(114, 11, 19, '', '', '{\"ua\": \"Користування мангалом\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"\"}', '[]', 'null', 5, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-13 17:23:50', '2018-06-13 18:40:34', '', NULL),
(115, 11, 19, '', '', '{\"ua\": \"Wi-Fi на всій території\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"bb-wifi-orange fa-5x p-1\\\"></i>\"}', '[]', 'null', 4, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-13 17:24:06', '2018-06-13 18:41:28', '', NULL),
(116, 11, 19, '', '', '{\"ua\": \"Користування конференц-залом та дитячою кіматою\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"\"}', '[]', 'null', 3, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-13 17:24:23', '2018-06-13 18:41:42', '', NULL),
(117, 11, 18, '', '', '{\"ua\": \"Користування басейном\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"bb-pool fa-5x\\\"></i>\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-13 17:24:40', '2018-06-13 18:42:06', '', NULL),
(118, 11, 19, '', '', '{\"ua\": \"Користування альтанкою та зеленою зоною відпочинку\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"\"}', 'null', 'null', 8, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-13 18:38:16', '2018-06-13 18:38:16', '', NULL),
(119, 11, 19, '', '', '{\"ua\": \"Зручна автостоянка\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"bb-parking fa-5x\\\"></i>\"}', '[]', 'null', 7, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-13 18:39:13', '2018-06-13 18:39:43', '', NULL),
(120, 5, 0, '', '', '{\"ua\": \"Діти\"}', '{\"ua\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"fas fa-child text-orange rules-icon\\\"></i>\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-14 22:15:33', '2018-06-14 22:16:38', '', NULL),
(121, 5, 0, '', '', '{\"ua\": \"Тварини\"}', '{\"ua\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"fas fa-paw text-orange rules-icon\\\"></i>\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-14 22:15:53', '2018-06-14 22:15:53', '', NULL),
(122, 5, 0, '', '', '{\"ua\": \"Оплата\"}', '{\"ua\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"icon\": \"<i class=\\\"far fa-credit-card text-orange rules-icon\\\"></i>\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-14 22:16:12', '2018-06-14 22:16:12', '', NULL),
(123, 12, 19, '', '', '{\"ua\": \"Відгук 2\"}', '{\"ua\": \"\"}', '{\"ua\": \"<p>Все прекрасно. Раджу!!!</p>\\r\\n\"}', '{\"food\": \"4\", \"name\": \"Андрій\", \"wifi\": \"3\", \"young\": \"\", \"polite\": \"\", \"source\": \"facebook\", \"surname\": \"Цмокало\", \"location\": \"5\", \"cleanness\": \"4\", \"сosiness\": \"5\", \"visit_date\": \"06/15/2018 - 06/21/2018\", \"family_hotel\": \"\", \"profile_foto\": null, \"price_quality\": \"5\", \"rest_children\": \"\", \"answer_reviews\": \"\", \"photo_1_review\": null, \"photo_2_review\": null, \"photo_3_review\": null, \"photo_4_review\": null, \"photo_5_review\": null, \"photo_6_review\": null, \"photo_7_review\": null, \"photo_8_review\": null, \"photo_9_review\": null, \"photo_10_review\": null, \"date_create_review\": \"15-06-2018\", \"date_answer_reviews\": \"\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-15 15:15:36', '2018-06-15 16:11:33', '', NULL),
(124, 12, 18, '', '', '{\"ua\": \"Відгук 3\"}', '{\"ua\": \"\"}', '{\"ua\": \"<p>Все прекрасно. Раджу!!! Приъду ще.</p>\\r\\n\"}', '{\"food\": \"4\", \"name\": \"Андрій\", \"wifi\": \"3\", \"young\": \"\", \"polite\": \"\", \"source\": \"\", \"surname\": \"Цмокало\", \"location\": \"5\", \"cleanness\": \"5\", \"сosiness\": \"5\", \"visit_date\": \"06/15/2018 - 06/19/2018\", \"family_hotel\": \"\", \"profile_foto\": null, \"price_quality\": \"5\", \"rest_children\": \"\", \"answer_reviews\": \"\", \"photo_1_review\": null, \"photo_2_review\": null, \"photo_3_review\": null, \"photo_4_review\": null, \"photo_5_review\": null, \"photo_6_review\": null, \"photo_7_review\": null, \"photo_8_review\": null, \"photo_9_review\": null, \"photo_10_review\": null, \"date_create_review\": \"05-06-2018\", \"date_answer_reviews\": \"\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-15 15:16:18', '2018-06-15 15:16:18', '', NULL);
INSERT INTO `articles` (`id`, `category_id`, `article_id`, `type`, `name`, `title`, `short_description`, `description`, `attributes`, `imgs`, `files`, `priority`, `date`, `meta_title`, `meta_description`, `meta_keywords`, `active`, `created_at`, `updated_at`, `img`, `subdomain`) VALUES
(125, 12, 18, '', '', '{\"ua\": \"Відгук 4\"}', '{\"ua\": \"\"}', '{\"ua\": \"<p>Все прекрасно. Раджу!!! Приъду ще.</p>\\r\\n\"}', '{\"food\": \"4\", \"name\": \"Андрій\", \"wifi\": \"3\", \"young\": \"\", \"polite\": \"\", \"source\": \"\", \"surname\": \"Цмокало\", \"location\": \"5\", \"cleanness\": \"5\", \"сosiness\": \"5\", \"visit_date\": \"06/15/2018 - 06/19/2018\", \"family_hotel\": \"\", \"profile_foto\": null, \"price_quality\": \"5\", \"rest_children\": \"\", \"answer_reviews\": \"\", \"photo_1_review\": null, \"photo_2_review\": null, \"photo_3_review\": null, \"photo_4_review\": null, \"photo_5_review\": null, \"photo_6_review\": null, \"photo_7_review\": null, \"photo_8_review\": null, \"photo_9_review\": null, \"photo_10_review\": null, \"date_create_review\": \"05-06-2018\", \"date_answer_reviews\": \"\"}', 'null', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-15 15:16:24', '2018-06-15 15:16:24', '', NULL),
(126, 12, 19, '', '', '{\"ua\": \"Відгук 5\"}', '{\"ua\": \"\"}', '{\"ua\": \"<p>Все прекрасно. Раджу!!! Приїдуду ще.</p>\\r\\n\"}', '{\"food\": \"4\", \"name\": \"Петро\", \"wifi\": \"3\", \"young\": \"\", \"polite\": \"\", \"source\": \"\", \"surname\": \"Петренко\", \"location\": \"5\", \"cleanness\": \"5\", \"сosiness\": \"5\", \"visit_date\": \"06/15/2018 - 06/19/2018\", \"family_hotel\": \"\", \"profile_foto\": null, \"price_quality\": \"5\", \"rest_children\": \"\", \"answer_reviews\": \"\", \"photo_1_review\": null, \"photo_2_review\": null, \"photo_3_review\": null, \"photo_4_review\": null, \"photo_5_review\": null, \"photo_6_review\": null, \"photo_7_review\": null, \"photo_8_review\": null, \"photo_9_review\": null, \"photo_10_review\": null, \"date_create_review\": \"05-06-2018\", \"date_answer_reviews\": \"\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-15 15:16:52', '2018-06-15 16:11:51', '', NULL),
(127, 16, 0, '', '', '{\"ua\": \"Cторінка пошуку\"}', '{\"ua\": \"<p>У ціну усіх номерів включені безкоштовні сніданок, чай, кава та проживання дітей віком до 5 років (для номерів з місткістю від двох людей)</p>\\r\\n\"}', '{\"ua\": \"\"}', '{\"slogan1\": \"{\\\"ua\\\":\\\"\\\\u0412\\\\u0410\\\\u0428 \\\\u0406\\\\u0414\\\\u0415\\\\u0410\\\\u041b\\\\u042c\\\\u041d\\\\u0418\\\\u0419 \\\\u0412\\\\u0406\\\\u0414\\\\u041f\\\\u041e\\\\u0427\\\\u0418\\\\u041d\\\\u041e\\\\u041a\\\"}\", \"slogan2\": \"{\\\"ua\\\":\\\"\\\\u0427\\\\u0415\\\\u041a\\\\u0410\\\\u0404 \\\\u0412\\\\u0410\\\\u0421 \\\\u0422\\\\u0423\\\\u0422\\\"}\", \"img_search\": \"upload/articles/127/img/127-5b2412402386c.jpg\"}', '[]', 'null', 0, '0000-00-00 00:00:00', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 1, '2018-06-15 22:23:44', '2018-06-15 22:24:18', '', NULL);

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
(1, 0, 0, 'main', '{\"ua\": \"Головна\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"description\",\"active\",\"meta_title\",\"meta_description\",\"meta_keywords\"],\"attributes\":{\"slogan\":{\"publick_name\":\"Слоган\",\"type\":\"textarea\",\"lang_active\":true,\"active\":false},\"location\":{\"publick_name\":\"Розташування готелів\",\"type\":\"input\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '2018-05-11 23:59:33', 1, 0, '2018-05-10 21:13:01', '2018-06-11 16:18:19'),
(2, 0, 0, 'hotels', '{\"ua\": \"Готелі\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"type\",\"subdomain\",\"short_description\",\"priority\",\"active\",\"meta_title\",\"meta_description\",\"meta_keywords\"],\"attributes\":{\"price\":{\"publick_name\":\"Ціна\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"discount\":{\"publick_name\":\"Знижка\",\"type\":\"input\",\"lang_active\":false,\"active\":true},\"hotel_photo\":{\"publick_name\":\"Фото готелю\",\"type\":\"files\",\"lang_active\":false,\"active\":false},\"location\":{\"publick_name\":\"Місцерозташування\",\"type\":\"input\",\"lang_active\":true,\"active\":false},\"marketing\":{\"publick_name\":\"Маркетингова плашка\",\"type\":\"input\",\"lang_active\":true,\"active\":false},\"type_build\":{\"publick_name\":\"Тип будівлі\",\"type\":\"input\",\"lang_active\":true,\"active\":false},\"map\":{\"publick_name\":\"Карта готелю\",\"type\":\"input\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-12 01:32:17', '2018-06-15 12:11:35'),
(3, 2, 0, 'advantages', '{\"ua\": \"Чому обирають саме нас?\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"priority\",\"active\",\"article_parent\"],\"attributes\":{\"show_main_page\":{\"publick_name\":\"Відображення на головній сторінці\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"icon\":{\"publick_name\":\"Іконка\",\"type\":\"input\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-12 14:56:24', '2018-06-13 16:03:17'),
(4, 0, 0, 'social', '{\"ua\": \"Соціальні мережі\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"priority\",\"active\"],\"attributes\":{\"social_link\":{\"publick_name\":\"Ссилка на мережу\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"icon\":{\"publick_name\":\"Іконка\",\"type\":\"input\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-12 16:32:56', '2018-06-05 17:53:29'),
(5, 0, 0, 'rules', '{\"ua\": \"Правила\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"short_description\",\"priority\",\"active\"],\"attributes\":{\"icon\":{\"publick_name\":\"Іконка\",\"type\":\"input\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-12 16:39:51', '2018-06-14 22:13:26'),
(6, 2, 0, 'slides', '{\"ua\": \"Слайдер\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"short_description\",\"priority\",\"active\",\"article_parent\"],\"attributes\":{\"slide_img\":{\"publick_name\":\"Картинка\",\"type\":\"files\",\"lang_active\":false,\"active\":false},\"show_main_page\":{\"publick_name\":\"Відображення на Головній сторінці\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-12 16:46:43', '2018-06-09 16:42:32'),
(7, 2, 0, 'marketings', '{\"ua\": \"Більше ніж відпочинок\"}', '{\"ua\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>\\r\\n\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"short_description\",\"priority\",\"active\",\"article_parent\"],\"attributes\":{\"marketing_img\":{\"publick_name\":\"Картинка\",\"type\":\"files\",\"lang_active\":false,\"active\":false},\"show_main_page\":{\"publick_name\":\"Відображення на Головній сторінці\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-12 16:55:12', '2018-06-10 14:17:36'),
(8, 2, 0, 'rooms', '{\"ua\": \"Номери\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"short_description\",\"description\",\"gallery\",\"priority\",\"active\",\"article_parent\",\"meta_title\",\"meta_description\",\"meta_keywords\"],\"attributes\":{\"equipment_room\":{\"publick_name\":\"Комплектація номеру\",\"type\":\"textarea\",\"lang_active\":true,\"active\":false},\"title_img\":{\"publick_name\":\"Напис на фото\",\"type\":\"input\",\"lang_active\":true,\"active\":false},\"wifi\":{\"publick_name\":\"Wifi\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"hair_dryer\":{\"publick_name\":\"Фен\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"tv\":{\"publick_name\":\"ТВ\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"bathroom\":{\"publick_name\":\"Санвузол\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"fridge\":{\"publick_name\":\"Холодильник\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"kettle\":{\"publick_name\":\"Електрочайник\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"safe\":{\"publick_name\":\"Сейф\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"fireplace\":{\"publick_name\":\"Камін\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"kitchen\":{\"publick_name\":\"Повноцінна кухня\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"Jacuzzi\":{\"publick_name\":\"Джакузі\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"breakfast\":{\"publick_name\":\"Сніданок\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"parking\":{\"publick_name\":\"Парковка\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"pool\":{\"publick_name\":\"Басейн\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"coffe\":{\"publick_name\":\"Кава та чай\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"сhildren_room\":{\"publick_name\":\"Дитяча кімната\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"ski_storage_room\":{\"publick_name\":\"Кімната зберігання лиж\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"bowl_ski_equipment\":{\"publick_name\":\"Cушка лижнього спорядження\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"base_price\":{\"publick_name\":\"Базова ціна\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"base_count_ guests\":{\"publick_name\":\"Базова кількість гостей\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"max_count_guests\":{\"publick_name\":\"Максимальна кількість гостей\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"surcharge\":{\"publick_name\":\"Доплата за додаткове місце\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"discount_room\":{\"publick_name\":\"Знижка\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"room_photo\":{\"publick_name\":\"Картинка номеру на сторінці готелю\",\"type\":\"files\",\"lang_active\":false,\"active\":false},\"show_hotel_page\":{\"publick_name\":\"Відображення на сторінці готелю\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"marketing\":{\"publick_name\":\"Маркетингова плашка\",\"type\":\"input\",\"lang_active\":true,\"active\":false},\"surcharge_children\":{\"publick_name\":\"Доплата за додаткове місце(для дитини)\",\"type\":\"input\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-17 15:52:40', '2018-06-27 13:22:57'),
(9, 2, 0, 'contacts', '{\"ua\": \"Контакти\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', 'null', '{\"base\":[\"title\",\"active\",\"article_parent\",\"meta_title\",\"meta_description\",\"meta_keywords\"],\"attributes\":{\"bus_way\":{\"publick_name\":\"Шлях автобусом\",\"type\":\"textarea\",\"lang_active\":true,\"active\":false},\"car_way\":{\"publick_name\":\"Шлях машиною\",\"type\":\"textarea\",\"lang_active\":true,\"active\":false},\"air_way\":{\"publick_name\":\"Шлях літаком\",\"type\":\"textarea\",\"lang_active\":true,\"active\":false},\"train_way\":{\"publick_name\":\"Шлях потягом\",\"type\":\"textarea\",\"lang_active\":true,\"active\":false},\"map\":{\"publick_name\":\"Карта розташування\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\" reception_tel1\":{\"publick_name\":\"Телефон рецепції №1\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\" reception_tel2\":{\"publick_name\":\"Телефон рецепції №2\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"email\":{\"publick_name\":\"Email \",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"restaurant_tel1\":{\"publick_name\":\"Телефон ресторану №1\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"restaurant_tel2\":{\"publick_name\":\"Телефон ресторану №2\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"reservation_tel1\":{\"publick_name\":\"Телефон бронювання номерів №1\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"reservation_tel2\":{\"publick_name\":\"Телефон бронювання номерів №2\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"address\":{\"publick_name\":\"Адреса\",\"type\":\"input\",\"lang_active\":true,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-19 22:42:56', '2018-05-19 22:42:56'),
(10, 2, 0, 'servicespaid', '{\"ua\": \"Послуги за додаткову плату\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"short_description\",\"description\",\"priority\",\"active\",\"article_parent\",\"meta_title\",\"meta_description\",\"meta_keywords\"],\"attributes\":{\"price\":{\"publick_name\":\"Ціна \",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"img_pay_service\":{\"publick_name\":\"Картинка\",\"type\":\"files\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-19 23:23:19', '2018-05-19 23:26:16'),
(11, 2, 0, 'servicesfree', '{\"ua\": \"Послуги включені у вартість\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"priority\",\"active\",\"article_parent\"],\"attributes\":{\"icon\":{\"publick_name\":\"Іконка\",\"type\":\"input\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-19 23:25:27', '2018-06-13 17:21:20'),
(12, 2, 0, 'reviews', '{\"ua\": \"Відгуки наших відвідувачів\"}', '{\"ua\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>\\r\\n\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"description\",\"priority\",\"active\",\"article_parent\"],\"attributes\":{\"source\":{\"publick_name\":\"Джерело\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"cleanness\":{\"publick_name\":\"Чистота\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"сosiness\":{\"publick_name\":\"Затишок\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"location\":{\"publick_name\":\"Розташування\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"food\":{\"publick_name\":\"Смачна кухня\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"wifi\":{\"publick_name\":\"Wifi\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"price_quality\":{\"publick_name\":\"Ціна-якісь\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"family_hotel\":{\"publick_name\":\"Сімейний готель\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"rest_children\":{\"publick_name\":\"Для відпочинку з дітьми\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"young\":{\"publick_name\":\"Для молодих пар\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"polite\":{\"publick_name\":\"Ввічливий персонал\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"surname\":{\"publick_name\":\"Прізвище\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"name\":{\"publick_name\":\"Ім\'я\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"visit_date\":{\"publick_name\":\"Дата проживання\",\"type\":\"date-range-picker\",\"lang_active\":false,\"active\":false},\"answer_reviews\":{\"publick_name\":\"Відповідь адміністрації на відгук\",\"type\":\"textarea\",\"lang_active\":false,\"active\":false},\"date_create_review\":{\"publick_name\":\"Дата створення відгуку\",\"type\":\"date-picker\",\"lang_active\":false,\"active\":false},\"date_answer_reviews\":{\"publick_name\":\"Дата відповіді адміністрації на відгук\",\"type\":\"date-picker\",\"lang_active\":false,\"active\":false},\"photo_1_review\":{\"publick_name\":\"Фото 1 відгуку\",\"type\":\"files\",\"lang_active\":false,\"active\":false},\"photo_2_review\":{\"publick_name\":\"Фото 2 відгуку\",\"type\":\"files\",\"lang_active\":false,\"active\":false},\"photo_3_review\":{\"publick_name\":\"Фото 3 відгуку\",\"type\":\"files\",\"lang_active\":false,\"active\":false},\"photo_4_review\":{\"publick_name\":\"Фото 4 відгуку\",\"type\":\"files\",\"lang_active\":false,\"active\":false},\"photo_5_review\":{\"publick_name\":\"Фото 5 відгуку\",\"type\":\"files\",\"lang_active\":false,\"active\":false},\"photo_6_review\":{\"publick_name\":\"Фото 6 відгуку\",\"type\":\"files\",\"lang_active\":false,\"active\":false},\"photo_7_review\":{\"publick_name\":\"Фото 7 відгуку\",\"type\":\"files\",\"lang_active\":false,\"active\":false},\"photo_8_review\":{\"publick_name\":\"Фото 8 відгуку\",\"type\":\"files\",\"lang_active\":false,\"active\":false},\"photo_9_review\":{\"publick_name\":\"Фото 9 відгуку\",\"type\":\"files\",\"lang_active\":false,\"active\":false},\"photo_10_review\":{\"publick_name\":\"Фото 10 відгуку\",\"type\":\"files\",\"lang_active\":false,\"active\":false},\"profile_foto\":{\"publick_name\":\"Фото клієнта\",\"type\":\"files\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-19 23:47:39', '2018-06-10 18:47:39'),
(13, 2, 0, 'discounts', '{\"ua\": \"Акції\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"description\",\"date\",\"priority\",\"active\",\"article_parent\"],\"attributes\":{\"discount_tel1\":{\"publick_name\":\"Телефон №1\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"discount_tel2\":{\"publick_name\":\"Телефон №1\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"link\":{\"publick_name\":\"Ссилка\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"marketing_dush\":{\"publick_name\":\"Маркетингова плашка\",\"type\":\"input\",\"lang_active\":true,\"active\":false},\"img_discount\":{\"publick_name\":\"Картинка\",\"type\":\"files\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-19 23:56:46', '2018-05-20 00:02:03'),
(14, 0, 0, 'revsettings', '{\"ua\": \"Налаштування відгуків\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"short_description\",\"active\",\"meta_title\",\"meta_description\",\"meta_keywords\"],\"attributes\":{\"is_cleanness\":{\"publick_name\":\"Чистота\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"is_сosiness\":{\"publick_name\":\"Затишок\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"is_location\":{\"publick_name\":\"Розташування\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"is_food\":{\"publick_name\":\"Смачна кухня\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"is_wifi\":{\"publick_name\":\"Wifi\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"is_price_quality\":{\"publick_name\":\"Ціна-якісь\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"is_family_hotel\":{\"publick_name\":\"Сімейний готель\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"is_rest_children\":{\"publick_name\":\"Для відпочинку з дітьми\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"is_young\":{\"publick_name\":\"Для молодих пар\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"is_polite\":{\"publick_name\":\"Ввічливий персонал\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-05-21 17:57:43', '2018-06-15 16:21:53'),
(15, 0, 0, 'messengers', '{\"ua\": \"Месенджери\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"priority\",\"active\"],\"attributes\":{\"icon\":{\"publick_name\":\"Іконка\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"messenger_link\":{\"publick_name\":\"Ссилка на месенджер\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"icon_footer\":{\"publick_name\":\"Іконка в футері\",\"type\":\"input\",\"lang_active\":false,\"active\":false},\"icon_mobile\":{\"publick_name\":\"Іконка для мобільної версії\",\"type\":\"input\",\"lang_active\":false,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-06-04 16:51:41', '2018-06-09 17:44:12'),
(16, 0, 0, 'search', '{\"ua\": \"Пошук\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"short_description\",\"active\",\"meta_title\",\"meta_description\",\"meta_keywords\"],\"attributes\":{\"img_search\":{\"publick_name\":\"Картинка\",\"type\":\"files\",\"lang_active\":false,\"active\":false},\"slogan1\":{\"publick_name\":\"Слоган_1\",\"type\":\"input\",\"lang_active\":true,\"active\":false},\"slogan2\":{\"publick_name\":\"Слоган_2\",\"type\":\"input\",\"lang_active\":true,\"active\":false}}}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '{\"ua\": \"\"}', '0000-00-00 00:00:00', 1, 0, '2018-06-15 22:22:23', '2018-06-15 22:24:06');

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
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `publick_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `langs`
--

INSERT INTO `langs` (`id`, `lang`, `country`, `img`, `priority`, `active`, `created_at`, `updated_at`, `publick_code`) VALUES
(1, 'ua', 'УКР', 'upload/langs/ua/ua-1526552036.jpg', 4, 1, '2018-05-10 20:33:56', '2018-06-13 18:57:08', ''),
(2, 'ru', 'РУС', 'upload/langs/ru/ru-1525973687.png', 0, 0, '2018-05-10 20:34:47', '2018-06-13 20:30:13', ''),
(3, 'en', 'ENG', 'upload/langs/en/en-1526563872.jpeg', 3, 0, '2018-05-10 20:35:20', '2018-06-13 19:00:45', ''),
(4, 'pl', 'POL', 'upload/langs/pl/pl-1526552082.jpg', 0, 0, '2018-05-10 22:53:47', '2018-06-13 19:01:03', '');

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
('raun@i.ua', 'e98ebdff6cf59a8dd40d0df9ae72f3c8d307c8163beca051a5c400e26420e0c0', '2018-05-11 14:44:46'),
('vor.ser87@gmail.com', 'f2c80c2158a182526b4def4af98cacd751788d288fb5c6dad5a2f37d412a3577', '2018-05-11 15:24:27'),
('webtestingstudio@gmail.com', '08d90c892268155f8c83d5c6b5535ad0f391ff859a537948353d228c8fc1b923', '2018-05-24 09:38:24');

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

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `name`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'config.email', 'Пошта для вхідних повідомлень', 'webtestingstudio@gmail.com', '2018-05-24 13:04:08', '2018-05-24 13:04:08', NULL),
(2, 'admin.prefix', 'Префікс адмінки', 'adminorieT3', '2018-05-24 13:05:12', '2018-05-24 15:37:30', NULL),
(3, 'db_host', 'Хост БД', 'localhost', '2018-05-24 13:06:37', '2018-05-24 15:17:35', '2018-05-24 15:17:35'),
(4, 'db_database', 'Назва БД', 'vedmedycya_db', '2018-05-24 13:09:08', '2018-05-24 15:17:29', '2018-05-24 15:17:29'),
(5, 'db_username', 'Користувач БД', 'root', '2018-05-24 13:09:51', '2018-05-24 15:17:24', '2018-05-24 15:17:24'),
(6, 'db_password', 'Пароль БД', '2', '2018-05-24 13:10:40', '2018-05-24 15:17:19', '2018-05-24 15:17:19'),
(7, 'domain', 'Основний домен', 'vedmedycya.loc', '2018-05-25 12:57:36', '2018-05-25 12:57:36', NULL);

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
(1, 0, 'tel_1', 'input', 'телефон 1', '\"+38 (097) 514 4702\"', 0, 0, '2018-05-12 20:34:10', '2018-06-04 20:06:22', NULL),
(2, 0, 'tel_2', 'input', 'телефон 2', '\"+38 (097) 514 4703\"', 0, 0, '2018-05-12 20:39:24', '2018-06-04 20:55:38', NULL),
(3, 0, 'email', 'input', 'Email', '\"hotel@vedmedycya.com.ua\"', 0, 0, '2018-05-12 20:40:17', '2018-06-04 20:43:29', NULL),
(4, 0, 'address', 'input', 'Адреса', '{\"en\": \" Ukraine, Yaremche city, 5A Vitovsky Str\", \"ua\": \"Україна, м.Яремче, вул.Вітовського 5А\"}', 0, 1, '2018-05-12 20:41:44', '2018-06-04 21:15:11', NULL),
(5, 0, 'write_messager', 'input', 'Переклад фрази написати в месенджер', '{\"en\": \"write in messagers\", \"ua\": \"написати в месенджер\"}', 0, 1, '2018-06-04 19:00:31', '2018-06-04 19:02:29', NULL),
(6, 0, 'reservation', 'input', 'Переклад слова Забронювати', '{\"en\": \"Reservation\", \"ua\": \"Забронювати\"}', 0, 1, '2018-06-04 20:45:43', '2018-06-04 20:45:43', NULL),
(7, 0, 'about_us', 'input', 'Переклад фрази Про нас', '{\"en\": \"About us\", \"ua\": \"Про нас\"}', 0, 1, '2018-06-05 13:02:18', '2018-06-05 13:02:18', NULL);

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
(7, 'admin', 'hotel@vedmedycya.com.ua', '$2y$10$DjLl51axgKx40JHLEuj.1OnOeX4Y57DkQVAeR3vGwq2kRUSZM7boK', 'JlpjDn4KzeqCdabZfXYt4kgpuu5nNw3it7F0BHhFGC44Sg2ictCP9J2DTFEV', '2017-08-23 16:32:04', '2018-05-25 09:32:54'),
(8, 'root', 'webtestingstudio@gmail.com', '$2y$10$wAiitX7gHFd80LOncnIlAO2MuTO8xkLnrybtelpOpRaS0yeVcCsAu', '7i4PGHbSvgYk4JBxBAsqCOEdKIZNvVxGVR6edFNO6reht8sv3dZqsAJypelj', '2017-08-23 16:58:54', '2018-05-30 09:27:06');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `langs`
--
ALTER TABLE `langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `texts`
--
ALTER TABLE `texts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
