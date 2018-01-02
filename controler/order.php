<?php

class order extends authControl{
    public function add(){
        $checkGoods=json_decode($_GET['checkGoods'],true);
        $sum_num=$_GET['sum_num'];
        $sum_price=$_GET['sum_price'];
        $receiver_id=$_GET['receiver_id'];
        $this->model("order")->payOrder($checkGoods,$sum_num,$sum_price,$receiver_id);

        echo "添加订单成功";
    }
    public function add_address(){
        $this->model("order")->addAddress($_GET['name'],$_GET['phone'],$_GET['site']);
    }
    public function add_address2(){
        $this->model("order")->addAddress2($_GET['name'],$_GET['phone'],$_GET['site'],$_GET['uid']);
    }

    public function modify_address(){
        $this->model("order")->modifyAddress($_GET['name'],$_GET['phone'],$_GET['site'],$_GET['id']);
    }
    public function modify_address2(){
        $this->model("order")->modifyAddress2($_GET['name'],$_GET['phone'],$_GET['site'],$_GET['id'],$_GET['uid']);
    }

    public function address_del(){
        $this->model("order")->addressDel($_GET['id']);
    }
    public function address_del2(){
        $this->model("order")->addressDel2($_GET['id'],$_GET['uid']);
    }


    public function getAddressList()
    {
        $address_list = $this->model("cart")->getAddressList2($_GET['uid']);
        print_r(json_encode($address_list));
    }
}