<?php
/* Smarty version 3.1.30, created on 2018-04-17 10:50:55
  from "E:\phpstudy\WWW\food\templates\admin\newarticle.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad5610f8edb60_31010697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f94fa3f202ff5572f0ce5981658dd0c42b8523a' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\food\\templates\\admin\\newarticle.html',
      1 => 1523924736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad5610f8edb60_31010697 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?php echo CSS_PATH;?>
bootstrap.css" rel="stylesheet" />
    <link href="<?php echo CSS_PATH;?>
font-awesome.css" rel="stylesheet" />
    <link href="<?php echo CSS_PATH;?>
basic.css" rel="stylesheet" />
    <link href="<?php echo CSS_PATH;?>
custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo KIND_PATH;?>
themes/default/default.css" />
    <link rel="stylesheet" href="<?php echo KIND_PATH;?>
plugins/code/prettify.css" />
    <?php echo '<script'; ?>
 charset="utf-8" src="<?php echo KIND_PATH;?>
kindeditor.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 charset="utf-8" src="<?php echo KIND_PATH;?>
lang/zh-CN.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 charset="utf-8" src="<?php echo KIND_PATH;?>
plugins/code/prettify.js"><?php echo '</script'; ?>
>
    <style>
        #upload{
            height:auto;
        }
        #upload input[type=file]{
            width:40px;
            height:40px;
            font-size:0;
            display: block;
            position: relative;
            outline: none;
        }
        #upload input[type=file]:after{
            content: '+';
            width: 100%;
            height:100%;
            left:0;
            top:0;
            background: #fff;
            border:1px dotted #333;
            font-size:40px;
            text-align: center;
            color: #ccc;
            position: absolute;
        }
        #upload ul{
            height:auto;
            overflow: hidden;
            list-style: none;
            margin: 0;
            padding: 5px;
        }
    </style>

</head>
<body>
<form action="index.php?m=admin&f=article&a=checknewarticle" method="post" enctype="multipart/form-data">
    <input id="hid"  class="form-control" name="id" type="text" value="<?php echo $_smarty_tpl->tpl_vars['brr']->value['id'];?>
" >
    <label>选择要修改的导图</label>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['img']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <img style="width: 100px;height: 100px;display:inline-block" src="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" alt="">
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <div id="upload">
        <input type="file" multiple>
        <ul class="imgul"></ul>
    </div>

    <div class="form-group">
        <label>输入要添加的内容标题</label>
        <input  class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['brr']->value['title'];?>
" type="text">
    </div>
    <div class="form-group">
        <label>输入要添加的内容描述</label>
        <input  class="form-control" name="descrition" value="<?php echo $_smarty_tpl->tpl_vars['brr']->value['descrition'];?>
" type="text">
    </div>
    <!--<div class="form-group">-->
        <!--<label>输入要添加的上线时间</label>-->
        <!--<input  class="form-control" name="uptime" value="<?php echo $_smarty_tpl->tpl_vars['brr']->value['uptime'];?>
" type="text">-->
    <!--</div>-->
    <!--<div class="form-group">-->
        <!--<label>输入要添加的限购条件</label>-->
        <!--<input  class="form-control" name="xgtj" value="<?php echo $_smarty_tpl->tpl_vars['brr']->value['xgtj'];?>
" type="text">-->
    <!--</div>-->
    <!--<div class="form-group">-->
        <!--<label>输入要添加的评分等级</label>-->
        <!--<input  class="form-control" name="pfdj" value="<?php echo $_smarty_tpl->tpl_vars['brr']->value['pfdj'];?>
" type="text">-->
    <!--</div>-->
    <div class="form-group">
        <label>内容编辑</label>
        <textarea name="content" style="visibility:hidden;"><?php echo $_smarty_tpl->tpl_vars['brr']->value['content'];?>
</textarea>
    </div>
    <button type="submit" class="btn btn-info">保存 </button>
</form>
<a href="index.php?m=admin&f=article&a=show"><button class="btn btn-success">返回</button></a>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery-1.10.2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
bootstrap.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php echo '<script'; ?>
>
    //过程封装
    var input=document.querySelector('#upload>input[type=file]');
    let imgul=document.querySelector('#upload>.imgul');
    let size=1024*1024*2;
    let type=['image/png','image/jpeg','image/gif'];
    input.onchange=function(){
        imgul.innerHTML='';
        let arr=this.files;
        for(let i=0;i<arr.length;i++){
            if(arr[i].size>size){
                alert('大小不合适！');
                return;
            }
            if(!type.includes(arr[i].type)){
                alert('类型不正确！');
                return;
            }
        }
        for(let j=0;j<arr.length;j++){
            let fileread=new FileReader();
            fileread.readAsDataURL(arr[j]);
            fileread.onload=function(){
                let li=document.createElement('li');
                let div=document.createElement('div');
                div.style.cssText="width:0%;height:2px;position:absolute;left:0px;bottom:0px;background:red;border-radius:2px;font-size:6px;text-align:center;";
                li.style.cssText="width:100px;height:100px;border:1px solid #ccc;border-radius:2px;float:left;margin:0 5px 10px;position:relative;background-image:url("+this.result+");background-size:cover;   ";
                li.appendChild(div);
                imgul.appendChild(li);
                let formdata=new FormData();
                formdata.append("file",arr[j]);
                let ajax=new XMLHttpRequest();
                ajax.upload.onprogress=function(e){
                    let per=e.loaded/e.total*100;
                    div.style.width=per+'%';
                    div.innerHTML=Math.floor(per)+'%';
                }
                ajax.onload=function(){
//                    console.log(ajax.responseText);
                    let inp=document.createElement('input');
                    inp.type='hide';
                    inp.name='img[]';
                    inp.value=ajax.responseText;
                    input.appendChild(inp);
                };
                ajax.open('post','index.php?m=admin&f=menu&a=upload');
                ajax.send(formdata);
            }
        }
    }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    KindEditor.ready(function(K) {
        var editor1 = K.create('textarea[name="content"]', {
            cssPath : '<?php echo KIND_PATH;?>
plugins/code/prettify.css',
            uploadJson : '<?php echo KIND_PATH;?>
php/upload_json.php',
            fileManagerJson : '<?php echo KIND_PATH;?>
php/file_manager_json.php',
            allowFileManager : true,
            afterCreate : function() {
                var self = this;
                K.ctrl(document, 13, function() {
                    self.sync();
                    K('form[name=example]')[0].submit();
                });
                K.ctrl(self.edit.doc, 13, function() {
                    self.sync();
                    K('form[name=example]')[0].submit();
                });
            }
        });
        prettyPrint();
    });
<?php echo '</script'; ?>
><?php }
}
