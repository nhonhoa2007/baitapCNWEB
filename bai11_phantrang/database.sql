CREATE DATABASE IF NOT EXISTS `phantrang` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `phantrang`;

CREATE TABLE IF NOT EXISTS `tintuc` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tintuc` (`id`, `title`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit'),
(2, 'Ut wisi enim ad minim veniam, quis nostrud exerci tation'),
(3, 'Duis autem vel eum iriure dolor in hendrerit in vulputate'),
(4, 'Nam liber tempor cum soluta nobis eleifend'),
(5, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit'),
(6, 'Duis autem vel eum iriure dolor in hendrerit'),
(7, 'Typi non habent claritatem insitam qui sequitur mutationem'),
(8, 'Nam liber ipsum consectetuer adipiscing elit novum'),
(9, 'Eodem modo typi qui nunc nobis videntur parum clari'),
(10, 'Claritas est etiam processus dynamicus'),
(11, 'Imperdiet doming id quod mazim placerat facer'),
(12, 'Consectetuer adipiscing elit sed diam nonummy nibh euismod'),
(13, 'Tincidunt ut laoreet dolore magna aliquam erat volutpat'),
(14, 'Ut wisi enim ad minim veniam quis nostrud'),
(15, 'Exerci tation ullamcorper suscipit lobortis nisl ut aliquip'),
(16, 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit'),
(17, 'Esse molestie consequat vel illum dolore eu feugiat nulla facilisis'),
(18, 'At vero eos et accusam et justo duo dolores et ea rebum'),
(19, 'Stet clita kasd gubergren no sea takimata sanctus est'),
(20, 'Lorem ipsum dolor sit amet lorem ipsum dolor sit amet');
