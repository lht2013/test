<?php
/**
 *前台入口文件
 */
define('ALLOW', TRUE);
define('FILE_ROOT', dirname(__FILE__));
require './config/config_global.php';
require './source/function/function_global.php';
require './source/class/class_router.php';
require './source/class/class.db_mysql.php';
require './source/include/checkform.php';
require './source/class/class_base.php';
require './source/class/class_checker.php';
$class_router=new class_router('action',$_GET["action"]);


?>