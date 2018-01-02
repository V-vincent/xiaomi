<?php
// 用户控制器：
// 登录行为(action=login)
// 注册行为（action=reg）
// 处理注册行为（action=doReg）
// 特点：
// 1、只选择user用户相关的视图（登录、注册），只选择用户相关的数据
// 2、控制层并不做任何的数据处理
// 3、只负责去哪里，只负责获取
class user extends authControl {
    public function login(){//登录
        $this->model("user")->find("user");
            if (!empty($_SESSION['user_info'])) {
                // 重定向到用户中心 header // 个人中心
                header('location:user_home');
            }
        $this->display();
    }
    public function doReg(){
        //判断验证码是否正确
        $verify_code=$_POST['verify_code'];
        if($verify_code!=$_SESSION['verify_system_code']){
            echo "验证码不正确，请重新输入！";
        }else{
            // 1、获取用户名和密码
            $user_name=$_POST['user'];
            $user_pwd = $_POST['password'];
            if(empty($user_name)&&empty($user_pwd)){
                echo "请输入用户名和密码！";
            }else{
                // 判断用户是否存在
                 $is_exists=$this->model("user")->getUserExists($user_name);
                if (!$is_exists) {
                    $this->model("user")->addUser($user_name,$user_pwd);
                    $info = $this->model("user")->getUser($user_name,$user_pwd);
                    $_SESSION['user_info']=$info;
                    $this->model("cart")->updateCartNoLogin();
                    header('location:login');
                }else{
                    echo '注册失败！用户名已经存在';
                }
            }
        }
    }
    public function doReg2(){
        // 1、获取用户名和密码
        $user_name=$_POST['user'];
        $user_pwd = $_POST['password'];
        if(empty($user_name)&&empty($user_pwd)){
            echo "请输入用户名和密码！";
        }else{
            // 判断用户是否存在
             $is_exists=$this->model("user")->getUserExists($user_name);
            if (!$is_exists) {
                $this->model("user")->addUser($user_name,$user_pwd);
                $info = $this->model("user")->getUser($user_name,$user_pwd);
                $_SESSION['user_info']=$info;
                $this->model("cart")->updateCartNoLogin();
                header('location:login');
            }else{
                echo '注册失败！用户名已经存在';
            }
        }
    }
    //修改密码
    public function doRevise(){
        $user_name = $_POST['user'];
        $user_pwd = $_POST['password'];
        $new_pwd = $_POST['newpassword'];
        $new_pwd2 = $_POST['newpassword2'];
        $is_exists = $this->model("user")->getUserExists($user_name);
        if (!$is_exists){
            echo "用户不存在";
        }else{
            $info = $this->model("user")->getUser($user_name,$user_pwd);
            if (!$info) {
                echo "用户名或密码不正确名或密码不正确";
            }else{
                if($new_pwd==''||$new_pwd2==''){
                    echo "新密码不能为空！";
                }else if($new_pwd!=$new_pwd2){
                    echo "两次密码不一致";
                }else{
                    $this->model("user")->updateUser($user_name,$new_pwd);
                    header('location:login');
                }
            }
        }
    }
    public function doLogin(){
        $user_name = $_REQUEST['u_name'];
        $user_pwd = $_REQUEST['u_pwd'];
        $info = $this->model("user")->getUser($user_name,$user_pwd);
        if(!empty($info)){
            $_SESSION['user_info']=$info;
            // 更新购物车未登录的uid
            file_put_contents('data.txt', json_encode( $_SESSION['user_info']));
            $this->model("cart")->updateCartNoLogin();
        }
        echo json_encode($info);
    }
    public function doLogin2(){
        $user_info = file_get_contents('data.txt');
        print_r($user_info);
    }
    public function reg(){//注册
        $this->display();
    }
    public function revise(){//修改密码
        $this->display();
    }
    public function logout(){//退出
        unset($_SESSION['user_info']);
        file_put_contents('data.txt', json_encode( $_SESSION['user_info']));
        header('location:../home/index');
    }
    public function logout2(){
        file_put_contents('data.txt', '');
    }
    //判断有没有登录
    public function ajaxCheck(){
        if(!empty($_SESSION['user_info'])){
            echo "true";
        } else{
            echo "false";
        }
    }
    public function user_home(){//个人中心
        $this->delimiter();
        $order_list =$this->model("order")->getOrder();
        $this->assign('order_list',json_encode($order_list) );

        $comment_list =$this->model("user")->getComment();
        $this->assign('comment_list',json_encode($comment_list) );
        $address_list=$this->model("order")->getAddress($order_list[0]['order_id']);
        $this->assign('address_list',json_encode($address_list));
        $this->display();
    }

    //评论
    public function doComment(){
        $comment_content = $_GET['comment_content'];
        $this->model("user")->addComment($comment_content);
    }

}



