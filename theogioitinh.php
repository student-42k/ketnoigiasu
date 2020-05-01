<h1> Tìm theo yêu cầu giới tính </h1>
					<form method="post" name="timkiem" >
					
					Yêu cầu giới tính gia sư :
					  <input type="radio" name="gender" value="nam" checked="checked"> Nam 
					   <input type="radio" name="gender" value="nu" checked="checked"> Nữ 
  					<input type="radio" name="gender" value="khong-gioitinh"> Không yêu cầu <br />
					
					
					
					
					<input type="submit" name="search1" value="Tìm lớp theo các yêu cầu trên"  /> <br /><br />
				
					
					<input type="reset" value="reset tìm kiếm" /> 
					
					</form>	
<?php require 'db.php';
if(isset($_POST["search1"]))
{
	$search_gioitinh=$_POST["gender"];

$query="Select * From lopday Where (phuhuynhsex LIKE '$search_gioitinh') ";
																	
					$result = mysqli_query($con,$query);	
					/////////////////////////////////////////////////
					
					while ($rows = mysqli_fetch_array($result)) 
					{ ?>
						
						<div class="lopchuagiao">
							Mã lớp 	:   <?php echo $rows ["idlopday"]; ?> <br />
							 Khu vực:	<?php echo $rows ["phuhuynhkhuvuc"]; ?> <br />
								Lớp :	<?php echo $rows ["phuhuynhlop"]; 	?> <br />
								Môn :	<?php echo $rows ["phuhuynhmon"]; 	?> <br />
					  Thời gian dạy :   <?php echo $rows ["phuhuynhtime"]; 	?> <br /> 
					 <br /> <hr /> <br />
						<a href="detail.php?detail=<?php echo $rows ["idlopday"];?>"> Bấm xem chi tiết</a>
						</div>
					<?php
					 } }
					 
?>				