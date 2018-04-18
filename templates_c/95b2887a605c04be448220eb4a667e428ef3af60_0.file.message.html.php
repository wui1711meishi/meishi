<?php
/* Smarty version 3.1.30, created on 2018-04-18 12:56:51
  from "E:\phpstudy\WWW\meishi\templates\admin\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6d0135a5a42_52953767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95b2887a605c04be448220eb4a667e428ef3af60' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\meishi\\templates\\admin\\message.html',
      1 => 1524019217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad6d0135a5a42_52953767 (Smarty_Internal_Template $_smarty_tpl) {
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
        <h1 class="page-head-line">留言管理</h1>
    </div>
</div>
<!--<a href="index.php?m=admin&f=content&a=addcontent"><button class="btn btn-success">添加</button></a>-->
<div class="panel-body">
    <div class="table-responsive">
        <table class="table" align="center">
            <thead>
            <tr align="center">
                <th>ID</th>
                <th>名字</th>
                <th>头像</th>
                <th>留言内容</th>
                <th>时间</th>
                <th>对应aid</th>
                <th>对应nid</th>
                <th>对应cid</th>
                <td>操作</td>
            </tr>
            </thead>
            <tbody>
            <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

            </tbody>
            <tr>
                <td align="center" colspan="7"><?php echo $_smarty_tpl->tpl_vars['pagestr']->value;?>
</td>
            </tr>
        </table>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery-3.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.metisMenu.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
