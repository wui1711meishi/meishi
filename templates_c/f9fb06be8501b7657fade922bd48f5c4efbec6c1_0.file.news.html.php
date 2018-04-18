<?php
/* Smarty version 3.1.30, created on 2018-04-18 16:04:05
  from "E:\phpstudy\WWW\meishi\templates\admin\news.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6fbf59c31f6_62929180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9fb06be8501b7657fade922bd48f5c4efbec6c1' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\meishi\\templates\\admin\\news.html',
      1 => 1524019217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad6fbf59c31f6_62929180 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" news="width=device-width, initial-scale=1.0" />
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
</head>
<body>
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line">新闻管理</h1>
    </div>
</div>
<a href="index.php?m=admin&f=news&a=addnews"><button class="btn btn-success">添加</button></a>
<div class="panel-body">
    <div class="table-responsive">
        <table class="table" align="center">
            <thead>
            <tr align="center">
                <th>ID</th>
                <th>导图</th>
                <th>标题</th>
                <th>时间</th>
                <th>查看量</th>
                <th>推荐量</th>
                <th>喜欢量</th>
                <th>操作</th>
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
