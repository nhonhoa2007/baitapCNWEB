<?php
session_start();
$logged_user = null;

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    $logged_user = $_SESSION['username'];
} else if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    $logged_user = $_COOKIE['username'];
    $_SESSION['username'] = $_COOKIE['username'];
    $_SESSION['password'] = $_COOKIE['password'];
}

if (!$logged_user) {
    echo "<script>alert('Bạn chưa đăng nhập - Vui lòng đăng nhập lại'); location.href='dangnhap.php';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Trang Quản Trị Admin</title>
<style>
body { font-family: Arial, sans-serif; margin: 40px auto; width: 500px; }
.admin-card { border: 1px solid #4CAF50; border-radius: 8px; padding: 25px; background: #e8f5e9; }
h2 { color: #2e7d32; margin-top: 0; }
a { color: #c62828; font-weight: bold; text-decoration: none; }
a:hover { text-decoration: underline; }
</style>
</head>
<body>
<div class="admin-card">
<h2>Trang Quản Trị Admin</h2>
<p>Xin chào: <strong><?php echo htmlspecialchars($logged_user); ?></strong></p>
<hr>
<p><a href="logout.php">Logout (Thoát ra)</a></p>
</div>
</body>
</html>
