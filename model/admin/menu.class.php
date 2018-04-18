<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/4/4
 * Time: 9:34
 */
class menu extends adminPar {
    //需要本身构造函数时，要调用父类的构造函数，否则会造成重写
    function __construct(){
        parent::__construct();
    }

    function init(){

    }
    //修改密码
    function newpass(){
        $user=$this->session->get('user');
        $db=new db();
        $db->table='user';
        $arr=$db->selOne('*',"user='$user'");
        if(!$arr){
            $this->jump('账户不存在','index.php?m=admin');
            exit;
        }
        $this->smarty->assign('user',$arr['user']);
        $db->close();
        $this->smarty->display('admin/newpass.html');
    }
    //判断密码
    function checkpass(){
        $user=$_POST['user'];
        $oldpass=md5($_POST['oldpass']);
        $newpass=md5($_POST['newpass']);
        $db=new db();
        $db->table='user';
        $arr=$db->selOne('*',"user='$user'");
        if($arr){
            if($arr['pass']==$oldpass){
                $row=$db->upt("pass='$newpass'","user='$user'");
                if($row==1){
                    $this->jump('修改成功,重新登陆！','index.php?m=admin');
                    $this->session->del('user');
                }else{
                    $this->jump('修改失败！','index.php?m=admin&f=index&a=main');
                }
            }else{
                $this->jump('旧密码错误！','index.php?m=admin&f=index&a=main');
            }
        }else{
            $this->jump('账户有误！','index.php?m=admin');
        }
        $db->close();
    }
    //显示分类
    function show(){
        $db=new db();
        $db->table='category';

        $str='';

        $this->fun($db,$str);

        $this->smarty->assign('str',$str);
        $this->smarty->display('admin/category.html');
        $db->close();
    }

    //递归得出所有分类内容
    function fun($db,&$str,$id=0,$n=0){
        $pad=str_repeat('-',$n);
        $arr=$db->selAll('*',"cid=$id");
        foreach($arr as $item){
            $str.="<tr class='' align='center'>
                <td>{$item['id']}</td>
                <td>$pad{$item['name']}</td>
                <td>{$item['enname']}</td>
                <td>{$item['cid']}</td>
                <td>
                    <a href='index.php?m=admin&f=menu&a=newcategory&id={$item['id']}&cid={$item['cid']}' class='btn btn-success update'>编辑</a>
                    <a href='index.php?m=admin&f=menu&a=delcategory&id={$item['id']}'  class='btn btn-danger del' >删除</a>
                </td>
            </tr>";
            $this->fun($db,$str,$item['id'],$n+2);
        }
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
    //添加分类
    function addcategory(){
        $db=new db();
        $db->table='category';
        $str='';
        $this->fun2($db,$str);
        $this->smarty->assign('str',$str);
        $this->smarty->display('admin/addcategory.html');
        $db->close();
    }
    //确认添加分类
    function checkaddcategory(){
        $name=$_POST['name'];
        $enname=$_POST['enname'];
        $cid=$_POST['cid'];

        if(isset($_POST['img'])){
            $img=implode($_POST['img'],'--');
        }else{
            $_POST['img']='/mvcweb/upload/logo-bg.jpg';
            $img=$_POST['img'];
        }


        $db=new db();
        $db->table='category';
        $row=$db->ins('name,enname,cid,thumb',"'$name','$enname','$cid','$img'");
        if($row==1){
            $this->jump('添加完成！','index.php?m=admin&f=menu&a=show');
        }else{
            $this->jump('添加失败！','index.php?m=admin&f=menu&a=show');
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
    //修改分类
    function newcategory(){
        $id=$_REQUEST['id'];
        $cid=$_REQUEST['cid'];
        $db=new db();
        $db->table='category';
        $str='';
        $this->fun3($db,$str,$cid);
        $this->smarty->assign('str',$str);

        $brr=$db->selOne('*',"id='$id'");
        $this->smarty->assign('str',$str);
        $this->smarty->assign('brr',$brr);
        $img=explode('--',$brr['thumb']);
        $this->smarty->assign('img',$img);

        $this->smarty->display('admin/newcategory.html');
        $db->close();
    }
    //确认修改分类
    function checknewcategory(){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $enname=$_POST['enname'];
        $cid=$_POST['cid'];

        if(isset($_POST['img'])){
            $img=implode($_POST['img'],'--');
        }else{
            $db=new db();
            $db->table='category';
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
        $db->table='category';
        $row=$db->upt("name='$name',enname='$enname',cid='$cid',thumb='$img'","id='$id'");
        if($row==1){
            $this->jump('修改完成！','index.php?m=admin&f=menu&a=show');
        }else{
            $this->jump('修改失败！','index.php?m=admin&f=menu&a=show');
        }
        $db->close();
    }
    //删除分类
    function delcategory(){
        $id=$_REQUEST['id'];
        $db=new db();
        $db->table='category';
        $arr=$db->selOne('*',"id='$id'");
        $this->smarty->assign('id',$arr['id']);
        $this->smarty->assign('name',$arr['name']);
        $this->smarty->assign('enname',$arr['enname']);
        $this->smarty->assign('cid',$arr['cid']);
        if(!$arr){
            $this->jump('数据有误','index.php?m=admin&f=menu&a=show');
        }
        $db->close();
        $this->smarty->display('admin/delcategory.html');
    }
    //确认删除分类
    function checkdelcategory(){
        $id=$_REQUEST['id'];

        $db=new db();
        $db->table='category';

        $arr=$db->selOne('*',"cid='$id'");
        if($arr){
            $this->jump('还有下级栏目，不能删除','index.php?m=admin&f=menu&a=show');
        }else{
            $row=$db->del("id='$id'");
            if($row==1){
                $this->jump('删除完成！','index.php?m=admin&f=menu&a=show');
            }else{
                $this->jump('删除失败！','index.php?m=admin&f=menu&a=show');
            }
        }
        $db->close();
    }
    //图片上传
    function upload(){
        $up=new upload($_FILES['file']);
        $up->load();
    }

}



//id  title  descrition content cid time count  富文本编辑器()