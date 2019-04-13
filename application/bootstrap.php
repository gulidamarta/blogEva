<?php
    spl_autoload_register(
        function ($class_name){
            require_once "application/".strtolower(str_replace("\\", "/", $class_name)).'.php';
        }
    );

    const CACHE_TIME = 3000; // time of the living cache in seconds
    const CASHING = true; // cashing is ON, if you entered false cashing will be OFF

    require_once 'core/model.php';
    require_once 'core/view.php';
    require_once 'core/controller.php';
    require_once 'core/route.php';
    require_once 'core/cache.php';
    require_once 'core/database.php';
    Route::start(); // запускаем маршрутизатор