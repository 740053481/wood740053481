<?php
 session_start();
 header('Content-Type:text/html; charset=utf-8;');
 $username=$_POST['username'];
 $password=$_POST['password'];
 $mysqli=new mysqli('localhost','root','','apple');
 $sql="select * from tb_customer where Name='$username' AND Password='$password'";
 $mysqli->query("SET NAMES UTF8");
 $check_query =	mysqli_query($mysqli,$sql);
 //$result=$mysqli->query($sql);
 if($result = mysqli_fetch_array($check_query)){
	 $_SESSION['Name']=$username;
	 $_SESSION['ID']=$result['ID'];
	 if (isset($_SESSION['username'])) {
	  $logprint = $_SESSION['username'];
	 }
	 echo "var log="."'$logprint';"; 
	 header("Location:../sy/sy.html");
 }else{
	echo "<script>alert('登录失败！'); history.go(-1);</script>";
 }
 $mysqli->close();
?>