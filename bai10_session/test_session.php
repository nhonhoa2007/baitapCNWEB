<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Test Session</title>
<style>
body { font-family: Arial, sans-serif; margin: 30px; }
a { color: red; font-weight: bold; }
</style>
</head>
<body>
<h3>Kiểm tra giá trị Session</h3>
<?php
if (isset($_SESSION['name']) && isset($_SESSION['age'])) {
    echo "Chào bạn " . htmlspecialchars($_SESSION['name']) . " có tuổi là: " . htmlspecialchars((string)$_SESSION['age']);
} else {
    echo "Biến session đã bị xóa hoặc chưa khởi tạo!";
}
?>
<br /><br />
<a href="huy_session.php">Hủy session</a> | <a href="session.php" style="color:#1a73e8;">Quay lại session.php</a>
</body>
</html>
