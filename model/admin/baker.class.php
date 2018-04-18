<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/4/16
 * Time: 22:47
 */
class baker extends adminPar {
    function init(){

    }
    //递归得出所有分类内容
    function fun($db,&$str,$id=1){
        $arr=$db->selAll('*',"id=$id");
        foreach($arr as $item){
            $str.="<tr class='' align='center'>
                <td>{$item['id']}</td>
                <td><img style='width:50px' src='{$item['thumb']}' alt=''></td>
                <td>{$item['title']}</td>
                <td>{$item['time']}</td>
                <td>{$item['count']}</td>
                <td>{$item['cid']}</td>
                <td>
                    <a href='index.php?m=admin&f=baker&a=newbaker&id={$item['id']}&cid={$item['cid']}' class='btn btn-success update'>编辑</a>
                    <a href='index.php?m=admin&f=baker&a=delbaker&id={$item['id']}'  class='btn btn-danger del' >删除</a>
                </td>
            </tr>";
            $this->fun($db,$str,$id+1);
        }
    }
    //显示内容
    function show(){
        $db=new db();
        $db->table='baker';
        $str='';
        //分页
        $row=$db->selOne('count(*) as total');
        $a=new pages($row['total'],5);
        $a->pagestr();
        $arr=$db->selAll('*'," 1 ".$a->limit);
        $this->smarty->assign('pagestr',$a->str);
        $this->smarty->assign('arr',$arr);
        foreach($arr as $item){
            $str.="<tr class='' align='center'>
                <td>{$item['id']}</td>
                <td>{$item['name']}</td>
                <td><img style='width:50px' src='{$item['thumb']}' alt=''></td>
                <td>{$item['descrition']}</td>
                <td>
                    <a href='index.php?m=admin&f=baker&a=newbaker&id={$item['id']}' class='btn btn-success update'>编辑</a>
                    <a href='index.php?m=admin&f=baker&a=checkdelbaker&id={$item['id']}'  class='btn btn-danger del' >删除</a>
                </td>
            </tr>";
        }
        $this->smarty->assign('str',$str);

        $this->smarty->display('admin/baker.html');
        $db->close();
    }
    //添加内容
    function addbaker(){
        $db=new db();
        $db->table='category';
        $str='';
        $this->smarty->display('admin/addbaker.html');
        $db->close();
    }
    //确认添加内容
    function checkaddbaker(){
        $name=$_POST['name'];
        $descrition=$_POST['descrition'];
        if(isset($_POST['img'])){
            $img=implode($_POST['img'],'--');
        }else{
            $_POST['img']='/food/upload/auto.png';
            $img=$_POST['img'];
        }

        $db=new db();
        $db->table='baker';
        $row=$db->ins('name,descrition,thumb',"'$name','$descrition','$img'");
        if($row==1){
            $this->jump('添加完成！','index.php?m=admin&f=baker&a=show');
        }else{
            $this->jump('添加失败！','index.php?m=admin&f=baker&a=show');
        }
        $db->close();
    }
    //递归得出所有固定分类目录
    function fun3($db,&$str,$a=0,$id=0,$n=0){
        $pad=str_repeat('-',$n);
        $arr=$db->selAll('*',"cid=$id");
        foreach($arr as $item){
            if($a==$item['id']){
                $str.="<option selected value='{$item['id']}'>$pad{$item['name']}</option>";
            }else{
                $str.="<option value='{$item['id']}'>$pad{$item['name']}</option>";
            }
//            $str.="<option value='{$item['id']}'>$pad{$item['name']}</option>";
            $this->fun3($db,$str,$a,$item['id'],$n+2);
        }
    }
    //修改内容
    function newbaker(){
        $id=$_REQUEST['id'];
        $db=new db();
        $db->table='category';
        $str='';

        $db->table='baker';
        $brr=$db->selOne('*',"id='$id'");
        $this->smarty->assign('str',$str);
        $this->smarty->assign('brr',$brr);
        $img=explode('--',$brr['thumb']);
        $this->smarty->assign('img',$img);
        $this->smarty->display('admin/newbaker.html');
        $db->close();
    }
    //确认修改内容
    function checknewbaker(){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $descrition=$_POST['descrition'];
        if(isset($_POST['img'])){
            $img=implode($_POST['img'],'--');
        }else{
            $db=new db();
            $db->table='baker';
            $arr=$db->selOne('*',"id='$id'");
            if($arr){
                $_POST['img']=$arr['thumb'];
                $img=$_POST['img'];
            }else{
                $_POST['img']='/food/upload/auto.png';
                $img=$_POST['img'];
            }
        }

        $db=new db();
        $db->table='baker';
        $row=$db->upt("name='$name',descrition='$descrition',thumb='$img'","id='$id'");
        if($row==1){
            $this->jump('修改完成！','index.php?m=admin&f=baker&a=show');
        }else{
            $this->jump('修改失败！','index.php?m=admin&f=baker&a=show');
        }
        $db->close();
    }
    //确认删除内容
    function checkdelbaker(){
        $id=$_REQUEST['id'];
        $db=new db();
        $db->table='baker';
        $row=$db->del("id='$id'");
        if($row==1){
            $this->jump('删除完成！','index.php?m=admin&f=baker&a=show');
        }else{
            $this->jump('删除失败！','index.php?m=admin&f=baker&a=show');
        }
        $db->close();
    }
    //图片上传
    function upload(){
        $up=new upload($_FILES['file']);
        $up->load();
    }
}