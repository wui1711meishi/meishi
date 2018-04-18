<?php
/* Smarty version 3.1.30, created on 2018-04-18 02:30:03
  from "C:\wamp64\www\meishi\templates\admin\newpass.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6adab069df6_38163289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b90d9cefe9237314a2b8e64dd62a5d8a3148441' => 
    array (
      0 => 'C:\\wamp64\\www\\meishi\\templates\\admin\\newpass.html',
      1 => 1524018103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad6adab069df6_38163289 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line">修改密码</h1>
    </div>
    <div class="col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <!--BASIC FORM-->
            </div>
            <div class="panel-body">
                <form role="form" action="index.php?m=admin&f=menu&a=checkpass" method="post">
                    <input value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" style="display: none"  class="form-control" name="user" type="text">
                    <div class="form-group">
                        <label>Your user</label>
                        <input value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" disabled  class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Enter old passworld</label>
                        <input class="form-control" name="oldpass" type="text">
                    </div>
                    <div class="form-group">
                        <label>Enter new passworld</label>
                        <input class="form-control" name="newpass" type="text">
                    </div>

                    <button type="submit" class="btn btn-info">确定</button>

                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html><?php }
}
