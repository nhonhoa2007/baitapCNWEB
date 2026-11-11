<?php
$conn = @mysqli_connect("localhost", "root", "", "rating");
if (!$conn) {
    $conn = mysqli_connect("localhost", get_current_user(), "", "rating");
}
if (!$conn) {
    die("Khong the ket noi toi CSDL");
}
mysqli_set_charset($conn, "utf8mb4");

function getRatingInfo($id){
    global $conn;
    $id = (int)$id;
    $query = "SELECT * FROM rating_info WHERE product_id=" . $id;
    $result = mysqli_query($conn, $query);
    $return = 'Đánh giá<br /><ul id="rating-info">';
    if($result && mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        $return .= "<li><strong>5</strong>: " . $row['rate_5'] . "</li>";
        $return .= "<li><strong>4</strong>: " . $row['rate_4'] . "</li>";
        $return .= "<li><strong>3</strong>: " . $row['rate_3'] . "</li>";
        $return .= "<li><strong>2</strong>: " . $row['rate_2'] . "</li>";
        $return .= "<li><strong>1</strong>: " . $row['rate_1'] . "</li>";
    }else{
        for($i = 5; $i >= 1; $i--){
            $return .= "<li><strong>" . $i . "</strong>: 0</li>";
        }
    }
    $return .= "</ul>";
    return $return;
}

function setRatingInfo($id, $rate){
    global $conn;
    $id = (int)$id;
    $rate = (int)$rate;
    if ($rate < 1 || $rate > 5) return;

    $check = mysqli_query($conn, "SELECT product_id FROM rating_info WHERE product_id=" . $id);
    if (mysqli_num_rows($check) == 0) {
        mysqli_query($conn, "INSERT INTO rating_info(product_id, rate_1, rate_2, rate_3, rate_4, rate_5) VALUES ($id, 0, 0, 0, 0, 0)");
    }

    $col = "rate_" . $rate;
    $query = "UPDATE rating_info SET " . $col . " = " . $col . " + 1 WHERE product_id=" . $id;
    mysqli_query($conn, $query);
}

function getProduct($id){
    global $conn;
    $id = (int)$id;
    $query = "SELECT * FROM products WHERE id=" . $id;
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    if (!$row) return "<p>Sản phẩm không tồn tại.</p>";

    $rating_info = getRatingInfo($id);
    $return = '<div id="product-img">
                    <img src="' . htmlspecialchars($row['img_url']) . '" alt="" style="max-width:180px; max-height:180px;" />
                </div>' . $rating_info . '
                <div class="clear-fx"></div>
                <h2>' . htmlspecialchars($row['title']) . '</h2>';
    return $return;
}

function listProduct(){
    global $conn;
    $query = "SELECT * FROM products";
    $result = mysqli_query($conn, $query);
    $return = "";
    while($row = mysqli_fetch_array($result)){
        $rating_info = getRatingInfo($row['id']);
        $return .= '<div class="product-info">
                <div id="product-img">
                    <img src="' . htmlspecialchars($row['img_url']) . '" alt="" style="max-width:180px; max-height:180px;" />
                </div>' . $rating_info . '
                <div class="clear-fx"></div>
                <h2><a href="index.php?id=' . $row['id'] . '">' . htmlspecialchars($row['title']) . '</a></h2></div>';
    }
    return $return;
}
?>
