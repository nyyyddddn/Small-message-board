<?php
setcookie('username','',time()-3600,'/');
setcookie('password','',time()-3600,'/');

header("location:admin-c.php");
exit;

?>