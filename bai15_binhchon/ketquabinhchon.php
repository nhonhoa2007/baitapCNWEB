<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả bình chọn</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px auto; width: 600px; }
        table.result-table { width: 100%; border-collapse: collapse; border: 1px solid #999; }
        table.result-table td { padding: 8px 12px; border: 1px solid #ccc; }
        .header-cell { background-color: #66CCFF; font-weight: bold; text-align: center; font-size: 13pt; padding: 12px; }
        .bar-container { background: #eee; height: 18px; border-radius: 3px; overflow: hidden; display: inline-block; vertical-align: middle; }
        .bar-fill { background: #FF0000; height: 100%; float: left; }
        .percent-text { margin-left: 8px; font-weight: bold; font-size: 10pt; }
        .footer-cell { font-weight: bold; text-align: right; background-color: #f7f7f7; }
        a.back-link { display: inline-block; margin-top: 15px; color: #1a73e8; text-decoration: none; font-weight: bold; }
        a.back-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
<?php
require_once("./config.php");

$s = "select * from binhchon where idBC=1";
$kq = mysqli_query($config, $s);
$mota = "Bình chọn ý kiến";
if ($d = mysqli_fetch_array($kq)) {
    $mota = $d["MoTa"];
}

$s = "select sum(SoLanChon) as tongsolanchon from phuongan where idBC=1";
$kq = mysqli_query($config, $s);
$tongsobinhchon = 0;
if ($d = mysqli_fetch_array($kq)) {
    $tongsobinhchon = (int)$d["tongsolanchon"];
}
?>
    <table class="result-table">
        <tr>
            <td colspan="3" class="header-cell"><?php echo htmlspecialchars($mota); ?></td>
        </tr>
        <?php
        $s = "select * from phuongan where idBC=1";
        $kq = mysqli_query($config, $s);
        while ($d = mysqli_fetch_array($kq)) {
            $solan = (int)$d["SoLanChon"];
            $phantram = ($tongsobinhchon > 0) ? ($solan / $tongsobinhchon) * 100 : 0;
            $rong = round($phantram * 1.5);
        ?>
        <tr>
            <td width="200"><?php echo htmlspecialchars($d["MoTa"]); ?></td>
            <td width="250">
                <div class="bar-container" style="width: 150px;">
                    <div class="bar-fill" style="width: <?php echo min(150, $rong); ?>px;"></div>
                </div>
                <span class="percent-text"><?php echo round($phantram, 2); ?>%</span>
            </td>
            <td width="150">Số lần chọn: <?php echo $solan; ?></td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="3" class="footer-cell">Tổng số lần chọn: <?php echo $tongsobinhchon; ?></td>
        </tr>
    </table>
    <a href="index.php" class="back-link">&larr; Quay lại trang bình chọn</a>
</body>
</html>
