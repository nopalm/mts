-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 05:41 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `judulab` varchar(255) NOT NULL,
  `deskripsiab` varchar(255) NOT NULL,
  `gambarab` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `judulab`, `deskripsiab`, `gambarab`) VALUES
(1, 'Test Judul', 'Test Desc', 'imageab/sbvZXnfH88cygA92wcPQynEmpOyClvYrFujkRFnJ.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `judulagenda` varchar(255) NOT NULL,
  `deskripsiagenda` text NOT NULL,
  `gambaragenda` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `judulagenda`, `deskripsiagenda`, `gambaragenda`) VALUES
(1, 'judul agenda1', 'desc agenda1', 'imageagenda/iZgBXaqJHWpRWcse9lr4hBN4I1mRW6TxstxOz5Q9.jpeg'),
(2, 'judul agenda2', 'desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2desc agenda2', 'imageagenda/P1NoEmCnuVtfZPINYisnr4eXY0uut9NeFyjngJc7.jpeg'),
(3, 'asdasdas', 'asdasd', 'imageagenda/B16K2YjNfdCqfsTpvUvd5i2sC2QGhECiHojPIWGI.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judulber` varchar(255) NOT NULL,
  `gambarber` varchar(255) NOT NULL,
  `deskripsiber` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judulber`, `gambarber`, `deskripsiber`) VALUES
(1, 'tes1', 'imageber/mFI6P6txJS5BymDA5mKi5MvjJTkef6wmR3BNJmZJ.jpeg', 'test1'),
(2, 'test 2', 'imageber/6gJXeD5IXDzUTREQ7qtNdQl1mZdqi4hGY12QpIeH.jpeg', 'test 2'),
(3, 'test3', 'imageber/gijSmpqurG4KsBzyvArbRZUzrJ5klMpekQJ9uUbP.jpeg', 'test3'),
(4, 'test4', 'imageber/i4MkF2cLUotS0d3L9RozeqrsJKgvI9SvhSFUcymN.jpeg', 'test4'),
(5, 'berita 1', 'imageber/oLSS3XzHWZerc2kBP4oLjkoQ9OThelgXCuqigZEk.jpeg', 'alsdkalksdjlaksjdlajsdlkasjdsalsdkalksdjlaksjdlajsdlkasjds\r\nalsdkalksdjlaksjdlajsdlkasjdsalsdkalksdjlaksjdlajsdlkasjdsalsdkalksdjlaksjdlajsdlkasjdsalsdkalksdjlaksjdlajsdlkasjdsalsdkalksdjlaksjdlajsdlkasjds');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `juduldown` varchar(255) NOT NULL,
  `filedown` text NOT NULL,
  `deskripsidown` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `juduldown`, `filedown`, `deskripsidown`) VALUES
(1, 'Download file ex.txt', 'imagedown/zFhisy3dLHmOy718e7gg1XOeWGjRq68copOoNTnU.txt', 'ini file ex.txt ini file ex.txt ini file ex.txt ini file ex.txt ini file ex.txt'),
(2, 'Download file store.txt', 'imagedown/9kXeSK7unDbDVv7gfUJtOVJVbSLyqP9eO0FWftXP.txt', 'ini file store.txt'),
(3, 'Download file file.txt', 'imagedown/p3eDqpKdJ666fVsiomvuP5BUk6DA9bQVnJU6kAqv.txt', 'ini file.txt'),
(4, 'Download file doc.docx', 'imagedown/XFLCKZ7w8vdgQ9UpfjuQz3gqW07T6y5K0IpIhSRs.docx', 'ini file doc.docx'),
(5, 'Download file filepdf.pdf', 'imagedown/HY0BQItUZ8ZjJqXUpDS4nzDw25FcNHs8i3ib053L.pdf', 'ini file filepdf.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'galeri 1', 'gal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1\r\ngal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1\r\ngal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1\r\ngal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1 gal 1', 'image/au2E3xgDSENoqncKQgE2TimWaR9VwojMfyhvzvHf.jpeg'),
(2, 'galeri 2', 'gal 2', 'image/hVMLs7H2Q7AHoW5fFSUa7DgFOWTAYErE7aNpMNsA.jpeg'),
(3, 'galeri 3', 'gal 3', 'image/t6Q6YnV8cMGsRRVoLSVENNV19BuKLdQo9jwV1Ep6.jpeg'),
(4, 'galeri 4', 'gal 4', 'image/P9dG3hhIM3UjpUPHTsVv2GtW3muiiqV06lWNUFvn.jpeg'),
(5, 'galeri6', 'asd', 'image/texwOpRyjSZmldoa2u1vijC97IYd719VBYF9aIFF.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `profil` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `kelahiran` varchar(255) NOT NULL,
  `guru_mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `profil`, `nama`, `nip`, `jk`, `kelahiran`, `guru_mapel`) VALUES
(1, 'imageguru/Wl2hak7L74WKycala6YOkmo5d7mBVWiRx2cqZTNQ.png', 'Nfa', '1234', 'Laki', 'SBY , 11 JUN 2909', 'B.indo'),
(2, 'imageguru/JGuOO5sH0cPD0coJEC00eAfRnIcOPEooLPsvqCHP.png', 'Nf2', '12342', 'Laki2', 'SBY , 11 JUN 29092', 'B.indo2'),
(3, 'imageguru/JyEukQwsGvLbLDvPQXy7l8bfxvM2QhtAJtnauSrE.png', 'g1', 'NIP1', 'JK1', 'K1', 'b.ing'),
(4, 'imageguru/ec156J1t2xIj8CzQQptjkI5Mu9Ad9W66CNTcAGWB.png', 'g2', 'NIP2', 'JK2', 'K2', 'b.ing2'),
(5, 'imageguru/0JisQ6kueRuwp7SiP5ZRpo9Dti0Bx4gmiPA2UEbz.png', 'g3', 'nip3', 'JK3', 'k3', 'b.ing3'),
(6, 'imageguru/hFmEmECvb1BYUbA20IUemP41WuAzos4SOtf6cZJR.png', 'asd', 'asd', 'asd', 'asd', 'asd'),
(7, 'imageguru/7nbLo46l3s2vNqLXPtpSoVadJz1C5bFp9Pjn9KxJ.jpeg', 'asd', 'asd', 'asd', 'asd', 'asd'),
(8, 'imageguru/nnVLtFed4H8KEFVnKus0oAhwVLjlyRPriVwYKq3t.jpeg', 'asd', 'asd', 'asd', 'asd', 'asd'),
(9, 'imageguru/JM6YARWc2aCT0ALK0PYMjnIv4Wr63wMn1tCk4joU.png', 'sdf', 'gf', 'sdf', 'dh', 'dfg'),
(10, 'imageguru/4y72E4tlk7FzbwfVJL2Q564NRn2R9txWwpdlNr4K.jpeg', 'asd', 'asd', 'asd', 'asd', 'asd'),
(11, 'imageguru/n0GCGs0h4hyQHDoNlS9LMziXWItatb95JXmHm3UW.png', 'asd', 'dfg', 'dfg', 'dfg', 'hgh');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `fax` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hour` varchar(255) NOT NULL,
  `embed` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `email`, `phone`, `fax`, `alamat`, `hour`, `embed`) VALUES
(1, 'asdasdasdasdasdad@gmail.co.id', '+62 31 549 2086', '021111111111', 'Jl. Dempo No. 11 Surabaya 60252', '2AM - 3AM', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.620924948473!2d112.68586271430006!3d-7.283899294742641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fc3c341b9d81%3A0x7c610562d1a12f2b!2sMTS.%20BADRUSSALAM%201!5e0!3m2!1sen!2sid!4v1582000448788!5m2!1sen!2sid');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambarpart` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name`, `deskripsi`, `gambarpart`) VALUES
(1, 'Client 1', '1', 'imagepart/fM7iWXgpCEOLjC1Af1b0RbwnsVKoiU9cgjBWvhNv.jpeg'),
(2, 'Client 2', '2', 'imagepart/TVuB9C82tUqBHjaRmh5c1426d894xcIRXaCYMRKJ.png'),
(3, 'Client 3', '3', 'imagepart/YmJCEISyxg5ki2B3QK2E4Get5enWZuw65Zhqtqm3.jpeg'),
(4, 'Client 4', '4', 'imagepart/WRo9fBF1TQX0TRsHrK1YJydNIbA2p15WnnzyRwvW.png');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `judulpeng` varchar(255) NOT NULL,
  `deskripsipeng` text NOT NULL,
  `gambarpeng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judulpeng`, `deskripsipeng`, `gambarpeng`) VALUES
(1, 'Judul Pengumuman 1', 'DESC1asdddddaDESC1asdddddaDESC1asdddddaDESC1asdddddaDESC1DESC1asdddddaDESC1asdddddaDESC1asdddddaDESC1asdddddaDESC1DESC1asdddddaDESC1asdddddaDESC1asdddddaDESC1asdddddaDESC1', 'imagepeng/fzy2q4S5DarJHD99indCuUguJMvlq1CYrZUr3dTZ.jpeg'),
(2, 'Judul Pengumuman 2', 'DESC2', 'imagepeng/Pch2UG34L2FgRvdFJACN0Dt2IVmPBaQoRLcBU9Uq.jpeg'),
(3, 'pppp', 'ssss', 'imagepeng/kXsS0qIpBJOI7JhSG38l2UAv0lZB8mBpsO0ECaG9.jpeg'),
(4, 'aaa', 'aaa', 'imagepeng/Ir3jDBQ0jpwxavcRyWheOcsQbt5hdQq0iMPCLcsT.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `judulser` varchar(255) NOT NULL,
  `deskripsiser` varchar(255) NOT NULL,
  `gambarser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `judulser`, `deskripsiser`, `gambarser`) VALUES
(1, 'Service 1', 'Service 1', 'imageser/ouXJUPCsu6GxkjfFJ3hXjCtXSOYBDV5ZehoPGTxZ.jpeg'),
(2, 'Service 2', 'Service 2', 'imageser/jOdUKX6NbDNMssoFvjLa4OQtV8W9CCeVR5wgHgQ8.jpeg'),
(3, 'Service 3', 'Service 3', 'imageser/MdEJdzm0DJludZU61rBEUVq30gqdp0W9VmeLZuz6.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `judulsis` varchar(255) NOT NULL,
  `deskripsisis` text NOT NULL,
  `gambarsis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `judulsis`, `deskripsisis`, `gambarsis`) VALUES
(1, 'Prestasi siswa 1', 'Deskripsi Prestasi siswa 1 aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'imagesis/WoTCAGFNRm4uqed24D1fpKBOAemlLTSvO2Fvk8Yp.jpeg'),
(2, 'Prestasi siswa 2', 'Deskripsi Prestasi siswa 2', 'imagesis/meciiCAVKq45Fl26vxlZK5c3iZeCuDFk68eMbDPU.jpeg'),
(3, 'asd', 'asd', 'imagesis/apu3vcPfAyldP5D6ZEpP8XNdye5fPfmeSNnBqDDD.jpeg'),
(4, 'asdasd', 'asd', 'imagesis/PnSqCapxVDlDu9Iw5cbswoPqxl0yrP3mmMty3Dfy.jpeg'),
(5, 'asdasd', 'asdasda', 'imagesis/8xctelKgARYoSSTFLOcKdkiPKO3j4eciZ55pvxSk.jpeg'),
(6, 'asdasd', 'asdasdasd', 'imagesis/gLjGkny53T344G3YUXYufainggG6Yot9nhEg8SNl.jpeg'),
(7, 'asdasd', 'asdkaljsdklajsdlkjaklsjdkjaskdjlasd', 'imagesis/MTOJEAaI06iyWZQuhIFUpbPqJYf72HWBil3fuJ6S.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `judulslid` varchar(255) NOT NULL,
  `gambarslid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `judulslid`, `gambarslid`) VALUES
(1, 'Slider', 'imageslid/5K1EVhFMiMVTeK9kFFiQd3L1Yc3RaO5cayTy3zmH.jpeg'),
(2, 'Slider', 'imageslid/EsD5nJ7XfH1HrMIxt5NNTOCSp8UZ3pKkyhPd9LZ5.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$mLjjqEeE83b4uFfgwGmk/ekK2BFMD4VcvasgZSECUBlaSqAazr7Re', NULL, '2019-07-23 06:53:58', '2019-07-23 06:53:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
