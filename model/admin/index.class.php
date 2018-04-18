<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/4/2
 * Time: 16:38
 */
class index extends adminPar {
    //默认初始化
    function init(){
        $this->smarty->display('admin/login.html');
    }
    //验证码
    function code(){
        $obj=new code('assets/admin/fonts/eurostile.TTF');
        $obj->output();
    }
    //验证账号密码
    function checkpass(){
        $code=$_POST['code'];
        $c=strtoupper($this->session->get('code'));
        if($c!=strtoupper($code)){
            $this->jump('验证码不正确！','index.php?m=admin');
            exit;
        }
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $db=new db();
        $db->table='user';
        $arr=$db->selOne('*',"user='$user'");
        if($arr){
            if($arr['pass']==md5($pass)){
                $this->session->set('user',$user);
                $this->session->set('time', date('Y-m-d H:i:s'));
                $this->jump('登陆成功！','index.php?m=admin&f=index&a=main');
            }else{
                $this->jump('密码不正确！','index.php?m=admin');
                exit;
            }
        }else{
            $this->jump('账号不正确！','index.php?m=admin');
            exit;
        }
        $db->close();
    }
    //进入后台
    function main(){
        $user=$this->session->get('user');
        if(!isset($user)){
            $this->jump('请登录','index.php?m=admin');
            exit;
        }
        $db=new db();
        $db->table='user';
        $arr=$db->selOne('*',"user='$user'");
        if($arr){
            $img=$arr['img']==''? 'assets/img/user.png':$arr['img'];
            $name=$arr['name'];
            $this->smarty->assign('img',$img);
            $this->smarty->assign('name',$name);
            $time=$this->session->get('time');
            $this->smarty->assign('time',$time);
        }else{
            $this->jump('数据有误','index.php?m=admin&f=index&a=main');
            exit;
        }
        $db->close();
        $this->smarty->display('admin/index.html');
    }
    //退出后台
    function out(){
        $this->session->del('user');
        $this->session->del('time');
        $this->session->del('code');
        $this->session->out();
        $this->jump('退出成功','index.php?m=admin');
    }

}