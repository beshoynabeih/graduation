-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2017 at 11:56 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modernschoolsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `created_at`, `updated_at`) VALUES
(2, 1, 'hello,\r\nyour son is the best in my classroom.', '2017-05-01 16:17:13', '2017-05-01 16:17:13'),
(3, 2, 'becuase he lost marks of absence', '2017-05-01 18:44:52', '2017-05-01 18:44:52'),
(4, 3, 'asdasdasdasd\r\nasdasdasd', '2017-05-01 18:54:09', '2017-05-01 18:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `content`, `created_at`, `updated_at`) VALUES
(1, 'beshoo', 'beshoybosha231@yahoo.com', 'fees', 'how much fees?', '2017-05-01 16:44:38', '2017-05-01 16:44:38'),
(2, 'asd', 'asdasd@asdas.com', 'asdasd', 'asdasdasd', '2017-05-01 16:45:35', '2017-05-01 16:45:35'),
(3, 'asd', 'asdasd@asdas.com', 'asdasd', 'asdasdasd', '2017-05-01 16:45:47', '2017-05-01 16:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_04_22_124147_create_students_table', 1),
('2017_04_22_124348_create_results_table', 1),
('2017_04_22_130833_create_teachers_table', 1),
('2017_04_22_131214_create_notifications_table', 1),
('2017_04_22_131535_create_questions_table', 1),
('2017_04_22_231740_create_tables_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `sender_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `seen` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `sender_id`, `student_id`, `type`, `content`, `seen`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'congratulation', 'asdasd', 1, '2017-04-30 22:39:18', '2017-05-01 17:40:21'),
(2, 4, 1, 'warning', 'this is warning', 1, '2017-04-30 22:40:40', '2017-05-01 17:41:51'),
(3, 4, 2, 'congratulation', 'asdasdasd', 0, '2017-04-30 22:40:52', '2017-04-30 22:40:52'),
(4, 3, 1, 'congratulation', 'asdasdasdasd', 1, '2017-05-01 09:56:04', '2017-05-01 17:40:21'),
(5, 3, 1, 'Question Answered', 'Your Question has been answered', 1, '2017-05-01 11:25:24', '2017-05-01 17:40:21'),
(6, 3, 1, 'Question Answered', 'Your Question has been answered', 1, '2017-05-01 16:17:13', '2017-05-01 17:41:51'),
(7, 4, 1, 'warning', 'Your son absence has exceeds 10 days.', 1, '2017-05-01 17:42:53', '2017-05-01 17:43:08'),
(8, 4, 1, 'congratulation', 'adkoamksd', 1, '2017-05-01 17:43:31', '2017-05-01 17:44:25'),
(9, 21, 2, 'Question Answered', 'Your Question has been answered', 0, '2017-05-01 18:44:52', '2017-05-01 18:44:52'),
(10, 21, 1, 'Question Answered', 'Your Question has been answered', 1, '2017-05-01 18:54:09', '2017-05-01 18:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `asker_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `seen` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `asker_id`, `to_id`, `title`, `question`, `seen`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'What about my son?', 'hello sir,\nI would like to know about my son progress in classroom.\nThank you', 1, '2017-05-15 21:00:00', '2017-05-01 16:17:13'),
(2, 2, 21, 'Why my son has little marks in computer?', 'asdasdasdas asd asda sdasd', 1, '2017-05-01 18:41:34', '2017-05-01 18:44:52'),
(3, 1, 21, 'asdasdasd', 'asdasdasdqweqweqwe', 1, '2017-05-01 18:53:47', '2017-05-01 18:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE `results` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `arabic` decimal(10,2) NOT NULL,
  `english` decimal(10,2) NOT NULL,
  `math` decimal(10,2) NOT NULL,
  `science` decimal(10,2) NOT NULL,
  `history` decimal(10,2) NOT NULL,
  `arts` decimal(10,2) NOT NULL,
  `computer` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `student_id`, `type`, `arabic`, `english`, `math`, `science`, `history`, `arts`, `computer`, `created_at`, `updated_at`) VALUES
(1, 2, 'Final', '8.50', '9.00', '9.50', '8.50', '7.00', '7.50', '9.00', '2017-05-01 00:08:22', '2017-05-01 00:08:22'),
(3, 1, 'Sep', '9.00', '10.00', '8.50', '6.70', '7.80', '8.60', '9.00', '2017-05-01 00:59:47', '2017-05-01 01:10:52'),
(4, 1, 'Mar', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2017-05-01 09:48:05', '2017-05-01 09:48:05'),
(5, 1, 'Jan', '5.00', '5.01', '33.03', '7.02', '8.02', '4.02', '5.00', '2017-05-01 09:49:00', '2017-05-01 09:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `fees` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `parent_id`, `name`, `birthday`, `grade`, `address`, `fees`, `created_at`, `updated_at`) VALUES
(1, 2, 'Fady', '04/25/2017', 'first grade', 'malawi', 1, NULL, '2017-04-29 20:07:27'),
(2, 8, 'Beshoy', '04/04/2017', 'second grade', 'bani mazar', 1, NULL, '2017-04-29 19:44:49'),
(3, 10, 'Samuel', '05/17/2017', 'sixth grade', 'bani mazar', 0, '2017-05-01 04:19:25', '2017-05-01 01:19:35'),
(4, 22, 'kero', '05/02/1994', 'third grade', 'minya ', 1, '2017-05-01 19:10:37', '2017-05-01 16:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

DROP TABLE IF EXISTS `tables`;
CREATE TABLE `tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lec1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lec2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lec3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lec4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lec5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lec6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lec7` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `grade`, `day`, `lec1`, `lec2`, `lec3`, `lec4`, `lec5`, `lec6`, `lec7`, `created_at`, `updated_at`) VALUES
(1, 'first grade', 'Sut', 'first', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:41:31', '2017-04-29 19:41:31'),
(2, 'first grade', 'Sun', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:35:05', '2017-04-29 19:35:05'),
(3, 'first grade', 'Mon', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:36:27', '2017-04-29 19:36:27'),
(4, 'first grade', 'Tues', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:43:01', '2017-04-29 19:43:01'),
(5, 'first grade', 'Wedn', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:43:01', '2017-04-29 19:43:01'),
(6, 'first grade', 'Thu', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'arts', '2017-04-29 19:43:01', '2017-04-29 19:43:01'),
(7, 'second grade', 'Sut', 'second', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:43:40', '2017-04-29 19:43:40'),
(8, 'second grade', 'Sun', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:43:40', '2017-04-29 19:43:40'),
(9, 'second grade', 'Mon', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:43:40', '2017-04-29 19:43:40'),
(10, 'second grade', 'Tues', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:43:41', '2017-04-29 19:43:41'),
(11, 'second grade', 'Wedn', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:43:41', '2017-04-29 19:43:41'),
(12, 'second grade', 'Thu', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:43:41', '2017-04-29 19:43:41'),
(13, 'third grade', 'Sut', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:06', '2017-04-29 19:44:06'),
(14, 'third grade', 'Sun', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:06', '2017-04-29 19:44:06'),
(15, 'third grade', 'Mon', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:06', '2017-04-29 19:44:06'),
(16, 'third grade', 'Tues', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:06', '2017-04-29 19:44:06'),
(17, 'third grade', 'Wedn', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:06', '2017-04-29 19:44:06'),
(18, 'third grade', 'Thu', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:06', '2017-04-29 19:44:06'),
(19, 'fourth grade', 'Sut', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:20', '2017-04-29 19:44:20'),
(20, 'fourth grade', 'Sun', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:20', '2017-04-29 19:44:20'),
(21, 'fourth grade', 'Mon', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:20', '2017-04-29 19:44:20'),
(22, 'fourth grade', 'Tues', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:20', '2017-04-29 19:44:20'),
(23, 'fourth grade', 'Wedn', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:20', '2017-04-29 19:44:20'),
(24, 'fourth grade', 'Thu', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:20', '2017-04-29 19:44:20'),
(25, 'fifth grade', 'Sut', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:33', '2017-04-29 19:44:33'),
(26, 'fifth grade', 'Sun', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:33', '2017-04-29 19:44:33'),
(27, 'fifth grade', 'Mon', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:33', '2017-04-29 19:44:33'),
(28, 'fifth grade', 'Tues', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:34', '2017-04-29 19:44:34'),
(29, 'fifth grade', 'Wedn', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:34', '2017-04-29 19:44:34'),
(30, 'fifth grade', 'Thu', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:34', '2017-04-29 19:44:34'),
(31, 'sixth grade', 'Sut', 'sixth', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:48', '2017-04-29 19:44:48'),
(32, 'sixth grade', 'Sun', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:48', '2017-04-29 19:44:48'),
(33, 'sixth grade', 'Mon', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:48', '2017-04-29 19:44:48'),
(34, 'sixth grade', 'Tues', 'tuessixth', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:48', '2017-04-29 19:44:48'),
(35, 'sixth grade', 'Wedn', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:48', '2017-04-29 19:44:48'),
(36, 'sixth grade', 'Thu', 'sixth', 'English', 'French', 'Arts', 'Sports', 'Science', 'arts', '2017-04-29 19:44:48', '2017-04-29 19:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bio` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `user_id`, `subject`, `grade`, `bio`, `created_at`, `updated_at`) VALUES
(1, 11, 'English', '', 'asdasdasd asd asdas d', '2017-05-01 02:26:10', '2017-05-01 02:26:10'),
(2, 5, 'history', '', 'asdadasdasd', '2017-05-01 02:27:45', '2017-05-01 02:27:45'),
(3, 13, 'arts', '', 'asdasdasd', '2017-05-01 02:31:31', '2017-05-01 02:31:31'),
(4, 3, 'Math', ',2,,,,6', 'asdasd asdasd', '2017-05-01 02:39:57', '2017-05-01 02:39:57'),
(5, 21, 'computer', '1,,,,,', 'faculty of computer and information', '2017-05-01 16:05:45', '2017-05-01 16:05:45'),
(6, 23, 'networks', ',,,,,6', 'Dr. Hassan\r\n12 years of experience', '2017-05-01 16:14:53', '2017-05-01 16:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `type`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '4', 'admin@yahoo.com', '$2y$10$yjPPiPZZJ7GofwFPRDcq3.4sDuu6iw3tHWbjnGkI7y.on3y8T5kXG', 'YYBWcFmo7wvqRgD0ZVpBaC0myiIzhq05HoMrgleH8mwOIhl45zgYmSaAYsD5', '2017-04-29 16:28:36', '2017-05-01 16:14:58'),
(2, 'parent', '1', 'parent@yahoo.com', '$2y$10$Ta0pi.SgQWtrI.ZcZp4ygOKzjOpnhjcjH6woYLOFw138qin5fVgIW', '0DI1Xhzke5VmR1IFiT7jdFH97Tv3K7jAJKCZkLMdZZDxJW56Ji3pHAdxLfZa', '2017-04-29 16:46:39', '2017-05-01 18:53:51'),
(3, 'teacher', '2', 'teacher@yahoo.com', '$2y$10$9X.9xQxA8j5kJBdJivWGce4UZs31CCNH0c/sXuFxMdgLx0D6BXoEi', 'uV21ZvvBOr5KcjPk3620phoGrjX1wwhqYa7iLl7G4Kt0ldB8xhSrEripIJVS', '2017-04-29 16:47:16', '2017-05-01 17:58:28'),
(4, 'affairs', '3', 'affairs@yahoo.com', '$2y$10$xdJgJaT5BI.DKJl0NVrelOvyOVArIrwvRO0Qgg7zbSlaNnK3OKktW', 'SJSkkYcYj0VsI6TIAA0zRSkVvGexdHsjQ86hW1ikFad79udCrZAXWWCrsVFD', '2017-04-29 16:47:48', '2017-05-01 17:57:39'),
(7, 'Atef rasmi', '1', 'atef@yahoo.com', '$2y$10$upZldmzEocPFRBaDjyd4zOoV7Tfu//tqn2GvcqEH.Dcs5W8Qw2KhW', NULL, '2017-04-29 16:49:56', '2017-04-29 16:49:56'),
(8, 'Nabeih', '1', 'nabieh@yahoo.com', '$2y$10$L7n2gUg3SMH5rKoURDBSeuHORIakBK8YE2vX1Q3tCpaTy2yqfcnhG', 'GP1qn90lStdGtE1rq0QBBBHgrFUkWv7Jyd2hcLryvH1zFIBjA0Y7xvG33OmG', '2017-04-29 17:06:41', '2017-05-01 18:03:46'),
(9, 'Yousef', '1', 'yousef@yahoo.com', '$2y$10$tOyxNED8fnPo1g2VKiA.Ve.y44LGkHTV7D/1Kv4BtP2q1qGoW4rTa', NULL, '2017-04-29 17:08:53', '2017-04-29 17:08:53'),
(10, 'Ayoun', '1', 'ayoub@yahoo.com', '$2y$10$loQ/nB71HDbBlhHxTOJs/.DApo1u80C8gFzyruHzDcpMCShAbvRH.', NULL, '2017-05-01 01:19:25', '2017-05-01 01:19:25'),
(20, 'affirs', '3', 'newaffairs@yahoo.com', '$2y$10$lIgoInsXM7iimfYBjzSuN.aaH349sc2CnyP5aW20O2VFz0qMLkTFq', 'Bghd9pI9ZTxXkhnZcXtu11cIaN6CifEcr41OPibX1obxQrIDrSCxRv3HxxqY', '2017-05-01 02:51:05', '2017-05-01 02:51:21'),
(21, 'keroles', '2', 'keroles@yahoo.com', '$2y$10$xAlIalxEz.8gyFOkyn08Gu6gZYGotQ9JsSCxevTu5rUEXhc/4B0Wi', 'zUd9xyyyXiYk5d6DjJWX7CdVAKe3pVUWfuZXvPpuJPnDWMoxeWZvbAme2n9J', '2017-05-01 16:05:45', '2017-05-01 18:54:30'),
(22, 'ayed', '1', 'ayed@yahoo.com', '$2y$10$szN6P9Tc.wW6Avn2FH82NOGY4NQjtgNtcFzWCjEDQsdAqwZlH6Pk2', 'rWvhSwsoidFJSjwzgjGEndLhe8K8mNbogrXL5IlTI4gFJAD11CyvboWPJ2Ea', '2017-05-01 16:10:37', '2017-05-01 17:44:18'),
(23, 'hassan', '2', 'hassan@yahoo.com', '$2y$10$LfykAXlYncyXY/nBMGL.zO3DbmcJAYEBoPgCKc8q4wF9AWbSyFswi', '1l0GHUUGOk32wmp7wBztEihLCXPRf5ZpPgfDShxU5xh7U4lQEIUMDTlDCxe6', '2017-05-01 16:14:53', '2017-05-01 16:15:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
