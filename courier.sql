-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-12-2019 a las 23:03:41
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `courier`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apellidos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Celular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DNI` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ciudad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nota_adicional` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `Nombres`, `Apellidos`, `Celular`, `correo`, `DNI`, `Ciudad`, `Direccion`, `Nota_adicional`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Alvaro Anderson', 'Morales Caballero', '961989982', 'almase_123@gmail.com', '76471166', 'Tacna', 'Las americas M.w Lt.11', 'Estudiante de la UNJBG', '2019-12-20 00:31:00', '2019-12-20 00:31:00', NULL),
(2, 'Efrain alex', 'Morales caballero', '987786562', 'efrain@efrain.com', '8767356', 'Tacna', 'Las amaricas Mw Lt.11', 'Realiza entregas constantes', '2019-12-20 20:10:57', '2019-12-20 20:10:57', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envios`
--

CREATE TABLE `envios` (
  `id` int(10) UNSIGNED NOT NULL,
  `trasportista_id` int(10) UNSIGNED NOT NULL,
  `paquete_id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `envios`
--

INSERT INTO `envios` (`id`, `trasportista_id`, `paquete_id`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, ',.mkljkl', '2019-12-20 09:31:27', '2019-12-20 09:31:27', NULL),
(2, 2, 2, 'urgente', '2019-12-20 20:17:39', '2019-12-20 20:35:08', '2019-12-20 20:35:08'),
(3, 2, 2, 'hjhjjkkjkj', '2019-12-20 20:35:34', '2019-12-20 20:35:34', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_19_180502_create_clientes_table', 1),
(5, '2019_12_19_181023_create_transportistas_table', 2),
(6, '2019_12_19_192240_create_paquetes_table', 3),
(7, '2019_12_19_192815_create_envios_table', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE `paquetes` (
  `id` int(10) UNSIGNED NOT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Codigo_paquete` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `fecha_resivido` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_entrega` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Novedades` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Total_neto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_IGV` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nombre_destino` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ciudad_destino` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_destino` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular_destino` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`id`, `estado`, `Codigo_paquete`, `cliente_id`, `fecha_resivido`, `fecha_entrega`, `Descripcion`, `Novedades`, `Total_neto`, `total_IGV`, `Nombre_destino`, `Ciudad_destino`, `direccion_destino`, `celular_destino`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'entregado', 'hjgytiu', 1, '2019-12-19', '2019-12-25', 'kjhkjhkj', 'nhbkjhkkl', '45', '45.3', 'jkhiull kjhkjhkj', 'Tacna', 'ljkhkgjkj', '963258741', '2019-12-20 09:26:05', '2019-12-20 09:26:05', NULL),
(2, 'inicio', '1DR2', 2, '2019-12-20', '2019-12-27', 'Este paquete es sumamente fragil.\r\nContiene un peso de 12Kilos', 'Envio con mucha urgencia', '34', '36.7', 'Rosa caballlero quispe', 'Cajamarca', 'las puntas rojas calle 3 numero 456', '963258789', '2019-12-20 20:16:45', '2019-12-20 20:16:45', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transportistas`
--

CREATE TABLE `transportistas` (
  `id` int(10) UNSIGNED NOT NULL,
  `DNI` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apellidos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Celular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nota_adicional` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `transportistas`
--

INSERT INTO `transportistas` (`id`, `DNI`, `Nombres`, `Apellidos`, `Celular`, `direccion`, `Correo`, `Nota_adicional`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '78394897', 'pedro poper', 'cballero coaquira', '987374897', 'Las buganbilas Mw', 'pedro@pedro.pe', 'Es un buen trasportista de localida nacional', '2019-12-20 00:32:10', '2019-12-20 00:32:10', NULL),
(2, '7635789', 'Pablo elso', 'Copares Chata', '987654567', 'Las magnolias M.w Lt 11', 'pablo@courier.com', 'Es un trabajaro muy capas el numero de las entregas es inmediata', '2019-12-20 20:13:14', '2019-12-20 20:13:14', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$KafPCnHMabDqzyRe4XOaa.JlfoSMDqZge/3cI55i0dASqxMhSAcOS', NULL, '2019-12-19 23:11:21', '2019-12-19 23:11:21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `envios`
--
ALTER TABLE `envios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `envios_trasportista_id_foreign` (`trasportista_id`),
  ADD KEY `envios_paquete_id_foreign` (`paquete_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paquetes_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `transportistas`
--
ALTER TABLE `transportistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `envios`
--
ALTER TABLE `envios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `transportistas`
--
ALTER TABLE `transportistas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `envios`
--
ALTER TABLE `envios`
  ADD CONSTRAINT `envios_paquete_id_foreign` FOREIGN KEY (`paquete_id`) REFERENCES `paquetes` (`id`),
  ADD CONSTRAINT `envios_trasportista_id_foreign` FOREIGN KEY (`trasportista_id`) REFERENCES `transportistas` (`id`);

--
-- Filtros para la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD CONSTRAINT `paquetes_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
