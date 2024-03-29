-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2024 at 11:05 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmci`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_leases`
--

CREATE TABLE `add_leases` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `units` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_leases`
--

INSERT INTO `add_leases` (`id`, `image`, `name`, `price`, `description`, `status`, `units`, `location`, `created_at`, `updated_at`) VALUES
(10, '/images/1711348701.jpg', 'Residential', '28,000', 'FOR LEASE! The Columns Legazpi Village T2 9th floor 32sqm Studio Near RCBC and PBcom Php28k/month, inclusive of dues Swimming Pool view Fully Furnished 2 dep + 1 adv CAN ISSUE OR / OFFICIAL RECEIPT', 'For Lease', '1 Bedroom', 'Makati', '2024-03-24 22:38:21', '2024-03-25 00:23:25'),
(12, '/images/1711349036.jpg', 'Residential', '100,000', 'FOR LEASE! ICON PLAZA - 105 sqm 2 bedroom - 34th Floor - Fully Furnished - 100k per month. Please Contact :JUSTIN DE CASTRO NO: 09456754591', 'For Lease', '2 Bedroom', 'Taguig', '2024-03-24 22:43:56', '2024-03-25 00:23:15'),
(13, '/images/1711353178.jpg', 'Commercial', '23,000', 'FOR LEASE! SHORE - Fully furnished - 23K per month. Please Contact: Marjorie Gelizon No.: 09651983796', 'For Lease', '30 sqm - 41 sqm', 'Makati', '2024-03-24 23:52:58', '2024-03-24 23:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `alders`
--

CREATE TABLE `alders` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `units` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alders`
--

INSERT INTO `alders` (`id`, `image`, `name`, `price`, `description`, `status`, `units`, `location`, `created_at`, `updated_at`) VALUES
(24, '/images/1711346755.png', 'FOR SALE', '5.6M', 'FOR SALE!! 5.6M ONLY TIVOLI GARDEN RESIDENCES 2BR - 59SQM - 30TH FLOOR - FF Please Contact:JUSTIN DE CASTRO No.: 09456754591', 'Ready For Occupancy', '1 Bedroom', 'Taguig', '2024-03-24 22:05:55', '2024-03-24 22:13:49'),
(25, '/images/1711356298.png', 'FOR SALE', '5.3M', 'FOR SALE!! VENICE LUXURY RESIDENCES - 6 UNITS AVAILABLE - ALL TENANTED - 10-12TH FLOOR - STUDIO TYPE - 40SQM - FULLY FURNISHED - 5.3M ONLY! Please Contact: Dianne Semacio No.: 09651 983 796', 'Ready For Occupancy', 'STUDIO TYPE - 40SQM - FULLY FURNISHED', 'Taguig City', '2024-03-25 00:44:58', '2024-03-25 00:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'The Heroes of the Underserved: the DMCI Homes Brand Story', 'Inspired by Alfonso With a wife and a baby on the way, the cost of living in the city became prohibitive for Alfonso. Far beyond the city boundaries, other builders began to develop sprawling neighborhoods of cookie-cutter houses on doily-sized lots. They\'re pretty but too cramped (for a growing family) and too far out of the city center.  The middle-class man became a stressed out man-in-the-middle, faced with no choice but to take the long daily commute--or pay big city prices. There was no middle ground. \"Pagod ka na papunta sa trabaho, pagod ka pa pag-uwi...\"  \"Alfonso deserves better,\" the Builder remarked. \"He deserves a real home, accessible to his work... a cocoon of good living.\"', '2024-02-29 17:56:52', '2024-02-29 17:56:52');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `progress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `image`, `progress`, `name`, `place`, `date`, `created_at`, `updated_at`) VALUES
(14, '1709270783_Kai Garden Residences-site-progress-data-1706666822429-medium.JPG', '96.33%', 'Kai Garden Residence', 'Mandaluyong', '2024-01-31', '2024-02-28 17:23:09', '2024-02-29 21:26:23'),
(15, '1709270759_Prisma Residences-site-progress-data-1706678993706-medium.jpg', '99.57%', 'Prisma Residences', 'Pasig City', '2024-01-31', '2024-02-28 17:24:20', '2024-03-13 21:11:49'),
(16, '/images/1709169900.jpg', '88.99%', 'Satori Residence', 'Pasig City', '2024-01-31', '2024-02-28 17:25:00', '2024-03-13 21:12:05'),
(17, '/images/1709171360.png', '10.24%', 'Sage Residences', 'Mandaluyong City', '2024-01-31', '2024-02-28 17:49:21', '2024-02-28 17:49:21'),
(18, '/images/1709171420.jpg', '99.91%', 'Fairlane Residencess', 'Pasig', '2024-01-31', '2024-02-28 17:50:20', '2024-03-06 03:36:27'),
(19, '/images/1709171464.jpg', '69.31%', 'Allegra Garden Place', 'Pasig', '2024-01-31', '2024-02-28 17:51:04', '2024-02-28 17:51:04'),
(20, '/images/1709171529.jpg', '24.43%', 'The Oriana', 'Quezon City', '2024-01-31', '2024-02-28 17:52:09', '2024-02-28 17:52:09'),
(21, '/images/1709171561.jpg', '5.42%', 'Mulberry Place', 'Taguig', '2024-01-31', '2024-02-28 17:52:41', '2024-02-28 17:52:41'),
(22, '/images/1709171593.jpg', '85.95%', 'The Aston Place', 'Pasay', '2024-01-31', '2024-02-28 17:53:13', '2024-02-28 17:53:13'),
(23, '/images/1709171638.jpg', '9.58%', 'The Calinea Tower', 'Caloocan', '2024-02-25', '2024-02-28 17:53:58', '2024-02-28 17:53:58'),
(24, '/images/1709171679.png', '80.99%', 'Cameron Tower', 'Quezon City', '2024-02-25', '2024-02-28 17:54:39', '2024-02-28 17:54:39'),
(26, '/images/1709171833.jpg', '10.42%', 'Fortis Residences', 'Makati', '2024-01-25', '2024-02-28 17:57:13', '2024-02-28 17:57:13'),
(27, '/images/1709171882.jpg', '49.27%', 'Sonora Garden Residence', 'Las Piñas', '2024-01-25', '2024-02-28 17:58:02', '2024-03-14 01:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `celandines`
--

CREATE TABLE `celandines` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `development` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `units` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `general` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `building` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `celandines`
--

INSERT INTO `celandines` (`id`, `image`, `name`, `price`, `status`, `development`, `units`, `location`, `general`, `building`, `link`, `created_at`, `updated_at`) VALUES
(1, '/images/1710494084.webp', 'BEACH CABIN 1', '4,000,000 - 7,968,000', 'Under Constructions', 'High Rise Condominiums1', '2 BEDROOM 54 sqm - 69 sqm', 'Taguig', '24-hour Security,Basketball Court/Playcourt,Children\'s Playground,Convenience Store,Fitness Gym,Lap Pool', 'Fire Alarm & Automatic Sprinkler System,Fire Exit,Garbage Rooms', '/crest', '2024-03-15 01:14:44', '2024-03-15 01:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`id`, `image`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, '1709259723.png', 'ULI Healthy Places Awards', 'Aiming to recognize outstanding and innovative development with advance design strategies that focus on the development of environment and promote healthy living in the country', '2024-02-29 18:22:03', '2024-03-03 21:31:55'),
(3, '1709260226.png', 'Annual Communicator Awards', 'DMCI Homes was awarded with distinction for its: Corporate Website, Mobile Application, and Print Ad: Ours is a Story on Quality. The Communicator Awards is the leading international awards program recognizing big ideas in marketing and communications.', '2024-02-29 18:30:26', '2024-02-29 18:30:26'),
(7, '1709261078.png', 'Reader\'s Digest Asia Gold Trusted Brand', 'DMCI Homes has been consistently awarded with a Reader\'s Digest Asia Gold Trusted Brand.', '2024-02-29 18:44:38', '2024-02-29 18:44:38'),
(8, '1709261117.png', 'Asia CEO Awards 2014 Finalist', 'DMCI Homes is a finalist for the Asia CEO Awards NEC Company of the Year.', '2024-02-29 18:45:17', '2024-02-29 18:45:17'),
(9, '1709261192.png', 'Philippines Green Building Council', 'DMCI Homes is a member of Philippines Green Building Council (PhilGBC), a national non-stock, non-profit organization that promotes the sharing of knowledge on green building practices to ensure a sustainable environment.', '2024-02-29 18:46:32', '2024-02-29 18:46:32'),
(10, '1709261786.png', 'PANAta Awards Gold', 'The leading resort-inspired developer challenges its employees to a commitment of quality service, earning them a Gold award from the Philippine Association for National Advertisers (PANA) for its internal campaign entitled, Ours is a Story on Quality.', '2024-02-29 18:56:26', '2024-02-29 18:56:26'),
(11, '1709261813.png', 'BIR 2013 Billionaires Club Award', 'DMCI Homes was among 10 companies that received the 2013 Billionaires Club Award from the Bureau of Internal Revenue (BIR) for paying more than P1 billion in taxes.', '2024-02-29 18:56:53', '2024-02-29 18:56:53'),
(12, '1709261833.png', 'Developer with the Most Value for Money', 'Given during The Outlook Awards of Lamudi, DMCI Homes was chosen winner in the category of the Developer with the Most Value for Money.', '2024-02-29 18:57:13', '2024-02-29 18:57:13'),
(13, '1709261877.png', 'PANATA', 'PANATA Excellence in Internal Communication', '2024-02-29 18:57:57', '2024-02-29 18:57:57'),
(14, '1709261895.png', 'Gawad Kaagapay', 'Gawad Kaagapay: Large Corporations Category', '2024-02-29 18:58:15', '2024-03-07 00:56:38'),
(15, '1709261914.png', 'Quadruple A Contractors', 'The notice on DMCI Homes\' upgraded category was released on January 18, 2017 by Philippine Contractors Accreditation Board (PCAB). The AAAA license given to DMCI Homes is currently the highest given to firms that satisfy the institution\'s requirements.', '2024-02-29 18:58:34', '2024-03-03 21:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `image`, `place`, `created_at`, `updated_at`) VALUES
(1, '/images/1709511539.webp', 'taguig', '2024-03-03 16:18:59', '2024-03-04 23:39:13'),
(2, '/images/1709511829.webp', 'quezon', '2024-03-03 16:23:49', '2024-03-04 23:40:10'),
(3, '/images/1709512097.webp', 'Bacoor', '2024-03-03 16:28:17', '2024-03-03 16:28:17'),
(4, '/images/1709512150.webp', 'Pasig', '2024-03-03 16:29:10', '2024-03-03 16:29:10'),
(5, '/images/1709512189.webp', 'Malay', '2024-03-03 16:29:49', '2024-03-03 16:29:49'),
(6, '/images/1709512220.webp', 'Pasay', '2024-03-03 16:30:20', '2024-03-03 16:30:20'),
(7, '/images/1709512259.jpg', 'Parañaque', '2024-03-03 16:30:59', '2024-03-03 21:13:03'),
(9, '/images/1709608987.jpg', 'cebu', '2024-03-04 19:23:07', '2024-03-04 23:42:59'),
(10, '/images/1709608999.webp', 'davao', '2024-03-04 19:23:19', '2024-03-04 23:43:08'),
(11, '/images/1709609023.jpg', 'Makati', '2024-03-04 19:23:43', '2024-03-04 19:23:43'),
(12, '/images/1709609035.webp', 'baguio', '2024-03-04 19:23:55', '2024-03-04 23:43:32'),
(13, '/images/1709609064.jpg', 'antipolo', '2024-03-04 19:24:24', '2024-03-04 23:43:40'),
(14, '/images/1709609078.webp', 'Mandaluyong', '2024-03-04 19:24:38', '2024-03-04 19:24:38'),
(15, '/images/1709609090.webp', 'Manila', '2024-03-04 19:24:50', '2024-03-04 19:24:50'),
(16, '/images/1709609103.webp', 'Las Piñas', '2024-03-04 19:25:03', '2024-03-04 19:25:03'),
(17, '/images/1709609132.jpg', 'Tuba, Benguet', '2024-03-04 19:25:32', '2024-03-04 19:25:32'),
(18, '/images/1709609148.jpg', 'santa-rosa-laguna', '2024-03-04 19:25:48', '2024-03-04 23:45:55'),
(19, '/images/1709609160.webp', 'Muntinlupa', '2024-03-04 19:26:00', '2024-03-04 19:26:00'),
(20, '/images/1709609174.jpg', 'san-juan-batangas', '2024-03-04 19:26:14', '2024-03-04 23:46:41'),
(21, '/images/1709609185.jpg', 'Caloocan', '2024-03-04 19:26:25', '2024-03-04 19:26:25'),
(22, '/images/1709609197.jpg', 'Carmona', '2024-03-04 19:26:37', '2024-03-04 19:26:37'),
(23, '/images/1709609207.webp', 'cabuyao-laguna', '2024-03-04 19:26:47', '2024-03-04 23:46:59'),
(24, '/images/1709609216.webp', 'Cavite', '2024-03-04 19:26:56', '2024-03-06 19:10:50');

-- --------------------------------------------------------

--
-- Table structure for table `cores`
--

CREATE TABLE `cores` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cores`
--

INSERT INTO `cores` (`id`, `image`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, '1710292812.jpg', 'Interdependence', 'With unity in purpose and mutual trust and respect for each other, we work toward\r\nshared aspirations and transcend boundaries along functional and organizational lines.', '2024-03-12 17:20:12', '2024-03-12 17:51:31'),
(2, '1710292830.jpg', 'Customer Orientation', 'Our goal is to delight and please our customers. Thus, all activities and programs we undertake result in innovative projects and in the enhancement of productivity and quality.', '2024-03-12 17:20:30', '2024-03-12 17:20:30'),
(3, '1710292844.jpg', 'Excellence', 'We reject mediocrity and strive for excellence in even the smallest of details.', '2024-03-12 17:20:44', '2024-03-12 17:20:44'),
(4, '1710292867.jpg', 'Integrity', 'All our actions are guided by what is ethical, fair, and right. Believing in profit with honor, we are committed to good governance and the highest moral standards.', '2024-03-12 17:21:07', '2024-03-12 17:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `date`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Great Home Deals from BDO and DMCI Homes!', '2024-02-15', 'Find your next home in one of DMCI Homes properties and avail BDO & Lowest Interest Rate at 5.55% fixed for 1 year. To know more about this promo, please visit your nearest BDO Branch. Promo period is from May 1 to July 31, 2013', '2024-02-28 19:45:43', '2024-03-06 03:47:57'),
(2, 'Stunning Vistas and Serene Havens', '2024-01-31', 'DMCI Homes Grand Open House Series DMCI Homes, the country & leading developer of resort-inspired communities continues to redefine urban living with its extensive portfolio of residential projects featuring high-rise developments,', '2024-02-28 21:08:58', '2024-03-05 17:20:08'),
(3, 'Acacia Estates Christmas Bazaar', '2024-02-01', 'Christmas is just around the corner at Acacia Estates open grounds. Come and join our residents in a Christmas Bazaar on December 14 to 16, 2012 from 10AM to 10PM. Great Food, Good Finds, Fun Shopping!', '2024-02-28 21:09:47', '2024-03-06 19:19:16'),
(4, 'Take your Palate on a Journey Home', '2024-02-01', 'Allow us to take you through memory lane as we celebrate the rich culinary heritage of Filipino flavors. Delight yourselves with our unique takes on traditional dishes, heirloom recipes and family favorites.', '2024-02-28 21:10:10', '2024-02-28 21:10:10'),
(5, 'DMCI Homes and SM Savemore bring grocery convenience to Acacia Estates', '2024-02-09', 'DMCI Homes and SM Savemore bring grocery convenience to Acacia Estates', '2024-02-28 21:10:35', '2024-02-28 21:10:35'),
(6, 'DMCI Homes Summer Camp 2012', '2024-02-08', 'We are inviting all the kids of DMCI Homes Communities to join and participate in the SUMMER CAMP PROGRAM 2012. DMCI Homes will be offering various classes in sports, creative and performing arts that would be a convenient', '2024-02-28 21:11:59', '2024-02-28 21:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `executives`
--

CREATE TABLE `executives` (
  `id` bigint UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `executives`
--

INSERT INTO `executives` (`id`, `image`, `name`, `position`, `created_at`, `updated_at`) VALUES
(3, '1709256784.jpg', 'Isidro A. Consunji', 'Chairman', '2024-02-29 17:33:04', '2024-03-06 19:20:27'),
(4, '1709256802.jpg', 'Alfredo R. Austria', 'President', '2024-02-29 17:33:22', '2024-02-29 17:33:22'),
(5, '1709256818.jpg', 'Edwina C. Laperal', 'Treasurer', '2024-02-29 17:33:38', '2024-02-29 17:33:38'),
(6, '1709256989.jpg', 'Enrico C. Wong', 'Senior Vice President - General Services, Leasing, Alta Vista De Boracay, Property Management, and Purchasing', '2024-02-29 17:36:29', '2024-02-29 17:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` tinyint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forleasings`
--

CREATE TABLE `forleasings` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `units` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `highs`
--

CREATE TABLE `highs` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `highs`
--

INSERT INTO `highs` (`id`, `image`, `name`, `place`, `bed`, `price`, `created_at`, `updated_at`) VALUES
(2, '/images/1709279921.webp', 'Allegra Garden Place', 'Pasig', '1BR 2BR 3BR', 'PHP  4,670,020- PHP  13,388,520', '2024-02-29 23:58:41', '2024-03-07 17:45:17'),
(3, '/images/1709280079.webp', 'Alder Residences', 'Taguig', '2BR', 'PHP  8,311,000-PHP  19,570,000', '2024-03-01 00:01:19', '2024-03-07 17:45:03'),
(4, '/images/1709280140.webp', 'Brio Tower', 'Makati', 'N/A', 'PHP  5,571,000-PHP  14,479,000', '2024-03-01 00:02:20', '2024-03-07 17:44:50'),
(5, '/images/1709280203.webp', 'Brixton Tower', 'Pasig', 'N/A', 'PHP  5,898,000-PHP  14,622,000', '2024-03-01 00:03:23', '2024-03-07 17:44:35'),
(6, '/images/1709280255.webp', 'Cameron Tower', 'Quezon City', 'N/A', 'PHP  4,871,000-PHP  11,874,000', '2024-03-01 00:04:15', '2024-03-07 17:44:24'),
(7, '/images/1709281410.webp', 'Cypress Tower', 'Taguig', '1BR', 'PHP  3,584,000, PHP  8,207,000', '2024-03-01 00:23:30', '2024-03-07 17:44:06'),
(8, '/images/1709281474.webp', 'Danlasan Gardens', 'Mandaluyong', 'N/A', 'PHP  5,393,000- PHP  20,022,000', '2024-03-01 00:24:34', '2024-03-07 17:43:55'),
(9, '/images/1709281590.webp', 'Fairlane Residences', 'Pasig', '2BR', 'PHP  9,212,000- PHP  16,608,000', '2024-03-01 00:26:30', '2024-03-07 17:43:44'),
(10, '/images/1709281960.webp', 'Fairway Terraces', 'Pasay', '1BR 2BR 3BR', 'PHP 5,106,000- PHP  11,729,000', '2024-03-01 00:32:40', '2024-03-07 17:43:24'),
(11, '/images/1709513874.webp', 'Flair Towers', 'Mandaluyong', '1BR 2BR 3BR STUDIO', 'PHP 5,172,000 - PHP 13,488,000', '2024-03-03 16:57:54', '2024-03-03 16:57:54'),
(12, '/images/1709513909.jpg', 'Fortis Residences', 'Makati', '1BR 2BR 3BR', 'PHP 13,832,000 - PHP 38,596,000', '2024-03-03 16:58:29', '2024-03-03 16:58:29'),
(13, '/images/1709513959.webp', 'Hampstead Garden Condominiums', 'Manila', 'N/A', 'PHP 0 - PHP 0', '2024-03-03 16:59:19', '2024-03-03 16:59:19'),
(14, '/images/1709513991.webp', 'Illumina Residences', 'Manila', '2BR 3BR STUDIO', 'PHP 3,310,000 - PHP 9,817,000', '2024-03-03 16:59:51', '2024-03-03 16:59:51'),
(15, '/images/1709514018.webp', 'Infina Towers1', 'Quezon City', '1BR 2BR 3BR', 'PHP 2,407,000 - PHP 10,202,000', '2024-03-03 17:00:18', '2024-03-03 19:45:26'),
(17, '/images/1709604622.webp', 'Kai Garden Residences', 'Mandaluyong', '1BR 2BR 3BR', 'PHP 5,261,000 - PHP 14,263,000', '2024-03-04 18:10:22', '2024-03-04 18:10:22'),
(18, '/images/1709604652.webp', 'La Verti Residences', 'Pasay', '1BR 2BR 3BR STUDIO', 'PHP 4,434,000 - PHP 10,640,000', '2024-03-04 18:10:52', '2024-03-04 18:10:52'),
(19, '/images/1709604679.webp', 'Lumiere Residences', 'Pasig', '1BR 2BR 3BR', 'PHP 4,864,000 - PHP 13,578,000', '2024-03-04 18:11:19', '2024-03-04 18:11:19'),
(20, '/images/1709604759.webp', 'One Castilla Place', 'Quezon City', '1BR 2BR 3BR', 'PHP 4,704,000 - PHP 11,163,000', '2024-03-04 18:12:39', '2024-03-04 18:12:39'),
(21, '/images/1709604783.webp', 'Prisma Residences', 'Pasig', '1BR 2BR 3BR', 'PHP 4,562,000 - PHP 12,174,000', '2024-03-04 18:13:03', '2024-03-04 18:13:03'),
(22, '/images/1709604889.jpg', 'Raya Garden Condominiums', 'Parañaque', '2BR 3BR STUDIO', 'PHP 3,708,000 - PHP 8,210,000', '2024-03-04 18:14:49', '2024-03-04 18:14:49'),
(23, '/images/1709604916.webp', 'Rosewood Pointe', 'Taguig', '2BR 3BR STUDIO', 'PHP 4,669,000 - PHP 10,410,000', '2024-03-04 18:15:16', '2024-03-04 18:15:16'),
(24, '/images/1709604943.jpg', 'Sage Residences', 'Mandaluyong', '1BR 2BR 3BR STUDIO', 'PHP 6,402,000 - PHP 15,604,000', '2024-03-04 18:15:43', '2024-03-04 18:15:43'),
(25, '/images/1709604971.webp', 'Satori Residences', 'Pasig', '1BR 2BR 3BR', 'PHP 4,437,000 - PHP 8,376,000', '2024-03-04 18:16:11', '2024-03-04 18:16:11'),
(26, '/images/1709604991.webp', 'Sheridan Towers', 'Pasig', '1BR 2BR 3BR', 'PHP 5,677,000 - PHP 11,590,000', '2024-03-04 18:16:31', '2024-03-04 18:16:31'),
(27, '/images/1709605020.webp', 'Sonora Garden Residences', 'Las Piñas', '1BR 2BR 3BR', 'PHP 4,314,000 - PHP 10,615,000', '2024-03-04 18:17:00', '2024-03-04 18:17:00'),
(28, '/images/1709605106.webp', 'Sorrel Residences', 'Manila', '1BR 2BR 3BR STUDIO', 'PHP 4,167,000 - PHP 8,297,000', '2024-03-04 18:18:26', '2024-03-04 18:18:26'),
(29, '/images/1709605129.webp', 'Stellar Place', 'Quezon City', '1BR 2BR 3BR STUDIO', 'PHP 3,954,000 - PHP 9,591,000', '2024-03-04 18:18:49', '2024-03-04 18:18:49'),
(30, '/images/1709605165.webp', 'The Amaryllis', 'Quezon City', '2BR 3BR 4BR', 'PHP 5,106,000 - PHP 14,969,000', '2024-03-04 18:19:25', '2024-03-04 18:19:25'),
(31, '/images/1709605193.webp', 'The Aston Place', 'Pasay', '1BR 2BR 3BR', 'PHP 5,963,000 - PHP 13,464,000', '2024-03-04 18:19:53', '2024-03-04 18:19:53'),
(32, '/images/1709605214.jpg', 'The Atherton', 'Parañaque', '1BR 2BR', 'PHP 4,030,000 - PHP 7,968,000', '2024-03-04 18:20:14', '2024-03-04 18:20:14'),
(33, '/images/1709605240.jpg', 'The Calinea Tower', 'Caloocan', '1BR 2BR 3BR STUDIO', 'PHP 5,325,000 - PHP 15,098,000', '2024-03-04 18:20:40', '2024-03-04 18:20:40'),
(34, '/images/1709605270.webp', 'The Camden Place', 'Manila', '1BR 2BR STUDIO', 'PHP 4,799,500 - PHP 9,255,000', '2024-03-04 18:21:10', '2024-03-04 18:21:10'),
(35, '/images/1709605301.webp', 'The Celandine', 'Quezon City', '1BR 2BR', 'PHP 3,930,000 - PHP 6,928,000', '2024-03-04 18:21:41', '2024-03-04 18:21:41'),
(36, '/images/1709605321.webp', 'The Crestmont', 'Quezon City', '1BR', 'PHP 6,271,000 - PHP 15,106,000', '2024-03-04 18:22:01', '2024-03-10 18:07:01'),
(37, '/images/1709606810.webp', 'The Erin Heights', 'Quezon City', '2BR', 'PHP 4,881,000 - PHP 29,842,000', '2024-03-04 18:46:50', '2024-03-10 18:06:54'),
(38, '/images/1709606836.webp', 'The Orabella', 'Quezon City', '1BR', 'PHP 4,551,000 - PHP 9,952,000', '2024-03-04 18:47:16', '2024-03-10 18:06:47'),
(39, '/images/1709606863.webp', 'The Oriana', 'Quezon City', '1BR', 'PHP 4,407,000 - PHP 9,769,000', '2024-03-04 18:47:43', '2024-03-10 18:06:39'),
(40, '/images/1709606992.webp', 'The Valeron Tower', 'Pasig', 'TBA', 'NOT YET AVAILABLE', '2024-03-04 18:49:52', '2024-03-04 18:49:52'),
(41, '/images/1709607031.webp', 'Tivoli Garden Residences', 'Mandaluyong', 'STUDIO', 'PHP 5,118,000 - PHP 15,476,000', '2024-03-04 18:50:31', '2024-03-10 18:06:30'),
(42, '/images/1709607066.webp', 'Torre De Manila', 'Manila', '1BR', 'PHP 5,918,000 - PHP 13,205,000', '2024-03-04 18:51:06', '2024-03-10 18:06:22'),
(43, '/images/1709607192.webp', 'Verdon Parc', 'Davao City', '2BR', 'PHP 4,019,000 -  PHP 8,763,000', '2024-03-04 18:53:12', '2024-03-12 16:25:04'),
(44, '/images/1709607268.webp', 'Viera Residences', 'Quezon City', '1BR', 'PHP 4,277,000 -  PHP 9,594,000', '2024-03-04 18:54:28', '2024-03-12 16:24:43'),
(45, '/images/1709607303.webp', 'Zinnia Towers', 'Quezon City', '1BR', 'PHP 3,760,000 - PHP 9,971,000', '2024-03-04 18:55:03', '2024-03-12 16:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `kaakbays`
--

CREATE TABLE `kaakbays` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kaakbays`
--

INSERT INTO `kaakbays` (`id`, `image`, `name`, `description`, `date`, `created_at`, `updated_at`) VALUES
(1, '1709520128.png', 'dmci-homes-employees-help-brgy-bangkal-makati-public-school', 'Kaakbay News DMCI Homes employees help Brgy. Bangkal, Makati public school', '2023-03-16', '2024-03-03 18:42:08', '2024-03-06 19:20:04'),
(2, '1709521492.png', 'DMCI Homes backs program supporting Brgy. Bangkal, Makati MSMEs Corporate Communication', 'DMCI Homes backs program supporting Brgy. Bangkal, Makati MSMEs Corporate Communication', '2023-02-13', '2024-03-03 19:04:52', '2024-03-03 19:04:52'),
(3, '1709521642.jpg', 'Sta. Cruz, Davao Del Sur lauds DMCI Homes\' Mt. Apo outreach activity .', 'Sta. Cruz, Davao Del Sur lauds DMCI Homes\' Mt. Apo outreach activity.', '2022-05-05', '2024-03-03 19:07:22', '2024-03-03 19:07:22'),
(4, '1709521727.jpg', 'DMC Scholarship helps skilled workers\' children power through the pandemic', 'DMC Scholarship helps skilled workers\' children power through the pandemic', '2022-04-29', '2024-03-03 19:08:47', '2024-03-03 19:08:47'),
(5, '1709521769.jpg', 'DMCI Homes donates Moderna COVID-19 vaccines to Philippine Red Cross', 'DMCI Homes donates Moderna COVID-19 vaccines to Philippine Red Cross', '2022-03-29', '2024-03-03 19:09:29', '2024-03-03 19:09:29'),
(6, '1709521819.jpg', 'DMCI Homes donates to orphanage, children`s hospital', 'DMCI Homes donates to orphanage, children`s hospital', '2022-02-06', '2024-03-03 19:10:19', '2024-03-03 19:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `leisures`
--

CREATE TABLE `leisures` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leisures`
--

INSERT INTO `leisures` (`id`, `image`, `name`, `place`, `bed`, `price`, `created_at`, `updated_at`) VALUES
(1, '/images/1709512855.webp', 'Alta Vista de Boracay', 'Malay', 'LOFT STUDIO', 'PHP 5,487,000 - PHP 9,241,000', '2024-03-03 16:40:55', '2024-03-03 16:40:55'),
(2, '/images/1709512887.jpg', 'Solmera Coast', 'San Juan, Batangas', '1BR 2BR STUDIO', 'PHP 6,300,000 - PHP 19,035,000', '2024-03-03 16:41:28', '2024-03-06 03:39:26');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mids`
--

CREATE TABLE `mids` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mids`
--

INSERT INTO `mids` (`id`, `image`, `name`, `place`, `bed`, `price`, `created_at`, `updated_at`) VALUES
(4, '/images/1709607466.webp', 'Accolade Place', 'Quezon City', '2BR 3BR', 'PHP 6,582,000 - PHP 13,545,000', '2024-03-04 18:57:46', '2024-03-04 18:57:46'),
(5, '/images/1709607538.webp', 'Alea Residences', 'Bacoor', '2BR 3BR', 'PHP 5,937,000 - PHP 9,584,000', '2024-03-04 18:58:58', '2024-03-04 18:58:58'),
(6, '/images/1709607583.webp', 'Arista Place', 'Parañaque', '2BR', 'PHP 4,830,000 - PHP 8,230,000', '2024-03-04 18:59:43', '2024-03-04 18:59:43'),
(7, '/images/1709607607.webp', 'Asteria Residences', 'Parañaque', '2BR 3BR', 'PHP 5,611,000 - PHP 9,592,000', '2024-03-04 19:00:07', '2024-03-04 19:00:07'),
(8, '/images/1709607694.webp', 'Bonifacio Heights Condominiums', 'Taguig', '2BR 3BR STUDIO', 'PHP 1,382,000 - PHP 4,257,000', '2024-03-04 19:01:34', '2024-03-04 19:01:34'),
(9, '/images/1709607852.webp', 'Bristle Ridge', 'Baguio City', '1BR 2BR 3BR', 'PHP 4,722,000 - PHP 13,203,000', '2024-03-04 19:04:12', '2024-03-04 19:04:12'),
(10, '/images/1709607872.webp', 'Calathea Place', 'Parañaque', '1BR 2BR', 'PHP 3,987,000 - PHP 5,206,000', '2024-03-04 19:04:32', '2024-03-04 19:04:32'),
(11, '/images/1709607903.webp', 'Cedar Crest', 'Taguig', '2BR 3BR', 'PHP 6,363,000 - PHP 10,917,000', '2024-03-04 19:05:04', '2024-03-04 19:05:04'),
(12, '/images/1709607924.webp', 'East Ortigas Mansions', 'Pasig', '1BR 2BR 3BR 4BR', 'PHP 4,002,000 - PHP 12,320,000', '2024-03-04 19:05:24', '2024-03-04 19:05:24'),
(13, '/images/1709607948.webp', 'East Raya Gardens', 'Pasig', '2BR 3BR', 'PHP 4,694,000 - PHP 8,891,000', '2024-03-04 19:05:48', '2024-03-04 19:05:48'),
(14, '/images/1709607984.webp', 'Hampstead Garden Condominiums', 'Manila', 'TBA', 'PHP 0 - PHP 0', '2024-03-04 19:06:24', '2024-03-04 19:06:24'),
(15, '/images/1709608005.webp', 'Ivory Wood', 'Taguig', '2BR 3BR', 'PHP 6,895,000 - PHP 10,330,000', '2024-03-04 19:06:45', '2024-03-04 19:06:45'),
(16, '/images/1709608028.webp', 'Magnolia Place', 'Quezon City', '2BR 3BR STUDIO', 'PHP 3,849,000 - PHP 7,966,000', '2024-03-04 19:07:08', '2024-03-04 19:07:08'),
(17, '/images/1709608084.webp', 'Maple Place', 'Taguig', '2BR 3BR', 'PHP 7,111,000 - PHP 10,466,000', '2024-03-04 19:08:04', '2024-03-04 19:08:04'),
(18, '/images/1709608102.webp', 'Maricielo Villas', 'Las Piñas', '2BR 3BR', 'PHP 4,092,000 - PHP 7,154,000', '2024-03-04 19:08:22', '2024-03-04 19:08:22'),
(19, '/images/1709608121.webp', 'Mirea Residences', 'Pasig', '2BR 3BR', 'PHP 5,649,000 - PHP 8,995,000', '2024-03-04 19:08:41', '2024-03-04 19:08:41'),
(20, '/images/1709608142.jpg', 'Mulberry Place', 'Taguig', '2BR 3BR 4BR', 'PHP 6,953,000 - PHP 25,337,000', '2024-03-04 19:09:02', '2024-03-04 19:09:02'),
(21, '/images/1709608161.webp', 'Oak Harbor Residences', 'Parañaque', '1BR 2BR 3BR LOFT', 'PHP 11,888,000 - PHP 56,588,000', '2024-03-04 19:09:21', '2024-03-04 19:09:21'),
(22, '/images/1709608177.webp', 'Ohana Place', 'Las Piñas', '2BR 3BR STUDIO', 'PHP 2,867,000 - PHP 8,266,000', '2024-03-04 19:09:37', '2024-03-04 19:09:37'),
(23, '/images/1709608233.webp', 'Outlook Ridge Residences', 'Baguio City', '2BR STUDIO', 'PHP 3,567,000 - PHP 11,040,000', '2024-03-04 19:10:33', '2024-03-04 19:10:33'),
(25, '/images/1709608256.webp', 'Palm Grove', 'Parañaque', '2BR 3BR H&L', 'PHP 4,213,000 - PHP 10,420,000', '2024-03-04 19:10:56', '2024-03-04 19:10:56'),
(26, '/images/1709608272.jpg', 'Raya Garden Condominiums', 'Parañaque', '2BR 3BR STUDIO', 'PHP 3,708,000 - PHP 8,210,000', '2024-03-04 19:11:12', '2024-03-04 19:11:12'),
(27, '/images/1709608327.webp', 'Rhapsody Residences', 'Muntinlupa', '2BR 3BR', 'PHP 3,952,000 - PHP 10,427,000', '2024-03-04 19:12:07', '2024-03-04 19:12:07'),
(28, '/images/1709608346.webp', 'Riverfront Residences', 'Pasig', '2BR 3BR', 'PHP 4,858,000 - PHP 9,493,000', '2024-03-04 19:12:26', '2024-03-04 19:12:26'),
(29, '/images/1709608364.webp', 'Rosewood Pointe', 'Taguig', '2BR 3BR STUDIO', 'PHP 4,669,000 - PHP 10,410,000', '2024-03-04 19:12:44', '2024-03-04 19:12:44'),
(30, '/images/1709608380.webp', 'Siena Park Residences', 'Parañaque', '2BR 3BR', 'PHP 4,790,000 - PHP 8,010,000', '2024-03-04 19:13:00', '2024-03-04 19:13:00'),
(31, '/images/1709608398.webp', 'Stellar Place', 'Quezon City', '1BR 2BR 3BR STUDIO', 'PHP 3,954,000 - PHP 9,591,000', '2024-03-04 19:13:18', '2024-03-04 19:13:18'),
(32, '/images/1709608417.webp', 'The Birchwood', 'Taguig', '2BR 3BR', 'PHP 7,150,000 - PHP 10,293,000', '2024-03-04 19:13:37', '2024-03-04 19:13:37'),
(33, '/images/1709608435.webp', 'The Redwoods', 'Quezon City', '2BR 3BR STUDIO', 'PHP 4,000,000 - PHP 8,173,00', '2024-03-04 19:13:55', '2024-03-04 19:13:55'),
(34, '/images/1709608456.webp', 'Verawood Residences', 'Taguig', '2BR 3BR', 'PHP 5,122,000 - PHP 9,596,000', '2024-03-04 19:14:16', '2024-03-04 19:14:16'),
(35, '/images/1709608478.webp', 'Verdon Parc', 'Davao City', '1BR 2BR', 'PHP 4,019,000 - PHP 8,763,000', '2024-03-04 19:14:38', '2024-03-04 19:14:38'),
(36, '/images/1709608496.webp', 'Vista De Lago', 'Taguig', '2BR 3BR 4BR', 'PHP 4,195,000 - PHP 9,695,000', '2024-03-04 19:14:56', '2024-03-12 16:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(24, '2024_02_22_010916_create_users_table', 1),
(25, '2024_02_26_024931_create_properties_table', 1),
(26, '2024_02_26_063246_create_logos_table', 1),
(27, '2024_02_26_074601_create_visions_table', 1),
(28, '2024_02_27_005856_create_sellers_table', 1),
(29, '2024_02_27_035255_create_abouts_table', 1),
(30, '2024_02_27_114512_create_news_updates_table', 1),
(31, '2024_02_28_054810_create_recos_table', 2),
(32, '2024_02_29_001945_create_cards_table', 3),
(33, '2024_02_29_022222_create_testimonial_table', 4),
(34, '2024_02_29_033655_create_events_table', 5),
(35, '2024_02_29_051823_create_promo_table', 6),
(36, '2024_02_29_082317_create_mission_table', 7),
(37, '2024_03_01_011911_create_executive_table', 8),
(38, '2024_03_01_014750_create_brand_table', 9),
(39, '2024_03_01_015543_create_brands_table', 10),
(40, '2024_03_01_021256_create_certifications_table', 11),
(41, '2024_03_01_074101_create_high_table', 12),
(42, '2024_03_01_083530_create_mids_table', 13),
(43, '2024_03_03_125212_create_subdivisions_table', 14),
(44, '2024_03_03_235805_create_citys_table', 15),
(45, '2024_03_04_003549_create_leisures_table', 16),
(46, '2024_03_04_023203_create_kaakbays_table', 17),
(47, '2024_03_07_062718_create_values_table', 18),
(48, '2024_03_13_003311_create_cores_table', 19),
(49, '2024_03_13_060054_create_feedback_table', 20),
(50, '2024_03_15_002709_create_alders_table', 21),
(51, '2024_03_15_083735_create_celandines_table', 22),
(52, '2024_03_21_035630_create_sent_emails_table', 23),
(53, '2024_03_25_001907_create_sent_leasings_table', 23),
(54, '2024_03_25_002031_create_leasings_table', 24),
(55, '2024_03_25_014330_create_leases_table', 25),
(56, '2024_03_25_020602_create_leases_table', 26),
(57, '2024_03_25_021806_create_forlease_table', 27),
(58, '2024_03_25_023608_create_forleasings_table', 28),
(59, '2024_03_25_025133_create_add_leases_table', 29),
(60, '2024_03_26_002524_create_sendproperty_table', 30),
(61, '2024_03_26_002524_create_send_properties_table', 31);

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `missions`
--

INSERT INTO `missions` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Vision & Mission', 'We shall be the best provider of residential communities designed to create quality lifestyle responsive to the changing needs and preferences of the market we serve.', '2024-02-29 00:38:12', '2024-03-06 22:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `news_updates`
--

CREATE TABLE `news_updates` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_updates`
--

INSERT INTO `news_updates` (`id`, `image`, `name`, `link`, `description`, `date`, `created_at`, `updated_at`) VALUES
(49, 'images/1709095521_top-4-reasons-why-you-should-consider-allegra-garden-place-as-your-new-home-in-the-metro-1708481915523.jpg', 'News', '/top', 'Top 4 reasons why you should consider allegra garden your place as your new home in metro', '2024-02-22', '2024-02-27 20:45:21', '2024-03-05 22:53:57'),
(52, 'images/1709095964_beating-metro-manila-traffic-with-dmci-homes-transit-oriented-living-solutions-1708572777356.jpg', 'News', '/beating', 'Beating Metro Manila traffic with DMCI Homes \' Transit-Oriented Living Solutions', '2024-02-26', '2024-02-27 20:52:44', '2024-03-05 22:47:36'),
(53, 'images/1709096224_The Aston Place-site-progress-data-1703824506618-medium.jpg', 'News', '/aston', 'The Aston Place homeowners will move into units with built-in, commercial-grade fiber internet', '2024-02-19', '2024-02-27 20:57:04', '2024-03-05 23:09:01'),
(54, 'images/1709097909_mobile-gaming-pro-lauds-dmci-homes-condos-commercial-grade-fiber-internet-service-1707976363905.jpg', 'News', '/mobile', 'Mobile gaming pro lauds DMCI Homes condo`s commercial-grade fiber internet service', '2024-02-15', '2024-02-27 21:25:09', '2024-03-05 23:06:07'),
(55, 'images/1709103857_dmci-homes-unveils-redevelopment-concepts-for-acacia-estates-township-in-taguig-1707739908458.jpg', 'news', '/development', 'DMCI Homes unveils redevelopment concepts for Acacia Estates township on taguig', '2024-02-12', '2024-02-27 23:04:17', '2024-03-05 22:34:22'),
(56, 'images/1709103958_second-building-of-dmci-homes-japanese-garden-themed-condo-starts-accepting-move-ins-1707367949771.png', 'Kai Garden Residence', '/kai', 'Second building of DMCI Homes\' Japanese Garden-themed condo starts accepting move-ins', '2024-02-08', '2024-02-27 23:05:58', '2024-03-06 03:53:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE `promos` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promos`
--

INSERT INTO `promos` (`id`, `image`, `name`, `date`, `created_at`, `updated_at`) VALUES
(8, '1709187877.jpg', 'Vacation Pass', '2024-02-10', '2024-02-28 22:24:37', '2024-03-06 19:19:33');

-- --------------------------------------------------------

--
-- Table structure for table `recos`
--

CREATE TABLE `recos` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recos`
--

INSERT INTO `recos` (`id`, `image`, `name`, `link`, `place`, `bed`, `price`, `created_at`, `updated_at`) VALUES
(6, '/images/1709108346.webp', 'Prisma Residences', '/prismas', 'Pasig', '2BR 3BR', '4,562,000-12,174,000', '2024-02-27 22:38:48', '2024-03-06 17:04:29'),
(7, '/images/1709102479.webp', 'The Cresmount', '/crest', 'Quezon City', '2BR 3BR', '6,217,000-15,106,000', '2024-02-27 22:41:19', '2024-03-06 16:42:44'),
(8, '/images/1709102740.webp', 'Allegra Garden Place', '', 'Pasig', '1BR 2BR 3BR', '4,670,000-13,388,520', '2024-02-27 22:45:40', '2024-02-27 22:45:40'),
(9, '/images/1709102907.webp', 'Sonora Garden Residences', '/sonora', 'Las Piñas', '1BR 2BR 3BR', '4,314,000-10,615,000', '2024-02-27 22:48:27', '2024-03-06 17:29:24'),
(15, '/images/1709107729.jpg', 'The Atherton', '/atherton', 'Paranaque', '1BR 2BR', '4,000,000 - 7,968,000', '2024-02-28 00:08:49', '2024-03-06 17:04:42');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accreditation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_training` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `events` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `send_properties`
--

CREATE TABLE `send_properties` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `send_properties`
--

INSERT INTO `send_properties` (`id`, `image`, `name`, `email`, `description`, `status`, `created_at`, `updated_at`) VALUES
(8, '\"[\\\"\\\\\\/images\\\\\\/1711427556_EAVXWlcM3LQJNlxEoEEzBQfEscAKXLYsAa42I1Ns.png\\\",\\\"\\\\\\/images\\\\\\/1711427556_gC7V8js5RO4VneKpCh1Ky6Behyu8vBivJCzShXUC.jpg\\\",\\\"\\\\\\/images\\\\\\/1711427556_iO08T2oFUPMKE49if7K4lb8IoufCPsiCSHOpPDf0.jpg\\\"]\"', 'Fortis Residences', 'decastrojustin24@gmail.com', 'Welcome to your dream family home! This charming property boasts three spacious bedrooms, two modern bathrooms, and a cozy living area perfect for gathering with loved ones. Situated in a peaceful neighborhood, this home offers a serene retreat from the hustle and bustle of city life.\r\n\r\nFeatures:\r\n\r\nOpen-plan kitchen with stainless steel appliances\r\nBright and airy living room with large windows\r\nWell-maintained backyard, ideal for outdoor entertaining\r\nAttached garage for convenient parking\r\nClose proximity to schools, parks, and shopping centers', 'Accepted', '2024-03-25 20:32:36', '2024-03-25 20:59:13'),
(19, '\"[\\\"\\\\\\/images\\\\\\/1711433750_1709079800_Alea Residences-featured-1644910665040-small.png\\\",\\\"\\\\\\/images\\\\\\/1711433750_1709081490_1709022343.jpg\\\",\\\"\\\\\\/images\\\\\\/1711433750_1709083740_1709023244.JPG\\\"]\"', 'Justin DE CASTRO', 'decastrojustin24@gmail.com', 'power ranger', 'PENDING', '2024-03-25 22:15:50', '2024-03-25 22:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `sent_emails`
--

CREATE TABLE `sent_emails` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sent_leasings`
--

CREATE TABLE `sent_leasings` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `development` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `units` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `general` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `building` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subdivisions`
--

CREATE TABLE `subdivisions` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subdivisions`
--

INSERT INTO `subdivisions` (`id`, `image`, `name`, `place`, `bed`, `price`, `created_at`, `updated_at`) VALUES
(2, '/images/1709471729.webp', 'Mahogany Place III', 'Taguig', 'H&L', 'PHP 5,625,000 - PHP 61,256,000', '2024-03-03 05:15:29', '2024-03-10 19:24:48'),
(3, '/images/1709471873.webp', 'Spring Lane', 'Taguig', 'H&L', 'PHP 812,500 - PHP 3,676,000', '2024-03-03 05:17:53', '2024-03-10 19:24:41'),
(4, '/images/1709472020.jpg', 'Villa Alegre Homes', 'Carmona', 'H&L', 'PHP 1,359,700 - PHP 8,649,900', '2024-03-03 05:20:20', '2024-03-10 19:24:34'),
(5, '/images/1709472056.jpg', 'Willow Park Homes', 'Cabuyao, Laguna', 'H&L', 'PHP 756,000 - PHP 8,547,000', '2024-03-03 05:20:56', '2024-03-10 19:24:27'),
(6, '/images/1709472089.jpg', 'Woodland Hills', 'Cavite City', 'H&L', 'PHP 634,200 - PHP 10,990,000', '2024-03-03 05:21:29', '2024-03-10 19:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `description`, `date`, `created_at`, `updated_at`) VALUES
(3, '1709175198.jpg', 'Celandine', 'Trilingual digital artist shares inspiring journey to achieving dream home', '2024-01-31', '2024-02-28 18:53:18', '2024-03-14 02:07:12'),
(4, '1709175928.jpg', 'Ideal Baguio', 'Many consider Baguio City as an ideal place to spend life after\r\n                                                retirement because of its cool weather, astonishing panoramic views, and\r\n                                                vacation atmosphere.', '2024-02-15', '2024-02-28 19:05:28', '2024-02-28 19:05:28'),
(6, '1709177032.jpg', 'Lumiere Residences', 'Almost two years into the coronavirus pandemic, several companies in\r\n                                                Metro Manila continue to implement a work-from-home arrangement for\r\n                                                their employees', '2024-02-09', '2024-02-28 19:23:52', '2024-02-28 19:23:52'),
(8, '1709177254.jpg', 'Calathea Place', 'This is the first property that my husband and I bought and\r\n                                                we made sure to choose the best.\r\n                                               \r\n                                                This was proudly declared by Amy Lamson as she fondly talked about their\r\n                                                2-bedroom unit at DMCI Homes&amp;rsquo; Calathea Place community in\r\n                                                Para&amp;ntilde;aque City', '2024-02-02', '2024-02-28 19:27:34', '2024-02-28 19:27:34'),
(9, '1709177370.png', 'The Amaryllis', 'Even at a young age, Carlo Palad or more popularly known as\r\n                                              in the gaming world, already knew what he\r\n           wanted to be in life to be a professional esports player.\r\n                                             Bata pa lang ako mahilig na ako sa computer games, nangarap\r\n                                                akong maging pro player 1st year high school pa lang ako,', '2024-02-03', '2024-02-28 19:29:30', '2024-02-28 19:29:30'),
(10, '1709177464.jpg', 'Cedar Crest', 'Just seeing their children get excited every day to play outdoors and\r\n                                                meet their friends next door, homeowners in DMCI Homes&amp;rsquo; Cedar\r\n                                                Crest community know they made the right decision to invest in a unit a\r\n                                                decade ago.', '2024-02-08', '2024-02-28 19:31:04', '2024-02-28 19:31:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'BEACH CABIN 1', 'justin@justin.com', NULL, '$2y$12$b94BcrBFaxLIRD/Aw4tmkOdMBqF6Uj.TzxOfbNN6/aGeasuqePXjC', 'user', NULL, '2024-02-27 03:58:35', '2024-02-27 03:58:35'),
(2, 'GARDEN CABIN FOR 2', 'garden@gmail.com', NULL, '$2y$12$IaxIBiN5qWDjcmztaK4XAufCdNOYFQY.efwrGOkNXuCNZQczRLMW6', 'user', NULL, '2024-03-04 20:46:06', '2024-03-04 20:46:06');

-- --------------------------------------------------------

--
-- Table structure for table `values`
--

CREATE TABLE `values` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `values`
--

INSERT INTO `values` (`id`, `image`, `name`, `created_at`, `updated_at`) VALUES
(2, '1709796347.jpg', 'MODERN IN-CITY LIVING', '2024-03-06 23:25:47', '2024-03-06 23:25:47'),
(3, '1709796383.jpg', 'MEDIUM DENSITY DEVELOPMENT', '2024-03-06 23:26:23', '2024-03-06 23:26:23'),
(4, '1709796416.jpg', 'RESORT LIVING', '2024-03-06 23:26:56', '2024-03-06 23:26:56'),
(5, '1709796443.jpg', 'THEMED DEVELOPMENT', '2024-03-06 23:27:23', '2024-03-06 23:27:23'),
(6, '1709797026.jpg', 'QUALITY WORKMANSHIP', '2024-03-06 23:37:06', '2024-03-06 23:37:06'),
(7, '1709797070.jpg', 'READY FOR OCCUPANCY', '2024-03-06 23:37:50', '2024-03-06 23:37:50');

-- --------------------------------------------------------

--
-- Table structure for table `visions`
--

CREATE TABLE `visions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_leases`
--
ALTER TABLE `add_leases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alders`
--
ALTER TABLE `alders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `celandines`
--
ALTER TABLE `celandines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cores`
--
ALTER TABLE `cores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `executives`
--
ALTER TABLE `executives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forleasings`
--
ALTER TABLE `forleasings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `highs`
--
ALTER TABLE `highs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kaakbays`
--
ALTER TABLE `kaakbays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leisures`
--
ALTER TABLE `leisures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mids`
--
ALTER TABLE `mids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_updates`
--
ALTER TABLE `news_updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recos`
--
ALTER TABLE `recos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_properties`
--
ALTER TABLE `send_properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sent_emails`
--
ALTER TABLE `sent_emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sent_leasings`
--
ALTER TABLE `sent_leasings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subdivisions`
--
ALTER TABLE `subdivisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `values`
--
ALTER TABLE `values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visions`
--
ALTER TABLE `visions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_leases`
--
ALTER TABLE `add_leases`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `alders`
--
ALTER TABLE `alders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `celandines`
--
ALTER TABLE `celandines`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `cores`
--
ALTER TABLE `cores`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `executives`
--
ALTER TABLE `executives`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forleasings`
--
ALTER TABLE `forleasings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `highs`
--
ALTER TABLE `highs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `kaakbays`
--
ALTER TABLE `kaakbays`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `leisures`
--
ALTER TABLE `leisures`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mids`
--
ALTER TABLE `mids`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_updates`
--
ALTER TABLE `news_updates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `recos`
--
ALTER TABLE `recos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `send_properties`
--
ALTER TABLE `send_properties`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sent_emails`
--
ALTER TABLE `sent_emails`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sent_leasings`
--
ALTER TABLE `sent_leasings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subdivisions`
--
ALTER TABLE `subdivisions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `values`
--
ALTER TABLE `values`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `visions`
--
ALTER TABLE `visions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
