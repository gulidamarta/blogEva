<?php

class Cache
{
    public function get_cache($controller, $action, $cache_name){
        $cache_file = "application/cache/".$cache_name.".html"; // Файл будет находиться, например, в /cache/a.php.html

        // Если файл с кэшем существует
        if ($cache_name != 'MainPage' && $_SERVER['REQUEST_METHOD'] == 'GET' &&
            (CASHING && file_exists($cache_file)) && (time() - CACHE_TIME) < filemtime($cache_file)) {
            // Если его время жизни ещё не прошло
            echo file_get_contents($cache_file); // Выводим содержимое файла
            //exit; // Завершаем скрипт, чтобы сэкономить время на дальнейшей обработке
        }
        else{
            $controller->$action();
            $this->set_cache($controller, $cache_name);
        }
        ob_start(); // Открываем буфер для вывода, если кэша нет, или он устарел
    }

    public function set_cache($controller, $cache_name){
        $cache_file = "application/cache/".$cache_name.".html"; // Файл будет находиться, например, в /cache/a.php.html
        file_put_contents($cache_file, $controller->view->page);
    }
}