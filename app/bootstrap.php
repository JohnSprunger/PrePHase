<?php
// Add configuration
require_once 'config/config.php';

// Load our autoloader
require_once '../vendor/autoload.php';

// Specify our Twig templates location
$loader = new Twig_Loader_Filesystem(__DIR__.'/views/pages');

// Instantiate our Twig
$twig = new Twig_Environment($loader);

spl_autoload_register(function ($class){

    // project-specific namespace prefix
    $prefix = 'PrePHase\\';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if(strncmp($prefix, $class, $len) !== 0){
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if(file_exists($file)){
        require $file;
    }
});