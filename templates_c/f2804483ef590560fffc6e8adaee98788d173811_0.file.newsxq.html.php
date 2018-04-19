<?php
/* Smarty version 3.1.30, created on 2018-04-19 18:21:24
  from "E:\phpstudy\WWW\meishi\templates\index\newsxq.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad86da48bbe39_29390191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2804483ef590560fffc6e8adaee98788d173811' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\meishi\\templates\\index\\newsxq.html',
      1 => 1524133279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad86da48bbe39_29390191 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新闻详情</title>
    <!--<link rel="stylesheet" href="<?php echo INDEX_CSS_PATH;?>
twlb.css">-->
    <link rel="stylesheet" href="<?php echo INDEX_CSS_PATH;?>
new.css">
</head>
<body>

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
                <li>
                    <a href="index.php?m=index&f=product">
                        <div class="nav_line"></div>
                        <p class="nav_ename"><b>REC</b>OMMENDATION</p>
                        <p class="nav_name">面点推荐</p>
                    </a>
                </li>
                <li class="active">
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

<section class="main">
    <div class="label">
        <div class="label_down"></div>
        <div class="label_up">
            <ul class="label_bread">
                <li>
                    <div class="icon">
                        <i>&#xe627;</i>
                    </div>
                    <a href="">首页</a>
                </li>
                <li>
                    <i class="jiantou">&#xe642;</i>
                    <div class="icon second">
                        <i>&#xe627;</i>
                    </div>
                    <a href="" class="sec">新闻中心</a>
                </li>
                <li>
                    <i class="jiantou">&#xe642;</i>
                    <div class="icon second">
                        <i>&#xe627;</i>
                    </div>
                    <a href="" class="sec">新闻详情</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="box">
        <div class="box_top">
            <h4><?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>
</h4>
            <h5>R E C O M M E N U O N E R E C O M M E N U O N E R E C O M M E N U O N E</h5>
            <div class="label_text"><p>
                “<?php echo $_smarty_tpl->tpl_vars['arr']->value['descrition'];?>
”
            </p></div>
        </div>
        <div class="box_line">
            <div class="time">
                <span>&#xe619;</span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['arr']->value['time'];?>

                <span>&#xe60d;</span>&nbsp;&nbsp;2360
            </div>
        </div>
        <div class="box_top box_title">
            <h4>保证味蕾的超享受使我们一直追寻的宗旨</h4>
            <h5>R E C O M M E N U O N E </h5>
        </div>
        <p class="cake">蛋糕的美味就是可以让人吃了还想吃，拥有诱惑难挡的魅力。85度c蛋糕店里不仅有美味的蛋糕，还有面包、咖啡、茶饮等多种产品，让你多种口味随意选择，不管想吃哪种，这里都可以找到所需要的。</p>
        <div class="maintext"><?php echo $_smarty_tpl->tpl_vars['arr']->value['content'];?>
</div>
        <div class="box_photo">
            <img src="<?php echo INDEX_IMG_PATH;?>
new_13.png" alt="">
            <img src="<?php echo INDEX_IMG_PATH;?>
new_11.png" alt="">
        </div>
    </div>
    <section class="comment">
        <div class="box_top comment_top">
            <h4>会员评论区</h4>
            <h5>R E C O M M E N U O N E </h5>
        </div>
        <div class="comment_title">
            <h5>热门评论</h5>
            <h6>QUANBUCHANPING</h6>
        </div>
        <ul class="comment_list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mess']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <li>
                <div class="comment_photo">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="">
                </div>
                <div class="com">
                    <div class="com_top">
                        <h6><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h6>
                        <span class="com_icon">
                        <i>&#xe619;</i> <?php echo $_smarty_tpl->tpl_vars['item']->value['time'];?>

                    </span>
                        <span class="com_icon eye">
                    </span>
                    </div>
                    <div class="com_line">
                        <span></span>
                        <span></span>
                    </div>
                    <p><?php echo $_smarty_tpl->tpl_vars['item']->value['mess'];?>
</p>
                </div>
                <a href="" class="set">
                    <!--<span>回复</span>-->
                </a>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
        <!--<ul class="num">-->
            <!--<li><a href="">上一页</a></li>-->
            <!--<li class="number"><a href="">1</a></li>-->
            <!--<li class="number" id="chose"><a href="">2</a></li>-->
            <!--<li class="number"><a href="">3</a></li>-->
            <!--<li class="number"><a href="">4</a></li>-->
            <!--<li><a href="">下一页</a></li>-->
        <!--</ul>-->
    </section>
    <div class="right_side">
        <img src="<?php echo INDEX_IMG_PATH;?>
new_right_18.png" alt="">
    </div>
    <div class="left_side">
        <img src="<?php echo INDEX_IMG_PATH;?>
new_left_20.png" alt="">
    </div>
</section>
<footer>
    <div class="empty"></div>
    <div class="dimgray"></div>
    <div class="gray">
        <p>北京市公安局朝阳分局备案编号:110105000501   Copyright © 2006-2016 ZCOOL</p>
    </div>
    <img src="<?php echo INDEX_IMG_PATH;?>
new_cookie_113.png" alt="">
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
</html><?php }
}
