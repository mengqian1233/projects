<?php
header('Content-Type:text/html;charset=utf-8');
if(isset($_COOKIE['username'],$_COOKIE['pwd'])){
	header('Location:third.php');
}
else{
	echo '<h1><a href="first.php">请登录</a></h1>';
}
?>