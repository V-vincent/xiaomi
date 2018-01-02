
var photo_t=$(window).height()-$(".photo-box").height();
var photo_l=$(window).width()-$(".photo-box").width();
$(".photo-box").css("left",photo_l/2+"px");

var current =0;
var timer=null;
var current =0;
$(".photo-box .big-img .btn-left").click(function () {
    clearInterval(timer);
    current = (current-90);
    timer=setInterval(function () {hc();},20);
});
$(".photo-box .big-img .btn-right").click(function () {

    clearInterval(timer);
    current = (current+90);
    timer=setInterval(function () {hc();},20);
});

$(".comment_wrap .row .row_left .comment_list>ul>li .item .img-list>img").click(function () {
    var index=$(this).parent().children().index(this);
    $(".photo-box .area .img-list img").eq(index).addClass("imgb").siblings().removeClass("imgb");
    document.querySelector(".photo-box .big-img .img-box img").src=this.src;
    $(".mask").show();
    $(".photo-box").show();


    if( $(".photo-box .big-img .img-box img").width()>$(".photo-box .big-img .img-box img").height()){
        $(".photo-box .big-img .img-box img").width("675px");
    }else {
        $(".photo-box .big-img .img-box img").height("675px");
        $(".photo-box .big-img .img-box img").width("auto")
    }
    var img_t=$(".photo-box .big-img .img-box").height()-$(".photo-box .big-img .img-box img").height();
    var img_l=$(".photo-box .big-img .img-box").width()-$(".photo-box .big-img .img-box img").width();
    $(".photo-box .big-img .img-box img").css("top",img_t/2+"px");
    $(".photo-box .big-img .img-box img").css("left",img_l/2+"px");


    $(".photo-box").animate({top:photo_t/2+"px"},200);
});
$(".mask").click(function () {
    $(this).hide();
    $(".photo-box").hide();
    $(".photo-box").css("top","0px");
    current=0;
    $(".photo-box .big-img .img-box").css('transform','rotate('+current+'deg)');
});
$(".photo-box .big-img .btn-pri").click(function () {
    var obj=$(".photo-box .area .img-list ").find("img[class='imgb']");
    var index=obj.parent().children().index(obj);
    index-=1;
    if(index<0){
        index=obj.parent().children().length-1;
    }
    aaa(index,obj);
});
$(".photo-box .big-img .btn-next").click(function () {
    var obj=$(".photo-box .area .img-list ").find("img[class='imgb']");
    var index=obj.parent().children().index(obj);
    index+=1;
    if(index>obj.parent().children().length-1){
        index=0;
    }
    aaa(index,obj);
});
function aaa(index,obj) {
    current=0;
    $(obj).parent().children().eq(index).addClass("imgb").siblings().removeClass("imgb");
    $(".photo-box .big-img .img-box img")[0].src=$(obj).parent().children().eq(index)[0].src;
    $(".photo-box .big-img .img-box").css('transform','rotate('+current+'deg)')
}
$(".photo-box .area .img-list img").click(function () {
    $(this).addClass("imgb").siblings().removeClass("imgb");
    document.querySelector(".photo-box .big-img .img-box img").src=this.src;
    current=0;
    $(".photo-box .big-img .img-box").css('transform','rotate('+current+'deg)')
});
function hc() {
    var str=document.querySelector(".photo-box .big-img .img-box").style.transform;
    var deg=parseInt(str.substring(7));
    if(!deg){
        deg=0;
    }
    var speed=(current-deg)/10;
    speed=speed>0 ? Math.ceil(speed) : Math.floor(speed);
    if(!speed){
        clearInterval(timer);
    }
    $(".photo-box .big-img .img-box").css('transform','rotate('+(deg+speed)+'deg)')

}