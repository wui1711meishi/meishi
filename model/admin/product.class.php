<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/4/11
 * Time: 11:06
 */
class product extends adminPar
{
    function init(){

    }
    //递归得出所有分类目录
    function fun2($db,&$str,$id=0,$n=0){
        $pad=str_repeat('-',$n);
        $arr=$db->selAll('*',"cid=$id");
        foreach($arr as $item){
            $str.="<option value='{$item['id']}'>$pad{$item['name']}</option>";
            $this->fun2($db,$str,$item['id'],$n+2);
        }
    }
    //显示
    function show(){
        $db=new db();
        $db->table='product';
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
                <td><img style='width: 50px;' src='{$item['thumb']}' alt=''></td>
                <td>{$item['descrition']}</td>
                <td>{$item['uptime']}</td>
                <td>{$item['xgtj']}</td>
                <td>{$item['pfdj']}</td>
                <td>{$item['recommend']}</td>
                <td>{$item['like']}</td>
                <td>
                    <a href='index.php?m=admin&f=product&a=newproduct&id={$item['id']}' class='btn btn-success update'>编辑</a>
                    <a href='index.php?m=admin&f=product&a=checkdelproduct&id={$item['id']}'  class='btn btn-danger del' >删除</a>
                </td>
            </tr>";
        }
        $this->smarty->assign('str',$str);

        $this->smarty->display('admin/product.html');
        $db->close();
    }
    //添加
    function addproduct(){
        $db=new db();
        $db->table='category';
        $str='';
        $this->fun2($db,$str);

        $this->smarty->assign('str',$str);
        $this->smarty->display('admin/addproduct.html');
        $db->close();
    }
    //确认添加
    function checkaddproduct(){
        $name=$_POST['name'];
        $descrition=$_POST['descrition'];
        $xgtj=$_POST['xgtj'];
        $pfdj=$_POST['pfdj'];
        if(isset($_POST['img'])){
            $img=implode($_POST['img'],'--');
        }else{
            $_POST['img']='/food/upload/auto.png';
            $img=$_POST['img'];
        }

        $db=new db();
        $db->table='product';
        $row=$db->ins('name,descrition,xgtj,pfdj,thumb',"'$name','$descrition','$xgtj','$pfdj','$img'");
        if($row==1){
            $this->jump('添加完成！','index.php?m=admin&f=product&a=show');
        }else{
            $this->jump('添加失败！','index.php?m=admin&f=product&a=show');
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
    //修改
    function newproduct(){
        $id=$_REQUEST['id'];
        $db=new db();
        $str='';
        $db->table='product';
        $brr=$db->selOne('*',"id='$id'");
        $this->smarty->assign('brr',$brr);
        $img=explode('--',$brr['thumb']);
        $this->smarty->assign('img',$img);
        $this->smarty->display('admin/newproduct.html');
        $db->close();
    }
    //确认修改
    function checknewproduct(){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $descrition=$_POST['descrition'];
        $xgtj=$_POST['xgtj'];
        $pfdj=$_POST['pfdj'];

        if(isset($_POST['img'])){
            $img=implode($_POST['img'],'--');
        }else{
            $db=new db();
            $db->table='product';
            $arr=$db->selOne('*',"id='$id'");
            if($arr){
                $_POST['img']=$arr['thumb'];
                $img=$_POST['img'];
            }else{
                $_POST['img']='/mvcweb/upload/logo-bg.jpg';
                $img=$_POST['img'];
            }
        }

        $db=new db();
        $db->table='product';
        $row=$db->upt("name='$name',descrition='$descrition',xgtj='$xgtj',pfdj='$pfdj',thumb='$img'","id='$id'");
        if($row==1){
            $this->jump('修改完成！','index.php?m=admin&f=product&a=show');
        }else{
            $this->jump('修改失败！','index.php?m=admin&f=product&a=show');
        }
        $db->close();
    }
    //确认删除
    function checkdelproduct(){
        $id=$_REQUEST['id'];
        $db=new db();
        $db->table='product';

//        $arr=$db->selOne('*',"cid='$id'");
//        if($arr){
//            $this->jump('还有下级栏目，不能删除','index.php?m=admin&f=product&a=show');
//        }else{
//
//        }
        $row=$db->del("id='$id'");
        if($row==1){
            $this->jump('删除完成！','index.php?m=admin&f=product&a=show');
        }else{
            $this->jump('删除失败！','index.php?m=admin&f=product&a=show');
        }
        $db->close();
    }
    //图片上传
    function upload(){
        $up=new upload($_FILES['file']);
        $up->load();
    }
}