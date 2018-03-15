<?php
header('Content-Type:text/html;charset=utf-8');
session_start();
//如果用户已经登录，直接显示相关信息
if(isset($_SESSION['username'])){
    $str = <<<INFOR
    <ul>
        <li><a href="#">添加文章</a></li>
        <li><a href="#">删除文章</a></li></ul>
    <a href="main.php">主站</a>
    <a href="SC.php">华南分站</a>
INFOR;
      echo $str;}
else{ header('location:login.php');}
