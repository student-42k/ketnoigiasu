
				<ul>
					<li><a href="index.php">Trang chủ</a></li>
					<li><a href="#">Gia sư</a>
						<ul>
							<li><a href="giasudangky.php">Đăng kí nhận lớp </a></li>
							<li><a href="hienthilopchuagiao.php">Lớp chưa có gia sư</a></li>
							<li><a href="search.php">Tìm lớp theo tiêu chí</a></li>
							<li><a href="giasuluuy.php">Lưu ý cho gia sư !</a></li>
						</ul>
					</li>
					<li><a href="#">Phụ huynh</a>
						<ul>
							<li><a href="phuhuynhdangky.php">Đăng kí tìm gia sư</a></li>
							<li><a href="giasuhienco.php">Gia sư hiện có</a></li>
							<li><a href="phuhuynhluuy.php">Lưu ý cho phụ huynh</a></li>
						</ul>
					</li>
					<li><a href="#">Tin tức</a>
						<ul>
							<li><a href="#">Giáo dục</a></li>
							<li><a href="#">Đời sống</a></li>
							<li><a href="#">Giải trí</a></li>
						</ul>
					</li>
					<li><a href="danhgia.php">Đánh giá</a>
				<?php
					if (isset($_SESSION['username']))
					{
						if ($_SESSION["quyen"]==='gia sư tìm lớp')
						  {
						  	echo '<li><a href="quanlilop.php">Quản lí</a>';
						  } else if ($_SESSION["quyen"]==='phụ huynh tìm gia sư')
						  {
						  	echo '<li><a href="quanlilop_phuhuynh.php">Quản lí</a>';
						  }
						echo '<li><a href="logout.php">Đăng xuất</a></li>';
					} else{ echo '<li><a href="login.php">Đăng nhập</a></li>';}
				
				?>				
				</ul>
				<div class="clear"> </div>