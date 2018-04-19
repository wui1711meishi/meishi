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
    function mainbaker(){
        $db = new db();
        $db->table = 'baker';
        $bakerarr=$db->selAll('*');
        $this->smarty->assign('bakerarr',$bakerarr);
        $db->close();
    }

    function mainnews(){
        $db = new db();
        $db->table = 'news';
        $newsarr=$db->selAll('*','1 order by look desc limit 0,2');
        $this->smarty->assign('newsarr',$newsarr);
        $db->close();
    }
    //初始化
    function init()
    {
        $db = new db();
        $db->table = 'product';
        $this->mainbaker();
        $this->mainnews();
        $proarr=$db->selAll('*','1 order by id desc limit 0,3');
        $proarr2=$db->selAll('*','1 order by id desc limit 3,3');
        $proarr3=$db->selAll('*','1 order by id desc limit 6,3');
        $this->smarty->assign('proarr',$proarr);
        $this->smarty->assign('proarr2',$proarr2);
        $this->smarty->assign('proarr3',$proarr3);
        $this->smarty->display('index/index.html');
        $db->close();
    }

    //首页
    function main(){
        $db = new db();
        $db->table = 'product';
        $this->mainbaker();
        $this->mainnews();
        $proarr=$db->selAll('*','1 order by id desc limit 0,3');
        $proarr2=$db->selAll('*','1 order by id desc limit 3,3');
        $proarr3=$db->selAll('*','1 order by id desc limit 6,3');
        $this->smarty->assign('proarr',$proarr);
        $this->smarty->assign('proarr2',$proarr2);
        $this->smarty->assign('proarr3',$proarr3);
        $this->smarty->display('index/index.html');
        $db->close();
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
    //关于我们
    function about(){
        $this->smarty->display('index/about.html');
    }


    //文章详情
    function article(){
        $this->smarty->display('index/article.html');
    }
}