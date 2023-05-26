<!DOCTYPE html>
<html>
<head>
  <title>User Login</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 400px;
  margin: 100px auto;
  background-color: #fff;
  border-radius: 5px;
  padding: 20px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
}

.form-group {
  margin-bottom: 15px;
}

label {
  font-weight: bold;
  display: block;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border-radius: 3px;
  border: 1px solid #ccc;
}

button {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 15px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  width: 100%;
}

button:hover {
  background-color: #45a049;
}
    </style>
</head>
<body>
  <div class="container">
    <h1>后台登录</h1>
    <form method="get">
      <div class="form-group">
        <label for="username">用户名</label>
        <input type="text" id="username" name="username" placeholder="输入用户名" required>
      </div>
      <div class="form-group">
        <label for="password">密码</label>
        <input type="password" id="password" name="password" placeholder="输入密码" required>
      </div>
      <div class="form-group">
        <button type="submit">Login</button>
      </div>
    </form>
  </div>
  
</body>

</html>

<?php

include "../config.php";

$username=$_GET['username'];
$password=$_GET['password'];

if(isset($_GET['username']) && isset($_GET['password']))
{

  $sql="select * from admin where username='$username' and password='$password';";
  $data=mysqli_query($con,$sql);

  if(mysqli_num_rows($data)>0)
  {
    session_start();
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    header('location:index-s.php');
    exit;
  }
  else{
    echo "<script>alert('登录失败');</script>";
    exit;
  }
}

?>