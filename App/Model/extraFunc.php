<?php namespace App\Model;


class ExtraFunc extends DataBase{

    private function verifyTitle(){
        $conn = $this->connect();
        $stmt = $conn->query("SELECT titre FROM articles");
        $verify = $stmt->fetch();
        return $verify;
    }



}