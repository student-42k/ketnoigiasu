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
		
					$query="SELECT idgiasu, giasuname, giasusex, giasuphone ,giasunghe,
					 giasukhuvuc, giasulop, giasumon,ngaysinh, thangsinh, namsinh FROM giasu Where idgiasu=".$_GET["idgiasudanhgia"];				
					
					$result = mysqli_query($con,$query) or die(mysql_error());
					
					
					$detail = mysqli_fetch_array($result)					
				?>
				
				<div class="lopchuagiao">
				MS gia sư 	:   <?php echo $detail ["idgiasu"]; ?> <br />	
						 Tên gia sư	:	<?php echo $detail ["giasuname"]; ?> <br />
						 Giới tính 	:   <?php echo $detail ["giasusex"]; ?> <br />
						<hr />
						<form  method="post"> <br />
							Viết nhận xét : <input type="text" name="nhanxet" /><br />
							Đánh giá tiêu chuẩn 5 sao : <select name='danhgiasao' >
										<option>1</option> 
										<option>2</option> 
										<option>3</option> 
										<option>4</option> 
										<option>5</option>
									</select> sao<br />		
							<input type="submit" name="xnnhanxet" value="Xác nhận" />	
							</form>
						<?php
						if (isset($_POST["xnnhanxet"]))
						{
							$idgiasu_danhgia= $detail ["idgiasu"];
							$danhgiasao=$_POST["danhgiasao"];
							$nhanxet=$_POST["nhanxet"];
							
							$query2="INSERT INTO danhgia (idgiasu_danhgia,sao,nhanxet) VALUES ('$idgiasu_danhgia','$danhgiasao', '$nhanxet')";
							$result2 = mysqli_query($con,$query2) or die(mysql_error());
							if ($result2) {echo "Nhận xét và đánh giá thành công";}
						}
						?>	
							
						<a href="index.php">Click để quay lại</a>
			  	</div>
			  	
					
			</div>
			
			
			<div class="footer"> 
				<?php include 'footer.php'; ?>
			</div>	
			
		</div>
	</body>
</html>
