<?php

class Model {

    public $tablename;

    function __construct() {
        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'pizza';
    }
    
    // Общая функция для подключения к базе данных
    function general($sql) {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        $string = $conn->query($sql);
        return $string;
    
        $conn->close();
    }

    // Общая функция для получения данных (Всей таблицы или конкретных данных)
    function getList($select = [], $filter = []) {
        $sql = 'SELECT ';
        if (!empty($select)) {
            $string = implode(', ', $select);
            $sql .= $string;
        }
        else {
            $sql .= '*';
        }
        $sql .= ' FROM '.$this->tablename;

        if (!empty($filter)) {
            $sql .= ' WHERE ';
            $and = 0;
            foreach ($filter as $key => $value) {
                if ($and == 0) {
                    $sql .= "$key = '$value'";
                    $and = 1;
                }
                else {
                    $sql .= " AND $key = '$value'";
                }
            }
        }
        $obj = $this->general($sql);
        $result = [];

        while ($row = $obj->fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    // Общая функция для удаления данных
    function deleteList($filter = []) {
        $sql = 'DELETE ';
        $sql .= 'FROM '.$this->tablename;

        if (!empty($filter)) {
            $sql .= ' WHERE ';
            $and = 0;
            foreach ($filter as $key => $value) {
                if ($and == 0) {
                    $sql .= "$key = '$value'";
                    $and = 1;
                }
                else {
                    $sql .= " AND $key = '$value'";
                }
            }
        }
        $this->general($sql);
    }

    // Общая функция для обновления данных
    function updateList($set = [], $filter = []) {
        $sql = 'UPDATE '.$this->tablename.' SET ';

        foreach ($set as $key => $value) {
            $sql .= "$key = '$value'";
        }

        if (!empty($filter)) {
            $sql .= ' WHERE ';
            $and = 0;
            foreach ($filter as $key => $value) {
                if ($and == 0) {
                    $sql .= "$key = '$value'";
                    $and = 1;
                }
                else {
                    $sql .= " AND $key = '$value'";
                }
            }
        }
        $this->general($sql);
    }

    // Общая функция для обновления данных
    function insertList($data = []) {
        $sql = 'INSERT INTO '.$this->tablename.' VALUES ';

        $string = implode("', '", $data);
        $sql .= "('$string')";
        $this->general($sql);
    }

    // Общая функция для получения последнего id
    function getLine() {
        $sql = "SELECT id FROM `$this->tablename` WHERE id = (SELECT max(id) FROM `$this->tablename`)";
        $string = $this->general($sql);

        $row = $string->fetch_assoc();
        if (empty($row['id'])) {
            $row['id'] = 0;
        }
        return $row['id'];
    }
    
}