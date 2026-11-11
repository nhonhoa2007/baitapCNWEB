<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Phân Trang trong PHP</title>
<style type="text/css">
body{
  background: #ecf0f1;
  font-family: Arial, sans-serif;
  padding: 30px 0;
}
a:link, a:visited{
    text-decoration: none;
}
a:hover{
    color: #f00;
}
.title, .pagination{
  width: 650px;
  margin: 0 auto;
  margin-bottom: 20px;
}
.title{
  background: #3498db;
  padding: 25px;
  line-height: 1.8;
  border-radius: 6px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}
.title a{
  color: #fff;
  display: block;
  font-size: 11pt;
  padding: 4px 0;
  border-bottom: 1px solid rgba(255,255,255,0.15);
}
.title a:hover{
  color: #f1c40f;
}
.pagination{
  text-align: center;
}
.pagination a{
  display: inline-block;
  padding: 6px 12px;
  background: #fff;
  border: 1px solid #ccc;
  margin: 0 3px;
  color: #333;
  border-radius: 4px;
}
.pagination a.active{
  background: #3498db;
  color: #fff;
  font-weight: bold;
  border-color: #3498db;
}
</style>
</head>
<body>
<?php
$conn = @mysqli_connect("localhost", "root", "", "phantrang");
if (!$conn) {
    $conn = mysqli_connect("localhost", get_current_user(), "", "phantrang");
}
mysqli_set_charset($conn, "utf8mb4");

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;

$limit = 10;
$start = ($page - 1) * $limit;

$total_query = mysqli_query($conn, "SELECT count(*) as total FROM tintuc");
$total_row = mysqli_fetch_assoc($total_query);
$total_title = $total_row['total'];
$total_page = ceil($total_title / $limit);

$query = "SELECT * FROM tintuc LIMIT " . $start . ", " . $limit;
$result = mysqli_query($conn, $query);

echo "<div class=\"title\">";
while($row = mysqli_fetch_array($result)){
    echo '<a href="#">' . $row['id'] . '. ' . htmlspecialchars($row['title']) . '</a>';
}
echo "</div>";

echo "<div class=\"pagination\">";
for($i = 1; $i <= $total_page; $i++){
    $active = ($i == $page) ? ' active' : '';
    echo '<a class="' . $active . '" href="phantrang.php?page=' . $i . '">' . $i . '</a> ';
}
echo "</div>";
?>
</body>
</html>
