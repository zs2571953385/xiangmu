<?php
/*
*文章管理板块
*@controller
*@auther itdi
*/
namespace admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
	/*
	*文章列表  00000
	*
	*/
    public function index(){
    	$Article=D('Article');
    	$article_data=$Article->sel_list();
    	// var_dump($article_data);die;
    	$this->assign('article_data',$article_data);
        $this->display('Article/list');  
	}
	/*
	*删除文章
	*@param
	*/
	public function del(){
		$id=I('get.id');
		// echo $id;
		$Article=D('Article');
		$res=$Article->del($id);
		if($res){
            $this->redirect('Article/index');
        }else{
            $this->error('删除失败');
        }
	}
	/*
	*文章编辑
	*@param 
	*/
	public function cateedit(){
		$this->display('Article/cateedit');
	}
}