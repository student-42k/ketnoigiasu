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
			
			<div class="banggia"> 
				<?php include 'banggia.php'; ?>
			</div>
			
			<div class="content">
				
				<h1> Gia sư 5 sao</h1>
					<div class="giasu5sao">
					<?php
					 include 'giasu5sao1.php';
					?> </div>


				<h1> Gia sư tiêu biểu</h1>
				<div class="giasu5sao">
					<?php
				 include 'giasunhieulop1.php';
				?>  </div>
	
				
			</div>
			

			
			<div class="footer"> 
				<?php include 'footer.php'; ?>
			</div>	
			
		</div>
	</body>
</html>
