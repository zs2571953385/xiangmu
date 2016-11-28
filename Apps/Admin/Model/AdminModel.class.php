<?php 
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model {
  //定义表名
  protected $table='admin';

  public function insert($data){
    return M($this->table)->add($data);
  }
  // //展示
  public function show(){
    return M($this->table)->select();
  }
  //删除
  public function del($where){
    return M($this->table)->where($where)->delete(); 

  }
}

 ?>