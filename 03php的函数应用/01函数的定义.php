<?php
/**
 * 1.函数的定义: 实现一段代码的运行,实现某个功能,并可能给调用它的程序返回一个值.
 *
 */
// 2.分类: 系统函数, 自定义函数
/**
 *
 *
 *
 */
/*function 函数名 ([参数1,参数2,...,参数n]){
    函数体;
    return 返回值;
}*/

//例如
function table(){
    echo "<table align='center' border='1' width='600'>";
    echo "<caption><h1>通过函数输出表格</h1></caption>";

    for ($out = 0;$out < 10; $out++){
        $bgccolor = $out % 2 == 0 ? "#FFFFFF" : "#DDDDDD";
        echo "<tr bgcolor=".$bgccolor.">";
        for ($in = 0; $in < 10; $in++){
            echo "<td>".($out * 10 + $in)."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
//调用
table();

// 函数的参数
/**
 * @params string $tableName 表名
 * @params int  $rows 设置表格的行数
 * @params int  $cols 列数
 * @return void
 */
function table2($tableName,$rows,$cols){
    echo "<table align='center' border='1' width='600'>";
    echo "<caption><h1> $tableName </h1></caption>";

    for ($out = 0;$out < $rows; $out++){
        $bgccolor = $out % 2 == 0 ? "#FFFFFF" : "#DDDDDD";
        echo "<tr bgcolor=".$bgccolor.">";
        for ($in = 0; $in < $cols; $in++){
            echo "<td>".($out * $cols + $in)."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

table2("这个是表格的名字",20,5);

/**
 *
 * 函数的返回值: return 返回值
 * return 两个作用:
 * 1.return 返回确定的值
 * 2.退出函数
 */
// 改造table函数,如果将函数体中的所有输出内容都放到一个字符串里,并使用return语句返回这个存有表格数据的字符串,
//在调用table()函数时,就不是必须输出用户指定的表格了,而是获取用户制定的表格字符串. 用户不仅可以将获取的字符串直接输出显示表格,
//还可以将获取到的表格存储到数据库或文件中,或者有其他的字符串处理方式.

/**
 * @params string $tableName 表名
 * @params int  $rows 设置表格的行数
 * @params int  $cols 列数
 * @return void
 */
function table3($tableName,$rows,$cols){
    $str_table = ""; //拼接字符串
    $str_table .= "<table align='center' border='1' width='600'>";
    $str_table .= "<caption><h1> $tableName </h1></caption>";

    for ($out = 0;$out < $rows; $out++){
        $bgccolor = $out % 2 == 0 ? "#FFFFFF" : "#DDDDDD";
        $str_table .= "<tr bgcolor=".$bgccolor.">";
        for ($in = 0; $in < $cols; $in++){
            $str_table .= "<td>".($out * $cols + $in)."</td>";
        }

        $str_table .= "</tr>";
    }
    $str_table .= "</table>";
    return $str_table;
}

$str = table3("第一个3行4列的表",3,4);
echo table3("第二个2行10列的表",2,10);
echo $str;

// 函数返回类型申明
/*function 函数名():类型{
    函数体:
    return 返回值
}*/

function add($a,$b) :int {
    return $a + $b;
}

// 有float参与应该是float(2.5),但限制了返回类型为int,结果是int(2);
var_dump( add(1.5,1) );

//在定义一个函数之前就想好预期的结果,可以避免不必要的错误,这个特性可以帮助我们避免一些PHP的隐式类型转换带来的问题.
// 新的返回值 void,返回值为NULL类型.

//声明一个变量,如果相等必须返回null,不相等则交换值.
//
function swap(&$left,&$right) :void{
    if($left == $right){
        return;
    }
    $temp = $left;
    $left = $right;
    $right = $temp;
    //省略return语句,限制void类型,则返回null
}

$a = 1;
$b = 2;

var_dump(swap($a,$b),$a,$b);
//试图去获取一个void方法的返回值会得到null,并且不会产生任何警告.这么做得原因是不想影响更高层次的方法;

//因为PHP是弱类型编程语言,不允许在声明变量时加上类型限制, 但在php5中可以在函数的形参中加上了类型声明,

function demo_a( $args ){
    var_dump( $args );
}

demo_a( 1 );
demo_a( 'abc' );
demo_a( array(1,2,3) ); //传入数组,

//限制为array
function demo_b(array $args){
    var_dump( $args );
}

//demo_b( 'abc' );
demo_b( array(1,2,3) );

//形参中可以是标量,即: string、int、float和bool类型了

function add1($a,$b){
    return $a + $b;
}

var_dump( add(1.5,1) ); //结果2.5,

//不管是限制参数的类型,还是限制返回值的类型, PHP有两种处理模式,1.强制模式(默认),强制转换, 2.严格模式,触发TypeError致命错误.

//函数的工作原理和结构化编程
/**
 * 编写结构化程序之前,首先应确定程序的功能,必须做一些规划,在规划中必须列出程序要执行的所有具体任务.
 * 然后使用函数编写每个具体的任务,在主程序中按执行顺序调用每个任务函数,就组成了一个完整的结构化程序.
 */