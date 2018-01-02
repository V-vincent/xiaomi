<?php
// 配置相关参数
// 作用：
// 1、项目上线，直接在此文件修改数据库的配置即可。错误最好不要爆出来
// 2、可移植性
// 3、线上、本地测试
$_CONFIG = [
    "site_name" => "小米商城", //站点名称
    "site_url" => "http://localhost/php/xiaomi_object",//站点地址
    "dbhost" => "localhost",//数据库地址
    "dbname" => "xiaomi",//数据库名
    "dbuser" => "root",//数据库用户名
    "dbpwd" => "",//数据库密码
    "debug" => false, //是否开启调试：是不是有这个sql语句报错提示
];
