-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2025 at 12:19 PM
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
-- Database: `new`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(50) NOT NULL,
  `pro_id` int(50) NOT NULL,
  `session_id` int(50) NOT NULL,
  `qty` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pro_id`, `session_id`, `qty`) VALUES
(1, 0, 0, 0),
(2, 0, 1, 0),
(3, 9, 1, 1),
(4, 10, 1, 5),
(5, 2, 1, 8),
(6, 11, 1, 1),
(7, 12, 1, 2),
(8, 16, 1, 3),
(9, 15, 1, 2),
(10, 1, 1, 4),
(11, 3, 1, 6),
(12, 6, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(1, 'kasbi2233@gmail.com', 'kasbi2233@gmail.com', '$2y$10$Su4e6/eBVsr6XR6Tn3sWEOK/3CeMXPZ3dosjr0jbzvq'),
(2, 'haniya', 'haniya123@gmail.com', '$2y$10$vlGSZCrvBAEtVkYPxV8Wnusc6k44HLoNu8S9IH4rrbz'),
(3, 'fariya', 'fariya654@gmail.com', 'fariya765'),
(4, 'alyana', 'alyana213@gmail.com', 'alyana213'),
(5, 'hifza', 'hifza543@gmail.com', 'hafiza123'),
(6, 'azwa', 'azwz123@gmail.com', 'azwa123'),
(7, 'haniya', 'haniya123@gmal.com', 'haniya123'),
(8, '', '', ''),
(9, 'aliya', 'aliya123@gmail.com', 'aliya123');

-- --------------------------------------------------------

--
-- Table structure for table `view_pro`
--

CREATE TABLE `view_pro` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `stock` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `view_pro`
--

INSERT INTO `view_pro` (`id`, `name`, `price`, `description`, `image`, `stock`) VALUES
(1, 'Dual Concealer Set of 2', 2000, 'Achieve flawless coverage', 'concealer1.jpg', 12),
(2, 'GlowPro Blushen box', 5000, 'Add a natural flush to your cheeks with the GlowPr', 'blushenbox.jpg', 7),
(3, '12 piece of pencil lipstick', 2000, 'Elevate your lip game with this 12-piece pencil li', 'lipstick1.jpg', 11),
(4, 'SilkSkin HD Foundation', 3000, 'Experience flawless, radiant skin all day long wit', 'foundation.jpg', 8),
(5, 'MatteLock Powder', 1000, 'MatteLock Powder controls shine and sets your make', 'facepowder1.jpg', 4),
(6, 'BeautyVault makeup Kit', 5000, 'BeautyVault Makeup Kit: All-in-one professional ma', 'kit.jpg', 6),
(7, 'GlowFit Liquid Base', 2700, 'GlowFit Liquid Base: Lightweight, hydrating founda', 'makeupbase.jpg', 9),
(8, 'Lash Volume Mascara', 1500, 'Lash Volume Mascara – Instantly lifts and adds dra', 'maskara1.jpg', 13),
(9, 'Multiple Silver Shades', 1200, 'Multiple Silver Shades – Dazzling silver tones for', 'silvershades.jpg', 7),
(10, 'GlowFit Liquid primer', 5500, 'GlowFit Liquid Primer – Smooths and preps skin for', 'primer.jpg', 2),
(11, '6 Pack Of Nail Polish', 1800, 'A vibrant set of long-lasting, quick-dry shades fo', 'nailpolishset.jpg', 8),
(12, 'Complete Beauty Vault', 8000, 'An all-in-one premium kit with essentials for a fl', 'fullmakeupbox.jpg', 10),
(13, '4 Shades Of Blushen Box', 1600, 'A stunning blush palette with four versatile shade', 'blushenbox1.jpg', 4),
(14, 'Multiple Brushes Set', 1000, ' A complete set of soft, high-quality brushes for ', 'brushes.jpg', 5),
(15, 'Skin Color Concealer box', 3200, 'Blendable shades to perfectly cover imperfections ', 'conceaalerbox.jpg', 11),
(16, 'Lash Long Wear Mascara', 2000, ' Smudge-proof formula that gives your lashes all-d', 'maskara2.jpg', 9),
(17, 'Cheeky Blush Bloom', 2200, 'Adds a natural, radiant flush to your cheeks for a', 'pinkcolorblushen2.jpg', 13),
(18, 'ShinePop Nail Lacquer', 2500, 'Vibrant, long-lasting color with a glossy finish f', 'nailpolish.jpg', 4),
(19, 'Makeover Magic Kit', 6000, 'All-in-one makeup set for a flawless, stunning loo', 'fullmakeupkit.jpg', 15),
(20, 'Soft Cheeks Blushen', 2000, 'Gentle, natural-looking blush for a smooth and rad', 'pinkcolorblushen.jpg', 6),
(21, 'Multiple Powder', 3500, ' Versatile powder for a flawless, matte finish on ', 'fullmakeupkit1.jpg', 3),
(23, 'Waterproof Eyeliner', 2300, ' Smudge-proof and long-lasting eyeliner that stays', 'eyeliner.jpg', 10),
(24, 'Pack Of Nail Polishes', 4500, ' A vibrant collection of nail colors for a flawles', '12peiceofnailpolish.jpg', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view_pro`
--
ALTER TABLE `view_pro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `view_pro`
--
ALTER TABLE `view_pro`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
