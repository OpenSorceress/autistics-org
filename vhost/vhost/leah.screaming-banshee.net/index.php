<?php

$_POST = @file_get_contents("php://input");

$_POST = json_decode($_POST, true);

if (is_array($_POST)) {
foreach($_POST as $key=>$val) { 
	error_log("$key: --- $val");
}
}

foreach($_SERVER as $key=>$val) {
	error_log("$key:\t\t$val\n",3,"log/php.log");
}	
error_log("\n",3,"log/php.log");
