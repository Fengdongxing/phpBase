<?php
/**
 * 特殊的NULL值表示一个变量没有值,NULL类型唯一可能得值就是NULL。
 * NULL不表示空格,也不表示一个变量的值为空。NULL不区分大小写,在下列情况下一个变量被认为是NULL:
 * 1将变量直接赋值为NULL
 * 2声明的变量尚未被赋值
 * 3被unset()函数销毁的变量
 */

$a = NULL;

$b = "value";

unset($b);

var_dump($a);
var_dump($b);
var_dump($c);