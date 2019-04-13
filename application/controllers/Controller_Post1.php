<?php

class Controller_Post1 extends Controller
{
	
	function action_index()
	{
		$this->view->generate('Post1_view.php');
	}
}