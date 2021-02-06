-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.29 - MySQL Community Server (GPL)
-- Операционная система:         Win64
-- HeidiSQL Версия:              11.0.0.5958
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных galery
CREATE DATABASE IF NOT EXISTS `galery` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `galery`;

-- Дамп структуры для таблица galery.registered users
CREATE TABLE IF NOT EXISTS `registered users` (
  `login` text COLLATE utf8mb4_unicode_ci,
  `pass` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы galery.registered users: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `registered users` DISABLE KEYS */;
INSERT INTO `registered users` (`login`, `pass`) VALUES
	('admin', 'admin');
/*!40000 ALTER TABLE `registered users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
