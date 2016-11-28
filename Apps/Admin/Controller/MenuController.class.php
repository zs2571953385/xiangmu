<?php
namespace admin\Controller;
use Think\Controller;
class MenuController extends Controller {
	/*
	*添加菜单
	*/
	public function addmenu(){

	}
	public function menulist(){
		$this->display('Menu/menulist');
	}
}