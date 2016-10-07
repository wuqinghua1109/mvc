<?php
namespace app\model;
use core\lib\model;

class ssModel extends model
{
	public $table='ss';
	//查询
	public function lists(){
		$ret =$this->select($this->table,'*');
		return $ret;
	}
	//查询一条
	public function getOne($id){
       $ret=$this->get($this->table,'*',array(
       's_id'=>$id
       	));
       return $ret;
	}
	//修改一条
	public function setOne($id,$data){
      $ret=$this->update($this->table,$data,array(
        's_id'=>$id
      	));
      return $ret;
	}
	//delOne
	public function delOne($id){
     $ret=$this->delete($this->table,array(
        's_id'=>$id
     	));
	}
}
?>