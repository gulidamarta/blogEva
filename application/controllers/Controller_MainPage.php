<?php

class Controller_MainPage extends Controller
{
	function action_index()
	{
		//$this->view->generate('MainPage_view.php');
       // $this->view->generate_template('MainPage_view.php');
        include ('application/views/MainPage_view.php');
        //parent::action_index();
	}
}