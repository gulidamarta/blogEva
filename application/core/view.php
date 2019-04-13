<?php

class View
{
    public $page;
	//public $template_view; // здесь можно указать общий вид по умолчанию.
	function generate($content_view, $data = null)
	{
		/*
		if(is_array($data)) {
			// преобразуем элементы массива в переменные
			extract($data);
		}
		*/

		$this->page = file_get_contents('application/views/'.$content_view);
        //include ('application/views/'.$content_view);
		echo $this->page;
	}

	function  generate_template($content_view){
        include ('application/views/'.$content_view);
    }

}