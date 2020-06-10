<?php
 						$query="Select*From lopday";
																	
							$result = mysqli_query($con,$query); ?>
<table border="1px" align="center" cellspacing="0" cellpadding="8" bgcolor="#F2F5A9" height="400" >
	<thead>
		<tr align="center" >
			<td bgcolor="#E6E6FA">ID lớp dạy</td>
			<td bgcolor="#E6E6FA">Tên học viên </td>
			<td bgcolor="#E6E6FA">Số điện thoại</td>
			<td bgcolor="#E6E6FA">Địa chỉ</td>
			<td bgcolor="#E6E6FA">Lớp</td>
			<td bgcolor="#E6E6FA">Môn </td>
			<td bgcolor="#E6E6FA">Số buổi học/tuần  </td>
			<td bgcolor="#E6E6FA">Thời gian học</td>
			<td bgcolor="#E6E6FA">Yêu cầu giới tính</td>
			<td bgcolor="#E6E6FA">Tình trạng</td>
			<td bgcolor="#E6E6FA">ID gia sư dạy lớp này</td>
		<tr>
	</thead>
	<tbody>
	<?php if($result)
	{
		while ( $row = mysqli_fetch_array($result) ) {

	?>	 <tr align="center" >
					                <td><?php echo $row['idlopday']; ?></td>
					                <td><?php echo $row['phuhuynhname']; ?></td>
					                <td><?php echo $row['phuhuynhphone']; ?></td>
					                <td><?php echo $row['phuhuynhkhuvuc']; ?></td>
					                <td><?php echo $row['phuhuynhlop']; ?></td>
					                <td><?php echo $row['phuhuynhmon']; ?></td>
					                <td><?php echo $row['sobuoi'];  ?></td>
					                <td><?php echo $row['phuhuynhtime']; ?></td>
					                <td><?php echo $row['phuhuynhsex']; ?></td>
					                <td><?php echo $row['tinhtrang']; ?></td>
					                <td><?php echo $row['idtaikhoan']; } ?></td>
					                
					          </tr> <?php }
		else {
    									// Code xử lý lỗi
 echo "Xảy ra lỗi khi truy vấn dữ liệu"; } ?>


	</tbody>
</table> <br /><br />
							
