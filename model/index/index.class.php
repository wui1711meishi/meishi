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
    //初始化
    function init()
    {
        $this->smarty->display('index/index.html');
    }

    //首页
    function main(){
        $this->smarty->display('index/index.html');
    }
    //艾美挚美
    function aimei(){

        $db=new db();
        $db->table='product';
        $arr=$db->selAll('*'," 1 order by id desc limit 0,5 ");
        $this->smarty->assign('proarr',$arr);
        //分页
        $row=$db->selOne('count(*) as total');
        $a=new pages($row['total'],8);
        $a->pagestr();
        $arr=$db->selAll('*'," 1 order by id desc  ".$a->limit);
        $this->smarty->assign('pagestr',$a->str);
        $this->smarty->assign('proarr2',$arr);

        $this->smarty->display('index/aimei.html');
    }
    //面点师
    function baker(){
        $this->smarty->display('index/baker.html');
    }
    //关于我们
    function about(){
        $this->smarty->display('index/about.html');
    }


    //文章详情
    function article(){
        $this->smarty->display('index/article.html');
    }
    //新闻详情
    function newsxq(){
        $this->smarty->display('index/newsxq.html');
    }
}