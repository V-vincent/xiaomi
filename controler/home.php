<?php
class home extends baseControl{
    public function index(){
        /*获取左侧分类的商品*/
        $cate_list = $this->model("home")->getList();
        $this->assign("cate_list",$cate_list);
        /*获取楼层分类的商品*/
        $cate_tree = $this->model("home")->getFloorList();
        $this->assign('cate_tree',$cate_tree);
        $this->display();
    }

    public function cate(){
        $cate_list = $this->model("home")->getList();
        echo json_encode($cate_list);
    }
}
