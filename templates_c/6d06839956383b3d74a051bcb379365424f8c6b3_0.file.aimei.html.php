<?php
/* Smarty version 3.1.30, created on 2018-04-19 10:55:06
  from "E:\phpstudy\WWW\meishi\templates\index\aimei.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad8050a8e28c4_36472094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d06839956383b3d74a051bcb379365424f8c6b3' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\meishi\\templates\\index\\aimei.html',
      1 => 1524106475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad8050a8e28c4_36472094 (Smarty_Internal_Template $_smarty_tpl) {
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
                <li class="active">
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
    <div class="tw_content">
        <!--顶级产品-->
        <div class="tw_djcp">
            <p class="cen djname">顶级产品</p>
            <p class="cen djename">QUANBUCHANPING</p>
        </div>
        <!--面包屑-->
        <div class="Crumbs">
            <div class="Crumbs_2">
                <ul class="bared">
                    <li>
                        <a href="">
                            <i class="yuan">&#xe627;</i> 首页&nbsp;&nbsp;<i>&#xe642;</i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="yuan2">&#xe627;</i> 艾美挚美
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--甜甜圈-->
        <div class="tw_djcp_list">
            <div class="dunets_k">
                <div class="dunets">
                    <div class="dunets2">
                        <div class="dunets_pic">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['proarr']->value[0]['thumb'];?>
" alt="">
                        </div>
                        <p class="ttq">DUNETS</p>
                        <p class="minttq"><?php echo $_smarty_tpl->tpl_vars['proarr']->value[0]['name'];?>
</p>
                        <a href="index.php?a=index&f=index&a=article" class="tmore">MORE</a>
                    </div>
                </div>
                <div class="dunets_right">
                    <div class="hybared">
                        <h3><?php echo $_smarty_tpl->tpl_vars['proarr']->value[1]['name'];?>
</h3>
                        <p>新鲜出炉的那批面包，烘焙刚好的</p>
                        <p>Chocolate mousse cake</p>
                    </div>
                    <div class="hybared_pic">
                        <a href="" class="srbared">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['proarr']->value[1]['thumb'];?>
" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="djcp_btn">
                <ul class="djcp_show">
                    <li>
                        <div class="Chocolates">
                            <h3 class="cake"><?php echo $_smarty_tpl->tpl_vars['proarr']->value[2]['name'];?>
</h3>
                            <p class="introduce">The best of friends bread is fresh </p>
                            <p class="cakemore">MORE</p>
                        </div>
                        <div class="Chocolates_pic">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['proarr']->value[2]['thumb'];?>
" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="choco">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['proarr']->value[3]['thumb'];?>
" alt="">
                            <h2 class="choco_name">CHOCOLATES</h2>
                            <p class="choco_int">BLACK SPECIAL CAKE</p>
                            <a href="" class="choco_more">MORE</a>
                            <p class="qname"><?php echo $_smarty_tpl->tpl_vars['proarr']->value[3]['name'];?>
</p>
                        </div>
                        <div class="hot">
                            <p class="hot_zi">热度&nbsp;</p><h2>120</h2><p class="hot_zi">&nbsp;&nbsp;Bread consciousness</p>
                            <a href="" class="hot_more">MORE</a>
                        </div>
                    </li>
                    <li>
                        <div class="Chocolates">
                            <h3 class="cake"><?php echo $_smarty_tpl->tpl_vars['proarr']->value[4]['name'];?>
</h3>
                            <p class="introduce">balabala</p>
                            <p class="cakemore">MORE</p>
                        </div>
                        <div class="Chocolates_pic">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['proarr']->value[4]['thumb'];?>
" alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--彩虹甜甜圈-->
        <div class="rainbow">
            <img src="<?php echo INDEX_IMG_PATH;?>
gw_22.png" alt="" class="rain_pic">
            <div class="rainttq">
                <p>Star product</p>
                <p>超值彩虹松软甜甜圈</p>
                <p class="rain">新鲜出炉的那批面包烘焙刚好的面包伙伴</p>
                <p class="rain">新鲜出炉的那批面包烘焙刚好的</p>
            </div>
            <img src="<?php echo INDEX_IMG_PATH;?>
gw_09.png" alt="" class="rain_leaf">
        </div>
        <!--全部产品-->
        <div class="product">
            <div class="prod_name">
                <div class="allpro">
                    <p class="tit">全部产品</p>
                    <p class="etit">QUANBUCHANPING</p>
                </div>
            </div>
            <ul class="prod_list">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['proarr2']->value, 'item');
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
        <div style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['pagestr']->value;?>
</div>
        <!--<div class="fenye">-->
            <!--<ul class="paging">-->
                <!--<li>上一页</li>-->
                <!--<li class="act">1</li>-->
                <!--<li>2</li>-->
                <!--<li>3</li>-->
                <!--<li>4</li>-->
                <!--<li>下一页</li>-->
            <!--</ul>-->
        <!--</div>-->
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
