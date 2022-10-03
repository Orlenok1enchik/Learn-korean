-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 09 2022 г., 12:41
-- Версия сервера: 5.7.25
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
-- База данных: `schoolcourse`
--

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id_courses` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `training_period` varchar(50) NOT NULL,
  `period_study` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id_courses`, `title`, `price`, `training_period`, `period_study`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Групповые курсы', 950, '3 месяца', '2 раза в неделю по 120 минут', '/image/teamwork.svg', NULL, NULL),
(2, 'Индивидуальные курсы', 1150, '1 месяц', '4 раза в неделю по 240 минут', '/image/employee.svg', NULL, NULL),
(3, 'Марафоны и конкурсы', 1150, '1,5 месяца', '4 раза в неделю по 240 минут', '/image/diploma.svg', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2022_03_15_072039_create_courses_table', 1),
(11, '2022_03_18_034030_create_news_table', 2),
(12, '2014_10_12_100000_create_password_resets_table', 3),
(13, '2022_03_21_095134_create_users_table', 4),
(14, '2022_03_21_104606_create_reviews_table', 5),
(15, '2022_03_22_084046_create_users_table', 6),
(18, '2022_03_23_074227_create_teachers_table', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `textarea` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `textarea`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Корейский язык для взрослых', 'Стартуют новые группы корейского языка!\r\nВыбери для себя подходящую очную \r\nили онлайн группу по изучению \r\nкорейского языка с нуля.', '/image/adults.jpg', '2022-03-06 19:00:00', NULL),
(2, 'Путешествие по Корее', 'Мы предлагаем вам рассказать о своей \r\nмечте в социальных сетях и \r\nучаствовать в еженедельном \r\nрозыгрыше подарков.\r\n', '/image/travel_korea.jpg', '2022-02-27 05:12:00', '0000-00-00 00:00:00'),
(3, 'Корейский язык для детей', 'Ваш ребенок увлекается кореской поп-культурой? \r\nСмотрит аниме, читает \r\nмангу, слушает корейскую музыку? \r\nНаправьте его увлечения в новое \r\nперспективное русло – изучение \r\nкорейского языка!', '/image/child.jpg', '2022-02-28 19:00:00', NULL),
(4, 'Набор в новые группы \r\nпо корейскому языку', 'Стартуют новые группы корейского языка!\r\nВыбери для себя подходящую очную \r\nили онлайн группу по изучению \r\nкорейского языка с нуля.', '/image/group.jpg', '2022-03-14 19:00:00', NULL),
(5, 'Корейский язык для подростков', 'Ваш ребенок увлекается корейской поп-культурой? \r\nСмотрит аниме, читает мангу, слушает корейскую музыку? Направьте его увлечения в новое перспективное русло – изучение корейского языка!\r\n', '/image/teenagers.jpg', '2022-03-11 19:00:00', NULL),
(6, 'Расскажите о своей \r\nмечте', 'Наши ученики знают, что \"Ккум\" (꿈) - это \"мечта\"!\r\nМы предлагаем вам рассказать о своей мечте \r\nв социальных сетях и участвовать в еженедельном \r\nрозыгрыше подарков.\r\n', '/image/dream.jpg', '2022-03-13 19:00:00', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `recordings`
--

CREATE TABLE `recordings` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_public` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `id_user`, `text`, `created_at`, `updated_at`, `is_public`) VALUES
(3, 2, 'Занимаюсь изучением корейского языка в «I study Korea» третий год. В своё время выбрала этот центр из-за его руководителя – Юлии Поповой, т.к. уже была знакома с ней, как с преподавателем: её методы обучения были мне понятны, а личность – приятна. И в этом выборе я не ошиблась.\r\nПреподавание ведётся на корейском и регулярно проходят занятия с носителями языка (!), учебники направлены на отработку диалогов и монологов, поэтому волей-неволей, но по-корейски вы заговорите!', '2022-03-22 05:31:13', '2022-03-22 05:31:13', 0),
(4, 3, 'Я выбрал изучение корейского языка именно в школу потому, что меня заинтересовали различные мероприятия, проводимые центром, а также его удобное месторасположение. Мне нравится школа тем, что всегда предоставляется новая и интересная информация в паблике в VK. Я бы порекомендовал центр своим друзьям, т.к. помимо изучения языка предоставляет возможность углубиться и в другие отрасли культуры Кореи.', '2022-03-22 06:13:44', '2022-03-22 06:13:44', 0),
(5, 4, 'Школа отличная. Выиграл в конкурсе благодаря поддержки школы, его преподавателей, которые смогли потянуть мои знания в корейском языка', '2022-03-22 06:21:53', '2022-03-22 06:21:53', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `surname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) DEFAULT '0',
  `education` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `text_more` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`id`, `surname`, `name`, `lastname`, `education`, `experience`, `text_more`, `photo`, `email`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ким', 'Хён Хва', '0', 'Московский государственный институт международных отношений МИД России (Университет МГИМО). Специализации: международная торговля и военный перевод.\r\n', '15 лет', 'Работа переводчиком на высшем государственном уровне в РФ.', '/image/korean_teacher.jpg', 'kim-hva@gmail.com', '1230', 0, NULL, NULL, NULL),
(2, 'Лаврова', 'Диана', 'Сергеевна', 'Московский Государственный Педагогический Институт ', '30 лет.', 'Есть большой опыт преподавания TOEFL, IELTS, гарантирую отличные знания. Личный опыт показывает, что каждый ученик требует особого подхода и особенного внимания к себе.', '/image/russian_teacher.jpg', 'lavrova-diana@mail.ru', '', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `surname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthday` date DEFAULT NULL,
  `photo` varchar(255) DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `surname`, `name`, `lastname`, `birthday`, `photo`, `email`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'Test', 'Test', '0124-03-12', '0', 'test@mail.ru', '$2y$10$ugKupLHQrNCELBzhoIymOebbjcIvfppmFHyN3izwH4qcyJbchw076', 0, NULL, '2022-03-22 03:41:10', '2022-03-22 03:41:10'),
(2, 'Григорьева', 'Любовь', 'Павловна', '1996-06-16', '/image/user_lyubov.jpg', 'lubov-g-16@mailru', '$2y$10$78BvuZfqKA5VBq3/Y3HNjutI8HvE1eNCGiTYvrru33jy8lXmA5KDu', 0, NULL, '2022-03-22 05:02:39', '2022-03-22 05:02:39'),
(3, 'Кропис', 'Денис', 'Тимурович', '1989-03-12', '/image/user_denis.jpg', 'kropis-d@mail.ru', '$2y$10$sIpFeJEwPGrEtTQI218pb.vRmg1EfM0YnD5FYteO0nf/2EU4OG86m', 0, NULL, '2022-03-22 05:37:00', '2022-03-22 05:37:00'),
(4, 'Сабаев', 'Кирилл', 'Олегович', '2002-11-18', '/image/user_kirill.jpg', 'kirill-sabaev@mail.ru', '$2y$10$wwJydeIvuSMfFYu/zQNuBeVv7SqOiWq5GOEJzMEt.6qIMTJ1Zfdmq', 0, NULL, '2022-03-22 06:20:38', '2022-03-22 06:20:38');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id_courses`);

--
-- Индексы таблицы `recordings`
--
ALTER TABLE `recordings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `recordings`
--
ALTER TABLE `recordings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
