<?php
class homeModel extends baseModel{
    // 首页左侧分类
    public function getList(){
        $cate_list  =  $this->select("category_left");
        /*便利分类下的商品*/
        foreach ($cate_list as $key => $value) {
            $cate_list[$key]['goods_list'] = $this->select("goods_left",["parent_id"=>$value['id']]);
        }
        return $cate_list;
    }
    //楼层分类
    public function getFloorList(){
        $cate_list  =  $this->select("category_floor");
        foreach ($cate_list as $key => $value) {
            if ($value['parent_id']>0) {// 二级
                $cate_tree[$value['parent_id']]['second_cate'][] = $value;
            }else{// 一级
                $cate_tree[$value['id']] = $value;
            }
        }
        foreach ($cate_tree as $key => $value) {
            if ($value['second_cate']) {
                foreach ($value['second_cate'] as $k => $val) {
                    $cate_tree[$key]['second_cate'][$k]['goods_list'] =
                        $this->select("goods_floor",["cate_id_2"=>$val['id']]);
                }
            }
        }
        return $cate_tree;
    }
}
