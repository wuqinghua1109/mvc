<?php
namespace app\ctrl;
use core\lib\model;
use app\model\ssModel;
class indexCtrl extends \core\imooc
{
	public function index(){
        header("content-type:text/html;charset=utf-8");
		// $data="Hello World";
		// $this->assign('data',$data);
		// $this->dispaly('index.html');
		$model=new ssModel();
		// $data=array(
  //           'u_id'=>55
		// 	);
		// $ret=$model->delOne(1);
		// dump($ret);
		/*查询 三个字段  1、表名  2、字段名 3、查询条件*/
		$data=$model->select('ss','*');
		$this->assign('data',$data);
		$this->dispaly('index.html');
		// dump($data);
       /*添加 两个字段名 1、表名 2、添加数据*/
  //      $sql=array(
  //       "u_id"=>5,
  //       "sum"=>1111
  //      	);
  //      $data=$model->insert('ss',$sql);
		// dump($data);

	}
	public function test(){
		$data='test';
		$this->assign('data',$data);
		$this->dispaly('test.html');
	}
	public function del(){
		$id=get('id');
		$model=new ssModel();
		$data=$model->delOne($id);
		// if($data){
  //           echo "yes";
		// }else{
		// 	echo "no";
		// }
		p($data);
	}
}

?>