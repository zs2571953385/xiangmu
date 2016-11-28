<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>  
    <!-- 公共头部分 -->
    <link rel="stylesheet" href="/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Public/Admin/css/admin.css">
    <script src="/Public/Admin/js/jquery.js"></script>   
    <script src="/Public/Admin/js/pintuer.js"></script>
</head>
<body>
<form method="post" action="">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 留言管理</strong></div>
    <div class="padding border-bottom">
      <ul class="search">
        <li>
          <button type="button"  class="button border-green" id="checkall"><span class="icon-check"></span> 全选</button>
          <button type="submit" class="button border-red"><span class="icon-trash-o"></span> 批量删除</button>
        </li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="120">ID</th>
        <th>文章</th>
        <th>姓名</th>     
        <th>邮箱</th>
        <th width="25%">内容</th>
         <th width="120">留言时间</th>
        <th>操作</th>       
      </tr>      
      <?php if(is_array($book_data)): foreach($book_data as $key=>$v): ?><tr>
          <td><input type="checkbox" name="id[]" value="<?php echo ($v["book_id"]); ?>" /><?php echo ($v["book_id"]); ?></td>
          <td><?php echo ($v["art_name"]); ?></td>
          <td><?php echo ($v["name"]); ?></td>
          <td><?php echo ($v["email"]); ?></td>         
          <td><?php echo ($v["m_content"]); ?></td>
          <td><?php echo ($v["m_addtime"]); ?></td>
          <td><div class="button-group"> <a class="button border-red" href="/admin.php/Book/del?id=<?php echo ($v["book_id"]); ?>" onclick="return del(1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr><?php endforeach; endif; ?>
        
      <tr>
        <td colspan="8"><div class="pagelist"> <a href="">上一页</a> <span class="current">1</span><a href="">2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a> </div></td>
      </tr>
    </table>
  </div>
</form>
<script type="text/javascript">

function del(id){
  if(confirm("您确定要删除吗?")){
    
  }
}

$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
    if (this.checked) {
      this.checked = false;
    }
    else {
      this.checked = true;
    }
  });
})

function DelSelect(){
  var Checkbox=false;
   $("input[name='id[]']").each(function(){
    if (this.checked==true) {   
    Checkbox=true;  
    }
  });
  if (Checkbox){
    var t=confirm("您确认要删除选中的内容吗？");
    if (t==false) return false;     
  }
  else{
    alert("请选择您要删除的内容!");
    return false;
  }
}

</script>
</body></html>