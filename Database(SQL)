-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 07:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prajaakeeya`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('ali', 'ali123');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `post_image` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `post_image`, `content`, `created`) VALUES
(20, '10', 'upload/99.jpeg', '@Yadgiri', '1604085935'),
(21, '10', 'upload/44.jpg', '@Yadgiri', '1604086203'),
(23, '8', 'upload/66.jpg', '@Raichur, Half of work done by the government whose is responsible for this....?', '1604086561'),
(24, '8', 'upload/33.jpg', '@Raichur, What is the situation of water facility see guys.....?', '1604086712'),
(25, '9', 'upload/11.jpg', '@Sirwar,  How we can solve this problem guys.....?', '1604111549'),
(26, '7', 'upload/88.jpeg', '@Doddakannelli', '1604111687'),
(27, '11', 'upload/images.jpeg', '@Bengaluru', '1604113148');

-- --------------------------------------------------------

--
-- Table structure for table `profile_post`
--

CREATE TABLE `profile_post` (
  `photo_id` int(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `solution_id` int(100) NOT NULL,
  `post_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `solution_content` longtext NOT NULL,
  `image` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`solution_id`, `post_id`, `user_id`, `name`, `solution_content`, `image`, `created`) VALUES
(26, '21', '8', 'Ragu Raam', 'A wide variety of materials are used in the construction of roads these are soils (naturally occurring or processed), aggregates (fine aggregates or coarse aggregates obtained from rocks), binders like lime, bituminous materials, and cement, and miscellaneous materials used as admixtures for improved performance or roads under heavy loads and traffic.\r\n\r\nSoil constitutes the primary material for the foundation, subgrade, or even the pavement(for low-cost roads with low traffic in rural areas).', 'upload/IMG_20170909_184301.jpg', '1604109919'),
(28, '20', '7', 'ali allu', 'An estimated 1.2 billion people worldwide lack access to electricity, and most resort to kerosene as their primary lighting source. It has been widely asserted that replacing kerosene lamps with solar lighting could offer relief from kerosene’s toxic smoke and high prices; provide better-quality and more hours of nighttime light; enhance safety, and provide an affordable way to charge cell phones.', 'upload/IMG_20191018_122556_586.jpg', '1604112011'),
(30, '20', '9', 'Mahiboob  Ali', 'Although the direct sunlight will be blocked on cloudy days, the solar-based lights are still receiving a charge. The clouds are diffusing the strength of the sunlight but solar irradiance is still transmitted from the sun to the earth. So, the solar power system still charges during cloud cover.Jan 8, 2020\r\n', 'upload/IMG_1441.JPG', '1604112394'),
(31, '27', '10', 'Shivu Kumar', '=> Slum upgrading.. => Organized urbanization - Planning to modifying urban areas to accommodate newcomers. => Legitimizing slums instead of driving them out of their homes. => Improving job opportunities in rural as well as urban areas. => Planning rural development along with the urban development.', 'upload/IMG_20160501_183108_(1).jpg', '1604163772'),
(33, '26', '11', 'Upendra uppi', 'A solution for urban road selection and construction problem using simulation and goal programming-Case study of the city. =>A hybrid method of simulation and WGP were developed for urban roads selection .=>Possible scenarios were created as to the Braes paradox and budget constraint. =>Simulation and eigenvector methods set values and weights of criteria on WGP.', 'upload/IMG_2019.JPG', '1604165066'),
(35, '25', '11', 'Upendra uppi', '1) Install subsurface tile drains. Tile drains are sections of perforated pipe buried 12 to 18 inches below the soil surface. 2) Install vertical drains in tree and shrub planning holes. 3) Plant in raised soil beds. 4) Mix layers of soil.', 'upload/IMG_2019.JPG', '1604165623'),
(36, '27', '9', 'Mahiboob  Ali', 'Improvements of electricity and water supply spur improvements of other basic services. Batter approach roads lead to better housing but motorable pucca(tarmac) approach road or proximity to motorable road reduces likelihood of better housing. Government is the major provider of services in slums.', 'upload/IMG_1441.JPG', '1604165783'),
(37, '24', '9', 'Mahiboob  Ali', '1) New conservation Technologies. 2) Recycle Wastewater 3) Improve irrigation and Agriculture water use. 4) Water pricing. 5) Energy efficient desal plants. 6) Water harvesting. 7) Community government and partnerships.', 'upload/IMG_1441.JPG', '1604166120'),
(39, '23', '7', 'ali allu', 'Poor drainage lets moisture build up in the soil around the foundation. This kind of plumbing issue should be given immediate attention and fixes so that heavy.', 'upload/IMG_20191018_122556_586.jpg', '1604167338'),
(40, '25', '7', 'ali allu', '1) Mix in Compact 2) Grow water-loving plants. 3) Build a raid garden 4) Create a Bog garden or pond 5) Install Drain Tile.', 'upload/IMG_20191018_122556_586.jpg', '1604167532'),
(41, '26', '7', 'ali allu', '1) Reduce Traffic Speed. 2) Build complete streets 3) Dedicate spaces for pedestrians 4) Create connected and safe cyclist Networks. 5) Use data to detect problem areas.', 'upload/IMG_20191018_122556_586.jpg', '1604167873');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `username2` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password2` varchar(100) NOT NULL,
  `profile_picture` varchar(100) NOT NULL,
  `cover_picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `username`, `username2`, `birthday`, `gender`, `number`, `location`, `email`, `email2`, `password`, `password2`, `profile_picture`, `cover_picture`) VALUES
(7, 'ali', 'allu', 'allu', 'allu', '11/March/1912', 'male', '9876543210', 'Bengaluru', 'ali@gmail.com', 'ali@gmail.com', 'allu123', 'allu123', 'upload/IMG_20191018_122556_586.jpg', 'upload/IMG-20170816-WA0007.jpg'),
(8, 'Ragu', 'Raam', 'Raam', 'Raam', '11/January/1911', 'male', '912345678', 'Ballari', 'raam@gmail.com', 'ram@gmail.com', 'raam123', 'raam123', 'upload/IMG_20170909_184301.jpg', 'upload/IMG-20171004-WA0015-1.jpg'),
(9, 'Mahiboob ', 'Ali', 'Analyser', 'Analyser', '26/July/1999', 'male', '8310069342', 'Sirwar', 'mahi@gmail.com', 'mahi@gmail.com', 'mahi123', 'mahi123', 'upload/IMG_1441.JPG', 'upload/FB_IMG_1572057948441.jpg'),
(10, 'Shivu', 'Kumar', 'Shivu', 'Shivu', '13/April/1983', 'male', '8765432123', 'Yadgiri', 'shivu@gmail.com', 'shivu@gmail.com', 'shivu123', 'shivu123', 'upload/IMG_20160501_183108_(1).jpg', 'upload/DSCN1657.JPG'),
(11, 'Upendra', 'uppi', 'Uppi', 'Uppi', '13/May/1921', 'male', '912345678', 'Banshankari', 'uppi@gmail.com', 'uppi@gmail.com', 'uppi', 'uppi', 'upload/IMG_2019.JPG', 'upload/DSCN1571.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `profile_post`
--
ALTER TABLE `profile_post`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`solution_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `profile_post`
--
ALTER TABLE `profile_post`
  MODIFY `photo_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `solution_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
