<?php

    session_start();

    

    $controller = isset($_GET['controller']) ? $_GET['controller'] : 'Home';

    $action = isset($_GET['action']) ? $_GET['action'] :'index';

    $controller = ucfirst($controller);
    $fileController = $controller . "Controller.php";
    
    $pathController = "./controllerAdmin/$fileController";
    
    if (!file_exists($pathController)) 
    {
        die("Trang bạn tìm không tồn tại");
        require_once('404.php');
    }
    require_once "$pathController";

    $classController = $controller."Controller";
    
    $object = new $classController();
    
    if (!method_exists($object, $action)) 
    {
        die("Phương thức $action không tồn tại trong class $classController");
        require_once('404.php');
    }
    $object->$action();
?>