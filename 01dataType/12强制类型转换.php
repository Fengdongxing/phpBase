<?php
/**
 *PHP中的类型强制转化和其他语言类似,可以在要转换的变量之前加上用括号起来的目标类型,也可以使用
 * 具体的转换函数,即intval(),floatval(),和strval()等,或是使用settype()函数转换类型.
 * 在变量之前加上用括号起来的目标类型
 */

$foo = 10;// $foo是一个整形,
$bar = (boolean)$foo; // $bar是一个布尔型
echo $bar;
/*
 * 在上例的括号内允许有空格和制表符,在括号中允许的强制类型转换如下.
 * (int),(integer): 转换成整形.
 * (bool),(boolean): 转换成布尔型
 * (float),(double),(real): 转换成浮点型
 * (string): 转换成字符串
 * (array): 转换成数组
 * (object): 转换成对象,
 * */


/*
 *
 * 使用具体的转换函数 intval()、floatval()和 strval()转换变量的类型。intval()函数用于获取变量的整数
值； floatval()函数用于获取变量的浮点值； strval()函数用于获取变量的字符串值。
 * */
$str = "123.45abc";
$int = intval($str); //获取变量$str的整型值123
$flo = floatval($str); //获取变量$str的浮点值123.45;
$str = strval(123.45); //获取$flo变量的字符串值"123.45";


/*
 *
 * 以上两种类型的强制转化都没有改变这些被转换变量本身的类型,而是通过转换将得到的新类型的数据赋值给新的变量,
 * 原变量的类型和值不变, 如果需要将变量本身的类型转换变成其他类型,可以使用settype()函数来设置变量的类型
 * */
$foo = "5bar"; // string
$bar = true; //boolean

settype($foo,"integer"); // $foo现在是5;
settype($bar,'string'); // $bar现在是"1" (string)
