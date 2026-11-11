<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình chọn ý kiến</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px auto; width: 500px; line-height: 1.6; }
        #binhchon { border: 1px solid #3498db; padding: 20px; border-radius: 6px; background-color: #f7fbfe; }
        .title { font-weight: bold; color: #2980b9; font-size: 14pt; margin-bottom: 10px; }
        .question { font-weight: bold; margin-bottom: 12px; }
        .option { margin: 8px 0; }
        input[type="submit"] { margin-top: 15px; padding: 6px 20px; background: #3498db; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-size: 11pt; }
        input[type="submit"]:hover { background: #2980b9; }
    </style>
</head>
<body>
    <div class="title">BÌNH CHỌN</div>
    <div id="binhchon">
        <form id="form1" name="form1" method="get" action="xulybinhchon.php">
            <div class="question">Bạn nghĩ sao về chất lượng của trang web ute.udn.vn?</div>
            <div>
                <?php
                    require_once("./config.php");
                    $s = "select * from phuongan where idBC=1";
                    $kq = mysqli_query($config, $s);
                    $i = 0;
                    while($row = mysqli_fetch_array($kq)) {
                ?>
                <div class="option">
                    <label>
                        <input type="radio" value="<?php echo $row['idPA'];?>" name="idPA" <?php if($i==0) {echo "checked='checked'"; $i++;} ?> />
                        <?php echo htmlspecialchars($row['MoTa']);?>
                    </label>
                </div>
                <?php } ?>
            </div>
            <div>
                <input id="button" type="submit" value="Xem kết quả" name="Submit" />
            </div>
        </form>
    </div>
</body>
</html>
