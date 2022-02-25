-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2020 a las 22:54:02
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `desesperado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `AdminUserName` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `AdminPassword` varchar(255) NOT NULL,
  `AdminEmailId` varchar(255) NOT NULL,
  `Is_Active` int(11) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `Name`, `AdminPassword`, `AdminEmailId`, `Is_Active`, `CreationDate`, `UpdationDate`) VALUES
(1, 'admin', 'Joel', '$2y$12$UKL8qrHPL0FvFHBTksEs5etH3WV4gq69Afr9qRDharWpBCUYF72v2', 'wanstiller@gmail.com', 1, '2018-05-27 17:51:00', '2019-03-12 21:54:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblcategory`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcomments`
--

CREATE TABLE `tblcomments` (
  `id` int(11) NOT NULL,
  `postId` char(11) DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `comment` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `Vistas` int(11) NOT NULL,
  `PageName` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblpages`
--

INSERT INTO `tblpages` (`id`, `Vistas`, `PageName`, `PageTitle`, `Description`, `PostingDate`, `UpdationDate`) VALUES
(1, 0, 'portada', NULL, '<!--<div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">\r\n  <div class=\"carousel-inner\">\r\n    <div class=\"carousel-item active\">\r\n      <img class=\"d-block w-100\" src=\"images/Mortal-Kombat-Trilogy-Cover.jpg\" alt=\"First slide\">\r\n    </div>\r\n    <div class=\"carousel-item\">\r\n      <img class=\"d-block w-100\" src=\"images/Mortal-Kombat-Trilogy-Cover.jpg\" alt=\"Second slide\">\r\n    </div>\r\n    <div class=\"carousel-item\">\r\n      <img class=\"d-block w-100\" src=\"images/Mortal-Kombat-Trilogy-Cover.jpg\" alt=\"Third slide\">\r\n    </div>\r\n  </div>\r\n  <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">\r\n    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>\r\n    <span class=\"sr-only\">Previous</span>\r\n  </a>\r\n  <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">\r\n    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>\r\n    <span class=\"sr-only\">Next</span>\r\n  </a>\r\n</div>\r\n<br>-->', NULL, '2020-05-07 15:12:53'),
(2, 109, 'contactus', 'Hoja de Vida', '<div class=\"col\">\r\n  <p><b>INFORMACIÓN\r\nPERSONAL</b><br>\r\nAPELLIDOS Y NOMBRES: García Sarabia, Joel<br>\r\nLUGAR Y FECHA DE NACIMIENTO: Caracas, Venezuela, 29 de diciembre de 1987<br>\r\nCÉDULA DE IDENTIDAD Y PASAPORTE: Contactar Personalmente.<br>\r\nPERMISO ESPECIAL DE PERMANENCIA: Contactar Personalmente.<br>\r\n<b><br>INFORMACIÓN DE CONTACTO</b><br>TELÉFONO: +57 3112601049<br>\r\nDIRECCIÓN:<br>\r\n\r\n\r\n<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.0587973926577!2d-74.13886037925316!3d4.583466874894699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9f3ab49fbfa3%3A0xff6ceb4572473ebd!2sCalle%2052g%20Sur%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1587823112657!5m2!1ses-419!2sco\" height=\"300\" frameborder=\"0\" style=\"border:0;width:100%\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>\r\n\r\n\r\n<br>\r\n<b><br></b><b>CURSOS REALIZADOS (PRESENCIALES)<br></b>Técnico en reparación de micros y ordenadores. Año 2008. Caracas, Venezuela.<br>Maquetación de Sitios web (HTML + CSS + JS) frontend. Caracas, Venezuela. Año\r\n2009<br>Maquetación de sitios Web PHP &amp; MySQL, Macromedia Dreamweaver, Caracas,\r\nVenezuela, año 2009.<br>Fundamentos de Diseño gráfico y marketing On Line, Softrain, Caracas,\r\nVenezuela, año 2014.<br>Programación Java SE8. Año 2016, Softrain, Caracas, Venezuela.</p><p>\r\n<b>EXPERIENCIA LABORAL</b><br><font face=\"Courier New\">\r\n2004 – 2007</font> Programador web (Front End) XISUTRO C.A.<br><font face=\"Courier New\">\r\n2009 – 2010</font> Programador Web (html, joomla) Agencia publicitaria EDICAS GROUP.\r\nDiseñador gráfico y publicista. <br><font face=\"Courier New\">\r\n2009 – 2011</font> Programador Web (html, joomla) de la agencia de eventos Sweet &amp;\r\nLives Producciones.<br><font face=\"Courier New\">2012 – 2015</font> Diseñador Web y publicista de Logana Belleza Medical Spa. (html5\r\ncss3 + PHP MySQL) Diseñador Gráfico, publicista, especialista en SEO.<br><font face=\"Courier New\">2014 – 2016</font> Técnico en computadoras,\r\ndesarrollador web, diseñador gráfico. Soporte de software administrativo en\r\nInv. D Bras.<br><font face=\"Courier New\">2016 – 2017</font> Desarrollador front-end, tumedico.com.<br><font face=\"Courier New\">\r\n2017</font> Desarrollador Web InstalRed CH&amp;C<br><font face=\"Courier New\">\r\n2018</font> Maquetador Front End Softuo.com<br><font face=\"Courier New\">2018 - 2020</font> Programador Web Freelance - Bogotá</p></div>', NULL, '2020-05-14 20:24:41'),
(3, 0, 'navigation', NULL, NULL, NULL, NULL),
(4, 0, 'footer', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblposts`
--

CREATE TABLE `tblposts` (
  `id` int(11) NOT NULL,
  `Views` int(11) NOT NULL,
  `Autor` longtext DEFAULT NULL,
  `PostTitle` longtext DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `PostDetails` longtext CHARACTER SET utf8 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  `PostUrl` mediumtext DEFAULT NULL,
  `PostImage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblposts`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `SubCategoryId` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `Subcategory` varchar(255) DEFAULT NULL,
  `SubCatDescription` mediumtext DEFAULT NULL,
  `PostImage` varchar(255) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblsubcategory`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `phone` varchar(60) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `puntos` varchar(30) NOT NULL DEFAULT '0',
  `ultimaClaseId` varchar(100) DEFAULT NULL,
  `ultimaClaseTi` varchar(300) CHARACTER SET latin7 COLLATE latin7_general_cs DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblposts`
--
ALTER TABLE `tblposts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`SubCategoryId`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblcomments`
--
ALTER TABLE `tblcomments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tblposts`
--
ALTER TABLE `tblposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  MODIFY `SubCategoryId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
