/**
 * Created by Administrator on 2017-11-23.0023.
 */
    function change() {
        $(".summary_page01 ol li").eq(is).addClass("page01_btn_now33").siblings().removeClass("page01_btn_now33");
        $(".summary_page01 .summary_page01_img img").eq(is).fadeIn(85).siblings().fadeOut(85);
    }
    var is=0;
    var liBtn = document.querySelectorAll(".summary_page01 ol li");
    var li_long = liBtn.length;
//点击按钮
$(".summary_page01 ol li").click(function () {
    var new_i = ($(this).index());
    is=new_i;
    $(this).addClass("page01_btn_now33").siblings().removeClass("page01_btn_now33");
    $(".summary_page01 .summary_page01_img img").eq(is).fadeIn(85).siblings().fadeOut(85);
});

    //点击下一张
    $(".summary_page01 .summary_page01_btn_next").click(function () {
        is++;
        //console.log(is);
        if(is>li_long-1){
            is=0;
        }
        change();
    });
    //点击上一张
    $(".summary_page01 .summary_page01_btn_up").click(function () {
        is--;
        if(is<0){
            is=li_long-1;
        }
        change()
    });

    //第五页动画
//定义一个初始值ic为0；
var ic = 0;
var sp05uli =$(".summary_page05 .summary_carousel ul li");
var sp05oli =$(".summary_page05 ol li");
//获取li的长度
var olength = sp05oli.length;
//console.log(olength);
//第一个li添加样式.banner_btn_now55
sp05oli.first().addClass("banner_btn_now55");
//自动轮播
var t = setInterval(function () {
    ic++;
    move();
},2000);
//鼠标悬停清除定时器
$(".summary_page05 .summary_carousel").hover(function () {
    clearInterval(t);
},function () {//回调函数鼠标移除开启定时器
    t = setInterval(function () {
        ic++;
        move();
    },2000)
});
//鼠标滑入按钮事件
sp05oli.hover(function () {
    var index = $(this).index();
    ic = index;
    console.log(ic);
    $(".summary_page05 .summary_carousel ul").stop().animate({left:-(index)*1340},500);
});
//点击下一张
$(".summary_page05 .summary_page05_btn .summary_page05_btn_next").click(function () {
    ic--;
    move();
});
//点击上一张
$(".summary_page05 .summary_page05_btn .summary_page05_btn_up").click(function () {
    ic++;
    move();
});
//移动事件
function move() {
  if(ic===olength){
      $(".summary_page05 .summary_carousel ul").css({left:0});
      ic = 1;
  }
   if(ic==-1){
      $(".summary_page05 .summary_carousel ul").css({left:-(olength-1)*1340});
      ic = olength-2;
  }
     $(".summary_page05 .summary_carousel ul").stop().animate({left:-ic*1340},1000)
}
//第十屏JS
var asummaryImg = ["{$config.site_url}/public/static/goods/images/page10.01.png","{$config.site_url}/public/static/goods/images/page10.02.png","{$config.site_url}/public/static/goods/images/page10.03.png","{$config.site_url}/public/static/goods/images/page10.04.jpg"];
var asummarybg = ["#fbe9e7","#dfc2a2","#212121","#000000"];
$(".summary_page10 ol li").click(function () {
    $(".summary_page10 .summary_page10_img img").attr("src",asummaryImg[$(this).index()]);
    $(".summary_page10").css("background",asummarybg[$(this).index()]);
    $(this).addClass("summary_page10_cur").siblings().removeClass("summary_page10_cur");
});
