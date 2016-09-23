<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/23 0023
 * Time: 11:04
 */
/*score 初始数量 价格*/
$score = array(
    'num' => 6000,
    'price' => 1
);
/*涨价的标记*/
$flag = 200000;
$buy = array();
$total=0;
for ($i = 0; $i < 10; $i++) {
    $buy[$i] = array(
        'num' => $score['num'],
        'price'=>$score['price']
    );
    $total+=$buy[$i];
    echo "交易额：".$total.'<br>';

}

