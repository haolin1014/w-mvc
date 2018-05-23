<?php
namespace web\controller;
use core\View;
use Gregwar\Captcha\CaptchaBuilder;
class Index extends Base{
	public function index(){
		echo 'this is index';
	}
	public function show(){
		$this->view->make('index')->with('name','wanghaolin');
		$arr = [1,2,4,5,6];
		return $this->view->with('num',$arr);
	}
	public function code(){
		$builder = new CaptchaBuilder;
		$builder->build();
		$_SESSION['code'] = $builder->getPhrase();
		header('Content-type: image/jpeg');
		$builder->output();
	}
	public function session(){
		dd($_SESSION);
	}
}