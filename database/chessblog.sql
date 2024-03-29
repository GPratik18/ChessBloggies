-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 06:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chessblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `post_id`, `image`) VALUES
(1, 1, '1.jpg'),
(2, 6, '2.jpg'),
(3, 5, '3.jpg'),
(4, 4, '4.jpg'),
(5, 2, '5.jpg'),
(6, 7, '6.jpg'),
(7, 8, '7.jpg'),
(8, 3, '8.jpg'),
(10, 9, '8.jpg'),
(12, 11, 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`, `created_by`) VALUES
(5, '1914 translation by H. Rackham', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"', '2023-02-14 14:24:45', 'Admin1'),
(6, 'Chess Artificial Intelligence ( AI ) WARNING', 'Sometimes I’m playing a game of chess on chess.com thinking my opponent is using the Artificial Intelligence ( AI ) chess engine during a daily team match but the HUMANS don’t catch it. The HUMANS are too SLOW. HUMANS think the AI is the solution for everything. The military will weaponize the AI and no one will inherit the Earth.\n\n -uptohigh\n(chess.com  user)', '2023-02-15 11:40:50', 'Admin2'),
(7, 'Chess competition 2023 in Bill Gates Institute of Computer Science and Management, Osmanabad.', 'Chess Competition was organized by Bill Gates Institute of Computer Science and Management, on 13th February, 2023 on the occasion of the Chatrapati Shivaji Maharaj Jayanti, 2023.', '2023-02-16 11:22:10', 'Admin2'),
(8, 'What WIKIPEDIA says about chess AI?', 'Computer chess includes both hardware (dedicated computers) and software capable of playing chess. Computer chess provides opportunities for players to practice even in the absence of human opponents, and also provides opportunities for analysis, entertainment and training. Computer chess applications that play at the level of a chess master or higher are available on hardware from supercomputers to smart phones. Standalone chess-playing machines are also available. Stockfish, GNU Chess, Fruit, and other free open source applications are available for various platforms.\r\n\r\nComputer chess applications, whether implemented in hardware or software, utilize different strategies than humans to choose their moves: they use heuristic methods to build, search and evaluate trees representing sequences of moves from the current position and attempt to execute the best such sequence during play. Such trees are typically quite large, thousands to millions of nodes. The computational speed of modern computers, capable of processing tens of thousands to hundreds of thousands of nodes or more per second, along with extension and reduction heuristics that narrow the tree to mostly relevant nodes, make such an approach effective.\r\n\r\nThe first chess machines capable of playing chess or reduced chess-like games were software programs running on digital computers early in the vacuum-tube computer age (1950s). The early programs played so poorly that even a beginner could defeat them. Within 40 years, in 1997, chess engines running on super-computers or specialized hardware were capable of defeating even the best human players. By 2006, programs running on desktop PCs had attained the same capability. In 2006, Monty Newborn, Professor of Computer Science at McGill University, declared: \"the science has been done\". Nevertheless, solving chess is not currently possible for modern computers due to the game\'s extremely large number of possible variations.\r\n\r\nComputer chess was once considered the \"Drosophila of AI\", the edge of knowledge engineering. The field is now considered a scientifically completed paradigm, and playing chess is a mundane computing activity.', '2023-02-16 12:23:27', 'Admin1'),
(9, 'Artificial intelligence is going to takeover soon !', 'As machine learning in chess programs become more advanced - in other words, less human. Players hope to further push their understanding of the game. Hassabis, for example, claimed at the conference that he never knew, until looking at how AlphaZero plays, that sacrificing pieces could be done not just for short-term tactical advantage but long-term positional advantage.\n', '2023-03-12 06:25:57', 'AbhijitGawali');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `title`, `content`, `image`, `created_at`) VALUES
(1, 'ChessBloggies are ready to Jump in', '  Bloggers are welcome to ChessBloggies.\r\n  This website is designed by Abhijit and Pratik for B.Sc.(Computer Science) Final Year Non-commercial project submission in Bill Gates Institute of Computer Science and Management, Osmanabad.\r\n  Thankful for guidance...', 'images/1.jpg', '2023-02-16 10:46:50'),
(2, 'Artificial Intelligence in Chess.', 'Artificial intelligence is a revolution in itself with numerous feats of accomplishments. The use of AI in the real world and real-life scenarios is ample.', 'images/2.jpg', '2023-02-16 12:42:13'),
(3, 'Project Submission', 'The project is near to its finish line and will be submitted soon.', 'images/OIP.jpg', '2023-03-12 08:21:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `address`, `city`, `state`) VALUES
(1, 'Admin1', '$2y$10$i/74fjcbnjzeiqdoJTQc7OQ7Cn/QEFMuZQ1VVHI9Ap0SiIz/NNIUq', '2023-03-09', 'Bill Gates Institute of Computer Science and Management, Dharashiv.', 'Dharashiv', 'Maharashtra'),
(2, 'Admin2', '$2y$10$YngfHJ.TGHcxcs4NoHs44e1mgrv43UJs9w7tNkoFl1LjTWZYQnEfS', '2023-03-09', 'Bill Gates Institute of Computer Science and Management, Dharashiv.', 'Dharashiv', 'Maharashtra'),
(3, 'Admin3', '$2y$10$K0sL.PSlBArAEGSvrAD3XeNicNGbhkrVQYLL06GrZumV/H6luohlq', '2023-03-09', 'Bill Gates Institute of Computer Science and Management, Dharashiv.', 'Dharashiv', 'Maharashtra'),
(4, 'Admin4', '$2y$10$Yo8GU207UJG5PPZT/I7sa.GYvaBWwGtbPzDCBOoxzjgTrtIJBAV8i', '2023-03-09', 'Bill Gates Institute of Computer Science and Management, Dharashiv.', 'Dharashiv', 'Maharashtra'),
(5, 'Admin5', '$2y$10$b/9UsM5f7cjqNQGbd7VR8ezR0F2zH/a47nOy3mx7XCla/qClUtnZS', '2023-03-09', 'Bill Gates Institute of Computer Science and Management, Dharashiv.', 'Dharashiv', 'Maharashtra'),
(6, 'AbhijitGawali', '$2y$10$IMuWhnoVlyeXKJ0s20fi4OVEApr3oMAYx5xUuD/jNE4KGLlQm1ka.', '2023-03-10', 'Shahu Nagar, Dharashiv.', 'Dharashiv', 'Maharashtra'),
(7, 'PratikGhute', '$2y$10$fmDoTu6OWbzW.yHId1xuRuW8fjKr07UMIy1BbrXqexbvhorPozF5.', '2023-03-10', 'Shivratna Nagar, Tuljapur Khurd, Tuljapur.', 'Tuljapur', 'Maharashtra'),
(8, 'AvirajPatil', '$2y$10$8Q28HzKXwJ4dZd7n03nqgOIdaudCYq7gIQTu9Pr3Y1xm2awwfTvqa', '2023-04-23', 'AvirajPatil', 'Wagholi', 'Maharashtra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
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
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
