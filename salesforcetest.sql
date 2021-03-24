-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-03-2021 a las 16:32:30
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `salesforcetest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id_client` int(11) NOT NULL,
  `name_client` text NOT NULL,
  `email_client` text NOT NULL,
  `phone_client` text NOT NULL,
  `address_client` text NOT NULL,
  `category_client` text NOT NULL,
  `img_client` text NOT NULL,
  `description_client` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id_client`, `name_client`, `email_client`, `phone_client`, `address_client`, `category_client`, `img_client`, `description_client`) VALUES
(1, 'gus', 'gusta@gmail.com', '1234567890', 'blah blah blah', 'Test', 'img', 'Hola'),
(2, 'Gustavo', 'gus@gmail.com', '1234567988', 'Av. dsadsada', 'Electric Maintenance', 'AlmaBlog.jpg', 'dsadsa'),
(3, 'Gustavo Test', 'Gustavo@gmail.com', '1234567898', 'ldslkdsla', 'Electric Maintenance', 'http://localhost/appform/uploads/', 'Blah blah'),
(4, 'Gustavo', 'gus@gmail.co', '1234567890', 'Ultima', 'Lawn', 'http://localhost/appform/uploads/Untitled-3.jpg', 'lalalalalala'),
(5, 'Test 4', 'test@gmail.com', '1234567986', 'sdadsad', 'Technology Maintenance', 'http://localhost/appform/uploads/almaBlogLogo.png', 'dsadsad'),
(6, 'Gussss New', 'gus@gmail.com', '1234567890', 'Ole', 'Technology Maintenance', 'http://localhost/appform/uploads/AlmaBlog.jpg', ''),
(7, 'Gustavo', 'gus@gmail.com', '1234567980', 'Oleeee2222', 'General Maintenance', 'http://localhost/appform/uploads/AlmaBlog.jpg', 'dsad'),
(8, 'dsads', 'dsadsa@gmail.com', '1234568798', 'Street sad', 'General Maintenance', 'http://localhost/appform/uploads/AlmaBlog.jpg1', 'dsadsa'),
(9, 'dsada', 'dsadsa@gmail.com', '1234567989', 'dasdsad', 'License Violation', 'http://localhost/appform/uploads/AlmaBlog1.jpg', 'dsadads'),
(10, 'Gustavo', 'gustest@123456.com', '1234567890', 'dsadsa', 'Appliances', 'http://localhost/appform/uploads/AlmaBlog2.jpg', 'dsadsadsda'),
(11, 'Gustavo Jaen', 'gustavo@gmail.com', '1234567985', 'lalalala', 'Lead Repair', 'http://localhost/appform/uploads/AlmaBlog3.jpg', 'dsadsa'),
(12, 'Gustavo Jaen Vidal', 'gustavo@mail2.com', '1234567899', 'Av. bla', 'Lead Repair', 'http://localhost/appform/uploads/almaBlogLogo.png', 'dshodsiahdsaoi sdadsa'),
(13, 'Gustavo Jaen', 'gus@mgi.com', '(123)4567894', 'dsadsda', 'Mechanical Maintenance', 'http://localhost/appform/uploads/almaBlogLogo1.png', 'dsadsadsa'),
(14, 'gus', 'gus@gmail.com', '1234561237', 'dsadsa', 'General Maintenance', 'http://localhost/appform/uploads/AlmaBlog.jpg', ''),
(15, 'Gus1603', 'gus@gmail.com', '1234567890', 'Av. dsladsjodsa', 'Plumbing Maintenance', 'http://localhost/uploads/AlmaBlog.jpg', 'Lalallalalaalala'),
(16, 'gustavo', 'gus@gmail.com', '1234567980', 'Gus', 'Mechanical Maintenance', 'http://localhost/uploads/AlmaBlog1.jpg', 'dsadsadsdsadsa'),
(17, 'dsadsa', 'ddsa@gmail.cpm', '1234567890', 'dsadsada', 'Cleaning Services', 'http://localhost/uploads/1.', ''),
(18, 'dsa', 'dsadsa@gmail.com', '1234567970', 'Ascsaada', 'General Maintenance', 'No data Uploaded', ''),
(20, 'Gus', 'Gus@gmail.com', '(213) 213-2131', 'dsasdsa dsadsad', 'Mechanical Maintenance', 'No data Uploaded', ''),
(21, 'Gus', 'gus@gmail.com', '(123) 456-7894', 'dsadsadsaad', 'Cleaning Services', 'http://localhost/uploads/AlmaBlog3.jpg', ''),
(22, 'Gus', 'gus@gmail.com', '(123) 456-7890', 'dasdsasad', 'General Maintenance', 'http://localhost/uploads/AlmaBlog4.jpg', ''),
(23, 'Gus', 'gustavo@gmail.com', '(123) 456-7895', 'Ab.sd dsada', 'Technology Maintenance', 'No Data Uploaded', ''),
(24, 'dasd', 'dsadsa@gmail.com', '(123) 456-7894', 'sdadas', 'Appliances', 'http://localhost/uploads/lowcost-mobile2.jpg', ''),
(25, '', '', '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id_client`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
