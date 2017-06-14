-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Jun 2017 pada 14.16
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kpa_dds`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anggaran`
--

CREATE TABLE `tbl_anggaran` (
  `id_project` int(12) NOT NULL,
  `bulan` int(2) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `triwulan` int(1) NOT NULL,
  `tahun` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_anggaran`
--

INSERT INTO `tbl_anggaran` (`id_project`, `bulan`, `jumlah`, `triwulan`, `tahun`) VALUES
(1, 4, 9000000, 2, 2017),
(1, 5, 5000000, 2, 2017),
(1, 6, 5000000, 2, 2017),
(1, 7, 5000000, 3, 2017),
(1, 8, 5000000, 3, 2017),
(1, 9, 5000000, 3, 2017),
(1, 10, 5000000, 4, 2017),
(1, 11, 5000000, 4, 2017),
(1, 12, 5000000, 4, 2017),
(2, 1, 5, 1, 2017),
(2, 2, 10, 1, 2017),
(2, 3, 15, 1, 2017),
(2, 4, 20, 2, 2017),
(2, 5, 25, 2, 2017),
(2, 6, 30, 2, 2017),
(2, 7, 35, 3, 2017),
(2, 8, 40, 3, 2017),
(2, 9, 45, 3, 2017),
(2, 10, 50, 4, 2017),
(2, 11, 55, 4, 2017),
(2, 12, 60, 4, 2017),
(3, 1, 22, 1, 2017),
(3, 2, 44, 1, 2017),
(3, 3, 66, 1, 2017),
(3, 4, 88, 2, 2017),
(3, 5, 110, 2, 2017),
(3, 6, 132, 2, 2017),
(3, 7, 154, 3, 2017),
(3, 8, 176, 3, 2017),
(3, 9, 198, 3, 2017),
(3, 10, 220, 4, 2017),
(3, 11, 242, 4, 2017),
(3, 12, 264, 4, 2017),
(4, 1, 244, 1, 2017),
(4, 2, 432, 1, 2017),
(4, 3, 643, 1, 2017),
(4, 4, 841, 2, 2017),
(4, 5, 104, 2, 2017),
(4, 6, 332, 2, 2017),
(4, 7, 534, 3, 2017),
(4, 8, 736, 3, 2017),
(4, 9, 948, 3, 2017),
(4, 10, 220, 4, 2017),
(4, 11, 242, 4, 2017),
(4, 12, 264, 4, 2017),
(2, 7, 0, 3, 2017),
(1, 1, 1000000, 1, 2017),
(1, 2, 500000, 1, 2017),
(1, 4, 5000, 2, 2016),
(1, 5, 5000, 2, 2016),
(1, 6, 70000, 2, 2016),
(1, 7, 1000, 3, 2016),
(1, 8, 7000, 3, 2016),
(1, 9, 900, 3, 2016),
(1, 10, 10, 4, 2016),
(1, 11, 900, 4, 2016),
(1, 12, 400, 4, 2016),
(2, 1, 22, 10, 2016),
(2, 2, 11, 20, 2016),
(2, 3, 10, 30, 2016),
(2, 4, 22, 14, 2016),
(2, 5, 22, 2, 2016),
(2, 6, 31, 2, 2016),
(2, 7, 30, 3, 2016),
(2, 8, 30, 3, 2016),
(2, 9, 41, 3, 2016),
(2, 10, 5, 4, 2016),
(2, 11, 5, 4, 2016),
(2, 12, 6, 4, 2016),
(3, 1, 2, 1, 2016),
(3, 2, 4, 1, 2016),
(3, 3, 6, 1, 2016),
(3, 4, 8, 2, 2016),
(3, 5, 11, 2, 2016),
(3, 6, 32, 2, 2016),
(3, 7, 54, 3, 2016),
(3, 8, 76, 3, 2016),
(3, 9, 98, 3, 2016),
(3, 10, 20, 4, 2016),
(3, 11, 42, 4, 2016),
(3, 12, 64, 4, 2016),
(4, 1, 44, 1, 2016),
(4, 2, 32, 1, 2016),
(4, 3, 43, 1, 2016),
(4, 4, 41, 2, 2016),
(4, 5, 4, 2, 2016),
(4, 6, 32, 2, 2016),
(4, 7, 534, 3, 2016),
(4, 8, 36, 3, 2016),
(4, 9, 98, 3, 2016),
(4, 10, 20, 4, 2016),
(4, 11, 24, 4, 2016),
(4, 12, 26, 4, 2016),
(2, 7, 100, 3, 2016),
(1, 1, 10000, 1, 2016),
(1, 2, 500000, 1, 2016),
(1, 4, 10, 2, 2018),
(1, 5, 5000, 2, 2018),
(1, 6, 5400, 2, 2018),
(1, 7, 1200000, 3, 2018),
(1, 8, 13000, 3, 2018),
(1, 9, 100000, 3, 2018),
(1, 10, 1000, 4, 2018),
(1, 11, 1200, 4, 2018),
(1, 12, 200, 4, 2018),
(2, 1, 500, 1, 2018),
(2, 2, 5, 1, 2018),
(2, 3, 51, 1, 2018),
(2, 4, 23, 2, 2018),
(2, 5, 22, 2, 2018),
(2, 6, 31, 2, 2018),
(2, 7, 35, 3, 2018),
(2, 8, 20, 3, 2018),
(2, 9, 5, 3, 2018),
(2, 10, 40, 4, 2018),
(2, 11, 45, 4, 2018),
(2, 12, 6, 4, 2018),
(3, 1, 220, 1, 2018),
(3, 2, 449, 1, 2018),
(3, 3, 666, 1, 2018),
(3, 4, 888, 2, 2018),
(3, 5, 110, 2, 2018),
(3, 6, 1328, 2, 2018),
(3, 7, 1548, 3, 2018),
(3, 8, 1768, 3, 2018),
(3, 9, 1983, 3, 2018),
(3, 10, 2204, 4, 2018),
(3, 11, 2426, 4, 2018),
(3, 12, 2646, 4, 2018),
(4, 1, 2440, 1, 2018),
(4, 2, 4328, 1, 2018),
(4, 3, 6436, 1, 2018),
(4, 4, 8416, 2, 2018),
(4, 5, 1042, 2, 2018),
(4, 6, 3323, 2, 2018),
(4, 7, 5345, 3, 2018),
(4, 8, 7362, 3, 2018),
(4, 9, 9482, 3, 2018),
(4, 10, 2205, 4, 2018),
(4, 11, 2425, 4, 2018),
(4, 12, 2643, 4, 2018),
(2, 7, 0, 355, 2018),
(1, 1, 10030, 1, 2018),
(1, 2, 300, 1, 2018);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_group`
--

CREATE TABLE `tbl_group` (
  `id_group` int(20) NOT NULL,
  `nama_group` varchar(20) NOT NULL,
  `nama_bidang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_group`
--

INSERT INTO `tbl_group` (`id_group`, `nama_group`, `nama_bidang`) VALUES
(1, 'MXP', 'Digital Valley'),
(2, 'SPA', 'Digital Valley'),
(3, 'MSE', 'Digital Valley'),
(4, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_m_user`
--

CREATE TABLE `tbl_m_user` (
  `nik` int(11) NOT NULL,
  `id_group` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_m_user`
--

INSERT INTO `tbl_m_user` (`nik`, `id_group`, `username`, `password`, `level`) VALUES
(1, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(3, 1, 'karyawan', '9e014682c94e0f2cc834bf7348bda428', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penyerapan`
--

CREATE TABLE `tbl_penyerapan` (
  `id_penyerapan` int(20) NOT NULL,
  `nama_kegiatan` varchar(30) NOT NULL,
  `id_project` int(20) NOT NULL,
  `triwulan` int(2) NOT NULL,
  `tahun` int(4) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `jumlah` bigint(3) NOT NULL,
  `submited` varchar(20) NOT NULL,
  `tanggal_submit` date NOT NULL,
  `jenis_kegiatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penyerapan`
--

INSERT INTO `tbl_penyerapan` (`id_penyerapan`, `nama_kegiatan`, `id_project`, `triwulan`, `tahun`, `tanggal`, `status`, `jumlah`, `submited`, `tanggal_submit`, `jenis_kegiatan`) VALUES
(14, 'anika', 1, 1, 2017, '2017-02-15', 'anika', 9000, 'Rizal', '2017-03-10', 'anika'),
(15, 'dfgkj D', 1, 4, 2017, '2017-04-12', 'ASF', 833, 'karyawan', '2017-03-09', 'QLKJSDF'),
(16, 'sdfjlkj', 3, 3, 2018, '2017-03-22', 'skfj', 3290234, 'karyawan', '2017-03-09', 'lkjdf'),
(17, 'sdkfjh', 3, 4, 2018, '2017-02-02', 'dfkjh', 9999786, 'Rizal', '2017-03-10', 'jladfjlk'),
(18, 'laksdfj', 3, 2, 2017, '2017-04-12', 'sdflkj', 900, 'karyawan', '2017-03-10', 'laksdfjl'),
(19, 'KPA', 3, 3, 2017, '2017-03-16', 'Belum Selesai', 909090, 'karyawan', '2017-03-10', 'lkasdfj'),
(20, 'hoho', 1, 1, 2017, '2017-03-16', 'asdvj', 9000, 'karyawan', '2017-06-14', 'lsdfle'),
(21, 'kkkkk', 1, 2, 2017, '2017-04-12', 'sdasd', 1212, 'karyawan', '2017-04-13', 'kkkkk'),
(22, 'fasdf', 1, 2, 2017, '2017-06-08', 'Selesai', 10000, 'karyawan', '2017-06-14', 'awera');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_project`
--

CREATE TABLE `tbl_project` (
  `id_project` int(11) NOT NULL,
  `nama_project` varchar(30) NOT NULL,
  `jenis_anggaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_project`
--

INSERT INTO `tbl_project` (`id_project`, `nama_project`, `jenis_anggaran`) VALUES
(1, 'KPA', 'Inkubasi'),
(2, 'Uwarnet', 'penyerapan'),
(3, 'Upoint', 'Inkubasi'),
(4, 'tstamp', 'Inkubasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggaran`
--
ALTER TABLE `tbl_anggaran`
  ADD KEY `id_project` (`id_project`);

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `tbl_m_user`
--
ALTER TABLE `tbl_m_user`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `id_group` (`id_group`);

--
-- Indexes for table `tbl_penyerapan`
--
ALTER TABLE `tbl_penyerapan`
  ADD PRIMARY KEY (`id_penyerapan`),
  ADD KEY `id_project` (`id_project`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`id_project`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `id_group` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_penyerapan`
--
ALTER TABLE `tbl_penyerapan`
  MODIFY `id_penyerapan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_anggaran`
--
ALTER TABLE `tbl_anggaran`
  ADD CONSTRAINT `tbl_anggaran_ibfk_1` FOREIGN KEY (`id_project`) REFERENCES `tbl_project` (`id_project`);

--
-- Ketidakleluasaan untuk tabel `tbl_m_user`
--
ALTER TABLE `tbl_m_user`
  ADD CONSTRAINT `tbl_m_user_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `tbl_group` (`id_group`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
