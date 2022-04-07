CREATE TABLE `intentosPagos` (
  `id` bigint(15) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(128) DEFAULT NULL,
  `monto` numeric(13,2) DEFAULT NULL,
  `fechaNow` datetime DEFAULT NULL,
  `fechaVencimiento` datetime DEFAULT NULL,
  `estado` char(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
