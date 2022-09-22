<!DOCTYPE html>
 <html>
  <head>
   <meta charset="utf-8">
   <title>圖書館座位預約系統登入頁面</title>
   <style type="text/css">
   
    body{
	background-image:url( 'https://s3.ap-southeast-1.amazonaws.com/web-content.fcu.edu.tw/wp-content/uploads/2020/10/26093447/%E9%A6%96%E9%A0%81_%E7%B8%AE%E5%9C%96-20200218-017-105A2164.jpg' );
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
  </head>
 <body>
  <div style="text-align:center;">
   <table width="300" height="200">
    <tr><td align="center" valign="center"></td></tr>
   </table>
   <h1 style="color:black;">圖書館座位預約系統登入頁面</h1>
	<form name="form1" method="post" action="login.php" >
    <p style="font-family:verdana;font-size:100%;color:black;">
	<label for="user">帳號:</label><br>
	<input type="text" id="user" name="user"><br>
	<label for="pwd">密碼:</label><br>
	<input type="password" id="pwd" name="pwd"><br><br>
	<input type="submit" value="登入"><br><br>
	<a href="counter.php" style="text-decoration:none;background:white;color:black;">櫃台人員頁面</a> 
    </p>
   </form>
  </div>
 </body>
</html>

<div id="show_time" style="text-align:center;">
<script>  //顯示時間
//這裡程式碼多了幾行，但是不會延遲顯示，速度比較好，格式可以自定義，是理想的時間顯示
setInterval("fun(show_time)",1);
function fun(timeID){ 
var date = new Date();  //建立物件
var y = date.getFullYear();     //獲取年份
var m =date.getMonth()+1;   //獲取月份  返回0-11
var d = date.getDate(); // 獲取日
var w = date.getDay();   //獲取星期幾  返回0-6   (0=星期天) 
var ww = ' 星期'+'日一二三四五六'.charAt(new Date().getDay()) ;//星期幾
var h = date.getHours();  //時
var minute = date.getMinutes()  //分
var s = date.getSeconds(); //秒
var sss = date.getMilliseconds() ; //毫秒
if(m<10){
m = "0"+m;
}
if(d<10){
d = "0"+d;
}
if(h<10){
h = "0"+h;
}
if(minute<10){
minute = "0"+minute;
}
if(s<10){
s = "0"+s;
}
if(sss<10){
sss = "00"+sss;
}else if(sss<100){
sss = "0"+sss;
}
document.getElementById(timeID.id).innerHTML =  "現在時間 : "+y+"-"+m+"-"+d+"   "+
h+":"+minute+":"+s+"  "+ww;
//document.write(y+"-"+m+"-"+d+"   "+h+":"+minute+":"+s);
}
</script>
</div>
</body>