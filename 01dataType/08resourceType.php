<?php
/**
 * 资源resource是一种特殊类型的变量,保存了到外部资源的一个引用。资源是通过专门的函数来建立和使用的。
 * 使用的资源类型变量包含： 打开的文件、数据库链接、图形画布区域等的特殊句柄，并由程序员创建、使用和释放。
 * 任何资源在不需要时都应该被及时释放，如果程序员忘记了释放资源，系统将自动启用垃圾回收机制，以避免内存的
 * 消耗殆尽。因此，很少需要使用某些free-result函数来手工释放内存。在下面的实例中，使用相应的函数创建不同的资源
 * 列表。如果创建成功，则返回资源引用赋给变量；如果创建失败，会返回布尔类型false，所以很容易判断资源是否创建
 * 成功

 */
//使用fopen()函数以写的方式打开本目录下的info.text文件,返回文件资源赋给变量$file_handle
$file_handle = fopen("info.text","w");
var_dump($file_handle);

// 使用opendir()函数打开Window系统下的C:\\WINDOWS\\Fonts
$dir_handle = opendir("C:\\WINDOWS\\Fonts");
var_dump($dir_handle);

//使用mysql_connect()函数链接本机的MySQL管理系统,返回MySQL的链接资源
/*$link_mysql = mysql_connect("localhost",'root',"123456");
var_dump($link_mysql);*/ //报错 todo

//使用imagecreate()函数创建一个100*50像素的画板,返回图像资源
$im_handle = imagecreate(100,50);
var_dump($im_handle);

$xml_parser = xml_parser_create();
var_dump($xml_parser);