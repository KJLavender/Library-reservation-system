<html>
<title>圖書館座位預約系統</title>
<div style="text-align:center;">
<style type="text/css">
    body{
	background-image:url('Vhttps://www.shutterstock.com/zh-Hant/blog/wp-content/uploads/sites/11/2019/11/shutterstock_1028852338.png?w=750);
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
 </html>
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
	
	echo '<form name="time" action="book1.php">';
	echo '<label for="day">選擇想要查詢的日期:</label><br>';
	echo "<select  name ='day'><br />
	<option value=''>---日期---</option>
    <option value='6/22'>6/22</option>
    <option value='6/23'>6/23</option>
	<option value='6/24'>6/24</option>
	<option value='6/25'>6/25</option>
    <option value='6/26'>6/26</option>
    <option value='6/27'>6/27</option>
    <option value='6/28'>6/28</option>
    <option value='6/29'>6/29</option>
    <option value='6/30'>6/30</option>
	</select>";
	echo '<input type ="submit" value="確定"></input>';
	echo '</form>';
?>