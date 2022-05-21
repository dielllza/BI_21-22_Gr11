-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema app_creator
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema app_creator
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `app_creator` DEFAULT CHARACTER SET utf8 ;
USE `app_creator` ;

-- -----------------------------------------------------
-- Table `app_creator`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `app_creator`.`roles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `role` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `app_creator`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `app_creator`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `email_address` VARCHAR(45) NOT NULL,
  `phone_number` VARCHAR(45) NOT NULL,
  `birthdate` DATE NOT NULL,
  `country` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `roles_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_users_roles_idx` (`roles_id` ASC) VISIBLE,
  CONSTRAINT `fk_users_roles`
    FOREIGN KEY (`roles_id`)
    REFERENCES `app_creator`.`roles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

INSERT INTO `app_creator`.`roles` (`id`, `role`) VALUES ('1', 'admin');
INSERT INTO `app_creator`.`roles` (`id`, `role`) VALUES ('2', 'user');

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
