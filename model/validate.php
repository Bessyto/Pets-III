<?php
/**
 * Created by PhpStorm.
 * User: PCC
 * Date: 1/26/2018
 * Time: 11:01 AM
 */

//Validate a color
//@param String color
//@return boolean

//Error reporting
ini_set('display_error' ,1);
error_reporting(E_ALL);

function validColor($color)
{
    global $f3;
    return in_array($color, $f3->get('colors'));
}

function validString($stringValue)
{
    if(!empty($stringValue) && ctype_alpha($stringValue))
    {
        return true;
    }
    return false;
}

// define an empty array called $errors
$errors = array();

// invokes the functions, and if there are errors, adds a String message to the errors array
if (!validColor($color))
{
    $errors['color'] = "Please enter a valid color";
}

if (!validString($name))
{
    $errors['name'] = "Please enter a valid name";
}

if (!validString($type))
{
    $errors['type'] = "Please enter a valid type";
}



// Initialize a $success variable, true if $errors array is true, false otherwise
$success = sizeof($errors) == 0;
