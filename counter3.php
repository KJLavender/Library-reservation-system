<?php
	$sid=$_GET["sid"];
	session_start();
    require_once("connect.php");
    $link=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	$a="UPDATE `student` SET `point`='0' WHERE `sid` = '$sid';";
	$result=mysqli_query($link,$a);
	echo '<script type="text/javascript">';
	echo ' alert("解除黑名單成功!!!")';
	echo '</script>';
	header("refresh:0;url=counter2.php");





?>