<?php
					require 'db.php';
					
					$query="SELECT*FROM danhgia Join giasu ON danhgia.idgiasu_danhgia = giasu.idgiasu group by idgiasu ORDER BY sao DESC";
					$result = mysqli_query($con,$query) or die(mysql_error());
					while ($rows = mysqli_fetch_array($result)) 
					{ ?> 

						<div class="lopchuagiao">
							<img src="images/<?php echo $rows['giasuanh']; ?>" width="100" height="120"  /> <br />			
							Mã gia sư : <?php echo $rows ["idgiasu_danhgia"]; ?> <br />
							Tên gia sư : <?php echo $rows ["giasuname"]; ?> <br />
							<a href="xemnhanxet.php?nhanxet=<?php echo $rows ["idgiasu"];?>"> Bấm xem nhận xét của gia sư này </a>
						</div>
					
					<?php }
					
					?>