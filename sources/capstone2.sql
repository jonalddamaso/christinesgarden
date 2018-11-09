-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2018 at 09:53 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Outdoor Plant'),
(2, 'Indoor Plant'),
(3, 'Indoor/Outdoor Plant'),
(4, 'Succulent Plant');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `price` decimal(18,2) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `image_path`, `price`, `category_id`) VALUES
(1, 'Adonidia Palm', 'Best known as ''Christmas Palm,'' the adonidia palm is a showy, highly ornamental palm that works beautifully in small landscape areas', '../assets/images/adonidia_palm_outdoor.png', '500.00', 1),
(2, 'Elephant Ear Plant', 'Alocasia and colocasia, better known as elephant ears, are impressive plants that are prized for their dramatic foliage. Their huge leaves can measure up to 2 feet across and the foliage color ranges from lime green to almost black. Upright elephant ears ', '../assets/images/elephant_ear_plants_indoor.jpg', '500.00', 2),
(3, 'Snake Plant', 'Sansevieria trifasciata is a species of flowering plant in the family Asparagaceae, native to tropical West Africa from Nigeria east to the Congo. It is most commonly known as the snake plant, mother-in-law''s tongue, and viper''s bowstring hemp, among othe', '../assets/images/SNAKE-PLANT.png', '449.00', 3),
(5, 'Yucca ', 'Yucca is a genus of perennial shrubs and trees in the family Asparagaceae, subfamily Agavoideae. Its 40 to 50 species are notable for their rosettes of evergreen, tough, sword-shaped leaves and large terminal panicles of white or whitish flowers. They are', '../assets/images/yucca-plant.png', '550.00', 1),
(8, 'Echeveria Panda', 'Echeveria succulent paired with our panda planter. Dimensions: 13 cm x 7 cm x 7.5 cm. This pet-friendly succulent is ideal for home and offices.Your plant height, size and colour may vary slightly.', '../assets/images/succulent/echeveria-panda.jpg', '699.00', 4),
(9, 'Echeveria Zebra', 'Echeveria succulent paired with our zebra planter. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly', '../assets/images/succulent/echeveria-zebra.jpg', '699.00', 4),
(10, 'Sunburst Corgi', 'Sunburst succulent paired with our Corgi planter. Dimensions: 13.5 cm x 7.5 cm x 7 cm This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly.', '../assets/images/succulent/succulents-sunburst-corgi.jpg', '699.00', 4),
(11, 'Echeveria Bear', 'Echeveria succulent paired with our bear planter. Dimensions: 13 cm x 7 cm x 7.5 cm This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly.', '../assets/images/succulent/echeveria-bear.jpg', '699.00', 4),
(12, 'Echeveria Hippo', 'Echeveria succulent paired with our hippo planter. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly', '../assets/images/succulent/echeveria-hippo.jpg', '699.00', 4),
(13, 'Jelly Bean Dog', 'Echeveria succulent paired with our dog planter. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly', '../assets/images/succulent/jelly-bean-dog.jpg', '699.00', 4),
(14, 'Echeveria Bulldog', 'Echeveria succulent paired with our Bulldog planter. Dimensions: 13 cm x 7 cm x 7.5 cm This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly.', '../assets/images/succulent/succulents-echeveria-bulldog.jpg', '699.00', 4),
(15, 'Echeveria Giraffe', 'Echeveria succulent paired with our giraffe planter. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly', '../assets/images/succulent/echeveria-giraffe.jpg', '699.00', 4),
(16, 'Echeveria Crocodile', 'Echeveria succulent paired with our Crocodile planter. Dimensions: 17 cm x 7 cm x 5 cm. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly.', '../assets/images/succulent/succulents-echeveria-crocodile-1.jpg', '699.00', 4),
(17, 'Hobbit Jade Elephant', 'Echeveria succulent paired with our elephant planter. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly.', '../assets/images/succulent/succulents-hobbit-jade-elephant.jpg', '699.00', 4),
(18, 'Cactus Undatus', 'Cactus succulent paired with our white planter. Dimensions: 13 cm x 7 cm x 7.5 cm. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly.', '../assets/images/succulent/succulents-cactus-undatus-1.jpg', '499.00', 4),
(19, 'Echeveria Squirrel', 'Echeveria succulent paired with our squirrel planter. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly.', '../assets/images/succulent/echeveria-squirrel.jpg', '1299.00', 4),
(30, 'Echeveria Whale Will', 'Echeveria succulent paired with our whale planter Will. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly. ', '../assets/images/succulent/succulents-echeveria-whale-will.jpg', '699.00', 4),
(31, 'Echeveria Whale Rosie', 'Echeveria succulent paired with our whale planter Rosie. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly. ', '../assets/images/succulent/echeveria-whale-rosie.jpg', '699.00', 4),
(39, 'Echeveria Barney', 'Echeveria succulent paired with our Crocodile planter Barney. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly.', '../assets/images/succulent/succulents-echeveria-barney.jpg', '699.00', 4),
(40, 'Echeveria Rooster', 'Echeveria succulent paired with our Rooster planter. Dimensions: 12 cm x 11 cm x 8.5 cm. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly.', '../assets/images/succulent/succulents-echeveria-rooster-1.jpg', '699.00', 4),
(41, 'Echeveria Cat', 'Echeveria succulent paired with our cat planter. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly', '../assets/images/succulent/echeveria-cat.jpg', '699.00', 4),
(42, 'Philodendron Selloum', 'This plant has elephant ear-like leaves that brings out the exotic lushness of the tropics. Broadleaf Evergreen Plant Type. Approx. 80cm in height. Low maintenance plant that adds life into your home. A perfect decoration to enhance indoor spaces.', '../assets/images/philodendron-selloum.jpg', '1099.00', 2),
(43, 'Philodendron Giganteum', 'This plant has heart-shaped leaves with a vibrant mix of greens.Vine/Liana Plant Type. Approx. 45cm in height.Low maintenance plant that adds life into your home. A perfect decoration to enhance indoor spaces.', '../assets/images/philodendron-giganteum.jpg', '699.00', 2),
(44, 'Peperomia Obtusifolia', 'This plant has vibrant green soft-surfaced leaves.Also known as the Baby Rubber Plant.Approx. 25cm in height.Low maintenance plant that adds life into your home. A perfect decoration to enhance indoor spaces.', '../assets/images/peperomia-obtusifolia.jpg', '799.00', 2),
(45, 'Bromeliad', 'Bromeliad plants will give an exotic touch to your home. Approx. 50cm in height. Low maintenance plant that adds life into your home. A perfect decoration to enhance indoor spaces.', '../assets/images/bromeliad.jpg', '699.00', 2),
(46, 'Tall Banana Leaf', 'A tall banana leaf', '../assets/images/tall_banana_plant-outdoor-1.png', '800.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_code` varchar(255) NOT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_id` int(11) NOT NULL,
  `payment_mod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `transaction_code`, `purchase_date`, `status_id`, `payment_mod_id`) VALUES
(4, 4, '4912A3-1541473181', '2018-11-05 19:59:41', 2, 1),
(5, 4, '5C9E22-1541473216', '2018-11-05 20:00:16', 3, 1),
(6, 4, '3DB6E3-1541473373', '2018-11-05 20:02:53', 2, 1),
(7, 4, '617489-1541473478', '2018-11-05 20:04:38', 3, 1),
(8, 4, 'C93C5E-1541473569', '2018-11-05 20:06:09', 2, 1),
(9, 4, '19D673-1541474155', '2018-11-05 20:15:55', 1, 1),
(10, 4, 'D034D5-1541474228', '2018-11-05 20:17:08', 1, 1),
(11, 4, '330FF8-1541474291', '2018-11-05 20:18:11', 1, 1),
(12, 4, 'A192C2-1541474295', '2018-11-05 20:18:15', 1, 1),
(13, 4, '1A23A2-1541474407', '2018-11-05 20:20:07', 1, 1),
(14, 4, 'C073C9-1541474495', '2018-11-05 20:21:35', 1, 1),
(15, 4, 'C71D99-1541475059', '2018-11-05 20:30:59', 1, 1),
(16, 4, '949EF3-1541475269', '2018-11-05 20:34:29', 1, 1),
(17, 4, '6A5171-1541479910', '2018-11-05 21:51:50', 1, 1),
(18, 10, '5D5EDA-1541482784', '2018-11-05 22:39:44', 1, 1),
(19, 10, '3C68E2-1541482896', '2018-11-05 22:41:36', 1, 1),
(20, 2, 'D69B4C-1541556608', '2018-11-06 19:10:08', 1, 1),
(21, 11, 'D7ED7A-1541744452', '2018-11-08 23:20:52', 1, 1),
(22, 11, '9121D4-1541744456', '2018-11-08 23:20:56', 1, 1),
(23, 11, '83ED61-1541746130', '2018-11-08 23:48:50', 1, 1),
(24, 11, 'CA7FBB-1541746310', '2018-11-08 23:51:50', 1, 1),
(25, 11, '41381F-1541746365', '2018-11-08 23:52:45', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders_item`
--

CREATE TABLE `orders_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_item`
--

INSERT INTO `orders_item` (`id`, `order_id`, `item_id`, `quantity`, `price`) VALUES
(1, 5, 8, 1, '699.00'),
(2, 7, 10, 1, '699.00'),
(3, 8, 5, 1, '550.00'),
(4, 9, 8, 1, '699.00'),
(5, 13, 10, 1, '699.00'),
(6, 14, 9, 1, '699.00'),
(7, 15, 1, 1, '500.00'),
(8, 16, 11, 1, '699.00'),
(9, 17, 3, 1, '449.00'),
(10, 18, 9, 1, '699.00'),
(11, 18, 44, 1, '799.00'),
(12, 19, 9, 1, '699.00'),
(13, 19, 10, 1, '699.00'),
(14, 20, 5, 1, '550.00'),
(15, 21, 3, 2, '449.00');

-- --------------------------------------------------------

--
-- Table structure for table `payment_modes`
--

CREATE TABLE `payment_modes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_modes`
--

INSERT INTO `payment_modes` (`id`, `name`) VALUES
(1, 'COD'),
(2, 'PayPal');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`) VALUES
(1, 'pending'),
(2, 'completed'),
(3, 'cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneNumber` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `gender`, `username`, `password`, `phoneNumber`, `email`, `address`, `role`) VALUES
(2, 'Jon', 'Damaso', '', 'jon0889', '$2y$10$x62s0RDcqL9v.OCiRUFl3eYSknVatrtQLSmjRRPzNUfONMiRK6WRG', '', 'damasojonald@gmail.com', '47 Maginhawa Street Diliman Quezon City', 1),
(3, 'Mia', 'Damaso', '', 'admin', '$2y$10$OACIUtMothP9T42116CkN.145dMfEjBd34i2.FUccb.EcS6bVy0gy', '', 'miadamaso@gmail.com', '47 T Hernandez', 1),
(4, 'Lito', 'Erilla', '', 'lito123', '$2y$10$mWcIf03CgXZRZ1dHkd77uOapoI28eDDS7W.btpIu.8Z4dlPON3yoC', '', 'lito@gmail.com', 'SM Light manda', 2),
(10, 'Jonald', 'Damaso', '', 'jondamaso', '$2y$10$8Rg.qAFD.e0jo1F/eChS3.wJX5XLleaN81tr1EQSNCZl7L226qi2m', '', 'damasojonald@gmail.com', '47 T Hernandez Old Zanega Mandaluyong City', 1),
(11, 'shaira', 'calma', '', 'shaira', '$2y$10$RsYmVNn7L0eTjz6bym58IeitJBpeIVTbnXAHlKzQIb9bIVYa22dni', '', '', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_fk0` (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_fk0` (`user_id`),
  ADD KEY `orders_fk1` (`status_id`),
  ADD KEY `orders_fk2` (`payment_mod_id`);

--
-- Indexes for table `orders_item`
--
ALTER TABLE `orders_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_item_fk0` (`order_id`),
  ADD KEY `orders_item_fk1` (`item_id`);

--
-- Indexes for table `payment_modes`
--
ALTER TABLE `payment_modes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `orders_item`
--
ALTER TABLE `orders_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `payment_modes`
--
ALTER TABLE `payment_modes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_fk0` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_fk1` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `orders_fk2` FOREIGN KEY (`payment_mod_id`) REFERENCES `payment_modes` (`id`);

--
-- Constraints for table `orders_item`
--
ALTER TABLE `orders_item`
  ADD CONSTRAINT `orders_item_fk0` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orders_item_fk1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
