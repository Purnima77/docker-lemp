<?php
phpinfo();exit;
$countOfArr = function($arr)
    {
		printf("count is %d\r\n", count($arr));
    };

$countOfArr(array("A", "B", "C"));


$message = 2;
$name = "purnima";

$anon = function(){
	echo $message;
};
$anon();

$anon2 = function($arg) use($message,$name){
	echo $arg ." ".$name;
};
$anon2("hello");
echo $message;
