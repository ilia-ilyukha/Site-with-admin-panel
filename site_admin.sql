-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: mysql:3306
-- Время создания: Фев 16 2022 г., 15:55
-- Версия сервера: 5.6.51
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `site_admin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `annotation` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` char(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `name`, `author_id`, `annotation`, `text`, `image`, `created_at`, `updated_at`, `status_id`) VALUES
(1, 'First post', 1, 'To get started, let\'s create an Eloquent model. Models typically live in the app\\Models directory and extend the Illuminate\\Database\\Eloquent\\Model cl', 'To get started, let\'s create an Eloquent model. Models typically live in the app\\Models directory and extend the Illuminate\\Database\\Eloquent\\Model class. You may use the make:model Artisan command to generate a new model:\r\n\r\nTo get started, let\'s create an Eloquent model. Models typically live in the app\\Models directory and extend the Illuminate\\Database\\Eloquent\\Model class. You may use the make:model Artisan command to generate a new model:\r\n\r\nTo get started, let\'s create an Eloquent model. Models typically live in the app\\Models directory and extend the Illuminate\\Database\\Eloquent\\Model class. You may use the make:model Artisan command to generate a new model:\r\n\r\n', 'https://telecomdom.com/wp-content/uploads/2020/02/kartinki-na-telefon-5-576x1024.jpg', '2022-01-05 17:22:49', NULL, 2),
(2, 'Second article', 1, 'Sorry for what???!!!', 'Sorry for what???!!!Sorry for what???!!!Sorry for what???!!!Sorry for what???!!!Sorry for what???!!!Sorry for what???!!!Sorry for what???!!!Sorry for what???!!!Sorry for what???!!!Sorry for what???!!!Sorry for what???!!!Sorry for what???!!!', 'https://ribalych.ru/wp-content/uploads/2020/03/smeshnye-kartinki-nastroenie_001-1.jpg', '2022-01-06 17:12:02', '2022-01-06 17:12:02', 2),
(5, 'Fifth great post 555', 2, 'Fifth great postFifth great post Wee-wee222', 'Fifth great postFifth great postFifth great postFifth great postWeWEwew', 'no-image.jpg', '2022-01-17 00:00:00', '2022-01-17 10:56:23', 1),
(6, 'Spider-man lego', 2, 'Spider-man lego Spider-man legoSpider-man lego', '&lt;!-- Title --&gt;\r\n&lt;h2&gt;Spider-Man Adventures&lt;/h2&gt;\r\n&lt;!-- Author --&gt;\r\n\r\n&lt;p&gt;by &lt;a href=\"#\"&gt;Rob Smith&lt;/a&gt;&lt;/p&gt;\r\n&lt;!-- Date/Time --&gt;\r\n\r\n&lt;p&gt;Posted on May 15, 2023 at 12:00 PM&lt;/p&gt;\r\n&lt;!-- Preview Image --&gt;\r\n\r\n&lt;p&gt;&lt;img alt=\"Lego Spider-Man\" src=\"https://res.cloudinary.com/dfog0e294/image/upload/v1547130131/webdev/Blog/spider-post-01.png\" /&gt; &lt;!-- Post Content --&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer facilisis sollicitudin nisl non dignissim. Phasellus hendrerit nisl et massa cursus suscipit. Donec pulvinar diam dolor, sit amet vestibulum purus faucibus posuere. Proin a nunc et felis aliquam sodales. Suspendisse dapibus ex a nulla faucibus, id venenatis risus facilisis. Nullam non aliquet odio. Phasellus et neque feugiat nunc auctor pretium eu quis magna. Praesent mattis metus vitae ornare hendrerit. Maecenas hendrerit nibh id commodo rhoncus.&lt;/p&gt;\r\n\r\n&lt;p&gt;Vestibulum vehicula quam id quam lobortis convallis. Nullam quis pulvinar dolor. Pellentesque semper bibendum facilisis. Ut vitae interdum tortor. Etiam mattis dui ut dui pharetra, ac auctor ligula rhoncus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacus leo, scelerisque id commodo sed, feugiat at mi. Donec quis ex justo.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=\"Lego Spider-Man\" src=\"https://res.cloudinary.com/dfog0e294/image/upload/v1547130606/webdev/Blog/spider-post-02.png\" /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;In dictum ex orci, vitae ultricies ipsum sagittis et. Nam in risus non mauris dictum consequat ac vitae nisl. Vestibulum sed mauris gravida, rhoncus augue eget, finibus libero. Vivamus vel quam congue, vehicula elit eu, congue nulla. Cras at dui sit amet nibh pharetra aliquam. Morbi rhoncus metus metus, eget tincidunt libero mollis at. Donec ut sodales diam, quis finibus libero. Vivamus posuere pharetra nibh, nec tempor nulla. Integer vel mauris rhoncus, iaculis augue quis, scelerisque tellus.&lt;/p&gt;\r\n\r\n&lt;blockquote&gt;\r\n&lt;p&gt;Nam nec lectus in nulla interdum ultrices mollis id dui. Duis sed sapien eu felis elementum scelerisque at ac nibh. Pellentesque vehicula sed turpis eget pellentesque. Phasellus ut sapien hendrerit, egestas diam ac, placerat felis. Vivamus pharetra odio quis placerat pulvinar.&lt;/p&gt;\r\n&lt;strong&gt;Someone in Gotham&lt;/strong&gt;&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;&lt;img alt=\"Lego Spider-Man\" src=\"https://res.cloudinary.com/dfog0e294/image/upload/v1547130607/webdev/Blog/spider-post-03.png\" /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;In hac habitasse platea dictumst. Curabitur vulputate, nunc sed tempus vehicula, turpis urna mattis augue, sed lobortis urna magna id libero. Nam eget erat mattis, molestie lorem id, pharetra nisl. Suspendisse facilisis odio volutpat, porta dui in, sollicitudin augue. Integer id nisl ac neque pretium sollicitudin. In nibh lorem, faucibus ut mattis et, lacinia in ante. Nunc turpis elit, pellentesque at vestibulum a, dignissim non felis. Nullam vitae facilisis ex. Aenean ut volutpat quam. Proin ut varius metus. Pellentesque ut arcu nibh. Donec pretium, orci sit amet semper feugiat, quam massa sagittis felis, vel tempus neque nulla viverra magna. Pellentesque non blandit arcu, et blandit lacus. Quisque fringilla odio sapien, a molestie quam molestie nec. Suspendisse posuere mattis eros.&lt;/p&gt;', 'no-image.jpg', '2022-01-19 00:00:00', '2022-01-19 12:39:57', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `article_authors`
--

CREATE TABLE `article_authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nick` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `article_authors`
--

INSERT INTO `article_authors` (`id`, `name`, `surname`, `nick`) VALUES
(1, 'Billy', 'Herrington', 'Master'),
(2, 'John', 'Smith', 'Agent 007');

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_list_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cards`
--

INSERT INTO `cards` (`id`, `name`, `desc_list_id`, `created_at`, `updated_at`) VALUES
(1, 'Card number 1', 3, '2022-01-26 09:15:39', '2022-01-26 09:15:39'),
(2, 'Card number 2', 3, '2022-01-26 09:15:39', '2022-01-26 09:15:39'),
(3, 'Card number 3', 3, '2022-01-26 09:15:39', '2022-01-26 09:15:39'),
(4, 'Card number 4', 3, '2022-01-26 09:15:39', '2022-01-26 09:15:39'),
(5, 'Card number 5', 3, '2022-01-26 09:15:39', '2022-01-26 09:15:39'),
(6, 'Card number 6', 3, '2022-01-26 09:15:39', '2022-01-26 09:15:39'),
(7, 'Card number 7', 3, '2022-01-26 09:15:39', '2022-01-26 09:15:39'),
(8, 'Card number 8', 3, '2022-01-26 09:15:39', '2022-01-26 09:15:39'),
(9, 'Card number 9', 3, '2022-01-26 09:15:39', '2022-01-26 09:15:39');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'First category', '2022-01-13 17:47:54', '2022-01-13 17:47:54');

-- --------------------------------------------------------

--
-- Структура таблицы `descs`
--

CREATE TABLE `descs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `descs`
--

INSERT INTO `descs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Desc number 1', '2022-01-26 09:13:40', '2022-01-26 09:13:40'),
(2, 'Desc number 2', '2022-01-26 09:13:40', '2022-01-26 11:10:31');

-- --------------------------------------------------------

--
-- Структура таблицы `desc_lists`
--

CREATE TABLE `desc_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `desc_lists`
--

INSERT INTO `desc_lists` (`id`, `name`, `desc_id`, `created_at`, `updated_at`) VALUES
(2, 'Desc list number 2', 2, '2022-01-26 09:15:05', '2022-01-26 09:15:05'),
(3, 'Desc list number 3', 2, '2022-01-26 09:15:05', '2022-01-26 09:15:05'),
(4, 'Desc list number 4', 1, '2022-01-26 09:15:05', '2022-01-26 09:15:05'),
(5, 'Desc list number 5', 1, '2022-01-26 09:15:05', '2022-01-26 09:15:05');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `card_id`, `created_at`, `updated_at`) VALUES
(5, 'Jobs number 1', 3, '2022-01-26 09:16:01', '2022-01-26 09:16:01'),
(6, 'Jobs number 2', 3, '2022-01-26 09:16:01', '2022-01-26 09:16:01'),
(7, 'Jobs number 3', 3, '2022-01-26 09:16:01', '2022-01-26 09:16:01'),
(8, 'Jobs number 4', 3, '2022-01-26 09:16:02', '2022-01-26 09:16:02'),
(9, 'Jobs number 5', 3, '2022-01-26 09:16:02', '2022-01-26 09:16:02'),
(10, 'Jobs number 6', 3, '2022-01-26 09:16:02', '2022-01-26 09:16:02'),
(11, 'Jobs number 7', 3, '2022-01-26 09:16:02', '2022-01-26 09:16:02'),
(12, 'Jobs number 8', 3, '2022-01-26 09:16:02', '2022-01-26 09:16:02'),
(13, 'Jobs number 9', 3, '2022-01-26 09:16:02', '2022-01-26 09:16:02');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_05_151717_create_permission_tables', 2),
(7, '2020_12_01_184302_create_posts_table', 3),
(8, '2020_12_01_184321_create_categories_table', 3),
(9, '2021_12_29_104743_create_articles_table', 4),
(10, '2022_01_06_151415_update_article_table', 5),
(11, '2021_12_29_104823_create_article_authors_table', 6),
(12, '2022_01_18_073736_create_tasks_table', 7),
(13, '2022_01_18_103326_create_tasks_developers_table', 8),
(14, '2022_01_20_133906_create_products_table', 9),
(15, '2022_01_24_094926_create_descs_table', 10),
(16, '2022_01_24_095051_create_desc_lists_table', 10),
(17, '2022_01_24_095104_create_cards_table', 10),
(18, '2022_01_24_095110_create_jobs_table', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 3),
(1, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('b@gmail.com', '$2y$10$gkbjfDUF8DNLrL3wEGoHAuDWDLWNnSlxC8KlyVk6r/M.zQ7wjAjCq', '2022-02-02 13:26:31');

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model` char(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` char(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `stock_status_id` int(11) NOT NULL,
  `image` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(15,8) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `model`, `text`, `sku`, `quantity`, `stock_status_id`, `image`, `price`, `status`) VALUES
(1, 'Iphone', '<p>This will route all traffic from /parts to the SparePartsController and /parts/categories will call the SpCategoriesController</p>\r\n\r\n<p>Look at the documentation for more information:&nbsp;<a href=\"https://laravel.com/docs/5.3/routing#route-groups\">https://laravel.com/docs/5.3/routing#route-groups</a></p>\r\n\r\n<p>If you want to call a specific function of the Controller just write:</p>\r\n\r\n<p>Route::get(&#39;/&#39;, &#39;SparePartsController@functionName&#39;)</p>', '123123', 999, 1, 'https://www.notebookcheck-ru.com/fileadmin/Notebooks/Apple/iPhone_13_Pro/4_to_3_Teaser_Apple_iPhone_13_Pro.jpg', 999.00000000, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user', 'web', '2022-01-05 15:20:28', '2022-01-05 15:20:28'),
(2, 'admin', 'web', '2022-01-05 15:20:44', '2022-01-05 15:20:44');

-- --------------------------------------------------------

--
-- Структура таблицы `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assignee` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `priority_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `assignee`, `description`, `author_id`, `created_at`, `updated_at`, `priority_id`) VALUES
(1, 'First task', '5', 'Create task page', 6, '2022-01-18 10:15:39', '2022-01-18 14:41:28', 0),
(2, 'Second task', '6', 'Second taskSecond taskSecond taskSecond task', 1, '2022-01-18 00:00:00', '2022-01-18 00:00:00', 0),
(3, 'Third task', '5', 'Third taskThird taskThird taskThird task', 1, '2022-01-18 00:00:00', '2022-01-18 00:00:00', 0),
(6, 'Super task', '3', 'Super taskSuper taskSuper taskSuper task', 1, '2022-01-18 00:00:00', '2022-02-01 15:36:11', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `tasks_developers`
--

CREATE TABLE `tasks_developers` (
  `task_id` int(11) NOT NULL,
  `developer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tasks_developers`
--

INSERT INTO `tasks_developers` (`task_id`, `developer_id`) VALUES
(1, 1),
(1, 3),
(6, 3),
(6, 4),
(6, 5),
(6, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `tasks_hours`
--

CREATE TABLE `tasks_hours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_id` int(11) NOT NULL,
  `assignee_id` int(11) NOT NULL,
  `description` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tasks_hours`
--

INSERT INTO `tasks_hours` (`id`, `task_id`, `assignee_id`, `description`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Wee-wee', 2, '2022-01-18 00:00:00', '2022-01-18 09:22:03'),
(2, 1, 1, 'Again work with slaves', 3, '2022-01-18 00:00:00', '2022-01-18 09:41:37'),
(3, 1, 1, 'Luxembourg', 5, '2022-01-18 00:00:00', '2022-01-18 09:51:36'),
(4, 1, 6, 'Testing', 1, '2022-01-18 00:00:00', '2022-01-18 10:42:46'),
(5, 1, 1, 'Outside Hong Kong', 8, '2022-01-21 00:00:00', '2022-01-21 11:39:38'),
(6, 6, 1, 'Luxembourg', 1, '2022-02-01 00:00:00', '2022-02-01 14:57:59');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sudo', 'sudo@gmail.com', NULL, '$2y$10$ymvBCqX4a4.IORzwumQ2WOUV8SApmcb69u22XhpNkEfpuRVXlmwXm', NULL, NULL, NULL, '2022-01-05 15:18:39', '2022-01-05 15:18:39'),
(3, 'Test Test', '6@gmail.com', NULL, '$2y$10$ZYQ5EEtronuz3mHRtlG.JOmXC.QIZBSMyFzpl9XxFuQXm2NfKmasa', NULL, NULL, NULL, '2022-01-05 15:26:19', '2022-01-05 15:26:19'),
(4, 'Test Test', '7@gmail.com', NULL, '$2y$10$WLoSSfQCDy33Jd2M4D01P.BmYEvAH/Cth4xJAW/AXx47By93.vnq6', NULL, NULL, NULL, '2022-01-12 10:47:44', '2022-01-12 10:47:44'),
(5, 'Dungeon Master', 'd@gmail.com', NULL, '$2y$10$ZFNc5XRc6uvAlwBXHZFRWuSuKtECn.UMPRv8Za0n97.3bYBX4q/fG', NULL, NULL, NULL, '2022-01-18 10:37:43', '2022-01-18 10:37:43'),
(6, 'Billy The Kid', 'b@gmail.com', NULL, '$2y$10$3kyG2R/hLF0yw3gIN8g54..mJsYOL4StsFYinw9fw.jduPYVkEEm6', NULL, NULL, NULL, '2022-01-18 10:38:19', '2022-01-18 10:38:19');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `article_authors`
--
ALTER TABLE `article_authors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cards_desc_list_id_foreign` (`desc_list_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `descs`
--
ALTER TABLE `descs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `desc_lists`
--
ALTER TABLE `desc_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `desc_lists_desc_id_foreign` (`desc_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_card_id_foreign` (`card_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Индексы таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Индексы таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tasks_hours`
--
ALTER TABLE `tasks_hours`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `article_authors`
--
ALTER TABLE `article_authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `descs`
--
ALTER TABLE `descs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `desc_lists`
--
ALTER TABLE `desc_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `tasks_hours`
--
ALTER TABLE `tasks_hours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cards_desc_list_id_foreign` FOREIGN KEY (`desc_list_id`) REFERENCES `desc_lists` (`id`);

--
-- Ограничения внешнего ключа таблицы `desc_lists`
--
ALTER TABLE `desc_lists`
  ADD CONSTRAINT `desc_lists_desc_id_foreign` FOREIGN KEY (`desc_id`) REFERENCES `descs` (`id`);

--
-- Ограничения внешнего ключа таблицы `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_card_id_foreign` FOREIGN KEY (`card_id`) REFERENCES `cards` (`id`);

--
-- Ограничения внешнего ключа таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
