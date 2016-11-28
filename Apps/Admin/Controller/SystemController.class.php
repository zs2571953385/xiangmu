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

		if(IS_POST){
			$_POST['admin_name']=I("post.admin_name");
			$_POST['admin_pwd']=md5(I("post.admin_pwd"));
			$_POST['admin_addtime']=date("Y-m-d H:i:s");

			$admin=D('Admin')->insert($_POST);
			if($admin){
				$this->success("添加成功",U('System/addadmin'));
			}else{
				$this->error("添加失败");
			}
		}else{
			$this->display('System/addadmin');
		}

	}
	/*
	*管理员列表
	*/
	public function adminlist(){
		$list=D("Admin")->show();
		//var_dump($list);
		$this->assign('model',$list);
		$this->display('System/adminlist');
	}
	/*
	*添加菜单
	*/
	public function addmenu(){

	}

	//删除管理员列表
	public function del(){
		$id=I('get.id');
		$where="id=$id";
		$list=D("Admin")->del($where);
		//echo $list;
	}
}