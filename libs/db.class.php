<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/3/30
 * Time: 9:27
 */

header('content-type:text/html;charset=utf-8');
class db{
    private $host='sqld.duapp.com';
    private $username='f0d8ac15801042b79ff021ec66cf4ad2';
    private $pass='aa15ce8f7dcd47ea925f6bb901061fa4';
    private $dbname='raCvlAusnWhgHPSbJwWN';
    private $port=4050;
    public $db;
    public $table;
    function __construct(){
        $this->db=new mysqli($this->host,$this->username,$this->pass,$this->dbname,$this->port);
        $this->db->query('set names utf8');
    }
    //关闭数据库
    function close(){
        $this->db->close();
    }
    //查询所有数据
    function selAll($field="",$if=null){
        if($if){
            $sql="select ".$field." from ".$this->table." where ".$if;
        }else{
            $sql="select ".$field." from ".$this->table;
        }
        $result=$this->db->query($sql);
        return $result->fetch_all(MYSQL_ASSOC);
    }
    //查询单个数据
    function selOne($field="",$if=null){
        if($if){
            $sql="select ".$field." from ".$this->table." where ".$if;
        }else{
            $sql="select ".$field." from ".$this->table;
        }
        $result=$this->db->query($sql);
        return $result->fetch_assoc();
//        echo $sql;
    }
    //删除 (条件)
    function del($if){
        $sql="delete from ".$this->table." where ".$if;
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    //插入
    function ins($filed,$values){
        $sql="insert into ".$this->table." ( ".$filed." ) values (" .$values. ")";
        $this->db->query($sql);
        return $this->db->affected_rows;
//        echo $sql;
    }
    //更新 (数据，条件)
    function upt($filed,$if){
        $sql="update ".$this->table." set ".$filed." where ".$if;
        $this->db->query($sql);
        return $this->db->affected_rows;
//      echo $sql;
    }
}



