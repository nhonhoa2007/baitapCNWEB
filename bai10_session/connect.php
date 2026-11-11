<?php
$connect = @mysqli_connect("localhost", "root", "", "tintuc");
if (!$connect) {
    $connect = mysqli_connect("localhost", get_current_user(), "", "tintuc");
}
if (!$connect) {
    die("Không thể kết nối đến Database: " . mysqli_connect_error());
}
mysqli_set_charset($connect, "utf8mb4");
?>
