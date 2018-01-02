<?php

class cartModel extends baseModel{

    private  $where_sql = '';
    public function __construct(){
        parent::__construct();
        $uid = $_SESSION['user_info']['id'];
        if ($uid>0) {
            $this->where_sql = " and (uid = $uid or session_id ='".session_id()."')";
        }else{
            $this->where_sql = " and session_id ='".session_id()."'";
        }
    }
    public function addCart($add_data){
        $add_data['info'] = json_decode($add_data['info'],true);
        $goods_id = $add_data['info']['id'];
        $buy_num = $add_data['buy_num'];
        $price = $add_data['info']['goods_price'];
        $goods_name = $add_data['info']['goods_name'];
        $session_id = session_id();
        $uid  =  $_SESSION['user_info']['id'];
        $goods_thumb = '1';
        $add_time = time();
        $goods_spec = $add_data['version_list'][$add_data['choise_ver_index']]['version_name'].$add_data['version_list'][$add_data['choise_ver_index']]['color_list'][$add_data['choise_color_index']]['color_name'];
        if(!$uid){
            if($add_data['uid']){
                $uid=$add_data['uid'];
            }else{  $uid=0; }

        }
        $info = $this->find("cart",["goods_id"=>$goods_id,"uid"=>$uid]);

        if ($info['uid']==$uid&&$info){

            $num =$info['buy_num']+1;
            $this->update("cart",["buy_num"=>$num,"uid"=>$uid],["goods_id"=>$info['goods_id'],"uid"=>$info['uid']]);
        }else {
            print_r($goods_id);
            $this->insert("cart",["uid" => $uid, "goods_id" => $goods_id, "buy_num" => $buy_num, "price" => $price,
                "goods_name" => $goods_name, "goods_thumb" => $goods_thumb, "goods_spec" => $goods_spec,
                "add_time" => $add_time, "session_id" => $session_id]);
        }
    }
    public function getCartList(){
        $uid  =  $_SESSION['user_info']['id'];
        return $this->select("cart",["uid"=>$uid]);
    }

    public function getCartList2($uid){
        return $this->select("cart",["uid"=>$uid]);
    }
    public function getAddressList(){
        $uid  =  $_SESSION['user_info']['id'];
        return $this->select("order_site",["uid"=>$uid]);
    }

    public function getAddressList2($uid){
        return $this->select("order_site",["uid"=>$uid]);
    }
    // 登录后立即更新购物车uid
    public function updateCartNoLogin(){
        $session_id = session_id();
        $uid = $_SESSION['user_info']['id'];
        $this->update("cart",["session_id"=>$session_id,"uid"=>$uid],["uid"=>0]);
    }
}



