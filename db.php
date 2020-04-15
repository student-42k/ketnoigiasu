<?php
$con = mysqli_connect("localhost","admin","1234","congdonggiasu");
	mysqli_set_charset($con, "utf8");
if (mysqli_connect_errno())
  {
  echo "Không thể kết nối đến MySQL: " . mysqli_connect_error();
  }
?>