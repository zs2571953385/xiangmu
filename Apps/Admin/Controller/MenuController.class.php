<?php
/*
*菜单管理板块
*@controller
*@auther itdi
*/
namespace admin\Controller;
use Think\Controller;
class MenuController extends Controller {
	/*
	*添加菜单
	*@param int 
	*/
	public function addmenu(){
		if(IS_POST){
			$data=I('post.');
		}else{
			// $this->redirect('Menu/addmenu');
			$this->display('Menu/addmenu');
		}
	}
	public function menulist(){
		$Menu=D('ArticleMenu');
		$menu_data=$Menu->sel_list();
			// $article_data=$Article->sel_list();
		$this->assign('menu_data',$menu_data);
		$this->display('Menu/menulist');
	}
}