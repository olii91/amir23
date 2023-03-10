-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Mar 2023 pada 08.06
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemasiyan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_06_003808_add_level_user', 2),
(6, '2023_03_06_004331_create_pengaduans_table', 2),
(7, '2023_03_06_005330_create_tanggapans_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduans`
--

CREATE TABLE `pengaduans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `jdl_pengaduan` varchar(255) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `isi_laporan` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` enum('diproses','ditolak','diterima') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengaduans`
--

INSERT INTO `pengaduans` (`id`, `user_id`, `jdl_pengaduan`, `tgl_pengaduan`, `isi_laporan`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(4, 6, 'kemalingan', '2023-03-07', 'jadi pada tanggal sekian saya kemalingan', NULL, 'diproses', '2023-03-07 06:53:27', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapans`
--

CREATE TABLE `tanggapans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pengaduan_id` bigint(20) UNSIGNED NOT NULL,
  `isi_tanggapan` varchar(255) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `tlp` varchar(255) NOT NULL,
  `level` enum('admin','petugas','masyarakat') NOT NULL,
  `nik` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`, `tlp`, `level`, `nik`) VALUES
(1, 'adrian', 'adrian@gmail.com', NULL, '$2y$10$sYrQ0aPsVaBHlUyEOwYtI.2RD.WDrqd9tGoakWnGPN9w4Bgqu3VwO', NULL, '2023-03-05 16:34:47', '2023-03-05 16:34:47', 'admin', '081258043591', 'admin', NULL),
(2, 'suci', 'suci@gmail.com', NULL, '$2y$10$sbk4p6V9Z4KczLXHfp.kwuhAKVrAOl3qF5q0qEUnuTDuxNdhgUE8K', NULL, '2023-03-05 16:35:11', '2023-03-05 16:35:11', 'petugas', '089570427307', 'petugas', NULL),
(3, 'gavi', 'gavi@gmail.com', NULL, '$2y$10$zZ8DRrs/loArj3AGroyuweVgTQeY8vjr.lGPk04KHytDfzerP0T9m', NULL, '2023-03-05 16:35:34', '2023-03-05 16:35:34', 'petugas2', '082187800050', 'petugas', NULL),
(4, 'emmanuel zaragosa', 'ema@gmail.com', NULL, '$2y$10$mku5xR4VZMDy9F1jm2Y7cuqbpPXGfu2YSzHF6pzIEkkQhvOTQmPku', NULL, '2023-03-05 17:36:57', '2023-03-06 23:48:37', 'anto', '0883829822', 'masyarakat', '812388232132'),
(6, 'Yanto basna', 'basna@gmail.com', NULL, '$2y$10$CVQJKv5qQ2ZkT0O3RpnF7u/t/.ZVvCYB5l/.pNjlW6OTLotz8fX9a', NULL, '2023-03-06 19:56:41', '2023-03-06 19:56:41', 'basna', '0812567874598', 'masyarakat', '6478967467890764'),
(7, 'senju', 'adsdsa@gmail.com', NULL, '$2y$10$l9vWFw614uO.gSjoK2E2OOecHD2cr4VySHRrxIaDr/4OxwN8wA7o.', NULL, '2023-03-06 23:28:16', '2023-03-06 23:28:16', 'admin2222222', '344432443324', 'petugas', NULL),
(8, 'asdjjsk', 'kjadahsdha@gmail.com', NULL, '$2y$10$9vv08R5I0ST8.7zcL4r2UetpPJV39noxS7e7zQS5G9YfShgvnUM3u', NULL, '2023-03-07 00:26:28', '2023-03-07 00:26:28', 'dasa', '312312321323', 'masyarakat', '12321232122');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pengaduans`
--
ALTER TABLE `pengaduans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengaduans_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tanggapans`
--
ALTER TABLE `tanggapans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tanggapans_user_id_foreign` (`user_id`),
  ADD KEY `tanggapans_pengaduan_id_foreign` (`pengaduan_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pengaduans`
--
ALTER TABLE `pengaduans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tanggapans`
--
ALTER TABLE `tanggapans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengaduans`
--
ALTER TABLE `pengaduans`
  ADD CONSTRAINT `pengaduans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tanggapans`
--
ALTER TABLE `tanggapans`
  ADD CONSTRAINT `tanggapans_pengaduan_id_foreign` FOREIGN KEY (`pengaduan_id`) REFERENCES `pengaduans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tanggapans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
