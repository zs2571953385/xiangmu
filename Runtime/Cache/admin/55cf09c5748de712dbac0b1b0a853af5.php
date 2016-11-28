<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<title></title>
    <!-- 公共头部分 -->
    <link rel="stylesheet" href="/xiangmu/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/xiangmu/Public/Admin/css/admin.css">
    <script src="/xiangmu/Public/Admin/js/jquery.js"></script>   
    <script src="/xiangmu/Public/Admin/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加管理员</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/xiangmu/admin.php/System/addadmin">  
      <div class="form-group">
        <div class="label">
          <label>管理员账户：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="admin_name" data-validate="required:请添加管理员账户" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>管理员密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" value="" name="admin_pwd" data-validate="required:请输入管理员密码" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>