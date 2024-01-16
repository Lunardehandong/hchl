-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-05-2022 a las 18:05:18
-- Versión del servidor: 10.5.12-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u661461519_sistemahc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `archivo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`id`, `nombre`, `archivo`) VALUES
(1, 'catalogo ', '1648527594_Catalogo completo.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_individual`
--

CREATE TABLE `catalogo_individual` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `archivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_individual`
--

INSERT INTO `catalogo_individual` (`id`, `nombre`, `archivo`) VALUES
(1, 'HEALTHY COOKING SYSTEM FAMILIAR', '1648190242_Pagina 1.jpg'),
(2, 'PRINCESA A', '1648191543_Pagina 2.jpg'),
(3, 'SUPREME FOOD CUTTER', '1648191928_Pagina 20.jpg'),
(4, '6 PIECE SUPREME FINE CUTLERY', '1648192011_Pagina 19.jpg'),
(5, '12\"GRILL PAN', '1648192059_Pagina 18.jpg'),
(7, '1 QT. ALL PURPOSE PAN', '1648192270_Pagina 17.jpg'),
(8, '14\" WOK METAL LONG HANDLE', '1648192319_Pagina 16.jpg'),
(9, '8\",10\" Y 12\"OPEN SKILLETS', '1648192414_Pagina 15.jpg'),
(10, '13\"ROUND GRIDDLE W/COVER', '1648192499_Pagina 14.jpg'),
(12, '13\" X 19\" DOUBLE GRIDDLE ', '1648192701_Pagina 13.jpg'),
(13, '14\" FULL BODY 5 PLY ', '1648192762_Pagina 12.jpg'),
(14, '53 QT.SUPER STOCK POT', '1648192835_Pagina 11.jpg'),
(15, '34 QT. STOCK POT', '1648192904_Pagina 10.jpg'),
(16, '22 QT. STOCK POTS', '1648192955_Pagina 9.jpg'),
(17, '16 QT. STOCK POTS', '1648193036_Pagina 8.jpg'),
(18, '12 QT.STOCK POTS', '1648193089_Pagina 7.jpg'),
(19, '16\" SUPER JUMBO SKILLET', '1648193145_Pagina 6.jpg'),
(20, '14\" SUPER JUMBO SKILLET', '1648193211_Pagina 5.jpg'),
(21, '12\" SUPER JUMBO SKILLET', '1648193274_Pagina 4.jpg'),
(22, 'PRINCESA B', '1648193325_Pagina 3.jpg'),
(24, 'GENERADOR DE OZONO HOGAR', '1649881684_generador de ozono casa.jpg'),
(25, 'ESTUFA DE INDUCCION', '1649881777_Estufa de induccion 3.jpg'),
(26, 'GENERADOR DE OZONO PORTATIL', '1649881967_generador de ozono portatil.jpg'),
(27, 'Logo imagen', '1650388689_Logo imagen.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenamientos`
--

CREATE TABLE `entrenamientos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `archivo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entrenamientos`
--

INSERT INTO `entrenamientos` (`id`, `nombre`, `archivo`) VALUES
(75, 'Reglas de Ascensos', '1647965263_ASCENSOS 2022.pdf'),
(76, 'Calendario', '1647965285_calendario-2022-excel-lunes-a-domingo.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_cuenta`
--

CREATE TABLE `estados_cuenta` (
  `id` int(250) NOT NULL,
  `informacion_estados_cuenta` varchar(500) NOT NULL,
  `fecha` varchar(250) NOT NULL,
  `archivo` varchar(500) NOT NULL,
  `asignar_a` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estados_cuenta`
--

INSERT INTO `estados_cuenta` (`id`, `informacion_estados_cuenta`, `fecha`, `archivo`, `asignar_a`) VALUES
(13, '678', '2022-03-22', '1647380787_pag9.jpg', 'Veronica Vaquera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formatos`
--

CREATE TABLE `formatos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `archivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formatos`
--

INSERT INTO `formatos` (`id`, `nombre`, `archivo`) VALUES
(8, 'Reporte de ventas semanal', '1647965454_Reporte de Ventas.pdf'),
(9, 'Recepcion de block', '1647965476_recepcion-pago pedidos originales.pdf'),
(10, 'Programa anfitriona RIAA', '1647965502_programa RIAA 2022.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formatosss`
--

CREATE TABLE `formatosss` (
  `id` int(11) NOT NULL,
  `nombre_anfitrion` varchar(300) NOT NULL,
  `fecha_inicio` varchar(300) NOT NULL,
  `fecha_final` varchar(300) NOT NULL,
  `premio` varchar(200) NOT NULL,
  `meta` varchar(300) NOT NULL,
  `gasto` varchar(300) NOT NULL,
  `nivel1` varchar(300) NOT NULL,
  `nivel2` varchar(300) NOT NULL,
  `nivel4` varchar(300) NOT NULL,
  `otro` varchar(300) NOT NULL,
  `nivel3` varchar(300) NOT NULL,
  `pedidos` varchar(300) NOT NULL,
  `pedido` varchar(300) NOT NULL,
  `nombre_cliente` varchar(300) NOT NULL,
  `cantidad` varchar(300) NOT NULL,
  `total` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formatosss`
--

INSERT INTO `formatosss` (`id`, `nombre_anfitrion`, `fecha_inicio`, `fecha_final`, `premio`, `meta`, `gasto`, `nivel1`, `nivel2`, `nivel4`, `otro`, `nivel3`, `pedidos`, `pedido`, `nombre_cliente`, `cantidad`, `total`) VALUES
(13, 'final pepe', '2022-03-19', '2022-03-27', 'wwwww', 'eee', 'eee', 'ee', 'eee', 'eee', 'eee', 'eeee', 'eee', 'eee', 'eee', 'eee', 'eee'),
(14, 'raul mora', '2022-03-27', '2022-04-10', '13000', '80000', '1500', 'seleccionado ', '0', '0', '0', '0', '23', '34', '45', '45', '45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `archivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`id`, `nombre`, `archivo`) VALUES
(2, 'Requisitos p/ingreso', '1647965563_INGRESOS 2022.pdf'),
(3, 'Manual de operaciones', '1647965596_manual 2022.pdf'),
(4, 'Carta notificacion', '1647965618_Notificacion.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(255) NOT NULL,
  `vendedor` varchar(255) NOT NULL,
  `pedido` varchar(250) NOT NULL,
  `archivo` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `vendedor`, `pedido`, `archivo`) VALUES
(5, '', '909', 1647384640);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE `precios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `archivo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`id`, `nombre`, `archivo`) VALUES
(8, 'precios individuales', '1649881474_v3 precios-tasas-puntos.pdf'),
(9, 'Precios paquetes', '1649881487_v3 precios paquetes.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE `recetas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `archivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`id`, `nombre`, `archivo`) VALUES
(8, 'Recetario de ensaladas ', '1647646656_recetario_ensaladas.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `Contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `Contraseña`) VALUES
(1, 'david hernandez', 'Hchl1012'),
(2, 'virginia herrera', 'Hchl107'),
(3, 'raul camacho', 'Hchl108'),
(4, 'raul mora', 'Hchl109'),
(5, 'avel rodriguez', 'Hchl1010'),
(6, 'veronica vaquera', 'Hchl1011'),
(9, 'Albert Lara', 'Hchl1013'),
(11, 'prueba1', 'prueba2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_individual`
--
ALTER TABLE `catalogo_individual`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entrenamientos`
--
ALTER TABLE `entrenamientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados_cuenta`
--
ALTER TABLE `estados_cuenta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formatos`
--
ALTER TABLE `formatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formatosss`
--
ALTER TABLE `formatosss`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `precios`
--
ALTER TABLE `precios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `catalogo_individual`
--
ALTER TABLE `catalogo_individual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `entrenamientos`
--
ALTER TABLE `entrenamientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de la tabla `estados_cuenta`
--
ALTER TABLE `estados_cuenta`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `formatos`
--
ALTER TABLE `formatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `formatosss`
--
ALTER TABLE `formatosss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `precios`
--
ALTER TABLE `precios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
