<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018/4/19
 * Time: 8:43
 */

class news extends adminPar
{
    function __construct()
    {
        parent::__construct();
    }

    //新闻中心
    function news(){
        $db=new db();
        $db->table='news';
        $arr=$db->selAll("*");
        $this->smarty->assign("arr",$arr);
        $this->smarty->display('index/news.html');
        $db->close();
    }
    //新闻详情
    function detail(){
        $id=$_GET['id'];
        $db=new db();
        $db->table='news';
        $arr=$db->selOne("*","id=$id");
        $this->smarty->assign("arr",$arr);
        $db=new db();
        $db->table='message';
        $mess=$db->selAll('*',"1 order by id desc");
        $this->smarty->assign('mess',$mess);
        $this->smarty->display('index/newsxq.html');
    }
}