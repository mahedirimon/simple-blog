<?php 


define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'home_work');

$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if(!$conn){
	die("Not Connectd").mysqli_connect_error();
	exit();
}

 ?>