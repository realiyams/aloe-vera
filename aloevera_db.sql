-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Waktu pembuatan: 28 Bulan Mei 2021 pada 07.23
-- Versi server: 5.7.31
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aloevera_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aloe_veras`
--

DROP TABLE IF EXISTS `aloe_veras`;
CREATE TABLE IF NOT EXISTS `aloe_veras` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `jumlahDaun` int(10) UNSIGNED NOT NULL,
  `warnaDaun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisiDaun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahTunas` int(10) UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aloe_veras_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aloe_veras`
--

INSERT INTO `aloe_veras` (`id`, `jumlahDaun`, `warnaDaun`, `kondisiDaun`, `jumlahTunas`, `image_path`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 17, 'hijau', 'kurus', 5, '60b043eb8e7db-jpg', '2021-05-27 18:14:19', '2021-05-27 18:14:19', 1),
(2, 8, 'Hijau', 'mengering', 0, '60b0451205da3-jpg', '2021-05-27 18:19:14', '2021-05-27 18:19:14', 1),
(3, 12, 'Hijau', 'kurus', 0, '60b0457f03f08-jpg', '2021-05-27 18:21:03', '2021-05-27 18:21:03', 1),
(4, 13, 'Hijau', 'Gemuk', 4, '60b0486f33a51-jpg', '2021-05-27 18:33:35', '2021-05-27 18:33:35', 2),
(5, 11, 'hijau', 'gemuk', 4, '60b09883ce29e-jpg', '2021-05-28 00:15:15', '2021-05-28 00:15:15', 1),
(6, 13, 'hijau', 'gemuk', 5, '60b099fccddde-jpg', '2021-05-28 00:21:32', '2021-05-28 00:21:32', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_23_121501_create_aloe_veras_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', NULL, '$2y$10$bab1EbiXOjY1Q5uRWs08uumFDeNf8mpdQXF9.Wzng01uYt6bMxm.m', NULL, '2021-05-27 18:01:09', '2021-05-27 18:01:09'),
(2, 'ilham cahya', 'ilham', 'ilham@info.com', NULL, '$2y$10$r2GRgQoY9uvtoEFubrrRnORY8vbwroQnr34cMA9g03L3mNJ8QKpPW', NULL, '2021-05-27 18:01:53', '2021-05-27 18:01:53'),
(3, 'superuser', 'superuserdo', 'sudo@sudo.com', NULL, '$2y$10$JNvJUIrVWNAe97EiPqzUIuT3wUURiXy2XsoZC/GIKAnI0ifEqbh2i', NULL, '2021-05-27 18:03:10', '2021-05-27 18:03:10');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aloe_veras`
--
ALTER TABLE `aloe_veras`
  ADD CONSTRAINT `aloe_veras_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
