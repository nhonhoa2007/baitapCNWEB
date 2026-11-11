CREATE DATABASE IF NOT EXISTS `review` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `review`;

CREATE TABLE IF NOT EXISTS `binhchon` (
  `idBC` int(11) NOT NULL AUTO_INCREMENT,
  `MoTa` varchar(255) NOT NULL,
  `SoLanChon` int(11) NOT NULL DEFAULT 0,
  `AnHien` tinyint(1) NOT NULL DEFAULT 1,
  `ThuTu` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idBC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `binhchon` (`idBC`, `MoTa`, `SoLanChon`, `AnHien`, `ThuTu`) VALUES
(1, 'Bạn nghĩ hocweb.com.vn có giúp bạn học tập tốt hơn không?', 10, 1, 0),
(2, 'Bạn dự đoán đội nào sẽ vô địch World Cup?', 7, 1, 0),
(3, 'Bạn thích làm gì trong các việc dưới đây?', 1, 1, 0),
(4, 'Bạn cho con làm gì trong kỳ nghỉ hè này?', 1, 1, 0);

CREATE TABLE IF NOT EXISTS `phuongan` (
  `idPA` int(11) NOT NULL AUTO_INCREMENT,
  `MoTa` varchar(255) NOT NULL,
  `SoLanChon` int(11) NOT NULL DEFAULT 0,
  `idBC` int(11) NOT NULL,
  PRIMARY KEY (`idPA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `phuongan` (`idPA`, `MoTa`, `SoLanChon`, `idBC`) VALUES
(1, 'Là nơi để sinh viên có thể tự học CNTT tốt nhất', 20, 1),
(2, 'Nội dung không phong phú lắm', 5, 1),
(3, 'Chất lượng thì cũng bình thường thôi', 20, 1);
