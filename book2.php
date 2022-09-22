<title>圖書館</title>
<div style="text-align:center;">
<?php//已經預約過這天 insert不進去
	$seatnum=$_GET["seatnumber"];
	$day=$_GET["day"];
	echo "123";
	session_start();
	
	$user=$_SESSION['account'];
	require_once("connect.php");
	$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('Error with MySQL connection');
	$black = "select `point` from `student` where `sid` = '$user';";
	$blackresult=mysqli_query($link,$black) or die('MySQL query error');
	$blackrow=mysqli_fetch_array($blackresult);
	
	if($blackrow['point']==3){
		//echo '<script type="text/javascript">';
		echo 'alert("你是黑名單!!!")';
		//echo '</script>';
		//header("refresh:0;url=button.php");
	}
	else{
		//echo '<script type="text/javascript">';
		echo 'alert("!!!")';
		//echo '</script>';
		//header("refresh:0;url=button.php");
	}
	
?>