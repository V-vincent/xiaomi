<?php

header("Access-Control-Allow-Origin:http://localhost:8080");
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Allow-Header:Origin,X-Qequested-With,Content-Type,Accept");
header("Access-Control-Allow-Methods:POST,GET,OPTIONS,PUT,DELETE");

// 开启会话
session_start();
// 只显示致命性错误
error_reporting(~E_NOTICE);
// 引入核心库的文件
include_once "library/baseView.php";//视图
include_once "library/baseControl.php";//控制器
include_once "library/authControl.php";//权限控制器
include_once "library/baseModel.php";//模型
include_once "library/smarty/Smarty.class.php";

// 引入配置文件
include_once "config.php";