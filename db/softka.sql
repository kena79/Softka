/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.51 : Database - naves_espaciales
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`naves_espaciales` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `naves_espaciales`;

/*Table structure for table `naves` */

DROP TABLE IF EXISTS `naves`;

CREATE TABLE `naves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `actividad` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `combustible` varchar(50) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `naves` */

insert  into `naves`(`id`,`nombre`,`actividad`,`pais`,`tipo`,`combustible`,`descripcion`) values (1,'Saturno V','1967-1973','EE.UU.','Vehículos Lanzadera','H(liq.) + O(liq.)','El Saturno V (Saturn V) fue un cohete desechable de múltiples fases y de combustible líquido usado en los programas Apolo y Skylab de la NASA.'),(2,'ATV','2008_Act.','Europa ESA/ASI','Naves No Tripuladas','MMH + NO','Un vehículo de transferencia automatizado o ATV (Automated Transfer Vehicle) es una clase de nave espacial robótica que asume las funciones de abastecimiento, la retirada de residuos y la elevación periódica de la Estación Espacial Internacional (ISS). '),(3,'Apolo','1966-1975','EE.UU.','Naves Tripuladas','NO4 + UDMH','Esto se hizo finalmente realidad en julio de 1969, cuando la misión Apolo 11, comandada por Neil Armstrong, Edwin Aldrin, y Michael Collins alunizó por primera vez en el satélite terrestre.'),(4,'Vostok','1960-1963','Rusia','Naves Tripuladas','NO +Amina','La nave espacial de las Vostok estaban formadas por una cabina esférica de una persona, con una masa de 2,46 toneladas, y diámetro de 2,3 metros y un módulo cónico para el equipamiento, la cabina tripulada y comandada por el tripulante es llamada charik en ruso. '),(5,'Shenzhou','1999-Act.','China','Naves Tripuladas','N2O4 + MMH','El lanzamiento de la Shenzhou-14 tiene lugar dos meses después del retorno de la tripulación de la Shenzhou-13, en el mes de abril. Esta es la tercera misión tripulada desde 2021, y la primera misión de la segunda fase destinada a la construcción de la Estación Espacial de China.'),(6,'Explorer','1958-1970','EE.UU.','Naves No Tripuladas','Sólido + Líquido','El Explorer 1, oficialmente 1958 Alpha 1,7​ fue el primer satélite artificial puesto en órbita terrestre por Estados Unidos.'),(7,'Pionero XI','1973-Act','EE.UU.','Naves No Tripuladas','N(comp) + N2H4','La sonda espacial Pioneer 11 fue una de las primeras sondas del programa de exploración espacial de la NASA. Fue lanzada desde Cabo Cañaveral el 5 de abril de 1973.'),(8,'Delta IV','2002-Act','EE.UU.','Vehículos Lanzadera','Queroseno + O(liq.)','El cohete Delta IV es un vector o vehículo lanzador desechable de United Launch Alliance fabricado por Boeing. Creado en 2001, es el cohete más grande de la familia Delta alcanzando, en su versión Heavy, más de 70 metros de altura.'),(9,'Ariane V','1996-Act','Europa','Vehículos Lanzadera','Solido + N(liq.) + O(liq.)','El Ariane 5 es un cohete de un solo uso diseñado para colocar satélites en órbita geoestacionaria y para enviar cargas a órbitas bajas.');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
