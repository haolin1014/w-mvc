<?php
namespace core;
class Bootstrap{
	public static function run(){
		self::parseUrl();
	}
	public static function parseUrl(){
		if(isset($_GET['s'])){
			$info = explode('/', $_GET['s']);
			$class = '\web\controller\\'.ucfirst($info[0]);
			if(isset($info[1])){
				$action = $info[1];
			}else{
				$action = "index";
			}
		}else{
			$class = '\web\controller\Index';
			$action = "index";
		}
		echo (new $class)->$action();
	}
}