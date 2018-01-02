<?php
class goodsModel extends baseModel{
    function getInfoById($id){
        // 商品信息
        $info =  $this->find("goods_left",["id"=>$id]);
        // 版本信息
        $info['version_list'] = $this->select("goods_version",["goods_id"=>$id]);
        foreach ($info['version_list'] as $key => $value) {
            // 获取对应版本的所有颜色列表：color_list
            $info['version_list'][$key]['color_list'] =
                $this->select("goods_color",["version_id"=>$value['id']]);
        }
        return $info;
    }
}
