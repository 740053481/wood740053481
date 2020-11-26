<?php
header('Content-Type:text/html; charset=utf-8;');
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$a = rand(1,100);

$mysqli=new mysqli('localhost','root','','apple');
$sql="insert into tb_customer values ('{$a}','{$a}','{$username}','{$password}','{$email}','{$phone}')";
$result = $mysqli->query($sql);
if($result)
{
    echo "<script>alert('添加成功！'); history.go(-1);</script>";
}
else
{ 	
    echo "<script>alert('添加失败！'); history.go(-1);</script>";
}
?>