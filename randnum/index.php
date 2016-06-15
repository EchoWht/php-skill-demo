<?php
// 生成随机数
function rangNumber($a,$b){
	$arr=range($a,$b);
	shuffle($arr);
	foreach($arr as $values)
	{
	  return $values;
	}
}
echo rangNumber(1000,9999);