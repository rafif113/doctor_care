-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2021 pada 08.14
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
('ADM-001', 'admin', 'admin', '$2y$10$fjV0nL9xgMG7KhhBiuqQFuIW3CDpoA8X/zAnq5.e8Ct5ojt/oZ4vC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_apotek`
--

CREATE TABLE `admin_apotek` (
  `id_admin_apotek` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_admin` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin_apotek`
--

INSERT INTO `admin_apotek` (`id_admin_apotek`, `nama_admin`, `username`, `password`) VALUES
('ADMP-001', 'Admin Apotek', 'apotek', '$2y$10$Aeur3NHJQU7/OZysDKGt8ejtLIKqeOho531TTza0RlPNO1x7Iz9fS');

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
  `harga` int(11) DEFAULT NULL,
  `status` enum('Aktif','Tidak aktif') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `email`, `username`, `password`, `alamat`, `no_telp`, `STR`, `keahlian`, `foto`, `pengalaman_kerja`, `harga`, `status`) VALUES
('DR-001', 'Dr. Alvin Sutapa', 'alvin@gmail.com', 'alvin', '$2y$10$7fFTHBjVG1szvQLqs.Ef6.z8h/ekVvObWCSnTeEyGZfTMgm7k8sm2', NULL, '082116097045', '12231312', 'Spesialis Bulu Mata', 'doctor-011.jpg', 'Banyak Sekali', 70000, 'Aktif'),
('DR-002', 'Dr Haga sutarmin', 'haga@mail.com', 'haga', '$2y$10$fEPINA2Fo.mQnJkrfzAzs.pyZ7lzuLUFGHOLdr5tM2Mxkl8hyAKLS', NULL, '08177736192', '12434', 'Spesialis Muka', 'doctor-09.jpg', 'Banyak Sekali', 55000, 'Aktif'),
('DR-003', 'Dr Juda Angkasa', 'juda@gmail.com', 'juda', '$2y$10$8L9IESbFSw5CYoJaA3Vj7ODcmFmrmqr8yiwXhn.yGwBk1ATBzGnIu', NULL, '0812217419120', '12499', 'Spesialis Hidung', 'doctor-041.jpg', 'Banyak Sekali', 30000, 'Aktif');

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
('JDW-001', '2021-06-24', '09:45', '16:45', 'DR-001'),
('JDW-002', '2021-06-25', '09:45', '16:45', 'DR-001'),
('JDW-003', '2021-06-25', '13:45', '16:45', 'DR-003'),
('JDW-004', '2021-07-01', '09:45', '16:45', 'DR-002'),
('JDW-005', '2021-07-07', '09:45', '16:45', 'DR-001'),
('JDW-006', '2021-07-17', '09:45', '16:45', 'DR-001'),
('JDW-007', '2021-07-17', '09:45', '16:45', 'DR-001'),
('JDW-008', '2021-07-28', '09:45', '16:45', 'DR-001');

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
('KST-001', '2021-06-24', '11:00', 'Saki', 'contoh_5.jpg', 'https://meet.google.com/gzi-ojey-tqo', 'Selesai', NULL, NULL, 'PSN-001', 'DR-001'),
('KST-002', '2021-06-25', '12:00', 'Sakit mata', '2_31.jpg', 'meet.com', 'Selesai', NULL, NULL, 'PSN-003', 'DR-001'),
('KST-003', '2021-07-01', '11:00', 'Sakit Mata', 'user-6.jpg', 'meet.com', 'Selesai', NULL, NULL, 'PSN-001', 'DR-002'),
('KST-004', '2021-06-25', '12:00', 'Sakit mata', 'Screenshot_2020-11-10_092332.jpg', 'gogle.meet', 'Selesai', '2021-07-16', '09:45', 'PSN-001', 'DR-001'),
('KST-005', '2021-07-07', '12:00', 'Keluhan kulit di area mata', '2_32.jpg', 'https://meet.google.com/psz-zoht-toy', 'Menunggu', NULL, NULL, 'PSN-001', 'DR-001'),
('KST-006', '2021-07-07', '13:00', 'Sakit mata', 'Screenshot_2020-11-10_0923321.jpg', 'meet.com', 'Disetujui', NULL, NULL, 'PSN-001', 'DR-001');

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
  `nama_obat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk_obat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `merk_obat`) VALUES
('OBT-001', 'Obat sunscreen', 'Nivea'),
('OBT-002', 'Obat Cream Malam', 'Wardah');

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
  `no_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `email`, `username`, `password`, `jenis_kelamin`, `alamat`, `no_ktp`, `foto`, `no_telp`, `tgl_lahir`) VALUES
('PSN-001', 'Stephen Hawkins Jr', 'stephen@hawmail.com', 'stephen', '$2y$10$4PtDH8QR2kcuv6wvBxgdTuXhIQy10fIITkA8BMBi8bFW8z2tZlASu', 'Laki-laki', 'Jl Ach', '1234567890123456', 'doctor-012.jpg', '082116097045', '2005-01-10'),
('PSN-002', 'Rafif Yusuf Avandy', 'rafifyusuf@gmail.com', 'rafifyusuf', '$2y$10$iynBsa7x/yikqkyOCTQPQ.vyeEJXtXJLOLMTmT19Wz3q/nTeNPcVC', NULL, NULL, NULL, NULL, NULL, NULL),
('PSN-003', 'haga', 'haga@mail.com', 'haga123', '$2y$10$KASGHA47IIixIyetmvXPX.T6FpaLIr1dZ.jZfsUJ/tjLjuYECTX1e', 'Laki-laki', 'Bsa 1', '1234567890123456', 'example.jpg', '08211697381', '2016-06-08');

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
  `tgl_pembayaran` date DEFAULT NULL,
  `tgl_validasi` date DEFAULT NULL,
  `jam_validasi` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_admin` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_konsultasi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `kode_bayar`, `nominal`, `foto_pembayaran`, `status_bayar`, `tgl_pembayaran`, `tgl_validasi`, `jam_validasi`, `id_admin`, `id_konsultasi`) VALUES
('PMB-001', '888891073465', 70000, NULL, 'Belum dibayar', NULL, NULL, NULL, NULL, 'KST-001'),
('PMB-002', '888824038971', 70000, '2_2.jpg', 'Terbayar', '2021-06-30', '2021-06-30', '12:55', 'ADM-001', 'KST-002'),
('PMB-003', '888824196387', 55000, '2_3.jpg', 'Terbayar', '2021-07-07', '2021-07-07', '10:23', 'ADM-001', 'KST-003'),
('PMB-004', '888819730526', 70000, 'contoh_5.jpg', 'Terbayar', '2021-07-07', '2021-07-07', '10:59', 'ADM-001', 'KST-004'),
('PMB-005', '888876329548', 70000, NULL, 'Belum dibayar', NULL, NULL, NULL, NULL, 'KST-005'),
('PMB-006', '888878901326', 70000, '2_21.jpg', 'Terbayar', '2021-07-08', '2021-07-08', '01:12', 'ADM-001', 'KST-006');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `no_record` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekam_medis` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diagnosa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_pemeriksaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_dokter` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_pasien` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_konsultasi` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rekam_medis`
--

INSERT INTO `rekam_medis` (`no_record`, `no_rekam_medis`, `tanggal`, `jam`, `diagnosa`, `catatan`, `foto_pemeriksaan`, `id_dokter`, `id_pasien`, `id_konsultasi`) VALUES
('RC-001', 12131212, '2021-06-25', '12:00', 'Sakit sembuh', 'Sembuh ya de', '2_21.jpg', 'DR-001', 'PSN-001', 'KST-001'),
('RC-002', 12131212, '2021-06-24', '12:00', 'Sakit sembuh', 'Sembuh', '2_2.jpg', 'DR-001', 'PSN-003', 'KST-002'),
('RC-003', NULL, NULL, NULL, NULL, NULL, NULL, 'DR-002', 'PSN-001', 'KST-003'),
('RC-004', NULL, NULL, NULL, NULL, NULL, NULL, 'DR-001', 'PSN-001', 'KST-004');

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

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`id_resep`, `cara_pakai`, `kode_obat`, `dosis`) VALUES
('RSP-001', 'Ulaskan merata', '121212', '3 x 1'),
('RSP-002', 'Usapkan pada pinggir pipi', '9712791', '2 x 1'),
('RSP-003', 'Dioles', '18261', '3 x 1'),
('RSP-004', '', '', ''),
('RSP-005', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep_obat`
--

CREATE TABLE `resep_obat` (
  `id_resep_obat` int(10) UNSIGNED NOT NULL,
  `tgl_centang` date DEFAULT NULL,
  `jam_centang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_obat` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_resep` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_pasien` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_konsultasi` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `resep_obat`
--

INSERT INTO `resep_obat` (`id_resep_obat`, `tgl_centang`, `jam_centang`, `id_obat`, `id_resep`, `id_pasien`, `id_konsultasi`) VALUES
(7, '2021-06-29', '09:20:37', 'OBT-002', 'RSP-001', 'PSN-001', 'KST-001'),
(8, '2021-06-29', '09:20:37', 'OBT-002', 'RSP-002', 'PSN-001', 'KST-001'),
(9, '2021-06-29', '09:20:37', 'OBT-002', 'RSP-001', 'PSN-001', 'KST-001'),
(10, '2021-06-29', '09:20:37', 'OBT-002', 'RSP-002', 'PSN-001', 'KST-001'),
(11, '2021-07-07', '17:31:55', 'OBT-002', 'RSP-003', 'PSN-003', 'KST-002'),
(12, '2021-07-07', '17:31:55', 'OBT-001', 'RSP-001', 'PSN-003', 'KST-002');

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
  ADD KEY `pembayaran_id_admin_foreign` (`id_admin`),
  ADD KEY `pembayaran_id_konsultasi_foreign` (`id_konsultasi`);

--
-- Indeks untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`no_record`),
  ADD KEY `rekam_medis_id_dokter_foreign` (`id_dokter`),
  ADD KEY `rekam_medis_id_pasien_foreign` (`id_pasien`),
  ADD KEY `rekam_medis_id_konsultasi_foreign` (`id_konsultasi`);

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
  ADD KEY `resep_obat_id_pasien_foreign` (`id_pasien`),
  ADD KEY `resep_obat_id_konsultasi_foreign` (`id_konsultasi`);

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
  MODIFY `id_resep_obat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  ADD CONSTRAINT `pembayaran_id_admin_foreign` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_id_konsultasi_foreign` FOREIGN KEY (`id_konsultasi`) REFERENCES `konsultasi` (`id_konsultasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `rekam_medis_id_dokter_foreign` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekam_medis_id_konsultasi_foreign` FOREIGN KEY (`id_konsultasi`) REFERENCES `konsultasi` (`id_konsultasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekam_medis_id_pasien_foreign` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD CONSTRAINT `resep_obat_id_konsultasi_foreign` FOREIGN KEY (`id_konsultasi`) REFERENCES `konsultasi` (`id_konsultasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resep_obat_id_obat_foreign` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resep_obat_id_pasien_foreign` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resep_obat_id_resep_foreign` FOREIGN KEY (`id_resep`) REFERENCES `resep` (`id_resep`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
