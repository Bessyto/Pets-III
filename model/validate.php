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
