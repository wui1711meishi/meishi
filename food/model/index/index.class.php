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

    //获取指定二级目录
    function getSec($i)
    {
        $db = new db();
        $db->table = 'category';
        $brr = $db->selAll('*', "cid='$i'");
        if (!$brr) {
            $this->jump('数据有误！', 'index.php?m=index&f=index&a=main');
        }
        $this->smarty->assign('brr', $brr);
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
        $db = new db();
        $db->table = 'category';
        $arr = $db->selAll('*', "cid=0");
        $this->smarty->assign('arr', $arr);
        $a = isset($_GET['a']) ? $_GET['a'] : 'index';//判断请求
        $this->smarty->assign('a', $a);

        //首页显示
        //最新新闻
        $db=new db();
        $db->table='content';
        $arr=$db->selAll('*'," cid='21' order by id desc limit 0,2");
        $newstexts='';
        foreach($arr as $key=>$item){
//            $imgstr=explode('--',$arr[$key]['img'])[0];
            $newstexts.="                    
                    <div class='col-md-6 news-grid'>
                    <div class='nomar'>
						<h5><span class='glyphicon glyphicon-calendar date' aria-hidden='true'></span> {$item['time']}</h5>
						<a href='index.php?m=index&f=index&a=showArticle&id={$item['id']}'>
						<p>{$item['title']}</p>
						</a>
					</div>
					</div>";
        }
        $this->smarty->assign('newstexts', $newstexts);
        //最新推荐
        $db=new db();
        $db->table='product';
        $arr=$db->selAll('*'," 1 order by id desc limit 0,3");
        $imgstr='';
        $imgtexts='';
        foreach($arr as $key=>$item){
            $imgstr=explode('--',$arr[$key]['img'])[0];
            $imgtexts.="                    
                    <div class='col-md-4 news-grid'>
                    <div class='nomar'>
						<h5><span class='glyphicon glyphicon-calendar date' aria-hidden='true'></span> {$item['time']}</h5>
						<a href='index.php?m=index&f=index&a=showpro&id={$item['id']}'>
							<img src='{$imgstr}' class='img-responsive zoom-img'>
						</a>
						<h4>{$item['name']}</h4>
					</div>
					</div>";
        }
        $this->smarty->assign('imgtexts', $imgtexts);


        //网站信息
        $db = new db();
        $db->table = 'webinfo';
        $web = $db->selOne('*', "id=1");
        $this->smarty->assign('webinfo', $web);
        $this->smarty->display("index/$a.html");
    }

    //主页
    function main()
    {
        $this->getNav(0);
        //网站信息
        $db = new db();
        $db->table = 'webinfo';
        $web = $db->selOne('*', "id=1");
        $this->smarty->assign('webinfo', $web);
        //最新新闻
        $db=new db();
        $db->table='content';
        $arr=$db->selAll('*'," cid='21' order by id desc limit 0,2");
        $newstexts='';
        foreach($arr as $key=>$item){
            $newstexts.="                    
                    <div class='col-md-6 news-grid'>
                    <div class='nomar'>
						<h5><span class='glyphicon glyphicon-calendar date' aria-hidden='true'></span> {$item['time']}</h5>
						<a href='index.php?m=index&f=index&a=showArticle&id={$item['id']}'>
						<p>{$item['title']}</p>
						</a>
					</div>
					</div>";
        }
        $this->smarty->assign('newstexts', $newstexts);
        //最新推荐
        $db=new db();
        $db->table='product';
        $arr=$db->selAll('*'," 1 order by id desc limit 0,3");
        $imgstr='';
        $imgtexts='';
        foreach($arr as $key=>$item){
            $imgstr=explode('--',$arr[$key]['img'])[0];
            $imgtexts.="                    
                    <div class='col-md-4 news-grid'>
                    <div class='nomar'>
						<h5><span class='glyphicon glyphicon-calendar date' aria-hidden='true'></span> {$item['time']}</h5>
						<a href='index.php?m=index&f=index&a=showpro&id={$item['id']}'>
							<img src='{$imgstr}' class='img-responsive zoom-img'>
						</a>
						<h4>{$item['name']}</h4>
					</div>
					</div>";
        }
        $this->smarty->assign('imgtexts', $imgtexts);
        $this->smarty->display('index/index.html');

    }

    //风格精选
    function Style_selection()
    {
        $a=$_REQUEST['a'];
        $db=new db();
        $db->table='category';
        $row=$db->selOne('*',"enname='$a'");
        $id=$row['id'];
        $this->cat($id);
        $this->smarty->assign('str', $this->cat($id));
        //精选系列
        $db=new db();
        $db->table='product';
        $proarr=$db->selAll('*',"cid='20' order by id desc limit 0,4");
        if(!$proarr){
            $this->jump('数据有误！', 'index.php?m=index&f=index&a=Style_selection');
        }
        $this->smarty->assign('proarr',$proarr);
        $imgstr='';
        $protxt='';
        foreach($proarr as $key=>$item){
            $imgstr=explode('--',$proarr[$key]['img'])[0];
            $protxt.="<div class='col-md-3 gallery-grid'>
					<a href='index.php?m=index&f=index&a=showpro&id={$item['id']}'>
						<img src='{$imgstr}' class='img-responsive ' />
					</a>
				</div>";
        }
        $this->smarty->assign('protxt', $protxt);


        $db1 = new db();
        //获取二级目录-文字
        $db1->table = 'category';
        $crr = $db1->selAll('*', "cid='1'");
        if (!$crr) {
            $this->jump('数据有误！', 'index.php?m=index&f=index&a=Style_selection');
        }
        $this->smarty->assign('crr', $crr);
        //获取指定目录的内容
        $this->getCon(6, 'con');
        //获取制定二级
//        $this->getSec(20);
//        获取导航
        $this->getNav(0);
        $this->init();
    }

    //产品
    function Product()
    {
        $db = new db();
        $db->table = 'category';
        $arr = $db->selAll('*', 'cid=2');
        if (!$arr) {
            $this->jump('获取二级标签错误', 'index.php?m=index&f=index&a=Product');
        }
        $this->smarty->assign('list', $arr);

        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : $arr[0]['id'];
        $this->smarty->assign('str', $this->cat($id));


        $cat = $_REQUEST['a'];
//        $this->getNav(1);
//        $this->getCon(26, 'con1');
        //分页
        $db = new db();
        $db->table = 'product';
        $row = $db->selOne('count(*) as total', "cid='$id'");
        $a = new pages($row['total'], 4);
        $a->pagestr();
        $con = $db->selAll('*', " cid='$id' " . $a->limit);
        $this->smarty->assign('pagestr', $a->str);
        $this->smarty->assign('id', $id);
        $this->smarty->assign('cat', $cat);
        $imgstr='';
        $imgtext='';
        foreach($con as $key=>$item){
            $imgstr=explode('--',$con[$key]['img'])[0];
            $imgtext.="<div class='col-md-3 gallery-grid'>
			        <a href='index.php?m=index&f=index&a=showpro&id={$item['id']}'>
                       <img src='{$imgstr}' alt=''>
                       <p>{$item['name']}</p>
                    </a></div>";
        }
        $this->smarty->assign('imgtext', $imgtext);
        $this->smarty->assign('con', $con);
        $this->init();
    }

    //客户服务
    function Customer_service()
    {
        $a=$_REQUEST['a'];
        $db=new db();
        $db->table='category';
        $row=$db->selOne('*',"enname='$a'");
        $id=$row['id'];
        $this->cat($id);
        $this->smarty->assign('str', $this->cat($id));

        $this->getCon(11, 'con1');
        $this->getCon(12, 'con2');
        $this->getCon(13, 'con3');
        $this->getSec(3);
        $this->getNav(2);
        $this->init();
    }

    //关于我们
    function About_us()
    {

        $a=$_REQUEST['a'];
        $db=new db();
        $db->table='category';
        $row=$db->selOne('*',"enname='$a'");
        $id=$row['id'];
        $this->cat($id);
        $this->smarty->assign('str', $this->cat($id));

        $this->getCon(14, 'con1');
        $this->getCon(15, 'con2');
        //新闻
//        $db = new db();
//        $db->table = 'content';
//        $content = $db->selAll('*', "cid='21' order by id desc ");
//        if (!$content) {
//            $this->jump('数据有误！', 'index.php?m=index');
//        }
//        $this->smarty->assign('con3', $content);
        //新闻分页
//        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : $arr[0]['id'];
        $db = new db();
        $db->table = 'content';
        $row = $db->selOne('count(*) as total', "cid='21'");
        $a = new pages($row['total'], 5);
        $a->pagestr();
        $con = $db->selAll('*', " cid='21' order by id desc " . $a->limit);
        $this->smarty->assign('con', $con);
        $this->smarty->assign('pagestr', $a->str);

        $this->getSec(4);
        $this->getNav(3);
        $this->init();
    }

    //联系我们
    function Contact_us()
    {
        $a=$_REQUEST['a'];
        $db=new db();
        $db->table='category';
        $row=$db->selOne('*',"enname='$a'");
        $id=$row['id'];
        $this->cat($id);
        $this->smarty->assign('str', $this->cat($id));
        $this->getCon(5, 'con');
        $this->getNav(4);
        $this->init();
    }

    //显示文章
    function showArticle()
    {
        $id = $_REQUEST['id'];
        $db = new db();
        $db->table = 'content';
        $row = $db->upt('count=count+1', "id='$id'");
        if (!$row == 1) {
            $this->jump('添加查看量失败！', 'index.php?m=index&f=index&a=Style_selection');
        }
        $db = new db();
        $db->table = 'content';
        $arr = $db->selOne('*', "id='$id'");
        $time = implode('/', explode('-', explode(' ', $arr['time'])[0]));
        $this->smarty->assign('time', $time);
        if (!$arr) {
            $this->jump('数据有误！', 'index.php?m=index&f=index&a=Style_selection');
        }
        $this->smarty->assign('con', $arr);
        $this->init();
    }

    //显示产品详情
    function showpro()
    {
        $id = $_REQUEST['id'];
        $db = new db();
        $db->table = 'product';
        $arr = $db->selOne('*', "id='$id'");
        if (!$arr) {
            $this->jump('数据有误！', 'index.php?m=index&f=index&a=Style_selection');
        }
        $img=$arr['img'];
        $imgstr='';
        $imgtext='';
        $imgarr=explode('--',$img);
        foreach ($imgarr as $item){
            $imgtext.="<div class='swiper-slide'><img src='{$item}'></div>";
        }
        $this->smarty->assign('imgtext', $imgtext);

        $this->smarty->assign('con', $arr);
        $this->init();
    }
}