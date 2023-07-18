-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2023 pada 05.45
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resep_makanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ingredients`
--

INSERT INTO `ingredients` (`id`, `name`) VALUES
(0, '10 buah kemiri (dihaluskan) bahan 1 sendok teh ketumbar (dihaluskan) bahan 200 ml air bahan 1 sachet Saus Tiram Selera bahan 2 bungkus Kobe Bumbu Kalasan bahan 2 blok gula merah bahan 1 kg nangka muda bahan 2 sendok makan gula putih bahan 6 lembar daun salam bahan 4 lembar daun jeruk bahan 1 ruas jari lengkuas bahan 750 ml santan sedang'),
(1, '1 ekor ikan bandeng (500 gram) bahan secukupnya garam bahan secukupnya lada bahan 1 bungkus Kobe Tepung Serbaguna Special (75gr) bahan secukupnya minyak goreng bahan 4 buah bawang putih (cincang halus) 4 buah bawang merah (cincang halus) bahan 2 buah Cabai merah (iris tipis) bahan 3 butir kemiri (haluskan) bahan 1 ruas ibu jari jahe (memarkan) bahan 1/2 sendok teh kunyit halus bahan 2 ikat daun kemangi bahan 50 ml air bahan 1 bungkus Kobe Bumbu Kalasan bahan 50 gram kacang tanah goreng'),
(2, '40 gr margarin bahan 40 gr butter bahan 2 butir kuning telur bahan 50 gr gula pasir bahan 3 bungkus Kobe Tepung Pisang Goreng Crispy (75 gr) bahan 1/4 sendok teh baking powder bahan 1 sendok makan coklat bubuk bahan 2 buah loyang ukuran 30 x 30 cm (diolesi minyak dan terigu) bahan 50 gr choco chips bahan secukupnya gula halus'),
(3, '500 gram ayam broiler bahan Bumbu iris halus bahan 4 ruas jari kencur bahan 3 ruas jari kunyit bahan 4 ruas jari lengkuas bahan 4 ruas jari jahe bahan 20 Cabai rawit bahan 15 buah bawang merah bahan 5 buah bawang putih bahan Bumbu halus bahan 3 buah kemiri bahan 1 ruas jari kunyit bahan 1 sdm ketumbar bahan 1 sdt lada bahan Bumbu cemplung bahan 3 sereh geprek'),
(4, '1/2 kg ayam tanpa kulit bahan 1 bungkus Kobe Bumbu Kalasan (60 gr) bahan 1 ruas jari lengkuas bahan 2 batang serai bahan 3 lembar daun salam bahan 4 butir telur ayam (rebus dan kupas) bahan 200 ml santan bahan secukupnya garam bahan 2 sdm bawang goreng bahan 600 ml air');

-- --------------------------------------------------------

--
-- Struktur dari tabel `instructions`
--

CREATE TABLE `instructions` (
  `id` int(11) NOT NULL,
  `recipe_id` int(11) DEFAULT NULL,
  `instruction` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `instructions`
--

INSERT INTO `instructions` (`id`, `recipe_id`, `instruction`) VALUES
(0, 16, 'Masak dan rebus ayam, Kobe Bumbu Kalasan, lengkuas dan serai. Tambahkan daun salam dan masak hingga matang dengan api sedang. langkah Masukkan telur rebus, santan dan garam. langkah Masak hingga matang dengan api kecil sambil diaduk aduk. Cek rasa Angkat dan sisihkan langkah Sajikan Opor Ayam Lebaran dengan taburan bawang goreng diatasnya.'),
(1, 32, 'Tumis Kemiri dan ketumbar halus hingga harum. Masukkan air dan aduk sampai rata.langkah Masukkan Saus Tiram Selera, Kobe Bumbu Kalasan, gula merah dan gula putih. Tambahkan nangka dan masak hingga tercampur rata.langkah Masukkan daun salam, daun jeruk, lengkuas dan tuang santan. Masak dengan api sedang. langkah Masak hingga 3 jam dan aduk sesekali. Apabila air atau kuahnya habis tambahkan lagi dengan santan dan air. Masak kembali sampai berwarna gelap langkah Angkat jika sudah matang dan sajikan.'),
(2, 52, 'Lumuri ikan bandeng dengan garam dan lada. Diamkan 10 menit. Kemudian lumuri dengan tepung kering Kobe Tepung Serbaguna Special hingga rata. Goreng hingga matang. langkah Tumis bumbu halus: bawang merah, bawang putih, kemiri, jahe dan kunyit halus. Masak hingga harum. Lumuri ikan bandeng dengan garam dan lada. Diamkan 10 menit. Kemudian lumuri dengan tepung kering Kobe Tepung Serbaguna Special hingga rata. Goreng hingga matang. langkah Tumis bumbu halus: bawang merah, bawang putih, kemiri, jahe dan kunyit halus. Masak hingga harum. Tambahkan air dan Kobe Bumbu Kalasan. Aduk rata. Tambahkan Cabai. Masak hingga sedikit mengental. langkah Tata ikan goreng di atas piring. Siram dengan kuahnya adan taburkan dengan kacang tanah goreng serta daun kemangi di atasnya. langkah Siap disajikan selagi hangat.'),
(3, 65, 'Kocok margarin, butter, kuning telur dan gula pasir dengan mixer sampai mengembang. Sisihkan. langkah Masukkan Kobe Tepung Pisang Goreng Crispy, baking powder dan coklat bubuk. Aduk hingga rata. langkah Siapkan loyang dan panaskan oven. Ambil adonan, pipihkan dengan roll kayu sampai setebal ½ cm. Cetak dengan cetakan kue, beri choco chips. langkah Panggang selama 35 menit dengan suhu 150 derajat hingga matang. Angkat dan dinginkan. langkah Siap disajikan dengan taburan gula halus diatasnya.'),
(4, 123, 'Bersihkan ayam, marinasi dengan jeruk nipis dan garam 5 menit langkah Tumis bumbu iris, bumbu halus dan bumbu cemplung jadi 1 hingga harum langkah Masukan ayam, aduk hingga ayam tercampur rata dalam bumbu, diamkan sebentar langkah Tambahkan air hingga menutupi ayam, tambahkan garam + gula + kaldu ayam, aduk dan diamkan hingga matang langkah Ayam betutu siap disajikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `description`, `image`) VALUES
(16, 'Opor Ayam Lebaran', 'Opor Ayam Lebaran adalah hidangan khas Indonesia yang biasa disajikan saat perayaan Hari Raya Idul Fitri. Hidangan ini terbuat dari ayam yang dimasak dalam kuah santan yang kaya rempah seperti ketumbar, kunyit, jahe, dan lengkuas. Kuah santan tersebut kemudian diberi tambahan bumbu seperti serai, daun salam, daun jeruk, dan bawang merah. Hidangan ini biasanya disajikan dengan ketupat, nasi putih, atau lontong, serta ditambahkan pelengkap seperti telur rebus, kentang, dan tahu. Opor Ayam Lebaran memiliki cita rasa yang kaya dan lezat, serta menjadi salah satu hidangan tradisional yang paling populer di Indonesia pada saat perayaan Idul Fitri.', 'opor_ayam.JPG'),
(32, 'Gudeg Jogja', 'Gudeg Jogja adalah hidangan khas Yogyakarta yang terbuat dari nangka muda yang dimasak dengan santan, rempah-rempah, dan gula merah dalam waktu yang lama hingga menjadi empuk dan berwarna coklat kehitaman. Hidangan ini biasanya disajikan dengan nasi, telur, ayam atau krecek, dan sambal goreng krecek. Gudeg Jogja memiliki cita rasa yang manis dan gurih, dan menjadi salah satu hidangan ikonik yang paling terkenal dari kota Yogyakarta. Hidangan ini sering dihidangkan di rumah makan dan warung-warung di sekitar kota Yogyakarta dan menjadi salah satu kuliner yang menjadi daya tarik wisatawan yang berkunjung ke kota tersebut.', 'gudeg.JPG'),
(52, 'Bandeng Crispy Bumbu Rujak', 'Bandeng Crispy Bumbu Rujak adalah hidangan laut yang terbuat dari ikan bandeng yang digoreng dengan tepung hingga renyah dan kering. Kemudian, ikan bandeng ini dicampur dengan bumbu rujak tradisional yang terdiri dari cabai, kacang tanah, gula merah, asam jawa, dan bawang putih yang dihaluskan. Hidangan ini biasanya disajikan dengan lalapan seperti daun kemangi, mentimun, dan tomat. Bandeng Crispy Bumbu Rujak merupakan hidangan yang berasal dari daerah Jawa Tengah, terutama di kota Semarang. Hidangan ini memiliki rasa yang unik dengan kombinasi rasa pedas, manis, dan asam yang cocok dinikmati sebagai lauk atau cemilan.', 'bandeng.JPG'),
(65, 'Cookies Choco Chip', 'Cookies Choco Chip adalah kue kering yang terbuat dari adonan dasar tepung terigu, gula, mentega, dan telur yang dicampur dengan potongan cokelat chip kecil-kecil. Kue ini biasanya dipanggang dalam oven hingga matang dan memiliki tekstur yang renyah di luar, namun lembut dan kenyal di dalamnya. Cookies Choco Chip seringkali dijadikan sebagai camilan atau hidangan penutup yang populer, dan menjadi salah satu jenis kue kering yang paling banyak disukai di seluruh dunia. Hidangan ini mudah ditemukan di toko kue, supermarket, ataupun dapat dibuat sendiri di rumah dengan mudah karena bahan-bahannya mudah didapatkan.', 'cookies.JPG'),
(123, 'Ayam Betutu', 'Ayam Betutu adalah hidangan khas Bali yang terdiri dari ayam yang diisi dengan bumbu rempah-rempah tradisional Bali, kemudian dibungkus dengan daun pisang dan dipanggang dalam api arang hingga matang. Hidangan ini biasanya disajikan dengan nasi putih dan sambal matah, dan memiliki rasa yang kaya dan bumbu yang kuat. Ayam Betutu merupakan salah satu hidangan khas Bali yang paling terkenal dan banyak dicari oleh wisatawan yang berkunjung ke pulau Bali.', 'ayam_betutu.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `recipe_ingredients`
--

CREATE TABLE `recipe_ingredients` (
  `recipe_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `recipe_ingredients`
--

INSERT INTO `recipe_ingredients` (`recipe_id`, `ingredient_id`, `quantity`) VALUES
(16, 4, 10),
(32, 0, 12),
(52, 1, 15),
(65, 2, 10),
(123, 3, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'azriel', '$2y$10$ZcifrXJTDKWYvrtb1SayU.ajW6Xei4jAby.VTGF27ExgifXzh34Cu'),
(2, 'yuni', '$2y$10$0HWpsqRmsD.tSDDl10QS7OreU3Njw.CGJS11K5EVRPRJR.YDBrJC6'),
(3, 'afif', '$2y$10$r.QSXLaIevZIncjnmHrMwuWiDtTlqJRdOm9wmX.eJBi6N6JQScm7u');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `instructions`
--
ALTER TABLE `instructions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indeks untuk tabel `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `recipe_ingredients`
--
ALTER TABLE `recipe_ingredients`
  ADD PRIMARY KEY (`recipe_id`,`ingredient_id`),
  ADD KEY `ingredient_id` (`ingredient_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `instructions`
--
ALTER TABLE `instructions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `instructions`
--
ALTER TABLE `instructions`
  ADD CONSTRAINT `instructions_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`);

--
-- Ketidakleluasaan untuk tabel `recipe_ingredients`
--
ALTER TABLE `recipe_ingredients`
  ADD CONSTRAINT `recipe_ingredients_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`),
  ADD CONSTRAINT `recipe_ingredients_ibfk_2` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
