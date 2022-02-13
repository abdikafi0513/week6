<?php
//Turn on error reporting
ob_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');
require('model/data_layer.php');



//Create an instance of the Base class
$f3 = Base::instance();





    $f3->route('GET /', function ($f3) {

        //save variables to the F3 "hive"
        $f3->set('username', 'jshmo');
        $f3->set('password', sha1('Password01'));
        $f3->set('title', 'Working with Templates');
        $f3->set('temp', 67);
        $f3->set('color', 'my favorite color is purpl');
        $fruits=array('apple', 'orange','banana');
        $f3->set('fruits', $fruits);

        $f3-> set('cities',getcities());
        $f3->set('colors', getcolors());



        //display a template
        $template = new Template();
        echo $template->render('views/info.html');

        //alternate syntax
        echo Template::instance()->render('views/info.html');
    });
//Run fat free
$f3->run();
