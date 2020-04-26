-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2015 a las 17:12:15
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Sirama`
--
CREATE DATABASE IF NOT EXISTS `Sirama` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Sirama`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Noticias`
--

CREATE TABLE IF NOT EXISTS `Noticias` (
  `Id_Noti` int(5) NOT NULL,
  `Titulo` varchar(150) NOT NULL,
  `Descripcion` varchar(450) NOT NULL,
  `Contenido` varchar(1500) NOT NULL,
  `Estado` char(5) NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`Id_Noti`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Noticias`
--

INSERT INTO `Noticias` (`Id_Noti`, `Titulo`, `Descripcion`, `Contenido`, `Estado`, `Fecha`) VALUES
(1, 'Nuevos Cursos', 'Se vienen cosas muy interesantes en estos días...', 'Próximamente se aperturarán nuevos cursos para que toda aquella mujer que este interesada pueda inscribirse lo más pronto posible.', '1', '2020-04-04'),
(2, 'Próximas graduaciones', 'Como siempre para el mes de mayo nos vestimos de gala..', 'En el mes de mayo se llevarán a cabo las graduaciones de más de 150 mujeres que estaran capacitadas para poder desempeñar lo que aprendieron en los cursos que se les impartieron', '1', '2020-04-07'),
(3, 'Apoyo Internacional', 'En días recientes se logró un importante acuerdo...', 'Desde hace varios meses los directores de la Fundacion Siramá venían en pláticas con instituciones importantes para lograr un apoyo de parte estas y así seguir apoyando a las mujeres salvadoreñas.', '1', '2020-04-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Enunciados`
--

CREATE TABLE IF NOT EXISTS `Enunciados` (
  `Id_Enun` int(5) NOT NULL,
  `Titulo` varchar(150) NOT NULL,
  `Descripcion` Varchar(1500) NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`Id_Enun`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detallepedido`
--

INSERT INTO `Enunciados` (`Id_Enun`, `Titulo`, `Descripcion`, `Fecha`) VALUES
(1, 'ACOMPAÑAMOS A LAS MUJERES PASO A PASO', 'En una educación que cambia vidas, para una formación integral y así forjar un futuro con nuevas aspiraciones.', '2020-03-16'),
(2, 'CURSOS ACTIVOS', 'Impartimos una variedad de cursos para que tu elijas cual te conviene y te gusta más.', '2020-03-16'),
(3, 'AYUDANDO A LA FORMACIÓN INTEGRAL DE LAS MUJERES SALVADOREÑAS', 'Desde nuestros inicios hemos brindado a las mujeres salvadoreñas nuestro apoyo para que puedan obtener una formación integral y así ser una persona de bien en la sociedad.', '2020-03-16'),
(4, 'SOBRE NOSOTROS', 'Nos dedicamos a acompañar a mujeres de escasos recursos y brindarles una oportunidad de crecimiento mediante la capacitación técnica.Apostamos a que la formación integral de las mujeres pueda propiciar de forma directa un cambio en futuras generaciones , ya que, al apoyar a las madres, permitimos que más niños y niñas puedan tener una mejor calidad de vida a futuro!', '2020-03-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cursos`
--

CREATE TABLE IF NOT EXISTS `Cursos` (
  `Id_Curso` int(5) NOT NULL,
  `Nombre` varchar(70) NOT NULL,
  `Descripcion` varchar(1500) NOT NULL,
  `Horario` varchar(75) NOT NULL,
  `Precio` varchar(15) NOT NULL,
  `Estado` char(5) NOT NULL,
  `Duracion` varchar(20) NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`Id_Curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Cursos`
--

INSERT INTO `Cursos` (`Id_Curso`, `Nombre`, `Descripcion`, `Horario`, `Precio`, `Estado`, `Duracion`, `Fecha`) VALUES
(1, 'COCINA', 'Aprenderas a preparar diversos platillos para deleitar a las personas más importantes de tu familia.', 'Horario: 8:00 am - 1:00 pm', '$25', '1', '3 Meses', '2020-02-15'),
(2, 'POSTRES', 'Aprenderas a hacer los mejores postres que jamas habías pensado en prepara.', 'Horario: 8:00 am - 12:00 pm', '$45', '1', '4 Meses', '2020-01-22'),
(3, 'PANADERÍA', 'Conoce el proceso de la elaboración del pan que día a día compras para acompañar tus alimentos.', 'Horario: 8:00 am - 12:00 pm', '$35', '1', '2 Meses', '2020-02-17'),
(4, 'ARTESANIAS', 'Crea fabulosos diseños con materiales que para algunos son "basura" y deja impactadas a todas las personas que vean tu trabajo.', 'Horario: 10:00 am - 12:00 pm', '$20', '1', '2 Meses', '2020-02-27'),
(5, 'BELLEZA', 'Aprende la forma de ayudar a tus amigas y conocidas en mejorar su apariencia, para cualquier evento que tengan.', 'Horario: 8:00 am - 12:00 pm', '$55', '1', '4 Meses', '2020-02-14'),
(6, 'MANUALIDADES', 'Adquiere habilidades para la elaboración de cualquier tipo de idea que se te venga a la cabeza.', 'Horario: 8:00 am - 11:00 pm', '$35', '1', '2 Meses', '2020-02-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Beneficiarias`
--

CREATE TABLE IF NOT EXISTS `Beneficiarias` (
  `Id_Bene` int(5) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Opinion` varchar(1500) NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`Id_Bene`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Beneficiarias`
--

INSERT INTO `Beneficiarias` (`Id_Bene`, `Nombre`, `Opinion`, `Fecha`) VALUES
(1, 'Gabriela Montes', 'Haber hecho el curso de cocina en Siramá me ha ayudado mucho porque ahora poseo diferentes aptitudes que puedo poner en práctica en el campo laboral.', '2020-03-28');

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `Id_Usu` char(5) NOT NULL,
  `Nombres` varchar(35) NOT NULL,
  `Apellidos` varchar(35) NOT NULL,
  `Cargo` varchar(50) NOT NULL,
  `Clave` char(32) NOT NULL,
  `Usuario` varchar(40) NOT NULL,
  PRIMARY KEY (`Id_Usu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`Id_Usu`, `Nombres`, `Apellidos`, `Cargo`, `Clave`, `Usuario`) VALUES
('AD01', 'Manuel', 'Hurtado', 'Jefe Sistemas', '12345', 'Admin'),
('AD02', 'Alex', 'Mata', 'Asistente', '54321', 'Alex');

-- --------------------------------------------------------


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
