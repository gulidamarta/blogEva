<?php

class Controller_Registration extends Controller
{
	function action_index()
	{
		$this->view->generate('Registration_view.phtml');
		$this->database->send_data();
	}
}