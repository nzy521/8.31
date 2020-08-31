<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 01:04:43
  from 'F:\wampwamp\www\mvc\application\template\admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4afb2b78cb34_08994402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bab3e0e55369ba5f3a24aaabba71ac4a255a9b7e' => 
    array (
      0 => 'F:\\wampwamp\\www\\mvc\\application\\template\\admin\\login.html',
      1 => 1598259710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4afb2b78cb34_08994402 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/login.css">

    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
Jquery3.5.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin.js"><?php echo '</script'; ?>
>




</head>
<body>
<?php echo '<script'; ?>
>

    // var date=new Date();
    // var time=date.getTime()+1000*10;
    // date.setTime(time);
    //  document.cookie="age=zhangsan;expires="+date.toUTCString()+";domain=localhost;path=/";
     // document.cookie="name=lisi;"
// document.cookie="name=zhangsan";
<?php echo '</script'; ?>
>
<form class="form-horizontal" action="admin/index/login/" method="post" style="width: 640px;height: 360px">
    <h1>欢迎来到管理中心</h1>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="请输入用户名" name="uname">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="请输入密码" name="pass">
        </div>
    </div>

    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="code" placeholder="请输入验证码" name="code">
            <img src="http://localhost/mvc/index.php/admin/index/mycode" alt="" onclick="this.src='http://localhost/mvc/index.php/admin/index/mycode?'+Math.random()" style="cursor: pointer;height:30px;margin: 10px 0 0">
        </div>
    </div>



    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> 记住密码
                </label>
            </div>
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">登录</button>
            &nbsp;&nbsp;没有账号?请
            <a href="admin/reg/add" class="btn btn-default">注册</a>
        </div>
    </div>

</form>
</body>
</html>


<?php }
}
