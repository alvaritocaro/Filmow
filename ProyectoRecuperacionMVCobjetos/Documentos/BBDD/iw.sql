-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2021 a las 12:46:18
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `iw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `idPelicula` int(100) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `fechaEstreno` varchar(40) NOT NULL,
  `Duracion` int(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `trailer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`idPelicula`, `titulo`, `fechaEstreno`, `Duracion`, `descripcion`, `imagen`, `trailer`) VALUES
(1, 'Iron Man', '30 de abril de 2008', 126, 'No hay óxido en este bebé. Iron Man lanza una nota alta y prácticamente desafía a la competencia a medir. Han pasado años desde que un superhéroe de la película fue tan feroz y gracioso. Todos los elogios al dínamo de actuación Robert Downey Jr., quien aporta tanto jugo creativo a la fiesta que Iron Man logra el despegue instantáneo. Incluso si sabes muy bien sobre el personaje que Marvel construyó en 1963, Downey y el director Jon Favreau -sólo el swinger adecuado para el trabajo- te ayudarán a acelerar pronto.\r\n\r\nEs difícil de creer que Iron Man y su alter ego, Tony Stark, nunca hayan sido explotados como sujetos de películas antes. ¿Podría ser que Stark, el fabricante de armas de destrucción masiva borracho, libidinoso y de derechas, asustado menos dispuesto a arriesgarse que Downey? Atorníllenlos. Puede sentir la euforia en la narración y actualización de este origintory, con un pulido de guiones nada menos que por Mark Fergus y Hawk Ostby, los escritores detrás del brillante Child', 'ironman.webp', 'https://www.youtube.com/embed/PmAqcdk4d48'),
(2, 'Project X', '8 de junio de 2012', 94, 'Una gran pelicula adolescente,dios,todavia estoy alucinando,no por que sea tan tan buena,si no por el locuron de pelicula que es.Dios ,es que los tíos estan locos,la verdad es que me lo he pasado bien,me he divertido,y.. ¡Dios que locura! .La camara al hombro cumple su funcion ,te mete en la fiesta y de verdad te dan ganas de meterte de verdad pero tu yo inteleginte y no hasta arriba de extasis te dice que te largues de esa fiesta cuanto antes.La musica esta bien,aunque podría haber estado mejor.Lo que pretende lo ha conseguido,ser una pelicula de adolescentes para adolescentes que solo servirá para entretener y con personajes que no llegan al corazón y dijo esto porque es posible,hacer una pelicula adolescente con locuras y tener un prota que llegue,no mucho pero algo;claro esta que el personaje y pelicula que se me viene a la cabeza es Jim y la pelicula American Pie,,la mejor peli adolescente.', 'projectx.webp', 'https://www.youtube.com/embed/fMJ4IBnU0Ks'),
(3, 'El único superviviente', '1 de enero de 2014', 121, 'Película bélica rodada por Peter Berg (“Battleship”) con el protagonismo de un destacamento militar estadounidense en Afganistán.\r\nEn principio su enfoque tiene mediano interés al crear, no con pocos lugares comunes en el género en torno a instrucción y camaradería, una tensión más psicológica que física a través de un equilibrio estético con uso del gran angular y un moderado estilo docudrama.\r\n\r\nel-unico-superviviente-fotosUna lástima que el progreso de la historia no sea más que una situación extendida de énfasis-homenaje patriotero con redundante acción de combate a lo Rambo, perspectiva maniquea y personajes en grupo sin entidad fácilmente intercambiables, algo que anula su propósito efectista en la exposición emocional y destino de sus caracteres', 'elunicosuperviviente.webp', 'https://www.youtube.com/embed/4OcXtpLjvVY');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`idPelicula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
