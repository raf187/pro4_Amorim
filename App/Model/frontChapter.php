<?php namespace App\Model;


class FrontChapter extends DataBase
{
    public function indexChapter()
    {
        $db = $this->connect();
        $req = $db->query("SELECT id,titre,pseudo,la_date,SUBSTRING(contenu,1,500) AS contenu FROM articles");
        return $req;
    }
    public function displayChapter($id)
    {
        $db = $this->connect();
        $reqId = $db->prepare("SELECT * FROM articles WHERE id= :id");
        $reqId->execute([':id' => $id]);
        return $reqId;
    }
    public function displayComments($id){
        $db = $this->connect();
        $reqComs = $db->prepare("SELECT * FROM comentaires WHERE id_article= :id_article ORDER BY la_date DESC");
        $reqComs->execute([':id_article' => $id]);
        return  $reqComs;
    }
    
}