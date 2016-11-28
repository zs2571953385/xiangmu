<?php
namespace admin\Controller;
use Think\Controller;
class BookController extends Controller {
	/*
	*留言列表
	*
	*/
    public function index(){
        $this->display('Book/book');   
	}
	/*
	*留言删除
	*@param 
	*/
	public function del(){
		$this->display('Book/del');
	}
}