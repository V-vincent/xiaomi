<?php
// 定义一个父类
// 子类
// 共有的行为
// 1、进入视图页面
// 2、调用模型层
// 3、给模版变量赋值
class baseControl{
    private $baseView=[];//smarty对象
    protected static $control=[]; //控制器 静态的属性只能用self调用
    protected static $action=[];//行为

    public function __construct(){
        $this->baseView = new baseView(); // 初始化baseView
    }
    /**
     * 项目的运行函数，类似发动机
     * 静态run函数
     * 调用静态的属性
     */
    public static function run(){
        // 获取是哪个控制器
        $control=isset($_REQUEST['controler'])?$_REQUEST['controler']:'home';//isset判断一个值到底有没有
        // 获取是哪个行为
        $action=isset($_REQUEST['action'])?$_REQUEST['action']:'index';

        self::$control=$control;
        self::$action=$action;

        include "controler/$control.php";
        $con_object=new $control();
        $con_object->$action();
    }
    // 显示具体的页面
    public function display(){
        $this->baseView->display(self::$control."/".self::$action.".html");
    }
    public function assign($name,$value){
        $this->baseView->assign($name,$value);
    }
    /**
     * 供子类调用指定模型
     * @param  string $model_name 模型名
     * @return object             指定模型对象
     */
    public function model($model_name){
        $model_name = $model_name.'Model';
        $filename="model/".$model_name.".php";
        if (file_exists($filename)){
            include_once "$filename"; //当调用多次方法的时候，只引入一次文件
            if (class_exists($model_name)){
                return new $model_name();
            }
        }
    }
    public function delimiter(){
        $this->baseView->delimiter();
    }
}
