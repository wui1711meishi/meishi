<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/3/30
 * Time: 11:31
 */
class session{
     function __construct(){
         session_start();
     }
     function set($key,$value){
        $_SESSION[$key]=$value;
     }
     function get($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return null;
        }
     }
     function del($key){
        unset($_SESSION[$key]);
     }
     function out(){
         session_destroy();
     }
}


