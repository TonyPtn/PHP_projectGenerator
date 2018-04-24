<?php
/**
 * User: tonypiton
 *
 * Description : Class autoloading file
 */

/**
 * @param string $class /Class name
 */
function __autoload_tools($class)
{
    if(file_exists(_TOOLS_ . $class . ".php"))
    {
        include_once _TOOLS_ . $class . ".php";
    }
}

/**
 * @param string $class /Class name
 */
function __autoload_classes($class)
{
    if(file_exists(_CLASSES_ . $class . ".php"))
    {
        include_once _CLASSES_ . $class . ".php";
    }
}


spl_autoload_register("__autoload_tools");
spl_autoload_register("__autoload_classes");
