<?php
//局部变量:也称内部变量,是在函数内部声明的变量,起作用域仅限函数内部,外部访问是非法
// 执行完毕之后会被释放

/**
 * $params int $one
 * @return void
 */
function demo($one) {
    $two = $one;
    echo "在函数内部执行:$one + $two =".($one + $two)."<br>";
}
demo(200);

//echo "在函数外部执行: $one + $two =".($one + $two);//非法访问

//如果在函数外部需要调用该变量值,必须通过return指令将值传回主程序区块以做后续处理.


function demo2( $one){
    $two = 100;
    return $one + $two;
}
$sum = demo2(200);
echo "在函数外部使用函数中的运算结果: $sum <br>";//


/**
 * 全局变量: 也称外部变量,是在函数外部定义的, 它的作用域为从变量定义处开始,到本程序文件的末尾
 * 在函数内部无法调用全部变量.
 */
$one2 = 200;
$two2 = 100;

function demo3(){
    echo "运算结果: ".($one + $two)."<br>";
}

demo3();//运算结果为 0, //两个变量没有赋初始值为NULL,

/**
 * 在函数中若要使用全局变量,必须利用global关键字来定义目标变量,以告诉函数主体此变量为全局变量,
 *
 */

$one4 = 200;
$two4 = 100;

function demo4(){
    global $one4, $two4;
    echo "运算结果: ".($one4 + $two4)."<br>";
}
demo4(); //

/*
 * 在函数中使用全局变量,除了使用关键字global,还可以用特殊的PHP自定义$GLOBALS数组.

 * */

$one5 = 200;
$two5 = 100;

function demo5(){
    $GLOBALS['two5'] = $GLOBALS['one5'] + $GLOBALS['two5'];
}

demo5();
echo $two5;//300

//静态变量
/**
 * 局部变量分为: 1.动态储存空间(默认) 2.静态变量(函数执行后,变量依然保存在内存中,需要用关键字static)
 *
 */

function test(){
    static $a = 0;
    echo $a;
    $a++;
}

test();// 0
test();// 1
test();// 2

//函数使用文档,1函数的功能描述 2.参数说明 3.返回值

/**
 * 定义一个计算两个整数平方和的函数
 *
 * @return void
 */
function test2($i,$j){
    $sum = 0;
    $sum = $i * $i + $j * $j;
    return $sum;
}

echo test2(2,5);//29

//php函数的参数才是决定如何成功应用一个函数,或是控制一个函数执行行为的标准.
// 所以学会申明具有不同参数的函数,以及可以成功调用各种形式参数的函数,才是学习php函数的关键

//引用参数的函数: 符号&
/**
 * 函数的参数是值传递
 *
 */

function test3( $arg ){
    $arg = 200;//在函数中改变参数$a的值为200
}
$var = 100;
test($var);
echo $var;

//如果想要函数一个参数总是通过引用传递,在参数前面加上&

function test4( &$arg ){
    $arg = 200;
}
$var2 = 100;
test4($var2);
echo $var2;
// 注意L如果在函数的形参中有&的参数,在必须传入一个变量;
/**
 * 在PHP中的系统函数有很多这样的函数,都需要传递一个变量给引用参数,
 * 数组处理函数中的next(),sort(),shuffle(),key()等函数都需要引用参数的函数
 */

$arr = array(1,5,8,4,6,2,9);
print_r($arr);

sort($arr);
print_r($arr);

//默认参数
function person($name = "张三",$age = 20,$sex="男"){
    echo "我的名字是: {$name},我的年龄为: {$age}, 性别: {$sex}";
}
person();
