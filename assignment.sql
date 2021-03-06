-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 25, 2015 at 04:11 AM
-- Server version: 5.5.41-log
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
`ID` int(11) NOT NULL,
  `User` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `Rating` varchar(2) COLLATE utf8_general_mysql500_ci NOT NULL,
  `Review` mediumtext COLLATE utf8_general_mysql500_ci NOT NULL,
  `Court` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`ID`, `User`, `Rating`, `Review`, `Court`) VALUES
(1, 'Lumiya', '8', 'It was okay, reeked a bit of cat urine to be honest.', 'Algester State School');

-- --------------------------------------------------------

--
-- Table structure for table `tennis_courts`
--

CREATE TABLE IF NOT EXISTS `tennis_courts` (
`ID` int(11) NOT NULL,
  `Venue` varchar(84) DEFAULT NULL,
  `Coordinates` varchar(21) DEFAULT NULL,
  `Suburb` varchar(18) DEFAULT NULL,
  `Address` varchar(48) DEFAULT NULL,
  `Number of tennis courts` varchar(2) DEFAULT NULL,
  `Booking details` varchar(177) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `tennis_courts`
--

INSERT INTO `tennis_courts` (`ID`, `Venue`, `Coordinates`, `Suburb`, `Address`, `Number of tennis courts`, `Booking details`) VALUES
(1, 'Algester State School', '-27.615549,153.030034', 'Algester', '19 Endiandra Street, Algester', '2', '07 3712 5111'),
(2, 'Junction Park State School', '-27.509708,153.034015', 'Annerley', '50 Waldheim Street, Annerley', '2', 'Email Junction Park Tennis Club - junctionparktennis@gmail.com'),
(3, 'Ascot State School', '-27.427997,153.053968', 'Ascot', 'Reeve Street, Ascot', '2', '07 3326 9333'),
(4, 'Ashgrove State School', '-27.447186,152.976894', 'Ashgrove', 'Glory Street, Ashgrove', '2', '07 3366 4836'),
(5, 'Oakleigh State School', '-27.436196,152.985612', 'Ashgrove', 'Buxton Street, Ashgrove', '2', '07 3510 2888 (business hours)\r\n07 3366 6537 (after hours)'),
(6, 'Bardon State School', '-27.46076,152.972214', 'Bardon', '330 Simpsons Road, Bardon', '1', '07 3511 4555'),
(7, 'Carina State School', '-27.492298,153.102293', 'Carina', '1413 Creek Road, Carina', '1', '07 3900 9666'),
(8, 'Chapel Hill State School', '-27.499801,152.94584', 'Chapel Hill', 'Ironbark Road, Chapel Hill', '2', '0403 128 235'),
(9, 'Craigslea State School', '-27.383731,153.018098', 'Chermside West', 'Hamilton Road, Chermside West', '2', '07 3350 8777'),
(10, 'Kalinga Park', '-27.407535,153.05177', 'Clayfield', 'Kalinga Street, Clayfield', '2', 'Contact Gail Jones on 0411 421 346, Monday to Friday from 9am - 3pm. NOTE - bookings will only be taken during these hours and two days notice is required for a weekend booking.'),
(11, 'Coorparoo State School', '-27.493904,153.062009', 'Coorparoo', '327 Old Cleveland Road, Coorparoo', '2', '07 3421 0333'),
(12, 'Corinda State School', '-27.547731,152.981792', 'Corinda', '330 Cliveden Avenue, Corinda', '3', '0408 188 653'),
(13, 'Darra State School', '-27.570768,152.953192', 'Darra', 'Winslow Street, Darra', '1', '07 3375 4285'),
(14, 'Sandgate District Youth Tennis Association', '-27.322629,153.061526', 'Deagon', 'Deagon Sportsground Park, Board Street, Deagon', '8', '07 3269 7783'),
(15, 'Dutton Park State School', '-27.493764,153.028125', 'Dutton Park', 'Annerley Road, Dutton Park', '1', '07 3010 8333'),
(16, 'Corporation of the Synod of the Diocese of Brisbane (Anglican Church Grammar School)', '-27.478554,153.051599', 'East Brisbane', 'Heath Park, Hilton Street, East Brisbane', '4', '0412 615 117'),
(17, 'Killarney Street Park', '-27.607092,152.947948', 'Ellen Grove', 'Killarney Street, Ellen Grove', '', 'See sign at tennis court'),
(18, 'Enoggera State School', '-27.417407,152.994653', 'Enoggera ', '235 South Pine Road, Enoggera', '2', 'Email Enoggera State School - admin@enoggerass.edu.au'),
(19, 'Ferny Grove State School', '-27.4047,152.929301', 'Ferny Grove', 'Finvoy Street, Ferny Grove', '2', '0407 767 750'),
(20, 'Jimbour Close Park', '-27.607675,152.957416', 'Forest Lake', 'Glengyle Place, Forest Lake', '', 'See sign at tennis court'),
(21, 'Lakeside Village Tennis Court', '-27.621592,152.960257', 'Forest Lake', 'The Lake Parklands, Blue Lake Court, Forest Lake', '2', 'See sign at tennis court'),
(22, 'Geebung State School', '-27.373968,153.045318', 'Geebung', '250 Newman Road, Geebung', '2', '07 3865 5022'),
(23, 'Greenslopes State School', '-27.506385,153.049411', 'Greenslopes', '559 Logan Road, Greenslopes', '1', '07 3397 2200'),
(24, 'Gumdale State School', '-27.491527,153.151646', 'Gumdale', 'New Cleveland Road, Gumdale', '1', '07 3245 3313 (business hours)\r\n0404 374 048 (after hours)'),
(25, 'Hamilton State School', '-27.432411,153.0741', 'Hamilton', 'Oxford Street, Hamilton', '1', '07 3268 1985'),
(26, 'Hendra State School', '-27.421717,153.074521', 'Hendra', '390 Nudgee Road, Hendra', '1', '0414 692 600'),
(27, 'Brisbane Girls Grammar School', '-27.45843,153.020306', 'Herston', 'Victoria Park, Gregory Terrace, Herston', '4', '07 3332 1300'),
(28, 'Christian Brothers Queensland (St Josephs College)', '-27.455931,153.024434', 'Herston', 'Victoria Park, Gregory Terrace, Herston', '4', '07 3214 5200 (school office, business hours)'),
(29, 'Holland Park State School', '-27.513762,153.06206', 'Holland Park ', '59 Abbotsleigh Street, Holland Park', '2', '07 3847 9667'),
(30, 'Seville Road State School', '-27.524932,153.071799', 'Holland Park ', 'Corner Roscoe Road & Oates Avenue, Holland Park', '1', '07 3347 6111'),
(31, 'Marshall Road State School', '-27.525777,153.059005', 'Holland Park West ', 'Kurts Street, Holland Park West', '1', '07 3422 8222'),
(32, 'Serivceton South State School', '-27.606793,152.977503', 'Inala', '59 Lorikeet Street, Inala', '1', '07 3714 0222'),
(33, 'Jamboree Heights State School', '-27.554276,152.930428', 'Jamboree Heights', '35 Beanland Street, Jamboree Heights', '2', '07 3279 1098'),
(34, 'Kenmore State High School', '-27.506216,152.929902', 'Kenmore', 'Aberfeldy Street, Kenmore', '4', '07 3878 3361'),
(35, 'Kenmore State School', '-27.508157,152.939483', 'Kenmore', '2052 Moggill Road, Kenmore', '2', '0468 643 588'),
(36, 'Kenmore South State School', '-27.516945,152.943109', 'Kenmore', 'Kersley Road, Kenmore', '2', '07 3327 0888'),
(37, 'McDowall State School', '-27.387899,152.988195', 'McDowall', '1018 Rode Road, McDowall', '2', '0408 776 549'),
(38, 'Wynnum State High School', '-27.454813,153.175332', 'Manly', 'Peel Street, Manly', '4', '07 3906 7333'),
(39, 'Mansfield State High School', '-27.543184,153.106477', 'Mansfield', 'Broadwater Road, Mansfield', '2', '07 3452 5333'),
(40, 'Middle Park State School', '-27.559683,152.919844', 'Middle Park', 'MacFarlane Street, Middle Park', '2', '07 3376 8668'),
(41, 'Mitchelton State School', '-27.412471,152.969974', 'Mitchelton', '47 Glen Retreat Road, Mitchelton', '2', '0421 062 072'),
(42, 'Mitchelton State High School', '-27.410805,152.968306', 'Mitchelton', 'Samford Road, Mitchelton', '2', '07 3550 1111'),
(43, 'Moorooka State School', '-27.537053,153.024337', 'Moorooka', 'Sherley Street, Moorooka', '2', '07 3426 5333'),
(44, 'Morningside State School', '-27.464161,153.065292', 'Morningside', '67 Pashen Street, Morningside', '2', '07 3908 2333'),
(45, 'Murarrie State School', '-27.461738,153.100185', 'Murarrie', 'Garrett Street, Murarrie', '1', '07 3390 4592'),
(46, 'New Farm Park', '-27.468126,153.051771', 'New Farm', 'Brunswick Street, New Farm', '2', '07 3358 5600'),
(47, 'Nundah State School', '-27.40199,153.057055', 'Nundah', 'Bage Street, Nundah', '2', '07 3635 5888'),
(48, 'Rainworth State School', '-27.468626,152.985091', 'Bardon', '185 Boundary Road, Bardon', '2', '0417 785 702'),
(49, 'Salisbury State School', '-27.554304,153.032282', 'Salisbury', '19 Cripp Street, Salisbury', '2', '0435 012 148'),
(50, 'Stafford Heights State School', '-27.401118,153.003008', 'Stafford Heights', '95 Redwood Road, Stafford Heights', '2', '07 3359 6016'),
(51, 'Benbek Circuit Park', '-27.601378,153.042566', 'Sunnybank', 'Benbek Circuit, Sunnybank', '', 'See sign at tennis court'),
(52, 'Sunnybank Hills State School', '-27.594347,153.054689', 'Sunnybank Hills', '77 Symons Road, Sunnybank Hills', '2', '07 3344 1092'),
(53, 'Hilder Road State School', '-27.437889,152.936436', 'The Gap', 'Kaloma Road, The Gap', '2', '477311039'),
(54, 'Payne Road State School', '-27.447515,152.951424', 'The Gap', '171 Payne Road, The Gap', '2', '07 3300 7059'),
(55, 'The Gap State School', '-27.441007,152.944397', 'The Gap', 'Corner Waterworks and Settlement Roads, The Gap', '2', '07 3300 6668'),
(56, 'Toowong State School', '-27.480267,152.988286', 'Toowong', 'St Osyth Street, Toowong', '3', '0403 128 235'),
(57, 'Shaw Park Tennis Centre', '-27.406338,153.043445', 'Wavell Heights', 'Shaw Road, Wavell Heights', '10', '07 3266 1660'),
(58, 'Wellers Hill State School', '-27.526307,153.046401', 'Wellers Hill', 'Corner Toohey and Weller Roads, Wellers Hill', '2', '07 3848 0311'),
(59, 'West End State School', '-27.480213,153.008421', 'West End', '24 Vulture Street, West End', '2', '07 3010 8222'),
(60, 'Wilston State School', '-27.427566,153.014703', 'Wilston', 'Primrose Street, Wilston', '2', 'Email Wilston P&C - tenniscourts@wilstonpandc.org.au'),
(61, 'Wishart State School', '-27.550714,153.095365', 'Wishart', 'Morella Street, Wishart', '2', '07 3849 0555'),
(62, 'Kedron State High School', '-27.414129,153.039301', 'Wooloowin', 'Park Road, Wooloowin', '2', '07 3630 3333'),
(63, 'Wynnum District Lawn Tennis Association', '-27.444849,153.167084', 'Wynnum', 'Kitchener Park, Bridge Street, Wynnum', '10', '07 3396 2565'),
(64, 'Yeronga Tennis Club', '-27.518196,153.022594', 'Yeronga', 'Yeronga Park, Park Road, Yeronga', '3', '07 3341 3799'),
(65, 'Runcorn State Primary School', '-27.587396,153.061502', 'Sunnybank', 'Corner Mains Road and Beenleigh Road', '2', 'Remar Tennis Academy -  0413 425 229 or 3345 9620\n'),
(66, 'Wilston State School', '-27.427566,153.014703', 'Wilston', 'Primrose Street, Wilston', '2', 'Email Wilston P&C on tenniscourts@wilstonpandc.org.au');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tennis_courts`
--
ALTER TABLE `tennis_courts`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tennis_courts`
--
ALTER TABLE `tennis_courts`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
