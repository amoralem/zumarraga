----------------------------------------------
-- Host: localhost    Database: zumarragadb
-- Ver: 1.0						--gue55me
----------------------------------------------
--
-- Database structure for database 'zumarragadb'
--
CREATE DATABASE zumarragadb;
USE zumarragadb;

--
-- Table structure for table `Perfil`
--
CREATE TABLE `Perfil` (
  `idPerfil` int(3) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `fechaModificacion` date NOT NULL,  
  PRIMARY KEY (`idPerfil`)  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

--
-- Table structure for table `Menu`
--
CREATE TABLE `Menu` (
  `idMenu` int(3) NOT NULL,
  `idMenuPadre` int(3) DEFAULT NULL,
  `subNivel` int(3) NOT NULL,
  `selDefault` varchar(50) NOT NULL,
  `descripcionCorta` varchar(20) NOT NULL,
  `descripcionLarga` varchar(50) NOT NULL,
  `url` varchar(150) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL,
  `fechaModificacion` date NOT NULL,
  PRIMARY KEY (`idMenu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `PerfilMenu`
--
CREATE TABLE `PerfilMenu` (
  `id` int(3) NOT NULL,
  `idPerfil` int(3) NOT NULL,
  `idMenu` int(3) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `fechaModificacion` date NOT NULL,
  KEY `fk_PerfilMenu_Perfil1_idx` (`idPerfil`),
  CONSTRAINT `fk_PerfilMenu_Perfil1_idx` FOREIGN KEY (`idPerfil`) REFERENCES `Perfil` (`idPerfil`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  KEY `fk_PerfilMenu_Menu1_idx` (`idMenu`),
  CONSTRAINT `fk_PerfilMenu_Menu1_idx` FOREIGN KEY (`idMenu`) REFERENCES `Menu` (`idMenu`) ON DELETE NO ACTION ON UPDATE NO ACTION  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Estructura de tabla para la tabla `Usuario`
--
CREATE TABLE `Usuario` (
  `idUsuario` int(10) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasenia` varchar(150) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ap_Paterno` varchar(50) DEFAULT NULL,
  `ap_Materno` varchar(50) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL,
  `resetContrasenia` tinyint(1) NOT NULL,
  `idPerfil` int(3) NOT NULL,
  `fechaModificacion` date NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

