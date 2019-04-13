<?php

class Controller_Post2 extends Controller
{
	public function action_index()
	{
		$this->view->generate('Post2_view.php');
	}
}