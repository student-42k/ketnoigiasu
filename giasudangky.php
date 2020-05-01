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
				<?php include 'menu.php';?>
			</div> 
						
			<div class="content">
				
				<?php 
				require 'db.php'; 		
						
					
				///kiểm tra đã đăng nhập chưa			
				if (isset($_SESSION['username']))
				{
					//kiểm tra quyền 
					if($_SESSION["quyen"]==="gia sư tìm lớp") 
					{
						$cl_truyvan="SELECT*FROM giasu WHERE idgiasu=".$_SESSION["id"];
						$result1 = mysqli_query($con,$cl_truyvan) or die(mysql_error());
					
						$rows = mysqli_num_rows($result1);
						//kiểm tra đã đăng kí chưa
						if($rows==1)
						{
							echo "Bạn đã đăng kí rồi <br /><a href='index.php'>Quay lại trang chủ</a> ";
						}else {include 'giasudangky1.php';}
						
					}
					
					else {echo"Bạn không phải là gia sư tìm lớp nên không được đăng kí <br /><a href='index.php'>Quay lại trang chủ</a> ";
						
					}
				}
				else 
				{
					echo "<div class='form'><h3>Bạn cần phải đăng nhập </h3><br /> Click để <a href='login.php'>đăng nhập</a></div>";		
				}

				//nhập dữ liệu lần đầu
				if(isset($_POST["submit"]))
				{
							
						$idgiasu=$_SESSION['id'];
						$giasuname=$_POST["giasuname"];
						$giasusex=$_POST["gender"];
						$giasungay=$_POST["ngay"];
						$giasuthang=$_POST["thang"];
						$giasunam=$_POST["nam"];
						$giasuphone=$_POST["sdt"];
						 
						
						
						$giasunghe=$_POST["hiendangla"];
						$giasukhuvuc=$_POST["daytai"];
						$giasulop=$_POST["daylop"];
						$giasumon=$_POST["daymon"]; 
						
						
						$giasutime="";
						
						if(isset($_POST["chon1"]))
						{
							$giasutime=$giasutime.$_POST["chon1"]."-";
						}
						if(isset($_POST["chon2"]))
						{
							$giasutime=$giasutime.$_POST["chon2"]."-";
						}
						if(isset($_POST["chon3"]))
						{
							$giasutime=$giasutime.$_POST["chon3"]."-";
						}
						if(isset($_POST["chon4"]))
						{
							$giasutime=$giasutime.$_POST["chon4"]."-";
						}
						if(isset($_POST["chon5"]))
						{
							$giasutime=$giasutime.$_POST["chon5"]."-";
						}
						if(isset($_POST["chon6"]))
						{
							$giasutime=$giasutime.$_POST["chon6"]."-";
						}
						if(isset($_POST["chon7"]))
						{
							$giasutime=$giasutime.$_POST["chon7"]."-";
						}
						if(isset($_POST["chon8"]))
						{
							$giasutime=$giasutime.$_POST["chon8"]."-";
						}
						if(isset($_POST["chon9"]))
						{
							$giasutime=$giasutime.$_POST["chon9"]."-";
						}
						if(isset($_POST["chon10"]))
						{
							$giasutime=$giasutime.$_POST["chon10"]."-";
						}
						if(isset($_POST["chon11"]))
						{
							$giasutime=$giasutime.$_POST["chon11"]."-";
						}
						if(isset($_POST["chon12"]))
						{
							$giasutime=$giasutime.$_POST["chon12"]."-";
						}
						if(isset($_POST["chon13"]))
						{
							$giasutime=$giasutime.$_POST["chon13"]."-";
						}
						if(isset($_POST["chon14"]))
						{
							$giasutime=$giasutime.$_POST["chon14"]."-";
						}
						if(isset($_POST["chon15"]))
						{
							$giasutime=$giasutime.$_POST["chon15"]."-";
						}
						if(isset($_POST["chon16"]))
						{
							$giasutime=$giasutime.$_POST["chon16"]."-";
						}
						if(isset($_POST["chon17"]))
						{
							$giasutime=$giasutime.$_POST["chon17"]."-";
						}
						if(isset($_POST["chon18"]))
						{
							$giasutime=$giasutime.$_POST["chon18"]."-";
						}
						if(isset($_POST["chon19"]))
						{
							$giasutime=$giasutime.$_POST["chon19"]."-";
						}
						if(isset($_POST["chon20"]))
						{
							$giasutime=$giasutime.$_POST["chon20"]."-";
						}
						if(isset($_POST["chon21"]))
						{
							$giasutime=$giasutime.$_POST["chon21"]."-";
						}
						

						$image = $_FILES['image']['name'];
						$target = "images/".basename($image);
						move_uploaded_file($_FILES['image']['tmp_name'], $target);
						
						//Kiểm tra đã nhập đủ thong tin chua 
					    if (!$giasuname || !$giasusex || !$giasungay || !$giasuthang || !$giasunam 
					    	|| !$giasukhuvuc || !$giasulop || !$giasumon || !$giasutime ) 
					    {
					        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
					        exit;
					    }
						
						
					
				
					$query="INSERT INTO giasu (idgiasu,giasuname,giasusex,giasuphone,giasunghe,
					giasukhuvuc,giasulop,giasumon,giasutime,ngaysinh,thangsinh,namsinh,giasuanh) VALUES ('$idgiasu','$giasuname', '$giasusex', 
					'$giasuphone', '$giasunghe', '$giasukhuvuc', '$giasulop', '$giasumon', 
					'$giasutime', '$giasungay', '$giasuthang', '$giasunam','$image')";
					
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
