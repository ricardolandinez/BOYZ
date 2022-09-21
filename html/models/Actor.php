<?php
require "../resources/db/conexion.php";
require "Model.php";

class Actor extends Model
{ 
    public $table = "personajes";
    public function __construct($data = [])
    {
        parent::__construct($this->table, $data);
    }
}
