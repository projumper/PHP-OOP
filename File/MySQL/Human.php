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

$name = "";
$weight = "";

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
$Linh = new Human($humanArray[4]["name"], $humanArray[4]['weight'], $humanArray[4]['age']);

var_dump($ivan);

//Update

$ivan->weight = 50;
$ivan->name   = "Linh";
$ivan->age    = 42;

//CRUD <-----


var_dump($ivan);

echo $sql = "UPDATE `human` SET `name` = '$ivan->name', `weight` = '$ivan->weight', `age` = '$ivan->age' WHERE `human`.`id` = 1;";

//$mysqli->query($sql);

//Insert Create
$sql = "INSERT INTO human (id, name, weight, age) VALUES (NULL, '$ivan->name', '$ivan->weight', '$ivan->age')";
$mysqli->query($sql);

//DELETE
$sql = "DELETE FROM human WHERE human.id = 3";
//$mysqli->query($sql);