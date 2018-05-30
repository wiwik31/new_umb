-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 08:06 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `new_umb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal`
--

CREATE TABLE IF NOT EXISTS `tbl_soal` (
  `id_soal` int(11) NOT NULL,
  `id_matauji` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `pilihan_a` varchar(100) NOT NULL,
  `pilihan_b` varchar(100) NOT NULL,
  `pilihan_c` varchar(100) NOT NULL,
  `pilihan_d` varchar(100) NOT NULL,
  `pilihan_e` varchar(100) NOT NULL,
  `jawaban` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `id_matauji`, `pertanyaan`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `pilihan_e`, `jawaban`) VALUES
(1, 1, 'Mencitrakan', 'Memperbaiki', 'Mempersolek', 'Membangun nama baik', 'Menggambarkan', 'Menceritakan', 'D'),
(2, 1, 'Higienis', 'Bersih tanpa kuman', 'Berdasarkan standar kesehatan', 'Menurut Kedokteran', 'Standar kebersihan tinggi', 'Tidak kotor', 'B'),
(3, 1, 'Laik', 'Bagus sekali', 'Sepadan', 'Wajib', 'Patut', 'Harus', 'D'),
(4, 1, 'Repatrisi', 'Penangkapan ulang', 'Pemulihan nama baik', 'Pendalaman kembali', 'Pemulangan kembali', 'Perbaiki kembali', 'D'),
(5, 1, 'Kedap', 'Tidak retak', 'Celah', 'Lolos', 'Rapat', 'Tembus', 'D'),
(6, 1, 'Monogami', 'Perpisahan', 'Pemisahan', 'Kawin dengan satu jenis', 'Kawin silang', 'Kawin lebih dari satu', 'E'),
(7, 1, 'Tangguh', 'Kuat', 'Luwes', 'Fleksibel', 'Rapuh', 'Hebat', 'D'),
(8, 1, 'Konvergen', 'Bercabang', 'Memusat', 'Pusat', 'Arah', 'Cekung', 'B'),
(9, 1, 'Naratif', 'Bersifat Melukiskan', 'Bersifat Menggambarkan', 'Bersifat Mengarahkan', 'Bersifat Menceritakan', 'Bersifat Meng-imajinasikan', 'C'),
(10, 1, 'Sekuler', 'Agamis', 'Hedonis', 'Pemuja Dunia', 'Fana', 'Modern', 'A'),
(11, 2, 'Berapakah angka lanjutan dari deret angka berikut : 11 22 24 37....', '50', '51', '49', '48', '47', 'B'),
(12, 2, 'Berapakah angka lanjutan dari deret angka berikut : 80 70 61 53...', '45', '36', '66', '56', '46', 'E'),
(13, 2, 'Berapakah angka lanjutan dari deret bilangan ini 9 50 14 49 19 47 24 44...', '40 29', '29 41', '25 40', '29 39', '29 40', 'E'),
(14, 2, 'Berapakah angka lanjutan dari deret angka berikut : 7 8 7 12 7 16 7 20 Selanjutnya ...', '7 25', '7 20', '7 19', '6 24', '7 24', 'E'),
(15, 2, 'Berapakah angka lanjutan dari deret angka berikut : 39 2 38 9 36 17 33...', '26 29', '25 29', '24 30', '26 30', '27 29', 'A'),
(16, 2, 'Huruf lanjutan dari urutan ini adlah G I K M', 'R', 'Q', 'N', 'O', 'P', 'D'),
(17, 2, 'Huruf lanjutan dari urutan U S P L', 'D', 'E', 'F', 'G', 'H', 'D'),
(18, 2, 'Huruf lanjutan dari C Q E Q G Q I', 'Q K', 'Q J', 'Q I', 'Q M', 'Q N', 'A'),
(19, 2, 'Huruf lanjutan dari urutan ini K O S', 'V', 'T', 'W', 'X', 'Z', 'C'),
(20, 2, 'Huruf lanjutan dari urutan ini A I Q', 'U', 'T', 'X', 'Z', 'Y', 'E'),
(21, 3, 'Seluruh laki-laki memiliki hormon testosteron. Andrea seorang laki-laki.', 'Andrea mungkin juga punya hormon testosteron', 'Belum tentu Andrea memiliki hormon testosteron', 'Siapa tahu Andrea tidak memiliki hormon testosteron', 'Andrea tidak memiliki memiliki hormon testosteron', 'Andrea memiliki hormon testosteron', 'E'),
(22, 3, 'Sebagian perajin tempe mengeluhkan harga kedelai naik. Pak Anto seorang perajin tempe.', 'Pak Anto pasti mengeluhkan harga kedelai naik.', 'Pak Anto tidak mengeluhkan harga kedelai naik.', 'Harga kedelai bukanlah keluhan Pak Anto', 'Pak Anto mungkin ikut mengeluhkan harga kedelai naik', 'Harga kedelai naik atau tidak, pak Anto tetap mengeluh', 'D'),
(23, 3, 'Semua pemain sepakbola yang berkebangsaan italia berwajah tampan. John adalah pemain sepakbola berkebangsaan inggris.', 'John bukanlah pemain sepakbola yang tampan', 'John adalah pemain sepakbola yang tampan', 'Meskipun bukan berkebangsaan Italia, John pasti berwajah tampan', 'Mustahil John berwajah tampan', 'Tidak dapat ditarik kesimpulan', 'E'),
(24, 3, 'Sebagian orang yang berminat menjadi politikus hanya menginginkan harta dan tahta. Rosyid tidak berminat menjadi politikus.', 'Rosyid tidak menginginkan harta dan tahta.', 'Tahta bukanlah keinginan Rosyid, tapi harta mungkin ya.', 'Rosyid menginginkan tahta tapi tidak berminat menjadi politikus.', 'Rosyid tidak ingin menjadi politikus karena sudah kaya dan punya tahta', 'Tidak dapat ditarik kesimpulan', 'E'),
(25, 3, 'Permen yang dibungkus dalam kemasan menarik sangat laris terjual. Permen X dibungkus dalam kemasan berwarna merah menyala. Menurut anak-anak, warna merah menyala sangatlah menarik.', 'Permen X kurang laris terjual di kalangan anak-anak', 'Permen X tidak laku terjual di kalangan orang dewasa', 'Permen X laris terjual', 'Permen X laris terjual di kalangan anak-anak', 'Tidak dapat ditarik kesimpulan', 'D'),
(26, 3, 'Mister A adalah seorang yang jenius. Mister A seorang penemu. Semua penemu adalah kreatif. Mister B juga seorang penemu.', 'Mister B seorang yang jenius', 'Mister B belum tentu kreatif', 'Mister A dan Mister B sama-sama jenius dan kreatif', 'Mister B pasti kreatif. Dan belum tentu jenius', 'Mister A pasti jenius dan belum tentu kreatif', 'D'),
(27, 3, 'Ivan lebih ringan beratnya daripada Wawan. Andika lebih berat daripada wawan.', 'Wawan adalah yang paling ringan dari ketiganya', 'Ivan mungkin saja sama beratnya dengan andika', 'Jika wawan memiliki berat 65 Kg. Mustahil andika memiliki berat lebih dari 65 Kg.', 'Jika andika memiliki berat 65 Kg. Mustahil ivan memiliki berat lebih dari 65 Kg.', 'Jika ivan memiliki berat 65Kg. Mungkin saja andika memiliki berat lebih dari 65 Kg.', 'D'),
(28, 3, 'Jika sedang libur sekolah Anjas berkunjung ke rumah temannya. Kecuali saat sakit.', 'Anjas saat ini sedang masuk sekolah, jadi pastilah tidak berkunjung ke rumah temannya meskipun di so', 'Sekarang Anjas sedang libur sekolah. Mungkin dia sedang bersantai-santai di rumah.', 'Hari ini Anjas sedang libur sekolah, jadi dia berkunjung ke rumah temannya.', 'Anjas tidak berkunjung ke rumah temannya kemarin. Jadi kemarin pasti dia sakit', 'Meskipun sakit, Anjas akan berkunjung ke rumah temannya saat liburan panjang.', 'C'),
(29, 3, 'Tidak ada ikan lele yang punya sisik. Ikan lele memiliki sungut.', 'Ikan yang tidak bersisik pasti punya sungut', 'Ikan yang bersungut pasti tidak punya sisik', 'Sisik ada hubungannya dengan sungut', 'Andai lele punya sisik, maka tidak akan punya sungut', 'Tidak bisa ditarik kesimpulan', 'E'),
(30, 3, 'Sebagian besar orang bersuku Jawa menyukai makanan manis. Zulfa juga bersuku Jawa. Maka', 'Zulfa pastilah menyukai makanan manis.', 'Mustahil Zulfa menyukai makanan manis', 'Kemungkinan Zulfa juga menyukai makanan manis adalah sangat kecil', 'Zulfa tidak menyukai makanan manis', 'KemungkinanZulfa menyukai makanan manis adalah sangat besar.', 'E'),
(31, 3, 'Sebagian besar pengusaha kecil mengeluhkan harga Tarif Dasar Listrik (TDL) yang tinggi. Aris adalah seorang pengusaha kecil.', 'Aris pastilah mengeluhkan harga TDL yang tinggi.', 'Aris pasti tidak mengeluhkan harga TDL yang tinggi', 'Aris belum mengeluhkan harga TDL yang tinggi', 'Aris mungkin mengeluhkan harga TDL yang tinggi', 'Tak dapat diambil kesimpulan', 'D'),
(32, 3, 'Sebagian pejabat adalah koruptor. Seluruh koruptor tak bisa hidup tenang & bahagia. Rizal seorang pejabat korup.', 'Rizal tak dapat hidup tenang & bahagia', 'Rizal masih bisa tenang & bahagia dengan kekayaanya', 'Rizal mungkin tidak tenang & bahagia', 'Rizal tidak menginginkan hidup tenang & bahagia', 'Tidak dapat ditarik kesimpulan', 'A'),
(33, 3, 'Seluruh pelaku syirik yang tidak bertobat hingga mati, masuk neraka. Percaya dengan jimat keselamatan & jimat penglarisan adalah syirik. Sampai matinya, Sutopo masih terus memiliki dan mempercayai jimat penglarisan.', 'Sutopo masuk Surga', 'Kemungkinan Sutopo masuk Neraka', 'Sutopo masuk neraka.', 'Kemungkinan Sutopo masuk Surga', 'Tak bisa disimpulkan', 'C'),
(34, 3, 'Sebagian alumni kampus ternama di Indonesia adalah pejabat yang gemar korupsi. Anton seorang pejabat. Anton adalah alumni kampus ternama di Indonesia.', 'Belum tentu Anton gemar korupsi.', 'Tentulah Anton gemar korupsi', 'Pastilah Anton tidak suka korupsi', 'Anton pejabat jujur.', 'Tak bisa disimpulkan', 'A'),
(35, 2, '(? (100-51)) : 0,5 =', '3,5', '56', '7/2', '14', '35', 'D'),
(36, 2, '24 x 0,625 =', '16', '18', '21', '20', '15', 'E'),
(37, 2, '(0,125 x 64) / 2', '0,16', '0,4', '16', '4', '24', 'D'),
(38, 2, '3/40  adalah berapa persen ?', '7,5%', '5%', '75%', '7%', '6%', 'A'),
(39, 2, 'Suatu seri angka : 19 28 37 46 selanjutnya...', '56', '55', '57', '47', '65', 'B'),
(40, 2, 'Seri huruf: e h a j m b selanjutnya...', 'p s', 'p t', 'o q', 'o r', 'o s', 'D'),
(41, 2, 'Suatu seri huruf : z v r selanjutnya...', 'm', 'o', 't', 'l', 'n', 'E'),
(42, 2, 'Seri huruf : z a h i j z a k l m z a selanjutnya...', 'n o q', 'o p q', 'r s t', 'n o p', 'p o y', 'D'),
(43, 5, 'Landai', 'Datar', 'Curam', 'Sedang', 'Luas', 'Lapang', 'B'),
(44, 5, 'Enmity', 'Permusuhan', 'Hubungan', 'Pertengkaran', 'Amity', 'Perseteruan', 'D'),
(45, 5, 'Eternal', 'Abadi', 'Selamanya', 'Seterusnya', 'Fana', 'Lama', 'D'),
(46, 4, 'Fantastis', 'Ampuh', 'Sakti', 'Bagus', 'Luar Biasa', 'Kesenangan', 'D'),
(47, 4, 'Artifisial', 'Alami', 'Campuran', 'Murni', 'Buatan', 'Pabrikan', 'D'),
(48, 4, 'Panorama', 'Penglihatan', 'Pemandangan', 'Melihat', 'Memandang', 'Tontonan', 'B'),
(49, 4, 'Anonim', 'Nama singkat', 'Singkatan', 'Kepanjangan dari', 'Tanpa nama', 'Nama kecil', 'D'),
(50, 4, 'Pandir', 'Agak pintar', 'Bodoh', 'Pandai hadir', 'Tidak jenius', 'Pemandangan', 'B'),
(51, 4, 'Efektif', 'Manjur', 'Tepat sasaran', 'Tepat waktu', 'Hemat', 'Efisien', 'A'),
(52, 4, 'Egaliter', 'Suka memerintah', 'Otoriter', 'Sederajat', 'Militer', 'Tentara', 'C'),
(53, 4, 'Intermediari', 'Sales', 'Tidak susah', 'Cukup', 'Perantara', 'Terus terang', 'D'),
(54, 4, 'Faksi', 'Partai', 'Perpecahan', 'Golongan', 'Pendapat', 'Pandangan', 'C'),
(55, 4, 'Kontribusi', 'Uang', 'Dana', 'Sumbangan', 'Hadiah', 'Pajak', 'C'),
(56, 4, 'Ambigu', 'Mendua', 'Bingung', 'Tidak tentu', 'Tidak ada keputusan', 'Mengambang', 'A'),
(57, 4, 'Komplemen', 'Makanan sehat', 'Bagian', 'Departemen', 'Pelengkap', 'Bahan pengganti', 'D'),
(58, 4, 'Kompleksitas', 'Kerumitan', 'Perumahan berjumlah banyak', 'keteraturan', 'Susunan', 'Banyak', 'A'),
(59, 4, 'Normadik', 'Tarzan', 'Tidak punya komunitas', 'Temannya banyak', 'Tinggalnya tidak tetap', 'Orang utan', 'D'),
(60, 4, 'Mortalitas', 'Tingkat', 'Kelahiran', 'Kematian', 'Pertarungan', 'Level', 'C'),
(61, 4, 'Fusi', 'Energi', 'Gabungan', 'Inti', 'Reaksi', 'Reaktor', 'B'),
(62, 4, 'Assessment', 'Suka', 'Timbang pilih', 'Timbang terima', 'Taksiran', 'Wawancara', 'D'),
(63, 5, 'Take off', 'Tinggal landas', 'Berangkat', 'Landing', 'Turun', 'Hinggap', 'C'),
(64, 5, 'Hakiki', 'Majasi', 'Penipuan', 'Tidak jujur', 'Kewajiban', 'Sebentar', 'A'),
(65, 5, 'Absurd', 'Mengada-ada', 'Tidak mustahil', 'Absen', 'Hadir', 'Tidak hilang', 'B'),
(66, 5, 'Sederhana', 'Kompleks', 'Simple', 'Banyak', 'Tinggi', 'Mewah', 'A'),
(67, 5, 'Ad Hoc', 'Khusus', 'Panitia', 'Komite', 'General', 'Spesial', 'D'),
(68, 5, 'Aristokrat', 'Bangsawan', 'Raja', 'Hulubalang', 'Rakyat jelata', 'Pedagang', 'D'),
(69, 5, 'Asimilasi', 'Perselarasan', 'Harmoni', 'Kebangkitan', 'Tidak setuju', 'Pertengkaran', 'E'),
(70, 5, 'Deforestasi', 'Kehutanan', 'Penebangan pohon', 'Pembukaan lahan', 'Reboisasi', 'Hutan Lindung', 'D'),
(71, 5, 'Statis', 'Bergerak', 'Diam', 'Begitu saja', 'Terus-terusan', 'Tanpa hitungan', 'A'),
(72, 5, 'Rigid', 'Kaku', 'Keras', 'Bisa ditawar', 'Negoisasi', 'Fleksibel', 'E'),
(73, 5, 'Prematur', 'Dini', 'Kecil', 'Besar', 'Terlambat', 'Lama', 'D'),
(74, 5, 'Skeptis', 'Ragu-ragu', 'Yakin', 'Iman', 'Optimis', 'Percaya diri', 'B'),
(75, 5, 'Moderat', 'Pertengahan', 'Sedang-sedang', 'Ekstrem', 'Tinggi sekali', 'Besar sekali', 'C'),
(76, 5, 'Persona non grata', 'Orang pribumi', 'Orang asing', 'Orang yang disukai', 'Orang yang membumi', 'Orang baru', 'C'),
(77, 5, 'Kasual', 'Kantoran', 'Rapi', 'Formal', 'Tertib', 'Santai', 'C'),
(78, 5, 'Afeksi', 'Kasih sayang', 'Cinta', 'Perasaan', 'Kejahatan', 'Kriminal', 'D'),
(79, 5, 'Partisan', 'Pihak', 'Netral', 'Partai politik', 'Kelompok', 'Ikut bergabung', 'B'),
(80, 5, 'Parsimoni', 'Irit', 'Tinggi', 'Boros', 'Besar sekali', 'Harmoni', 'C'),
(81, 5, 'Absolut', 'Mutlak', 'Besar sekali', 'Kecil sekali', 'Tergantung mood', 'Relatif', 'E'),
(82, 5, 'Eksodus', 'Transmigrasi', 'Bedol Desa', 'Bermalam', 'Pindah', 'Bermukim', 'E'),
(83, 5, 'Imun', 'Payah', 'Rapuh', 'Lelah', 'Kebal', 'Loyo', 'B'),
(84, 5, 'Progresi', 'Selalu bergerak', 'Statis', 'Lambat maju', 'Regresi', 'Stagnasi', 'E'),
(85, 5, 'Up to date', 'Kuno', 'Mutakhir', 'Canggih', 'Baru', 'Dahulu', 'A'),
(86, 5, 'Veteran', 'Pemula', 'Perang', 'Sipil', 'Rakyat biasa', 'Bukan tentara', 'A'),
(87, 4, 'Domain', 'Internet', 'Website', 'Daerah', 'Situs', 'Tataran', 'C'),
(88, 4, 'Interseksi', 'Antar Karyawan', 'Persimpangan', 'Perempatan', 'Seksi', 'Gabungan', 'B'),
(89, 4, 'Union', 'Kelompok', 'Negara', 'Penyelarasan', 'Perjumpaan', 'Penyatuan', 'E'),
(90, 4, 'Tandem', 'Bekerjasama', 'Bertandang', 'Tandingan', 'Saingan', 'Berdua', 'E'),
(91, 4, 'Oktagonal', 'Bersegi 6', 'Bersegi 8', 'Banyak segi', 'Berbagai segi', '6 pandangan berbeda', 'B'),
(92, 4, 'Oseanografi', 'Pantai', 'Samudera', 'Ilmu tentang laut', 'Ilmu tentang benua', 'Ilmu perkapalan', 'C'),
(93, 4, 'Komputasi', 'Ilmu tentang komputer', 'Pemotongan', 'Canggih', 'Perhitungan', 'Komponen elektronik', 'D'),
(94, 4, 'Evaporasi', 'Peremajaan', 'Penghijauan', 'Penguapan', 'Pengembunan', 'Pencairan', 'C'),
(95, 4, 'Konjungsi', 'Penghubung', 'Tasrif', 'Penyesuaian', 'Pemugaran', 'Kenaikan', 'A'),
(96, 4, 'Adiktif', 'Ingin berhenti', 'Candu', 'Obat terlarang', 'NAPZA', 'Narkotika', 'E'),
(97, 4, 'Tag', 'Label', 'Internet', 'Perkataan', 'Situs', 'Blog', 'A'),
(98, 4, 'Absorpsi', 'Pengeluarann', 'Penafsiran', 'Penerimaan', 'Pengambilan', 'Penyerapan', 'E'),
(99, 4, 'Via', 'Pos', 'Surat', 'Kilat khusus', 'Melalui', 'Transportasi', 'D'),
(100, 4, 'Konjugasi', 'Penghubung', 'Tasrif V', 'Penyesuaian', 'Pemugaran', 'kenaikan', 'B'),
(101, 2, 'Jika x = 60 derajat dan jika sudut suatu segitiga adalah 2y, 4y, dan 4y maka …', 'x > y', 'x &lt; y', 'x = y', '2x = 3y', 'x dan y tidak bisa ditentukan', 'A'),
(102, 2, 'Diketahui panjang sisi-sisi sebuah segitiga sama sisi adalah 3 cm dan di dalamnya dibuat segitiga sama sisi yang panjangnya 1 cm. Berapakah jumlah maksimum segitiga kecil yang dibentuk?', '3', '6', '9', '12', '15', 'C'),
(103, 2, 'Sebuah Aquarium panjangnya 4 kaki, lebarnya 3 kaki, dan dalamnya 2 kaki. Jika air dalam aquarium mencapai 4 inci dari atas aquarium maka berapa kaki kubikkah volume air yang ada di aquarium? (1 kaki = 12 inci)', '8', '12', '16', '20', '24', 'D'),
(104, 2, 'Sebuah balok berukuran 9 m x 300 cm x 12 m dipotong menjadi kubus dengan ukuran terbesar yang dapat dibuat. Berapa banyakkah kubus yang dapat dibuat?', '6', '8', '10', '12', '14', 'D'),
(105, 2, 'Sebuah bujur sangkar B, luasnya 81 yang memiliki sisi y. Sedangkan A adalah persegi panjang dengan sisi 18, dan sisi yang lainnya x. Bila luas A sama dengan 2 kali luas B, maka …', 'x > y', 'y > x', 'x = y', '3y = x+2', 'x dan y tidak bisa ditentukan', 'C'),
(106, 3, 'Semua pengendara harus mengenakan helm. Sebagian pengendara mengenakan sarung tangan.', 'Sebagian pengendara tidak mengenakan sarung tangan', 'Semua pengendara tidak mengenakan sarung tangan', 'Sebagian pengendara mengenakan helm dan sarung tangan', 'Sebagian pengendara tidak mengenakan helm dan sarung tangan', 'Sebagian pengendara tidak mengenakan helm dan tidak mengenakan sarung tangan', 'C'),
(107, 3, 'Semua yang hadir merupakan anggota perkumpulan, sebagian yang hadir adalah psikolog.', 'Semua psikolog hadir dalam rapat', 'Semua anggota perkumpulan adalah psikolog', 'Semua anggota perkumpulan yang hadir', 'Sebagian psikolog adalah anggota perkumpulan', 'Sebagian yang hadir bukan anggota perkumpulan', 'D'),
(108, 3, 'Tidak semua hipotesis penelitian terbukti benar. Beberapa penelitian skripsi tidak menguji hipotesis.', 'Beberapa sarjana tidak menulis skripsi', 'Beberapa hipotesis skripsi tidak terbukti benar', 'Semua hipotesis skripsi terbukti benar', 'Semua hipotesis penelitian terbukti benar', 'Semua sarjana, hipotesis skripsinya benar', 'B'),
(109, 3, 'Ada lima orang bersahabat : Yuan, Dian, Nadia, Nisa, dan Yuni. Yang paling muda di antara mereka Yuni. Yuan tidak lebih tua dibandingkan Dian dan Nadia. Hanya Yuan lebih muda dari Nisa. Nadia lebih tua dibandingkan Dian. Urutan usia kelima orang sahabat t', 'Nadia, Dian, Nisa, Yuan, Yuni', 'Yuan, Nadia, Nisa, Dian, Yuni', 'Yuni, Nisa, Yuan, Nadia, Dian', 'Yuni, Yuan, Nisa, Dian, Nadia', 'Nadia, Dian, Yuan, Nisa, Yuni', 'A'),
(110, 3, 'Ogis lebih tinggi daripada Benny, Rangga lebih pendek daripada Ogis, maka:', 'Jika Rangga 180 cm, Benny 180', 'Jika Rangga 180 cm, Benny tingginya kurang dari 180 cm', 'Jika Rangga 180 cm, Benny tingginya lebih dari 180 cm', 'Jika Ogis 180 cm, Benny dan Rangga tingginya kurang dari 180 cm', 'Tidak terdeteksi', 'D');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=111;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
