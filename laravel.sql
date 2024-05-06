-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2024 a las 00:25:56
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` smallint(5) UNSIGNED NOT NULL,
  `nombre_categoria` varchar(20) NOT NULL,
  `descripcion_categoria` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`, `descripcion_categoria`, `created_at`, `updated_at`) VALUES
(1, 'Ensaladas', 'Ensaladas frescas y saludables, preparadas con los ingredientes más frescos y deliciosos.', '2024-03-27 14:32:50', '2024-03-27 14:32:50'),
(2, 'Tapas', 'Variedad de tapas deliciosas para compartir o disfrutar individualmente', '2024-04-30 15:48:24', '2024-04-30 15:48:24'),
(3, 'Hamburguesas Carne', 'Deliciosas hamburguesas elaboradas con carne de la más alta calidad y acompañadas de ingredientes frescos y sabrosos.', '2024-03-27 14:32:50', '2024-03-27 14:32:50'),
(4, 'Hamburguesas Especia', 'Deliciosas hamburguesas especiales elaboradas con carne de la más alta calidad y acompañadas de ingredientes frescos y sabrosos.', '2024-03-27 14:32:50', '2024-03-27 14:32:50'),
(5, 'Hamburguesas Pollo', 'Deliciosas hamburguesas elaboradas con pollo de la más alta calidad y acompañadas de ingredientes frescos y sabrosos.', '2024-03-27 14:32:50', '2024-03-27 14:32:50'),
(6, 'Perritos', 'Sabrosos perritos con pan recién horneadas con una variedad de coberturas y sabores para todos los gustos.', '2024-03-27 14:32:50', '2024-03-27 14:32:50'),
(7, 'Bocatas de Bacon', 'Sabrosos bocadillos rellenos de crujiente bacon que te harán agua la boca. Disfruta de una explosión de sabor con cada bocado.', '2024-03-27 14:32:50', '2024-03-27 14:32:50'),
(8, 'Bocatas de Pollo', 'Jugosos bocadillos con tierna carne de pollo, marinada y sazonada a la perfección. Una opción deliciosa y saludable para cualquier ocasión.', '2024-03-27 14:32:50', '2024-03-27 14:32:50'),
(9, 'Bocatas de Raxo', 'Deléitate con nuestros bocadillos de raxo, un manjar típico de Galicia, elaborado con carne de cerdo adobada en una mezcla de especias tradicionales.', '2024-03-27 14:32:50', '2024-03-27 14:32:50'),
(10, 'Bocatas Varios', 'Una selección variada de bocadillos para todos los gustos. Desde clásicos hasta creaciones únicas, hay algo para cada paladar en esta categoría.', '2024-03-27 14:32:50', '2024-03-27 14:32:50'),
(11, 'Sandwiches', 'Exquisitos sándwiches elaborados con ingredientes frescos y pan recién horneado. Perfectos para una comida rápida y deliciosa.', '2024-03-27 14:32:50', '2024-03-27 14:32:50'),
(12, 'Platos Combinados', 'Combinaciones irresistibles que te ofrecen lo mejor de nuestra cocina en un solo plato. Disfruta de una variedad de sabores en cada orden.', '2024-03-27 14:32:50', '2024-03-27 14:32:50'),
(13, 'Postres', 'Dulces y deliciosos postres ideales para satisfacer tu antojo de algo dulce después de una buena comida.', '2024-03-27 14:32:50', '2024-03-27 14:32:50'),
(14, 'Bebidas', 'Variedad de bebidas refrescantes y calientes ideales para acompañar tus comidas.', '2024-03-27 14:32:50', '2024-03-27 14:32:50'),
(16, 'Ejemplo4', 'nerea ejemplo', '2024-05-06 14:25:11', '2024-05-06 14:25:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` mediumint(8) UNSIGNED NOT NULL,
  `nombre_cliente` varchar(30) NOT NULL,
  `apellidos_cliente` varchar(40) NOT NULL,
  `telefono_cliente` char(12) NOT NULL,
  `direccion_cliente` varchar(50) NOT NULL,
  `correo_electronico` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`, `apellidos_cliente`, `telefono_cliente`, `direccion_cliente`, `correo_electronico`, `created_at`, `updated_at`) VALUES
(1, 'Sadie', 'Maggio', '231647833562', '6774 Clara Gateway Apt. 887', 'webster.abbott@bahringer.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(2, 'Buford', 'Mohr', '436777846696', '80104 Camilla Loop', 'romaguera.gretchen@schulist.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(3, 'Krystal', 'Murray', '154070938427', '2335 Hackett Fall', 'aglae.hagenes@yahoo.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(4, 'Felton', 'Nienow', '976146967045', '4280 Volkman Union Apt. 703', 'rbins@skiles.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(5, 'Rafaela', 'Hessel', '672885658147', '49520 Leuschke Plain', 'nayeli03@kemmer.net', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(6, 'Stone', 'Wisoky', '676310853538', '81682 Shanahan Motorway', 'fhirthe@prohaska.biz', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(7, 'Zelda', 'Pouros', '987558751353', '616 Bethany Brook Apt. 806', 'dandre.parker@barrows.net', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(8, 'Gage', 'Vandervort', '374572543974', '58046 Stacy Field', 'lizzie.wiza@hotmail.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(9, 'Bartholome', 'Conroy', '345476450636', '52864 Kemmer Parkway Apt. 219', 'ekshlerin@gmail.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(10, 'Reyna', 'Hilpert', '182708928269', '28703 Windler Common Apt. 756', 'chayes@hotmail.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(11, 'Meredith', 'Tremblay', '431405570445', '2929 Jeromy Locks Suite 022', 'kassulke.clementine@fay.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(12, 'Brooks', 'Schaden', '751210058453', '82881 Gayle Rue', 'faye64@yahoo.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(13, 'Edmund', 'DuBuque', '548968486546', '20563 Homenick Expressway', 'thompson.maude@gmail.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(14, 'Waldo', 'Jerde', '509335790280', '8838 Beatty Radial', 'kluettgen@berge.net', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(15, 'Rose', 'Eichmann', '078178130789', '8858 Ambrose Springs Apt. 683', 'smayert@gmail.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(16, 'Cristina', 'Waters', '879468512894', '7194 Barton Courts Apt. 573', 'leslie61@yahoo.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(17, 'Travon', 'Greenfelder', '701751311563', '18655 Cruz Passage', 'owalsh@gmail.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(18, 'Karolann', 'Kihn', '846003341511', '123 Orn Loaf', 'shanna43@hotmail.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(19, 'Xavier', 'Beatty', '022663897673', '849 Brown Lock Apt. 822', 'maximilian.donnelly@yahoo.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(20, 'Romaine', 'Wolff', '186857600984', '91425 Gisselle Field', 'syundt@hotmail.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(21, 'Reyes', 'Gerlach', '347574158736', '43964 Elsie Creek Suite 741', 'lang.victor@beahan.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(22, 'Cathrine', 'DuBuque', '032561779949', '383 Johnny Rue Apt. 907', 'magnolia.grimes@rippin.biz', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(23, 'Jannie', 'Mertz', '819579270725', '914 Bins Spring Apt. 402', 'georgianna20@gmail.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(24, 'Jeramie', 'Cruickshank', '597544660081', '346 Kutch Shore', 'ygusikowski@yahoo.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(25, 'Sally', 'Kiehn', '627326658239', '5445 Krajcik Branch Apt. 936', 'ebony.blick@gmail.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(26, 'Forrest', 'Ward', '219669220340', '74665 Kilback Mountain', 'lind.shanie@kub.net', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(27, 'Brielle', 'Dietrich', '981480753479', '9481 Trudie Forge Apt. 167', 'rhett54@dicki.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(28, 'Jody', 'Graham', '348745404775', '85700 Sabrina Village Suite 929', 'dana90@harris.net', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(29, 'Kelsie', 'Leannon', '780763099099', '1197 Ethan Falls Apt. 389', 'breana09@yahoo.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(30, 'Ava', 'Johns', '632931995409', '8288 Willms Grove', 'jazlyn15@gmail.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(31, 'Gaston', 'Waelchi', '115490375349', '8800 Bauch Summit Suite 882', 'dorian.tremblay@parisian.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(32, 'Reba', 'Ward', '265162147814', '24413 Murl Islands Suite 865', 'veum.abagail@hotmail.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(33, 'Trenton', 'Olson', '498343708315', '9687 Larson Groves', 'austin20@schoen.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(34, 'Marietta', 'Boyle', '997550874200', '338 Stracke Stream', 'clemens.schowalter@trantow.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(35, 'Justina', 'Kiehn', '228829638900', '219 O\'Reilly Mission', 'kpagac@murray.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(36, 'Eva', 'Stracke', '070934043286', '7341 Trenton Landing', 'juvenal11@gaylord.net', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(37, 'Nikolas', 'Gottlieb', '752386731461', '539 Antonette Shores', 'moises39@yost.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(38, 'Blanche', 'Beahan', '950191384715', '2500 Lowe Via', 'hansen.lindsey@strosin.net', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(39, 'Zachary', 'Treutel', '211545776735', '70958 Petra Passage Apt. 220', 'jena97@hotmail.com', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(40, 'Dorthy', 'Padberg', '536381656065', '50157 Pearline Forge Suite 862', 'jarrod.ritchie@armstrong.org', '2024-04-08 17:46:40', '2024-04-08 17:46:40'),
(41, 'Adeline', 'Treutel', '506107349911', '40132 Kreiger Circle Apt. 499', 'shuel@yahoo.com', '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(42, 'Veronica', 'Lang', '755368735881', '772 Moore Locks Suite 149', 'kling.nella@jerde.com', '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(43, 'Merritt', 'Nader', '362119756527', '7819 Keagan Causeway Suite 677', 'elian03@yahoo.com', '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(44, 'Carley', 'Okuneva', '393715050602', '96641 Metz Fall', 'wschimmel@gmail.com', '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(45, 'Tyson', 'Macejkovic', '226403685426', '5444 Cathy Union Apt. 624', 'rosenbaum.onie@gmail.com', '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(46, 'Horacio', 'Wilkinson', '880675061118', '71640 Lindgren Turnpike', 'okon.jennie@gmail.com', '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(47, 'Jasen', 'Kiehn', '363206344790', '28748 Eldon Burg Suite 713', 'verner47@gmail.com', '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(48, 'Whitney', 'Quitzon', '785198520761', '44847 Turner Curve Suite 945', 'edwin89@gmail.com', '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(49, 'Austin', 'Schneider', '371466677822', '75320 Yundt Groves', 'brisa77@sanford.com', '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(50, 'Marshall', 'Hammes', '896416805007', '5939 Melba Tunnel Apt. 161', 'arlie51@quigley.info', '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(51, 'Adolphus', 'Turcotte', '684377109311', '2562 Powlowski Pass Apt. 688', 'schaden.liam@kuvalis.org', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(52, 'Winona', 'Considine', '851459557503', '804 Hegmann Parkway', 'linda.muller@hotmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(53, 'Khalid', 'McLaughlin', '508769122476', '502 Fay Pine', 'muller.ayden@bednar.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(54, 'Al', 'Stamm', '320578610566', '248 Elza Spring Suite 692', 'ukrajcik@hotmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(55, 'Mohammed', 'Kirlin', '149760222721', '660 Hirthe Cliffs Apt. 231', 'lyla.hintz@spencer.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(56, 'Toney', 'Lesch', '689541153885', '81438 Osbaldo Divide', 'ewell50@yahoo.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(57, 'Nathan', 'Sporer', '762892218199', '28609 Alexzander Crossing Suite 812', 'emmerich.abe@hotmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(58, 'Angelina', 'Price', '252549289538', '92133 Janae Isle Suite 844', 'milan50@hotmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(59, 'Frankie', 'Rippin', '175701617459', '138 Hodkiewicz Mountain', 'lazaro18@klein.net', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(60, 'Orlando', 'Howell', '357008761040', '7644 O\'Hara Rue', 'ilene.hamill@gmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(61, 'Donnell', 'Feest', '438071270285', '285 Boyle Road', 'schneider.lexie@gmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(62, 'Noemy', 'Abernathy', '854955085928', '600 White Meadow', 'reichert.dejuan@hotmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(63, 'Aurelia', 'Cremin', '860443685695', '11005 Hansen Parks', 'orval53@schaden.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(64, 'Kobe', 'Walker', '401110963458', '94272 Janie Way', 'wintheiser.dale@stroman.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(65, 'Moses', 'Bahringer', '721569591144', '613 Hill Forge', 'roberts.stuart@schroeder.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(66, 'Jamil', 'Walker', '842119953799', '8535 Mosciski Plains Suite 598', 'ebauch@hotmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(67, 'Jamel', 'Abbott', '884049222527', '8746 Celestine Ports Apt. 492', 'liza.lubowitz@heidenreich.net', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(68, 'Curt', 'Rempel', '546973819085', '740 Willow Inlet Apt. 599', 'jazlyn.leannon@gmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(69, 'Janie', 'McDermott', '438512060385', '8380 Jones Mews Apt. 960', 'garnett07@hotmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(70, 'Lauriane', 'Langosh', '684927478835', '22546 Meggie Lodge', 'pschiller@doyle.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(71, 'Herbert', 'Hamill', '910604771829', '605 Weissnat Place Suite 424', 'mclaughlin.elmer@hotmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(72, 'Fatima', 'Treutel', '822390162088', '8907 Cummerata Rapid', 'nathanael.gleason@okeefe.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(73, 'Manuel', 'Langosh', '136858302015', '25244 Dibbert Harbor Apt. 667', 'margarete.kemmer@gmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(74, 'Catherine', 'Schimmel', '377448822730', '64642 Purdy Terrace Suite 881', 'fdach@mante.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(75, 'Earl', 'Wiegand', '649938526200', '6414 Bins Underpass', 'milton36@ebert.net', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(76, 'Litzy', 'Stehr', '784272938991', '626 Stokes Squares Apt. 362', 'toconner@gmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(77, 'Brody', 'Lockman', '818209629550', '10700 Kane Rapids Apt. 608', 'gino.schneider@gmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(78, 'Hallie', 'Wolff', '988498026342', '67671 Nash Cove', 'aaliyah29@cremin.org', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(79, 'Hazle', 'Wolf', '778028359252', '849 Aliyah Plains Suite 776', 'friesen.myriam@thompson.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(80, 'Tiara', 'Hudson', '818779936061', '5146 Jade Falls Apt. 876', 'alia.kuphal@oreilly.org', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(81, 'Twila', 'Little', '723465752122', '51442 Lenora Lodge Suite 494', 'smitham.virginia@yahoo.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(82, 'Edwina', 'Fisher', '164833172131', '428 Carey Plains', 'wwolf@hotmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(83, 'Delfina', 'Zieme', '535832255172', '261 Orn Roads', 'barton.maurine@huels.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(84, 'Rita', 'Stiedemann', '707217145954', '3508 Kiarra Roads', 'west.cierra@barton.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(85, 'Monserrate', 'Champlin', '667262406015', '32097 Trevion River Apt. 416', 'schulist.estrella@hotmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(86, 'Edgar', 'Zieme', '011857905593', '25903 Kurt Villages Suite 682', 'florencio12@bergstrom.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(87, 'Forest', 'Schuster', '416188168072', '18242 Stark Run', 'jaren.ziemann@gmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(88, 'Edmund', 'Hermann', '376321208638', '7330 Cronin Viaduct', 'constantin02@yahoo.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(89, 'Tre', 'Ledner', '579445007697', '393 Tiana Park Apt. 263', 'sdouglas@gmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(90, 'Van', 'Pfeffer', '779518693985', '8358 Iva Mountain Suite 793', 'iwest@yahoo.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(91, 'Marshall', 'Reinger', '684722196671', '425 Lebsack Radial', 'bradly.effertz@yahoo.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(92, 'Paige', 'Stoltenberg', '940677540631', '711 Riley Underpass', 'dschultz@gleason.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(93, 'Evangeline', 'Wiza', '532891545453', '83899 Afton Rest', 'hwehner@turner.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(94, 'Orland', 'Leffler', '060825927819', '8520 Homenick Ports', 'etha26@shanahan.info', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(95, 'Kenton', 'Weber', '441514574176', '73718 Pollich Radial Suite 317', 'schneider.godfrey@bernhard.info', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(96, 'Adrianna', 'Kertzmann', '608411128182', '198 Ivah Tunnel Suite 300', 'jayda31@hotmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(97, 'Carson', 'Cassin', '730414407957', '13552 Heathcote Heights Suite 779', 'enola.deckow@hotmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(98, 'Dortha', 'Schmitt', '450919502854', '2193 Klocko Ports', 'aaliyah.hickle@hotmail.com', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(99, 'Libby', 'Bode', '223747567208', '65675 Ethyl Spring Suite 027', 'fkunde@fahey.info', '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(100, 'Monserrate', 'Schaden', '142930400069', '566 McDermott Walks', 'yeffertz@bogan.net', '2024-04-20 17:05:10', '2024-04-20 17:05:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientespedidos`
--

CREATE TABLE `clientespedidos` (
  `fechahora_compra` datetime NOT NULL,
  `id_cliente` mediumint(8) UNSIGNED NOT NULL,
  `id_pedido` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientespedidos`
--

INSERT INTO `clientespedidos` (`fechahora_compra`, `id_cliente`, `id_pedido`, `created_at`, `updated_at`) VALUES
('1971-02-26 20:04:23', 31, 40, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1973-03-20 18:40:10', 16, 15, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1973-10-15 18:05:56', 6, 33, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1975-07-13 16:32:48', 44, 22, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1975-12-25 12:09:40', 12, 20, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1976-02-28 02:10:52', 10, 3, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1977-08-23 20:56:05', 22, 28, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1977-12-13 00:20:35', 39, 13, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1978-06-01 14:46:18', 12, 50, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1978-09-13 00:19:32', 15, 7, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1978-09-20 04:38:49', 9, 48, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1979-04-15 07:54:41', 41, 16, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1979-06-02 13:53:43', 41, 21, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1982-03-15 17:38:40', 40, 2, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1982-10-23 09:28:03', 14, 46, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1984-05-04 17:16:46', 49, 27, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1984-07-14 14:08:49', 47, 23, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1985-02-24 21:31:24', 30, 1, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1985-09-19 08:43:27', 11, 5, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1986-01-08 10:27:28', 44, 35, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1988-06-27 07:49:29', 46, 6, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1990-07-20 15:34:31', 9, 44, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1990-10-05 08:41:34', 28, 34, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1993-12-20 01:36:10', 40, 49, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1996-08-11 19:01:41', 31, 19, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1996-08-20 23:24:14', 26, 18, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1999-02-02 10:40:38', 26, 38, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('1999-12-30 00:13:57', 40, 45, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2000-07-18 20:58:30', 5, 4, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2003-06-05 23:32:33', 2, 30, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2006-01-15 07:29:20', 31, 29, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2007-07-03 14:15:49', 2, 39, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2008-11-17 22:33:16', 15, 31, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2009-08-26 11:26:34', 42, 32, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2009-09-25 16:25:04', 21, 42, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2009-12-22 01:46:35', 23, 11, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2011-02-11 04:34:41', 4, 36, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2011-02-24 18:08:20', 20, 17, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2011-10-24 10:35:52', 38, 8, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2013-01-21 22:43:35', 46, 25, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2013-02-14 15:07:06', 25, 43, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2014-03-07 15:28:05', 37, 41, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2014-11-05 14:26:41', 18, 10, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2015-01-12 18:54:34', 27, 37, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2016-01-13 01:26:49', 17, 14, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2016-06-30 10:48:32', 34, 9, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2017-02-05 09:25:31', 46, 12, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2018-09-03 20:42:14', 30, 24, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2020-07-15 03:00:01', 13, 26, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
('2021-07-26 17:32:36', 20, 47, '2024-04-08 17:46:41', '2024-04-08 17:46:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id_imagen` smallint(5) UNSIGNED NOT NULL,
  `id_producto` smallint(5) UNSIGNED NOT NULL,
  `nombre_imagen` varchar(30) NOT NULL,
  `descripcion_imagen` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id_ingrediente` smallint(5) UNSIGNED NOT NULL,
  `nombre_ingrediente` varchar(30) NOT NULL,
  `descripcion_ingrediente` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_26_163522_create_clientes_table', 1),
(6, '2024_03_26_164210_create_pedidos_table', 1),
(7, '2024_03_26_164419_create_clientespedidos_table', 1),
(8, '2024_03_26_222441_create_categorias_table', 1),
(9, '2024_03_26_222524_create_productos_table', 1),
(10, '2024_03_26_222616_create_productos-pedidos_table', 1),
(11, '2024_03_26_222708_create_imagenes_table', 1),
(12, '2024_03_26_222816_create_ingredientes_table', 1),
(13, '2024_03_26_222939_create_productos-ingredientes_table', 1),
(14, '2024_03_27_154019_insertar_datos_iniciales_categorias', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `created_at`, `updated_at`) VALUES
(1, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(2, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(3, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(4, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(5, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(6, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(7, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(8, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(9, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(10, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(11, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(12, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(13, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(14, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(15, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(16, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(17, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(18, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(19, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(20, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(21, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(22, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(23, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(24, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(25, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(26, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(27, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(28, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(29, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(30, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(31, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(32, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(33, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(34, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(35, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(36, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(37, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(38, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(39, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(40, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(41, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(42, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(43, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(44, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(45, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(46, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(47, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(48, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(49, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(50, '2024-04-08 17:46:41', '2024-04-08 17:46:41'),
(51, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(52, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(53, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(54, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(55, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(56, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(57, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(58, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(59, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(60, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(61, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(62, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(63, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(64, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(65, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(66, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(67, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(68, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(69, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(70, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(71, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(72, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(73, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(74, '2024-04-20 17:05:10', '2024-04-20 17:05:10'),
(75, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(76, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(77, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(78, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(79, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(80, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(81, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(82, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(83, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(84, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(85, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(86, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(87, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(88, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(89, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(90, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(91, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(92, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(93, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(94, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(95, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(96, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(97, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(98, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(99, '2024-04-20 17:05:11', '2024-04-20 17:05:11'),
(100, '2024-04-20 17:05:11', '2024-04-20 17:05:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` smallint(5) UNSIGNED NOT NULL,
  `nombre_producto` varchar(30) NOT NULL,
  `descripcion_producto` text NOT NULL,
  `precio_producto` decimal(5,2) UNSIGNED NOT NULL,
  `id_categoria` smallint(5) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `descripcion_producto`, `precio_producto`, `id_categoria`, `created_at`, `updated_at`) VALUES
(1, 'Ensalada Mixta', 'lechuga, tomate y cebolla', '3.50', 1, '2024-04-30 15:46:26', '2024-04-30 15:46:26'),
(2, 'Ensalada Completa', 'lechuga, tomate, cebolla, espárragos, atún, huevo duro y zanahoria', '6.75', 1, '2024-04-30 15:46:26', '2024-04-30 15:46:26'),
(3, 'Ensalada Especial', 'lechuga, tomate, atún, piquillo, huevo duro, zanahoria, queso y pechuga de pollo', '7.90', 1, '2024-04-30 15:46:26', '2024-04-30 15:46:26'),
(4, 'Bocaditos de Queso', '8 bolitas crujientes de patata rayada con corazón de queso raclette', '3.75', 2, '2024-04-30 16:07:05', '2024-04-30 16:07:05'),
(5, 'Minicroquetas de jamón', 'Sabrosa minicroquetas de jamón (16 ud)', '3.00', 2, '2024-04-30 16:07:05', '2024-04-30 16:07:05'),
(6, 'Ensaladilla Rusa', 'Consiste en una ensalada fría elaborada principalmente con patatas, zanahorias y guisantes, mezclados con mayonesa y aliñada con sal y pimienta al gusto.', '4.25', 2, '2024-04-30 16:07:05', '2024-04-30 16:07:05'),
(7, 'Pincho Moruno', 'El Pincho Moruno es una delicia compuesto por trozos de carne marinada en especias como comino, pimentón, ajo y cilantro, ensartados en brochetas y asados a la parrilla. ', '3.00', 2, '2024-04-30 16:07:05', '2024-04-30 16:07:05'),
(8, 'Patatas Fritas Sure Crisp', 'Patatas irresistiblemente crujientes por fuera y tiernas por dentro. Preparadas con patatas frescas cortadas en finas láminas y fritas a la perfección', '3.50', 2, '2024-04-30 16:07:05', '2024-04-30 16:07:05'),
(9, 'Pickers', 'Triangulitos de queso y pimientos empanados con nachos con un toque picante (6 ud)', '3.50', 2, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(10, 'Hamburguesa Simple', 'Sabrosa hamburguesa de carne 75% ternera, 25% cerdo', '3.60', 3, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(11, 'Hamburguesa con Queso', 'Sabrosa hamburguesa de carne con queso suizo', '3.90', 3, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(12, 'Hamburguesa con Queso y Bacon', 'Sabrosa hamburguesa de carne con queso suizo y bacon crujiente', '4.10', 3, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(13, 'Hamburguesa completa', 'Hamburguesa de carne con lechuga, tomate, cebolla y queso', '4.10', 3, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(14, 'Hamburguesa Plus', 'Hamburguesa de carne con lechuga, tomate, cebolla, york y queso', '4.30', 3, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(15, 'Hamburguesa Super', 'Hamburguesa de carne con lechuga, tomate, cebolla, huevo duro, bacon y queso', '4.40', 3, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(16, 'Hamburguesa Piquillo', 'Hamburguesa de carne con lechuga, piquillo, bacon y queso', '4.40', 3, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(17, 'Hamburguesa Chivito', 'Hamburguesa de carne con lechuga, tomate, cebolla, huevo duro, bacon, esparragos, york y queso', '4.80', 3, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(18, 'Hamburguesa Especial', 'Hamburguesa de carne con lechuga, tomate, cebolla, huevo a la plancha, bacon, esparragos, mayonesa york y queso', '5.00', 3, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(19, 'Hamburguesa La Sublime', 'Hamburguesa de carne 200gr carne, bacón, rúcula, cebolla roja, queso cheddar', '7.50', 4, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(20, 'Hamburguesa La Campestre', 'Hamburguesa de carne 150gr carne de vaca, rulo de cabra, cebolla caramelizada, brotes tiernos, mermelada de pimientos asados', '8.20', 4, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(21, 'Hamburguesa Vegana', 'Hamburguesa de carne beyond meat, queso vegano, tomate, cebolla roja y brotes tiernos', '6.20', 4, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(22, 'Hamburguesa Simple', 'Sabrosa hamburguesa de pollo', '3.80', 5, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(23, 'Hamburguesa con Queso', 'Sabrosa hamburguesa de pollo con queso suizo', '4.30', 5, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(24, 'Hamburguesa con Queso y Bacon', 'Sabrosa hamburguesa de pollo con queso suizo y bacon crujiente', '4.40', 5, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(25, 'Hamburguesa completa', 'Hamburguesa de pollo con lechuga, tomate, cebolla y queso', '4.40', 5, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(26, 'Hamburguesa Plus', 'Hamburguesa de pollo con lechuga, tomate, cebolla, york y queso', '4.50', 5, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(27, 'Hamburguesa Super', 'Hamburguesa de pollo con lechuga, tomate, cebolla, huevo duro, bacon y queso', '4.60', 5, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(28, 'Hamburguesa Piquillo', 'Hamburguesa de pollo con lechuga, piquillo, bacon y queso', '4.60', 5, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(29, 'Hamburguesa Chivito', 'Hamburguesa de pollo con lechuga, tomate, cebolla, huevo duro, bacon, esparragos, york y queso', '5.00', 5, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(30, 'Hamburguesa Especial', 'Hamburguesa de pollo con lechuga, tomate, cebolla, huevo a la plancha, bacon, esparragos, mayonesa york y queso', '5.10', 5, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(31, 'Perrito Simple', 'Perrito simple', '3.10', 6, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(32, 'Perrito con queso', 'Perrito con queso', '3.30', 6, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(33, 'Perrito con queso y bacón', 'Perrito con queso y bacon', '3.60', 6, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(34, 'Perrito Doble', 'Perrito con 2 salchichas', '4.10', 6, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(35, 'Perrito Max Mix', 'Salchicha, queso, piquillo, york y lechuga', '4.10', 6, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(36, 'Perrito Max', '2 salchichas, lechuga, bacón, mayonesa y queso', '4.75', 6, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(37, 'Sandwich Mixto', 'Jamon York y queso', '3.30', 11, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(38, 'Sandwich Club', 'Jamón york, queso y huevo plancha', '3.90', 11, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(39, 'Sandwich Especial', 'Jamón york, queso, lechuga, tomate, huevo plancha y mayonesa', '4.10', 11, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(40, 'Sandwich Vegetal', 'Lechuga, tomate, zanahoria, espárrago, queso y mayonesa', '3.80', 11, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(41, 'Sandwich Atún', 'Lechuga, tomate, zanahoria, espárrago, atún, york, queso y mayonesa', '4.70', 11, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(42, 'Sandwich Pollo', 'Lechuga, tomate, zanahoria, pollo, queso y mayonesa', '4.80', 11, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(43, 'Sandwich Pollo Super', 'Lechuga, tomate, queso, bacón, pollo, huevo plancha y mayonesa (3 panes)', '5.25', 11, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(44, 'Sandwich Delicia', 'Lechuga, piquillo, huevo duro, queso, york, bacón y mayonesa', '4.40', 11, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(45, 'Bocata Bacón', 'Bocadillo de sólo bacón', '3.75', 7, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(46, 'Bocata Bacón con queso', 'Bocadillo de bacón con queso', '4.00', 7, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(47, 'Bocata Bacon con queso y huevo', 'Bocadillo de bacón con queso y huevo a la plancha', '4.25', 7, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(48, 'Bocata Bacón completo', 'Bocadillo de bacón con lechuga, tomate, cebolla y queso', '4.25', 7, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(49, 'Bocata de Bacon Super', 'Bocadillo de bacón completo con piquillo, huevo duro y mayonesa', '4.50', 7, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(50, 'Bocata de Bacon Especial', 'Bocadillo de bacón completo con espárragos, huevo plancha y mayonesa', '5.00', 7, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(51, 'Bocata de Pollo', 'Bocadillo de sólo pechuga de pollo', '4.00', 8, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(52, 'Bocata de Pollo con queso', 'Bocadillo de pechuga de pollo con queso', '4.25', 8, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(53, 'Bocata de Pollo Simple', 'Bocadillo de pechuga de pollo, queso y bacón', '4.50', 8, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(54, 'Bocata de Pollo Completo', 'Bocadillo de pechuga de pollo lechuga, tomate, cebolla y queso ', '4.50', 8, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(55, 'Bocata de Pollo Kiriki', 'Bocadillo de pechuga de pollo, queso, lechuga, tomate, cebolla, york y mayonesa', '4.75', 8, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(56, 'Bocata de Pollo Tigretón', 'Bocadillo de pechuga de pollo, tomate, huevo duro, lechuga y foie gras', '4.85', 8, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(57, 'Bocata de Pollo Pollo Guay', 'Bocadillo de pechuga de pollo, queso, tomate, piquillo, lechuga, york, bacón y mayonesa', '4.90', 8, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(58, 'Bocata de Pollo Especial', 'Bocadillo de pechuga de pollo, queso, lechuga, tomate, cebolla, atún, bacon, espárrago y mayonesa', '5.10', 8, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(59, 'Bocata Vegetal', 'Bocadillo de lechuga, tomate, cebolla, espárragos, queso, zanahoria y mayonesa', '3.70', 10, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(60, 'Bocata Atún', 'Bocadillo de lechuga, tomate, zanahoria, atún, espárragos, huevo duro, queso y mayonesa', '4.60', 10, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(61, 'Bocata Especial', 'Bocadillo de lechuga, zanahoria, atún, piquillo, queso, huevo duro y mayonesa', '4.60', 10, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(62, 'Bocata Tortilla Francesa', 'Bocadillo de tortilla francesa', '3.30', 10, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(63, 'Bocata Tortilla Chivito', 'Bocadillo de tortilla francesa, tomate, lechuga, queso, york y mayonesa', '4.10', 10, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(64, 'Bocata de Raxo', 'Bocadillo de sólo raxo', '4.00', 9, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(65, 'Bocata de Raxo con queso', 'Bocadillo de raxo con queso', '4.30', 9, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(66, 'Bocata de Raxo con queso y bac', 'Bocadillo de raxo con queso y bacón', '4.50', 9, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(67, 'Bocata de Raxo completo', 'Bocadillo de raxo con lechuga, tomate, cebolla y queso', '4.50', 9, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(68, 'Bocata de Raxo especial', 'Bocadillo de raxo completo con bacón, piquillo, huevo duro y mayonesa', '5.00', 9, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(69, 'Nº1 Especial de la Casa', '2 hamburguesas de carne, huevo a la plancha, 2 salchichas y patatas fritas', '7.70', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(70, 'Nº2', 'Tortilla francesa de atún, 2 salchichas y ensaladilla', '7.10', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(71, 'Nº3', 'Bistec de ternera, patatas fritas y ensalada', '8.30', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(72, 'Nº4', 'Bistec de ternera, patatas fritas y huevo plancha', '8.30', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(73, 'Nº5', 'Pollo, york/queso, patatas fritas y huevo plancha', '8.10', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(74, 'Nº6', 'Lomo adobado, huevo a la plancha, patatas y croquetas', '7.60', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(75, 'Nº7', '2 escalopes cerdo/queso, ensaladilla, 2 salchichas y patatas fritas', '8.10', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(76, 'Nº8', 'Criollo, patatas fritas, 2 huevos plancha y ensalada', '7.60', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(77, 'Nº9', 'Bacon, patatas fritas y 2 huevos plancha', '7.10', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(78, 'Nº10', 'Bacon, patatas fritas y 2 huevos plancha', '7.60', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(79, 'Nº11', 'Pechuga de pollo, patatas fritas y ensalada', '7.60', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(80, 'Nº12', 'Pechuga de pollo, ensalada, ensaladilla y tortilla francesa', '8.10', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(81, 'Nº13', 'Hamburguesa de pechuga de pollo, ensaladilla, york/queso, croquetas y ensalada', '7.60', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(82, 'Nº14', 'Chuleta de cerdo, huevo a la plancha, patatas y ensalada', '7.60', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(83, 'Nº15', 'Chuleta de cerdo, ensaladilla, criollo y patatas fritas', '8.10', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(84, 'Nº16', 'Raxo, patatas fritas y huevo plancha', '7.60', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(85, 'Nº17', 'Pincho moruno, ensalada, patatas y huevo plancha', '7.60', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(86, 'Nº18', 'Raxo, escalope cerdo/queso, ensalada, croquetas y ensaladilla rusa', '8.10', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(87, 'Nº19', 'Hamburguesa de pechuga de pollo, ensalada, huevo a la plancha, salchicha, patatas fritas', '7.60', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(88, 'Nº20', '2 hamburguesas de pechuga de pollo, patatas fritas, ensaladilla y huevo plancha', '8.30', 12, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(89, 'Tarta de Queso', ' Disfruta de nuestra irresistible tarta de queso, elaborada con una cremosa mezcla de queso, sobre una base crujiente de galleta.', '3.80', 13, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(90, 'Tarta de la Abuela', 'Déjate cautivar por el sabor nostálgico de nuestra tarta de la abuela, alternando capas de: galleta, crema pastelera casera y chocolate', '3.70', 13, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(91, 'Tiramisú', 'Sumérgete en la exquisita combinación de café, biscocho, mascarpone, huevo y una pequeña cobertura de cacao puro', '3.80', 13, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(92, 'Flan de Huevo', ' Deléitate con la suavidad y el sabor delicado de nuestro flan de huevo casero. Preparado con ingredientes frescos y un toque de caramelo', '3.00', 13, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(93, 'Tarta Helada', 'Refréscate con nuestra irresistible tarta helada, una combinación de sabores cremosos y refrescantes perfecta para los días calurosos. Disponible en una variedad de sabores.', '3.00', 13, '2024-04-30 16:24:35', '2024-04-30 16:24:35'),
(94, 'Coca-Cola', 'Refresco de Coca-cola', '1.90', 14, '2024-04-30 22:31:03', '2024-04-30 22:31:03'),
(95, 'Kas Limón', 'Refresco de limón', '1.90', 14, '2024-04-30 22:31:03', '2024-04-30 22:31:03'),
(96, 'Kas Naranja', 'Refresco de naranja', '1.90', 14, '2024-04-30 22:31:03', '2024-04-30 22:31:03'),
(97, 'Nestea', 'Refresco de te de limon', '1.90', 14, '2024-04-30 22:31:03', '2024-04-30 22:31:03'),
(98, 'Agua', 'Agua mineral natural', '0.90', 14, '2024-04-30 22:31:03', '2024-04-30 22:31:03'),
(99, 'Agua con gas', 'Agua carbonatada', '0.90', 14, '2024-04-30 22:31:03', '2024-04-30 22:31:03'),
(100, 'Cerveza Estrella', 'Cerveza rubia Estrella Galicia', '1.80', 14, '2024-04-30 22:31:03', '2024-04-30 22:31:03'),
(101, 'Caña Estrella', 'Caña de cerveza', '1.50', 14, '2024-04-30 22:31:03', '2024-04-30 22:31:03'),
(102, 'Cerveza 1906', 'Cerveza artesanal', '2.00', 14, '2024-04-30 22:31:03', '2024-04-30 22:31:03'),
(103, 'Caña 1906', 'Caña de cerveza artesanal', '1.50', 14, '2024-04-30 22:31:03', '2024-04-30 22:31:03'),
(104, 'Estrella Sin Gluten', 'Cerveza sin gluten', '2.20', 14, '2024-04-30 22:31:03', '2024-04-30 22:31:03'),
(105, 'Estrella 0,0', 'Cerveza sin alcohol', '2.10', 14, '2024-04-30 22:31:03', '2024-04-30 22:31:03'),
(106, 'Café Americano', 'Café negro sin leche', '1.20', 14, '2024-04-30 22:31:03', '2024-04-30 22:31:03'),
(107, 'Café Solo', 'Café negro', '1.20', 14, '2024-04-30 22:31:03', '2024-04-30 22:31:03'),
(108, 'Café con Leche', 'Café con leche', '1.50', 14, '2024-04-30 22:31:03', '2024-04-30 22:31:03'),
(109, 'Chupito Orujo', 'Licor de orujo', '1.00', 14, '2024-04-30 22:31:03', '2024-04-30 22:31:03'),
(110, 'Chupito Licor Café', 'Licor de café', '1.00', 14, '2024-04-30 22:31:03', '2024-04-30 22:31:03'),
(111, 'Chupito Crema de Orujo', 'Crema de licor de orujo', '1.00', 14, '2024-04-30 22:31:03', '2024-04-30 22:31:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_ingredientes`
--

CREATE TABLE `productos_ingredientes` (
  `id_producto` smallint(5) UNSIGNED NOT NULL,
  `id_ingrediente` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_pedidos`
--

CREATE TABLE `productos_pedidos` (
  `id_producto` smallint(5) UNSIGNED NOT NULL,
  `id_pedido` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nerea', 'nerea.nsc@outlook.com', NULL, '$2y$12$e/.MnOQlmPf81JMg8my48.yW25JGjHvCrkc02cTtxD7Btc/V9gZhG', NULL, '2024-05-04 23:38:25', '2024-05-04 23:38:25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `clientes_correo_electronico_unique` (`correo_electronico`);

--
-- Indices de la tabla `clientespedidos`
--
ALTER TABLE `clientespedidos`
  ADD PRIMARY KEY (`fechahora_compra`,`id_cliente`,`id_pedido`),
  ADD UNIQUE KEY `clientespedidos_id_pedido_unique` (`id_pedido`),
  ADD KEY `clientespedidos_id_cliente_foreign` (`id_cliente`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `imagenes_id_producto_foreign` (`id_producto`);

--
-- Indices de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id_ingrediente`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_categoria` (`id_categoria`);

--
-- Indices de la tabla `productos_ingredientes`
--
ALTER TABLE `productos_ingredientes`
  ADD PRIMARY KEY (`id_producto`,`id_ingrediente`),
  ADD KEY `productos_ingredientes_id_ingrediente_foreign` (`id_ingrediente`);

--
-- Indices de la tabla `productos_pedidos`
--
ALTER TABLE `productos_pedidos`
  ADD PRIMARY KEY (`id_producto`,`id_pedido`),
  ADD KEY `productos_pedidos_id_pedido_foreign` (`id_pedido`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagen` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id_ingrediente` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientespedidos`
--
ALTER TABLE `clientespedidos`
  ADD CONSTRAINT `clientespedidos_id_cliente_foreign` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `clientespedidos_id_pedido_foreign` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`);

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`),
  ADD CONSTRAINT `productos_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);

--
-- Filtros para la tabla `productos_ingredientes`
--
ALTER TABLE `productos_ingredientes`
  ADD CONSTRAINT `productos_ingredientes_id_ingrediente_foreign` FOREIGN KEY (`id_ingrediente`) REFERENCES `ingredientes` (`id_ingrediente`),
  ADD CONSTRAINT `productos_ingredientes_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `productos_pedidos`
--
ALTER TABLE `productos_pedidos`
  ADD CONSTRAINT `productos_pedidos_id_pedido_foreign` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`),
  ADD CONSTRAINT `productos_pedidos_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
