<?php
/*PHP 的变量声明后有一定的使用范围，变量的范围是它定义的上下文背景（也就是它的生效范围）。
大部分的 PHP 变量如果不是在函数里面声明的，则只能在声明处到文件结束的一个单独的范围内使用。
这个单独的范围跨度，不仅是在开始标记处到结束标记处使用，也可以在一个页面的所有开启的 PHP
模式下使用，包含了 include 和 require 引入的文件。如果使用 Cookie 或 Session，还可以在多个页面中
应用。
在变量的使用范围内，我们可以借助 unset()函数释放指定的变量，使用 isset()函数检测变量是否设
置，使用 empty()函数检查一个变量是否为空。可以通过以下方式使用这几个函数控制变量。*/

$var = '';
if(empty($var)){
    echo '$var is either 0 or not set at all';
}

if(!isset($var)){
    echo '$var is not set at all';
}

unset($var);

if(isset($var)){
    echo 'This var is set so I will print';
}

// 可变变量
//有时使用可变变量名是很方便的。 也就是说，一个变量的变量名可以动态地设置和使用。一个普通的变量通过声明来设置，
//而另一个可变变量获取了一个普通变量的值作为这个可变变量的变量名,如下所示