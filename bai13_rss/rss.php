<?php
header("Content-type: text/xml; charset=utf-8");

$conn = @mysqli_connect("localhost", "root", "", "rss");
if (!$conn) {
    $conn = mysqli_connect("localhost", get_current_user(), "", "rss");
}
mysqli_set_charset($conn, "utf8mb4");

$query = "SELECT * FROM news";
$result = mysqli_query($conn, $query);
$item = "";
while ($row = mysqli_fetch_array($result)) {
    $item .= '<item>';
    $item .= '<title>' . htmlspecialchars($row['title']) . '</title>';
    $item .= '<link>' . htmlspecialchars($row['link']) . '</link>';
    $item .= '<description>' . htmlspecialchars($row['description']) . '</description>';
    $item .= '</item>';
}

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<rss version="2.0">';
echo '<channel>';
echo '<title>Tin Tức Công Nghệ - RSS Feed</title>';
echo '<link>https://tuoitre.vn/cong-nghe.htm</link>';
echo '<description>Cập nhật tin tức công nghệ mới nhất từ Tuổi Trẻ Online.</description>';
echo $item;
echo '</channel>';
echo '</rss>';
?>
