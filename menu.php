
				<ul>
					<li><a href="index.php">Trang chủ</a></li>
					<li><a href="#">Gia sư</a>
						<ul>
							<li><a href="giasudangky.php">Đăng kí nhận lớp </a></li>
							<li><a href="#">Lớp chưa có gia sư</a></li>
							<li><a href="#">Trao đổi suất dạy</a></li>
							<li><a href="#">Lưu ý cho gia sư !</a></li>
						</ul>
					</li>
					<li><a href="#">Phụ huynh</a>
						<ul>
							<li><a href="phuhuynhdangky.php">Đăng kí tìm gia sư</a></li>
							<li><a href="#">Gia sư hiện có</a></li>
							<li><a href="#">Lưu ý cho phụ huynh</a></li>
						</ul>
					</li>
					<li><a href="#">Tin tức</a>
						<ul>
							<li><a href="#">Giáo dục</a></li>
							<li><a href="#">Đời sống</a></li>
							<li><a href="#">Giải trí</a></li>
						</ul>
					</li>
					<li><a href="#">Đánh giá</a>
					<li><a href="#">Quản lí</a>	
				<?php
					if (isset($_SESSION['username']))
					{
						echo '<li><a href="logout.php">Đăng xuất</a></li>';
					} else{ echo '<li><a href="login.php">Đăng nhập</a></li>';}
				
				?>				
				</ul>
				<div class="clear"> </div>