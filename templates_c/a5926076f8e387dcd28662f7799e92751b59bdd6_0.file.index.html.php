<?php
/* Smarty version 3.1.30, created on 2017-12-04 01:54:38
  from "D:\Web\wamp\wamp64\www\php\xiaomi_object\view\cart\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a24aadea79449_28017474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5926076f8e387dcd28662f7799e92751b59bdd6' => 
    array (
      0 => 'D:\\Web\\wamp\\wamp64\\www\\php\\xiaomi_object\\view\\cart\\index.html',
      1 => 1512352473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/footer.html' => 1,
  ),
),false)) {
function content_5a24aadea79449_28017474 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>小米—购物车</title>
    <link  rel="stylesheet" href="../public/static/cart/css/index.css?88">
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
</head>
<body>
<div id="cart_view">
    <!--  第五步：路由出口  路由匹配到的组件将渲染在这里 -->
    <router-view></router-view>
</div>
<!--购物车组件-->
<template id="cart">
    <div>
        <!--头部页面-->
        <div class="head">
            <div class="container">
                <div class="head_img">
                    <img src="../public/static/cart/images/logo.png" alt="">
                </div>
                <div class="head_title">
                    <h2>我的购物车</h2>
                    <p>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p>
                </div>
                <?php if ($_SESSION['user_info']['user_name'] == '') {?>
                <div class="head_right">
                    <a href="../user/login">登录</a><span>|</span>
                    <a href="../user/reg">注册</a>
                </div>
                <?php }?>
                <?php if ($_SESSION['user_info']['user_name']) {?>
                <div class="head_user_box">
            <span class="user_box">
                <a><?php echo $_SESSION['user_info']['user_name'];?>
&nbsp;&nbsp;&nbsp;<i>></i></a>
                <ul class="user_list">
                    <li><a  href="../user/user_home">个人中心</a></li>
                    <li><a>评价晒单</a></li>
                    <li><a>我的喜欢</a></li>
                    <li><a>小米账户</a></li>
                    <li><a  href="../user/logout">退出登录</a></li>
                </ul>
            </span>
                    <span>|</span>
                    <a href="javascript:;">我的订单</a>
                </div>
                <?php }?>
            </div>
        </div>
        <!--购物车列表-->
        <div class="cart_box">
            <div class="container">
                <!--空购物车-->
                <div class="cart_empty" v-if="cart_list==''">
                    <div><img src="../public/static/cart/images/cart-empty.png" alt=""></div>
                    <div>
                        <h2>您的购物车还是空的！</h2>
                        <a href="../home/index">马上去购物</a>
                    </div>
                </div>
                <!--购物车-->
                <div class="cart_list"  v-if="cart_list!=''">
                    <ul class="cart_list_head">
                        <li><label><input type="checkbox" v-model="checkState" @click="checkAll()">&nbsp;&nbsp;全选</label></li>
                        <li>商品图片</li>
                        <li>商品名称</li>
                        <li>单价</li>
                        <li>数量</li>
                        <li>小计</li>
                        <li>操作</li>
                    </ul>
                    <ul class="cart_list_goods" v-for="cart in cart_list">
                        <li><input type="checkbox" v-model="check"  :value="cart" >
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                        <li><img :src=cart.goods_thumb alt=""></li>
                        <li><a class="goods_name">{{cart.goods_name}}</a></li>
                        <li class="price">{{cart.price}}元</li>
                        <li class="buy_num">
                            <span @click="reduce_num(cart)">-</span>
                            <input type="text"  v-model="cart.buy_num">
                            <span @click="add_num(cart)">+</span>
                        </li>
                        <li class="small_sum">{{cart.price*cart.buy_num}}元</li>
                        <li><a>X</a></li>
                    </ul>
                </div>
                <div class="settle_row"  v-if="cart_list!=''">
                    <div class="settle_left">
                        <a href="../home/index">继续购物</a>
                        <p>共<strong>{{total_sum}}</strong>件商品，已选择<strong>{{total_num}}</strong>件</p>
                    </div>
                    <div class="settle_right">
                        <p>合计：<strong>{{total_price}}</strong>元</p>
                        <!-- 第四步：使用 router-link 组件来导航，通过传入 `to` 属性指定链接，相当于a标签  -->
                        <input type="button" @click="confirm_order()" :disabled="this.check.length==0"   class="btn" value="去结算">
                    </div>
                </div>
            </div>
        </div>
        <!--买购物车中商品的人还买了页面-->
        <div class="after_buy">
            <div class="container">
                <div class="title">
                    <span></span>
                    <h2>买购物车中商品的人还买了</h2>
                    <span></span>
                </div>
                <div class="product_list">
                    <ul>
                        <li><img src="../public/static/cart/images/card.jpg"></li>
                        <li><img src="../public/static/cart/images/pms_01.jpg" class="list_img">
                            <a class="goods_name">小米Max 2 全网通版 4GB内存</a>
                            <p class="price">1499元</p>
                            <p class="comment">66666人好评</p>
                        </li>
                        <li><img src="../public/static/cart/images/pms_2.jpg" class="list_img">
                            <a class="goods_name">小米5X</a>
                            <p class="price">1499元</p>
                            <p class="comment">66666人好评</p>
                        </li>
                        <li><img src="../public/static/cart/images/pms_3.jpg" class="list_img">
                            <a class="goods_name">小米Note 3 全网通版 6GB内存</a>
                            <p class="price">1499元</p>
                            <p class="comment">66666人好评</p>
                        </li>
                        <li><img src="../public/static/cart/images/pms_4.jpg" class="list_img">
                            <a class="goods_name">小米电视4 55英寸</a>
                            <p class="price">1499元</p>
                            <p class="comment">66666人好评</p>
                        </li>
                        <li><img src="../public/static/cart/images/pms_5.jpg" class="list_img">
                            <a class="goods_name">红米5A 2GB内存</a>
                            <p class="price">1499元</p>
                            <p class="comment">66666人好评</p>
                        </li>
                        <li><img src="../public/static/cart/images/pms_6.jpg" class="list_img">
                            <a class="goods_name">小米MIX2 全网通版</a>
                            <p class="price">1499元</p>
                            <p class="comment">66666人好评</p>
                        </li>
                        <li><img src="../public/static/cart/images/pms_7.png" class="list_img">
                            <a class="goods_name">小米电视4A 65英寸</a>
                            <p class="price">1499元</p>
                            <p class="comment">66666人好评</p>
                        </li>
                        <li><img src="../public/static/cart/images/pms_8.jpg" class="list_img">
                            <a class="goods_name">红米Note 4X 全网通版</a>
                            <p class="price">1499元</p>
                            <p class="comment">66666人好评</p>
                        </li>
                        <li><img src="../public/static/cart/images/pms_9.jpg?2" class="list_img">
                            <a class="goods_name">小米插线板</a>
                            <p class="price">1499元</p>
                            <p class="comment">66666人好评</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
<!--确认订单页面组件-->
<template id="order">
    <div>
        <!--头部-->
        <div class="head">
            <div class="container">
                <div class="head_img">
                    <img src="../public/static/cart/images/logo.png" alt="">
                </div>
                <div class="head_title">
                    <h2>确认订单</h2>
                </div>
                <?php if ($_SESSION['user_info']['user_name'] == '') {?>
                <div class="head_right">
                    <a href="../user/login">登录</a><span>|</span>
                    <a href="../user/reg">注册</a>
                </div>
                <?php }?>
                <?php if ($_SESSION['user_info']['user_name']) {?>
                <div class="head_user_box">
            <span class="user_box">
                <a><?php echo $_SESSION['user_info']['user_name'];?>
&nbsp;&nbsp;&nbsp;<i>></i></a>
                <ul class="user_list">
                    <li><a  href="../user/user_home">个人中心</a></li>
                    <li><a>评价晒单</a></li>
                    <li><a>我的喜欢</a></li>
                    <li><a>小米账户</a></li>
                    <li><a  href="../user/logout">退出登录</a></li>
                </ul>
            </span>
                    <span>|</span>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/user/user_home#/order">我的订单</a>
                </div>
                <?php }?>
            </div>
        </div>
        <!--确认订单详情页面-->
        <div class="order_box">
            <div class="container">
                <!--收货地址-->
                <div class="site">
                    <h3 class="title">收货地址</h3>
                    <ul>
                        <li class="site_info"  v-for="address in address_list">
                            <h2>姓名：{{address.name}}</h2>
                            <p>电话：{{address.phone}}</p>
                            <p>地址：{{address.site}}</p>
                            <a href="javascript:;" @click="modify_site(address)">修改</a>
                            <a href="javascript:;" @click="modify_del(address)">删除</a>
                            <a href="javascript:;" @click="Determine_site(address)">确定</a>
                        </li>
                        <li class="site_add" @click="site_add()">
                            <a href="javascript:;" style="color: #cccccc;text-align: center;line-height: 180px;">添加收货地址</a>
                        </li>
                    </ul>
                </div>
                <!--支付方式-->
                <div class="way">
                    <h3>支付方式</h3>
                    <p>在线支付 （支持微信支付、支付宝、银联、财付通、小米钱包等）</p>
                </div>
                <!--配送方式-->
                <div class="way">
                    <h3>配送方式</h3>
                    <p>快递配送（免运费）</p>
                </div>
                <!--配送时间-->
                <div class="order_time way">
                    <h3>配送时间</h3>
                    <ul>
                        <li class="selected">不限送货时间：<span>周一至周日</span></li>
                        <li>工作日送货：<span>周一至周五</span></li>
                        <li>双休日、假日送货：<span>周六至周日</span></li>
                    </ul>
                </div>
                <!--发票-->
                <div class="invoice way">
                    <h3>发票</h3>
                    <div class="invoice_info">
                        <ul><li class="selected">普通发票（纸质）</li></ul>
                        <ul><li class="selected">个人</li><li>单位</li></ul>
                        <div class="invoice_input">
                            <label class="input_label">请输入发票抬头</label>
                            <input class="input_text" type="text"  value="个人">
                        </div>
                        <p>发票内容：购买商品明细</p>
                        <div class="more">
                            <dl>
                                <dt>发票须知：</dt>
                                <dd class="active">12月1日-15日，因小米商城电子发票系统升级，此期间电子发票无法提供；</dd>
                                <dd class="active" style="margin-bottom:10px;">特殊情况如电视会员等可支持电子发票，因系统升级会延缓开具。</dd>
                                <dd>1. 小米商城纸质发票暂不支持填写税号；</dd>
                                <dd>2. 选择电子发票的订单付款后纳税人识别号不可修改，请确认信息后付款；</dd>
                                <dd>3. 电子发票可在订单完成后，在订单详情中下载和查看。</dd>
                                <dd>4. 发票金额为实际支付金额，不包含优惠券、礼品卡等。</dd>
                                <dd><a>查看更多发票常见问题 &gt;</a></dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <!--商品-->
                <div class="goods">
                    <div class="goods_header">
                        <h3>商品及优惠券</h3>
                        <p>商品单价/数量</p>
                        <a href="../cart/index">返回购物车></a>
                    </div>
                    <ul class="goods_list">
                        <li v-for="goods in order_goods">
                            <img src="https://i1.mifile.cn/a1/pms_1508850965.67096774!30x30.jpg">
                            <a>{{goods.goods_name}}</a>
                            <p>{{goods.price}}元 x {{goods.buy_num}}</p>
                            <p class="price">{{goods.price*goods.buy_num}}元</p>
                        </li>
                    </ul>
                </div>
                <div class="settle">
                    <ul class="left">
                        <li><i>+</i>使用优惠券</li>
                        <li><i>+</i>使用小米礼品卡</li>
                        <li class="goods"><i>+</i>小米5X 意外保险 小米5X 全网通版 4GB内存 红色 64GB</li>
                    </ul>
                    <ul class="right">
                        <li><label>商品件数：</label><span>{{total_info.sum_num}}</span></li>
                        <li><label>金额合计：</label><span>{{total_info.sum_price}}.00元</span></li>
                        <li><label>活动优惠：</label><span>-0.00元</span></li>
                        <li><label>优惠券抵扣：</label><span>-0元</span></li>
                        <li><label>运费：</label><span>0元</span></li>
                        <li class="total_price"><label>应付总额：</label><span><em>{{total_info.sum_price}}</em>元</span></li>
                    </ul>
                </div>
                <div class="order_foot">
                    <div class="left" v-if="address_list!=''">
                        {{address_list[address_num].name}} {{address_list[address_num].phone}}
                        <br>{{address_list[address_num].site}}<a @click="modify_site(address_list[address_num])">修改</a>
                    </div>
                    <div class="right">
                        <a @click="go_order()">立即下单</a>
                    </div>
                </div>
                <div class="add_site">
                    <input type="text" placeholder="姓名" v-model="add_address.name">
                    <input type="text" placeholder="电话" v-model="add_address.phone">
                    <input type="text" placeholder="地址" v-model="add_address.site">
                    <input type="button" value="确定" @click="add_pub()">
                    <input type="button" value="取消" @click="add_cancel()" >
                </div>
                <div class="modify_site">
                    <input type="text" placeholder="姓名" v-model="new_address.name">
                    <input type="text" placeholder="电话" v-model="new_address.phone">
                    <input type="text" placeholder="地址" v-model="new_address.site">
                    <input type="button" value="确定" @click="modify_pub()">
                    <input type="button" value="取消" @click="modify_cancel()" >
                </div>
                <div class="mark"></div>
            </div>
        </div>
    </div>
</template>
<?php $_smarty_tpl->_subTemplateRender("file:home/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        var add_left=($(window).width()-$(".add_site").width())/2;
        var add_top=($(window).height()-$(".add_site").height())/2;
        $(".add_site").css({"left":add_left+"px","top":add_top+"px"});
        var mod_left=($(window).width()-$(".modify_site").width())/2;
        var mod_top=($(window).height()-$(".modify_site").height())/2;
        $(".modify_site").css({"left":mod_left+"px","top":mod_top+"px"});
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    // 第二步：定义路由，也就是每个路由应该映射一个组件
    const routes=[
        {
            path:"/",
            component:{
                template:'#cart',
                data(){
                    return{
                        checkState:false,//全选状态 true，全选;false取消选中
                        cart_list:JSON.parse('<?php echo $_smarty_tpl->tpl_vars['cart_list']->value;?>
'),
                        check:[],//被选中的商品列表
                    }
                },
                watch:{
                    check:function (newVal) {
                        if (newVal.length == this.cart_list.length) {
                            this.checkState = true
                        }else{
                            this.checkState = false
                        }
                    }
                },
                computed:{
                    //总价
                    total_price:function () {
                        var  price=0;
                        this.check.forEach(item=>{
                            price+=Number(item.price.replace('元',''))*item.buy_num
                        });
                        return price;
                    },
                    //已选择数量
                    total_num:function () {
                        var num=0;
                        this.check.forEach(item=>{
                            num+=Number(item.buy_num);
                        });
                        return num;
                    },
                    //总数量
                    total_sum:function () {
                        var sum=0;
                        this.cart_list.forEach(item=>{
                            sum+=Number(item.buy_num);
                        });
                        return sum;
                    }
                },
                methods:{
                    add_num:function (cart) {
                        // 添加数量
                        cart.buy_num++
                    },
                    reduce_num:function (cart) {
                        cart.buy_num--;
                        if(cart.buy_num<=1){
                            cart.buy_num=1;
                        }
                    },
                    checkAll:function () {
                        if (this.checkState != false) {
                            this.check = [];
                            this.cart_list.forEach((cart)=>{
                                this.check.push(cart)
                            })
                        }else{
                            this.check = []
                        }
                    },
                    confirm_order:function () {
                        // 到底有没有登录
                        this.$parent.is_login(this.check);
                    },
                }
            }
        },
        {
            path:"/confirm_order",
            component:{
                template:'#order',
                data(){
                    return {
                        order_goods : [],
                        address_list:JSON.parse('<?php echo $_smarty_tpl->tpl_vars['address_list']->value;?>
'),
                        add_address:{
                            name:"",
                            phone:"",
                            site:"",
                        },
                        new_address:[],
                        address_num:0,
                    }
                },
                computed:{
                    total_info:function () {
                        let info = {
                            sum_price:0,
                            sum_num:0
                        };
                        this.order_goods.forEach((item)=>{
                            info.sum_num += Number(item.buy_num);
                            info.sum_price += Number(item.buy_num)*item.price;
                        });
                        return info
                    }
                },
                created(){
                    this.order_goods=this.$parent.checkGoods
                },
                methods:{
                    go_order:function () {
                        axios.get("<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/order/add",{
                            params:{
                                checkGoods:JSON.stringify(this.order_goods),
                                sum_num:this.total_info.sum_num,
                                sum_price:this.total_info.sum_price,
                                receiver_id:this.address_list[this.address_num].id,
                            }
                        }).then((item)=>{
                            alert('点击确定跳转至订单页面');
                            location.href = '<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/user/user_home#/order';
                        })
                    },
                    site_add:function () {
                        $(".add_site").show();
                        $(".mark").show();
                    },
                    add_pub:function () {
                        if(this.add_address.name==""){
                            alert("请输入姓名");
                            return;
                        }else if(this.add_address.phone==""){
                            alert("请输入电话");
                            return;
                        }else if(this.add_address.site==""){
                            alert("请输入地址");
                            return;
                        }
                        var address=this.add_address;
                        axios.get("<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/order/add_address",{
                            params:{
                                name:address.name,
                                phone:address.phone,
                                site:address.site,
                            }
                        }).then((rtnData)=>{
                            this.address_list=rtnData.data;
                        });
                        $(".add_site").hide();
                        $(".mark").hide();
                        this.add_address.name=this.add_address.phone=this.add_address.site="";
                    },
                    add_cancel:function () {

                        $(".add_site").hide();
                        $(".mark").hide();
                        this.add_address.name=this.add_address.phone=this.add_address.site="";
                    },
                    modify_site:function (address) {
                        $(".modify_site").show();
                        $(".mark").show();
                        this.new_address=address;
                    },
                    modify_pub:function(){
                        if(this.new_address.name==""){
                            alert("请输入姓名");
                            return;
                        }else if(this.new_address.phone==""){
                            alert("请输入电话");
                            return;
                        }else if(this.new_address.site==""){
                            alert("请输入地址");
                            return;
                        }
                        var address=this.new_address;
                        axios.get("<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/order/modify_address",{
                            params:{
                                name:address.name,
                                phone:address.phone,
                                site:address.site,
                                id:address.id,
                            }
                        }).then((rtnData)=>{
                            this.address_list=rtnData.data;
                        });
                        $(".modify_site").hide();
                        $(".mark").hide();
                    },
                    modify_cancel:function () {
                        $(".modify_site").hide();
                        $(".mark").hide();
                    },
                    modify_del:function (address) {
                        if(window.confirm('你确定要删除此地址吗？')){
                            axios.get("<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/order/address_del",{
                                params:{
                                    id:address.id,
                                }
                            }).then((rtnData)=>{
                                this.address_list=rtnData.data;
                            });
                        }else{
                            return
                        }
                    },
                    Determine_site:function (address) {
                        this.address_num=this.address_list.indexOf(address);
                    },

                }
            }
        }
    ];
    // 第三步：创建 router 实例，然后传 `routes` 配置
    const router = new VueRouter({
        routes
    });
    new Vue({
        el:'#cart_view',
        data:{
            checkGoods : [] //子组件互相通信传参用，选中的商品列表
        },
        router, // 第三.一步 把vue-router（插件）安装进vue.install
        methods:{
            is_login:function (check) {
                axios.get("<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/user/ajaxCheck").then((rtnData)=>{
                    if(rtnData.data){
                        this.checkGoods = check;
                        router.push('/confirm_order')
                    }else {
                        alert('你还没用登录！请先登录，点击确定跳转至登录页面');
                        location.href = '<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/user/login';
                    }
                })
            }
        }
    })
<?php echo '</script'; ?>
>
<?php }
}
