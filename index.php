<?php
/**
 * 入口文件
 * 1、定义常量
 * 2、加载函数
 * 3、启动框架
 */
/*获取当前目录*/
define('IMOOC',realpath(''));
/**
 * 框架核心目录
 */
define('CORE',IMOOC.'/core');
/*项目文件目录*/
define('APP',IMOOC.'/app');
define('MODULE','app');
/*是否开启调试模式*/
define('DEBUG',true);

include "vendor/autoload.php";

if(DEBUG){
	$whoops=new \Whoops\Run;
	$errorTitle='框架出错了';
	$option =new \Whoops\Handler\PrettyPageHandler;
	$option->setPageTitle($errorTitle);
	$whoops->pushHandler($option);
	$whoops->register();
   ini_set('display_error','On');
}else{
   ini_set('display_error','Off');
}


/*加载函数库*/
include CORE.'/common/function.php';
/*加载核心文件*/
include CORE.'/imooc.php';
/*当类不存在出发这个方法*/
spl_autoload_register('\core\imooc::load');
\core\imooc::run();










?>