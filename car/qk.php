<?php
	$mysqli=new mysqli('localhost','root','','apple');
	$sql="delete from tb_shop";
	$mysqli->query("SET NAMES UTF8");
	$result=$mysqli->query($sql);
	if($result)
{
    echo "<script>alert('清空成功！'); history.go(-1);</script>";
}
else
{ 	
    echo "<script>alert('添加失败！'); history.go(-1);</script>";
}
?>