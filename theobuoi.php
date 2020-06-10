<h1> Tìm theo thời gian học </h1>
					<form method="post" name="timkiem" >
					
					Số buổi học : <select name="search-sobuoi">
										<option></option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
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
										
					<input type="submit" name="search1" value="Tìm lớp theo các yêu cầu trên"  /> <br /><br />
				
					
					<input type="reset" value="reset tìm kiếm" /> 
					
					</form>	
<?php require 'db.php';
if(isset($_POST["search1"]))
{
						$search_sobuoi=$_POST["search-sobuoi"];
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
						
						
						
					    if (!$search_sobuoi) 
					    {
					        echo "Vui lòng nhập số buổi học. <a href='javascript: history.go(-1)'>Trở lại</a>";
					        exit;
					    }




///////////////////////////

					$buoi=explode("-", $phuhuynhtime);

					if($search_sobuoi =="1")
					{
						$query="Select*from lopday Where 
												(phuhuynhtime LIKE '%$buoi[0]%' AND tinhtrang = 0 )";
							$result = mysqli_query($con,$query) OR die(mysql_error());
					} else 
					if($search_sobuoi =="2")
					{
						$query="Select*from lopday Where 
												(phuhuynhtime LIKE '%$buoi[0]%') 
												AND (phuhuynhtime LIKE '%$buoi[1]%') AND tinhtrang = 0 ";
							$result = mysqli_query($con,$query) OR die(mysql_error());
					} else 
					if($search_sobuoi =="3")
					{
						$query="Select*from lopday Where 
												(phuhuynhtime LIKE '%$buoi[0]%') 
												AND (phuhuynhtime LIKE '%$buoi[1]%') 
												AND (phuhuynhtime LIKE '%$buoi[2]%') AND tinhtrang = 0 ";
							$result = mysqli_query($con,$query) OR die(mysql_error());
					} else 
					if($search_sobuoi =="4")
					{
						$query="Select*from lopday Where 
												 (phuhuynhtime LIKE '%$buoi[0]%') 
												AND (phuhuynhtime LIKE '%$buoi[1]%') 
												AND (phuhuynhtime LIKE '%$buoi[2]%') 
												AND (phuhuynhtime LIKE '%$buoi[3]%') AND tinhtrang = 0 )";
							$result = mysqli_query($con,$query) OR die(mysql_error());
					} else 
					if($search_sobuoi =="5")
					{
						$query="Select*from lopday Where 
												(phuhuynhtime LIKE '%$buoi[0]%') 
												AND (phuhuynhtime LIKE '%$buoi[1]%') 
												AND (phuhuynhtime LIKE '%$buoi[2]%') 
												AND (phuhuynhtime LIKE '%$buoi[3]%') 
												AND (phuhuynhtime LIKE '%$buoi[4]%') AND tinhtrang = 0 ";
							$result = mysqli_query($con,$query) OR die(mysql_error());
					} else 
					if($search_sobuoi =="6")
					{
						$query="Select*from lopday Where 
												 (phuhuynhtime LIKE '%$buoi[0]%') 
												AND (phuhuynhtime LIKE '%$buoi[1]%') 
												AND (phuhuynhtime LIKE '%$buoi[2]%') 
												AND (phuhuynhtime LIKE '%$buoi[3]%') 
												AND (phuhuynhtime LIKE '%$buoi[4]%') 
												AND (phuhuynhtime LIKE '%$buoi[5]%') AND tinhtrang = 0 ";
							$result = mysqli_query($con,$query) OR die(mysql_error());
					} else {echo "không có lớp theo yêu cầu";}
	
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
					 } $rows = mysqli_fetch_array($result); if(empty($rows)){ echo "không có lớp";}	}
?>	