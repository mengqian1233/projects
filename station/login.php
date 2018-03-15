<?php
header('Content-Type:text/html;charset=utf-8');
session_start();
//如果直接进入登录页面（用户已经登录），引导用户去主页
if(isset($_SESSION['username'])){
    header('location:index.php');}
if(isset($_POST['username'])){
    $_SESSION['username'] = $_POST['username'];
    //设置session，页面跳转
    if(isset($_SESSION['where'])){
        header('Location:'.$_SESSION['where']);}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
</head>
<body>
<form action="" method="post">
    <p>用户名：<input type="text" name="username" /></p>
    <p>&nbsp;密码：<input type="password" name="pwd" /></p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit"/></p>
</form>
</body>
</html>
