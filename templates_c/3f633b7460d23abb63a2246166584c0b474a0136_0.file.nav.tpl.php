<?php
/* Smarty version 3.1.30, created on 2017-11-25 06:05:40
  from "D:\10602\kukey\UniServerZ\www\REPORTER\templates\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a190834222f75_40116226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f633b7460d23abb63a2246166584c0b474a0136' => 
    array (
      0 => 'D:\\10602\\kukey\\UniServerZ\\www\\REPORTER\\templates\\nav.tpl',
      1 => 1510990412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a190834222f75_40116226 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-expand-md navbar-dark sticky-top bg-primary py-0">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">
        <img alt="Brand" src="images/logo.png" class="img-fluid">
    </a>

    <div class="collapse navbar-collapse" id="menu">
        <div class="navbar-nav mr-auto">
            <a href="index.php" class="nav-link text-white">首頁</a>
            <a href="index.php" class="nav-link text-white">編輯精選</a>
            <a href="index.php" class="nav-link text-white">街巷故事</a>
            <a href="index.php" class="nav-link text-white">市井觀點</a>
            <a href="index.php" class="nav-link text-white">私房知識塾</a> 
        </div>
        <div class="navbar-nav">
            <?php if (isset($_SESSION['username'])) {?>
                <a href="admin.php?op=article_form" class="nav-link text-white">發布</a>
                <a href="logout.php" class="nav-link text-white">登出</a> 
            <?php } else { ?>
                <a href="signup.php" class="nav-link text-white">註冊</a>
                <a href="main_login.php" class="nav-link text-white">登入</a> 
            <?php }?>
        </div>
    </div>
</nav>


<!-- <ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="index.php">首頁</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="gallery.php">圖集</a>
    </li>
    
    <?php if (isset($_SESSION['username'])) {?>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">後台管理</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="admin.php">文章管理</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="admin.php?op=article_form">發佈文章</a>
                <a class="dropdown-item" href="#">Something else here</a>

                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">登出</a>
        </li>
    <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link" href="signup.php">註冊</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="main_login.php">登入</a>
        </li>
    <?php }?>

</ul> --><?php }
}
