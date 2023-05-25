<?php
include 'config.php';
$username=$_GET['username'];
$content=$_GET['content'];

if(isset($username) && isset($content))
{
	$sql="delete from gbook where username = '$username' and content = '$content';";
	if(mysqli_query($con,$sql))
	{
		echo "<script>alert('留言删除成功')</script>";
		header("location:index.php");
	}
}
?>