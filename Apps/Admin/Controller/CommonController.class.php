<?php
namespace admin\Controller;
use Think\Controller;
class CommonController extends Controller{
 public function _initialize() {
//parent::__Construct();
	if(!session('admin_name')){
			$this->error("您还未登录 请先登录",U('Login/login'));
		}
	}
}
