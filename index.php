<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)).DS);
define('APP_PATH',ROOT.'applications'.DS);
function chargeClass($class)
{
    if(is_readable(APP_PATH.$class.'.php'))
    {
        require_once APP_PATH.$class.'.php';
    }
         
}
spl_autoload_register('chargeClass');
try{
new bootstrap(new request());
}
catch(Exception $e)
{
    echo $e->getMessage();
}
?>
