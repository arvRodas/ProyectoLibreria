-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
SHOW WARNINGS;
-- -----------------------------------------------------
-- Schema libreria
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `libreria` ;

-- -----------------------------------------------------
-- Schema libreria
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `libreria` DEFAULT CHARACTER SET utf8mb4 ;
SHOW WARNINGS;
USE `libreria` ;

-- -----------------------------------------------------
-- Table `bitacora`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bitacora` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `bitacora` (
  `bitacoracod` INT NOT NULL AUTO_INCREMENT,
  `bitacorafch` DATETIME NULL DEFAULT NULL,
  `bitprograma` VARCHAR(255) NULL DEFAULT NULL,
  `bitdescripcion` VARCHAR(255) NULL DEFAULT NULL,
  `bitobservacion` MEDIUMTEXT NULL DEFAULT NULL,
  `bitTipo` CHAR(3) NULL DEFAULT NULL,
  `bitusuario` BIGINT NULL DEFAULT NULL,
  PRIMARY KEY (`bitacoracod`))
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = utf8mb3;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `categorias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `categorias` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `categorias` (
  `catid` BIGINT NOT NULL AUTO_INCREMENT,
  `catnom` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`catid`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `clientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `clientes` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `clientes` (
  `idCliente` BIGINT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NULL DEFAULT NULL,
  `apellido` VARCHAR(50) NULL DEFAULT NULL,
  `direccion` VARCHAR(200) NULL DEFAULT NULL,
  `telefono` INT NULL DEFAULT NULL,
  `correo` VARCHAR(50) NULL DEFAULT NULL,
  `estado` ENUM('activo', 'inactivo') NULL DEFAULT 'activo',
  PRIMARY KEY (`idCliente`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `colaboradores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `colaboradores` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `colaboradores` (
  `idColaborador` BIGINT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(200) NULL DEFAULT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `fechaNacimiento` DATETIME NOT NULL,
  `telefono` INT NOT NULL,
  `sexo` ENUM('femenino', 'masculino') NOT NULL,
  PRIMARY KEY (`idColaborador`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `libros`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `libros` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `libros` (
  `idlibro` BIGINT NOT NULL AUTO_INCREMENT,
  `nombreLibro` VARCHAR(45) NULL DEFAULT NULL,
  `catid` BIGINT NULL DEFAULT NULL,
  `stocklibro` BIGINT NULL DEFAULT NULL,
  `preciolibro` FLOAT NULL DEFAULT NULL,
  `editorial` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idlibro`))
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `factura`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `factura` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `factura` (
  `idfactura` BIGINT NOT NULL AUTO_INCREMENT,
  `fechacompra` DATE NULL DEFAULT NULL,
  `idcliente` BIGINT NULL DEFAULT NULL,
  PRIMARY KEY (`idfactura`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `detallefactura`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `detallefactura` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `detallefactura` (
  `iddetalle` BIGINT NOT NULL,
  `idfactura` BIGINT NOT NULL,
  `idlibro` BIGINT NOT NULL,
  `cantidadventa` INT NOT NULL,
  `precioventa` FLOAT NOT NULL,
  PRIMARY KEY (`iddetalle`, `idfactura`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `funciones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `funciones` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `funciones` (
  `fncod` VARCHAR(255) NOT NULL,
  `fndsc` VARCHAR(45) NULL DEFAULT NULL,
  `fnest` CHAR(3) NULL DEFAULT NULL,
  `fntyp` CHAR(3) NULL DEFAULT NULL,
  PRIMARY KEY (`fncod`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `roles` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `roles` (
  `rolescod` VARCHAR(15) NOT NULL,
  `rolesdsc` VARCHAR(45) NULL DEFAULT NULL,
  `rolesest` CHAR(3) NULL DEFAULT NULL,
  PRIMARY KEY (`rolescod`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `funciones_roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `funciones_roles` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `funciones_roles` (
  `rolescod` VARCHAR(15) NOT NULL,
  `fncod` VARCHAR(255) NOT NULL,
  `fnrolest` CHAR(3) NULL DEFAULT NULL,
  `fnexp` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`rolescod`, `fncod`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `usuario` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `usuario` (
  `usercod` BIGINT NOT NULL AUTO_INCREMENT,
  `useremail` VARCHAR(80) NULL DEFAULT NULL,
  `username` VARCHAR(80) NULL DEFAULT NULL,
  `userpswd` VARCHAR(128) NULL DEFAULT NULL,
  `userfching` DATETIME NULL DEFAULT NULL,
  `userpswdest` CHAR(3) NULL DEFAULT NULL,
  `userpswdexp` DATETIME NULL DEFAULT NULL,
  `userest` CHAR(3) NULL DEFAULT NULL,
  `useractcod` VARCHAR(128) NULL DEFAULT NULL,
  `userpswdchg` VARCHAR(128) NULL DEFAULT NULL,
  `usertipo` CHAR(3) NULL DEFAULT NULL COMMENT 'Tipo de Usuario, Normal, Consultor o Cliente',
  PRIMARY KEY (`usercod`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb3;

SHOW WARNINGS;
CREATE UNIQUE INDEX `useremail_UNIQUE` ON `usuario` (`useremail` ASC) VISIBLE;

SHOW WARNINGS;
CREATE INDEX `usertipo` ON `usuario` (`usertipo` ASC, `useremail` ASC, `usercod` ASC, `userest` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `roles_usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `roles_usuarios` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `roles_usuarios` (
  `usercod` BIGINT NOT NULL,
  `rolescod` VARCHAR(15) NOT NULL,
  `roleuserest` CHAR(3) NULL DEFAULT NULL,
  `roleuserfch` DATETIME NULL DEFAULT NULL,
  `roleuserexp` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`usercod`, `rolescod`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
