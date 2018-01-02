<?php
class userModel extends baseModel{
    /**
     * 添加用户
     * @param string $user_name 用户名
     * @param string $user_pwd  密码
     */
    function addUser($user_name,$user_pwd){
        $create_time = time();
        $this->insert('user',["user_name"=>$user_name,"user_pwd"=>$user_pwd,'create_time'=>$create_time]);
    }
    //有返回值，返回一条用户信息
    function getUser($user_name,$user_pwd){
        return  $this->find('user',["user_name"=>$user_name,"user_pwd"=>$user_pwd]);
    }
    //判断用户名是否存在
    function getUserExists($user_name){
        return  $this->find('user',["user_name"=>$user_name]);
    }
    //修改密码
    function updateUser($user_name,$user_pwd){
        $this->update('user',["user_pwd"=>$user_pwd],["user_name"=>$user_name]);
    }
    //添加评论
    function addComment($comment_content){
        $this->insert('comment',["comment_content"=>$comment_content]);
    }
    //获取评论内容
    function getComment(){
        return  $this->select('comment');
    }
}
