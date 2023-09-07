-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2023 a las 02:39:13
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `citas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citasmedicas`
--

CREATE TABLE `citasmedicas` (
  `ID_Cita` int(11) NOT NULL,
  `ID_Usuario` int(11) DEFAULT NULL,
  `ID_Medico` int(11) DEFAULT NULL,
  `FechaHoraCita` datetime DEFAULT NULL,
  `Diagnostico` text DEFAULT NULL,
  `Comentarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `citasmedicas`
--

INSERT INTO `citasmedicas` (`ID_Cita`, `ID_Usuario`, `ID_Medico`, `FechaHoraCita`, `Diagnostico`, `Comentarios`) VALUES
(1, 1, 1, '2023-09-10 09:00:00', 'Presión arterial alta', 'Ningún comentario adicional'),
(2, 2, 2, '2023-09-11 10:30:00', 'Dermatitis leve', 'Usar crema recetada'),
(3, 3, 3, '2023-09-12 15:15:00', 'Control pediátrico de rutina', 'Ningún comentario adicional'),
(4, 4, 4, '2023-09-13 11:45:00', 'Examen ginecológico anual', 'Ningún comentario adicional'),
(5, 5, 5, '2023-09-14 14:00:00', 'Dolor en la rodilla derecha', 'Recomendado reposo y hielo'),
(6, 1, 1, '2023-09-05 18:29:00', 'Diabetes tipo 1', 'sin comentarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `ID_Medico` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Especialidad` varchar(100) DEFAULT NULL,
  `TelefonoContacto` varchar(15) DEFAULT NULL,
  `CorreoElectronico` varchar(100) DEFAULT NULL,
  `OtrosDatos` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`ID_Medico`, `Nombre`, `Apellido`, `Especialidad`, `TelefonoContacto`, `CorreoElectronico`, `OtrosDatos`) VALUES
(1, 'Dr. Gonzalez', 'Perez', 'Cardiología', '1111111111', 'gonzalez@example.com', 'Otros datos del Dr. Gonzalez'),
(2, 'Dra. Rodriguez', 'Lopez', 'Dermatología', '2222222222', 'rodriguez@example.com', 'Otros datos de la Dra. Rodriguez'),
(3, 'Dr. Ramirez', 'Gomez', 'Pediatría', '3333333333', 'ramirez@example.com', 'Otros datos del Dr. Ramirez'),
(4, 'Dra. Fernandez', 'Martinez', 'Ginecología', '4444444444', 'fernandez@example.com', 'Otros datos de la Dra. Fernandez'),
(5, 'Dr. Torres', 'Hernandez', 'Ortopedia', '5555555555', 'torres@example.com', 'Otros datos del Dr. Torres'),
(6, 'Rosario', 'oliva', 'Materno Fetal', '4881457578', 'rosarioguadalupeolivacepeda@gmail.com', 'sin datos ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_Usuario` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Genero` varchar(10) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `CorreoElectronico` varchar(100) DEFAULT NULL,
  `OtrosDatos` text DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `TipoUsuario` enum('Administrador','Paciente') DEFAULT 'Paciente',
  `Contraseña` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_Usuario`, `Nombre`, `Apellido`, `FechaNacimiento`, `Genero`, `Direccion`, `Telefono`, `CorreoElectronico`, `OtrosDatos`, `Username`, `TipoUsuario`, `Contraseña`) VALUES
(1, 'Juan', 'Perez', '1990-05-15', 'Masculino', '123 Calle Principal', '1234567890', 'juan@example.com', 'Otros datos de Juan', NULL, 'Paciente', NULL),
(2, 'Maria', 'Gomez', '1985-09-20', 'Femenino', '456 Avenida Central', '9876543210', 'maria@example.com', 'Otros datos de Maria', NULL, 'Paciente', NULL),
(3, 'Pedro', 'Rodriguez', '1978-03-10', 'Masculino', '789 Calle Secundaria', '5555555555', 'pedro@example.com', 'Otros datos de Pedro', NULL, 'Paciente', NULL),
(4, 'Luisa', 'Lopez', '1995-11-25', 'Femenino', '987 Avenida Norte', '3333333333', 'luisa@example.com', 'Otros datos de Luisa', NULL, 'Paciente', NULL),
(5, 'Ana', 'Martinez', '1980-07-12', 'Femenino', '369 Calle Oeste', '7777777777', 'ana@example.com', 'Otros datos de Ana', NULL, 'Paciente', NULL),
(6, 'Juan', 'Perez', '1990-05-15', 'Masculino', '123 Calle Principal', '1234567890', 'juan@example.com', NULL, 'juanperez', 'Administrador', NULL),
(7, 'Maria', 'Gomez', '1985-09-20', 'Femenino', '456 Avenida Central', '9876543210', 'maria@example.com', NULL, 'mariagomez', 'Paciente', NULL),
(8, 'Pedro', 'Rodriguez', '1978-03-10', 'Masculino', '789 Calle Secundaria', '5555555555', 'pedro@example.com', NULL, 'pedrorodriguez', 'Paciente', NULL),
(9, 'Luisa', 'Lopez', '1995-11-25', 'Femenino', '987 Avenida Norte', '3333333333', 'luisa@example.com', NULL, 'luisalopez', 'Paciente', NULL),
(10, 'Ana', 'Martinez', '1980-07-12', 'Femenino', '369 Calle Oeste', '7777777777', 'ana@example.com', NULL, 'anamartinez', 'Administrador', NULL),
(11, 'Juan', 'Perez', '1990-05-15', 'Masculino', '123 Calle Principal', '1234567890', 'juan@example.com', NULL, 'juanperez', 'Administrador', 'contraseña_hash_administrador'),
(12, 'Maria', 'Gomez', '1985-09-20', 'Femenino', '456 Avenida Central', '9876543210', 'maria@example.com', NULL, 'mariagomez', 'Paciente', 'contraseña_hash_paciente'),
(13, 'Pedro', 'Rodriguez', '1978-03-10', 'Masculino', '789 Calle Secundaria', '5555555555', 'pedro@example.com', NULL, 'pedrorodriguez', 'Paciente', 'contraseña_hash_paciente'),
(14, 'Luisa', 'Lopez', '1995-11-25', 'Femenino', '987 Avenida Norte', '3333333333', 'luisa@example.com', NULL, 'luisalopez', 'Paciente', 'contraseña_hash_paciente'),
(15, 'Ana', 'Martinez', '1980-07-12', 'Femenino', '369 Calle Oeste', '7777777777', 'ana@example.com', NULL, 'anamartinez', 'Administrador', 'contraseña_hash_administrador'),
(16, 'Admin', 'Admin', '1990-01-01', 'Masculino', '123 Calle Principal', '1234567890', 'admin@example.com', 'Admin de ejemplo', 'admin', 'Administrador', 'contraseña_admin'),
(17, 'Paciente1', 'Apellido1', '1995-05-15', 'Femenino', '456 Calle Secundaria', '9876543210', 'paciente1@example.com', 'Paciente de ejemplo 1', 'paciente1', 'Paciente', 'contraseña_paciente1'),
(18, 'Paciente2', 'Apellido2', '1985-03-10', 'Masculino', '789 Calle Terciaria', '5555555555', 'paciente2@example.com', 'Paciente de ejemplo 2', 'paciente2', 'Paciente', 'contraseña_paciente2'),
(19, 'Paciente3', 'Apellido3', '1998-07-20', 'Femenino', '101 Calle Cuarta', '3333333333', 'paciente3@example.com', 'Paciente de ejemplo 3', 'paciente3', 'Paciente', 'contraseña_paciente3'),
(20, 'Admin2', 'Admin2', '1980-02-28', 'Masculino', '222 Calle Quinta', '4444444444', 'admin2@example.com', 'Admin de ejemplo 2', 'admin2', 'Administrador', 'contraseña_admin2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citasmedicas`
--
ALTER TABLE `citasmedicas`
  ADD PRIMARY KEY (`ID_Cita`),
  ADD KEY `ID_Usuario` (`ID_Usuario`),
  ADD KEY `ID_Medico` (`ID_Medico`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`ID_Medico`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citasmedicas`
--
ALTER TABLE `citasmedicas`
  MODIFY `ID_Cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `ID_Medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citasmedicas`
--
ALTER TABLE `citasmedicas`
  ADD CONSTRAINT `citasmedicas_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuarios` (`ID_Usuario`),
  ADD CONSTRAINT `citasmedicas_ibfk_2` FOREIGN KEY (`ID_Medico`) REFERENCES `medicos` (`ID_Medico`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
