-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2024 at 05:47 PM
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
-- Database: `pw2024_tubes_233040140`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `desk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `gambar`, `desk`, `isi`, `penulis`) VALUES
(2, 'Technology', '1.jpg', 'Adel sedang tidak baik baik saja', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos illum numquam sed, asperiores deleniti omnis architecto sapiente eius inventore dicta eveniet, aut ipsum eaque libero cumque nobis dignissimos modi tenetur corporis mollitia. Error accusantium esse optio molestias nulla ullam illum labore sed iste reiciendis! Dignissimos quam alias aliquid aspernatur, molestias assumenda deleniti dolorum, incidunt magnam repudiandae recusandae consequatur quod ea qui sapiente repellendus pariatur ducimus. Dolore fuga eius facere, sint possimus soluta. Nihil vel iure, ut harum provident dolor ipsam vitae iusto, deleniti obcaecati inventore suscipit illo labore eligendi autem, cumque et fugit exercitationem nam cupiditate totam repellendus. Ad eligendi expedita, eius quod labore perferendis qui ex cumque vitae neque rem explicabo cum reprehenderit in necessitatibus error iure. Atque pariatur veniam fugiat quasi a iure nulla nam, reprehenderit, in quibusdam suscipit voluptas sint quod tempore consectetur odit ea rerum dicta, quae quis! Consectetur fugiat molestias porro ipsam hic qui eum rem dolor nesciunt. Vero mollitia earum deleniti ab corrupti maiores id ratione commodi voluptates, consequatur sequi cum eum est totam, error veniam odit omnis dolorem, nulla incidunt necessitatibus. Ab natus ex, quo rerum voluptatem tenetur dicta error dolor praesentium magni excepturi, explicabo distinctio aliquid laboriosam exercitationem delectus id eligendi vero doloremque blanditiis soluta! Reprehenderit enim obcaecati temporibus ut voluptatibus nam ipsa! Perspiciatis, voluptate asperiores. Et eius consequatur suscipit minus doloribus aspernatur? Similique architecto adipisci vel natus dolorum, modi corporis veritatis, accusamus placeat perspiciatis laborum, sit maxime quo necessitatibus? Laborum cumque voluptates incidunt unde ducimus, nulla, illo repellat, officia maxime eaque recusandae. Maiores, deserunt voluptates quam debitis dicta ea ipsa alias quibusdam molestias omnis reiciendis velit libero odio quos, inventore vitae quis officia consectetur veniam recusandae itaque, ipsam nulla sit cumque! Voluptates ducimus, animi quos dolores rem neque repellendus nostrum quaerat sit necessitatibus, sunt accusantium nesciunt sapiente voluptatibus dolore modi odio! Debitis culpa aperiam numquam rerum, reprehenderit ex in necessitatibus architecto non magni sint, aut esse veniam amet officia? Unde, est. Tempora, eaque. Ab iusto error fugit a provident repellendus, voluptatibus nesciunt cumque consequatur doloremque cum sed voluptate? Perspiciatis blanditiis voluptates suscipit, nesciunt vel iste animi unde voluptatem doloremque delectus! Laudantium doloribus, accusamus possimus sit cumque ratione iure magnam sed assumenda, corporis rerum qui? Assumenda, mollitia, sapiente quos dolorum deleniti harum quisquam, hic accusantium sunt minima laboriosam aliquid! Voluptas autem aut fugit eos natus maiores sint quis debitis ipsa! Quo sint reprehenderit corporis illum corrupti esse ipsum dolores eos expedita nobis laudantium fugit nam quisquam consequuntur dolorem reiciendis unde, dicta numquam consequatur accusamus suscipit recusandae doloribus nostrum ducimus! Eligendi blanditiis nobis odio, distinctio obcaecati dolores assumenda eum reprehenderit. Veniam dicta possimus cupiditate ab dolor! Non autem voluptates quae? Magni aperiam repudiandae repellat molestiae molestias aspernatur omnis! Omnis, error optio, voluptatem recusandae ullam qui eveniet porro expedita cum dignissimos reiciendis dolores repellat nesciunt quaerat facilis amet voluptatibus quidem! Iste itaque, repudiandae quod ducimus numquam dignissimos ipsa similique id suscipit consectetur aliquid aspernatur sint quidem repellat enim voluptates at. At, sit. Animi autem eaque soluta nemo eius nulla dolor praesentium in pariatur ab facere laboriosam commodi harum quasi possimus ipsum maxime minima ex, debitis ipsa incidunt quisquam? Nesciunt reprehenderit pariatur voluptatum neque a quaerat quae aliquam. A officiis dolores voluptate! Possimus corrupti consectetur debitis assumenda error harum? Repellat reprehenderit tempora nulla minima blanditiis officia quos, earum voluptate! Quod, corporis mollitia? Impedit, expedita ad facere, deleniti rem animi aliquam, molestias harum aperiam molestiae ipsa eligendi natus corrupti veniam voluptatem? Numquam architecto fuga nulla ipsum maxime saepe et quis error excepturi inventore in, dolor minus odio quisquam unde quos nihil ut aliquid laudantium molestiae, nisi facere quibusdam magnam! Labore ab beatae veniam dolorem temporibus voluptas, explicabo delectus hic natus voluptatem cumque non nostrum voluptatibus adipisci iste quia vitae eos placeat autem itaque? Obcaecati praesentium pariatur reiciendis sapiente esse distinctio quam eius adipisci nisi explicabo perferendis fugit aliquam quas minus tenetur enim deleniti, quod tempora. Fugiat ab odio veritatis vel corporis adipisci maxime incidunt at praesentium repudiandae facere delectus repellat, in sint rerum commodi nemo, tempora soluta, officia aliquam. Omnis, ad sequi culpa consequuntur aperiam cupiditate laboriosam cumque, architecto fugit officiis expedita aliquid corrupti laudantium neque rem. Amet cupiditate eos molestias minus reiciendis officia vero iste corrupti consequuntur magnam cumque fuga obcaecati, a hic ipsum distinctio. Vero aspernatur eveniet reiciendis expedita sunt, doloribus fugit voluptatem hic maiores tempora quae officia at iste culpa enim veritatis velit numquam. Debitis nesciunt quae obcaecati aspernatur, est sapiente unde ullam! Sit iste fugiat eos, accusamus tempore amet voluptate labore autem unde ipsa atque aut nemo corporis excepturi explicabo eius, error ab enim nesciunt, earum nulla. Repudiandae iste vel in, cum qui libero ad expedita laudantium eius praesentium maiores fuga nisi dolorum ipsa debitis corporis perferendis commodi quam necessitatibus nulla ratione nesciunt consequatur! Asperiores itaque unde dolorum fuga recusandae cumque id nemo eaque eos voluptatibus, incidunt culpa ullam laborum quasi est sed iste qui quis? Enim aperiam tempora officia esse magnam adipisci doloribus placeat voluptates veritatis iste, quidem quos provident fugit, illum, voluptatum perferendis facere laboriosam aspernatur non ut. Temporibus magnam quis nisi libero sit ipsa soluta aperiam excepturi perspiciatis corrupti recusandae sunt neque pariatur perferendis, sequi adipisci suscipit fugit, iste quidem dolorem eos tempora impedit assumenda laudantium. Maxime, sint necessitatibus! Incidunt expedita odit, inventore voluptatibus pariatur maxime officia odio non, officiis ducimus saepe doloribus quam excepturi voluptas, illum dolores deserunt. Repudiandae ex nostrum amet aperiam doloribus nobis possimus doloremque ducimus commodi est voluptatum, natus, alias dolore voluptate. Perspiciatis, eaque dolorum impedit saepe doloremque autem pariatur sint dignissimos eos ad necessitatibus quibusdam id. Accusantium natus nobis in aut, consequuntur rerum quo officiis ipsam reiciendis ratione assumenda, eaque ex iure voluptatem reprehenderit exercitationem quasi ad asperiores, animi odit? Sunt minus velit laudantium placeat amet! Ad deserunt odio numquam doloremque velit qui pariatur quis iusto ut nemo, incidunt debitis temporibus magni blanditiis impedit nostrum, eius vitae ratione necessitatibus maxime nulla. Quaerat ab accusantium quibusdam repellat quae, cumque adipisci excepturi iste id laboriosam iure ex hic similique non eum sequi voluptate suscipit facere doloribus reiciendis veritatis ducimus quia vero. Illo laudantium nulla consectetur nesciunt.', 'Ucup Suherman'),
(4, 'adel', '3.jpg', 'Maecenas, eget porttitor, leo sed, euismod, congue, nibh quis, scelerisque.asdasd', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos illum numquam sed, asperiores deleniti omnis architecto sapiente eius inventore dicta eveniet, aut ipsum eaque libero cumque nobis dignissimos modi tenetur corporis mollitia. Error accusantium esse optio molestias nulla ullam illum labore sed iste reiciendis! Dignissimos quam alias aliquid aspernatur, molestias assumenda deleniti dolorum, incidunt magnam repudiandae recusandae consequatur quod ea qui sapiente repellendus pariatur ducimus. Dolore fuga eius facere, sint possimus soluta. Nihil vel iure, ut harum provident dolor ipsam vitae iusto, deleniti obcaecati inventore suscipit illo labore eligendi autem, cumque et fugit exercitationem nam cupiditate totam repellendus. Ad eligendi expedita, eius quod labore perferendis qui ex cumque vitae neque rem explicabo cum reprehenderit in necessitatibus error iure. Atque pariatur veniam fugiat quasi a iure nulla nam, reprehenderit, in quibusdam suscipit voluptas sint quod tempore consectetur odit ea rerum dicta, quae quis! Consectetur fugiat molestias porro ipsam hic qui eum rem dolor nesciunt. Vero mollitia earum deleniti ab corrupti maiores id ratione commodi voluptates, consequatur sequi cum eum est totam, error veniam odit omnis dolorem, nulla incidunt necessitatibus. Ab natus ex, quo rerum voluptatem tenetur dicta error dolor praesentium magni excepturi, explicabo distinctio aliquid laboriosam exercitationem delectus id eligendi vero doloremque blanditiis soluta! Reprehenderit enim obcaecati temporibus ut voluptatibus nam ipsa! Perspiciatis, voluptate asperiores. Et eius consequatur suscipit minus doloribus aspernatur? Similique architecto adipisci vel natus dolorum, modi corporis veritatis, accusamus placeat perspiciatis laborum, sit maxime quo necessitatibus? Laborum cumque voluptates incidunt unde ducimus, nulla, illo repellat, officia maxime eaque recusandae. Maiores, deserunt voluptates quam debitis dicta ea ipsa alias quibusdam molestias omnis reiciendis velit libero odio quos, inventore vitae quis officia consectetur veniam recusandae itaque, ipsam nulla sit cumque! Voluptates ducimus, animi quos dolores rem neque repellendus nostrum quaerat sit necessitatibus, sunt accusantium nesciunt sapiente voluptatibus dolore modi odio! Debitis culpa aperiam numquam rerum, reprehenderit ex in necessitatibus architecto non magni sint, aut esse veniam amet officia? Unde, est. Tempora, eaque. Ab iusto error fugit a provident repellendus, voluptatibus nesciunt cumque consequatur doloremque cum sed voluptate? Perspiciatis blanditiis voluptates suscipit, nesciunt vel iste animi unde voluptatem doloremque delectus! Laudantium doloribus, accusamus possimus sit cumque ratione iure magnam sed assumenda, corporis rerum qui? Assumenda, mollitia, sapiente quos dolorum deleniti harum quisquam, hic accusantium sunt minima laboriosam aliquid! Voluptas autem aut fugit eos natus maiores sint quis debitis ipsa! Quo sint reprehenderit corporis illum corrupti esse ipsum dolores eos expedita nobis laudantium fugit nam quisquam consequuntur dolorem reiciendis unde, dicta numquam consequatur accusamus suscipit recusandae doloribus nostrum ducimus! Eligendi blanditiis nobis odio, distinctio obcaecati dolores assumenda eum reprehenderit. Veniam dicta possimus cupiditate ab dolor! Non autem voluptates quae? Magni aperiam repudiandae repellat molestiae molestias aspernatur omnis! Omnis, error optio, voluptatem recusandae ullam qui eveniet porro expedita cum dignissimos reiciendis dolores repellat nesciunt quaerat facilis amet voluptatibus quidem! Iste itaque, repudiandae quod ducimus numquam dignissimos ipsa similique id suscipit consectetur aliquid aspernatur sint quidem repellat enim voluptates at. At, sit. Animi autem eaque soluta nemo eius nulla dolor praesentium in pariatur ab facere laboriosam commodi harum quasi possimus ipsum maxime minima ex, debitis ipsa incidunt quisquam? Nesciunt reprehenderit pariatur voluptatum neque a quaerat quae aliquam. A officiis dolores voluptate! Possimus corrupti consectetur debitis assumenda error harum? Repellat reprehenderit tempora nulla minima blanditiis officia quos, earum voluptate! Quod, corporis mollitia? Impedit, expedita ad facere, deleniti rem animi aliquam, molestias harum aperiam molestiae ipsa eligendi natus corrupti veniam voluptatem? Numquam architecto fuga nulla ipsum maxime saepe et quis error excepturi inventore in, dolor minus odio quisquam unde quos nihil ut aliquid laudantium molestiae, nisi facere quibusdam magnam! Labore ab beatae veniam dolorem temporibus voluptas, explicabo delectus hic natus voluptatem cumque non nostrum voluptatibus adipisci iste quia vitae eos placeat autem itaque? Obcaecati praesentium pariatur reiciendis sapiente esse distinctio quam eius adipisci nisi explicabo perferendis fugit aliquam quas minus tenetur enim deleniti, quod tempora. Fugiat ab odio veritatis vel corporis adipisci maxime incidunt at praesentium repudiandae facere delectus repellat, in sint rerum commodi nemo, tempora soluta, officia aliquam. Omnis, ad sequi culpa consequuntur aperiam cupiditate laboriosam cumque, architecto fugit officiis expedita aliquid corrupti laudantium neque rem. Amet cupiditate eos molestias minus reiciendis officia vero iste corrupti consequuntur magnam cumque fuga obcaecati, a hic ipsum distinctio. Vero aspernatur eveniet reiciendis expedita sunt, doloribus fugit voluptatem hic maiores tempora quae officia at iste culpa enim veritatis velit numquam. Debitis nesciunt quae obcaecati aspernatur, est sapiente unde ullam! Sit iste fugiat eos, accusamus tempore amet voluptate labore autem unde ipsa atque aut nemo corporis excepturi explicabo eius, error ab enim nesciunt, earum nulla. Repudiandae iste vel in, cum qui libero ad expedita laudantium eius praesentium maiores fuga nisi dolorum ipsa debitis corporis perferendis commodi quam necessitatibus nulla ratione nesciunt consequatur! Asperiores itaque unde dolorum fuga recusandae cumque id nemo eaque eos voluptatibus, incidunt culpa ullam laborum quasi est sed iste qui quis? Enim aperiam tempora officia esse magnam adipisci doloribus placeat voluptates veritatis iste, quidem quos provident fugit, illum, voluptatum perferendis facere laboriosam aspernatur non ut. Temporibus magnam quis nisi libero sit ipsa soluta aperiam excepturi perspiciatis corrupti recusandae sunt neque pariatur perferendis, sequi adipisci suscipit fugit, iste quidem dolorem eos tempora impedit assumenda laudantium. Maxime, sint necessitatibus! Incidunt expedita odit, inventore voluptatibus pariatur maxime officia odio non, officiis ducimus saepe doloribus quam excepturi voluptas, illum dolores deserunt. Repudiandae ex nostrum amet aperiam doloribus nobis possimus doloremque ducimus commodi est voluptatum, natus, alias dolore voluptate. Perspiciatis, eaque dolorum impedit saepe doloremque autem pariatur sint dignissimos eos ad necessitatibus quibusdam id. Accusantium natus nobis in aut, consequuntur rerum quo officiis ipsam reiciendis ratione assumenda, eaque ex iure voluptatem reprehenderit exercitationem quasi ad asperiores, animi odit? Sunt minus velit laudantium placeat amet! Ad deserunt odio numquam doloremque velit qui pariatur quis iusto ut nemo, incidunt debitis temporibus magni blanditiis impedit nostrum, eius vitae ratione necessitatibus maxime nulla. Quaerat ab accusantium quibusdam repellat quae, cumque adipisci excepturi iste id laboriosam iure ex hic similique non eum sequi voluptate suscipit facere doloribus reiciendis veritatis ducimus quia vero. Illo laudantium nulla consectetur nesciunt.', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `alamat_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email_user`, `alamat_user`, `password_user`) VALUES
(4, 'aidil', 'aidil@gmail.com', 'aidil yaw', '1234'),
(5, 'canftra', 'ck@gmail.com', 'axniazs', 'can123'),
(7, 'adel', 'adel@gmail.com', 'adwsqlmxd', '12345678'),
(9, 'anindya', 'aninduya', 'cibiru', 'aninie'),
(10, 'dea', 'dea@gmail.com', 'setbud', 'dea123'),
(11, 'muhammad royy', 'muhroy@gmail.com', 'Paris', 'cibiru123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
