-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2021 pada 12.25
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor_care`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_admin` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
('ADM-001', 'admin', 'admin', '$2y$10$NiJPPfR4ijYRsTODgYD8xO5MEHHaaQ3IGawsc7/Ls87.gNbGO8oGO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_apotek`
--

CREATE TABLE `admin_apotek` (
  `id_admin_apotek` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_admin` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_centang` date DEFAULT NULL,
  `jam_centang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dokter` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `STR` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keahlian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengalaman_kerja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Aktif','Tidak aktif') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `email`, `username`, `password`, `alamat`, `no_telp`, `STR`, `keahlian`, `foto`, `pengalaman_kerja`, `status`) VALUES
('DR-001', 'Haga', '', 'haga', '$2y$10$aXNGMj/a8tZKz.DwyNWgvuQWKMJThtvNPl.nFIZMzQ0KQnizNFRTO', NULL, NULL, NULL, 'Dokter Gigi', NULL, NULL, 'Aktif'),
('DR-002', 'Alvin', '', 'alvin', '$2y$10$858wM/7dLJ1KFnKvI4WJquqLcQkkMqC9jfjHI3k8K5L8yE.loe.Di', NULL, NULL, NULL, 'Dokter Umum', NULL, NULL, 'Aktif'),
('DR-003', 'Juda', '', 'juda', '$2y$10$MRu8veswY90wy0osz7c9Su69jeYN9fD5C6hKFTVQKRllgGxcvDtui', NULL, NULL, NULL, 'Dokter Bedah', NULL, NULL, 'Aktif'),
('DR-004', 'Mela', NULL, 'mela', '$2y$10$FZapa/Q/R19KlUua5WElveZjp96AKIyZFvmHJcLMbxC8zmleC4c7q', NULL, NULL, NULL, NULL, NULL, NULL, 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_berakhir` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dokter` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `tanggal`, `jam_mulai`, `jam_berakhir`, `id_dokter`) VALUES
('JDW-001', '2021-05-20', '09:45', '16:45', 'DR-001'),
('JDW-002', '2021-05-24', '09:45', '16:45', 'DR-003'),
('JDW-003', '2021-05-31', '09:45', '16:45', 'DR-004');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keluhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_keluhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Menunggu','Disetujui','Ubah jadwal','Dibatalkan','Selesai') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Menunggu',
  `tanggal_reschedule` date DEFAULT NULL,
  `jam_reschedule` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_pasien` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dokter` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `tanggal`, `jam`, `keluhan`, `foto_keluhan`, `meet`, `status`, `tanggal_reschedule`, `jam_reschedule`, `id_pasien`, `id_dokter`) VALUES
('KST-001', '2021-05-28', '18:00', 'Sakit lambung mual mual ', 'create_event.jpg', 'https://meet.google.com/ttl-xkbd-wld', 'Menunggu', '2021-05-25', '11:45', 'PSN-001', 'DR-003'),
('KST-002', '2021-05-21', '12:00', 'Sakit pinggang', 'video_call.jpg', 'https://meet.google.com/rhl-xpia-bmv', 'Ubah jadwal', '2021-05-31', '12:45', 'PSN-001', 'DR-001'),
('KST-003', '2021-05-27', '18:00', 'pen sakit', 'video_call1.jpg', 'https://meet.google.com/xsm-hjfi-ula', 'Disetujui', NULL, NULL, 'PSN-002', 'DR-003'),
('KST-004', '2021-05-28', '15:00', 'Sakit mag', 'video_call2.jpg', 'https://meet.google.com/pzo-qjtm-ftn', 'Disetujui', NULL, NULL, 'PSN-003', 'DR-004'),
('KST-005', '2021-05-28', '11:00', 'Sakit perut', 'video_call3.jpg', 'https://meet.google.com/ubt-efos-ngu', 'Selesai', '2021-05-29', '09:45', 'PSN-003', 'DR-004'),
('KST-006', '2021-05-31', '11:00', 'sakit badan', 'video_call4.jpg', 'https://meet.google.com/hqk-uyrf-fnq', 'Disetujui', NULL, NULL, 'PSN-003', 'DR-004');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_10_17_131248_create_admin_apotek_table', 1),
(2, '2020_10_17_131248_create_admin_table', 1),
(3, '2020_10_17_131249_create_dokter_table', 1),
(4, '2020_11_17_131043_create_pasien_table', 1),
(5, '2020_11_17_131044_create_konsultasi_table', 1),
(6, '2020_11_17_131045_create_jadwal_table', 1),
(7, '2020_11_17_172832_create_obat_table', 1),
(8, '2020_11_17_172832_create_resep_table', 1),
(9, '2021_11_17_131066_create_resep_obat_table', 1),
(10, '2021_11_17_131067_create_rekam_medis_table', 1),
(11, '2021_11_17_131068_create_pembayaran_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_obat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pasien` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `email`, `username`, `password`, `jenis_kelamin`, `alamat`, `foto`, `no_telp`, `tgl_lahir`) VALUES
('PSN-001', 'Rafif Yusuf Avandy', 'rafifyusuf@gmail.com', 'rafifyusuf', '$2y$10$MYruthNTxohkUiQ2ThXG2.CvyEp/VnsLSCTxDAUvWdLeau3O4YiPO', NULL, NULL, NULL, '082116097045', NULL),
('PSN-002', 'Alvin', NULL, 'alvinpasien', '$2y$10$HGvIhX45evgmovSK6yXYcezMA41bBpVWz5yOOXnRbmlQ6vKMl6pxG', NULL, NULL, NULL, '08211609704', NULL),
('PSN-003', 'haga', 'hagaibnuhakam@gmail.com', 'haga', '$2y$10$E05qHneT9b1l5CZFd.bk4O13CjRf/./Uy0jaG4ctM8dUwzzjnjwFi', NULL, NULL, NULL, '0821160821028', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` int(11) NOT NULL,
  `foto_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_bayar` enum('Terbayar','Belum dibayar') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum dibayar',
  `id_konsultasi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `kode_bayar`, `nominal`, `foto_pembayaran`, `status_bayar`, `id_konsultasi`) VALUES
('PMB-001', '888886074392', 50000, NULL, 'Belum dibayar', 'KST-001'),
('PMB-002', '888881042935', 80000, 'video_call.jpg', 'Belum dibayar', 'KST-002'),
('PMB-003', '888872180356', 50000, 'create_event.jpg', 'Belum dibayar', 'KST-003'),
('PMB-004', '888896012837', 50000, 'create_event1.jpg', 'Belum dibayar', 'KST-004'),
('PMB-005', '888826958071', 50000, 'video_call1.jpg', 'Belum dibayar', 'KST-005'),
('PMB-006', '888823698705', 50000, NULL, 'Belum dibayar', 'KST-006');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `no_record` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekam_medis` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnosa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_pemeriksaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dokter` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pasien` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `id_resep` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cara_pakai` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_obat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosis` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep_obat`
--

CREATE TABLE `resep_obat` (
  `id_resep_obat` int(10) UNSIGNED NOT NULL,
  `id_obat` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_resep` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pasien` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `admin_apotek`
--
ALTER TABLE `admin_apotek`
  ADD PRIMARY KEY (`id_admin_apotek`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `jadwal_id_dokter_foreign` (`id_dokter`);

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `konsultasi_id_pasien_foreign` (`id_pasien`),
  ADD KEY `konsultasi_id_dokter_foreign` (`id_dokter`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `pembayaran_id_konsultasi_foreign` (`id_konsultasi`);

--
-- Indeks untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`no_record`),
  ADD KEY `rekam_medis_id_dokter_foreign` (`id_dokter`),
  ADD KEY `rekam_medis_id_pasien_foreign` (`id_pasien`);

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`);

--
-- Indeks untuk tabel `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD PRIMARY KEY (`id_resep_obat`),
  ADD KEY `resep_obat_id_obat_foreign` (`id_obat`),
  ADD KEY `resep_obat_id_resep_foreign` (`id_resep`),
  ADD KEY `resep_obat_id_pasien_foreign` (`id_pasien`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `resep_obat`
--
ALTER TABLE `resep_obat`
  MODIFY `id_resep_obat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_id_dokter_foreign` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `konsultasi_id_dokter_foreign` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `konsultasi_id_pasien_foreign` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_id_konsultasi_foreign` FOREIGN KEY (`id_konsultasi`) REFERENCES `konsultasi` (`id_konsultasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `rekam_medis_id_dokter_foreign` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekam_medis_id_pasien_foreign` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD CONSTRAINT `resep_obat_id_obat_foreign` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resep_obat_id_pasien_foreign` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resep_obat_id_resep_foreign` FOREIGN KEY (`id_resep`) REFERENCES `resep` (`id_resep`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
