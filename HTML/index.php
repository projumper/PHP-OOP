<?php

var_dump($_GET);
var_dump($_POST);

echo $_GET['id'];
echo $_POST['id'];

$deleted = $mysqli->delete('MOCK_DATA', 'flight_number = '.$_GET['id']);