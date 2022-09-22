<title>圖書館座位預約系統櫃台人員</title>
<div style="text-align:center;">
<?php
    session_start();
    require_once("connect.php");
    $link=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    $sid=$_POST['user'];
    $password=$_POST['pwd'];
    $sid=stripcslashes($sid);
    $password=stripcslashes($password);
    $sid=mysqli_real_escape_string($link,$sid);
    $password=mysqli_real_escape_string($link,$password);
    mysqli_connect("localhost","test","test1234","bbb");
    mysqli_select_db($link,"login");
    $result=mysqli_query($link,"select * from counter where `counterid`='$sid' and `counterpassword`='$password'");
    $row=mysqli_fetch_array($result);
	if(empty($row['counterid'])||empty($row['counterpassword'])){
		if(empty($sid)&&empty($password)){
			echo '<script type="text/javascript">';
			echo ' alert("你沒輸入帳號或密碼!!!")';
			echo '</script>';
			header("refresh:0;url=counter.php");
		}
		else{
			echo '<script type="text/javascript">';
			echo ' alert("輸入的帳號或密碼錯誤!!!")';
			echo '</script>';
			header("refresh:0;url=counter.php");
		}
	}
    else if($row['counterid']=="$sid" && $row['counterpassword']=="$password"){
		$_SESSION['account']=$sid;
		$_SESSION['password']=$password;
		header("refresh:0;url=counter2.php");
    }
?>