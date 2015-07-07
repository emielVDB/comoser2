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
        $printer = new printer\Printer();
        $printer->printIt();
    }

    function echoIt(){
        echo "hoera het werkt kerels";
    }
}