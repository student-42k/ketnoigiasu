<h1>Đăng kí ngay, nhận lớp liền tay !</h1>
				<form action='' method='post' name='dangkinhanlopday'></br/>
						  Họ tên : <input type='text' name='giasuname' /> <br />
					Giới tính : 
					  <input type='radio' name='gender' value='nam' checked='checked'> Nam 
  					<input type='radio' name='gender' value='nu'> Nữ <br />
					Ngày sinh : <br />
					 Ngày :&nbsp;
						<select name='ngay' >
						         <script> 
						         		var i;
										for(i=1;i<=31;i++)
										
										document.write('<option value='+ i + '>' + i + '</option>');				 
						  		</script>
						</select>
			       Tháng:&nbsp;
						  <select name='thang' >
						         <script> 
						         		var i;
										for(i=1;i<=12;i++)
										document.write('<option value='+ i + '>' + i + '</option>');				 
						  		</script>
						        </select>
						 			   Năm :
					     <select name='nam'>
						         	<script>
						         		var i; 
										for(i=2020;i>=1950;i--)
										document.write('<option value='+ i + '>' + i + '</option>');				 
						  			</script>
						  		</select>
						  		<br />					

					Số điện thoại liên lạc : <input type='text' name='sdt' /> <br />
					Hiện đang là : <select name='hiendangla' >
										<option>Sinh viên còn đi học</option>
										<option>Sinh viên đã ra trường</option>
										<option>Tiến sĩ</option>
										<option>Giảng viên</option>
										<option>Thạc sĩ</option>
									</select> <br />
					Nhận dạy tại : <select name='daytai'>
										<option>Thanh Khê</option>
										<option>Hải Châu</option>
										<option>Ngũ Hành Sơn</option>
										<option>Liên Chiểu</option>
										<option>Hòa Khánh</option>
										<option>Cẩm Lệ</option>
										<option>Sơn Trà</option>
									</select> <br />
				
					Nhận dạy lớp : <select name='daylop'>
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
					Môn học : <select name='daymon'>
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
				
					Thời gian (rãnh) có thể day : <br />
					<table border ='1' cellspacing='0' cellpadding='16' width='550' height='100' bgcolor='#58ACFA'>
						<tr align='center' >
							<th>Thứ/Buổi</th>
							<th> 2 </th>
							<th> 3 </th>
							<th> 4 </th>
							<th> 5 </th>
							<th> 6 </th>
							<th> 7 </th>
							<th> CN </th>
						</tr>
						<tr align='center'>
							<td> Sáng </td>
							<td> <input type='checkbox' name='chon1' value='sang2'></td>
							<td> <input type='checkbox' name='chon2' value='sang3'></td>
							<td> <input type='checkbox' name='chon3' value='sang4'></td>
							<td> <input type='checkbox' name='chon4' value='sang5'></td>
							<td> <input type='checkbox' name='chon5' value='sang6'></td>
							<td> <input type='checkbox' name='chon6' value='sang7'></td>
							<td> <input type='checkbox' name='chon7' value='sangCn'></td>
							
						</tr>
						<tr align='center'>
							<td> Chiều </td>
							<td> <input type='checkbox' name='chon8' value='chieu2'></td>
							<td> <input type='checkbox' name='chon9' value='chieu3'></td>
							<td> <input type='checkbox' name='chon10' value='chieu4'></td>
							<td> <input type='checkbox' name='chon11' value='chieu5'></td>
							<td> <input type='checkbox' name='chon12' value='chieu6'></td>
							<td> <input type='checkbox' name='chon13' value='chieu7'></td>
							<td> <input type='checkbox' name='chon14' value='chieuCn'></td>
						</tr>
						<tr align='center'>
							<td> Tối </td>
							<td> <input type='checkbox' name='chon15' value='toi2'></td>
							<td> <input type='checkbox' name='chon16' value='toi3'></td>
							<td> <input type='checkbox' name='chon17' value='toi4'></td>
							<td> <input type='checkbox' name='chon18' value='toi5'></td>
							<td> <input type='checkbox' name='chon19' value='toi6'></td>
							<td> <input type='checkbox' name='chon20' value='toi7'></td>
							<td> <input type='checkbox' name='chon21' value='toiCn'></td>
						</tr>
					</table>
					<input type='submit' name='submit' value='Xác nhận' />

				</form>