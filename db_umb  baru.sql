-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 12:17 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `works_umb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_batch`
--

CREATE TABLE `tbl_batch` (
  `id_batch` int(11) NOT NULL,
  `nama_batch` varchar(30) NOT NULL,
  `waktu_batch` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `status` enum('1','0','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_batch`
--

INSERT INTO `tbl_batch` (`id_batch`, `nama_batch`, `waktu_batch`, `tgl`, `status`) VALUES
(1, 'Batch 1', '08.00 - 10.00', '2018-02-01', '1'),
(2, 'Batch 2', '10.00 - 12.00', '2018-02-04', '1'),
(3, 'Batch 3', '13.00 - 15.00', '2018-01-11', '1'),
(4, 'Batch 4 s', '15.00 - 17.00', '2018-08-01', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hak_akses`
--

CREATE TABLE `tbl_hak_akses` (
  `id` int(11) NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hak_akses`
--

INSERT INTO `tbl_hak_akses` (`id`, `id_user_level`, `id_menu`) VALUES
(15, 1, 1),
(19, 1, 3),
(21, 2, 1),
(24, 1, 9),
(28, 2, 3),
(29, 2, 2),
(30, 1, 2),
(31, 3, 14),
(32, 3, 20),
(34, 3, 11),
(35, 1, 11),
(36, 1, 10),
(37, 1, 12),
(38, 1, 13),
(39, 1, 14),
(40, 1, 16),
(41, 1, 17),
(42, 1, 20),
(43, 1, 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `id_home` int(11) NOT NULL,
  `total_peserta` int(11) NOT NULL,
  `konfir` int(11) NOT NULL,
  `blm_konfir` int(11) NOT NULL,
  `total_soal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`id_home`, `total_peserta`, `konfir`, `blm_konfir`, `total_soal`) VALUES
(1, 10, 1, 3, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `kode_jurusan` varchar(30) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL,
  `jumlah_peserta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`, `jumlah_peserta`) VALUES
(1, '020', 'Teknik Informatika', 50),
(4, '030', 'Sistem Komputer', 10),
(5, '040', 'Sistem Informasi', 30),
(6, '001', 'Manajemen Informatika', 90),
(7, '032', 'Komputerisasi Akuntansi', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laporan`
--

CREATE TABLE `tbl_laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `kode_pendaftaran` varchar(10) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `id_panitia` int(11) NOT NULL,
  `id_batch` int(11) NOT NULL,
  `tgl_ujian` date NOT NULL,
  `durasi` varchar(10) NOT NULL,
  `id_nilai` int(11) NOT NULL,
  `status` enum('1','0','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_laporan`
--

INSERT INTO `tbl_laporan` (`id_laporan`, `id_jurusan`, `kode_pendaftaran`, `id_peserta`, `id_panitia`, `id_batch`, `tgl_ujian`, `durasi`, `id_nilai`, `status`) VALUES
(1, 0, '101', 11, 1, 1, '2018-01-11', '90', 90, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama_mahasiswa` varchar(30) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `no_pendaftaran` varchar(15) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id_mahasiswa`, `username`, `password`, `nama_mahasiswa`, `asal_sekolah`, `no_pendaftaran`, `gambar`) VALUES
(6, 'srisri12', 'SDFEI', 'Sri Kurniyan Sari', 'MA Samata Gowa', '434', ''),
(7, 'nurjasila31', 'ila23', 'Nurjasila', 'SMA MAros', '123', ''),
(8, 'cit1241', '2729199', 'Cita Puspita', 'SMA 2 Bontobudu', '2352', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matauji`
--

CREATE TABLE `tbl_matauji` (
  `id_matauji` int(11) NOT NULL,
  `nama_matauji` varchar(35) NOT NULL,
  `aktif` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_matauji`
--

INSERT INTO `tbl_matauji` (`id_matauji`, `nama_matauji`, `aktif`) VALUES
(1, 'Verbal', '1'),
(2, 'Numerik', '1'),
(3, 'Logika', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(30) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `is_main_menu` int(11) NOT NULL,
  `is_aktif` enum('y','n') NOT NULL COMMENT 'y=yes,n=no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `title`, `url`, `icon`, `is_main_menu`, `is_aktif`) VALUES
(1, 'Kelola Menu', 'kelolamenu', 'fa fa-server', 33, 'y'),
(2, 'Admin', 'user', 'fa fa-user-o', 6, 'y'),
(3, 'Level Pengguna', 'userlevel', 'fa fa-users', 33, 'y'),
(4, 'Welcome', 'Welcome', 'fa fa-home', 0, 'y'),
(5, 'Halaman Utama User', 'view/production/index.php', 'fa fa-desktop', 0, 'y'),
(6, 'User', 'userji', 'fa fa-desktop', 0, 'y'),
(9, 'Contoh Form', 'welcome/form', 'fa fa-id-card', 33, 'y'),
(10, 'Panitia', 'Panitia', 'fa fa-user', 6, 'y'),
(11, 'Peserta', 'Mahasiswa', 'fa fa-users', 0, 'n'),
(13, 'Mata Ujian', 'Matauji', 'fa fa-object-ungroup', 23, 'y'),
(14, 'Soal', 'Soal', 'fa fa-question-circle', 23, 'y'),
(16, 'Setting Soal', 'Settingsoal', 'fa fa-code', 23, 'y'),
(23, 'Data Ujian', 'Ujian', 'fa fa-database', 0, 'y'),
(25, 'Peserta', 'Peserta', 'fa fa-user', 6, 'y'),
(26, 'Batch', 'Batch', 'fa fa-calendar', 23, 'y'),
(27, 'Jurusan', 'Jurusan', 'fa fa-sitemap', 23, 'y'),
(29, 'Tampilan Soal', 'Tampilujian', 'fa fa-desktop', 0, 'n'),
(32, 'Laporan Hasil Ujian', 'Laporan', 'fa fa-paperclip', 0, 'y'),
(33, 'Tambahan', 'tambahan', 'fa fa-cogs', 0, 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_panitia`
--

CREATE TABLE `tbl_panitia` (
  `id_panitia` int(11) NOT NULL,
  `id_batch` int(11) NOT NULL,
  `nama_panitia` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_panitia`
--

INSERT INTO `tbl_panitia` (`id_panitia`, `id_batch`, `nama_panitia`, `username`, `password`, `status`) VALUES
(3, 3, 'Zanifa Arisha', 'Zanifa23', '123456', '1'),
(4, 1, 'Awahyuni', 'Yuyhe31', '1234123', '0'),
(5, 3, 'wiwik', 'wiwik', 'wiwik', '1'),
(6, 3, 'wiwik', 'jedj', 'idjc', '1'),
(7, 2, 'Akbar', 'akbar', 'akbar', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peserta`
--

CREATE TABLE `tbl_peserta` (
  `id_peserta` int(11) NOT NULL,
  `kode_pendaftaran` varchar(10) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_panitia` int(11) NOT NULL,
  `id_batch` int(11) NOT NULL,
  `jenkel` enum('P','L') NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_peserta`
--

INSERT INTO `tbl_peserta` (`id_peserta`, `kode_pendaftaran`, `nama_peserta`, `id_jurusan`, `id_panitia`, `id_batch`, `jenkel`, `nama_ayah`, `nama_ibu`, `tgl_lahir`, `alamat`, `no_tlp`, `email`, `username`, `password`, `status`) VALUES
(1, '102', 'WIwik', 7, 1, 4, 'P', 'dkn', 'dkhfi', '1997-01-31', 'Jl. Abdesir', '082395149760', 'wiwik@gmail.com', 'peserta1', '1ee0cc35596be8e4219c7241ece2195e', '1'),
(2, '22', 'JIOJ', 1, 2, 3, 'P', 'MDN', 'IJFJ', '1998-01-21', 'KDJFOJ', '082383888888', 'Q@gmail.com', 'jioj12', '123456', '0'),
(3, '101', 'wiwik', 1, 1, 1, 'P', 'Rata', 'Mina', '1997-01-31', 'Abdesir', '082395149760', 'wiwik@gmail.com', 'wiwikji', '123456', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id_setting` int(11) NOT NULL,
  `nama_setting` varchar(50) NOT NULL,
  `value` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id_setting`, `nama_setting`, `value`) VALUES
(1, 'Tampil Menu', 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settingsoal`
--

CREATE TABLE `tbl_settingsoal` (
  `id_set` int(11) NOT NULL,
  `jumlah_soal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settingsoal`
--

INSERT INTO `tbl_settingsoal` (`id_set`, `jumlah_soal`) VALUES
(1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id_soal` int(11) NOT NULL,
  `id_matauji` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `pilihan_a` varchar(100) NOT NULL,
  `pilihan_b` varchar(100) NOT NULL,
  `pilihan_c` varchar(100) NOT NULL,
  `pilihan_d` varchar(100) NOT NULL,
  `pilihan_e` varchar(100) NOT NULL,
  `jawaban` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `id_matauji`, `pertanyaan`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `pilihan_e`, `jawaban`) VALUES
(5, 1, 'Mencitrakan', 'Memperbaiki', 'Mempersolek', 'Membangun nama baik', 'Menggambarkan', 'Menceritakan', 'D'),
(6, 1, 'Higienis', 'Bersih tanpa kuman', 'Berdasarkan standar kesehatan', 'Menurut Kedokteran', 'Standar kebersihan tinggi', 'Tidak kotor', 'B'),
(7, 1, 'Laik', 'Bagus sekali', 'Sepadan', 'Wajib', 'Patut', 'Harus', 'D'),
(8, 1, 'Repatrisi', 'Penangkapan ulang', 'Pemulihan nama baik', 'Pendalaman kembali', 'Pemulangan kembali', 'Perbaiki kembali', 'D'),
(9, 1, 'Kedap', 'Tidak retak', 'Celah', 'Lolos', 'Rapat', 'Tembus', 'D'),
(10, 1, 'Monogami', 'Perpisahan', 'Pemisahan', 'Kawin dengan satu jenis', 'Kawin silang', 'Kawin lebih dari satu', 'E'),
(11, 1, 'Tangguh', 'Kuat', 'Luwes', 'Fleksibel', 'Rapuh', 'Hebat', 'D'),
(12, 1, 'Konvergen', 'Bercabang', 'Memusat', 'Pusat', 'Arah', 'Cekung', 'B'),
(13, 1, 'Naratif', 'Bersifat Melukiskan', 'Bersifat Menggambarkan', 'Bersifat Mengarahkan', 'Bersifat Menceritakan', 'Bersifat Meng-imajinasikan', 'C'),
(14, 1, 'Sekuler', 'Agamis', 'Hedonis', 'Pemuja Dunia', 'Fana', 'Modern', 'A'),
(15, 3, 'Berapakah angka lanjutan dari deret angka berikut : 11 22 24 37....', '50', '51', '49', '48', '47', 'B'),
(16, 3, 'Berapakah angka lanjutan dari deret angka berikut : 80 70 61 53...', '45', '36', '66', '56', '46', 'E'),
(17, 3, 'Berapakah angka lanjutan dari deret bilangan ini 9 50 14 49 19 47 24 44...', '40 29', '29 41', '25 40', '29 39', '29 40', 'E'),
(18, 3, 'Berapakah angka lanjutan dari deret angka berikut : 7 8 7 12 7 16 7 20 Selanjutnya ...', '7 25', '7 20', '7 19', '6 24', '7 24', 'E'),
(19, 3, 'Berapakah angka lanjutan dari deret angka berikut : 39 2 38 9 36 17 33...', '26 29', '25 29', '24 30', '26 30', '27 29', 'A'),
(20, 3, 'Huruf lanjutan dari urutan ini adlah G I K M', 'R', 'Q', 'N', 'O', 'P', 'D'),
(21, 3, 'Huruf lanjutan dari urutan U S P L', 'D', 'E', 'F', 'G', 'H', 'D'),
(22, 3, 'Huruf lanjutan dari C Q E Q G Q I', 'Q K', 'Q J', 'Q I', 'Q M', 'Q N', 'A'),
(23, 3, 'Huruf lanjutan dari urutan ini K O S', 'V', 'T', 'W', 'X', 'Z', 'C'),
(24, 3, 'Huruf lanjutan dari urutan ini A I Q', 'U', 'T', 'X', 'Z', 'Y', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ujian`
--

CREATE TABLE `tbl_ujian` (
  `id_ujian` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `id_panitia` int(11) NOT NULL,
  `id_batch` int(11) NOT NULL,
  `jumlah_salah` int(11) NOT NULL,
  `jumlah_benar` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ujian`
--

INSERT INTO `tbl_ujian` (`id_ujian`, `id_peserta`, `id_panitia`, `id_batch`, `jumlah_salah`, `jumlah_benar`, `nilai`, `status`) VALUES
(1, 6, 0, 0, 0, 0, 50, '1'),
(2, 7, 0, 0, 0, 0, 80, '1'),
(3, 3, 0, 0, 0, 0, 74, ''),
(4, 8, 0, 0, 0, 0, 87, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_users` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `images` text NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `is_aktif` enum('y','n') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_users`, `full_name`, `email`, `password`, `images`, `id_user_level`, `is_aktif`) VALUES
(1, 'Nuris Akbar M.Kom', 'nuris.akbar@gmail.com', '$2y$04$Wbyfv4xwihb..POfhxY5Y.jHOJqEFIG3dLfBYwAmnOACpH0EWCCdq', 'atomix_user31.png', 1, 'y'),
(3, 'Muhammad hafidz Muzaki', 'hafid@gmail.com', '$2y$04$Wbyfv4xwihb..POfhxY5Y.jHOJqEFIG3dLfBYwAmnOACpH0EWCCdq', '7.png', 2, 'y'),
(7, 'wiwik', 'wiwikramna@gmail.com', '$2y$04$L4C0LJ9ZcFmhsPmjtJVkxOhL5XeGr7oMhxWTQftydbbQpmQZmxITO', 'download_(2).jpg', 1, 'y'),
(8, 'Mahasiswa', 'mahasiswa@gmail.com', '$2y$04$Tw6PnHRroHp1QHYOKgQnT.QFYF/gGKH17OrohlodWNx1nAPTCGCh6', '', 3, 'n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_level`
--

CREATE TABLE `tbl_user_level` (
  `id_user_level` int(11) NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_level`
--

INSERT INTO `tbl_user_level` (`id_user_level`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'Panitia'),
(3, 'Peserta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_batch`
--
ALTER TABLE `tbl_batch`
  ADD PRIMARY KEY (`id_batch`);

--
-- Indexes for table `tbl_hak_akses`
--
ALTER TABLE `tbl_hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`id_home`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tbl_matauji`
--
ALTER TABLE `tbl_matauji`
  ADD PRIMARY KEY (`id_matauji`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tbl_panitia`
--
ALTER TABLE `tbl_panitia`
  ADD PRIMARY KEY (`id_panitia`);

--
-- Indexes for table `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `tbl_settingsoal`
--
ALTER TABLE `tbl_settingsoal`
  ADD PRIMARY KEY (`id_set`);

--
-- Indexes for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tbl_ujian`
--
ALTER TABLE `tbl_ujian`
  ADD PRIMARY KEY (`id_ujian`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  ADD PRIMARY KEY (`id_user_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_batch`
--
ALTER TABLE `tbl_batch`
  MODIFY `id_batch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_hak_akses`
--
ALTER TABLE `tbl_hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `id_home` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_matauji`
--
ALTER TABLE `tbl_matauji`
  MODIFY `id_matauji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_panitia`
--
ALTER TABLE `tbl_panitia`
  MODIFY `id_panitia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_settingsoal`
--
ALTER TABLE `tbl_settingsoal`
  MODIFY `id_set` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_ujian`
--
ALTER TABLE `tbl_ujian`
  MODIFY `id_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  MODIFY `id_user_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
