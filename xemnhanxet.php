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
		
					$query2="SELECT*FROM danhgia Join giasu ON danhgia.idgiasu_danhgia = giasu.idgiasu WHERE idgiasu=".$_GET["nhanxet"];
					$result2 = mysqli_query($con,$query2) or die(mysql_error());
					while ($rows2 = mysqli_fetch_array($result2)) 
					{ ?>
						<div class="lopchuagiao">
							Nhận xét : <?php echo $rows2 ["nhanxet"]; ?> <br />
							Đánh giá: <?php echo $rows2 ["sao"]; ?> sao <br />
							<hr /> <br />
						</div>
						
					
					
					<?php } 
						
					
					?><div class="lopchuagiao"><a href="index.php" > Quay lại</a>	</div>
			  
			</div>
			
			
			<div class="footer"> 
				<?php include 'footer.php'; ?>
			</div>	
			
		</div>
	</body>
</html>
