<?php
 						$query="Select*From giasu";
																	
							$result = mysqli_query($con,$query); ?>
<table border="1px" align="center" cellspacing="0" cellpadding="8" bgcolor="#F2F5A9" height="400" >
	<thead>
		<tr align="center" >
			<td bgcolor="#E6E6FA">ID Gia sư</td>
			<td bgcolor="#E6E6FA">Tên gia sư </td>
			<td bgcolor="#E6E6FA">Giới tính</td>
			<td bgcolor="#E6E6FA">Sinh ngày</td>
			<td bgcolor="#E6E6FA">Số điện thoại</td>
			<td bgcolor="#E6E6FA">Tên ảnh 3x4</td>
			<td bgcolor="#E6E6FA">Hiện tại</td>
			<td bgcolor="#E6E6FA">Khu vực</td>
			<td bgcolor="#E6E6FA">Dạy lớp</td>
			<td bgcolor="#E6E6FA">Dạy môn</td>
			<td bgcolor="#E6E6FA">Thời gian dạy </td>
			
		<tr>
	</thead>
	<tbody>
	<?php if($result)
	{
		while ( $row = mysqli_fetch_array($result) ) {

	?>	 <tr align="center" >
					                <td><?php echo $row['idgiasu']; ?></td>
					                <td><?php echo $row['giasuname']; ?></td>
					                <td><?php echo $row['giasusex']; ?></td>
					                <td><?php echo $row['ngaysinh']."/".$row['thangsinh']."/".$row['namsinh']; ?></td>
					                <td><?php echo $row['giasuphone']; ?></td>
					                <td><?php echo $row['giasuanh']; ?></td>
					                <td><?php echo $row['giasunghe'];  ?></td>
					                <td><?php echo $row['giasukhuvuc']; ?></td>
					                <td><?php echo $row['giasulop']; ?></td>
					                <td><?php echo $row['giasumon']; ?></td>
					                <td><?php echo $row['giasutime']; }?></td>
					                
					            </tr> <?php }
		else {
    									// Code xử lý lỗi
 echo "Xảy ra lỗi khi truy vấn dữ liệu"; } ?>


	</tbody>
</table> <br /><br />
							
