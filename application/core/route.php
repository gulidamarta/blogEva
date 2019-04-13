<?php

class Route
{
	public static function start()
	{
		// контроллер и действие по умолчанию
		$controller_name = 'MainPage';
		$action_name = 'index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		// получаем имя контроллера
		if ( !empty($routes[2]) )
		{	
			$controller_name = $routes[2];
		}
		
		// получаем имя экшена
		if ( !empty($routes[3]) )
		{
			$action_name = $routes[3];
		}

		// добавляем префиксы

		$cache_name = $controller_name;

		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		$action_name = 'action_'.$action_name;

		// подцепляем файл с классом модели (файла модели может и не быть)

		$model_file = strtolower($model_name).'.php';
		$model_path = "application/models/".$model_file;
		if (file_exists($model_path))
		{
			include "application/models/".$model_file;
		}

		// подцепляем файл с классом контроллера
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "application/controllers/".$controller_file;
		if (file_exists($controller_path))
		{
			include "application/controllers/".$controller_file;
		}
		else
		{
			//правильно было бы кинуть здесь исключение,
			Route::ErrorPage404();
		}
		
		// создаем контроллер
		
		$controller = new $controller_name;
		
		$action = $action_name;
		// md5 sha1
		if(method_exists($controller, $action))
		{
			// вызываем действие контроллера
			//ob_start();
			//$controller->$action();
            $controller->cache->get_cache($controller, $action, $cache_name);
			//$content = ob_get_clean();
			//echo $content;
			//spl_autoload();
		}
		else
		{
			// здесь также разумнее было бы кинуть исключение
			Route::ErrorPage404();
		}
	}
	
	
	public static function ErrorPage404()
	{
  	  $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
    	header('HTTP/1.1 404 Not Found');
			header("Status: 404 Not Found");
			header('Location:'.$host.'404');
			
	}
	
}