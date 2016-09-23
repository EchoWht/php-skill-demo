<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/23 0023
 * Time: 16:42
 */
echo "Login";
echo "<pre>";
var_dump($_GET);
echo "</pre>";


sleep(10);
session_start();
$_SESSION['username']='WangHaotian';
header("Location: ".$_GET['redirectURL']."");