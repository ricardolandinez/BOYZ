<?php

require "../resources/db/conexion.php";


abstract class Model {
    private $keys = [];
    private $values = [];
    private $data;


    public function __construct($table, $data)
    {
        $this->table = $table;
        $this->data = $data;
        if (count($data) > 0) {
            $this->keys = array_keys($data);
            $this->values = array_values($data);
        }
    }


    public function get_all() {
        global $mysqli;
        $sql = "SELECT * FROM {$this->table}";
        $result = $mysqli->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function get($id) {
        global $mysqli;
        $sql = "SELECT * FROM {$this->table} WHERE id = {$id}";
        $result = $mysqli->query($sql);
        return $result->fetch_assoc();
    }

    public function getByField($field) {
        global $mysqli;
        $sql = "SELECT * FROM {$this->table} WHERE {$field} = '{$this->data[$field]}'";
        $result = $mysqli->query($sql);
        return $result->fetch_assoc();
    }

    public function create() {
        global $mysqli;
        $sql = "INSERT INTO {$this->table} (";
        $sql .= implode(", ", $this->keys);
        $sql .= ") VALUES (";
        $sql .= "'" . implode("', '", $this->values) . "'";
        $sql .= ")";
        $result = $mysqli->query($sql);
        return $result;
    }

    public function delete($id) {
        global $mysqli;
        $sql = "DELETE FROM {$this->table} WHERE id = {$id}";
        $result = $mysqli->query($sql);
        return $result;
    }

}