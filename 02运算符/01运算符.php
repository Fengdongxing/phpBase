<?php
/*
 * +-乘除基本的运算符跟js差不多,
 * */

/*
 *
 * 字符串运算符 .,也称连接运算符
 * */

$name = "Tom";
$age = 27;
$height = 1.71;

// 将以上不同类型的变量使用点操作符和字符串链接起来,一起输出

echo "我的名字是: " .$name.",我的年龄是: ".$age.",我的身高".$height."米。"."<br>";

//比较运算符

//?? 从左往右第一个存在不为NULL的操作数。如果都没有定义且不为NULL,则返回NULL


//逻辑运算符, 跟js也是一模一样的

$username = "gaolf";
$password = "123456";
$email = "gaolf@brophp.com";
$phone = "010-7654321";

if($username == "gaolf" && $password == "123456"){
    echo "用户名和密码输入正确";
}

if($username == "" || $password == "" || $email == "" || $phone == ""){
    echo "所有的值一个都不能为空";
}

// 其他运算符

//?: 三元运算符, $a < $b ? $c = 1: $c = 0;

// instanceof 类型运算符, 用来测定一个给定的对象是否来自指定的对象类,  对象 instanceof 类名