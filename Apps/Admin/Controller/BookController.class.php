<?php
/*
*文章留言管理板块
*@controller
*@auther itdi
*/
namespace admin\Controller;
use Think\Controller;
use \Admin\Model;

class BookController extends Controller {
	/*
	*留言列表
	*
	*/
    public function index(){
    	$Book=D('ArticleMessage');
    	$book_data=$Book->sel_list();
    	// var_dump($book_data);die;
    	$this->assign('book_data',$book_data);
        $this->display('Book/book');   
	}
	/*
	*留言删除
	*@param 
	*/
	public function del(){
		$id=I('get.id');
		// echo $id;
		$Article=D('ArticleMessage');
		$res=$Article->del($id);
		if($res){
            $this->redirect('Book/index');
        }else{
            $this->error('删除失败');
        }
		// $this->display('Book/del');
	}
}