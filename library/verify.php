<?php
//开启会话
session_start();
// 验证码库
// 1、验证码大小
$image=imagecreatetruecolor(400, 50);
// 2、设置图片背景色、字体
$bg_color=imagecolorallocate($image, 245, 102, 000);
$ft_color=imagecolorallocate($image, 255, 255, 255);
// 3、把背景色填充进图片
imagefill($image, 0, 0, $bg_color);
// 4、生成验证码的内容，4个数字
$temp_val="";
for($i=0;$i<4;$i++){
	$temp_rand_val=rand(0,9);
	$temp_val.=$temp_rand_val;
	// 第二个参数：字体大小
	// 第五个：内容值
	imagestring($image, 12, $i*400/4+40, 20, $temp_rand_val, $ft_color);
}
$_SESSION['verify_system_code'] = $temp_val;
// 5、设置请求头内容类型是图片
for($i=0;$i<200;$i++){
    //设置点的颜色，50-200颜色比数字浅，不干扰阅读
    $point_color = imagecolorallocate($image,rand(20,200), rand(20,200), rand(20,200));
    //imagesetpixel — 画一个单一像素
    imagesetpixel($image, rand(1,400), rand(1,50), $point_color);
    //这里的rand指的是横纵坐标
}
//9>增加干扰元素，设置横线
for($i=0;$i<4;$i++){
    //设置线的颜色
    $line_color = imagecolorallocate($image,rand(80,220), rand(80,220),rand(80,220));
    //设置线，两点一线
    imageline($image,rand(1,400), rand(1,50),rand(1,400), rand(1,50),$line_color);
    //这里的rand指的是横纵坐标，尾部应该是宽长
}

header("Content-type:image/png");
imagepng($image);
imagedestroy($image);
