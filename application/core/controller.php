<?php

class Controller {
	
	public $model;
	public $view;
	public $cache;
	public $database;

	function __construct()
	{
		$this->view = new View();
		$this->cache = new Cache();
		$this->model = new Model();
		$this->database = new DataBase();
	}
	
//  function action_index()
//	{
//        $this->view->generate($this->view);
//	}
}