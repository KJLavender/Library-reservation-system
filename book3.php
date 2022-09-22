<title>圖書館座位預約系統</title>
<div style="text-align:center;">
<?php
	$seatnum=$_GET["seatnumber"];
	$day=$_GET["day"];
	session_start();
	$user=$_SESSION['account'];
	require_once("connect.php");
	$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('Error with MySQL connection');
	$black = "select * from `student` where `sid` = '$user';";
	$blackresult=mysqli_query($link,$black);
	$blackrow=mysqli_fetch_array($blackresult);
	$b="select `day` from `book` where `sid` = '$user' and `day`= '$day';";
	$bresult=mysqli_query($link,$b);
	$brow=mysqli_fetch_array($bresult);
	if($blackrow['point']==3){
		echo '<script type="text/javascript">';
		echo ' alert("你是黑名單不能預約!!!")';
		echo '</script>';
		header("refresh:0;url=button.php");
	}
	else if(empty($brow)){
		$book="insert into `book` (`sid`,`seatnumber`,`day`) values ('$user','$seatnum','$day')";
		mysqli_query($link,$book);
		echo '<script type="text/javascript">';
		echo ' alert("預約成功!!!")';
		echo '</script>';
		header("refresh:0;url=button.php");
	}
	else{
		echo '<script type="text/javascript">';
		echo ' alert("你已經預約過這天的位置不能再預約!!!")';
		echo '</script>';
		header("refresh:0;url=button.php");
	}
?>