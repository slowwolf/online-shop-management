-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 02:38 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(30, 61, '::1', 37, 1),
(40, 73, '::1', 39, 2),
(41, 73, '::1', 37, 2),
(49, 33, '::1', 40, 3),
(75, 69, '::1', 44, 1),
(76, 70, '::1', 44, 1),
(112, 66, '::1', 60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `status`) VALUES
(29, 'Women', 1),
(30, 'Kids', 1),
(31, 'Men', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `comments` text NOT NULL,
  `prod_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comments`, `prod_id`) VALUES
(7, 'juthi', 'Nice sharee', 19),
(8, 'Jakia', 'I want to buy this nice dress', 83),
(12, 'orin', 'very nice product', 190),
(30, 'piash tanjin', 'shei hoise', 79);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedBackId` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `PhoneNo` varchar(11) DEFAULT NULL,
  `Mgs` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedBackId`, `Name`, `Email`, `PhoneNo`, `Mgs`) VALUES
(1, 'Kurti', 'orinpiya@gmail.com', '01712528376', 'ok'),
(2, 'orin', 'orinpiya@gmail.com', '01712528376', 'hi'),
(3, 'hi', 'orinpiya@gmail.com', '01712528376', 'hi'),
(4, 'shelly ', 'shelly@gmail.com', '0191462282', 'hello '),
(5, 'mollu ', 'mollu5252@gmail.com', '0191462282', 'nice product'),
(6, 'jamil', 'jamil525@gmail.com', '0191462271', 'beautiful kurti'),
(7, 'asdadaasd', 'dasdasd', 'asdasdasd', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `tnx_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `p_status` varchar(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip_code` int(50) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `tnx_id`, `qty`, `p_status`, `full_name`, `email`, `address`, `city`, `state`, `zip_code`, `payment_type`, `date`) VALUES
(43, 45, 17, 963913, 1, 'processing', 'orin', 'orinpiya@gmail.com', '01913757371', 'uttara', 'sector no:4.road no:10,H;14', 1230, 'on', '2019-11-14'),
(44, 45, 16, 963913, 2, 'delivered', 'orin', 'orinpiya@gmail.com', '01913757371', 'uttara', 'sector no:4.road no:10,H;14', 1230, 'on', '2019-11-14'),
(48, 45, 15, 963912, 2, 'delivered', 'jahanara', 'orinpiya@gmail.com', '01913757371', 'uttara', 'sector no:4.road no:10,H;14', 1230, 'on', '2019-11-19'),
(51, 45, 69, 963914, 2, 'delivered', 'orin', 'orinpiya@gmail.com', '01913757371', 'uttara', 'Road no:10,H;14', 1230, 'on', '2019-11-19'),
(53, 45, 44, 963941, 2, 'delivered', 'orin', 'orinpiya@gmail.com', '01913757371', 'uttara', 'sector no:4.road no:10,H;14', 1230, 'on', '2019-11-22'),
(54, 57, 33, 963942, 1, 'pending', 'piash', 'piash.tanjin@gmail.com', '01688807433', 'uttara', 'Road no:10,H;14', 1230, 'on', '2019-11-22'),
(55, 57, 44, 963953, 1, 'pending', 'piash', 'piash.tanjnin@gmail.com', '01913757371', 'banani', 'Road no:10,H;14', 1230, 'on', '2019-11-22'),
(56, 45, 75, 963970, 1, 'pending', 'orin', 'orinpiya@gmail.com', '01913757371', 'uttara', 'Road no:10,H;14', 1230, 'on', '2019-11-23'),
(57, 45, 73, 963970, 1, 'pending', 'orin', 'orinpiya@gmail.com', '01913757371', 'uttara', 'Road no:10,H;14', 1230, 'on', '2019-11-23'),
(58, 45, 16, 963913, 4, 'delivered', 'orin', 'orinpiya@gmail.com', '01913757371', 'uttara', 'sector no:4.road no:10,H;14', 0, 'on', '2019-11-23'),
(60, 45, 11, 963978, 1, 'pending', 'orin', 'orinpiya@gmail.com', '01913757371', 'uttara', 'sector no:4.road no:10,H;14', 1230, 'on', '2019-11-25'),
(63, 59, 79, 963990, 1, 'delivered', '', '', '', '', '', 0, 'on', '2019-11-25'),
(64, 59, 37, 963948, 1, 'delivered', 'Piash', 'piash.tanjin@gmail.com', '01913757371', 'Dhaka', 'Uttara', 0, 'on', '2019-11-26'),
(65, 60, 10, 963922, 1, 'pending', 'Irin Sultana ', 'irinsultanaorna@gmail.com', '01911111111', 'Dhaka', 'Uttara', 0, 'on', '2019-11-26'),
(66, 59, 10, 963921, 6, 'pending', 'asdad', 'piash.tanjin@gmail.com', '01913757371', 'Dhaka', 'asdasdad', 1208, 'on', '2019-11-27'),
(67, 59, 12, 963923, 2, 'pending', 'Piash', 'piash.tanjin@gmail.com', '0111111111', 'DHaka', 'Uttara', 1208, 'on', '2019-11-28'),
(68, 59, 79, 963990, 1, 'delivered', 'Piash', 'piash.tanjin@gmail.com', '01913757371', 'Dhaka', 'Uttara', 1208, 'on', '2019-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `NewPrice` int(11) NOT NULL,
  `product_cost` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `status` int(30) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  `sub_cateid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `NewPrice`, `product_cost`, `quantity`, `status`, `product_desc`, `product_image`, `product_keywords`, `sub_cateid`) VALUES
(8, 29, 'Kurti', 1050, 1100, 1000, 48, 1, 'Excelent Quality', 'wkurti1.jpg', 'wkurti1.jpg', 29),
(10, 29, 'Multi-colour sharee', 1800, 1900, 1650, 59, 1, 'Beautifull sharee', 'bw1.jpg', 'bw1.jpg', 38),
(11, 30, 'Baby Frock', 1300, 1450, 1000, 45, 1, 'Excelent Quality', 'bk5.jpg', 'bk5.jpg', 37),
(12, 30, 'kid Shoe', 1800, 1900, 1650, 68, 1, 'Excelent Quality', 'kbshoe7.jpg', 'kbshoe7.jpg', 49),
(13, 31, 'T-shirt', 900, 1000, 800, 80, 1, 'Excelent Quality', 'mt6.jpg', 'mt6.jpg', 39),
(14, 30, 'T-shirt', 1050, 1100, 1000, 80, 1, 'very goood product', 'kboy12.jpg', 'kboy12.jpg', 47),
(15, 31, 'panjabi', 1850, 1900, 1650, 64, 1, 'Excelent Quality', 'bkb3.jpg', 'bkb3.jpg', 48),
(16, 29, 'Kurti', 1800, 1900, 1650, 73, 1, 'Excelent Quality', 'wkurti5.jpg', 'wkurti5.jpg', 42),
(17, 29, 'Ornaments', 9900, 10000, 9000, 57, 1, 'Pearl Large Faux Necklace and Earring Set by Millennium Design ', 'wo4.jpg', 'wo4.jpg', 44),
(18, 29, 'Georgette Sharee', 6500, 6800, 6000, 69, 1, 'Faux Georgette Sharee ', 'w1.jpg', 'w1.jpg', 38),
(19, 29, 'Multicolor Pancil Heel', 2800, 2900, 2500, 70, 1, 'Multicolor High Pancil Heel Party shoe for Women', 'ebaf2b8f7b3106cda604b89888906a6c.jpg', 'ebaf2b8f7b3106cda604b89888906a6c.jpg', 51),
(20, 31, 'Luxury Man Belt', 1850, 1900, 1650, 78, 1, '2019 New Fashion Top Brand Luxury Man Belts High Quality 35mm Black Mens Waistband Cow Leather Brand Designer ', '2019-new-fashion-top-brand-luxury-man-belts.jpg', '2019-new-fashion-top-brand-luxury-man-belts.jpg', 54),
(27, 31, 'Shoe', 1800, 1900, 1000, 49, 1, 'Excelent Quality', 'mshoe9.jpg', 'mshoe9.jpg', 40),
(29, 29, 'Multi-colour sharee', 1800, 1900, 1000, 78, 1, 'Excelent Quality', 'bw9.jpg', 'bw9.jpg', 38),
(31, 29, 'Women FootWear', 1200, 1400, 1550, 75, 1, 'Excelent Quality', 'wshoe12.jpg', 'wshoe12.jpg', 51),
(32, 31, 'Shirt', 1000, 1100, 800, 80, 1, 'very goood product', 'm4.jpg', 'm4.jpg', 39),
(33, 30, 'T-shirt', 1300, 1400, 1000, 76, 1, 'Excelent Quality', 'kboy16.jpg', 'kboy16.jpg', 47),
(34, 29, 'Sharee', 3500, 3800, 3000, 78, 1, 'Excelent Sharee', 'ms12.jpg', 'ms12.jpg', 38),
(35, 30, 'Baby Frock', 2000, 2200, 1650, 79, 1, 'very goood product', 'kg2.jpg', 'kg2.jpg', 37),
(36, 29, 'Kurti', 1250, 1400, 90, 80, 1, 'Beautifull line kurta, has a round neck, three-quarter sleeves, flared hem', 'wkurti7.jpg', 'wkurti7.jpg', 42),
(37, 31, 'NAVIFORCE', 2860, 5560, 2000, 89, 1, '-100% new and high quality. - Precise Japanese inported quartz timepiece to keep an accurate time. -3ATM daily waterproof, perfect for protecting little water such as washing by hand / sweat / rain, but cannot in water or shower or swim. -Color may not be as precise as in real life due to variations betweencomputer monitors and nacked eye color difference. -It is a pretty good gift for family / friends / lover / yourself. -Welcome to wholesale and dropship, please contact us at any time toorder wholesale and drophsip price.', 'a5cb2ae8c95dc0b3d7bcbd40b7e156c6.jpg', 'a5cb2ae8c95dc0b3d7bcbd40b7e156c6.jpg', 54),
(38, 31, 'Mens Automatic Self Winding Watch', 18500, 21500, 18450, 89, 1, 'Brand: Carnival.  Model: CA 5668G  Case Shape: Round.  Display Type: Analog.  Clasp: Deployment Clasp with Push Button  Case material: Stainless Steel  Case diameter: 40 millimeters  Case Thickness: 12 millimeters  Band Material: Stainless Steel.  Band width: 21mm  Band Color: Silver  Dial color: Grey.  Gender: Men.  Movement: Automatic self wind  Water resistant depth: 30 Meters  Warranty: 1Year.', '363fb607efbda29ca61cc5cfa597053f.jpg_400x400q75.jpg', '363fb607efbda29ca61cc5cfa597053f.jpg_400x400q75.jpg', 54),
(39, 29, 'Japani Silk Sharee', 323, 799, 700, 90, 1, '    Product Type: Sharee    Color: Deep Meroon     Main Material: Silk     12 Haat Bohor     Saree without Matching Blouse Piece     Perfect wear for formal occasions', '8b5f638912e3cecd6920e032d34363df.jpg', '8b5f638912e3cecd6920e032d34363df.jpg', 38),
(40, 29, 'Chundri silk saree', 1200, 1500, 1150, 90, 1, 'Product details of Chundri silk saree      Product Type: Saree      Color: Orange and pink     Main Material: Chundri silk saree     Gender: Women     Saree with Unstitched Blouse Piece', '99cef3ad08517139fe28b6061cc5dbd1.jpg_400x400q75.jpg', '99cef3ad08517139fe28b6061cc5dbd1.jpg_400x400q75.jpg', 38),
(41, 29, 'Black on Yellow Printed Cotton Kurti', 599, 1199, 504, 80, 1, 'details of Black on Yellow Printed Cotton Kurti      Product Type: Kurti for Women     Fabric: Cotton     Shape: Flare Kurti     Colour: Yellow     Occasion: Regular     Length: Long     Design: Leaf Print     Wash & Care: Machine Wash     Closure: Button     Sleeve: Three Quarter     Fit: Slim', '84024bb6baca91773f656ee48dbae100.jpg', '84024bb6baca91773f656ee48dbae100.jpg', 42),
(42, 29, 'Muslin Silk Jamdani Saree', 1199, 3000, 1100, 80, 1, 'Muslin Silk Jamdani Saree For Women From Ambition      Product Type: Saree     Care Instructions: Dry Clean Only     Gender: Women     Fabric :- Half & Half Handlom Cotton Soft Silk     Smoth and weightless     Fashionable and attractive design     Size : 5.5 mtr     12 Hand     Style :- Handloom Weaving     Occasion: Casual And Festival     There might be little shade variation between actual product and image shown on the screen due to photography effect.This product are available in 60% discount..', '3d571abf4a57bf7eca621f323a525d36.jpg', '3d571abf4a57bf7eca621f323a525d36.jpg', 38),
(43, 29, 'Maroon and Golden Georgette Saree', 1710, 6500, 1656, 80, 1, 'Maroon and Golden Georgette Saree 106 A      Main Material: Georgette     blouse piece     Occasion: Party     Dry Clean only, Cold Wash recommended.     Saree give a womenproper feminine look     Stylish and Fashionable     Beautiful saree design     An uncommon present for the extraordinary individual.This product is now available in 74% discount.', '7101c21519f068123d0d68dacda0bfce.jpg', '7101c21519f068123d0d68dacda0bfce.jpg', 38),
(44, 31, 'Canvas Mens Analog Watch Wrist Watches BK', 360, 900, 300, 77, 1, ' Luxury Fashion Canvas Mens Analog Watch Wrist Watches BK      Adjustable pin buckle fastening     As a perfect gift for yourself or your friends     Fashion and Comfortable design     its compact size for carrying easily     Time function with month, date, hour, minute display     It is easy and convenient to use.This product is available in 60% discount.', 'b94ba4225e97c9f3ae516db48628f913.jpg_400x400q75.jpg', 'b94ba4225e97c9f3ae516db48628f913.jpg_400x400q75.jpg', 54),
(45, 31, 'North Star Synthetic Casual Lifestyle Sneakers ', 594, 699, 540, 80, 1, 'North Star Synthetic Casual Lifestyle Sneakers - Blue      Product Type: Sneakers     Color: Blue     Main Material: Synthetic     Style: Casual     Gender: Men.This product now available in 15% discount.', 'e8bc46cdb7420e1db054ee7ef2102d5a.jpg', 'e8bc46cdb7420e1db054ee7ef2102d5a.jpg', 40),
(46, 30, 'Aircraft Helicopter', 440, 890, 420, 80, 1, 'Magic Hand Sensored rechargeable Mini Aircraft Helicopter RED LED Kids Toy Gift-      When you put your hand under the sensor it could fly higher.     latest intelligent Infrared Sensor system.     Induction levitation and collision protection.     Eco-friendly Material,     Light weight, Low noisy,     Specially designed for beginners.     Flashing light on the bottom.     100% Brand New And High Quality.     Suitable Age: over 8 years old.     Operate Mode: Hand Induction.     Charging Time: 20 minutes.     Flying Time: About 10-15 minutes.     Material: Metal + ABS plastic.     Color: Red & Black .    Size: 21*16.5*6 cm.     Size: 6 .5 x 2.4 x 8.3 inches.     Weight: 0.15 kg.this product is now available in 51% discount.', '0dc377f25b1c54d82bfb016a95a09b64.jpg', '0dc377f25b1c54d82bfb016a95a09b64.jpg', 56),
(47, 30, 'Cotton Baby Shoe -Peru', 350, 600, 345, 79, 1, 'Cotton Baby Shoe -Peru.      Upper Material: Cotton.     Sole-Rubber.     Color: Peru.available in 42% discount.Specifications of Cotton Baby Shoe -Peru.      Brand Odhora Fashion.     SKU OD187TB1CD9HSNAFAMZ-600232.     Color Peru.  What’s in the boxCotton Baby Shoe -Peru.', '69459dc3a24aeedbbfebb3dee4585a7c.jpg', '69459dc3a24aeedbbfebb3dee4585a7c.jpg', 49),
(48, 29, 'Women’s Cotton Tangail Saree', 960, 1600, 900, 70, 1, 'Women’s Cotton Tangail Saree Itemc code: 1059 Product Type: Saree Material: Cotton Measurement: 14 hand long Blouse piece included Color: Mixed (As given picture)..This product is now available in 40% discount. ', '0163359_womens-cotton-tangail-saree-1059.jpeg', '0163359_womens-cotton-tangail-saree-1059.jpeg', 38),
(49, 31, 'Stylish semi long panjaby', 310, 700, 290, 80, 1, 'Stylish semi long panjabi.     Fabrics : Indian cotton.   Product Type: Panjabi.     Color.Lilac.     Main Material: Cotton.     Gender: Men.     Fashionable and comfortable for summer.     Size : 40,42,44,40=chest - 41\", Length -40\"42=Chest -43\", Length -42\"44=Chest -44\", Length -44\"Available in 42% discount.', 'b93f385c47bef93ce8591cb4eca0bfae.jpg', 'b93f385c47bef93ce8591cb4eca0bfae.jpg', 48),
(52, 31, 'Solid Men Hooded Black T-Shirt', 208, 999, 190, 80, 1, 'Product description : Type Hooded Sleeve Full Sleeve Fit Regular Fabric Cotton Blend Pack of 1 Style Code KIT-7-L Neck Type Hooded Ideal For Men Size L Pattern Solid Suitable For Western Wear Brand Fit Slim Fit Fabric Care Hand wash Brand Color BLACK Generic Name T Shirts.79% off.', 'xl-kit-7-xl-hero-piyush-original-imaerffktfj8kds4.jpeg', 'xl-kit-7-xl-hero-piyush-original-imaerffktfj8kds4.jpeg', 39),
(53, 31, 'Long Sleeve Panjabi for Men', 749, 1890, 700, 80, 1, 'Maroon Cotton Long Sleeve Panjabi for Men      Product Type: Long Sleeve Panjabi     Color: Maroon     Main Material: Cotton     Comfortable to wear     Stylish and fashionable  Panjabi is a traditional clothing which can be worn for any occasion. Panjabi has a traditional value in Bangladesh. The main material of panjabi is mostly cotton or they can be cotton mixed. This cotton panjabi is associated with long sleeve. It will hang on your body, provide comfortable to wear and helps to express yourself in so many ways. The body to keep you comfortable and perfect long sleeve panjabi for casual wear. Traditional clothing panjabi which can be worn for just any occasion, a casual day at work or for a fun-filled weekend..Available in 60% discount.', 'f19c23594f77e5009a8265a3b4d2f4d8.jpg', 'f19c23594f77e5009a8265a3b4d2f4d8.jpg', 48),
(54, 31, 'Long Sleeve Panjabi for Men', 749, 1890, 700, 80, 1, 'Orange Cotton Long Sleeve Panjabi for Men Product Type: Long Sleeve Panjabi Color: Orange Main Material: Cotton Comfortable to wear Stylish and fashionable Panjabi is a traditional clothing which can be worn for any occasion. Panjabi has a traditional value in Bangladesh. The main material of panjabi is mostly cotton or they can be cotton mixed. This cotton panjabi is associated with long sleeve. It will hang on your body, provide comfortable to wear and helps to express yourself in so many ways. The body to keep you comfortable and perfect long sleeve panjabi for casual wear. Traditional clothing panjabi which can be worn for just any occasion, a casual day at work or for a fun-filled weekend.Available in 60% discount. ', 'bkb2.jpg', 'bkb2.jpg', 48),
(55, 29, 'Handmade artificial flower bridal ornaments set.', 650, 1000, 600, 80, 1, 'Pink rose handmade artificial flower bridal and non-bridal ornaments set for women.      Handmade flower ornaments set for women.     pink artificial flower with pearl.     full bridal and non-bridal flower ornaments set.     Trendy design  Specifications of Pink rose handmade artificial flower bridal and non-bridal ornaments set for women.      Brand No Brand.Available in 35% discount.', '9a5168a72a0c88e37c5072e89c0e64fd.jpg', '9a5168a72a0c88e37c5072e89c0e64fd.jpg', 44),
(56, 31, 'Cotton Fabric Snekar', 1550, 2400, 1450, 48, 1, '    Insole Material:EVA     Man Shoe Material: Knitted Upper+ PVC Outsole     Lining Material: Cotton Fabric     Color: Royal Blue     Size: 40-44     Features: Fashionable, Comfortable & Durable     Season: Autumn, Spring, Summer & Winter  Specifications of Shoe      Brand Men Fashion World     SKU 104886018_BD-1030020462     Boot Height Over-the-Knee     Main Material EVA     Style Sport & Street  What’s in the boxSnekar.Available in 35% discount.', 'f80d2558b94a01302462de4a5fe29384.jpg', 'f80d2558b94a01302462de4a5fe29384.jpg', 40),
(57, 29, 'Girls Ornament Set Lady Necklace Women Bracelet Pair Ear Stud', 593, 1187, 550, 80, 1, 'UR 61154113 4 PCS Girls Ornament Set Lady Necklace Women Bracelet Pair Ear Stud      Can act as an unique gift for your beloved one.     Refined craft make it more fashion and durable.     Special polish make it smooth and delicate comfortable to wear.     Stylish popular and beautiful provide you the most charming look.     Small and pretty can go well with casual or dressy wear.     Descriptions:     Delicate and comfortable design.     Easy to match your dress.  Features: Can act as an unique gift for your beloved one.  Refined craft make it more fashion and durable. Special polish, make it smooth and delicate, comfortable to wear.  Stylish popular and beautiful, provide you the most charming look. Small and pretty, can go well with casual or dressy wear.Available in 50% discount.', 'f4ee65c97fea10eacfa54da0e9ce6bc4.jpg', 'f4ee65c97fea10eacfa54da0e9ce6bc4.jpg', 44),
(58, 29, 'Makeup Brush Set - 12 Pcs', 199, 350, 180, 70, 1, ' Makeup Brush Set - 12 Pcs      Complete brush set for face & eyes     Comes in a nice metal case, easy for storing and travelling     Can be used with liquid, powder and mousse products     Suit for home, personal and professional use     12 pcs brushes cover all needs in terms of application     Very dense brush for streak-free blending     High-quality fibers for minimal hair loss     Type: Makeup Brush     Material: Synthetic Hair     Color: Black     Quantity: 12 Pcs     1 x NAKED3 Brushes 12 Pieces set  Specifications of Makeup Brush Set - 12 Pcs.      Brand RTS Light House.     SKU 118474197_BD-1037816147.     Capacity 12pcs  What’s in the boxNAKED3 12 Pcs Brushes Set.Available in 43% discount. ', '10afb2c70829e0c239f708a9420f196b.jpg', '10afb2c70829e0c239f708a9420f196b.jpg', 44),
(59, 31, 'Silk Tie', 209, 350, 190, 80, 1, 'Silk Tie      A formal look for any event is never complete without a Tie. A good necktie offers a complete and classy look all the time, no matter where you go. You can combine to get a perfect formal and casual look too. May it be a meeting, a Tie event, a wedding or even a party.  A formal look for any event is never complete without a Tie. A good necktie offers a complete and classy look all the time, no matter where you go. You can combine to get a perfect formal and casual look too. May it be a meeting, a Tie event, a wedding or even a party. Specifications of Silk Tie      Brand RUMI KORNER HOUSE     SKU 117610912_BD-1036948386     Main Material Silk  What’s in the boxSilk Tie.Available in 40% discount. ', 'a8e709fea20ae81a3516c8be9574e13a.jpg', 'a8e709fea20ae81a3516c8be9574e13a.jpg', 54),
(60, 31, 'Light Yellow Short Sleeves T-Shirt', 99, 302, 80, 80, 1, 'Light Yellow Short Sleeves T-Shirt For Men(Apna Time Ayega )      Product Type: T-Shirt     Color: White     Brand: Fashion Booth     Gender: Men / Women      Brand new and high quality product     Customize Print : yes     Print Quality: High.Available in 72% discount.', '6a28dacc8c07d14b252f848e5df5addf.jpg', '6a28dacc8c07d14b252f848e5df5addf.jpg', 39),
(61, 29, 'Baby Frock', 2000, 4800, 1000, 50, 1, 'Excelent Quality', 'kgirl2.jpg', 'kgirl2.jpg', 37),
(62, 29, 'Cotton Kurti For women', 799, 1765, 750, 49, 1, 'Yellow-wite Unstitched Free size Printed and Mirror work Cotton Three piece For women      Unstitched Free size Printed and Mirror work Cotton Three piece For women     Product Type: Unstitched Three piece     Main Material: Printed Cotton     Dupatta: Full cotton and printed     Salwar : Full cotton     Look : like as catelogue.     Product condition: unstitched.     Gender: Women     Free Size     Quality : High quality product     Stylish and fashionable.Avaiable in 55% offer.', '3e2c7bf1f50f6513654e474cce9d8e82.jpg', '3e2c7bf1f50f6513654e474cce9d8e82.jpg', 42),
(63, 30, 'Luminous Children Flash Kids Led Lighting Child Casual Shoes', 668, 1486, 600, 80, 1, 'Children Sneaker Fashion Wings Boys Girls Sneaker Luminous Children Flash Kids Led Lighting Child Casual Shoes      Suggest: To ensure that your foot comfort, Please measuring foot length and refer to size chart diagram correctly choose the size, thanks!     PU upper and breathable mesh inner and rubber sole. Comfortable, durable and Not smelly feet.This product now avaiable in 55% discount.', '786f93b30e279ceedeedf0802eb82240.jpg', '786f93b30e279ceedeedf0802eb82240.jpg', 49),
(65, 31, 'Long Sleeve Panjabi for Men', 800, 1600, 700, 80, 1, 'White and Red Cotton Long Sleeve Panjabi for Men Product Type: Long Sleeve Panjabi Color: White and red Main Material: Cotton Comfortable to wear Stylish and fashionable Panjabi is a traditional clothing which can be worn for any occasion. Panjabi has a traditional value in Bangladesh. The main material of panjabi is mostly cotton or they can be cotton mixed. This cotton panjabi is associated with long sleeve. It will hang on your body, provide comfortable to wear and helps to express yourself in so many ways. The body to keep you comfortable and perfect long sleeve panjabi for casual wear. Traditional clothing panjabi which can be worn for just any occasion, a casual day at work or for a fun-filled weekend.Available in 50% discount. ', 'bm2.jpg', 'bm2.jpg', 48),
(66, 29, 'Japani Silk Sharee', 379, 850, 340, 80, 1, 'Japani Silk Sharee      Product Type: Sharee     Color: Deep Meroon     Main Material: Silk     12 Haat Bohor     Saree without Matching Blouse Piece     Perfect wear for formal occasions.Avaiable in 55% discount.', '7d1fbebf6fd134553c0539fabd30f196.jpg_400x400q75-product.jpg', '7d1fbebf6fd134553c0539fabd30f196.jpg_400x400q75-product.jpg', 38),
(67, 29, 'Blue Heritage', 1500, 3000, 1400, 80, 1, 'Straight Kurta This straight-cut cambric shirt comes in a royal blue colour.  Details: Extra weft Jacquard Front, Extra Weft Jacquard Back, Full Sleeves, Round Neck with Split Color: Blue Fabric: Cambric.Available in 50% offer', 'SSPSNEDAN001_1_1200x.jpg', 'SSPSNEDAN001_1_1200x.jpg', 42),
(68, 31, 'EVA Man Shoe', 1550, 2400, 1500, 90, 1, 'Product description : Insole Material:EVA Man Shoe Material: Knitted Upper+ PVC Outsole Lining Material: Cotton Fabric Color: Royal Blue Size: 40-44 Features: Fashionable, Comfortable & Durable Season: Autumn, Spring, Summer & Winter Specifications of Shoe Brand Men Fashion World SKU 104886018_BD-1030020462 Boot Height Over-the-Knee Main Material EVA Style Sport & Street What’s in the boxSnekar.Available in 35% discount. ', '188dc060f6705b3fcd05e943cd6c0bfe.jpg', '188dc060f6705b3fcd05e943cd6c0bfe.jpg', 40),
(69, 31, 'North Star Synthetic Casual Sneakers', 549, 699, 500, 74, 1, 'North Star Synthetic Casual Lifestyle Sneakers - Blue Product Type: Sneakers Color: Blue Main Material: Synthetic Style: Casual Gender: Men.This product now available in 15% discount. ', 'mshoe2.jpg', 'mshoe2.jpg', 40),
(70, 30, 'Princess Dress Outfits Clothes', 762, 1299, 700, 76, 1, '2019 Toddler Kids Baby Girls Autumn Long Sleeve Princess Dress Outfits Clothes      Style: Fashion,dance     High quality materials,durable enought for your daily wearing     Stylish and fashion print design make your baby more attractive     Have large stock and ship it asap.Available in 41% discount.', 'kgirl22.jpg', 'kgirl22.jpg', 37),
(71, 30, 'Princess Dress Outfits Clothes', 762, 1299, 700, 40, 1, '2019 Toddler Kids Baby Girls Autumn Long Sleeve Princess Dress Outfits Clothes Style: Fashion,dance High quality materials,durable enought for your daily wearing Stylish and fashion print design make your baby more attractive Have large stock and ship it asap.Available in 41% discount. ', 'af18d15ca15e8d13aa56ef989f9d88e7.jpg', 'af18d15ca15e8d13aa56ef989f9d88e7.jpg', 37),
(72, 30, 'Boys Shirt Cotton Long Sleeve', 500, 1000, 400, 76, 1, 'Boys Shirt Cotton Long Sleeve Original Branded      Product Type: Shirt     Brand L.O.G.G(H&M)     Size 6-7,7-8 &12-13 Years(now available)     Material: Cotton     Smooth and Soft Fabric     Comfortable to wear     Gentle Look and Smart Design available in 50% discount.', 'kboy15.jpg', 'kboy15.jpg', 47),
(73, 30, 'Smart Robot Toy for Kids - White and Red', 1650, 1950, 1550, 74, 1, 'Smart Robot Toy for Kids - White and Red      Product Type: Robot Toy     Color: White and Red     Rechargeable battery     Remote control with hand sensor     For Kids.available in15% of discount.', '779c1bf602364b1c290a21f0e3d538f0.jpg', '779c1bf602364b1c290a21f0e3d538f0.jpg', 56),
(75, 30, 'Smart Toy for Kids', 1650, 1950, 1500, 38, 1, 'Smart Robot Toy for Kids - White and Red      Product Type: Toy     Color: White and Red     Rechargeable battery     Remote control with hand sensor     For Kids.available in15% of discount.', 'tumbrellastroller.jpg', 'tumbrellastroller.jpg', 56),
(78, 30, 'Boys Shirt Cotton Long Sleeve', 500, 1000, 400, 79, 1, 'Product description : Boys Shirt Cotton Long Sleeve Original Branded Product Type: Shirt Brand L.O.G.G(H&M) Size 6-7,7-8 &12-13 Years(now available) Material: Cotton Smooth and Soft Fabric Comfortable to wear Gentle Look and Smart Design available in 50% discount. ', 'kboy11.jpg', 'kboy11.jpg', 47),
(79, 30, 'Smart Toy for Kids', 1650, 1950, 1500, 28, 1, ' Smart Robot Toy for Kids - White and Red Product Type: Toy Color: White and Red Rechargeable battery Remote control with hand sensor For Kids.available in15% of discount. ', 'trideon1.jpg', 'trideon1.jpg', 56);

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `main_cate` int(100) NOT NULL,
  `cat_image` varchar(100) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`id`, `name`, `main_cate`, `cat_image`, `status`) VALUES
(37, 'Baby Frock', 30, 'kgirl21.jpg', 1),
(38, 'Sharee', 29, 'w9.jpg', 1),
(39, 'Shirt & T-Shirt', 31, 'm1.jpg', 1),
(40, 'Men Footwear', 31, 'shoe1.jpg', 1),
(42, 'kurti', 29, 'wkurti5.jpg', 1),
(44, 'Makeup  and Ornaments', 29, 'wo8.jpg', 1),
(47, 'T-shirt', 30, 'kboy1.jpg', 1),
(48, 'panjabi', 31, 'bkb3.jpg', 1),
(49, 'kidshoe', 30, 'kbshoe2.jpg', 1),
(51, 'women Footwear', 29, 'wshoe5.jpg', 1),
(54, 'Men Accessories', 31, 'menw6.jpg', 1),
(56, 'Toy', 30, 'tbedbell1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `type` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`, `type`) VALUES
(45, 'piash', 'piash', 'orinpiya@gmail.com', '25f9e794323b453885f5181f1b624d0b', '01715258376', 'banani', '891 Baker St. B21, Costa Mesa, CA 92626', 1),
(49, 'moidul', 'Islam', 'moidul00235@gmail.com', 'db0cd4b5f9ced8fb122281f6b4425836', '01913757371', 'uttara ', 'uttara sector 10 raod 12 house 3', 0),
(50, 'monirul', 'islam', 'moni@gmail.com', 'bfa7bf95f32cfb53efdb01c6b435dc63', '01715258376', 'mauna gazipur', '891 Baker St. B21, Costa Mesa, CA 92626', 0),
(51, 'touni', 'islam', 'hrahmancse@gmail.com', 'a3dcb4d229de6fde0db5686dee47145d', '01712013089', 'Uttara ', 'sector 7 road 10 house 12', 0),
(52, 'jahanara', 'taznina', 'jahanara@gmail.com', '25f9e794323b453885f5181f1b624d0b', '01715258376', 'Uttara ', 'sector no:4 road 12 house 3', 0),
(53, 'tounima', 'Islam', 'jahanara@gmail.com', '1ee7871b5de7b45413aab5e1eda6b94d', '01715258376', 'uttara', 'sector 7 road 10 house 12', 0),
(54, 'jahanara', 'taznina', 'jahanara12121@gmail.com', 'b9b96411110f7350a5d5285cb675af03', '01535133811', 'uttara', 'sector 7 road 10 house 12', 1),
(56, 'Karim', 'Mahabub', 'karimKarim@gmail.com', 'c6f44a7b265c3664f092535e21465cbf', '01715258376', '', '', 0),
(59, 'Tanjin ', 'Alam', 'piash.tanjin@gmail.com', 'bb30e17a97db6f0f60fe0752b9a5b5ce', '01913757371', 'Uttara ', 'Dhaka', 0),
(60, 'Irin Sultana ', 'Orna', 'irinsultanaorna@gmail.com', 'cd99962caa57a74ec15a4ad1b34b13ef', '01611111111', 'Uttara', 'Uttara', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedBackId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedBackId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `sub_cat`
--
ALTER TABLE `sub_cat`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
