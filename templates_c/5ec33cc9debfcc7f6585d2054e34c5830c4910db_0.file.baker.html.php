<?php
/* Smarty version 3.1.30, created on 2018-04-19 10:55:11
  from "E:\phpstudy\WWW\meishi\templates\index\baker.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad8050ff277e3_44843551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ec33cc9debfcc7f6585d2054e34c5830c4910db' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\meishi\\templates\\index\\baker.html',
      1 => 1524106437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad8050ff277e3_44843551 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo INDEX_CSS_PATH;?>
index.css">
    <link rel="stylesheet" href="<?php echo INDEX_CSS_PATH;?>
twlb.css">
    <?php echo '<script'; ?>
 src="<?php echo INDEX_JS_PATH;?>
index.js"><?php echo '</script'; ?>
>
    <!--<link rel="stylesheet" href="<?php echo INDEX_CSS_PATH;?>
article.css">-->
    <?php echo '<script'; ?>
 src="<?php echo INDEX_JS_PATH;?>
jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<!--头部-->
<!--导航-->
<div class="tw_header">
    <div class="tw_nav">
        <a href="" class="logo_k">
            <img src="<?php echo INDEX_IMG_PATH;?>
logo.png" alt="">
        </a>
        <ul class="nav_list">
            <li>
                <a href="index.php?m=index&a=main">
                    <div class="nav_line"></div>
                    <p class="nav_ename"><b>THE</b>PORJECT</p>
                    <p class="nav_name">首页</p>
                </a>
            </li>
            <li>
                <a href="index.php?m=index&a=aimei">
                    <div class="nav_line"></div>
                    <p class="nav_ename"><b>Amy</b>BEAUTY</p>
                    <p class="nav_name">艾美挚美</p>
                </a>
            </li>
            <li class="active">
                <a href="index.php?m=index&f=baker">
                    <div class="nav_line"></div>
                    <p class="nav_ename"><b>THE</b>Baker</p>
                    <p class="nav_name">面点师</p>
                </a>
            </li>
            <li>
                <a href="index.php?m=index&f=product">
                    <div class="nav_line"></div>
                    <p class="nav_ename"><b>REC</b>OMMENDATION</p>
                    <p class="nav_name">面点推荐</p>
                </a>
            </li>
            <li>
                <a href="index.php?m=index&a=news&f=news">
                    <div class="nav_line"></div>
                    <p class="nav_ename"><b>REC</b>OMMENDATION</p>
                    <p class="nav_name">新闻中心</p>
                </a>
            </li>
            <li>
                <a href="index.php?m=index&a=about">
                    <div class="nav_line"></div>
                    <p class="nav_ename"><b>ABO</b>UT US</p>
                    <p class="nav_name">关于我们</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<!--头部-->
<!--面点师-->
<div class="baker mybaker">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bakerarr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <div class="baker_b_every">
        <a href="">
            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="">
            <div class="baker_every_introduceN">
                <span><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
                <span>著名烘焙大师 西点师</span>
            </div>
            <div class="baker_every_introduceC">
                最好的朋友就是那批新鲜出炉的面包，烘焙刚好的面包伙伴，暖胃又暖心，天天都能让人思念
            </div>
            <section></section>
            <section></section>
        </a>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<!--分页-->
<div class="fenye" style="text-align: center">
    <?php echo $_smarty_tpl->tpl_vars['pagestr']->value;?>

</div>
<footer>
    <div class="empty"></div>
    <div class="dimgray"></div>
    <div class="gray">
        <p>北京市公安局朝阳分局备案编号:110105000501   Copyright © 2006-2016 ZCOOL</p>
    </div>
    <div class="join">
        <span></span>
        <div class="join_bottom">
            <div class="join_left">
                <img src="<?php echo INDEX_IMG_PATH;?>
joinus_16.png" alt="">
                <p>请留下您的联系方式</p>
            </div>
            <form action="">
                <textarea name="" id="" cols="30" rows="10" resize="none"></textarea>
                <botton>发 送</botton>
            </form>
        </div>
    </div>
</footer>
</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo INDEX_JS_PATH;?>
page.js"><?php echo '</script'; ?>
><?php }
}
