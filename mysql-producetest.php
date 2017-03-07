<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/7
 * Time: 11:19
 */

/*
 *  1
 */
$conn = mysql_connect('localhost','root','root') or die ("数据连接错误!!!");
mysql_select_db('test',$conn);
//$sql = "
//create procedure myproce()
//begin
//INSERT INTO user (id, username, sex) VALUES (NULL, 's', '0');
//end;
//";
//mysql_query($sql);//创建一个myproce的存储过程
//
//$sql = "call test.myproce();";
//$sql2 = "call test.myproce();";
//
//mysql_query($sql);//调用myproce的存储过程，则数据库中将增加一条新记录。
//mysql_query($sql2);//调用myproce的存储过程，则数据库中将增加一条新记录。
//
//echo 123;

/*
 *  2
 */
$sql = "
create procedure myproce2(in score int)
begin
if score >= 60 then
select 'pass';
else
select 'no';
end if;
end;
";
mysql_query($sql);//创建一个myproce2的存储过程
$sql = "call test.myproce2(70);";
echo $sql;
$re = mysql_query($sql);//调用myproce2的存储过程,看不到效果，可以在cmd下看到结果。
echo $re;