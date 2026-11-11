<?php
session_start();
if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = "hocweb.com.vn";
    $_SESSION['age'] = 120;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Session Demo</title>
<style>
body { font-family: Arial, sans-serif; margin: 30px; }
a { color: #1a73e8; font-weight: bold; }
</style>
</head>
<body>
<h3>Khởi tạo biến Session</h3>
<?php
echo "Tên bạn là: " . $_SESSION['name'] . "<br/>";
echo "Số tuổi của bạn: " . $_SESSION['age'] . "<br/>";
?>
<br />
<a href="test_session.php">Click here to Test Session!</a>
</body>
</html>
