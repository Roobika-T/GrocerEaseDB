-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2018 at 07:08 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `no_of_items` int(10) NOT NULL,
  `cost_of_item` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `cart`
--

DELIMITER $$
CREATE TRIGGER `insert1` AFTER INSERT ON `cart` FOR EACH ROW BEGIN
	update products set no_of_items=no_of_items-1 where ID=new.pid; 
    
END
$$
DELIMITER ;


DELIMITER $$
CREATE TRIGGER `update1` AFTER UPDATE ON `cart` FOR EACH ROW BEGIN
	update products set no_of_items=no_of_items-1 where ID=old.pid;
end
$$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER `delete` BEFORE DELETE ON `cart` FOR EACH ROW BEGIN
	insert into purchase(pcid,ppid,no_of_items,cost_of_items,date_time) VALUES(old.cid,old.pid,old.no_of_items,old.no_of_items*old.cost_of_item,now());
END
$$
DELIMITER ;
-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(10) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `Time_of_join` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `user`, `password`, `phone_no`, `Time_of_join`) VALUES
(1, 'Roobika', 'hello', 1234567890, '2018-02-28 09:39:37'),
(2, 'Bharathi', 'hi', 9876543211, '2018-02-28 03:24:12'),
(3, 'qwerty', 'qwerty', 9876543212, '2018-02-28 02:56:59'),
(4, 'qwerty123', 'uyfkl', 76, '2018-02-28 02:09:40'),
(6, 'wertyu', '123', 9876543210, '2018-02-28 16:14:15');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_username` varchar(20) NOT NULL,
  `e_password` varchar(20) NOT NULL,
  `e_phone_no` bigint(10) NOT NULL,
  `e_date_join` datetime NOT NULL,
  `eid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_username`, `e_password`, `e_phone_no`, `e_date_join`, `eid`) VALUES
('admin', 'hi1234', 8765432190, '2018-02-28 11:11:00', 1),
('ram', 'pingu', 9090807060, '2018-03-01 02:05:54', 2);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(10) NOT NULL,
  `catogery` varchar(20) NOT NULL,
  `Item_name` varchar(20) NOT NULL,
  `cost` int(10) NOT NULL,
  `no_of_items` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `catogery`, `Item_name`, `cost`, `no_of_items`) VALUES
(1, 'Households', 'Air Freshener', 90, 57),
(2, 'Kitchen', 'Sugar', 9, 37),
(4, 'ihiof', 'erfrweg', 9, 0);
(5, 'RiceGrains', 'Basmati Rice', 699, 98),
(6, 'RiceGrains', 'Jasmine Rice', 599, 92),
(7, 'RiceGrains', 'Brown Rice', 399, 100),
(8, 'RiceGrains', 'Sona Masoori Rice', 449, 98),
(9, 'RiceGrains', 'Parboiled Rice', 499, 100),
(10, 'RiceGrains', 'Wheat Flour (Atta)', 299, 100),
(11, 'RiceGrains', 'Semolina (Sooji/Rava', 349, 100),
(12, 'RiceGrains', 'Lentils (Dal)', 249, 98),
(13, 'RiceGrains', 'Flattened Rice (Poha', 149, 98),
(23, 'Spices', 'Turmeric Powder', 199, 100),
(24, 'Spices', 'Cumin Seeds', 249, 100),
(25, 'Spices', 'Coriander Powder', 199, 100),
(26, 'Spices', 'Garam Masala', 299, 98),
(27, 'Spices', 'Red Chili Powder', 149, 100),
(28, 'Spices', 'Mustard Seeds', 199, 100),
(29, 'Spices', 'Fenugreek Seeds', 249, 100),
(30, 'Spices', 'Asafoetida (Hing)', 399, 100),
(31, 'Spices', 'Cardamom Pods', 499, 100),
(32, 'Spices', 'Cloves', 349, 100),
(33, 'Legumes', 'Chickpeas (Chana)', 399, 100),
(34, 'Legumes', 'Red Kidney Beans (Ra', 449, 100),
(35, 'Legumes', 'Black Lentils (Urad ', 499, 100),
(36, 'Legumes', 'Green Lentils (Moong', 349, 100),
(37, 'Legumes', 'Split Bengal Gram (C', 299, 100),
(38, 'Legumes', 'Yellow Split Peas (T', 399, 100),
(39, 'Legumes', 'White Peas (Safed Ma', 549, 100),
(40, 'Legumes', 'Green Peas', 499, 100),
(41, 'Legumes', 'Masoor Dal', 299, 100),
(42, 'FloursMeals', 'Besan (Gram Flour)', 399, 100),
(43, 'FloursMeals', 'Makki Atta (Cornmeal', 449, 100),
(44, 'FloursMeals', 'Jowar Flour', 399, 100),
(45, 'FloursMeals', 'Bajra Flour', 449, 100),
(46, 'FloursMeals', 'Ragi Flour', 399, 100),
(47, 'FloursMeals', 'Rice Flour', 299, 100),
(48, 'FloursMeals', 'Multigrain Flour', 499, 100),
(49, 'Kitchen', 'Cutting Board', 150, 100),
(50, 'Kitchen', 'Chef Knife', 300, 100),
(51, 'Kitchen', 'Mixing Bowls', 200, 100),
(52, 'Kitchen', 'Measuring Cups and S', 250, 100),
(53, 'Kitchen', 'Blender', 400, 100),
(54, 'Kitchen', 'Toaster', 350, 100),
(55, 'Kitchen', 'Coffee Maker', 500, 100),
(56, 'Kitchen', 'Food Processor', 450, 100),
(57, 'Kitchen', 'Kitchen Towels', 50, 100),
(58, 'Kitchen', 'Dish Rack', 200, 100),
(59, 'Household', 'Laundry Detergent', 250, 100),
(60, 'Household', 'All-Purpose Cleaner', 150, 100),
(61, 'Household', 'Toilet Paper', 100, 100),
(62, 'Household', 'Paper Towels', 120, 100),
(63, 'Household', 'Trash Bags', 200, 100),
(64, 'Household', 'Broom and Dustpan Se', 300, 100),
(65, 'Household', 'Mop and Bucket Set', 350, 100),
(66, 'Household', 'Air Freshener', 50, 100),
(67, 'Household', 'Hand Soap', 80, 97),
(68, 'Household', 'Dish Soap', 100, 100),
(69, 'DairyProducts', 'Milk', 50, 100),
(70, 'DairyProducts', 'Cheese', 200, 100),
(71, 'DairyProducts', 'Yogurt', 100, 100),
(72, 'DairyProducts', 'Butter', 80, 100),
(73, 'DairyProducts', 'Eggs', 60, 100),
(74, 'DairyProducts', 'Cream', 150, 100),
(75, 'DairyProducts', 'Cottage Cheese', 120, 97),
(76, 'DairyProducts', 'Sour Cream', 70, 100),
(77, 'DairyProducts', 'Whipped Cream', 180, 100),
(78, 'DairyProducts', 'Condensed Milk', 90, 100),
(79, 'Fruits', 'Apples', 2, 100),
(80, 'Fruits', 'Bananas', 3, 96),
(81, 'Fruits', 'Oranges', 4, 100),
(82, 'Fruits', 'Grapes', 5, 100),
(83, 'Fruits', 'Strawberries', 6, 100),
(84, 'Fruits', 'Watermelon', 10, 100),
(85, 'Fruits', 'Pineapple', 8, 98),
(86, 'Fruits', 'Mangoes', 7, 95),
(87, 'Fruits', 'Kiwi', 4, 100),
(88, 'Fruits', 'Peaches', 5, 100),
(89, 'Vegetables', 'Tomatoes', 2, 100),
(90, 'Vegetables', 'Potatoes', 3, 100),
(91, 'Vegetables', 'Carrots', 2, 100),
(92, 'Vegetables', 'Onions', 2, 100),
(93, 'Vegetables', 'Lettuce', 3, 100),
(94, 'Vegetables', 'Spinach', 4, 100),
(95, 'Vegetables', 'Bell Peppers', 5, 100),
(96, 'Vegetables', 'Broccoli', 6, 100),
(97, 'Vegetables', 'Cucumbers', 2, 100),
(98, 'Vegetables', 'Zucchini', 3, 100);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `pcid` int(10) NOT NULL,
  `ppid` int(10) NOT NULL,
  `no_of_items` int(10) NOT NULL,
  `cost_of_items` int(10) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`pcid`, `ppid`, `no_of_items`, `cost_of_items`, `date_time`) VALUES
(1, 4, 1, 40, '2018-02-27 15:00:02'),
(1, 2, 1, 40, '2018-02-27 15:00:02'),
(1, 4, 3, 120, '2018-02-27 15:04:48'),
(1, 1, 1, 50, '2018-02-27 15:04:48'),
(1, 2, 1, 40, '2018-02-27 15:04:48'),
(1, 1, 2, 100, '2018-02-27 18:42:38'),
(1, 2, 1, 40, '2018-02-27 18:42:39'),
(2, 1, 1, 50, '2018-02-27 18:47:42'),
(2, 2, 1, 40, '2018-02-27 18:47:42'),
(2, 4, 2, 80, '2018-02-27 19:23:21'),
(1, 4, 7, 280, '2018-02-28 01:54:01'),
(1, 2, 2, 18, '2018-02-28 16:45:24'),
(1, 2, 2, 18, '2018-02-28 16:51:01'),
(1, 2, 2, 18, '2018-02-28 16:51:01'),
(1, 2, 1, 9, '2018-02-28 16:51:39'),
(1, 2, 1, 9, '2018-02-28 16:51:39'),
(1, 2, 5, 45, '2018-02-28 17:16:47'),
(1, 1, 1, 90, '2018-02-28 18:49:57'),
(1, 4, 1, 9, '2018-02-28 19:18:02'),
(1, 1, 2, 180, '2018-02-28 19:19:03'),
(1, 2, 1, 9, '2018-02-28 19:19:03'),
(1, 1, 1, 90, '2018-02-28 19:19:49'),
(1, 2, 1, 9, '2018-02-28 19:19:49'),
(1, 1, 5, 450, '2018-02-28 22:10:12'),
(1, 2, 7, 63, '2018-02-28 22:10:12'),
(1, 4, 5, 45, '2018-02-28 22:10:12'),
(1, 1, 1, 90, '2018-03-01 11:13:07'),
(1, 2, 1, 9, '2018-03-01 11:13:07'),
(1, 1, 2, 180, '2018-03-01 11:19:58'),
(1, 2, 5, 45, '2018-03-01 11:19:58');



-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_references_cart_customer` FOREIGN KEY (`cid`) REFERENCES `customer` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_references_cart_products` FOREIGN KEY (`pid`) REFERENCES `products` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `fk_references_purchase_customer` FOREIGN KEY (`pcid`) REFERENCES `customer` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_references_purchase_products` FOREIGN KEY (`ppid`) REFERENCES `products` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `fk_references_cart_customer` (`cid`),
  ADD KEY `pid` (`pid`) USING BTREE;

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`),
  ADD UNIQUE KEY `e_username` (`e_username`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Item_name` (`Item_name`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD KEY `fk_references_purchase_customer` (`pcid`),
  ADD KEY `fk_references_purchase_products` (`ppid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Constraints for dumped tables
--

--


--- select product
DELIMITER //

CREATE PROCEDURE check_product(
    IN spid INT,
    IN scategory VARCHAR(255),
    IN sitem_name VARCHAR(255),
    IN scost DECIMAL(10,2)
)
BEGIN
    SELECT *
    FROM PRODUCTS
    WHERE ID = spid
    AND cost = scost
    AND Item_name = sitem_name
    AND catogery = scategory;
END //

DELIMITER ;

---update product
DELIMITER //

CREATE PROCEDURE update_product(
    IN cpid INT,
    IN current_no_of_items INT,
    IN cost_of_item DECIMAL(10,2)
)
BEGIN
    UPDATE products
    SET no_of_items = current_no_of_items,
        cost = cost_of_item
    WHERE ID = cpid;
END //

DELIMITER ;

--procedure to select product and cost
DELIMITER //

CREATE PROCEDURE filter_products_by_price(
    IN sitem_price_st DECIMAL(10,2),
    IN sitem_price_end DECIMAL(10,2)
)
BEGIN
    SELECT *
    FROM PRODUCTS
    WHERE cost >= sitem_price_st AND cost <= sitem_price_end;
END //

DELIMITER ;

---procedure to select product
DELIMITER //

CREATE PROCEDURE select_products_ordered_by_cost()
BEGIN
    SELECT *
    FROM PRODUCTS
    ORDER BY cost;
END //

DELIMITER ;

---procedure 
DELIMITER //

CREATE PROCEDURE select_products_by_name(
    IN sitem_name VARCHAR(255)
)
BEGIN
    SELECT *
    FROM PRODUCTS
    WHERE Item_name = sitem_name;
END //

DELIMITER ;

---procedure for cart
DELIMITER //

CREATE PROCEDURE clear_cart()
BEGIN
    DELETE FROM cart;
END //

DELIMITER ;

