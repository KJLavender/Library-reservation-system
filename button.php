<html>
<title>圖書館座位預約系統</title>
<style type="text/css">
    body{
	background-image:url( 'https://upload.wikimedia.org/wikipedia/commons/e/e4/Feng_Chia_University_Library.jpg' );
	 background-size: cover;
	}
   .inputcss {
    text-transform:uppercase;
    border: 0px;
    line-height:2;
   }
   .fromcss {
    line-height: 1.5em;
    border-radius:20px
    font-style: italic;
    font-size:1rem;
    font-weight:400;
   }

</style>
<marquee direction="right" height="70" scrollamount="10" style="font-size:50;color:black;" behavior="alternate">歡迎光臨!</marquee>
<marquee direction="right" height="30" scrollamount="10" style="color:black;" behavior="alternate">如要預約請至查詢空位</marquee>
<marquee direction="right" height="30" scrollamount="10" style="color:black;" behavior="alternate">如要取消預約請至查詢預約紀錄</marquee>
<a href = "book.php" target="_self" style="text-decoration:none;background:white;color:black"> 查詢空位</a><p>
<a href = "del.php" target="_self" style="text-decoration:none;background:white;color:black"> 查詢預約紀錄</a><p>
<a href = "logout.php" target="_self" style="text-decoration:none;background:white;color:black;"> 登出</a><p>
</html>
<?php
	session_start();
	$user=$_SESSION['account'];
	require_once("connect.php");
	$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('Error with MySQL connection');
	$black = "select `point` from `student` where `sid` = '$user';";
	$blackresult=mysqli_query($link,$black) or die('MySQL query error');
	$blackrow=mysqli_fetch_array($blackresult);
	if($blackrow['point']==3){
		echo "你是黑名單!!!"."<br>";
	}
	$data="select `sname` from `student` where `sid` = '$user';";
	$dataresult=mysqli_query($link,$data) or die('MySQL query error');
	$datarow=mysqli_fetch_array($dataresult);
	echo '<label style="font-size:50px;">'."你好!".'</label>';
	$n=$datarow['sname'];
	echo '<label style="font-size:50px;">'."$n"."<br>".'</label>';
?>
