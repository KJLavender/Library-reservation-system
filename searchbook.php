<title>圖書館座位預約系統</title>
<div style="text-align:center;">

<?php
	session_start();
	$user=$_SESSION['account'];
	require_once("connect.php");
	$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('Error with MySQL connection');
	$data="select `sid`,`sname` from `student` where `sid` = '$user';";
	$dataresult=mysqli_query($link,$data) or die('MySQL query error');
	$datarow=mysqli_fetch_array($dataresult);
	echo $datarow['sid'],$datarow['sname'];
	echo "<br>";

	$a="select * from `book` where `sid` = '$user';";
	$aresult=mysqli_query($link,$a);
	
	
	while($arow=mysqli_fetch_array($aresult)){
		echo $arow['seatnumber'];
		echo " ";
		echo $arow['day'];
		echo "<br>";
	}

?>