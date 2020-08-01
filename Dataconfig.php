<?php
$url="localhost";
$dbusernam="root";
$dbpassword="";
$db="dlearn";
$cn=mysqli_connect($url,$dbusernam,$dbpassword,$db);
if(!$cn)
	echo "not connected";

?>
