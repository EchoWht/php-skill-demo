<?php
 header("Content-Type:text/html;charset=utf-8");
    require_once 'excel_reader2.php';
    set_time_limit(20000);
    ini_set("memory_limit","2000M");
    //使用pdo连接数据库
    $dsn = "mysql:host=localhost;dbname=alumni;";
    $user = "root";
    $password = "";
    try{
    $dbh = new PDO($dsn,$user,$password);
    $dbh->query('set names utf8;');
    }catch(PDOException $e){
    echo "连接失败".$e->getMessage();
    }
    //pdo绑定参数操作
    $stmt = $dbh->prepare("insert into alumni(gid,student_no,name) values (:gid,:student_no,:name) ");
    $stmt->bindParam(":gid", $gid,PDO::PARAM_STR);
    $stmt->bindParam(":student_no", $student_no,PDO::PARAM_STR);
    $stmt->bindParam(":name", $name,PDO::PARAM_STR);
    //使用php-excel-reader读取excel内容
    $data = new Spreadsheet_Excel_Reader();
    $data->setOutputEncoding('UTF-8');
    $data->read("stu.xls");
    for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {
    for ($j = 1; $j <= 3; $j++) {
    $student_no = $data->sheets[0]['cells'][$i][1];
    $name = $data->sheets[0]['cells'][$i][2];
    $gid = $data->sheets[0]['cells'][$i][3];
    }
    //将获取的excel内容插入到数据库
    $stmt->execute();
    }
    echo "执行成功";
    echo "最后插入的ID：".$dbh->lastInsertId();
    ?>