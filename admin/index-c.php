<?php
include "../config.php";

$username=$_COOKIE['username'];
$password=$_COOKIE['password'];

if(isset($_COOKIE['username']) && isset($_COOKIE['password'])) 
{
    $username=$_COOKIE['username'];
    $password=$_COOKIE['password'];
    
    $sql="select * from admin where username='$username' and password='$password'";
    $data=mysqli_query($con,$sql);
    if(!(mysqli_num_rows($data)>0))
    {
        header("location:admin-c.php");
        exit;
    }
}
else
{
    header("location:admin-c.php");
    exit;
}
?>


<html>
    <head></head>
    <body>
        <h1>后台管理系统</h1>
        <h2>欢迎<?php echo $username?>!</h2>
        <a href="logout-c.php">登出</a>
    </body>
</html>