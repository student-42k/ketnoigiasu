<h1> Tìm theo môn </h1>
					<form method="post" name="timkiem" >
					
					Môn học : <select name="search-mon">
										<option></option>
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
					
					
					
					<input type="submit" name="search1" value="Tìm lớp theo các yêu cầu trên"  /> <br /><br />
				
					
					<input type="reset" value="reset tìm kiếm" /> 
					
					</form>	
<?php require 'db.php';
if(isset($_POST["search1"]))
{
	$search_mon=$_POST["search-mon"];

					$query="Select * From lopday Where (phuhuynhmon LIKE '$search_mon' AND tinhtrang = 0 )";
																	
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
					 } 	}
?>	