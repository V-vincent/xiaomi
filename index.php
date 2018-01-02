<?php
// 入口文件内容不宜太多,一个就够
include "init.php";
//一条口子 run 运行
baseControl::run();

// MVC特点：
// 1、一个入口文件WHY（因为入侵，路口很多，只需堵住这一个index.php。就可以防住入侵）
// 2、路径，所有的文件路径相当于根目录index.php
// 3、整个项目都是从index.php进去
// 4、共用
// 访问多个模块:给url加上指定的参数，controler=home(去首页)/controler=goods（商品）


