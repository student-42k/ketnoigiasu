<h1> Tìm theo lớp </h1>
					<form method="post" name="timkiem" >
					
					Tìm lớp : <select name="search-lop">
										<option></option>
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
					
					
					
					<input type="submit" name="search1" value="Tìm lớp theo các yêu cầu trên"  /> <br /><br />
				
					
					<input type="reset" value="reset tìm kiếm" /> 
					
					</form>	
<?php require 'db.php';
if(isset($_POST["search1"]))
{
	$search_lop=$_POST["search-lop"];

$query="Select * From lopday Where (phuhuynhlop LIKE '$search_lop' AND tinhtrang = 0 ) ";
																	
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