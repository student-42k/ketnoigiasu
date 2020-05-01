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
		
					$query= "SELECT idlopday,phuhuynhname,phuhuynhphone, 
					phuhuynhkhuvuc,phuhuynhlop,phuhuynhmon,phuhuynhtime, 
					phuhuynhsex FROM lopday WHERE idlopday = 0".$_GET["detail"];
								
					$result = mysqli_query($con,$query) or die(mysql_error());
					
					
					$detail = mysqli_fetch_array($result)					
				?>
				
				<div class="lopchuagiao">
				Mã số lớp học : <?php echo $detail ["idlopday"]; ?> <br />
				Tên phụ huynh/học viên : <?php echo $detail ["phuhuynhname"]; ?> <br />
				Số điện thoại liên lạc : <?php echo $detail ["phuhuynhphone"]; ?> <br />
						   Địa chỉ học : <?php echo $detail ["phuhuynhkhuvuc"]; ?><br />
							   Dạy lớp : <?php echo $detail ["phuhuynhlop"]; ?><br />
							   Dạy môn : <?php echo $detail ["phuhuynhmon"]; ?><br />
						 Thời gian học : <?php echo $detail ["phuhuynhtime"]; ?><br />
			  Yêu cầu giới tính gia sư : <?php echo $detail ["phuhuynhsex"]; ?><br />
			 
			  <br /> <hr /> <br />
			  <?php 
			   if (isset($_SESSION['username']) )
				{
					if ($_SESSION['quyen']==="gia sư tìm lớp"  ) 
					 { ?>
 					 	
 					 <form action="" method="post"><input type="submit" name="xnd" value="Nhận lớp" /> </form><?php
 					 	
 					 	if(isset($_POST["xnd"]))
 					 	{
 					 		$cl_td_tinhtrang="UPDATE lopday SET tinhtrang = 1 WHERE idlopday =".$_GET["detail"];
							
							$result1 = mysqli_query($con,$cl_td_tinhtrang) or die(mysql_error());
							
							$cl_nhap_lopdangday="INSERT INTO lopdangday (idlopday1,idgiasu1) VALUES ('".$_GET["detail"]."','".$_SESSION["id"]."')";
							
							$result2 = mysqli_query($con,$cl_nhap_lopdangday) or die(mysql_error());
							
							if($result1 && $result2)
							{echo "Bạn đã nhận lớp dạy thành công<br />Hãy tới trang quản lí lớp";}
							
 					 	}
					 }
					else 
					{
						echo "Bạn không phải gia sư nên không được nhận lớp"; 
					}
					
					echo "<br />";
					echo " <a href='hienthilopchuagiao.php' >Click để quay lại; </a>" ;
			  	}
			  else 
				{
					echo "<div class='form'><h3>Bạn cần phải đăng nhập để nhận lớp </h3><br /> <a href='login.php'>Click để đăng nhập</a>
							<br /><a href='hienthilopchuagiao.php' >Click để quay lại</a>
							</div>";
				}
			  ?>
			  </div>
			
			</div>
			
			
			<div class="footer"> 
				<?php include 'footer.php'; ?>
			</div>	
			
		</div>
	</body>
</html>
