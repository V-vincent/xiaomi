<?php
/* Smarty version 3.1.30, created on 2017-12-03 09:36:42
  from "D:\Web\wamp\wamp64\www\php\xiaomi_object\view\user\reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a23c5aaceeb97_04265025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49aeb57435886c51c117fff92a2d53ea432a80a3' => 
    array (
      0 => 'D:\\Web\\wamp\\wamp64\\www\\php\\xiaomi_object\\view\\user\\reg.html',
      1 => 1512293797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a23c5aaceeb97_04265025 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <style>
        .reg{
            width: 50%;
            height: 60%;
            background: #ffffff;
            margin: 100px auto;
            text-align: center;
        }
        body{
            background-color: #cccccc;
        }
        .reg input{
            width:50%;
            height: 22px;
            line-height: 22px;
            padding: 13px 16px 13px 14px;
            display: block;
            border: 1px solid #ccc;
            color: #000;
            margin: 15px auto;
        }
        .reg input.btn{
            width: 54%;
            height: 50px;
            line-height: 30px;
            display: block;
            margin-bottom: 14px;
            text-align: center;
            font-size: 14px;
            color: #fff;
            cursor: pointer;
            background: #f56600;
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="reg">
    <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/user/images/milogo.png" alt="">
    <h1>注册小米账号</h1>
    <form action="index.php?controler=user&action=doReg" method="POST">
        <input type="text" name="user" placeholder="邮箱/手机号码/小米ID">
        <input type="text" name="password" placeholder="密码">
        <input type="text" class="verify" name="verify_code" placeholder="请输入验证码">
        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/library/verify.php" alt="" class="verify_img"
             style="cursor: pointer;" id="img_verify" onclick="changing()">
        <input type="submit" value="注册" class="btn" id="btn">
    </form>
</div>
<?php echo '<script'; ?>
>
    var verify=document.getElementById('img_verify');
    function changing(){
        verify.src="../library/verify.php?"+Math.random()
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
