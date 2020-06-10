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
				
				if (isset($_SESSION['username']))
				{
						$cl_truyvan="SELECT*FROM lopday WHERE idtaikhoan=".$_SESSION["id"];
						
						$result1 = mysqli_query($con,$cl_truyvan) or die(mysql_error());
					
						$rows = mysqli_num_rows($result1);
						//kiểm tra đã đăng kí bao nhiêu lớp
						echo "Bạn đã đăng kí ".$rows." lớp";
					
					 	include 'phuhuynhdangky1.php'; 
				} 
				else 
				{
					echo "<div class='form'><h3>Bạn cần phải đăng nhập </h3><br /> Click để <a href='login.php'>đăng nhập</a></div>";
						
				}
				

					
						if(isset($_POST["submit"])
					      )
						{
							
						$idtaikhoan=$_SESSION['id'];
						$phuhuynhname=$_POST["phuhuynhname"];
						$phuhuynhphone=$_POST["phuhuynhphone"];
						$phuhuynhsex=$_POST["gender"];
						$phuhuynhkhuvuc=$_POST["phuhuynhkhuvuc"];
						$phuhuynhlop=$_POST["phuhuynhlop"];
						$phuhuynhmon=$_POST["phuhuynhmon"]; 
						$sobuoi=$_POST["sobuoi"]; 
						$phuhuynhtime="";
						
						if(isset($_POST["chon1"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon1"]."-";
						}
						if(isset($_POST["chon2"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon2"]."-";
						}
						if(isset($_POST["chon3"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon3"]."-";
						}
						if(isset($_POST["chon4"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon4"]."-";
						}
						if(isset($_POST["chon5"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon5"]."-";
						}
						if(isset($_POST["chon6"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon6"]."-";
						}
						if(isset($_POST["chon7"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon7"]."-";
						}
						if(isset($_POST["chon8"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon8"]."-";
						}
						if(isset($_POST["chon9"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon9"]."-";
						}
						if(isset($_POST["chon10"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon10"]."-";
						}
						if(isset($_POST["chon11"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon11"]."-";
						}
						if(isset($_POST["chon12"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon12"]."-";
						}
						if(isset($_POST["chon13"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon13"]."-";
						}
						if(isset($_POST["chon14"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon14"]."-";
						}
						if(isset($_POST["chon15"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon15"]."-";
						}
						if(isset($_POST["chon16"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon16"]."-";
						}
						if(isset($_POST["chon17"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon17"]."-";
						}
						if(isset($_POST["chon18"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon18"]."-";
						}
						if(isset($_POST["chon19"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon19"]."-";
						}
						if(isset($_POST["chon20"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon20"]."-";
						}
						if(isset($_POST["chon21"]))
						{
							$phuhuynhtime=$phuhuynhtime.$_POST["chon21"]."-";
						}
						$trn_date = date("Y-m-d H:i:s");
						
						
						//Kiểm tra đã nhập đủ thong tin chua 
					    if (!$phuhuynhname || !$phuhuynhsex || !$phuhuynhphone || !$phuhuynhkhuvuc 
					    	|| !$phuhuynhlop || !$phuhuynhmon || !$phuhuynhtime ) 
					    {
					        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
					        exit;
					    }
						
				
				$query="INSERT INTO lopday (phuhuynhname,phuhuynhphone, 
				phuhuynhkhuvuc,phuhuynhlop,phuhuynhmon,phuhuynhtime,phuhuynhsex,tinhtrang,idtaikhoan,time_submit,sobuoi) 
				VALUES ('$phuhuynhname', '$phuhuynhphone', '$phuhuynhkhuvuc', '$phuhuynhlop',
				 '$phuhuynhmon', '$phuhuynhtime', '$phuhuynhsex', '0','$idtaikhoan','$trn_date','$sobuoi')";
				   
				
				$result = mysqli_query($con,$query);	
					
					if($result)
					{
								echo "<div class='form'><h3>Bạn đã đăng ký thành công</h3>
										<br/>Click để <a href='index.php'>quay lại trang chủ</a>
										</div>";
					} 
				
				}
					?>
				
			</div>
			
			
			<div class="footer"> 
				<?php include 'footer.php'; ?>
			</div>	
			
		</div>
	</body>
</html>
