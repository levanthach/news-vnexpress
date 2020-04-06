<?php 
	ob_start();
	session_start();
	if (!isset($_SESSION["idUser"])  && ($_SESSION["idGroup"] == 1)){
		header("location :../index.html");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang quản trị</title>
	<link rel="stylesheet" href="layor.css">
</head>
<body>
	<table>
		<tr>
			<td id ="hangtieude">TRANG QUẢN TRỊ
				<div style ="width: 200px; float: right;">
					<div>Chào bạn <?php echo $_SESSION["HoTen"] ?></div>
				</div>
			</td>
			
		</tr>
		<tr>
			<td id ="listmenu"><?php require "menu.php" ?></td>
		</tr>
	</table>
</body>
</html>