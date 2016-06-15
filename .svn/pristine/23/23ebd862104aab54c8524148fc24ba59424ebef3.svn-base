<?php

/*
 * 二维码验证
 * */

header("Content-type:text/html;charset=utf-8");
session_start();

//echo $_SESSION['autofont'];
$auto=$_POST['autofont'];
if($_SESSION['autofont']==$auto){
	$info = array('success'=>'成功');
}else{
	$info = array('error'=>'失败');
}
$jsdata=json_encode($info);
echo $jsdata;
