-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2019 at 04:02 AM
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
(4, 'budi1', 'Budi', '12345', 1),
(5, 'anin', 'Anin', '12345', 0),
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
(4, 'TKI-1907210001', 'TKI-1907210001-foto.jpg', '2019-08-13', '2019-08-14', 'TKI-1907210001-ktp.jpg', '2019-08-13', '2019-08-14', 'TKI-1907210001-kartu_keluarga.jpg', '2019-07-28', '2019-08-07', 'TKI-1907210001-ijazah.jpg', '2019-08-13', '2019-08-07', 'TKI-1907210001-akta_lahir.jpg', '2019-07-23', '2019-08-07', 'TKI-1907210001-surat_izin.jpg', '2019-08-13', '2019-08-06', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '2019-08-12', ''),
(8, 'TKI-1907210002', 'TKI-1907210002-foto.jpg', '2019-08-13', '0000-00-00', '', '0000-00-00', '2019-08-23', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '2019-08-23', '', '0000-00-00', '2019-08-14', '', '0000-00-00', '2019-08-23', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '2019-08-23', ''),
(9, 'TKI-1907250001', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', ''),
(10, 'TKI-1907270001', 'TKI-1907270001-foto.jpg', '2019-08-13', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', ''),
(11, 'TKI-1908070001', 'TKI-1908070001-foto.jpg', '2019-08-07', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', ''),
(12, 'TKI-1908130001', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', ''),
(13, 'TKI-1908130002', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', ''),
(14, 'TKI-1908130003', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '');

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
(2, 'TKI-1907210001', 'TKI-1907210001-medical.jpg', '2019-01-01', '2019-01-01', '', 'TKI-1907210001-paspor.jpg', 'AT567382', '2019-01-01', '2019-01-01', 'TKI-1907210001-isc.jpg', '2019-05-03', '2019-09-06', 'TKI-1907210001-fwcms.jpg', '0000-00-00', '0000-00-00', 'Lunas', '', 'Lunas'),
(6, 'TKI-1907210002', '', '0000-00-00', '0000-00-00', '', 'TKI-1907210002-paspor.jpg', 'AU451844', '0000-00-00', '0000-00-00', 'TKI-1907210002-isc.jpg', '0000-00-00', '0000-00-00', 'TKI-1907210002-fwcms.jpg', '0000-00-00', '0000-00-00', '', '', ''),
(7, 'TKI-1907250001', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', ''),
(8, 'TKI-1907270001', '', '0000-00-00', '0000-00-00', '', 'TKI-1907270001-paspor.jpg', 'B4158028', '0000-00-00', '0000-00-00', 'TKI-1907270001-isc.jpg', '0000-00-00', '0000-00-00', 'TKI-1907270001-fwcms.jpg', '0000-00-00', '0000-00-00', '', '', ''),
(9, 'TKI-1908070001', '', '0000-00-00', '0000-00-00', '345121567777', '', 'AT56555', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', 'Lunas', '451231222222', 'Belum Bayar'),
(10, 'TKI-1908130001', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', ''),
(11, 'TKI-1908130002', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', ''),
(12, 'TKI-1908130003', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '');

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
(1, 4, '2019-01-01', '341251254555555', '2019-01-01', 'k', '2019-10-11', 'gghjhgj'),
(22, 14, '2019-08-08', '34125123333', '2019-01-01', '', '2019-10-05', 'berangkat dengan travel yunika, masih kurang pembayaran'),
(36, 13, '2019-01-01', '', '2019-01-01', '', '2019-12-28', 'okeeeeeeeeeeee'),
(37, 8, '2019-01-01', '34125123333', '0000-00-00', '', '2019-08-12', 'jakarta');

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
(28, 1, '', 0, '2019-03-03', '2019-07-30', 'Perempuan', 'RM 1200'),
(29, 5, 'Operator Produksi', 1, '2019-03-03', '2019-09-09', 'Laki-laki', 'RM 1300'),
(30, 6, '', 1, '2019-10-10', '2019-12-12', 'Perempuan', 'RM 1100'),
(31, 9, 'Operator Produksi', 1, '2019-08-01', '2019-11-01', 'Perempuan', 'RM 1100'),
(32, 7, 'Operator Produksi', 0, '2019-07-03', '2019-10-10', 'Perempuan', 'RM 1200'),
(33, 13, 'Operator Produksi', 1, '2019-10-10', '2019-12-12', 'Perempuan', 'RM 1200');

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
('TKI-1907210001', 'Asih Sulistyawati', 'Bantul', '1989-01-01', 'Perempuan', 'Islam', '081565621321651', 'Jeti', 'Jl. Baru', '55124', 'SMK Kejuruan Masak', 'Menikah', 'Aries S', '39', 'Suami', 'Jl. Baru', '082564325162', 'Keswire', 'Kuala Lumpur', '2019-07-21 14:12:24'),
('TKI-1907210002', 'Ari Budi Santosa', 'Kulon Progo', '1995-04-14', 'Laki-laki', 'Islam', '081565621321651', 'Nina', 'Jl. Indah', '55465', 'SMK Kejuruan Elektro', 'Menikah', 'Beni', '62', 'Ayah', 'Jl. Malam', '085261345265', 'Keswire', 'Selangor, Johor', '2019-07-21 14:21:20'),
('TKI-1907270001', 'Adi Setiawan', 'Magelang', '1997-02-16', 'Laki-laki', 'Islam', '08123546953', 'Seto', 'Jl. Kaliurang', '55136', 'SMK Kejuruan Mesin', 'Menikah', 'Sinta', '35', 'Istri', 'Jl. Kaliurang', '081326548623', 'Daikin', 'Kuala Lumpur', '2019-07-27 15:09:18'),
('TKI-1908070001', 'Meyriska Putri Utami', 'Jakarta', '1991-01-01', 'Perempuan', 'Islam', '08112233445566', 'Denada', 'Jl. Bunga Melati', '55555', 'SMK Kejuruan Kecantikan', 'Belum Menikah', 'Genta', '42', 'Kakak', 'Jl. Melati 23', '0825643323333', 'Yamaha', 'Selangor, Johor', '2019-08-07 08:53:26'),
('TKI-1908130001', 'Agustin Kusumaningrum', 'Wonogiri', '1999-08-09', 'Perempuan', 'Islam', '0815622315448', 'Sugiyo', 'KLITIK 05/05 MIRI KISMANTORO WONOGIRI', '57696', 'SMK', 'Belum Menikah', 'Katini', '41', 'Ibu', '', '', 'Jabil', 'Kuala Lumpur', '2019-08-13 12:07:03'),
('TKI-1908130002', 'Amanda Dwi Jatmiko', 'Banyuwangi', '2001-01-18', 'Perempuan', 'Islam', '0812365412221', 'Soedjatmiko', 'JANTI 09/04 CATURTUNGGAL DEPOK SLEMAN', '55281', 'SMK', 'Belum Menikah', 'Choirunnisa Rofiqoh Dimyati', '40', 'Ibu', '', '', 'Jabil', 'Malaysia', '2019-08-13 12:14:54'),
('TKI-1908130003', 'Widya Sinta Ayu', 'Blitar', '2001-03-10', 'Laki-laki', 'Islam', '085837150974', 'Deddy Dwi Priambodo', 'DSN. BRINTIK RT. 02 RW 08 DS. SURU, KEC. DOKO KAB. BLITAR', '66186', 'SMK', 'Belum Menikah', 'Mudji Winarti', '45', 'Ibu', 'DSN. BRINTIK RT. 02 RW 08 DS. SURU, KEC. DOKO KAB. BLITAR', '085806987785', 'Jabil', 'Malaysia', '2019-08-13 12:17:51');

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
(1, 'TKI-1907210001', 28, '2019-07-25 14:30:56', 'Yogyakarta', 'KIV'),
(4, 'TKI-1907270001', 33, '2019-07-27 21:03:06', 'Klaten', 'HIRED'),
(8, 'TKI-1908070001', 30, '2019-08-07 08:55:15', 'Yogyakarta', 'HIRED'),
(9, 'TKI-1907210001', 30, '2019-08-12 20:34:41', 'Yogyakarta', 'KIV'),
(10, 'TKI-1908130001', 31, '2019-08-13 12:34:15', 'Yogyakarta', 'HIRED'),
(11, 'TKI-1908130002', 31, '2019-08-13 12:34:28', 'Yogyakarta', 'HIRED'),
(12, 'TKI-1908130003', 31, '2019-08-13 12:34:42', 'Klaten', 'REJECT'),
(13, 'TKI-1907210001', 31, '2019-08-16 13:38:38', 'Yogyakarta', 'HIRED'),
(14, 'TKI-1908070001', 31, '2019-08-21 20:35:00', 'Yogyakarta', 'HIRED');

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
(5, 'Daikin SDN. BHD.', 'Johor Baru, Malaysia', '  Jl. Indah Barat Laut 37  ', '  Perusahaan Mesin Berat  '),
(7, 'Yamaha Electronics Manufacturing SDN BHD', 'Johor Baru, Malaysia', '  Plot 7, Kinta Free Industrial Zone  ', '  Perusahaan elektronik produksi mesin   '),
(8, 'Bayu Kreasi SDN BHD', 'Perak, Malaysia', '  73A, Laluan Rasi Jaya 4, Taman Rasi Jaya, 31450 Menglembu, Perak  ', '  Others  '),
(9, 'Jabil Circuit SDN BHD', 'Pulau Pinang, Malaysia  ', '  Phase 4, 56, Hilir Sungai Kluang 1, Bayan Lepas Industrial Park, 11900 Bayan Lepas, Pulau Pinang, Malaysia  ', '  Perusahaan Elektronik  '),
(10, 'Reaplite Industry SDN BHD', 'Johor Baru, Malaysia', ' 31, Jalan Setia Tropika 1/8, Taman Setia Tropika, 81200 Johor Bahru, Johor, Malaysia ', ' Perusahaan Konstruksi '),
(11, 'Sony EMCS (Malaysia) SDN BHD', 'Penang, Malaysia ', ' Free Trade Zone, Prao Industrial Estate 13600 Penang, Malaysia ', ' Perusahaan Elektronik '),
(13, 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa');

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
('1907270001', 29, '2019-08-08 00:00:00', 'Kantor Cabang PT SMU Jogja', '2019-07-27 15:07:25'),
('1907280001', 27, '2019-05-28 13:59:00', 'Kantor Cabang PT SMU Jogja', '2019-07-28 14:23:29'),
('1908100001', 30, '2019-01-16 10:05:00', 'Kantor Cabang PT SMU Jogja', '2019-08-10 14:34:50'),
('1908170001', 33, '2019-11-11 13:00:00', 'Kantor Cabang PT SMU Jogja', '2019-08-17 16:10:05'),
('1908210001', 31, '2019-01-01 00:00:00', 'Kantor Cabang PT SMU Jogja', '2019-08-21 21:09:07');

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
  MODIFY `id_berkas_dasar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_berkas_proses`
--
ALTER TABLE `tb_berkas_proses`
  MODIFY `id_berkas_proses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_endorsement`
--
ALTER TABLE `tb_endorsement`
  MODIFY `id_endorsement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_pendaftar_lowongan`
--
ALTER TABLE `tb_pendaftar_lowongan`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
