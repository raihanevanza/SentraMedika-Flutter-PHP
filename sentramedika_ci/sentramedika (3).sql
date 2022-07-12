-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Agu 2021 pada 16.18
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sentramedika`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `spesialis` varchar(255) NOT NULL,
  `hari` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`id`, `no_antrian`, `nama`, `no_hp`, `spesialis`, `hari`) VALUES
(4, 4, 'Raihan Evanza', 2, 'Mata', '2021-06-17'),
(5, 1, 'Anugrah Perdana', 2, 'Mata', '2021-06-17'),
(9, 2, 'Ahmad Satria', 2147483647, 'Mata', '2021-07-29'),
(10, 1, 'Anu', 821345678, 'Jantung', '2021-07-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'admin@gmail.com', 1, '2021-04-29 22:46:07', 1),
(2, '::1', 'admin@gmail.com', 1, '2021-04-29 23:17:42', 1),
(3, '::1', 'admin@gmail.com', 1, '2021-04-30 02:13:15', 1),
(4, '::1', 'admin@gmail.com', 1, '2021-05-03 00:38:55', 1),
(5, '::1', 'admin@gmail.com', 1, '2021-05-03 07:52:31', 1),
(6, '::1', 'admin@gmail.com', 1, '2021-05-05 22:46:03', 1),
(7, '::1', 'admin', NULL, '2021-05-06 08:57:16', 0),
(8, '::1', 'admin@gmail.com', 1, '2021-05-06 08:57:21', 1),
(9, '::1', 'admin@gmail.com', 1, '2021-05-07 02:02:15', 1),
(10, '::1', 'admin@gmail.com', 1, '2021-05-07 02:13:30', 1),
(11, '::1', 'admin@gmail.com', 1, '2021-05-07 02:13:39', 1),
(12, '::1', 'admin@gmail.com', 1, '2021-05-07 02:23:07', 1),
(13, '::1', 'admin@gmail.com', 1, '2021-05-07 08:58:33', 1),
(14, '::1', 'admin@gmail.com', 1, '2021-05-08 04:02:56', 1),
(15, '::1', 'admin@gmail.com', 1, '2021-05-09 22:59:09', 1),
(16, '::1', 'admin@gmail.com', 1, '2021-05-14 04:30:48', 1),
(17, '::1', 'admin@gmail.com', 1, '2021-05-14 09:15:39', 1),
(18, '::1', 'admin@gmail.com', 1, '2021-05-14 09:23:14', 1),
(19, '::1', 'admin@gmail.com', 1, '2021-05-17 01:09:19', 1),
(20, '::1', 'admin@gmail.com', 1, '2021-05-17 02:00:38', 1),
(21, '::1', 'admin@gmail.com', 1, '2021-05-17 02:20:37', 1),
(22, '::1', 'admin@gmail.com', 1, '2021-05-17 02:20:46', 1),
(23, '::1', 'admin@gmail.com', 1, '2021-05-17 02:22:20', 1),
(24, '::1', 'admin@gmail.com', 1, '2021-05-17 02:22:27', 1),
(25, '::1', 'admin@gmail.com', 1, '2021-05-17 02:22:32', 1),
(26, '::1', 'admin@gmail.com', 1, '2021-05-17 02:22:38', 1),
(27, '::1', 'admin@gmail.com', 1, '2021-05-17 02:22:52', 1),
(28, '::1', 'admin@gmail.com', 1, '2021-05-17 02:23:20', 1),
(29, '::1', 'anugrah@gmail.com', 2, '2021-05-17 02:55:26', 1),
(30, '::1', 'anugrah@gmail.com', 2, '2021-05-20 10:32:58', 1),
(31, '::1', 'admin@gmail.com', 1, '2021-05-25 02:37:54', 1),
(32, '::1', 'admin@gmail.com', 1, '2021-05-25 08:45:55', 1),
(33, '::1', 'admin@gmail.com', 1, '2021-05-26 02:55:09', 1),
(34, '::1', 'admin@gmail.com', 1, '2021-05-26 08:34:26', 1),
(35, '::1', 'admin@gmail.com', 1, '2021-05-26 19:02:46', 1),
(36, '::1', 'admin@gmail.com', 1, '2021-05-27 00:57:41', 1),
(37, '::1', 'admin@gmail.com', 1, '2021-05-27 08:56:16', 1),
(38, '::1', 'admin@gmail.com', 1, '2021-05-28 04:18:15', 1),
(39, '::1', 'admin@gmail.com', 1, '2021-05-28 08:09:26', 1),
(40, '::1', 'admin', NULL, '2021-06-18 03:04:38', 0),
(41, '::1', 'admin@gmail.com', 1, '2021-06-18 03:05:00', 1),
(42, '::1', 'admin@gmail.com', 1, '2021-07-03 10:46:10', 1),
(43, '::1', 'admin@gmail.com', 1, '2021-07-05 03:24:56', 1),
(44, '::1', 'admin@gmail.com', 1, '2021-07-05 08:31:22', 1),
(45, '::1', 'raihan.evanza20@gmail.com', 0, '2021-07-06 09:11:07', 1),
(46, '::1', 'raihan.evanza20@gmail.com', 0, '2021-07-06 09:11:23', 1),
(47, '::1', 'admin@gmail.com', 1, '2021-07-06 09:12:11', 1),
(48, '::1', 'admin@gmail.com', 1, '2021-07-06 09:12:57', 1),
(49, '::1', 'admin@gmail.com', 1, '2021-07-16 04:33:10', 1),
(50, '::1', 'admin@gmail.com', 1, '2021-07-16 05:36:21', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contactus`
--

INSERT INTO `contactus` (`id`, `nama`, `email`, `pesan`) VALUES
(2, 'Anugrah Perdana', 'anugrah@gmail.com', 'Sukses'),
(3, 'Andi', 'andi@gmail.com', 'Fasilitas dan layanan yang baik'),
(4, 'Rizka', 'rizka@gmail.com', 'Nyaman dan Aman'),
(6, 'Test', 'Test@gmail.com', 'Test'),
(7, 'Anugrah Perdana', 'anugrah@gmail.com', 'test'),
(8, 'erwr', 'evan@gmail.com', 'sdfsdf'),
(9, 'anugrah', 'anugrah@gmail.com', 'keren semogag konsisten'),
(10, 'raihan', 'raihan.evanza20@gmail.com', 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `namadokter` varchar(80) NOT NULL,
  `spesialis` varchar(25) NOT NULL,
  `senin` varchar(255) NOT NULL,
  `selasa` varchar(25) NOT NULL,
  `rabu` varchar(25) NOT NULL,
  `kamis` varchar(25) NOT NULL,
  `jumat` varchar(25) NOT NULL,
  `sabtu` varchar(25) NOT NULL,
  `minggu` varchar(25) NOT NULL,
  `fotodokter` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `namadokter`, `spesialis`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `minggu`, `fotodokter`) VALUES
(10, 'Tono', 'Mata', '', '', '', '14.00 - 16.00', '', '14.00 - 16.00', '', '1620372284_da409c0dc118066cd426.jpg'),
(13, 'Adi', 'Mata', '14.00 - 16.00', '', '', '14.00 - 16.00', '', '14.00 - 16.00', '', '1620985454_9f246ad9416fd9ed3d73.jpg'),
(14, 'Gunawan', 'Jantung', '16.00 - 18.00', '16.00 - 18.00', '16.00 - 18.00', '', '16.00 - 18.00', '', '', '1620985485_a4d930aea86b63ddd349.jpg'),
(15, 'Liana', 'Anak', 'Selasa 15.00 - 17.00, Kam', '', '', '', '', '', '', '1620985515_17dea65df910af81ae8a.jpeg'),
(16, 'Fitri', 'Mata', 'Senin 16.00 - 18.00, Rabu', '', '', '', '', '', '', '1621235087_0a4603bb9503a34d01d4.jpg'),
(18, 'Meong', 'Mata', 'Senin 16.00 - 18.00, Rabu', '', '', '', '', '', '', '1622036059_4dae6b9e14c9000cc720.jpg'),
(19, 'Miong', 'Anak', '17:00', '', '', '', '', '', '', '1622038485_aa564452f9c0223ad54a.jpg'),
(20, 'Binggo', 'Mata', 'Selasa 15.00 - 17.00, Kamis 12.00 - 14.00', '', '', '', '', '', '', '1622075424_b6d0c4304eb52d718610.jpg'),
(21, 'Ako', 'Mata', '17:00;18:00', '', '', '', '', '', '', '1622098610_ebea9bd191ef1d3d0cb5.jpg'),
(22, 'Anonim', 'Jantung', '16:00 - 17:00', '', '', '', '', '', '', '1622098683_1727b214f453c8f8cd80.jpeg'),
(23, 'Bambang', 'Anak', ' - ', '', '', '', '', '', '', '1622099972_67b8ce56c4b862731eaf.png'),
(24, 'Test', 'Mata', ' - ', ' - ', ' - ', ' - ', ' - ', ' - ', ' - ', '1622123771_145f101c5989b8684305.png'),
(25, 'Anugrah Perdana', 'Mata', '16:00 - 18:00', ' - ', '17:23 - 20:26', ' - ', '18:24 - 19:26', ' - ', ' - ', '1622193775_207131f83bafa555d71a.jpg'),
(26, 'Raihan', 'Mata', '08:00 - 19:00', '08:00 - 19:00', '08:00 - 17:00', ' - ', ' - ', ' - ', ' - ', '1625475103_b348f6dcfe22bd78db96.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1619753752, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `namaobat` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `stok` varchar(15) NOT NULL,
  `fotoobat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id`, `namaobat`, `kategori`, `stok`, `fotoobat`) VALUES
(3, 'Bodrex', 'Obat Bebas Terbatas', '5', '1621950482_ac8ada32984ee1abfabe.jpg'),
(4, 'Neozef', 'Obat Bebas Terbatas', '20', '1621950493_ac2a2b517d4bf8ab9cd1.jpg'),
(5, 'Paracetamol', 'Obat Bebas', '4', '1621950573_0acbfd640e8c8168dede.jpg'),
(6, 'OBH', 'Obat Keras', '6', '1621950585_7bf77126d4d34a67017e.jpg'),
(7, 'Mylanta', 'Obat Keras', '23', '1621950634_e1ced92b95382a7f31ca.jpg'),
(8, 'Polysilane', 'Obat Bebas Terbatas', '24', '1621950650_641a05e7d2bd961b1815.jpg'),
(9, 'Panadol', 'Obat Bebas Terbatas', '21', '1621950719_e5ee16e3344217fffa85.jpg'),
(14, 's', 'Obat Bebas', '2', 'default.png'),
(15, 'ew', 'Obat Bebas', '1', '1621930103_8e523aede0410262a875.jpg'),
(16, 'dfgs', 'Obat Bebas', '2', 'default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(0, 'raihan.evanza20@gmail.com', 'Raihan', '$2y$10$1NNRowTIvlbXOk/W2IRkROabKQKOmW4blAwMKDANTng9QUZsvUU.G', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-07-06 09:10:47', '2021-07-06 09:10:47', NULL),
(1, 'admin@gmail.com', 'admin', '$2y$10$.6Lhi5c3c5eGw3FiYwOma.mFg.6EpZj8/f5iVCzqnJFohkfJ3BxY6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-04-29 22:45:56', '2021-04-29 22:45:56', NULL),
(2, 'anugrah@gmail.com', 'anugrah', '$2y$10$APS9tFl8TD.tJtvkS5cEWObi4JvKWXzLjibGYGcNwxmw5NTAaVl9K', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-17 02:55:18', '2021-05-17 02:55:18', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
