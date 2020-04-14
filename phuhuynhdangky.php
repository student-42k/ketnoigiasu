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
				
				<h1>Đăng kí liền tay, gia sư bay tới ngay !</h1>
				
				<form action="" method="post" name="dangkitimlopday"></br/>
					
					Họ tên phụ huynh/học viên: <input type="text" name="phuhuynhname" /> <br />
					
					Số điện thoại liên lạc : <input type="text" name="phuhuynhphone" /> <br />
					Địa chỉ dạy và học : <input type="text" name="phuhuynhkhuvuc" placeholder="ghi rõ ràng chi tiết địa chỉ" /> <br />
					
					Yêu cầu giới tính gia sư :
					  <input type="radio" name="gender" value="nam" checked="checked"> Nam 
					   <input type="radio" name="gender" value="nu" checked="checked"> Nữ 
  					<input type="radio" name="gender" value="khong-gioitinh"> Không yêu cầu <br />
					
					Tìm lớp : <select name="phuhuynhlop">
										<option>lớp 1</option>
										<option>lớp 2</option>
										<option>lớp 3</option>
										<option>lớp 4</option>
										<option>lớp 5</option>
										<option>lớp 6</option>
										<option>lớp 7</option>
										<option>lớp 8</option>
										<option>lớp 9</option>
										<option>lớp 10</option>
										<option>lớp 11</option>
										<option>lớp 12</option>
										<option>luyện thi ĐH</option>
									</select> <br />
					Môn học : <select name="phuhuynhmon">
										<option>toán</option>
										<option>lí</option>
										<option>hóa</option>
										<option>văn </option>
										<option>sử</option>
										<option>địa</option>
										<option>sinh</option>
										<option>tiếng anh</option>
										<option>toán,tiếng việt (cấp 1) </option>
									</select> <br />
					Thời gian (rãnh) có thể day : <br />
					<table border ="1" cellspacing="0" cellpadding="16" width="550" height="100" bgcolor="#58ACFA">
						<tr align="center" >
							<th>Thứ/Buổi</th>
							<th> 2 </th>
							<th> 3 </th>
							<th> 4 </th>
							<th> 5 </th>
							<th> 6 </th>
							<th> 7 </th>
							<th> CN </th>
						</tr>
						<tr align="center">
							<td> Sáng </td>
							<td> <input type="checkbox" name="chon1" value="sang2"></td>
							<td> <input type="checkbox" name="chon2" value="sang3"></td>
							<td> <input type="checkbox" name="chon3" value="sang4"></td>
							<td> <input type="checkbox" name="chon4" value="sang5"></td>
							<td> <input type="checkbox" name="chon5" value="sang6"></td>
							<td> <input type="checkbox" name="chon6" value="sang7"></td>
							<td> <input type="checkbox" name="chon7" value="sangCN"></td>
						</tr>
						<tr align="center">
							<td> Chiều </td>
							<td> <input type="checkbox" name="chon8" value="chieu2"></td>
							<td> <input type="checkbox" name="chon9" value="chieu3"></td>
							<td> <input type="checkbox" name="chon10" value="chieu4"></td>
							<td> <input type="checkbox" name="chon11" value="chieu5"></td>
							<td> <input type="checkbox" name="chon12" value="chieu6"></td>
							<td> <input type="checkbox" name="chon13" value="chieu7"></td>
							<td> <input type="checkbox" name="chon14" value="chieuCN"></td>
						</tr>
						<tr align="center">
							<td> Tối </td>
							<td> <input type="checkbox" name="chon15" value="toi2"></td>
							<td> <input type="checkbox" name="chon16" value="toi3"></td>
							<td> <input type="checkbox" name="chon17" value="toi4"></td>
							<td> <input type="checkbox" name="chon17" value="toi5"> </td>
							<td> <input type="checkbox" name="chon18" value="toi6"></td>
							<td> <input type="checkbox" name="chon20" value="toi7"></td>
							<td> <input type="checkbox" name="chon21" value="toiCN"> </td>
						</tr>
					</table>
					<input type="submit" name="submit" value="Xác nhận " />
					
				</form>
					
	
					<?php
					
					require 'db.php'; 
					
						if(isset($_POST["submit"])){
							
						
						$phuhuynhname=$_POST["phuhuynhname"];
						$phuhuynhphone=$_POST["phuhuynhphone"];
						$phuhuynhsex=$_POST["gender"];
						$phuhuynhkhuvuc=$_POST["phuhuynhkhuvuc"];
						$phuhuynhlop=$_POST["phuhuynhlop"];
						$phuhuynhmon=$_POST["phuhuynhmon"]; 
						
						
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
						
				
				$query="INSERT INTO lopday (phuhuynhname,phuhuynhphone,
				 phuhuynhkhuvuc,phuhuynhlop,phuhuynhmon,phuhuynhtime,
				  phuhuynhsex) VALUES ('$phuhuynhname', '$phuhuynhphone',
				   '$phuhuynhkhuvuc', '$phuhuynhlop', '$phuhuynhmon', '$phuhuynhtime', '$phuhuynhsex')";
				   
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
