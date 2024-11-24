use pasalibrosdb;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'administrador', 'web', '2024-11-20 16:50:16', '2024-11-20 16:50:16'),
(2, 'usuario', 'web', '2024-11-20 16:50:16', '2024-11-20 16:50:16'),
(3, 'usuarioRoles', 'web', '2024-11-20 12:49:06', '2024-11-20 12:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(6, 3),
(7, 3),
(8, 3),
(9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `solicitud_intercambio`
--

CREATE TABLE `solicitud_intercambio` (
  `id_solicitud` int(11) NOT NULL,
  `id_usuario_ofertante` int(11) NOT NULL,
  `id_estado_solicitud` int(11) NOT NULL,
  `descripcion_solicitud` varchar(200) DEFAULT NULL,
  `cant_libros` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id_tag` int(11) NOT NULL,
  `nombre_tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_estado_cuenta` int(11) DEFAULT 1,
  `nombre_usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `profile_photo` blob DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `google_id` varchar(255) DEFAULT NULL,
  `google_token` varchar(255) DEFAULT NULL,
  `google_refresh_token` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `fecha_suspension` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `condicion_libro`
--
ALTER TABLE `condicion_libro`
  ADD PRIMARY KEY (`id_condicion_libro`);

--
-- Indexes for table `critica`
--
ALTER TABLE `critica`
  ADD PRIMARY KEY (`id_critica`),
  ADD KEY `usuario_critica_fk` (`id_usuario`),
  ADD KEY `publicacion_critica_fk` (`id_publicacion`);

--
-- Indexes for table `critica_pregunta`
--
ALTER TABLE `critica_pregunta`
  ADD PRIMARY KEY (`id_critica_pregunta`),
  ADD KEY `critica_critica_pregunta_fk` (`id_critica`),
  ADD KEY `pregunta_critica_pregunta_fk` (`id_pregunta`);

--
-- Indexes for table `estado_cuenta`
--
ALTER TABLE `estado_cuenta`
  ADD PRIMARY KEY (`id_estado_cuenta`);

--
-- Indexes for table `estado_publicacion`
--
ALTER TABLE `estado_publicacion`
  ADD PRIMARY KEY (`id_estado_publicacion`);

--
-- Indexes for table `estado_solicitud`
--
ALTER TABLE `estado_solicitud`
  ADD PRIMARY KEY (`id_estado_solicitud`);

--
-- Indexes for table `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `usuario_libro_fk` (`id_usuario`),
  ADD KEY `condicion_libro_fk` (`id_condicion_libro`);

--
-- Indexes for table `libro_intercambio`
--
ALTER TABLE `libro_intercambio`
  ADD PRIMARY KEY (`id_libro_intercambio`),
  ADD KEY `propietario_intercambio_fk` (`id_libro_propietario`),
  ADD KEY `ofertante_intercambio_fk` (`id_libro_ofertante`),
  ADD KEY `solicitud_libro_intercambio_fk` (`id_solicitud`);

--
-- Indexes for table `libro_tag`
--
ALTER TABLE `libro_tag`
  ADD PRIMARY KEY (`id_libro_tag`),
  ADD KEY `libro_tag_fk` (`id_libro`),
  ADD KEY `tag_libro_fk` (`id_tag`);

--
-- Indexes for table `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id_localidad`),
  ADD KEY `provincia_localidad` (`id_provincia`);

--
-- Indexes for table `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id_mensaje`),
  ADD KEY `usuario_emisor_mensaje_fk` (`id_usuario_emisor`),
  ADD KEY `usuario_receptor_fk` (`id_usuario_receptor`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `pregunta_cuestionario`
--
ALTER TABLE `pregunta_cuestionario`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indexes for table `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id_provincia`);

--
-- Indexes for table `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id_publicacion`),
  ADD KEY `estado_publicacion_fk` (`id_estado_publicacion`),
  ADD KEY `libro_publicacion_fk` (`id_libro`),
  ADD KEY `localidad_publicacion_fk` (`id_localidad`);

--
-- Indexes for table `publicacion_reporte`
--
ALTER TABLE `publicacion_reporte`
  ADD PRIMARY KEY (`id_publicacion_reporte`),
  ADD KEY `reporte_publicacion_reporte_fk` (`id_reporte`),
  ADD KEY `usuario_publicacion_reporte_fk` (`id_usuario`),
  ADD KEY `publicacion_publicacion_reporte_fk` (`id_publicacion`);

--
-- Indexes for table `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id_reporte`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `solicitud_intercambio`
--
ALTER TABLE `solicitud_intercambio`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `estado_solicitud_intercambio_fk` (`id_estado_solicitud`),
  ADD KEY `usuario_solicitud_fk` (`id_usuario_ofertante`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `google_id` (`google_id`),
  ADD KEY `estado_cuenta_usuario_fk` (`id_estado_cuenta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `condicion_libro`
--
ALTER TABLE `condicion_libro`
  MODIFY `id_condicion_libro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `critica`
--
ALTER TABLE `critica`
  MODIFY `id_critica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `critica_pregunta`
--
ALTER TABLE `critica_pregunta`
  MODIFY `id_critica_pregunta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estado_cuenta`
--
ALTER TABLE `estado_cuenta`
  MODIFY `id_estado_cuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `estado_publicacion`
--
ALTER TABLE `estado_publicacion`
  MODIFY `id_estado_publicacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estado_solicitud`
--
ALTER TABLE `estado_solicitud`
  MODIFY `id_estado_solicitud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `libro`
--
ALTER TABLE `libro`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `libro_intercambio`
--
ALTER TABLE `libro_intercambio`
  MODIFY `id_libro_intercambio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `libro_tag`
--
ALTER TABLE `libro_tag`
  MODIFY `id_libro_tag` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id_localidad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pregunta_cuestionario`
--
ALTER TABLE `pregunta_cuestionario`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id_provincia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id_publicacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publicacion_reporte`
--
ALTER TABLE `publicacion_reporte`
  MODIFY `id_publicacion_reporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reporte`
--
ALTER TABLE `reporte`
  MODIFY `id_reporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `solicitud_intercambio`
--
ALTER TABLE `solicitud_intercambio`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `critica`
--
ALTER TABLE `critica`
  ADD CONSTRAINT `publicacion_critica_fk` FOREIGN KEY (`id_publicacion`) REFERENCES `publicacion` (`id_publicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_critica_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `critica_pregunta`
--
ALTER TABLE `critica_pregunta`
  ADD CONSTRAINT `critica_critica_pregunta_fk` FOREIGN KEY (`id_critica`) REFERENCES `critica` (`id_critica`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pregunta_critica_pregunta_fk` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta_cuestionario` (`id_pregunta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `condicion_libro_fk` FOREIGN KEY (`id_condicion_libro`) REFERENCES `condicion_libro` (`id_condicion_libro`),
  ADD CONSTRAINT `usuario_libro_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `libro_intercambio`
--
ALTER TABLE `libro_intercambio`
  ADD CONSTRAINT `ofertante_intercambio_fk` FOREIGN KEY (`id_libro_ofertante`) REFERENCES `libro` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `propietario_intercambio_fk` FOREIGN KEY (`id_libro_propietario`) REFERENCES `libro` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `solicitud_libro_intercambio_fk` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud_intercambio` (`id_solicitud`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `libro_tag`
--
ALTER TABLE `libro_tag`
  ADD CONSTRAINT `libro_tag_fk` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tag_libro_fk` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `localidad`
--
ALTER TABLE `localidad`
  ADD CONSTRAINT `provincia_localidad` FOREIGN KEY (`id_provincia`) REFERENCES `provincia` (`id_provincia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mensaje`
--
ALTER TABLE `mensaje`
  ADD CONSTRAINT `usuario_emisor_mensaje_fk` FOREIGN KEY (`id_usuario_emisor`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_receptor_fk` FOREIGN KEY (`id_usuario_receptor`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `estado_publicacion_fk` FOREIGN KEY (`id_estado_publicacion`) REFERENCES `estado_publicacion` (`id_estado_publicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libro_publicacion_fk` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `localidad_publicacion_fk` FOREIGN KEY (`id_localidad`) REFERENCES `localidad` (`id_localidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `publicacion_reporte`
--
ALTER TABLE `publicacion_reporte`
  ADD CONSTRAINT `publicacion_publicacion_reporte_fk` FOREIGN KEY (`id_publicacion`) REFERENCES `publicacion` (`id_publicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reporte_publicacion_reporte_fk` FOREIGN KEY (`id_reporte`) REFERENCES `reporte` (`id_reporte`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_publicacion_reporte_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `solicitud_intercambio`
--
ALTER TABLE `solicitud_intercambio`
  ADD CONSTRAINT `estado_solicitud_intercambio_fk` FOREIGN KEY (`id_estado_solicitud`) REFERENCES `estado_solicitud` (`id_estado_solicitud`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_solicitud_fk` FOREIGN KEY (`id_usuario_ofertante`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `estado_cuenta_usuario_fk` FOREIGN KEY (`id_estado_cuenta`) REFERENCES `estado_cuenta` (`id_estado_cuenta`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

