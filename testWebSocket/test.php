<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/28 0028
 * Time: 14:42
 */
require_once ("WebSocket.php");
$address="localhost";
$port=8080;
(new WebSocket($address, $port))->run();