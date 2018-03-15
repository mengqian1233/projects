<?php
header('Content-Type:text/html;charset=utf-8');
session_start();
//记录用户想去哪个站点
$_SESSION['where']=$_SERVER['PHP_SELF'];
//如果用户已经登录，直接显示相关信息
if(isset($_SESSION['username'])){
    $str = <<<INFOR
    <ul>
        <li><a href="#">添加用户</a></li>
        <li><a href="#">删除用户</a></li>
    </ul>
    <a href="NC.php">华北分站</a>
    <a href="SC.php">华南分站</a>
INFOR;
    echo $str;
}else{header('location:login.php');}
