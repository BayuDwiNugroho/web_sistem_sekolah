-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 04:44 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahku`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(20) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `username`, `password`, `mapel`, `kelas`) VALUES
(1, 'Joko Winarko s', 'joko', 'joko', 'IPA', '1'),
(2, 'Dedi Siwaro', 'dedi123', '711ccac10b1be72d703acdb209b1d892', 'IPS', '3'),
(3, 'Rahmanto', '', '', 'Matematika', '4'),
(4, 'Rendra', '', '', 'AGAMA', '3'),
(5, 'Satria Widyatmoko', '', '', 'B. INDONESIA', '2'),
(6, 'Jini', '', '', 'B. INGGRIS', '6'),
(7, 'Susi', '', '', 'B. INDONESIA', '1'),
(1234, 'wewe', '', '', 'ips', '2');

-- --------------------------------------------------------

--
-- Table structure for table `lap_nilai`
--

CREATE TABLE `lap_nilai` (
  `id_lap` int(20) NOT NULL,
  `id_siswa` varchar(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `nilai_ipa` varchar(100) NOT NULL,
  `nilai_ips` int(11) NOT NULL,
  `nilai_mtk` int(11) NOT NULL,
  `nilai_bind` int(11) NOT NULL,
  `nilai_bing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lap_nilai`
--

INSERT INTO `lap_nilai` (`id_lap`, `id_siswa`, `nama_siswa`, `kelas`, `nilai_ipa`, `nilai_ips`, `nilai_mtk`, `nilai_bind`, `nilai_bing`) VALUES
(0, '4', 'Kiki', '2', '50', 90, 67, 56, 78),
(1, '1', 'Joko', '2', '90', 70, 70, 70, 70),
(6, '2', 'kiko', '5', '90', 90, 100, 90, 80);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(10) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `komentar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `agama`, `alamat`, `username`, `password`, `komentar`) VALUES
(1, 'Joko siswoyo', 'ISLAM', 'Pati', 'joko123', '278ea841c0d133059032b8a75320c3e0', 'Kapan Remidinya bu?'),
(2, 'Kiko', 'KRISTEN', 'Tangerang', 'kiko123', 'b4c6410dc76b7910ae3620d62c4f73fa', 'Nilai saya ipa kok jelek?'),
(4, 'Kiki', 'ISLAM', 'Kuta', 'kiki123', '656ead03af397857bdcd84292e6a3bbd', ''),
(8, 'Rewardi', 'ISLAM', 'Pati', 'jokowi', '7d00ff54a263fe80825b9297804a982c', 'Terima Kasih\r\n'),
(9, 'Vanya Sielo', 'ISLAM', 'Ngawwen', 'vanya', 'vanya', 'kurang baik nilainya\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(150) DEFAULT NULL,
  `berita_isi` text,
  `berita_image` varchar(40) DEFAULT NULL,
  `berita_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`berita_id`, `berita_judul`, `berita_isi`, `berita_image`, `berita_tanggal`) VALUES
(22, 'Kegiatan Outbond di SD BDN', '<p> </p>\r\n\r\n<p>Outbond SD IT Insan Kamil kelas 1, 2 dan 3 kali ini mengambil lokasi yang berbeda dari sebelumnya. Keinginan untuk merasakan pengalaman baru di tempat yang berbeda menjadi salah satu alasan SD IT Insan Kamil memilih “Lapangan Bola Langensari-Tenjolaya Majalengka” sebagai lokasi outbond barunya.</p></p>\r\n\r\n<p>Start perjalanan ada di lapangan SD IT Insan kamil. Seluruh siswa dihimbau untuk hadir tepat waktu. Pukul 07.00, sebagian besar siswa sudah berkumpul di lapangan SD IT Insan Kamil. Beberapa guru yang diamanahkan sebagai pendamping kelompok mulai menjalankan tugasnya yaitu, memeriksa siswa yang hadir, mengkonfirmasi siswa yang belum hadir dengan cara menghubungi wali siswa, dan memastikan siswa bekal makanan. Dengan menggunakan armada angkutan kota ( angkot ) dan mobil antar jemput sekolah, peserta dan panitia outbond berangkat ke lokasi secara serentak pada pukul 07.30. Perjalanan memakan waktu kurang lebih 20 menit.</p>\r\n', '78ff3469ef41b9d03e25fa0c0dfd2cc2.jpg', '2018-07-03 05:41:49'),
(23, 'Kegiatan Idul Adha di SD BDN', '<p>Nama SD BDN Amal Insani disebutkan di Jawa Pos Edisi Kamis, 15 September 2016. Masih dengan suasana semarak Hari Raya Idul Adha 1437 H, pada Hari Rabu kemarin, Sekolah Dasar Islam Terpadu Amal Insani Jepara menyelenggarakan Latihan Qurban untuk para Siswa Siswinya. Untuk Tahun 2016 ini, SD BDN Amal Insani menyediakan 1 Sapi dan 2 Kamibing. 1 Sapi dan 1 Kambing di dapat dari iuran seluruh guru, karyawan, dan siswa siswi. Sedangkan untuk 1 ekor kambing lainnya didapat dari sumbangan wali murid.<br>\r\nProsesi penyembelihan hewan qurban yang berupa 1 ekor sapi dilakukan setelah waktu subuh, kemudian pukul 6 nya para guru dan karyawan mulai memotong daging untuk siap didistribusikan. Sedangkan untuk penyembelihan hewan kambing nya dilaksanakan pada pukul 8 pagi oleh siswa siswi.<br>\r\n<br>\r\nHasil dari penyembelihan hewan qurban dibagikan ke seluruh warga sekitar. Datang juga wartawan dari Jawa Pos ke SD BDN Amal Insani untuk meliput kegiatan qurban tersebut.<br>\r\n<br>\r\nTidak hanya melakukan proses penyembeliha hewan qurban, dalam kegiatan kemarin siswa siswi melaksanakan kegiatan mewarnai yang dilaksanakan oleh siswa siswi kelas 1 - 3. Dilaksanakan juga kajian tentang Idul Adha kepada siswa siswi.</p>\r\n', '13b3957bde07244f39eb5b11fd1e6f45.jpg', '2018-07-03 05:42:59'),
(24, 'Kegiatan Ngaji Bersama di SD BDN', '<p>WARTAKEPRI.co.id, TANJUNGPINANG – Walikota Tanjungpinang, H.Lisdarmansyah menghadiri Khataman Al Qur’an siswa/i SDN 014 Bukit Bestari,Sabtu (18/02/17). Hadirnya Lis dalam kegiatan khatam Al Qur’an untuk memberikan semangat kepada anak anak untuk selalu menjadikan Al Qur’an sebagai satu satunya sumber pegangan hidup untuk mendapatkan generasi terbaik.</p>\r\n\r\n<p>Dalam sambutannya Lis menyampaikan bahwa awal semangat Pemerintahan Lis – Syahrul untuk mencanangkan Wajib mengaji setiap pagi bagi siswa siswi, dikarenakan pengalaman pada saat melayat orang meninggal dan melihat anak anak dari Almarhum tidak bisa membacakan Al Qur’an kepada orang tuanya dikarenakan tidak bisa mengaji.</p>\r\n\r\n<p>Mulai saat itulah saya bersama Pak syahrul semangat untuk mewajibkan setiap siswa siswi disekolah untuk mengaji. ia menginginkan agar membaca Al-Qur’an diimplementasikan dalam kehidupan sehari-hai.</p>\r\n\r\n<p>Kalau zaman dahulu anak takut tak bisa mengaji, sekarang justru terbalik orang tua takut anaknya tak bisa mengaji. Diera teknologi saat ini sangat berpengaruh pada anak, untuk itu peran orang tua, pemerintah dan guru sangat diperlukan.</p>\r\n\r\n<p>Karena itu, Lis berharap agar setiap sekolah yang ada di Kota Tanjungpinang untuk selalu melakukan pengajian setiap pagi disekolah sebelum kegiatan belajar mengajar dimulai,” Ujar Lis.</p>\r\n\r\n<p>Pelaksanaan khatam Al Qur’an ini merupakan kegiatan perdana di SDN 013 BB dan diikuti oleh 66 orang siswa siswi dari jumlah siswa 658 orang di SDN 014 Bukit Bestari, dimulai dari kelas 3 s/d 6 SD.</p>\r\n\r\n<p>” Sebelumnya para siswa siswi mengikuti pawai yang dimulai dari Masjid Al-Muttahidin Perumnas Sungai Jang menuju ke halaman SD N 014 Bukit Bestari tempat berlangsungnya acara khataman Al Qur”an, dan sangat berharap agar kegiatan Khataman ini bisa berlangsung setiap tahunnya dan mendapat dukungan dari Pak Walikota dan Pak Kadis”. ujar H. Iskandar, S.Pd selaku Kepala SDN 014 Bukit Bestari.</p>\r\n\r\n<p>Kepala Dinas Pendidikan Kota Tanjungpinang, Drs. HZ Dadang, AG, menyampaikan bahwa pelaksaan pada hari ini merupakan kegiatan rutin setiap sekolah, dinas Pendidikan akan selalu mendukung setiap kegiatan positif yang dilaksanakan setiap sekolah yang ada di Kota Tanjungpinang.</p>\r\n\r\n<p>Dadang berharap pelakasanaan Khataman ini harus ada dukungan dari para guru dan seluruh orang tua dari siswa, karena tanpa dukungan dari Guru dan orang tua, pelaksanaan ini tidak akan berjalan dengan baik.</p>\r\n\r\n<p>Kegiatan dihadiri, para orang tua, Kepala OPD, Camat, Lurah dan pengawas sekolah di Lingkungan Dinas Pendidikan Kota Tanjungpinang.</p>\r\n\r\n<p>Acara ditutup dengan penyerahan piagam khataman secara simbolis oleh Walikota Tanjungpinang.<br>\r\n </p>\r\n', 'e69b82f74b11e99a5c7bb6f67857a7f7.jpg', '2018-07-03 05:45:13'),
(25, 'Kegiatan Upacara di SD BDN', '<p>Setiap hari Senin, di setiap lembaga pendidikan --terutama sekolah-  dilaksanakan kegiatan Upacara Bendera pada pagi hari sebelum Kegiatan Belajar Mengajar (KBM) dimulai. Termasuk di SD Puri Artha Karawang -tempat saya mengajar- Upacara Bendera sudah menjadi kegiatan rutin yang dilaksanakan setiap hari Senin.</p>\r\n\r\n<p>Hari ini, Senin (25/09/2017) SD Puri Artha kembali melaksanakan Upacara Bendera. Kebetulan kelas saya (kelas IIIA) mendapat giliran menjadi petugas upacara. Pada hari ini, ada 16 orang dari peserta didik kelas IIIA yang terpilih menjadi petugas upacara. Mereka bertugas sebagai (1) pembaca tata upacara bendera (MC); (2) pengatur upacara; (3) pemimpin upacara; (4) pembawa teks Pancasila (ajudan); (5) pengibar bendera (3 orang); ( 6) pembaca UUD 1945; (7) pembaca doa; (8) konduktor/dirigen; dan (9)  pemimpin pasukan (6 orang). Sementara yang belum terpilih menjadi petugas tersebut, bertugas sebagai tim paduan suara.</p>\r\n\r\n<p>Upacara bendera setiap hari Senin merupakan kegiatan wajib yang harus dilaksanakan oleh seluruh sekolah, baik sekolah negeri maupun swasta (baca href=\"https://edukasi.kompas.com/read/2015/07/27/11240661/Seluruh.Sekolah.Wajib.Gelar.Upacara.Bendera.Setiap.Senin.\" target=\"_blank\"><strong>DISINI</strong></a>). Kewajiban ini berdasarkan Permendikbud RI Nomor 23 Tahun 2015 Tentang Penumbuhan Budi Pekerti (PBP).</p>\r\n\r\n<p>Upaca Bendera hari Senin mempunyai manfaat yang sangat baik bagi upaya penumbuhan budi pekerti dan karakter bangsa, terutama nilai-nilai kebangsaan dan kebhinekaan. Nilai-nilai tersebut terkandung di dalam setiap urutan kegiatan/tata upacara bendera. Nilai-nilai tersebut diantaranya adalah nilai kedisiplinan, kepemimpinan, kerja sama dan kekompakan, kekuatan fisik dan mental, patriotisme (kepahlawanan), dan lain sebagainya.</p>\r\n\r\n<p>Saya ambil contoh beberapa kegiatan di dalam Upacara Bendera yang memiliki nilai-nilai karakter bangsa ini. Yang pertama adalah pengibaran Bendera Merah Putih. Terdapat nilai-nilai luhur yang dapat ditumbuhkan di dalam kegiatan pengibaran bendera ini. Bagi petugas pengibar bendera, ada nilai gotong royong dan kebersamaan yang bisa diambil ketika melaksanakan tugasnya. Mereka harus terbiasa dan bisa mengharmoniskan posisi badan dan gerakan ayunan tangan dan hentakan kaki mereka. Salah seorang diantara petugas bendera itu tidak boleh ada yang berbeda gerakan dan sikapnya. Jika ada, maka pelaksanaan upacara benderanya bisa dinyatakan kurang baik. Hal ini dikarenakan pengibaran Sang Merah Putih merupakan ruh atau kegiatan inti dari pelaksanaan Upacara Bendera.</p>\r\n', '9185d952eea430acdb00276870585043.jpg', '2018-07-03 05:47:26'),
(26, 'dinia', '<p>awawawa</p>\r\n', '3032c0defd72aa35a998bc26364491c6.jpg', '2018-07-04 10:52:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(11) NOT NULL,
  `nuptk` varchar(16) NOT NULL,
  `nama_guru` varchar(30) NOT NULL,
  `gender` enum('p','w') NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nuptk`, `nama_guru`, `gender`, `username`, `password`) VALUES
(1, '1234124214141', 'adi', 'p', 'adi12345', 'f8435ccb373cd44b44b30b21dd597080'),
(4, '3434343232323', 'syamsuddin', 'w', 'udin123', '3af4c9341e31bce1f4262a326285170d'),
(1223, 'a123', 'joko', 'p', 'joko123', '278ea841c0d133059032b8a75320c3e0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level_user`
--

CREATE TABLE `tbl_level_user` (
  `id_level_user` int(11) NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_level_user`
--

INSERT INTO `tbl_level_user` (`id_level_user`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'Walikelas'),
(3, 'Guru'),
(5, 'Keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `gender` enum('P','W') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `kd_agama` varchar(2) NOT NULL,
  `foto` text NOT NULL,
  `id_rombel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nim`, `nama`, `gender`, `tanggal_lahir`, `tempat_lahir`, `kd_agama`, `foto`, `id_rombel`) VALUES
('RM00502', 'SAFIKAH KAMAL', 'P', '2017-01-23', 'BANDA ACEH', '02', '', 1),
('TI102132', 'NURIS AKBAR', 'P', '2017-01-22', 'LANGSA', '01', '', 1),
('TI102133', 'M HAFIDZ MUZAKI', 'P', '2017-01-16', 'LANGSA', '01', '', 1),
('TI1021395', 'BALQIS HUMAIRA', 'W', '2017-01-11', 'KUALA SIMPANG', '01', '', 1),
('TI3003239', 'JONO', 'P', '2017-02-18', 'BANDUNG', '01', 'Yaya_yah10.png', 1),
('TIM102134', 'DESI HANDAYANI', 'W', '2017-01-22', 'RANGKASBITUNG', '01', '', 1),
('TIM102135', 'IRMA MULIANA', 'W', '2017-01-25', 'LANGSA', '01', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `id_level_user` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_lengkap`, `username`, `password`, `id_level_user`, `foto`) VALUES
(1, 'nuris akbar', 'nuris123', '85a3281bee28b39d2c0cb14ff86a55cd', 1, 'dsdsdsds'),
(2, 'HAFIDZ MUZAKI', 'zaki', 'd41d8cd98f00b204e9800998ecf8427e', 1, 'Angin.jpeg'),
(5, 'fang sui', 'fang', 'd41d8cd98f00b204e9800998ecf8427e', 1, 'Gopal_Render.png'),
(7, 'desi handayani', 'desi123', '14ddc434109d6e8df730d4ea4eefc06c', 5, 'Yaya_yah1.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id_admin` int(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'adminku', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_tbl_user`
-- (See below for the actual view)
--
CREATE TABLE `v_tbl_user` (
`id_user` int(11)
,`nama_lengkap` varchar(50)
,`username` varchar(40)
,`password` varchar(32)
,`id_level_user` int(11)
,`foto` text
,`nama_level` varchar(30)
);

-- --------------------------------------------------------

--
-- Structure for view `v_tbl_user`
--
DROP TABLE IF EXISTS `v_tbl_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tbl_user`  AS  select `tu`.`id_user` AS `id_user`,`tu`.`nama_lengkap` AS `nama_lengkap`,`tu`.`username` AS `username`,`tu`.`password` AS `password`,`tu`.`id_level_user` AS `id_level_user`,`tu`.`foto` AS `foto`,`tlu`.`nama_level` AS `nama_level` from (`tbl_user` `tu` join `tbl_level_user` `tlu`) where (`tu`.`id_level_user` = `tlu`.`id_level_user`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `lap_nilai`
--
ALTER TABLE `lap_nilai`
  ADD PRIMARY KEY (`id_lap`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_level_user`
--
ALTER TABLE `tbl_level_user`
  ADD PRIMARY KEY (`id_level_user`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1224;
--
-- AUTO_INCREMENT for table `tbl_level_user`
--
ALTER TABLE `tbl_level_user`
  MODIFY `id_level_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
