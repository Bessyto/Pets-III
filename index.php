<?php
/**
 * Created by PhpStorm.
 * User: Jen Shin
 * Date: 1/18/18
 * Time: 10:36 AM
 */
//require the autoload file
//Error reporting
ini_set('display_error' ,1);
error_reporting(E_ALL);

session_start();

require_once ('vendor/autoload.php');


//create an instance of Base class
$f3 = Base::instance();
$f3->set('colors', array('pink', 'green', 'blue'));


$f3->set('DEBUG', 3);



// Create a new route
$f3->route('GET|POST /new-pet', function($f3)
{

    if(isset($_POST['submit']))
    {
        $color = $_POST['pet-color'];
        $name = $_POST['petName'];
        $type = $_POST['petType'];

        include ('model/validate.php');

        $f3->set('color', $color);
        $f3->set('name', $name);
        $f3->set('type', $type);
        $f3->set('errors', $errors);
        $f3->set('success', $success);

    }


    //render to results
    $view = new Template();
    echo $view -> render('views/new-pet.html');


}
);

$f3->run();