
<?php
//登录成功首页文件-采用session验证
//判断省去了数据库查询获取帐号密码的操作 直接赋值
session_start();
if(!( isset($_SESSION['username']) && isset($_SESSION['password'])) ){
    header('Location: admin-s.php');
    exit;
}

?>



<html>
    <head></head>
    <body>
        <h1>后台管理系统</h1>
        <h2>欢迎<?php echo $_SESSION['username']?>!</h2>
        <a href="logout-s.php">登出</a>
    </body>
</html>