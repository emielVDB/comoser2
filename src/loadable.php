<?php
/**
 * Created by PhpStorm.
 * User: Emiel
 * Date: 7/07/2015
 * Time: 13:24
 */
namespace emiel;

class loadable
{


    function __construct()
    {
        require 'vendor/autoload.php';

        $printer = new emiel\printer\Printer();
        $printer->echoIt();
    }

    function echoIt(){
        echo "hoera het werkt kerels";
    }
}