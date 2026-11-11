CREATE DATABASE IF NOT EXISTS `rating` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `rating`;

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `img_url` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`id`, `title`, `img_url`) VALUES
(1, 'MB Gigabyte G1.Sniper B5', 'template/img/products/1.jpg'),
(2, 'Asus MeMo pad ME102A', 'template/img/products/2.jpg'),
(3, 'LCD Philips 27\'\' 273G3 DHSW', 'template/img/products/3.jpg');

CREATE TABLE IF NOT EXISTS `rating_info` (
  `product_id` int(10) NOT NULL,
  `rate_1` int(10) NOT NULL DEFAULT 0,
  `rate_2` int(10) NOT NULL DEFAULT 0,
  `rate_3` int(10) NOT NULL DEFAULT 0,
  `rate_4` int(10) NOT NULL DEFAULT 0,
  `rate_5` int(10) NOT NULL DEFAULT 0,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `rating_info` (`product_id`, `rate_1`, `rate_2`, `rate_3`, `rate_4`, `rate_5`) VALUES
(1, 1, 2, 3, 1, 2),
(2, 12, 23, 21, 22, 11),
(3, 2, 2, 1, 1, 2);
