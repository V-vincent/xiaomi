<?php
//视图父类
class baseView{
    private $smarty=[];//smarty对象
    public function __construct(){
        $this->smarty=new Smarty();
        $this->smarty->template_dir="view";
    }
    public function assign($name,$value){
        $this->smarty->assign($name,$value);
    }
    public function display($html_file){
        global $_CONFIG;
        $this->smarty->assign('config',$_CONFIG);
        $this->smarty->display($html_file);
    }
    public function delimiter(){
        $this->smarty->left_delimiter = '<{';
        $this->smarty->right_delimiter = '}>';
    }
}