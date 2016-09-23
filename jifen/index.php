<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>
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
    'price' => 1,
    'first_release'=>$score['num']*0.1
);
/*涨价的标记*/
$flag = 200000;
$buy = array();
$total=0;

for ($i = 0; $i < 100; $i++) {
    $buy[$i] = array(
        'num' => $score['num'],
        'price'=>$score['price'],
//        'first_release'=>round($score['num']*0.1)
        'first_release'=>$score['num']*0.1
    );
    $total+=$buy[$i]['num'];
    echo "交易额：".$total.'<br>';
    if ($total>$flag){
        $score['price']= $score['price']+0.01;
        $total=$total-$flag;
        $score['num']=6000/$score['price'];

//        $score['num']=round($score['num']);
    }

}

echo "单价：". $score['price'].'<br>';
echo "数量：". $score['num'].'<br>';
echo  $score['price']*$score['num'];

echo "<pre>";
var_dump($buy);
echo "</pre>";