<?php
/*
 * 一个可以生成二维码的函数
 *
 * */
session_start();
function goods_yanzheng($str){
	header("Content-type: image/PNG");

	$imgWidth = 140;
	$imgHeight = 40;
	$authimg = imagecreate($imgWidth,$imgHeight);
	$bgColor = ImageColorAllocate($authimg,145,255,245);
	$fontfile = "g.TTF";
	$white=imagecolorallocate($authimg,234,185,95);
	imagearc($authimg, 150, 8, 20, 20, 75, 170, $white);
	imagearc($authimg, 180, 7,50, 30, 75, 175, $white);
	imageline($authimg,20,20,180,30,$white);
	imageline($authimg,20,18,170,50,$white);
	imageline($authimg,25,50,80,50,$white);
	$noise_num = 800;
	$line_num = 20;
	imagecolorallocate($authimg,0xff,0xff,0xff);
	$rectangle_color=imagecolorallocate($authimg,0xAA,0xAA,0xAA);
	$noise_color=imagecolorallocate($authimg,0x00,0x00,0x00);
	$font_color=imagecolorallocate($authimg,0x00,0x00,0x00);
	$line_color=imagecolorallocate($authimg,0x00,0x00,0x00);
	for($i=0;$i<$noise_num;$i++){
	imagesetpixel($authimg,mt_rand(0,$imgWidth),mt_rand(0,$imgHeight),$noise_color);
	}
	for($i=0;$i<$line_num;$i++){
	imageline($authimg,mt_rand(0,$imgWidth),mt_rand(0,$imgHeight),mt_rand(0,$imgWidth),mt_rand(0,$imgHeight),$line_color);
	}
	$randnum=rand(0,mb_strlen($str,"UTF-8")-4);
	if($randnum%2)$randnum+=1;
	$str = mb_substr($str,$randnum,4,"UTF-8");
	$_SESSION['autofont']=$str;
	ImageTTFText($authimg, 20, 0, 16, 30, $font_color, 'g.TTF', $str);
	ImagePNG($authimg);
	ImageDestroy($authimg);
}