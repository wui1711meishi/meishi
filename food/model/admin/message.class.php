<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/4/8
 * Time: 14:19
 */
class message extends  adminPar {
    function init(){

    }
    function show(){
        $db=new db();
        $db->table='message';
        $str='';
        $this->smarty->assign('str',$str);
        //分页
        $row=$db->selOne('count(*) as total');
        $a=new pages($row['total'],5);
        $a->pagestr();
        $arr=$db->selAll('*'," 1 order by id desc  ".$a->limit);
        $this->smarty->assign('pagestr',$a->str);
        $this->smarty->assign('arr',$arr);
        foreach($arr as $item){
            $str.="<tr class='' align='center'>
                <td>{$item['id']}</td>
                <td>{$item['name']}</td>
                <td><img style='width: 50px' src='{$item['thumb']}' alt=''></td>
                <td>{$item['mess']}</td>
                <td>{$item['time']}</td>
                <td>{$item['aid']}</td>
                <td>{$item['nid']}</td>
                <td>{$item['cid']}</td>
                <td>
                    <a href='index.php?m=admin&f=message&a=delmess&id={$item['id']}'  class='btn btn-danger del' >删除</a>
                </td>
            </tr>";
        }
        $this->smarty->assign('str',$str);
        $this->smarty->display('admin/message.html');
        $db->close();
    }
    function addmess(){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $telephone=$_POST['telephone'];
        $address=$_POST['address'];
        $mess=$_POST['mess'];
        $db=new db();
        $db->table='message';
        $row=$db->ins('name,telephone,email,address,mess',"'$name','$email','$telephone','$address','$mess'");
        if($row==1){
            $this->jump('留言成功!','index.php?m=index&f=index&a=Contact_us');
        }else{
            $this->jump('留言失败!','index.php?m=index&f=index&a=Contact_us');
        }
    }
    function delmess(){
        $id=$_REQUEST['id'];
        $db=new db();
        $db->table='message';
        $row=$db->del("id='$id'");
        if($row!=1){
            $this->jump('删除失败！','index.php?m=admin&f=message&a=show');
        }else{
            $this->jump('删除成功！','index.php?m=admin&f=message&a=show');
        }
    }
    function remess(){
        $id=$_REQUEST['id'];
        $aid=$_REQUEST['aid'];
        $nid=$_REQUEST['nid'];
        $cid=$_REQUEST['cid'];
        $db=new db();
        $db->table='message';

    }
}