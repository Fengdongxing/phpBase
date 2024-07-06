<?php
// php中支持8种原始类型
//四种标量类型-1boolen 布尔, 2. integer 整形  3.float浮点,也称double 4.string
//两种复合类型 array数组,object对象
//两种特殊类型  1.resource 资源, 2.NULL

$bool = TRUE;
$str = "foo";
$int = 12;

var_dump($bool); //直接输出变量$bool的类型和值bool(true)
var_dump($str);  // 直接输出变量$str的类型和值string(3)
var_dump($int);  // 直接输出变量$str的类型和值int(12)