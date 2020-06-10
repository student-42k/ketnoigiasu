 Tìm theo thời gian dạy của bạn
 					 <form method="post" name="timkiem" > 
 					 		<input type="submit" name="search1" value="Tìm "  /> <br /><br />
 					 	</form>

<?php require 'db.php';
$query1="Select*from giasu where idgiasu=".$_SESSION["id"];

$result1 = mysqli_query($con,$query1);

$rows1 = mysqli_fetch_array($result1);


if(isset($_POST["search1"]))

{
	$khuvuc=$rows1 ["giasukhuvuc"];
	$mon=$rows1 ["giasumon"];
	$lop=$rows1 ["giasulop"];
	
					$query="Select * From lopday Where (phuhuynhkhuvuc LIKE '%$khuvuc%' AND phuhuynhlop LIKE '$lop' AND phuhuynhmon LIKE '$mon')";
																	
					$result = mysqli_query($con,$query);	
					$rows = mysqli_fetch_array($result);
					if(empty($rows)){ echo "không có lớp";}
					while ($rows) 
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