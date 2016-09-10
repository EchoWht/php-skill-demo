<?php header("Content-type: image/jpeg ;charset=utf-8");
function qrcode($data,$nickname){
    /*****************二维码生成2016-4-11 09:29:37start*******************/
    include ('erweima.php');
//1.定义二维码的生成路径
    $path='images/erweima/';
//2.定义二维码文件名
    $time=time();
//3.定义二维码内容

//4.执行生成函数
    erweima($data,$time,$path);
    /*****************二维码生成2016-4-11 09:29:37end*******************/

    /*****************拼接图片2016-4-11 10:07:52start*******************/
//1.字符串
    $oneword = "我为万特代言";

//2.获得二维码图片
    $erweima=imagecreatefrompng($path.$time.".png");

//3.获得背景图
    $bgimg=imagecreatefromjpeg("hello.jpg");

//4.拼接图片
//使二维码居背景图中,分别获得两图片的宽度
    $arr_bg_size = getimagesize("hello.jpg");
    $arr_er_size = getimagesize($path.$time.".png");
//$arr_size[0]是获得图片的宽度
    $erweima_auto=($arr_bg_size[0]-$arr_er_size[0])/2;
//数字分别代表 左边距 上边距 0 0 图片大小（这里是指二维码）
    imagecopy($bgimg,$erweima,$erweima_auto,200,0,0,$arr_er_size[0],$arr_er_size[0]);

//5.将字符串拼接到图片中
    $font = 'SIMYOU.TTF';//字体
//字体颜色
    $black = imagecolorallocate($bgimg, 0x00, 0x00, 0x00);
    $orange = imagecolorallocate($bgimg, 0, 0, 0);
    $px= (imagesx($bgimg) - 7.5 * strlen($oneword)) / 2;
//文字方式1 数字分别代表 字体大小 倾斜度 左边距 上边距
    imagefttext($bgimg, 15, 0, $px, 60, $orange, $font, $nickname);
    imagefttext($bgimg, 15, 0, $px, 100, $orange, $font, $oneword);
    /*****************拼接图片2016-4-11 10:07:52end*******************/
    imagejpeg($bgimg);
    imagedestroy($bgimg);
    imagedestroy($erweima);
//   6.刪除二维码，防止二维码过多影响服务器效率
    unlink($path.$time.".png");
}