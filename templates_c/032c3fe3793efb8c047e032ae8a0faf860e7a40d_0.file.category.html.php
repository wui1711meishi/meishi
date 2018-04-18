<?php
/* Smarty version 3.1.30, created on 2018-04-18 07:08:47
  from "C:\wamp64\www\meishi\templates\admin\category.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6eeff570318_86966635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '032c3fe3793efb8c047e032ae8a0faf860e7a40d' => 
    array (
      0 => 'C:\\wamp64\\www\\meishi\\templates\\admin\\category.html',
      1 => 1524034326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad6eeff570318_86966635 (Smarty_Internal_Template $_smarty_tpl) {
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
        <h1 class="page-head-line">分类管理</h1>
    </div>
</div>
<a href="index.php?m=admin&f=menu&a=addcategory"><button class="btn btn-success">添加</button></a>
<div class="panel-body">
    <div class="table-responsive">
        <table class="table" align="center">
            <thead>
            <tr align="center">
                <th>ID</th>
                <th>中文名字</th>
                <th>英文名字</th>
                <th>父目录</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

            </tbody>
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
