<?php
namespace app\ctrl;
class indexCtrl extends \core\imooc
{
	public function index(){
		$temp =new \core\lib\model();

		p($temp);
		$data='Hello World';
		$title='视图文件';
		$this->assign('title',$title);
		$this->assign('data',$data);
		$this->dispaly('index.html');
		

	}
}

?>