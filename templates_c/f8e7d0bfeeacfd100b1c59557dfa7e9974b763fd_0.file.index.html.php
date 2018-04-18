<?php
/* Smarty version 3.1.30, created on 2018-04-18 10:57:12
  from "E:\phpstudy\WWW\meishi\templates\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6b40880f6e4_36076227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8e7d0bfeeacfd100b1c59557dfa7e9974b763fd' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\meishi\\templates\\admin\\index.html',
      1 => 1524019217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad6b40880f6e4_36076227 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>后台管理</title>
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
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php?m=admin&f=index&a=main">优管</a>
        </div>
        <div class="header-right">
            <a class="btn btn-warning" href="index.php?m=index&f=index">返回前台主页</a>
            <a href="index.php?m=admin&f=index&a=out" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>
        </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <div class="user-img-div">
                        <img src='<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
' class="img-thumbnail" />

                        <div class="inner-text">
                            <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

                            <br />
                            登录时间： <small><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</small>
                        </div>
                    </div>

                </li>
                <li>
                    <a target="person" href="index.php?m=admin&f=webinfo&a=show"><i class="fa fa-desktop "></i>信息管理 </a>
                </li>
                <li>
                    <a target="person" href="index.php?m=admin&f=menu&a=newpass"><i class="fa fa-desktop "></i>修改密码 </a>
                </li>
                <li>
                    <a target="person" href="index.php?m=admin&f=menu&a=show"><i class="fa fa-desktop "></i>分类管理 </a>
                </li>
                <li>
                    <a target="person" href="index.php?m=admin&f=news&a=show"><i class="fa fa-desktop "></i>新闻管理 </a>
                </li>
                <li>
                    <a target="person" href="index.php?m=admin&f=article&a=show"><i class="fa fa-desktop "></i>文章管理 </a>
                </li>
                <li>
                    <a target="person" href="index.php?m=admin&f=product&a=show"><i class="fa fa-desktop "></i>产品管理 </a>
                </li>
                <li>
                    <a target="person" href="index.php?m=admin&f=baker&a=show"><i class="fa fa-desktop "></i>面点师管理 </a>
                </li>
                <li>
                    <a target="person" href="index.php?m=admin&f=message&a=show"><i class="fa fa-desktop "></i>留言管理 </a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="page-wrapper">
        <div id="page-inner">
            <iframe  class="person" src="index.php?m=admin&f=menu&a=newpass" name="person"   frameborder="0"></iframe>
        </div>
    </div>
    <div id="footer-sec">
        Copyright &copy; 2016.Company name All rights reserved.
    </div>

    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery-1.10.2.js"><?php echo '</script'; ?>
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
</html>
<?php }
}
