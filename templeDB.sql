# ************************************************************
# Sequel Pro SQL dump
# Versión 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.38)
# Base de datos: templeDB
# Tiempo de Generación: 2018-04-13 22:10:27 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla banner
# ------------------------------------------------------------

DROP TABLE IF EXISTS `banner`;

CREATE TABLE `banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_pagina` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `banner` WRITE;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;

INSERT INTO `banner` (`id`, `titulo`, `subtitulo`, `img`, `id_pagina`, `created_at`, `updated_at`)
VALUES
	(1,'Servicios de consultoría, estudio \nde opinión pública y promoción pública.','Incorporar tecnología electoral con\nprincipios científicos para tomar decisiones\nen las campañas. ',NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `banner` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla home
# ------------------------------------------------------------

DROP TABLE IF EXISTS `home`;

CREATE TABLE `home` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `banner_id` int(11) NOT NULL,
  `section_1` int(11) NOT NULL,
  `section_2` int(11) NOT NULL,
  `section_3` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `home` WRITE;
/*!40000 ALTER TABLE `home` DISABLE KEYS */;

INSERT INTO `home` (`id`, `banner_id`, `section_1`, `section_2`, `section_3`, `created_at`, `updated_at`)
VALUES
	(1,1,1,1,1,NULL,NULL);

/*!40000 ALTER TABLE `home` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla layout1
# ------------------------------------------------------------

DROP TABLE IF EXISTS `layout1`;

CREATE TABLE `layout1` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `layout1` WRITE;
/*!40000 ALTER TABLE `layout1` DISABLE KEYS */;

INSERT INTO `layout1` (`id`, `titulo`, `texto`, `titulo2`, `texto2`, `img2`, `titulo3`, `texto3`, `img3`, `created_at`, `updated_at`)
VALUES
	(1,'Nuestra misión','Ayudar a las instituciones o personas de pensamiento humanista en sus procesos de comunicación y persuasión a través de métodos científicos y valores humanistas, desarrollando estrategias capaces de formar opinión pública favorable, e instrumentar métodos. editado','Nuestra visión editado','Ser la firma consultora más importante del mundo hispano en persuasión y comunicación política, poseedora de la mejor tecnología para formar opinión pública y generar conductas sociales a favor de nuestros clientes. editado','5ffcca3020e9e4ca2f6d666858a08912.jpg','Nuestra misión editaddo','Ayudar a las instituciones o personas de pensamiento humanista en sus procesos de comunicación y persuasión a través de métodos científicos y valores humanistas, desarrollando estrategias capaces de formar opinión pública favorable, e instrumentar métodos que garanticen la participación y aprobación de los ideales de nuestros clientes. Editado','mision.png',NULL,'2018-04-13 21:44:45');

/*!40000 ALTER TABLE `layout1` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla layout2
# ------------------------------------------------------------

DROP TABLE IF EXISTS `layout2`;

CREATE TABLE `layout2` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `nombre2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `nombre3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `layout2` WRITE;
/*!40000 ALTER TABLE `layout2` DISABLE KEYS */;

INSERT INTO `layout2` (`id`, `titulo`, `texto`, `nombre`, `img`, `nombre2`, `img2`, `nombre3`, `img3`, `created_at`, `updated_at`)
VALUES
	(1,'Nuestros servicios','La integración de servicios que ayuda a mantener un control preciso a la toma de decisiones y fortalece el rumbo de acciones que encaminen a establecer una figura política dinámica que conecte con la audiencia segmentada.','Consultoría Política editado','Just_atecion_clientes.png','Estudios de Opinión Pública editado','undefined','Promoción y Activación política',NULL,NULL,'2018-04-13 21:53:46');

/*!40000 ALTER TABLE `layout2` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla layout3
# ------------------------------------------------------------

DROP TABLE IF EXISTS `layout3`;

CREATE TABLE `layout3` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `layout3` WRITE;
/*!40000 ALTER TABLE `layout3` DISABLE KEYS */;

INSERT INTO `layout3` (`id`, `titulo`, `texto`, `texto2`, `texto3`, `texto4`, `created_at`, `updated_at`)
VALUES
	(1,'Casos de éxito','En Temple Consulting nos esforzamos por ofrecer el mejor servicio a nuestros clientes y para ello generamos alianzas con empresas especializadas que complementan nuestra labor estratégica, mercadológica, tecnológica y empresarial.','Con más de 300 encuestas nuestros resultados cumplen con el índice de confianza y margen de error derivado del uso de tecnologías de la información.','En campañas políticas en México, Venezuela, Honduras y Bolivia nos permiten resolver con mayor efectividad las necesidades de nuestros clientes.','Hemos participado en más de 50 procesos electorales a nivel municipal, estatal y nacional.',NULL,NULL);

/*!40000 ALTER TABLE `layout3` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
