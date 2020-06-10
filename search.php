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
				<h1>Tìm lớp theo yêu cầu</h1>
				<div class="lopchuagiao" >
					<ul>
						<li><a href="search.php?tieuchi=khuvuc">Tìm theo khu vực</a></li>
						<li><a href="search.php?tieuchi=gioitinh">Tìm theo yêu cầu giới tính</a></li>
						<li><a href="search.php?tieuchi=lop">Tìm theo lớp</a></li>
						<li><a href="search.php?tieuchi=mon">Tìm theo môn </a></li>
						<li><a href="search.php?tieuchi=thoigianday">Tìm theo thời gian dạy và học</a></li>
					</ul></div> <br /><hr /><br /> 
					<h1>Tìm lớp tự động</h1>
				<div class="lopchuagiao">
					<?php 
			   if (isset($_SESSION['username']) )
				{
					if ($_SESSION['quyen']==="gia sư tìm lớp"  ) 
					 { 
 					 	include 'tudong.php';
					 }
					else 
					{
						echo "Bạn không phải gia sư nên không được thực hiện chức năng này "; 
					}
		
			  	}
			  else 
				{
					echo "<div class='form'><h3>Bạn cần phải đăng nhập để thực hiện chức năng này </h3><br /> <a href='login.php'>Click để đăng nhập</a>
							</div>";
				}
			  ?>
					
				</div> <br /><hr /><br /> 
				
			<?php
				if(isset($_GET["tieuchi"])){
				switch ($_GET["tieuchi"]) {
					case 'khuvuc':
						include 'theokhuvuc.php';
						break;
					case 'gioitinh':
						include 'theogioitinh.php';
						break;
					case 'lop':
						include 'theolop.php';
						break;
					case 'mon':
						include 'theomon.php';
						break;
					case 'thoigianday':
						include 'theobuoi.php';
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
