<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/4/9
 * Time: 10:08
 */
header("content-type:text/html;charset=utf8");
class pages{
    private $total;            //总条数
    private $pagenum;           //每一页显示的条数
    private $totalpage;         //总页数
    private $current;           //当前页数
    private $now;
    public $limit=''; //最终要取的范围
    public $str='';

    function __construct($total,$pagenum){
        $this->total=$total;
        $this->pagenum=$pagenum;
        $this->totalpage=ceil($total/$pagenum); //
    }
    function pagestr(){
        $this->current=isset($_GET['page'])? $_GET['page'] : 0;
//        mvcweb/aa/index.php?m=index&f=index&a=index
//        mvcweb/aa/index.php?m=index&f=index&a=index&page=0
        $url=isset($_GET['page'])? explode('page=',$_SERVER['REQUEST_URI'])[0].'page=' : $_SERVER['REQUEST_URI']."&page=";
        $this->now=$this->current+1;
        $this->str='<nav aria-label="Page navigation">
                  <ul class="pagination">';
        $this->str.="<li class='a1'><span>{$this->now}/{$this->totalpage}</span></li>";
        $this->str.="<li class='a2'><a href='{$url}0'>首页</a></li>";
        $prev=$this->current-1<0? 0:$this->current-1;
        $this->str.="<li><a class='prev' href='{$url}{$prev}'>&laquo;</a></li>";
        $start=$this->current-2<0 ? 0 : $this->current-2;
        $end=$this->current+2>$this->totalpage-1 ? $this->totalpage-1:$this->current+2;
        for($i=$start;$i<=$end;$i++){
            $n=$i+1;
            if($i==$this->current){
                $this->str.="<li class='active'><span>{$n}</span></li>";
            }else{
                $this->str.="<li><a href='{$url}{$i}'>{$n}</a></li>";
            }
        }
        $next=$this->current+1>$this->totalpage-1? $this->totalpage-1:$this->current+1;
        $this->str.="<li><a class='next' href='{$url}{$next}'>&raquo;</a></li>";
        $last=$this->totalpage-1;
        $this->str.="<li class='a3'><a href='{$url}{$last}'>尾页</a></li>";
        $this->str.="</ul></nav>";
        $this->limit .= " limit " . $this->current * $this->pagenum . "," . $this->pagenum;
    }
}

