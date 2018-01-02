<?php
class cart extends baseControl{
    public function add(){
        $this->model("cart")->addCart($_REQUEST);
    }
    public function index(){
        $this->delimiter();
        $cart_list =$this->model("cart")->getCartList();
        $address_list=$this->model("cart")->getAddressList();
        $this->assign('cart_list',json_encode($cart_list) );
        $this->assign('address_list',json_encode($address_list) );
        $this->display();
    }
    public function getCart(){
    $cart_list =$this->model("cart")->getCartList2($_GET['uid']);
    print_r(json_encode($cart_list));
   }
}


