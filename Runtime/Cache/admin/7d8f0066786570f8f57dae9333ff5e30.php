<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>  
    <!-- 公共头部分 -->
    <link rel="stylesheet" href="/xiangmu/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/xiangmu/Public/Admin/css/admin.css">
    <script src="/xiangmu/Public/Admin/js/jquery.js"></script>   
    <script src="/xiangmu/Public/Admin/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder">添加菜单</strong></div>
  <div class="padding border-bottom">  
  <a class="button border-yellow" href="<?php echo U('Menu/menulist');?>"><span class="icon-plus-square-o"></span>菜单列表</a>
  </div> 
</div>
<script>
function del(id){
  if(confirm("您确定要删除吗?")){
    
  }
}
</script>
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加菜单</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo U('Menu/addmenu');?>">   
      <input type="hidden" name="id"  value="" />  
      <div class="form-group">
        <div class="label">
          <label>菜单名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="m_name" value="" data-validate="required:请输入菜单名称" />         
          <div class="tips"></div>
        </div>
      </div> 
      <!-- <div class="form-group">
        <div class="label">
          <label>栏目图片：</label>
        </div>
        <div class="field">
          <input type="text" id="url1" name="banner" class="input tips" style="width:25%; float:left;"  value="" data-toggle="hover" data-place="right" data-image="" />
          <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
          <div class="tipss">图片尺寸：1920*200</div>
        </div>
      </div> -->
       <div class="form-group">
        <div class="label">
          <label>跳转控制器：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="m_url" value="" />         
          <div class="tips"></div>
        </div>
      </div>       
    
     <div class="form-group">
        <div class="label">
          <label>显示：</label>
        </div>
        <div class="field">
          <div class="button-group radio">
          
          <label class="button active">
            <span class="icon icon-check"></span>             
              <input name="m_status" value="1" type="radio" checked="checked">是             
          </label>             
        
          <label class="button active"><span class="icon icon-times"></span>            
              <input name="m_status" value="0"  type="radio" checked="checked">否
          </label>         
           </div>       
        </div>
     </div>
      <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="m_sort" value="0"  data-validate="required:,number:排序必须为数字" />
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