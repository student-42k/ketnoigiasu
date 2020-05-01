<h1> Tìm theo khu vưc </h1>
					<form method="post" name="timkiem" >
					Khu vực : <select name='search-khuvuc'>
										<option></option>
										<option>Thanh Khê</option>
										<option>Hải Châu</option>
										<option>Ngũ Hành Sơn</option>
										<option>Liên Chiểu</option>
										<option>Hòa Khánh</option>
										<option>Cẩm Lệ</option>
										<option>Sơn Trà</option>
									</select> <br />
				<input type="submit" name="search1" value="Tìm lớp theo các yêu cầu trên"  /> <br /><br />
					
					<input type="reset" value="reset tìm kiếm" /> 
					
					</form>	
					
<?php require 'db.php';
if(isset($_POST["search1"]))
{
	$search_khuvuc=$_POST["search-khuvuc"];

$query="Select * From lopday Where (phuhuynhkhuvuc LIKE '%$search_khuvuc%') ";
																	
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
				
					  } 
					  
}
?>