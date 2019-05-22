-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2019 at 04:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roomexp`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `bill`, `price`, `note`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(61, 'Cooler', 233, 'fggdgfsdf', 2, '0', '2019-05-22 06:57:50', '2019-05-22 07:04:58'),
(62, 'modi', 635, 'Laboriosam magnam eos excepturi delectus eum. Ea impedit amet ab vel iusto. Quos officia fugit rem aut.', 3, '0', '2019-05-22 07:06:39', '2019-05-22 07:06:39'),
(63, 'impedit', 978, 'Voluptatem ut eius saepe iusto voluptas facere laudantium. Commodi ut exercitationem facilis aut et nihil. Ipsum perspiciatis maxime et. Quia in architecto exercitationem ut ut.', 3, '0', '2019-05-22 07:06:39', '2019-05-22 07:06:39'),
(65, 'ducimus', 850, 'Nostrum autem voluptatem sed consequuntur nobis earum dolore. Nesciunt impedit eius dignissimos qui. Ea facere libero nemo nihil.', 4, '0', '2019-05-22 07:06:40', '2019-05-22 07:06:40'),
(67, 'at', 979, 'Incidunt voluptates quidem id. Enim nobis enim fugiat quasi facere eos. Nisi quisquam soluta eos fuga quis.', 3, '0', '2019-05-22 07:06:40', '2019-05-22 07:06:40'),
(68, 'maxime', 654, 'Autem minus architecto laboriosam nesciunt culpa est. Dolore architecto qui dolorum consequatur. Rem rerum eum incidunt excepturi quam aut temporibus.', 2, '0', '2019-05-22 07:06:40', '2019-05-22 07:06:40'),
(69, 'autem', 378, 'Aliquam molestiae quae consequuntur magnam incidunt. Delectus sit nobis repellat beatae vero provident eos. Harum expedita beatae porro magni perferendis.', 1, '0', '2019-05-22 07:06:40', '2019-05-22 07:06:40'),
(70, 'rerum', 118, 'Suscipit rem iusto dignissimos nulla deleniti omnis ut. Accusantium qui ab ut aut deleniti. Consequatur dolores dignissimos harum sunt quia.', 3, '0', '2019-05-22 07:06:40', '2019-05-22 07:06:40'),
(71, 'voluptatem', 951, 'Mollitia eos amet quam quo. Recusandae possimus in velit esse aliquid enim soluta. Aliquid eaque sed rem. Consectetur saepe ut quam eaque exercitationem excepturi dolor.', 4, '0', '2019-05-22 07:06:40', '2019-05-22 07:06:40');

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
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_05_20_122044_create_expenses_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` enum('admin','partner') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'partner',
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Danny Keeling', 'hertha59@example.com', '2019-05-20 07:36:28', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'partner', '0', 'MdxPQfqrILUZpQB7aXmUVDeFwWkVagnrxPidcA4GDp4BEKssufsq8MT24X0C', '2019-05-20 07:36:28', '2019-05-20 07:36:28'),
(2, 'Ms. Madelyn Kuhic', 'mark65@example.net', '2019-05-20 07:36:28', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'partner', '0', 'EUFm5AgBL7wmSxCrd7zz8cFhBjQvOsMd2ardsTjpKBNtui4WPbbNR7oG0rkw', '2019-05-20 07:36:28', '2019-05-20 07:36:28'),
(3, 'Prof. Carolina Nolan', 'fay38@example.com', '2019-05-20 07:36:28', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'partner', '0', 'rDdzIhUxZL', '2019-05-20 07:36:28', '2019-05-20 07:36:28'),
(4, 'Rupam', 'rupam@cybertrontechnologies.com', NULL, '$2y$10$kSFYKvRbT7cVRls3Lm/WYOFQX13Uy5lm0S/cnhjIFIi/eMUFUzwjK', 'partner', '0', NULL, '2019-05-21 05:30:47', '2019-05-21 05:30:47'),
(5, 'Ned Keeling', 'ypollich@example.org', '2019-05-21 08:21:34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'partner', '0', 'WfgPcvXUjt', '2019-05-21 08:21:34', '2019-05-21 08:21:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expenses_user_id_index` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
