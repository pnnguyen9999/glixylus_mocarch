<?php

$server_name = 'localhost';
$user = 'glixylus';
$pass = 'root';
$db_name = 'moc';
$con = mysqli_connect($server_name,$user,$pass,$db_name);
mysqli_set_charset($con,"utf8");

?>