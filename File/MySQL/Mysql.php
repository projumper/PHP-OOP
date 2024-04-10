<?php

class Mysql
{
    public $mysqli;

    function __construct(){

        //Connection DB

        $this->mysqli = new mysqli("localhost", "root", "", "OOP");

        if($this->mysqli->connect_error){
            die("Connection Error");
        }
    }

    //Create ($data)
    //Read ($where)
    /**
     * select * from flight_logs;
     * select * from flight_logs where aircraft_type='airbus'
     * select * from flight_logs where aircraft_type='airbus' and airline_name='Lufthansa'
     * 
     * select * from $table where $where
     * 
     */

     function select ($table, $where=''){

        if($where != '')
        {
            echo $sql = "SELECT * FROM ".$table." ".$where;
        }else{
            echo $sql = "SELECT * FROM ".$table;
        }

        $res = $this->mysqli->query($sql);

        while ($row = $res->fetch_assoc()) {
           
            $dataArray[] = $row;
        }

        return $dataArray;
     }

    //Update ($data, $where)
    //Delete ($where)


}