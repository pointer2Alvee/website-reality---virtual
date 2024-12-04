-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 08:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rnv`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `achievementId` int(11) NOT NULL,
  `title` varchar(111) NOT NULL,
  `description` varchar(255) NOT NULL,
  `Category` varchar(111) NOT NULL,
  `coins` int(11) NOT NULL,
  `reputation` int(11) NOT NULL,
  `time` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`achievementId`, `title`, `description`, `Category`, `coins`, `reputation`, `time`, `user_id`) VALUES
(1, 'Joined RNV', 'Welcome to the community! ', 'Initial', 5, 10, '2022-03-10 17:04:14', 15),
(2, 'First Post', 'Posted first post! Some say first step is the hardest. Hopefully you\'ll keep posting...', 'Initial', 1, 0, '2022-03-10 17:11:59', 15);

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_ID` int(11) NOT NULL,
  `post_ID` int(11) NOT NULL,
  `participant_ID` int(11) NOT NULL,
  `activity_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `activity_Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_ID`, `post_ID`, `participant_ID`, `activity_Time`, `activity_Status`) VALUES
(41, 90, 20, '2022-03-14 19:17:53', 'participated'),
(42, 90, 20, '2022-03-14 19:26:08', 'participated');

-- --------------------------------------------------------

--
-- Table structure for table `emegency`
--

CREATE TABLE `emegency` (
  `emergencyId` int(11) NOT NULL,
  `Type` varchar(45) NOT NULL,
  `area` varchar(255) NOT NULL,
  `latt` double NOT NULL,
  `longi` double NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone1` varchar(25) NOT NULL COMMENT 'primary phone',
  `phone2` varchar(25) NOT NULL COMMENT 'secondary phone'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE `friend` (
  `friend_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `friend_user_id` int(11) NOT NULL,
  `profileImgUrl` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `area` varchar(125) DEFAULT NULL,
  `lastActive` int(11) NOT NULL,
  `reputation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friend`
--

INSERT INTO `friend` (`friend_id`, `user_id`, `friend_user_id`, `profileImgUrl`, `firstname`, `lastname`, `area`, `lastActive`, `reputation`) VALUES
(1, 16, 3, '06~Media_Images/profile/rahat.jpg', 'Rahat', 'Ashik', 'Kolabagan', 11, 15),
(2, 16, 15, '06~Media_Images/profile/alvee.jpg', 'Sadman', 'Alvee', 'Mohammadpur', 55, 33),
(3, 16, 17, '06~Media_Images/profile/atik.jpg', 'Atikur', 'Rahman', 'Malibagh', 3, 77),
(4, 16, 18, '06~Media_Images/profile/ema.jpg', 'Ifrat', 'Jahan', 'Bashundhara', 1, 99);

-- --------------------------------------------------------

--
-- Table structure for table `geolocation`
--

CREATE TABLE `geolocation` (
  `geoId` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `latt` double NOT NULL,
  `longi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message_us`
--

CREATE TABLE `message_us` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_us`
--

INSERT INTO `message_us` (`name`, `email`, `phone`, `subject`, `message`, `ID`) VALUES
('Md. Rahat Ashik', 'rahat.ashik.18@gmail.com', '3048054863', 'asddasdasd', 'asdasdsadasdasd', 1),
('Rahat Ashik', 'rahat.ashik.95@gmail.com', '3048054863', 'asddasdasd', 'iygviygbhijnxrdctfvugbyhnjm', 2),
('Alvee', 'sadmanalvee900@gmail.com', '01932132131', 'Help ', 'Help', 3),
('Alvee', 'sadmanalvee900@gmail.com', '01932132131', 'Help ', 'Help', 4);

-- --------------------------------------------------------

--
-- Table structure for table `postdata`
--

CREATE TABLE `postdata` (
  `postDataId` int(11) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `category` varchar(125) NOT NULL,
  `postImgUrl` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `PostTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `participatedUser_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postdata`
--

INSERT INTO `postdata` (`postDataId`, `Type`, `Title`, `Description`, `category`, `postImgUrl`, `location`, `user_id`, `PostTime`, `participatedUser_Id`) VALUES
(90, 'Quest', 'NEED PIZZA FRIEND', 'Need pizza friend around dhanmondi today evening ', 'Restaurant buddy', '06~Media_Images/pizza.jpg', 'Dhanmondi', 19, '2022-03-12 10:06:26', 0),
(100, 'News', 'AUST এ সূর্যাস্ত উপভোগ করছি।', 'Enjoying Beautiful Sunset @AUST campus after a long day full of labs and quizzes.', 'News', '06~Media_Images/austCampus2.jpg', 'Tejgaon', 15, '2022-03-12 13:52:13', 0),
(101, 'News', 'নতুন আইফোন কিনলাম। 😊', 'আলহামদুলিল্লাহ। নিজের টাকায় একটা আইফোন কিনলাম। এটি iphone 13 pro max.😊😀', 'News', '06~Media_Images/iphone13promax.jpg', 'Dhanmondi', 15, '2022-03-12 14:00:09', 0),
(102, 'News', 'After MSD Lab Presentation 😄', 'Took a group photo after MSD lab final. @ AUST campus', 'News', '06~Media_Images/msdlabteamGrpPic.jpg', 'Tejgaon', 20, '2022-03-12 14:04:29', 0),
(103, 'News', 'ক্লাস শেষে ভেলপুরি খাওয়া। 😋', 'দীর্ঘ ক্লান্তিকর ক্লাসের পর ক্লাসের পর ভেলপুরি খাওয়া।', 'News', '06~Media_Images/bhelPuri.jpg', 'Tejgaon', 15, '2022-03-12 14:16:02', 0),
(104, 'News', 'selfie - SpiderMan:NWH 🤩', 'Just absolutely brilliant film.. SPIDER MAN : NOW WAY HOME!!!!', 'News', '06~Media_Images/movieWithFriends.jpg', 'Dhanmondi', 21, '2022-03-12 14:26:41', 0),
(105, 'News', 'At Cineplex, NWH !!!', 'Watching No Way Home! Amazing movie.', 'News', '06~Media_Images/enjoyingAtCineplex.jpg', 'Dhanmondi', 21, '2022-03-12 14:30:03', 0),
(106, 'News', 'PUTIN DECLARES WAR!', 'Earlier this month due to NATO drills on the doorsteps of Russia, president Putin declared demilitarization military operation in Ukraine!', 'News', '06~Media_Images/putinDeclaresWar.jpg', 'Gulshan', 15, '2022-03-12 15:05:11', 0),
(107, 'News', 'Dhaka Ranked-1 in Pollution!', 'Dhaka ranked the worst polluted city in the world with Tejgaon being the most polluted area with an abnormal particulate material of 76mg ppm.', 'News', '06~Media_Images/dhakPollution.jpg', 'Mirpur', 15, '2022-03-12 15:08:58', 0),
(108, 'News', 'আজ ল্যাব পরীক্ষা KOP দিয়েছে', 'আজ ল্যাব  OS Weekly পরীক্ষা KOP দিয়েছে.... Feeling good!', 'News', '06~Media_Images/afterAcingExam.jpg', 'Tejgaon', 20, '2022-03-12 15:11:35', 0),
(109, 'News', 'Trump Blames Biden.', 'Trump Blames Biden for the conflict between ukraine-russia.', 'News', '06~Media_Images/trumpFakeNews.jpg', 'Banani', 20, '2022-03-12 15:14:10', 0),
(110, 'News', 'MSD Lab done well ✅', 'Group pic after a successful MSD project...', 'News', '06~Media_Images/msdlabteamGrpPic2.jpg', 'Tejgaon', 22, '2022-03-12 16:42:08', 0),
(111, 'News', '  রাজশাহীতে আমের বাম্পার ফলন।', 'রাজশাহীতে আমের বাম্পার ফলন। Massive production of mangoes way to Capital Dhaka', 'News', '06~Media_Images/rajshahiMango.jpg', 'Banani', 20, '2022-03-12 16:44:53', 0),
(112, 'News', '3S-BOT MSD project!', 'This is 3S bot performing security-surveillance-Service objectives.', 'News', '06~Media_Images/3sbotMSDProject.jpg', 'Mohammedpur', 15, '2022-03-12 18:01:04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

CREATE TABLE `reward` (
  `rewardId` int(11) NOT NULL,
  `coins` int(11) NOT NULL,
  `reputation` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `house_address` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone_number` varchar(25) NOT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '1.active, 2.new, 3.banned',
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `profileImgUrl` varchar(125) DEFAULT NULL,
  `lastActive` int(11) NOT NULL DEFAULT 1,
  `reputation` int(11) NOT NULL DEFAULT 10,
  `coins` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_type`, `first_name`, `last_name`, `date_of_birth`, `Email`, `password`, `house_address`, `street_address`, `zip_code`, `state`, `country`, `phone_number`, `activation_code`, `status`, `created_date`, `profileImgUrl`, `lastActive`, `reputation`, `coins`) VALUES
(15, '1', 'Sadman', 'Alvee', '2000-06-09', 'alvee@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'house  -249, Dhanmondi', 'Dhnamondi 9/A', 1209, 'Dhanmondi', 'Bangladesh', '111111111111111111111', NULL, 2, '2021-10-08 15:11:59', '06~Media_Images/profile/alvee.jpg', 0, 0, 0),
(16, '1', 'Farhana', 'Islam', '2022-01-31', 'farhana@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'house  -249, Dhanmondi', 'Dhnamondi 8/A', 1212, 'Dhaka', 'Bangladesh', '99999999999', NULL, 2, '2022-02-20 23:55:29', '06~Media_Images/profile/alvee.jpg', 0, 0, 0),
(17, '1', 'Sadman', 'Alvee', '2022-03-17', 'kfc@kfcbd.com', '81dc9bdb52d04dc20036dbd8313ed055', 'house  -249, Dhanmondi', 'Dhnamondi 8/A', 1209, '1', 'Bangladesh', '23213123123', NULL, 2, '2022-03-11 11:17:14', '06~Media_Images/profile/alvee.jpg', 0, 0, 0),
(18, '1', 'Farhana', 'Islam', '2022-03-01', 's@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Md-pur', 'Dhnamondi 8/A', 1209, 'Dhanmondi', 'Bangladesh', '2312312312', NULL, 2, '2022-03-11 11:19:04', '06~Media_Images/profile/alvee.jpg', 0, 0, 0),
(19, '2', 'Sadman', 'Alvee', '2022-03-03', 'alveeNew@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Md-pur', 'Dhnamondi 8/A', 1209, 'Mohammedpur', 'Bangladesh', '00000', NULL, 2, '2022-03-12 13:27:59', '06~Media_Images/profile/alvee.jpg', 0, 0, 0),
(20, '2', 'Salsabeel Noor', 'Azmi', '2022-03-03', 'azmi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Dhanmondi', 'Dhnamondi 8/A', 1209, 'Dhanmondi', 'Bangladesh', '99999999999', NULL, 2, '2022-03-12 20:02:29', '06~Media_Images/profile/alvee.jpg', 0, 0, 0),
(21, '2', 'Ashik', 'Rahat', '2022-03-02', 'rahat@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Dhanmondi', 'Dhnamondi 8/A', 1209, 'Dhanmondi', 'Bangladesh', '99999999999', NULL, 2, '2022-03-12 20:24:46', '06~Media_Images/profile/alvee.jpg', 0, 0, 0),
(22, '1', 'Sadim', 'Mustavi', '2022-03-03', 'mustavi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Dhanmondi', 'Dhnamondi 8/A', 1209, 'New Market', 'Bangladesh', '99999999999', NULL, 2, '2022-03-12 22:40:30', '06~Media_Images/profile/alvee.jpg', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`achievementId`);

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_ID`);

--
-- Indexes for table `emegency`
--
ALTER TABLE `emegency`
  ADD PRIMARY KEY (`emergencyId`);

--
-- Indexes for table `friend`
--
ALTER TABLE `friend`
  ADD PRIMARY KEY (`friend_id`);

--
-- Indexes for table `geolocation`
--
ALTER TABLE `geolocation`
  ADD PRIMARY KEY (`geoId`);

--
-- Indexes for table `message_us`
--
ALTER TABLE `message_us`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `postdata`
--
ALTER TABLE `postdata`
  ADD PRIMARY KEY (`postDataId`);

--
-- Indexes for table `reward`
--
ALTER TABLE `reward`
  ADD PRIMARY KEY (`rewardId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `achievementId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `emegency`
--
ALTER TABLE `emegency`
  MODIFY `emergencyId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friend`
--
ALTER TABLE `friend`
  MODIFY `friend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `geolocation`
--
ALTER TABLE `geolocation`
  MODIFY `geoId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message_us`
--
ALTER TABLE `message_us`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `postdata`
--
ALTER TABLE `postdata`
  MODIFY `postDataId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `reward`
--
ALTER TABLE `reward`
  MODIFY `rewardId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
