-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Nov 2020 pada 14.54
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbatlet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `usermail` varchar(60) NOT NULL,
  `userpass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `usermail`, `userpass`) VALUES
(1, 'kop13x', 'kop13x@gmail.com', '4e4d6c332b6fe62a63afe56171fd3725'),
(2, 'kopix', 'kopix@gmail.com', 'b5aaf7ff0784814537e8f54343c6b716'),
(3, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `atlet`
--

CREATE TABLE `atlet` (
  `id_atlet` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(45) DEFAULT NULL,
  `kontingen` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(60) NOT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `tinggi` varchar(45) DEFAULT NULL,
  `berat` varchar(45) DEFAULT NULL,
  `foto` varchar(250) NOT NULL,
  `biodata` text,
  `id_cabor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `atlet`
--

INSERT INTO `atlet` (`id_atlet`, `nama`, `tgl_lahir`, `tempat_lahir`, `kontingen`, `alamat`, `email`, `password`, `jenis_kelamin`, `tinggi`, `berat`, `foto`, `biodata`, `id_cabor`) VALUES
(6, 'pande', '2020-11-09', 'los santos', 'singaraja', 'tejakula', 'angga@mail.com', 'e10adc3949ba59abbe56e057f20f883e', 'laki', '173', '60', 'ab6c4-5814891_675d1102-190e-4fee-ae2d-a1a0eada8855_720_720.jpg', '<p>\n	ss</p>\n', 5),
(7, 'jancok', '2020-11-17', 'los santos', 'singaraja', 'tejakula', 'sutaone13@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'laki', '173', '60', '44c72-1044080_1c94277a-66e2-496c-bc69-77ad1fd1b153.jpg', '<p>\n	bangsat</p>\n', 7),
(8, 'adi', '1999-03-20', 'Singaraja', 'Buleleng', 'Pemaron', 'adi@gmail.com', 'd0970714757783e6cf17b26fb8e2298f', 'Laki-laki', '168cm', '65kg', '0ce01-characteristics-of-artificial-grass-for-gate-ball-field-scaled.jpg', '<p>\n	mantapp</p>\n', 59),
(9, 'adas', '2020-11-19', 'asd', 'zcwdczc', 'sczca', 'parjanggi@yahoo.com', '202cb962ac59075b964b07152d234b70', 'Laki-laki', '168cm', '65kg', '682f1-gateball.jpg', '<p>\n	puki</p>\n', 5),
(10, 'kiki', '2020-11-28', 'Singaraja', 'Buleleng', 'jauh', 'asw@gmail.com', '202cb962ac59075b964b07152d234b70', 'Laki-laki', '168cm', '65kg', '1555d-45013187-gateball.jpg', '<p>\n	lalala</p>\n', 11),
(11, 'spele', '2020-11-23', 'welu', 'Buleleng', 'sczca', 'aswi@gmail.com', '202cb962ac59075b964b07152d234b70', 'Perempuan', '168cm', '65kg', 'a4e6f-1-baju.jpg', '<p>\n	wewek</p>\n', 48),
(12, 'kikier', '2020-11-14', 'Singaraja', 'Buleleng', 'Pemaron', 'ark@gmail.com', '202cb962ac59075b964b07152d234b70', 'Perempuan', '168cm', '65kg', 'abb97-2-baju.jpg', '<p>\n	tailor</p>\n', 68);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabor`
--

CREATE TABLE `cabor` (
  `id_cabor` int(11) NOT NULL,
  `nama_cabor` varchar(45) DEFAULT NULL,
  `keterangan` text,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `cabor`
--

INSERT INTO `cabor` (`id_cabor`, `nama_cabor`, `keterangan`, `image`) VALUES
(5, 'Atletik', 'Atletik adalah gabungan dari beberapa jenis olahraga yang secara garis besar dapat dikelompokkan menjadi lari, lempar, dan lompat.', '5bd8c-atletik.jpg'),
(6, 'Balap motor', 'Balap motor adalah olahraga otomotif yang menggunakan sepeda motor. Balap motor, khususnya road race, cukup populer di Indonesia.', '9824f-balapmotorjpg.jpg'),
(7, 'Bola tangan', '<p>\r\n	<span>Bola tangan adalah olahraga beregu di mana dua regu dengan masing-masing 7 pemain berusaha memasukkan sebuah bola ke gawang lawan. Permainan ini mirip dengan sepak bola, tapi cara memindahkan bola adalah dengan tangan pemain, bukan kaki</span></p>\r\n', '5990e-bola-tangan.jpg'),
(10, 'Binaraga', 'Binaraga adalah kegiatan pembentukan tubuh yang melibatkan hipertropi otot intensif. Dengan melakukan latihan beban dan diet protein tinggi secara rutin dan intensif.', '1189f-binaraga.jpg'),
(11, 'Biliard', 'Biiliard sangat dibutuhkan ketahanan dan pemahaman mental yang benar serta harus ditunjang oleh kemampuan fisik yang prima agar mampu berprestasi.', '9c38a-biliard.jpg'),
(13, 'Bola basket', 'Bola basket adalah terdiri atas dua tim beranggotakan masing-masing lima orang yang saling bertanding mencetak poin dengan memasukkan bola ke dalam keranjang lawan.', '15a5f-basket.jpg'),
(14, 'Bola voli', 'Bola voli adalah olahraga permainan yang dimainkan oleh dua grup berlawanan. Masing-masing grup memiliki enam orang pemain', 'bf40c-bolavoli.png'),
(18, 'Catur', 'Catur adalah permainan pikiran yang dimainkan oleh dua orang. Pecatur adalah orang yang memainkan catur, baik dalam pertandingan satu lawan satu maupun satu melawan banyak orang (dalam keadaan informal). Sebelum bertanding, pecatur memilih biji catur yang', '15df1-catur.jpg'),
(20, 'Futsal', 'Futsal adalah permainan bola yang dimainkan oleh dua tim, yang masing-masing beranggotakan lima orang. Tujuannya adalah memasukkan bola ke gawang lawan, dengan memanipulasi bola dengan kaki. Selain lima pemain utama, setiap regu juga diizinkan memiliki pe', '684cc-futsal.jpg'),
(25, 'Judo', 'Judo (bahasa Jepang: 柔道 ) adalah seni bela diri, olahraga, dan filosofi yang berakar dari Jepang. Judo dikembangkan dari seni bela diri kuno Jepang yang disebut Jujutsu. Jujutsu yang merupakan seni bertahan dan menyerang menggunakan tangan kosong maupun s', '14df0-judo.jpg'),
(26, 'Karate', 'Karate (空 手 道) adalah seni bela diri yang berasal dari Jepang. Seni bela diri ini sedikit dipengaruhi oleh Seni bela diri Cina kenpō. Karate dibawa masuk ke Jepang lewat Okinawa dan mulai berkembang di Ryukyu Islands. Seni bela diri ini pertama kali diseb', 'e1449-karate.jpg'),
(28, 'Kempo', 'Kempo adalah nama generik untuk beberapa aliran seni bela diri yang berasal dari Jepang dan banyak menggunakan permainan tangan. Jadi bukan nama satu aliran saja melainkan nama dari banyak aliran dan metode. Arti dari Kempo sendiri adalah beladiri dengan ', 'df28c-kempo.jpg'),
(29, 'Kriket', 'Kriket adalah sebuah olahraga tim yang dimainkan antara dua kelompok yang masing-masing terdiri dari sebelas orang. Bentuk modern kriket berawal dari Inggris, dan olahraga ini populer di negara-negara Persemakmuran. Di beberapa negara di Asia Selatan, mis', 'de4a0-kriket.jpg'),
(32, 'Menembak', 'Olahraga menembak adalah olahraga kompetitif yang melibatkan tes kemahiran (akurasi dan kecepatan) dengan menggunakan berbagai jenis senjata seperti senjata api dan senapan angin.', '2cdc7-menembak.jpg'),
(33, 'Menyelam', 'Olahraga menembak adalah olahraga kompetitif yang melibatkan tes kemahiran (akurasi dan kecepatan) dengan menggunakan berbagai jenis senjata seperti senjata api dan senapan angin.', 'd30ec-menyelam.jpg'),
(35, 'Panjat Tebing', 'Panjat Tebing atau istilah asingnya dikenal dengan Rock Climbing merupakan salah satu dari sekian banyak olahraga alam bebas dan merupakan salah satu bagian dari mendaki gunung yang tidak bisa dilakukan dengan cara berjalan kaki melainkan harus menggunaka', 'd94b6-panjat-tebing.jpg'),
(36, 'Polo Air', 'Polo adalah olahraga beregu yang dimainkan di atas kuda dengan tujuan untuk mencetak gol ke gawang lawan. Pemain mengendalikan bola kayu atau plastik (ukuran 3 - 3,5 inci) menggunakan pemukul panjang yang disebut mallet. Gol dianggap sah apabila bola lewa', '86703-polo-air.jpg'),
(38, 'Panahan', 'Panahan (Inggris:Archery) adalah suatu kegiatan menggunakan busur panah untuk menembakkan anak panah. Bukti-bukti menunjukkan bahwa sejarah panahan telah dimulai sejak 5.000 tahun yang lalu yang awalnya digunakan untuk berburu dan kemudian berkembang seba', 'f1462-panahan.jpg'),
(40, 'Petanque', 'Pétanque (diucapkan [pe.tɑ̃ːk] dalam bahasa Perancis) adalah suatu bentuk permainan boules yang tujuannya melempar bola besi sedekat mungkin dengan bola kayu yang disebut cochonnet dan kaki harus berada di lingkaran kecil. Permainan ini biasa dimainkan di', '5a0e3-pentaque.jpg'),
(42, 'Renang', 'Renang adalah olahraga yang melombakan kecepatan atlet renang dalam berenang. Gaya renang yang diperlombakan adalah gaya bebas, gaya kupu-kupu, gaya punggung, dan gaya dada. Perenang yang memenangkan lomba renang adalah perenang yang menyelesaikan jarak l', 'cf7ef-renang.jpg'),
(43, 'Rugby', 'Sepak bola rugbi (bahasa Inggris: Rugby) merupakan sejenis permainan sepak bola tim yang dimainkan oleh dua tim. Setiap tim mencoba mencetak skor dengan cara menyepak, melontar, atau membawa bola sehingga mereka dapat menyepak untuk melepaskan gol lawan a', '3bf3b-rugby.jpg'),
(44, 'Pencak silat', '<p>\r\n	<span>Pencak silat atau silat adalah suatu seni bela diri tradisional yang berasal dari Kepulauan Nusantara. Seni bela diri ini secara luas dikenal di Indonesia, Malaysia, Brunei, dan Singapura, Filipina selatan, dan Thailand selatan sesuai dengan penyebaran berbagai suku bangsa Nusantara.</span></p>\r\n', '09757-seni-bela-diri.jpg'),
(45, 'Sepak bola', 'Sepak bola adalah cabang olahraga yang menggunakan bola yang umumnya terbuat dari bahan kulit dan dimainkan oleh dua tim yang masing-masing beranggotakan 11 (sebelas) orang pemain inti dan beberapa pemain cadangan. Memasuki abad ke-21, olahraga ini telah ', '39efa-sepakbola.jpg'),
(46, 'Sepak takraw', 'Sepak takraw adalah jenis olahraga campuran dari sepak bola dan bola voli, dimainkan di lapangan ganda bulu tangkis, dan pemain tidak boleh menyentuh bola dengan tangan. Kejuaraan paling bergengsi dalam cabang ini adalah King''s Cup World Championships, ya', 'c5864-sepaktakraw.jpg'),
(48, 'Senam', 'Senam merupakan suatu cabang olahraga yang melibatkan performa gerakan yang membutuhkan kekuatan, kecepatan dan keserasian gerakan fisik yang teratur. Bentuk modern dari senam ialah : Palang tak seimbang, balok keseimbangan, senam lantai. Bentuk-bentuk te', '47cfb-senam.jpg'),
(50, 'Sofbol', 'Sofbol atau dikenal dengan softball adalah olahraga bola beregu yang terdiri dari dua tim. Permainan sofbol lahir di Amerika Serikat, diciptakan oleh George Hancock di kota Chicago pada tahun 1887. Sofbol merupakan perkembangan dari olahraga sejenis yaitu', '3c392-softball.jpg'),
(54, 'Taekwondo', 'Taekwondo (juga dieja Tae Kwon Do atau Taekwon-Do) adalah seni bela diri asal Korea yang juga sebagai olahraga nasional Korea. Ini adalah salah satu seni bela diri populer di dunia yang dipertandingkan di Olimpiade.', 'e37ef-taekwondo.jpg'),
(55, 'Tenis', 'Tenis adalah olahraga yang biasanya dimainkan antara dua pemain atau antara dua pasangan masing-masing dua pemain. Setiap pemain menggunakan raket untuk memukul bola karet. Tujuan permainan adalah memainkan bola dengan cara tertentu sehingga pemain lawan ', 'e390e-tenis.jpg'),
(56, 'Tenis meja', 'enis meja, atau ping pong (sebuah merek dagang), adalah suatu olahraga raket yang dimainkan oleh dua orang (untuk tunggal) atau dua pasangan (untuk ganda) yang berlawanan. Di Republik Rakyat Tiongkok, nama resmi olahraga ini ialah "bola ping pong" (Tiongh', '46783-tenismeja.jpg'),
(58, 'Wushu', 'Wushu (武術 atau 武术; bahasa Tionghoa: wǔshù) secara harafiah berarti "seni bertempur/bela diri". Ini merupakan istilah yang lebih benar dibanding dengan istilah yang lebih terkenal tetapi salah penggunaannya kung fu, yang berarti "ahli" dalam bidang tertent', 'c3377-wushu.jpg'),
(59, 'Gateball', '<p>\r\n	<span>Gateball adalah olahraga modifikasi permainan croquet, yang menggunakan palu untuk memukul bola. Olahraga ini tidak mengenal batas tertentu sehingga tergolong sebagai barrier-free sport. Olahraga ini pertama kali dikenalkan di Jepang, kemudian menyebar ke seluruh dunia.</span></p>\r\n', '3a875-gateball.jpg'),
(60, 'Bridge', '<p>\r\n	<span>Bridge atau contract bridge adalah permainan kartu yang mengandalkan baik kemampuan bermain maupun keuntungan. Empat pemain duduk saling berhadapan dengan pasangannya di satu meja.</span></p>\r\n', '6a6d7-bridge.jpg'),
(61, 'Bulu Tangkis', '<p>\r\n	<span>Bulu tangkis adalah suatu olahraga yang menggunakan alat yang berbentuk bulat dengan memiliki rongga rongga di bagian pemukulnya. Dan memiliki gagang. Alat ini dikenal dengan nama raket yang dimainkan oleh dua orang atau dua pasangan yang saling berlawanan</span></p>\r\n', '781af-bulutangkis.jpg'),
(62, 'Dansa', '<p>\r\n	<span>Dansa adalah kompetisi yang dipertandingkan di Ruangan dansa, untuk demonstrasi dan tetap. Ada juga dansa kursi roda, dimana ini diperuntukkan untuk atlit - atlit difabel. Pertandingan dansa disponsori dan diorganisasikan oleh World DanceSport Federation</span></p>\r\n', 'a311a-dansa.jpg'),
(63, 'Cricket', '<p>\r\n	<span>Cricket adalah sebuah olahraga tim yang dimainkan antara dua kelompok yang masing-masing terdiri dari sebelas orang. Bentuk modern kriket berawal dari Inggris.</span></p>\r\n', 'add8e-cricket.jpeg'),
(64, 'Gulat', '<p>\r\n	<span>Gulat adalah kontak fisik antara dua orang, di mana salah seorang pegulat harus menjatuhkan atau dapat mengontrol musuh mereka. Teknik fisik yang ditunjukkan dalam gulat adalah joint lock, Clinch fighting, Grappling hold, dan Leverage.</span></p>\r\n', '6dd9f-gulat.jpg'),
(65, 'Tarung Derajat', '<p>\r\n	<span>Tarung Derajat adalah seni bela diri khas suku Sunda berasal dari Indonesia yang diciptakan oleh Achmad Dradjat. Ia mengembangkan teknik melalui pengalamannya bertarung di jalanan pada tahun 1960-an di Bandung.</span></p>\r\n', '3c990-tarung-derajat.jpeg'),
(66, 'Tinju', '<p>\r\n	<span>Tinju adalah olahraga dan seni bela diri yang menampilkan dua orang partisipan dengan berat yang serupa bertanding satu sama lain dengan menggunakan tinju mereka dalam rangkaian pertandingan berinterval satu atau tiga menit yang disebut ronde.</span></p>\r\n', 'a54f7-tinju.jpg'),
(67, 'Woodball', '<p>\r\n	<span>Woodball adalah olahraga yang dimainkan dengan cara dipukul menggunakan tongkat seperti palu ke dalam lubang. Permainan ini dapat dimainkan di lapangan, pasir, maupun dalam ruangan. Cabang olahraga ini dipertandingkan pada Pesta Olahraga Pantai Asia 2008</span></p>\r\n', '465c5-woodball.jpg'),
(68, 'Softball', '<p>\r\n	<span>Sofbol adalah olahraga bola beregu yang terdiri dari dua tim. Permainan sofbol lahir di Amerika Serikat, diciptakan oleh George Hancock di kota Chicago pada tahun 1887. Sofbol merupakan perkembangan dari olahraga sejenis yaitu bisbol atau hardball.</span></p>\r\n', '6e4af-softball.jpg'),
(69, 'Kabaddi', '<p>\r\n	<span>Kabaddi adalah olahraga yang berasal dari Tamil Nadu, India. Olahraga ini awalnya merupakan permainan untuk mempersiapkan tentara. Olahraga ini merupakan olahraga nasional Bangladesh, dan olahraga negara bagian Punjab, Tamil Nadu dan Andhra Pradesh di India.</span></p>\r\n', 'a5706-kabaddi.jpg'),
(70, 'Yongmoodo', '<p>\r\n	<span>Yongmoodo adalah salah satu jenis bela diri yang berasal dari Korea Selatan. Bela diri ini merupakan gabungan beberapa bela diri. Di Indonesia, yongmoodo menjadi bela diri wajib bagi anggota Tentara Nasional Indonesia.</span></p>\r\n', '6eac0-yongmoodo.jpg'),
(71, 'Muay Thai ', '<p>\r\n	Muay Thai adalah olahraga nasional Kerajaan Thai dan turunan dari bela diri kuno<em> Muay Boran</em>. Sekilas Muay Thai dan Kickboxing memiliki teknik pertarungan yang hampir sama.</p>\r\n', 'abdba-muay_thai.jpg'),
(72, 'Selam', '<p>\r\n	Olahraga selam saat ini lebih dikenal dengan sebutan olahraga menyelam atau diving. Olahraga renang yang satu ini sama dengan kegiatan renang pada umumnya, dilakukan di dalam air dan umumnya dilakukan di dalam perairan dalam (laut)</p>\r\n', 'c40a2-selam.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) COLLATE utf8_swedish_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('50amog2u5hlce9nvc9ikkdcgq4urdmkq', '::1', 1605174347, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353137343236323b757365726d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b75736572706173737c733a33323a223231323332663239376135376135613734333839346130653461383031666333223b6c6f676765645f696e7c623a313b),
('6t3misd62hn3k320nqbqek8v79gou7gf', '127.0.0.1', 1605072845, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353037323834333b),
('95a40hv6j78ti9khnr4bd6j5728vg6ki', '::1', 1605158238, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353135383134353b757365726d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b75736572706173737c733a33323a223231323332663239376135376135613734333839346130653461383031666333223b6c6f676765645f696e7c623a313b),
('ao9i5f4trc6bp34qnv62aurrp65fkvcm', '::1', 1604971376, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630343937313337363b),
('d6ed3na6p8gd7nemlvuf778fe3qnhkvq', '::1', 1605025423, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353032353432333b),
('hv50cb8ght7789hevln1302t7b4b4cm3', '::1', 1605138781, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353133383637363b757365726d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b75736572706173737c733a33323a223231323332663239376135376135613734333839346130653461383031666333223b6c6f676765645f696e7c623a313b),
('ia0tvibo6ltd4r680joud21592op7qnu', '::1', 1604998241, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630343939383034313b757365726d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b75736572706173737c733a33323a223231323332663239376135376135613734333839346130653461383031666333223b6c6f676765645f696e7c623a313b),
('imalk0ct0q11vruf9q18kp9vb5agt0n0', '::1', 1605189065, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353138383931353b757365726d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b75736572706173737c733a33323a223231323332663239376135376135613734333839346130653461383031666333223b6c6f676765645f696e7c623a313b),
('ncd2c953ekkogv5pi5g0dlj015i3ehtl', '::1', 1604998492, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630343939383333313b),
('oh4m4tal2m5mfkkccko59hb1naqebbq9', '::1', 1605025244, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353032353234333b),
('rbkamrh0lbbjsflelurh8nm0jqueaijp', '::1', 1605136429, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353133363337373b757365726d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b75736572706173737c733a33323a223231323332663239376135376135613734333839346130653461383031666333223b6c6f676765645f696e7c623a313b),
('rq74dhda4nh7retkgiva7fkekqb5vhc3', '::1', 1605095873, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353039353834333b),
('s99odgdjuaas713enoqsrjpch8odd1ih', '127.0.0.1', 1605079245, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353037383939353b757365726d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b75736572706173737c733a33323a223231323332663239376135376135613734333839346130653461383031666333223b6c6f676765645f696e7c623a313b),
('sbpe89p6lpoo55chc3h7pt3h4r4j9fpt', '::1', 1604966304, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630343936363230363b656d61696c7c733a31343a22616e676761406d61696c2e636f6d223b70617373776f72647c733a33323a226531306164633339343962613539616262653536653035376632306638383365223b6c6f676765645f696e7c623a313b),
('sct12hjiaec28dslaojrdb8enjqlk89u', '::1', 1605102717, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353130323531373b757365726d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b75736572706173737c733a33323a223231323332663239376135376135613734333839346130653461383031666333223b6c6f676765645f696e7c623a313b),
('sgftphb1h2bi0n9rugk6ljp5o6m3umgo', '::1', 1604963854, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630343936333835343b656d61696c7c733a31343a22616e676761406d61696c2e636f6d223b70617373776f72647c733a33323a226531306164633339343962613539616262653536653035376632306638383365223b6c6f676765645f696e7c623a313b),
('t41klspolqrcmtm29v1g1nn2t4alih2m', '::1', 1604964190, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630343936343138363b656d61696c7c733a31343a22616e676761406d61696c2e636f6d223b70617373776f72647c733a33323a226531306164633339343962613539616262653536653035376632306638383365223b6c6f676765645f696e7c623a313b),
('ucrn9e825io11ls2ar5bap7kms4vdpuf', '::1', 1605073437, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353037333433373b);

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `protein` int(11) NOT NULL,
  `lemak` int(11) NOT NULL,
  `karbohidrat` int(11) NOT NULL,
  `sodium` int(11) NOT NULL,
  `pufa` int(11) NOT NULL,
  `kolestrol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama`, `protein`, `lemak`, `karbohidrat`, `sodium`, `pufa`, `kolestrol`) VALUES
(1, 'Roti Bakar Meises', 8600, 4300, 52500, 579000, 700, 0),
(2, 'Roti Coklat', 8600, 4300, 52500, 579000, 700, 0),
(3, 'Godoh Embon', 8600, 4300, 52500, 579000, 700, 0),
(4, 'Lukis', 8600, 4300, 52500, 579000, 700, 0),
(5, 'Bantal', 8600, 4300, 52500, 579000, 700, 0),
(6, 'Onde onde', 8600, 4300, 52500, 579000, 700, 0),
(7, 'Batun Duren', 8600, 4300, 52500, 579000, 700, 0),
(8, 'Makaroni', 12000, 70800, 1800, 0, 800, 3000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_makanan_atlet`
--

CREATE TABLE `menu_makanan_atlet` (
  `id_menu` int(11) NOT NULL,
  `id_atlet` int(11) NOT NULL,
  `id_makanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_makanan_atlet`
--

INSERT INTO `menu_makanan_atlet` (`id_menu`, `id_atlet`, `id_makanan`) VALUES
(45, 6, 2),
(46, 6, 4),
(47, 7, 1),
(48, 7, 3),
(49, 8, 8),
(50, 8, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nama_prestasi` varchar(100) DEFAULT NULL,
  `nama_prestasi1` varchar(100) CHARACTER SET armscii8 DEFAULT NULL,
  `nama_prestasi2` varchar(100) CHARACTER SET armscii8 DEFAULT NULL,
  `medali` varchar(45) DEFAULT NULL,
  `mendali1` varchar(45) CHARACTER SET armscii8 DEFAULT NULL,
  `mendali2` varchar(45) CHARACTER SET armscii8 DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `tahun1` year(4) DEFAULT NULL,
  `tahun2` year(4) DEFAULT NULL,
  `id_atlet` int(11) NOT NULL,
  `id_turnamen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nama_prestasi`, `nama_prestasi1`, `nama_prestasi2`, `medali`, `mendali1`, `mendali2`, `tahun`, `tahun1`, `tahun2`, `id_atlet`, `id_turnamen`) VALUES
(1, 'popok', NULL, NULL, 'emas', NULL, NULL, 2019, 0000, 0000, 7, 3),
(2, 'pipik', NULL, NULL, 'Emas', NULL, NULL, 2019, 0000, 0000, 7, 8),
(3, 'Juara 3 beregu porprov', 'juara 2 double porprov', 'juara 2 BBPJN', 'perunggu', 'perak', 'perak', 2015, 2017, 2019, 10, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `turnamen`
--

CREATE TABLE `turnamen` (
  `id_turnamen` int(11) NOT NULL,
  `nama_turnamen` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `turnamen`
--

INSERT INTO `turnamen` (`id_turnamen`, `nama_turnamen`) VALUES
(1, 'Olimpiade'),
(2, 'Kejuaraan Dunia'),
(3, 'Asian Games'),
(4, 'Thomas Cup'),
(5, 'Sudirman Cup'),
(6, 'Kejuaraan Asia'),
(7, 'SEA Games'),
(8, 'Kejuaraan AFF CUP'),
(9, 'Liga Indonesia'),
(10, 'Liga Super Indonesia'),
(11, 'Asean PARA Games'),
(12, 'PORPROV'),
(13, 'BALI INTERNASIONAL SPORT WEEK'),
(14, 'KEJURNAS'),
(15, 'PON'),
(16, 'PIALA BBPJN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`usermail`);

--
-- Indexes for table `atlet`
--
ALTER TABLE `atlet`
  ADD PRIMARY KEY (`id_atlet`),
  ADD KEY `fk_atlet_cabor1_idx` (`id_cabor`);

--
-- Indexes for table `cabor`
--
ALTER TABLE `cabor`
  ADD PRIMARY KEY (`id_cabor`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `menu_makanan_atlet`
--
ALTER TABLE `menu_makanan_atlet`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `fk_prestasi_atlet1_idx` (`id_atlet`),
  ADD KEY `fk_prestasi_turnamen1_idx` (`id_turnamen`);

--
-- Indexes for table `turnamen`
--
ALTER TABLE `turnamen`
  ADD PRIMARY KEY (`id_turnamen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `atlet`
--
ALTER TABLE `atlet`
  MODIFY `id_atlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `cabor`
--
ALTER TABLE `cabor`
  MODIFY `id_cabor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `menu_makanan_atlet`
--
ALTER TABLE `menu_makanan_atlet`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `turnamen`
--
ALTER TABLE `turnamen`
  MODIFY `id_turnamen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `atlet`
--
ALTER TABLE `atlet`
  ADD CONSTRAINT `atlet_ibfk_1` FOREIGN KEY (`id_cabor`) REFERENCES `cabor` (`id_cabor`);

--
-- Ketidakleluasaan untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `fk_prestasi_atlet1` FOREIGN KEY (`id_atlet`) REFERENCES `atlet` (`id_atlet`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prestasi_turnamen1` FOREIGN KEY (`id_turnamen`) REFERENCES `turnamen` (`id_turnamen`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
