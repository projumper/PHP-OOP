<?php

class Human
{
    public $name;
    public $weight;
    public $age;

    function __construct($name, $weight, $age)
    {
        $this->name = $name;

        $this->weight = $weight;

        $this->age = $age;
    }
}

$mysqli = new mysqli("localhost", "root", "", "OOP");

if($mysqli->connect_error){
    die("problem moit der Verbindung");
}

//SELECT column_name(s) FROM table_name
//$sql = "SELECT * FROM `human`;";

//READ
$sql = "SELECT * FROM `human`";



$res = $mysqli->query($sql);

while ($row = $res->fetch_assoc()) {
    //var_dump($row);    
    //die();
    $human = array('name'=>$row['name'], 'weight'=>$row['weight'], 'age'=>$row['age'] );
    $humanArray[] = $human;

}


$ivan = new Human($humanArray[0]["name"], $humanArray[0]['weight'], $humanArray[0]['age']);

var_dump($ivan);

$ivan->weight = 87;

//CRUD <-----


var_dump($ivan);