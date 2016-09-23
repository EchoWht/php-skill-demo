<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/23 0023
 * Time: 16:41
 */
echo "Index";
session_start();

if (!isset ($_SESSION['username']))
{
   $urle= urlencode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']);
    header("Location: login.php?redirectURL=".$urle."");
}

