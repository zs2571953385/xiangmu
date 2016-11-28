<?php
namespace admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	/*
	*登录页面 
	*/
    public function login(){
        $this->display('login');   
	}

	/*
		验证码
	 */
	function code(){
		$Verify = new \Think\Verify();
		$Verify->length   = 4;
		$Verify->useNoise = false;
		$Verify->useCurve = false;
		$Verify->entry();                                                                          
	}

	/*
		验证用户
	 */
	public function loginok(){
<<<<<<< HEAD
		$admin_name = $_POST['admin_name'];
		$admin_pwd = $_POST['admin_pwd'];
		$code = $_POST['code'];
		$admin_addtime =  date('H-m-d h:i:s',time());
		//var_dump($admin_addtime);die;
		$Admin = M('admin');
		$arr=$Admin->where("admin_name='$admin_name'")->find();
=======
		// $admin_name = $_POST['admin_name'];
		// $admin_pwd = $_POST['admin_pwd'];
		// $code = $_POST['code'];
		$data = I('post.');
		
		mysql_real_escape_string($data); //防止sql注入
		//var_dump($data);die;
		$admin_addtime =  date('H-m-d h:i:s',time());	
		$Admin = M('article_admin');
		//$arr = $Admin->find();
		$arr = $Admin->where(array('admin_name'=>$data['admin_name']))->find();
>>>>>>> 7a1ae4c71e6474bf00522da70cdf316281f1eda8
		//var_dump($arr);die;

		 $verify = new \Think\Verify();
		 if(!$verify->check($data['code'])){
		 	$this->error('验证码有误',U('login'));		
		 }
		if($arr){
			if($data['admin_pwd'] == $arr['admin_pwd']){
				session_start();
				session('u_id',$arr['u_id']);
				session('admin_name',$data['admin_name']);
				session('admin_addtime',$data['admin_addtime']); //登录时间
				
				//echo $_SESSION['admin_name'];die; 

				$this->success('登录成功',U('Index/index'));
			}else{
				echo "密码错误 请重新输入";
			}
			
		}else{
			$this->error('用户名不存在 请重新输入',U('login'));
		}

	}
	
   	/*
  	 退出页面
    */
	public function loginout(){
	session(null); 
    $this->redirect('Login/login');
	}

	/*
		管理员注册
	 */
	public function add(){
		$this->display('add');
	}

	public function addok(){
		$data = I('post.');
		$admin_name = $_POST['admin_name'];
		$admin_pwd  = md5($_POST['admin_pwd']); ;   //接收注册数据

		$admin = D('admin');
		$arr   = $admin->where("admin_name='$admin_name'")->select();
		//var_dump($arr);die;
		if($arr){
			$this->error("用户名已经存在 请重新输入");  //验证唯一
		}
		$arr1 = $admin->add($data);
		if($arr1){
			$this->success("注册成功 请前往登录",U('Login/login'));
		}else{
			$this->error("注册失败");
		}

	}
	

}