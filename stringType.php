<?php
// 字符串, 1 '', 2 ""
// 指定一个简单字符串的最简单的方法是用单引号（'）括起来。在单引号引起来的字符串中不能再包
//含单引号，试图包含会有错误发生。如果要在单引号中表示一个单引号，则需要用反斜线（\）转义。如
//果在单引号之前或字符串结尾需要出现一个反斜线，则需要用两个反斜线表示。注意，如果试图转义任
//何其他字符，反斜线本身也会被显示出来。所以在单引号中可以使用转义字符（\），但只能转义在单引
//号中引起来的单引号和转义字符本身。
//另外，在单引号字符串中出现的变量不会被变量的值替代。即 PHP 不会解析单引号中的变量，而
//是将变量名原样输出

echo 'this is a simple string';

//在单引号中如果再包含单引号需要使用转义字符"(\)"转义
echo 'this is a \'simple\' string';

//只能将最后的反斜杠转义输出一个反斜杠,其他的转义都是无效的,会原样输出
echo 'this \n is \r a \t simple string \\';

$str = 100; // 定义一个整型变量$str

// 会将变量名$str原样输出,并不会在单引号中解析这个变量
echo 'this is a simple $str string';

// 所以在定义简单的字符串时,使用单引号的效率更高,因为PHP解析时不会花费一些字符串转义和解析变量上的开销.
// 因此如果没有特别需求,应使用单引号定义字符串.

// 2.双引号
// "" php懂得更多的特殊转义字符的转义,""最重要的是其中的变量名会被变量值替代,即可以解析双引号中的包含变量.
//通常是一些非打印字符.
// \n  \r \t \\ \$ \"

$beer = 'Heineken';
//可以将下面的变量$beer解析,因为(')在变量名中是无效的
echo "$beer's taste is great";

//不可以解析变量$beers 因为"s"在变量名中是有效的,没有$berrs这个变量
//echo "He drank some $beers";


echo "He drank some ${beer}s";

//可以将变量解析,{}的另一种用法
echo "He drank some {$beer}s";

// 定界符

// 另一种给字符串定界的方法是使用定界符语法（<<<）。应该在“<<<”之后提供一个标识符开始，
//然后是包含的字符串，最后是同样的标识符结束字符串。结束标识符必须从行的第一列开始，并且后面
//除了分号不能包含任何其他的字符，空格及空白制表符都不可以。同样，定界标记使用的标识符也必须
//遵循 PHP 中其他任何标签的命名规则：只能包含字母、数字、下画线，而且必须以下画线或非数字字
//符开始。
$string = <<<EOT
    这里是包含在定界符中的字符串，指出了定界符的一些使用时的注意事项。
    很重要的一点必须指出，结果标识符EOT所在的行不能包含任何其他字符。这意味着该标识符
    不能被缩进，而且在结束标识的分号之前和之后都不能有任何空格或制表符。
    同样重要的是，要意识到在结束标识符之前的第一个字符必须是你的操作系统中定义的换行符。
    如果再这种情况下找不到合适的结束标识符,将会导致一个在脚本最后一行出现的语法错误。
EOT;
echo $string;


//
$name = 'MyName'; //定义一个变量$name
// 以下代码是直接输出定界符中的字符串
// 在定界符中可以使用任意转义字符,直接使用双引号以及解析其中的变量
echo <<<EOT
    My name is $name. I am printing a "String" \n.
    \tNow,I am printing some new line \n\r.
    \tThis should print a capital 'A'
EOT;

// 以下是一个非法的例子,不能使用定界符初始化类成员
class foo {
    public $bar = <<<EOT
        bar
EOT;

}



//另外，从 PHP 5.3.0 版本以后，对定界符号又增加了新功能。可以在开始边界字符串名称两边加上
//双引号或单引号。加上双引号的结构类似于双引号字符串（默认结构），使用单引号的结构类似于单引
//号字符串，在区间内就不进行解析操作了。这种结构很适合于嵌入 PHP 代码或其他大段文本而无须对
//其中的特殊字符进行转义

$name = 'MyName';

// 在EOT的两边加上双引号,和双引号功能一样,变量和转义符号可以解析
echo <<<EOT
    My name is "$name".
    This should not print a capital 'A": \x41
EOT;

//在EOT两边加上双引号,和双引号功能一样,变量和转义符号可以解析
echo <<<"EOT"
    My name is "$name".
    This should not print a capital 'A': \x41
EOT;

//
echo <<<'EOT'
    My name is "$name".
    This should not print a capital 'A': \x41
EOT;

//从 PHP 7 开始，可以在双引号字符串或定界符字符串中，支持使用“\u{xxxxx}”来解析 unicode 字
//符。下面代码中，在字符串中有 4 个 unicode 字符，试试会输出什么，代码如下所示：
echo "\u{4f5c} \u{8005} \u{5f88} \u{5e05}";