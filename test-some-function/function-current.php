<?php
/**
 * Created by PhpStorm.
 * User: wanghaotian
 * Date: 2019/1/11
 * Time: 9:59
 */
class User{
    public $username;
}
$arr = ['username'=>'wang','password'=>'111111'];

$url=new User();

$url->{key($arr)} = current($arr);

var_dump($url);
