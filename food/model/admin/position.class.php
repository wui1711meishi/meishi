<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/4/9
 * Time: 10:31
 */
class position extends  adminPar {
    function init(){

    }
    function show(){
        $db=new db();
        $db->table='position';
        $str='';
        //分页
        $row=$db->selOne('count(*) as total');
        $a=new pages($row['total'],5);
        $a->pagestr();
        $arr=$db->selAll('*'," 1 ".$a->limit);
        $this->smarty->assign('pagestr',$a->str);
        $this->smarty->assign('arr',$arr);
        $arr=$db->selAll('*');
        foreach($arr as $item){
            $str.="<tr class='' align='center'>
                <td>{$item['id']}</td>
                <td>{$item['name']}</td>
                <td>
                    <a href='index.php?m=admin&f=position&a=newposition&id={$item['id']}'  class='btn btn-warning del' >编辑</a>
                    <a href='index.php?m=admin&f=position&a=delposition&id={$item['id']}'  class='btn btn-danger del' >删除</a>
                </td>
            </tr>";
        }
        $this->smarty->assign('str',$str);
        $this->smarty->display('admin/position.html');
        $db->close();
    }
    function addposition(){
        $this->smarty->display('admin/addposition.html');
    }
    function checkaddposition(){
        $name=$_POST['name'];
        $db=new db();
        $db->table='position';
        $row=$db->ins("name","'$name'");
        if($row==1){
            $this->jump('添加成功!','index.php?m=admin&f=position&a=show');
        }else{
            $this->jump('添加失败!','index.php?m=admin&f=position&a=show');
        }
        $db->close();

    }
    function newposition(){
        $id=$_REQUEST['id'];
        $db=new db();
        $db->table='position';
        $arr=$db->selOne("*","id='$id'");
        $this->smarty->assign('arr',$arr);
        $this->smarty->display('admin/newposition.html');
    }
    function checknewposition(){
        $id=$_REQUEST['id'];
        $name=$_REQUEST['name'];
        $db=new db();
        $db->table='position';
        $row=$db->upt("name='$name'","id='$id'");
        if($row==1){
            $this->jump('修改成功!','index.php?m=admin&f=position&a=show');
        }else{
            $this->jump('修改失败!','index.php?m=admin&f=position&a=show');
        }
    }
    function delposition(){
        $id=$_REQUEST['id'];
        $db=new db();
        $db->table='position';
        $row=$db->del("id='$id'");
        if($row==1){
            $this->jump('删除成功!','index.php?m=admin&f=position&a=show');
        }else{
            $this->jump('删除失败!','index.php?m=admin&f=position&a=show');
        }
    }
}