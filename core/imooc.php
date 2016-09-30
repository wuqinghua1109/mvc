<?php
   namespace core;
   class imooc
   {
   	  public static $classMap=array();
   	  public $assign;
   	  static public function run()
   	  {
   	  	\core\lib\log::init();
   	  	\core\lib\log::log('test');
   	  	$route = new \core\lib\route();
   	  	$ctrlClass=$route->ctrl;
   	  	$action=$route->action;
   	  	// p($action);exit();
   	  	$ctrlfile=APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
   	  	$cltrClass='\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
   	  	// p($ctrlfile);EXIT();
   	  	if(is_file($ctrlfile)){
         include $ctrlfile;
         $ctrl=new $cltrClass();
         $ctrl->$action();
         \core\lib\log::log('ctrl:'.$ctrlClass.'       '.'action:'.$action);
   	  	}else{
   	  		throw new \Exception('找不到控制器'.$ctrlClass);
   	  	}
   	  	// p($route);
   	  }
   
   static public function load($class){
   	 //自动加载类库
   	 //new \core\route();
   	 /*$class='\core\route';
       IMOOC.'/core/route.php';
   	 */
   	  // p($class);
   	  // p(IMOOC . $class . '.php');
   	  if(isset($classMap[$class])){
       return true;
   	  }else{
	   	$class=str_replace('\\','/', $class);
	   	$file=IMOOC .'/'. $class.'.php';
	   	if(is_file($file)){
	      include $file;
	      self::$classMap[$class] = $class;
	   	}else{
	      return false;
	   	}
	   }
   }
   public function assign($name,$value){
     $this->assign[$name]=$value;
   }

   public function dispaly($file){
     $file = APP.'/views/'.$file;
     // p($file);exit();
     if(is_file($file)){
     	extract($this->assign);
     	include $file;
     }
   }
 }
?>