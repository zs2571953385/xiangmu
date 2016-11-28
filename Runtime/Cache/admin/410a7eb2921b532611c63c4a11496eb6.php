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
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">  
  <a class="button border-yellow" href="<?php echo U('Menu/addmenu');?>"><span class="icon-plus-square-o"></span> 添加菜单</a>
  </div> 
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">ID</th>     
      <th>菜单名称</th>  
      <th>菜单状态</th>  
      <th>排序</th>     
      <th width="250">操作</th>
    </tr>
   <?php if(is_array($menu_data)): foreach($menu_data as $key=>$v): ?><!-- <foreach name="article_data" item="v"> -->
    <tr>
      <td><?php echo ($v["m_id"]); ?></td>      
      <td><?php echo ($v["m_name"]); ?></td>
      <?php if($v["m_status"] == 1): ?><td>显示</td><?php endif; ?>
      <?php if($v["m_status"] == 0): ?><td>隐藏</td><?php endif; ?>
      <td>1</td>      
      <td>
      <div class="button-group">
      <a type="button" class="button border-main" href="#"><span class="icon-edit"></span>修改</a>
       <a class="button border-red" href="javascript:void(0)" onclick="return del(17)"><span class="icon-trash-o"></span> 删除</a>
      </div>
      </td>
    </tr><?php endforeach; endif; ?>
    
  </table>
</div>
<script>
function del(id){
  if(confirm("您确定要删除吗?")){
    
  }
}
</script>

</body></html>