<?php
include("functions.php");

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    if (isset($_POST['rate_submit'])) {
        if (isset($_POST['rate'])) {
            $rate = (int)$_POST['rate'];
            setRatingInfo($id, $rate);
        }
    }

    $html = getProduct($id);
    include("template/view-product.php");
} else {
    $html = listProduct();
    include("template/list-products.php");
}
?>
