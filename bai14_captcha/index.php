<?php
session_start();
if (isset($_POST['submit'])) {
    $input = $_POST['input'] ?? '';
    if (isset($_SESSION['captcha']) && $input === $_SESSION['captcha']) {
        $_SESSION['message'] = "* Right captcha !!!";
        $_SESSION['msg_class'] = "success";
    } else {
        $_SESSION['message'] = "* Wrong captcha !!!";
        $_SESSION['msg_class'] = "error";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CAPTCHA</title>
<style>
body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background: #ecf0f1;
}
form{
	width: 450px;
	margin: 50px auto;
	border: 1px solid #95a5a6;
	border-radius: 5px;
	background: #fff;
	padding: 25px;
	box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}
h2 {
	margin-top: 0;
	color: #2c3e50;
}
form input[type="text"]{
	width: 200px;
	height: 46px;
	padding: 0 10px;
	margin: 0;
	float: left;
	border: 1px solid #2c3e50;
	margin-right: 15px;
	border-radius: 5px;
	font-size: 14pt;
	box-sizing: border-box;
}
form img {
	vertical-align: middle;
	border-radius: 4px;
}
form input[type="submit"]{
	padding: 8px 24px;
	margin-top: 15px;
	background: #27ae60;
	color: #fff;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	font-size: 11pt;
}
form input[type="submit"]:hover{
	background: #219150;
}
#message{
	font-weight: bold;
	font-size: 12pt;
	margin-top: 15px;
}
#message.error{
	color: #c0392b;
}
#message.success{
	color: #27ae60;
}
.clear-fx{
	clear: both;
}
</style>
</head>
<body>
<form action="" method="POST">
	<h2>CAPTCHA - WEB</h2>
	<p>Please enter the captcha:</p>
	<div style="margin-bottom: 10px;">
		<input type="text" name="input" autocomplete="off" required>
		<img src="captcha.php" alt="Captcha" />
		<div class="clear-fx"></div>
	</div>
	<input type="submit" name="submit" value="Send">
	<p id="message" class="<?php echo $_SESSION['msg_class'] ?? ''; ?>"><?php
		if(isset($_SESSION['message'])){
			echo $_SESSION['message'];
			unset($_SESSION['message']);
			unset($_SESSION['msg_class']);
		}
	?></p>
</form>
</body>
</html>
