-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 11 2018 г., 14:42
-- Версия сервера: 5.7.20
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
-- База данных: `globaltobako_new_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `type` json NOT NULL,
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
(1, 1, 0, 'null', '', '{\"ru\": \"Сеть гостиниц \\\"Большая Ведиедиця\\\" в Яремче и Буковеле\", \"ua\": \"Мережа готелів \\\"Велика Ведиедиця\\\" в Яремче та Буковелі\"}', '{\"ru\": \"<p>Краткое описание отелей</p>\\r\\n\", \"ua\": \"<p>Короткий опис готелів</p>\\r\\n\"}', '{\"ru\": \"\", \"ua\": \"\"}', '{\"fone\": \"upload/articles/1/img/1-5af5693b6bd8e.png\", \"check\": \"0\", \"image\": \"{\\\"ua\\\":\\\"upload\\\\/articles\\\\/1\\\\/img\\\\/1-5af4b4b341312.png\\\",\\\"ru\\\":\\\"upload\\\\/articles\\\\/1\\\\/img\\\\/1-5af4b4b341bd0.png\\\"}\", \"slogan\": \"{\\\"ua\\\":\\\"\\\\u0423\\\\u043a\\\\u0440\\\",\\\"ru\\\":\\\"\\\\u0420\\\\u043e\\\\u0441\\\"}\", \"textedit\": \"{\\\"ua\\\":\\\"<p>sdfsdf<\\\\/p>\\\\r\\\\n\\\",\\\"ru\\\":\\\"<p>fdsfsdf<\\\\/p>\\\\r\\\\n\\\"}\", \"tourist_count\": \"2\"}', '[{\"min\": \"upload/articles/1/min/bg.png\", \"full\": \"upload/articles/1/full/bg.png\"}, {\"min\": \"upload/articles/1/min/dropdown-1.jpg\", \"full\": \"upload/articles/1/full/dropdown-1.jpg\"}, {\"min\": \"upload/articles/1/min/dropdown-2.jpg\", \"full\": \"upload/articles/1/full/dropdown-2.jpg\"}]', 'null', 0, '1970-01-01 00:00:00', '{\"ru\": \"META Title Ru\", \"ua\": \"META Title\"}', '{\"ru\": \"\", \"ua\": \"\"}', '{\"ru\": \"\", \"ua\": \"\"}', 1, '2018-05-10 21:23:31', '2018-05-11 13:41:18', '');

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
(1, 0, 0, 'main', '{\"en\": \"Main\", \"pl\": \"Glawna\", \"ru\": \"Главная\", \"ua\": \"Головна\"}', '{\"en\": \"\", \"pl\": \"\", \"ru\": \"\", \"ua\": \"\"}', '{\"en\": \"\", \"pl\": \"\", \"ru\": \"\", \"ua\": \"\"}', '[]', '{\"base\":[\"title\",\"short_description\",\"description\",\"img\",\"gallery\",\"date\",\"priority\",\"active\",\"article_parent\",\"meta_title\",\"meta_description\",\"meta_keywords\"],\"attributes\":{\"slogan\":{\"type\":\"input\",\"active\":false,\"lang_active\":true,\"publick_name\":\"Слоган\"},\"tourist_count\":{\"type\":\"input\",\"active\":false,\"lang_active\":false,\"publick_name\":\"Кількість відвідувачів\"},\"image\":{\"publick_name\":\"Картинка\",\"type\":\"files\",\"lang_active\":true,\"active\":false},\"fone\":{\"publick_name\":\"Фон\",\"type\":\"files\",\"lang_active\":false,\"active\":false},\"check\":{\"publick_name\":\"Вкл\",\"type\":\"checkbox\",\"lang_active\":false,\"active\":false},\"textedit\":{\"publick_name\":\"Тест\",\"type\":\"textarea\",\"lang_active\":true,\"active\":false}}}', '{\"en\": \"\", \"pl\": \"\", \"ru\": \"\", \"ua\": \"\"}', '{\"en\": \"\", \"pl\": \"\", \"ru\": \"\", \"ua\": \"\"}', '{\"en\": \"\", \"pl\": \"\", \"ru\": \"\", \"ua\": \"\"}', '2018-05-11 23:59:33', 1, 0, '2018-05-10 21:13:01', '2018-05-11 13:38:27');

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
(1, 'ua', 'Україна', '', 0, 1, '2018-05-10 17:33:56', '2018-05-10 17:33:56'),
(2, 'ru', 'Росія', 'upload/langs/ru/ru-1525973687.png', 0, 1, '2018-05-10 17:34:47', '2018-05-10 18:40:33'),
(3, 'en', 'Англія', 'upload/langs/en/en-1525973720.png', 0, 0, '2018-05-10 17:35:20', '2018-05-11 10:40:44'),
(4, 'pl', 'Польща', 'upload/langs/pl/pl-1525982027.png', 0, 0, '2018-05-10 19:53:47', '2018-05-11 10:40:35');

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
('webdesignstudio@gmail.com', 'fbde7c2090b1432792a7b0caee4dcfa185c155d6cc24beff39508ff5271224ba', '2017-02-06 14:40:36');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
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
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `lang_active` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(7, 'admin', 'info@globaltobako.com', '$2y$10$DjLl51axgKx40JHLEuj.1OnOeX4Y57DkQVAeR3vGwq2kRUSZM7boK', 'ATzR71jf8s1uoYnDr0Yq5QeOk1HRekFRiNli8zuNWSCskHGGosvSwqU4NfXM', '2017-08-23 16:32:04', '2017-08-23 16:57:56'),
(8, 'root', 'webtestingstudio@gmail.com', '$2y$10$wAiitX7gHFd80LOncnIlAO2MuTO8xkLnrybtelpOpRaS0yeVcCsAu', 'GbuzlmzBhQLXjgXG6GyHgJ5AHBj3M3Ft5l9UIsh2Z9rol49UIwMC1UUxFjlM', '2017-08-23 16:58:54', '2017-08-23 16:59:00');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
