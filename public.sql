-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 08:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `public`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`id`, `username`, `password`) VALUES
(1, 'public', 'public9090');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `author`, `img`) VALUES
(1, 'Ibrahim', 'About \r\nI am a student of B.Sc. in Computer Science and Engineering at Varendra University. I am currently working as a full stack web developer.', 'Ibrahim', 'assets/imgs/441995827_835254344716959_7701921264532230971_n.jpg'),
(2, 'Second Blog', 'Description of 2nd blog ', 'Ibrahim', 'assets/imgs/441958557_437715049012003_4347482781677114632_n.jpg'),
(3, 'Third Blog', 'Downloaded Text\r\nFind functions or install plugins in your text editing software like Microsoft Word, OpenOffice, Notepad ++ or Lotus Notes; your presentation software like Keynote or Pages; your CMS like Joomla, Drupa, Mambo, PH-Nuke, WordPress or Movabl', 'Ibrahim', 'assets/imgs/441995827_835254344716959_7701921264532230971_n (2).jpg'),
(4, 'Ibrahim', 'About \r\nI am a student of B.Sc. in Computer Science and Engineering at Varendra University. I am currently working as a full stack web developer.', 'Ibrahim', 'assets/imgs/441995827_835254344716959_7701921264532230971_n.jpg'),
(5, 'Title', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident vitae, ducimus repellendus omnis possimus voluptas natus deserunt, temporibus ipsa voluptate facere nemo debitis qui, dicta cum voluptatibus. Tenetur laboriosam a molestiae, facilis quaera', 'Author Name', 'assets/imgs/438065430_1110913396857167_7741630875007316698_n.png'),
(6, 'Ibrahim', 'About \r\nI am a student of B.Sc. in Computer Science and Engineering at Varendra University. I am currently working as a full stack web developer.', 'Ibrahim', 'assets/imgs/441995827_835254344716959_7701921264532230971_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD UNIQUE KEY `adminid` (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD UNIQUE KEY `blogsid` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
