-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 07:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinola`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id_admin` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_anggota`
--

CREATE TABLE `data_anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` longtext NOT NULL,
  `ktp_anggota` longtext NOT NULL,
  `jns_kelamin_anggota` longtext NOT NULL,
  `gol_darah_anggota` longtext NOT NULL,
  `tmpt_lahir_anggota` longtext NOT NULL,
  `tgl_lahir_anggota` date NOT NULL,
  `tgl_pndftrn_anggota` date NOT NULL,
  `alamat_anggota` longtext NOT NULL,
  `telepon_anggota` longtext NOT NULL,
  `pndh_kota_anggota` longtext NOT NULL,
  `pndh_gereja_anggota` longtext NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_anggota`
--

INSERT INTO `data_anggota` (`id_anggota`, `nama_anggota`, `ktp_anggota`, `jns_kelamin_anggota`, `gol_darah_anggota`, `tmpt_lahir_anggota`, `tgl_lahir_anggota`, `tgl_pndftrn_anggota`, `alamat_anggota`, `telepon_anggota`, `pndh_kota_anggota`, `pndh_gereja_anggota`, `id_user`) VALUES
(20, 'Vinola Ade', '../data_gambar/ktp_jemaat/202203270832download.png', 'Perempuan', 'A', 'Banyumas', '2010-01-10', '2022-03-27', 'Banyumas', '08912312313', 'Cilacap', 'Cilacap', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_kelahiran`
--

CREATE TABLE `data_kelahiran` (
  `id_kelahiran` int(11) NOT NULL,
  `nama_kelahiran` longtext NOT NULL,
  `surat_lampiran_kelahiran` longtext NOT NULL,
  `jns_kelamin_kelahiran` longtext NOT NULL,
  `tmpt_lahir_kelahiran` longtext NOT NULL,
  `tgl_lahir_kelahiran` longtext NOT NULL,
  `ayah_kelahiran` longtext NOT NULL,
  `ibu_kelahiran` longtext NOT NULL,
  `saksi_1_baptisan_kelahiran` longtext NOT NULL,
  `saksi_2_baptisan_kelahiran` longtext NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kelahiran`
--

INSERT INTO `data_kelahiran` (`id_kelahiran`, `nama_kelahiran`, `surat_lampiran_kelahiran`, `jns_kelamin_kelahiran`, `tmpt_lahir_kelahiran`, `tgl_lahir_kelahiran`, `ayah_kelahiran`, `ibu_kelahiran`, `saksi_1_baptisan_kelahiran`, `saksi_2_baptisan_kelahiran`, `id_user`) VALUES
(5, 'Vinola', '../data_gambar/surat_lampiran_kelahiran/202203270836download.png', 'Perempuan', 'Banyumas', '2022-03-28', 'Ade', 'Vinol', 'Vanol', 'Vinal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_pernikahan`
--

CREATE TABLE `data_pernikahan` (
  `id_pernikahan` int(11) NOT NULL,
  `tgl_pernikahan` date NOT NULL,
  `suami_nama_pernikahan` longtext NOT NULL,
  `suami_ktp_pernikahan` longtext NOT NULL,
  `suami_tmpt_lahir_pernikahan` longtext NOT NULL,
  `suami_tgl_lahir_pernikahan` date NOT NULL,
  `istri_nama_pernikahan` longtext NOT NULL,
  `istri_ktp_pernikahan` longtext NOT NULL,
  `istri_tmpt_lahir_pernikahan` longtext NOT NULL,
  `istri_tgl_lahir_pernikahan` date NOT NULL,
  `saksi_pernikahan` longtext NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pernikahan`
--

INSERT INTO `data_pernikahan` (`id_pernikahan`, `tgl_pernikahan`, `suami_nama_pernikahan`, `suami_ktp_pernikahan`, `suami_tmpt_lahir_pernikahan`, `suami_tgl_lahir_pernikahan`, `istri_nama_pernikahan`, `istri_ktp_pernikahan`, `istri_tmpt_lahir_pernikahan`, `istri_tgl_lahir_pernikahan`, `saksi_pernikahan`, `id_user`) VALUES
(3, '2022-03-27', 'Ade Vinola', '../data_gambar/ktp_pernikahan/202203270835download.png', 'Cilacap', '2021-06-08', 'Vinola Ade', '../data_gambar/ktp_pernikahan/202203270835Pikachu-Pokemon-No-Background-Clip-Art.png', 'Banyumas', '2021-02-02', 'Ade', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id_user` int(11) NOT NULL,
  `username_user` longtext NOT NULL,
  `password_user` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id_user`, `username_user`, `password_user`) VALUES
(1, 'vinola', 'vinola');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id_dept` int(11) NOT NULL,
  `isi_pembinaan_keluarga` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id_dept`, `isi_pembinaan_keluarga`) VALUES
(1, '<p>sad</p>');

-- --------------------------------------------------------

--
-- Table structure for table `dep_rutemi`
--

CREATE TABLE `dep_rutemi` (
  `id_rutemi` int(11) NOT NULL,
  `judul_rutemi` text NOT NULL,
  `tanggal_rutemi` date NOT NULL DEFAULT current_timestamp(),
  `gambar_rutemi` longtext NOT NULL,
  `isi_rutemi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dep_rutemi`
--

INSERT INTO `dep_rutemi` (`id_rutemi`, `judul_rutemi`, `tanggal_rutemi`, `gambar_rutemi`, `isi_rutemi`) VALUES
(9, 'Apa Makna Kehidupan Sejati? Perkataan Terakhir Seorang Raja Memberikan Inspirasi', '2022-03-08', '../data_gambar/rutemi/202203271047202203270903how-to-repent-no-longer-sin-1.png', '<p>Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.<br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `gambar_galeri` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `gambar_galeri`) VALUES
(3, '../data_gambar/galeri/20220214084402.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hm_artalk`
--

CREATE TABLE `hm_artalk` (
  `id_artalk` int(11) NOT NULL,
  `judul_artalk` text NOT NULL,
  `tanggal_artalk` date NOT NULL DEFAULT current_timestamp(),
  `gambar_artalk` longtext NOT NULL,
  `isi_artalk` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hm_artalk`
--

INSERT INTO `hm_artalk` (`id_artalk`, `judul_artalk`, `tanggal_artalk`, `gambar_artalk`, `isi_artalk`) VALUES
(9, 'Cara Bertobat dan Tidak Berbuat Dosa Lagi: Aku Menemukan Jalan', '2022-03-08', '../data_gambar/artalk/202203270903how-to-repent-no-longer-sin-1.jpg', '<p>Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.<br></p>'),
(10, 'Cara Bertobat dan Tidak Berbuat Dosa Lagi: Aku Menemukan Jalan', '2022-03-10', '../data_gambar/artalk/202203270903how-to-repent-no-longer-sin-1.jpg', '<p>Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.<br></p>'),
(11, 'Cara Bertobat dan Tidak Berbuat Dosa Lagi: Aku Menemukan Jalan', '2022-04-05', '../data_gambar/artalk/202203270903how-to-repent-no-longer-sin-1.jpg', '<p>Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.<br></p>'),
(12, 'Cara Bertobat dan Tidak Berbuat Dosa Lagi: Aku Menemukan Jalan', '2022-03-08', '../data_gambar/artalk/202207301132blog-6.jpg', '<p>Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.<br></p>'),
(13, 'Cara Bertobat dan Tidak Berbuat Dosa Lagi: Aku Menemukan Jalan', '2022-06-22', '../data_gambar/artalk/202207301129blog-img-1.jpg', '<p>Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.<br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `info_khokeg`
--

CREATE TABLE `info_khokeg` (
  `id_khokeg` int(11) NOT NULL,
  `judul_khokeg` longtext NOT NULL,
  `tanggal_khokeg` date NOT NULL DEFAULT current_timestamp(),
  `isi_khokeg` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_khokeg`
--

INSERT INTO `info_khokeg` (`id_khokeg`, `judul_khokeg`, `tanggal_khokeg`, `isi_khokeg`) VALUES
(2, 'Ibadah Doa Malam/Syafaat', '2022-02-14', '<p>Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.<br></p>'),
(3, 'Ibadah Doa Minggu', '2022-03-09', '<p>Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.<br></p>'),
(4, 'Ibadah Doa Minggu', '2022-04-14', '<p>Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.<br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `info_uut`
--

CREATE TABLE `info_uut` (
  `id_uut` int(11) NOT NULL,
  `judul_uut` text NOT NULL,
  `tanggal_uut` date NOT NULL DEFAULT current_timestamp(),
  `gambar_uut` longtext NOT NULL,
  `isi_uut` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_uut`
--

INSERT INTO `info_uut` (`id_uut`, `judul_uut`, `tanggal_uut`, `gambar_uut`, `isi_uut`) VALUES
(6, 'Vinola Ade 12 Th', '2022-07-31', '../data_gambar/uut/202203271104how-to-repent-no-longer-sin-1.jpg', '<p>Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.<br></p>'),
(7, 'Vinola Ade 12 Th', '2022-07-01', '../data_gambar/uut/202207301128JAYX2237.jpg', '<p>Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.<br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama_komentar` text NOT NULL,
  `no_wa_komentar` text NOT NULL,
  `pesan_komentar` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama_komentar`, `no_wa_komentar`, `pesan_komentar`) VALUES
(1, 'komentar1', '08962', 'komentar1'),
(2, 'komentar2', '08123', 'komentar2');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `nama_website` text NOT NULL,
  `favicon_website` text NOT NULL,
  `logo_website` text NOT NULL,
  `alamat_website` text NOT NULL,
  `tentang_website` text NOT NULL,
  `no_wa` text NOT NULL,
  `email_website` text NOT NULL,
  `link_video` longtext NOT NULL,
  `link_twitter` text NOT NULL,
  `link_facebook` text NOT NULL,
  `link_instagram` text NOT NULL,
  `link_youtube` text NOT NULL,
  `link_gmaps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `nama_website`, `favicon_website`, `logo_website`, `alamat_website`, `tentang_website`, `no_wa`, `email_website`, `link_video`, `link_twitter`, `link_facebook`, `link_instagram`, `link_youtube`, `link_gmaps`) VALUES
(1, 'GPdI Parakletos Purwokerto', '../data_gambar/favicon/202202130938Logo_GPdI.png', '../data_gambar/logo/202202130938Logo_GPdI.png', 'Gg. KR. Anyar II No.585 Kel, Pejagalan, Purwokerto Kidul, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53147', '<p>Website gpdiparakletospurwokerto.com adalah media untuk menyampaikan sikap, informasi resmi, serta menjadi media gereja dan mitra dalam berkontribusi bagi pergumulan bangsa dan negara.</p>', '0812-1531-3733', 'gpdiparakletospurwokerto@gmail.com', 'https://www.youtube.com/embed/ej9pKhPubRo', 'https://web.facebook.com/Wijaya1549c', 'https://web.facebook.com/Wijaya1549c', 'https://web.facebook.com/Wijaya1549c', 'https://www.youtube.com/channel/UC3ce_14FamUyctdA6g0gZhw/featured', 'https://www.google.com/maps/place/GPdI+Parakletos+Purwokerto/@-7.4301046,109.2543463,15z/data=!4m5!3m4!1s0x0:0x5a9a38bfae308d7f!8m2!3d-7.4301046!4d109.2543463');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `gambar_slider` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `gambar_slider`) VALUES
(7, '../data_gambar/slider/202202130853125191375_2762224714052171_4663030184042112636_n.png'),
(10, '../data_gambar/slider/202207301130blog-img-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tk`
--

CREATE TABLE `tk` (
  `id_tk` int(11) NOT NULL,
  `isi_sejarah` longtext NOT NULL,
  `isi_visi_misi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tk`
--

INSERT INTO `tk` (`id_tk`, `isi_sejarah`, `isi_visi_misi`) VALUES
(1, 'Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.Nullam sed nisi arcu condimentum varius. Etiam malesuada velit bibeum donec sit amet orci augue tristique eros amet risus.', '<p style=\"\"><b>Visi : Gereja yang bertumbuh dan melayani dalam keragaman</b></p><p style=\"\"><b>Misi :&nbsp;Mewujudkan Ibadah, Pengajaran, Kesaksian, Persekutuan dan Pelayanan yang partisipatif &amp; inovatif</b></p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_anggota`
--
ALTER TABLE `data_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `data_kelahiran`
--
ALTER TABLE `data_kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `data_pernikahan`
--
ALTER TABLE `data_pernikahan`
  ADD PRIMARY KEY (`id_pernikahan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id_dept`);

--
-- Indexes for table `dep_rutemi`
--
ALTER TABLE `dep_rutemi`
  ADD PRIMARY KEY (`id_rutemi`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `hm_artalk`
--
ALTER TABLE `hm_artalk`
  ADD PRIMARY KEY (`id_artalk`);

--
-- Indexes for table `info_khokeg`
--
ALTER TABLE `info_khokeg`
  ADD PRIMARY KEY (`id_khokeg`);

--
-- Indexes for table `info_uut`
--
ALTER TABLE `info_uut`
  ADD PRIMARY KEY (`id_uut`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `tk`
--
ALTER TABLE `tk`
  ADD PRIMARY KEY (`id_tk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_anggota`
--
ALTER TABLE `data_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `data_kelahiran`
--
ALTER TABLE `data_kelahiran`
  MODIFY `id_kelahiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_pernikahan`
--
ALTER TABLE `data_pernikahan`
  MODIFY `id_pernikahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id_dept` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dep_rutemi`
--
ALTER TABLE `dep_rutemi`
  MODIFY `id_rutemi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hm_artalk`
--
ALTER TABLE `hm_artalk`
  MODIFY `id_artalk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `info_khokeg`
--
ALTER TABLE `info_khokeg`
  MODIFY `id_khokeg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `info_uut`
--
ALTER TABLE `info_uut`
  MODIFY `id_uut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tk`
--
ALTER TABLE `tk`
  MODIFY `id_tk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_anggota`
--
ALTER TABLE `data_anggota`
  ADD CONSTRAINT `data_anggota_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `data_user` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `data_kelahiran`
--
ALTER TABLE `data_kelahiran`
  ADD CONSTRAINT `data_kelahiran_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `data_user` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `data_pernikahan`
--
ALTER TABLE `data_pernikahan`
  ADD CONSTRAINT `data_pernikahan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `data_user` (`id_user`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
