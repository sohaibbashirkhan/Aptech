
<?php
$servername = "localhost";
$database = "tdndoanhnet_nam"; 
$usernamedb = "tdndoanhnet_nam";
$password = "tdndoanhnet_nam";
$con = mysqli_connect($servername,$usernamedb,$password,$database);
if (mysqli_connect_errno())
  {
  echo "Không thể kết nối đến MySQL: " . mysqli_connect_error();
  }
?>
