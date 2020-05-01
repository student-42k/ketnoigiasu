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
				
				<h1>Các lớp chưa có gia sư</h1>
				<?php
					require 'db.php';
					
					$query="SELECT	idlopday,
									phuhuynhkhuvuc, 
									phuhuynhlop,
									phuhuynhmon,
									phuhuynhtime,
									time_submit 
							FROM 	lopday 
							WHERE	 tinhtrang = 0 
							ORDER BY time_submit DESC";
								
					$result = mysqli_query($con,$query) or die(mysql_error());
					
					
					while ($rows = mysqli_fetch_array($result)) 
					{ ?>
						
						<div class="lopchuagiao">
							Mã lớp 	:   <?php echo $rows ["idlopday"]; ?> <br />
							 Khu vực:	<?php echo $rows ["phuhuynhkhuvuc"]; ?> <br />
								Lớp :	<?php echo $rows ["phuhuynhlop"]; 	?> <br />
								Môn :	<?php echo $rows ["phuhuynhmon"]; 	?> <br />
					  Thời gian dạy :   <?php echo $rows ["phuhuynhtime"]; 	?> <br /> 
					 <br /> <hr /> <br />
						<a href="detail.php?detail=<?php echo $rows ["idlopday"];?>"> Bấm xem chi tiết</a>
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
