/*
SQLyog Community v12.12 (64 bit)
MySQL - 5.6.25 : Database - trabalho
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `clientes` */

CREATE TABLE `clientes` (
  `cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `cpf` varchar(255) DEFAULT NULL,
  `tipoCliente` int(11) DEFAULT NULL,
  `ativo` enum('0','1') DEFAULT '1',
  `status` enum('0','1') DEFAULT '1',
  `dtCadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `clientes` */

insert  into `clientes`(`cliente`,`nome`,`cpf`,`tipoCliente`,`ativo`,`status`,`dtCadastro`) values (1,'Thiago Borges','082.539.706.50',3,'0','0','2015-09-25 15:49:19');
insert  into `clientes`(`cliente`,`nome`,`cpf`,`tipoCliente`,`ativo`,`status`,`dtCadastro`) values (2,'Camilla Borges','257.548.458.96',1,'0','0','2015-09-25 15:58:49');

/*Table structure for table `tiposClientes` */

CREATE TABLE `tiposClientes` (
  `tipoCliente` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `ativo` enum('0','1') DEFAULT '1',
  `status` enum('0','1') DEFAULT '1',
  `dtCadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`tipoCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `tiposClientes` */

insert  into `tiposClientes`(`tipoCliente`,`descricao`,`ativo`,`status`,`dtCadastro`) values (1,'Produtor Rural','1','1','2015-09-25 15:30:25');
insert  into `tiposClientes`(`tipoCliente`,`descricao`,`ativo`,`status`,`dtCadastro`) values (2,'Prestador de Serviços','1','1','2015-09-25 15:31:15');
insert  into `tiposClientes`(`tipoCliente`,`descricao`,`ativo`,`status`,`dtCadastro`) values (3,'Comerciante','1','1','2015-09-25 15:31:19');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
