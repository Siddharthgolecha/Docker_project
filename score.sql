create database scores;
use scores;
CREATE TABLE `scores` (
   `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
   `name` VARCHAR(15) NOT NULL DEFAULT 'anonymous',
   `score` INT(10) UNSIGNED NOT NULL DEFAULT '0'
)
ENGINE=MyISAM;