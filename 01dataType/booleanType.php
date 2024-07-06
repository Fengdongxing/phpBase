<?php
// boolean 布尔型
// 布尔类是PHP中的标量类型之一，这是最简单的类型。boolean表达了TRUE或FALSE,即“真”或“假”。
//在PHP进行关系运算(也称比较运算)及布尔运算(也称逻辑运算)时,返回的都是布尔结果,它是构成PHP逻辑控制的判断依据,
//将其他类型作为boolean时,以下值被认为是FALSE,所有其他值都被认为是TRUE(包括任何资源),
// 布尔值 FASLE
// 整型值0为假, -1 和其他非0值,都为TRUE,
// 浮点型值 0.0
// 空白字符串 ''和字符串 "0",
// 没有成员变量的数组
// 没有单元的对象 (仅适用于PHP4)
// 特殊类型NULL (包括尚未设定的变量)

var_dump((bool) "");
var_dump((bool) 1);
var_dump((bool) -2);
var_dump((bool) "foo");
var_dump((bool) array(12));
var_dump((bool) array());
var_dump((bool) "false");