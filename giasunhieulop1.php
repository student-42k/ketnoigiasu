<?php
					require 'db.php';
					
					$query2="select giasuanh,idgiasu1,Count(idlopday1) as soluonglopday from lopdangday join giasu on lopdangday.idgiasu1 = giasu.idgiasu group by idgiasu1 order by soluonglopday DESC";
			
					$result2 = mysqli_query($con,$query2) or die(mysql_error());
					
					
					
					while ($rows2 = mysqli_fetch_array($result2)) 
					{ ?> 

						<div class="lopchuagiao">
							<img src="images/<?php echo $rows2 ['giasuanh']; ?>" width="100" height="120"  /> <br />			
							Mã gia sư : <?php echo $rows2 ["idgiasu1"]; ?> <br />
							<a href="xemnhanxet.php?nhanxet=<?php echo $rows2 ["idgiasu1"];?>"> Bấm xem nhận xét của gia sư này </a>
						</div>
					
					<?php }
					
					?>