<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Tạo RSS cho trang web</title>
<style>
body { font-family: Arial, sans-serif; margin: 30px auto; width: 700px; line-height: 1.6; }
h2 { color: #d35400; border-bottom: 2px solid #d35400; padding-bottom: 8px; }
.rss-btn { display: inline-block; background: #e67e22; color: #fff; padding: 8px 16px; border-radius: 4px; text-decoration: none; font-weight: bold; margin-bottom: 20px; }
.rss-btn:hover { background: #d35400; }
.news-item { background: #fdfefe; border: 1px solid #d5dbdb; border-radius: 6px; padding: 15px; margin-bottom: 15px; }
.news-item h3 { margin: 0 0 8px 0; font-size: 13pt; }
.news-item h3 a { color: #2980b9; text-decoration: none; }
.news-item h3 a:hover { text-decoration: underline; }
.news-item p { margin: 0; color: #555; font-size: 11pt; }
</style>
</head>
<body>
<h2>Bài 13: Tạo RSS cho trang web (RSS 2.0 XML)</h2>
<p>
<a href="rss.php" target="_blank" class="rss-btn">&#128246; Xem nguồn cấp RSS (XML Feed)</a>
</p>

<?php
$conn = @mysqli_connect("localhost", "root", "", "rss");
if (!$conn) {
    $conn = mysqli_connect("localhost", get_current_user(), "", "rss");
}
mysqli_set_charset($conn, "utf8mb4");

$query = "SELECT * FROM news";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($result)) {
    echo '<div class="news-item">';
    echo '<h3><a href="' . htmlspecialchars($row['link']) . '" target="_blank">' . htmlspecialchars($row['title']) . '</a></h3>';
    echo '<p>' . htmlspecialchars($row['description']) . '</p>';
    echo '</div>';
}
?>
</body>
</html>
