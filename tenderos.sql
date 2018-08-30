-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2018 a las 15:51:48
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pepsi-tenderos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', 3, 1531319316),
('super-admin', 1, 1534782944),
('super-admin', 2, 1531317601),
('usuario-normal', 4, 1531319492);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, 'Administrador del sistema', NULL, NULL, NULL, NULL),
('super-admin', 1, 'Super administrador del sistema', NULL, NULL, NULL, NULL),
('usuario-normal', 1, 'Usuario normal', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('super-admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_historial_compras`
--

CREATE TABLE `cat_historial_compras` (
  `id_compra` int(11) UNSIGNED NOT NULL,
  `fch_compra` datetime NOT NULL,
  `fch_registro` datetime NOT NULL,
  `txt_clave_tienda` varchar(50) NOT NULL,
  `id_tendero` int(11) UNSIGNED NOT NULL,
  `num_cajas_compradas` int(11) UNSIGNED NOT NULL,
  `b_habilitado` int(11) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cat_historial_compras`
--

INSERT INTO `cat_historial_compras` (`id_compra`, `fch_compra`, `fch_registro`, `txt_clave_tienda`, `id_tendero`, `num_cajas_compradas`, `b_habilitado`) VALUES
(1, '2018-08-21 00:00:00', '2018-08-22 00:00:00', '1t', 1, 5, 1),
(2, '2018-08-22 00:00:00', '2018-08-23 00:00:00', '2t', 2, 3, 1),
(3, '2018-08-23 00:00:00', '2018-08-24 00:00:00', '3t', 3, 6, 1),
(4, '2018-08-24 00:00:00', '2018-08-25 00:00:00', '4t', 4, 8, 1),
(5, '2018-08-25 00:00:00', '2018-08-26 00:00:00', '5t', 5, 2, 1),
(6, '2018-08-26 00:00:00', '2018-08-27 00:00:00', '6t', 6, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_premios`
--

CREATE TABLE `cat_premios` (
  `id_premio` int(11) UNSIGNED NOT NULL,
  `txt_nombre` varchar(50) NOT NULL,
  `num_puntuacion_min` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `num_puntuacion_premio` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `b_habilitado` int(11) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cat_premios`
--

INSERT INTO `cat_premios` (`id_premio`, `txt_nombre`, `num_puntuacion_min`, `num_puntuacion_premio`, `b_habilitado`) VALUES
(1, 'playera', 40, 120, 1),
(2, 'pantalon', 60, 140, 1),
(3, 'sudadera', 80, 180, 1),
(4, 'gorra', 100, 220, 1),
(5, 'navaja', 120, 240, 1),
(6, 'tennis', 140, 280, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_tenderos`
--

CREATE TABLE `cat_tenderos` (
  `id_tendero` int(11) UNSIGNED NOT NULL,
  `txt_clave_tienda` varchar(50) NOT NULL,
  `txt_nombre` varchar(50) NOT NULL,
  `txt_apellido_paterno` varchar(50) NOT NULL,
  `txt_apellido_materno` varchar(50) NOT NULL,
  `txt_telefono_movil` varchar(50) NOT NULL,
  `txt_telefono_casa` varchar(50) DEFAULT NULL,
  `txt_correo` varchar(50) DEFAULT NULL,
  `txt_password` varchar(50) NOT NULL,
  `num_puntos` int(11) UNSIGNED NOT NULL,
  `b_habilitado` int(11) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cat_tenderos`
--

INSERT INTO `cat_tenderos` (`id_tendero`, `txt_clave_tienda`, `txt_nombre`, `txt_apellido_paterno`, `txt_apellido_materno`, `txt_telefono_movil`, `txt_telefono_casa`, `txt_correo`, `txt_password`, `num_puntos`, `b_habilitado`) VALUES
(1, '1t', 'eduardo', 'mora', 'lopez', '550000000', '55123456', 'algo@2gom.com', '12345678', 33, 1),
(2, '2t', 'leticia', 'lopez', 'gonzalez', '550000000', '55123456', 'algo@2gom.com', '12345678', 20, 1),
(3, '3t', 'sofia', 'gutierrez', 'mora', '550000000', '55123456', 'algo@2gom.com', '12345678', 15, 1),
(4, '4t', 'lorena', 'montez', 'herrera', '550000000', '55123456', 'algo@2gom.com', '12345678', 40, 1),
(5, '5t', 'lili', 'herrera', 'mendez', '550000000', '55123456', 'algo@2gom.com', '12345678', 53, 1),
(6, '6t', 'lilit', 'gonzalez', 'juarez', '550000000', '55123456', 'algo@2gom.com', '12345678', 21, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_tiendas_registradas`
--

CREATE TABLE `cat_tiendas_registradas` (
  `id_tienda` int(11) NOT NULL,
  `txt_clave_tienda` varchar(50) NOT NULL,
  `b_habilitado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cat_tiendas_registradas`
--

INSERT INTO `cat_tiendas_registradas` (`id_tienda`, `txt_clave_tienda`, `b_habilitado`) VALUES
(1, '1t', 1),
(2, '2t', 1),
(3, '3t', 1),
(4, '4t', 1),
(5, '5t', 1),
(6, '6t', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_usuarios_cat_status_sesiones`
--

CREATE TABLE `mod_usuarios_cat_status_sesiones` (
  `id_status` int(10) UNSIGNED NOT NULL,
  `txt_nombre` varchar(50) NOT NULL COMMENT 'Estatus de la sesión',
  `txt_descripcion` varchar(500) DEFAULT NULL COMMENT 'Descripción del elemento',
  `b_habilitado` int(10) UNSIGNED NOT NULL DEFAULT '1' COMMENT 'Booleano para saber si el registro esta habilitado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_usuarios_cat_status_usuarios`
--

CREATE TABLE `mod_usuarios_cat_status_usuarios` (
  `id_status` int(10) UNSIGNED NOT NULL,
  `txt_nombre` varchar(50) NOT NULL COMMENT 'Estatus del usuario',
  `txt_descripcion` varchar(500) DEFAULT NULL COMMENT 'Descripción del elemento',
  `b_habilitado` int(10) UNSIGNED NOT NULL DEFAULT '1' COMMENT 'Booleano para saber si el registro esta habilitado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mod_usuarios_cat_status_usuarios`
--

INSERT INTO `mod_usuarios_cat_status_usuarios` (`id_status`, `txt_nombre`, `txt_descripcion`, `b_habilitado`) VALUES
(1, 'Pendiente', NULL, 1),
(2, 'Activo', NULL, 1),
(3, 'Bloqueado', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_usuarios_cat_tipos_usuarios`
--

CREATE TABLE `mod_usuarios_cat_tipos_usuarios` (
  `id_tipo_usuario` int(10) UNSIGNED NOT NULL,
  `txt_nombre` varchar(100) NOT NULL,
  `txt_descripcion` varchar(500) NOT NULL,
  `b_habiliado` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_usuarios_ent_sesiones`
--

CREATE TABLE `mod_usuarios_ent_sesiones` (
  `id_sesion` bigint(20) UNSIGNED NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL COMMENT 'Id del usuario que inicio sesión',
  `id_status` int(10) UNSIGNED NOT NULL DEFAULT '1' COMMENT 'Status de la sesión',
  `fch_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha en la que el usuario inicio sesión',
  `fch_logout` timestamp NULL DEFAULT NULL COMMENT 'Fecha en la que el usuario finalizo la sesión',
  `num_minutos_sesion` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Minutos que duraro la sesión del usuario',
  `txt_ip` varchar(32) NOT NULL COMMENT 'Ip de donde se conecto el usuario',
  `txt_ip_logout` varchar(32) DEFAULT NULL COMMENT 'Ip de donde el usuario se desconecto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_usuarios_ent_usuarios`
--

CREATE TABLE `mod_usuarios_ent_usuarios` (
  `id_usuario` int(11) UNSIGNED NOT NULL,
  `id_codigo` int(11) DEFAULT NULL,
  `txt_auth_item` varchar(64) NOT NULL,
  `txt_token` varchar(100) NOT NULL DEFAULT '0',
  `txt_imagen` varchar(200) DEFAULT NULL,
  `txt_username` varchar(255) NOT NULL,
  `txt_apellido_paterno` varchar(30) DEFAULT NULL,
  `txt_apellido_materno` varchar(30) DEFAULT NULL,
  `txt_auth_key` varchar(32) NOT NULL,
  `txt_password_hash` varchar(255) NOT NULL,
  `txt_password_reset_token` varchar(255) DEFAULT NULL,
  `txt_email` varchar(255) NOT NULL,
  `fch_creacion` timestamp NULL DEFAULT NULL,
  `fch_actualizacion` datetime DEFAULT NULL,
  `id_status` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mod_usuarios_ent_usuarios`
--

INSERT INTO `mod_usuarios_ent_usuarios` (`id_usuario`, `id_codigo`, `txt_auth_item`, `txt_token`, `txt_imagen`, `txt_username`, `txt_apellido_paterno`, `txt_apellido_materno`, `txt_auth_key`, `txt_password_hash`, `txt_password_reset_token`, `txt_email`, `fch_creacion`, `fch_actualizacion`, `id_status`) VALUES
(1, NULL, 'super-admin', 'usr7ca3eac6636e602cf7fdf8f65b89446c5a00b2c16e211', NULL, 'Admin', '-', '', 'k-ziUw4tgxv5ntE-63X2degFv_PKOEmX', '$2y$13$KMvq1bXb5pwruaH6sE84hufWjXQV.Vpt0U6Xk48OHD0FIs6ygQPRW', NULL, 'development@2gom.com.mx', '2017-11-08 10:06:42', NULL, 2),
(2, NULL, 'super-admin', 'usrba2aceda4773aa14552cb0966ef671ea5b46075b6ceea', NULL, 'alfonso', 'matias', NULL, 'l6EWAHYjSFomltnGSlNc4Ht64vXvQh2y', '$2y$13$qZtWXktF2pzZULIQY.D2NOaOT/qpGCITNQnMVxPRAKLwwZyMjfM/e', NULL, 'alfonso@2gom.com.mx', '2018-07-12 01:34:20', NULL, 2),
(3, NULL, 'admin', 'usrade99ffeddf5639cbf6926ae0ea9dd115b460dc2ba5f4', NULL, 'arturo', 'matias', NULL, 'dhxlKFdHTyXLQjGdcE0CVqPH0CJVn-JK', '$2y$13$eJ2172wLBzWiOGD/d7b1besDreuKTXoD8PRUjwbpyb7BuGCj5tOc2', NULL, 'mat8909_03@outlook.com', '2018-07-12 02:01:39', NULL, 2),
(4, NULL, 'usuario-normal', 'usr38523049bcb97e54c70834f3323218ca5b4614c36f190', NULL, '', '', NULL, 'F0VphXIPyNUwT_LYplydEZ51mgqvKuvJ', '$2y$13$NKzxA9tR73b8cZ.RXeRh/.5BiwjRlelZ3t94OBR3R8lmtngbn6PJC', NULL, '', '2018-07-12 02:31:32', NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_usuarios_ent_usuarios_activacion`
--

CREATE TABLE `mod_usuarios_ent_usuarios_activacion` (
  `id_usuario_activacion` int(10) UNSIGNED NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `txt_token` varchar(60) NOT NULL,
  `txt_ip_activacion` varchar(60) DEFAULT NULL,
  `fch_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fch_activacion` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mod_usuarios_ent_usuarios_activacion`
--

INSERT INTO `mod_usuarios_ent_usuarios_activacion` (`id_usuario_activacion`, `id_usuario`, `txt_token`, `txt_ip_activacion`, `fch_creacion`, `fch_activacion`) VALUES
(1, 7, 'actf3a153330f3d2c02b06de0c8d89268905a9b3486a19af', NULL, '2018-03-04 12:49:26', NULL),
(2, 8, 'actf3c89630b4d9e05e2b0212c1a666cd315a9b39c531975', NULL, '2018-03-04 13:11:49', NULL),
(3, 9, 'act44b58ae1e5baf9b2f354487c2ed637195a9b3a0697f42', NULL, '2018-03-04 13:12:54', NULL),
(4, 10, 'act19445cbfbe7239942c13c9b6e300b6c05a9b3a34a9282', '::1', '2018-03-04 13:13:40', '2018-03-04 13:14:01'),
(5, 12, 'actc59ccb791fba001b08fe6ad47b4f53515a9b45610d8b5', NULL, '2018-03-04 14:01:21', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_usuarios_ent_usuarios_cambio_pass`
--

CREATE TABLE `mod_usuarios_ent_usuarios_cambio_pass` (
  `id_usuario_cambio_pass` int(10) UNSIGNED NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `txt_token` varchar(60) NOT NULL COMMENT 'Token del registro',
  `txt_ip` varchar(20) NOT NULL COMMENT 'Ip del usuario donde pidio el cambio de pass',
  `txt_ip_cambio` varchar(20) DEFAULT NULL COMMENT 'Ip del usuario donde cambio el pass',
  `fch_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de creacion de registro',
  `fch_finalizacion` timestamp NULL DEFAULT NULL COMMENT 'Fecha de expiracion de la solicitud de cambio de pass',
  `fch_peticion_usada` timestamp NULL DEFAULT NULL COMMENT 'Fecha en la cual se utilizo la peticion',
  `b_usado` int(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Booleano para saber si el usuario ha usado la peticion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mod_usuarios_ent_usuarios_cambio_pass`
--

INSERT INTO `mod_usuarios_ent_usuarios_cambio_pass` (`id_usuario_cambio_pass`, `id_usuario`, `txt_token`, `txt_ip`, `txt_ip_cambio`, `fch_creacion`, `fch_finalizacion`, `fch_peticion_usada`, `b_usado`) VALUES
(1, 2, 'solde71352f59ba4ec38452ffdfd1ad3c1e5b46078869ebf', '::1', NULL, '2018-07-12 01:35:04', '2018-07-14 01:35:04', NULL, 0),
(2, 2, 'solca35e52d45b49ae86dd559d89308b4205b460ed97bc55', '::1', NULL, '2018-07-12 02:06:17', '2018-07-14 02:06:17', NULL, 0),
(3, 2, 'solc5017774c775d9a7a1860d99c0f0aedf5b460f1b1a5fa', '::1', NULL, '2018-07-12 02:07:23', '2018-07-14 02:07:23', NULL, 0),
(4, 2, 'solb29db243dd16a4cef9ccf90cef51b5f25b460f33b1a28', '::1', NULL, '2018-07-12 02:07:47', '2018-07-14 02:07:47', NULL, 0),
(5, 3, 'sol431a46cb5cc3d0bb7096a331fbf85bc25b46118b1f028', '::1', NULL, '2018-07-12 02:17:47', '2018-07-14 02:17:47', NULL, 0),
(6, 3, 'solef449b44f7d657f747ec7383b8db62bd5b461212a969e', '::1', NULL, '2018-07-12 02:20:02', '2018-07-14 02:20:02', NULL, 0),
(7, 3, 'solff5a13bb3e61d931ab48e50872f376265b4612b91c867', '::1', NULL, '2018-07-12 02:22:49', '2018-07-14 02:22:49', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_usuarios_ent_usuarios_facebook`
--

CREATE TABLE `mod_usuarios_ent_usuarios_facebook` (
  `id_usuario_facebook` int(10) UNSIGNED NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `id_facebook` bigint(20) NOT NULL,
  `txt_url_photo` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_premio_tendero`
--

CREATE TABLE `rel_premio_tendero` (
  `id_premio_tendero` int(11) UNSIGNED NOT NULL,
  `txt_clave_tienda` varchar(50) NOT NULL,
  `id_premio` int(11) UNSIGNED NOT NULL,
  `id_tendero` int(11) UNSIGNED NOT NULL,
  `b_visible` int(11) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `auth_assignment_user_id_idx` (`user_id`);

--
-- Indices de la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `type` (`type`);

--
-- Indices de la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indices de la tabla `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `cat_historial_compras`
--
ALTER TABLE `cat_historial_compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD UNIQUE KEY `txt_clave_tienda` (`txt_clave_tienda`),
  ADD KEY `FK_cat_historial_compras_cat_tenderos` (`id_tendero`);

--
-- Indices de la tabla `cat_premios`
--
ALTER TABLE `cat_premios`
  ADD PRIMARY KEY (`id_premio`);

--
-- Indices de la tabla `cat_tenderos`
--
ALTER TABLE `cat_tenderos`
  ADD PRIMARY KEY (`id_tendero`),
  ADD UNIQUE KEY `txt_clave_tienda` (`txt_clave_tienda`);

--
-- Indices de la tabla `cat_tiendas_registradas`
--
ALTER TABLE `cat_tiendas_registradas`
  ADD PRIMARY KEY (`id_tienda`),
  ADD UNIQUE KEY `txt_clave_tienda` (`txt_clave_tienda`);

--
-- Indices de la tabla `mod_usuarios_cat_status_sesiones`
--
ALTER TABLE `mod_usuarios_cat_status_sesiones`
  ADD PRIMARY KEY (`id_status`);

--
-- Indices de la tabla `mod_usuarios_cat_status_usuarios`
--
ALTER TABLE `mod_usuarios_cat_status_usuarios`
  ADD PRIMARY KEY (`id_status`);

--
-- Indices de la tabla `mod_usuarios_cat_tipos_usuarios`
--
ALTER TABLE `mod_usuarios_cat_tipos_usuarios`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indices de la tabla `mod_usuarios_ent_sesiones`
--
ALTER TABLE `mod_usuarios_ent_sesiones`
  ADD PRIMARY KEY (`id_sesion`),
  ADD KEY `FK_ent_sesiones_cat_status_sesiones` (`id_status`),
  ADD KEY `FK_ent_sesiones_ent_usuarios` (`id_usuario`);

--
-- Indices de la tabla `mod_usuarios_ent_usuarios`
--
ALTER TABLE `mod_usuarios_ent_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `txt_token` (`txt_token`),
  ADD UNIQUE KEY `password_reset_token` (`txt_password_reset_token`),
  ADD KEY `FK_ent_usuarios_cat_status_usuarios` (`id_status`),
  ADD KEY `FK_mod_usuarios_ent_usuarios_auth_item` (`txt_auth_item`);

--
-- Indices de la tabla `mod_usuarios_ent_usuarios_activacion`
--
ALTER TABLE `mod_usuarios_ent_usuarios_activacion`
  ADD PRIMARY KEY (`id_usuario_activacion`),
  ADD UNIQUE KEY `txt_token` (`txt_token`),
  ADD KEY `FK_ent_usuarios_activacion_ent_usuarios` (`id_usuario`);

--
-- Indices de la tabla `mod_usuarios_ent_usuarios_cambio_pass`
--
ALTER TABLE `mod_usuarios_ent_usuarios_cambio_pass`
  ADD PRIMARY KEY (`id_usuario_cambio_pass`),
  ADD KEY `FK_ent_usuarios_cambio_pass_ent_usuarios` (`id_usuario`);

--
-- Indices de la tabla `mod_usuarios_ent_usuarios_facebook`
--
ALTER TABLE `mod_usuarios_ent_usuarios_facebook`
  ADD PRIMARY KEY (`id_usuario_facebook`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`),
  ADD UNIQUE KEY `id_facebook` (`id_facebook`);

--
-- Indices de la tabla `rel_premio_tendero`
--
ALTER TABLE `rel_premio_tendero`
  ADD PRIMARY KEY (`id_premio_tendero`),
  ADD UNIQUE KEY `txt_clave_tienda` (`txt_clave_tienda`),
  ADD KEY `FK_rel_premio_tendero_cat_premios` (`id_premio`),
  ADD KEY `FK_rel_premio_tendero_cat_tenderos` (`id_tendero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cat_historial_compras`
--
ALTER TABLE `cat_historial_compras`
  MODIFY `id_compra` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cat_premios`
--
ALTER TABLE `cat_premios`
  MODIFY `id_premio` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cat_tenderos`
--
ALTER TABLE `cat_tenderos`
  MODIFY `id_tendero` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `mod_usuarios_cat_status_sesiones`
--
ALTER TABLE `mod_usuarios_cat_status_sesiones`
  MODIFY `id_status` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mod_usuarios_cat_status_usuarios`
--
ALTER TABLE `mod_usuarios_cat_status_usuarios`
  MODIFY `id_status` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `mod_usuarios_cat_tipos_usuarios`
--
ALTER TABLE `mod_usuarios_cat_tipos_usuarios`
  MODIFY `id_tipo_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mod_usuarios_ent_sesiones`
--
ALTER TABLE `mod_usuarios_ent_sesiones`
  MODIFY `id_sesion` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mod_usuarios_ent_usuarios`
--
ALTER TABLE `mod_usuarios_ent_usuarios`
  MODIFY `id_usuario` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `mod_usuarios_ent_usuarios_activacion`
--
ALTER TABLE `mod_usuarios_ent_usuarios_activacion`
  MODIFY `id_usuario_activacion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `mod_usuarios_ent_usuarios_cambio_pass`
--
ALTER TABLE `mod_usuarios_ent_usuarios_cambio_pass`
  MODIFY `id_usuario_cambio_pass` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `mod_usuarios_ent_usuarios_facebook`
--
ALTER TABLE `mod_usuarios_ent_usuarios_facebook`
  MODIFY `id_usuario_facebook` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rel_premio_tendero`
--
ALTER TABLE `rel_premio_tendero`
  MODIFY `id_premio_tendero` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `FK_auth_assignment_mod_usuarios_ent_usuarios` FOREIGN KEY (`user_id`) REFERENCES `mod_usuarios_ent_usuarios` (`id_usuario`),
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cat_historial_compras`
--
ALTER TABLE `cat_historial_compras`
  ADD CONSTRAINT `FK_cat_historial_compras_cat_tenderos` FOREIGN KEY (`id_tendero`) REFERENCES `cat_tenderos` (`id_tendero`),
  ADD CONSTRAINT `FK_cat_historial_compras_cat_tiendas_registradas` FOREIGN KEY (`txt_clave_tienda`) REFERENCES `cat_tiendas_registradas` (`txt_clave_tienda`);

--
-- Filtros para la tabla `cat_tenderos`
--
ALTER TABLE `cat_tenderos`
  ADD CONSTRAINT `FK_cat_tenderos_cat_tiendas_registradas` FOREIGN KEY (`txt_clave_tienda`) REFERENCES `cat_tiendas_registradas` (`txt_clave_tienda`);

--
-- Filtros para la tabla `mod_usuarios_ent_sesiones`
--
ALTER TABLE `mod_usuarios_ent_sesiones`
  ADD CONSTRAINT `FK_ent_sesiones_cat_status_sesiones` FOREIGN KEY (`id_status`) REFERENCES `mod_usuarios_cat_status_sesiones` (`id_status`),
  ADD CONSTRAINT `FK_ent_sesiones_ent_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `mod_usuarios_ent_usuarios` (`id_usuario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `mod_usuarios_ent_usuarios`
--
ALTER TABLE `mod_usuarios_ent_usuarios`
  ADD CONSTRAINT `FK_ent_usuarios_cat_status_usuarios` FOREIGN KEY (`id_status`) REFERENCES `mod_usuarios_cat_status_usuarios` (`id_status`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_mod_usuarios_ent_usuarios_auth_item` FOREIGN KEY (`txt_auth_item`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rel_premio_tendero`
--
ALTER TABLE `rel_premio_tendero`
  ADD CONSTRAINT `FK_rel_premio_tendero_cat_premios` FOREIGN KEY (`id_premio`) REFERENCES `cat_premios` (`id_premio`),
  ADD CONSTRAINT `FK_rel_premio_tendero_cat_tenderos` FOREIGN KEY (`id_tendero`) REFERENCES `cat_tenderos` (`id_tendero`),
  ADD CONSTRAINT `FK_rel_premio_tendero_cat_tiendas_registradas` FOREIGN KEY (`txt_clave_tienda`) REFERENCES `cat_tiendas_registradas` (`txt_clave_tienda`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
