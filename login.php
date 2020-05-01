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
				  session_start();
					if (isset($_POST['username'])){
					
					$username = stripslashes($_REQUEST['username']);
					$username = mysqli_real_escape_string($con,$username);
					$password = stripslashes($_REQUEST['password']);
					$password = mysqli_real_escape_string($con,$password);
					
					$query = "SELECT * FROM users WHERE username='$username' and password='".md5($password)."'";
					$result = mysqli_query($con,$query) or die(mysql_error());
					
					$rows = mysqli_num_rows($result);
					$row2 = mysqli_fetch_array($result);
					
						if($rows==1)
						{
							$_SESSION['username'] = $username;
					  		$_SESSION["id"]=$row2["id"];
					  		$_SESSION["quyen"]=$row2["quyen"];

					  		header("Location: index.php");
							}else{
						echo "<div class='form'><h3>Tên đăng nhập hoặc mật khẩu không đúng!</h3></br><a href='login.php'>Đăng nhập lại</a></div>";
						}
					}else{
				?>
				<div class="form">
				<h1>Đăng nhập</h1>
				<form action="" method="post" name="login">
				<input type="text" name="username" placeholder="Tên đăng nhập" required /> <br />
				<input type="password" name="password" placeholder="Mật khẩu" required />
				<input name="submit" type="submit" value="Đăng nhập" />
				</form>
				<p>Bạn chưa có tài khoản? <a href='registration.php'>Đăng ký ngay</a></p><br/>
				<?php } ?>
				</div>
			</div>
			
			
			<div class="footer"> 
				<?php include 'footer.php'; ?>
			</div>	
			
		</div>
	</body>
</html>
