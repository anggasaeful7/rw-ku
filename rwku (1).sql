-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Feb 2023 pada 04.50
-- Versi server: 10.4.21-MariaDB-log
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rwku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kk`
--

CREATE TABLE `kk` (
  `id` int(11) NOT NULL,
  `nokk` varchar(11) NOT NULL,
  `kepala` varchar(50) NOT NULL,
  `nik` varchar(11) NOT NULL,
  `id_rt` varchar(11) NOT NULL,
  `id_rw` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kk`
--

INSERT INTO `kk` (`id`, `nokk`, `kepala`, `nik`, `id_rt`, `id_rw`) VALUES
(1, '320413000', 'Angga Saeful', '32041300001', '1', '1'),
(2, '320413001', 'Setyo Novanto', '32041300101', '2', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `tanggal_dibuat` varchar(50) NOT NULL,
  `tanggal_selesai` varchar(50) DEFAULT NULL,
  `nama_surat` varchar(50) NOT NULL,
  `izin_rt` varchar(11) NOT NULL,
  `izin_rw` varchar(11) NOT NULL,
  `izin_admin` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `nama`, `nik`, `tanggal_dibuat`, `tanggal_selesai`, `nama_surat`, `izin_rt`, `izin_rw`, `izin_admin`) VALUES
(7, 'Angga Saeful', '12312', 'Tanggal', NULL, 'Surat Kematian', 'ya', 'ya', 'ya'),
(8, 'Angga Saeful', '12312', 'Tanggal', NULL, 'Surat Kehidupan', 'tidak', 'ya', 'tidak'),
(10, 'Angga Saeful', '32041300001', 'ASdasd', NULL, 'Surat pindah rumah', 'tidak', 'tidak', 'ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt`
--

CREATE TABLE `rt` (
  `id` int(11) NOT NULL,
  `id_rt` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(11) NOT NULL,
  `id_rw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rt`
--

INSERT INTO `rt` (`id`, `id_rt`, `nama`, `nik`, `id_rw`) VALUES
(1, 1, 'Setyo Novanto', '32041300202', 1),
(2, 2, 'Fajar Permana', '32041300201', 1),
(3, 3, 'Rinso', '220413', 1),
(4, 3, 'Rinso', '220413', 1);

--
-- Trigger `rt`
--
DELIMITER $$
CREATE TRIGGER `menambah_hak_login_rt` BEFORE INSERT ON `rt` FOR EACH ROW begin
   insert into user(id, username,password,level) values (NULL, new.nik,new.nik, 'rt');
 end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rw`
--

CREATE TABLE `rw` (
  `id` int(11) NOT NULL,
  `id_rw` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rw`
--

INSERT INTO `rw` (`id`, `id_rw`, `nama`, `nik`) VALUES
(1, 1, 'Rinso', '220413');

--
-- Trigger `rw`
--
DELIMITER $$
CREATE TRIGGER `menambah_hak_login_rw` BEFORE INSERT ON `rw` FOR EACH ROW begin
   insert into user(id, username,password,level) values (NULL, new.nik,new.nik, 'rw');
 end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `nama_surat` varchar(255) NOT NULL,
  `izin_rt` varchar(11) NOT NULL,
  `izin_rw` varchar(11) NOT NULL,
  `izin_admin` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id`, `nama_surat`, `izin_rt`, `izin_rw`, `izin_admin`) VALUES
(1, 'Surat Kematian', 'ya', 'ya', 'ya'),
(2, 'Surat Kehidupan', 'tidak', 'ya', 'tidak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `test1`
--

CREATE TABLE `test1` (
  `id` int(11) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `test1`
--

INSERT INTO `test1` (`id`, `no_telp`, `nama`) VALUES
(1, '8768', 'Setyo Novanto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `test2`
--

CREATE TABLE `test2` (
  `no_hp` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `test2`
--

INSERT INTO `test2` (`no_hp`, `nama`) VALUES
('8768', 'Setyo Novanto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'warga', 'warga', 'warga'),
(3, 'rw', 'rw', 'rw'),
(5, '32041300202', '32041300202', 'rt'),
(6, '32041300201', '32041300201', 'rt'),
(7, '220413', '220413', 'rw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id` int(11) NOT NULL,
  `nokk` varchar(11) NOT NULL,
  `nik` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(11) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `pendidikan` varchar(11) NOT NULL,
  `pekerjaan` varchar(11) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id`, `nokk`, `nik`, `nama`, `jk`, `ttl`, `kewarganegaraan`, `status`, `pendidikan`, `pekerjaan`, `agama`, `alamat`) VALUES
(1, '320413000', '32041300001', 'Angga Saeful', 'L', 'Bandung,7-4', 'WNI', 'Belum nikah', 'S1', 'Pelajar', 'Islam', 'Bandung'),
(2, '320413000', '32041300002', 'Sudarmana', 'L', 'Bandung,7-4', 'WNA', 'Nikah', 'SMA', 'Pedagang', 'Islam', 'Jakarta'),
(3, '320413001', '32041300101', 'Setyo Novanto', 'L', 'Bandung,7-4', 'WNI', 'Belum nikah', 'S1', 'Pelajar', 'Islam', 'bandung'),
(4, '320413001', '32041300102', 'Fajar Permana', 'L', 'Bandung,7-4', 'WNA', 'Nikah', 'SMA', 'Pedagang', 'Islam', 'Jakarta'),
(10, '320413002', '32041300201', 'Usop Century', 'L', 'Bandung 9-10-22', 'WNI', 'Janda/Duda', 'S2', 'Pedagang', 'Islam', 'Jakarta'),
(15, '32', '220413', 'Rinso', 'L', 'Bandung,7-4-2002', 'WNI', 'Belum nikah', 'S1', 'Pelajar', 'Islam', 'bandung');

--
-- Trigger `warga`
--
DELIMITER $$
CREATE TRIGGER `menambah_hak_login` BEFORE INSERT ON `warga` FOR EACH ROW begin
   insert into user(id, username,password,level) values (NULL, new.nik,new.nik, 'warga');
 end
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`id`,`nokk`,`kepala`,`nik`,`id_rt`,`id_rw`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rw`
--
ALTER TABLE `rw`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `test1`
--
ALTER TABLE `test1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kk`
--
ALTER TABLE `kk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `rt`
--
ALTER TABLE `rt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `rw`
--
ALTER TABLE `rw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `test1`
--
ALTER TABLE `test1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
