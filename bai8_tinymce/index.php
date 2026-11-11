<?php
declare(strict_types=1);

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
if (is_string($path) && $path !== '/' && !str_ends_with($path, '/') && basename($path) === basename(__DIR__)) {
    $query = $_SERVER['QUERY_STRING'] ?? '';
    $destination = '/' . ltrim($path, '/') . '/' . ($query !== '' ? '?' . $query : '');
    header('Location: ' . $destination, true, 308);
    exit;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bài 8 — TinyMCE trong PHP</title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="tinymce/tinymce.min.js"></script>
    <script src="assets/editor.js" defer></script>
</head>
<body>
<main class="page">
    <p class="eyebrow">BÀI 8 · PHP & TINYMCE</p>
    <h1>Soạn thảo văn bản với TinyMCE</h1>
    <p class="intro">Soạn thảo bằng TinyMCE và gửi nội dung HTML sang <code>_posteddata.php</code>.</p>
    <form method="post" action="_posteddata.php" class="editor-form">
        <label for="tomtat">Nội dung tóm tắt</label>
        <textarea name="tomtat" id="tomtat" rows="12"><h2>Thực hành soạn thảo trong PHP</h2><p>Xin chào! Đây là nội dung được soạn thảo bằng <strong>TinyMCE</strong>.</p><ul><li>Định dạng chữ đậm, nghiêng và gạch chân.</li><li>Chèn danh sách, liên kết và bảng.</li><li>Gửi dữ liệu HTML bằng phương thức POST.</li></ul></textarea>
        <div class="actions">
            <button type="submit" name="ok" value="Gửi dữ liệu">Gửi dữ liệu</button>
        </div>
        <p class="hint">TinyMCE được lưu trong thư mục project; không cần API key hoặc kết nối Internet.</p>
    </form>
</main>
</body>
</html>
