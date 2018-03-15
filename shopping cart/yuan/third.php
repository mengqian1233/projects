<?php
include '../code.php';
include '../func.inc.php';
if(isset($_POST['submit'])){
	echo '亲爱的'.$_COOKIE['username'].',您选择了以下商品';
	echo "<br/>";
function whichGood($val){
	switch($val){
		case'1':
			$val='苹果一斤（￥：5.88）';
			break;
		case'2':
			$val='香蕉一把（￥：3.69）';
			break;
		case'3':
			$val='手机一部（￥：6088）';
			break;
		case'4':
			$val='电脑一台（￥：4999）';
			break;
		case'5':
			$val='围巾一条（￥：299）';
			break;
	}
	return $val;
}

	foreach($_POST["checkbox"] as $value){
		echo whichGood($value);
		echo "<br/>";
	}	
function whichGoodPrice($val){
	switch($val){
		case'1':
			$val='5.88';
			break;
		case'2':
			$val='3.69';
			break;
		case'3':
			$val='6088';
			break;
		case'4':
			$val='4999';
			break;
		case'5':
			$val='299';
			break;
	}
	return $val;
}
		$num=0;
	foreach($_POST["checkbox"] as $value){
		$a=whichGoodPrice($value);
		for($i=0;$i<count($_POST["checkbox"]);$i++){
			$all[$i]=$a;
			$num+=$all[$i];
		} 	
	}	
	echo '订单总价为：'.'￥'.$num/count($all);
	echo "<br/>";
	exit;
}?>
<!DOCTYPE html>
<html>
    <head>
        <title>我的购物车我做主</title>
        <style type="text/css">
            *{
            	margin:0;
            	padding:0;
            }
            body{
            	text-align:center;
            }
            div#wrap{
            	margin-top:5%;
            	width:80%;
            	margin-left:10%;
            	border:1px solid #aaa;
            }
            img{
            	width:200px;
            	height:200px;
            }
            div{
            	width:210px;
            	text-align:center;
            	float:left;
            }
            #submit{
            	clear:both;
            	text-align:center;	
            }
            #submit input{
            	font-size:26px;
            }
        </style>
    </head>
    <body>
        <div id="wrap">
            <h1 align="center">请选择商品</h1>
            <form  method="post" action="third.php" enctype="multipart/form-data">
            <div>
                <img src="images/apple.jpg" />
                <input type="checkbox"  name="checkbox[]" value="1" />苹果一斤（￥：5.88）
            </div>
            <div>
                <img src="images/bananer.jpg" />
                <input type="checkbox" name="checkbox[]" value="2" />香蕉一把（￥：3.69）
            </div>
            <div>
                <img src="images/phone.jpg" />
                <input type="checkbox" name="checkbox[]" value="3" />手机一部（￥：6088）
            </div>
            <div>
                <img src="images/computer.jpg" />
                <input type="checkbox" name="checkbox[]" value="4" />电脑一台（￥：4999）
            </div>
             <div>
                <img src="images/scarf.jpg" />
                <input type="checkbox" name="checkbox[]" value="5" />围巾一条（￥：299）
            </div>
            <br />
            <p id="submit">
            <input type="submit" name="submit" value="去结账" />
            </p>
            </form>
        </div>
    </body>
</html>
