<?php
 						$query="Select*From users";
																	
							$result = mysqli_query($con,$query); ?>
<table border="1px" align="center" cellspacing="0" cellpadding="8" bgcolor="#F2F5A9" height="400" >
	<thead>
		<tr align="center" >
			<td bgcolor="#E6E6FA">ID</td>
			<td bgcolor="#E6E6FA">Username</td>
			<td bgcolor="#E6E6FA">password</td>
			<td bgcolor="#E6E6FA">Email</td>
			<td bgcolor="#E6E6FA">Ngay dang ki</td>
			<td bgcolor="#E6E6FA">Quyền</td>
		<tr>
	</thead>
	<tbody>
	<?php if($result)
	{
		while ( $row = mysqli_fetch_array($result) ) {

	?>	 <tr align="center" >
					                <td><?php echo $row['id']; ?></td>
					                <td><?php echo $row['username']; ?></td>
					                <td><?php echo $row['password']; ?></td>
					                <td><?php echo $row['email']; ?></td>
					                <td><?php echo $row['trn_date']; ?></td>
					                <td><?php echo $row['quyen']; } ?></td>
					            </tr> <?php }
		else {
    									// Code xử lý lỗi
 echo "Xảy ra lỗi khi truy vấn dữ liệu"; } ?>


	</tbody>
</table> <br /><br />
							
