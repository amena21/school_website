-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2022 at 06:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foundername` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `founderdesignation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `short_description`, `description`, `foundername`, `founderdesignation`, `message`, `image`, `created_at`, `updated_at`) VALUES
(1, 'KGN School', 'Our staff and teachers are dedicated to creating a rich learning environment for all of the children', 'test descriptions text  dgfdgfdgfh', 'mr. founder', 'ceo', 'It is with great pride and excitement that I write this letter to you as the Principal of Mayfair Middle/ High School.   I am excited and honored to have the opportunity to lead a school', '1649579127.jpg', '2022-04-06 23:29:05', '2022-04-10 02:25:27');

-- --------------------------------------------------------

--
-- Table structure for table `activities_class_models`
--

CREATE TABLE `activities_class_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qoute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities_class_models`
--

INSERT INTO `activities_class_models` (`id`, `title`, `image`, `date`, `description1`, `description2`, `description3`, `qoute`, `created_at`, `updated_at`) VALUES
(8, 'Dance class', '1652002886.png', '4 april, 2022', 'dxasfdasvg', 'sfdsgdfg', 'xfdcdagfv', 'new qoute', '2022-04-04 03:14:09', '2022-05-08 03:41:26'),
(10, 'Music Class', '1652087290.png', '7 april,2022', 'dxasfdasvg', 'sfdsgdfg', 'xfdcdagfv', 'new qoute', '2022-04-07 04:05:54', '2022-05-09 03:08:10'),
(11, 'Physical Training Class', '1652087459.png', '10 april,2022', 'dxasfdasvg', 'sfdsgdfg', 'xfdcdagfv', 'new qoute', '2022-04-09 22:51:06', '2022-05-09 03:10:59'),
(12, 'karate class', '1652087338.png', '10 april,2022', 'dxasfdasvg', 'sfdsgdfg', 'xfdcdagfv', 'new qoute', '2022-04-09 22:51:54', '2022-05-09 03:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `authentications`
--

CREATE TABLE `authentications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authentications`
--

INSERT INTO `authentications` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '123456789', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description2` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description3` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qoute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `date`, `description1`, `description2`, `description3`, `qoute`, `created_at`, `updated_at`) VALUES
(1, '1st blog post', '1649574719.jpeg', '4 april, 2022', 'We believe that in order for your “Little Sprouts” to grow to their fullest potential, both developmentally and physically,', 'they need a variety of high-quality, organic and nutritious foods. We have found that many preschools and daycare centers in San Diego attempt to cut their costs by buying the “cheap stuff”.', 'We are a Reggio inspired school and incorporate programs geared toward kindergarten readiness.', 'We are a Reggio inspired school and incorporate programs geared toward kindergarten readiness.', '2022-04-06 03:26:19', '2022-04-10 01:11:59'),
(2, '2nd blog post', '1652005276.png', '10 april,2022', 'We believe that in order for your “Little Sprouts” to grow to their fullest potential, both developmentally and physically,', 'they need a variety of high-quality, organic and nutritious foods. We have found that many preschools and daycare centers in San Diego attempt to cut their costs by buying the “cheap stuff”. We do not believe that that is in the best interest of your child...', 'We are a Reggio inspired school and incorporate programs geared toward kindergarten readiness.', 'We are a Reggio inspired school and incorporate programs geared toward kindergarten readiness.', '2022-05-08 04:09:01', '2022-05-08 04:21:16');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fblink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtubelink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagramlink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `phone`, `email`, `address`, `fblink`, `youtubelink`, `instagramlink`, `created_at`, `updated_at`) VALUES
(1, 'GBN High school Chattogram', '13214243435', 'user@gmail.com', 'ctg', 'www.facebook.com', 'www.youtube.com', 'www.instagram.com', '2022-04-06 03:40:35', '2022-04-06 03:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `eventsimage_models`
--

CREATE TABLE `eventsimage_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eventsimage_models`
--

INSERT INTO `eventsimage_models` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, '1652509655.png', '2022-04-09 23:54:12', '2022-05-14 00:27:35'),
(3, '1649570351.jpeg', '2022-04-09 23:54:33', '2022-04-09 23:59:11'),
(4, '1652509986.jpg', '2022-04-09 23:54:51', '2022-05-14 00:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `events_models`
--

CREATE TABLE `events_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events_models`
--

INSERT INTO `events_models` (`id`, `title`, `image`, `date`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Education Fair', '1652003185.png', '10 april,2022', 'At our Bangladesh events, you can meet university representatives and discuss your study prospects, campus life and more in person. You can also have your application assessed and submitted.', '2022-04-05 00:44:05', '2022-05-08 03:46:25'),
(2, 'Science Fair', '1652004269.png', '10 april,2022', 'science fair is a competitive event, hosted by schools worldwide. The distinguishing characteristic of a science fair is that project entries employ the scientific method to test a hypothesis. Science fairs are not exhibits or mere displays of projects.', '2022-04-09 23:02:43', '2022-05-08 04:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'first image', '1652005357.png', '2022-04-05 23:54:16', '2022-05-08 04:22:37'),
(2, '2nd image', '1652005380.png', '2022-04-05 23:56:25', '2022-05-08 04:23:00'),
(3, 'asdf', '1652005401.png', '2022-04-10 00:13:14', '2022-05-08 04:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_30_083421_create_slider_models_table', 1),
(6, '2022_03_31_124422_create_slider_models_table', 2),
(7, '2022_04_02_124124_create_activities_class_models_table', 3),
(8, '2022_04_05_054228_create_events_models_table', 4),
(9, '2022_04_06_040355_create_eventsimage_models_table', 5),
(10, '2022_04_06_054256_create_galleries_table', 6),
(11, '2022_04_06_090554_create_blogs_table', 7),
(12, '2022_04_06_093326_create_contacts_table', 8),
(13, '2022_04_06_094915_create_abouts_table', 9),
(14, '2022_04_07_060843_create_parents_table', 10),
(15, '2022_04_07_063346_create_teachers_table', 11),
(16, '2022_04_07_070041_create_time_models_table', 12),
(17, '2022_05_09_120237_create_authentications_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `Name`, `designation`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Kamal', 'Doctor', 'asdffsdfjydhgcdydfyfuy', '2022-04-07 00:09:26', '2022-04-07 00:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider_models`
--

CREATE TABLE `slider_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_models`
--

INSERT INTO `slider_models` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '[\"164873160232.png\",\"164873160219.png\"]', '2022-03-31 07:00:02', '2022-03-31 07:00:02'),
(2, NULL, '2022-04-02 00:16:42', '2022-04-02 00:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `Name`, `designation`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Kamal Hasan', 'Assistant teacher', '1652776920.jpg', '2022-04-07 00:44:49', '2022-05-17 02:42:00'),
(2, 'Tamanna', 'Assistant teacher', '1652776962.jpg', '2022-04-10 02:29:16', '2022-05-17 02:42:42'),
(3, 'teacher', 'Assistant teacher', '1652776994.jpg', '2022-04-10 02:29:46', '2022-05-17 02:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `time_models`
--

CREATE TABLE `time_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `close_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_models`
--

INSERT INTO `time_models` (`id`, `day`, `open_time`, `close_time`, `created_at`, `updated_at`) VALUES
(1, 'Sunday', '08:00', '13:00', '2022-04-07 01:02:32', '2022-04-07 01:02:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Indexes for table `activities_class_models`
--
ALTER TABLE `activities_class_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authentications`
--
ALTER TABLE `authentications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `authentications_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventsimage_models`
--
ALTER TABLE `eventsimage_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_models`
--
ALTER TABLE `events_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `slider_models`
--
ALTER TABLE `slider_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_models`
--
ALTER TABLE `time_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activities_class_models`
--
ALTER TABLE `activities_class_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `authentications`
--
ALTER TABLE `authentications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eventsimage_models`
--
ALTER TABLE `eventsimage_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events_models`
--
ALTER TABLE `events_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider_models`
--
ALTER TABLE `slider_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `time_models`
--
ALTER TABLE `time_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
