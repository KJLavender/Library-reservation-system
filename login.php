<title>圖書館座位預約系統</title>
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
    $result=mysqli_query($link,"select * from student where `sid`='$sid' and `pw`='$password'");
    $row=mysqli_fetch_array($result);
	if(empty($row['sid'])||empty($row['pw'])){
		if(empty($sid)&&empty($password)){
			echo '<script type="text/javascript">';
			echo ' alert("你沒輸入帳號或密碼!!!")';
			echo '</script>';
			header("refresh:0;url=new.php");
		}
		else{
			echo '<script type="text/javascript">';
			echo ' alert("輸入的帳號或密碼錯誤!!!")';
			echo '</script>';
			header("refresh:0;url=new.php");
		}
	}
    else if($row['sid']=="$sid" && $row['pw']=="$password"){
		$_SESSION['account']=$sid;
		$_SESSION['password']=$password;
		header("refresh:0;url=button.php");
    }
?>