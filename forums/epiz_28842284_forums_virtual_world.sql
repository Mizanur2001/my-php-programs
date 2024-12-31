-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql103.epizy.com
-- Generation Time: Dec 31, 2024 at 01:32 AM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_28842284_forums_virtual_world`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(10) NOT NULL,
  `comment_by` int(10) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES
(1, 'You can reinstall the xampp server to resolve the  problem... ', 1, 1, '2021-05-27 08:59:36'),
(2, 'Cin Is a function where we can take value..  ', 9, 2, '2021-05-27 09:00:13'),
(3, 'In most computer programming languages, a while loop is a control flow statement that allows code to be executed repeatedly based on a given Boolean condition. The while loop can be thought of as a repeating if statement. ', 6, 3, '2021-05-27 09:01:46'),
(4, 'The while loop is used to repeat a section of code an unknown number of times until a specific condition is met. For example, say we want to know how many times a given number can be divided by 2 before it is less than or equal to 1. If we know a specific number, such as 32, we can say 5 times, but for a given symbolic variable \"NUMBER\" which represents any number in the world, how many times is not known a priori (before hand). In this case, we could use a while loop to determine that answer:', 6, 4, '2021-05-27 09:05:55'),
(5, 'Session is use Use for Login system', 18, 2, '2021-05-28 20:41:28'),
(6, 'Tis is test comment.....', 22, 1, '2021-06-08 15:39:18'),
(7, 'This is another test page...', 22, 1, '2021-06-08 21:49:46'),
(8, 'Hello I am mizanur Rahaman...', 22, 1, '2021-06-08 21:55:39'),
(9, 'I am doing the test using saikat account...', 22, 3, '2021-06-08 21:58:26'),
(10, 'heu', 22, 3, '2021-06-08 22:21:55'),
(11, 'Testing page doing by akher ali..', 22, 4, '2021-06-09 06:28:44'),
(12, '&lth1&gtlhello&lt/h1&gt', 28, 4, '2021-06-09 07:22:01'),
(13, '&ltscript&gthello&lt/script&gt', 28, 4, '2021-06-09 07:22:59'),
(14, 'hi', 28, 4, '2021-06-09 07:23:13'),
(15, '&ltscript&gtalert(\"you are hacked\")&lt/script&gt', 28, 4, '2021-06-09 07:32:52'),
(16, '&ltscript&gtalert(\"you are hacked\")&lt/script&gt', 29, 4, '2021-06-09 07:47:17'),
(17, '&ltscript&gtalert(\"you are hacked\")&lt/script&gt', 29, 4, '2021-06-09 07:50:45'),
(18, '&lth1&gtAkher Ali&lt/h1&gt', 29, 4, '2021-06-09 07:52:25'),
(19, 'is this solved??..', 28, 4, '2021-06-09 07:56:29'),
(20, 'Yeah\r\n&ltscript&gtalert(\"you are hacked\")&lt/script&gt\r\nthis is', 30, 4, '2021-06-09 08:03:29'),
(21, '10000000000000000', 31, 1, '2021-06-09 09:53:47'),
(22, '1', 32, 2, '2021-06-09 09:56:02'),
(23, 'please welcome me..', 33, 5, '2021-06-09 10:35:40'),
(24, 'Welcome Amina You most welcome on this forums....', 33, 1, '2021-06-09 10:37:09'),
(25, 'Welcome Amina You most welcome on this forums.... form Admin...', 33, 1, '2021-06-09 10:37:46'),
(26, 'Welcome Amina You most welcome on this forums....From Joyce..', 33, 2, '2021-06-09 10:38:35'),
(27, 'Yeah huuueee!!!', 34, 5, '2021-06-09 23:32:56'),
(28, 'hi saikat how are you??', 20, 1, '2022-06-09 11:20:25'),
(29, '', 34, 1, '2024-01-16 04:25:15');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `category_URL` varchar(500) NOT NULL,
  `category_description` varchar(500) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`category_id`, `category_name`, `category_URL`, `category_description`, `created`) VALUES
(1, 'php', 'https://assets.toptal.io/images?url=https%3A%2F%2Fbs-uploads.toptal.io%2Fblackfish-uploads%2Fcomponents%2Fblog_post_page%2F4085715%2Fcover_image%2Fretina_500x200%2F0925-3D_Data_Visualization_with_Open_Source_Tools_A_Tutorial_Using_VTK_Dan_Newsletter-9b7d29fb312fd01bea6eaba091a96b98.png', 'PHP is a general-purpose scripting language especially suited to web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group. ', '2021-05-23 15:15:35'),
(2, 'C', 'https://msoft.team/wp-content/uploads/2022/06/image16-1.jpg', 'C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system. By design, C provides constructs that map efficiently to typical machine instructions. ', '2021-05-23 15:17:53'),
(3, 'C++', 'https://reviewsreporter.com/wp-content/uploads/2022/08/CPlusPlus1.jpg', 'C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or \"C with Classes\".', '2021-05-23 15:18:23'),
(4, 'Java', 'https://w0.peakpx.com/wallpaper/503/758/HD-wallpaper-java-metal-logo-grunge-programming-language-signs-blue-metal-background-java-creative-programming-language-java-logo.jpg', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.', '2021-05-23 15:19:01'),
(5, 'JavaScript', 'https://miro.medium.com/v2/resize:fit:739/1*jnJKUYsYjhjXwyYP0hH_ZQ.png', 'JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-orientation, and first-class functions.', '2021-05-23 15:19:34'),
(6, 'CSS', 'https://i0.wp.com/wolkanca.com/wp-content/uploads/2020/11/css-3.jpg', 'Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.', '2021-05-23 15:20:55'),
(7, 'SQL', 'https://media.istockphoto.com/id/1673063844/vector/sql-dtabase-flat-design.jpg?s=612x612&w=0&k=20&c=t-YSg_Wl7z8nJwhqZ2e74p_8tY98XWrJlOG9Vmdb_HY=', 'SQL is a domain-specific language used in programming and designed for managing data held in a relational database management system, or for stream processing in a relational data stream management system. ', '2021-05-23 15:21:27'),
(8, 'HTML', 'https://w0.peakpx.com/wallpaper/214/158/HD-wallpaper-html5-logo-white-silk-texture-html5-emblem-programming-language-html-silk-background.jpg', 'The Hyper Text Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript.', '2021-05-23 15:22:25'),
(9, 'Python', 'https://i.pinimg.com/originals/a2/6c/4b/a26c4b485716a585073da2af4328a8cd.jpg', 'Python is an interpreted high-level general-purpose programming language. Python\'s design philosophy emphasizes code readability with its notable use of significant indentation.', '2021-05-23 15:23:07');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `thread_id` int(10) NOT NULL,
  `thread_title` varchar(300) NOT NULL,
  `thread_desc` varchar(600) NOT NULL,
  `thread_cat_id` int(10) NOT NULL,
  `thread_user_id` int(10) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `Time`) VALUES
(1, 'Sqli server shutdown unexpectedly..', 'My Sqli Server shutdown unexpectedly on xampp server please help me to resolve the problem.....', 1, 1, '2021-05-23 15:25:35'),
(2, 'What is php?..', 'please give a basic idea about php...', 1, 3, '2021-05-25 20:41:53'),
(3, 'What is C', 'I do not know about C', 2, 2, '2021-05-25 20:49:39'),
(4, 'What is C', 'I do not know about C', 2, 1, '2021-05-25 20:50:48'),
(5, 'please help me', 'to resolve the problem', 2, 3, '2021-05-25 20:56:23'),
(6, 'I am facing problem in while loop', 'I am not be able to use while loop properly so, please help me ... ', 1, 1, '2021-05-25 21:41:33'),
(7, 'What is C++', 'Please give a basic idea on c++ language...', 3, 1, '2021-05-25 21:43:16'),
(8, 'How To print in c++', 'How can I print A string.... Using c++ language.. in c language it is printf() function...', 3, 2, '2021-05-25 22:19:05'),
(9, 'What is cin function?', 'I have not any idea about the Function so, what it is?', 3, 3, '2021-05-25 22:24:47'),
(10, 'What is the header file of C++', 'Please help me by answering this question...', 3, 4, '2021-05-25 22:33:01'),
(11, 'who invented  C++ language?', 'Please help me by answering this question...', 3, 2, '2021-05-25 22:35:33'),
(12, 'How many Variable are there in c++ language..?', 'Please Answer this question...', 3, 1, '2021-05-25 22:37:43'),
(13, 'What is the use of C++ language in real life??..', 'Please answer the Question', 3, 4, '2021-05-25 22:40:13'),
(14, 'What is the use of C language in real life??..', 'Please answer The question ...', 2, 3, '2021-05-25 22:41:09'),
(15, 'What is goto function', 'Please give me an brief idea about the goto function..', 2, 1, '2021-05-25 22:47:08'),
(16, 'What is the use of php language in real life??..', 'Please help me by answering the question...', 1, 2, '2021-05-26 08:56:54'),
(17, 'What is php', '', 1, 1, '2021-05-26 09:18:55'),
(18, 'What is Session?', 'Please give me an idea about Session..', 1, 2, '2021-05-28 20:39:29'),
(19, 'test', 'test page', 1, 3, '2021-06-08 12:52:15'),
(20, 'Hello ', 'I am saikat...', 1, 1, '2021-06-08 13:19:09'),
(21, 'please help me', 'My Sqli Server shutdown unexpectedly on xampp server please help me to resolve the problem.....', 1, 1, '2021-06-08 13:25:47'),
(22, 'Hello This is test page...', 'I am testing this page...', 2, 4, '2021-06-08 15:38:48'),
(23, 'Tis is test page', 'Testing...', 1, 1, '2021-06-08 20:39:45'),
(24, 'what is CSS', 'Testing page....\r\n', 6, 1, '2021-06-08 20:47:46'),
(25, 'What is javascript', 'Testing by using joyce account...', 5, 2, '2021-06-08 20:50:52'),
(26, 'this is another comment by joyce', 'Testing', 5, 2, '2021-06-08 20:51:48'),
(27, 'Hello ', 'I am Saikat Sarker...', 6, 3, '2021-06-08 21:56:59'),
(28, 'Hello ', 'by akher Ali..', 5, 4, '2021-06-09 07:12:19'),
(29, '&ltscript&gtalert(\"you are hacked\")&lt/script&gt', '&ltscript&gtalert(\"you are hacked\")&lt/script&gt', 2, 4, '2021-06-09 07:45:09'),
(30, 'it is alert Html script', '&ltscript&gtalert(\"you are hacked\")&lt/script&gt', 8, 4, '2021-06-09 08:02:53'),
(31, 'test page100', 'ok i am testing this page...', 3, 1, '2021-06-09 09:53:35'),
(32, '1', '1', 6, 2, '2021-06-09 09:55:52'),
(33, 'Hello I am Amina Siddiquue', 'Please welcome me on this forums\r\n....', 3, 5, '2021-06-09 10:35:13'),
(34, 'Hi The is done', 'yeah hueee!!! project done completely', 1, 5, '2021-06-09 23:32:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sl_no` int(10) NOT NULL,
  `user_name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sl_no`, `user_name`, `email`, `password`, `time`) VALUES
(1, 'Mizanur Rahaman', 'jameslev2001@gmail.com', '12345678', '2021-05-28 09:46:47'),
(2, 'Joyce Sarker', 'littlealanwalker2007@gmail.com', '123456789*', '2021-05-28 09:50:16'),
(3, 'Saikat Sarkar ', 'ssaikat226@gmail.com', '12345678', '2021-06-08 12:37:07'),
(4, 'Akher Ali', 'akherali1974@gmail.com', '12345678', '2021-06-08 13:45:04'),
(5, 'Amina Siddique', 'amina2002@gmail.com', '12345678', '2021-06-09 10:33:17'),
(6, 'Admin', 'admin@admin.com', '12345678', '2021-06-09 21:00:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`thread_id`);
ALTER TABLE `question` ADD FULLTEXT KEY `thread_title` (`thread_title`,`thread_desc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `thread_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
