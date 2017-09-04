<?php

// http://localhost/mvc/index.php?controller=users&action=view&q=1
// http://localhost/mvc/users/view/1.php

function custom_autoloader($class)
{
    $class = $class.'.php';
    $folders = ['Controller', 'Model', 'Template'];
    foreach ($folders as $fold)
    {
        $listDir = scandir($fold);
        if (in_array($class, $listDir))
        {
            require_once $fold . '/' .$class;
        }
    }
//   $class = $class.'.php';
//   if (file_exists($class)) require_once $class;
}

spl_autoload_register('custom_autoloader');

$controller = 'users';
$action = 'index';

if (!empty($_GET['controller'])) $controller = $_GET['controller'];
if (!empty($_GET['action'])) $action = $_GET['action'];


$controller = ucfirst($controller).'Controller';
$action = strtolower($action);

$query = NULL;
if (isset($_GET['q'])) $query = $_GET['q'];

$current_controller = new $controller();
$current_controller->$action($query);
