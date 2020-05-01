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
		
					$query="SELECT * FROM giasu";
								
					$result = mysqli_query($con,$query) or die(mysql_error());
					
					while ($rows = mysqli_fetch_array($result)) 
					{ ?>
						<div class="lopchuagiao">
							<img src="images/<?php echo $rows ['giasuanh']; ?>" width="100" height="120"  /> <br />			
							Mã gia sư : <?php echo $rows ["idgiasu"]; ?> <br />
							Tên gia sư : <?php echo $rows ["giasuname"]; ?> <br />
							<a href="xemnhanxet.php?nhanxet=<?php echo $rows ["idgiasu"];?>"> Bấm xem nhận xét của gia sư này </a>
						</div>
					
					
					<?php }
					
					?>
			  
			  	
					
			</div>
			
			
			<div class="footer"> 
				<?php include 'footer.php'; ?>
			</div>	
			
		</div>
	</body>
</html>
