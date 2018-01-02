<?php
/* Smarty version 3.1.30, created on 2017-12-04 02:49:52
  from "D:\Web\wamp\wamp64\www\php\xiaomi_object\view\user\revise.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a24b7d0687a38_01756188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a109cba49e34a1b5fc59b52251593654ed995f4' => 
    array (
      0 => 'D:\\Web\\wamp\\wamp64\\www\\php\\xiaomi_object\\view\\user\\revise.html',
      1 => 1512007244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a24b7d0687a38_01756188 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>重置密码</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/user/css/revise.css">
</head>
<body>
<div class="revise">
    <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['site_url'];?>
/public/static/user/images/milogo.png" alt="">
    <h1>重置密码</h1>
    <form action="index.php?controler=user&action=doRevise" method="POST">
        <input type="text" name="user" placeholder="邮箱/手机号码/小米ID" id="login-username">
        <input type="text" name="password" placeholder="原始密码" id="login-pwd">
        <input type="text" name="newpassword" placeholder="修改密码">
        <input type="text" name="newpassword2" placeholder="确认密码">
        <input type="submit" value="修改" class="btn" id="do-login-button">
    </form>
</div>
</body>
</html><?php }
}
