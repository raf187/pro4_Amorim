<?php 
namespace App\Model;
use \PDO;


class DataBase{
    private $host;
    private $user;
    private $passW;
    private $dbName;
    private $charset;

    public function connect(){
        $this->host = 'localhost';
        $this->user = 'root';//'rafaueuu_Forteroche';
        $this->passW = '';//'s9SEhKoz4xHpGX';
        $this->dbName = 'Forteroche';//'rafaueuu_Forteroche';'root';//
        $this->charset = 'utf8';

        try {
            $dsn = "mysql:host=".$this->host.";dbname=".$this->dbName.";charset=".$this->charset;
            $db = new \PDO($dsn, $this->user, $this->passW);
            return $db;
        } 
        catch (PDOException $e) {
            die('Erreur : '.$e->getMessage());
        } 
    }

}