<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>GAME SHOP php</title>
	<link href="css/css2.css" type="text/css" rel="stylesheet">
</head>

<body class="rgbblueblack1">
	<h1 align="center">PHP PAGE</h1>
	<div align="center" style="color: #43007C ; font-size: 40px ; margin: 2%">
	<?php
	$text=  $_POST['text1'];
	$number=  $_POST['number1'];
	echo 'welcome: '  .$text;
	?>
		</div>
	<div align="center" style="color: whitesmoke ; font-size: 25px ; margin: 2%">
		<?php
		$email=  $_POST['email1'];
		echo 'you email: ' .$email;
		?>
		</div>
		<div align="center" style="color: whitesmoke ; font-size: 25px ; margin: 2%">
		<?php
		$number=  $_POST['number1'];
		echo 'your phone number: ' .$number;
		?>
			
		</div>
</body>
</html>