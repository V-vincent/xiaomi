<?php
/* Smarty version 3.1.30, created on 2017-12-03 13:29:19
  from "D:\Web\wamp\wamp64\www\php\xiaomi_object\view\goods\info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a23fc2f77d431_78388157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cb5b0800d3280c7b727eae6775608a9cb3fe007' => 
    array (
      0 => 'D:\\Web\\wamp\\wamp64\\www\\php\\xiaomi_object\\view\\goods\\info.html',
      1 => 1512031828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/header.html' => 1,
    'file:home/footer.html' => 1,
  ),
),false)) {
function content_5a23fc2f77d431_78388157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:home/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="../public/static/goods/css/info.css?4">
<?php echo '<script'; ?>
 src="../public/static/home/js/jquery3.2.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.bootcss.com/vue/2.4.4/vue.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.bootcss.com/axios/0.17.1/axios.min.js"><?php echo '</script'; ?>
>
<div class="fix_goods_introduction fixed">
	<div class="goods_introduction">
		<p class="goods_name">小米5X 变焦双摄</p>
		<a href="../goods/summary?id=1" class="summarize">概述</a>
		<a href="javascript:;" class="parameter">参数</a>
		<a href="javascript:;" class="size_f">F码通道</a>
		<a href="../goods/comment?id=1" class="user_evaluation">用户评价</a>
	</div>
	<div class="goods_name_fade">
	</div>

</div>
<div class="fix_goods_introduction">
	<div class="goods_introduction">
		<p class="goods_name">小米5X 变焦双摄</p>
		<a href="../goods/summary?id=1" class="summarize">概述</a>
		<a href="javascript:;" class="parameter">参数</a>
		<a href="javascript:;" class="size_f">F码通道</a>
		<a href="../goods/comment?id=1" class="user_evaluation">用户评价</a>
	</div>
	<div class="goods_name_fade">
	</div>

</div>
<div class="goods_details">
	<div class="container">
		<div class="left_goods_pic">
			<img src="../public/static/goods/images/red.jpg" alt="" class="phone_pic">
		</div>
		<div class="right_goods_choose_information">
			<h1 class="goods_title">{{info.goods_name}}</h1>
			<p class="goods_sketch"><strong class="discount">【直减100元，赠WIFI放大器、米粉卡，最高享12期免息】</strong>光学变焦双摄，拍人更美 / 5.5"大屏<br>
				轻薄全金属 / 骁龙八核处理器 / 4GB大内存 </p>
			<div class="goods_price">
				<h2 class="new_price">{{info.goods_price}}</h2><h3 class="old_price">1499元</h3>
			</div>
			<div class="parting_line">
			</div>
			<div class="gifts_and_discount">
				<ul class="gifts_list">
					<li><div class="gift_button gifts_one">赠品</div>无限流量米粉卡 含100元话费</li>
					<li><div class="gift_button gifts_two">赠品</div>限量赠小米WiFi放大器</li>
					<li><div class="gift_button discount_one">折扣</div></li>
				</ul>
			</div>
			<div class="parting_line">
			</div>
			<div class="location">
				<p class="location_details">地址：&nbsp;广东&nbsp;广州市&nbsp;天河区&nbsp;车陂街道&nbsp;<strong class="modify">修改</strong><br>
					<strong class="have_goods">有现货</strong></p>
			</div>
			<p class="select_version">选择版本</p>
			<ul class="choose_version">
				<li class="version" :class="{'cur':index==cur_ver_index}"
					v-for="(version,index) in info.version_list" @click="choise_version(index)">
					<p class="version_detail">{{version.version_name}}</p>
					<p class="version_price">{{version.price}}</p>
				</li>
			</ul>
			<p class="select_color">选择颜色</p>
			<ul class="choose_color" v-for="(version,index) in info.version_list"
				v-if="index==cur_ver_index">
				<li class="color" :data-index="color.color" v-for="(color,index) in version.color_list"
					:class="{'cur':index==cur_color_index}" @click="choise_color(index)">
					<p class="color_detail" >{{color.color_name}}</p>
				</li>
			</ul>
			<br>
			<p class="select_insurance">选择小米提供的意外保险 <strong class="realize_insurance">了解意外保险></strong></p>
			<div class="insurance">
				<input type="checkbox" class="buy_or_not_buy_insurance" data-check="false">
				<img src="../public/static/goods/images/insurance.jpg" alt="" class="insurance_pic">
				<div>
					<p class="phone_insurance">手机意外保险</p>
					<p class="mi5X_insurance">小米5X 意外保险</p>
				</div>
				<p class="insurance_price">119元</p>
			</div>
			<p class="collocation_purchase ">搭配购买</p>
			<div class="collocation_buy">
				<p class="collocation_buy_together">搭配一起购买</p><p class="collocation_buy_button">></p>
			</div>
			<div class="final_text">
				<p class="final_price_and_detail">{{info.goods_name}} &nbsp;全网通版  &nbsp;
					{{info.version_list[cur_ver_index].version_name}}
					&nbsp;{{info.version_list[cur_ver_index].color_list[cur_color_index].color_name}}
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{info.version_list[cur_ver_index].price}}</p>
				<p class="goods_total">合计：{{info.version_list[cur_ver_index].price}}</p>
			</div>
			<div class="cart_btn">
				<input type="button" value="加入购物车" class="join_shopping_cart" @click="add_cart()">
				<input type="button" value="查看购物车"  @click="watch_cart()">
			</div>
			<p class="seven_day">支持7天无理由退货</p>
		</div>
	</div>
</div>
<div class="xiaomi_box">
	<div class="container">
		<p class="packing_list">包装清单</p>
		<img src="../public/static/goods/images/baozhuangqingdan.jpg" alt="">
		<p class="xiaomi_promise">小米承诺</p>
		<img src="../public/static/goods/images/xiaomichengnuo.png" alt="">
		<p class="official_weChat">官方微信</p>
		<img src="../public/static/goods/images/guanfangweixin.jpg" width="1226">
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:home/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="../public/static/goods/js/info.js?9"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	new Vue({
		el:'.goods_details',
        data:{
            info:JSON.parse('<?php echo $_smarty_tpl->tpl_vars['info_json']->value;?>
'),  //整个商品信息
            cur_ver_index:0, //当前选中的版本下标
            cur_color_index:0, //当前选中的颜色下标
        },
        computed:{
            //计算总价
            total_price:function () {
                total_price=0;
                var check=$('.buy_or_not_buy_insurance').data("check");
                if(check){
                    total_price=1399+119+"元" ;
				}
				else {
                    total_price=1399+'元';
				}
				return total_price;
            }
        },
        methods:{
		    //选择版本
            choise_version:function (index) {
                this.cur_ver_index = index;
                this.cur_color_index = 0
            },
            //选择颜色
            choise_color:function (index) {
                this.cur_color_index = index;
            },
            //加入购物车
            add_cart:function () {
                //console.log(this.info);
                axios.get('../cart/add',{
                    params:{
                        info:this.info,
                        buy_num:1,
                        choise_color_index:this.cur_color_index,
                        choise_ver_index:this.cur_ver_index,
                    }
                }).then((rtnData)=>{
                    console.log(rtnData);
			});
            },
			watch_cart:function () {
				window.open('../cart/index','_self');
            }
        }
	})
<?php echo '</script'; ?>
>
<?php }
}
