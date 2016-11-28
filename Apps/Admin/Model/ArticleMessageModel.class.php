<?php
/*
*文章评论板块
*@author itdi
*@Model
*/
namespace Admin\Model;
use Think\Model;
class ArticleMessageModel extends Model {
  	protected $table_name = 'article_message';
	  /*
	  *文章评论列表
	  *@access public 
	  *@return array
	  */
  	public function sel_list(){
  		return $this->Table($this->table_name)
  			->join('article ON article.id=article_message.article_id')
  			->join('article_user AS user ON article_message.login_id=user.id')
  			->select();
 	}
 	/*
 	*@param book_id 评论id
 	*return true
 	*/
 	public function del($id){
  		return $this->Table($this->table_name)->where(array('book_id'=>$id))->delete();
 	}
 	
}