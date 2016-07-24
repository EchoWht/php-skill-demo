<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/21 0021
 * Time: 14:43
 */
class DataAction{
    public function add($x,$y){
        return $x+$y;
    }
}
$server=new SoapServer(null,["uri"=>"php.test"]);
$server->setClass("DataAction");
$server->handle();