<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/4/4
 * Time: 9:36
 */
class adminPar{
    protected $smarty;
    protected $session;
    //构造函数
    function __construct(){
        $this->smarty=new Smarty();
        $this->smarty->setTemplateDir('templates');
        $this->session=new session();
    }
    //跳转页面
    function jump($mess,$href){
        $this->smarty->assign('mess',$mess);
        $this->smarty->assign('href',$href);
        $this->smarty->display('admin/login-ver.html');
    }
}