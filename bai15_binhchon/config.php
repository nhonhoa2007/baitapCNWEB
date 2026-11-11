<?php
$config = @mysqli_connect('localhost', 'root', '', 'review');
if (!$config) {
    $config = mysqli_connect('localhost', get_current_user(), '', 'review');
}
if (!$config) {
    die("Error: Could not connect to the database. " . mysqli_connect_error());
}
mysqli_set_charset($config, 'utf8mb4');
?>
