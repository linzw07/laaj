<?php

class HomeController extends BaseController {
	protected $layout = "layouts.main";
 	public function __construct() {
    }
	public function showWelcome()
	{
		return View::make('hello');
	}
	public function getHome()
	{
		 $this->layout->content = View::make('index');
	}
}