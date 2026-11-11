<?php
session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Biến đếm Session</title>
<style>
body { font-family: Arial, sans-serif; margin: 30px; }
.count { font-size: 28pt; font-weight: bold; color: #d9534f; margin: 15px 0; }
a { color: #1a73e8; font-weight: bold; font-size: 14pt; }
</style>
</head>
<body>
<h3>Số lần truy cập trong phiên làm việc:</h3>
<div class="count"><?php echo $_SESSION['count']; ?></div>
<a href="tang.php">Next (Tăng biến đếm) &rarr;</a>
</body>
</html>
