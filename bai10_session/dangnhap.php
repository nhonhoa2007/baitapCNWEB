<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Đăng Nhập Quản Trị</title>
<style>
body { font-family: Arial, sans-serif; margin: 40px auto; width: 380px; }
table { width: 100%; border-collapse: collapse; }
td { padding: 8px 4px; }
input[type="text"], input[type="password"] { width: 95%; padding: 6px 8px; border: 1px solid #ccc; border-radius: 4px; }
input[type="submit"] { padding: 6px 16px; margin-right: 8px; cursor: pointer; }
.login-box { border: 1px solid #ddd; padding: 25px; border-radius: 8px; background-color: #fafafa; box-shadow: 0 4px 6px rgba(0,0,0,0.08); }
</style>
</head>
<body>
<div class="login-box">
<h1>Đăng Nhập</h1>
<form action="dangnhap_xuly.php" method="post">
<table>
<tr>
<td><label for="name">Username:</label></td>
<td><input type="text" name="username" id="name" required value="<?php echo htmlspecialchars($_COOKIE['username'] ?? ''); ?>"></td>
</tr>
<tr>
<td><label for="pass">Password:</label></td>
<td><input type="password" name="password" id="pass" required value="<?php echo htmlspecialchars($_COOKIE['password'] ?? ''); ?>"></td>
</tr>
<tr>
<td colspan="2">
<input type="checkbox" name="remember" id="remember" <?php echo isset($_COOKIE['username']) ? 'checked' : ''; ?>>
<label for="remember">Remember</label>
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="login" name="login">
<input type="submit" value="cancel" name="cancel">
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
