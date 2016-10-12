<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php

/*1.连接数据库*/
 $con = mysql_connect("localhost","root","wante123");
//
///*2.选择数据库名*/
 mysql_select_db("3dphone", $con);
//
///*3.设置编码防止汉字乱码*/
 mysql_query("SET NAMES 'UTF8'");

// function get_str2($id = 0) {
//     global $str;
//     $sql = "select user_id, user_name,parent_id,member_serviceid from ecs_users where parent_id= $id";
//     $result = mysql_query($sql);//查询pid的子类的分类
//     if($result && mysql_affected_rows()){//如果有子类
//         $str .= '<ul>';
//         while ($row = mysql_fetch_array($result)) { //循环记录集
//             // $sql1 = "UPDATE `ecs_users` SET `member_serviceid` = '60533462' WHERE `ecs_users`.`user_id` = ".$row['user_id'];
//             // $r= mysql_query($sql1);
//             $str .= "<li>" . $row['user_id'] . "--<span style='color:red'>" . $row['user_name'] ."</span>--" . $row['member_serviceid']. "</li>"; //构建字符串
//             get_str2($row['user_id']); //调用get_str()，将记录集中的id参数传入函数中，继续查询下级
//         }
//         $str .= '</ul>';
//     }
//     return $str;
// }
// echo get_str2(33164); //输出无限级分类