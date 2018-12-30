-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 30, 2018 at 06:21 AM
-- Server version: 5.7.22-0ubuntu18.04.1
-- PHP Version: 7.2.4-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agro`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `body`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>Компания &laquo;Агродоход&raquo;</strong> &mdash; это группа разнопрофильных профессионалов в сфере агропрома. Наша миссия &mdash; создание мощного альянса участников реального сектора экономики. Это способствует организационной и экономической эффективности.</p>\r\n<p><strong>Наши цели и задачи:</strong></p>\r\n<ul>\r\n<li>создание сервиса одного окна для сельхозпроизводителей;</li>\r\n<li>освободить российского фермера от груза непрофильной, но необходимой деятельности;</li>\r\n<li>создать необходимые условия, чтобы сельхозпроизводитель мог видеть и управлять результатами своего труда в реальном времени;</li>\r\n<li>обозначить точки роста каждого хозяйства.</li>\r\n</ul>', '2018-12-24 17:13:40', '2018-12-24 17:13:40');

-- --------------------------------------------------------

--
-- Table structure for table `activs`
--

CREATE TABLE `activs` (
  `id` int(10) UNSIGNED NOT NULL,
  `option` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activs`
--

INSERT INTO `activs` (`id`, `option`, `link`, `created_at`, `updated_at`) VALUES
(1, 'option2', '/uslugi#wcredits', '2018-12-30 06:08:26', '2018-12-30 06:08:26'),
(2, 'option6', '/uslugi#wbuh', '2018-12-30 06:08:42', '2018-12-30 06:08:42'),
(3, 'option8', '/uslugi#wurob', '2018-12-30 06:08:58', '2018-12-30 06:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `captions`
--

CREATE TABLE `captions` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci,
  `seo_text` text COLLATE utf8mb4_unicode_ci,
  `mobile_banner` text COLLATE utf8mb4_unicode_ci,
  `seo_titile` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `captions`
--

INSERT INTO `captions` (`id`, `body`, `created_at`, `updated_at`, `banner`, `seo_text`, `mobile_banner`, `seo_titile`) VALUES
(1, '<p><span style=\"color: #6fb92e;\">АгроДоход</span> &mdash; первый сервис &laquo;одного окна&raquo; для начинающих и опытных фермеров</p>', '2018-12-25 16:44:00', '2018-12-26 18:46:09', 'captions/December2018/OsU6FxoO3VXi3NM1iNEp.jpg', 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.', 'captions/December2018/PmI913zdcy9penhi1Kmz.jpg', 'Развитие сельского хозяйства в России');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(2, NULL, 1, 'Category 2', 'category-2', '2018-12-24 15:43:19', '2018-12-24 15:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'locale', 'text', 'Locale', 0, 1, 1, 1, 1, 0, NULL, 12),
(12, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(13, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(14, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(15, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(16, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(17, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(18, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(19, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(20, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(21, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(22, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(23, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(24, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(25, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(26, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(27, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(28, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(29, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(30, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(31, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(32, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(33, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(34, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(35, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(36, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(37, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(38, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(39, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(40, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(41, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(42, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(43, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(44, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(45, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(46, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(47, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(48, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(49, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(50, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(51, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(52, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(53, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(54, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(55, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(56, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(57, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(58, 7, 'question', 'text', 'Вопрос', 0, 1, 1, 1, 1, 1, '{}', 2),
(59, 7, 'answer', 'text_area', 'Ответ', 0, 1, 1, 1, 1, 1, '{}', 3),
(60, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(61, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(62, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(63, 8, 'name', 'text', 'Имя', 0, 1, 1, 1, 1, 1, '{}', 2),
(64, 8, 'photo', 'image', 'Фото', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"263\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"263\",\"height\":\"190\"}}]}', 3),
(65, 8, 'position', 'text', 'Должность', 0, 1, 1, 1, 1, 1, '{}', 4),
(66, 8, 'youtube', 'text', 'Ссылка на видео', 0, 1, 1, 1, 1, 1, '{}', 5),
(67, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(68, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(69, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(70, 9, 'body', 'rich_text_box', 'Body', 0, 1, 1, 1, 1, 1, '{}', 2),
(71, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(72, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(73, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(74, 10, 'body', 'rich_text_box', 'Body', 0, 1, 1, 1, 1, 1, '{}', 2),
(75, 10, 'ok', 'text', 'Ok', 0, 1, 1, 1, 1, 1, '{}', 3),
(76, 10, 'inst', 'text', 'Inst', 0, 1, 1, 1, 1, 1, '{}', 4),
(77, 10, 'facebook', 'text', 'Facebook', 0, 1, 1, 1, 1, 1, '{}', 5),
(78, 10, 'vk', 'text', 'Vk', 0, 1, 1, 1, 1, 1, '{}', 6),
(79, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(80, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(81, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(82, 11, 'phone', 'text', 'Телефон', 0, 1, 1, 1, 1, 1, '{}', 2),
(83, 11, 'atel', 'text', 'Ссылка', 0, 1, 1, 1, 1, 1, '{}', 3),
(84, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(85, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(86, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(87, 12, 'body', 'rich_text_box', 'Текст заголовка', 0, 1, 1, 1, 1, 1, '{}', 2),
(88, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(89, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(90, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(91, 13, 'title', 'text', 'Закголовок', 0, 1, 1, 1, 1, 1, '{}', 2),
(92, 13, 'body', 'rich_text_box', 'Текст', 0, 1, 1, 1, 1, 1, '{}', 4),
(93, 13, 'background', 'image', 'Фоновое изображение на странице', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1500\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 5),
(94, 13, 'formtitle', 'text_area', 'Текст над формой', 0, 1, 1, 1, 1, 1, '{}', 6),
(95, 13, 'circle', 'image', 'Изображение в круге', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"179\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(96, 13, 'image', 'image', 'Изображение для главной', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"360\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 8),
(97, 13, 'showmainpage', 'select_dropdown', 'Показать на главной', 0, 1, 1, 1, 1, 1, '{\"default\":\"option1\",\"options\":{\"option1\":\"\\u041d\\u0435 \\u043f\\u043e\\u043a\\u0430\\u0437\\u043e\\u0432\\u0430\\u0442\\u044c\",\"option2\":\"\\u041f\\u043e\\u043a\\u0430\\u0437\\u0430\\u0442\\u044c \\u043a\\u0430\\u0440\\u0442\\u043e\\u0447\\u043a\\u043e\\u0439 \\u043d\\u0430 \\u0433\\u043b\\u0430\\u0432\\u043d\\u043e\\u0439\",\"option3\":\"\\u041f\\u043e\\u043a\\u0430\\u0437\\u0430\\u0442\\u044c \\u0432 \\u043a\\u0440\\u0443\\u0433\\u0435 \\u043d\\u0430 \\u0433\\u043b\\u0430\\u0432\\u043d\\u043e\\u0439\"}}', 9),
(98, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 10),
(99, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(100, 13, 'seo_title', 'text', 'Seo Title', 0, 1, 1, 1, 1, 1, '{}', 12),
(101, 13, 'seo_decription', 'text', 'Seo Decription', 0, 1, 1, 1, 1, 1, '{}', 13),
(102, 13, 'seo_keywords', 'text', 'Seo Keywords', 0, 1, 1, 1, 1, 1, '{}', 14),
(103, 13, 'description', 'text_area', 'Краткое описание', 0, 1, 1, 1, 1, 1, '{}', 3),
(104, 13, 'slug', 'text', 'Slug', 0, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:directions,slug\"}}', 15),
(105, 12, 'banner', 'image', 'Банер', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"null\",\"height\":\"449\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 4),
(106, 12, 'seo_text', 'text_area', 'Seo Текст', 0, 1, 1, 1, 1, 1, '{}', 7),
(107, 12, 'mobile_banner', 'image', 'Мобильный банер', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"885\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 5),
(108, 12, 'seo_titile', 'text', 'Seo Заголовок текста', 0, 1, 1, 1, 1, 1, '{}', 6),
(109, 14, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(110, 14, 'option', 'select_dropdown', 'Блок', 0, 1, 1, 1, 1, 1, '{\"default\":\"option1\",\"options\":{\"option1\":\"\\u0413\\u0440\\u0430\\u043d\\u0442\\u044b, \\u0441\\u0443\\u0431\\u0441\\u0438\\u0434\\u0438\\u0438 \\u0438 \\u043a\\u0440\\u0435\\u0434\\u0438\\u0442\\u043e\\u0432\\u0430\\u043d\\u0438\\u0435 \\u0434\\u043b\\u044f \\u0444\\u0435\\u0440\\u043c\\u0435\\u0440\\u043e\\u0432 \\u0438 \\u0441\\u0435\\u043b\\u044c\\u0445\\u043e\\u0437\\u043f\\u0440\\u043e\\u0438\\u0437\\u0432\\u043e\\u0434\\u0438\\u0442\\u0435\\u043b\\u0435\\u0439\",\"option2\":\"\\u0421\\u043f\\u0435\\u0446\\u0438\\u0430\\u043b\\u0438\\u0437\\u0438\\u0440\\u043e\\u0432\\u0430\\u043d\\u043d\\u0430\\u044f \\u0431\\u0443\\u0445\\u0433\\u0430\\u043b\\u0442\\u0435\\u0440\\u0438\\u044f\",\"option3\":\"\\u041e\\u043f\\u0435\\u0440\\u0430\\u0446\\u0438\\u0438 \\u0441 \\u0437\\u0435\\u043c\\u043b\\u0435\\u0439 \\u0438 \\u043d\\u0435\\u0434\\u0432\\u0438\\u0436\\u0438\\u043c\\u043e\\u0441\\u0442\\u044c\\u044e\",\"option4\":\"\\u042e\\u0440\\u0438\\u0434\\u0438\\u0447\\u0435\\u0441\\u043a\\u043e\\u0435 \\u0441\\u043e\\u043f\\u0440\\u043e\\u0432\\u043e\\u0436\\u0434\\u0435\\u043d\\u0438\\u0435\",\"option5\":\"\\u0412\\u0435\\u0434\\u0435\\u043d\\u0438\\u0435 \\u0443\\u0447\\u0451\\u0442\\u0430 \\u0432 \\u0424\\u0413\\u0418\\u0421 \\u00ab\\u041c\\u0435\\u0440\\u043a\\u0443\\u0440\\u0438\\u0439\\u00bb\",\"option6\":\"\\u0413\\u0440\\u0430\\u043d\\u0442\\u044b, \\u043a\\u0440\\u0435\\u0434\\u0438\\u0442\\u043e\\u0432\\u0430\\u043d\\u0438\\u0435 \\u0438 \\u0441\\u0443\\u0431\\u0441\\u0438\\u0434\\u0438\\u0438\",\"option7\":\"\\u041c\\u044b \\u0437\\u043d\\u0430\\u0435\\u043c \\u0432\\u0441\\u0435 \\u043d\\u044e\\u0430\\u043d\\u0441\\u044b \\u0432\\u0430\\u0448\\u0435\\u0433\\u043e \\u0431\\u0438\\u0437\\u043d\\u0435\\u0441\\u0430\",\"option8\":\"\\u041c\\u044b \\u0443\\u043c\\u0435\\u0435\\u043c \\u044d\\u043a\\u043e\\u043d\\u043e\\u043c\\u0438\\u0442\\u044c \\u0432\\u0430\\u0448\\u0438 \\u0434\\u0435\\u043d\\u044c\\u0433\\u0438\",\"option9\":\"\\u041c\\u044b \\u0440\\u0430\\u0441\\u0448\\u0438\\u0440\\u044f\\u0435\\u043c \\u0432\\u0430\\u0448\\u0438 \\u0432\\u043e\\u0437\\u043c\\u043e\\u0436\\u043d\\u043e\\u0441\\u0442\\u0438\",\"option10\":\"\\u041f\\u043e\\u043a\\u0443\\u043f\\u043a\\u0430 \\u0441\\u0435\\u043b\\u044c\\u0441\\u043a\\u043e\\u0445\\u043e\\u0437\\u044f\\u0439\\u0441\\u0442\\u0432\\u0435\\u043d\\u043d\\u044b\\u0445 \\u0437\\u0435\\u043c\\u0435\\u043b\\u044c\",\"option11\":\"\\u041f\\u0440\\u0438\\u043e\\u0431\\u0440\\u0435\\u0442\\u0435\\u043d\\u0438\\u0435 \\u0441\\u0435\\u043b\\u044c\\u0441\\u043a\\u043e\\u0445\\u043e\\u0437\\u044f\\u0439\\u0441\\u0442\\u0432\\u0435\\u043d\\u043d\\u043e\\u0439 \\u043d\\u0435\\u0434\\u0432\\u0438\\u0436\\u0438\\u043c\\u043e\\u0441\\u0442\\u0438\",\"option12\":\"\\u0421\\u0442\\u0440\\u043e\\u0438\\u0442\\u0435\\u043b\\u044c\\u0441\\u0442\\u0432\\u043e \\u0432 \\u0441\\u0435\\u043b\\u044c\\u0441\\u043a\\u043e\\u043c \\u0445\\u043e\\u0437\\u044f\\u0439\\u0441\\u0442\\u0432\\u0435\",\"option13\":\"\\u041f\\u043e\\u043c\\u043e\\u0449\\u044c \\u0432 \\u0441\\u043e\\u0441\\u0442\\u0430\\u0432\\u043b\\u0435\\u043d\\u0438\\u0438 \\u0434\\u043e\\u0433\\u043e\\u0432\\u043e\\u0440\\u0430\",\"option14\":\"\\u0421\\u0443\\u0434\\u0435\\u0431\\u043d\\u044b\\u0435 \\u0441\\u043f\\u043e\\u0440\\u044b \\u0441 \\u043a\\u043e\\u043d\\u0442\\u0440\\u0430\\u0433\\u0435\\u043d\\u0442\\u0430\\u043c\\u0438 \\u0438 \\u043a\\u043e\\u043d\\u0442\\u0440\\u043e\\u043b\\u0438\\u0440\\u0443\\u044e\\u0449\\u0438\\u043c\\u0438 \\u043e\\u0440\\u0433\\u0430\\u043d\\u0430\\u043c\\u0438\",\"option15\":\"\\u0420\\u0435\\u0433\\u0438\\u0441\\u0442\\u0440\\u0430\\u0446\\u0438\\u044f \\u0444\\u0435\\u0440\\u043c\\u0435\\u0440\\u0441\\u043a\\u0438\\u0445 \\u0445\\u043e\\u0437\\u044f\\u0439\\u0441\\u0442\\u0432 \\u0438 \\u043a\\u043e\\u043e\\u043f\\u0435\\u0440\\u0430\\u0442\\u0438\\u0432\\u043e\\u0432\",\"option16\":\"\\u0412\\u0430\\u0436\\u043d\\u043e \\u0437\\u043d\\u0430\\u0442\\u044c!\"}}', 2),
(111, 14, 'body', 'rich_text_box', 'Описание', 0, 1, 1, 1, 1, 1, '{}', 3),
(112, 14, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(113, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(114, 15, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(115, 15, 'title', 'text', 'Title', 0, 1, 1, 0, 1, 1, '{}', 2),
(116, 15, 'name', 'text', 'Name', 0, 1, 1, 0, 1, 1, '{}', 3),
(117, 15, 'email', 'text', 'Email', 0, 1, 1, 0, 1, 1, '{}', 4),
(118, 15, 'tel', 'text', 'Tel', 0, 1, 1, 0, 1, 1, '{}', 5),
(119, 15, 'text', 'text_area', 'Text', 0, 1, 1, 0, 1, 1, '{}', 6),
(120, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(121, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(122, 16, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(123, 16, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 2),
(124, 16, 'send', 'select_dropdown', 'Посылать?', 0, 1, 1, 1, 1, 1, '{\"default\":\"true\",\"options\":{\"true\":\"\\u0414\\u0430\",\"false\":\"\\u041d\\u0435\\u0442\"}}', 3),
(125, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(126, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(127, 17, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(128, 17, 'page', 'select_dropdown', 'Выберите страницу', 0, 1, 1, 1, 1, 1, '{\"default\":\"option5\",\"options\":{\"option1\":\"\\u041e \\u043d\\u0430\\u0441\",\"option2\":\"FAQ\",\"option3\":\"\\u0421\\u043e\\u0431\\u044b\\u0442\\u0438\\u044f\",\"option4\":\"\\u0423\\u0441\\u043b\\u0443\\u0433\\u0438\",\"option5\":\"\\u0413\\u043b\\u0430\\u0432\\u043d\\u0430\\u044f\"}}', 2),
(129, 17, 'seo_title', 'text', 'Seo Title', 0, 1, 1, 1, 1, 1, '{}', 3),
(130, 17, 'seo_description', 'text', 'Seo Description', 0, 1, 1, 1, 1, 1, '{}', 4),
(131, 17, 'seo_keywords', 'text', 'Seo Keywords', 0, 1, 1, 1, 1, 1, '{}', 5),
(132, 17, 'page_title', 'text', 'H1', 0, 1, 1, 1, 1, 1, '{}', 6),
(133, 17, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(134, 17, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(135, 18, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(136, 18, 'option', 'select_dropdown', 'Выбор направления', 0, 1, 1, 1, 1, 1, '{\"default\":\"option1\",\"options\":{\"option1\":\"\\u0414\\u0438\\u0441\\u0442\\u0440\\u0438\\u0431\\u044c\\u044e\\u0446\\u0438\\u044f \\u0438 \\u0441\\u0431\\u044b\\u0442 \\u043f\\u0440\\u043e\\u0434\\u0443\\u043a\\u0446\\u0438\\u0438\",\"option2\":\"\\u0413\\u0440\\u0430\\u043d\\u0442\\u044b, \\u0441\\u0443\\u0431\\u0441\\u0438\\u0434\\u0438\\u0438 \\u0438 \\u043a\\u0440\\u0435\\u0434\\u0438\\u0442\\u043e\\u0432\\u0430\\u043d\\u0438\\u0435\",\"option3\":\"\\u0415\\u0434\\u0438\\u043d\\u044b\\u0439 \\u0446\\u0435\\u043d\\u0442\\u0440 \\u0437\\u0430\\u043a\\u0443\\u043f\\u043e\\u043a\",\"option4\":\"\\u041f\\u0440\\u0438\\u0432\\u043b\\u0435\\u0447\\u0435\\u043d\\u0438\\u0435 \\u0438\\u043d\\u0432\\u0435\\u0441\\u0442\\u0438\\u0446\\u0438\\u0439\",\"option5\":\"\\u0422\\u0435\\u0445\\u043d\\u043e\\u043b\\u043e\\u0433\\u0438\\u0438 \\u0438 \\u0438\\u043d\\u043d\\u043e\\u0432\\u0430\\u0446\\u0438\\u0438\",\"option6\":\"\\u0411\\u0443\\u0445\\u0433\\u0430\\u043b\\u0442\\u0435\\u0440\\u0441\\u043a\\u043e\\u0435 \\u0441\\u043e\\u043f\\u0440\\u043e\\u0432\\u043e\\u0436\\u0434\\u0435\\u043d\\u0438\\u0435\",\"option7\":\"\\u041f\\u0440\\u043e\\u0438\\u0437\\u0432\\u043e\\u0434\\u0441\\u0442\\u0432\\u0435\\u043d\\u043d\\u044b\\u0439 \\u0430\\u0443\\u0434\\u0438\\u0442\",\"option8\":\"\\u042e\\u0440\\u0438\\u0434\\u0438\\u0447\\u0435\\u0441\\u043a\\u043e\\u0435 \\u0441\\u043e\\u043f\\u0440\\u043e\\u0432\\u043e\\u0436\\u0434\\u0435\\u043d\\u0438\\u0435\",\"option9\":\"\\u0410\\u043d\\u0430\\u043b\\u0438\\u0442\\u0438\\u0447\\u0435\\u0441\\u043a\\u0438\\u0439 \\u0446\\u0435\\u043d\\u0442\\u0440\"}}', 2),
(137, 18, 'link', 'text', 'ссылка на страницу', 0, 1, 1, 1, 1, 1, '{}', 3),
(138, 18, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(139, 18, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', '', '', 1, 0, NULL, '2018-12-24 15:43:17', '2018-12-24 15:43:17'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2018-12-24 15:43:17', '2018-12-24 15:43:17'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2018-12-24 15:43:17', '2018-12-24 15:43:17'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(7, 'faqs', 'faqs', 'Вопросы и ответы', 'Вопросы и ответы', 'voyager-question', 'App\\Faq', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-12-24 15:49:02', '2018-12-24 15:49:02'),
(8, 'teams', 'teams', 'Команда', 'Команда', 'voyager-people', 'App\\Team', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-12-24 17:03:14', '2018-12-24 17:03:14'),
(9, 'abouts', 'abouts', 'О нас', 'О нас', 'voyager-receipt', 'App\\About', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-12-24 17:13:18', '2018-12-24 17:13:18'),
(10, 'footers', 'footers', 'Footer', 'Footers', 'voyager-archive', 'App\\Footer', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-12-25 16:19:08', '2018-12-27 00:11:40'),
(11, 'phones', 'phones', 'Телефон', 'телефоны', 'voyager-telephone', 'App\\Phone', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-12-25 16:32:28', '2018-12-25 16:32:28'),
(12, 'captions', 'captions', 'Главная страница', 'Главная страница', 'voyager-bar-chart', 'App\\Caption', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-12-25 16:42:18', '2018-12-26 18:45:48'),
(13, 'directions', 'directions', 'Направление деятиельности', 'Направления деятельности', NULL, 'App\\Direction', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-12-25 17:15:26', '2018-12-29 03:16:34'),
(14, 'servs', 'servs', 'Услуги', 'Услуги', 'voyager-news', 'App\\Serv', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-12-26 20:21:06', '2018-12-26 20:21:06'),
(15, 'mails', 'mails', 'Сообщения', 'Сообщения', 'voyager-mail', 'App\\Mail', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-12-26 22:51:33', '2018-12-26 22:51:33'),
(16, 'sendmails', 'sendmails', 'Emails для почты', 'Emails для почты', 'voyager-mail', 'App\\Sendmail', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-12-26 23:58:57', '2018-12-26 23:58:57'),
(17, 'seos', 'seos', 'SEO', 'SEO', 'voyager-character', 'App\\Seo', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-12-27 20:44:29', '2018-12-27 21:03:45'),
(18, 'activs', 'activs', 'Направления на главной', 'Направления на главной', 'voyager-dot-2', 'App\\Activ', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-12-30 05:56:41', '2018-12-30 05:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `directions`
--

CREATE TABLE `directions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `background` text COLLATE utf8mb4_unicode_ci,
  `formtitle` text COLLATE utf8mb4_unicode_ci,
  `circle` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `showmainpage` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seo_title` text COLLATE utf8mb4_unicode_ci,
  `seo_decription` text COLLATE utf8mb4_unicode_ci,
  `seo_keywords` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `directions`
--

INSERT INTO `directions` (`id`, `title`, `body`, `background`, `formtitle`, `circle`, `image`, `showmainpage`, `created_at`, `updated_at`, `seo_title`, `seo_decription`, `seo_keywords`, `description`, `slug`) VALUES
(1, 'Агрорынок', '<p>В России активно развиваются многие отрасли животноводства, которые обладают впечатляющей экономической эффективностью и могут приносить существенную прибыль не только конкретному фермеру, но и обеспечить наращивание внутреннего валового продукта во всей стране.</p>\r\n<p>Содержание статьи:</p>\r\n<ul>\r\n<li>Отрасли российского животноводства</li>\r\n<li>Состояние и динамика развития отрасли</li>\r\n<li>Эффективность животноводческой отрасли России</li>\r\n<li>Карта российского животноводства</li>\r\n<li>Животноводство &mdash; стратегическая отрасль экономики России.</li>\r\n</ul>', 'directions/December2018/gN71WQg1FUwA8bS21qN4.jpg', 'Хотите продать или купить сельхозпродукцию?', 'directions/December2018/IakvKZKvps7noCh5qkcj.png', 'directions/December2018/ESz4ECpTTfFYLaytCY9s.jpg', 'false', '2018-12-25 17:18:00', '2018-12-26 18:25:10', 'seo_titleas', 'seo_decc', 'keywords', 'Для каждого продавца найдётся свой покупатель. Сбыт и оптовое приобретение продукции посредством нашего сайта.', 'agrorynok');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Почему покупать удобрения, ГСМ и другие материалы дешевле через АгроДоход?', 'Став клиентом Агродохода, вы получаете возможность участвовать в системе оптовых закупок для сельскохозяйственного бизнеса. Мы напрямую работаем с производителями. \r\n\r\nОбширная клиентская и партнёрская сеть позволяет Агродоходу регулярно формировать выгодные предложения по совместной покупке удобрений, ГСМ и других необходимых для фермеров материалов.\r\n\r\nКооперируйтесь, экономьте и оптимизируйте своё хозяйство с АгроДоходом.', '2018-12-24 15:50:04', '2018-12-24 15:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `ok` text COLLATE utf8mb4_unicode_ci,
  `inst` text COLLATE utf8mb4_unicode_ci,
  `facebook` text COLLATE utf8mb4_unicode_ci,
  `vk` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `body`, `ok`, `inst`, `facebook`, `vk`, `created_at`, `updated_at`) VALUES
(1, '<div>142002, Московская область, Домодедово, улица Текстильщиков, 1Б, офис 307а</div>\r\n<div><a href=\"mailto:info@agroexpertservice.ru\">info@agroexpertservice.ru</a></div>\r\n<div><a href=\"tel:+74959026838\">+7 (495) 902-68-38</a></div>', '/', '/', '/', '/', '2018-12-25 16:19:50', '2018-12-25 16:19:50');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `name` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `tel` text COLLATE utf8mb4_unicode_ci,
  `text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `title`, `name`, `email`, `tel`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Хотите, чтобы мы ответили на ваши вопросы?', '123', NULL, NULL, NULL, '2018-12-26 22:54:09', '2018-12-26 22:54:09'),
(2, 'Хотите, чтобы мы ответили на ваши вопросы?', '123', NULL, '123', NULL, '2018-12-26 23:08:21', '2018-12-26 23:08:21'),
(3, 'Хотите, чтобы мы ответили на ваши вопросы?', '123', NULL, '123', NULL, '2018-12-26 23:08:42', '2018-12-26 23:08:42'),
(4, 'Хотите, чтобы мы ответили на ваши вопросы?', '123', NULL, '123', NULL, '2018-12-26 23:10:46', '2018-12-26 23:10:46'),
(5, 'Хотите, чтобы мы ответили на ваши вопросы?', '123', NULL, '123123', NULL, '2018-12-26 23:11:43', '2018-12-26 23:11:43'),
(6, 'Хотите, чтобы мы ответили на ваши вопросы?', '123123', NULL, '123123', NULL, '2018-12-26 23:12:48', '2018-12-26 23:12:48'),
(7, 'Оставить заявку на кредитование или субсидии', '123', NULL, '123123', NULL, '2018-12-26 23:18:57', '2018-12-26 23:18:57'),
(8, 'Стать нашим клиентом', '123423', NULL, '123123234', NULL, '2018-12-26 23:19:27', '2018-12-26 23:19:27'),
(9, 'Операции с землей и недвижимостью', '123423324', NULL, '123123234234', NULL, '2018-12-26 23:19:35', '2018-12-26 23:19:35'),
(10, 'Юридическое сопровождение', '123423324234', NULL, '123123234234', NULL, '2018-12-26 23:19:46', '2018-12-26 23:19:46'),
(11, 'Оставить заявку на ведение учета в ФГИС «Меркурий»', '12342332423422', NULL, '123123234234', NULL, '2018-12-26 23:19:53', '2018-12-26 23:19:53'),
(12, 'Бухгалтерское обслуживание', '12342332423422', NULL, '123123234234', NULL, '2018-12-26 23:20:16', '2018-12-26 23:20:16'),
(13, 'Оставить заявку на гранты, кредитование и субсидии', '123213', NULL, '123434', NULL, '2018-12-26 23:47:16', '2018-12-26 23:47:16'),
(14, 'Хотите продать или купить сельхозпродукцию?', '123123', '123@123.com', NULL, '123123', '2018-12-26 23:52:41', '2018-12-26 23:52:41'),
(15, 'Хотите продать или купить сельхозпродукцию?', '123123', '123@123.com', NULL, '123123', '2018-12-26 23:53:56', '2018-12-26 23:53:56'),
(16, 'страница: Агрорынок', '123', '123@123.com', NULL, '123', '2018-12-26 23:54:13', '2018-12-26 23:54:13'),
(17, 'Операции с землей и недвижимостью', '123213', NULL, '123123', NULL, '2018-12-27 00:05:33', '2018-12-27 00:05:33'),
(18, 'Операции с землей и недвижимостью', '123213', NULL, '123123', NULL, '2018-12-27 00:05:49', '2018-12-27 00:05:49'),
(19, 'страница \'Агрорынок\'', '123123', '123@123.com', NULL, 'asd213', '2018-12-27 00:06:15', '2018-12-27 00:06:15'),
(20, 'страница \'Агрорынок\'', '123123', '123@123.com', NULL, 'asd213', '2018-12-27 00:09:51', '2018-12-27 00:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2018-12-24 15:43:17', '2018-12-24 15:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 17, '2018-12-24 15:43:17', '2018-12-30 06:07:27', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 16, '2018-12-24 15:43:17', '2018-12-30 06:07:27', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 19, '2018-12-24 15:43:17', '2018-12-30 06:07:27', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 18, '2018-12-24 15:43:17', '2018-12-30 06:07:27', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 15, '2018-12-24 15:43:17', '2018-12-30 06:07:27', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2018-12-24 15:43:17', '2018-12-27 00:15:10', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2018-12-24 15:43:17', '2018-12-27 00:15:10', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2018-12-24 15:43:17', '2018-12-27 00:15:10', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2018-12-24 15:43:17', '2018-12-27 00:15:10', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2018-12-24 15:43:17', '2018-12-30 06:07:32', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 21, '2018-12-24 15:43:19', '2018-12-30 06:07:27', 'voyager.categories.index', NULL),
(12, 1, 'События', '', '_self', 'voyager-ticket', '#000000', NULL, 1, '2018-12-24 15:43:19', '2018-12-29 03:18:03', 'voyager.posts.index', 'null'),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 20, '2018-12-24 15:43:19', '2018-12-30 06:07:27', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2018-12-24 15:43:20', '2018-12-27 00:15:10', 'voyager.hooks', NULL),
(15, 1, 'Вопросы и ответы', '', '_self', 'voyager-question', NULL, NULL, 3, '2018-12-24 15:49:02', '2018-12-29 03:18:08', 'voyager.faqs.index', NULL),
(16, 1, 'Команда', '', '_self', 'voyager-people', NULL, NULL, 2, '2018-12-24 17:03:14', '2018-12-29 03:18:05', 'voyager.teams.index', NULL),
(17, 1, 'О нас', '', '_self', 'voyager-receipt', NULL, NULL, 4, '2018-12-24 17:13:18', '2018-12-29 03:18:10', 'voyager.abouts.index', NULL),
(18, 1, 'Footers', '', '_self', 'voyager-archive', '#000000', NULL, 6, '2018-12-25 16:19:08', '2018-12-29 03:18:20', 'voyager.footers.index', 'null'),
(19, 1, 'телефоны', '', '_self', 'voyager-telephone', NULL, NULL, 5, '2018-12-25 16:32:28', '2018-12-29 03:18:16', 'voyager.phones.index', NULL),
(20, 1, 'Главная страница', '', '_self', 'voyager-bar-chart', '#000000', NULL, 7, '2018-12-25 16:42:18', '2018-12-29 03:18:22', 'voyager.captions.index', 'null'),
(21, 1, 'Направления деят.', '', '_self', 'voyager-tools', '#000000', NULL, 8, '2018-12-25 17:15:26', '2018-12-29 03:18:25', 'voyager.directions.index', 'null'),
(22, 1, 'Услуги', '', '_self', 'voyager-news', NULL, NULL, 10, '2018-12-26 20:21:07', '2018-12-30 06:07:32', 'voyager.servs.index', NULL),
(23, 1, 'Сообщения', '', '_self', 'voyager-mail', NULL, NULL, 11, '2018-12-26 22:51:34', '2018-12-30 06:07:32', 'voyager.mails.index', NULL),
(24, 1, 'Emails для почты', '', '_self', 'voyager-mail', NULL, NULL, 13, '2018-12-26 23:58:57', '2018-12-30 06:07:32', 'voyager.sendmails.index', NULL),
(25, 1, 'SEO', '', '_self', 'voyager-character', NULL, NULL, 12, '2018-12-27 20:44:29', '2018-12-30 06:07:32', 'voyager.seos.index', NULL),
(26, 1, 'Направления на главной', '', '_self', 'voyager-dot-2', NULL, NULL, 9, '2018-12-30 05:56:41', '2018-12-30 06:07:32', 'voyager.activs.index', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2016_01_01_000000_create_pages_table', 2),
(24, '2016_01_01_000000_create_posts_table', 2),
(25, '2016_02_15_204651_create_categories_table', 2),
(26, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2018-12-24 15:43:19', '2018-12-24 15:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2018-12-24 15:43:17', '2018-12-24 15:43:17'),
(2, 'browse_bread', NULL, '2018-12-24 15:43:17', '2018-12-24 15:43:17'),
(3, 'browse_database', NULL, '2018-12-24 15:43:17', '2018-12-24 15:43:17'),
(4, 'browse_media', NULL, '2018-12-24 15:43:17', '2018-12-24 15:43:17'),
(5, 'browse_compass', NULL, '2018-12-24 15:43:17', '2018-12-24 15:43:17'),
(6, 'browse_menus', 'menus', '2018-12-24 15:43:17', '2018-12-24 15:43:17'),
(7, 'read_menus', 'menus', '2018-12-24 15:43:17', '2018-12-24 15:43:17'),
(8, 'edit_menus', 'menus', '2018-12-24 15:43:17', '2018-12-24 15:43:17'),
(9, 'add_menus', 'menus', '2018-12-24 15:43:17', '2018-12-24 15:43:17'),
(10, 'delete_menus', 'menus', '2018-12-24 15:43:17', '2018-12-24 15:43:17'),
(11, 'browse_roles', 'roles', '2018-12-24 15:43:17', '2018-12-24 15:43:17'),
(12, 'read_roles', 'roles', '2018-12-24 15:43:17', '2018-12-24 15:43:17'),
(13, 'edit_roles', 'roles', '2018-12-24 15:43:17', '2018-12-24 15:43:17'),
(14, 'add_roles', 'roles', '2018-12-24 15:43:18', '2018-12-24 15:43:18'),
(15, 'delete_roles', 'roles', '2018-12-24 15:43:18', '2018-12-24 15:43:18'),
(16, 'browse_users', 'users', '2018-12-24 15:43:18', '2018-12-24 15:43:18'),
(17, 'read_users', 'users', '2018-12-24 15:43:18', '2018-12-24 15:43:18'),
(18, 'edit_users', 'users', '2018-12-24 15:43:18', '2018-12-24 15:43:18'),
(19, 'add_users', 'users', '2018-12-24 15:43:18', '2018-12-24 15:43:18'),
(20, 'delete_users', 'users', '2018-12-24 15:43:18', '2018-12-24 15:43:18'),
(21, 'browse_settings', 'settings', '2018-12-24 15:43:18', '2018-12-24 15:43:18'),
(22, 'read_settings', 'settings', '2018-12-24 15:43:18', '2018-12-24 15:43:18'),
(23, 'edit_settings', 'settings', '2018-12-24 15:43:18', '2018-12-24 15:43:18'),
(24, 'add_settings', 'settings', '2018-12-24 15:43:18', '2018-12-24 15:43:18'),
(25, 'delete_settings', 'settings', '2018-12-24 15:43:18', '2018-12-24 15:43:18'),
(26, 'browse_categories', 'categories', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(27, 'read_categories', 'categories', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(28, 'edit_categories', 'categories', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(29, 'add_categories', 'categories', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(30, 'delete_categories', 'categories', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(31, 'browse_posts', 'posts', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(32, 'read_posts', 'posts', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(33, 'edit_posts', 'posts', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(34, 'add_posts', 'posts', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(35, 'delete_posts', 'posts', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(36, 'browse_pages', 'pages', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(37, 'read_pages', 'pages', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(38, 'edit_pages', 'pages', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(39, 'add_pages', 'pages', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(40, 'delete_pages', 'pages', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(41, 'browse_hooks', NULL, '2018-12-24 15:43:20', '2018-12-24 15:43:20'),
(42, 'browse_faqs', 'faqs', '2018-12-24 15:49:02', '2018-12-24 15:49:02'),
(43, 'read_faqs', 'faqs', '2018-12-24 15:49:02', '2018-12-24 15:49:02'),
(44, 'edit_faqs', 'faqs', '2018-12-24 15:49:02', '2018-12-24 15:49:02'),
(45, 'add_faqs', 'faqs', '2018-12-24 15:49:02', '2018-12-24 15:49:02'),
(46, 'delete_faqs', 'faqs', '2018-12-24 15:49:02', '2018-12-24 15:49:02'),
(47, 'browse_teams', 'teams', '2018-12-24 17:03:14', '2018-12-24 17:03:14'),
(48, 'read_teams', 'teams', '2018-12-24 17:03:14', '2018-12-24 17:03:14'),
(49, 'edit_teams', 'teams', '2018-12-24 17:03:14', '2018-12-24 17:03:14'),
(50, 'add_teams', 'teams', '2018-12-24 17:03:14', '2018-12-24 17:03:14'),
(51, 'delete_teams', 'teams', '2018-12-24 17:03:14', '2018-12-24 17:03:14'),
(52, 'browse_abouts', 'abouts', '2018-12-24 17:13:18', '2018-12-24 17:13:18'),
(53, 'read_abouts', 'abouts', '2018-12-24 17:13:18', '2018-12-24 17:13:18'),
(54, 'edit_abouts', 'abouts', '2018-12-24 17:13:18', '2018-12-24 17:13:18'),
(55, 'add_abouts', 'abouts', '2018-12-24 17:13:18', '2018-12-24 17:13:18'),
(56, 'delete_abouts', 'abouts', '2018-12-24 17:13:18', '2018-12-24 17:13:18'),
(57, 'browse_footers', 'footers', '2018-12-25 16:19:08', '2018-12-25 16:19:08'),
(58, 'read_footers', 'footers', '2018-12-25 16:19:08', '2018-12-25 16:19:08'),
(59, 'edit_footers', 'footers', '2018-12-25 16:19:08', '2018-12-25 16:19:08'),
(60, 'add_footers', 'footers', '2018-12-25 16:19:08', '2018-12-25 16:19:08'),
(61, 'delete_footers', 'footers', '2018-12-25 16:19:08', '2018-12-25 16:19:08'),
(62, 'browse_phones', 'phones', '2018-12-25 16:32:28', '2018-12-25 16:32:28'),
(63, 'read_phones', 'phones', '2018-12-25 16:32:28', '2018-12-25 16:32:28'),
(64, 'edit_phones', 'phones', '2018-12-25 16:32:28', '2018-12-25 16:32:28'),
(65, 'add_phones', 'phones', '2018-12-25 16:32:28', '2018-12-25 16:32:28'),
(66, 'delete_phones', 'phones', '2018-12-25 16:32:28', '2018-12-25 16:32:28'),
(67, 'browse_captions', 'captions', '2018-12-25 16:42:18', '2018-12-25 16:42:18'),
(68, 'read_captions', 'captions', '2018-12-25 16:42:18', '2018-12-25 16:42:18'),
(69, 'edit_captions', 'captions', '2018-12-25 16:42:18', '2018-12-25 16:42:18'),
(70, 'add_captions', 'captions', '2018-12-25 16:42:18', '2018-12-25 16:42:18'),
(71, 'delete_captions', 'captions', '2018-12-25 16:42:18', '2018-12-25 16:42:18'),
(72, 'browse_directions', 'directions', '2018-12-25 17:15:26', '2018-12-25 17:15:26'),
(73, 'read_directions', 'directions', '2018-12-25 17:15:26', '2018-12-25 17:15:26'),
(74, 'edit_directions', 'directions', '2018-12-25 17:15:26', '2018-12-25 17:15:26'),
(75, 'add_directions', 'directions', '2018-12-25 17:15:26', '2018-12-25 17:15:26'),
(76, 'delete_directions', 'directions', '2018-12-25 17:15:26', '2018-12-25 17:15:26'),
(77, 'browse_servs', 'servs', '2018-12-26 20:21:07', '2018-12-26 20:21:07'),
(78, 'read_servs', 'servs', '2018-12-26 20:21:07', '2018-12-26 20:21:07'),
(79, 'edit_servs', 'servs', '2018-12-26 20:21:07', '2018-12-26 20:21:07'),
(80, 'add_servs', 'servs', '2018-12-26 20:21:07', '2018-12-26 20:21:07'),
(81, 'delete_servs', 'servs', '2018-12-26 20:21:07', '2018-12-26 20:21:07'),
(82, 'browse_mails', 'mails', '2018-12-26 22:51:34', '2018-12-26 22:51:34'),
(83, 'read_mails', 'mails', '2018-12-26 22:51:34', '2018-12-26 22:51:34'),
(84, 'edit_mails', 'mails', '2018-12-26 22:51:34', '2018-12-26 22:51:34'),
(85, 'add_mails', 'mails', '2018-12-26 22:51:34', '2018-12-26 22:51:34'),
(86, 'delete_mails', 'mails', '2018-12-26 22:51:34', '2018-12-26 22:51:34'),
(87, 'browse_sendmails', 'sendmails', '2018-12-26 23:58:57', '2018-12-26 23:58:57'),
(88, 'read_sendmails', 'sendmails', '2018-12-26 23:58:57', '2018-12-26 23:58:57'),
(89, 'edit_sendmails', 'sendmails', '2018-12-26 23:58:57', '2018-12-26 23:58:57'),
(90, 'add_sendmails', 'sendmails', '2018-12-26 23:58:57', '2018-12-26 23:58:57'),
(91, 'delete_sendmails', 'sendmails', '2018-12-26 23:58:57', '2018-12-26 23:58:57'),
(92, 'browse_seos', 'seos', '2018-12-27 20:44:29', '2018-12-27 20:44:29'),
(93, 'read_seos', 'seos', '2018-12-27 20:44:29', '2018-12-27 20:44:29'),
(94, 'edit_seos', 'seos', '2018-12-27 20:44:29', '2018-12-27 20:44:29'),
(95, 'add_seos', 'seos', '2018-12-27 20:44:29', '2018-12-27 20:44:29'),
(96, 'delete_seos', 'seos', '2018-12-27 20:44:29', '2018-12-27 20:44:29'),
(97, 'browse_activs', 'activs', '2018-12-30 05:56:41', '2018-12-30 05:56:41'),
(98, 'read_activs', 'activs', '2018-12-30 05:56:41', '2018-12-30 05:56:41'),
(99, 'edit_activs', 'activs', '2018-12-30 05:56:41', '2018-12-30 05:56:41'),
(100, 'add_activs', 'activs', '2018-12-30 05:56:41', '2018-12-30 05:56:41'),
(101, 'delete_activs', 'activs', '2018-12-30 05:56:41', '2018-12-30 05:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `atel` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`id`, `phone`, `atel`, `created_at`, `updated_at`) VALUES
(1, '+7 (495) 902-68-38', '+74959026838', '2018-12-25 16:33:11', '2018-12-25 16:33:11');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2018-12-24 15:43:19', '2018-12-24 15:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2018-12-24 15:43:17', '2018-12-24 15:43:17'),
(2, 'user', 'Normal User', '2018-12-24 15:43:17', '2018-12-24 15:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `sendmails`
--

CREATE TABLE `sendmails` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `send` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sendmails`
--

INSERT INTO `sendmails` (`id`, `email`, `send`, `created_at`, `updated_at`) VALUES
(1, 'got26days@gmail.com', 'false', '2018-12-26 23:59:00', '2018-12-27 00:07:15'),
(2, 'mailpalagov@gmail.com', 'false', '2018-12-26 23:59:00', '2018-12-27 00:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` int(10) UNSIGNED NOT NULL,
  `page` text COLLATE utf8mb4_unicode_ci,
  `seo_title` text COLLATE utf8mb4_unicode_ci,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `seo_keywords` text COLLATE utf8mb4_unicode_ci,
  `page_title` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `page`, `seo_title`, `seo_description`, `seo_keywords`, `page_title`, `created_at`, `updated_at`) VALUES
(1, 'option5', 'ттт1', 'ттт2', 'ттт3, тт5', 'Главная', '2018-12-27 20:46:47', '2018-12-27 20:46:47'),
(2, 'option1', 'О нас', 'О нас', 'О нас', 'О нас', '2018-12-27 20:58:37', '2018-12-27 20:58:37'),
(3, 'option2', 'FAQ', 'FAQ', 'FAQ', 'FAQ', '2018-12-27 21:01:05', '2018-12-27 21:01:05'),
(4, 'option3', 'События', 'События', 'События', 'События', '2018-12-27 21:03:08', '2018-12-27 21:03:08'),
(5, 'option4', 'Услуги', 'Услуги', 'Услуги', 'Услуги', '2018-12-27 21:03:22', '2018-12-27 21:03:22');

-- --------------------------------------------------------

--
-- Table structure for table `servs`
--

CREATE TABLE `servs` (
  `id` int(10) UNSIGNED NOT NULL,
  `option` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servs`
--

INSERT INTO `servs` (`id`, `option`, `body`, `created_at`, `updated_at`) VALUES
(1, 'option1', '<p>Помогаем с получением грантов, субсидий и банковских кредитов как начинающим фермерам, так и работающим сельхозпроизводителям.</p>\r\n<p>&nbsp;</p>\r\n<p>Доверяя специалистам из компании &laquo;АгроДоход&raquo;, вы получаете гарантированный результат на выгодных условиях.</p>', '2018-12-26 20:21:44', '2018-12-26 20:21:44'),
(2, 'option2', '<p>Наши специалисты с многолетним опытом работы в отрасли автоматизируют процесс учёта доходов и расходов.</p>\r\n<p>&nbsp;</p>\r\n<p>Сможем оптимизировать налогооблагаемую базу и подготовить документацию любой сложности. Обеспечим квалифицированный мониторинг и аналитику.</p>', '2018-12-26 20:22:06', '2018-12-26 20:22:06'),
(3, 'option3', '<p>Вы хотите приобрести или продать землю сельскохозяйственного назначения? Вам не нужно будет больше тратить время для составления необходимой документации и ожидании в очередях в присутственных местах.</p>\r\n<p>&nbsp;</p>\r\n<p>Компания &laquo;АгроДоход&raquo; берёт весь процесс на себя.</p>', '2018-12-26 20:22:29', '2018-12-26 20:22:29'),
(4, 'option4', '<p>Составление договоров, регистрация кооперативов и фермерских хозяйств, судебные дела с контрагентами и с контролирующими органами &mdash; все это не должно быть вашей заботой.</p>\r\n<p>&nbsp;</p>\r\n<p>Наши специалисты с многолетним стажем берут на себя всё юридическое сопровождение, чтобы вы могли, не отвлекаясь ни на что, заниматься своим делом.</p>', '2018-12-26 20:22:57', '2018-12-26 20:22:57'),
(5, 'option5', '<p>Вам не обязательно вести учёт самим.</p>\r\n<p>&nbsp;</p>\r\n<p>АгроДоход возьмёт на себя функцию учёта продукции по новым правилам, избавив вас от необходимости подключаться к новой системе.</p>', '2018-12-26 20:23:29', '2018-12-26 20:23:29'),
(6, 'option6', '<p>Проанализировав ваше хозяйство и кредитную историю, наши специалисты помогут вам получить кредит или государственные субсидии на выгодных условиях.</p>\r\n<p>&nbsp;</p>\r\n<p>Для получения точной информации по вашей ситуации, заполните заявку на нашем сайте. Наши специалисты свяжутся с вами в максимально короткий срок. Мы найдём оптимальное решение для получения вами необходимого финансирования.</p>', '2018-12-26 20:23:56', '2018-12-26 20:23:56'),
(7, 'option7', '<ul>\r\n<li>Вам не придётся объяснять нам нюансы вашего бизнеса.</li>\r\n<li>Там, где другие задают вопросы и разводят руками, мы даём ответы и предоставляем эффективные решения.</li>\r\n<li>Мы профи в ведении бухгалтерии для сельского хозяйства и готовы вам это доказать.</li>\r\n</ul>', '2018-12-26 20:24:30', '2018-12-26 20:24:30'),
(8, 'option8', '<ul>\r\n<li>За счет грамотного выбора системы налогообложения, аудита и финансового прогнозирования мы снизим налоговую нагрузку на ваше хозяйство.</li>\r\n<li>Объясним, как правильно уплатить и вернуть излишне уплаченное.</li>\r\n</ul>', '2018-12-26 20:24:45', '2018-12-26 20:24:45'),
(9, 'option9', '<ul>\r\n<li>Сотрудничая с АгроДоходом, вы получаете не только безукоризненный бухглатерский учёт, но и все преимущества статуса наших партнёров.</li>\r\n<li>Обширные связи АгроДохода &mdash; это доступ к кредитованию и инвестициям, а также выход на крупные и средние сети сбыта сельскохозяйственной продукции.</li>\r\n</ul>', '2018-12-26 20:25:03', '2018-12-26 20:25:03'),
(10, 'option10', '<ul>\r\n<li>Квалифицированное сопровождение в рамках нормативно-правового поля.</li>\r\n<li>Пошаговое сопровождение сделок по купле и продаже земель сельскохозяйственного назначения у государственных и частных лиц.</li>\r\n<li>Права на застройку.</li>\r\n<li>Рассчеты по сделкам.</li>\r\n</ul>', '2018-12-26 20:25:22', '2018-12-26 20:25:22'),
(11, 'option11', '<ul>\r\n<li>Подготовка необходимого пакета документов.</li>\r\n<li>Аудит.</li>\r\n<li>Регистрация права собственности.</li>\r\n</ul>', '2018-12-26 20:25:43', '2018-12-26 20:25:43'),
(12, 'option13', '<ul>\r\n<li>На основании присланной Вами заявки наши специалисты составят высококвалифицированное юридическое соглашение, касающееся всех аспектов Вашего бизнеса.</li>\r\n<li>С нами Вы защищены.</li>\r\n</ul>', '2018-12-26 20:26:04', '2018-12-26 20:26:04'),
(13, 'option14', '<ul>\r\n<li>Составление досудебных претензий.</li>\r\n<li>Разработка стратегии и подготовка пакета документов.</li>\r\n<li>Представление Ваших интересов в суде.</li>\r\n</ul>', '2018-12-26 20:26:22', '2018-12-26 20:26:22'),
(14, 'option15', '<ul>\r\n<li>Мы находими оптимальные решения регистрации Вашего сельскохозяйственного предприятия.</li>\r\n<li>Консультируем касательно юридическо-правовой формы вашего бизнеса</li>\r\n<li>Готовим необходимую документацию.</li>\r\n<li>Получаем свидетельсьво о регистрации.</li>\r\n</ul>', '2018-12-26 20:26:37', '2018-12-26 20:26:37'),
(16, 'option16', '<p>Уже с 1 июля 2018 года все компании, участвующие в обороте товаров животного происхождения, обязаны перейти на электронную ветеринарную сертификацию через федеральную государственную информационную систему &laquo;Меркурий&raquo;.</p>\r\n<p>&laquo;Меркурий&raquo; &mdash; это аналог ЕГАИС, предназначенный для товаров животного происхождения. Система отслеживает все грузы на протяжении всего их жизненного цикла: от сырья до готового продукта на полке магазина.</p>', '2018-12-26 20:44:27', '2018-12-26 20:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings/December2018/fhrgavlEN2mGPeGSd37q.jpg', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Агродоход', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Добро пожаловать в панель администратора', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', 'settings/December2018/z384Zt8ewmb9N6ObTQa7.png', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings/December2018/JBvsiiq8xshgINj6V2ye.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `position` text COLLATE utf8mb4_unicode_ci,
  `youtube` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `photo`, `position`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'Староверова Любовь Николаевна', 'teams/December2018/Gy6R7UkJ4AXlx348hbDp.jpg', 'Генеральный директор', 'https://www.youtube.com/embed/Fo6rCkFrpe8', '2018-12-24 17:05:04', '2018-12-24 17:05:04'),
(2, 'тест', 'teams/December2018/qLmWngSiaWaz4ISxA0Rv.jpg', 'тест', NULL, '2018-12-24 17:08:33', '2018-12-24 17:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2018-12-24 15:43:19', '2018-12-24 15:43:19'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2018-12-24 15:43:20', '2018-12-24 15:43:20'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2018-12-24 15:43:20', '2018-12-24 15:43:20'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2018-12-24 15:43:20', '2018-12-24 15:43:20'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2018-12-24 15:43:20', '2018-12-24 15:43:20'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2018-12-24 15:43:20', '2018-12-24 15:43:20'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2018-12-24 15:43:20', '2018-12-24 15:43:20'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2018-12-24 15:43:20', '2018-12-24 15:43:20'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2018-12-24 15:43:20', '2018-12-24 15:43:20'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2018-12-24 15:43:20', '2018-12-24 15:43:20'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2018-12-24 15:43:20', '2018-12-24 15:43:20'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2018-12-24 15:43:20', '2018-12-24 15:43:20'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2018-12-24 15:43:20', '2018-12-24 15:43:20'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2018-12-24 15:43:20', '2018-12-24 15:43:20'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2018-12-24 15:43:20', '2018-12-24 15:43:20'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2018-12-24 15:43:20', '2018-12-24 15:43:20'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2018-12-24 15:43:20', '2018-12-24 15:43:20'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2018-12-24 15:43:20', '2018-12-24 15:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$Zd39vMjpJYc/qqrnKkVX0Oxf5E07t8H5c93FuRDHIlvpKVKuJ8NDC', 'EFHWtFpMqlK2BUXCGf5Uzi2jMlSvmMO0zmGUrF78Tp0hr9hlWOozu70peUVw', NULL, '2018-12-24 15:43:19', '2018-12-24 15:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activs`
--
ALTER TABLE `activs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `captions`
--
ALTER TABLE `captions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `directions`
--
ALTER TABLE `directions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `sendmails`
--
ALTER TABLE `sendmails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servs`
--
ALTER TABLE `servs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activs`
--
ALTER TABLE `activs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `captions`
--
ALTER TABLE `captions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `directions`
--
ALTER TABLE `directions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sendmails`
--
ALTER TABLE `sendmails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `servs`
--
ALTER TABLE `servs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
