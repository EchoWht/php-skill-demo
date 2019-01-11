<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/21 0021
 * Time: 14:46
 */
$client=new SoapClient(null,["uri"=>"php.test","location"=>"http://localhost/webservice/data_service.php"]);
echo $client->add(100,200);
unset($client);