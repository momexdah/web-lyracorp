<?php
class Database{
    public static function connect(){
        $db = new mysqli('localhost','root','123456','bdlyracorp');
        $db->query("SET NAMES 'utf-8'");
        return $db;
    }
}