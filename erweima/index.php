<?php
/*
 * 将二维码和背景图拼接起来
 *
 * */
require_once ('func.php');
$data="http://www.blskye.com";
$nickname="王昊天";
qrcode($data,$nickname);