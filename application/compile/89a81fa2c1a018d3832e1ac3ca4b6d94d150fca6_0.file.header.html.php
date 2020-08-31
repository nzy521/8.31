<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 13:52:03
  from 'F:\wampwamp\www\mvc\application\template\index\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4baf03bbbcc1_82147683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89a81fa2c1a018d3832e1ac3ca4b6d94d150fca6' => 
    array (
      0 => 'F:\\wampwamp\\www\\mvc\\application\\template\\index\\header.html',
      1 => 1598795523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4baf03bbbcc1_82147683 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/index.css">
</head>
<body>
<div class="header">
    <div class="logo">
        <img src="http://www.bairconst.com/style/images/logo.png" alt="">
    </div>
    <style>
        .dh span {
            display: block;
            text-align: right;
            background: url(http://www.bairconst.com/style/images/dh.png) no-repeat left center;
            width: 290px;
            float: right;
        }
    </style>
    <div class="fr dh">
        <span>021-64356299 15601850919</span>
    </div>

    <ul class="menu">
        <li>
            <a href="<?php echo ENTRY_ADD;?>
">首页</a>
        </li>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <li>
            <a href="<?php echo ENTRY_ADD;?>
/index/category?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a>
            <?php if ((isset($_smarty_tpl->tpl_vars['v']->value["child"]))) {?>
            <ul class="son">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["child"], 'v1');
$_smarty_tpl->tpl_vars['v1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->do_else = false;
?>
                <li>
                    <a href="<?php echo ENTRY_ADD;?>
/index/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v1']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v1']->value["cname"];?>
</a>
                </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <?php }?>
        </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>

<div class="wheel">
    <img src="http://www.bairconst.com/d/file/content/2018/02/5a8f86787597c.jpg" alt="" style="height: 495px">
</div>
</body>
</html><?php }
}
