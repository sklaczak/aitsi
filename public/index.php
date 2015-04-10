<?php

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
/*defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'development'));
*/

defined('SERVER_PHOTO')
    || define('SERVER_PHOTO','http://zebra-buty.pl/images/buty/big/');

if ($_SERVER['HTTP_HOST'] == 'production') {
    define('APPLICATION_ENV', 'production');
} else {
    define('APPLICATION_ENV', 'development');
}

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));

/** Zend_Application */
require_once 'Zend/Application.php';

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);

function dumpe($dumpe,$var_dump=false, $noDie=false) {
    if ($var_dump) {
        echo '<pre>'.var_dump($dumpe).'</pre>';
    } else {
        echo '<pre>'.print_r($dumpe,1).'</pre>';
    }
    if (!$noDie) {
        die();
    }
}

$application->bootstrap()
            ->run();