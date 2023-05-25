<script src="ueditor/ueditor.config.js"></script>
<script src="ueditor/ueditor.all.js"></script>

<form method="post" name="form1" action="">
	<p>
		用户名:<input type="text" name="username">
	</p>
	
	<textarea id="content" rows="10" cols="70" name="content" style="border:1px solid #E5E5E5;">
    </textarea>
    <script type="text/javascript">
        UE.getEditor("content");

        //实例化编辑器传参,id为将要被替换的容器。
    </script>
		<input type="submit" value="发布评论">
	</p>
	
</form>


<?php

include 'config.php';

//显示留言功能
$sql="select * from gbook";
$data=mysqli_query($con,$sql);
while($row=mysqli_fetch_row($data))
{
	echo '<hr>';
    echo '用户名：'.$row[0].'<br>';
    echo '内容：'.$row[1].'<br>';
    echo 'IP地址：'.$row[2].'<br>';
    echo 'UA浏览器：'.$row[3].'<br>';
	echo "<a href='delete_gbook.php?username=$row[0]&content=$row[1]'>删除留言</a>";
}


//留言功能
if(isset($_POST['username']) && isset($_POST['content']))
{
	
	$u=@$_POST['username'];
	$c=@$_POST['content'];
	$i=$_SERVER['SERVER_ADDR'];
	$ua=$_SERVER['HTTP_USER_AGENT'];
	
	$sql="insert into gbook(username,content,ipaddr,uagent) value('$u','$c','$i','$ua');";
	
	if(mysqli_query($con, $sql)){
		echo "<script>alert('留言成功')</script>";
		header("location:index.php");
	}
	else{
		echo "<script>alert('留言失败')</script>";
		header("location:index.php");
	}
}
mysqli_close();

?>