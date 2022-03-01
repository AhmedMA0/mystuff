SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `crud_empleados`
--
CREATE DATABASE IF NOT EXISTS `crud_empleados`;
USE `crud_empleados`; 

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `dni` varchar(255) NOT NULL,
  `departamento` varchar(255) NOT NULL,
  `salario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre`, `apellidos`, `direccion`, `dni`, `departamento`, `salario`) VALUES
(1, 'Raúl', 'Fernandez Arce', 'c/Gonzalez Besada', '45125632R', 'desarrollo back-end', '2000'),
(2, 'Ahmed', 'Mohamed Ahmed', 'c/General Muslera', '08728734T', 'desarrollo full-stack', '2000'),
(3, 'Emilio', 'Montesinos Rominguera', 'c/Paseo Alcalde Sánchez Prados', '45387651Y', 'desarrollo front-end', '2000'),
(4, 'Jose Manuel', 'Perez del Rio', 'c/Velarde', '45897601W', 'desarrollo full-stack', '2000'),
(5, 'Jesús ', 'Ruiz Rodríguez', 'c/Rampa de Abastos', '05217896U', 'desarrollo front-end', '2000'),
(6, 'José Carlos', 'Vicario Cobos', 'c/Real', '50125630X', 'desarrollo back-end', '2000'),
(7, 'Jesús', 'Roca Obispo', 'c/Paseo de la Marina Española', '45113076Q', 'desarrollo front-end', '2000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `correo`, `passwd`) VALUES
(1, 'admin@correo.es', '123456'),
(2, 'jefe@correo.es', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

