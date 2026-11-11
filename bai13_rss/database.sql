CREATE DATABASE IF NOT EXISTS `rss` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `rss`;

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `news` (`id`, `title`, `link`, `description`) VALUES
(1, 'Úc cấm học sinh tiểu học dùng AI, lập lực lượng đặc nhiệm cai nghiện kỹ thuật số', 'https://tuoitre.vn/uc-cam-hoc-sinh-tieu-hoc-dung-ai-lap-luc-luong-dac-nhiem-cai-nghien-ky-thuat-so-100261105205643728.htm', 'Úc cấm học sinh tiểu học dùng AI trong lớp, hạn chế học sinh trung học sử dụng khi kiểm tra và lập lực lượng đặc nhiệm cai nghiện kỹ thuật số.'),
(2, 'Hé lộ lỗ hổng giúp tin tặc tấn công tủ lạnh, kho máu ở châu Âu', 'https://tuoitre.vn/he-lo-lo-hong-giup-tin-tac-tan-cong-tu-lanh-kho-mau-o-chau-au-100261105144503586.htm', 'Từ hàng trăm siêu thị đến các cơ sở bảo quản máu tại châu Âu, tin tặc đang khai thác lỗ hổng thiết bị kết nối Internet để chiếm quyền điều khiển và can thiệp hệ thống từ xa.'),
(3, 'Phát hiện mã độc mới tinh vi tấn công hệ điều hành Windows', 'https://tuoitre.vn/phat-hien-ma-doc-moi-tinh-vi-tan-cong-he-dieu-hanh-windows-100261105151024494.htm', 'Không phát tán tập tin đáng ngờ theo cách thông thường, tin tặc lợi dụng các chương trình hợp pháp để đưa mã độc vào hệ thống Windows của cơ quan chính phủ.'),
(4, 'Chip bảo mật Make in Vietnam đầu tiên ra mắt', 'https://tuoitre.vn/chip-bao-mat-make-in-vietnam-dau-tien-ra-mat-10026110310180152.htm', 'Chiều 3-11, tại trụ sở Bộ Quốc phòng, Ban Cơ yếu Chính phủ và Tập đoàn Viettel đã tổ chức lễ công bố ra mắt chip bảo mật VGC v1.0 cùng nền tảng bán dẫn bảo mật đầu tiên do Việt Nam làm chủ thiết kế.'),
(5, 'FPT vận hành thử nghiệm nhà máy kiểm thử công suất 300 triệu chip/năm', 'https://tuoitre.vn/fpt-van-hanh-thu-nghiem-nha-may-kiem-thu-cong-suat-300-trieu-chip-nam-100261103150033706.htm', 'Ngày 3-11, Tập đoàn FPT chính thức đưa nhà máy kiểm thử và đóng gói chip bán dẫn tại Bắc Ninh vào vận hành thử nghiệm giai đoạn 1, sở hữu 6 dây chuyền với công suất tối đa 300 triệu chip mỗi năm.');
