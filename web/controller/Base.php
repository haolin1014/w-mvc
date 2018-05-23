<?php
namespace web\controller;
use core\View;

class Base{
	protected $view;
	public function __construct(){
		$this->view = new View();
	}
}