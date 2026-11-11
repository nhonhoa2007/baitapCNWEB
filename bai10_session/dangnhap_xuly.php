<?php
session_start();

if (isset($_POST['cancel'])) {
    header("Location: dangnhap.php");
    exit();
}

if (isset($_POST['login'])) {
    require_once('connect.php');
    $name = trim($_POST['username'] ?? '');
    $pass = trim($_POST['password'] ?? '');

    $safe_name = mysqli_real_escape_string($connect, $name);
    $safe_pass = mysqli_real_escape_string($connect, $pass);

    $sl = "select * from users where Username='" . $safe_name . "' and Password='" . $safe_pass . "'";
    $result = mysqli_query($connect, $sl);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $name;
        $_SESSION['password'] = $pass;

        if (isset($_POST['remember']) && $_POST['remember'] == "on") {
            setcookie("username", $name, time() + 3600 * 24 * 7, "/");
            setcookie("password", $pass, time() + 3600 * 24 * 7, "/");
        } else {
            setcookie("username", "", time() - 3600, "/");
            setcookie("password", "", time() - 3600, "/");
        }

        echo "<script>alert('Login Successful.'); location.href='trangquantriadmin.php';</script>";
        exit();
    } else {
        echo "<script>alert('Login Failed.'); location.href='dangnhap.php';</script>";
        exit();
    }
}
?>
