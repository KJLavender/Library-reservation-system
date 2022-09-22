<title>圖書館座位預約系統</title>
<div style="text-align:center;">
<?php
	$day=$_GET['day'];
	session_start();
	$user=$_SESSION['account'];
	require_once("connect.php");
	$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('Error with MySQL connection');
	$ssql="SELECT * FROM `seat` WHERE  `seatnumber` not in (select `seatnumber` from `book` where `day` = '$day');";
	$sresult=mysqli_query($link,$ssql);
		echo "選擇想要的位置"."<br>";
		while($canbook=mysqli_fetch_array($sresult)){
			$seatnum=$canbook['seatnumber'];
			echo '<a href="book3.php?seatnumber='.$seatnum.'&day='.$day.'" style="color:blue;">預約</a>'; 
			echo $canbook['seatnumber'];
			echo "號座位";
			echo "<br>";
		}
?>