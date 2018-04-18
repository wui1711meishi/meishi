<?php
/* Smarty version 3.1.30, created on 2018-04-18 02:30:13
  from "C:\wamp64\www\meishi\templates\admin\addbaker.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6adb5d7b6c9_73394118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '190bbfbe1a0c16aa82265f60388b8a64931fbfe1' => 
    array (
      0 => 'C:\\wamp64\\www\\meishi\\templates\\admin\\addbaker.html',
      1 => 1524018103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad6adb5d7b6c9_73394118 (Smarty_Internal_Template $_smarty_tpl) {
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
<form action="index.php?m=admin&f=baker&a=checkaddbaker" method="post">
    <div class="form-group">
        <label>输入要添加的面点师名字</label>
        <input  class="form-control" name="name" type="text">
    </div>
    <div class="form-group">
        <label>输入要添加的面点师简述</label>
        <input  class="form-control" name="descrition" type="text">
    </div>
    <div class="form-group">
        <label>选择要添加的面点师照片</label>
        <div id="upload">
            <input type="file" multiple>
            <ul class="imgul"></ul>
        </div>
    </div>
    <button type="submit" class="btn btn-info">保存 </button>
</form>
<a href="index.php?m=admin&f=baker&a=show"><button class="btn btn-success">返回 </button></a>
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
>
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
                    console.log(ajax.responseText);
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
><?php }
}
