<?php
session_start();
header('Content-Type:text/html;charset=utf-8');
$str = <<<UL
    <ul>
        <li><a href="main.php">主站</a></li>
        <li><a href="NC.php">华北分站</a></li>
        <li><a href="SC.php">华南分站</a></li>
     </ul>
UL;
echo $str;
session_destroy();//销毁
