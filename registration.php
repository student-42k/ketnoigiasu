<!DOCTYPE html>
<html lang="vi">	
	<head>
		<meta charset="utf-8">
		<title>Web_tim_gia_su</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	
	</head>
	<body>
		<div class="wrapper">
			<div id="banner"> 
				<img src="banner.jpg" alt="banner" width="880" height="280" >			
			</div>
			
			<div class ="menu"> 
				<?php include 'menu.php';	?>
			</div> 
			
			
			<div class="content">
				<?php
				require('db.php');
					if (isset($_REQUEST['username'])){
					$username = stripslashes($_REQUEST['username']);
					$username = mysqli_real_escape_string($con,$username);
					$email = stripslashes($_REQUEST['email']);
					$email = mysqli_real_escape_string($con,$email);
					$password = stripslashes($_REQUEST['password']);
					$password = mysqli_real_escape_string($con,$password);
					$trn_date = date("Y-m-d H:i:s");
					
					$query = "INSERT into users (username, 
													password, 
													email, 
													trn_date)
											 VALUES ('$username', 
											 		'".md5($password)."', 
											 		'$email', 
											 		'$trn_date')";
						$result = mysqli_query($con,$query);
						if($result){
							echo "<div class='form'><h3>Bạn đã đăng ký thành công</h3><br/>Click để <a href='login.php'>Đăng nhập</a></div>";
						}
					}else{
				?>
				<div class="form">
					<h1>Đăng kí tài khoản </h1>
					<form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="post" name="login">
						<input type="text" name="username" placeholder="Nhập tên đăng nhập" required/> <br />
						<input type="password" name="password" placeholder="Nhập mật khẩu" required/> <br />
						<input type="email" name="email" placeholder="Nhập email" required/> <br />
						<input type="submit" name="submit" value="Xác nhận đăng ký" />
					</form>
				</div>
			</div>
			<?php } ?>
			
			<div class="footer"> 
				<?php include 'footer.php'; ?>
			</div>	
			
		</div>
	</body>
</html>
