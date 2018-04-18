<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/4/9
 * Time: 21:38
 */
class webinfo extends adminPar {
    function show(){
        $db=new db();
        $db->table='webinfo';
        $arr=$db->selOne('*','id=1');
        $this->smarty->assign('arr',$arr);
        $this->smarty->display('admin/webinfo.html');
        $db->close();
    }
    function newwebinfo(){
        $id=$_REQUEST['id'];
        $db=new db();
        $db->table='webinfo';
        $brr=$db->selOne('*',"id='$id'");
        $this->smarty->assign('brr',$brr);
        $this->smarty->display('admin/newwebinfo.html');
        $db->close();
    }
    //确认修改
    function checknewwebinfo(){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $tel=$_POST['tel'];
        $email=$_POST['email'];
        $fax=$_POST['fax'];
        $website=$_POST['website'];
        $copy=$_POST['copy'];
        $db=new db();
        $db->table='webinfo';
        $row=$db->upt("webname='$name',webaddress='$address',webtelephone='$tel',webemail='$email',webpublic='$fax',website='$website',copyright='$copy'","id='$id'");
        if($row==1){
            $this->jump('修改完成！','index.php?m=admin&f=webinfo&a=show');
        }else{
            $this->jump('修改失败！','index.php?m=admin&f=webinfo&a=show');
        }
        $db->close();
    }
}