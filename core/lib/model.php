<?php
 namespace core\lib;
 use core\lib\conf;
 class model extends \medoo
 {
 	public function __construct()
 	{
      $database=conf::all('database');
      parent::__construct($database);
 	}
 }
?>