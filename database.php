<?php

class DataBase 
{
    public $link;

    function __construct()
    {
        $this->link = new mysqli("localhost", "test", "test", "future_database");
        $this->link->set_charset("utf8");
        if ($this->link->connect_errno) {
            echo "Не удалось подключиться к MySQL: (" . $this->link->connect_errno . ") " . $this->link->connect_error;
        }   
    }

    function insertComment($userName, $text) {
        $sql = "INSERT INTO comments (id, date, userName, text) VALUES (NULL, NOW(), '$userName', '$text')";
        $this->link->query($sql);
    }

    function selectLastThreeComments() 
    {
        $sql = "SELECT * FROM comments ORDER BY id DESC LIMIT 3";
        $commentsFromDB = $this->link->query($sql);
        return $commentsFromDB;
    }
}