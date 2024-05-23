
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neonly`
--

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `sign_name` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `sign_name`, `username`, `phone`) VALUES
(7, '2', 'fsfsd', '4324234'),
(8, '3', 'MahmoudShawish', '4848484');

-- --------------------------------------------------------

--
-- Table structure for table `signs`
--

CREATE TABLE `signs` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `rate` tinyint(4) NOT NULL,
  `color` varchar(20) DEFAULT NULL,
  `signdate` date NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signs`
--

INSERT INTO `signs` (`id`, `name`, `image`, `rate`, `color`, `signdate`, `featured`, `description`) VALUES
(1, 'New Design 2020 1', '1', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(2, 'New Design 2020 2', '2', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(3, 'New Design 2020 3', '3', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(4, 'New Design 2020 4', '4', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(5, 'New Design 2020 5', '5', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(6, 'New Design 2020 6', '6', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(7, 'New Design 2020 7', '7', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(8, 'New Design 2020 8', '8', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(9, 'New Design 2020 9', '9', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(10, 'New Design 2020 10', '10', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(11, 'New Design 2020 11', '11', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(12, 'New Design 2020 12', '12', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(13, 'New Design 2020 13', '13', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(14, 'New Design 2020 14', '14', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(15, 'New Design 2020 15', '15', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(16, 'New Design 2020 16', '16', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(17, 'New Design 2020 17', '17', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(18, 'New Design 2020 18', '18', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(19, 'New Design 2020 19', '19', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(20, 'New Design 2020 20', '20', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(21, 'New Design 2020 21', '21', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(22, 'New Design 2020 22', '22', 3, 'Black', '2022-05-11', 1, 'neonly_shop\'s profile picture\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍'),
(23, 'New Design 2020 23', '23', 4, 'Red', '2022-05-18', 0, '\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍\r\n'),
(24, 'New Design 2020 24', '24', 4, 'Red', '2022-05-18', 0, '\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍\r\n'),
(25, 'New Design 2020 25', '25', 4, 'Red', '2022-05-18', 0, '\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍\r\n'),
(26, 'New Design 2020', '26', 4, 'Red', '2022-05-18', 0, '\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍\r\n'),
(27, 'New Design 2020', '27', 4, 'Red', '2022-05-18', 0, '\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍\r\n'),
(28, 'New Design 2020', '28', 4, 'Red', '2022-05-18', 0, '\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍\r\n'),
(29, 'New Design 2020', '29', 4, 'Red', '2022-05-18', 0, '\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍\r\n'),
(30, 'New Design 2020', '30', 4, 'Red', '2022-05-18', 0, '\r\nneonly_shop\r\nMake your home your heaven with a LED neon sign!\r\n\r\nGet your custom neon sign now! ⚡\r\n\r\nBest customer service and value for money. Free design and quote! Find out more! 😍\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signs`
--
ALTER TABLE `signs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `signs`
--
ALTER TABLE `signs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
