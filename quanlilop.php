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
					
					
					$query="SELECT idlopday,phuhuynhname,phuhuynhphone, 
					phuhuynhkhuvuc,phuhuynhlop,phuhuynhmon,phuhuynhtime, 
					phuhuynhsex,tinhtrang FROM lopday JOIN lopdangday ON lopday.idlopday=lopdangday.idlopday1 WHERE idgiasu1=".$_SESSION["id"];
					
					$result = mysqli_query($con,$query) or die(mysql_error());
					
			
				while ($rows = mysqli_fetch_array($result)) 
					{ ?>					
						<h1>Các lớp của bạn</h1>	
					<div class="lopchuagiao">
						Mã số lớp học : <?php echo $rows ["idlopday"]; ?> <br />
						Tên phụ huynh/học viên : <?php echo $rows ["phuhuynhname"]; ?> <br />
						Số điện thoại liên lạc : <?php echo $rows ["phuhuynhphone"]; ?> <br />
								   Địa chỉ học : <?php echo $rows ["phuhuynhkhuvuc"]; ?><br />
									   Dạy lớp : <?php echo $rows ["phuhuynhlop"]; ?><br />
									   Dạy môn : <?php echo $rows ["phuhuynhmon"]; ?><br />
								 Thời gian học : <?php echo $rows ["phuhuynhtime"]; ?>	<br />
								 <br /><hr /><br />
								 	<?php	
								 	if($rows["tinhtrang"]==2) {
							
								  $query4="Select*FROM danhgia WHERE idgiasu_danhgia=".$_SESSION["id"];
								  $result4 = mysqli_query($con,$query4) or die(mysql_error());
								  $rows4 = mysqli_fetch_array($result4); 
									echo"Lớp này bạn đã dạy xong rồi <br /><br /><hr> ";	
								 ?>
								 Đánh giá của học viên <br />
								 Nhận xét : <?php echo $rows4 ["nhanxet"]; ?> <br />
								 Đánh giá : <?php echo $rows4 ["sao"]; ?> sao <br />
								 <br /><a href='index.php'>Quay lại trang chủ</a>
									<?php }
									
									if($rows["tinhtrang"]==0 || $rows["tinhtrang"]==1) { ?>
								
								 <form method="post" action="">
								 	<input type="submit" name="hoanthanh" value="Hoàn thành lớp" />
								 	<input type="submit" name="huylop" value="Hủy lớp" />
								 </form> </div>
									<?php }
		
					 if(isset($_POST["hoanthanh"]))
					 {
					 	$cl_td_tinhtrang="UPDATE lopday SET tinhtrang = 2 WHERE idlopday =".$rows["idlopday"];		
						
						$result1 = mysqli_query($con,$cl_td_tinhtrang)or die(mysql_error());
						
						if($result1) 
						{echo "Bạn đã hoàn thành khóa dạy này<br /><a href='index.php'>Quay lại trang chủ</a>";}
					 }
					 if(isset($_POST["huylop"]))
					 {
					 	$cl_td_tinhtrang2="UPDATE lopday SET tinhtrang = 0 WHERE idlopday =".$rows["idlopday"];	
							
						$result2 = mysqli_query($con,$cl_td_tinhtrang2)or die(mysql_error());
						
						if($result2)
						{echo "Bạn đã hủy khóa dạy này<br /><a href='index.php'>Quay lại trang chủ</a>";}
					 }
				 } ?>

				 		

			</div>
			
			
			<div class="footer"> 
				<?php include 'footer.php'; ?>
			</div>	
			
		</div>
	</body>
</html>
