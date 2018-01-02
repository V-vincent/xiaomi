<?php
/* Smarty version 3.1.30, created on 2017-12-04 02:23:51
  from "D:\Web\wamp\wamp64\www\php\xiaomi_object\view\user\user_home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a24b1b73a81c1_71410193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92383cba48399f606992cf1c5b9aae7fbf2b7878' => 
    array (
      0 => 'D:\\Web\\wamp\\wamp64\\www\\php\\xiaomi_object\\view\\user\\user_home.html',
      1 => 1512354229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/header.html' => 1,
  ),
),false)) {
function content_5a24b1b73a81c1_71410193 (Smarty_Internal_Template $_smarty_tpl) {
?>
<title>个人中心</title>
<?php $_smarty_tpl->_subTemplateRender("file:home/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/user/css/user_home.css?6">
<?php echo '<script'; ?>
 src="../public/static/home/js/jquery3.2.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.bootcss.com/vue/2.4.4/vue.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.bootcss.com/vue-router/3.0.1/vue-router.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.bootcss.com/axios/0.17.1/axios.min.js"><?php echo '</script'; ?>
>
<div class="user_home">
	<div class="container">
		<div class="home_top_box">
			<a href="../home/index">首页</a>
			<span>&gt;</span>
			<p>个人中心</p>
		</div>
		<div class="left_box">
			<ul class="left_list">
				<li><h3 class="title">订单中心</h3></li>
				<li><a href="../user/user_home#/order">我的订单</a></li>
				<li><a>意外保</a></li>
				<li><a href="../user/user_home#/order">团购订单</a></li>
				<li><a href="../user/user_home#/comment">评价晒单</a></li>
				<li><a>话费充值订单</a></li>
				<li><a>以旧换新订单</a></li>
				<li><h3 class="title">个人中心</h3></li>
				<li><a class="cur" href="../user/user_home">我的个人中心</a></li>
				<li><a>消息通知</a></li>
				<li><a >购买资格</a></li>
				<li><a >现金账户</a></li>
				<li><a>小米礼品卡</a></li>
				<li><a >现金券</a></li>
				<li><a >喜欢的商品</a></li>
				<li><a >优惠券</a></li>
				<li><a>收货地址</a></li>
				<li><h3 class="title">售后服务</h3></li>
				<li><a>服务记录</a></li>
				<li><a >申请服务</a></li>
				<li><a >领取快递报销</a></li>
				<li><h3 class="title">账户管理</h3></li>
				<li><a >个人信息</a></li>
				<li><a >修改密码</a></li>
				<li><a >社区VIP认证</a></li>
			</ul>
		</div>
		<div class="right_box">
			<!-- 路由出口  路由匹配到的组件将渲染在这里 -->
			<router-view></router-view>
		</div>
	</div>
</div>
<!--个人中心组件-->
<template id="my_center">
	<div class="my_center_box">
		<div class="user_details">
			<div class="user_card">
				<img class="avatar" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/user/images/photo.jpg" >
				<div>
					<h2><?php echo $_SESSION['user_info']['user_name'];?>
</h2>
					<p class="tip">晚上好</p>
					<a >修改个人信息 &gt;</a>
				</div>
			</div>
			<ul class="user_action">
				<li>账户安全：<span class="level">普通</span></li>
				<li>绑定手机：<span class="tel">136********66</span></li>
				<li>绑定邮箱：<span class="tel"></span><a class="bind">绑定</a></li>
			</ul>
		</div>
		<ul class="info_list">
			<li>
				<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/user/images/portal-icon-1.png" alt="">
				<div>
					<h3>待支付的订单：<span class="num">0</span></h3>
					<a href="../user/user_home#/order">查看待支付订单 &gt;</a>
				</div>
			</li>
			<li>
				<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/user/images/portal-icon-2.png" alt="">
				<div>
					<h3>待收货的订单：<span class="num">0</span></h3>
					<a href="../user/user_home#/order">查看待收货订单 &gt;</a>
				</div>
			</li>
			<li>
				<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/user/images/portal-icon-3.png" alt="">
				<div>
					<h3>待评价商品数：<span class="num">0</span></h3>
					<a href="../user/user_home#/comment">查看待评价商品 &gt;</a>
				</div>
			</li>
			<li>
				<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/user/images/portal-icon-4.png" alt="">
				<div>
					<h3>喜欢的商品：<span class="num">0</span></h3>
					<a >查看喜欢的商品 &gt;</a>
				</div>
			</li>
		</ul>
	</div>
</template>
<!--订单组件-->
<template id="order">
	<div class="order_box">
        <h1 class="title">我的订单<small>请谨防钓鱼链接或诈骗电话，<a>了解更多&gt;</a></small></h1>
        <div class="order_head">
            <ul class="order_list">
                <li class="first"><a class="cur">全部有效订单</a></li>
                <li><a>待支付</a></li>
                <li><a>待收货</a></li>
                <li><a>已关闭</a></li>
            </ul>
            <form class="search">
                <input class="search_text" placeholder="输入商品名称、商品编号、订单号">
                <input type="submit" class="search_btn" value="搜索">
            </form>
        </div>
        <div class="order_info">
            <p class="none_order" v-if="!order_list">当前没有交易订单。</p>
			<div class="goods_info"  v-if="order_list">
				<h3>商品信息</h3>
				<ul>
					<li v-for="goods in order_list">
						<img src="https://i1.mifile.cn/f/i/g/2015/cn-index/note2320x220.png" alt="">
						<div class="right">
							<p>订单编号：{{goods.order_id}}</p>
							<p>商品编号：{{goods.goods_id}}</p>
							<p>商品名称：{{goods.goods_name}}</p>
							<p>商品价格：{{goods.goods_price}}元</p>
							<p>购买数量：{{goods.buy_num}}</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="user_info" v-if="order_list">
				<h3>收货人信息</h3>
				<p>姓名&nbsp;&nbsp;&nbsp;188*****888</p>
				<p>地址：这里是地址</p>
			</div>
        </div>
	</div>
</template>
<!--评价晒单组件-->
<template id="comment">
    <div class="comment_box">
        <h1 class="title">商品评价</h1>
        <ul class="comment_list">
            <li class="first"><a class="cur">待评价商品</a></li>
            <li><a>已评价商品</a></li>
            <li><a>评价失效商品</a></li>
        </ul>
        <div class="comment_info">
            <p class="none_comment" v-if="!order_list">暂时没有符合条件的商品。</p>
			<div class="goods_info" v-if="order_list">
				<h3>商品信息</h3>
				<ul>
					<li v-for="goods in order_list">
						<img src="https://i1.mifile.cn/f/i/g/2015/cn-index/note2320x220.png" alt="">
						<div class="right">
							<p>订单编号：{{goods.order_id}}</p>
							<p>商品编号：{{goods.goods_id}}</p>
							<p>商品名称：{{goods.goods_name}}</p>
							<p>商品价格：{{goods.goods_price}}元</p>
							<p>购买数量：{{goods.buy_num}}</p>
						</div>
						<div class="comment_info">
							<input type="text"  class="comment_input" name="comment_content"
								   @keyup.enter="send_comment()" >
							<input type="button" value="评价" class="comment_btn">
							<p v-for="comment in comment_list" v-if="goods.goods_id==6">{{comment.comment_content}}</p>
						</div>
					</li>
				</ul>
			</div>
        </div>
    </div>
</template>
{include file="home/footer.html"}
<?php echo '<script'; ?>
>
	const routes=[
		{
		    path:'/',//个人中心
			component:{
		        template:'#my_center',
			}
		},
		{
		    path:'/order',//订单
            component:{
                template:'#order',
				data(){
                    return{
                        order_list:JSON.parse('<?php echo $_smarty_tpl->tpl_vars['order_list']->value;?>
'),
					}
				}
            }
		},
        {
            path:'/comment',//评价
            component:{
                template:'#comment',
                data(){
                    return{
                        order_list:JSON.parse('<?php echo $_smarty_tpl->tpl_vars['order_list']->value;?>
'),
                        comment_content:'',
                        comment_list:JSON.parse('<?php echo $_smarty_tpl->tpl_vars['comment_list']->value;?>
'),
                    }
                },
                methods:{
                    send_comment:function () {
                        this.comment_content=$(".comment_input").val();
                        axios.get("<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/user/doComment",{
                            params:{
                                comment_content:this.comment_content
                            }
                        }).then((item)=>{})
                    }
				}
            },

        }
	];
    const router = new VueRouter({
        routes
    });
    new Vue({
		el:'.right_box',
        router,
		data:{

		}
	});
	(function () {
		$('.left_list li a').on('click',function () {
            $(this).addClass('cur').parent().siblings().children().removeClass('cur');
        })
    }())
<?php echo '</script'; ?>
><?php }
}
