<?php
header('Content-Type:text/html;charset=utf-8');
if(isset($_POST['username'],$_POST['pwd'])){
	setcookie('username',$_POST['username'],time()+3600);
	setcookie('pwd',$_POST['pwd'],time()+3600);
	header('Location:second.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户注册</title>
</head>
<body>
<form action="" method="post">
    <p>用户名：<input type="text" name="username" /></p>
    <p>&nbsp;密码：<input type="password" name="pwd" /></p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" /></p>
</form>

</body>
</html>
