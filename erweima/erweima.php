<?php
function erweima($data,$time,$path){
    //1.保存到服务器
    include('phpqrcode/phpqrcode.php');
// 二维码数据
    
// 生成的文件名
    $filename = $path.$time.'.png';
// 纠错级别：L、M、Q、H
    $errorCorrectionLevel = 'L';
// 点的大小：1到10
    $matrixPointSize = 4;
    QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
}






////2.输出到浏览器
//include "phpqrcode/phpqrcode.php";
//$value="http://www.jb51.net";
//$errorCorrectionLevel = "L";
//$matrixPointSize = "4";
//QRcode::png($value, false, $errorCorrectionLevel, $matrixPointSize);
////exit;

