<?php
declare(strict_types=1);
require_once __DIR__ . '/support.php';
validatePostedData($_POST);
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: no-store');
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TinyMCE — Posted Data</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<main class="page">
    <p class="eyebrow">BÀI 8 · PHP & TINYMCE</p>
    <h1>TinyMCE — Posted Data</h1>
    <p class="intro">Dữ liệu HTML được gửi từ trình soạn thảo lên PHP bằng phương thức POST.</p>
    <?php renderPostedData($_POST); ?>
    <p class="actions"><a class="button secondary" href="index.php">Quay lại trình soạn thảo</a></p>
</main>
</body>
</html>
