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
				<h1>Gia sư hiện có</h1>
				<?php
					require 'db.php';
					
					$query="SELECT idgiasu, giasuname, giasusex, giasukhuvuc, giasulop, giasumon FROM giasu";
								
					$result = mysqli_query($con,$query) or die(mysql_error());
					
					
					while ($rows = mysqli_fetch_array($result)) 
					{ ?>
						
						<div class="lopchuagiao">
						MS gia sư 	:   <?php echo $rows ["idgiasu"]; ?> <br />	
						 Tên gia sư	:	<?php echo $rows ["giasuname"]; ?> <br />
						 Giới tính 	:   <?php echo $rows ["giasusex"]; ?> <br />
							 Khu vực:	<?php echo $rows ["giasukhuvuc"]; ?> <br />
								Lớp :	<?php echo $rows ["giasulop"]; 	?> <br />
								Môn :	<?php echo $rows ["giasumon"]; 	?> <br />
								
							<br />	<hr /> <br />
								<a href="detail1.php?detail1=<?php echo $rows ["idgiasu"];?>"> Bấm xem chi tiết</a>
						</div>
					<?php
					 }
					
					?>
					
					
			</div>
			
			
			<div class="footer"> 
				<?php include 'footer.php'; ?>
			</div>	
			
		</div>
	</body>
</html>
