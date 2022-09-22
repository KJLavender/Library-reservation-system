<title>圖書館座位預約系統</title>
<div style="text-align:center;">
<?php
	session_start();
	$user=$_SESSION['account'];
	require_once("connect.php");
	$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('Error with MySQL connection');
	
	echo '<form name="time" action="searchseat1.php">';
	echo '<label for="day">請輸入欲預約之時間:</label><br>';
	echo "<select  name ='day'><br />
	<option value=''>---日期---</option>
　　<option value='1'>1</option>
    <option value='2'>2</option>
    <option value='3'>3</option>
    <option value='4'>4</option>
    <option value='5'>5</option>
    <option value='6'>6</option>
    <option value='7'>7</option>
    <option value='8'>8</option>
	<option value='9'>9</option>
	</select>";
	echo '<input type ="submit" value="確定"></input>';
	echo '</form>';

?>