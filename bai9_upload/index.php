<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload Hình Ảnh</title>
<style>
body { font-family: Arial, sans-serif; margin: 30px; }
.msg { margin-top: 15px; font-weight: bold; }
.success { color: green; }
.error { color: red; }
img.preview { max-width: 250px; margin-top: 10px; display: block; border: 1px solid #ccc; padding: 4px; }
</style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<input type="hidden" name="MAX_FILE_SIZE" value="5000000">
<label>Upload:
<input type="file" name="ufile" id="ufile" required />
</label>
<p>
<input type="submit" name="upload" id="upload" value="Up load" />
</p>
</form>

<?php
$target_path = "uploads/";

if (isset($_FILES['ufile']) && $_FILES['ufile']['error'] == UPLOAD_ERR_OK) {
    $filename = basename($_FILES['ufile']['name']);
    $destination = $target_path . $filename;

    if (!preg_match('/\.(jpg|gif|png|jpeg)$/i', $filename)) {
        echo "<div class='msg error'>Khong phai file anh!</div>";
    } else if (file_exists($destination)) {
        echo "<div class='msg error'>" . htmlspecialchars($filename) . " already exists.</div>";
    } else if (move_uploaded_file($_FILES['ufile']['tmp_name'], $destination)) {
        echo "<div class='msg success'>The file " . htmlspecialchars($filename) . " has been uploaded</div>";
        echo "<img src='" . htmlspecialchars($destination) . "' class='preview' alt='Uploaded image' />";
    } else {
        echo "<div class='msg error'>There was an error uploading the file, please try again!</div>";
    }
} else if (isset($_FILES['ufile']) && $_FILES['ufile']['error'] != UPLOAD_ERR_NO_FILE && $_FILES['ufile']['error'] != UPLOAD_ERR_OK) {
    echo "<div class='msg error'>Upload error code: " . $_FILES['ufile']['error'] . "</div>";
}
?>
</body>
</html>
