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
					
					$query="SELECT phuhuynhkhuvuc, 
									phuhuynhlop,
									phuhuynhmon,
									time_submit 
							FROM lopday 
								WHERE tinhtrang = 0 
								ORDER BY time_submit DESC";
								
					$result = mysqli_query($con,$query) or die(mysql_error());
					
					$rows = mysql_fetch_array($result); 
					
					
					while ($rows) { 
				?>		
						<div class="lopchuagiao" >
							Khu vực: <?php echo $row["phuhuynhkhuvuc"] ?> <br />
							Lớp: <?php echo $row["phuhuynhlop"] ?> <br />
							Môn học: <?php echo $row["phuhuynhmon"] ?> 
						</div>  
						
						
					<?php } ?>
					
					
			</div>
			
			
			<div class="footer"> 
				<?php include 'footer.php'; ?>
			</div>	
			
		</div>
	</body>
</html>
