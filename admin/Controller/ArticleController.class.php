<?php
namespace admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
	/*
	*文章列表
	*
	*/
    public function index(){
        $this->display('Article/list');   
	}
	/*
	*删除文章
	*@param
	*/
	public function del(){
		// $this->display('Article/add');
	}
	/*
	*文章编辑
	*@param 
	*/
	public function cateedit(){
		$this->display('Article/cateedit');
	}
}