<?php
/* Smarty version 3.1.30, created on 2017-12-03 09:15:46
  from "D:\Web\wamp\wamp64\www\php\xiaomi_object\view\home\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a23c0c25ba3f9_08577792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0ea7b79df5b523ee443289290ebc36205dfc4e9' => 
    array (
      0 => 'D:\\Web\\wamp\\wamp64\\www\\php\\xiaomi_object\\view\\home\\header.html',
      1 => 1512117086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a23c0c25ba3f9_08577792 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['config']->value['site_name'];?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/css/header.css?7">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/js/jquery3.2.1.js"><?php echo '</script'; ?>
>
</head>
<body> 
<!--导航  -->
<div class="nav_box">
    <div class="container">
        <div class="nav_list">
            <ul class="nav_left">
                <li><a href="../home/index">小米商城</a><span>|</span></li>
                <li><a >MIUI</a><span>|</span></li>
                <li><a >米聊</a><span>|</span></li> 
                <li><a >游戏</a><span>|</span></li>
                <li><a >多看阅读</a><span>|</span></li>
                <li><a >云服务</a><span>|</span></li>
                <li><a >金融</a><span>|</span></li>
                <li><a >米币</a><span>|</span></li>
                <li><a >小米商城手机版</a><span>|</span></li>
                <li><a >问题反馈</a><span>|</span></li>
                <li><a >Select Region</a></li>
            </ul>        
            <ul class="nav_right">
                <?php if ($_SESSION['user_info']['user_name'] == '') {?>
                <li ><a  href="../user/login">登录</a><span>|</span></li>
                <li ><a href="../user/reg">注册</a><span>|</span></li>
                <?php }?>
                <?php if ($_SESSION['user_info']['user_name'] != '') {?>
                <li class="nav_user_name">
                    <a><?php echo $_SESSION['user_info']['user_name'];?>
&nbsp;&nbsp;<i>></i></a>
                    <ul class="user_name_list">
                        <li><a  href="../user/user_home">个人中心</a></li>
                        <li><a>评价晒单</a></li>
                        <li><a>我的喜欢</a></li>
                        <li><a>小米账户</a></li>
                        <li><a  href="../user/logout">退出登录</a></li>
                    </ul>
                </li>
                <?php }?>
                <li><a>&nbsp;&nbsp;&nbsp;消息通知&nbsp;</a></li>
                <li class="shop_cart">
                    <a href="../cart/index">&nbsp;购物车(0)</a>
                    <ul class="shop_cart_list">
                        <li><p>购物车中还没有商品，赶紧选购吧！</p></li>
                    </ul>
                </li>                  
            </ul>                          
        </div>     
    </div>
</div>
<!-- 搜索栏 -->
<div class="search_box">
    <div class="container">
        <div class="logo_box">
            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/home/images/logo.png" alt="">
        </div>
        <ul class="search_keyword">
            <li>
                <a>小米手机</a>
                <ul class="search_list">
                    <li>商品列表</li>
                </ul>
            </li>
            <li><a>红米</a></li> 
            <li><a>笔记本</a></li>                                             
            <li><a>电视</a></li> 
            <li><a>盒子</a></li> 
            <li><a>新品</a></li>
            <li><a>路由器</a></li>
            <li><a>智能硬件</a></li>                    
            <li><a>服务</a></li>
            <li><a>社区</a></li>
        </ul>
        <div class="search_right_box">
            <form  class="search_form">
                <input class="search_input" type="search"/>
                <a class="search_btn" value="">搜索</a>
                <div class="search_hot_words">
                    <a>红米4X</a>
                    <a>小米Note 3 直降300</a>      
                </div> 
            </form>
        </div>            
    </div>
</div>

<?php }
}
