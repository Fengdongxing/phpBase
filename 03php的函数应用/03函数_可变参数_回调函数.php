<?php
// 函数传递任意参数,使用func_get_args()函数,返回所有参数当做一个数组返回

//虽然没有声明参数列表,但可以传入任意个数,任意类型的参数
function more_args(){
    $args = func_get_args();
    //count()方法
    for ($i = 0; $i < count($args); $i++) {
        echo "第".$i."个参数是".$args[$i]."<br>";
    }
}
more_args();
more_args("one","two","three",1,2,3);

//例子,array(),echo(), array_merge()函数
//...运算替换func_get_args,

function sum(...$ints){
    return array_sum($ints);
}

// ...运算符,将数组和可遍历的对象展开函数参数,
function add($a,$b,$c,$d){
    return $a + $b + $c + $d;
}
$operators = [2,3,4];
echo add(1,...$operators);

function fun($a,$b){

}
//fun(); //报错

//解决办法,?通配符
//string类型
function fun2(?string $str){
    var_dump($str);
}
// 正常的类型值,没问题
fun2('ydma');

//使用NULL值参数,没问题
fun2(null);

//不适用参数,出错
//fun2();

//回调函数 callback
/**
 * 1.变量函数
 *
 */
/**
 * @param $a
 * @param $b
 * @return int
 */
function one( $a, $b)
{
    return $a + $b;
}

/**
 * @param $a
 * @param $b
 * @return int
 */
function two($a,$b)
{
    return $a * $a + $b * $b;
}

/**
 * @param $a
 * @param $b
 * @return int
 */
function three($a,$b){
    return $a * $a * $a + $b * $b * $b;
}

$result = "one";
echo $result(5,6);
$result = "two";
echo $result(5,6);
$result = "three";
echo $result(5,6);

//
/**声明回调函数filter,在0-100的整数中通过自定义条件过滤不要的数字
 * @param callback $fun
 * @return void
 */
function filter( $fun ){
    for ($i = 0; $i < 100; $i++) {
        if( $fun($i) ){
            continue;
        }
        echo $i."<br>";
    }
}

/**声明一个函数one2,如果参数是3的倍数就返回true,否则返回false
 * @param int $num
 * @return
 */
function one2($num)
{
    return $num % 3 === 0;
}

/**声明一个函数two,如果参数是一个回文数,(翻转后还等于自己的数)
 * @param $num
 * @return bool
 */
function two2($num){
    return $num == strrev($num);
}

filter("one2");
echo "-----------------<br>";
filter("two2");

/**
 * 借助call_user_func_array()函数自定义回调函数
 * 虽然可以使用变量函数声明自己的回调函数,但最多的还是通过call_user_func_array()函数去实现,call_user_func_array()是内置函数
 * call_user_func_array(),两个参数: 1.伪类型callback,这个参数是一个字符串,表示要调用的函数名
 */
/**输出两个字符串,
 * @param $msg1
 * @param $msg2
 * @return void
 */
function fun3($msg1,$msg2){
    echo '$msg1 = '.$msg1;
    echo '<br>';
    echo '$msg2 = '.$msg2;
}

/**
 * 通过系统函数call_user_func_array()调用函数func();
 */
call_user_func_array("fun3",array('LAMP','兄弟连'));
//上面的filte函数改造为
function filter2( $fun ){
    for ($i = 0; $i < 100; $i++) {
        if( call_user_func_array($fun,array($i)) ){
            continue;
        }
        echo $i."<br>";
    }
}
// 递归函数: 自己调用自己

/**test,用于测试递归
 * @param int $n
 * @return void
 */
function test( $n )
{
    echo $n."&nbs;&nbsp;";
    if($n > 0)
        test($n -1);
    else
        echo "<-->";
    echo $n."&nbs;&nbsp;";
}
test(10);

//require 和 include

//匿名函数,
$fun10 = function($param){
    echo $param;
};

$fun10('www.ydna.com');

//闭包: 在函数内部可以使用外部变量,需要通过关键字use, 来连接闭包函数和外界变量,

function callback($callback){
    $callback();
}

$var = '字符串';

callback(function() use($var){
    echo "闭包函数传递参数测试{$var}";
});