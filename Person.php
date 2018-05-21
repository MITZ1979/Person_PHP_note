<?php

header("Conten-type:text/html;charset-utf-8");


/*新建类*/
class Person{

    public $name='小明'; //属性
    public $name1='小红';//属性
    /*
     * $my_name  形参
     *
     * */
    public function run($my_name){ // 方法
        echo $my_name;
    }
}


// 实例化 (使用类的方法：先实例化类->new Person())
$p=new Person();


// object call properties and methods use ->.
// 对象调用属性以及方法使用->

//对象调用属性的时候,直接调用属性名,不要加$ When an object invokes an attribute, call the property name directly instead of $.
// 、对象调用方法的时候.直接写方法名就可以了

//echo $p->namel;

$p->run('小王' ) ;