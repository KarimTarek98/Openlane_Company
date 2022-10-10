-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 03:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `exp_content`, `desc`, `about_img`, `created_at`, `updated_at`) VALUES
(1, 'The world is becoming more risky and volatile. Your IT projects don’t have to.', 'We are a group of technologists who have been working together since 2012 dedicating our careers to the craft of software development.', '<p>e are expert at building consensus in government agencies, implementing projects with United Nations initiatives and realizing visions at private sectors.</p>', 'uploads/home_banner/1744682451587294.jpg', NULL, '2022-09-22 13:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `about_multi_icons`
--

CREATE TABLE IF NOT EXISTS `about_multi_icons` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `multi_icons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_multi_icons`
--

INSERT INTO `about_multi_icons` (`id`, `multi_icons`, `created_at`, `updated_at`) VALUES
(1, 'uploads/about_multi_icons/1744863501609128.png', '2022-09-23 13:11:16', '2022-09-24 12:58:27'),
(3, 'uploads/about_multi_icons/1744773711956069.png', '2022-09-23 13:11:17', NULL),
(4, 'uploads/about_multi_icons/1744863756493130.png', '2022-09-24 13:02:30', NULL),
(5, 'uploads/about_multi_icons/1744863756642642.png', '2022-09-24 13:02:30', NULL),
(6, 'uploads/about_multi_icons/1744863756750463.png', '2022-09-24 13:02:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_image`, `blog_description`, `blog_tags`, `blog_category_id`, `created_at`, `updated_at`) VALUES
(2, 'React JS', 'uploads/blog/1745041951925054.png', '<p><strong>React</strong>&nbsp;(also known as&nbsp;<strong>React.js</strong>&nbsp;or&nbsp;<strong>ReactJS</strong>) is a&nbsp;free and open-source&nbsp;front-end&nbsp;JavaScript library<sup id=\"cite_ref-react_3-0\" class=\"reference\"></sup>&nbsp;for building&nbsp;user interfaces&nbsp;based on UI components. It is maintained by&nbsp;Meta (formerly Facebook) and a community of individual developers and companies. React can be used as a base in the development of&nbsp;single-page, mobile, or server-rendered applications with frameworks like&nbsp;Next.js. However, React is only concerned with state management and rendering that state to the&nbsp;DOM, so creating React applications usually requires the use of additional libraries for routing, as well as certain client-side functionality</p>', 'programming,Web', '1', '2022-09-26 11:38:42', '2022-09-26 20:03:12'),
(4, 'Android Bluetooth-based Chatting App.', 'uploads/blog/1745053259038624.png', '<p>According to this, we can \"<strong>build</strong>\" a local are network (<strong>LAN</strong>) by connecting devices over Bluetooth. The Android platform includes support for the Bluetooth network stack, which allows a device to wirelessly exchange data with other Bluetooth devices. The application framework provides access to the Bluetooth functionality through the Android Bluetooth APIs. These APIs let applications wirelessly connect to other Bluetooth devices, enabling point-to-point and multipoint wireless features so we absolutely able to transferring data to other devices in the network circle.</p>', 'Programmin,Android', '1', '2022-09-26 15:14:34', '2022-09-26 20:04:39'),
(5, 'Keylogging', 'uploads/blog/1745053543021098.jpg', '<p><strong>Keystroke logging</strong>, often referred to as&nbsp;<strong>keylogging</strong>&nbsp;or&nbsp;<strong>keyboard capturing</strong>, is the action of recording (logging) the keys struck on a keyboard, typically covertly, so that a person using the keyboard is unaware that their actions are being monitored. Data can then be retrieved by the person operating the logging program. A&nbsp;<strong>keystroke recorder</strong>&nbsp;or&nbsp;<strong>keylogger</strong>&nbsp;can be either software or&nbsp;hardware.</p>\r\n<p>While the programs themselves are legal, <sup id=\"cite_ref-3\" class=\"reference\"></sup>with many designed to allow employers to oversee the use of their computers, keyloggers are most often used for stealing passwords and other&nbsp;confidential information.</p>', 'Security,Web Security', '4', '2022-09-26 15:19:04', '2022-09-26 20:06:10'),
(6, 'Decrypting Caesar Cipher', 'uploads/blog/1745071837099488.jpg', '<p>In&nbsp;cryptography, a&nbsp;<strong>Caesar cipher</strong>, also known as&nbsp;<strong>Caesar\'s cipher</strong>, the&nbsp;<strong>shift cipher</strong>,&nbsp;<strong>Caesar\'s code</strong>&nbsp;or&nbsp;<strong>Caesar shift</strong>, is one of the simplest and most widely known&nbsp;encryption&nbsp;techniques. It is a type of&nbsp;substitution cipher&nbsp;in which each letter in the&nbsp;plaintext&nbsp;is replaced by a letter some fixed number of positions down the&nbsp;alphabet. For example, with a left shift of 3,&nbsp;<span class=\"monospaced\">D</span>&nbsp;would be replaced by&nbsp;<span class=\"monospaced\">A</span>,&nbsp;<span class=\"monospaced\">E</span>&nbsp;would become&nbsp;<span class=\"monospaced\">B</span>, and so on. The method is named after&nbsp;Julius Caesar, who used it in his private correspondence.<sup id=\"cite_ref-1\" class=\"reference\"></sup></p>\r\n<p>The encryption step performed by a Caesar cipher is often incorporated as part of more complex schemes, such as the&nbsp;Vigen&egrave;re cipher, and still has modern application in the&nbsp;ROT13&nbsp;system. As with all single-alphabet substitution ciphers, the Caesar cipher is easily broken and in modern practice offers essentially no&nbsp;communications security.</p>', 'security,programming', '4', '2022-09-26 20:09:51', '2022-09-26 20:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `blog_category`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', '2022-09-25 11:28:29', '2022-09-25 11:28:29'),
(4, 'Web Security', '2022-09-26 08:40:22', '2022-09-26 08:40:22'),
(5, 'Android', '2022-09-26 15:11:51', '2022-09-26 15:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `username`, `email`, `subject`, `phone_number`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Karim Tarek', 'karimabougom3@gmail.com', 'Thanks', '01061370542', 'In addition, you may copy this file to another translation language directory to translate the messages for your application\'s language. To learn more about Laravel localization, check out the complete localization documentation.', '2022-09-27 10:37:19', '2022-09-27 10:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE IF NOT EXISTS `footers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_details` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `connect_small_desc` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `phone_number`, `contact_text`, `country`, `address_details`, `company_email`, `connect_small_desc`, `copyright`, `created_at`, `updated_at`) VALUES
(1, '+201555723544', 'Contact Us With any questions or inquires . We would be happy to answer your questions and set up a meeting with you.', 'Egypt', '19 Al Hoda W Al Nour Street, Damietta, Egypt', 'karim@openlane.com', 'Connect us on social media , we will be glad for that', 'Copyright @ Openlane 2022 All right Reserved', NULL, '2022-09-27 08:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `home_banners`
--

CREATE TABLE IF NOT EXISTS `home_banners` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_intro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_banners`
--

INSERT INTO `home_banners` (`id`, `title`, `short_intro`, `banner_img`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 'We are specialized in Web Development Solutions', 'Developing a great design is certainly a big aspect, however the beauty of integrating it properly with backend functions and ensuring its performance is a must.', 'uploads/home_banner/1744765281032126.jpg', 'https://www.google.com.eg/', NULL, '2022-09-23 10:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_21_193436_create_home_banners_table', 2),
(7, '2022_09_22_123530_create_abouts_table', 3),
(8, '2022_09_23_133222_create_about_multi_icons_table', 4),
(9, '2022_09_24_184040_create_portofolios_table', 5),
(10, '2022_09_25_100751_create_portfolio_details_table', 6),
(11, '2022_09_25_125253_create_blog_categories_table', 7),
(12, '2022_09_25_152148_create_blogs_table', 8),
(13, '2022_09_27_092811_create_footers_table', 9),
(14, '2022_09_27_114914_create_contacts_table', 10),
(15, '2022_09_27_172035_create_services_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('test@gmail.com', '$2y$10$1QTd70LFr2yPKp4qq5PXVe3XN07Muj4pxxwZFrp5X/SR5MHBSZOcq', '2022-09-18 15:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portofolios`
--

CREATE TABLE IF NOT EXISTS `portofolios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portofolios`
--

INSERT INTO `portofolios` (`id`, `name`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', 'Inventory management software', 'uploads/portofolio/1744890539996697.jpg', '<p>software system&nbsp;for tracking&nbsp;<a title=\"Inventory\" href=\"https://en.wikipedia.org/wiki/Inventory\">inventory</a>&nbsp;levels, orders,&nbsp;<a title=\"Sales\" href=\"https://en.wikipedia.org/wiki/Sales\">sales</a>&nbsp;and deliveries.<sup id=\"cite_ref-1\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Inventory_management_software#cite_note-1\">[1]</a></sup>&nbsp;It can also be used in the&nbsp;<a title=\"Manufacturing\" href=\"https://en.wikipedia.org/wiki/Manufacturing\">manufacturing</a>&nbsp;industry to create a&nbsp;<a title=\"Work order\" href=\"https://en.wikipedia.org/wiki/Work_order\">work order</a>,&nbsp;<a title=\"Bill of materials\" href=\"https://en.wikipedia.org/wiki/Bill_of_materials\">bill of materials</a>&nbsp;and other production-related documents. Companies use inventory management software to avoid product&nbsp;<a title=\"Overstock\" href=\"https://en.wikipedia.org/wiki/Overstock\">overstock</a>&nbsp;and outages. It is a tool for organizing inventory&nbsp;<a title=\"Data\" href=\"https://en.wikipedia.org/wiki/Data\">data</a>&nbsp;that before was generally stored in hard-copy form or in&nbsp;<a title=\"Spreadsheet\" href=\"https://en.wikipedia.org/wiki/Spreadsheet\">spreadsheets</a>.\"&gt;</p>', '2022-09-24 20:08:13', '2022-09-24 20:40:12'),
(3, 'Web Development', 'School Management System', 'uploads/portofolio/1744929125104360.png', '<p><strong>SIMS</strong>&nbsp;(<strong>School Information Management System</strong><sup id=\"cite_ref-CapitaSoftwareInfo_2-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/School_Information_Management_System#cite_note-CapitaSoftwareInfo-2\">[2]</a></sup>) is a&nbsp;<a title=\"Student information system\" href=\"https://en.wikipedia.org/wiki/Student_information_system\">student information system</a>, i.e. a school&nbsp;<a title=\"Management information system\" href=\"https://en.wikipedia.org/wiki/Management_information_system\">management information system</a>, currently developed by Education Software Solutions. It is the most widely used MIS in UK schools,<sup class=\"noprint Inline-Template Template-Fact\">[<em><a title=\"Wikipedia:Citation needed\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Citation_needed\"><span title=\"This claim needs references to reliable sources. (February 2019)\">citation needed</span></a></em>]</sup>&nbsp;claiming over 80% market share across the primary and secondary sectors.</p>', '2022-09-25 06:21:31', '2022-09-25 06:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `service_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_list` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_description`, `service_list`, `service_img`, `created_at`, `updated_at`) VALUES
(2, 'Revamping Travel', '<p>Traveler needs have changed&mdash;and now, travel experiences must change along with them, to bring back customers and regain their trust.While many travelers are&nbsp;excited to plan vacations&nbsp;and visits after months of lockdowns and travel restrictions, their needs have changed&mdash;permanently.</p>', 'Get laser-focused on capturing the demand that exists for travel,Adjust rapidly to changing needs, because customers will only book if they feel safe to do so,And get back to growth as you outmaneuver any uncertainty that lies ahead.', 'uploads/services/1745150019464653.png', '2022-09-27 16:52:32', '2022-09-27 16:52:32'),
(3, 'Real estate  management', '<p>Real estate is a very heterogeneous sector, where opportunities are numerous&nbsp;and efficient decision-making is key. It takes a unique set of skills coupled with&nbsp;the right kind of knowledge to be able to navigate this field and attain success.</p>\r\n<p>In the Introduction to Real Estate Management program, participants will be&nbsp;exposed to sharp and creative expertise that will help them become successful&nbsp;players in the real estate industry. They will be given the tools and knowledge&nbsp;they need to realize opportunities, recognize core competencies, and grow in a&nbsp;diverse field where every skill gained is a competitive advantage.</p>', 'Developing a good understanding of principles and best practices in real estate,Acquiring insight into the latest real estate global trends,Attaining hands-on, practical knowledge and benefiting from interactive panel discussions to review and debate current real estate cases', 'uploads/services/1745150218073448.jpg', '2022-09-27 16:55:42', '2022-09-27 16:55:42'),
(4, 'Redefining shopping  experience', '<p>According to&nbsp;Forrester Research&nbsp;(via&nbsp;<em>Fast Company)</em>, the six disciplines for great customer experience are strategy, customer understanding, design, measurement, governance and culture.&nbsp;A company\'s ability to deliver an experience that sets it apart in the eyes of its customers will increase the amount of consumer spending with the company and inspire loyalty to its&nbsp;brand. According to Jessica Sebor, \"loyalty is now driven primarily by a company\'s&nbsp;interaction with its customers and how well it delivers on their wants and needs.<sup id=\"cite_ref-13\" class=\"reference\"></sup></p>', 'Product orientation,Market orientation,Customer experience,Authenticity', 'uploads/services/1745150508844927.jpg', '2022-09-27 17:00:18', '2022-09-27 17:00:18'),
(5, 'Automated design methods', '<p>Automated tools can aid in the creation of a Web service. For services using WSDL, it is possible to either automatically generate WSDL for existing classes (a bottom-up model) or to generate a class skeleton given existing WSDL (a top-down model).</p>', 'A developer using a bottom-up model writes implementing classes first,uses a WSDL generating tool to expose methods from these classes as a Web service top-down model writes the WSDL document first and then uses a code generating tool to produce the class skeleton', 'uploads/services/1745153092758615.jpg', '2022-09-27 17:02:05', '2022-09-27 17:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `username`, `profile_photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Karim', 'karimabougom3@gmail.com', '2022-09-19 10:29:50', '$2y$10$uP2fEFJgJHXtY9TsP9r3UuVnZerhd8GcWkQQAqyPprygWmTzIf6kC', 'Karim98', '202209201844-karim1.jpg', 'YxZoKF6noiMxipxy5iWecQTWeUwSE7Qk57ueLnElCI1x2Bo9GHvtEEioLckO', '2022-09-18 14:52:58', '2022-09-28 09:53:43'),
(2, 'Tamer Ali', 'testt@gmail.org', '2022-09-19 10:28:13', '$2y$10$aWOwHsr.ByRgfe3Hupo0k.Xpv.M2lDW5inVIFB4HcaJfhMf50zLsa', 'Tamer55', NULL, 'ZlmSo3GtDc4bgzD9jg0NXvxRc0LdHumbJVvz8NNGX07VAc9t2AuZ2oxIADOV', '2022-09-18 15:48:40', '2022-09-21 11:15:54'),
(3, 'ahmed', 'ahmed@gmail.com', '2022-09-19 13:24:14', '$2y$10$IJxQKXoaWsDC.CEtfrTw6eibvpYileStn0Blj5bOPOQN601UL/aOS', 'Ahmed96', NULL, NULL, '2022-09-19 13:23:53', '2022-09-19 13:24:14'),
(5, 'Mohamed', 'mo@gmail.com', '2022-09-19 20:04:10', '$2y$10$ctqk3XwTOKnc2aEIu6ANF.d9Fz47D8AI3Lc8rMPdl6O/N/1HudVjO', 'Mohamed99', NULL, 'xBk4g8kAJmsIIwNdHwEf1CQQpHRkpAtjSs2QYZDenls8Sb09KTlAJvjO4fZw', '2022-09-19 20:04:00', '2022-09-19 20:59:53');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
