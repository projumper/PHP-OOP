<?php
include_once("Mysql.php");
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




$mysqli = new Mysql();
$exampleArray = $mysqli->select('human');

foreach ($exampleArray as $example) {
    # code...
}


var_dump($exampleArray);



/*
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
*/