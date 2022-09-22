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
	echo '<h2>'."預約紀錄".'</h2>';
	echo $datarow['sid'],$datarow['sname'];
	echo "<br>";
	$a="select * from `book` where `sid` = '$user';";
	$aresult=mysqli_query($link,$a);
	
	//echo "選擇想要的位置"."<br>";
	while($b=mysqli_fetch_array($aresult)){
		$seatnum=$b["seatnumber"];
		$day=$b["day"];
		echo '<a href="del1.php?seatnumber='.$seatnum.'&day='.$day.'" style="color:blue;">取消預約</a>'; 
		echo $b['day'];
		
		echo " ";
		echo $b['seatnumber'];
		echo "號座位";
		echo "<br>";
	}


?> 