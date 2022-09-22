<title>圖書館座位預約系統</title>
<div style="text-align:center;">
<?php
	$seatnum=$_GET["seatnumber"];
	$day=$_GET["day"];
	session_start();
	$user=$_SESSION['account'];
	require_once("connect.php");
	$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('Error with MySQL connection');
	$del="DELETE FROM `book` WHERE `sid`='$user' and `seatnumber`='$seatnum' and `day` = '$day';";
	mysqli_query($link,$del);

	echo '<script type="text/javascript">';
	echo 'alert("取消預約成功!!!")';
	echo '</script>';
	header("refresh:0;url=del.php");
?>