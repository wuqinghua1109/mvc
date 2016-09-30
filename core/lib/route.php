<?php
namespace core\lib;
use core\lib\conf;
class route
{
	public $ctrl;
	public $action;
   public function __construct(){
   	//xxx.com/index/index
    /**
     * 1、隐藏index.php
     * 2、获取url 参数部分
     * 3、返回对应控制器和方法
     */
    if(isset($_SERVER['REDIRECT_URL']) && $_SERVER['REDIRECT_URL'] !='/'){
        $path=$_SERVER['REDIRECT_URL'];
        $patharr=explode('/',trim($path,'/'));
        if(isset($patharr[1])){
            $this->ctrl=$patharr[1];

        }
        unset($patharr[0]);
        unset($patharr[1]);
        if(isset($patharr[2])){
            $this->action=$patharr[2];
            unset($patharr[2]);
        }else{
        	$this->action=conf::get('ACTION','route');
        }
    }else{
        $this->ctrl=conf::get('CTRL','route');
        $this->action=conf::get('ACTION','route');
    }
    // p($patharr);
    /**
     * url多余部分转换成 GET
     * id/1/str/2/test/3
     */
    $count=count($patharr)+2;
    $i=3;
    while($i<$count){
       if(isset($patharr[$i+1])){
         $_GET[$patharr[$i]] = $patharr[$i+1];
       }
       $i=$i+2;
    }
    // p($_GET);
    // p($_SERVER);
   }
}
?>