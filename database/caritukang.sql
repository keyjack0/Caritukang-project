-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2025 at 06:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caritukang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'admin 1', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `foto_artikel` varchar(255) NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `foto_artikel`, `isi_artikel`) VALUES
(7, 'Hasston Menunjang Tren DIY dengan Beragam Perkakas dan Peralatan Pertukangan', 'gambar_artikel_1.jpg', '<p>Munculnya tren Do It Yourself (D.I.Y) atau kegiatan membongkar dan memperbaiki berbagai peralatan rumah tangga secara mandiri, tak luput dari hadirnya beragam perkakas atau peralatan Tukang. Untuk urusan tersebut, kehadiran Hasston sejak 1972 telah memberikan kontribusi penting dengan pilihan perkakas berkualitas.</p>\r\n\r\n<p>Eksistensi namanya dan besarnya kontribusi yang diberikan dapat dilihat dari berbagai penghargaan yang diterima oleh Hasston. Di tahun 2022 dan 2023, merek di bawah naungan PT Citra Perkakas Indonesia ini berhasil memenangkan berbagai penghargaan seperti TopBrand, Brandchoice award, Star Award for Best Company, Indobuildtech award. Dan penghargaan superbrand merupakan yang terbaru untuk Hasston.</p>\r\n\r\n<p>Direktur Hasston Hassan Nugroho, mengatakan untuk mendapatkan berbagai penhargaan Hasston terus memantau perkembangan pasar, mempelajari perilaku masyarakat yang kerap berubah seiring perkembangan zaman.</p>\r\n\r\n<p>Disamping itu Hasston terus melakukan komunikasi dengan masyarakat, sehingga membuat masyarakat semakin percaya dan dengan senang hati menggunakan produk Hasston.</p>\r\n\r\n<p>Untuk mempertahankan eksistensinya, dan menjadi brand pilihan konsumen, Hasston berkomitmen akan terus berinovasi serta memproduksi produk-produk berkualitas, yang dimaksudkan agar konsumen setia Hasston selalu puas dan nyaman dalam penggunaannya.</p>\r\n\r\n<p>Selain itu Hasston juga akan terus mengeluarkan produk-produk baru yang berkualitas dengan harga yang tetap terjangkau.&nbsp;Hassan juga mengungkapkan, tahun ini Hasston hadir di Pekan Raya Jakarta atau PRJ 2023 yang akan diselenggarakan di JIEXPO Kemayoran tepatnya di Hall A.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Targetkan Pengguna Baru</h2>\r\n\r\n<p>Hasston akan menyediakan beberapa tools dan power tools yang langsung bisa dicoba/dipraktekan oleh pengunjung. Para pengunjung dapat langsung mendapatkan pengalaman menggunakan produk-produk Hasston yang berkualitas dan tahan lama. Selain itu, Hasston akan hadir dengan produk-produk yang lengkap, serta promo-promo yang menarik, yang akan sayang jika dilewatkan.</p>\r\n\r\n<p>&ldquo;Tentunya, Hasston akan memberikan harga special selama pameran PRJ 2023 berlangsung. Tidak berhenti disitu, Hasston juga memberikan souvenir-souvenir menarik yang telah Hasston persiapkan untuk para pengunjung,&rdquo; jelas Hassan.</p>\r\n\r\n<p>Dengan hadir di PRJ 2023, Hasston ingin menargetkan masyarakat awam dan pengguna baru yang baru terjun ke dunia D.I.Y yang belum paham banyak pengetahuan mengenai tools sehingga Hasston bisa support mereka, serta pengguna yang masih enggan untuk pindah ke Brand lain.</p>\r\n\r\n<p>Harapan Hasston dengan hadir di PRJ 2023, masyarakat luas dapat mengubah pandangan mereka bahwa Hasston adalah salah satu Brand Market Leader di Indonesia.</p>\r\n'),
(8, 'Catat! Ini Tiga Tips Jaga Tukang Bangunan Agar Pengerjaannya Cepat dan Sesuai', 'artikel_tukang_2.jpg', '<p>Memilih tukang bangunan yang akan mengerjakan renovasi atau pembangunan harus benar-benar diperhatikan.</p>\r\n\r\n<p>Memilih Tukang Bangunan&nbsp;yang akan mengerjakan renovasi atau pembangunan harus benar-benar diperhatikan. Hal ini dilakukan agar pembangunan dapat selesai sesuai keinginan dan mencegah kerugian.</p>\r\n\r\n<p>Oleh sebab itu, sebelum melakukan renovasi atau pembangunan ada banyak hal yang harus diperhatikan dan dipersiapkan. Adapun salah satunya, yakni dalam memilih jasa tukang bangunan. &nbsp;Lantas, bagaimana cara menjaga tukang bangunan agar pekerjaanya sesuai?</p>\r\n\r\n<p>Dikutip dari akun Tiktok @sudutsipil, ada beberapa tips yang bisa dilakukan untuk menjaga tukang bangunan agar pekerjaan sesuai. Mulai dari sistem bayar progres, hingga bayar dengan bertahap.</p>\r\n\r\n<p>Berikut beberapa tips menjaga tukang bangunan agar pekerjaan sesuai:</p>\r\n\r\n<p>1. Sistem bayar progres, hindari bayar harian.</p>\r\n\r\n<p>2. Buat perjanjian, jika tidak sesuai tidak dibayarkan.</p>\r\n\r\n<p>3. Bayar dengan kurangi 5% bobot sebagai jaga-jaga sebelum mencapai 100%.&nbsp;<strong>(NDA)</strong></p>\r\n'),
(9, 'Tips Menjadi Tukang Bangunan yang Profesional', 'artikel_tukang_3.jpg', '<p>Pekerjaan sebagai seorang tukang bangunan sering kali dianggap sebelah mata, tetapi pada kenyataannya, menjadi seorang tukang bangunan yang profesional adalah pekerjaan yang membutuhkan keterampilan, dedikasi, dan integritas yang tinggi. Apakah Anda baru memulai karier dalam konstruksi atau ingin meningkatkan kualitas kerja Anda, artikel ini akan memberikan tips-tips penting untuk membantu Anda menjadi tukang bangunan yang profesional dan sukses.</p>\r\n\r\n<h3>1. Kuasai Keterampilan Dasar</h3>\r\n\r\n<p>Keterampilan dasar dalam dunia konstruksi adalah pondasi penting yang harus dimiliki oleh setiap tukang bangunan yang ingin sukses. Ini mencakup pemahaman tentang berbagai jenis bahan bangunan, teknik konstruksi, serta cara menggunakan alat-alat dan peralatan dengan benar. Keterampilan ini dapat mencakup kemampuan memahami rencana konstruksi, mengukur, memotong, dan merakit bahan bangunan, serta kemampuan untuk memecahkan masalah teknis yang mungkin timbul selama pekerjaan.</p>\r\n\r\n<p>Sebagai seorang tukang bangunan, Anda harus terus-menerus memperbarui pengetahuan dan keterampilan Anda karena industri konstruksi terus berubah dengan perkembangan teknologi dan tren baru. Menghadiri pelatihan dan kursus terkait adalah cara yang bagus untuk terus mengasah keterampilan Anda dan tetap relevan dalam industri ini.</p>\r\n\r\n<h3>2. Miliki Sikap Kerja yang Profesional</h3>\r\n\r\n<p>Selain keterampilan teknis, memiliki sikap kerja yang baik adalah hal yang sangat penting dalam menjalani karier sebagai tukang bangunan. Berikut adalah beberapa aspek penting dari sikap kerja profesional:</p>\r\n\r\n<p><strong>Kepatuhan Terhadap Waktu</strong></p>\r\n\r\n<p>Tiba tepat waktu di lokasi kerja adalah tanda kepercayaan diri dan komitmen Anda terhadap pekerjaan. Keterlambatan dapat mengganggu jadwal proyek dan merugikan klien Anda.</p>\r\n\r\n<p><strong>Komunikasi yang Baik</strong></p>\r\n\r\n<p>Berkomunikasi dengan baik adalah kunci dalam membangun hubungan baik dengan klien dan rekan kerja. Mendengarkan dengan seksama dan menjelaskan dengan jelas akan mengurangi risiko kesalahpahaman dan konflik.</p>\r\n\r\n<p><strong>Kepedulian terhadap Detail</strong></p>\r\n\r\n<p>Tukang bangunan yang profesional selalu memperhatikan detail. Ini termasuk mengikuti petunjuk rencana konstruksi dengan cermat, memeriksa pekerjaan mereka untuk memastikan kualitas, dan merawat alat-alat dengan baik.</p>\r\n\r\n<p><strong>Komitmen terhadap Keselamatan</strong></p>\r\n\r\n<p>Keselamatan kerja adalah prioritas utama. Pastikan Anda mengenali risiko di tempat kerja dan selalu mengikuti pedoman keselamatan yang berlaku.</p>\r\n\r\n<p><strong>Integritas dan Etika Kerja</strong></p>\r\n\r\n<p>Selalu bekerja dengan integritas dan etika yang tinggi. Jujur dalam penawaran, biaya, dan penyelesaian proyek adalah kunci untuk membangun reputasi yang baik dalam industri ini.</p>\r\n\r\n<h3>3. Terus Belajar dan Berkembang</h3>\r\n\r\n<p>Industri konstruksi terus berkembang, dan berbagai inovasi baru muncul sepanjang waktu. Untuk menjadi tukang bangunan yang profesional, Anda harus terus belajar dan berkembang. Ini termasuk mengikuti perkembangan terbaru dalam material konstruksi, teknologi, dan metode konstruksi.</p>\r\n\r\n<p>Menghadiri kursus dan pelatihan terkait adalah cara yang baik untuk mendapatkan pengetahuan baru dan meningkatkan keterampilan Anda. Selain itu, bergabung dengan asosiasi profesional tukang bangunan dapat memberikan Anda akses ke sumber daya dan jaringan yang berharga. Ini juga dapat membantu Anda menjalin hubungan dengan profesional lain dalam industri ini.</p>\r\n\r\n<h3>4. Bangun Reputasi yang Kuat</h3>\r\n\r\n<p>Reputasi Anda dalam industri konstruksi adalah aset berharga. Klien dan rekan kerja akan mencari tukang bangunan yang memiliki reputasi baik dan dapat diandalkan. Untuk membangun reputasi yang kuat, penting untuk:</p>\r\n\r\n<p><strong>Menyelesaikan Proyek dengan Baik</strong></p>\r\n\r\n<p>Pastikan setiap proyek selesai dengan baik dan sesuai dengan standar tertinggi. Kualitas pekerjaan Anda akan menjadi bukti reputasi Anda.</p>\r\n\r\n<p><strong>Selalu Terbuka untuk Umpan Balik</strong></p>\r\n\r\n<p>Terima umpan balik dari klien dan rekan kerja dengan baik. Ini adalah cara yang baik untuk terus belajar dan meningkatkan kualitas kerja Anda.</p>\r\n\r\n<p><strong>Penuhi Janji Anda</strong></p>\r\n\r\n<p>Kepatuhan terhadap tenggat waktu dan janji adalah kunci dalam membangun reputasi yang dapat diandalkan.</p>\r\n\r\n<p><strong>Bekerja dengan Kode Etik yang Tinggi</strong></p>\r\n\r\n<p>Selalu berpegang pada kode etik tinggi dalam setiap aspek pekerjaan Anda. Ini akan membantu Anda mempertahankan integritas dan reputasi yang baik.</p>\r\n\r\n<h3>Kesimpulan</h3>\r\n\r\n<p>Menjadi tukang bangunan yang profesional dan sukses bukanlah hal yang mudah. Diperlukan keterampilan teknis, sikap kerja yang baik, komitmen terhadap pembelajaran, dan reputasi yang kuat. Namun, dengan dedikasi dan kerja keras, Anda dapat meraih kesuksesan dalam industri konstruksi yang kompetitif ini. Jangan lupa bahwa setiap proyek yang Anda kerjakan adalah kesempatan untuk memperkuat reputasi Anda dan memajukan karier Anda sebagai seorang tukang bangunan profesional.</p>\r\n'),
(10, 'Komunitas Aplikator dan Tukang Bangunan Indonesia Gnetion Berumur 3 Tahun, Akan Ikut Majukan Pembang', 'artikel_tukang_4.jpg', '<p>Gnetion yang merupakan komunitas aplikator dan tukang bangunan pertama di Indonesia diinisiasi oleh PT Global Indonesia Asia Sejahtera (GIAS Group) telah genap berumur 3 tahun.</p>\r\n\r\n<p>Gnetion yang merupakan komunitas aplikator dan tukang bangunan&nbsp;pertama di Indonesia diinisiasi oleh PT Global Indonesia Asia Sejahtera (GIAS Group) telah genap berumur 3 tahun.</p>\r\n\r\n<p>Untuk memperingati momen tersebut, Gnetion&nbsp;menggelar acara Kongkow Santai atau Kosan Nasional secara online via Zoom dan offline di Cafe Lubuk Linggau, Jumat 8 Maret 2024 lalu. Kegiatan tersebut sukses dihadiri oleh ratusan aplikator.</p>\r\n\r\n<p>Kosan Nasional ini turut dihadiri oleh Head of Marketing Community Department GIAS Group Aditya Pratama Saputra, Branch Manager GIAS Lubuk Linggau Randy Ignatius, dan Mentor Gnetion Academy Liman Sentosa.</p>\r\n\r\n<p>Gnetion kali ini mengusung tema &#39;<em>Magnetic Closing</em>&#39; dan langsung dibawakan oleh mentor Gnetion Academy Liman Sentosa.</p>\r\n\r\n<p>&quot;Para aplikator yang hadir memperoleh banyak<em>&nbsp;insight</em>&nbsp;mengenai cara dalam membangun personal branding. Salah satu caranya adalah dengan melalui media sosial supaya lebih mudah ditemukan oleh calon konsumen,&quot; ujar Liman melalui keterangan tertulis, Kamis (21/3/2024).</p>\r\n\r\n<p>Kemudian, pentingnya<em>&nbsp;personal branding</em>&nbsp;pun telah terbukti oleh salah satu aplikator&nbsp;terbaik Gnetion asal Pontianak, yaitu Rusman Yatim.</p>\r\n\r\n<p>&quot;Selama menjalani karir sebagai aplikator, saya juga aktif dalam mempromosikan kemampuan dan pengalamannya melalui sosial media. Berkat upaya tersebut, kini berhasil memperoleh antrean pekerjaan proyek&nbsp;sampai 6 bulan ke depan,&quot; kata Rusman.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Lakukan Kolaborasi</h2>\r\n\r\n<p><img src=\"https://cdn1-production-images-kly.akamaized.net/CkC9dCGGZOvYnrpU1pZWjfmNsPk=/1280x720/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4781631/original/071736200_1711125099-WhatsApp_Image_2024-03-22_at_10.03.26_b9ec77c7.jpg\" style=\"height:338px; width:600px\" /></p>\r\n\r\n<p>Sementara itu, Head of Marketing Division GIAS Group Randu Arifiant mengatakan, 3tahun sudah GIAS Group dan Gnetion berkolaborasi dalam membangun komunitas aplikator pertama dan terbesar di Indonesia dengan lebih dari 3.000 member aplikator.</p>\r\n\r\n<p>Harapannya, kata dia, Gnetion dapat terus bertumbuh sehingga dapat turut ikut andil dalam memajukan pembangunan nasional.</p>\r\n\r\n<p>&quot;Gnetion hadir tidak hanya untuk mewadahi aplikator untuk saling berbagi pengalaman. Namun, juga turut membangun kompetensi dan skill para aplikator supaya dapat terus bersaing di dunia konstruksi nasional,&quot; ungkap Randu.</p>\r\n\r\n<p>Setelah terselenggara di kota Lubuk Linggau, nantinya Gnetion akan kembali mengadakan Kosan Nasional di 11 kota lainnya sampai akhir tahun 2024. Selain Kosan Nasional akan ada pula rangkaian kegiatan lainnya, yaitu program sertifikasi Gnetion Academy dan Social Media Challenge.</p>\r\n\r\n<p>&quot;Kosan Nasional ini salah satu ajang yang sangat bagus bagi para aplikator untuk saling berbagi ilmu dan meningkatkan kemampuan diri. Alhasil aplikator Gnetion mampu cepat beradaptasi sesuai dengan perkembangan zaman menjadi aplikator yang hebat dan kompeten,&quot; ucap Head of Marketing Community Department GIAS Group Aditya Pratama Saputra.</p>\r\n\r\n<p>&quot;Pada tahun 2024 ini Gnetion Academy mencanangkan target minimal 600 aplikator untuk bisa tersertifikasi oleh Lembaga Sertifikasi Profesi (LSP) yang telah terakreditasi Badan Nasional Sertifikasi Profesi (BNSP) dan Kementerian PUPR,&quot; tutup Aditya.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `nama_booking` varchar(200) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `kabupaten/kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `tanggal_booking` datetime NOT NULL,
  `harga_layanan` varchar(50) NOT NULL,
  `foto_kendala` varchar(200) NOT NULL,
  `wa_booking` varchar(20) NOT NULL,
  `deskripsi_booking` text NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `id_keahlian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `nama_booking`, `alamat_lengkap`, `kabupaten/kota`, `kecamatan`, `tanggal_booking`, `harga_layanan`, `foto_kendala`, `wa_booking`, `deskripsi_booking`, `id_customer`, `id_keahlian`) VALUES
(21, 'bambang pangkas', 'jalan jalan rt1 /rw1', 'ngalor', 'depok', '2025-01-20 00:00:00', '', 'artikel_tukang_4.jpg', '081234567898', 'kondisi keramik rusak parah dan meneglupas sehingga perlu di perbaiki ', 19, 6),
(23, 'bambang pangkas', 'depan gang hijau rt1/rw1 ', 'ngalor', 'depok', '2025-01-21 00:00:00', '', 'artikel_tukang_21.jpg', '081234567898', 'terjadi kerusakan listrik di rumah dan sering mengalami konslet', 19, 1),
(26, 'Dzaky Hamid', 'gang dero rt10 rw 10 depan gang hijau', 'Sleman', 'Depok', '2025-01-20 00:00:00', '', 'listrik.jpeg', '081234567898', 'gardu listrik roboh akibat angin kencang', 17, 1),
(29, 'junaedi', 'Jalan dero rt1 /rw 1depan gang mesjid', 'Sleman', 'Depok', '2025-01-21 00:00:00', '', 'listrik2.jpeg', '08229922876222', 'gardu listrik roboh di depan rumah', 21, 1),
(30, 'Dzaky Hamid', 'depan indomaret rt1 rw 2', 'bantul', 'ngaklik', '2025-05-03 00:00:00', '', 'listrik6.jpeg', '081234567898', 'testing', 17, 1),
(31, 'Dzaky Hamid', 'sads', 'sadasd', 'asdas', '2025-06-25 00:00:00', '160000', '', '081234567898', 'sdsd', 17, 1),
(32, 'Dzaky Hamid', 'sds', 'sadas', 'sdssd', '2025-06-25 00:00:00', '200000', '', '081234567898', 'sdasd', 17, 9),
(33, 'Dzaky Hamid', 'as', 'asd', 'asd', '2025-06-25 00:00:00', '160000', '', '081234567898', 'sadsa', 17, 1),
(34, 'Dzaky Hamid', 'sdsd', 'sadas', 'sdsd', '2025-06-25 00:00:00', '160000', '', '081234567898', 'sadasd', 17, 1),
(35, 'Dzaky Hamid', 'asdasd', 'sads', 'sadsd', '2025-06-25 00:00:00', '160000', '', '081234567898', 'sasd', 17, 1),
(43, 'Dzaky Hamid', 'sdsd', 'sds', 'sdsds', '2025-06-25 00:00:00', '200000', '', '081234567898', 'sdsdsd', 17, 9),
(44, 'Dzaky Hamid', 'g', 's', 'f', '2025-06-25 00:00:00', '160000', '', '081234567898', 'h', 17, 1),
(45, 'Dzaky Hamid', 'assasa', 'sa', 'sd', '2025-06-26 00:00:00', '160000', '', '081234567898', 'dsfs', 17, 1),
(46, 'Dzaky Hamid', 'sdsd', 'sdasd', 'sdsd', '2025-06-30 00:00:00', '250000', '', '081234567898', 'fdfgdf', 17, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `email_customer` varchar(100) NOT NULL,
  `username_customer` varchar(100) NOT NULL,
  `password_customer` varchar(100) NOT NULL,
  `nama_customer` varchar(150) NOT NULL,
  `alamat_customer` text NOT NULL,
  `wa_customer` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `email_customer`, `username_customer`, `password_customer`, `nama_customer`, `alamat_customer`, `wa_customer`) VALUES
(1, 'cus@gmail.com', 'cus_1', 'customer', 'bagus', 'ngalor ngidul', '08xxxxxxxxxx'),
(4, 'agus@gmail.com', 'agus', 'agus', 'agus buta map', 'lombok', '0812345920'),
(8, 'bambang@gmail.com', 'bambang', 'bambang', 'bambang pangkas', 'condong catur rt 10/ rw 10', '08123456789'),
(17, 'dzakyhamid1@gmail.com', 'dzaky', '5ef7e2d382add61d5a4189733c3c20ed1c2c4ca0', 'Dzaky Hamid', 'congcat', '081234567898'),
(18, 'john@gmail.com', 'john plang', 'a51dda7c7ff50b61eaea0444371f4a6a9301e501', 'john celana', 'congcat', '081234567898'),
(19, 'bambang123@gmail.com', 'bambang', '8d915418744c262d862505a7747465e62d918c29', 'bambang pangkas', 'congcat', '081234567898'),
(20, 'dzakyhamid10@gmail.com', 'dzaky_hamid', '5ef7e2d382add61d5a4189733c3c20ed1c2c4ca0', 'Dzaky Hamid', 'condong catur rt 10/ rw 10', '081299873761'),
(21, 'junaedi@gmail.com', 'junaedi', '9bc7fb59de9026b1d9880e62b5143c9e038ccbf3', 'junaedi', 'condong catur rt 10/ rw 10', '08229922876222');

-- --------------------------------------------------------

--
-- Table structure for table `keahlian`
--

CREATE TABLE `keahlian` (
  `id_keahlian` int(11) NOT NULL,
  `nama_keahlian` varchar(100) NOT NULL,
  `harga_per_hari` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keahlian`
--

INSERT INTO `keahlian` (`id_keahlian`, `nama_keahlian`, `harga_per_hari`) VALUES
(1, 'tukang listrik', '160000'),
(2, 'tukang plester', '250000'),
(6, 'Tukang Keramik', '170000'),
(7, 'Tukang Plafon', '200000'),
(8, 'Tukang Pipa', '170000'),
(9, 'Tukang sumur', '200000'),
(10, 'Tukang Kayu', '300000'),
(11, 'Tukang AC', '190000'),
(12, 'tukang baja', '275000');

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id_mitra` int(11) NOT NULL,
  `nama_mitra` varchar(100) NOT NULL,
  `wa_mitra` varchar(15) NOT NULL,
  `usia_mitra` varchar(2) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `kabupaten/kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `pengalaman_mitra` varchar(100) NOT NULL,
  `id_peran` int(11) NOT NULL,
  `id_keahlian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id_mitra`, `nama_mitra`, `wa_mitra`, `usia_mitra`, `alamat_lengkap`, `kabupaten/kota`, `kecamatan`, `pengalaman_mitra`, `id_peran`, `id_keahlian`) VALUES
(16, 'amin', '1234', '50', 'jalan jalan rt1 /rw1', 'ngalor', 'condong catur', '11', 2, 10),
(17, 'manto', '324234234234', '30', 'Jalan Pandega Marta XI No.1, Manggung, Caturtunggal, Kec. Depok, Kab. Sleman, Daerah Istimewa Yogyakarta', 'sleman', 'depok', '10', 1, 7),
(22, 'sutrisna', '082982777111', '42', 'condong catur, gang dero rt10/ rw03', 'Sleman', 'depok', '12', 1, 8),
(23, 'pak agus', '08128899228822', '45', 'jalan, dero gang sadewa rt 1 /rw 03', 'sleman', 'depok', '8', 1, 10),
(24, 'andi', '08229988227722', '41', 'jalan dero gang sadewa rt1 /rw1', 'sleman', 'depok', '12', 1, 11),
(25, 'cecep', '082298822762', '42', 'depan gang pertigaan no1', 'Sleman', 'Depok', '7', 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `peran`
--

CREATE TABLE `peran` (
  `id_peran` int(11) NOT NULL,
  `nama_peran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peran`
--

INSERT INTO `peran` (`id_peran`, `nama_peran`) VALUES
(1, 'Mandor'),
(2, 'Tukang'),
(4, 'asisten mandor');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL,
  `kode_pembayaran` varchar(50) NOT NULL,
  `total_pembayaran` varchar(50) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `status_transaksi` enum('pending','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_booking`, `kode_pembayaran`, `total_pembayaran`, `tanggal_transaksi`, `status_transaksi`) VALUES
(1, 26, 'CT-1750750887', '', '0000-00-00 00:00:00', 'pending'),
(2, 31, 'CT-1750752006', '160000', '0000-00-00 00:00:00', 'pending'),
(3, 32, 'CT-1750752396', '200000', '2025-06-24 10:06:42', 'pending'),
(4, 33, 'CT-1750753213', '160000', '0000-00-00 00:00:00', 'pending'),
(10, 39, 'CT-1750765362', '160000', '0000-00-00 00:00:00', 'pending'),
(14, 43, 'CT-1750779761', '200000', '0000-00-00 00:00:00', 'pending'),
(15, 44, 'CT-685acac0d23b6', '160000', '2025-06-24 17:56:48', 'pending'),
(16, 45, 'CT-1750782129', '160000', '2025-06-24 18:22:09', 'pending'),
(17, 46, 'CT-6860c32e2f8f5', '250000', '2025-06-29 06:38:06', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `jumlah_ulasan` varchar(1) NOT NULL,
  `deskripsi_ulasan` text DEFAULT NULL,
  `waktu_ulasan` datetime(6) NOT NULL,
  `id_customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `jumlah_ulasan`, `deskripsi_ulasan`, `waktu_ulasan`, `id_customer`) VALUES
(30, '5', 'bagus', '2025-01-19 09:34:02.000000', 19),
(31, '3', 'kurang cepat ', '2025-01-19 09:34:09.000000', 19),
(32, '5', 'kerja tukang cepat, dan listrik telah hidup kembali', '2025-01-20 04:30:18.000000', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_customer` (`id_customer`,`id_keahlian`),
  ADD KEY `id_keahlian` (`id_keahlian`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id_keahlian`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id_mitra`),
  ADD KEY `id_peran` (`id_peran`,`id_keahlian`),
  ADD KEY `id_keahlian` (`id_keahlian`);

--
-- Indexes for table `peran`
--
ALTER TABLE `peran`
  ADD PRIMARY KEY (`id_peran`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `id_customer` (`id_customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `id_keahlian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `peran`
--
ALTER TABLE `peran`
  MODIFY `id_peran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_keahlian`) REFERENCES `keahlian` (`id_keahlian`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `mitra`
--
ALTER TABLE `mitra`
  ADD CONSTRAINT `mitra_ibfk_1` FOREIGN KEY (`id_peran`) REFERENCES `peran` (`id_peran`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `mitra_ibfk_2` FOREIGN KEY (`id_keahlian`) REFERENCES `keahlian` (`id_keahlian`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `ulasan_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
