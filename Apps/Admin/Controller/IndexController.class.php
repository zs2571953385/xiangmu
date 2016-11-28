<?php
namespace admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	/*
	*后台首页 
	*/

	public function _initialize(){
     //parent::__construct();
	if(!session('admin_name')){
			$this->error('您还为登录 请先登录',U('Login/login'));
	}
	}
    public function index(){
        $this->display('Index/index');   
	}
	/*
	*
	*/
}