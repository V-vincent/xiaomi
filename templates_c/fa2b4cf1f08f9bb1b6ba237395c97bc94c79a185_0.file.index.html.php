<?php
/* Smarty version 3.1.30, created on 2017-12-03 09:15:46
  from "D:\Web\wamp\wamp64\www\php\xiaomi_object\view\home\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a23c0c2400d05_66231391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa2b4cf1f08f9bb1b6ba237395c97bc94c79a185' => 
    array (
      0 => 'D:\\Web\\wamp\\wamp64\\www\\php\\xiaomi_object\\view\\home\\index.html',
      1 => 1512007520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/header.html' => 1,
    'file:home/footer.html' => 1,
  ),
),false)) {
function content_5a23c0c2400d05_66231391 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>小米</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/css/index.css?6">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/js/jquery3.2.1.js"><?php echo '</script'; ?>
>
</head>
<body>
<iframe src="../view/home/header.html" frameborder="0" width="100%" style="min-height: 140px"></iframe>-->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/css/index.css?4">

<?php $_smarty_tpl->_subTemplateRender("file:home/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="banner">
    <!--这里加上banner图-->
    <div class="banner_box">
        <div class="banner_img">
            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/banner1.jpg" alt="">
            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/banner2.jpg" alt="">
            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/banner3.jpg" alt="">
            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/banner4.jpg" alt="">
            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/banner5.jpg" alt="">
            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/banner6.jpg" alt="">
        </div>
        <a href="javascript:;" class="banner_next">></a>
        <a href="javascript:;" class="banner_up"><</a>
        <ol class="banner_btn">
            <li class="banner_btn_now"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ol>
    </div>
    <!--这里banner图结束-->
    <!--左侧动态数据-->
    <ul class="banner_left_box">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cate_list']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
        <li><a href="javascript:;" class="<?php if ($_smarty_tpl->tpl_vars['val']->value['goods_list'][0] == '') {?> no_arrow <?php }?>"><?php echo $_smarty_tpl->tpl_vars['val']->value['cate_name'];?>
</a>
            <?php if ($_smarty_tpl->tpl_vars['val']->value['goods_list'][0] != '') {?>
            <div class="list">
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['val']->value['goods_list'], 'goods');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->value) {
?>
                    <li><a href="../goods/info?id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['id'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_thumb'];?>
"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
</a>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
            <?php }?>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
    <!--左侧动态数据结束-->
</div>
<div class="home_sup">
    <ul>
        <li><a href="javascript:;" class="home_sup_li">选购手机</a></li>
        <li><a href="javascript:;" class="home_sup_li">企业团购</a></li>
        <li><a href="javascript:;" class="home_sup_li">F码通道</a></li>
        <li><a href="javascript:;">米粉卡</a></li>
        <li><a href="javascript:;">以旧换新</a></li>
        <li><a href="javascript:;">话费充值</a></li>
    </ul>
    <a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/sup1.jpg"></a>
    <a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/sup2.jpg"></a>
    <a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/sup3.jpg"></a>
</div>
<div class="plain_box plain_box1">
    <div class="box_hd">
        <h2>小米明星单品</h2>
        <div class="btn_box">
            <a href="javascript:;" class="left"><</a>
            <a href="javascript:;" class="right cur">></a>
        </div>
    </div>
    <div class="move_list">
        <ul style="left: 0;">
            <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd1.png"></a>
                <h2><a href="javascript:;">红米Note 5A 高配版</a></h2>
                <p>1600万像素柔光自拍</p>
                <span>899元</span>
            </li>
            <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd2.png"></a>
                <h2><a href="javascript:;">红米Note 4X</a></h2>
                <p>4100mAh超长续航，多彩金属</p>
                <span>999元起</span>
            </li>
            <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd3.png"></a>
                <h2><a href="javascript:;">红米4X</a></h2>
                <p>4100mAh超长续航，8 核处理器</p>
                <span>699元起</span>
            </li>
            <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd4.png"></a>
                <h2><a href="javascript:;">小米电视4A 43英寸 标准版</a></h2>
                <p>全高清HDR 四核高性能处理器</p>
                <span>1999元</span>
            </li>
            <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd5.png"></a>
                <h2><a href="javascript:;">小米笔记本</a></h2>
                <p>更轻更薄，像杂志一样随身携带</p>
                <span>3599元起</span>
            </li>
            <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd21.png"></a>
                <h2><a href="javascript:;">红米Note 5A 高配版</a></h2>
                <p>1600万像素柔光自拍</p>
                <span>899元</span>
            </li>
            <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd22.png"></a>
                <h2><a href="javascript:;">红米Note 4X</a></h2>
                <p>4100mAh超长续航，多彩金属</p>
                <span>999元起</span>
            </li>
            <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd23.png"></a>
                <h2><a href="javascript:;">红米4X</a></h2>
                <p>4100mAh超长续航，8 核处理器</p>
                <span>699元起</span>
            </li>
            <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd24.png"></a>
                <h2><a href="javascript:;">小米电视4A 43英寸 标准版</a></h2>
                <p>全高清HDR 四核高性能处理器</p>
                <span>1999元</span>
            </li>
            <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd25.png"></a>
                <h2><a href="javascript:;">小米笔记本</a></h2>
                <p>更轻更薄，像杂志一样随身携带</p>
                <span>3599元起</span>
            </li>
            <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd4.png"></a>
                <h2><a href="javascript:;">小米电视4A 43英寸 标准版</a></h2>
                <p>全高清HDR 四核高性能处理器</p>
                <span>1999元</span>
            </li>
            <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd2.png"></a>
                <h2><a href="javascript:;">红米Note 4X</a></h2>
                <p>4100mAh超长续航，多彩金属</p>
                <span>999元起</span>
            </li>
            <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd5.png"></a>
                <h2><a href="javascript:;">小米笔记本</a></h2>
                <p>更轻更薄，像杂志一样随身携带</p>
                <span>3599元起</span>
            </li>
            <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd1.png"></a>
                <h2><a href="javascript:;">红米Note 5A 高配版</a></h2>
                <p>1600万像素柔光自拍</p>
                <span>899元</span>
            </li>
            <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd3.png"></a>
                <h2><a href="javascript:;">红米4X</a></h2>
                <p>4100mAh超长续航，8 核处理器</p>
                <span>699元起</span>
            </li>
        </ul>
    </div>
</div>
<div class="page_main">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cate_tree']->value, 'cate');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->value) {
?>
    <div class="screen1">
        <div class="box-hd">
            <h2 class="title"><?php echo $_smarty_tpl->tpl_vars['cate']->value['cate_name'];?>
</h2>
            <div class="more J_brickNav">
                <ul class="tab-list J_brickTabSwitch" data-tab-target="homeelec-content">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cate']->value['second_cate'], 'second_cate');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['second_cate']->value) {
?>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['second_cate']->value['cate_name'] == '热门') {?> tab-active<?php }?>"data-index="<?php echo $_smarty_tpl->tpl_vars['second_cate']->value['parent_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['second_cate']->value['cate_name'];?>
</li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
        </div>
        <div class="box-bd">
            <ul class="bd_left bd_left1">
                <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/bd_left1.jpg"></a></li>
            </ul>
            <div class="bd_right_all">
                <div class="bd_right_box">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cate']->value['second_cate'], 'second_cate', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['second_cate']->value) {
?>
                    <ul class="bd_right">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['second_cate']->value['goods_list'], 'second_cate_goods');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['second_cate_goods']->value) {
?>
                        <li>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['second_cate_goods']->value['goods_thumb'];?>
">
                            <a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['second_cate_goods']->value['goods_name'];?>
</a>
                            <p class="desc"><?php echo $_smarty_tpl->tpl_vars['second_cate_goods']->value['goods_desc'];?>
</p>
                            <p class="price"><?php echo $_smarty_tpl->tpl_vars['second_cate_goods']->value['price_now'];?>
 <span><?php echo $_smarty_tpl->tpl_vars['second_cate_goods']->value['price_before'];?>
</span></p>
                            <p class="desc"><?php echo $_smarty_tpl->tpl_vars['second_cate_goods']->value['comment_num'];?>
</p>
                            <div class="comment"><p>这里是评论，来这里买东西的个个都是人才啊！</p></div>
                        </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <li class="bd_right_s">
                            <h3>小白摄像机</h3>
                            <p class="price">399元</p>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/icon1.jpg">
                        </li>
                        <li class="bd_right_s">
                            <a href="javascript:;">浏览更多<span>热门</span></a>
                        </li>
                    </ul>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>
        </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <div class="plain_box plain_box2">
        <div class="box_hd ">
            <h2>为您推荐</h2>
            <div class="btn_box">
                <a href="javascript:;" class="left"><</a>
                <a href="javascript:;" class="right cur">></a>
            </div>
        </div>
        <div class="move_list">
            <ul  style="left: 0;">
                <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd21.png"></a>
                    <h2><a href="javascript:;">红米Note 5A 高配版</a></h2>
                    <p>1600万像素柔光自拍</p>
                    <span>899元</span>
                </li>
                <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd22.png"></a>
                    <h2><a href="javascript:;">红米Note 4X</a></h2>
                    <p>4100mAh超长续航，多彩金属</p>
                    <span>999元起</span>
                </li>
                <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd23.png"></a>
                    <h2><a href="javascript:;">红米4X</a></h2>
                    <p>4100mAh超长续航，8 核处理器</p>
                    <span>699元起</span>
                </li>
                <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd24.png"></a>
                    <h2><a href="javascript:;">小米电视4A 43英寸 标准版</a></h2>
                    <p>全高清HDR 四核高性能处理器</p>
                    <span>1999元</span>
                </li>
                <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd25.png"></a>
                    <h2><a href="javascript:;">小米笔记本</a></h2>
                    <p>更轻更薄，像杂志一样随身携带</p>
                    <span>3599元起</span>
                </li>
                <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd1.png"></a>
                    <h2><a href="javascript:;">红米Note 5A 高配版</a></h2>
                    <p>1600万像素柔光自拍</p>
                    <span>899元</span>
                </li>
                <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd2.png"></a>
                    <h2><a href="javascript:;">红米Note 4X</a></h2>
                    <p>4100mAh超长续航，多彩金属</p>
                    <span>999元起</span>
                </li>
                <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd3.png"></a>
                    <h2><a href="javascript:;">红米4X</a></h2>
                    <p>4100mAh超长续航，8 核处理器</p>
                    <span>699元起</span>
                </li>
                <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd4.png"></a>
                    <h2><a href="javascript:;">小米电视4A 43英寸 标准版</a></h2>
                    <p>全高清HDR 四核高性能处理器</p>
                    <span>1999元</span>
                </li>
                <li><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/hd5.png"></a>
                    <h2><a href="javascript:;">小米笔记本</a></h2>
                    <p>更轻更薄，像杂志一样随身携带</p>
                    <span>3599元起</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="content_box">
        <h2>内容</h2>
        <ul class="content">
            <li data-index="0">
                <h2 class="title">图书</h2>
                <div class="wrapper">
                    <ul class="li_box">
                        <li>
                            <a href="javascript:;">哈利·波特与被诅咒的孩子</a>
                            <p>“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</p>
                            <span class="price">29.37元</span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/content11.png">
                        </li>
                        <li>
                            <a href="javascript:;">好吗好的</a>
                            <p>畅销作家大冰2016年新书！讲给你听，好吗好的！</p>
                            <span class="price">17.99元</span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/content12.png">
                        </li>
                        <li>
                            <a href="javascript:;">醒来的森林</a>
                            <p>这不仅是一本关于鸟的书</p>
                            <span class="price">8.99元</span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/content13.png">
                        </li>
                    </ul>
                    <div class="bar_box">
                        <ul class="bar">
                            <li class="cur" data-index="1"><span></span></li>
                            <li data-index="2"><span></span></li>
                            <li data-index="3"><span></span></li>
                        </ul>
                    </div>
                    <a href="javascript:;" class="btn_left"><</a>
                    <a href="javascript:;" class="btn_right">></a>
                </div>
            </li>
            <li data-index="0">
                <h2 class="title">图书</h2>
                <div class="wrapper">
                    <ul class="li_box">
                        <li>
                            <a href="javascript:;">哈利·波特与被诅咒的孩子</a>
                            <p>“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</p>
                            <span class="price">29.37元</span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/content21.png">
                        </li>
                        <li>
                            <a href="javascript:;">好吗好的</a>
                            <p>畅销作家大冰2016年新书！讲给你听，好吗好的！</p>
                            <span class="price">17.99元</span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/content22.png">
                        </li>
                        <li>
                            <a href="javascript:;">醒来的森林</a>
                            <p>这不仅是一本关于鸟的书</p>
                            <span class="price">8.99元</span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/content23.png">
                        </li>
                    </ul>
                    <div class="bar_box">
                        <ul class="bar">
                            <li class="cur" data-index="1"><span></span></li>
                            <li data-index="2"><span></span></li>
                            <li data-index="3"><span></span></li>
                        </ul>
                    </div>
                    <a href="javascript:;" class="btn_left"><</a>
                    <a href="javascript:;" class="btn_right">></a>
                </div>
            </li>
            <li data-index="0">
                <h2 class="title">图书</h2>
                <div class="wrapper">
                    <ul class="li_box">
                        <li>
                            <a href="javascript:;">哈利·波特与被诅咒的孩子</a>
                            <p>“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</p>
                            <span class="price">29.37元</span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/content31.png">
                        </li>
                        <li>
                            <a href="javascript:;">好吗好的</a>
                            <p>畅销作家大冰2016年新书！讲给你听，好吗好的！</p>
                            <span class="price">17.99元</span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/content32.png">
                        </li>
                        <li>
                            <a href="javascript:;">醒来的森林</a>
                            <p>这不仅是一本关于鸟的书</p>
                            <span class="price">8.99元</span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/content33.png">
                        </li>
                    </ul>
                    <div class="bar_box">
                        <ul class="bar">
                            <li class="cur" data-index="1"><span></span></li>
                            <li data-index="2"><span></span></li>
                            <li data-index="3"><span></span></li>
                        </ul>
                    </div>
                    <a href="javascript:;" class="btn_left"><</a>
                    <a href="javascript:;" class="btn_right">></a>
                </div>
            </li>
            <li data-index="0">
                <h2 class="title">图书</h2>
                <div class="wrapper">
                    <ul class="li_box">
                        <li>
                            <a href="javascript:;">哈利·波特与被诅咒的孩子</a>
                            <p>“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</p>
                            <span class="price">29.37元</span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/content41.png">
                        </li>
                        <li>
                            <a href="javascript:;">好吗好的</a>
                            <p>畅销作家大冰2016年新书！讲给你听，好吗好的！</p>
                            <span class="price">17.99元</span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/content42.png">
                        </li>
                        <li>
                            <a href="javascript:;">醒来的森林</a>
                            <p>这不仅是一本关于鸟的书</p>
                            <span class="price">8.99元</span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/content43.png">
                        </li>
                    </ul>
                    <div class="bar_box">
                        <ul class="bar">
                            <li class="cur" data-index="1"><span></span></li>
                            <li data-index="2"><span></span></li>
                            <li data-index="3"><span></span></li>
                        </ul>
                    </div>
                    <a href="javascript:;" class="btn_left"><</a>
                    <a href="javascript:;" class="btn_right">></a>
                </div>
            </li>
        </ul>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:home/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/js/index.js?4"><?php echo '</script'; ?>
>
<!--
 <iframe src="../view/home/footer.html" frameborder="0" width="100%" style="min-height: 470px"></iframe>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/js/index.js?3"><?php echo '</script'; ?>
>
</body>
</html>-->
<?php }
}
