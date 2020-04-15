<?php session_start(); ?>
<!DOCTYPE html>
<html lang="vi">	
	<head>
		<meta charset="utf-8">
		<title>Web_tim_gia_su</title>
		<link href="style.css" rel="stylesheet" >
	
	</head>
	<body>
		<div class="wrapper">
			<div id="banner"> 
				<img src="banner.jpg" alt="banner" width="880" height="280" >			
			</div>
			
			<div class ="menu"> 
				<?php include 'menu.php';	?>
			</div> 
			
			<div class="content">
				<h1>Lớp của bạn </h1>
				
				<?php
					require 'db.php';
					
					$query= "SELECT idlopday,phuhuynhname,phuhuynhphone, 
					phuhuynhkhuvuc,phuhuynhlop,phuhuynhmon,phuhuynhtime, 
					phuhuynhsex, tinhtrang 
					FROM lopday join lopcuagiasu
					ON lopday.idlopday = lopcuagiasu.idlopday 
					WHERE tinhtrang = 1  ".$_GET["detail"];
				?>
	
				<div class="lopchuagiao">
					
				</div>
			</div>
			
			
			<div class="footer"> 
				<?php include 'footer.php'; ?>
			</div>	
			
		</div>
	</body>
</html>
