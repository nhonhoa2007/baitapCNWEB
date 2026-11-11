<?php
session_start();
unset($_SESSION['name']);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Hủy Session</title>
<style>
body { font-family: Arial, sans-serif; margin: 30px; }
a { color: #1a73e8; font-weight: bold; }
</style>
</head>
<body>
<h3>Đã hủy biến Session 'name'</h3>
<?php
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '<em>(không tồn tại)</em>';
$age = isset($_SESSION['age']) ? $_SESSION['age'] : '<em>(không tồn tại)</em>';
echo "Tên bạn là: " . $name . "<br />";
echo "Số tuổi của bạn: " . $age . "<br />";
?>
<br />
<a href="test_session.php">Kiểm tra lại</a> | <a href="session.php">Khởi tạo lại</a>
</body>
</html>
