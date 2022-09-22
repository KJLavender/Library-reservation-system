<title>選課系統</title>
<?php
	session_start();
	session_unset();
	session_destroy();
	header("refresh:0;url=new.php");
	exit;
?>
