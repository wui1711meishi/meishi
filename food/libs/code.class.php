<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/3/29
 * Time: 16:56
 */
class code{
    private $width=120;
    private $height=40;
    private $letter='qwertyuiopasdfghjklzxcvbnm0123456789';
    private $img;
    private $pass;
    private $str;
    function __construct($pass){
        $this->img=imagecreatetruecolor($this->width,$this->height);
        $this->pass=$pass;
    }
    function getcolor($type='b'){
        if($type=='b'){
            $r=mt_rand(10,120);
            $g=mt_rand(10,120);
            $b=mt_rand(10,120);
        }else if($type='l'){
            $r=mt_rand(120,240);
            $g=mt_rand(120,240);
            $b=mt_rand(120,240);
        }
        return imagecolorallocate($this->img,$r,$g,$b);
    }

    function fillbg(){
        imagefill($this->img,0,0,$this->getcolor());
    }

    function paintD(){
        for($i=0;$i<20;$i++){
            imagesetpixel($this->img,mt_rand(0,$this->width),mt_rand(0,$this->height),$this->getcolor());
        }
    }
    function paintL(){
        for($i=0;$i<5;$i++){
            imageline($this->img,mt_rand(0,$this->width),mt_rand(0,$this->height),mt_rand(0,$this->width),mt_rand(0,$this->height),$this->getcolor());
        }
    }
    function paintword(){
        for($i=0;$i<4;$i++){
            $word=substr($this->letter,mt_rand(0,strlen($this->letter)-1),1);
            $word=mt_rand(0,1) ? $word : strtoupper($word);
            imagettftext($this->img,mt_rand(18,22),mt_rand(-10,10),mt_rand($i*$this->width/4,$i*$this->width/4+10),mt_rand($this->height/2+5,$this->height/2+15),$this->getcolor('l'),$this->pass,$word);
            $this->str.=$word;
        }
        $_SESSION['code']=$this->str;
    }


    function output(){
        header('content-type:image/png');
        $this->fillbg();
        $this->paintD();
        $this->paintL();
        $this->paintword();
        imagepng($this->img);
        imagedestroy($this->img);
    }


}
//$obj=new code('./assets/fonts/eurostile.TTF');
//
//$obj->output();