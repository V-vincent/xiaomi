;(function () {
    /*banner轮播*/
    function change() {
        $(".banner_box .banner_btn li").eq(i).addClass("banner_btn_now").siblings().removeClass("banner_btn_now");
        $(".banner_img").find("img").eq(i).fadeIn(85).siblings().fadeOut(85);
    }
    var i=0;
    var timer=null;
    //鼠标移上按钮
    $(".banner_box .banner_btn li").mouseover(function () {
        $(this).addClass("banner_btn_now").siblings().removeClass("banner_btn_now")
    });
    //鼠标移开按钮
    $(".banner_box .banner_btn li").mouseout(function () {
        $(this).addClass("banner_btn_now").siblings().removeClass("banner_btn_now")
    });
   //点击按钮
    $(".banner_box .banner_btn li").click(function () {
        var new_i = ($(this).index());
        i=new_i;
        $(".banner_img").find("img").eq(new_i).fadeIn(300).siblings().fadeOut(200);
    });
    var liBtn = document.querySelectorAll(".banner_btn li");
    var li_long = liBtn.length;
    //点击下一张
    $(".banner_next").click(function () {
        i++;
        if(i>li_long-1){
            i=0;
        }
        //console.log(i);
        change();
    });
    //点击上一张
    $(".banner_up").click(function () {
        i--;
        if(i<0){
            i=li_long-1;
        }
        change()
    });
    timer = setInterval(function () {
        i++;
        if(i>li_long-1){
            i=0;
        }
        change();
    },4000);

    /*list宽度*/
    for(var i=0;i<$(".banner>ul>li .list").length;i++){
        var wh=$(".banner>ul>li .list").eq(i).children().length;
        $(".banner>ul>li .list").eq(i).width(wh*265+'px');
    }

    /*小米明星单品处的轮播*/
    var move1=null;
    var move2=null;
    move1=setInterval(function () {mlb(1);},3000);
    move2=setInterval(function () {mlb(2);},3000);
    function mlb(o){
        var mi=$(".plain_box"+o).data("index");
        if(mi){ mi=0;}else { mi=1;}
        md(mi,$(".plain_box"+o+" .box_hd .btn_box .left"));
    }
    $(".plain_box .box_hd .btn_box .left").click(function () {
        btn(0,$(this));
    });
    $(".plain_box .box_hd .btn_box .right").click(function () {
        btn(1,$(this));
    });
    function btn(b,obj) {
        if($(obj).parents(".plain_box").is(".plain_box1")){
            clearInterval(move1);
            md(b,$(obj));
            move1=setInterval(function () {mlb(1);},3000);
        }else {
            clearInterval(move2);
            md(b,$(obj));
            move2=setInterval(function () {mlb(2);},3000);
        }
    }
    function md(m,obj) {
        obj.parent().parent().parent().data("index",m);
        obj.parent().children().eq(m).removeClass("cur").siblings().addClass("cur");
        obj.parent().parent().parent().children().eq(1).children().animate({left:-m*1240+"px"});
    }
    $(".plain_box .move_list ul").on("mouseover",function () {
        if($(this).parents(".plain_box").is(".plain_box1")){
            clearInterval(move1);
        }else clearInterval(move2);
    });
    $(".plain_box .move_list ul").on("mouseout",function () {
        if($(this).parents(".plain_box").is(".plain_box1")){
            move1=setInterval(function () {mlb(1);},3000);
        }else move2=setInterval(function () {mlb(2);},3000);
    });


    /*家电处js*/
    $(".page_main .box-hd .more .tab-list li").on("mouseover",function () {
        $(this).addClass("tab-active").siblings().removeClass("tab-active");
        var aaa= $(this).data("index");
        var index=$(".page_main .box-hd .more .tab-list ").find("li[data-index="+aaa+"]").index(this);
        $(this).parent().parent().parent().siblings().children().eq(1).children().animate({left:-index*992+"px"});
    });

    /*内容处js*/
    $(".page_main .content_box .content>li .wrapper .btn_left").click(function () {
        var num=$(this).parents("li").data("index");
        if(num>0){
            num-=1;
            gd(num,this);
        }else return;
    });
    $(".page_main .content_box .content>li .wrapper .btn_right").click(function () {
        var num=$(this).parents("li").data("index");
        if(num<2){
            num+=1;
            gd(num,this);
        }else return;
    });
    function gd(v,obj){
        $(obj).parents("li").data("index",v);
        $(obj).parent().children().eq(0).animate({left:-v*296+"px"});
        $(obj).parent().children().eq(1).children().children().eq(v).addClass("cur").siblings().removeClass("cur");
    }
    $(".page_main .content_box .content>li .wrapper .bar li").click(function () {
        var i=$(this).data("index")-1;
        gd(i,$(this).parent().parent());
    });


}());
