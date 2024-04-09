<?php

include_once("Fruit.php");

class Apple extends Fruit{

    function message()
    {
        echo   "   i am a apple         ";

    }

}

$ap = new Apple();

$ap->message();