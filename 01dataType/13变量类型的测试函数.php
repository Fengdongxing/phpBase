<?php
/**
 *在 PHP 中有很多可变
 * 函数用来测试变量的类型。如果只是想得到一个用于调试且易读懂的类型的表达方式，可以使用 gettype()
 * 函数，但必须先给这个函数传递一个变量，它将确定变量的类型并且返回一个包含名称的字符串。如果
 * 变量的类型不是前面所讲的 8 种标准类型之一，该函数就会返回“unknown type”。但要查看某个类型，
 * 不要用 gettype()函数，而要用 is_type()函数，它是 PHP 提供的一些特定类型的测试函数之一
 * 每个函数
 * 都使用一个变量作为其参数，并返回 true 或 false。这些函数如下。
 * 1.is_bool(): 判定是否是布尔类型
 * 2.is_int(),is_integer()和is_long(): 判定是否是整型
 * 3.is_float(),is_double()和is_real(): 判断是否是浮点数
 * 4.is_string(): 判定是否是字符串
 * 5.is_array(): 判断是否数组
 * 6.is_object(): 判断是否对象
 * 7.is_resource(): 判定是否是资源类型
 * 8.is_null(): 判定是否为空.
 * 9.is_scalar(): 判定是否是标量,也就是一个整数,浮点数,布尔型或字符串
 * 10.is_numeric():判定是否是任何类型的数字或数字字符串
 * 11.is_callable(): 判断是否是有效的函数名,(不是很明白 todo)
 */

$bool = TRUE;
$str = "foo";
$int = 12;

echo gettype($bool);
var_dump($str);

//
if(is_int($int)){
    $int += 4;
    echo "Ineger $int"; //这里$int会被解析为变量
}

if(is_string($bool)){
    //不成立,所以不输出
    echo "String : $bool";
}

if(is_bool($bool)){
    echo "boolean $bool";
}
// HTML表单并不传递整数,浮点数或者布尔值,它们只传递字符串. 要想检测一个字符串是不是数字,可以使用is_numeric()函数
