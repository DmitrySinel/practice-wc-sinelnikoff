<?php
function my_autoloader($class) { 
  include $class . ".php"; 
}

spl_autoload_register("my_autoloader");

require_once './modul/Helpers.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', trim($uri, '/'));

$class = '\controllers\\';
$segmentLastCount = count($segments)-1;
foreach($segments as $key => $segment)
{
    if($key == $segmentLastCount) {    
        $class .= ucfirst($segment);
    } else {
        $class .= $segment . '\\';
    }
}

if($segments[$segmentLastCount] == '') {
    $class .= 'Index';
}
$class .= 'Controller';

if(file_exists('.' . $class . '.php')) {
    $obj = new $class();
    $obj->index();
} else {
    http_response_code(404);
    include './views/error.php';
}
