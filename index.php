<?php
//Turn on error reporting
ob_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
var_dump($_SESSION);
//Require the autoload file
require_once('vendor/autoload.php');



//Create an instance of the Base class
$f3 = Base::instance();


//Define a default route
$f3->route('GET /', function() {
    //echo '<h1>My diner!</h1>';
    $view = new Template();
    echo $view->render('views/info.html');


}
);