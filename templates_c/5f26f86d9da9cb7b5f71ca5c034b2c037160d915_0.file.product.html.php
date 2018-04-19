<?php
/* Smarty version 3.1.30, created on 2018-04-19 05:32:51
  from "D:\wamp\www\meishi\templates\index\product.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad80de3e2f799_81243829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f26f86d9da9cb7b5f71ca5c034b2c037160d915' => 
    array (
      0 => 'D:\\wamp\\www\\meishi\\templates\\index\\product.html',
      1 => 1524107498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad80de3e2f799_81243829 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>艾美挚美</title>
    <link rel="stylesheet" href="<?php echo INDEX_CSS_PATH;?>
twlb.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery-3.1.1.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="product">
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
                    <li>
                        <a href="index.php?m=index&f=baker">
                            <div class="nav_line"></div>
                            <p class="nav_ename"><b>THE</b>Baker</p>
                            <p class="nav_name">面点师</p>
                        </a>
                    </li>
                    <li class="active">
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
        <!--全部产品-->
    <div class="tw_content mypro">
            <ul class="prod_list">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['proarr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <li>
                    <div class="prod_pic">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="">
                    </div>
                    <p class="prod_list_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</p>
                    <p class="hongbei"><?php echo $_smarty_tpl->tpl_vars['item']->value['descrition'];?>
</p>
                    <p class="hongbei"><?php echo $_smarty_tpl->tpl_vars['item']->value['xgtj'];?>
</p>
                    <i class="jia">&#xe651;</i>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
    </div>
        <!--分页-->
        <div class="fenye" style="text-align: center">
            <?php echo $_smarty_tpl->tpl_vars['pagestr']->value;?>

            <!--<ul class="paging">-->
                <!--<li>上一页</li>-->
                <!--<li class="act">1</li>-->
                <!--<li>2</li>-->
                <!--<li>3</li>-->
                <!--<li>4</li>-->
                <!--<li>下一页</li>-->
            <!--</ul>-->
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
</div>
</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo INDEX_JS_PATH;?>
page.js"><?php echo '</script'; ?>
><?php }
}
