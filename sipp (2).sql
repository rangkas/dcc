-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2022 pada 10.28
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sp_dosen`
--

CREATE TABLE `sp_dosen` (
  `id_dosen` int(10) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sp_dosen`
--

INSERT INTO `sp_dosen` (`id_dosen`, `nidn`, `nama`) VALUES
(1, '123', 'Rangkas'),
(2, '321', 'Andres'),
(3, '231', 'Anwar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sp_judul_ta`
--

CREATE TABLE `sp_judul_ta` (
  `id_judul_ta` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(30) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `judul1` varchar(200) NOT NULL,
  `judul2` varchar(200) NOT NULL,
  `dosen_pembimbing` int(10) NOT NULL,
  `acc_judul` varchar(50) NOT NULL,
  `file_pengajuan` varchar(50) NOT NULL,
  `transkrip` varchar(50) NOT NULL,
  `judul_disetujui` int(10) NOT NULL,
  `alasan` varchar(200) NOT NULL,
  `batas_waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sp_judul_ta`
--

INSERT INTO `sp_judul_ta` (`id_judul_ta`, `nama`, `npm`, `prodi`, `judul1`, `judul2`, `dosen_pembimbing`, `acc_judul`, `file_pengajuan`, `transkrip`, `judul_disetujui`, `alasan`, `batas_waktu`) VALUES
(1, 'Andres Hidayat', '1617051081', 'Manajemen Informatika', 'Sistem Informasi ', '2121212121212', 1, '', '', '', 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sp_pkl`
--

CREATE TABLE `sp_pkl` (
  `id_pkl` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `prodi` varchar(40) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `nama_instansi` varchar(50) NOT NULL,
  `alamat_instansi` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `lama_bekerja` varchar(30) NOT NULL,
  `no_instansi` varchar(15) NOT NULL,
  `persyaratan` varchar(50) NOT NULL,
  `transkrip` varchar(50) NOT NULL,
  `sertifikat` varchar(50) NOT NULL,
  `frs` varchar(50) NOT NULL,
  `pembayaran_pkl` varchar(50) NOT NULL,
  `surat_bekerja` varchar(50) NOT NULL,
  `slip_gaji` varchar(50) NOT NULL,
  `kesanggupan` varchar(2) NOT NULL,
  `disetujui` varchar(2) NOT NULL,
  `alasan` text NOT NULL,
  `dosen_pembimbing` varchar(50) NOT NULL,
  `nilai_dosen_pembimbing` float NOT NULL,
  `nilai_pembimbing_instansi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sp_pkl`
--

INSERT INTO `sp_pkl` (`id_pkl`, `nama`, `npm`, `prodi`, `no_hp`, `nama_instansi`, `alamat_instansi`, `jabatan`, `bidang`, `lama_bekerja`, `no_instansi`, `persyaratan`, `transkrip`, `sertifikat`, `frs`, `pembayaran_pkl`, `surat_bekerja`, `slip_gaji`, `kesanggupan`, `disetujui`, `alasan`, `dosen_pembimbing`, `nilai_dosen_pembimbing`, `nilai_pembimbing_instansi`) VALUES
(1, 'mahasiswa', 'mahasiswa', 'Manajemen Informatika', '3', '1', '0000000000', '3@gmail', '4', '5', '6', 'data.pdf', 'data.pdf', 'data.pdf', 'data.pdf', 'data.pdf', 'data.pdf', 'data.pdf', '1', '2', 'Berjuang Terus Pantang Mundur', '0', 0, 0),
(4, 'rangkas212', 'rangkas', 'Manajemen Informatika', '3232', '878', '87811111111111', '', '', '', '7878', 'data_3.pdf', 'data_3.pdf', 'data_3.pdf', 'data_3.pdf', 'data_3.pdf', 'data_3.pdf', 'data_3.pdf', '1', '1', '0', ' Rangkas', 3, 4),
(5, 'rangkas', 'rangkas', 'Manajemen Informatika', '31212', '1212', '212', '212', '212', '212', '212', 'data_4.pdf', 'data_4.pdf', 'data_4.pdf', 'data_4.pdf', 'data_4.pdf', 'data_4.pdf', 'data_4.pdf', '1', '2', 'Coba cari tempat lain, tempat pkl kurang sesuai dengan yang di harapkan', '0', 0, 0),
(6, 'mahasiswa', 'mahasiswa', 'Manajemen Informatika', '21212', 'Pringsewu', 'Pringsewu2', '', '', '', '2', 'ALUR SISTEM PROGRAM.docx', 'ALUR SISTEM PROGRAM.docx', 'ALUR SISTEM PROGRAM.docx', 'ALUR SISTEM PROGRAM.docx', 'ALUR SISTEM PROGRAM.docx', 'ALUR SISTEM PROGRAM.docx', 'ALUR SISTEM PROGRAM.docx', '1', '1', '', ' Anwar', 90, 80);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sp_toefl`
--

CREATE TABLE `sp_toefl` (
  `id_toefl` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `nilai_prasyarat` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `ijazah` varchar(50) NOT NULL,
  `skhu` varchar(50) NOT NULL,
  `spp` varchar(50) NOT NULL,
  `nilai_listening` int(10) NOT NULL,
  `nilai_struktur` int(10) NOT NULL,
  `nilai_reading` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sp_toefl`
--

INSERT INTO `sp_toefl` (`id_toefl`, `nama`, `npm`, `prodi`, `semester`, `nilai_prasyarat`, `email`, `no_hp`, `foto`, `ijazah`, `skhu`, `spp`, `nilai_listening`, `nilai_struktur`, `nilai_reading`) VALUES
(2, 'mahasiswa', 'mahasiswa', 'Manajemen Informatika', '5', 'A', 'admin@gmail.com', '676', 'logo1_2.png', 'logo1_1.png', 'logo1.png', 'logo1_1.png', 450, 100, 100),
(3, 'mahasiswa', 'mahasiswa', 'Manajemen Informatika', '3', 'A', 'ericknovpriyanto@gmail.com', 'asasas', 'nazril.jpg', 'nazril.jpg', 'nazril.jpg', 'nazril.jpg', 450, 212, 333),
(4, 'rangkas', 'rangkas', 'Manajemen Informatika', '3', 'A', 'rangkas.karangrejo@gmail.coom', '3232', 'logo1_4.png', 'logo1_3.png', 'logo1_1.png', 'logo1_3.png', 666, 666, 666);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sp_ukd`
--

CREATE TABLE `sp_ukd` (
  `id_ukd` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `skema` varchar(30) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `nilai_prasyarat` varchar(10) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `ijazah` varchar(50) NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `kk` varchar(50) NOT NULL,
  `spp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sp_ukd`
--

INSERT INTO `sp_ukd` (`id_ukd`, `nama`, `npm`, `prodi`, `skema`, `semester`, `nilai_prasyarat`, `tempat_lahir`, `tanggal_lahir`, `email`, `no_hp`, `foto`, `ijazah`, `ktp`, `kk`, `spp`) VALUES
(1, 'mahasiswa', 'mahasiswa', 'Manajemen Informatika', 'JA', '5', 'A', 'Karangrejo', '2022-08-06', 'rangkas.karangrejo@gmail.com', '081232489450', 'logo1.png', 'CamScanner 07-27-2022 18.50_1.jpg', 'WhatsApp Image 2022-07-25 at 05.40.24.jpeg', 'WhatsApp Image 2022-07-25 at 05.38.47.jpeg', 'WhatsApp Image 2022-07-25 at 05.14.28 (2).jpeg'),
(3, 'rangkas', 'rangkas', 'Manajemen Informatika', 'JA', '3', 'A', '434', '2022-08-07', '434@gmail.com', '3232', 'logo1_3.png', 'logo1_2.png', 'logo1_1.png', 'logo1_1.png', 'logo1_2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sp_user`
--

CREATE TABLE `sp_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(30) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sp_user`
--

INSERT INTO `sp_user` (`id_user`, `username`, `password`, `nama`, `npm`, `prodi`, `status`) VALUES
(1, '1617051081', '21232f297a57a5a743894a0e4a801fc3', 'Andres Hidayat', '1617051081', 'Manajemen Informatika', 'admin'),
(2, 'mahasiswa', '5787be38ee03a9ae5360f54d9026465f', 'mahasiswa', 'mahasiswa', 'mahasiswa', 'mahasiswa'),
(3, 'prodi', '32b404761d910d277789cd91076d1459', 'prodi', 'prodi', 'prodi', 'prodi'),
(4, 'rangkas', 'd48c270d530f482dbaa445b60d1c0eef', 'rangkas', 'rangkas', 'rangkas', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sp_dosen`
--
ALTER TABLE `sp_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `sp_judul_ta`
--
ALTER TABLE `sp_judul_ta`
  ADD PRIMARY KEY (`id_judul_ta`);

--
-- Indeks untuk tabel `sp_pkl`
--
ALTER TABLE `sp_pkl`
  ADD PRIMARY KEY (`id_pkl`);

--
-- Indeks untuk tabel `sp_toefl`
--
ALTER TABLE `sp_toefl`
  ADD PRIMARY KEY (`id_toefl`);

--
-- Indeks untuk tabel `sp_ukd`
--
ALTER TABLE `sp_ukd`
  ADD PRIMARY KEY (`id_ukd`);

--
-- Indeks untuk tabel `sp_user`
--
ALTER TABLE `sp_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sp_dosen`
--
ALTER TABLE `sp_dosen`
  MODIFY `id_dosen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sp_judul_ta`
--
ALTER TABLE `sp_judul_ta`
  MODIFY `id_judul_ta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sp_pkl`
--
ALTER TABLE `sp_pkl`
  MODIFY `id_pkl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sp_toefl`
--
ALTER TABLE `sp_toefl`
  MODIFY `id_toefl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sp_ukd`
--
ALTER TABLE `sp_ukd`
  MODIFY `id_ukd` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sp_user`
--
ALTER TABLE `sp_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
