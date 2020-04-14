<?php
$con = mysqli_connect("localhost","admin","1234","congdonggiasu");
if (mysqli_connect_errno())
  {
  echo "Không thể kết nối đến MySQL: " . mysqli_connect_error();
  }
?>