<?php
//在PHP中,对象和数组一样都是一种复合数据类型,但对象是一种更高级的数据类型。
//一个对象类型的变量，是由一组属性值和一组方法构成的。其中属性表明对象的一种状态，方法通常用来表明对
//象的功能。 本书将用一章的内容结束对象的使用，这里仅做简要的说明。要初始化一个对象，用new语句将对象实例化到一个变量中。
//
class Person {
    var $name;
    function say(){
        echo "Doing foo.";
    }
}

$p = new Person;

$p->name = "Tom";
$p->say();