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
				<?php
					require 'db.php';
		
					$query="SELECT * FROM giasu Where idgiasu = ".$_GET["detail1"];				
					
					$result = mysqli_query($con,$query) or die(mysql_error());
					
					
					$detail = mysqli_fetch_array($result)					
				?>
				
				<div class="lopchuagiao">
					<img src="images/<?php echo $detail ["giasuanh"]; ?>" width="100" height="120" /> <br />	
				MS gia sư 	:   <?php echo $detail ["idgiasu"]; ?> <br />	
						 Tên gia sư	:	<?php echo $detail ["giasuname"]; ?> <br />
						 Giới tính 	:   <?php echo $detail ["giasusex"]; ?> <br />
						 Sinh ngày :	<?php echo $detail ["ngaysinh"]."-".$detail ["thangsinh"]."-".$detail ["namsinh"]; ?> <br />
			Số điện thoại liên lạc  :	<?php echo $detail ["giasuphone"]; ?> <br />
		   				Hiện đang là :	<?php echo $detail ["giasunghe"]; ?> <br />
							 Khu vực:	<?php echo $detail ["giasukhuvuc"]; ?> <br />
								Lớp :	<?php echo $detail ["giasulop"]; 	?> <br />
								Môn :	<?php echo $detail ["giasumon"]; 	?> <br />
						<hr />
						<a href="index.php">Click để quay lại</a>
			  	</div>
			  	
					
			</div>
			
			
			<div class="footer"> 
				<?php include 'footer.php'; ?>
			</div>	
			
		</div>
	</body>
</html>
