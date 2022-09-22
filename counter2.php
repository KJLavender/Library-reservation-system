
<div style="text-align:center;">
<?php
session_start();
    require_once("connect.php");
    $link=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	$black="select * from `student` where `point` = '3';";
	$result=mysqli_query($link,$black);
	echo '<h2>'."黑名單學生".'</h2>';
	while($bb=mysqli_fetch_array($result)){
			$student=$bb['sid'];
			echo '<a href="counter3.php?sid='.$student.'" style="color:blue;">解除黑名單</a>'; 
			echo $bb['sid'];
			echo "<br>";
	}
echo "<br>";

?>

<a href = "logout.php" target="_self" style="text-decoration:none;background:white;color:red;"> 登出</a><p>