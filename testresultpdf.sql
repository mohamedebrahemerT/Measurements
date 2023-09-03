-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 04:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testresultpdf`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'فرط الحركة', '2023-09-02 22:23:46', '2023-09-02 22:23:46', NULL),
(2, 'الأندفاعية', '2023-09-02 22:23:58', '2023-09-02 22:23:58', NULL),
(3, 'نقص الأنتباه', '2023-09-02 22:24:07', '2023-09-02 22:24:07', NULL),
(4, 'test', '2023-09-03 07:37:03', '2023-09-03 08:52:20', '2023-09-03 08:52:20');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(7, '2019_12_23_000001_create_permissions_table', 1),
(8, '2019_12_23_000002_create_roles_table', 1),
(9, '2019_12_23_000003_create_users_table', 1),
(10, '2019_12_23_000004_create_categories_table', 1),
(11, '2019_12_23_000005_create_questions_table', 1),
(12, '2019_12_23_000006_create_options_table', 1),
(13, '2019_12_23_000007_create_results_table', 1),
(14, '2019_12_23_000008_create_permission_role_pivot_table', 1),
(15, '2019_12_23_000009_create_role_user_pivot_table', 1),
(16, '2019_12_23_000010_create_question_result_pivot_table', 1),
(17, '2019_12_23_000011_add_relationship_fields_to_questions_table', 1),
(18, '2019_12_23_000012_add_relationship_fields_to_options_table', 1),
(19, '2019_12_23_000013_add_relationship_fields_to_results_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `option_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `question_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `option_text`, `points`, `created_at`, `updated_at`, `deleted_at`, `question_id`) VALUES
(1, 'لا يوجد', 1, '2023-09-02 22:27:02', '2023-09-02 22:27:02', NULL, 1),
(2, 'متوسط', 2, '2023-09-02 22:27:16', '2023-09-02 22:27:16', NULL, 1),
(3, 'مرتفع', 3, '2023-09-02 22:27:29', '2023-09-02 22:27:29', NULL, 1),
(4, 'لا يوجد', 1, '2023-09-02 22:28:34', '2023-09-02 22:28:34', NULL, 2),
(5, 'متوسط', 2, '2023-09-02 22:28:50', '2023-09-02 22:28:50', NULL, 2),
(6, 'مرتفع', 3, '2023-09-02 22:29:04', '2023-09-02 22:29:04', NULL, 2),
(7, 'لا يوجد', 1, '2023-09-02 22:29:22', '2023-09-02 22:29:22', NULL, 3),
(8, 'متوسط', 2, '2023-09-02 22:29:35', '2023-09-02 22:29:35', NULL, 3),
(9, 'مرتفع', 3, '2023-09-02 22:29:46', '2023-09-02 22:29:46', NULL, 3),
(10, 'لا يوجد', 1, '2023-09-03 00:56:15', '2023-09-03 00:56:15', NULL, 4),
(11, 'متوسط', 2, '2023-09-03 00:56:34', '2023-09-03 00:56:34', NULL, 4),
(12, 'مرتفع', 3, '2023-09-03 00:56:52', '2023-09-03 00:56:52', NULL, 4),
(13, 'لا يوجد', 1, '2023-09-03 00:57:24', '2023-09-03 00:57:24', NULL, 5),
(14, 'متوسط', 2, '2023-09-03 00:57:41', '2023-09-03 00:57:41', NULL, 5),
(15, 'مرتفع', 3, '2023-09-03 00:58:44', '2023-09-03 00:58:44', NULL, 5),
(16, 'لا يوجد', 1, '2023-09-03 01:02:06', '2023-09-03 01:02:06', NULL, 6),
(17, 'متوسط', 3, '2023-09-03 01:02:34', '2023-09-03 01:02:34', NULL, 6),
(18, 'test', 1, '2023-09-03 07:37:48', '2023-09-03 10:38:37', '2023-09-03 10:38:37', 7);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'category_create', NULL, NULL, NULL),
(18, 'category_edit', NULL, NULL, NULL),
(19, 'category_show', NULL, NULL, NULL),
(20, 'category_delete', NULL, NULL, NULL),
(21, 'category_access', NULL, NULL, NULL),
(22, 'question_create', NULL, NULL, NULL),
(23, 'question_edit', NULL, NULL, NULL),
(24, 'question_show', NULL, NULL, NULL),
(25, 'question_delete', NULL, NULL, NULL),
(26, 'question_access', NULL, NULL, NULL),
(27, 'option_create', NULL, NULL, NULL),
(28, 'option_edit', NULL, NULL, NULL),
(29, 'option_show', NULL, NULL, NULL),
(30, 'option_delete', NULL, NULL, NULL),
(31, 'option_access', NULL, NULL, NULL),
(32, 'result_create', NULL, NULL, NULL),
(33, 'result_edit', NULL, NULL, NULL),
(34, 'result_show', NULL, NULL, NULL),
(35, 'result_delete', NULL, NULL, NULL),
(36, 'result_access', NULL, NULL, NULL),
(37, 'test', '2023-09-03 07:34:17', '2023-09-03 08:49:41', '2023-09-03 08:49:41');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_text`, `created_at`, `updated_at`, `deleted_at`, `category_id`) VALUES
(1, '1.صوت مرتفع', '2023-09-02 22:25:06', '2023-09-02 22:25:06', NULL, 1),
(2, '2.حالة استعداد مستمر للانطلاق', '2023-09-02 22:25:50', '2023-09-02 22:25:50', NULL, 1),
(3, '3.يبالغ بالجري و القفز و التسلق', '2023-09-02 22:26:16', '2023-09-02 22:26:16', NULL, 1),
(4, 'يتصرف قبل ان يفكر', '2023-09-03 00:54:44', '2023-09-03 00:54:44', NULL, 2),
(5, 'ينتقل من نشاط لأخر قبل إتمام الأول', '2023-09-03 00:55:09', '2023-09-03 00:55:09', NULL, 2),
(6, 'لايمكنه الأنتظار حتى ينتهي غيره من دوره', '2023-09-03 00:55:39', '2023-09-03 00:55:39', NULL, 2),
(7, 'test', '2023-09-03 07:37:22', '2023-09-03 08:52:44', '2023-09-03 08:52:44', 4);

-- --------------------------------------------------------

--
-- Table structure for table `question_result`
--

CREATE TABLE `question_result` (
  `result_id` int(10) UNSIGNED NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL,
  `option_id` int(10) UNSIGNED NOT NULL,
  `points` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_result`
--

INSERT INTO `question_result` (`result_id`, `question_id`, `option_id`, `points`) VALUES
(1, 1, 1, 1),
(1, 2, 5, 2),
(1, 3, 8, 2),
(2, 1, 2, 2),
(2, 2, 6, 3),
(2, 3, 7, 1),
(3, 1, 3, 3),
(3, 2, 5, 2),
(3, 3, 7, 1),
(3, 4, 11, 2),
(3, 5, 13, 1),
(3, 6, 17, 3),
(4, 1, 2, 2),
(4, 2, 6, 3),
(4, 3, 9, 3),
(4, 4, 10, 1),
(4, 5, 14, 2),
(4, 6, 17, 3),
(4, 7, 18, 1),
(5, 1, 1, 1),
(5, 2, 6, 3),
(5, 3, 8, 2),
(5, 4, 11, 2),
(5, 5, 15, 3),
(5, 6, 17, 3);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) UNSIGNED NOT NULL,
  `total_points` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `total_points`, `created_at`, `updated_at`, `deleted_at`, `user_id`) VALUES
(1, 5, '2023-09-02 22:32:52', '2023-09-03 08:53:45', '2023-09-03 08:53:45', 2),
(2, 6, '2023-09-02 22:55:58', '2023-09-03 08:53:52', '2023-09-03 08:53:52', 2),
(3, 12, '2023-09-03 01:03:58', '2023-09-03 08:53:59', '2023-09-03 08:53:59', 2),
(4, 15, '2023-09-03 07:50:37', '2023-09-03 08:54:09', '2023-09-03 08:54:09', 2),
(5, 14, '2023-09-03 10:57:39', '2023-09-03 10:57:39', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@admin.com', '2023-09-14 16:26:43', '$2y$10$MhnXkcIXaFJp3eLxV/aCbO8LWPXt/AAFvCTIqcpkbiFPr1FUbSpUW', NULL, NULL, '2023-09-03 08:54:40', NULL),
(2, 'test', 'mohamedchi2013@gmail.com', NULL, '$2y$10$Hqxvdjw.psMTXM4hhUJK4OQ6AhI5UlZGP9DpruxAowxLDRrnk3RBK', NULL, '2023-09-02 22:31:46', '2023-09-02 22:31:46', NULL),
(4, 'محمد ابراهيم رفعت', 'user@user.com', NULL, '$2y$10$xrtuZNLRm3pzLuClTt.JCePu8exKEILOktmCnxm1yOKTrA0ZXzBuS', NULL, '2023-09-03 10:44:06', '2023-09-03 10:44:06', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_fk_773758` (`question_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_773672` (`role_id`),
  ADD KEY `permission_id_fk_773672` (`permission_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_fk_773713` (`category_id`);

--
-- Indexes for table `question_result`
--
ALTER TABLE `question_result`
  ADD KEY `result_id_fk_773767` (`result_id`),
  ADD KEY `question_id_fk_773767` (`question_id`),
  ADD KEY `option_id_fk_773767` (`option_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk_773765` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_773681` (`user_id`),
  ADD KEY `role_id_fk_773681` (`role_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `question_fk_773758` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_773672` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_773672` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `category_fk_773713` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `question_result`
--
ALTER TABLE `question_result`
  ADD CONSTRAINT `option_id_fk_773767` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `question_id_fk_773767` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `result_id_fk_773767` FOREIGN KEY (`result_id`) REFERENCES `results` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `user_fk_773765` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_773681` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_773681` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
