--
-- Volcado de datos para la tabla `Perfil`
--
INSERT INTO `Perfil` (`idPerfil`, `descripcion`, `activo`, `fechaModificacion`) VALUES
(1, 'Default', 1, '2020-07-22'),
(2, 'Administrador', 1, '2020-07-22'),
(3, 'Director', 1, '2020-07-23'),
(4, 'Docente', 1, '2020-07-23'),
(5, 'Tutor', 1, '2020-07-23');

--
-- Volcado de datos para la tabla `Menu`
--
INSERT INTO `Menu` (`idMenu`, `idMenuPadre`, `subNivel`, `selDefault`, `descripcionCorta`, `descripcionLarga`, `url`, `activo`, `fechaModificacion`) VALUES
(1, 0, 0, 'active', 'Inicio', 'Inicio', 'main', 1, '2020-07-22'),
(2, 0, 1, '', 'Conocenos', 'Conocenos', NULL, 1, '2020-07-22'),
(3, 2, 0, '', 'Historia', 'Historia', 'historia', 1, '2020-07-22'),
(4, 2, 0, '', 'Directorio', 'Directorio', 'directorio', 1, '2020-07-22'),
(5, 0, 1, '', 'Alumno', 'Alumno', NULL, 0, '2020-07-22'),
(6, 5, 0, '', 'Reglamento', 'Reglamento', 'reglamento', 1, '2020-07-22'),
(7, 0, 1, '', 'Asociación PF', 'Asociación PF', NULL, 1, '2020-07-22'),
(8, 7, 0, '', 'Organigrama', 'Organigrama', 'organigrama', 1, '2020-07-22'),
(9, 7, 0, '', 'Eventos', 'Eventos', 'eventos', 1, '2020-07-22'),
(10, 0, 0, '', 'Galeria', 'Galeria', 'galeria', 1, '2020-07-22'),
(11, 0, 0, '', 'Contacto', 'Contacto', 'contacto', 1, '2020-07-22'),
(12, 0, 1, '', 'Usuarios', 'Usuarios', NULL, 1, '2020-07-22'),
(13, 12, 0, '', 'Nuevo', 'Nuevo usuario', 'nuevousuario', 1, '2020-07-22'),
(14, 2, 0, '', 'Misión', 'Misión', 'mision', 1, '2020-07-22'),
(15, 4, 0, '', 'Dirección', 'Dirección', 'direccion', 0, '2020-07-22');

--
-- Volcado de datos para la tabla `PerfilMenu`
--
INSERT INTO `PerfilMenu` (`id`, `idPerfil`, `idMenu`, `activo`, `fechaModificacion`) VALUES
(1, 1, 1, 1, '2020-07-22'),
(2, 1, 2, 1, '2020-07-22'),
(3, 1, 3, 1, '2020-07-22'),
(4, 1, 4, 1, '2020-07-22'),
(5, 1, 5, 1, '2020-07-22'),
(6, 1, 6, 1, '2020-07-22'),
(7, 1, 7, 1, '2020-07-22'),
(8, 1, 8, 1, '2020-07-22'),
(9, 1, 9, 1, '2020-07-22'),
(10, 1, 10, 1, '2020-07-22'),
(11, 1, 11, 1, '2020-07-22'),
(12, 2, 1, 1, '2020-07-22'),
(13, 2, 2, 0, '2020-07-22'),
(14, 2, 3, 1, '2020-07-22'),
(15, 2, 4, 1, '2020-07-22'),
(16, 2, 5, 1, '2020-07-22'),
(17, 2, 6, 1, '2020-07-22'),
(18, 2, 7, 1, '2020-07-22'),
(19, 2, 8, 1, '2020-07-22'),
(20, 2, 9, 1, '2020-07-22'),
(21, 2, 10, 1, '2020-07-22'),
(22, 2, 11, 1, '2020-07-22'),
(23, 2, 12, 1, '2020-07-22'),
(24, 2, 13, 1, '2020-07-22'),
(25, 1, 14, 1, '2020-07-22'),
(41, 1, 15, 1, '2020-07-22');

--
-- Volcado de datos para la tabla `Usuario` 
-- para contrasenia aplicar el MD5 5e0c550ebc5db9f1c5ebae8e30ef722e=morales
--
INSERT INTO `Usuario` (`idUsuario`, `usuario`, `contrasenia`, `nombre`, `ap_Paterno`, `ap_Materno`, `activo`, `resetContrasenia`, `idPerfil`, `fechaModificacion`) VALUES
(1, 'morales', '5e0c550ebc5db9f1c5ebae8e30ef722e', 'Angel', 'Morales', 'Martinez', 1, 1, 2, '2020-07-31');
