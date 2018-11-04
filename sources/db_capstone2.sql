-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 04, 2018 at 05:26 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_capstone2`
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
  `price` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `image_path`, `price`, `category_id`) VALUES
(1, 'Adonidia Palm', 'Best known as \'Christmas Palm,\' the adonidia palm is a showy, highly ornamental palm that works beautifully in small landscape areas', '../assets/images/adonidia_palm_outdoor.png', '500', 1),
(2, 'Elephant Ear Plant', 'Alocasia and colocasia, better known as elephant ears, are impressive plants that are prized for their dramatic foliage. Their huge leaves can measure up to 2 feet across and the foliage color ranges from lime green to almost black. Upright elephant ears ', '../assets/images/elephant_ear_plants_indoor.jpg', '500', 2),
(3, 'Snake Plant', 'Sansevieria trifasciata is a species of flowering plant in the family Asparagaceae, native to tropical West Africa from Nigeria east to the Congo. It is most commonly known as the snake plant, mother-in-law\'s tongue, and viper\'s bowstring hemp, among othe', '../assets/images/SNAKE-PLANT.png', '449', 3),
(5, 'Yucca ', 'Yucca is a genus of perennial shrubs and trees in the family Asparagaceae, subfamily Agavoideae. Its 40 to 50 species are notable for their rosettes of evergreen, tough, sword-shaped leaves and large terminal panicles of white or whitish flowers. They are', '../assets/images/yucca-plant.png', '550', 1),
(8, 'Echeveria Panda', 'Echeveria succulent paired with our panda planter. Dimensions: 13 cm x 7 cm x 7.5 cm. This pet-friendly succulent is ideal for home and offices.Your plant height, size and colour may vary slightly.', '../assets/images/succulent/echeveria-panda.jpg', '699', 4),
(9, 'Echeveria Zebra', 'Echeveria succulent paired with our zebra planter. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly', '../assets/images/succulent/echeveria-zebra.jpg', '699', 4),
(10, 'Sunburst Corgi', 'Sunburst succulent paired with our Corgi planter. Dimensions: 13.5 cm x 7.5 cm x 7 cm This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly.', '../assets/images/succulent/succulents-sunburst-corgi.jpg', '699', 4),
(11, 'Echeveria Bear', 'Echeveria succulent paired with our bear planter. Dimensions: 13 cm x 7 cm x 7.5 cm This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly.', '../assets/images/succulent/echeveria-bear.jpg', '699', 4),
(12, 'Echeveria Hippo', 'Echeveria succulent paired with our hippo planter. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly', '../assets/images/succulent/echeveria-hippo.jpg', '699', 4),
(13, 'Jelly Bean Dog', 'Echeveria succulent paired with our dog planter. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly', '../assets/images/succulent/jelly-bean-dog.jpg', '699', 4),
(14, 'Echeveria Bulldog', 'Echeveria succulent paired with our Bulldog planter. Dimensions: 13 cm x 7 cm x 7.5 cm This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly.', '../assets/images/succulent/succulents-echeveria-bulldog.jpg', '699', 4),
(15, 'Echeveria Giraffe', 'Echeveria succulent paired with our giraffe planter. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly', '../assets/images/succulent/echeveria-giraffe.jpg', '699', 4),
(16, 'Echeveria Crocodile', 'Echeveria succulent paired with our Crocodile planter. Dimensions: 17 cm x 7 cm x 5 cm. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly.', '../assets/images/succulent/succulents-echeveria-crocodile-1.jpg', '699', 4),
(17, 'Hobbit Jade Elephant', 'Echeveria succulent paired with our elephant planter. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly.', '../assets/images/succulent/succulents-hobbit-jade-elephant.jpg', '699', 4),
(18, 'Cactus Undatus', 'Cactus succulent paired with our white planter. Dimensions: 13 cm x 7 cm x 7.5 cm. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly.', '../assets/images/succulent/succulents-cactus-undatus-1.jpg', '499', 4),
(19, 'Echeveria Squirrel', 'Echeveria succulent paired with our squirrel planter. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly.', '../assets/images/succulent/echeveria-squirrel.jpg', '1299', 4),
(30, 'Echeveria Whale Will', 'Echeveria succulent paired with our whale planter Will. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly. ', '../assets/images/succulent/succulents-echeveria-whale-will.jpg', '699', 4),
(31, 'Echeveria Whale Rosie', 'Echeveria succulent paired with our whale planter Rosie. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly. ', '../assets/images/succulent/echeveria-whale-rosie.jpg', '699', 4),
(39, 'Echeveria Barney', 'Echeveria succulent paired with our Crocodile planter Barney. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly.', '../assets/images/succulent/succulents-echeveria-barney.jpg', '699', 4),
(40, 'Echeveria Rooster', 'Echeveria succulent paired with our Rooster planter. Dimensions: 12 cm x 11 cm x 8.5 cm. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly.', '../assets/images/succulent/succulents-echeveria-rooster-1.jpg', '699', 4),
(41, 'Echeveria Cat', 'Echeveria succulent paired with our cat planter. This pet-friendly succulent is ideal for home and offices. Your plant height, size and colour may vary slightly', '../assets/images/succulent/echeveria-cat.jpg', '699', 4),
(42, 'Philodendron Selloum', 'This plant has elephant ear-like leaves that brings out the exotic lushness of the tropics. Broadleaf Evergreen Plant Type. Approx. 80cm in height. Low maintenance plant that adds life into your home. A perfect decoration to enhance indoor spaces.', '../assets/images/philodendron-selloum.jpg', '1099', 2),
(43, 'Philodendron Giganteum', 'This plant has heart-shaped leaves with a vibrant mix of greens.Vine/Liana Plant Type. Approx. 45cm in height.Low maintenance plant that adds life into your home. A perfect decoration to enhance indoor spaces.', '../assets/images/philodendron-giganteum.jpg', '699', 2),
(44, 'Peperomia Obtusifolia', 'This plant has vibrant green soft-surfaced leaves.Also known as the Baby Rubber Plant.Approx. 25cm in height.Low maintenance plant that adds life into your home. A perfect decoration to enhance indoor spaces.', '../assets/images/peperomia-obtusifolia.jpg', '799', 2),
(45, 'Bromeliad', 'Bromeliad plants will give an exotic touch to your home. Approx. 50cm in height. Low maintenance plant that adds life into your home. A perfect decoration to enhance indoor spaces.', '../assets/images/bromeliad.jpg', '699', 2);

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

-- --------------------------------------------------------

--
-- Table structure for table `payment_modes`
--

CREATE TABLE `payment_modes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `gender`, `username`, `password`, `phoneNumber`, `email`, `address`) VALUES
(1, ' testy', 'test', '', 'Test12', '$2y$10$hFgZjAXqJKerXB2l5CuUAuho2ryplltqaF0kOLCGc9VxYztOoh5me', '', 'damasojonald@gmail.com', 'test 1232'),
(2, 'Jon', 'Damaso', '', 'jon0889', '$2y$10$x62s0RDcqL9v.OCiRUFl3eYSknVatrtQLSmjRRPzNUfONMiRK6WRG', '', 'damasojonald@gmail.com', '47 Maginhawa Street Diliman Quezon City'),
(3, 'Mia', 'Damaso', '', 'admin', '$2y$10$OACIUtMothP9T42116CkN.145dMfEjBd34i2.FUccb.EcS6bVy0gy', '', 'miadamaso@gmail.com', '47 T Hernandez');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_item`
--
ALTER TABLE `orders_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_modes`
--
ALTER TABLE `payment_modes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
