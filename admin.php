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
				<h1>database</h1>
				<div class="lopchuagiao" >
					<ul>
						<li><a href="admin.php?csdl=bang_user">Bảng user</a></li>
						<li><a href="admin.php?csdl=bang_giasu">Bảng gia sư</a></li>
						<li><a href="admin.php?csdl=bang_lopday">Bảng lớp dạy</a></li>
						<li><a href="admin.php?csdl=bang_lopdangday">Bảng lớp đang dạy </a></li>
						<li><a href="admin.php?csdl=bang_nhanxet">Bảng nhận xét</a></li>
					</ul></div> <br /><hr /><br /> 
					
					<?php
					require 'db.php';
					
				if(isset($_GET["csdl"])){
				switch ($_GET["csdl"]) {
					case 'bang_user':
						include 'bang-user.php';
						break;
					case 'bang_giasu':
						include 'bang-giasu.php';
						break;
					case 'bang_lopday':
						include 'bang-lopday.php';
						break;
					case 'bang_lopdangday':
						include 'bang-lopdangday.php';
						break;
					case 'bang_nhanxet':
						include 'bang-nhanxet.php';
						break;
				}
				}
							
			?>
			</div>
			
			
			<div class="footer"> 
				<?php include 'footer.php'; ?>
			</div>	
			
		</div>
	</body>
</html>
