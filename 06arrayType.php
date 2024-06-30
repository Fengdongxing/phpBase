<?php
// 数组是PHP中的一种重要的复合数据类型.
/*
       array(
           key1 => value1,
           key1 => value2,
           key1 => value3,
           key1 => value4,
           ...
       )

*/

$arr = array("foo" =>"bar",12 => true);
print_r($arr); // print_r是一个打印函数
echo $arr["foo"]; // 通过下标访问数组中的单个数据
echo $arr[12];  //
