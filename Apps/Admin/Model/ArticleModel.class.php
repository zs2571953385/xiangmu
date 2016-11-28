<?php
/*
*文章板块
*@author itdi
*@Model
*/
namespace Admin\Model;
use Think\Model;
class ArticleModel extends Model {
  	protected $table_name = 'article';
	  /*
	  *文章列表
	  *@access public 
	  *@return array
	  */
  	public function sel_list(){
  		return $this->Table($this->table_name)
  			->join('article_user AS user ON user.id=article.art_user_id')
  			->select();
 	}
 	/*
 	*删除文章
 	*@param id 文章id
 	*@return true
 	*/
 	public function del($id){
  		return $this->Table($this->table_name)->where(array('id'=>$id))->delete();
 	}
 	 
}