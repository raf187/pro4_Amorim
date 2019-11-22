<?php

class DataBase{
    private $host;
    private $user;
    private $passW;
    private $dbName;
    private $charset;

    public function connect(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->passW = 'root';
        $this->dbName = 'Forteroche';
        $this->charset = 'utf8';

        try {
            $dsn = "mysql:host=".$this->host.";dbname=".$this->dbName.";charset=".$this->charset;
            $db = new PDO($dsn, $this->user, $this->passW);
            return $db;
        } 
        catch (PDOException $e) {
            die('Erreur : '.$e->getMessage());
        } 
    }

}