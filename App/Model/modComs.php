<?php namespace App\Model;
use App\Controller\BackController;

class ModComs extends DataBase{
    
    public function getComs(){
        $db = $this->connect();
        $req = $db->query("SELECT * FROM comentaires WHERE signale = 1 ORDER BY id_article");
        return $req;
    }

}