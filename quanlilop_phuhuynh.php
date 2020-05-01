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
					phuhuynhsex,tinhtrang, idgiasu1 FROM lopday JOIN lopdangday ON lopday.idlopday=lopdangday.idlopday1 WHERE tinhtrang=1 AND idtaikhoan=".$_SESSION["id"];
					
					$result = mysqli_query($con,$query) or die(mysql_error());
					
			?><h1>Các lớp của bạn đang học</h1><hr>	<?php
				while ($rows = mysqli_fetch_array($result)) 
					{ ?>							
					<div class="lopchuagiao">
						Mã số lớp học : <?php echo $rows ["idlopday"]; ?> <br />
						Tên phụ huynh/học viên : <?php echo $rows ["phuhuynhname"]; ?> <br />
									   	   Lớp : <?php echo $rows ["phuhuynhlop"]; ?><br />
									   	   Môn : <?php echo $rows ["phuhuynhmon"]; ?><br />
								 Thời gian học : <?php echo $rows ["phuhuynhtime"]; ?>	<br />
								 <br /><hr /><br />
								 <?php
								 	$aiday="Select giasuname FROM giasu WHERE idgiasu=".$rows ["idgiasu1"];
									
									$tv_aiday = mysqli_query($con,$aiday) or die(mysql_error());
									$rows2 = mysqli_fetch_array($tv_aiday);
									
									echo "Gia sư đang dạy:".$rows2 ["giasuname"];	
										
								 ?> <br />
								 <a href="detail1.php?detail1=<?php echo $rows ["idgiasu1"];?>"> Bấm xem thông tin gia sư</a>
								  <br /><hr /><br />
								 <form method="post" action="">
								 	<input type="submit" name="hoanthanh" value="Hoàn thành lớp" />
								 	<input type="submit" name="huylop" value="Hủy lớp" /></div>
								 </form>
									<?php 
		
					 if(isset($_POST["hoanthanh"]))
					 {
					 	$cl_td_tinhtrang="UPDATE lopday SET tinhtrang = 2 WHERE idlopday =".$rows["idlopday"];		
						
						$result1 = mysqli_query($con,$cl_td_tinhtrang)or die(mysql_error());
						
						if($result1) 
						{echo "Bạn đã học xong lớp này<br /><a href='index.php'>Quay lại trang chủ</a>";}
					 }
					 if(isset($_POST["huylop"]))
					 {
					 	$cl_td_tinhtrang2="UPDATE lopday SET tinhtrang = 0 WHERE idlopday =".$rows["idlopday"];	
							
						$result2 = mysqli_query($con,$cl_td_tinhtrang2)or die(mysql_error());
						
						if($result2)
						{echo "Bạn đã hủy lớp này, vui lòng đợi gia sư khác nhận lớp<br /><a href='index.php'>Quay lại trang chủ</a>";}
					 }
			
			}	

						$query3="SELECT idlopday,phuhuynhname,phuhuynhphone, 
					phuhuynhkhuvuc,phuhuynhlop,phuhuynhmon,phuhuynhtime, 
					phuhuynhsex,tinhtrang, idgiasu1 FROM lopday JOIN lopdangday ON lopday.idlopday=lopdangday.idlopday1 WHERE tinhtrang=2 AND idtaikhoan=".$_SESSION["id"];
					
					$result3 = mysqli_query($con,$query3) or die(mysql_error());
					?><h1>Các lớp của bạn đã học xong</h1><hr /> <?php
					while ($rows3 = mysqli_fetch_array($result3)) 
					{ ?>						
					<div class="lopchuagiao">
						Mã số lớp học : <?php echo $rows3 ["idlopday"]; ?> <br />
						Tên phụ huynh/học viên : <?php echo $rows3 ["phuhuynhname"]; ?> <br />
									   	   Lớp : <?php echo $rows3 ["phuhuynhlop"]; ?><br />
									   	   Môn : <?php echo $rows3 ["phuhuynhmon"]; ?><br />
								 Thời gian học : <?php echo $rows3 ["phuhuynhtime"]; ?>	<br />
								 <br /><hr /><br />
								 <?php
								 	$aiday2="Select giasuname FROM giasu WHERE idgiasu=".$rows3 ["idgiasu1"];
									
									$tv_aiday2 = mysqli_query($con,$aiday2) or die(mysql_error());
									$rows4 = mysqli_fetch_array($tv_aiday2);
									
									echo "Gia sư dạy:".$rows4 ["giasuname"];	
										
								 ?> <br />
								 <a href="detail1.php?detail1=<?php echo $rows3 ["idgiasu1"];?>"> Bấm xem thông tin gia sư</a>
								  <br /><hr /><br />
								<a href="phuhuynhdanhgia.php?idgiasudanhgia=<?php echo $rows3 ["idgiasu1"];?>"> Đánh giá và nhận xét</a></div>
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
