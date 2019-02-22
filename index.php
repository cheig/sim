<?php
/**
 * 1.入口
 * 2.定义常量
 * 3.加载函数库
 * 4.启动框架
 */

/**
 * 定义常量
 */
define('myBlogPath',realpath('./'));
define('Core',myBlogPath . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR);
define('APP',myBlogPath . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR);
define('MODULE','app');
define('DEBUG',true);

include "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

if(DEBUG) {
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    ini_set('display_errors', 'On');
} else{
    ini_set('display_errors','Off');
}
/**
 * 加载所需要的类
 */
include Core.'/common/function.php';
include Core.'/myBlog.php';
spl_autoload_register('\core\myBlog::load');

/**
 * 运行控制器，框架控制
 */
\core\myBlog::run();
