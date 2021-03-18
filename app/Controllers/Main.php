<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
		return $this->main();
	}

	public function main()
	{
		$view = view("main/main");
		return $view;
	}

}