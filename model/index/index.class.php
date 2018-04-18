<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/4/2
 * Time: 16:38
 */
class index extends adminPar
{
//    function __construct(){
//        parent::__construct();
//        $this->db = new db();
//    }
    //面包屑导航
    function cat($id)
    {
        $str = '</ol>';
        $db = new db();
        $db->table = 'category';
        $row = $db->selOne('*', "id='$id'");
        $str = "<li><span>{$row['name']}</span></li>" . $str;
        while ($row['cid'] != 0) {
            $cid = $row['cid'];
            $row = $db->selOne('*', "id='$cid'");
            $str = "<li><a href='index.php?m=index&f=index&a={$row['enname']}'>{$row['name']}</a></li>" . $str;
        }
        $str = "<li><a href='index.php'>首页</a></li>" . $str;
        $str = "<ol class='breadcrumb'>" . $str;
        return $str;
    }

    //获取一级目录
    function getNav($i = 0)
    {
        $db = new db();
        $db->table = 'category';
        $arr = $db->selAll('*', "cid='0'");
        if (!$arr) {
            $this->jump('数据有误！', 'index.php?m=index&f=index&a=main');
        }
        $img = explode('--', $arr[$i]['thumb']);
        $this->smarty->assign('img', $img);
        $this->smarty->assign('arr', $arr);
    }
    //获取指定目录的内容
    function getCon($i, $con)
    {
        $db = new db();
        $db->table = 'content';
        $content = $db->selAll('*', "cid='$i'");
        if (!$content) {
            $this->jump('数据有误！', 'index.php?m=index');
        }
        $this->smarty->assign($con, $content);
    }

    //初始化
    function init()
    {
        $this->smarty->display('index/index.html');
    }

    //主页
    function main()
    {
        $this->smarty->display('index/index.html');

    }
}