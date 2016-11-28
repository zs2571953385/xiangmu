<?php
/*
*菜单板块管理
*@author itdi
*@Model 
*/
namespace Admin\Model;
use Think\Model;
class ArticleMenuModel extends Model {
  /*
  *数据库表
  */	
  protected $table_name = 'article_menu';
	  /*
	  *菜单列表
	  *@access public 
	  *@return array
	  */
  public function sel_list(){
  		return $this->Table($this->table_name)->select();
 	}
 	/*
 	*@param book_id 菜单id
 	*return true
 	*/
 	public function del($id){
  		return $this->Table($this->table_name)->where(array('menu_id'=>$id))->delete();
 	}
 	
}