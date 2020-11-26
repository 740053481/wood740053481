<?php
	header('Content-Type:text/html; charset=utf-8;');
	$h2 = $_POST['h2'];
	$h4 = $_POST['h4'];
	$a = rand(1,100);
	$b = "1";
	$mysqli=new mysqli('localhost','root','','apple');
	$sql="insert into tb_shop values ('{$a}','{$a}','{$h2}','{$h4}',{$b})";
	$result = $mysqli->query($sql);
	if($result)
	{
	    echo "<script>alert('购买成功！已经添加到购物车。'); history.go(-1);</script>";
	}
	else
	{ 	
	    echo "<script>alert('购买失败！'); history.go(-1);</script>";
	}
?>