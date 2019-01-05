<?php


class DBConnction
{

    private $host="127.0.0.1";
    private $userName="root";
    private $password="1234";
    private $database="world_wine_house";
    private $port="3306";

    private $connection;

    /**
     * DBConnction constructor.
     */
    public function __construct()
    {
     $this->connection=new mysqli($this->host,$this->userName,$this->password,$this->database,$this->port);
    }

    public function getDBConnection(){
        return $this->connection;
    }
}