<?php

class orderModel extends baseModel{
    public function payOrder($checkGoods,$sum_num,$sum_price,$receiver_id){
        $uid=$_SESSION['user_info']['id'];
        $this->insert('mi_order',[
            'uid'=>$uid,
            'order_sn'=>date('YmdHis',time()).rand(1000,9999),//订单序列号
            'receiver_id'=>$receiver_id,
            'add_time'=>time(),
            'sum_num'=>$sum_num,
            'sum_price'=>$sum_price,
        ]);
        foreach ($checkGoods as $key => $value) {
            $this->insert('order_goods',[
                "order_id"=>$this->getLastInsertId()[0],
                "goods_id"=>$value['goods_id'],
                "goods_name"=>$value['goods_name'],
                "goods_price"=>$value['price'],
                "buy_num"=>$value['buy_num'],
                "goods_thumb"=>$value['goods_thumb'],
                "spec"=>$value['goods_spec'],
            ]);
            $this->delete('cart',[
                'uid'=>$uid,
                'goods_id'=>$value['goods_id']
            ]);
        }
    }

    public function getOrder(){
        $uid=$_SESSION['user_info']['id'];
        $info = $this->select("mi_order",["uid"=>$uid]);
        foreach ($info as $key => $value){
            $id=$info[$key]['id'];
            return $this->select("order_goods",['order_id'=>$id]);
        }
    }

    public function addAddress($name,$phone,$site){
        $uid  =  $_SESSION['user_info']['id'];
        $this->insert('order_site',["uid"=>$uid,"name"=>$name,"phone"=>$phone,"site"=>$site]);
        print_r(json_encode($this->select("order_site",["uid"=>$uid])));
    }
    public function addAddress2($name,$phone,$site,$uid){
        $this->insert('order_site',["uid"=>$uid,"name"=>$name,"phone"=>$phone,"site"=>$site]);
        print_r(json_encode($this->select("order_site",["uid"=>$uid])));
    }

    public function modifyAddress($name,$phone,$site,$id){
        $uid  =  $_SESSION['user_info']['id'];
        $this->update('order_site',["name"=>$name,"phone"=>$phone,"site"=>$site],["uid"=>$uid,"id"=>$id]);
        print_r(json_encode($this->select("order_site",["uid"=>$uid])));
    }
    public function modifyAddress2($name,$phone,$site,$id,$uid){
        $this->update('order_site',["name"=>$name,"phone"=>$phone,"site"=>$site],["uid"=>$uid,"id"=>$id]);
        print_r(json_encode($this->select("order_site",["uid"=>$uid])));
    }

    public function addressDel($id){
        $uid  =  $_SESSION['user_info']['id'];
        $this->delete('order_site',["uid"=>$uid,"id"=>$id]);
        print_r(json_encode($this->select("order_site",["uid"=>$uid])));
    }
    public function addressDel2($id,$uid){
        $this->delete('order_site',["uid"=>$uid,"id"=>$id]);
        print_r(json_encode($this->select("order_site",["uid"=>$uid])));
    }

    public function getAddress($id){
        $uid  =  $_SESSION['user_info']['id'];
        return $this->select('order_site',["uid"=>$uid,"id"=>$id]);
    }

    public function getAddress2($id,$uid){
        return $this->select('order_site',["uid"=>$uid,"id"=>$id]);
    }
}