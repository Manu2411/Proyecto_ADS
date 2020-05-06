-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 05-05-2020 a las 20:13:15
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sirama`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiarias`
--

DROP TABLE IF EXISTS `beneficiarias`;
CREATE TABLE IF NOT EXISTS `beneficiarias` (
  `Id_Bene` int(5) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Opinion` varchar(1500) NOT NULL,
  `Fecha` date NOT NULL,
  `Estado` int(5) NOT NULL,
  `ubicacion_bene` int(5) NOT NULL,
  `Foto` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_Bene`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `beneficiarias`
--

INSERT INTO `beneficiarias` (`Id_Bene`, `Nombre`, `Opinion`, `Fecha`, `Estado`, `ubicacion_bene`, `Foto`) VALUES
(1, 'Gabriela Montes', 'Haber hecho el curso de cocina en Siramá me ha ayudado mucho porque ahora poseo diferentes aptitudes que puedo poner en práctica en el campo laboral.', '2020-05-04', 1, 1, 'Benef.png'),
(2, 'Irma Hernández', 'Haber hecho el curso de cocina en Siramá me ha ayudado mucho porque ahora poseo diferentes aptitudes que puedo poner en práctica en el campo laboral.', '2020-05-05', 1, 2, 'Benef.png'),
(3, 'Victoria Sura', 'Haber hecho el curso de cocina en Siramá me ha ayudado mucho porque ahora poseo diferentes aptitudes que puedo poner en práctica en el campo laboral.', '2020-05-05', 1, 3, 'Benef.png'),
(4, 'Karla Martínez', 'Haber hecho el curso de cocina en Siramá me ha ayudado mucho porque ahora poseo diferentes aptitudes que puedo poner en práctica en el campo laboral.', '2020-05-05', 1, 4, 'Benef.png'),
(5, 'Rosa Molina', 'Haber hecho el curso de cocina en Siramá me ha ayudado mucho porque ahora poseo diferentes aptitudes que puedo poner en práctica en el campo laboral.', '2020-05-05', 1, 5, 'Benef.png'),
(6, 'Erika Luna', 'Haber hecho el curso de cocina en Siramá me ha ayudado mucho porque ahora poseo diferentes aptitudes que puedo poner en práctica en el campo laboral.', '2020-05-05', 1, 6, 'Benef.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `Id_Curso` int(5) NOT NULL,
  `Nombre` varchar(70) NOT NULL,
  `Descripcion` varchar(1500) NOT NULL,
  `Horario` varchar(75) NOT NULL,
  `Precio` varchar(15) NOT NULL,
  `Estado` char(5) NOT NULL,
  `Duracion` varchar(20) NOT NULL,
  `Fecha` date NOT NULL,
  `lugar_curso` int(5) NOT NULL,
  `Imagen` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_Curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`Id_Curso`, `Nombre`, `Descripcion`, `Horario`, `Precio`, `Estado`, `Duracion`, `Fecha`, `lugar_curso`, `Imagen`) VALUES
(1, 'COCINA', 'Aprenderas a preparar diversos platillos para deleitar a las personas más importantes de tu familia.', '8:00 am - 1:00 pm', '25', '1', '3 Meses', '2020-04-30', 1, 'Cocina.jpg'),
(2, 'POSTRES', 'Aprenderas a hacer los mejores postres que jamas habías pensado en prepara.', '8:00 am - 12:00 pm', '45', '1', '4 Meses', '2020-04-30', 2, 'Postres.jpg'),
(3, 'PANADERÍA', 'Conoce el proceso de la elaboración del pan que día a día compras para acompañar tus alimentos.', '8:00 am - 12:00 pm', '35', '1', '2 Meses', '2020-04-30', 3, 'panaderia.png'),
(4, 'ARTESANIAS', 'Crea fabulosos diseños con materiales que para algunos son', '10:00 am - 12:00 pm', '20', '1', '2 Meses', '2020-04-30', 4, 'Artesanias.jpg'),
(5, 'BELLEZA', 'Aprende la forma de ayudar a tus amigas y conocidas en mejorar su apariencia, para cualquier evento que tengan.', '8:00 am - 12:00 pm', '55', '1', '4 Meses', '2020-04-30', 5, 'Belleza.jpg'),
(6, 'MANUALIDADES', 'Adquiere habilidades para la elaboración de cualquier tipo de idea que se te venga a la cabeza.', '8:00 am - 11:00 pm', '35', '1', '2 Meses', '2020-04-30', 6, 'Manualidades.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enunciados`
--

DROP TABLE IF EXISTS `enunciados`;
CREATE TABLE IF NOT EXISTS `enunciados` (
  `Id_Enun` int(5) NOT NULL,
  `Titulo` varchar(150) NOT NULL,
  `Descripcion` varchar(1500) NOT NULL,
  `Fecha` date NOT NULL,
  `Banner` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_Enun`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `enunciados`
--

INSERT INTO `enunciados` (`Id_Enun`, `Titulo`, `Descripcion`, `Fecha`, `Banner`) VALUES
(1, 'ACOMPAÑAMOS A LAS MUJERES PASO A PASO', 'En una educación que cambia vidas, para una formación integral y así forjar un futuro con nuevas aspiraciones.', '2020-04-30', '1.jpg'),
(2, 'CURSOS ACTIVOS', 'Impartimos una variedad de cursos para que tu elijas cual te conviene y te gusta más.', '2020-03-16', ''),
(3, 'AYUDANDO A LA FORMACIÓN INTEGRAL DE LAS MUJERES SALVADOREÑAS', 'Desde nuestros inicios hemos brindado a las mujeres salvadoreñas nuestro apoyo para que puedan obtener una formación integral y así ser una persona de bien en la sociedad.', '2020-04-29', ''),
(4, 'SOBRE NOSOTROS', 'Apostamos a que la formación integral de las mujeres pueda propiciar de forma directa un cambio en futuras generaciones ya que al apoyar a las madres permitimos que más niños y niñas puedan tener una mejor calidad de vida a futuro.', '2020-03-16', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `Id_Noti` int(5) NOT NULL,
  `Titulo` varchar(150) NOT NULL,
  `Descripcion` varchar(450) NOT NULL,
  `Contenido` varchar(1500) NOT NULL,
  `Estado` char(5) NOT NULL,
  `Fecha` date NOT NULL,
  `lugar_noti` int(5) NOT NULL,
  PRIMARY KEY (`Id_Noti`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`Id_Noti`, `Titulo`, `Descripcion`, `Contenido`, `Estado`, `Fecha`, `lugar_noti`) VALUES
(1, 'Nuevos Cursos', 'Se vienen cosas muy interesantes en estos días...', 'Próximamente se aperturarán nuevos cursos para que toda aquella mujer que este interesada pueda inscribirse lo más pronto posible.', '1', '2020-04-04', 1),
(2, 'Próximas graduaciones', 'Como siempre para el mes de mayo nos vestimos de gala..', 'En el mes de mayo se llevarán a cabo las graduaciones de más de 150 mujeres que estaran capacitadas para poder desempeñar lo que aprendieron en los cursos que se les impartieron', '1', '2020-04-29', 2),
(3, 'Apoyo Internacional', 'En días recientes se logró un importante acuerdo...', 'Desde hace varios meses los directores de la Fundacion Siramá venían en pláticas con instituciones importantes para lograr un apoyo de parte estas y así seguir apoyando a las mujeres salvadoreñas.', '1', '2020-04-26', 3),
(4, 'Sorpresas en Camino', 'Se aproximan muchas sorpresas, pendientes...', 'Como Siramá queremos sorprender a nuestras beneficiarias con muchas sorpresas que les beneficiara tanto en lo económico como en lo laboral, deben de mantenerse pendientes de nuestro sitio web y nuestras redes sociales para mayor información.', '0', '2020-04-29', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id_Usu` char(5) NOT NULL,
  `Nombres` varchar(35) NOT NULL,
  `Apellidos` varchar(35) NOT NULL,
  `Cargo` varchar(50) NOT NULL,
  `Clave` char(32) NOT NULL,
  `Usuario` varchar(40) NOT NULL,
  PRIMARY KEY (`Id_Usu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_Usu`, `Nombres`, `Apellidos`, `Cargo`, `Clave`, `Usuario`) VALUES
('AD01', 'Manuel', 'Hurtado', 'Jefe Sistemas', '12345', 'Admin'),
('AD02', 'Alex', 'Mata', 'Asistente', '54321', 'Alex');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
