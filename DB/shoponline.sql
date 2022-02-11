-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 09:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoponline`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, '', '', '', ''),
(4, '', '', '', ''),
(5, 'Argnesa', 'argnesahajdari@outlook.com', '02445583', 'need help');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `iduser` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL,
  `foto` longtext NOT NULL,
  `titulli` longtext NOT NULL,
  `teksti` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`iduser`, `idproduct`, `foto`, `titulli`, `teksti`) VALUES
(1, 1, 'https://shop.beautyhooked.com/image/cache/catalog/1111/666/9-720x1000.png', '\r\nMECCA\r\nFace Moisturizer', 'The MECCA view:\r\nThis non-comedogenic, fragrance-free moisturiser will slot into any and all beauty regimens seamlessly. Suitable for all skin types, this daily facial moisturiser conditions the skin for a soft-to-the touch finish thanks to oat and orange-peel extracts while shea butter helps moisturise and sodium hyaluronate hydrates and plumps. Formulated with a combination of humectants and emollients, skin is left hydrated and, importantly, never greasy or oily. Use in the morning to create the perfect base for your makeup or before bed for continuous hydration while you sleep.'),
(4, 2, 'https://cdn.shopify.com/s/files/1/0047/4067/7699/products/fruity-magnolia-women-inspired-by-versaces-bright-crystal-995444_1024x1024.png?v=1610631753', '\r\nVichy\r\nIdéalia Day Cream', 'Vichy’s new glow energizing cream with antioxidant extract of fermented Black Tea, Adenosine, and antioxidant Blueberry Polyphenols infuse skin '),
(4, 3, 'https://is.loccitane.com/is_en/products_images/prod_1289/c_burst-of-cheerfulness-rose-fragranced-water--l-occitane-front-0.jpg', 'Vital-E Microbiome Age Defense Eye Cream', 'Visibly help improve the skin barrier with vital moisture and support your skin’s natural microbiome, an invisible protective shield that helps defend from the aging effects of environmental aggressors. Powered by innovative Gamma E Antioxidant Technology, prebiotic and probiotic ingredients.'),
(4, 9, 'https://cdn.shopify.com/s/files/1/1824/2901/products/Rose_Face_Oil_Closed_PDP.png?v=1578419778', '\r\nFULL BLOOM\r\nFACE MOISTURIZER SET', 'Let your skin bloom with the Full Bloom set. Featuring your favorite floral-infused products Good Mood, Budding Romance, and matching rose quartz face roller. '),
(4, 10, 'https://cdn.shopify.com/s/files/1/0902/2442/products/sb_rosemilk.png?v=1601667944', '\r\nHorsetail Base Coat Polish', 'Finally get rosy girl. Take it all the way with one of our rose inspired shades of Fruit Pigmented Lip Glaze in Rose Petal, Fruit Pigmented Lip Glaze in Daiquiri or Fruit Pigmented Lip Glaze in Vixen for a healthy and sweet look. Our Lip Glazes have a moisturizing base of avocado and cocoa butter for intense hydration.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `productslider`
--

CREATE TABLE `productslider` (
  `idslider` int(100) NOT NULL,
  `foto` longtext NOT NULL,
  `text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productslider`
--

INSERT INTO `productslider` (`idslider`, `foto`, `text`) VALUES
(1, 'https://imagena.loccitane.com/dw/image/v2/BDQL_PRD/on/demandware.static/-/Sites-occ_master/default/dw02c42e73/large/24ET050RC20H.png?sw=300&sh=300', '\r\nFresh\r\nRose & Hyaluronic Acid Deep Hydration Moisturizer'),
(2, 'https://i.pinimg.com/originals/d1/24/da/d124da0038ca02fd02b240c19dea26af.png', '\r\n\r\nSephora\r\nWatermelon Pink Juice Oil-Free Moisturizer '),
(3, 'https://cdn11.bigcommerce.com/s-g7kyi3l8xs/images/stencil/1280x1280/products/7572/24167/Huile-Rose-Elixir-Ultime-100ml-01-Kerastase_1024x10242x__89335.1573457618.png?c=2', '\r\nMACARONS & DAYDREAMS\r\nFRESH ROSE DEEP HYDRATION FACE CREAM | MACARO'),
(4, 'https://cdn.shopify.com/s/files/1/0011/7899/2704/products/micellar_water_200m_800x.png?v=1594796807', '\r\nMACARONS & DAYDREAMS m');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `idteam` int(111) NOT NULL,
  `name` longtext NOT NULL,
  `position` longtext NOT NULL,
  `bio` longtext NOT NULL,
  `foto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`idteam`, `name`, `position`, `bio`, `foto`) VALUES
(1, 'Argnesa Hajdari', 'Ceo', 'Argnesa Hajdari eshte .......', 'https://www.keepandshare.com/userpics/v/a/l/m/iraademii/2021-02/ss/argnesa-4976253.jpg?ts=1613934456'),
(7, 'Valmira Ademi', 'Ceo', 'Valmira Ademi eshte .......', 'https://www.keepandshare.com/userpics/v/a/l/m/iraademii/2021-02/ss/valmiraa-13359708.jpg?ts=1613934457');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(7, 'Argnesa', 'argnesahajdari@outlook.com', 'argnesaa654321', 'user'),
(8, 'Argnesa', 'argnesahajdari@outlook.com', 'argnesaa654321', 'user'),
(9, 'valmira', 'valmiraademii@gmail.com', 'valmira123', 'admin'),
(12, 'valmira', 'valmira@gmail.com', '123123', 'user'),
(13, 'Valmira', 'valmiraademii@gmail.com', '123456', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idproduct`),
  ADD UNIQUE KEY `5` (`iduser`,`idproduct`);

--
-- Indexes for table `productslider`
--
ALTER TABLE `productslider`
  ADD PRIMARY KEY (`idslider`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`idteam`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `idproduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `idteam` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
