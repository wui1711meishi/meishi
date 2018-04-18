<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/3/30
 * Time: 11:35
 */

class upload{
    private $path="upload";
    private $file;
    function __construct($file){
        date_default_timezone_get('Asia/Shanghai');
        $this->file=$file;
    }
    function load(){
        if(!is_dir($this->path)){
            mkdir($this->path);   //创建目录
        }
        $ext=explode('.',$this->file['name']);
        $extName=end($ext);					//end() 最后一个元素
        $date=date('Y-m-d');
        $filename=$date.time().mt_rand(1,10).'.'.$extName;
        $uploadUrl=$this->path.'/'.$filename;
        //图片上传  move_uploaded_file(临时位置，指定位置)
        move_uploaded_file($this->file['tmp_name'],$uploadUrl);
        echo $uploadUrl;

    }
}
//$up=new upload($_FILES['file']);
//$up->load();


































