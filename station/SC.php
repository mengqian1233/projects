<?php
header('Content-Type:text/html;charset=utf-8');
session_start();
//如果用户已经登录，直接显示相关信息
if(isset($_SESSION['username'])){
    $str = <<<INFOR
    <ul>
    <li><a href="#">查看文章</a></li></ul>
    <a href="main.php">主站</a>
    <a href="NC.php">华北分站</a>
INFOR;
    echo $str;
}else{header('location:login.php');}
