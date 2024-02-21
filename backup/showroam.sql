-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2024 pada 08.42
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showroam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat_visitor`
--

CREATE TABLE `chat_visitor` (
  `email` varchar(500) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `chat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `chat_visitor`
--

INSERT INTO `chat_visitor` (`email`, `nama`, `chat`) VALUES
('guest@gmail.com', 'userguest', 'ujicoba'),
('idx@gmail.com', 'idxguest@gmail.com', 'tes tes'),
('show@gmail.com', 'showguest@gmail.com', 'adajiwdl'),
('showlogin@gmail.com', 'showlogin', 'awok'),
('tes@gmail.com', 'tes', 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_kendaraan`
--

CREATE TABLE `detail_kendaraan` (
  `id_mobil` int(200) NOT NULL,
  `nama_showroam` varchar(500) NOT NULL,
  `merek_mobil` varchar(500) NOT NULL,
  `harga` varchar(500) NOT NULL,
  `tipe_kendaraan` varchar(500) NOT NULL,
  `tipe_mesin` varchar(500) NOT NULL,
  `kapasitas_oli` varchar(500) NOT NULL,
  `kapasitas_mesin` varchar(500) NOT NULL,
  `bahan_bakar` varchar(500) NOT NULL,
  `tenaga_mesin` varchar(500) NOT NULL,
  `jenis_transmisi` varchar(500) NOT NULL,
  `jenis_turbo` varchar(500) NOT NULL,
  `gambar_kendaraan` varchar(500) NOT NULL,
  `video_kendaraan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_kendaraan`
--

INSERT INTO `detail_kendaraan` (`id_mobil`, `nama_showroam`, `merek_mobil`, `harga`, `tipe_kendaraan`, `tipe_mesin`, `kapasitas_oli`, `kapasitas_mesin`, `bahan_bakar`, `tenaga_mesin`, `jenis_transmisi`, `jenis_turbo`, `gambar_kendaraan`, `video_kendaraan`) VALUES
(2, 'Showroam Kendaraan Sedan', 'Nissan Corolla 1998', 'Rp 53.000.000', 'Sedan', 'In-Line 4 Cylinder', '1.8 Liter', '2800cc', '49 Liter', '134 hp @5100 rpm', 'Manual 5-Speed', '-', 'Corolla1998.png', '-'),
(3, 'Showroam Kendaraan Sedan', 'Mercedes Tiger', 'Rp 75.000.000', 'Sedan', 'In-Line 6 Cylinder', '2.5 Liter', '1800cc', '75 Liter', '120 hp @5600 rpm', 'Manual 5-Speed', '-', 'tiger.jpg', '-'),
(4, 'Showroam Kendaraan Sedan', 'Chrysler 5th Avenue', 'Rp 51.000.000', 'Sedan', 'V-Engine 8 Cylinder', '5.2 Liter', '5210cc', '57 Liter', '142 hp @4000 rpm', 'Automatic 3-Speed', '-', 'avenue.jpg', '-'),
(5, 'Showroam Kendaraan Sedan', 'BMW E30 1991', 'Rp 404.621.000', 'Sedan', 'V-Engine 6 Cylinder', '64 Liter', '2494cc', '64 Liter', '170 hp @5800 rpm', 'Manual 5-Speed', '-', 'bmwe30.jpg', '-'),
(6, 'Showroam Kendaraan American Muscle', 'Dodge Charger R/T 1970', 'Rp 470.820.000', 'American Muscle', 'V-Engine 8 Cylinder', '6.6 Liter', '7206cc', '72 Liter', '375 hp @4600 rpm', 'Manual 4-Speed', 'Supercharger 35 psi', 'charger1970.jpg', '-'),
(7, 'Showroam Kendaraan American Muscle', 'Dodge Challenger SRT Demon', 'Rp 1.500.000.000', 'American Muscle', 'V-Enginge 8 Cylinder', '6.2 Liter', '6162cc', '84 Liter', '808 hp @6300 rpm', 'Automatic 8-Speed', 'Supercharger 22 psi', 'demon.jpg', '-'),
(8, 'Showroam Kendaraan American Muscle', 'Plymouth GTX 1971', 'Rp 690.457.000', 'American Muscle', 'V-Engine 8 Cylinder', '7.2 Liter', '7210cc', '78.7 Liter', '385 hp @4200 rpm', 'Automatic 3-Speed', 'Supercharger 25.3 psi', 'gtx.png', '-'),
(9, 'Showroam Kendaraan American Muscle', 'Ford Mustang GT 2005', 'Rp 359.392.000', 'American Muscle', 'V-Engine 8 Cylinder', '4.6 Liter', '5000cc', '60.5 Liter', '300 hp @5750 rpm', 'Manual 5-Speed', 'Supercharger 32 psi', 'mustang.jpg', '-'),
(10, 'Showroam Kendaraan American Muscle', 'Chevrolet Camaro SS 2020', 'Rp 365.000.000', 'American Muscle', 'v-Engine 8 Cylinder', '6.2 Liter', '9373cc', '72 Liter', '455 hp @6000 rpm', 'Manual 6-Speed', 'Supercharger 36 psi', 'camaross.png', '-'),
(11, 'Showroam Kendaraan SUV', 'Audi Q3 Sportback', 'Rp 1.185.000.000', 'SUV', 'In-Line Engine 4 Cylinder', '2.5 Liter', '1395cc', '58 Liter', '455 hp @5000 rpm', 'Automatic 7-Speed', 'Turbo Standar', 'audiq3.jpg', '-'),
(12, 'Showroam Kendaraan SUV', 'Jeep Grand Cherokee 2015', 'Rp 1.755.000.000', 'SUV', 'V-Engine 6 Cylinder', '3 Liter', '3000cc', '93 Liter', '294 hp @6400 rpm', 'Manual 6-Speed', '-', 'cherokee.jpg', '-'),
(13, 'Showroam Kendaraan SUV', 'Land Rover-Range Rover', 'Rp 1.544.000.000', 'SUV', 'Diesel In-Line Engine 4 Cylinder', '3 Liter', '2996cc', '67 Liter', '434 hp @5500 rpm', 'Automatic 9-Speed', '-', 'rr.jpg', '-'),
(14, 'Showroam Kendaraan SUV', 'Mitsubishi Pajero Sport', 'Rp 650.000.000', 'SUV', 'Diesel In-Line Engine 4 Cylinder', '6.2 Liter', '2477cc', '68 Liter', '179 hp @4000 rpm', 'Automatic 8-Speed', 'Turbo Standar', 'pajero.jpg', '-'),
(15, 'Showroam Kendaraan SUV', 'Isuzu MU-X', 'Rp 600.000.000', 'SUV', 'Diesel In-Line 4 Cylinder', '6 Liter', '1898cc', '80 Liter', '148 hp @3600 rpm', 'Automatic 6-Speed', 'Supercharger 36 psi', 'isuzumux.jpg', '-'),
(16, 'Showroam Kendaraan Sport', 'BMW M3 GTR', 'Rp 4.708.200.000', 'Sport', 'V-Engine 8 Cylinder', '5.5 Liter', '3997cc', '61 Liter', '450 hp @7000 rpm', 'Manual 6-Speed', 'Turbo charger 32 psi', 'm3.png', '-'),
(17, 'Showroam Kendaraan Sport', 'Mazda RX-7', 'Rp 430.847.000', 'Sport', 'Twin-Chamber Rotary', '4 Liter', '1146cc', '75 Liter', '240 hp @6500 rpm', 'Manual 5-Speed', 'Twin-Turbo 20 psi', 'rx7.jpg', '-'),
(18, 'Showroam Kendaraan Sport', 'Nissan Skyline GTR R-34', 'Rp 1.925.606.000', 'Sport', 'RB-26 Engine 6 Cylinder', '5 Liter', '2600cc', '65 Liter', '280 hp @5600 rpm', 'Manual 6-Speed', 'Twin Turbo 35 psi', 'skyliner34.jpg', '-'),
(19, 'Showroam Kendaraan Sport', 'Mitsubishi Lancer Evo X', 'Rp 2.511.040.000', 'Sport', 'In-Line 4 Cylinder', '4.7 Liter', '1998cc', '55 Liter', '290 hp @6500 rpm', 'Automatic 6-Speed', 'Turbo Charger 20 psi', 'lancerx.jpg', '-'),
(20, 'Showroam Kendaraan Sport', 'Toyota Supra MK-4', 'Rp 2.051.000.000', 'Sport', '2JZ Engine 6 Cylinder', '5.5 Liter', '3000cc', '80 Liter', '330 hp @5600 rpm', 'Manual 6-Speed', 'Twin Turbo 30 psi', 'mk4.png', '-'),
(21, 'Showroam Kendaraan Supercar', 'Porsche Carrera GT', 'Rp 20.402.200.000', 'Supercar', 'V-Engine 10 Cylinder', '10.5 Liter', '5733cc', '92 Liter', '605 hp @8000 rpm', 'Manual 6-Speed', 'Twin Turbo 13 psi', 'carreragt.jpg', '-'),
(22, 'Showroam Kendaraan Supercar', 'W-Motor Lykan Hypersport', 'Rp 53.359.600.000', 'Supercar', 'Flat Engine 6 Cylinder', '3.7 Liter', '3746cc', '75 Liter', '780 hp @7100 rpm', 'Manual Sequential 6-Speed', 'Twin Turbo 28 psi', 'lykan.jpg', '-'),
(23, 'Showroam Kendaraan Supercar', 'Chevrolet Corvette ZR1', 'Rp 2.356.132.500', 'Supercar', 'V-Engine 8 Cylinder', '6.2 Liter', '6162cc', '70 Liter', '755 hp @6400 rpm', 'Manual 7-Speed', 'Supercharger 14 psi', 'corvettezr1.png', '-'),
(24, 'Showroam Kendaraan Supercar', 'Koenigsegg Jesko Absolut', 'Rp 44.570.960.000', 'Supercar', 'V-Engine 8 Cylinder', '5 Liter', '5065cc', '72 Liter', '1280hp @7800 rpm', 'Light Speed 9-Speed', 'Twin Turbo 31 psi', 'jesko.png', '-'),
(25, 'Showroam Kendaraan Supercar', 'Bugatti Chiron', 'Rp 60.043.128.000', 'Supercar', 'W-Engine 16 Cylinder', '15 Liter', '8000cc', '100 Liter', '1479 hp @6700 rpm', 'Dual-Clutch Automatic 7-Speed', 'Quad-Turbo 27 psi', 'chiron.jpg', '-'),
(26, 'Showroam Kendaraan Off-Road', 'Toyota Land Cruise 1990', 'Rp 157.075.500', 'Off-Road', 'In-Line 6 Cylinder', '4 Liter', '3955cc', '95 Liter', '155 hp @4200 rpm', 'Automatic 6-Speed', '-', 'cruise.jpg', '-'),
(27, 'Showroam Kendaraan Off-Road', 'Hummer H2', 'Rp 785.377.500', 'Off-Road', 'V-Engine 8 Cylinder', '6.2 Liter', '6162cc', '121 Liter', '398 hp @5700 rpm', 'Automatic 6-Speed', '-', 'h2.jpg', '-'),
(28, 'Showroam Kendaraan Off-Road', 'Land Rover: Defender', 'Rp 2.016.000.000', 'Off-Road', 'In-Line 6 Cylinder', '5 Liter', '4997cc', '89 Liter', '295 hp @4000 rpm', 'Automatic 8-Speed', '-', 'defender.jpg', '-'),
(29, 'Showroam Kendaraan Off-Road', 'Chevrolet Colorado ZR2 Bison', 'Rp 942.453.000', 'Off-Road', 'Diesel In-Line 4 Cylinder', '2.7 Liter', '2800cc', '81 Liter', '310 hp @5600 rpm', 'Automatic 8-Speed', '-', 'colorado.jpg', '-'),
(30, 'Showroam Kendaraan Off-Road', 'Jeep Wrangler Rubicon', 'Rp 1.730.000.000', 'Off-Road', 'In-Line Engine 6 Cylinder', '3.6 Liter', '1995cc', '81 Liter', '285 hp @6400 rpm', 'Automatic 8-Speed', '-', 'rubicon.png', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`, `role`) VALUES
('admin1@gmail.com', 'admin', 'admin'),
('ceo1@gmail.com', 'ceo', 'ceo'),
('commissioner@gmail.com', 'komisaris', 'commissioner'),
('customerservice@gmail.com', 'cs123', 'customer_service'),
('headadmin@gmail.com', 'head', 'head_admin'),
('user@gmail.com', 'user', 'user'),
('webdev@gmail.com', 'developer', 'developer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `orderan` varchar(500) NOT NULL,
  `nama_depan` varchar(500) NOT NULL,
  `nama_belakang` varchar(500) NOT NULL,
  `provinsi` varchar(500) NOT NULL,
  `kota` varchar(500) NOT NULL,
  `kecamatan` varchar(500) NOT NULL,
  `kode_pos` varchar(500) NOT NULL,
  `pembayaran` varchar(500) NOT NULL,
  `no_hp` varchar(500) NOT NULL,
  `tanggal` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`orderan`, `nama_depan`, `nama_belakang`, `provinsi`, `kota`, `kecamatan`, `kode_pos`, `pembayaran`, `no_hp`, `tanggal`) VALUES
('Ford Mustang GT 2005 || American Muscle || Rp 359.392.000', 'A', 'B', 'Jateng', 'Cirebon', 'alwjdi', '51523', 'atm', '0182838', 'Sabtu, September 2003'),
('Nissan Skyline GTR R-34 || Sport || Rp 1.925.606.000', 'Djordee', 'Vjekoslav', 'Chernobyl', 'Moskva', 'Russia', '55555', '2. Kredit', '0191827365', '2024-02-07'),
('Porsche Carrera GT || Supercar || Rp 20.402.200.000', 'Afif', 'Rindyansyah', 'Jateng', 'Pekalongan', 'Wiradesa', '51152', 'Atm', '08122622321', 'Sabtu, 14 Oktober 1004');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chat_visitor`
--
ALTER TABLE `chat_visitor`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `detail_kendaraan`
--
ALTER TABLE `detail_kendaraan`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`orderan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_kendaraan`
--
ALTER TABLE `detail_kendaraan`
  MODIFY `id_mobil` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
