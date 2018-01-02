<?php

class authControl extends baseControl {

    function __construct(){
        global $_CONFIG;
        parent::__construct();
        $access_array = [// order控制器全部需要登录
            'user'=>['user_home','logout'], // user控制器有的行为需要登录，有的又不需要
        ];
        // 把需要加权限的控制器列出来
        if (in_array(self::$control, array_keys($access_array))) {
        // $access_array[self::$control] == 'all' 如果当前控制器的权限值是all，代表它里面所有的行为都需要做权限判断
        //in_array(self::$action, $access_array[self::$control]) 如果当前行为存在当前控制器的权限数组值，那么就需要做权限判断
            if ($access_array[self::$control] == 'all'||in_array(self::$action, $access_array[self::$control])) {
                if (!empty($_SESSION['user_info'])) {
                    echo '';
                }else{
                    echo '无权限，请回退！<a href="'.$_CONFIG['site_url'].'/user/login">登录</a>';exit();
                }
            }
        }
    }
}