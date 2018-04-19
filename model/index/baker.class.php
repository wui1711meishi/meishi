<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/4/19
 * Time: 10:09
 */
class baker extends  adminPar
{
    function init(){
        $db=new db();
        $db->table='baker';
        //分页
        $row=$db->selOne('count(*) as total');
        $a=new pages($row['total'],3);
        $a->pagestr();
        $arr=$db->selAll('*'," 1 order by id desc  ".$a->limit);
        $this->smarty->assign('pagestr',$a->str);
        $this->smarty->assign('bakerarr',$arr);
        $this->smarty->display('index/baker.html');
    }
    function show(){
        $db=new db();
        $db->table='product';
        //分页
        $row=$db->selOne('count(*) as total');
        $a=new pages($row['total'],3);
        $a->pagestr();
        $arr=$db->selAll('*'," 1 order by id desc  ".$a->limit);
        $this->smarty->assign('pagestr',$a->str);
        $this->smarty->assign('proarr',$arr);
        $this->smarty->display('index/product.html');
    }
}