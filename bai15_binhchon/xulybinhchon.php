<?php
ob_start();
require_once("./config.php");

$idPA = isset($_GET["idPA"]) ? (int)$_GET["idPA"] : 0;

if ($idPA > 0) {
    $qr1 = "update binhchon set SoLanChon = SoLanChon+1 where idBC=1";
    $qr = "update phuongan set SoLanChon = SoLanChon+1 where idBC=1 and idPA=$idPA";

    if (mysqli_query($config, $qr1) && mysqli_query($config, $qr)) {
        header('location: ketquabinhchon.php');
        exit();
    } else {
        echo "That bai!";
    }
} else {
    header('location: ketquabinhchon.php');
    exit();
}
?>
