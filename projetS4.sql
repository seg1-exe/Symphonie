-- phpMyAdmin SQL Dump
-- version 5.2.0-dev+20210926.4834c5fe7d
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2022 at 06:51 PM
-- Server version: 8.0.28-0ubuntu0.20.04.3
-- PHP Version: 8.0.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetS4`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pochette` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `spotify` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `nom`, `pochette`, `spotify`, `date`) VALUES
(1, 'Akimbo', 'ab67616d0000b273409c5540246461d5fc587ae5.jpg', 'https://open.spotify.com/embed/album/6V9TAy7JYau3aChQfx4hCq?utm_source=generator', '2021-12-11'),
(2, 'UMLA', 'ab67616d0000b2731e546007515b02884d72595f.jpg', 'https://open.spotify.com/embed/album/7KNQIQwGaW7FnFsa7I3Kl7?utm_source=generator', '2018-09-21'),
(3, 'Lune Noire', 'ab67616d0000b27386a39c5bfbb8560d5386eaad.jpg', 'https://open.spotify.com/embed/album/6xdPz6iznIHEyVLpCwCbKl?utm_source=generator', '2019-09-27'),
(4, 'Spectre', 'index.jpg', 'https://open.spotify.com/embed/album/0jEPLrjht3CgyBCuyh9CyV?utm_source=generator', '2021-11-05'),
(5, 'Couleur De Ma Peine', 'ab67616d00001e0263295426613ca48a50e434a9.jpg', 'https://open.spotify.com/embed/album/2N9IozZraUsmwNPd4k69YB?utm_source=generator', '2022-02-25'),
(6, 'Cauchemar', 'ab67616d0000b273abfbbc8ff71a8d7e11ebdc24.jpg', 'https://open.spotify.com/embed/album/1KfhdcAlmWQdQHDvsFAGEa?utm_source=generator', '2021-03-05'),
(7, 'Tombolo', 'ab67616d0000b273259b7f436ad8a7b2a68ff06f.jpg', 'https://open.spotify.com/embed/album/5x2zkoZogYhBNF6pYJIzk3?utm_source=generator', '2022-04-01'),
(8, 'Agartha', 'ab67616d0000b27313a6c878eab9e3d274112bee.jpg', 'https://open.spotify.com/embed/album/7LnLIhDFtmXNaGpXX6VCv3?utm_source=generator', '2017-01-20'),
(9, 'Foxtrot', 'ab67616d0000b27369337b6f76bd7943acdcd192.jpg', 'https://open.spotify.com/embed/album/1P9AuGH530Oy9JEW5XVuxo?utm_source=generator', '1972-10-06'),
(10, 'El playlist de Anoche', 'ab67616d0000b273223ebe2c8307007cde79b353.jpg', 'https://open.spotify.com/embed/album/5BRmh1Zjhc83GybZiRhq5e?utm_source=generator', '2021-07-23'),
(11, '(III)', 'ab67616d0000b273234944a4efee1071a9efee04.jpg', 'https://open.spotify.com/embed/album/1NIfkZIYVAO6vnfmFOilHc?utm_source=generator', '2012-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `albums_artistes`
--

CREATE TABLE `albums_artistes` (
  `albums_id` int NOT NULL,
  `artistes_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums_artistes`
--

INSERT INTO `albums_artistes` (`albums_id`, `artistes_id`) VALUES
(1, 2),
(2, 1),
(3, 3),
(4, 3),
(5, 4),
(6, 5),
(7, 6),
(8, 7),
(9, 8),
(10, 9),
(11, 10);

-- --------------------------------------------------------

--
-- Table structure for table `albums_categorie`
--

CREATE TABLE `albums_categorie` (
  `albums_id` int NOT NULL,
  `categorie_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums_categorie`
--

INSERT INTO `albums_categorie` (`albums_id`, `categorie_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 3),
(3, 1),
(3, 3),
(4, 1),
(4, 3),
(5, 1),
(5, 3),
(5, 5),
(6, 1),
(6, 3),
(7, 1),
(7, 3),
(8, 1),
(8, 3),
(9, 6),
(10, 7),
(11, 8);

-- --------------------------------------------------------

--
-- Table structure for table `artistes`
--

CREATE TABLE `artistes` (
  `id` int NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artistes`
--

INSERT INTO `artistes` (`id`, `nom`) VALUES
(1, 'Alpha Wann'),
(2, 'Ziak'),
(3, 'Sheldon'),
(4, 'Zamdane'),
(5, 'Wallace Cleaver'),
(6, 'Kalash'),
(7, 'Vald'),
(8, 'Genesis'),
(9, 'Tommy Torres'),
(10, 'Crystal Castles');

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'Rap'),
(2, 'Drill'),
(3, 'RapFR'),
(4, 'RapUS'),
(5, 'New Wave'),
(6, 'Rock'),
(7, 'Latin'),
(8, 'Electro');

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220303162934', '2022-03-03 17:29:55', 142),
('DoctrineMigrations\\Version20220303163124', '2022-03-03 17:31:29', 133),
('DoctrineMigrations\\Version20220303163350', '2022-03-03 17:33:58', 140),
('DoctrineMigrations\\Version20220303170522', '2022-03-03 18:05:32', 348),
('DoctrineMigrations\\Version20220303180635', '2022-03-03 19:06:41', 278);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `username`) VALUES
(2, 'root@root.fr', '[\"ROLE_USER\", \"ROLE_ADMIN\"]', '$2y$13$wFPLMKvKCYVv5of0H2BUeeIVpnfb32L6eGZa8r9ZJtKW8rx52Zwy.', 'root');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `albums_artistes`
--
ALTER TABLE `albums_artistes`
  ADD PRIMARY KEY (`albums_id`,`artistes_id`),
  ADD KEY `IDX_EB7E3A4CECBB55AF` (`albums_id`),
  ADD KEY `IDX_EB7E3A4C96E1EAF4` (`artistes_id`);

--
-- Indexes for table `albums_categorie`
--
ALTER TABLE `albums_categorie`
  ADD PRIMARY KEY (`albums_id`,`categorie_id`),
  ADD KEY `IDX_8067791CECBB55AF` (`albums_id`),
  ADD KEY `IDX_8067791CBCF5E72D` (`categorie_id`);

--
-- Indexes for table `artistes`
--
ALTER TABLE `artistes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `artistes`
--
ALTER TABLE `artistes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums_artistes`
--
ALTER TABLE `albums_artistes`
  ADD CONSTRAINT `FK_EB7E3A4C96E1EAF4` FOREIGN KEY (`artistes_id`) REFERENCES `artistes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_EB7E3A4CECBB55AF` FOREIGN KEY (`albums_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `albums_categorie`
--
ALTER TABLE `albums_categorie`
  ADD CONSTRAINT `FK_8067791CBCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_8067791CECBB55AF` FOREIGN KEY (`albums_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
