<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/8/21
 * Time: 上午11:57
 */

/*
 *
 *
 * 1、常量前面没有美元符号($)

2、常量只能通过define()函数定义，而不能通过赋值语句

3、常量可以不用理会变量的作用域在任何地方定义和访问

4、常量一旦定义就不能重新定义或取消定义

5、常量的值只能是标量

使用const使得代码简单易读，const本身就是一个语言结构，而define是一个函数。另外const在编译时要比define快很多。

1、const用于类成员变量的定义，一经定义，不可修改。Define不可以用于类成员变量的定义，可用于全局常量。

2、Const可在类中使用，define不能

3、Const不能再条件语句中定义常量

 * */
const NAMESPACE_SEPARATOR='\\';



use  Conf\ConfBasic;
use  BasicFirst\BasicPro;



function __autoload( $classname ) {

    echo "\n".NAMESPACE_SEPARATOR."\n";

    $classname = strtolower( $classname );

    $classname = str_replace( NAMESPACE_SEPARATOR,'/' , $classname );

    require_once( dirname( __FILE__ ) . '/' . $classname . '.php' );
}
//$dbms = 'mysql';

//
//$host = 'localhost';
//
//$dbname = 'test';
//
//$user = 'root';
//
//$pass = '';
//
//$dsn = "$dbms:host=$host;dbname=$dbname";
//
//$dbconnect = new PDO($dsn,$user,$pass);

echo 'index.php';
/*使用命名空间 依旧找不到class 必须同时加入autoload函数 在mac上 才能执行成功*/


$basic1 = new BasicPro('1','2','3',120);


$exp = new \Pattern\LiteralExpression('test');


$conf = new ConfBasic('/Conf/test.xml');

$conf->insertConf('test1','testvalue');
var_dump($exp);


var_dump($basic1);



