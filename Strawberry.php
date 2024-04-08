<?php

include_once("Fruit.php");

class Strawberry extends Fruit
{
    function message()
    {
        echo "  i am a strawberry              ";
    }
    
}

$strwb = new Strawberry("Karlserdbeere");
echo $strwb->getName();
$strwb->message();
