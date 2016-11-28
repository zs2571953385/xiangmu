<?php
namespace admin\Controller;
use Think\Controller;
class SystemController extends Controller {
	/*
	*首页轮播
	*
	*/
	public function adv(){
		$this->display('System/adv');
	}
	/*
	*后台账户密码修改
	*@param
	*/
	public function pass(){
		$this->display('System/pass');
	} 
	/*
	*添加管理员
	*/
	public function addadmin(){
		$this->display('System/addadmin');
	}
	/*
	*管理员列表
	*/
	public function adminlist(){
		$this->display('System/adminlist');
	}
	/*
	*添加菜单
	*/
	public function addmenu(){

	}
}