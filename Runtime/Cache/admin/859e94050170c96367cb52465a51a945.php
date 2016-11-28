<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <!-- 公共头部分 -->
    <link rel="stylesheet" href="/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Public/Admin/css/admin.css">
    <script src="/Public/Admin/js/jquery.js"></script>   
    <script src="/Public/Admin/js/pintuer.js"></script>
    <!-- <link rel="stylesheet" href="/Public/Admin/css/pintuer.css"> -->
    <!-- <link rel="stylesheet" href="/Public/Admin/css/admin.css"> -->
    <!-- <script src="/Public/Admin/js/jquery.js"></script>   -->
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">

  <div class="logo margin-big-left fadein-top">
    <h1><img src="/Public/Admin/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  
                
  <div class="head-l"><a class="button button-little bg-green" href="" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="<?php echo U('Login/loginout');?>"><span class="icon-power-off"></span> 退出登录</a>
   </div>
   
    <br>
    <font color="orange" style="center;padding-top:303px;font:15px Arial,SimSun,sans-serif;">管理员:<b><?php echo (session('admin_name')); ?></b> 您好，感谢登陆使用！</font><br>

  
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-pencil-square-o"></span>文章管理</h2>
  <ul style="display:block">
    <li><a href="<?php echo U('Article/index');?>" target="right"><span class="icon-caret-right"></span>文章列表</a></li>
  </ul>  
  <h2><span class="icon-pencil-square-o"></span>留言管理</h2>
  <ul>
    <li><a href="<?php echo U('Book/index');?>" target="right"><span class="icon-caret-right"></span>留言列表</a></li> 
  </ul>
  <h2><span class="icon-pencil-square-o"></span>轮播管理</h2>
  <ul>
    <li><a href="<?php echo U('System/adv');?>" target="right"><span class="icon-caret-right"></span>首页轮播</a></li> 
  </ul>
  <h2><span class="icon-pencil-square-o"></span>用户管理</h2>
  <ul>
    <li><a href="<?php echo U('System/adminlist');?>" target="right"><span class="icon-caret-right"></span>管理员列表</a></li> 
  </ul>
  <h2><span class="icon-pencil-square-o"></span>菜单管理</h2>
  <ul>
    <li><a href="<?php echo U('Menu/menulist');?>" target="right"><span class="icon-caret-right"></span>菜单列表</a></li> 
  </ul>
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
    $(this).next().slideToggle(200);  
    $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
      $("#a_leader_txt").text($(this).text());
      $(".leftnav ul li a").removeClass("on");
    $(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <!-- <li><a href="<?php echo U('Index/info');?>" target="right" class="icon-home"> 首页</a></li> -->
  <li><a href="<?php echo U('Article/index');?>" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">文章列表</a></li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="<?php echo U('Article/index');?>" name="right" width="100%" height="100%"></iframe>
</div>
<div style="text-align:center;">
<p>来源:<a href="http://www.aspku.com/" target="_blank">源码之家</a></p>
</div>
</body>
</html>