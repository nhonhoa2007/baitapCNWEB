<?php
session_start();
session_destroy();
setcookie('username', '', time() - 3600, "/");
setcookie('password', '', time() - 3600, "/");
echo "<script>alert('Logout Successful.'); location.href='dangnhap.php';</script>";
exit();
?>
