-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2019 at 05:02 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_cpmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(10) NOT NULL,
  `user_name` text NOT NULL,
  `nama_admin` text NOT NULL,
  `password` text NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `user_name`, `nama_admin`, `password`, `level`) VALUES
(6, 'admin', 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas_dasar`
--

CREATE TABLE `tb_berkas_dasar` (
  `id_berkas_dasar` int(11) NOT NULL,
  `id_pelamar` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `tanggal_masuk_foto` date NOT NULL,
  `tanggal_keluar_foto` date NOT NULL,
  `ktp` text NOT NULL,
  `tanggal_masuk_ktp` date NOT NULL,
  `tanggal_keluar_ktp` date NOT NULL,
  `kartu_keluarga` text NOT NULL,
  `tanggal_masuk_kartu_keluarga` date NOT NULL,
  `tanggal_keluar_kartu_keluarga` date NOT NULL,
  `ijazah` text NOT NULL,
  `tanggal_masuk_ijazah` date NOT NULL,
  `tanggal_keluar_ijazah` date NOT NULL,
  `akta_lahir` text NOT NULL,
  `tanggal_masuk_akta_lahir` date NOT NULL,
  `tanggal_keluar_akta_lahir` date NOT NULL,
  `surat_izin` text NOT NULL,
  `tanggal_masuk_surat_izin` date NOT NULL,
  `tanggal_keluar_surat_izin` date NOT NULL,
  `buku_nikah` text NOT NULL,
  `tanggal_masuk_buku_nikah` date NOT NULL,
  `tanggal_keluar_buku_nikah` date NOT NULL,
  `akta_cerai` text NOT NULL,
  `tanggal_masuk_akta_cerai` date NOT NULL,
  `tanggal_keluar_akta_cerai` date NOT NULL,
  `pengambil_berkas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berkas_dasar`
--

INSERT INTO `tb_berkas_dasar` (`id_berkas_dasar`, `id_pelamar`, `foto`, `tanggal_masuk_foto`, `tanggal_keluar_foto`, `ktp`, `tanggal_masuk_ktp`, `tanggal_keluar_ktp`, `kartu_keluarga`, `tanggal_masuk_kartu_keluarga`, `tanggal_keluar_kartu_keluarga`, `ijazah`, `tanggal_masuk_ijazah`, `tanggal_keluar_ijazah`, `akta_lahir`, `tanggal_masuk_akta_lahir`, `tanggal_keluar_akta_lahir`, `surat_izin`, `tanggal_masuk_surat_izin`, `tanggal_keluar_surat_izin`, `buku_nikah`, `tanggal_masuk_buku_nikah`, `tanggal_keluar_buku_nikah`, `akta_cerai`, `tanggal_masuk_akta_cerai`, `tanggal_keluar_akta_cerai`, `pengambil_berkas`) VALUES
(1, 'TKI-1908260001', 'TKI-1908260001-foto.jpg', '2019-08-26', '0000-00-00', 'TKI-1908260001-ktp.jpg', '2019-08-26', '0000-00-00', '', '0000-00-00', '0000-00-00', 'TKI-1908260001-ijazah.jpg', '2019-08-26', '0000-00-00', '', '0000-00-00', '0000-00-00', 'TKI-1908260001-surat_izin.jpg', '2019-08-26', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', ''),
(2, 'TKI-1908260002', '', '0000-00-00', '0000-00-00', 'TKI-1908260002-ktp.jpg', '2019-08-26', '0000-00-00', '', '0000-00-00', '0000-00-00', 'TKI-1908260002-ijazah.jpg', '2019-08-26', '0000-00-00', '', '0000-00-00', '0000-00-00', 'TKI-1908260002-surat_izin.jpg', '2019-08-26', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', ''),
(3, 'TKI-1908260003', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', ''),
(4, 'TKI-1908260004', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas_proses`
--

CREATE TABLE `tb_berkas_proses` (
  `id_berkas_proses` int(11) NOT NULL,
  `id_pelamar` varchar(50) NOT NULL,
  `medical` text NOT NULL,
  `tanggal_pembuatan_medical` date NOT NULL,
  `tanggal_kadaluwarsa_medical` date NOT NULL,
  `id_cpmi` text NOT NULL,
  `paspor` text NOT NULL,
  `nomor_paspor` text NOT NULL,
  `tanggal_pembuatan_paspor` date NOT NULL,
  `tanggal_kadaluwarsa_paspor` date NOT NULL,
  `isc` text NOT NULL,
  `tanggal_pembuatan_isc` date NOT NULL,
  `tanggal_kadaluwarsa_isc` date NOT NULL,
  `fwcms` text NOT NULL,
  `tanggal_pembuatan_fwcms` date NOT NULL,
  `tanggal_kadaluwarsa_fwcms` date NOT NULL,
  `asuransi_pra` text NOT NULL,
  `nomor_ktkln` text NOT NULL,
  `asuransi_purna` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berkas_proses`
--

INSERT INTO `tb_berkas_proses` (`id_berkas_proses`, `id_pelamar`, `medical`, `tanggal_pembuatan_medical`, `tanggal_kadaluwarsa_medical`, `id_cpmi`, `paspor`, `nomor_paspor`, `tanggal_pembuatan_paspor`, `tanggal_kadaluwarsa_paspor`, `isc`, `tanggal_pembuatan_isc`, `tanggal_kadaluwarsa_isc`, `fwcms`, `tanggal_pembuatan_fwcms`, `tanggal_kadaluwarsa_fwcms`, `asuransi_pra`, `nomor_ktkln`, `asuransi_purna`) VALUES
(1, 'TKI-1908260001', '', '2019-06-20', '2019-08-20', '12189151', '', 'C3655012', '2019-07-05', '2024-07-05', '', '2019-07-12', '2019-10-12', '', '0000-00-00', '0000-00-00', 'Lunas', '', 'Lunas'),
(2, 'TKI-1908260002', '', '0000-00-00', '0000-00-00', '12187110', '', 'C3655862', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', 'Lunas', '', 'Lunas'),
(3, 'TKI-1908260003', '', '0000-00-00', '0000-00-00', '12189171', 'TKI-1908260003-paspor.jpg', 'AU498569', '2019-06-19', '2024-06-19', 'TKI-1908260003-isc.jpg', '2019-07-08', '2020-01-07', 'TKI-1908260003-fwcms.jpg', '2019-07-08', '2019-10-07', 'Lunas', '', 'Lunas'),
(4, 'TKI-1908260004', '', '0000-00-00', '0000-00-00', '11950128', 'TKI-1908260004-paspor.jpg', 'AU214881', '2019-06-11', '2024-06-11', 'TKI-1908260004-isc.jpg', '2019-07-08', '2020-01-07', '', '0000-00-00', '0000-00-00', 'Lunas', '', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_endorsement`
--

CREATE TABLE `tb_endorsement` (
  `id_endorsement` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `tanggal_visa` date NOT NULL,
  `nomor_calling_visa` text NOT NULL,
  `tanggal_pengiriman` date NOT NULL,
  `pengiriman_dokumen` text NOT NULL,
  `tanggal_keberangkatan` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_endorsement`
--

INSERT INTO `tb_endorsement` (`id_endorsement`, `id_pendaftar`, `tanggal_visa`, `nomor_calling_visa`, `tanggal_pengiriman`, `pengiriman_dokumen`, `tanggal_keberangkatan`, `keterangan`) VALUES
(1, 3, '2019-08-07', 'BPA/FWCMS/GAT1147471476', '2019-01-01', 'Dikirim di kantor pos oleh bu Katrin', '2019-08-25', 'Pembayaran lunas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lowongan`
--

CREATE TABLE `tb_lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `jenis_pekerjaan` text NOT NULL,
  `status_seleksi` int(11) NOT NULL,
  `tanggal_kontrak` date NOT NULL,
  `masa_berlaku` date NOT NULL,
  `permintaan_lowongan` text NOT NULL,
  `nominal_upah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lowongan`
--

INSERT INTO `tb_lowongan` (`id_lowongan`, `id_perusahaan`, `jenis_pekerjaan`, `status_seleksi`, `tanggal_kontrak`, `masa_berlaku`, `permintaan_lowongan`, `nominal_upah`) VALUES
(35, 9, 'Operator Produksi', 1, '2019-05-15', '2019-09-30', 'Laki-laki', 'RM 1200'),
(36, 15, 'Operator Produksi', 1, '2019-07-30', '2019-10-30', 'Laki-laki', 'RM 1200'),
(37, 23, 'Operator Produksi', 0, '2019-08-14', '2019-11-14', 'Perempuan', 'RM 1200');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelamar`
--

CREATE TABLE `tb_pelamar` (
  `id_pelamar` varchar(50) NOT NULL,
  `nama_pelamar` varchar(255) NOT NULL,
  `tempat_lahir_pelamar` varchar(100) NOT NULL,
  `tanggal_lahir_pelamar` date NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `agama` text NOT NULL,
  `nomor_hp_pelamar` text NOT NULL,
  `nama_orang_tua` varchar(255) NOT NULL,
  `alamat_pelamar` text NOT NULL,
  `kode_pos` text NOT NULL,
  `pendidikan_terakhir_pelamar` text NOT NULL,
  `status_diri` text NOT NULL,
  `nama_keluarga_lain` varchar(255) NOT NULL,
  `umur_keluarga_lain` text NOT NULL,
  `hubungan_keluarga_lain` varchar(100) NOT NULL,
  `alamat_keluarga_lain` text NOT NULL,
  `nomor_hp_keluarga_lain` text NOT NULL,
  `minat_bekerja` text NOT NULL,
  `minat_lokasi_kerja` text NOT NULL,
  `tanggal_input` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelamar`
--

INSERT INTO `tb_pelamar` (`id_pelamar`, `nama_pelamar`, `tempat_lahir_pelamar`, `tanggal_lahir_pelamar`, `jenis_kelamin`, `agama`, `nomor_hp_pelamar`, `nama_orang_tua`, `alamat_pelamar`, `kode_pos`, `pendidikan_terakhir_pelamar`, `status_diri`, `nama_keluarga_lain`, `umur_keluarga_lain`, `hubungan_keluarga_lain`, `alamat_keluarga_lain`, `nomor_hp_keluarga_lain`, `minat_bekerja`, `minat_lokasi_kerja`, `tanggal_input`) VALUES
('TKI-1908260001', 'Mimin Ashari', 'Kebumen', '1998-03-22', 'Perempuan', 'Islam', '081256324951', 'Tumijan', 'Dukuh Karangsruni RT03/RW02 Surotrunan Alian, Kebumen', '', 'SMK', 'Belum Menikah', 'Tumijan', '55', 'Ayah', '', '', 'Jabil Sdn. Bhd.', 'Pulau Pinang, Malaysia', '2019-08-27 00:30:41'),
('TKI-1908260002', 'Hana Julyaffi', 'Yogyakarta', '1999-07-31', 'Perempuan', 'Islam', '085642315234', 'Nina', 'Perumahan Gejawan Indah Temuwuh Lor RT09/RW49 Balecatur Gamping, Sleman', '', 'SMK', 'Belum Menikah', 'Beni', '50', 'Ayah', '', '', 'Jabil Sdn. Bhd.', 'Malaysia', '2019-08-27 00:35:21'),
('TKI-1908260003', 'Kesya Selliana', 'Magelang', '1999-12-05', 'Perempuan', 'Islam', '087836245132', 'Sunarto', 'Pelem Gede 03/03 Sodo Paliyan Gunung Kidul', '55871', 'SMK', 'Belum Menikah', 'Sunarto', '46', 'Ayah', 'Pelem Gede 03/03 Sodo Paliyan Gunung Kidul', '', 'Jabil Sdn. Bhd.', 'Malaysia', '2019-08-27 00:58:02'),
('TKI-1908260004', 'Anis Nur Oktavia', 'Sleman', '2000-10-19', 'Perempuan', 'Islam', '082254613266', 'Tumijan', 'Kalimanjung 05/32 Ambarketawang Gamping, Sleman', '55294', 'SMK', 'Belum Menikah', 'Tumijan', '47', 'Ayah', 'Kalimanjung 05/32 Ambarketawang Gamping, Sleman', '', 'Jabil Sdn. Bhd.', 'Johor, Malaysia', '2019-08-27 01:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftar_lowongan`
--

CREATE TABLE `tb_pendaftar_lowongan` (
  `id_pendaftar` int(11) NOT NULL,
  `id_pelamar` varchar(50) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `tanggal_pendaftaran` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lokasi_kantor_cabang` text NOT NULL,
  `status_penerimaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendaftar_lowongan`
--

INSERT INTO `tb_pendaftar_lowongan` (`id_pendaftar`, `id_pelamar`, `id_lowongan`, `tanggal_pendaftaran`, `lokasi_kantor_cabang`, `status_penerimaan`) VALUES
(1, 'TKI-1908260001', 35, '2019-08-27 01:18:07', 'Yogyakarta', 'REJECT'),
(2, 'TKI-1908260002', 35, '2019-08-27 01:18:21', 'Yogyakarta', 'KIV'),
(3, 'TKI-1908260003', 35, '2019-08-27 01:18:32', 'Yogyakarta', 'HIRED'),
(4, 'TKI-1908260004', 35, '2019-08-27 01:18:43', 'Yogyakarta', 'HIRED');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` text NOT NULL,
  `lokasi_perusahaan` text NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `profil_perusahaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`id_perusahaan`, `nama_perusahaan`, `lokasi_perusahaan`, `alamat_perusahaan`, `profil_perusahaan`) VALUES
(7, 'Yamaha Electronics Manufacturing Sdn. Bhd.', 'Johor Baru, Malaysia', 'Plot 7, Kinta Free Industrial Zone    ', 'Production and Manufacturing'),
(8, 'Bayu Kreasi Sdn. Bhd.', 'Perak, Malaysia', ' 73A, Laluan Rasi Jaya 4, Taman Rasi Jaya, 31450 Menglembu, Perak    ', 'Production and Manufacturing'),
(9, 'Jabil Circuit Sdn. Bhd.', 'Pulau Pinang, Malaysia  ', '   Phase 4, 56, Hilir Sungai Kluang 1, Bayan Lepas Industrial Park, 11900 Bayan Lepas, Pulau Pinang, Malaysia   ', 'Production and Manufacturing'),
(10, 'Reaplite Industry Sdn. Bhd.', 'Johor Baru, Malaysia', '  31, Jalan Setia Tropika 1/8, Taman Setia Tropika, 81200 Johor Bahru, Johor, Malaysia  ', 'Production and Construction'),
(11, 'Sony EMCS (Malaysia) Sdn. Bhd.', 'Penang, Malaysia ', 'Free Trade Zone, Prao Industrial Estate 13600 Penang, Malaysia  ', 'Production and Manufacturing'),
(14, 'Freescale Semiconductor Malaysia Sdn. Bhd.', 'Selangor, Malaysia', 'Jalan SS 8/2 nomor 2, Free Ind. Zone Sungei Way Petaling Jaya 47300 Petaling Jaya, Selangor ', 'Production and Manufacturing'),
(15, 'Kiswire Sdn. Bhd.', 'Johor, Malaysia', ' PLO475, Jalan Keluli 2, Kawasan Perindustrian Pasir Gudang, 81700 Pasir Gudang, Johor, Malaysia ', ' Production and Manufacturing '),
(16, 'NXP Semiconductors Malaysia Sdn. Bhd.', 'Selangor, Malaysia', 'No. 2 Jalan SS 8/2 FIZ Sungai Way, Selangor Petaling Jaya, Selangor 47300 Malaysia', 'Production Manufacturing Semiconductor'),
(17, 'V.S.Electronic Sdn. Bhd.', 'Johor, Malaysia', 'PLO 47, Jalan Perindustrian 1 Senai industrial Estate (phase II), 81400, Senai, Johor Darul Takzim, 81400, Malaysia', 'Production and Manufacturing'),
(18, 'Plexus Manufacturing Sdn.Bhd. ', 'Penang, Malaysia ', 'Kawasan Perindustrian Bayan Lepas, 11900 Bayan Lepas, Penang, Malaysia', 'Production and Manufacturing'),
(19, 'Epson Precision Sdn. Bhd', 'Johor, Malaysia', 'Jalan Kempas 5/2, Kawasan Perindustrian Tampoi Indah, 81200 Johor Bahru, Johor, Malaysia', 'Production and Manufacturing'),
(20, 'Escatec Electronics Sdn. Bhd.', 'Pulau Pinang, Malaysia  ', '107, Jalan Hilir Sungai Keluang, 5, Industrial Zone 4, 11900 Bayan Lepas, Pulau Pinang, Malaysia', 'Production and Manufacturing'),
(21, 'Min Aik Technology Sdn. Bhd.', 'Melaka, Malaysia', 'No. ST814, Jalan Masjid Tanah, Kawasan Perindustrian Masjid Tanah, Melaka, 78300 Alor Gajah, Malaysia', 'Production and Manufacturing'),
(22, 'Daikin Electronic Devices Malaysia Sdn. Bhd.', 'Selangor, Malaysia', ' LOT 3, Jalan Asam Jawa 16/15, Seksyen 16, 40200 Shah Alam, Selangor, Malaysia ', ' Production and Manufacturing'),
(23, 'Meiban Technologies Sdn. Bhd.', 'Johor, Malaysia', ' No. 20, Jalan Istimewa 7, Taman Perindustrian Cemerlang, Ulu Tiram, Johor, Malaysia, 81800 ', ' Production and Manufacturing');

-- --------------------------------------------------------

--
-- Table structure for table `tb_seleksi`
--

CREATE TABLE `tb_seleksi` (
  `id_seleksi` varchar(100) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `tanggal_seleksi` datetime NOT NULL,
  `lokasi_seleksi` text NOT NULL,
  `tanggal_post` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_seleksi`
--

INSERT INTO `tb_seleksi` (`id_seleksi`, `id_lowongan`, `tanggal_seleksi`, `lokasi_seleksi`, `tanggal_post`) VALUES
('1908260001', 35, '2017-06-20 10:00:00', 'Hotel Satya Graha', '2019-08-26 23:25:34'),
('1908260002', 35, '2017-06-21 10:00:00', 'Hotel Satya Graha', '2019-08-26 23:25:49'),
('1908260003', 36, '2019-08-28 11:30:00', 'Kantor Cabang PT SMU Jogja', '2019-08-26 23:27:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_berkas_dasar`
--
ALTER TABLE `tb_berkas_dasar`
  ADD PRIMARY KEY (`id_berkas_dasar`);

--
-- Indexes for table `tb_berkas_proses`
--
ALTER TABLE `tb_berkas_proses`
  ADD PRIMARY KEY (`id_berkas_proses`);

--
-- Indexes for table `tb_endorsement`
--
ALTER TABLE `tb_endorsement`
  ADD PRIMARY KEY (`id_endorsement`),
  ADD KEY `tb_endorsement_ibfk_1` (`id_pendaftar`);

--
-- Indexes for table `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  ADD PRIMARY KEY (`id_lowongan`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `tb_pelamar`
--
ALTER TABLE `tb_pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indexes for table `tb_pendaftar_lowongan`
--
ALTER TABLE `tb_pendaftar_lowongan`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `tb_seleksi`
--
ALTER TABLE `tb_seleksi`
  ADD PRIMARY KEY (`id_seleksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_berkas_dasar`
--
ALTER TABLE `tb_berkas_dasar`
  MODIFY `id_berkas_dasar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_berkas_proses`
--
ALTER TABLE `tb_berkas_proses`
  MODIFY `id_berkas_proses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_endorsement`
--
ALTER TABLE `tb_endorsement`
  MODIFY `id_endorsement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_pendaftar_lowongan`
--
ALTER TABLE `tb_pendaftar_lowongan`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
