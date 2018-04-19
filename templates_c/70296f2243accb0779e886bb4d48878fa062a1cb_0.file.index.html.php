<?php
/* Smarty version 3.1.30, created on 2018-04-19 05:12:18
  from "D:\wamp\www\meishi\templates\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad809126ed100_59048547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70296f2243accb0779e886bb4d48878fa062a1cb' => 
    array (
      0 => 'D:\\wamp\\www\\meishi\\templates\\index\\index.html',
      1 => 1524107498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad809126ed100_59048547 (Smarty_Internal_Template $_smarty_tpl) {
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
	<!--<link rel="stylesheet" href="<?php echo INDEX_CSS_PATH;?>
xwlb.css">-->
	<?php echo '<script'; ?>
 src="<?php echo INDEX_JS_PATH;?>
index.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo INDEX_JS_PATH;?>
jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<!--头部搜索-->
<div class="search">
	<form action="" class="search_f">
		<input type="text" placeholder="快来搜搜~">
		<div class="search_right">
			<a href="">
				<i class="iconfont">&#xe612;</i>
			</a>
		</div>
		<div class="search_h1"></div>
		<div class="search_h2"></div>
		<div class="search_s"></div>
	</form>
</div>
<!--头部-->
<div class="tw_header" style="padding-top: 0">
	<div class="tw_nav">
		<a href="" class="logo_k">
			<img src="<?php echo INDEX_IMG_PATH;?>
logo.png" alt="">
		</a>
		<ul class="nav_list">
			<li class="active">
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


<!--西点烘焙-->
	<section class="westbake">
		<div class="westbake_left">
			<div class="westbake_l_txt1">
				<p>W e s t P o i n t B a k i n g</p>
				<h2>西点烘焙</h2>
				<p>WestPointBaking</p>
				<div></div>
			</div>
			<p class="westbake_l_txt2">
				西点，从中文来说有两种意思，一为西方的点心，二为西点军校（世界上最好的
				军校）的那个西点；而英文WestPoint则代表西点军校；中西结合，则表达了这
				家烘焙店就是要成为面包界的西点军校。
				</br></br>
				西点，从中文来说有两种意思，一为西方的点心，二为西点军校（世界上最好的
				军校）的那个西点；而英文WestPoint则代表西点军校；
			</p>
			<div class="westbake_l_txt3">
				The meaning of life is fashionable and sunny
			</div>
			<div class="westbake_l_txt4"><a href="">MORE</a></div>
		</div>
		<div class="westbake_right">
			<img src="<?php echo INDEX_IMG_PATH;?>
wq1.jpg" alt="">
		</div>
	</section>
<!--产品展示-->
	<div class="show">
		<div class="show_title">
			<h1>PRODUCT</h1>
			<p>产品展示</p>
			<div></div>
			<div></div>
		</div>
		<div class="show_swiper">
			<div class="show_s_bannerbox">
				<ul class="show_s_banner">
					<!--每一层banner图-->
					<li class="show_s_banner_li1">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['proarr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
						<div class="show_banner_pic1">
							<a href="">
								<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="">
							</a>
						</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</li>
					<li class="show_s_banner_li1">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['proarr2']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
						<div class="show_banner_pic1">
							<a href="">
								<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="">
							</a>
						</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</li>
					<li class="show_s_banner_li1">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['proarr3']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
						<div class="show_banner_pic1">
							<a href="">
								<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="">
							</a>
						</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</li>
				</ul>
			</div>
			<ul class="show_s_bannerlbd">
				<li></li>
				<li></li>
				<li class="show_lbdactive"></li>
			</ul>
		</div>
		<div class="show_bottom">
			<div class="show_b_txt">
				<div class="show_txt_grid">
					<p>GRANT </br>VISION</p>
					<p>阳光的味道，自然的美味，新鲜到最后一篇，美国里根牌面包 爱上精致生活 爱上斯威特</p>
				</div>
				<div class="show_txt_grid">
					<p>GRANT </br>VISION</p>
					<p>阳光的味道，自然的美味，新鲜到最后一篇，美国里根牌面包 爱上精致生活 爱上斯威特</p>
				</div>
				<div class="show_txt_grid">
					<p>GRANT </br>VISION</p>
					<p>阳光的味道，自然的美味，新鲜到最后一篇，美国里根牌面包 爱上精致生活 爱上斯威特</p>
				</div>
			</div>
			<img src="<?php echo INDEX_IMG_PATH;?>
wqmbv.jpg" alt="">
		</div>
	</div>
<!--面点师-->
	<div class="baker">
		<div class="show_title baker_title">
			<h1>PRODUCT</h1>
			<p>面点师</p>
			<div></div>
			<div></div>
		</div>
		<div class="baker_content">
			<div class="baker_horn1"></div>
			<div class="baker_horn2"></div>
			<div class="baker_horn3"></div>
			<div class="baker_horn4"></div>
			<div class="baker_bannerbox">
				<div class="baker_banner_tiao">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bakerarr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
					<div class="baker_b_every">
						<a href="">
							<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['id'] == 3) {?> class="imgactive" <?php }?> alt="">
							<div class="baker_every_introduceN">
								<span><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
								<span>著名烘焙大师 西点师</span>
							</div>
							<div class="baker_every_introduceC <?php if ($_smarty_tpl->tpl_vars['item']->value['id'] == 3) {?> introduceCactive <?php }?> ">
								<p><?php echo $_smarty_tpl->tpl_vars['item']->value['descrition'];?>
</p>

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
			</div>
			<ul class="leftkey"></ul>
			<ul class="rightkey"></ul>
		</div>
	</div>
<!--新闻中心-->
	<div class="news">
		<div class="show_title">
			<h1>PRODUCT</h1>
			<p>新闻中心</p>
			<div></div>
			<div></div>
		</div>
		<div class="news_content">
			<!--每一个-->
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newsarr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
			<div class="news_con_every">
				<div class="new_every_top">
					<a href="">
						<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="">
					</a>
				</div>
				<div class="new_every_bottom">
					<div class="new_e_b_left">
						<p><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</p>
						<div class="news_ll">
							<i class="iconfont">&#xe61a;</i>
							<span><?php echo $_smarty_tpl->tpl_vars['item']->value['look'];?>
</span>
						</div>
						<div class="news_ll news_xh">
							<i class="iconfont">&#xe603;</i>
							<span><?php echo $_smarty_tpl->tpl_vars['item']->value['like'];?>
</span>
						</div>
					</div>
					<div class="new_e_b_right">
						<h3><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h3>
						<div class="new_right_one">
							<ul></ul>
							<p>创业=生命的孕育</p>
						</div>
						<p><?php echo $_smarty_tpl->tpl_vars['item']->value['descrition'];?>
</p>
						<p>It is more than centain that the world is going straight
						to hell.Climate chang comes an unprecedented rate.We can see all the polar.</p>
						<div class="new_right_two">
							<i class="iconfont">&#xe61a;</i>
							<span>Sweebread</span>
						</div>
					</div>
				</div>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>
		<div class="news_more"><a href="">MORE</a></div>
	</div>
<div class="footer">
	<div class="foot_pic">
		<img src="<?php echo INDEX_IMG_PATH;?>
gwgw_02.png">
	</div>
	<div class="contact">
		<div class="us">
			<p class="conus">Contact us</p>
			<p class="tel">0351-5050661</p>
			<p class="address">山西省太原市迎泽区</p>
		</div>
		<div class="search1">
			<input type="text">
			<i class="sea">&#xe622;</i>
		</div>
	</div>
	<div class="way">
		<div class="contact_way">
			<div class="four">
				<p class="Four">45°</p>
				<p class="way_lianxi">联系方式</p>
				<p class="way_ename">Contact information</p>
			</div>
			<ul class="wxwbem">
				<li>
					<i>&#xe63e;</i>
				</li>
				<li>
					<i>&#xe641;</i>
				</li>
				<li>
					<i>&#xe729;</i>
				</li>
			</ul>
		</div>
		<ul class="public">
			<li class="five">
				<p class="Four">01</p>
				<p class="way_lianxi">公众号&nbsp;&nbsp;<em>AIMEIMIANBAOFANG</em></p>
				<p class="way_ename">Public number</p>
			</li>
			<li class="five">
				<p class="Four">02</p>
				<p class="way_lianxi">邮箱&nbsp;&nbsp;<em>AIMEI@163.com</em></p>
				<p class="way_ename">Mailbox number</p>
			</li>
			<li class="five">
				<p class="Four">03</p>
				<p class="way_lianxi">电话&nbsp;&nbsp;<em>0350-5050662</em></p>
				<p class="way_ename">Telephone</p>
			</li>
		</ul>
	</div>
	<div class="bottom">
		北京市公安局朝阳分局备案编号:110105000501&nbsp;&nbsp;&nbsp;&nbsp;Copyright&nbsp;©&nbsp;2006-2016&nbsp;ZCOOL
	</div>
</div>
</body>
</html><?php }
}
