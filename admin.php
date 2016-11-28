<?php 
	//关闭自动生成的安全文件
	define('BUILD_DIR_SECURE',false);
	// 定义应用目录
	// 定义应用目录
	 // define('APP_PATH','./Apps/');
	 //定义模块目录
	 define('BIND_MODULE','admin');
	 define('RUNTIME_PATH','./Runtime/');// 开启调试模式
	 define('APP_DEBUG',True);// 更名框架目录名称，并载入框架入口文件
	 require './ThinkPHP/ThinkPHP.php';
 ?>