<?php
/* Smarty version 3.1.30, created on 2018-04-17 10:41:45
  from "E:\phpstudy\WWW\food\templates\admin\login-ver.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad55ee9992593_83068444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '547ebb61a40c354c4863f04976cbeffcf4888e47' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\food\\templates\\admin\\login-ver.html',
      1 => 1522809876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad55ee9992593_83068444 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
login-sign.css">
    <title>加载页</title>
</head>
<style>

</style>
<body>
<div class="con">
    <h2><?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
</h2>
    <div class="link"><a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
">点击跳转</a>  <span>3</span>秒之后，自动跳转</div>
</div>
</body>
</html>
<?php echo '<script'; ?>
>
    let span=document.querySelector("span");
    let a=document.querySelector('a');
    let time=3;


    let href=a.href;
    let index=href.lastIndexOf('/');
    let str=href.slice(index);
    setInterval(function(){
        time--;
        span.innerHTML=time;
        if(time===0){
            if(str=='/index.php?m=admin' || str=='/index.php?m=admin&f=index&a=main'){
                window.top.location.href=href;
            }else if(str=='/person.php'){
                window.top.location.href='index.php';
            }else{
                window.location.href=href;
            }
        }
    },1000);
    a.onclick=function(e){
        e.preventDefault();
        if(str=='/index.php?m=admin' || str=='/index.php?m=admin&f=index&a=main'){
            window.top.location.href=href;
        }else if(str=='/person.php'){
            window.top.location.href='index.php';
        }else{
            window.location.href=href;
        }
    }
<?php echo '</script'; ?>
><?php }
}