$(document).ready(function () {
         //选择版本颜色
        $(".choose_color>li").click(function () {
            $(this).addClass("cur").siblings().removeClass("cur");
             var index=$(this).data("index");
             $(".left_goods_pic .phone_pic")[0].src="../public/static/goods/images/"+index+".jpg";
        });
        $(".choose_version>li").click(function () {
            $(".left_goods_pic .phone_pic")[0].src="../public/static/goods/images/"
                +$(".choose_color>li").eq(0).data("index")+".jpg";
            $(".choose_color>li").click(function () {
                $(this).addClass("cur").siblings().removeClass("cur");
                var index=$(this).data("index");
                $(".left_goods_pic .phone_pic")[0].src="{../public/static/goods/images/"+index+".jpg";
            });
        });
        //意外保险
       var $cur=$('.buy_or_not_buy_insurance');
       $cur.click(function () {
            var check=$cur.data("check");
            var $insurance=$(".insurance");
            if(( $insurance).hasClass("cur")){
                $insurance.removeClass("cur");
                check=false;
            }
            else{
                $insurance.addClass("cur");
                check=true;
            }
        });
       //图片跟随移动
         var phone_y = $(".phone_pic").offset().top;
        $(window).scroll(function () {
             var offsetTop = phone_y + $(window).scrollTop()-300 + "px";
            if(phone_y + $(window).scrollTop() -300>0&&phone_y+ $(window).scrollTop() -300<700) {
                 $(".phone_pic").animate({top: offsetTop}, {duration: 600, queue: false});
                //console.log($(window).scrollTop());
                 if($(window).scrollTop()>132)
                     $(".fixed").show();
                 else
                     $(".fixed").hide();
                 }
            });
        }
);


