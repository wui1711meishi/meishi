<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/4/2
 * Time: 16:36
 */
header("content-type:text/html;charset=utf8");

$str=substr($_SERVER['REQUEST_URI'],0,strrpos($_SERVER['REQUEST_URI'],'/'));
//网络路径
define('WEB_PATH','http://'.$_SERVER['HTTP_HOST'].substr($_SERVER['REQUEST_URI'],0,strrpos($_SERVER['REQUEST_URI'],'/')).'/');
//本地路径
define('ROOT_PATH',__DIR__.'/');
//本地配置路径
define('LIBS_PATH',ROOT_PATH.'libs/');
//后台
//css路径
define('CSS_PATH',WEB_PATH.'assets/admin/css/');
//js路径
define('JS_PATH',WEB_PATH.'assets/admin/js/');
//img路径
define('IMG_PATH',WEB_PATH.'assets/admin/img/');
//font路径
define('FONT_PATH',WEB_PATH.'assets/admin/fonts/');
//font路径
define('KIND_PATH',WEB_PATH.'assets/admin/kindeditor/');
//前台
//css路径
define('INDEX_CSS_PATH',WEB_PATH.'assets/index/css/');
//js路径
define('INDEX_JS_PATH',WEB_PATH.'assets/index/js/');
//img路径
define('INDEX_IMG_PATH',WEB_PATH.'assets/index/images/');


include_once LIBS_PATH.'pages.class.php';
require_once LIBS_PATH.'db.class.php';
require_once LIBS_PATH.'upload.class.php';
include_once LIBS_PATH.'session.class.php';
include_once LIBS_PATH.'code.class.php';
require_once LIBS_PATH.'adminPar.class.php';
include_once LIBS_PATH.'libs/Smarty.class.php';
include_once LIBS_PATH.'router.php';



//$router=new router();
//$router->out();

